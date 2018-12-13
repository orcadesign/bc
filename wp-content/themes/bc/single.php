<?php
/**
 * The template for displaying all single posts.
 *
 * @package Pique
 */

get_header(); ?>

	<div id="primary">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php 
						$image = get_field('main_image');
					?>
					<div class="post_area">
						<div class="top">
							<div class="left">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
							</div>
							<!-- ./left -->
							
							<div class="right">
								<h2 class="title"><?php the_title(); ?></h2>
								<div class="model_info"><div><?php the_field("model_info");?></div></div>
							</div>
							<!-- ./right -->
							
						</div>
						<!-- ./top -->
						
						<div class="gallery">
							<h3>Gallery</h3>
							<?php the_field("gallery");?>
						</div>
						<!-- ./gallery -->
						
					</div>
					<!-- ./post_area -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
