<?php
/* Template Name: Brand Page */
$camus_id = 13;
$gubi_id = 81;
$classicon_id = 80;
$leolux_id = 16;
$polodivani_id = 123;

$camus = get_post($camus_id);
$gubi = get_post($gubi_id);
$classicon = get_post($classicon_id);
$leolux = get_post($leolux_id);
$polodivani = get_post($polodivani_id);

$camus_thumbnail_id = get_post_thumbnail_id($camus_id);
$gubi_thumbnail_id = get_post_thumbnail_id($gubi_id);
$classicon_thumbnail_id = get_post_thumbnail_id($classicon_id);
$leolux_thumbnail_id = get_post_thumbnail_id($leolux_id);
$polodivani_thumbnail_id = get_post_thumbnail_id($polodivani_id);

$gubi_thumbnail_url = wp_get_attachment_url($gubi_thumbnail_id);
$camus_thumbnail_url = wp_get_attachment_url($camus_thumbnail_id);
$classicon_thumbnail_url = wp_get_attachment_url($classicon_thumbnail_id);
$leolux_thumbnail_url = wp_get_attachment_url($leolux_thumbnail_id);
$polodivani_thumbnail_url = wp_get_attachment_url($polodivani_thumbnail_id);

get_header();?>
<!-- Contact Heading ct-heading
==================================================== -->
<section class="heading mb-5">
  <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-12">
            <h1 class="text-left pb-4 text-uppercase"><?php the_title();?></h1>
        </div>
      </div>
  </div>
</section>

<!-- BRANDS
==================================================== -->
<section class="brands">
  <div class="container">

    <div class="row justify-content-center mt-5">
      <div class="col-md-4 col-6">
        <figure class="figure">
          <a href="<?php echo get_permalink($camus_id); ?>">
          <img src="<?php echo $camus_thumbnail_url; ?>" class="img-responsive" alt="<?php echo $camus_thumbnail_url; ?>">
          </a>
        </figure>
      </div>
      <div class="col-md-4 col-6">
        <figure class="figure">
          <a href="<?php echo get_permalink($gubi_id); ?>">
          <img src="<?php echo $gubi_thumbnail_url; ?>" class="img-responsive" alt="<?php echo $gubi_thumbnail_url; ?>">
          </a>
        </figure>
      </div>
      <div class="col-md-4 col-6">
        <figure class="figure">
          <a href="<?php echo get_permalink($classicon_id); ?>">
          <img src="<?php echo $classicon_thumbnail_url; ?>" class="img-responsive" alt="<?php echo $classicon_thumbnail_url; ?>">
          </a>
        </figure>
      </div>
      <div class="col-md-4 col-6">
        <figure class="figure">
          <a href="<?php echo get_permalink($leolux_id); ?>">
          <img src="<?php echo $leolux_thumbnail_url; ?>" class="img-responsive" alt="<?php echo $leolux_thumbnail_url; ?>">
          </a>
        </figure>
      </div>
      <div class="col-md-4 col-6">
        <figure class="figure">
          <a href="<?php echo get_permalink($polodivani_id); ?>">
          <img src="<?php echo $polodivani_thumbnail_url; ?>" class="img-responsive" alt="<?php echo $polodivani_thumbnail_url; ?>">
          </a>
        </figure>
      </div>
      <div class="col-md-4 col-6">

      </div>
    </div> <!-- row -->


  </div> <!-- container -->
</section>

<?php
get_footer();
