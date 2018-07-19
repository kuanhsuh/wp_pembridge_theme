<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pembridge
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon.ico" />
	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Ionic core CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/ionicons.min.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pembridge' ); ?></a>
  <div id="loadingScreen" class="d-flex">
    <h2 class="loadingText">Pembridge</h2>
    <div id="loader"></div>
  </div>
  <div id="content" style="display: none;">
<!-- NAVBAR
  ==================================================== -->
  <div class="container-fluid navtop-lg d-none d-md-block">
      <a class="md-navbar-brand" href="http://www.pembridge.com.tw/"><img src="http://www.pembridge.com.tw/wp-content/uploads/2018/06/pembridge_logo-e1528033756647.jpg" class="img-fluid" style="height: 40px;" alt=""></a>
  </div>
  <nav class="container-fluid navbar navbar-expand-md navbar-light mb-3">
    <a class="sm-navbar-brand" href="http://www.pembridge.com.tw/"><img src="<?php bloginfo('stylesheet_directory'); ?>http://www.pembridge.com.tw/wp-content/uploads/2018/06/pembridge_logo.jpg" class="img-fluid" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link hover-home text-center text-md-right" href="<?php echo get_page_link(5); ?>"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover-brands text-center" href="<?php echo get_page_link(14); ?>"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover-products text-center" href="<?php echo get_page_link(25); ?>"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover-designers text-center" href="<?php echo get_page_link(23); ?>"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover-contact text-center" href="<?php echo get_page_link(7); ?>"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover-news text-center" href="<?php echo get_page_link(18); ?>"></a>
        </li>
      </ul>
    </div>
  </nav>