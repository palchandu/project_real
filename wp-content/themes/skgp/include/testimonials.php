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
    'supports'=>array('custom_post','revisions'),
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
    wp_nonce_field( 'skgp_testimonilas_nonce', 'skgp_testi_nonce' );
    $client_name=get_post_meta( $post->ID, 'post_title', true );
    $client_designation=get_post_meta( $post->ID, 'client_designation', true );
    $image_url = get_post_meta($post->ID, 'upload_image', true);
    $customer_review=get_post_meta( $post->ID, 'customer_review', true );
    ?>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
        <label for="property_id">Customer Name</label>
        <input type="text" name="post_title" id="post_title" class="form-control" placeholder="Enter Customer Name" value="<?php echo esc_attr( $client_name ); ?>">

        <label for="property_id">Customer Designation</label>
        <input type="text" name="client_designation" id="client_designation" class="form-control" placeholder="Enter Customer Designation" value="<?php echo esc_attr( $client_designation ); ?>">

        <label for="property_id">Customer Image</label>
        <br>
         <input  id="upload_image" type="text" size="36" name="upload_image" value="<?php echo esc_attr( $image_url ); ?>" />
        <input id="upload_image_button" type="button" value="Upload Image" />

        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
        <label>Enter Customer Review</label>
        <textarea id="customer_review" name="customer_review" class="form-control" rows="9" placeholder="Enter Customer Review">
            <?php echo esc_attr( $customer_review ); ?>
        </textarea>
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


//Save,update meta data
function skgp_testimonials_save_meta( $post_id ) {

  if( !isset( $_POST['skgp_testi_nonce'] ) || !wp_verify_nonce( $_POST['skgp_testi_nonce'],'skgp_testimonilas_nonce') ) 
    return;

  if ( !current_user_can( 'edit_post', $post_id ))
    return;

  if ( isset($_POST['post_title']) ) {        
    update_post_meta($post_id, 'post_title', sanitize_text_field( $_POST['post_title']));      
  }  

  if ( isset($_POST['client_designation']) ) {        
    update_post_meta($post_id, 'client_designation', sanitize_text_field( $_POST['client_designation'] ));      
  }

  if ( isset($_POST['upload_image']) ) {        
    update_post_meta($post_id, 'upload_image',  sanitize_text_field($_POST['upload_image']));      
  }

  if ( isset($_POST['customer_review']) ) {        
    update_post_meta($post_id, 'customer_review',  sanitize_text_field($_POST['customer_review']));      
  }

}
add_action('save_post', 'skgp_testimonials_save_meta');
?>