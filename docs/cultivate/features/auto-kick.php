<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>自動KICK - Cultivate ドキュメント</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css?v=<?= @filemtime(__DIR__ . '/../css/style.css') ?: time() ?>">
</head>
<body>
  <?php $ROOT = '..'; $PAGE_TITLE = '自動KICK'; ?>
  <?php include __DIR__ . '/../include/sidebar.php'; ?>

  <main class="main-content">
    <?php include __DIR__ . '/../include/topbar.php'; ?>

    <div class="content">
      <div class="feature-hero">
        <div class="feature-icon">🦵</div>
        <h1>自動KICK</h1>
        <p>一定期間ロール未所持のメンバーを自動でKICK</p>
      </div>

      <div class="alert alert-info">
        <p><strong>💡 自動KICKとは？</strong>
        サーバーに参加してから<strong>指定日数以上</strong>経過しても、
        指定したロール（<strong>いずれか</strong>）を所持していない
        メンバーを<strong>自動でKICK</strong>する機能です。
        入会審査や挨拶必須のサーバーで、
        条件を満たさないアカウントを定期的に整理できます。</p>
      </div>

      <h2>概要</h2>
      <p>
        自動KICK機能は、設定した条件に一致するメンバーを
        <strong>1時間ごと</strong>に検索してKICKします。
        判定は「基準日から N日以上経過しているか」と
        「必須ロールを1つも所持していないか」の2点で行います。
      </p>
      <ul>
        <li>判定は<strong>1時間ごと</strong>に自動実行されます</li>
        <li>通常のメンバーは「参加日」から N日後に判定されます</li>
        <li>導入日時を設定すると、導入前に参加していた人も
        導入日時から N日後に判定されます</li>
        <li>KICKは1人ずつ間隔を空けて実行されます（レート制限対策）</li>
        <li>サーバー連携した「メインサーバー」からの退出を検知して
        サブサーバーからKICKすることもできます（後述）</li>
        <li>実行前に「🔍 対象者プレビュー」で対象者を確認できます</li>
      </ul>

      <h2>判定条件</h2>
      <div class="table-wrapper"><table>
        <thead>
          <tr>
            <th>項目</th>
            <th>内容</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>在籍期間</td>
            <td>基準日から<strong>N日以上</strong>経過している</td>
          </tr>
          <tr>
            <td>必須ロール</td>
            <td>必須ロールを<strong>1つも所持していない</strong>
            （いずれかを所持していれば対象外）</td>
          </tr>
          <tr>
            <td>免除ロール</td>
            <td>免除ロールを1つでも所持していれば対象外</td>
          </tr>
        </tbody>
      </table></div>
      <div class="alert alert-warning">
        <p><strong>⚠️ 注意:</strong>
        必須ロールが未設定の場合は動作しません。
        また必須ロールを空にすると自動的に無効化されます。</p>
      </div>

      <h2>導入日時について</h2>
      <p>
        判定の<strong>基準日</strong>には
        「参加日」と「導入日時」の<strong>遅い方</strong>を使います。
        これにより、機能を導入した直後に
        既存メンバーが一斉にKICKされるのを防げます。
      </p>
      <ul>
        <li><strong>空欄</strong>: 参加日のみで判定（従来の動作）</li>
        <li><strong>入力あり</strong>: 導入日時より前に参加したメンバーは
        <strong>導入日時から数えてN日後</strong>にKICK対象になります</li>
      </ul>

      <h3>基準日の決まり方</h3>
      <div class="table-wrapper"><table>
        <thead>
          <tr>
            <th>参加日</th>
            <th>導入日時</th>
            <th>基準日</th>
            <th>KICK対象になる日（N = 7日）</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>9/1</td>
            <td>空欄</td>
            <td>9/1（参加日）</td>
            <td>9/8</td>
          </tr>
          <tr>
            <td>9/1</td>
            <td>10/1</td>
            <td>10/1（導入日時）</td>
            <td>10/8</td>
          </tr>
          <tr>
            <td>10/5</td>
            <td>10/1</td>
            <td>10/5（参加日）</td>
            <td>10/12</td>
          </tr>
        </tbody>
      </table></div>

      <div class="alert alert-info">
        <p><strong>💡 入力欄の初期値</strong>
        導入日時の入力欄には、その設定を<strong>作成した日時</strong>が
        初期値として入ります。そのまま保存すると導入日時が設定され、
        空欄にすると無効（参加日基準）に戻ります。</p>
      </div>

      <h3>入力形式</h3>
      <div class="table-wrapper"><table>
        <thead>
          <tr>
            <th>形式</th>
            <th>例</th>
            <th>扱い</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>YYYY-MM-DD</code></td>
            <td><code>2026-10-01</code></td>
            <td>その日の 00:00（JST）</td>
          </tr>
          <tr>
            <td><code>YYYY-MM-DD HH:MM</code></td>
            <td><code>2026-10-01 22:00</code></td>
            <td>指定した時刻（JST）</td>
          </tr>
          <tr>
            <td>空欄</td>
            <td>—</td>
            <td>導入日時なし（参加日基準）</td>
          </tr>
        </tbody>
      </table></div>
      <p>
        <code>2026/10/01</code> のようにスラッシュ区切りでも入力できます。
        全角数字・全角記号で入力しても自動で半角に変換されます。
      </p>

      <h2>設定方法</h2>

      <h3>設定パネルを開く</h3>
      <ol class="steps">
        <li>
          <strong>コマンドを実行</strong>
          <code>/自動キック設定</code>
        </li>
        <li>
          <strong>ロールを設定する</strong>
          「🎭 ロール設定」ボタンから必須ロールと免除ロールを選択
        </li>
        <li>
          <strong>基本設定を行う</strong>
          「⚙️ 基本設定」ボタンから有効化・日数・導入日時・ログチャンネルを設定
        </li>
        <li>
          <strong>対象者を確認する（任意）</strong>
          「🔍 対象者プレビュー」ボタンでKICK対象者を確認
        </li>
      </ol>

      <h3>設定パネルのボタン</h3>
      <div class="table-wrapper"><table>
        <thead>
          <tr>
            <th>ボタン</th>
            <th>説明</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>⚙️ 基本設定</td>
            <td>有効 / 無効、経過日数、導入日時、
            実行ログチャンネルを1つのModalで設定</td>
          </tr>
          <tr>
            <td>🎭 ロール設定</td>
            <td>必須ロール（いずれか）と免除ロールを設定
            （各25件まで）</td>
          </tr>
          <tr>
            <td>🔍 対象者プレビュー</td>
            <td>現在の条件でKICK対象となるメンバーを確認
            （実際にはKICKしません）</td>
          </tr>
        </tbody>
      </table></div>

      <h2>設定項目</h2>
      <div class="table-wrapper"><table>
        <thead>
          <tr>
            <th>設定項目</th>
            <th>必須</th>
            <th>説明</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>自動KICKを有効にする</td>
            <td>任意</td>
            <td>OFF の間は判定を行いません</td>
          </tr>
          <tr>
            <td>KICK前にDMで通知する</td>
            <td>任意</td>
            <td>KICKする前に理由をDMで通知します</td>
          </tr>
          <tr>
            <td>経過日数</td>
            <td><strong>必須</strong></td>
            <td>基準日から何日以上で判定するか（1〜3650日）</td>
          </tr>
          <tr>
            <td>導入日時</td>
            <td>任意</td>
            <td>基準日の下限。空欄で無効（参加日基準）</td>
          </tr>
          <tr>
            <td>必須ロール（いずれか）</td>
            <td><strong>必須</strong></td>
            <td>このうち1つも所持していないとKICK対象</td>
          </tr>
          <tr>
            <td>免除ロール</td>
            <td>任意</td>
            <td>所持していればKICK対象外</td>
          </tr>
          <tr>
            <td>実行ログチャンネル</td>
            <td>任意</td>
            <td>実行結果（成功／失敗の人数と対象者）を送信する
            テキストチャンネル（未選択時は送信しない）</td>
          </tr>
        </tbody>
      </table></div>

      <h2>KICKされないメンバー</h2>
      <p>
        誤爆を防ぐため、以下のメンバーは条件に一致しても
        対象外になります。
      </p>
      <ul>
        <li>Bot アカウント</li>
        <li>サーバーの所有者</li>
        <li>管理者権限（Administrator）を持つメンバー</li>
        <li>Bot の最上位ロール以上に高いロールを持つメンバー</li>
        <li>免除ロールを所持しているメンバー</li>
        <li>必須ロールを1つ以上所持しているメンバー</li>
      </ul>

      <h3>削除されたロールの扱い</h3>
      <p>
        必須ロールがサーバーから削除されている場合、そのロールIDは
        <strong>判定から除外</strong>されます。
        実在する必須ロールが1つも無い場合は、
        <strong>誰もKICK対象にしません</strong>
        （ロール削除などで全員が条件を満たせなくなり、
        全員KICKされてしまう事故を防ぐため）。
        この状態では設定パネルに警告が表示されます。
      </p>

      <h2>動作タイミング</h2>
      <ul>
        <li>判定は<strong>1時間ごと</strong>に全サーバーで自動実行されます</li>
        <li>KICKは1人ずつ実行され、次の1人まで約1.5秒待機します</li>
        <li>サーバー間も約0.5秒待機し、Discord APIの
        レート制限を避けます</li>
        <li>Bot に「メンバーをKICK」権限がないサーバーは
        その回の判定をスキップします（ログに記録されます）</li>
      </ul>

      <h2>実行ログ</h2>
      <p>
        実行ログチャンネルを設定すると、KICKを実行した回に
        レポートが送信されます。
      </p>
      <ul>
        <li><strong>✅ KICK成功</strong>: 実際にKICKしたメンバーの一覧</li>
        <li><strong>❌ KICK失敗</strong>: 権限不足などで
        KICKできなかったメンバーの一覧</li>
      </ul>
      <p>
        ※ メインサーバー退出時キックのログは、同機能の
        「🔔 通知設定」で<strong>別に</strong>設定します。
      </p>

      <h2>メインサーバー退出時キック</h2>
      <p>
        サーバー連携設定で<strong>相互連携が成立しているサーバー</strong>を
        「メインサーバー」として登録すると、そのメインサーバーから
        メンバーが退出したときに、このサーバー（サブサーバー）から
        <strong>自動でKICK</strong>します。
        面接サーバーから本サーバーへ移動する運用などで、
        メインサーバーを抜けたのに残り続けるアカウントを整理できます。
      </p>
      <ul>
        <li>設定は<strong>KICKされる側のサーバー</strong>で行います</li>
        <li>コマンドで選択したサーバーが「メインサーバー」になります</li>
        <li>選択できるのは<strong>連携が成立しているサーバー</strong>のみです</li>
        <li><strong>メインサーバーを退出した時だけ</strong>動作します。
        サブサーバー（このサーバー）を退出してもKICKされません</li>
        <li><strong>退出の理由は問いません</strong>（自主退出・
        管理者KICK・BAN・自動KICKによるKICK のいずれでも対象）</li>
        <li>連携が解除された場合は動作しません（設定は保持されます）</li>
      </ul>

      <div class="alert alert-info">
        <p><strong>💡 自動KICK（ロール未所持）との関係</strong>
        自動KICKとは<strong>設定も保存先も別で、完全に独立</strong>して
        動作します（<strong>併用できます</strong>）。
        有効 / 無効・判定条件に加えて、<strong>KICK前DM通知・
        実行ログチャンネルもこの機能専用</strong>です。
        片方の設定を変更しても、もう片方には影響しません。</p>
      </div>

      <div class="alert alert-warning">
        <p><strong>⚠️ サーバー連携機能が必要です</strong>
        サーバー連携機能（<code>server_cooperation_cog</code>）が
        無い場合、この機能は使用できません。</p>
      </div>

      <h3>設定方法</h3>
      <ol class="steps">
        <li>
          <strong>サーバー連携を成立させる</strong>
          両方のサーバーで <code>/サーバー連携設定</code> の
          プリセットを作成・有効化し、相互連携を成立させる
        </li>
        <li>
          <strong>KICKされるサーバーでコマンドを実行</strong>
          <code>/メインサーバー退出時キック設定</code>
        </li>
        <li>
          <strong>メインサーバーを選択</strong>
          セレクトから連携中のサーバーを選ぶと、
          その場で有効になります
        </li>
      </ol>

      <h3>パネルの操作</h3>
      <div class="table-wrapper"><table>
        <thead>
          <tr>
            <th>操作</th>
            <th>説明</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>🏠 メインサーバーを選択</td>
            <td>連携が成立しているサーバーからメインサーバーを選び、
            有効化します</td>
          </tr>
          <tr>
            <td>🟢 有効にする / 🔴 無効にする</td>
            <td>機能の有効・無効を切り替えます</td>
          </tr>
          <tr>
            <td>🔔 通知設定</td>
            <td>この機能専用の「KICK前DM通知」と
            「実行ログチャンネル」を設定します</td>
          </tr>
          <tr>
            <td>🗑️ 設定を解除</td>
            <td>メインサーバーの設定を削除して無効化します</td>
          </tr>
        </tbody>
      </table></div>

      <h3>KICKされない条件</h3>
      <ul>
        <li>メインサーバーではなく<strong>サブサーバーを退出</strong>した場合</li>
        <li>サーバー連携が成立していない場合</li>
        <li>サブサーバーに該当メンバーが残っていない場合</li>
        <li>サブサーバー側で Bot・サーバー所有者・
        管理者権限保持者・Bot の最上位ロール以上の場合</li>
        <li>Bot に「メンバーをKICK」権限がない場合</li>
      </ul>

      <h2>コマンド一覧</h2>

      <div class="command-block">
        <div class="cmd-name">/自動キック設定</div>
        <div class="cmd-desc">
          自動KICKの設定パネルを開きます。
          有効 / 無効、経過日数、導入日時、必須ロール、
          免除ロール、DM通知、実行ログチャンネルを設定できます。
        </div>
        <div class="cmd-meta"><span class="tag tag-admin">管理者専用</span></div>
      </div>

      <div class="command-block">
        <div class="cmd-name">/メインサーバー退出時キック設定</div>
        <div class="cmd-desc">
          サーバー連携しているメインサーバーから退出したメンバーを、
          このサーバー（サブサーバー）からKICKする設定を管理します。
          サーバー連携機能が必要です。
        </div>
        <div class="cmd-meta"><span class="tag tag-admin">管理者専用</span></div>
      </div>

      <h2>注意事項</h2>
      <ul>
        <li>KICKは取り消せません。導入時は必ず
        「🔍 対象者プレビュー」で対象者を確認してください</li>
        <li>必須ロールが未設定の状態では有効化できません</li>
        <li>必須ロールがサーバーから削除されている場合は判定から
        除外されます。実在する必須ロールが無い場合は動作せず、
        設定パネルに警告が表示されます</li>
        <li>設定の保存に失敗した場合は、成功ではなく警告が
        表示されます（一時的に反映されても、再起動で元の設定に
        戻る可能性があります）</li>
        <li>メインサーバー退出時キックは、サーバー連携機能
        （<code>server_cooperation_cog</code>）が無い場合は
        使用できません</li>
        <li>メインサーバー退出時キックは、サーバー連携が
        解除されると動作しません（設定は保持されます）</li>
        <li>メインサーバーで<strong>自動KICK・管理者KICK・
        BAN</strong>が行われた場合も「退出」として扱われ、
        サブサーバーでもKICKされます。メインサーバー側で
        一斉に整理すると、サブサーバー側も同じ人数が
        退出する点にご注意ください</li>
        <li>KICK前のDM通知は、相手がDMを受け取れない設定の場合
        届きません（その場合もKICKは実行されます）</li>
        <li>判定の基準日には参加日を使用するため、
        Bot がサーバーに参加する前からいるメンバーの参加日は
        正確でない場合があります。そのような場合は
        導入日時を設定してください</li>
        <li>日時はすべて日本時間（JST）で扱われます</li>
      </ul>

      <?php include __DIR__ . '/../include/footer.php'; ?>
    </div>
  </main>
  <script src="../js/main.js?v=<?= @filemtime(__DIR__ . '/../js/main.js') ?: time() ?>"></script>
</body>
</html>
