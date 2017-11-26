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
<footer class="mt-5">
    <div class="container">
      <div class="row justify-content-center">
        <p>
				Copyright &copy; <?php bloginfo('name'); ?> - <?php echo date('Y')?>
        </p>
      </div>
    </div> <!-- container -->
</footer>
</div> <!-- content -->

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/app.js"></script>
</body>
</html>
