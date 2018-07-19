<?php
/* Template Name: Index Page */
$box_one_heading   = get_post_meta( 5, 'box_one_heading', true );
$box_one_info      = get_post_meta( 5, 'box_one_info', true );
$box_two_heading   = get_post_meta( 5, 'box_two_heading', true );
$box_two_info      = get_post_meta( 5, 'box_two_info', true );
$box_three_heading = get_post_meta( 5, 'box_three_heading', true );
$box_three_info    = get_post_meta( 5, 'box_three_info', true );

$home_new_img     = get_field('home_news_img');
$home_inspire_img = get_field('home_inspire_img');
$home_tools_img   = get_field('home_tools_img');

$carousel_one     = get_field('carousel_one');
$carousel_two     = get_field('carousel_two');
$carousel_three   = get_field('carousel_three');
$carousel_four   = get_field('carousel_four');
$carousel_five   = get_field('carousel_five');
get_header(); ?>

  <!-- CAROUSEL
  ==================================================== -->
  <div id="carouselExampleIndicators" class="carousel container slide" data-interval="false" data-ride="false">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <?php if ( $carousel_two ) { ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <?php } ?>
        <?php if ( $carousel_three ) { ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <?php } ?>
        <?php if ( $carousel_four ) { ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <?php } ?>
        <?php if ( $carousel_five ) { ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <?php } ?>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <?php if ( $carousel_one ) { ?>
            <img class="d-block w-100" src="<?php echo $carousel_one['url']; ?>" alt="First slide">
          <?php } else {?>
            <img class="d-block w-100" src="http://via.placeholder.com/960x450" alt="First slide">
          <?php } ?>
        </div>
        <?php if ( $carousel_two ) { ?>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo $carousel_two['url']; ?>" alt="Second Product">
        </div>
        <?php } ?>
        <?php if ( $carousel_three ) { ?>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo $carousel_three['url']; ?>" alt="Third Product">
        </div>
        <?php } ?>
        <?php if ( $carousel_four ) { ?>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo $carousel_four['url']; ?>" alt="Fourth Product">
        </div>
        <?php } ?>
        <?php if ( $carousel_five ) { ?>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo $carousel_five['url']; ?>" alt="Fifth Product">
        </div>
        <?php } ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

<!-- Cards
==================================================== -->
  <section class="events mt-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col">
          <div class='wrapper'>
            <!-- image -->
            <img src='<?php echo $home_new_img['url']; ?>' class="img-fluid"/>
            <!-- description div -->
            <div class='description'>
              <!-- description content -->
              <p class='description_content text-uppercase'><a href="<?php echo get_page_link(25); ?>">Products</a></p>
              <!-- end description content -->
            </div>
            <!-- end description div -->
          </div><!-- wrapper -->
        </div> <!-- col -->
        <div class="col">
          <div class='wrapper'>
            <!-- image -->
            <img src='<?php echo $home_inspire_img['url']; ?>' class="img-fluid"/>
            <!-- description div -->
            <div class='description'>
              <!-- description content -->
              <p class='description_content text-uppercase'><a href="<?php echo get_page_link(18); ?>">News</a></p>
              <!-- end description content -->
            </div>
            <!-- end description div -->
          </div><!-- wrapper -->
        </div> <!-- col -->
        <div class="col">
          <div class='wrapper'>
            <!-- image -->
            <img src='<?php echo $home_tools_img['url']; ?>' class="img-fluid"/>
            <!-- description div -->
            <div class='description'>
              <!-- description content -->
              <p class='description_content text-uppercase'><a href="<?php echo get_page_link(7); ?>">Contact</a></p>
              <!-- end description content -->
            </div>
            <!-- end description div -->
          </div><!-- wrapper -->
        </div> <!-- col -->
      </div> <!-- row -->
    </div> <!-- container -->
  </section>

  <!-- ABOUT PEMBRIDGE
  ==================================================== -->
  <section class="mt-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-12">
          <h2 class="text-center mb-5">About Pembridge</h2>
          <?php
              if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                  the_post_thumbnail( 'full', array( 'class'  => 'img-fluid w-100 mb-5' ) ); // show featured image
              }
            ?>
          <!-- <img src='http://via.placeholder.com/800x400' class="w-100 img-fluid mb-5"/> -->
          <p class="lead">
          <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; // end of the loop ?>
          </p>
        </div>
      </div>
    </div>
  </section>

  

<?php
get_footer();
