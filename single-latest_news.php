<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pembridge
 */
get_header();?>
<?php
while (have_posts()): the_post();?>
						<div class="container">
						  <div class="row mb-5">
						    <div class="col text-center">
						      <?php
    if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
        the_post_thumbnail('full', array('class' => 'img-fluid')); // show featured image
    }
    ?>
						    </div>
						  </div>
						  <?php endwhile;?>
  <div class="container">
    <div class="row mb-4">
      <div class="col text-center">
        <h2><?php echo the_title(); ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="col" style="line-height:  1.8;">
        <?php echo the_content(); ?>
        <a href="<?php echo get_page_link(18); ?>" class="btn btn-md btn-outline-dark text-uppercase float-right">Back</a>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();