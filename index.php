<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="hamburger web lesson">
  <meta name="keywords" content="">
  <!-- CSS -->
  <link rel="stylesheet" href="scss/style.css">
  <!-- title -->
  <title>Hamburger</title>
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
  <!-- Favicon -->
</head>
<body class="l-body">

  <!-- サイドバー -->
  <aside class="c-sidebar">
    <!-- クローズボタン -->
    <button class="c-close__button"></button>
    <!-- メニュー -->
    <h2>バーガー</h2>
    <ul>
      <li>ハンバーガー</li>
      <li>チーズバーガー</li>
      <li>テリヤキバーガー</li>
      <li>アボカドバーガー</li>
      <li>フィッシュバーガー</li>
      <li>ベーコンバーガー</li>
      <li>チキンバーガー</li>
    </ul>
    <h2>サイド</h2>
    <ul>
      <li>ポテト</li>
      <li>サラダ</li>
      <li>ナゲット</li>
      <li>コーン</li>
    </ul>
    <h2>ドリング</h2>
    <ul>
      <li>コーラ</li>
      <li>ファンタ</li>
      <li>オレンジ</li>
      <li>アップル</li>
      <li>紅茶（Ice/Hot）</li>
      <li>コーヒー（Ice/Hot）</li>
    </ul>
  </aside>
  

  <header class="p-header">
    <article class="p-header__wrapper">
      <h1 class="p-header__logo">Hamburger</h1>
        <form class="p-serch-form">
          <input class="p-serch-form__search" type="search" name="search" placeholder="">
          <input class="p-serch-form__submit" type="submit" name="submit" value="検索">
        </form>
    </article>
      <!-- menuボタン -->
      <button class="p-header__menu-button">
        <span>MENU</span>
      </button>
  </header>


  <main class="l-main">
    <article class="p-main-visual">
      <h1>ダミーサイト</h1>
    </article>
    
    <article class="p-main-contents">
      <div class="p-branch-menu">
        <ul>
          <li class="p-branch-menu__take-out-01">
            <h2>Take Out</h2>
            <dl class="p-branch-menu__small-01">
              <dt>Take OUT</dt>
              <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
            </dl>
            <dl class="p-branch-menu__small-02">
              <dt>Take OUT</dt>
              <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
            </dl>
          </li>

          <li class="p-branch-menu__take-out-02">
            <h2>Eat In</h2>
            <dl class="p-branch-menu__small-01">
              <dt>Take OUT</dt>
              <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
            </dl>
            <dl class="p-branch-menu__small-02">
              <dt>Take OUT</dt>
              <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
            </dl>
          </li>
        </ul>
      </div>

      <section class="p-access">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12966.991898658345!2d139.7454329!3d35.6585805!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1624250433588!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <article class="p-access__content">
          <h2>見出しが入ります</h2>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </article>
      </section>
    </article>
  </main>

  <footer class="p-footer">
    <ul class="p-footer__menu">
      <li>ショップ情報</li>
      <li>ヒストリー</li>
    </ul>
    <address class="p-copyright">Copyright: RaiseTech</address>
  </footer>

  <!-- fade-layer -->
  <div class="p-fade-layer"></div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>