<?php
function home_page_slider()
{
	register_post_type('home_slider',array(
	'labels'=>array(
	'name'=>'Home Slider',
	'menu_name'=>'Home Slider Menu',
	'all_items'=>'All Slider',
	'add_new'=>'Add New Slider',
	'add_new_item'=>'Add New Slider'
	),
	'public'=>true,
	'supports'=>array('title','editor','custom_post','revisions','page-attributes','thumbnail'),
	 'taxonomies'=>array( 'category' ),
	 'menu_icon'   => 'dashicons-images-alt2'
	));
}
add_action('init','home_page_slider');
?>