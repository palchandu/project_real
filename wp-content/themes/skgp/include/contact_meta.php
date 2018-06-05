<?php
function contact_add_custom_box()
{
   global $post;
if (!empty($post))
{
  $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
   if($pageTemplate == 'contact.php' )
        {
          add_meta_box(
            'contact_google',           // Unique ID
            'Add Contact Google Map',  // Box title
            'contact_google_html',  // Content callback, must be of type callable
            'page', 
            'advanced',            // Post type
            'low'                   
        );
  }
  }
}
add_action('add_meta_boxes', 'contact_add_custom_box');
function contact_google_html($post)
{
    ?>
    <div class="row">
    <?php  
        wp_nonce_field( 'skgp_contact_map_nonce', 'contact_map_nonce' );
        $google_map = get_post_meta( $post->ID, 'contact_google_map', true );
        
     ?>
      <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="form-group">
          <label for="google_map">Google Map Code</label>
          <textarea style="width: 990px" rows="8" name="contact_google_map" id="contact_google_map" class="form-control" placeholder="Enter Google Map Code"><?php echo esc_attr( $google_map ); ?></textarea>
          
        </div>
      </div>

    </div>
    
    
    <?php
}
//Save,update meta data
function contact_map_save_meta( $post_id ) {

  if( !isset( $_POST['contact_map_nonce'] ) || !wp_verify_nonce( $_POST['contact_map_nonce'],'skgp_contact_map_nonce') ) 
    return;

  if ( !current_user_can( 'edit_post', $post_id ))
    return;

  if ( isset($_POST['contact_google_map']) ) {        
    update_post_meta($post_id, 'contact_google_map',  $_POST['contact_google_map']);      
  }  

}
add_action('save_post', 'contact_map_save_meta');

?>