<button class="mobile-menu-btn" id="mobile-menu-btn">☰</button>
<div class="mobile-menu-overlay" id="menu-overlay"></div>

<aside class="sidebar" id="sidebar">
  <div class="sidebar-header">
    <div class="logo">𝓒𝓾𝓵𝓽𝓲𝓿𝓪𝓽𝓮</div>
    <div class="logo-sub">ドキュメント</div>
  </div>
  <nav class="sidebar-nav">
    <div class="nav-section">はじめに</div>
    <a href="<?= $ROOT ?? '.' ?>/"><span class="nav-icon">🏠</span>トップ</a>
    <a href="<?= $ROOT ?? '.' ?>/getting-started"><span class="nav-icon">🚀</span>導入方法</a>
    <a href="<?= $ROOT ?? '.' ?>/commands"><span class="nav-icon">📜</span>コマンド一覧</a>
    <a href="<?= $ROOT ?? '.' ?>/faq"><span class="nav-icon">❓</span>FAQ</a>
    <a href="<?= $ROOT ?? '.' ?>/server-spec"><span class="nav-icon">🖥️</span>サーバースペック</a>

    <div class="nav-section">運営系機能</div>
    <!-- <a href="<?= $ROOT ?? '.' ?>/features/role-panel"><span class="nav-icon">👤</span>役職パネル</a> -->
    <a href="<?= $ROOT ?? '.' ?>/features/settings"><span class="nav-icon">⚙️</span>設定パネル</a>
    <a href="<?= $ROOT ?? '.' ?>/features/welcome-message"><span class="nav-icon">👋</span>ウェルカムメッセージ</a>
    <a href="<?= $ROOT ?? '.' ?>/features/boost-message"><span class="nav-icon">🚀</span>ブーストメッセージ</a>
    <a href="<?= $ROOT ?? '.' ?>/features/bump-notice"><span class="nav-icon">🔔</span>BUMP通知</a>
    <a href="<?= $ROOT ?? '.' ?>/features/sticky"><span class="nav-icon">📌</span>吊下げメッセージ</a>
    <a href="<?= $ROOT ?? '.' ?>/features/category-name"><span class="nav-icon">📂</span>カテゴリ名設定</a>
    <a href="<?= $ROOT ?? '.' ?>/features/role-check"><span class="nav-icon">🛂</span>必須ロール確認</a>
    <a href="<?= $ROOT ?? '.' ?>/features/dm-friend-certification"><span class="nav-icon">🤝</span>DM/フレンド許可取り</a>
    <a href="<?= $ROOT ?? '.' ?>/features/author-settings"><span class="nav-icon">👤</span>投稿者設定</a>
    <!-- <a href="<?= $ROOT ?? '.' ?>/features/ch-role"><span class="nav-icon">📝</span>自動ロール付与</a> -->
    <a href="<?= $ROOT ?? '.' ?>/features/auto-reaction"><span class="nav-icon">😊</span>自動リアクション</a>
    <a href="<?= $ROOT ?? '.' ?>/features/category-sync"><span class="nav-icon">📋</span>カテゴリ権限同期</a>
    <a href="<?= $ROOT ?? '.' ?>/features/template-channel"><span class="nav-icon">📂</span>テンプレチャンネル設定</a>
    <a href="<?= $ROOT ?? '.' ?>/features/period-message"><span class="nav-icon">⏰</span>定期メッセージ</a>
    <a href="<?= $ROOT ?? '.' ?>/features/delien-calendar"><span class="nav-icon">📅</span>でりえんカレンダー</a>

    <div class="nav-section">VC系機能</div>
    <a href="<?= $ROOT ?? '.' ?>/features/back-2shot"><span class="nav-icon">🔒</span>裏2shot</a>
    <a href="<?= $ROOT ?? '.' ?>/features/sleep"><span class="nav-icon">💤</span>寝落ち送り</a>
    <a href="<?= $ROOT ?? '.' ?>/features/vc-control"><span class="nav-icon">🎤</span>VC制御</a>
    <a href="<?= $ROOT ?? '.' ?>/features/vc-counter"><span class="nav-icon">📊</span>VCカウンター</a>
    <a href="<?= $ROOT ?? '.' ?>/features/inchat-clean"><span class="nav-icon">🧹</span>インチャ掃除</a>

    <div class="nav-section">ユーザー機能</div>
    <a href="<?= $ROOT ?? '.' ?>/features/profile"><span class="nav-icon">🖼️</span>プロフィール(v1)</a>
    <a href="<?= $ROOT ?? '.' ?>/features/profile-v2"><span class="nav-icon">🆕</span>プロフィール v2</a>
    <a href="<?= $ROOT ?? '.' ?>/features/profile-judging"><span class="nav-icon">🧑‍⚖️</span>プロフ審査</a>
    <a href="<?= $ROOT ?? '.' ?>/features/profile-template-check"><span class="nav-icon">📝</span>プロフテンプレ</a>
    <a href="<?= $ROOT ?? '.' ?>/features/reaction"><span class="nav-icon">❤️</span>プロフリアクション</a>
    <a href="<?= $ROOT ?? '.' ?>/features/rank"><span class="nav-icon">🏆</span>ランクシステム</a>
    <a href="<?= $ROOT ?? '.' ?>/features/schedule-message"><span class="nav-icon">📅</span>予約投稿</a>
    <a href="<?= $ROOT ?? '.' ?>/features/self-message-delete"><span class="nav-icon">🗑️</span>自己メッセージ削除</a>

    <div class="nav-section">🎲 ゲーム・ユーティリティ</div>
    <a href="<?= $ROOT ?? '.' ?>/features/king-game"><span class="nav-icon">👑</span>王様ゲーム</a>
    <a href="<?= $ROOT ?? '.' ?>/features/spectate-panel"><span class="nav-icon">👀</span>見学パネル</a>
    <a href="<?= $ROOT ?? '.' ?>/features/timer"><span class="nav-icon">⏰</span>タイマー</a>
    <a href="<?= $ROOT ?? '.' ?>/features/dice"><span class="nav-icon">🎲</span>ダイス</a>

    <div class="nav-section">その他</div>
    <a href="<?= $ROOT ?? '.' ?>/updates"><span class="nav-icon">📋</span>更新履歴</a>
    <a href="<?= $ROOT ?? '.' ?>/known-issues"><span class="nav-icon">⚠️</span>既知の不具合</a>
    <a href="<?= $ROOT ?? '.' ?>/features/spoiler-check"><span class="nav-icon">🔞</span>スポイラー判定</a>
    <a href="<?= $ROOT ?? '.' ?>/features/command-prefix"><span class="nav-icon">⌨️</span>接頭辞変更</a>
    <!-- <a href="<?= $ROOT ?? '.' ?>/features/analytics"><span class="nav-icon">📊</span>アナリティクス</a> -->
    <a href="<?= $ROOT ?? '.' ?>/features/mbti"><span class="nav-icon">🧠</span>MBTI機能</a>
    <!-- <a href="<?= $ROOT ?? '.' ?>/features/character"><span class="nav-icon">🎭</span>キャラクター設定</a> -->
  </nav>
</aside>
