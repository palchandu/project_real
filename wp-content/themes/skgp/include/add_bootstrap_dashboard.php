<?php
function add_bootstrap_admin()
{
	/*Styls*/
	wp_enqueue_style('master','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',null,'v1.1.0','all');


	/*Scripts*/
	wp_enqueue_script('min_js','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',null,'v1.0',true);

}
add_action('admin_enqueue_scripts','add_bootstrap_admin');
?>