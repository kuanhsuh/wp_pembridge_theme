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
$uploads = wp_upload_dir();
?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory');?>/assets/img/favicon.ico" />
	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://unpkg.com/ionicons@4.2.4/dist/ionicons.js"></script>

	<?php wp_head();?>
</head>

<body <?php body_class();?>>
	<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/zh_TW/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="641831782652808"
  logged_in_greeting="嗨！ 請問你有什麼問題？"
  logged_out_greeting="嗨！ 請問你有什麼問題？">
</div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'pembridge');?></a>
  <div id="content">
<!-- NAVBAR
  ==================================================== -->
  <nav class="container navbar navbar-expand-md navbar-light mb-3">
    <a class="sm-navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo $uploads['baseurl'] . "/2018/06/pembridge_logo.jpg"; ?>" class="img-fluid" style="height: 40px;" alt="logo"></a>
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

