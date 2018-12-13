<?php
/**
 * Template Name: Contact
 *
 * @package Pique
 */

get_header(); ?>

<div id="primary">
	<main id="main" class="site-main main minh-100vh" role="main">
		
		<!-- Section -->
		<section class="py-0">
			<div class="container">
				<div class="map">
					<iframe src="https://snazzymaps.com/embed/120189" width="100%" height="100%" style="border:none;"></iframe>
				</div>
				<!-- ./map -->
				
				<div class="col-md-10 contact-form">
					<h1 class="mb-5 fw-medium text-uppercase">Get in <span>Touch</span></h1>
					<p class="mb-7"><?php the_field("tagline");?></p>
					<?php echo do_shortcode( '[contact-form-7 id="19" title="Contact form 1"]' ); ?>
				</div>
				<!-- ./col-md-10 -->
				
				<div class="row position-relative contact">
					<div class="col-lg-8 minh-100vh col-xl-5 bg-white pt-10 pt-lg-7 pb-6 pb-lg-3">
						<div class="row align-items-center h-100">
							<div class="col-lg-10 pb-3">
								

							</div>
						</div>
					</div>

					<div class="col-lg-4 col-xl-7 bg-secondary ext-r pt-0 pt-lg-7 pb-1 pb-lg-3">
						
					</div>

					
				</div>
			</div>
		</section>
		<!-- End of Section -->
	
		<!-- Section -->
		<section class="text-center" id="contact">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10">
						<h2><?php echo the_field("address_title"); ?></h2>
						<div>
							<?php if( have_rows('address') ): ?>

								<?php while( have_rows('address') ): the_row(); ?>

									<p class="address address-line"><?php the_sub_field("address_line");?></p>
									<!-- ./end slide -->

								<?php endwhile; ?>
							<?php endif; ?>
							<!-- ./end repeater -->
							<p class="address postcode"><?php echo the_field("postcode"); ?></p>
						</div>
					</div>
					<!-- ./col-md-10 -->

				
				</div>
			</div>
		</section>
		<!-- End of Section -->
	<div class="clear"></div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
