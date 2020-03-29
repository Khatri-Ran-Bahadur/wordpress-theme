<?php 

/**
*RN Khatri functions and difinitions.
*@package khatri-news
*
*@link https://developer.wordpress.org/theme-functions/
*/

/**
*Registering menu Support
*/
function khatri_news_menu(){
	register_nav_menu('header_menu',__('Header Menu','khatri-news'));
	register_nav_menu('footer_menu',__('Footer Menu','khatri-news'));
}
add_action('init','khatri_news_menu');


/**
*Main Slider
*Registering Custom Post for Main slider
*
*/
add_action('init','main_slider');
function main_slider(){
	register_post_type('slider-item',
		array(
			'labels' 		=>array(
				'name'				=>('Slider'),
				'singular_name'		=>('Slider'),
				'menu_name'			=>('Main Slider'),
				'name_menu_bar'		=>('Add New'),
				'all_items'			=>('All Slider'),
				'add_new'			=>('Add New'),
				'add_new_item'		=>('Add Slider'),
				'edit_item'			=>('Edit Slider'),
				'view_item'			=>('View Slider'),
				'search_item'		=>('Search Slider')
			),
			'public'		=>true,
			'has_archive'	=>true,
			'rewrite'		=>array('slug' =>'slider-item'),
			'menu_position'	=>9,
			'menu_icon'		=> 'dashicons-video-alt',
			'supports'		=> array('title','thumbnail','editor')
		)
	);
}


/**
*Enable custom post taxonomy for main Slider
*
*/

function main_slider_taxonomy(){
	register_taxonomy(
		'main_slider_cat',
		'slider-item',
		array(
			'hierarchical'		=>true,
			'lable'				=>'Slider Category',
			'query_var'			=>true,
			'rewrite'		=>array(
				'slug'		=>'slider-category'
			)
		)
	);
}
add_action('init','main_slider_taxonomy');


/**
*Featured Image Support
*
*/
add_theme_support('post-thumbnails',array('post','page','slider-item'));
set_post_thumbnail_size('300,200',true);
add_image_size('slider-item','1300','350',true);
add_image_size('slider-item-featured','80','71',true);

//Specific post Category
add_image_size('spc_post_cat','300','300',true);

//Single Page Image
add_image_size('single_page_image','700','500',true);
//thumbnail home Page Image
add_image_size('home_thum_page_image','90','70',true);
add_image_size('category_image','300','300',true);
add_image_size('category_thumbnail_img1','300','300',true);
add_image_size('category_thumbnail_img2','345','200',true);
add_image_size('category_thumbnail_img','100','150',true);
add_image_size('category_thumbnail_img3','320','190',true);



















