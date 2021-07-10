<!-- サイドバー -->
<aside class="c-sidebar">
  <!-- クローズボタン -->
  <button class="c-close__button"></button>
  <!-- メニュー -->
  <a class=c-sidebar__logo href="<?php echo site_url('/menu'); ?>">MENU</a> <!-- アーカイブページ呼び出し -->
  <?php wp_nav_menu( $args ); ?>
</aside>