<?php
/* Template Name: Products Page */
// $slugs = explode('/', get_query_var('category_name'));
get_header();
require(locate_template('products-menu.php'));
?>

<!-- Products
==================================================== -->
<section class="products mt-6">
<div class="container">
    <div class="row">
    <?php
if (have_posts()): ?>

			<?php
/* Start the Loop */

while (have_posts()): the_post();

    ?>

			<div class="col-6 col-sm-3">
			        <a class="" href="<?php the_permalink()?>">
						<div style="max-height:195px; overflow: hidden;" class="blockHover">
			        <?php
    if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
        the_post_thumbnail('full', array('class' => 'img-fluid products-img')); // show featured image
    } else {
        ?>
			          <img src='http://via.placeholder.com/300x194' class="img-fluid" alt="">
			        <?php
    }?>
						</div>
	          </a>

					  <a class="" href="<?php the_permalink()?>"> <h5 class="text-uppercase text-center mt-2 lead"><?php the_title();?></h5></a>
			      </div> <!-- col -->

			      <?php
endwhile;

endif;?>

    </div> <!-- row -->
        <div class="mt-4 text-center">
      <?php wp_pagenavi();?>
    </div>

      <?php
// clean up after the query and pagination
wp_reset_postdata();
?>
</div> <!-- container -->
</section>

<?php
get_footer();
