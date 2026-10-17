<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>決済がキャンセルされました - Cultivate Premium</title>
  <meta name="robots" content="noindex">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css?v=<?= @filemtime(__DIR__ . '/css/style.css') ?: time() ?>">
</head>
<body>

  <?php $BASE = '..'; $LOGO_LABEL = 'Premium'; $SHOW_TERMS = true; ?>
  <?php include __DIR__ . '/../include/header.php'; ?>

  <main>
    <section class="result-hero">
      <div class="result-icon">😌</div>
      <h1>決済がキャンセルされました</h1>
      <p>お支払い手続きが完了しなかったため、契約は成立していません。</p>
      <p>
        気が変わった場合は、いつでも Discord の <code>/プレミアム管理</code>
        から契約をやり直せます。
      </p>

      <div class="result-actions">
        <a class="btn" href="./">プラン一覧に戻る</a>
        <a class="btn btn-outline" href="https://discord.gg/AmMkFhhD2D" target="_blank">サポートサーバー</a>
      </div>
    </section>

    <section class="section">
      <div class="alert alert-warning">
        <p>
          <strong>⚠️ 注意:</strong> 支払い中にエラーが発生した場合や、
          決済済みなのに契約が反映されない場合は、
          <a href="https://discord.gg/AmMkFhhD2D" target="_blank">サポートサーバー</a>
          までお問い合わせください。
        </p>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/../include/footer.php'; ?>

</body>
</html>
