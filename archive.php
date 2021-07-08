<?php /* Template Name: アーカイブページ */ ?>

<?php get_header(); ?>
<!-- <body class="l-body"> -->
<body <?php body_class('l-body'); ?>>
<?php wp_body_open(); ?>
  <?php get_sidebar(); ?>
  <main class="l-main">
    <article class="p-main-visual__archive">
      <h2>Menu:<span>チーズバーガー</span></h2>
    </article>

    <article class="p-main-contents__archive">
      <h2>小見出しが入ります</h2>
      <p class="p-main-contents__top-text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      
      <ul <?php post_class('p-main-contents__menu-wrapper__archive'); ?>>
        <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
            'paged' => $paged , //必須
            'post_type' => 'menu', //カスタム投稿タイプを指定
            'taxonomy' => 'menu_category', //カスタムタクソノミーを指定
            'posts_per_page' => 3, //表示する記事数
          );
          $menu_query = new WP_Query( $args ); //サブループを変数に格納
          if ( $menu_query->have_posts() ) : 
            while ( $menu_query->have_posts() ) : 
              $menu_query->the_post(); 
        ?>
        <li class="c-menu__container">
          <?php the_post_thumbnail(); ?>
          <div class="c-menu__content">
            <h3><?php the_title(); ?></h3>
            <h4>小見出しが入ります</h4>
            <p class="c-menu__text"><?php remove_filter ('the_content', 'wpautop'); ?><?php the_content(); ?></p>
            <button class="c-menu__button">詳しく見る</button>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <p>表示するMENUがありません</p>
      <?php endif; ?>
      </ul>
    </article>
  <?php wp_pagenavi(array('args' => $menu_query)); ?>
  </main>
  <?php get_footer(); ?>

  <!-- fade-layer -->
  <div class="p-fade-layer"></div>

  <?php wp_footer(); ?>
</body>
</html>