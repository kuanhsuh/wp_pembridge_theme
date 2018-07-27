<?php
/**
 * The template for displaying products menu
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pembridge
 */

?>

<!-- PRODUCTS Heading ct-heading
==================================================== -->
<section class="products-heading">
<div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12">
          <h1 class="text-center pb-4 text-uppercase"><?php the_title();?></h1>
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
      </div><!-- col -->
    </div> <!-- row -->
    <!-- Main Menu ROW -->
    <div id="main-menu" class="row justify-content-center invisible">
      <div class="col-sm-12">
        <ul id="product" class="nav justify-content-center border-bottom d-none">
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="<?php echo get_category_link(7); ?>">沙發</a>
          </li>
          <li class="nav-item">
            <a id="main-chair" class="nav-link text-uppercase" href="#">椅<ion-icon name="arrow-dropdown" style="vertical-align:middle;"></ion-icon></a>
          </li>
          <li class="nav-item">
            <a id="main-table" class="nav-link text-uppercase" href="#">桌<ion-icon name="arrow-dropdown" style="vertical-align:middle;"></ion-icon></a>
          </li>
          <li class="nav-item">
            <a id="main-storage" class="nav-link text-uppercase" href="#">收納<ion-icon name="arrow-dropdown" style="vertical-align:middle;"></ion-icon></a>
          </li>
          <li class="nav-item">
            <a id="main-lighting" class="nav-link text-uppercase" href="#">燈飾<ion-icon name="arrow-dropdown" style="vertical-align:middle;"></ion-icon></a>
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
        <!-- list brands -->
        <ul id="brand" class="nav justify-content-center border-bottom d-none">
        <?php
          $args = array('child_of' => 29);
          $categories = get_categories($args);
          foreach ($categories as $category) {
              echo '<li class="nav-item">
            <a class="nav-link text-uppercase" href="' . get_category_link($category->term_id) . '">' . $category->name. '</a>
          </li>';
          }
          ?>
        </ul>
      </div> <!-- col -->
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
          <ul id="lighting" class="d-none nav justify-content-center border-bottom">
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="<?php echo get_category_link(31); ?>">吊燈</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="<?php echo get_category_link(32); ?>">壁燈</a>
            </li>
          </ul>
      </div>
    </div>
    <!-- row -->
</div> <!-- container -->
</section>