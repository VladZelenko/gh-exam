<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package businessplan
 */

?>

<div class="blog-post">
	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
		<div class="single-post">
			<?php the_post_thumbnail(); ?>
			<h2 class="title"><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
	</article>
</div>