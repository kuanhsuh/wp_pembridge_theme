<?php
/* Template Name: Products Page */
// $slugs = explode('/', get_query_var('category_name'));
get_header(); ?>


<!-- PRODUCTS Heading ct-heading
==================================================== -->
<section class="products-heading">
<div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12">
          <h1 class="text-center pb-4 text-uppercase"><?php single_cat_title(); ?></h1>
      </div>
    </div> <!-- row -->
    <div class="row justify-content-center">
    <div class="col-sm-12">
      <ul class="nav justify-content-center border-bottom">
          <li class="nav-item">
            <a class="nav-link fromLeft text-uppercase expand py-0" href="<?php echo get_page_link(25); ?>">所有</a>
          </li>
          <li class="nav-item">
            <a id="click-products" class="nav-link text-uppercase expand py-0" href="#">產品 <i class="ion-arrow-down-b"></i></a>
          </li>
          <li class="nav-item">
            <a id="click-brands" class="nav-link text-uppercase expand py-0" href="#">品牌 <i class="ion-arrow-down-b"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase expand py-0" href="<?php echo get_category_link(6); ?>">新品</a>
          </li>
        </ul>
    </div>
  </div> <!-- Main Nav row -->
  <!-- Main Menu ROW -->
  <div id="main-menu" class="row justify-content-center invisible">
    <div class="col-sm-12">
      <ul id="product" class="nav justify-content-center border-bottom d-none">
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="<?php echo get_category_link(7); ?>">沙發</a>
        </li>
        <li class="nav-item">
          <a id="main-chair" class="nav-link text-uppercase" href="#">椅  <i class="ion-arrow-down-b"></i></a>
        </li>
        <li class="nav-item">
          <a id="main-table" class="nav-link text-uppercase" href="#">桌  <i class="ion-arrow-down-b"></i></a>
        </li>
        <li class="nav-item">
          <a id="main-storage" class="nav-link text-uppercase" href="#">收納 <i class="ion-arrow-down-b"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="<?php echo get_category_link(11); ?>">燈飾</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="<?php echo get_category_link(12); ?>">地毯</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="<?php echo get_category_link(13); ?>">床</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="<?php echo get_category_link(14); ?>">家居配件</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="<?php echo get_category_link(15); ?>">實木製品</a>
        </li>
      </ul> <!-- end product ul -->
      <ul id="brand" class="nav justify-content-center border-bottom d-none">
        <li class="nav-item">
          <a id="main-chair" class="nav-link text-uppercase" href="<?php echo get_category_link(3); ?>">Camus</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="<?php echo get_category_link(5); ?>">Gubi</a>
        </li>
        <li class="nav-item">
          <a id="main-table" class="nav-link text-uppercase" href="<?php echo get_category_link(4); ?>">Leolux</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="<?php echo get_category_link(18); ?>">ClassiCon</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="<?php echo get_category_link(17); ?>">Polodivani</a>
        </li>
      </ul> <!-- brand ul  -->
    </div>
  </div> <!-- row -->
    <!-- Chair Submenu ROW -->
    <div id="submenu" class="row justify-content-center invisible">
    <div class="col-sm-12">
      <ul id="chair" class="d-none nav justify-content-center border-bottom">
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="<?php echo get_category_link(16); ?>">餐椅</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="<?php echo get_category_link(19); ?>">扶手椅</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="<?php echo get_category_link(20); ?>">休閒椅</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="<?php echo get_category_link(21); ?>">吧台椅</a>
          </li>
        </ul> <!-- end chair -->
        <ul id="storage" class="d-none nav justify-content-center border-bottom">
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="<?php echo get_category_link(25); ?>">書櫃</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="<?php echo get_category_link(26); ?>">玄關桌</a>
          </li>
        </ul> <!-- end storages -->
        <ul id="table" class="d-none nav justify-content-center border-bottom">
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="<?php echo get_category_link(22); ?>">茶几/邊几</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="<?php echo get_category_link(23); ?>">餐桌</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="<?php echo get_category_link(24); ?>">書桌</a>
          </li>
        </ul>
    </div>
  </div>
  <!-- row -->
</div>
</section>
<!-- Products
==================================================== -->
<section class="products mt-6">
<div class="container">
    <div class="row">
    <?php
		if ( have_posts() ) : ?>

			<?php
      /* Start the Loop */
      $count = 0;
      while ( have_posts() ) : the_post();
      $count++;
      ?>
      <div class="col-6 col-sm-3">
        <a href="<?php the_permalink() ?>">
        <?php
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
          the_post_thumbnail( 'full', array( 'class'  => 'img-fluid blockHover' ) ); // show featured image
        } else {
        ?>
          <img src='http://via.placeholder.com/300x194' class="img-fluid" alt="">
        <?php } ?>
        <h5 class="text-uppercase text-center mt-3 lead"><?php the_title(); ?></h5></a>
      </div> <!-- col -->

      <?php
			endwhile;
      // wp_pagenavi();
			// the_posts_navigation();

		// else :

		// 	get_template_part( 'template-parts/content', 'none' );

    endif; ?>
     <?php if($count>20) { ?>
    </div> <!-- row -->
        <div class="mt-4 text-center">
      <?php wp_pagenavi(); ?>
    </div>
    <?php } ?>
      <?php
      // clean up after the query and pagination
      wp_reset_postdata();
      ?>
</div> <!-- container -->
</section>

<?php
get_footer();
