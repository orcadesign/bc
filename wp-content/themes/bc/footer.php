<?php

	global $current_user;

	$lang   = get_language_attributes();
	$theme  = get_template_directory_uri();
/**
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Pique
 */

?>

	 <!-- Footer -->
        <footer class="footer text-white" style="background-image: url(<?=$theme?>/assets/images/footer-bg.jpg)">
            <div class="container d-flex h-100">
                <div class="row flex-grow-1">
                    <div class="col-lg-3 pt-3 ext-l bg-secondary text-center text-lg-center">
                        <div class="d-flex flex-column h-100">
                            <div class="pt-5 pt-lg-8 pb-4">
        
                                <p class="fs--1"><a href="#" class="text-white"><i class="zmdi zmdi-phone zmdi-hc-fw mr-1"></i>07123 456 789</a><br />
                                <a href="#" class="text-white"><i class="zmdi zmdi-email zmdi-hc-fw mr-1"></i>info@bcelectrical.co.uk</a></p>
                            
    
                            <ul class="mt-4 mt-lg-auto mb-5 mb-lg-0 list-unstyled list-inline">
                                <li class="mr-3 list-inline-item">
                                    <a href="#" target="_blank">
                                        <i class="zmdi zmdi-twitter text-white"></i>
                                    </a>
                                </li>
                                <li class="mr-3 list-inline-item">
                                    <a href="#" target="_blank">
                                        <i class="zmdi zmdi-instagram text-white"></i>
                                    </a>
                                </li>
                                <li class="mr-3 list-inline-item">
                                    <a href="#" target="_blank">
                                        <i class="zmdi zmdi-facebook-box text-white"></i>
                                    </a>
                                </li>
                                </li>
                            </ul>
								<span class="fs--3 fs-lg--2">&copy; BC Electrical Contractors Ltd. <?php echo date("Y"); ?>.</span>
                            <div class="fs--3 fs-lg--2"><a href="#" class="mr-1 text-white">Privacy Policy</a>|<a href="#" class="ml-1 text-white">Cookie Policy</a></div>
								</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

        <!-- Core Javascripts -->
        <script src="<?=$theme?>/assets/js/jquery.min.js"></script>
        <script src="<?=$theme?>/assets/js/popper.min.js"></script>
        <script src="<?=$theme?>/assets/js/bootstrap.min.js"></script>

        <!-- Vendor Javascripts -->
        <script src="<?=$theme?>/assets/js/rellax.min.js"></script>
        <script src="<?=$theme?>/assets/js/typed.min.js"></script>
        <script src="<?=$theme?>/assets/js/owl.carousel.min.js"></script>
        <script src="<?=$theme?>/assets/js/jquery.fancybox.min.js"></script>
        <script src="<?=$theme?>/assets/js/aos.js"></script>

        <!-- Theme Javascripts -->
        <script src="<?=$theme?>/assets/js/theme.min.js"></script>


<?php wp_footer(); ?>

</body>
</html>
