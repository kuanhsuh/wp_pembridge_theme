<?php
/* Template Name: Products Page */

get_header();
require(locate_template('products-menu.php'));
?>


<!-- Products
==================================================== -->
<section class="products mt-6">
<div class="container">
    <div class="row">
    <?php
// set the "paged" parameter (use 'page' if the query is on a static front page)
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
// $catquery = new WP_Query( 'cat=2&posts_per_page=20' );
$catquery = new WP_Query('cat=2&paged=' . $paged);
$count = $catquery->post_count;
?>
      <?php while ($catquery->have_posts()): $catquery->the_post();?>
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

	      <?php endwhile;?>
      <?php
// next_posts_link() usage with max_num_pages

// next_posts_link( 'Older Entries', $catquery->max_num_pages );
// previous_posts_link( 'Newer Entries' );
?>
    </div> <!-- row -->
    <?php //if($count>10) {?>
    <div class="mt-4 text-center">
      <?php wp_pagenavi(array('query' => $catquery));?>
    </div>
    <?php //}?>
      <?php
// clean up after the query and pagination
wp_reset_postdata();
?>
</div> <!-- container -->
</section>

<?php
get_footer();
