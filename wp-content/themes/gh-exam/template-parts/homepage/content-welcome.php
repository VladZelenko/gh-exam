	<?php
	$query = new WP_Query( array('post_type' => 'welcome', 'posts_per_page' => 100 ) );
	if ($query->have_posts()):?>
	<section class="welcome">
		<div class="container">
			<div class="row">
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="col-sm-12 col-md-4 col-xs-4">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="col-sm-12 col-md-8 col-lg-8">
					<h2 class="title"><?php the_title(); ?></h2>
						<div class="content">
							<?php the_content(); ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php endif; wp_reset_postdata(); ?>