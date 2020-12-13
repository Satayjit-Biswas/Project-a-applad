<?php 
	function theme_support(){
			add_theme_support('title-tag');
			add_theme_support('post-thumbnails');
			add_image_size('custom-thumb',58,58, false);
			add_image_size('custom-post-img',58,58, false);
			add_image_size('c-post-img', 540, 493, false);
		}
			add_action('after_setup_theme','theme_support');
  
	function all_css(){

		// all css file //
			wp_enqueue_style('bootstrap',   get_template_directory_uri() . '/css/bootstrap.min.css');
			wp_enqueue_style('fontawesome', get_template_directory_uri() .'/css/fontawesome.min.css');
			wp_enqueue_style('carousel', get_template_directory_uri() .'/css/owl.carousel.min.css');
			wp_enqueue_style('popup', get_template_directory_uri() .'/css/magnific-popup.css');
			wp_enqueue_style('helper', get_template_directory_uri() .'/css/helper.css');
			wp_enqueue_style('style', get_template_directory_uri() .'/css/style.css');
			wp_enqueue_style('responsive', get_template_directory_uri() .'/css/responsive.css');
			wp_enqueue_style('stylecss', get_stylesheet_uri());

		}
			add_action('wp_enqueue_scripts','all_css');

	function all_js(){
		// all js file //
    		wp_enqueue_script('jquery');
    		wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js','jquery','v1.0',true);
    		wp_enqueue_script('easing', get_template_directory_uri() . '/js/jquery.easing.min.js','jquery','v1.0',true);
    		wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js','jquery','v1.0',true);
	}
	add_action('wp_enqueue_scripts','all_js');

	register_nav_menus(array(
		'primary_menu' => 'primaray menu'
	));

	function callback(){ 
?>
		<a href="<?php echo esc_url(site_url()); ?>/wp-admin/nav-menus.php?action=edit&menu=0">Create Menu</a>
<?php
	}


	if ( !file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	    // File does not exist... return an error.
	    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
	} 
	else {
	    // File exists... require it.
	    require_once get_template_directory() .'/class-wp-bootstrap-navwalker.php';
	}
?>


<?php
add_theme_support('custom-logo',array(
	'height' =>115,
	'width'  =>32,
	'flex-width' => true,
	'flex-height' => true,
));
?>
<?php

	function a_section_post_function(){
		register_post_type('a_section', array(
			'labels' => array(
				'menu_name' => 'a section (Awesome apps..)',
				'name' => 'a section',
				'add_new' => 'Add New',
				'all_items' => 'All posts',
				'add_new_item' => 'Add New Item'

			),
			'public'    => true,
			'supports'  => array('custom-fields','title','editor'),
			'menu_icon' => 'dashicons-clipboard'
		));

	}
	add_action('init' , 'a_section_post_function');
	function b_section_post_function(){
		register_post_type('b_section', array(
			'labels' => array(
				'menu_name' => 'b section (Smart jackpots..)',
				'name' => 'b section',
				'add_new' => 'Add New',
				'all_items' => 'All posts',
				'add_new_item' => 'Add New Item'


			),
			'public' => true,
			'supports' => array('thumbnail','custom-fields','title','editor'),
			'menu_icon' => 'dashicons-clipboard'
		));

	}
	add_action('init' , 'b_section_post_function');

	function c_section_post_function(){
		register_post_type('c_section',array(
			'labels' => array(
				'menu_name' => 'c section (Designed & built..)',
				'name' => 'c section',
				'add_new' => 'Add New',
				'all_items' => 'All posts',
				'add_new_item' => 'Add New Item'


			),
			'public' => true,
			'supports' => array('thumbnail','custom-fields','title','editor'),
			'menu_icon' => 'dashicons-clipboard'
		));

	}

	add_action('init' , 'c_section_post_function');


	function d_section_post_function(){
		register_post_type('d_section',array(
			'labels' => array(
				'menu_name' => 'd section (Why you...)',
				'name' => 'd section',
				'add_new' => 'Add New',
				'all_items' => 'All posts',
				'add_new_item' => 'Add New Item'


			),
			'public' => true,
			'supports' => array('thumbnail','custom-fields','title','editor'),
			'menu_icon' => 'dashicons-clipboard'
		));

	}

	add_action('init' , 'd_section_post_function');


	function f_section_post_function(){
		register_post_type('f_section',array(
			'labels' => array(
				'menu_name' => 'f section (Mobile app...)',
				'name' => 'f section',
				'add_new' => 'Add New',
				'all_items' => 'All posts',
				'add_new_item' => 'Add New Item'


			),
			'public' => true,
			'supports' => array('custom-fields','title','editor'),
			'menu_icon' => 'dashicons-clipboard'
		));

	}

	add_action('init' , 'f_section_post_function');



	function g_section_post_function(){
		register_post_type('g_section',array(
			'labels' => array(
				'menu_name' => 'g section (Ultimate features...)',
				'name' => 'g section',
				'add_new' => 'Add New',
				'all_items' => 'All posts',
				'add_new_item' => 'Add New Item'


			),
			'public' => true,
			'supports' => array('title','editor'),
			'menu_icon' => 'dashicons-clipboard'
		));

	}

	add_action('init' , 'g_section_post_function');

	function monthly_section_post_function(){
		register_post_type('monthly_section',array(
			'labels' => array(
				'menu_name' => 'Monthly package',
				'name' => 'monthly package',
				'add_new' => 'Add New',
				'all_items' => 'All posts',
				'add_new_item' => 'Add New Item'


			),
			'public' => true,
			'supports' => array('title','editor'),
			'menu_icon' => 'dashicons-tickets'
		));

	}

	add_action('init' , 'monthly_section_post_function');


	function yearly_section_post_function(){
		register_post_type('yearly_section',array(
			'labels' => array(
				'menu_name' => 'Yearly package',
				'name' => 'yearly package',
				'add_new' => 'Add New',
				'all_items' => 'All posts',
				'add_new_item' => 'Add New Item'


			),
			'public' => true,
			'supports' => array('title','editor'),
			'menu_icon' => 'dashicons-tickets'
		));

	}

	add_action('init' , 'yearly_section_post_function');

	function h_section_post_function(){
		register_post_type('h_section',array(
			'labels' => array(
				'menu_name' => 'h section (Meet Client...)',
				'name' => 'h section',
				'add_new' => 'Add New',
				'all_items' => 'All posts',
				'add_new_item' => 'Add New Item'


			),
			'public' => true,
			'supports' => array('thumbnail','title','editor'),
			'menu_icon' => 'dashicons-clipboard'
		));

	}

	add_action('init' , 'h_section_post_function');


	function client_section_post_function(){
		register_post_type('client_section',array(
			'labels' => array(
				'menu_name' => 'client section (Meet Client...)',
				'name' => 'client section',
				'add_new' => 'Add New',
				'all_items' => 'All posts',
				'add_new_item' => 'Add New Item'


			),
			'public' => true,
			'supports' => array('title','editor'),
			'menu_icon' => 'dashicons-buddicons-buddypress-logo'
		));

	}

	add_action('init' , 'client_section_post_function');

	function i_section_post_function(){
		register_post_type('i_section',array(
			'labels' => array(
				'menu_name' => 'i section (Frequently...)',
				'name' => 'i section',
				'add_new' => 'Add New',
				'all_items' => 'All posts',
				'add_new_item' => 'Add New Item'


			),
			'public' => true,
			'supports' => array('title','editor'),
			'menu_icon' => 'dashicons-clipboard'
		));

	}

	add_action('init' , 'i_section_post_function');

	function j_section_post_function(){
		register_post_type('j_section',array(
			'labels' => array(
				'menu_name' => 'j section (Download ...)',
				'name' => 'j section',
				'add_new' => 'Add New',
				'all_items' => 'All posts',
				'add_new_item' => 'Add New Item'


			),
			'public' => true,
			'supports' => array('thumbnail','title','editor'),
			'menu_icon' => 'dashicons-clipboard'
		));

	}

	add_action('init' , 'j_section_post_function');

	function social_section_post_function(){
		register_post_type('social_section',array(
			'labels' => array(
				'menu_name' => 'social section (Download ...)',
				'name' => 'social section',
				'add_new' => 'Add New',
				'all_items' => 'All posts',
				'add_new_item' => 'Add New Item'


			),
			'public' => true,
			'supports' => array('title','editor'),
			'menu_icon' => 'dashicons-share'
		));

	}

	add_action('init' , 'social_section_post_function');





	require_once('inc/cmb2-custom.php');



?>	