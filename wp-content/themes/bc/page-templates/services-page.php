<?php
/**
 * Template Name: Services
 *
 * @package Pique
 */

get_header(); ?>

<div id="primary">
	<main id="main" class="site-main main minh-100vh" role="main">
		
		<!-- Section -->
		<section class="py-0">
			<div class="container">
				
				<?php 
					$processes_img = get_field("processes_img");
					$services_img = get_field("services_img");
				?> 
				<div class="img-left">
					<img src="<?php echo $processes_img['url']; ?>" alt="<?php echo $processes_img['alt'] ?>" />
				</div>
				<!-- ./img-right -->
				<div class="img-right">
					<img src="<?php echo $services_img['url']; ?>" alt="<?php echo $services_img['alt'] ?>" />
				</div>
				<!-- ./img-right -->
				
				<div class="row position-relative">
					<div class="col-lg-8 minh-100vh col-xl-6 bg-white pt-10 pt-lg-7 pb-6 pb-lg-3">
						<div class="row align-items-center h-100">
							<div class="col-lg-10 pb-3">
								<h1 class="mb-5 fw-medium text-uppercase">Our<span>Processes</span></h1>
								<?php if( have_rows('processes', 14) ): ?>
									<ol>

										<?php while( have_rows('processes', 14) ): the_row(); ?>

										<li class="pr-lg-5">	
											<h2 class="mb-4 fs-1 fw-medium text-uppercase"><?php the_sub_field("process_title", 14);?></h2>
											<p class="fs--1"><?php the_sub_field("process_content", 14);?></p>
										</li>	
											<!-- ./end slide -->

											<?php endwhile; ?>

										<!-- ./ end slick slider for team list -->
									</ol>

								<?php endif; ?>
								<!-- ./end repeater -->
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-xl-6 bg-secondary ext-r pt-0 pt-lg-7 pb-1 pb-lg-3">
						<h1 class="mb-5 fw-medium text-uppercase">Our<span>Services</span></h1>
						<div class="cards">
							<?php if( have_rows('services', 14) ): ?>
								<ol class="list-unstyled mb-5">

									<?php while( have_rows('services', 14) ): the_row(); ?>

									<li class="mb-1">	
										<span><?php the_sub_field("service", 14);?></span>
									</li>	
										<!-- ./end slide -->

										<?php endwhile; ?>

									<!-- ./ end slick slider for team list -->
								</ol>
							<?php endif; ?>
						</div>
						<!-- ./cards -->
					</div>
				</div>
				<!-- ./row -->
				
			</div>
			<div class="clear"></div>
		</section>
		<!-- End of Section -->
		<div class="row position-relative">
	
	<div class="clear"></div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
