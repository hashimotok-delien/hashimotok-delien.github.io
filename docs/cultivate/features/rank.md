# ランクシステム 仕様書

## 1. サーバー背景設定機能（2026/08/13 検討中）

### 1.1 方針

- 保存方式: Discordメッセージ添付（投稿者設定 `authors_cog` 方式を踏襲）
  - 画像はDiscordの添付メッセージとして保存し、
    `guild_id / channel_id / message_id` のみDBに永続化
  - 参照時に `fetch_message` → 有効期限付きCDN URLを取得
- 適用範囲: まず**ランクカードのみ**。
  将来ウェルカムカード・ブーストカードへ拡張（共通基盤として設計）
- プレミアム連携: 3段階（下記 1.7）
- 添付メッセージは**解除時に削除しない**（投稿者設定と同運用）

### 1.2 保存・取得フロー

```
[設定時]
  画像アップロード（FileInput / URL）
  → バリデーション（形式・サイズ・寸法）
  → 保存先チャンネル解決（base_setting_cog連携・個別キー）
  → storage_ch.send(file=...) で添付メッセージ保存
  → DBに {guild_id, channel_id, message_id, メタ情報} 保存
  → メモリキャッシュ更新（即プレビュー可能）

[参照時]（ランクカード生成）
  メモリキャッシュ確認 → あれば即使用（HTTP通信なし）
  → なければ DB から channel_id/message_id 取得
  → fetch_message → attachments[0].url 取得 → ダウンロード
  → 正規化（リサイズ）→ メモリキャッシュに保存
  → 取得失敗時はデフォルト背景へフォールバック＋ログ
```

- CDN URLは有効期限付きのため**DBには保存しない**。
  常に `channel_id / message_id` から再解決する
- 設定・解除操作時はキャッシュを直接更新するため、
  通常の参照では再フェッチ不要

### 1.3 データ設計

**新テーブル `server_backgrounds`（ギルド共通背景・無料）**

```sql
CREATE TABLE IF NOT EXISTS server_backgrounds (
    guild_id    BIGINT NOT NULL,
    channel_id  BIGINT NOT NULL,   -- 保存先チャンネルID
    message_id  BIGINT NOT NULL,   -- 添付メッセージID
    file_name   VARCHAR(255) NOT NULL,  -- 元ファイル名（表示用）
    width       INT NOT NULL DEFAULT 0,
    height      INT NOT NULL DEFAULT 0,
    file_size   INT NOT NULL DEFAULT 0,
    updated_at  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
                ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (guild_id)
)
```

**プリセット専用背景（プレミアム）: ランクプリセット `extra_config` に追加**

```python
"rank_card_bg_mode": "default",        # "default" | "server" | "preset"
"rank_card_bg_channel_id": None,       # プリセット専用背景の保存先
"rank_card_bg_message_id": None,       # プリセット専用背景の添付メッセージ
```

### 1.4 メモリキャッシュ

| 項目 | 内容 |
|---|---|
| 形式 | **JPEGバイト列（quality=90）** に正規化して保持 ※要確認 |
| 正規化サイズ | 1100×420 にリサイズ済み |
| 上限 | **無制限**（要望）※JPEG形式なら1枚100〜300KB |
| 鮮度 | DB `updated_at` とキャッシュ保持時刻を比較 |
| 破棄 | 設定・解除操作時 / プロセス終了時のみ |
| 起動時 | 一括取得しない（初回参照時に遅延取得） |

- デコードはPILで数ミリ秒のため、生成毎にデコードしても実用上問題なし
- 将来RAMが逼迫した場合に備え、破棄ロジックは組み込みやすい構造にする

### 1.5 リサイズ方式

**モードA: cover（中央クロップ）をデフォルトとする** ※検討中

| モード | 動作 | 備考 |
|---|---|---|
| A. cover固定 | 中央クロップで1100×420 | デフォルト。歪まない |
| B. 縦横比自動 | 横長→cover / 縦長→暗転＋情報エリア / 正方形→cover | 追加候補 |
| C. contain＋ぼかし | 全体収容＋余白を拡大ぼかし | 追加候補 |

- 実装はまずA、B/Cは「背景表示モード」設定として後から追加

### 1.6 バリデーション

| 項目 | 内容 |
|---|---|
| 形式 | PNG / JPEG / WebP（`Image.open` で開けるもの） |
| サイズ | 8MB以下 |
| 寸法 | 最小 550×210。未満はエラー |
| アニメ | GIF/APNG は先頭フレームのみ使用 |
| 正規化 | 設定時に `Image.open` で開けることを確認（破損対策） |

### 1.7 プレミアム連携

| 背景 | 対象 | 料金 |
|---|---|---|
| ① 運営が用意した背景（デフォルト） | 全サーバー | 無料 |
| ② サーバー共通背景（`server_backgrounds`） | 全サーバー | 無料 |
| ③ プリセット専用背景（`extra_config`） | ランクプリセット | **プレミアム限定** |

- 判定は既存 `_guild_is_premium(guild_id)` を流用
- 無料サーバーが③を選ぼうとしたら「プレミアム限定機能です」と案内

### 1.8 UI（Component v2）

**`/サーバー背景` パネル（管理者限定・ephemeral）— `server_background_cog`**

- Embed: 現在の背景プレビュー（添付）＋設定状態
- 📤 背景を設定 → Modal（FileInput＋URL入力併用）
- 🖼 プレビュー拡大
- 🗑 背景を解除 → DB DELETE＋キャッシュ削除（Discord添付は残す）
- 🔧 保存先チャンネル変更 → `base_setting_cog` に誘導

**ランクカード設定内（`rank_cog` 既存パネル）**

- 背景モード Select: 🎴 デフォルト（無料）/ 🖼 サーバー背景（無料）
  / 🎨 プリセット専用（プレミアム）
- ③選択時のみ Modal でアップロードUI表示

### 1.9 実装ファイル

| ファイル | 変更 | 内容 |
|---|---|---|
| `utils/system_cogs/server_background_cog.py` | **新規** | テーブル・保存・取得・キャッシュ管理・`/サーバー背景`パネル・`get_guild_background()`公開API |
| `utils/system_cogs/rank_cog.py` | 変更 | `extra_config` にキー追加、`generate_rank_card` の背景ロード差し替え、カード設定パネルに背景モードUI追加 |
| `utils/system_cogs/base_setting_cog.py` | 変更 | `STORAGE_KEY_BACKGROUND_CHANNEL` 追加 |

- `server_background_cog` への依存は try/except オプショナル
  （`premium_cog` と同方式）。未ロード環境では従来通り動作

## 2. 未確定事項

- [ ] キャッシュ形式（JPEGバイト列を推奨）
- [ ] リサイズモード（A. cover固定 or B. 縦横比自動 or C. contain＋ぼかし）
