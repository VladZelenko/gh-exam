<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gh-exam
 */

get_header(); ?>
<div class="col-md-8 col-lg-8">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->
</div>
<?php
get_sidebar();
get_footer();
