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
      <div class="header__logo"><img src="<?php the_field('logo_header', 'option'); ?>" alt="RedHat"></div>
      <div class="header__desc"><?php the_field('description_header', 'option'); ?></div><a class="header__phone-mobile" href="tel:<?php the_field('phone_general', 'option'); ?>"></a>
      <div class="header__burger"></div>
      <div class="header__sidebar">
        <div class="header__sidebar-close"></div><a class="header__phone" href="tel:<?php the_field('phone_general', 'option'); ?>"><span class="header__phone-icon"></span><span class="header__phone-number"><?php the_field('phone_general', 'option'); ?></span></a><a class="btn btn_light header__btn" href="#"><span><?php the_field('text_button_header', 'option'); ?></span></a>
      </div>
    </div>
  </div>
</header>




