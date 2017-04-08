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
 * @package gh-exam
 */
get_header(); ?>
<div class="col-md-8 col-lg-8">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<?php
				if ( have_posts() ) :

					/* Start the Loop */
				while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php
	the_posts_pagination(
		$args = array(
			'show_all'     => false,
			'end_size'     => 5,
			'mid_size'     => 4,
			'prev_next'    => false,
			'prev_text'    => __(''),
			'next_text'    => __(''),
			'add_args'     => false,
			'add_fragment' => '',
			'screen_reader_text' => __( ' ' ),
			));
			?>
		</div>
		<?php
		get_sidebar();
		get_footer();