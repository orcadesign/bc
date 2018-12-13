<?php
/**
 * Template Name: About
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main main minh-100vh" role="main">

	<!-- Section -->
		<section class="py-0">
			<div class="container">
				
				
				<div class="row position-relative">
					<div class="col-lg-8 minh-100vh col-xl-4 bg-white pt-10 pt-lg-7 pb-6 pb-lg-3">
						<div class="row align-items-center h-100">
							<div class="col-lg-10 pb-3">
								<h1 class="mb-5 fw-medium text-uppercase">About the <span>Company</span></h1>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-xl-8 bg-secondary ext-r pt-0 pt-lg-7 pb-1 pb-lg-3">
						<div>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </p>
						</div>
					</div>
				</div>
				<!-- ./row -->
				
				
			</div>
		</section>
		<!-- End of Section -->
		
		<section class="p-3 profile">
			<div class="container">
				<h2><?php the_field("team_section_title");?></h2>
			
			
		
			<?php if( have_rows('team_profiles') ): ?>
				<?php while( have_rows('team_profiles') ): the_row(); ?>

					<div class="col-lg-4">
						<div class="inner">
							<?php $profile_img = get_sub_field("profile_img"); ?> 
							<img src="<?php echo $profile_img['url']; ?>" alt="<?php echo $profile_img['alt'] ?>" />
							<div class="content">
								<h3><?php the_sub_field("team_name");?></h3>
								<h4><?php the_sub_field("job_title");?></h4>
								<a href="mailto:<?php the_sub_field("email_address");?>">
									<i class="far fa-envelope"></i>
									<?php the_sub_field("email_address");?>
								</a>
								<p><?php the_sub_field("bio");?></p>
							</div>
						</div>
					</div>
					<!-- ./.col-lg-6 -->

						<?php endwhile; ?>

			<?php endif; ?>
			<!-- ./end repeater -->

		</div>
		</section>
		<!-- End of Section -->
	

	<div class="clear"></div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
