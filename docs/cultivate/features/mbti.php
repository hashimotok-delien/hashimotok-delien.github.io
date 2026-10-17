<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MBTI機能 - Cultivate ドキュメント</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css?v=<?= @filemtime(__DIR__ . '/../css/style.css') ?: time() ?>">
</head>
<body>
  <?php $ROOT = '..'; $PAGE_TITLE = 'MBTI機能'; ?>
  <?php include __DIR__ . '/../include/sidebar.php'; ?>

  <main class="main-content">
    <?php include __DIR__ . '/../include/topbar.php'; ?>

    <div class="content">
      <div class="feature-hero">
        <div class="feature-icon">🧠</div>
        <h1>MBTI機能</h1>
        <p>MBTI診断や新規開拓VCでコミュニティを活性化</p>
      </div>

      <h2>概要</h2>
      <p>
        MBTI機能は、MBTI（ Myers-Briggs Type Indicator ）に基づいた診断パネルや
        新規開拓 VC パネルを設置できる機能です。コミュニティ内の交流促進に役立ちます。
      </p>

      <h2>コマンド</h2>

      <h3>MBTI新規開拓パネル設置</h3>
      <pre><code>/mbti新規開拓パネル設置</code></pre>
      <p>
        MBTI 新規開拓用の VC パネルを設置します。特定サーバー限定で利用できます。
      </p>

      <h3>MBTI診断パネル設置</h3>
      <pre><code>/mbti診断パネル設置</code></pre>
      <p>
        MBTI 診断パネルを設置します。診断ボタン（全員 / 異性 / 同性）が付属し、
        ユーザーは自分の MBTI を診断・登録できます。
      </p>

      <div class="alert alert-info">
        <p><strong>💡 情報:</strong> MBTI 機能は特定のサーバー向けに開発されています。</p>
      </div>

      <?php include __DIR__ . '/../include/footer.php'; ?>
    </div>
  </main>
  <script src="../js/main.js?v=<?= @filemtime(__DIR__ . '/../js/main.js') ?: time() ?>"></script>
</body>
</html>
