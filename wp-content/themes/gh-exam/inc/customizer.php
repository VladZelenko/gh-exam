<?php
/**
 * gh-exam Theme Customizer
 *
 * @package gh-exam
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function gh_exam_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';



	//+++++++++++++++++++++++++++++++++++++++++GENERAL SETTINGS THEME+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	//
	//
	//nav menu font color
	$wp_customize->add_setting('navmenu_font_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navmenu_font_color', array(
		'label'      => __( 'Menu font color', 'gh-exam' ),
		'section'    => 'colors',
		'settings'   => 'navmenu_font_color',
		'priority'	 => 1,
		)));
	//nav menu font color - end

		//nav menu hover font color
	$wp_customize->add_setting('navmenu_hover_font', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navmenu_hover_font', array(
		'label'      => __( 'Menu hover font color', 'gh-exam' ),
		'section'    => 'colors',
		'settings'   => 'navmenu_hover_font',
		'priority'	 => 2,
		)));
	//nav menu hover font color - end

	//background top navmenu
	$wp_customize->add_setting('bg_top_navmenu', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_top_navmenu', array(
		'label'      => __( 'Background header menu', 'gh-exam' ),
		'section'    => 'colors',
		'settings'   => 'bg_top_navmenu',
		'priority'	 => 3,
		)));
	//background top navmenu - end

	//title widgets color
	$wp_customize->add_setting('title_font_wigets', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_font_wigets', array(
		'label'      => __( 'Title font widgets', 'gh-exam' ),
		'section'    => 'colors',
		'settings'   => 'title_font_wigets',
		'priority'	 => 5,
		)));
	//title widgets color - end

	//background title widgets
	$wp_customize->add_setting('title_background_wigets', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_background_wigets', array(
		'label'      => __( 'Title background widgets', 'gh-exam' ),
		'section'    => 'colors',
		'settings'   => 'title_background_wigets',
		'priority'	 => 6,
		)));
	//background title widgets - end

	//background widgets
	$wp_customize->add_setting('background_wigets', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_wigets', array(
		'label'      => __( 'Background widgets', 'gh-exam' ),
		'section'    => 'colors',
		'settings'   => 'background_wigets',
		'priority'	 => 7,
		)));
	//background widgets - end

	//links widgets color
	$wp_customize->add_setting('links_color_wigets', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'links_color_wigets', array(
		'label'      => __( 'Links font widgets', 'gh-exam' ),
		'section'    => 'colors',
		'settings'   => 'links_color_wigets',
		'priority'	 => 8,
		)));
	//title widgets - end

	//copyright font color
	$wp_customize->add_setting('copy_right_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'copy_right_color', array(
		'label'      => __( 'Copy Right color', 'gh-exam' ),
		'section'    => 'colors',
		'settings'   => 'copy_right_color',
		'priority'	 => 9,
		)));
	//copyright ont color - end

	//copyright font background
	$wp_customize->add_setting('copy_right_bg', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'copy_right_bg', array(
		'label'      => __( 'Copy Right background', 'gh-exam' ),
		'section'    => 'colors',
		'settings'   => 'copy_right_bg',
		'priority'	 => 10,
		)));
	//copyright ont background - end

//copyright font background
	$wp_customize->add_setting('footer_logo', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_logo', array(
		'label'      => __( 'Background section footer logotype', 'gh-exam' ),
		'section'    => 'colors',
		'settings'   => 'footer_logo',
		'priority'	 => 11,
		)));
	//copyright ont background - end

	//copyright
	$wp_customize->add_setting('company_title', array( 'default'=> ''));
	$wp_customize->add_control(
		'company_title',
		array(
			'label'    => __( 'Company title', 'gh-exam' ),
			'section'  => 'title_tagline',
			'settings' => 'company_title',
			'type'     => 'text',
			));
	//copyright - end

	//nav menu font color
	$wp_customize->add_setting('comapany_font_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comapany_font_color', array(
		'label'      => __( 'Company font color', 'gh-exam' ),
		'section'    => 'colors',
		'settings'   => 'comapany_font_color',
		'priority'	 => 12,
		)));
	//nav menu font color - end

	//nav menu font color
	$wp_customize->add_setting('comapany_bg', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comapany_bg', array(
		'label'      => __( 'Company background', 'gh-exam' ),
		'section'    => 'colors',
		'settings'   => 'comapany_bg',
		'priority'	 => 13,
		)));
	//nav menu font color - end

	//copyright
	$wp_customize->add_setting('copy_right', array( 'default'=> ''));
	$wp_customize->add_control(
		'copy_right',
		array(
			'label'    => __( 'CopyRight', 'gh-exam' ),
			'section'  => 'title_tagline',
			'settings' => 'copy_right',
			'type'     => 'textarea',
			));
	//copyright - end
	//
	//
	//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



	//++++++++++++++++++++++++++++++++++++++++BLOG PANELS: SECTIONS, SETTINGS AND CONTROL+++++++++++++++++++++++++++++++++++++++
	//
	//
	$wp_customize->add_panel( 'blog_panel', array(
		'title' => 'Blog page',
		'priority' => 10,
		));
	$wp_customize->add_section( 'header_section' , array(
		'title'      => __( 'Header', 'gh-exam' ),
		'priority'   => 10,
		'panel'			 => 'blog_panel',
		));
	$wp_customize->add_section( 'content_section' , array(
		'title'      => __( 'Content', 'gh-exam' ),
		'priority'   => 20,
		'panel'			 => 'blog_panel',
		));

	$wp_customize->add_section( 'buttons_section' , array(
		'title'      => __( 'Buttons contact form', 'gh-exam' ),
		'priority'   => 30,
		'panel'			 => 'blog_panel',
		));

	$wp_customize->add_section( 'footer_section' , array(
		'title'      => __( 'Footer', 'gh-exam' ),
		'priority'   => 40,
		'panel'			 => 'blog_panel',
		));

	//Blog page header title font color
	$wp_customize->add_setting('blog_head_title_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog_head_title_color', array(
		'label'      => __( 'Header title font color', 'gh-exam' ),
		'section'    => 'header_section',
		'settings'   => 'blog_head_title_color',
		'priority'	 => 4,
		)));
	//Blog page header title font color - end

	//Blog page header title font size
	$wp_customize->add_setting('blog_title_font_size', array( 'default'=> ''));
	$wp_customize->add_control( 'blog_title_font_size', array(
		'label' => __('Title font size', 'gh-exam' ),
		'section' => 'header_section',
		'settings'   => 'blog_title_font_size',
		'type' => 'number',
		'priority' => 5,
		) );
	//Blog page header title font size - end

	//Blog page header title font weight
	$wp_customize->add_setting('blog_title_font_weight', array( 'default'=> ''));
	$wp_customize->add_control( 'blog_title_font_weight', array(
		'label' => __('Title font weight', 'gh-exam' ),
		'section' => 'header_section',
		'settings'   => 'blog_title_font_weight',
		'type' => 'number',
		'priority' => 6,
		) );
	//Blog page header title font weight - end

	//Post button border-size
	$wp_customize->add_setting('post_btn_name', array( 'default'=> ''));
	$wp_customize->add_control( 'post_btn_name', array(
		'label' => __('Name post button', 'gh-exam' ),
		'section' => 'buttons_section',
		'settings'   => 'post_btn_name',
		'type' => 'text',
		'priority' => 1,
		) );
	//Post button border-size - end

	//Post button font size
	$wp_customize->add_setting('post_btn_font_size', array( 'default'=> ''));
	$wp_customize->add_control( 'post_btn_font_size', array(
		'label' => __('Post button font size', 'gh-exam' ),
		'section' => 'buttons_section',
		'settings'   => 'post_btn_font_size',
		'type' => 'number',
		'priority' => 2,
		) );
	//Post button font size - end

	//Post button font weight
	$wp_customize->add_setting('post_btn_font_weight', array( 'default'=> ''));
	$wp_customize->add_control( 'post_btn_font_weight', array(
		'label' => __('Post button font weight', 'gh-exam' ),
		'section' => 'buttons_section',
		'settings'   => 'post_btn_font_weight',
		'type' => 'number',
		'priority' => 3,
		) );
	//Post button font weight - end

	//Post button width
	$wp_customize->add_setting('post_btn_width', array( 'default'=> ''));
	$wp_customize->add_control( 'post_btn_width', array(
		'label' => __('Width button', 'gh-exam' ),
		'section' => 'buttons_section',
		'settings'   => 'post_btn_width',
		'type' => 'number',
		'priority' => 4,
		) );
	//Post button width - end

	//Post button height
	$wp_customize->add_setting('post_btn_height', array( 'default'=> ''));
	$wp_customize->add_control( 'post_btn_height', array(
		'label' => __('Height button', 'gh-exam' ),
		'section' => 'buttons_section',
		'settings'   => 'post_btn_height',
		'type' => 'number',
		'priority' => 5,
		) );
	//Post button height - end

	//Post button border-radius
	$wp_customize->add_setting('post_btn_radius', array( 'default'=> ''));
	$wp_customize->add_control( 'post_btn_radius', array(
		'label' => __('Border-radius', 'gh-exam' ),
		'section' => 'buttons_section',
		'settings'   => 'post_btn_radius',
		'type' => 'number',
		'priority' => 6,
		) );
	//Post button border-radius - end

	//Post button border-size
	$wp_customize->add_setting('post_btn_border_size', array( 'default'=> ''));
	$wp_customize->add_control( 'post_btn_border_size', array(
		'label' => __('Border-size', 'gh-exam' ),
		'section' => 'buttons_section',
		'settings'   => 'post_btn_border_size',
		'type' => 'number',
		'priority' => 7,
		) );
	//Post button border-size - end

	//color_link, button
	$wp_customize->add_setting('color_link', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_link', array(
		'label'      => __( 'Bautton font color', 'gh-exam' ),
		'section'    => 'buttons_section',
		'settings'   => 'color_link',
		'priority'	 =>  8
		)));
	//color_link - end

	//color_link hover, button
	$wp_customize->add_setting('color_link_hover', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_link_hover', array(
		'label'      => __( 'Bautton font color hover', 'gh-exam' ),
		'section'    => 'buttons_section',
		'settings'   => 'color_link_hover',
		'priority'	 =>  9
		)));
	//color_link hover - end

	//Post button background-color
	$wp_customize->add_setting('post_btn_bg', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_btn_bg', array(
		'label'      => __( 'Background-color', 'gh-exam' ),
		'section'    => 'buttons_section',
		'settings'   => 'post_btn_bg',
		'priority'	 => 10,
		) ) );
	//Post button background-color - end

	//Post button background-color:hover
	$wp_customize->add_setting('post_btn_bg_hover', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_btn_bg_hover', array(
		'label'      => __( 'Background-color hover', 'gh-exam' ),
		'section'    => 'buttons_section',
		'settings'   => 'post_btn_bg_hover',
		'priority'	 => 11,
		) ) );
	//Post button background-color:hover - end

	//Post button border-color
	$wp_customize->add_setting('post_btn_border_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_btn_border_color', array(
		'label'      => __( 'Border-color', 'gh-exam' ),
		'section'    => 'buttons_section',
		'settings'   => 'post_btn_border_color',
		'priority'	 => 12,
		) ) );
	//Post button border-size - end

	//border hover link, button
	$wp_customize->add_setting('border_hover', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_hover', array(
		'label'      => __( 'Border-color hover', 'gh-exam' ),
		'section'    => 'buttons_section',
		'settings'   => 'border_hover',
		'priority'	 =>  13
		)));
	//border hover link, button - end


	//Title font size
	$wp_customize->add_setting('title_font_size_post', array( 'default'=> ''));
	$wp_customize->add_control( 'title_font_size_post', array(
		'label' => __('Title font size', 'gh-exam' ),
		'section' => 'content_section',
		'settings'   => 'title_font_size_post',
		'type' => 'number',
		'priority' => 1,
		) );
	//Title font size - end

	//Title font weight
	$wp_customize->add_setting('title_font_weight_post', array( 'default'=> ''));
	$wp_customize->add_control( 'title_font_weight_post', array(
		'label' => __('Title font weight', 'gh-exam' ),
		'section' => 'content_section',
		'settings'   => 'title_font_weight_post',
		'type' => 'number',
		'priority' => 2,
		) );
	//Title font weight - end

	//Paragraph font size
	$wp_customize->add_setting('paragraph_font_size_post', array( 'default'=> ''));
	$wp_customize->add_control( 'paragraph_font_size_post', array(
		'label' => __('Paragraph font size', 'gh-exam' ),
		'section' => 'content_section',
		'settings'   => 'paragraph_font_size_post',
		'type' => 'number',
		'priority' => 3,
		) );
	//Paragraph line-height - end

	//Paragraph font weight
	$wp_customize->add_setting('paragraph_font_weight_post', array( 'default'=> ''));
	$wp_customize->add_control( 'paragraph_font_weight_post', array(
		'label' => __('Paragraph font weight', 'gh-exam' ),
		'section' => 'content_section',
		'settings'   => 'paragraph_font_weight_post',
		'type' => 'number',
		'priority' => 4,
		) );
	//Paragraph line-weight - end

	//Paragraph font size
	$wp_customize->add_setting('paragraph_line_height_post', array( 'default'=> ''));
	$wp_customize->add_control( 'paragraph_line_height_post', array(
		'label' => __('Paragraph line-height', 'gh-exam' ),
		'section' => 'content_section',
		'settings'   => 'paragraph_line_height_post',
		'type' => 'number',
		'priority' => 5,
		) );
	//Paragraph line-height - end

	//Title post color
	$wp_customize->add_setting('title_post_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_post_color', array(
		'label'      => __( 'Title posts color', 'gh-exam' ),
		'section'    => 'content_section',
		'settings'   => 'title_post_color',
		'priority'	 => 6,
		)));
	//Title post color - end

	//Title post color hover
	$wp_customize->add_setting('title_post_color_hover', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_post_color_hover', array(
		'label'      => __( 'Title posts color hover', 'gh-exam' ),
		'section'    => 'content_section',
		'settings'   => 'title_post_color_hover',
		'priority'	 => 7,
		)));
	//Title post color hover - end

	//Date and author post color
	$wp_customize->add_setting('date_post_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'date_post_color', array(
		'label'      => __( 'Date posts color', 'gh-exam' ),
		'section'    => 'content_section',
		'settings'   => 'date_post_color',
		'priority'	 => 8,
		)));
	//Date post color - end

	//paragraph post color
	$wp_customize->add_setting('p_post_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'p_post_color', array(
		'label'      => __( 'Paragraph posts color', 'gh-exam' ),
		'section'    => 'content_section',
		'settings'   => 'p_post_color',
		'priority'	 => 9,
		)));
	//paragraph post color - end

	//background post
	$wp_customize->add_setting('bg_posts', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_posts', array(
		'label'      => __( 'Background posts', 'gh-exam' ),
		'section'    => 'content_section',
		'settings'   => 'bg_posts',
		'priority'	 => 12,
		)));
	//background post - end

	//background pagination
	$wp_customize->add_setting('bg_pagination', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_pagination', array(
		'label'      => __( 'Background pagination', 'gh-exam' ),
		'section'    => 'content_section',
		'settings'   => 'bg_pagination',
		'priority'	 => 13,
		)));
	//background pagination - end

//pagination font color
	$wp_customize->add_setting('pagination_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'pagination_color', array(
		'label'      => __( 'Pagination font color', 'gh-exam' ),
		'section'    => 'content_section',
		'settings'   => 'pagination_color',
		'priority'	 => 14,
		)));
	//pagination font color- end

	//pagination active font color
	$wp_customize->add_setting('pagination_active_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'pagination_active_color', array(
		'label'      => __( 'Pagination active color', 'gh-exam' ),
		'section'    => 'content_section',
		'settings'   => 'pagination_active_color',
		'priority'	 => 15,
		)));
	//pagination  active font color- end


	//background header image
	$wp_customize->add_setting('bg_image_header', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bg_image_header', array(
		'label'      => __( 'Background-image', 'gh-exam' ),
		'section'    => 'header_section',
		'settings'   => 'bg_image_header',
		'priority'	 => 1,
		) ) );
	//background header image - end

	//background header
	$wp_customize->add_setting('header_bg', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_bg', array(
		'label'      => __( 'Background-color', 'gh-exam' ),
		'section'    => 'header_section',
		'settings'   => 'header_bg',
		'priority'	 => 2,
		)));
	//background header - end

	//footer background image footer
	$wp_customize->add_setting('bg_image_footer', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bg_image_footer', array(
		'label'      => __( 'Background-image', 'gh-exam' ),
		'section'    => 'footer_section',
		'settings'   => 'bg_image_footer',
		'priority'	 => 1,
		) ) );
	//footer background image - end

	//background footer
	$wp_customize->add_setting('footer_bg', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg', array(
		'label'      => __( 'Background-color', 'gh-exam' ),
		'section'    => 'footer_section',
		'settings'   => 'footer_bg',
		'priority'	 => 2,
		)));

	//blog page header title
	$wp_customize->add_setting('blog_header_title', array( 'default'=> ''));
	$wp_customize->add_control(
		'blog_header_title',
		array(
			'label'    => __( 'Blog title', 'gh-exam' ),
			'section'  => 'header_section',
			'settings' => 'blog_header_title',
			'type'     => 'textarea',
			'priority'	 => 3,
			));
	//blog page header title - end

	//Contact title
	$wp_customize->add_setting('contact_title', array( 'default'=> ''));
	$wp_customize->add_control( 'contact_title', array(
		'label' => __('Contact title', 'gh-exam' ),
		'section' => 'footer_section',
		'settings'   => 'contact_title',
		'type' => 'text',
		'priority' => 4,
		) );
	//Contact title - end

	//Contact subtitle
	$wp_customize->add_setting('contact_subtitle', array( 'default'=> ''));
	$wp_customize->add_control( 'contact_subtitle', array(
		'label' => __('Contact subtitle', 'gh-exam' ),
		'section' => 'footer_section',
		'settings'   => 'contact_subtitle',
		'type' => 'textarea',
		'priority' => 5,
		) );
	//Contact subtitle - end

	//telephone
	$wp_customize->add_setting('contact_phone', array( 'default'=> ''));
	$wp_customize->add_control( 'contact_phone', array(
		'label' => __('Contact phone', 'gh-exam' ),
		'section' => 'footer_section',
		'settings'   => 'contact_phone',
		'type' => 'text',
		'priority' => 6,
		) );
	//telephone - end

	//address
	$wp_customize->add_setting('contact_address', array( 'default'=> ''));
	$wp_customize->add_control( 'contact_address', array(
		'label' => __('Contact address', 'gh-exam' ),
		'section' => 'footer_section',
		'settings'   => 'contact_address',
		'type' => 'textarea',
		'priority' => 7,
		) );
	//address - end

	//footer background image footer
	$wp_customize->add_setting('bg_image_footer', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bg_image_footer', array(
		'label'      => __( 'Background-image', 'gh-exam' ),
		'section'    => 'footer_section',
		'settings'   => 'bg_image_footer',
		'priority'	 => 1,
		) ) );
	//footer background image - end
	//
	//
	//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


	//++++++++++++++++++++++++++++++++++++++++SINGLE POST: SECTIONS, SETTINGS AND CONTROL+++++++++++++++++++++++++++++++++++++++
	//
	//
	$wp_customize->add_panel( 'single_post_panel', array(
		'title' => 'Single post page',
		'priority' => 20,
		));
	$wp_customize->add_section( 'header_single_post' , array(
		'title'      => __( 'Header', 'gh-exam' ),
		'priority'   => 10,
		'panel'			 => 'single_post_panel',
		));
	$wp_customize->add_section( 'comments_single_post' , array(
		'title'      => __( 'Comments', 'gh-exam' ),
		'priority'   => 20,
		'panel'			 => 'single_post_panel',
		));
	$wp_customize->add_section( 'content_single_post' , array(
		'title'      => __( 'Content', 'gh-exam' ),
		'priority'   => 30,
		'panel'			 => 'single_post_panel',
		));
	$wp_customize->add_section( 'footer_single_post' , array(
		'title'      => __( 'Footer', 'gh-exam' ),
		'priority'   => 40,
		'panel'			 => 'single_post_panel',
		));

	//Single page header title
	$wp_customize->add_setting('single_header_title', array( 'default'=> ''));
	$wp_customize->add_control(
		'single_header_title',
		array(
			'label'    => __( 'Header title', 'gh-exam' ),
			'section'  => 'header_single_post',
			'settings' => 'single_header_title',
			'type'     => 'textarea',
			'priority'	 => 3,
			));
	//Single page header title - end

	//Single page header title font color
	$wp_customize->add_setting('single_head_title_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_head_title_color', array(
		'label'      => __( 'Header title font color', 'gh-exam' ),
		'section'    => 'header_single_post',
		'settings'   => 'single_head_title_color',
		'priority'	 => 4,
		)));
	//Single page header title font color - end

	//Single page header title font size
	$wp_customize->add_setting('title_font_size', array( 'default'=> ''));
	$wp_customize->add_control( 'title_font_size', array(
		'label' => __('Title font size', 'gh-exam' ),
		'section' => 'header_single_post',
		'settings'   => 'title_font_size',
		'type' => 'number',
		'priority' => 5,
		) );
	//Single page header title font size - end

	//Single page header title font weight
	$wp_customize->add_setting('title_font_weight', array( 'default'=> ''));
	$wp_customize->add_control( 'title_font_weight', array(
		'label' => __('Title font weight', 'gh-exam' ),
		'section' => 'header_single_post',
		'settings'   => 'title_font_weight',
		'type' => 'number',
		'priority' => 6,
		) );
	//Single page header title font weight - end

	//Single background header image
	$wp_customize->add_setting('single_bg_image', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'single_bg_image', array(
		'label'      => __( 'Background-image', 'gh-exam' ),
		'section'    => 'header_single_post',
		'settings'   => 'single_bg_image',
		'priority'	 => 7,
		) ) );
	//Single background header image - end

	//Single background header color
	$wp_customize->add_setting('single_bg_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_bg_color', array(
		'label'      => __( 'Background-color', 'gh-exam' ),
		'section'    => 'header_single_post',
		'settings'   => 'single_bg_color',
		'priority'	 => 8,
		)));
	//Single background header color - end

	//background blockquote
	$wp_customize->add_setting('blockquote_bg', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blockquote_bg', array(
		'label'      => __( 'Background blockquote', 'gh-exam' ),
		'section'    => 'content_single_post',
		'settings'   => 'blockquote_bg',
		'priority'	 => '10',
		)));
	//background blockquote - end

	//Border-left blockquote
	$wp_customize->add_setting('border_blockquote', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_blockquote', array(
		'label'      => __( 'Border blockquote', 'gh-exam' ),
		'section'    => 'content_single_post',
		'settings'   => 'border_blockquote',
		'priority'	 => '20',
		)));
	//Border-left blockquote - end


	//
	//
	//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


	//++++++++++++++++++++++++++++++++++++++++HOME PAGE: SECTIONS, SETTINGS AND CONTROL+++++++++++++++++++++++++++++++++++++++++
	//
	//
	$wp_customize->add_panel( 'home_panel', array(
		'title' => 'Home page',
		'priority' => 30,
		));
	$wp_customize->add_section( 'header_home_page' , array(
		'title'      => __( 'Header', 'gh-exam' ),
		'priority'   => 10,
		'panel'			 => 'home_panel',
		));
	$wp_customize->add_section( 'content_home_page' , array(
		'title'      => __( 'Content', 'gh-exam' ),
		'priority'   => 20,
		'panel'			 => 'home_panel',
		));
	$wp_customize->add_section( 'footer_home_page' , array(
		'title'      => __( 'Footer', 'gh-exam' ),
		'priority'   => 30,
		'panel'			 => 'home_panel',
		));
	//
	//
	//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


}
add_action( 'customize_register', 'gh_exam_customize_register' );
function mytheme_customize_css(){
	?>
	<style type="text/css">
		/*-------------------------------------GENERAL SETTINGS THEME-----------------------------------------------------------*/
		.nav li a, #touch-menu {color: <?php echo get_theme_mod('navmenu_font_color'); ?>;}
		.nav li a:hover, #touch-menu:hover, .nav li:hover, .accent-color a {color: <?php echo get_theme_mod('navmenu_hover_font'); ?>;}
		.head-nav-menu {background-color: <?php echo get_theme_mod('bg_top_navmenu'); ?>;}
		h2.widget-title {color: <?php echo get_theme_mod('title_font_wigets'); ?>;}
		.widget-area a {color: <?php echo get_theme_mod('links_color_wigets'); ?>;}
		h2.widget-title {background-color: <?php echo get_theme_mod('title_background_wigets'); ?>;}
		.widget-area .widget {background-color: <?php echo get_theme_mod('background_wigets'); ?>;}
		.copy-right {color: <?php echo get_theme_mod('copy_right_color'); ?>;}
		.site-footer .footer-copy-right {background-color: <?php echo get_theme_mod('copy_right_bg'); ?>;}
		.site-footer .footer-logo-box {background-color: <?php echo get_theme_mod('footer_logo'); ?>;}
		.home-partners {background-color: <?php echo get_theme_mod('comapany_bg'); ?>;}
		.home-partners .title {color: <?php echo get_theme_mod('comapany_font_color'); ?>;}
		/*-------------------------------------BLOG PANELS----------------------------------------------------------------------*/
		.hero-blog-post {
			background-image: linear-gradient(rgba(0,0,0, .9), rgba(0,0,0, .9)), url('<?php echo get_theme_mod('bg_image_header'); ?>') ;
			background-color: <?php echo get_theme_mod('header_bg'); ?>;
			background-size: cover;
			width: 100%;
			background-position: center;
			background-repeat: no-repeat;
		}
		.hero-blog-post  .blog-title {
			color: <?php echo get_theme_mod('blog_head_title_color'); ?>;
			font-size: <?php echo get_theme_mod('blog_title_font_size') . 'px'; ?>;
			font-weight: <?php echo get_theme_mod('blog_title_font_weight'); ?>;
		}
		.wpcf7-submit {
			color: <?php echo get_theme_mod('color_link'); ?>;
			font-size: <?php echo get_theme_mod('post_btn_font_size') . 'px'; ?>;
			font-weight: <?php echo get_theme_mod('post_btn_font_weight'); ?>;
			width: <?php echo get_theme_mod('post_btn_width') . 'px'; ?>;
			line-height: <?php echo get_theme_mod('post_btn_height') . 'px'; ?>;
			border-radius: <?php echo get_theme_mod('post_btn_radius') . 'px'; ?>;
			background-color: <?php echo get_theme_mod('post_btn_bg'); ?>;
			border: <?php echo get_theme_mod('post_btn_border_size') . 'px'; ?> solid <?php echo get_theme_mod('post_btn_border_color'); ?>;
		}
		.wpcf7-submit:hover {
			background-color: <?php echo get_theme_mod('post_btn_bg_hover'); ?>;
			color: <?php echo get_theme_mod('color_link_hover'); ?>;
			border-color: <?php echo get_theme_mod('border_hover'); ?>;
		}
		.post p {
			color: <?php echo get_theme_mod('p_post_color'); ?>;
			font-size: <?php echo get_theme_mod('paragraph_font_size_post') . 'px'; ?>;
			font-weight: <?php echo get_theme_mod('paragraph_font_weight_post'); ?>;
			line-height: <?php echo get_theme_mod('paragraph_line_height_post') . 'px'; ?>;
		}
		.post footer .date, .post footer .author-post a{color: <?php echo get_theme_mod('date_post_color'); ?>;}
		.post header .title a {
			color: <?php echo get_theme_mod('title_post_color'); ?>;
			font-size: <?php echo get_theme_mod('title_font_size_post') . 'px'; ?>;
			font-weight: <?php echo get_theme_mod('title_font_weight_post'); ?>;
		}
		.post header .title a:hover {
			color: <?php echo get_theme_mod('title_post_color_hover'); ?>;
		}
		.post {background-color: <?php echo get_theme_mod('bg_posts'); ?>;}
		.site-footer {
			background-image: url('<?php echo get_theme_mod('bg_image_footer'); ?>') ;
			background-color: <?php echo get_theme_mod('footer_bg'); ?>;
			background-size: cover;
			width: 100%;
			background-position: center;
			background-repeat: no-repeat;
		}
		.site-footer .contact  {
			background-image: linear-gradient(rgba(0,0,0, .9), rgba(0,0,0, .9)), url('<?php echo get_theme_mod('bg_image_footer'); ?>') ;
			background-color: <?php echo get_theme_mod('footer_bg'); ?>;
			background-size: cover;
			width: 100%;
			background-position: center;
			background-repeat: no-repeat;
		}
		.pagination .page-numbers {
			background-color: <?php echo get_theme_mod('bg_pagination'); ?>;
			color: <?php echo get_theme_mod('pagination_color'); ?>;
		}
		/*-------------------------------------SINGLE POST PANELS----------------------------------------------------------------*/
		.post blockquote {
			background-color: <?php echo get_theme_mod('blockquote_bg'); ?>;
			border-left: 5px solid <?php echo get_theme_mod('border_blockquote'); ?>;

		}
		.hero-single-post .single-title {
			color: <?php echo get_theme_mod('single_head_title_color'); ?>;
			font-size: <?php echo get_theme_mod('title_font_size') . 'px'; ?>;
			font-weight: <?php echo get_theme_mod('title_font_weight'); ?>;
		}
		/*-------------------------------------HOME PAGE PANELS------------------------------------------------------------------*/
	</style>
	<?php
}
add_action( 'wp_head', 'mytheme_customize_css');
//background top navmenu - end

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function gh_exam_customize_preview_js() {
	wp_enqueue_script( 'gh_exam_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'gh_exam_customize_preview_js' );
