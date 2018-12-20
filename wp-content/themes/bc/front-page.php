<?php

	global $current_user;

	$lang   = get_language_attributes();
	$theme  = get_template_directory_uri();
/**
 * The front page template file.
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pique
 */

get_header(); ?>


        <!-- Main Content -->
        <main class="main minh-100vh">
            <!-- Section -->
            <section class="py-0">
                <div class="container">
                    <div class="row position-relative">
                        <div class="col-lg-8 minh-100vh col-xl-7 bg-white pt-10 pt-lg-7 pb-6 pb-lg-3">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-10 pb-3">
									
									<h1 class="fs-3 fs-lg-5 title-underline mb-5 pb-3"><?php the_field("title");?></h1>
                                    <p class="mb-7"><?php the_field("tagline");?></p>
                                
									
									<?php 
										$primary_link = get_field('primary_button_link', false, false); 
										$secondary_link = get_field('secondary_button_link', false, false); 
									?>
									
                                    <div class="row justify-content-center justify-content-lg-start">
                                        <div class="col-8 col-lg-5">
                                            <a href="<?php echo get_the_permalink($primary_link); ?>" class="btn btn-primary btn-lg btn-block mb-2"><?php the_field("primary_button_text");?></a>
                                        </div>
                                        <div class="col-8 col-lg-5">
                                            <a href="<?php echo get_the_permalink($secondary_link); ?>" class="btn btn-secondary btn-lg btn-block mb-2"><?php the_field("secondary_button_text");?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-xl-5 bg-secondary ext-r pt-0 pt-lg-7 pb-1 pb-lg-3">
                            <div class="d-flex h-100 align-items-center ml-lg-neg-7 release-container unrelease-lg-container">
                                <!-- Carousel -->
                                <div class="owl-carousel" data-carousel-options='{"items":1,"loop":true,"responsive":{"0":{"dots":true,"nav":false},"992":{"dots":false,"nav":true}}}'>
                                    <div><img src="<?=$theme?>/assets/images/img-01.jpg" class="img-fluid w-100" alt="" /></div>
                                    <div><img src="<?=$theme?>/assets/images/img-02.jpg" class="img-fluid w-100" alt="" /></div>
                                    <div><img src="<?=$theme?>/assets/images/img-03.jpg" class="img-fluid w-100" alt="" /></div>
                                    <div><img src="<?=$theme?>/assets/images/img-04.jpg" class="img-fluid w-100" alt="" /></div>
                                    <div><img src="<?=$theme?>/assets/images/img-05.jpg" class="img-fluid w-100" alt="" /></div>
                                </div>
                                <!-- End of Carousel -->
                            </div>
                        </div>

                        <div class="move d-none d-lg-block">
                            <a href="#section-2" data-smooth-scroll data-smooth-scroll-hash="false">
                                <i class="zmdi zmdi-long-arrow-down zmdi-hc-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End of Section -->

            <!-- Section -->
            <section id="section-2">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
							<div class="row">
								
							<?php if( have_rows('processes') ): ?>
								<div class="owl-carousel" data-carousel-options='{"items":2,"loop":true,"responsive":{"0":{"dots":true,"nav":false},"992":{"dots":false,"nav":true}}}'>

										<?php while( have_rows('processes', 14) ): the_row(); ?>

										<div>	
											<h2 class="mb-4 fs-1 fw-medium text-uppercase"><?php the_sub_field("process_title", 14);?></h2>
											<p class="fs--1"><?php the_sub_field("process_content", 14);?></p>
										</div>	
											<!-- ./end slide -->

											<?php endwhile; ?>

										<!-- ./ end slick slider for team list -->
									</div>


							<?php endif; ?>
							<!-- ./end repeater -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End of Section -->

            <!-- Section -->
            <section class="pt-0">
                <div class="container-fluid px-xl-0">
                    <div class="row align-items-center">
                        <div class="col-lg-6 align-self-stretch py-6 py-lg-9">
							<?php $image_services = get_field('services_image'); ?>
							
                            <div class="bg-container overlay overlay-primary-90" style="background-image: url(<?php echo $image_services['url']; ?>);"></div>
                            <div class="position-relative">
                                <div class="px-sm-6 px-lg-8 px-xl-10">
                                    <h2 class="mb-4 fw-medium text-white text-uppercase"><?php the_field("service_title");?></h2>
                                    <p class="mb-0 fs--1 text-white"><?php the_field("service_intro_text");?></p>
									<div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 px-sm-8 px-ld-9 px-xl-12 pt-6 pb-4 py-lg-10 py-xl-8 align-self-stretch">
                            <h3 class="my-0 mb-4 fs-1 fw-bold text-uppercase"><i class="zmdi zmdi-sun mr-2"></i>Core Services</h3>
                            
							<?php if( have_rows('services') ): ?>
								<ol class="list-unstyled mb-5">

									<?php while( have_rows('services') ): the_row(); ?>

									<li class="mb-1">	
										<span><?php the_sub_field("service");?></span>
									</li>	
										<!-- ./end slide -->

										<?php endwhile; ?>

									<!-- ./ end slick slider for team list -->
								</ol>

							<?php endif; ?>
							<!-- ./end repeater -->
							<?php //$service_link = get_field('services_button_link'); 
							$post_id = get_field('services_button_link', false, false);
							?>
							
                            <a href="<?php echo get_the_permalink($post_id); ?>" class="h6 fw-bold text-uppercase text-primary float-right float-lg-left"><?php the_field("services_button_text");?><i class="zmdi zmdi-chevron-right pl-4"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End of Section -->

            <!-- Section -->
            <section class="pt-0">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h3 class="my-0 fs-1 fw-medium text-primary text-uppercase">Our</h3>
                            <h2 class="mb-5 fw-medium text-secondary text-uppercase">Clients</h2>
                        </div>
                    </div>
					<?php if( have_rows('client_logo_area') ): ?>
							 <div class="row">

								<?php while( have_rows('client_logo_area') ): the_row(); ?>
								 
								<?php $client_logo = get_sub_field("image");?> 

								<div class="col-6 col-md-4 col-lg-2 mb-3">	
									<div class="bg-light py-3 px-3 d-flex square" data-aos="flip-left" data-aos-duration="1000">
										<img src="<?php echo $client_logo['url']; ?>" alt="<?php echo $client_logo['alt'] ?>" width="130" class="img-fluid d-flex align-self-center mx-auto" />
									 </div>	
								 </div>	
									<!-- ./end slide -->

									<?php endwhile; ?>

								<!-- ./ end slick slider for team list -->
							</div>

						<?php endif; ?>
						<!-- ./end repeater -->
					
                </div>
            </section>
            <!-- End of Section -->

            <!-- Section -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h3 class="my-0 fs-1 fw-medium text-primary text-uppercase">Latest</h3>
                            <h2 class="mb-5 fw-medium text-secondary text-uppercase">Projects</h2>
                        </div>
                    </div>
                </div>
				
				<?php if( have_rows('item') ): ?>
				
					<div class="owl-carousel carousel-nav-inside-container carousel-nav-primary" data-carousel-options='{"margin":30,"nav":true,"center":true,"loop":true,"dots":false,"autoWidth":true,"stagePadding":170,"lazyLoad":true,"responsive":{"0":{"items":1},"576":{"items":3},"992":{"items":5}}}'>

					<?php while( have_rows('item') ): the_row(); 

						$image_project = get_sub_field('project_image');

						?>

						<div>
							<img class="owl-lazy" data-src="<?php echo $image_project['url']; ?>" style="width: 340px;" alt="<?php echo $image_project['alt'] ?>" />
							<h2><?php the_field("project_title");?></h2>
						</div>	
						<!-- ./end slide -->

						<?php endwhile; ?>

					</div>
					<!-- ./ end slick slider for team list -->

			<?php endif; ?>
			<!-- ./end repeater -->
				 
			
            </section>
            <!-- End of Section -->

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
			<div class="clear"></div>
        </main>
        <!-- End of Main Content -->


       
<?php get_footer(); ?>
