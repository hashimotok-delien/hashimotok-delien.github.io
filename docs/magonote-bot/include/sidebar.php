<button class="mobile-menu-btn" id="mobile-menu-btn">☰</button>
<div class="mobile-menu-overlay" id="menu-overlay"></div>

<aside class="sidebar" id="sidebar">
  <div class="sidebar-header">
    <div class="logo">🖐️ まごの手</div>
    <div class="logo-sub">Magonote Bot ドキュメント</div>
  </div>
  <nav class="sidebar-nav">
    <div class="nav-section">はじめに</div>
    <a href="<?= $ROOT ?? '.' ?>/"><span class="nav-icon">🏠</span>トップ</a>
    <a href="<?= $ROOT ?? '.' ?>/getting-started"><span class="nav-icon">🚀</span>導入方法</a>
    <a href="<?= $ROOT ?? '.' ?>/commands"><span class="nav-icon">📜</span>コマンド一覧</a>
    <a href="<?= $ROOT ?? '.' ?>/faq"><span class="nav-icon">❓</span>FAQ</a>

    <div class="nav-section">VC系機能</div>
    <a href="<?= $ROOT ?? '.' ?>/features/nagara"><span class="nav-icon">🏷️</span>ながらバッチ</a>
    <a href="<?= $ROOT ?? '.' ?>/features/full-room"><span class="nav-icon">🈵</span>満室機能</a>
    <a href="<?= $ROOT ?? '.' ?>/features/knock-panel"><span class="nav-icon">🚪</span>ノックパネル</a>
    <a href="<?= $ROOT ?? '.' ?>/features/vc-edit-panel"><span class="nav-icon">🎛️</span>VC操作パネル</a>
    <a href="<?= $ROOT ?? '.' ?>/features/vc-auto-permission"><span class="nav-icon">🔑</span>VC接続時権限自動追加</a>
    <a href="<?= $ROOT ?? '.' ?>/features/vc-start-notice"><span class="nav-icon">📢</span>VC開始通知</a>
    <a href="<?= $ROOT ?? '.' ?>/features/vc-permission"><span class="nav-icon">🕐</span>VC権限昼夜切替</a>
    <a href="<?= $ROOT ?? '.' ?>/features/vc-region-change"><span class="nav-icon">🌐</span>定期VCリージョン変更</a>

    <div class="nav-section">ロール管理</div>
    <a href="<?= $ROOT ?? '.' ?>/features/role-check"><span class="nav-icon">✅</span>取得ロール確認</a>
    <a href="<?= $ROOT ?? '.' ?>/features/role-filter"><span class="nav-icon">🔍</span>ロールフィルター</a>
    <a href="<?= $ROOT ?? '.' ?>/features/channel-reaction-role"><span class="nav-icon">👍</span>chリアクションロール</a>
    <a href="<?= $ROOT ?? '.' ?>/features/keyword-role"><span class="nav-icon">⌨️</span>キーワードロール</a>
    <a href="<?= $ROOT ?? '.' ?>/features/role-mention"><span class="nav-icon">🔔</span>ロールメンション切替</a>
    <a href="<?= $ROOT ?? '.' ?>/features/role-member"><span class="nav-icon">👥</span>ロールメンバー検索</a>

    <div class="nav-section">メッセージ管理</div>
    <a href="<?= $ROOT ?? '.' ?>/features/auto-reaction"><span class="nav-icon">😊</span>自動リアクション</a>
    <a href="<?= $ROOT ?? '.' ?>/features/reaction-measure"><span class="nav-icon">📊</span>リアクション計測</a>
    <a href="<?= $ROOT ?? '.' ?>/features/random-message"><span class="nav-icon">🎲</span>ランダム転載</a>
    <a href="<?= $ROOT ?? '.' ?>/features/purge"><span class="nav-icon">🗑️</span>メッセージ一括削除</a>
    <a href="<?= $ROOT ?? '.' ?>/features/auto-channel-message"><span class="nav-icon">🤖</span>自動チャンネルメッセージ</a>

    <div class="nav-section">管理機能</div>
    <a href="<?= $ROOT ?? '.' ?>/features/category-member"><span class="nav-icon">📂</span>カテゴリメンバー管理</a>
    <a href="<?= $ROOT ?? '.' ?>/features/auto-kick"><span class="nav-icon">👢</span>自動キック</a>
    <a href="<?= $ROOT ?? '.' ?>/features/thread-management"><span class="nav-icon">🧵</span>スレッド管理</a>
    <a href="<?= $ROOT ?? '.' ?>/features/template-menu"><span class="nav-icon">📋</span>定型文テンプレート</a>
    <a href="<?= $ROOT ?? '.' ?>/features/bot-monitor"><span class="nav-icon">📡</span>Bot監視設定</a>
  </nav>
</aside>
