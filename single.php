<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pembridge
 */

$carousel_one   = get_field('carousel_one');
$carousel_two   = get_field('carousel_two');
$carousel_three = get_field('carousel_three');
$carousel_four  = get_field('carousel_four');
$carousel_five  = get_field('carousel_five');

$specs_one     = get_field('specs_one');
$specs_two     = get_field('specs_two');
$specs_three   = get_field('specs_three');
$specs_four   = get_field('specs_four');
$specs_five   = get_field('specs_five');

$dl_link   = get_field('dl_link');
get_header(); ?>

<?php
while ( have_posts() ) : the_post(); ?>
<div class="mb-2 breadcrumbs text-uppercase font-italic container" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<!-- CAROUSEL
==================================================== -->
<div id="carouselExampleIndicators" class="carousel container slide" data-ride="carousel" data-interval="false" data-ride="false">
<ol class="carousel-indicators">
  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  <?php if ( $carousel_two ) { ?>
  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  <?php } ?>
  <?php if ( $carousel_three ) { ?>
  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  <?php } ?>
  <?php if ( $carousel_four ) { ?>
  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  <?php } ?>
  <?php if ( $carousel_five ) { ?>
  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  <?php } ?>
</ol>
<div class="carousel-inner">
  <div class="carousel-item active">
    <?php if ( $carousel_one ) { ?>
      <img class="d-block w-100" src="<?php echo $carousel_one['url']; ?>" alt="First slide">
    <?php } else {?>
      <img class="d-block w-100" src="http://via.placeholder.com/960x450" alt="First slide">
    <?php } ?>
  </div>
  <?php if ( $carousel_two ) { ?>
  <div class="carousel-item">
    <img class="d-block w-100" src="<?php echo $carousel_two['url']; ?>" alt="Second Product">
  </div>
  <?php } ?>
  <?php if ( $carousel_three ) { ?>
  <div class="carousel-item">
    <img class="d-block w-100" src="<?php echo $carousel_three['url']; ?>" alt="Third Product">
  </div>
  <?php } ?>
  <?php if ( $carousel_four ) { ?>
  <div class="carousel-item">
    <img class="d-block w-100" src="<?php echo $carousel_four['url']; ?>" alt="Fourth Product">
  </div>
  <?php } ?>
  <?php if ( $carousel_five ) { ?>
  <div class="carousel-item">
    <img class="d-block w-100" src="<?php echo $carousel_five['url']; ?>" alt="Fifth Product">
  </div>
  <?php } ?>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>

<section class="product-info mt-3 mt-sm-5">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-4 text-center text-sm-left">
      <h2 class="sans-seif text-uppercase"><?php the_title(); ?></h2>
      <div>
        <ul class="list-unstyled">
          <li><?php echo $specs_one; ?></li>
          <li><?php echo $specs_two; ?></li>
          <li><?php echo $specs_three; ?></li>
          <li><?php echo $specs_four; ?></li>
          <li><?php echo $specs_five; ?></li>
        </ul>
      </div>
      <?php// if ( $dl_link ) { ?>
      <!-- <a href="<?php// echo $dl_link; ?>" class="btn-block btn btn-md btn-dark sans-serif">下載商品型錄</a> -->
      <?php //} ?>
      <hr class="d-block d-sm-none">
    </div>
    <div class="col-sm-8 mt-3 mt-sm-0">
      <?php the_content(); ?>
      <a href="<?php echo get_page_link(25); ?>" class="px-5 btn btn-md btn-dark text-uppercase float-right">回上頁</a>
    </div>
  </div>
</div>
</section>

<?php endwhile;
?>

<?php
get_footer();
