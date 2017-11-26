<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package pembridge
 */

get_header(); ?>

<!-- Contact Heading ct-heading
==================================================== -->
<section class="heading mb-5">
  <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-12 text-center ">
            <h1 class="pb-4 display-1">404</h1>
            <p class="display-4">目前找不到你要的網站</p>
            <p class="display-4">請按這裡回
              <a href="<?php echo get_page_link(5); ?>"><u>首頁</u></a></p>
        </div>
      </div>
  </div>
</section>

<?php
get_footer();
