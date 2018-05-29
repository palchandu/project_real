<?php
function testimonials()
{
    register_post_type('skgp_testimonials',array(
    'labels'=>array(
    'name'=>'Testimonials',
    'menu_name'=>'Testimonials Menu',
    'all_items'=>'All Testimonials',
    'add_new'=>'Add New Testimonials',
    'add_new_item'=>'Add New Testimonials'
    ),
    'public'=>true,
    'supports'=>array('custom_post','revisions','page-attributes'),
     'menu_icon'   => 'dashicons-groups',
    ));
}
add_action('init','testimonials');

function skgp_testi_custom_box()
{
        add_meta_box(
            'wporg_box_id',           // Unique ID
            'Testimonials',  // Box title
            'skgp_testi_box_html',  // Content callback, must be of type callable
            'skgp_testimonials'                   // Post type
        );
}
add_action('add_meta_boxes', 'skgp_testi_custom_box');
function skgp_testi_box_html($post)
{
     $url = get_post_meta($post->ID, 'my-image-for-post', true);
    wp_nonce_field( 'skgp_testimonilas_nonce', 'skgp_testi_nonce' );
    ?>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
        <label for="property_id">Customer Name</label>
        <input type="text" name="client_name" id="client_name" class="form-control" placeholder="Enter Customer Name" value="">

        <label for="property_id">Customer Designation</label>
        <input type="text" name="client_designation" id="client_designation" class="form-control" placeholder="Enter Customer Designation" value="">

        <label for="property_id">Customer Image</label>
        <br>
         <input  id="upload_image" type="text" size="36" name="upload_image" value="" />
        <input id="upload_image_button" type="button" value="Upload Image" />

        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
        <label>Enter Customer Review</label>
        <textarea id="customer_review" name="customer_review" class="form-control" rows="9" placeholder="Enter Customer Review"></textarea>
        </div>
    </div>
    <?php
}
function my_admin_scripts() {    
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_register_script('my-upload', get_template_directory_uri().'/js/uploader.js', array('jquery','media-upload','thickbox'));
    wp_enqueue_script('my-upload');
}

function my_admin_styles() {

    wp_enqueue_style('thickbox');
}

// better use get_current_screen(); or the global $current_screen

    add_action('admin_print_scripts', 'my_admin_scripts');
    add_action('admin_print_styles', 'my_admin_styles');
?>