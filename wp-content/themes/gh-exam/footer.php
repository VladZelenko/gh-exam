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
	<?php
	$query = new WP_Query( array('post_type' => 'company-slider', 'posts_per_page' => 100 ) );
	if ($query->have_posts()):?>
	<section class="home-partners">
		<div class="container">
			<h2 class="title"><?php echo get_theme_mod('company_title'); ?></h2>
			<div class="row partners-slider">
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="col-sm-12 col-md-6 col-lg-3 partners-label">
						<?php the_post_thumbnail('full', 'class=img-responsive'); ?>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php endif; wp_reset_postdata(); ?>
<div class="contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-6">
				<h2 class="title">Contact Us:</h2>
				<p>
					Contact Us:
				</p>
				<a href="tel:+1 123 4567 891" class="phone"><i class="fa fa-phone" aria-hidden="true"></i>11</a>
				<span class="adress">
					<i class="fa fa-map-marker" aria-hidden="true"></i>123 Office, Street No 2, Parkview. Sednney, Australia.
				</span>
				<div class="map">
					
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6">
				
			</div>
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
