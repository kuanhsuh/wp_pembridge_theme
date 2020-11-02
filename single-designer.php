<?php
/**
 * The template for displaying all single designer posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pembridge
 */
$designer_id = get_field('designer_id');
get_header();
?>

<?php
while (have_posts()) : the_post(); ?>

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
      if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
          the_post_thumbnail('full', array( 'class'  => 'img-fluid' )); // show featured image
      }
        ?>
      </div>
      <div class="col-sm-9">
        <?php echo the_content(); ?>
      </div>
    </div> <!-- row -->
    <button onclick="goRelated()" class="mt-5 btn btn-md btn-dark text-uppercase float-right">相關產品</button>
      <div class="clearfix"></div>
  </div>
</section>
<?php endwhile; // End of the loop.
?>


<script>
function goRelated() {
  window.location.href = "<?php echo get_category_link($designer_id); ?>"
}
</script>


<?php
get_footer();
