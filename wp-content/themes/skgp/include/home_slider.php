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
	'supports'=>array('custom_post','revisions'),
	 'taxonomies'=>array( 'category' ),
	 'menu_icon'   => 'dashicons-images-alt2'
	));
}
add_action('init','home_page_slider');

function skgp_home_slider_custom_box()
{
        add_meta_box(
            'skgp_box_id',           // Unique ID
            'Testimonials',  // Box title
            'skgp_home_slider_box_html',  // Content callback, must be of type callable
            'home_slider'                   // Post type
        );
}
add_action('add_meta_boxes', 'skgp_home_slider_custom_box');

function skgp_home_slider_box_html($post)
{
    wp_nonce_field( 'skgp_slider_nonce', 'skgp_slid_nonce' );
    $slider_title=get_post_meta( $post->ID, 'post_title', true );
    $uploaded_slider_image = get_post_meta($post->ID, 'uploaded_slider_image', true);
    $slider_text=get_post_meta( $post->ID, 'slider_text', true );
    ?>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <label for="property_id">Slider Title</label>
        <input type="text" name="post_title" id="post_title" class="form-control" placeholder="Enter Slider Title" value="<?php echo esc_attr( $slider_title ); ?>">
        </div>
        <div class="col-sm-12 col-md-11 col-lg-11">
        <label for="property_id">Slider Image</label>
        <br>
         <input id="uploaded_slider_image" class="form-control" type="text" size="36" name="uploaded_slider_image" value="<?php echo esc_attr( $uploaded_slider_image ); ?>" />
         </div>
         <div class="col-sm-12 col-md-1 col-lg-1" style="padding-top: 2.5%;">
        <input id="upload_home_slider_image_button" class="btn btn-sm btn-primary" type="button" value="Upload" />
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12">
        <label for="property_id">Slider Text</label>
        <textarea rows="5" name="slider_text" id="slider_text" class="form-control" placeholder="Enter Slider Text"><?php echo esc_attr( $slider_text ); ?></textarea>

        </div>
    </div>
    <?php
}

//Save,update meta data
function skgp_home_slider_save_meta( $post_id ) {

  if( !isset( $_POST['skgp_slid_nonce'] ) || !wp_verify_nonce( $_POST['skgp_slid_nonce'],'skgp_slider_nonce') ) 
    return;

  if ( !current_user_can( 'edit_post', $post_id ))
    return;

  if ( isset($_POST['post_title']) ) {        
    update_post_meta($post_id, 'post_title', sanitize_text_field( $_POST['post_title']));      
  }  

  if ( isset($_POST['uploaded_slider_image']) ) {        
    update_post_meta($post_id, 'uploaded_slider_image', sanitize_text_field( $_POST['uploaded_slider_image'] ));      
  }

  if ( isset($_POST['slider_text']) ) {        
    update_post_meta($post_id, 'slider_text',  sanitize_text_field($_POST['slider_text']));      
  }

}
add_action('save_post', 'skgp_home_slider_save_meta');

?>