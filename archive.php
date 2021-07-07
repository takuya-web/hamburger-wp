<?php get_header(); ?>
<body class="l-body">
  <?php get_sidebar(); ?>
  <main class="l-main">
    <article class="p-main-visual__archive">
      <h2>Menu:<span>チーズバーガー</span></h2>
    </article>

    <article class="p-main-contents__archive">
      <h2>小見出しが入ります</h2>
      <p class="p-main-contents__top-text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      
      <ul class="p-main-contents__menu-wrapper__archive">
      <?php if(have_posts()):
        while(have_posts()): the_post(); ?>
          <li class="c-menu__container">
            <img src="<?php the_post_thumbnail(); ?>">
            <div class="c-menu__content">
              <h3><?php the_title(); ?></h3>
              <h4>小見出しが入ります</h4>
              <p class="c-menu__text">
              <!-- デフォルトpタグ囲み解除 -->
              <?php remove_filter('the_content', 'wpautop'); the_content(); ?></p>
              <button class="c-menu__button">詳しく見る</button>
            </div>
        <?php endwhile; ?>
      <?php else: ?>
        <p>表示するMENUがありません</p>
      <?php endif; ?>

      <li class="c-menu__container">
          <img src="images/archive_menu_img.svg">
          <div class="c-menu__content">
            <h3>チーズバーガー</h3>
            <h4>小見出しが入ります</h4>
            <p class="c-menu__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <button class="c-menu__button">詳しく見る</button>
          </div>
        </li>
      </ul>
          


      <!-- <ul class="p-main-contents__menu-wrapper__archive">
        <li class="c-menu__container">
          <img src="images/archive_menu_img.svg">
          <div class="c-menu__content">
            <h3>チーズバーガー</h3>
            <h4>小見出しが入ります</h4>
            <p class="c-menu__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <button class="c-menu__button">詳しく見る</button>
          </div>
        </li>
        <li class="c-menu__container">
          <img src="images/archive_menu_img.svg">
          <div class="c-menu__content">
            <h3>チーズバーガー</h3>
            <h4>小見出しが入ります</h4>
            <p class="c-menu__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <button class="c-menu__button">詳しく見る</button>
          </div>
        </li>
        <li class="c-menu__container">
          <img src="images/archive_menu_img.svg">
          <div class="c-menu__content">
            <h3>チーズバーガー</h3>
            <h4>小見出しが入ります</h4>
            <p class="c-menu__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <button class="c-menu__button">詳しく見る</button>
          </div>
        </li>
      </ul> -->
    </article>

    <aside class="p-pagenation">
      <ul class="p-pagenation__wrapper">
        <li class="p-pagenation__title">page</li>
        <li class="p-pagenation__pages">1/10</li>
        <li class="p-pagenation__prev-arrow"></li>
        <li class="p-pagenation__prev">前へ</li>
        <li class="p-pagenation__page-number">1</li>
        <li class="p-pagenation__page-number">2</li>
        <li class="p-pagenation__page-number">3</li>
        <li class="p-pagenation__page-number">4</li>
        <li class="p-pagenation__page-number">5</li>
        <li class="p-pagenation__page-number">6</li>
        <li class="p-pagenation__page-number">7</li>
        <li class="p-pagenation__page-number">8</li>
        <li class="p-pagenation__page-number">9</li>
        <li class="p-pagenation__next">次へ</li>
        <li class="p-pagenation__next-arrow"></li>
      </ul>
    </aside>
  </main>

  <?php get_footer(); ?>

  <!-- fade-layer -->
  <div class="p-fade-layer"></div>

  <?php wp_footer(); ?>
</body>
</html>