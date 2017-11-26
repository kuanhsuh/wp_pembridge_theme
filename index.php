<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pembridge
 */

get_header(); ?>

  <!-- CAROUSEL
  ==================================================== -->
  <div id="carouselExampleIndicators" class="carousel slide" data-interval="false" data-ride="false">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="http://via.placeholder.com/960x450" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="http://via.placeholder.com/960x450" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="http://via.placeholder.com/960x450" alt="Third slide">
        </div>
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
        <div class="col-6 col-md-3 mb-3 mb-md-0">
          <div class='wrapper'>
            <!-- image -->
            <img src='http://via.placeholder.com/250x200' class="img-fluid"/>
            <!-- description div -->
            <div class='description'>
              <!-- description content -->
              <p class='description_content text-uppercase'>News</p>
              <!-- end description content -->
            </div>
            <!-- end description div -->
          </div><!-- wrapper -->
        </div> <!-- col -->
        <div class="col-6 col-md-3 mb-3 mb-md-0">
          <div class='wrapper'>
            <!-- image -->
            <img src='http://via.placeholder.com/250x200' class="img-fluid"/>
            <!-- description div -->
            <div class='description'>
              <!-- description content -->
              <p class='description_content text-uppercase'>News</p>
              <!-- end description content -->
            </div>
            <!-- end description div -->
          </div><!-- wrapper -->
        </div> <!-- col -->
        <div class="col-6 col-md-3">
          <div class='wrapper'>
            <!-- image -->
            <img src='http://via.placeholder.com/250x200' class="img-fluid"/>
            <!-- description div -->
            <div class='description'>
              <!-- description content -->
              <p class='description_content text-uppercase'>News</p>
              <!-- end description content -->
            </div>
            <!-- end description div -->
          </div><!-- wrapper -->
        </div> <!-- col -->
        <div class="col-6 col-md-3">
          <div class='wrapper'>
            <!-- image -->
            <img src='http://via.placeholder.com/250x200' class="img-fluid"/>
            <!-- description div -->
            <div class='description'>
              <!-- description content -->
              <p class='description_content text-uppercase'>News</p>
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
          <img src='http://via.placeholder.com/800x400' class="w-100 img-fluid mb-5"/>
          <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, quos neque animi, in quidem commodi rerum eaque corrupti quisquam eum accusamus nesciunt non itaque optio placeat repellendus porro, assumenda et illo tenetur tempore asperiores? Voluptatum odio corporis eum doloribus voluptate tempore eligendi voluptas ipsam, exercitationem totam ad non nesciunt enim?</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ICONS
  ==================================================== -->
  <section class="mt-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-4 text-center">
          <div><i class="ion-ios-checkmark-outline display-2"></i></div>
          <h3>Lorem, ipsum.</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit necessitatibus voluptas expedita laborum est adipisci?</p>
        </div> <!-- col-4 -->
        <div class="col-sm-4">
          <div class="text-center"><i class="ion-ios-checkmark-outline display-2"></i></div>
          <h3 class="text-center">Lorem, ipsum.</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit necessitatibus voluptas expedita laborum est adipisci?</p>
        </div> <!-- col-4 -->
        <div class="col-sm-4 text-center">
          <div><i class="ion-ios-checkmark-outline display-2"></i></div>
          <h3>Lorem, ipsum.</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit necessitatibus voluptas expedita laborum est adipisci?</p>
        </div> <!-- col-4 -->
      </div> <!-- row -->
    </div> <!-- container -->
  </section>

<?php
get_footer();
