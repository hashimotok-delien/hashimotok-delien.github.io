<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ランダム転載 - まごの手 ドキュメント</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css?v=<?= @filemtime(__DIR__ . '/../css/style.css') ?: time() ?>">
</head>
<body>
  <?php $ROOT = '..'; $PAGE_TITLE = 'ランダム転載'; ?>
  <?php include __DIR__ . '/../include/sidebar.php'; ?>

  <main class="main-content">
    <?php include __DIR__ . '/../include/topbar.php'; ?>

    <div class="content">
      <div class="feature-hero">
        <div class="feature-icon">🎲</div>
        <h1>ランダム転載</h1>
        <p>過去のメッセージをランダムに掘り起こし</p>
      </div>

      <h2>概要</h2>
      <p>
        ランダム転載機能は、指定したチャンネルからランダムにメッセージを選び、
        現在のチャンネルに転載表示する機能です。過去の面白い会話や有益な情報を
        再発見するのに役立ちます。
      </p>

      <h2>設定</h2>
      <p>
        <code>config.yml</code> の <code>random_msg</code> セクションで、
        ランダム転載の対象チャンネルを設定します。
      </p>

      <pre><code>random_msg:
  0:
    channel: チャンネルID
    mask_id: []</code></pre>

      <h2>使い方</h2>
      <p>
        <code>/ランダム</code> コマンドを実行し、対象チャンネルを選択します。
        設定ファイルで指定したチャンネルのみが選択肢に表示されます。
      </p>

      <div class="alert alert-info">
        <p><strong>💡 ヒント:</strong> 転載されるメッセージには元のメッセージへのジャンプリンクが付与されます。</p>
      </div>

      <?php include __DIR__ . '/../include/footer.php'; ?>
    </div>
  </main>

  <script src="../js/main.js?v=<?= @filemtime(__DIR__ . '/../js/main.js') ?: time() ?>"></script>
</body>
</html>
