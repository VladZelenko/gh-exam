<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gh-exam
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header id="masthead" class="site-header" role="banner">
			<div class="head-nav-menu">
				<div class="container">
					<div class="logo">
						<a href="<?php the_permalink(); ?>"></a><?php the_custom_logo(); ?>
					</div>
					<div class="head-menu" id="menu">
						<a href="#" id="touch-menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
						<nav>
							<?php
							if( has_nav_menu('menu-1') ){
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'container' => false,
									'menu_class' => 'nav clearfix'
									));
							}
							?>
						</nav>
					</div>
				</div>
			</div>

			<?php
			$query = new WP_Query( array('post_type' => 'hero-home', 'posts_per_page' => 100 ) );
			if ($query->have_posts()):?>
			<section class="home-hero">
				<div class="container">
					<div class="row">
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="col-md-6 col-lg-6">
								<?php the_post_thumbnail(); ?>
						</div>
						<div class="col-md-6 col-lg-6">
								<h2 class="title"><?php the_title(); ?></h2>
								<?php the_content(); ?>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</section>
		<?php endif; wp_reset_postdata(); ?>
		</header><!-- #masthead -->

		<div id="content" class="site-content">
			<div class="container">
				<div class="row">
