<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>利用規約 - Cultivate</title>
  <meta name="description" content="Discord Bot「Cultivate」の利用規約です。本Botのご利用にあたっての条件を定めています。">
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

  <?php $BASE = '.'; $LOGO_LABEL = 'Bot'; ?>
  <?php include __DIR__ . '/include/header.php'; ?>

  <main>
    <div class="legal">
      <h1>利用規約</h1>
      <p class="legal-meta">制定日：2026年10月12日／最終改定日：2026年10月12日</p>
      <p>
        本利用規約（以下「本規約」といいます）は、Cultivate
        運営（以下「運営」といいます）が提供する Discord Bot
        「Cultivate」（以下「本Bot」といいます）および本Botに付随する
        ウェブサイト・サービス（以下、本Botとあわせて「本サービス」と
        いいます）の利用条件を定めるものです。
      </p>
      <p>
        本サービスを利用するすべての利用者（以下「利用者」といいます）は、
        本規約に同意したものとみなします。本規約に同意できない場合は、
        本サービスを利用しないでください。
      </p>

      <nav class="legal-nav" aria-label="目次">
        <div class="legal-nav-title">目次</div>
        <ol>
          <li><a href="#art1">第1条（適用）</a></li>
          <li><a href="#art2">第2条（定義）</a></li>
          <li><a href="#art3">第3条（利用条件）</a></li>
          <li><a href="#art4">第4条（本サービスの内容）</a></li>
          <li><a href="#art5">第5条（禁止事項）</a></li>
          <li><a href="#art6">第6条（プレミアムサービス）</a></li>
          <li><a href="#art7">第7条（料金・支払い・解約）</a></li>
          <li><a href="#art8">第8条（データの取扱い）</a></li>
          <li><a href="#art9">第9条（知的財産権）</a></li>
          <li><a href="#art10">第10条（サービスの変更・停止・終了）</a></li>
          <li><a href="#art11">第11条（免責事項）</a></li>
          <li><a href="#art12">第12条（利用制限・利用停止）</a></li>
          <li><a href="#art13">第13条（本規約の変更）</a></li>
          <li><a href="#art14">第14条（準拠法・管轄裁判所）</a></li>
          <li><a href="#art15">第15条（お問い合わせ）</a></li>
        </ol>
      </nav>

      <!-- ===== 第1条 ===== -->
      <section class="legal-section" id="art1">
        <h2>第1条（適用）</h2>
        <ol class="legal-list">
          <li>本規約は、利用者と運営との間の本サービスの利用に関する
            一切の関係に適用されます。</li>
          <li>運営が本サービス上または本サービスに付随するウェブサイト等で
            別途定める個別規定・追加規定・ガイドライン等は、
            本規約の一部を構成するものとします。</li>
          <li>個別規定等と本規約の内容が異なる場合、個別規定等の定めが
            優先して適用されるものとします。</li>
        </ol>
      </section>

      <!-- ===== 第2条 ===== -->
      <section class="legal-section" id="art2">
        <h2>第2条（定義）</h2>
        <p>本規約において使用する用語の定義は、次のとおりとします。</p>
        <ul>
          <li>「本Bot」とは、運営が提供する Discord Bot「Cultivate」を
            いいます。</li>
          <li>「利用者」とは、本サービスを利用するすべての者をいいます。</li>
          <li>「サーバー」とは、利用者が本Botを導入した Discord の
            ギルド（サーバー）をいいます。</li>
          <li>「プレミアムサービス」とは、運営が有償で提供する
            本Botの追加機能をいいます。</li>
          <li>「利用者データ」とは、利用者が本サービスの利用に関連して
            運営が取得・保存する情報をいいます。</li>
        </ul>
      </section>

      <!-- ===== 第3条 ===== -->
      <section class="legal-section" id="art3">
        <h2>第3条（利用条件）</h2>
        <ol class="legal-list">
          <li>利用者は、自己の責任において本サービスを利用するものと
            します。</li>
          <li>利用者は、Discord の利用規約およびコミュニティガイドライン
            その他 Discord が定める諸規定を遵守しなければなりません。</li>
          <li>利用者は、本Botを導入・利用するサーバーの管理者から
            必要な権限を得たうえで、本サービスを利用するものとします。</li>
          <li>未成年者が本サービスを利用する場合は、
            親権者等の法定代理人の同意を得たうえで利用するものとします。
            プレミアムサービスの契約についても同様とします。</li>
        </ol>
      </section>

      <!-- ===== 第4条 ===== -->
      <section class="legal-section" id="art4">
        <h2>第4条（本サービスの内容）</h2>
        <ol class="legal-list">
          <li>本Botは、Discord サーバーの運営を支援する多機能 Bot であり、
            役職パネル、吊下げメッセージ、VC 管理、プロフィール保存、
            ランクシステム、各種ユーティリティ等の機能を提供します。
            具体的な機能は、
            <a href="https://hmk.delien.xyz/cultivate/">公式ドキュメント</a>
            に記載のとおりです。</li>
          <li>運営は、利用者に事前に通知することなく、
            本サービスの全部または一部の内容を変更し、
            または提供を終了することができるものとします。</li>
          <li>本サービスは Discord の仕様・API の変更や障害等の影響を
            受ける場合があり、運営はその完全な動作を保証しません。</li>
        </ol>
      </section>

      <!-- ===== 第5条 ===== -->
      <section class="legal-section" id="art5">
        <h2>第5条（禁止事項）</h2>
        <p>
          利用者は、本サービスの利用にあたり、次の行為をしては
          なりません。
        </p>
        <ul>
          <li>法令または公序良俗に違反する行為</li>
          <li>Discord の利用規約・コミュニティガイドラインに違反する行為</li>
          <li>運営または第三者の知的財産権、プライバシー権、
            名誉その他の権利・利益を侵害する行為</li>
          <li>本Botのリバースエンジニアリング、逆コンパイル、
            逆アセンブルその他の解析行為</li>
          <li>本Botの脆弱性を悪用する行為、または不正アクセスを
            試みる行為</li>
          <li>自動化ツール等を用いた過度な負荷を本Botに与える行為、
            その他本サービスの運営を妨害する行為</li>
          <li>本Botを改変、再配布、販売する行為（運営が明示的に
            許諾した場合を除く）</li>
          <li>本Botの提供する機能を利用して、第三者のなりすまし、
            スパム、勧誘その他迷惑行為を行う行為</li>
          <li>その他、運営が不適切と判断する行為</li>
        </ul>
      </section>

      <!-- ===== 第6条 ===== -->
      <section class="legal-section" id="art6">
        <h2>第6条（プレミアムサービス）</h2>
        <ol class="legal-list">
          <li>プレミアムサービスは、本Bot内の
            コマンド（<code>/プレミアム管理</code>）を通じて契約・
            管理するものとします。プランおよび料金の詳細は
            <a href="plans/">プランページ</a>
            に記載のとおりです。</li>
          <li>プレミアムサービスはサーバー単位で有効化され、
            プランごとに有効化できるサーバー数に上限があります。</li>
          <li>契約状況は定期的に自動同期されます。反映には
            時間がかかる場合があり、利用者は手動での再同期を
            行うことができます。</li>
          <li>プレミアムサービスは契約期間中に限り利用でき、
            解約または支払いの停止により、有効化されたサーバーの
            プレミアム機能は利用できなくなります。</li>
        </ol>
      </section>

      <!-- ===== 第7条 ===== -->
      <section class="legal-section" id="art7">
        <h2>第7条（料金・支払い・解約）</h2>
        <ol class="legal-list">
          <li>プレミアムサービスの料金は月額制とし、
            Stripe を通じたクレジットカード決済により支払われるものと
            します。</li>
          <li>料金は、別途表示がない限り税込み価格とします。</li>
          <li>利用者は、本Bot内の
            <code>/プレミアム管理</code> パネルからいつでも
            解約することができます。解約後も、当該請求期間の
            末日まではプレミアムサービスを利用できます。</li>
          <li>既に支払われた料金は、法令に定めがある場合を除き、
            返金しません。</li>
          <li>決済に関する情報は決済代行会社である Stripe が管理し、
            運営はクレジットカード番号等の決済情報を保持しません。</li>
        </ol>
      </section>

      <!-- ===== 第8条 ===== -->
      <section class="legal-section" id="art8">
        <h2>第8条（データの取扱い）</h2>
        <ol class="legal-list">
          <li>運営は、本サービスの提供に必要な範囲で、
            サーバーID、チャンネルID、ユーザーID、ロールID、
            各種設定情報、およびスタンプ数・レベル等の
            利用状況に関する統計情報を取得・保存します。</li>
          <li>本Botは、プロフィール保存やランク・アナリティクス等の
            機能の提供のため、対象となるサーバー内での利用者の
            活動情報を取り扱う場合があります。</li>
          <li>運営は、法令に基づく場合、または利用者の同意がある場合を
            除き、取得した利用者データを第三者に提供しません。</li>
          <li>運営は、本サービスの提供・改善・不具合対応等の目的の
            範囲内で利用者データを利用します。</li>
          <li>サーバーから本Botを削除するなど、利用者が本サービスの
            利用を終了した場合、運営は合理的な期間内に
            関連する設定情報を削除するよう努めるものとします。</li>
          <li>利用者データの取扱いの詳細については、
            別途定めるプライバシーポリシー等がある場合は
            そちらが優先して適用されます。</li>
        </ol>
      </section>

      <!-- ===== 第9条 ===== -->
      <section class="legal-section" id="art9">
        <h2>第9条（知的財産権）</h2>
        <ol class="legal-list">
          <li>本サービスに関する著作権、商標権その他の知的財産権は、
            運営または正当な権利を有する第三者に帰属します。</li>
          <li>本規約に基づく本サービスの利用許諾は、
            利用者に対し知的財産権を譲渡または移転するものでは
            ありません。</li>
        </ol>
      </section>

      <!-- ===== 第10条 ===== -->
      <section class="legal-section" id="art10">
        <h2>第10条（サービスの変更・停止・終了）</h2>
        <ol class="legal-list">
          <li>運営は、利用者に事前に通知することなく、
            本サービスの内容を変更し、または提供を一時的に
            停止することができるものとします。</li>
          <li>運営は、諸事情により本サービスの提供を終了する場合、
            可能な限り事前に告知するよう努めるものとします。</li>
          <li>運営は、本条に基づく変更・停止・終了により
            利用者または第三者に生じた損害について、
            第11条の定めに従い責任を負いません。</li>
        </ol>
      </section>

      <!-- ===== 第11条 ===== -->
      <section class="legal-section" id="art11">
        <h2>第11条（免責事項）</h2>
        <ol class="legal-list">
          <li>運営は、本サービスが利用者の特定の目的に適合すること、
            期待する機能・価値を有すること、および
            継続的に利用可能であることを保証しません。</li>
          <li>運営は、本サービスの利用により利用者と第三者との間に
            生じたトラブルについて、一切責任を負いません。</li>
          <li>運営は、本サービスの利用に関連して利用者に生じた
            損害について、運営に故意または重大な過失がある場合を
            除き、責任を負いません。</li>
          <li>本Botは、Discord の仕様変更、API 制限、障害、
            メンテナンス等により、予告なく機能が制限または
            停止する場合があります。</li>
          <li>利用者が本Botの提供する機能（メッセージの削除・送信、
            ロールの付与・剥奪、チャンネル操作等）を利用した結果に
            ついては、利用者が自らの責任において対応するものと
            します。</li>
        </ol>
      </section>

      <!-- ===== 第12条 ===== -->
      <section class="legal-section" id="art12">
        <h2>第12条（利用制限・利用停止）</h2>
        <ol class="legal-list">
          <li>運営は、利用者が本規約に違反した場合、
            または違反するおそれがあると判断した場合、
            事前の通知なく、当該利用者による本サービスの利用を
            制限または停止することができるものとします。</li>
          <li>運営は、前項の措置により利用者に生じた損害について、
            一切責任を負いません。</li>
        </ol>
      </section>

      <!-- ===== 第13条 ===== -->
      <section class="legal-section" id="art13">
        <h2>第13条（本規約の変更）</h2>
        <ol class="legal-list">
          <li>運営は、必要と判断した場合、利用者に通知することなく
            本規約を変更できるものとします。</li>
          <li>変更後の本規約は、本ページに掲載した時点から
            効力を生じるものとします。</li>
          <li>変更後に利用者が本サービスを利用した場合、
            変更後の本規約に同意したものとみなします。</li>
        </ol>
      </section>

      <!-- ===== 第14条 ===== -->
      <section class="legal-section" id="art14">
        <h2>第14条（準拠法・管轄裁判所）</h2>
        <ol class="legal-list">
          <li>本規約の解釈にあたっては、日本法を準拠法とします。</li>
          <li>本サービスに関して紛争が生じた場合には、
            運営の所在地を管轄する裁判所を専属的合意管轄とします。</li>
        </ol>
      </section>

      <!-- ===== 第15条 ===== -->
      <section class="legal-section" id="art15">
        <h2>第15条（お問い合わせ）</h2>
        <p>
          本規約に関するご質問やお問い合わせは、
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

  <?php include __DIR__ . '/include/footer.php'; ?>

</body>
</html>
