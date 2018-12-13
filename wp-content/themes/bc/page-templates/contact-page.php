<?php
/**
 * Template Name: Contact
 *
 * @package Pique
 */

get_header(); ?>

<div id="primary">
	<main id="main" class="site-main main minh-100vh" role="main">
	
<h1>Get in touch now</h1>
		<?php echo the_content(); ?>
		 <!-- Section -->
	<section class="text-center" id="contact">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<h3 class="my-0 fs-1 fw-medium text-primary text-uppercase">Get in</h3>
					<h2 class="mb-5 fw-medium text-secondary text-uppercase">Touch</h2>
					<p class="mb-4">Feel free to get in touch if you'd like to get a quote or find out more information.</p>


					<?php 
					// Use shortcodes in form like Landing Page Template.
					echo do_shortcode( '[contact-form-7 id="19" title="Contact form 1"]' );
					?>

				</div>
			</div>
		</div>
	</section>
	<!-- End of Section -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
