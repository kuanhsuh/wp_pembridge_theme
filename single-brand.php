<?php
/**
 * The template for displaying all single brand posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pembridge
 */

$hero_img = get_field('hero_img');

$cat_one_title = get_field('cat_one_title');
$cat_one_img = get_field('cat_one_img');
$cat_one_link = get_field('cat_one_link');
$cat_two_title = get_field('cat_two_title');
$cat_two_img = get_field('cat_two_img');
$cat_two_link = get_field('cat_two_link');
$cat_three_title = get_field('cat_three_title');
$cat_three_img = get_field('cat_three_img');
$cat_three_link = get_field('cat_three_link');
$cat_four_title = get_field('cat_four_title');
$cat_four_img = get_field('cat_four_img');
$cat_four_link = get_field('cat_four_link');
// $cat_id = get_post_meta( 5, 'box_one_heading', true );
get_header();?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">
    <?php
while (have_posts()): the_post();?>
<?php $cat_id = get_post_meta(get_the_ID(), 'cat_id', true); ?>
			<!-- BRAND DESCRIPTION
			==================================================== -->
			<section class="designer-description mb-5">
			  <div class="container">
			    <div class="row mb-5 pb-5 border-bottom">
			      <div class="col text-center">
			        <img src='<?php echo $hero_img['url']; ?>' class="img-fluid" alt="<?php echo $hero_img['alt']; ?>">
			      </div>
			    </div> <!-- row -->
			    <div class="row border-bottom">
			      <div class="col-sm-4 text-center mb-3 mb-sm-0">
			      <?php
    if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
        the_post_thumbnail('full', array('class' => 'img-fluid brand-thumbnail')); // show featured image
    }
    ?>
			      </div>
			      <div class="col-sm-8">
			        <?php echo the_content(); ?>
			      </div>
			    </div> <!-- row -->
			  </div>
			</section>
			<?php endwhile; // End of the loop.
?>

<!-- BRAND COLLECTION
==================================================== -->
<section class="designer-collection">
    <div class="container">
      <div class="row text-center">
        <div class="col-4">
          <h3>品牌型錄下載</h3>
        </div>
        <div class="col-4">
          <?php if ($cat_one_title) {?>
          <a href="<?php echo $cat_one_link; ?>">
            <img src="<?php echo $cat_one_img['url']; ?>" class="mb-2 img-fluid">
            <p><?php echo $cat_one_title; ?> <i class="ion-ios-arrow-thin-right"></i></p>
          </a>
          <?php }?>
        </div>
        <div class="col-4">
          <?php if ($cat_two_title) {?>
          <a href="<?php echo $cat_two_link; ?>">
            <img src="<?php echo $cat_two_img['url']; ?>" class="mb-2 img-fluid">
            <p><?php echo $cat_two_title; ?> <i class="ion-ios-arrow-thin-right"></i></p>
          </a>
          <?php }?>
        </div>
        <div class="col-4">
        </div>
        <div class="col-4">
          <?php if ($cat_three_title) {?>
          <a href="<?php echo $cat_three_link; ?>">
            <img src="<?php echo $cat_three_img['url']; ?>" class="mb-2 img-fluid">
            <p><?php echo $cat_three_title; ?> <i class="ion-ios-arrow-thin-right"></i></p>
          </a>
          <?php }?>
        </div>
        <div class="col-4">
          <?php if ($cat_four_title) {?>
          <a href="<?php echo $cat_four_link; ?>">
            <img src="<?php echo $cat_four_img['url']; ?>" class="mb-2 img-fluid">
            <p><?php echo $cat_four_title; ?> <i class="ion-ios-arrow-thin-right"></i></p>
          </a>
          <?php }?>
        </div>
      </div> <!-- row -->
      <!-- <a href="<?php echo get_page_link(14); ?>" class="btn btn-md btn-dark text-uppercase float-right">Back</a> -->
      <button onclick="goRelated()" class="btn btn-md btn-dark text-uppercase float-right">相關產品</button>
      <div class="clearfix"></div>
    </div> <!-- container -->
  </section>

    </main><!-- #main -->
  </div><!-- #primary -->
<!-- ion-ios-arrow-thin-right -->
<script>
function goRelated() {
  window.location.href = "<?php echo get_category_link($cat_id); ?>"
}
</script>
<?php
get_footer();
