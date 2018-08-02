<?php
/* Template Name: Brand Page */
get_header();
?>
<!-- Contact Heading ct-heading
==================================================== -->
<section class="heading mb-5">
  <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-12">
            <h1 class="text-center pb-4 text-uppercase"><?php the_title();?></h1>
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
