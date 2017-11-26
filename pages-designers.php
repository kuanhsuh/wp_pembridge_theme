<?php
/* Template Name: Designers Page */

get_header(); ?>


<!-- Contact Heading ct-heading
==================================================== -->
<section class="heading">
  <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-12">
            <h1 class="text-center pb-4 text-uppercase"><?php the_title(); ?></h1>
        </div>
      </div>
  </div>
</section>

<!-- DESIGNERS
==================================================== -->
<section class="designers mt-4">
<div class="container">
    <div class="row justify-content-center">
    <?php $loop = new WP_Query( array('post_type' => 'designer', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="col-6 col-md-3 mb-4">
        <div class="imageholder">
          <?php
            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
              the_post_thumbnail( 'full', array( 'class'  => 'img-fluid image' ) ); // show featured image
            } else { ?>
              <img src="http://via.placeholder.com/350x350" class="img-fluid image" alt="">
          <?php } ?>
          <div class="overlay">
            <div class="text">
              <h3 class="text-center"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
          </div> <!-- Overlay -->
        </div><!-- imageholder -->
      </div><!-- col -->
    <?php endwhile; wp_reset_query();?>
</div> <!-- container -->
</section>

<?php
get_footer();
