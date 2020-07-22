<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>お問い合わせ｜わたしのすきなフリーフォントたち</title>

    <meta name="description" content="わたしが好きなフリーフォントをたくさん紹介しています。明朝体、ゴシック体から手書き風まで、どれも素敵なフォントたちです。" />
    <meta name="keywords" content="フォント,フリーフォント,デザイン" />

    <meta property="og:title" content="お問い合わせ" />
  	<meta property="og:type" content="article" />
  	<meta property="og:url" content=" ページの URL" />
  	<meta property="og:image" content="./common/img/seo/img.jpg" />
  	<meta property="og:site_name" content="わたしのすきなフリーフォントたち" />
  	<meta property="og:description" content="わたしが好きなフリーフォントをたくさん紹介しています。明朝体、ゴシック体から手書き風まで、どれも素敵なフォントたちです。" />

  	<!--  Facebook用設定 -->
  	<meta property="fb:admins" content="adminID（15文字の半角数字）" />

  	<!-- ※ Twitter共通設定 -->
  	<meta name="twitter:card" content="summary_large_image" />

    <script src="common/js/import.js"></script>
    <link href="common/css/import.css" rel="stylesheet">
    <link rel="icon" href="./favicon.ico">

  </head>
  <body>
    <div class="stripeLine headerFix">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>

	  <header>
      <div>
        <h1>
          <a href="./index.html"><img src="./common/img/main/logo.png" alt="「わたしのすきなフリーフォントたち」のロゴ"></a>
        </h1>

        <nav>
          <a href="" target="_blank"><i class="fab fa-twitter-square"></i></a>
          <a href="" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <p>
            <a href="./contact.html">お問い合わせ</a>
          </p>
          <div class="hamburger">
            <span></span>
          </div>
          <ul>
            <li><a href="./archive.html">ゴシック体</a></li>
            <li><a href="">明朝体</a></li>
            <li><a href="">手書き風</a></li>
            <li><a href="">商用利用可</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="mainWrap headerMargin_other">
      <article class="contactMain">
        <h2>お問い合わせフォーム</h2>
        <form name="form1" method="post" action="">
          <dl>
            <dt><label for="name">お名前</label></dt>
            <dd><input type="text" name="name" id="name" required placeholder="山田太郎"></dd>
            <dt><label for="email">メールアドレス</label></dt>
            <dd><input type="text" name="email" id="email" required placeholder="mail@example.com"></dd>
            <dt><label for="comment">お問い合わせ内容</label></dt>
            <dd><textarea name="comment" id="comment" required></textarea></dd>
          </dl>
          <button type="submit">上記の内容で問い合わせる</button>
        </form>
      </article>
    </div>

  <footer>
    <small>
      powered by WordPress
    </small>

    <div class="stripeLine">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </footer>

  </body>
</html>
