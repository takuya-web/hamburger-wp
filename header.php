<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content=<?php bloginfo('description'); ?>>
  <meta name="keywords" content="">
  <?php wp_head(); ?>

  <!-- アドミンバー対策 -->
  <?php if( is_user_logged_in() ) : ?>
    <style type="text/css">
      @media screen and (max-width: 600px){
        #wpadminbar {
          margin-top: -46px;
        }
      }
    </style>
  <?php endif; ?>
  <!-- アドミンバー対策ここまで -->

</head>

  <header class="p-header">
  <article class="p-header__wrapper">
    <h1 class="p-header__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
    <?php get_search_form(); ?>
  </article>
    <!-- menuボタン -->
    <button class="p-header__menu-button">
      <span>MENU</span>
    </button>
</header>