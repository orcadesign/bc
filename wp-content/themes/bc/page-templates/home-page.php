<?php
/**
 * Template Name: Home
 *
 * @package Pique
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<h1>HEY</h1>

	<?php// while ( have_posts() ) : the_post(); ?>

	</main><!-- #main -->
	
</div><!-- #primary -->
<div id="#section"></div>
<h1>HEY</h1>	
<ul>
        <?php //query_posts(array('post_type' => 'post', 'orderby' => 'date','posts_per_page' => '-1')); 
		 
		 $args = array( 'post_type' => 'male_models', 'posts_per_page' => -1 );
	     $loop = new WP_Query( $args );
		 
             // if(have_posts()) : while(have_posts()) : the_post(); 
              if(have_posts()) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
		
			<li class="model_card">
				<a href="<?php the_permalink(); ?>">
					<?php 
						$image = get_field('main_image');
					?>
					
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />		
					<h2 class="title"><?php the_title(); ?></h2>
					<div class="model_info"><div><?php the_field("model_info");?></div></div>
				</a>
			</li>
		
       <?php endwhile; ?>
       <?php else : ?>

            <p>sorry no results</p>
		
	</ul>
       <?php endif; wp_reset_query(); ?>
		
		<!------- --------->
<?php get_footer(); ?>
