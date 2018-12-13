<?php
/**
 * Pique functions and definitions
 *
 * @package Pique
 */
/*
if ( ! function_exists( 'pique_setup' ) ) :
	
	function pique_setup() {


		load_theme_textdomain( 'pique', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );


		add_theme_support( 'title-tag' );

	
	
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'pique-hero', 1400, 1000, true );
		add_image_size( 'pique-square', 280, 280, true );
		add_image_size( 'pique-header', 1400, 400, true );
		add_image_size( 'pique-thumbnail-avatar', 100, 100, true );

		// This theme uses wp_nav_menu() in three locations.
		register_nav_menus( array(
			'primary'   => esc_html__( 'Primary Menu', 'pique' ),
			'secondary' => esc_html__( 'Secondary Menu', 'pique' ),
		) );

	
	
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		
		
		add_theme_support( 'post-formats', array(
			'aside',
			'chat',
			'gallery',
			'image',
			'video',
			'quote',
			'link',
			'status',
			'audio',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'pique_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
	}
endif; // pique_setup
add_action( 'after_setup_theme', 'pique_setup' );



function pique_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pique_content_width', 775 );
}
add_action( 'after_setup_theme', 'pique_content_width', 0 );



if ( ! function_exists( 'pique_content_width_tweak' ) ) :
	function pique_content_width_tweak() {
		if ( is_page_template( 'page-templates/template-full-width.php' ) ) :
			global $content_width;
			$content_width = 1400; 
			endif;
	}
endif;
add_action( 'template_redirect', 'pique_content_width_tweak' );



function pique_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'pique' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to appear in your sidebar', 'pique' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'First Footer Widget Area', 'pique' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here to appear in your footer', 'pique' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Second Footer Widget Area', 'pique' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here to appear in your footer', 'pique' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Third Footer Widget Area', 'pique' ),
		'id'            => 'sidebar-4',
		'description'   => esc_html__( 'Add widgets here to appear in your footer', 'pique' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'pique_widgets_init' );



function pique_fonts_url() {
	$fonts_url = '';

	
	
	$lora = esc_html_x( 'on', 'Lora font: on or off', 'pique' );

	
	
	$karla = esc_html_x( 'on', 'Karla font: on or off', 'pique' );

	if ( 'off' !== $lora || 'off' !== $karla ) :
		$font_families = array();

		if ( 'off' !== $lora ) {
			$font_families[] = 'Lora:400,700,400italic,700italic';
		}

		if ( 'off' !== $karla ) {
			$font_families[] = 'Karla:400,700,400italic,700italic';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

	endif;

	return $fonts_url;
}



function pique_admin_scripts() {
	wp_enqueue_style( 'pique-fonts', pique_fonts_url(), array(), null );
}
add_action( 'admin_print_styles-appearance_page_custom-header', 'pique_admin_scripts' );



function pique_scripts() {
	wp_enqueue_style( 'pique-style', get_stylesheet_uri(), array(), null, 'screen' );
	wp_enqueue_style( 'pique-fonts', pique_fonts_url(), array(), null );

	// javascript
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/aos.js', array( 'jquery' ), '20150813', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '20150813', true );
	wp_enqueue_script( 'jquery.fancybox.min', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array( 'jquery' ), '20150813', true );
	wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/assets/js/jquery.min.js', array( 'jquery' ), '20150813', true );
	wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), '20150813', true );
	wp_enqueue_script( 'popper.min', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery' ), '20150813', true );
	wp_enqueue_script( 'rellax.min', get_template_directory_uri() . '/assets/js/rellax.min.js', array( 'jquery' ), '20150813', true );
	wp_enqueue_script( 'theme.min', get_template_directory_uri() . '/assets/js/theme.min.js', array( 'jquery' ), '20150813', true );
	wp_enqueue_script( 'typed.min', get_template_directory_uri() . '/assets/js/typed.min.js', array( 'jquery' ), '20150813', true );
	
	// css 
	wp_enqueue_script( 'aos css', get_template_directory_uri() . '/assets/css/aos.css', array( 'jquery' ), '20150813', true );
	wp_enqueue_script( 'jquery.fancybox.min css', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array( 'jquery' ), '20150813', true );
	wp_enqueue_script( 'owl.carousel.min css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array( 'jquery' ), '20150813', true );
	wp_enqueue_script( 'styles css', get_template_directory_uri() . '/assets/css/style.css', array( 'jquery' ), '20150813', true );


	// Font icons, because we're retro like that
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/fonts/font-awesome.min.css', array(), null );

	if ( wp_style_is( 'genericons', 'registered' ) ) {
		wp_enqueue_style( 'genericons', get_template_directory_uri() . '/fonts/genericons.css', array(), null );
	} else {
		wp_enqueue_style( 'genericons', get_template_directory_uri() . '/fonts/genericons.css', array(), null );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pique_scripts' );



function pique_filter_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template', 'pique_filter_front_page_template' );

function pique_query_vars( $qvars ) {
	$qvars[] = 'pique_panel';
	return $qvars;
}
add_filter( 'query_vars', 'pique_query_vars' , 10, 1 );



function pique_get_random_posts( $number = 1, $post_type = 'post' ) {
	$query = new WP_Query( array(
		'posts_per_page' => 100,
		'fields'         => 'ids',
		'post_type'      => $post_type
	) );

	$post_ids = $query->posts;

	shuffle( $post_ids );

	$post_ids = array_splice( $post_ids, 0, $number );

	$random_posts = get_posts( array(
		'post__in'    => $post_ids,
		'numberposts' => count( $post_ids ),
		'post_type'   => $post_type
	) );

	return $random_posts;
}



require get_template_directory() . '/inc/custom-header.php';


require get_template_directory() . '/inc/template-tags.php';


require get_template_directory() . '/inc/extras.php';


require get_template_directory() . '/inc/customizer.php';


require get_template_directory() . '/inc/jetpack.php';


if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}




require get_template_directory() . '/inc/plugin-enhancements.php';

*/
	
	add_action('wp_enqueue_scripts', function()
	{
		$theme = get_template_directory_uri();

		wp_enqueue_style('theme',       $theme . '/style.css');

		wp_enqueue_script('vendor',     $theme . '/assets/js/*.js');

		wp_localize_script('framework', 'wp', array
		(
			"ajax_url" => admin_url('admin-ajax.php')
		));
	});

register_nav_menus( array(
			'primary'   => esc_html__( 'Primary Menu', 'pique' ),
			'secondary' => esc_html__( 'Secondary Menu', 'pique' ),
		) );

