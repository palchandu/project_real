<?php
function property_add_custom_box()
{
    add_meta_box(
            'property_google',           // Unique ID
            'Add Project Google Map',  // Box title
            'skgp_google_html',  // Content callback, must be of type callable
            'post', 
            'advanced',            // Post type
            'low'                   
        );
}
add_action('add_meta_boxes', 'property_add_custom_box');
function skgp_google_html($post)
{
    ?>
    <div class="row">
    <?php  
        wp_nonce_field( 'skgp_property_map_nonce', 'skgp_map_nonce' );
        $google_map = get_post_meta( $post->ID, 'google_map', true );
        
     ?>
      <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="form-group">
          <label for="google_map">Google Map Code</label>
          <textarea style="width: 990px" rows="8" name="google_map" id="google_map" class="form-control" placeholder="Enter Google Map Code"><?php echo esc_attr( $google_map ); ?></textarea>
          
        </div>
      </div>

    </div>
    
    
    <?php
}
//Save,update meta data
function skgp_property_map_save_meta( $post_id ) {

  if( !isset( $_POST['skgp_map_nonce'] ) || !wp_verify_nonce( $_POST['skgp_map_nonce'],'skgp_property_map_nonce') ) 
    return;

  if ( !current_user_can( 'edit_post', $post_id ))
    return;

  if ( isset($_POST['google_map']) ) {        
    update_post_meta($post_id, 'google_map',  $_POST['google_map']);      
  }  

}
add_action('save_post', 'skgp_property_map_save_meta');

?>