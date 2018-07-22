<?php
/* Template Name: News Page */

// Advanced Custom Fields
get_header();?>


  <!-- Contact Heading ct-heading
==================================================== -->
  <section class="heading">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-12">
          <h1 class="text-center pb-4 text-uppercase"><?php the_title();?></h1>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact News
==================================================== -->
  <section class="news">
    <div class="container">
      <?php $loop = new WP_Query(array('post_type' => 'latest_news', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => '3'));?>
      <?php while ($loop->have_posts()): $loop->the_post();?>
	      <?php $news_link = get_field('news_link');?>
	      <div class="row justify-content-center mt-4">
	        <div class="col-md-6 text-center">
	          <?php if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
        the_post_thumbnail('full', array('class' => 'img-fluid')); // show featured image
    } else {?>
	          <img src="http://via.placeholder.com/350x350" class="img-fluid " alt="">
	          <?php }?>
	        </div>
	        <!-- col -->
	        <div class="col-md-6">
	          <h3 class="mt-3 mt-md-0"><?php the_title();?></h3>
	          <p class="mt-2">
	            <?php echo substr(strip_tags($post->post_content), 0, 400); ?>
	          </p>
	          <a href="<?php echo $news_link; ?>" class="btn btn-lg btn-outline-dark text-uppercase float-right px-5" style="font-weight:300;">Read more...</a>
	        </div>
	        <!-- col -->
	      </div>
	      <!-- row -->
	      <?php endwhile;
wp_reset_query();?>
      <div class="mt-4 text-center">
        <?php $count = $loop->post_count;
if ($count > 3) {
    wp_pagenavi(array('query' => $loop));
}?>
      </div>
    </div>
    <!-- container -->
  </section>


  <?php
get_footer();
