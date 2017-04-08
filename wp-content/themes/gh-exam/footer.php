<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gh-exam
 */

?>
</div>
</div>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="foot-carousel">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3 col-lg3">

				</div>
			</div>
		</div>
	</div>

	<div class="contact">
		<div class="container ">
			<div class="row">
				<div class="col-md-6 col-md-6"></div>
				<div class="col-md-6 col-md-6"></div>
			</div>
		</div>
	</div>

	<div class="footer-logo-box">
		<div class="container">
			<a href="<?php the_permalink(); ?>"></a><?php the_custom_logo(); ?>
		</div>
	</div>

	<div class="footer-copy-right">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12 copy-box">
					<span class="copy-right"><?php echo get_theme_mod('copy_right'); ?></span>
				</div>
			</div>
		</div>
	</div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
