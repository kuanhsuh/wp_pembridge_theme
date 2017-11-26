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
$home_product_img = get_field('home_product_img');
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
        <div class="col-3 mb-3 mb-md-0">
          <div class='wrapper'>
            <!-- image -->
            <img src='<?php echo $home_new_img['url']; ?>' class="img-fluid"/>
            <!-- description div -->
            <div class='description'>
              <!-- description content -->
              <p class='description_content text-uppercase'><a href="<?php echo get_page_link(18); ?>">News</a></p>
              <!-- end description content -->
            </div>
            <!-- end description div -->
          </div><!-- wrapper -->
        </div> <!-- col -->
        <div class="col mb-3 mb-md-0">
          <div class='wrapper'>
            <!-- image -->
            <img src='<?php echo $home_inspire_img['url']; ?>' class="img-fluid"/>
            <!-- description div -->
            <div class='description'>
              <!-- description content -->
              <p class='description_content text-uppercase'><a href="<?php echo get_page_link(14); ?>">Inspire</a></p>
              <!-- end description content -->
            </div>
            <!-- end description div -->
          </div><!-- wrapper -->
        </div> <!-- col -->
        <div class="col-3">
          <div class='wrapper'>
            <!-- image -->
            <img src='<?php echo $home_tools_img['url']; ?>' class="img-fluid"/>
            <!-- description div -->
            <div class='description'>
              <!-- description content -->
              <p class='description_content text-uppercase'><a href="#">Tools</a></p>
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

  <!-- ICONS
  ==================================================== -->
  <section class="mt-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-4 text-center">
          <div><i class="ion-ios-checkmark-outline display-2"></i></div>
          <h3><?php echo $box_one_heading; ?></h3>
          <p><?php echo $box_one_info; ?></p>
        </div> <!-- col-4 -->
        <div class="col-sm-4">
          <div class="text-center">
          <img style="height:96px;" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTcuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDE4NC4yNjggMTg0LjI2OCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMTg0LjI2OCAxODQuMjY4OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjEyOHB4IiBoZWlnaHQ9IjEyOHB4Ij4KPHBhdGggZD0iTTE2NS4yNTQsMTY5LjEzNEgxOS4wMTVjLTEuMzgxLDAtMi41LTEuMTE5LTIuNS0yLjV2LTUwLjg1MUM2LjY5NywxMTIuNjIsMCwxMDMuNTQ5LDAsOTMuMDcyICBjMC0xMy4xNzUsMTAuNzE5LTIzLjg5NCwyMy44OTQtMjMuODk0YzAuMTIzLDAsMC4yNDYsMC4wMDEsMC4zNjksMC4wMDN2LTkuMjU5YzAtMjQuNjk3LDIwLjA5My00NC43ODksNDQuNzktNDQuNzg5aDQ2LjE2MyAgYzI0LjY5NywwLDQ0Ljc5LDIwLjA5Miw0NC43OSw0NC43ODl2OS4yNTljMC4xMjMtMC4wMDIsMC4yNDYtMC4wMDMsMC4zNjktMC4wMDNjMTMuMTc1LDAsMjMuODkzLDEwLjcxOSwyMy44OTMsMjMuODk0ICBjMCwxMC40NzctNi42OTYsMTkuNTQ4LTE2LjUxNCwyMi43MTF2NTAuODUxQzE2Ny43NTQsMTY4LjAxNSwxNjYuNjM1LDE2OS4xMzQsMTY1LjI1NCwxNjkuMTM0eiBNMTQxLjQ4MiwxNjQuMTM0aDIxLjI3MXYtNTAuMjUgIGMwLTEuMTYxLDAuOC0yLjE3LDEuOTMyLTIuNDM1YzguNTg2LTIuMDA2LDE0LjU4Mi05LjU2MywxNC41ODItMTguMzc3YzAtMTAuNDE4LTguNDc2LTE4Ljg5NC0xOC44OTMtMTguODk0ICBzLTE4Ljg5Myw4LjQ3Ni0xOC44OTMsMTguODk0VjE2NC4xMzR6IE00Ny43ODYsMTY0LjEzNGg4OC42OTZ2LTMzLjI4Mkg0Ny43ODZWMTY0LjEzNHogTTIxLjUxNSwxNjQuMTM0aDIxLjI3MVY5My4wNzIgIGMwLTEwLjQxOC04LjQ3Ni0xOC44OTQtMTguODkzLTE4Ljg5NEMxMy40NzYsNzQuMTc5LDUsODIuNjU0LDUsOTMuMDcyYzAsOC44MTQsNS45OTcsMTYuMzcxLDE0LjU4MywxOC4zNzcgIGMxLjEzMiwwLjI2NSwxLjkzMiwxLjI3MiwxLjkzMiwyLjQzNVYxNjQuMTM0eiBNNDcuNzg2LDEyNS44NTJoODguNjk2di0xMC43NzNjMC02LjYxNy01LjM4My0xMi0xMi0xMmgtMTIuNjY3ICBjLTAuMDQxLTAuMDAxLTAuMDc5LTAuMDAxLTAuMTE2LDBINzEuODU4Yy0wLjAzOCwwLTAuMDc2LDAtMC4xMTYsMEg1OS43ODZjLTYuNjE3LDAtMTIsNS4zODMtMTIsMTJWMTI1Ljg1MnogTTExNS4xOTEsOTguMDc4aDkuMjkxICBjNC42OCwwLDguOTIzLDEuOSwxMiw0Ljk3di05Ljk3NmMwLTExLjMyOSw3LjkyNi0yMC44NDMsMTguNTIzLTIzLjI4NXYtOS44NjRjMC0yMS45MzktMTcuODUtMzkuNzg5LTM5Ljc5LTM5Ljc4OUg2OS4wNTMgIGMtMjEuOTQsMC0zOS43OSwxNy44NS0zOS43OSwzOS43ODl2OS44NjRjMTAuNTk4LDIuNDQyLDE4LjUyMywxMS45NTYsMTguNTIzLDIzLjI4NXY5Ljk3NmMzLjA3Ny0zLjA2OSw3LjMyLTQuOTcsMTItNC45N2g4LjU4ICBMNTQuMDM0LDUzLjY4MWMtMC40MjUtMS4zMTMsMC4yOTctMi43MjMsMS42MTEtMy4xNDZjMS4zMTEtMC40MjcsMi43MjMsMC4yOTYsMy4xNDYsMS42MTFsMTQuODI5LDQ1LjkzM2gxNS42NTdWNDAuOTAzICBjMC0xLjM4MSwxLjExOS0yLjUsMi41LTIuNXMyLjUsMS4xMTksMi41LDIuNXY1Ny4xNzVoMTUuNjU4bDE0LjgyOS00NS45MzNjMC40MjQtMS4zMTUsMS44MzQtMi4wNCwzLjE0Ni0xLjYxMSAgYzEuMzE0LDAuNDI0LDIuMDM2LDEuODMzLDEuNjExLDMuMTQ2TDExNS4xOTEsOTguMDc4eiIgZmlsbD0iIzAwMDAwMCIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
          </div>
          <h3 class="text-center"><?php echo $box_two_heading; ?></h3>
          <p><?php echo $box_two_info; ?></p>
        </div> <!-- col-4 -->
        <div class="col-sm-4 text-center">
        <div class="text-center">
        <img style="height:96px;" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYwIDYwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA2MCA2MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCI+CjxwYXRoIGQ9Ik01NS4wMTgsNi41aC0wLjA2MUM1NC4zNDIsMy4yMjMsNDcuNzQsMCwzNy4wMTgsMFMxOS42OTQsMy4yMjMsMTkuMDc4LDYuNWgtMC4wNjFjMCwwLjA5NiwwLjAyMSwwLjE4NywwLjAyNywwLjI4MSAgQzE5LjAzOCw2Ljg1NCwxOS4wMTgsNi45MjcsMTkuMDE4LDd2OC40MzVsLTIuNzQ2LTIuNzQ3Yy0wLjAxOC0wLjAxOC0wLjA0Mi0wLjAzMy0wLjA2Mi0wLjA1Yy0wLjAyLTAuMDIxLTAuMDM2LTAuMDQ2LTAuMDU3LTAuMDY3ICBsLTAuMDEyLDAuMDEyYy0xLjI2NS0xLjAxLTUuMTE2LTEuMDA2LTcuODMxLDEuNzFjLTIuNjY2LDIuNjY2LTQuMDE1LDcuNjc4LTIuOTgsOS4xMDJsLTAuMDE5LDAuMDE5ICBjMC4wMjQsMC4wMjQsMC4wNTQsMC4wNCwwLjA3OSwwLjA2NGMwLjAxNCwwLjAxNiwwLjAyNCwwLjAzOSwwLjAzOSwwLjA1NGwxMy41ODgsMTMuNTg4VjUzLjVjMCw0LjAwOSw2Ljg5Nyw2LjUsMTgsNi41ICBzMTgtMi40OTEsMTgtNi41VjdjMC0wLjA3My0wLjAyMS0wLjE0Ni0wLjAyNy0wLjIxOUM1NC45OTcsNi42ODcsNTUuMDE4LDYuNTk2LDU1LjAxOCw2LjV6IE0zNy4wMTgsMiAgQzQ3LjgsMiw1Mi42MDYsNS4yODYsNTIuOTgxLDYuODFDNTIuNjA1LDkuMzY3LDQ3LjU4MywxMiwzNy4wMTgsMTJTMjEuNDMxLDkuMzY3LDIxLjA1NSw2LjgxQzIxLjQzLDUuMjg2LDI2LjIzNiwyLDM3LjAxOCwyeiAgIE05LjcyNSwxNS43MDdjMi4wOTMtMi4wOTIsNC41NTktMS44MzUsNS4wNjktMS42MzNjMC4zMTQsMC40MDMsMC4zMjUsMS4xMzgsMC4wMDEsMi4wNjZjLTAuNDE1LDEuMTkxLTEuMzIsMi41NDItMi40ODQsMy43MDYgIGMtMi4yMDQsMi4yMDQtNC4zNzYsMi44Ni01LjM0OSwyLjMwNEM2LjkwNywyMS4xOTMsNy42MywxNy44MDIsOS43MjUsMTUuNzA3eiBNNDguMDE4LDU2Ljg1M1Y1MmMwLTAuNTUyLTAuNDQ4LTEtMS0xcy0xLDAuNDQ4LTEsMSAgdjVjMCwwLjEwMywwLjAzLDAuMTk3LDAuMDU5LDAuMjkxYy0xLjE3NiwwLjIxOS0yLjUzMywwLjM5Mi00LjA1OSwwLjUxNVY0OWMwLTAuNTUyLTAuNDQ4LTEtMS0xcy0xLDAuNDQ4LTEsMXY4LjkyOSAgYy0wLjYzOSwwLjAyOC0xLjMwNiwwLjA0Ny0yLDAuMDU3VjU2YzAtMC41NTItMC40NDgtMS0xLTFzLTEsMC40NDgtMSwxdjEuOTg2Yy0xLjA1Ny0wLjAxNS0yLjA2OS0wLjA0NS0zLTAuMTAyVjUxICBjMC0wLjU1Mi0wLjQ0OC0xLTEtMXMtMSwwLjQ0OC0xLDF2Ni43MjFjLTEuOTk5LTAuMjAzLTMuNjQ4LTAuNTA2LTUtMC44NjhWNDRjMC0wLjU1Mi0wLjQ0OC0xLTEtMXMtMSwwLjQ0OC0xLDF2MTIuMTkzICBjLTIuMDkzLTAuODU1LTMtMS44NjUtMy0yLjY5M1YzNi43MDVjMC0wLjI2NS0wLjEwNS0wLjUyLTAuMjkzLTAuNzA3TDguOTM4LDI0LjIxMWMxLjUxMi0wLjM1OCwzLjE5NC0xLjM1OCw0Ljc4Ny0yLjk1MSAgYzEuMzktMS4zOSwyLjQ0LTIuOTc0LDIuOTU4LTQuNDYxYzAuMDgtMC4yMjksMC4xNDUtMC40NTMsMC4xOTgtMC42NzNsMi40MywyLjQzYzAuMjg2LDAuMjg2LDAuNzE1LDAuMzcxLDEuMDksMC4yMTcgIGMwLjM3NC0wLjE1NSwwLjYxNy0wLjUyLDAuNjE3LTAuOTI0di03LjUxNGMwLjc4NCwwLjY1LDEuNzkzLDEuMjIyLDMsMS43MTFWMjBjMCwwLjU1MiwwLjQ0OCwxLDEsMXMxLTAuNDQ4LDEtMXYtNy4yOCAgYzAuOTIsMC4yNjEsMS45MjEsMC40ODUsMywwLjY2OFYyN2MwLDAuNTUyLDAuNDQ4LDEsMSwxczEtMC40NDgsMS0xVjEzLjY3NmMxLjgyOCwwLjIxMSwzLjgzMSwwLjMyNCw2LDAuMzI0ICBjMC4zNDIsMCwwLjY2Ny0wLjAxMSwxLTAuMDE2VjE3YzAsMC41NTIsMC40NDgsMSwxLDFzMS0wLjQ0OCwxLTF2LTMuMDgzYzEuODA5LTAuMDkzLDMuNDgxLTAuMjcsNS0wLjUyOFYyOGMwLDAuNTUyLDAuNDQ4LDEsMSwxICBzMS0wLjQ0OCwxLTFWMTNjMC0wLjAwNi0wLjAwNC0wLjAxMi0wLjAwNC0wLjAxOGMwLjcwNy0wLjE3LDEuMzgzLTAuMzU0LDIuMDA0LTAuNTYzVjIwYzAsMC41NTIsMC40NDgsMSwxLDFzMS0wLjQ0OCwxLTF2LTguNDA1ICBjMC43NzEtMC4zOCwxLjQ0NC0wLjc5OSwyLTEuMjZWNTMuNUM1My4wMTgsNTQuNTU1LDUxLjU1Myw1NS45MDYsNDguMDE4LDU2Ljg1M3oiIGZpbGw9IiMwMDAwMDAiLz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
        </div>
        <h3><?php echo $box_three_heading; ?></h3>
          <p><?php echo $box_three_info; ?></p>
        </div> <!-- col-4 -->
      </div> <!-- row -->
    </div> <!-- container -->
  </section>

<?php
get_footer();
