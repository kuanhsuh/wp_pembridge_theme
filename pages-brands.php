<?php
/* Template Name: Brand Page */
$camus_id     = 13;
$gubi_id      = 81;
$classicon_id = 80;
$leolux_id    = 16;
$polodivani_id    = 123;

$camus        = get_post($camus_id);
$gubi         = get_post($gubi_id);
$classicon    = get_post($classicon_id);
$leolux       = get_post($leolux_id);
$polodivani   = get_post($polodivani_id);

$camus_thumbnail_id     = get_post_thumbnail_id($camus_id);
$gubi_thumbnail_id      = get_post_thumbnail_id($gubi_id);
$classicon_thumbnail_id = get_post_thumbnail_id($classicon_id);
$leolux_thumbnail_id    = get_post_thumbnail_id($leolux_id);
$polodivani_thumbnail_id    = get_post_thumbnail_id($polodivani_id);


$gubi_thumbnail_url = wp_get_attachment_url( $gubi_thumbnail_id );
$camus_thumbnail_url = wp_get_attachment_url( $camus_thumbnail_id );
$classicon_thumbnail_url = wp_get_attachment_url( $classicon_thumbnail_id );
$leolux_thumbnail_url = wp_get_attachment_url( $leolux_thumbnail_id );
$polodivani_thumbnail_url = wp_get_attachment_url( $polodivani_thumbnail_id );

get_header(); ?>
<!-- Contact Heading ct-heading
==================================================== -->
<section class="heading mb-5">
  <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-12">
            <h1 class="text-left pb-4 text-uppercase"><?php the_title(); ?></h1>
        </div>
      </div>
  </div>
</section>

<!-- BRANDS
==================================================== -->
<section class="brands">
  <div class="container">

    <div class="row justify-content-center mt-5">
      <div id="brand1" class="col-md-4 text-center text-md-left">
        <figure class="figure">
          <img src="<?php echo $camus_thumbnail_url; ?>" class="figure-img img-fluid" alt="A generic square">
          <figcaption class="figure-caption text-secondary font-italic text-center">click</figcaption>
        </figure>

      </div>
      <div class="col-10 col-md-8 mt-2 mt-md-0 text-left">
        <span id="tooltiptext1" class="invisible"><?php echo substr(strip_tags($camus->post_content), 0, 250);?><a href="<?php echo get_permalink($camus_id); ?>" class="badge badge-light">View More <i class="ion-arrow-right-c"></i></a>
        </span>
      </div>
    </div> <!-- row -->

    <div class="row justify-content-center mt-5">
      <div id="brand2" class="col-md-4 text-center text-md-left">
        <figure class="figure">
          <img src="<?php echo $gubi_thumbnail_url; ?>" class="figure-img img-fluid" alt="A generic square">
          <figcaption class="figure-caption text-secondary font-italic text-center">click</figcaption>
        </figure>
      </div>
      <div class="col-10 col-md-8 mt-2 mt-md-0 text-left">
        <span id="tooltiptext2" class="invisible"><?php echo substr(strip_tags($gubi->post_content), 0, 250);?><a href="<?php echo get_permalink($gubi_id); ?>" class="badge badge-light">View More <i class="ion-arrow-right-c"></i></a>
        </span>
      </div>
    </div> <!-- row -->

    <div class="row justify-content-center mt-5">
      <div id="brand3" class="col-md-4 text-center text-md-left">
        <figure class="figure">
          <img src="<?php echo $classicon_thumbnail_url; ?>" class="figure-img img-fluid" alt="A generic square">
          <figcaption class="figure-caption text-secondary font-italic text-center">click</figcaption>
        </figure>
      </div>
      <div class="col-10 col-md-8 mt-2 mt-md-0 text-left">
        <span id="tooltiptext3" class="invisible"><?php echo substr(strip_tags($classicon->post_content), 0, 250);?><a href="<?php echo get_permalink($classicon_id); ?>" class="badge badge-light">View More <i class="ion-arrow-right-c"></i></a>
        </span>
      </div>
    </div> <!-- row -->
    <div class="row justify-content-center mt-5">
      <div id="brand4" class="col-md-4 text-center text-md-left">
        <figure class="figure">
          <img src="<?php echo $leolux_thumbnail_url; ?>" class="figure-img img-fluid" alt="A generic square">
          <figcaption class="figure-caption text-secondary font-italic text-center">click</figcaption>
        </figure>
      <!-- <img src="http://via.placeholder.com/350x150"  class="tooltip-img img-fluid" alt=""> -->
      </div>
      <div class="col-10 col-md-8 mt-2 mt-md-0 text-left">
        <span id="tooltiptext4" class="invisible"><?php echo substr(strip_tags($leolux->post_content), 0, 250);?><a href="<?php echo get_permalink($leolux_id); ?>" class="badge badge-light">View More <i class="ion-arrow-right-c"></i></a>
        </span>
      </div>
    </div> <!-- row -->
    <div class="row justify-content-center mt-5">
      <div id="brand5" class="col-md-4 text-center text-md-left">
        <figure class="figure">
          <img src="<?php echo $polodivani_thumbnail_url; ?>" class="figure-img img-fluid" alt="A generic square">
          <figcaption class="figure-caption text-secondary font-italic text-center">click</figcaption>
        </figure>
      <!-- <img src="http://via.placeholder.com/350x150"  class="tooltip-img img-fluid" alt=""> -->
      </div>
      <div class="col-10 col-md-8 mt-2 mt-md-0 text-left">
        <span id="tooltiptext5" class="invisible"><?php echo substr(strip_tags($polodivani->post_content), 0, 250);?><a href="<?php echo get_permalink($polodivani_id); ?>" class="badge badge-light">View More <i class="ion-arrow-right-c"></i></a>
        </span>
      </div>
    </div> <!-- row -->


  </div> <!-- container -->
</section>

<?php
get_footer();

