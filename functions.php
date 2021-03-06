<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */
 
function allure_scripts() {
	
	// enqueue styles
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/assets/plugins/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('jquery-ui', get_stylesheet_directory_uri().'/assets/plugins/jquery-ui/jquery-ui.min.css');
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri().'/assets/plugins/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('select_option1', get_stylesheet_directory_uri().'/assets/plugins/selectbox/select_option1.css');
	wp_enqueue_style('owl-carousel', get_stylesheet_directory_uri().'/assets/plugins/owl-carousel/owl.carousel.min.css');
	wp_enqueue_style('fancybox', get_stylesheet_directory_uri().'/assets/plugins/fancybox/jquery.fancybox.pack.css');
	wp_enqueue_style('isotope', get_stylesheet_directory_uri().'/assets/plugins/isotope/isotope.min.css');
	wp_enqueue_style('datepicker', get_stylesheet_directory_uri().'/assets/plugins/datepicker/datepicker.min.css');
	wp_enqueue_style('bootstrapthumbnail', get_stylesheet_directory_uri().'/assets/plugins/bootstrapthumbnail/bootstrap-thumbnail.css');
	
	wp_enqueue_style('style', get_stylesheet_directory_uri().'/assets/css/style.css');
	wp_enqueue_style('default', get_stylesheet_directory_uri().'/assets/css/default.css');
	

	
	// enqueue script
	wp_enqueue_script('jquery', get_template_directory_uri() .'/js/jquery/jquery.min.js', array('jquery'), '20170615', true);
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/plugins/bootstrap/js/bootstrap.min.js', array('bootstrap'), '20170615', true);
	
	/*
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/plugins/bootstrap/js/bootstrap.min.js', array('bootstrap'), '20170615', true);
	wp_enqueue_script('jquery-ui', get_template_directory_uri().'/assets/plugins/jquery-ui/jquery-ui.min.js', array('jquery-ui'), '20170615', true);
	wp_enqueue_script('selectbox', get_template_directory_uri().'/assets/plugins/selectbox/jquery.selectbox-0.1.3.min.js', array('selectbox'), '20170615', true);
	wp_enqueue_script('owl-carousel', get_template_directory_uri().'/assets/plugins/owl-carousel/owl.carousel.min.js', array('owl-carousel'), '20170615', true);
	wp_enqueue_script('fancybox', get_template_directory_uri().'/assets/plugins/fancybox/jquery.fancybox.pack.js', array('fancybox'), '20170615', true);
	wp_enqueue_script('isotope', get_template_directory_uri().'/assets/plugins/isotope/isotope.min.js', array('jquery'), 'isotope', true);
	wp_enqueue_script('isotope-triger', get_template_directory_uri().'/assets/plugins/isotope/isotope-triger.min.js', array('isotope-triger'), '20170615', true);
	wp_enqueue_script('bootstrap-datepicker', get_template_directory_uri().'/assets/plugins/datepicker/bootstrap-datepicker.min.js', array('bootstrap-datepicker'), '20170615', true);
	wp_enqueue_script('syotimer', get_template_directory_uri().'/assets/plugins/syotimer/jquery.syotimer.min.js', array('syotimer'), '20170615', true);
	wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js', array('custom'), '20170615', true);
	*/

  
 
  
  
	
}
add_action('wp_enqueue_scripts', 'allure_scripts');



