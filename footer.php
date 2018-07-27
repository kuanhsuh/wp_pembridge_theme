<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pembridge
 */

?>


<!-- FOOTER
==================================================== -->
<footer class="p-5 mt-4">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h3 class="mb-4">ShowRoom</h3>
        <ul>
          <li>高雄市三民區義華路777號</li>
          <li>Mon-Fri/AM10:00-PM7:00</li>
          <li class="mb-3">Sun 預約制，請來電預</li>
          <li>T 07 777-333-8888</li>
          <li>F 07 777-333-8888</li>
          <li class="mb-3">E info@pembridge.com</li>
          <li>
            <a href="<?php echo get_page_link(7); ?>">
            MAP
            </a>
          </li>
        </ul>
      </div>
      <div class="col-6">
        <h3 class="mb-4">Follow Us</h3>
        <p>
          <a href="https://www.facebook.com/pembridgetw">
            <ion-icon name="logo-facebook" class="icon"></ion-icon>
          </a>
          <a href="www.instagram.com/pembridgetw">
            <ion-icon name="logo-instagram" class="icon"></ion-icon>
          </a>
        </p>
      </div>
    </div>
    <div class="row justify-content-center">
        <p>
				Copyright &copy; <?php bloginfo('name');?> - <?php echo date('Y') ?>
        </p>
      </div>
  </div>
</footer>
</div>

<!-- content -->

<?php wp_footer();?>
<script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/ionicons@4.2.4/dist/ionicons.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/app.js"></script>
</body>
</html>
