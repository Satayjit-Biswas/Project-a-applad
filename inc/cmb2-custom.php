

<?php

require_once __DIR__ . '/CMB2/init.php';


function custom_fields(){
	$first_section_metabox = new_cmb2_box( array(
		'id'            => 'first_section',
		'title'         => __( 'first_section', 'Applad' ),
		'object_types'  => 'page', // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true,
		'show_on'       =>  array(
							'key'           => 'id',
							'value'         =>  104  ),

	) );
	$first_section_metabox->add_field( array(
		'name'       => __( 'First section text a', 'cmb2' ),
		'desc'       => __( 'Input your text', 'Applad' ),
		'id'         => 'frist_section_text_a',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$first_section_metabox->add_field( array(
		'name'       => __( 'First section text b', 'cmb2' ),
		'desc'       => __( 'Input your title', 'Applad' ),
		'id'         => 'frist_section_text_b',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$first_section_metabox->add_field( array(
		'name'       => __( 'First section text c', 'cmb2' ),
		'desc'       => __( 'Input your title', 'Applad' ),
		'id'         => 'frist_section_text_c',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$first_section_metabox->add_field( array(
		'name'       => __( 'First section button text', 'cmb2' ),
		'desc'       => __( 'Input your title', 'Applad' ),
		'id'         => 'frist_section_text_d',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$first_section_metabox->add_field( array(
		'name'       => __( 'first section button link', 'cmb2' ),
		'desc'       => __( 'Input your link', 'Applad' ),
		'id'         => 'frist_section_link_e',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$first_section_metabox->add_field( array(
		'name'       => __( 'first section video link', 'cmb2' ),
		'desc'       => __( 'Input your link', 'Applad' ),
		'id'         => 'frist_section_link_f',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$first_section_metabox->add_field( array(
		'name'       => __( 'first section bg img', 'cmb2' ),
		'desc'       => __( 'Input your bg img', 'Applad' ),
		'id'         => 'frist_section_bg_img',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$first_section_metabox->add_field( array(
		'name'       => __( 'first section img', 'cmb2' ),
		'desc'       => __( 'Input your img', 'Applad' ),
		'id'         => 'frist_section_img',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$first_section_metabox->add_field( array(
		'name'       => __( 'company logo', 'cmb2' ),
		'desc'       => __( 'company logo(min:5)', 'Applad' ),
		'id'         => 'company_logo',
		'type'       => 'file_list',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );


}
add_action( 'cmb2_admin_init', 'custom_fields' );



function a_section_fields(){
	$a_section_metabox = new_cmb2_box( array(
		'id'            => 'a_metabox',
		'title'         => __( 'a section text (Awesome apps features)', 'Applad' ),
		'object_types'  => 'a_section', // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true,
	) );
	$a_section_metabox->add_field( array(
		'name'       => __( 'img file', 'cmb2' ),
		'desc'       => __( 'Input your img', 'Applad' ),
		'id'         => 'a_section_img',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	 ) );
	$a_section_metabox->add_field( array(
		'name'       => __( 'icon-a', 'cmb2' ),
		'desc'       => __( 'Input your icon-a', 'Applad' ),
		'id'         => 'a_section_icon_a',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$a_section_metabox->add_field( array(
		'name'       => __( 'title(icon-a)', 'cmb2' ),
		'desc'       => __( 'Input your title', 'Applad' ),
		'id'         => 'a_section_title_a',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$a_section_metabox->add_field( array(
		'name'       => __( 'title-color(icon-a)', 'cmb2' ),
		'desc'       => __( 'Input your color code', 'Applad' ),
		'id'         => 'a_section_color_a',
		'type'    => 'colorpicker',
		'default' => '#dd3333',
	) );
	$a_section_metabox->add_field( array(
		'name'       => __( 'text(icon-a)', 'cmb2' ),
		'desc'       => __( 'Input your text', 'Applad' ),
		'id'         => 'a_section_text_a',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );




	$a_section_metabox->add_field( array(
		'name'       => __( 'icon-b', 'cmb2' ),
		'desc'       => __( 'Input your icon-b', 'Applad' ),
		'id'         => 'a_section_icon_b',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$a_section_metabox->add_field( array(
		'name'       => __( 'title(icon-b)', 'cmb2' ),
		'desc'       => __( 'Input your title', 'Applad' ),
		'id'         => 'a_section_title_b',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$a_section_metabox->add_field( array(
		'name'       => __( 'title-color(icon-b)', 'cmb2' ),
		'desc'       => __( 'Input your color code', 'Applad' ),
		'id'         => 'a_section_color_b',
		'type'    => 'colorpicker',
		'default' => '#dd3333',
	) );
	$a_section_metabox->add_field( array(
		'name'       => __( 'text(icon-b)', 'cmb2' ),
		'desc'       => __( 'Input your text', 'Applad' ),
		'id'         => 'a_section_text_b',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );






	$a_section_metabox->add_field( array(
		'name'       => __( 'icon-c', 'cmb2' ),
		'desc'       => __( 'Input your icon-c', 'Applad' ),
		'id'         => 'a_section_icon_c',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$a_section_metabox->add_field( array(
		'name'       => __( 'title(icon-c)', 'cmb2' ),
		'desc'       => __( 'Input your title', 'Applad' ),
		'id'         => 'a_section_title_c',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$a_section_metabox->add_field( array(
		'name'       => __( 'title-color(icon-c)', 'cmb2' ),
		'desc'       => __( 'Input your color code', 'Applad' ),
		'id'         => 'a_section_color_c',
		'type'    => 'colorpicker',
		'default' => '#dd3333',
	) );
	$a_section_metabox->add_field( array(
		'name'       => __( 'text(icon-c)', 'cmb2' ),
		'desc'       => __( 'Input your text', 'Applad' ),
		'id'         => 'a_section_text_c',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );


}
add_action( 'cmb2_admin_init', 'a_section_fields' );






function b_section_fields(){
	$b_section_metabox = new_cmb2_box( array(
		'id'            => 'b_metabox',
		'title'         => __( 'b section text (Awesome apps features)', 'Applad' ),
		'object_types'  => 'b_section', // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true,
	) );
	$b_section_metabox->add_field( array(
		'name'       => __( 'icon-a', 'cmb2' ),
		'desc'       => __( 'Input your icon-a', 'Applad' ),
		'id'         => 'b_section_icon_a',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$b_section_metabox->add_field( array(
		'name'       => __( 'title(icon-a)', 'cmb2' ),
		'desc'       => __( 'Input your title', 'Applad' ),
		'id'         => 'b_section_title_a',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$b_section_metabox->add_field( array(
		'name'       => __( 'title-color(icon-a)', 'cmb2' ),
		'desc'       => __( 'Input your color code', 'Applad' ),
		'id'         => 'b_section_color_a',
		'type'    => 'colorpicker',
		'default' => '#dd3333',
	) );
	$b_section_metabox->add_field( array(
	'name'       => __( 'text(icon-a)', 'cmb2' ),
		'desc'       => __( 'Input your text', 'Applad' ),
		'id'         => 'b_section_text_a',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$b_section_metabox->add_field( array(
		'name'       => __( 'icon-b', 'cmb2' ),
		'desc'       => __( 'Input your icon-b', 'Applad' ),
		'id'         => 'b_section_icon_b',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$b_section_metabox->add_field( array(
		'name'       => __( 'title(icon-b)', 'cmb2' ),
		'desc'       => __( 'Input your title', 'Applad' ),
		'id'         => 'b_section_title_b',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$b_section_metabox->add_field( array(
		'name'       => __( 'title-color(icon-b)', 'cmb2' ),
		'desc'       => __( 'Input your color code', 'Applad' ),
		'id'         => 'b_section_color_b',
		'type'    => 'colorpicker',
		'default' => '#dd3333',
	) );
	$b_section_metabox->add_field( array(
		'name'       => __( 'text(icon-b)', 'cmb2' ),
		'desc'       => __( 'Input your text', 'Applad' ),
		'id'         => 'b_section_text_b',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$b_section_metabox->add_field( array(
		'name'       => __( 'icon-c', 'cmb2' ),
		'desc'       => __( 'Input your icon-c', 'Applad' ),
		'id'         => 'b_section_icon_c',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$b_section_metabox->add_field( array(
		'name'       => __( 'title(icon-c)', 'cmb2' ),
		'desc'       => __( 'Input your title', 'Applad' ),
		'id'         => 'b_section_title_c',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$b_section_metabox->add_field( array(
		'name'       => __( 'title-color(icon-c)', 'cmb2' ),
		'desc'       => __( 'Input your color code', 'Applad' ),
		'id'         => 'b_section_color_c',
		'type'    => 'colorpicker',
		'default' => '#dd3333',
	) );
	$b_section_metabox->add_field( array(
		'name'       => __( 'text(icon-c)', 'cmb2' ),
		'desc'       => __( 'Input your text', 'Applad' ),
		'id'         => 'b_section_text_c',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );


}
add_action( 'cmb2_admin_init', 'b_section_fields' );



function c_section_fields(){
	$c_section_metabox = new_cmb2_box( array(
		'id'            => 'c_metabox',
		'title'         => __( 'c section', 'Applad' ),
		'object_types'  => 'c_section',
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );

	$c_section_metabox->add_field( array(
		'name'       => __( 'img file', 'cmb2' ),
		'desc'       => __( 'input your file', 'cmb2' ),
		'id'         => 'c_section_img',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));

}
add_action( 'cmb2_admin_init', 'c_section_fields' );



function f_section_fields(){
	$f_section_metabox = new_cmb2_box( array(
		'id'            => 'f_metabox',
		'title'         => __( 'f section', 'Applad' ),
		'object_types'  => 'f_section',
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );

	$f_section_metabox->add_field( array(
		'name'       => __( 'img file', 'cmb2' ),
		'desc'       => __( 'input your file', 'cmb2' ),
		'id'         => 'f_section_screenshots',
		'type'       => 'file_list',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));

}
add_action( 'cmb2_admin_init', 'f_section_fields' );




function g_section_fields(){
	$g_section_metabox = new_cmb2_box( array(
		'id'            => 'g_metabox',
		'title'         => __( 'g section text (Awesome apps features)', 'Applad' ),
		'object_types'  => 'g_section', // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true,
	) );
	$g_section_metabox->add_field( array(
		'name'       => __( 'img file', 'cmb2' ),
		'desc'       => __( 'Input your img', 'Applad' ),
		'id'         => 'g_section_img',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	 ) );
	$g_section_metabox->add_field( array(
		'name'       => __( 'icon-a', 'cmb2' ),
		'desc'       => __( 'Input your icon-a', 'Applad' ),
		'id'         => 'g_section_icon_a',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$g_section_metabox->add_field( array(
		'name'       => __( 'title(icon-a)', 'cmb2' ),
		'desc'       => __( 'Input your title', 'Applad' ),
		'id'         => 'g_section_title_a',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$g_section_metabox->add_field( array(
		'name'       => __( 'title-color(icon-a)', 'cmb2' ),
		'desc'       => __( 'Input your color code', 'Applad' ),
		'id'         => 'g_section_color_a',
		'type'    => 'colorpicker',
		'default' => '#dd3333',
	) );
	$g_section_metabox->add_field( array(
		'name'       => __( 'text(icon-a)', 'cmb2' ),
		'desc'       => __( 'Input your text', 'Applad' ),
		'id'         => 'g_section_text_a',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );




	$g_section_metabox->add_field( array(
		'name'       => __( 'icon-b', 'cmb2' ),
		'desc'       => __( 'Input your icon-b', 'Applad' ),
		'id'         => 'g_section_icon_b',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$g_section_metabox->add_field( array(
		'name'       => __( 'title(icon-b)', 'cmb2' ),
		'desc'       => __( 'Input your title', 'Applad' ),
		'id'         => 'g_section_title_b',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$g_section_metabox->add_field( array(
		'name'       => __( 'title-color(icon-b)', 'cmb2' ),
		'desc'       => __( 'Input your color code', 'Applad' ),
		'id'         => 'g_section_color_b',
		'type'    => 'colorpicker',
		'default' => '#dd3333',
	) );
	$g_section_metabox->add_field( array(
		'name'       => __( 'text(icon-b)', 'cmb2' ),
		'desc'       => __( 'Input your text', 'Applad' ),
		'id'         => 'g_section_text_b',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );






	$g_section_metabox->add_field( array(
		'name'       => __( 'icon-c', 'cmb2' ),
		'desc'       => __( 'Input your icon-c', 'Applad' ),
		'id'         => 'g_section_icon_c',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$g_section_metabox->add_field( array(
		'name'       => __( 'title(icon-c)', 'cmb2' ),
		'desc'       => __( 'Input your title', 'Applad' ),
		'id'         => 'g_section_title_c',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$g_section_metabox->add_field( array(
		'name'       => __( 'title-color(icon-c)', 'cmb2' ),
		'desc'       => __( 'Input your color code', 'Applad' ),
		'id'         => 'g_section_color_c',
		'type'    => 'colorpicker',
		'default' => '#dd3333',
	) );
	$g_section_metabox->add_field( array(
		'name'       => __( 'text(icon-c)', 'cmb2' ),
		'desc'       => __( 'Input your text', 'Applad' ),
		'id'         => 'g_section_text_c',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );



	$g_section_metabox->add_field( array(
		'name'       => __( 'icon-d', 'cmb2' ),
		'desc'       => __( 'Input your icon-d', 'Applad' ),
		'id'         => 'g_section_icon_d',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );

	$g_section_metabox->add_field( array(
		'name'       => __( 'title(icon-d)', 'cmb2' ),
		'desc'       => __( 'Input your title', 'Applad' ),
		'id'         => 'g_section_title_d',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$g_section_metabox->add_field( array(
		'name'       => __( 'title-color(icon-d)', 'cmb2' ),
		'desc'       => __( 'Input your color code', 'Applad' ),
		'id'         => 'g_section_color_d',
		'type'    => 'colorpicker',
		'default' => '#dd3333',
	) );
	$g_section_metabox->add_field( array(
		'name'       => __( 'text(icon-d)', 'cmb2' ),
		'desc'       => __( 'Input your text', 'Applad' ),
		'id'         => 'g_section_text_d',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );


}
add_action( 'cmb2_admin_init', 'g_section_fields' );

function monthly_section_fields(){
	$monthly_section_metabox = new_cmb2_box( array(
		'id'            => 'monthly_metabox',
		'title'         => __( 'monthly section', 'Applad' ),
		'object_types'  => 'monthly_section',
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );

	$monthly_section_metabox->add_field( array(
		'name'       => __( 'Package Price', 'cmb2' ),
		'desc'       => __( 'input your package price', 'cmb2' ),
		'id'         => 'monthly_section_price',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));


	$monthly_section_metabox->add_field( array(
		'name'       => __( 'Element a', 'cmb2' ),
		'desc'       => __( 'input your package price', 'cmb2' ),
		'id'         => 'monthly_section_Element_a',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));
	$monthly_section_metabox->add_field( array(
		'name'       => __( 'Element b', 'cmb2' ),
		'desc'       => __( 'input your package price', 'cmb2' ),
		'id'         => 'monthly_section_Element_b',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));
	$monthly_section_metabox->add_field( array(
		'name'       => __( 'Element c', 'cmb2' ),
		'desc'       => __( 'input your package price', 'cmb2' ),
		'id'         => 'monthly_section_Element_c',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));
	$monthly_section_metabox->add_field( array(
		'name'       => __( 'Element d', 'cmb2' ),
		'desc'       => __( 'input your package price', 'cmb2' ),
		'id'         => 'monthly_section_Element_d',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));

}
add_action( 'cmb2_admin_init', 'monthly_section_fields' );


function yearly_section_fields(){
	$yearly_section_metabox = new_cmb2_box( array(
		'id'            => 'yearly_metabox',
		'title'         => __( 'yearly section', 'Applad' ),
		'object_types'  => 'yearly_section',
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );

	$yearly_section_metabox->add_field( array(
		'name'       => __( 'Package Price', 'cmb2' ),
		'desc'       => __( 'input your package price', 'cmb2' ),
		'id'         => 'yearly_section_price',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));


	$yearly_section_metabox->add_field( array(
		'name'       => __( 'Element a', 'cmb2' ),
		'desc'       => __( 'input your package price', 'cmb2' ),
		'id'         => 'yearly_section_Element_a',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));
	$yearly_section_metabox->add_field( array(
		'name'       => __( 'Element b', 'cmb2' ),
		'desc'       => __( 'input your package price', 'cmb2' ),
		'id'         => 'yearly_section_Element_b',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));
	$yearly_section_metabox->add_field( array(
		'name'       => __( 'Element c', 'cmb2' ),
		'desc'       => __( 'input your package price', 'cmb2' ),
		'id'         => 'yearly_section_Element_c',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));
	$yearly_section_metabox->add_field( array(
		'name'       => __( 'Element d', 'cmb2' ),
		'desc'       => __( 'input your package price', 'cmb2' ),
		'id'         => 'yearly_section_Element_d',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));

}
add_action( 'cmb2_admin_init', 'yearly_section_fields' );

function client_section_fields(){
	$client_section_metabox = new_cmb2_box( array(
		'id'            => 'client_metabox',
		'title'         => __( 'client section', 'Applad' ),
		'object_types'  => 'client_section',
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );

	$client_section_metabox->add_field( array(
		'name'       => __( 'client img', 'cmb2' ),
		'desc'       => __( 'input your client file', 'cmb2' ),
		'id'         => 'client_section_img',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));


	$client_section_metabox->add_field( array(
		'name'       => __( 'client name', 'cmb2' ),
		'desc'       => __( 'input your client name', 'cmb2' ),
		'id'         => 'client_section_name',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));
	$client_section_metabox->add_field( array(
		'name'       => __( 'client post', 'cmb2' ),
		'desc'       => __( 'input your client post', 'cmb2' ),
		'id'         => 'client_section_post',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));

}
add_action( 'cmb2_admin_init', 'client_section_fields' );

function j_section_fields(){
	$j_section_metabox = new_cmb2_box( array(
		'id'            => 'j_metabox',
		'title'         => __( 'j section', 'Applad' ),
		'object_types'  => 'j_section',
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
	$j_section_metabox->add_field( array(
		'name'       => __( 'Logo-a', 'cmb2' ),
		'desc'       => __( 'input your file', 'cmb2' ),
		'id'         => 'j_section_logo_a',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));
	$j_section_metabox->add_field( array(
		'name'       => __( 'Logo-b', 'cmb2' ),
		'desc'       => __( 'input your file', 'cmb2' ),
		'id'         => 'j_section_logo_b',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));

}
add_action( 'cmb2_admin_init', 'j_section_fields' );

function social_section_fields(){
	$social_section_metabox = new_cmb2_box( array(
		'id'            => 'social_metabox',
		'title'         => __( 'social section', 'Applad' ),
		'object_types'  => 'social_section',
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
	$social_section_metabox->add_field( array(
		'name'       => __( 'social-name', 'cmb2' ),
		'desc'       => __( 'input your social logo name (for example : fab fa-facebook-f,fab fa-twitter)', 'cmb2' ),
		'id'         => 'social_section_logo_nane',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));
	$social_section_metabox->add_field( array(
		'name'       => __( 'social-link', 'cmb2' ),
		'desc'       => __( 'input your social link', 'cmb2' ),
		'id'         => 'social_section_logo_link',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	));

}
add_action( 'cmb2_admin_init', 'social_section_fields' );
?>