<?php
/**
 * The template for displaying all single designer posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pembridge
 */
get_header(); ?>

<?php
while ( have_posts() ) : the_post(); ?>

<!-- DESIGNER DESCRIPTION
==================================================== -->
<section class="designer-description mb-5">
  <div class="container">
    <div class="row">
      <div class="col border-bottom mb-5">
        <h2 class="float-left"><?php echo the_title(); ?></h2>
      </div>
    </div> <!-- row -->
    <div class="row pb-3 border-bottom">
      <div class="col-sm-3 text-center mb-3 mb-sm-0">
        <?php
      if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
          the_post_thumbnail( 'full', array( 'class'  => 'img-fluid' ) ); // show featured image
        }
        ?>
      </div>
      <div class="col-sm-9">
        <?php echo the_content(); ?>
      </div>
    </div> <!-- row -->
  </div>
</section>
<?php endwhile; // End of the loop.
?>
<!-- DESIGNER COLLECTION
==================================================== -->
<section class="designer-collection">
  <div class="container">
    <div class="row">
      <?php
        $tag_name = get_field('designer_tag');
        $loop = new WP_Query( array( 'tag' => $tag_name ) );
      ?>
      <?php if ($tag_name) { ?>
      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-6 col-md-3 mb-4 text-center">
        <a href="<?php echo get_permalink(); ?>">
          <div class="imageholder">
            <?php
              if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail( 'full', array( 'class'  => 'img-fluid image' ) ); // show featured image
              } else { ?>
                <img src="http://via.placeholder.com/350x350" class="img-fluid image" alt="">
            <?php } ?>
          </div> <!-- imageholder -->
          <?php the_title(); ?></a>
        </div> <!-- col -->
      <?php endwhile; wp_reset_query();?>
      <?php } ?>
    </div> <!-- row -->
    <a href="<?php echo get_page_link(23); ?>" class="btn btn-md btn-dark text-uppercase float-right">Back</a>
  </div> <!-- container -->
</section>

<?php
get_footer();
