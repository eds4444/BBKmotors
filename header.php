<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package redhat2
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
</head>

<body>
    <div class="wrap">
<header class="header">
  <div class="container">
    <div class="header__inner">
      <div class="header__logo"><img src="<?php echo get_template_directory_uri( ); ?>/assets/img/logo.png" alt="RedHat"></div>
      <div class="header__desc">Сертифицированное агенство Google Adwords и Yandex Direct</div><a class="header__phone-mobile" href="tel:+77076225781"></a>
      <div class="header__burger"></div>
      <div class="header__sidebar">
        <div class="header__sidebar-close"></div><a class="header__phone" href="tel:+77076225781"><span class="header__phone-icon"></span><span class="header__phone-number">+7 707 622 57 81 </span></a><a class="btn btn_light header__btn" href="#"><span>Заказать звонок</span></a>
      </div>
    </div>
  </div>
</header>


