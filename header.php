<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="hamburger web lesson">
  <meta name="keywords" content="">
  <!-- title -->
  <title>Hamburger</title>
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
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