<?php
function skgp_partners()
{
    register_post_type('skgp_partner',array(
    'labels'=>array(
    'name'=>'Partner',
    'menu_name'=>'Partner Menu',
    'all_items'=>'All Partner',
    'add_new'=>'Add New Partner',
    'add_new_item'=>'Add New Partner'
    ),
    'public'=>true,
    'supports'=>array('custom_post','revisions'),
     'menu_icon'   => 'dashicons-businessman',
    ));
}
add_action('init','skgp_partners');

function skgp_partner_custom_box()
{
        add_meta_box(
            'wporg_box_id',           // Unique ID
            'Testimonials',  // Box title
            'skgp_partner_box_html',  // Content callback, must be of type callable
            'skgp_partner'                   // Post type
        );
}
add_action('add_meta_boxes', 'skgp_partner_custom_box');
function skgp_partner_box_html($post)
{
    wp_nonce_field( 'skgp_partner_nonce', 'skgp_part_nonce' );
    $partner_name=get_post_meta( $post->ID, 'post_title', true );
    $patner_website=get_post_meta( $post->ID, 'partner_website', true );
    $image_url_partner = get_post_meta($post->ID, 'uploaded_partner_image', true);
    ?>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <label for="property_id">Partner Name</label>
        <input type="text" name="post_title" id="post_title" class="form-control" placeholder="Enter Partner Name" value="<?php echo esc_attr( $partner_name ); ?>">

        <label for="property_id">Website URL</label>
        <input type="text" name="partner_website" id="partner_website" class="form-control" placeholder="Enter Partner Website" value="<?php echo esc_attr( $patner_website ); ?>">

        <label for="property_id">Partner Image</label>
        <br>
         <input  id="uploaded_partner_image" type="text" size="36" name="uploaded_partner_image" value="<?php echo esc_attr( $image_url_partner ); ?>" />
        <input id="upload_partner_image_button" type="button" value="Upload Image" />

        </div>
    </div>
    <?php
}
// function my_admin__scripts() {    
//     wp_enqueue_script('media-upload');
//     wp_enqueue_script('thickbox');
//     wp_register_script('my-upload', get_template_directory_uri().'/js/uploader.js', array('jquery','media-upload','thickbox'));
//     wp_enqueue_script('my-upload');
// }

// function my_admin_styles() {

//     wp_enqueue_style('thickbox');
// }

// // better use get_current_screen(); or the global $current_screen

//     add_action('admin_print_scripts', 'my_admin_scripts');
//     add_action('admin_print_styles', 'my_admin_styles');


//Save,update meta data
function skgp_partner_save_meta( $post_id ) {

  if( !isset( $_POST['skgp_part_nonce'] ) || !wp_verify_nonce( $_POST['skgp_part_nonce'],'skgp_partner_nonce') ) 
    return;

  if ( !current_user_can( 'edit_post', $post_id ))
    return;

  if ( isset($_POST['post_title']) ) {        
    update_post_meta($post_id, 'post_title', sanitize_text_field( $_POST['post_title']));      
  }  

  if ( isset($_POST['partner_website']) ) {        
    update_post_meta($post_id, 'partner_website', sanitize_text_field( $_POST['partner_website'] ));      
  }

  if ( isset($_POST['uploaded_partner_image']) ) {        
    update_post_meta($post_id, 'uploaded_partner_image',  sanitize_text_field($_POST['uploaded_partner_image']));      
  }

}
add_action('save_post', 'skgp_partner_save_meta');
?>