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

<section class="brands">
<div class="container">
    <div class="row justify-content-center">
    <?php $loop = new WP_Query(array('post_type' => 'brand', 'orderby' => 'post_id', 'order' => 'ASC'));?>
    <?php while ($loop->have_posts()): $loop->the_post();?>
	      <div class="col-6 col-sm-4 mb-4">
          <figure class="figure">
          <a href="<?php echo get_permalink(); ?>">
            <?php  the_post_thumbnail('full', array('class' => 'img-responsive image')); ?>
          </a>
        </figure>
	      </div><!-- col -->
	    <?php endwhile;
wp_reset_query();?>
</div> <!-- container -->
</section>
<?php
get_footer();
