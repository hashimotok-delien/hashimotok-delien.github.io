<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VC接続時権限自動追加 - まごの手 ドキュメント</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css?v=<?= @filemtime(__DIR__ . '/../css/style.css') ?: time() ?>">
</head>
<body>
  <?php $ROOT = '..'; $PAGE_TITLE = 'VC接続時権限自動追加'; ?>
  <?php include __DIR__ . '/../include/sidebar.php'; ?>

  <main class="main-content">
    <?php include __DIR__ . '/../include/topbar.php'; ?>

    <div class="content">
      <div class="feature-hero">
        <div class="feature-icon">🔑</div>
        <h1>VC接続時権限自動追加</h1>
        <p>VC 参加時に自動で権限を付与</p>
      </div>

      <h2>概要</h2>
      <p>
        VC接続時権限自動追加機能は、メンバーが VC に参加したときに、
        自動的にその VC の管理権限（connect, view_channel, manage_channels,
        speak, send_messages）を付与する機能です。
        これにより、VC を作成したメンバーがルームの管理をしやすくなります。
      </p>

      <h2>設定</h2>
      <p>
        <code>config.yml</code> の <code>vc_connect_auto_permission</code> セクションで設定します。
      </p>

      <pre><code>vc_connect_auto_permission:
  サーバーID:
    カテゴリID:
      disable_vc:
        - 除外するVCチャンネルID</code></pre>

      <table>
        <thead>
          <tr>
            <th>項目</th>
            <th>説明</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>サーバーID</code></td>
            <td>サーバーID</td>
          </tr>
          <tr>
            <td><code>カテゴリID</code></td>
            <td>対象とするカテゴリID</td>
          </tr>
          <tr>
            <td><code>disable_vc</code></td>
            <td>権限自動追加を除外するVCチャンネルIDのリスト</td>
          </tr>
        </tbody>
      </table>

      <div class="alert alert-info">
        <p><strong>💡 ヒント:</strong> 特定のVC（例: 待機所など）では権限自動追加を無効にしたい場合、<code>disable_vc</code> リストにそのVCのIDを追加してください。</p>
      </div>

      <?php include __DIR__ . '/../include/footer.php'; ?>
    </div>
  </main>

  <script src="../js/main.js?v=<?= @filemtime(__DIR__ . '/../js/main.js') ?: time() ?>"></script>
</body>
</html>
