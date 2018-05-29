<?php
/*Adding css and js file to the website*/
function add_css_js()
{
	/*Styls*/
	wp_enqueue_style('master',get_template_directory_uri().'/css/master.css',null,'v1.1.0','all');
	wp_enqueue_style('font1','https://fonts.googleapis.com/css?family=Noto+Serif:400italic,400',null,'v1.1.0','all');
	wp_enqueue_style('font2','http://fonts.googleapis.com/css?family=Raleway:400,600',null,'v1.1.0','all');
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/color/color-1.css',null,'v1.1.0','all');
	wp_enqueue_style('magnific_poup',get_template_directory_uri().'/css/skgp.css',null,'v1.1.0','all');
	wp_enqueue_style('style_imp',get_stylesheet_uri());

	/*Scripts*/
	wp_enqueue_script('min_js',get_template_directory_uri().'/js/jquery-3.2.1.min.js',null,'v1.0',true);

	wp_enqueue_script('bootstarp_min_js',get_template_directory_uri().'/js/bootstrap.min.js',null,'v1.0',true);

	wp_enqueue_script('boots_nav',get_template_directory_uri().'/js/bootsnav.js',null,'v1.0',true);

	wp_enqueue_script('appear_js',get_template_directory_uri().'/js/jquery.appear.js',null,'v1.0',true);

	wp_enqueue_script('owlslider_js',get_template_directory_uri().'/js/owl.carousel.min.js',null,'v1.0',true);

	wp_enqueue_script('parallex_js',get_template_directory_uri().'/js/parallaxie.js',null,'v1.0',true);

	wp_enqueue_script('fancybox_js',get_template_directory_uri().'/js/jquery.fancybox.min.js',null,'v1.0',true);

	wp_enqueue_script('cubeportfolio_js',get_template_directory_uri().'/js/cubeportfolio.min.js',null,'v1.0',true);

	wp_enqueue_script('bootstrap_select_js',get_template_directory_uri().'/js/bootstrap-select.js',null,'v1.0',true);

	wp_enqueue_script('wow_js',get_template_directory_uri().'/js/wow.min.js',null,'v1.0',true);

	wp_enqueue_script('range_slider_js',get_template_directory_uri().'/js/range-Slider.min.js',null,'v1.0',true);
	wp_enqueue_script('selectbox_js',get_template_directory_uri().'/js/selectbox-0.2.min.js',null,'v1.0',true);
	wp_enqueue_script('scroll_reveal_js',get_template_directory_uri().'/js/scrollreveal.min.js',null,'v1.0',true);
	wp_enqueue_script('counto_js',get_template_directory_uri().'/js/jquery-countTo.js',null,'v1.0',true);
	wp_enqueue_script('typewriter_js',get_template_directory_uri().'/js/jquery.typewriter.js',null,'v1.0',true);
	wp_enqueue_script('death_min_js',get_template_directory_uri().'/js/death.min.js',null,'v1.0',true);


	/*Resolution slider*/
	wp_enqueue_script('revolution1_js',get_template_directory_uri().'/js/themepunch/jquery.themepunch.tools.min.js',null,'v1.0',true);
	wp_enqueue_script('revolution2_js',get_template_directory_uri().'/js/themepunch/jquery.themepunch.revolution.min.js',null,'v1.0',true);
	wp_enqueue_script('revolution3_js',get_template_directory_uri().'/js/themepunch/revolution.extension.layeranimation.min.js',null,'v1.0',true);
	wp_enqueue_script('revolution4_js',get_template_directory_uri().'/js/themepunch/revolution.extension.navigation.min.js',null,'v1.0',true);
	wp_enqueue_script('revolution5_js',get_template_directory_uri().'/js/themepunch/revolution.extension.parallax.min.js',null,'v1.0',true);
	wp_enqueue_script('revolution6_js',get_template_directory_uri().'/js/themepunch/revolution.extension.slideanims.min.js',null,'v1.0',true);
	wp_enqueue_script('revolution7_js',get_template_directory_uri().'/js/themepunch/revolution.extension.video.min.js',null,'v1.0',true);
	/*Resolution*/
	wp_enqueue_script('custom_js',get_template_directory_uri().'/js/functions.js',null,'v1.0',true);
	/*Maps & Markers*/
	wp_enqueue_script('forms_js',get_template_directory_uri().'/js/form.js',null,'v1.0',true);
	wp_enqueue_script('custom_map_js',get_template_directory_uri().'/js/custom-map.js',null,'v1.0',true);

	wp_enqueue_script('scriptstar_js','http://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U',null,'v1.0',true);

	wp_enqueue_script('gmap_js',get_template_directory_uri().'/js/gmaps.js',null,'v1.0',true);
	wp_enqueue_script('contact_js',get_template_directory_uri().'/js/contact.js',null,'v1.0',true);
}
add_action('wp_enqueue_scripts','add_css_js');
/*Theme basic initialization*/
function skgp_theme_init()
{
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 360, 251 ,true);
	add_image_size('slider_img',1900,831,true);
	register_nav_menus(array(
	'primary_menu'=>'Primary Menu',
	'footer_menu'=>'Footer Menu'
	));
}
add_action('after_setup_theme','skgp_theme_init');
add_filter('show_admin_bar', '__return_false');



/*************************************************************************************************/
/******************************ADDING CUSTOM META BOXES*******************************************/
include('include/custom_meta.php');
/*************************************************************************************************/
/*************************************************************************************************/

/*************************************************************************************************/
/******************************CHANGE POST INSTANCE*******************************************/
include('include/change_post_instance.php');
/*************************************************************************************************/
/*************************************************************************************************/

/*************************************************************************************************/
/******************************ADD BOOTSTRAP ON DASHBOARD*******************************************/
include('include/add_bootstrap_dashboard.php');
/*************************************************************************************************/
/*************************************************************************************************/

/************************************************************************************************/
/******************************REMOVE DASHBAORD PARTICULAR MENU**********************************/
function remove_menus(){
  
  remove_menu_page( 'edit-comments.php' );          //Comments
}
add_action( 'admin_menu', 'remove_menus' );

/**********************************************************************************************/
/**********************************************************************************************/

/*************************************************************************************************/
/******************************Home Slider*******************************************************/
include('include/home_slider.php');
/*************************************************************************************************/
/*************************************************************************************************/

function get_excerpt(){
$excerpt = get_the_content();
$excerpt = preg_replace(" ([.*?])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 70);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
return $excerpt;
}
/*************************************************************************************************/
/****************************** Testimonials*******************************************************/
include('include/testimonials.php');
/*************************************************************************************************/


/**************************************************************************************************/
/*********************************Image Upload*****************************************************/




?>