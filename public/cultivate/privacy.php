<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>プライバシーポリシー - Cultivate</title>
  <meta name="description" content="Discord Bot「Cultivate」のプライバシーポリシーです。取得する情報・利用目的・第三者提供について定めています。">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- テーマはプランページと共通のスタイルを流用 -->
  <link rel="stylesheet" href="plans/css/style.css?v=<?= @filemtime(__DIR__ . '/plans/css/style.css') ?: time() ?>">
  <style>
    .legal {
      max-width: 860px;
      margin: 0 auto;
      padding: 48px 24px 24px;
    }

    .legal-meta {
      font-size: 0.85rem;
      color: var(--text-muted);
      margin-bottom: 8px;
    }

    .legal-nav {
      background: var(--bg-card);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 20px 24px;
      margin: 28px 0 40px;
    }

    .legal-nav-title {
      font-size: 0.9rem;
      font-weight: 600;
      color: var(--accent);
      margin-bottom: 10px;
    }

    .legal-nav ol {
      list-style: none;
      padding: 0;
      margin: 0;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 4px 24px;
    }

    .legal-nav a {
      font-size: 0.88rem;
      color: var(--text-secondary);
    }
    .legal-nav a:hover { color: var(--accent); }

    .legal-section {
      margin-bottom: 40px;
      scroll-margin-top: 90px;
    }

    .legal-section h2 {
      font-size: 1.25rem;
      margin-bottom: 14px;
    }

    .legal-section h3 {
      margin: 20px 0 8px;
      color: var(--text-primary);
    }

    .legal-section p { margin-bottom: 12px; }

    .legal-section ul,
    .legal-section ol.legal-list {
      margin: 0 0 12px;
      padding-left: 24px;
      color: var(--text-secondary);
    }

    .legal-section li { margin-bottom: 6px; }

    .legal-section ol.legal-list {
      list-style: decimal;
    }

    .legal-section ol.legal-list > li::marker {
      color: var(--accent);
      font-weight: 600;
    }

    .legal-section ul > li::marker {
      color: var(--accent);
    }

    @media (max-width: 720px) {
      .legal { padding: 32px 16px 16px; }
    }
  </style>
</head>
<body>

  <header class="site-header">
    <div class="header-inner">
      <a class="logo" href="https://hmk.delien.xyz/cultivate/">🌱 Cultivate <span>Bot</span></a>
      <nav class="header-nav">
        <!-- <a href="plans/index.php">プラン</a> -->
        <a href="https://hmk.delien.xyz/docs/cultivate/">ドキュメント</a>
        <a href="https://discord.gg/AmMkFhhD2D">サポートサーバー</a>
      </nav>
    </div>
  </header>

  <main>
    <div class="legal">
      <h1>プライバシーポリシー</h1>
      <p class="legal-meta">制定日：2026年10月13日／最終改定日：2026年10月13日</p>
      <p>
        本プライバシーポリシー（以下「本ポリシー」といいます）は、
        Cultivate 運営（以下「運営」といいます）が提供する Discord Bot
        「Cultivate」（以下「本Bot」といいます）および本Botに付随する
        ウェブサイト・サービス（以下、本Botとあわせて「本サービス」と
        いいます）における、利用者に関する情報の取扱いを定めるものです。
      </p>
      <p>
        本ポリシーは、
        <a href="terms.php">利用規約</a>
        第8条（データの取扱い）に基づく個別規定として定めるものです。
        本ポリシーと利用規約の内容が異なる場合、利用者情報の取扱いについては
        本ポリシーの定めが優先して適用されます。
        本サービスを利用するすべての利用者（以下「利用者」といいます）は、
        本ポリシーに同意したものとみなします。
      </p>

      <nav class="legal-nav" aria-label="目次">
        <div class="legal-nav-title">目次</div>
        <ol>
          <li><a href="#art1">第1条（取得する情報）</a></li>
          <li><a href="#art2">第2条（取得の方法）</a></li>
          <li><a href="#art3">第3条（利用目的）</a></li>
          <li><a href="#art4">第4条（第三者提供・外部サービスの利用）</a></li>
          <li><a href="#art5">第5条（決済情報の取扱い）</a></li>
          <li><a href="#art6">第6条（保存期間および削除）</a></li>
          <li><a href="#art7">第7条（安全管理）</a></li>
          <li><a href="#art8">第8条（開示・訂正・削除等の請求）</a></li>
          <li><a href="#art9">第9条（Cookie 等について）</a></li>
          <li><a href="#art10">第10条（未成年者のプライバシー）</a></li>
          <li><a href="#art11">第11条（本ポリシーの変更）</a></li>
          <li><a href="#art12">第12条（お問い合わせ）</a></li>
        </ol>
      </nav>

      <!-- ===== 第1条 ===== -->
      <section class="legal-section" id="art1">
        <h2>第1条（取得する情報）</h2>
        <p>運営は、本サービスの提供に必要な範囲で、
          次の情報を取得・保存します。</p>
        <ol class="legal-list">
          <li><strong>Discord 上の識別情報</strong>
            <ul>
              <li>ユーザーID、サーバー（ギルド）ID、チャンネルID、
                スレッドID、ロールID、メッセージID</li>
              <li>表示名・ユーザー名・アバター画像URL
                （プロフィール機能や投稿者プリセット等で
                設定・表示した場合に限ります）</li>
            </ul>
          </li>
          <li><strong>利用者が本Botに保存を指示したコンテンツ</strong>
            <ul>
              <li>吊下げ（スティッキー）メッセージの本文・埋め込み情報</li>
              <li>プロフィール情報（自己紹介・MBTI・画像URL等）、
                プロフィールに紐づくメッセージの情報</li>
              <li>投稿者プリセット、テンプレート、募集文、
                チケットの内容、各種設定値・プリセット</li>
            </ul>
          </li>
          <li><strong>利用状況に関する情報</strong>
            <ul>
              <li>スタンプ数・レベル・ランク、各種カウント</li>
              <li>ボイスチャンネルの参加・退出・移動等の状態
                （VC 管理・アナリティクス機能）</li>
              <li>メッセージ数・リアクションや絵文字の利用状況等の
                集計情報（アナリティクス機能）</li>
            </ul>
          </li>
          <li><strong>プレミアムサービスに関する情報</strong>
            <ul>
              <li>Discord ユーザーID、プラン種別、契約状態、
                契約日・有効期限</li>
              <li>Stripe の顧客ID・サブスクリプションID</li>
            </ul>
          </li>
          <li><strong>運用に関する情報</strong>
            <ul>
              <li>導入サーバー数、応答速度、エラーログ、
                リソース使用状況等の稼働情報</li>
            </ul>
          </li>
        </ol>
      </section>

      <!-- ===== 第2条 ===== -->
      <section class="legal-section" id="art2">
        <h2>第2条（取得の方法）</h2>
        <ol class="legal-list">
          <li>運営は、利用者が本Botを導入したサーバーにおいて、
            Discord API を通じて前条各号の情報を取得します。</li>
          <li>メッセージの内容等は、本Botの機能が動作するために
            必要な範囲で取り扱います。
            すべてのメッセージを常時保存するものではありません。</li>
          <li>一部の情報は、利用者が設定コマンドやモーダル等を通じて
            入力した場合に限り取得します。</li>
        </ol>
      </section>

      <!-- ===== 第3条 ===== -->
      <section class="legal-section" id="art3">
        <h2>第3条（利用目的）</h2>
        <p>運営は、取得した情報を次の目的で利用します。</p>
        <ol class="legal-list">
          <li>本サービスの各機能の提供、および設定の保存・復元</li>
          <li>プレミアムサービスの有効化および契約状態の確認</li>
          <li>お問い合わせ・不具合対応その他のサポート対応</li>
          <li>利用状況の把握・統計および本サービスの改善</li>
          <li>本規約に違反する行為や不正利用の防止・対応</li>
          <li>その他、前各号に付随する目的</li>
        </ol>
      </section>

      <!-- ===== 第4条 ===== -->
      <section class="legal-section" id="art4">
        <h2>第4条（第三者提供・外部サービスの利用）</h2>
        <ol class="legal-list">
          <li>運営は、法令に基づく場合または利用者の同意がある場合を
            除き、取得した情報を第三者に提供しません。</li>
          <li>本サービスの提供のため、次の外部サービスを利用します。
            各サービスにおける情報の取扱いは、それぞれの提供者の
            プライバシーポリシーに従います。
            <ul>
              <li><strong>Discord Inc.</strong>
                — 本Botの動作およびメッセージの送受信に不可欠です。</li>
              <li><strong>Stripe, Inc.</strong>
                — プレミアムサービスの決済処理を行います。</li>
              <li><strong>DeLien Calendar</strong>
                — 予定通知の連携機能を利用する場合に限り、
                サーバーID・チャンネルID・連携用トークン等を
                送信します。</li>
              <li><strong>Google LLC</strong>
                — 本Botに付随するウェブサイトで Web フォント
                （Google Fonts）を利用しています。</li>
            </ul>
          </li>
          <li>運営は、本サービスの稼働監視のため、運営が管理する
            監視用ダッシュボードおよびステータスページに
            稼働状況・エラーログ等を送信します。
            エラーログに利用者情報が含まれる場合がありますが、
            運用目的の範囲内でのみ利用します。</li>
          <li>運営は、取得した情報を統計処理し、特定の個人を
            識別できない形に加工したものを利用・公表する場合があります。</li>
        </ol>
      </section>

      <!-- ===== 第5条 ===== -->
      <section class="legal-section" id="art5">
        <h2>第5条（決済情報の取扱い）</h2>
        <ol class="legal-list">
          <li>プレミアムサービスの決済は Stripe を通じて行われ、
            クレジットカード番号等の決済情報は Stripe が管理します。</li>
          <li>運営は、クレジットカード番号・セキュリティコード等の
            決済情報を取得・保存しません。</li>
          <li>運営は、契約状態の確認に必要な範囲で、
            Stripe の顧客ID・サブスクリプションIDおよび
            契約状態等の情報を取得します。</li>
        </ol>
      </section>

      <!-- ===== 第6条 ===== -->
      <section class="legal-section" id="art6">
        <h2>第6条（保存期間および削除）</h2>
        <ol class="legal-list">
          <li>運営は、取得した情報を、利用目的の達成に必要な期間
            保存します。</li>
          <li>サーバーから本Botが削除されるなど、利用者が本サービスの
            利用を終了した場合、運営は合理的な期間内に
            関連する設定情報を削除するよう努めます。</li>
          <li>利用者が自己に関する情報の削除を希望する場合は、
            第12条の窓口へご連絡ください。
            ただし、法令上保存が義務付けられている情報、
            および不正利用の防止・対応のために必要な情報は、
            この限りではありません。</li>
        </ol>
      </section>

      <!-- ===== 第7条 ===== -->
      <section class="legal-section" id="art7">
        <h2>第7条（安全管理）</h2>
        <ol class="legal-list">
          <li>運営は、取得した情報の漏えい、滅失または毀損の防止
            その他の安全管理のために、アクセス権限の制限、
            通信の暗号化等の合理的な措置を講じます。</li>
          <li>取得した情報は、本サービスの運営に必要な権限を有する
            運営メンバーのみが取り扱うものとします。</li>
          <li>運営は、利用者情報を取り扱う業務を外部に委託する場合、
            委託先に対して必要かつ適切な監督を行います。</li>
        </ol>
      </section>

      <!-- ===== 第8条 ===== -->
      <section class="legal-section" id="art8">
        <h2>第8条（開示・訂正・削除等の請求）</h2>
        <ol class="legal-list">
          <li>利用者は、運営に対し、自己に関する情報の開示、
            訂正・追加・削除、または利用の停止を請求することができます。</li>
          <li>請求は第12条の窓口で受け付けます。
            ご本人であることを確認したうえで、
            法令に従い合理的な期間内に対応します。</li>
          <li>請求の内容によっては、対応できない場合や、
            手数料を申し受ける場合があります。</li>
        </ol>
      </section>

      <!-- ===== 第9条 ===== -->
      <section class="legal-section" id="art9">
        <h2>第9条（Cookie 等について）</h2>
        <ol class="legal-list">
          <li>本Botに付随するウェブサイト（利用規約・
            本プライバシーポリシー・プランページ等）は
            静的なページで構成されており、運営が Cookie 等を用いて
            利用者を追跡することはありません。</li>
          <li>これらのページでは Web フォントの配信のために
            Google Fonts を利用しているため、閲覧時に
            利用者の IP アドレス等が Google LLC に送信される
            場合があります。</li>
          <li>プレミアムサービスの決済は Stripe の提供する
            決済ページにて行われ、当該ページにおける情報の
            取扱いは Stripe のプライバシーポリシーに従います。</li>
        </ol>
      </section>

      <!-- ===== 第10条 ===== -->
      <section class="legal-section" id="art10">
        <h2>第10条（未成年者のプライバシー）</h2>
        <ol class="legal-list">
          <li>未成年者が本サービスを利用する場合は、
            親権者等の法定代理人の同意を得たうえで利用してください。</li>
          <li>運営は、未成年者から法定代理人の同意なく
            情報を取得したことが判明した場合、
            合理的な期間内に当該情報を削除するよう努めます。</li>
        </ol>
      </section>

      <!-- ===== 第11条 ===== -->
      <section class="legal-section" id="art11">
        <h2>第11条（本ポリシーの変更）</h2>
        <ol class="legal-list">
          <li>運営は、必要と判断した場合、利用者に通知することなく
            本ポリシーを変更できるものとします。</li>
          <li>変更後の本ポリシーは、本ページに掲載した時点から
            効力を生じるものとします。</li>
          <li>重要な変更を行う場合は、本Bot内またはサポートサーバー等で
            告知するよう努めるものとします。</li>
          <li>変更後に利用者が本サービスを利用した場合、
            変更後の本ポリシーに同意したものとみなします。</li>
        </ol>
      </section>

      <!-- ===== 第12条 ===== -->
      <section class="legal-section" id="art12">
        <h2>第12条（お問い合わせ）</h2>
        <p>
          本ポリシーに関するご質問、および利用者情報の
          開示・訂正・削除等のご請求は、
          下記のサポートサーバーまでお願いいたします。
        </p>
        <div class="alert alert-info">
          <p>
            💬 <a href="https://discord.gg/AmMkFhhD2D" target="_blank" rel="noopener">Cultivate サポートサーバー</a>
            ／ 運営：<a href="https://hmk.delien.xyz/">けい</a>
          </p>
        </div>
      </section>
    </div>
  </main>

  <footer class="site-footer">
    <p>© 2026 <a href="https://hmk.delien.xyz/">けい</a> — Cultivate Bot</p>
  </footer>

</body>
</html>
