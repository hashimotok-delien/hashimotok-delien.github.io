<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>カテゴリ権限同期 - Cultivate ドキュメント</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css?v=<?= @filemtime(__DIR__ . '/../css/style.css') ?: time() ?>">
</head>
<body>
  <?php $ROOT = '..'; $PAGE_TITLE = 'カテゴリ権限同期'; ?>
  <?php include __DIR__ . '/../include/sidebar.php'; ?>

  <main class="main-content">
    <?php include __DIR__ . '/../include/topbar.php'; ?>

    <div class="content">
      <div class="feature-hero">
        <div class="feature-icon">📋</div>
        <h1>カテゴリ権限同期</h1>
        <p>カテゴリの権限設定を別のカテゴリにコピー</p>
      </div>

      <h2>概要</h2>
      <p>
        カテゴリ権限同期機能は、あるカテゴリに設定されている権限を別のカテゴリにコピー（上書き）する機能です。
        複数のカテゴリで同じ権限構成を維持したい場合に便利です。
      </p>

      <h2>コマンド</h2>
      <pre><code>/カテゴリ権限コピー</code></pre>

      <p>
        コマンドを実行すると、権限のコピー元とコピー先のカテゴリを選択するインターフェースが表示されます。
        コピー元のカテゴリに設定されている全てのロール権限が、コピー先のカテゴリに上書き適用されます。
      </p>

      <div class="alert alert-info">
        <p><strong>💡 活用例:</strong> イベント用に複数のカテゴリを作成する際、ベースとなるカテゴリの権限設定を一括でコピーできます。</p>
      </div>

      <div class="alert alert-warning">
        <p><strong>⚠️ 注意:</strong> このコマンドは <strong>上書き</strong> 動作です。コピー先のカテゴリに既存の権限設定がある場合、それらは上書きされます。元に戻せないため、実行前にご確認ください。</p>
      </div>

      <?php include __DIR__ . '/../include/footer.php'; ?>
    </div>
  </main>
  <script src="../js/main.js?v=<?= @filemtime(__DIR__ . '/../js/main.js') ?: time() ?>"></script>
</body>
</html>
