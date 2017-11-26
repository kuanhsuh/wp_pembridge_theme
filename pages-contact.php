<?php
/* Template Name: Contact Page */


//Custom Fields
$address   = get_post_meta( 7, 'address', true );
$email     = get_post_meta( 7, 'email', true );
$fax       = get_post_meta( 7, 'fax', true );
$telephone = get_post_meta( 7, 'telephone', true );
$hours = get_post_meta( 7, 'hours', true );
get_header(); ?>

<!-- Contact Heading ct-heading
==================================================== -->
<section class="heading mb-4">
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-sm-12">
              <h1 class="text-center pb-4 text-uppercase"><?php the_title(); ?></h1>
          </div>
        </div>
    </div>
  </section>

<!-- Contact Info ct-info
==================================================== -->
  <section class="ct-info">
      <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-12">
            <?php
              if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                  the_post_thumbnail( 'full', array( 'class'  => 'img-fluid' ) ); // show featured image
              }
            ?>
                <img class="img-fluid" src="" alt="">
            </div>
          </div><!-- end Row -->
          <div class="row justify-content-center mt-5">
            <div class="col-sm-6">
                <h3 class="text-center mb-5"><i class="ion-ios-location icon-md mr-2"></i>地圖</h3>
                  <div id="map">
                  </div>
              </div><!-- col -->
              <div class="col-sm-6 px-5 mt-4 mt-sm-0 text-left">
                <h3 class="mb-5 text-center"><i class="ion-ios-telephone icon-md mr-2"></i>聯絡方式</h3>
                  <p class="display-4"><?php echo $address; ?></p>
                  <p class="display-4"><?php echo $telephone; ?></p>
                  <p class="display-4"><?php echo $fax; ?></p>
                  <p class="display-4"><?php echo $email; ?></p>
                  <p class="display-4"><?php echo $hours; ?></p>
              </div><!-- col -->
          </div> <!-- row -->
      </div> <!-- container -->
  </section>

  <script>
    function initMap(){
      var map;
      var coords = {lat: 22.623182, lng: 120.280852};
      var zoom = 16;

      var is_internetExplorer11= navigator.userAgent.toLowerCase().indexOf('trident') > -1;
      var $marker_url = ( is_internetExplorer11 ) ? 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-location.png' : 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-location_1.svg';

      var style= [
        {
            "featureType": "landscape.natural",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "visibility": "off"
                },
                {
                    "color": "#e0efef"
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "visibility": "off"
                },
                {
                    "hue": "#1900ff"
                },
                {
                    "color": "#c0e8e8"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [
                {
                    "lightness": 100
                },
                {
                    "visibility": "simplified"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels",
            "stylers": [
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "all",
            "stylers": [
                {
                    "color": "#7dcdcd"
                }
            ]
        }
      ]

      var map_options = {
          center: new google.maps.LatLng(coords.lat, coords.lng),
          zoom: zoom,
          panControl: false,
          mapTypeControl: false,
          streetViewControl: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          scrollwheel: false,
          styles: style,
          mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
            position: google.maps.ControlPosition.TOP_CENTER
          },
          scaleControl: true,
          streetViewControl: true,
          streetViewControlOptions: {
              position: google.maps.ControlPosition.LEFT_TOP
          },
          zoomControl: true,
          zoomControlOptions: {
              position: google.maps.ControlPosition.LEFT_TOP
          },
          fullscreenControl: true
      }

      map = new google.maps.Map(document.getElementById('map'), map_options);

      var marker = new google.maps.Marker({
              position: coords,
              map: map,
              visible: true,
              icon: $marker_url
            });
      }

    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArUoGgmuAUWrd_pc_xVXQ-tvXyDkTodf4&callback=initMap"
    async defer></script>
<?php
get_footer();
