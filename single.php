<?php
   /**
    * The template for displaying all single posts
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
    *
    * @package pembridge
    */
   
   $carousel_one = get_field('carousel_one');
   $carousel_two = get_field('carousel_two');
   $carousel_three = get_field('carousel_three');
   $carousel_four = get_field('carousel_four');
   $carousel_five = get_field('carousel_five');
   $carousel_six = get_field('carousel_six');
   $carousel_seven = get_field('carousel_seven');
   $carousel_eight = get_field('carousel_eight');
   $carousel_nine = get_field('carousel_nine');
   $carousel_ten = get_field('carousel_ten');
   
   $specs_one = get_field('specs_one');
   $specs_two = get_field('specs_two');
   $specs_three = get_field('specs_three');
   $specs_four = get_field('specs_four');
   $specs_five = get_field('specs_five');
   
   $dl_link = get_field('dl_link');
   get_header();?>
<?php
   while (have_posts()): the_post();?>
<div class="mb-2 breadcrumbs font-italic container" typeof="BreadcrumbList" vocab="https://schema.org/">
	<?php if (function_exists('bcn_display')) {
      bcn_display();
      }?>
</div>
<!-- CAROUSEL
   ==================================================== -->
<div id="carouselExampleIndicators" class="carousel container slide" data-ride="carousel" data-interval="false" data-ride="false">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<?php if ($carousel_two) {?>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<?php }?>
		<?php if ($carousel_three) {?>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		<?php }?>
		<?php if ($carousel_four) {?>
		<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		<?php }?>
		<?php if ($carousel_five) {?>
		<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		<?php }?>
		<?php if ($carousel_six) {?>
		<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
		<?php }?>
		<?php if ($carousel_seven) {?>
		<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
		<?php }?>
		<?php if ($carousel_eight) {?>
		<li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
		<?php }?>
		<?php if ($carousel_nine) {?>
		<li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
		<?php }?>
		<?php if ($carousel_ten) {?>
		<li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
		<?php }?>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<?php if ($carousel_one) {?>
			<img class="d-block w-100" src="<?php echo $carousel_one['url']; ?>" alt="First slide">
			<?php } else {?>
			<img class="d-block w-100" src="http://via.placeholder.com/960x450" alt="First slide">
			<?php }?>
		</div>
		<?php if ($carousel_two) {?>
		<div class="carousel-item">
			<img class="d-block w-100" src="<?php echo $carousel_two['url']; ?>" alt="Second Product">
		</div>
		<?php }?>
		<?php if ($carousel_three) {?>
		<div class="carousel-item">
			<img class="d-block w-100" src="<?php echo $carousel_three['url']; ?>" alt="Third Product">
		</div>
		<?php }?>
		<?php if ($carousel_four) {?>
		<div class="carousel-item">
			<img class="d-block w-100" src="<?php echo $carousel_four['url']; ?>" alt="Fourth Product">
		</div>
		<?php }?>
		<?php if ($carousel_five) {?>
		<div class="carousel-item">
			<img class="d-block w-100" src="<?php echo $carousel_five['url']; ?>" alt="Fifth Product">
		</div>
		<?php }?>
		<?php if ($carousel_six) {?>
		<div class="carousel-item">
			<img class="d-block w-100" src="<?php echo $carousel_six['url']; ?>" alt="Sixth Product">
		</div>
		<?php }?>
		<?php if ($carousel_seven) {?>
		<div class="carousel-item">
			<img class="d-block w-100" src="<?php echo $carousel_seven['url']; ?>" alt="Seventh Product">
		</div>
		<?php }?>
		<?php if ($carousel_eight) {?>
		<div class="carousel-item">
			<img class="d-block w-100" src="<?php echo $carousel_eight['url']; ?>" alt="Eighth Product">
		</div>
		<?php }?>
		<?php if ($carousel_nine) {?>
		<div class="carousel-item">
			<img class="d-block w-100" src="<?php echo $carousel_nine['url']; ?>" alt="Nineth Product">
		</div>
		<?php }?>
		<?php if ($carousel_ten) {?>
		<div class="carousel-item">
			<img class="d-block w-100" src="<?php echo $carousel_ten['url']; ?>" alt="Tenth Product">
		</div>
		<?php }?>
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

<section class="product-info mt-3 mt-sm-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-4 text-center text-sm-left">
				<h2 class="sans-seif" style="font-size: 1.5rem;">
					<?php the_title();?>
				</h2>
				<div>
					<ul class="list-unstyled" style="color: #919ca7;">
						<li>
							<?php echo $specs_one; ?>
						</li>
						<li>
							<?php echo $specs_two; ?>
						</li>
						<li>
							<?php echo $specs_three; ?>
						</li>
						<li>
							<?php echo $specs_four; ?>
						</li>
						<li>
							<?php echo $specs_five; ?>
						</li>
					</ul>
				</div>
				<hr class="d-block d-sm-none">
			</div>
			<div class="col-sm-8 mt-3 mt-sm-0">
				<?php the_content();?>
				<button onclick="goBack()" class="px-5 btn btn-md btn-dark text-uppercase float-left">回上頁</button>
			</div>
		</div>
	</div>
</section>

<section class="mt-5">
	<div class="container">
		<div class="row mb-4">
			<div class="col">
				<h3 class="sans-seif text-center">
					相關產品
				</h3>
			</div>
		</div>
		<div class="row">
			<?php
   //for use in the loop, list 5 post titles related to first tag on current post
   $categories = get_the_category();
   $category_id = $categories[0]->cat_ID;
   if ($category_id) {
       $args = array(
          'cat' => 2, -1,
          'posts_per_page' => 6,
          'orderby' => 'rand',
       );
       $my_query = new WP_Query($args);
       if ($my_query->have_posts()) {
           while ($my_query->have_posts()): $my_query->the_post();?>
			<div class="col-6 col-sm-4">
				<a class="" href="<?php the_permalink()?>">
					<div style="max-height:195px; overflow: hidden;" class="blockHover">
						<?php
    if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
        the_post_thumbnail('full', array('class' => 'img-fluid products-img')); // show featured image
    }?>
					</div>
				</a>
				<a class="" href="<?php the_permalink()?>">
					<h5 class="text-uppercase text-center mt-2 lead">
						<?php the_title();?>
					</h5>
				</a>
			</div>
			<!-- col -->
			</a>
			<?php
   endwhile;
       }
       wp_reset_query();
   }
   ?>
		</div>
	</div>
</section>
<script>
	function goBack() {
		if (document.referrer == "") {
			window.location.href = "http://www.pembridge.com.tw/products/"
		} else {
			window.history.back();
		}
	}
</script>
<?php endwhile;?>
<?php
get_footer();