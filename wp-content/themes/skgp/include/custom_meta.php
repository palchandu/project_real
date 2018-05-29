<?php
function skgp_add_custom_box()
{
		add_meta_box(
            'wporg_box_id',           // Unique ID
            'Add Project Details',  // Box title
            'skgp_custom_box_html',  // Content callback, must be of type callable
            'post'                   // Post type
        );
}
add_action('add_meta_boxes', 'skgp_add_custom_box');
function skgp_custom_box_html($post)
{
    ?>
    <div class="row">
    <?php  
        wp_nonce_field( 'skgp_property_nonce', 'skgp_nonce' );
        $propertyId = get_post_meta( $post->ID, 'propertyId', true );
        $propertyPrice =get_post_meta( $post->ID, 'propertyPrice', true );
        $propertySize=get_post_meta( $post->ID, 'propertySize', true ); 
        $bedRooms=get_post_meta( $post->ID, 'bedRooms', true );
        $bathRoom=get_post_meta( $post->ID, 'bathRoom', true );
        $propertyStatus=get_post_meta( $post->ID, 'propertyStatus', true );
        $availableDate=get_post_meta( $post->ID, 'availableDate', true );
        $propertyFloors=get_post_meta( $post->ID, 'propertyFloors', true );
        $propertyPluming=get_post_meta( $post->ID, 'propertyPluming', true );
        $builtYear=get_post_meta( $post->ID, 'builtYear', true );
        
     ?>
    	<div class="col-sm-12 col-md-6 col-lg-6">
    		<div class="form-group">
    			<label for="property_id">Property Id</label>
    			<input type="text" name="property_id" id="property_id" class="form-control" placeholder="Enter Property Id" value="<?php echo esc_attr( $propertyId ); ?>">
    		</div>
    		<div class="form-group">
    			<label for="property_price">Price</label>
    			<input type="number" name="property_price" id="property_price" class="form-control" placeholder="Enter Property Price" value="<?php echo esc_attr( $propertyPrice ); ?>">
    		</div>
    		<div class="form-group">
    			<label for="property_size">Project Size(Sq.Ft.)</label>
    			<input type="number" name="property_size" id="property_size" class="form-control" placeholder="Enter Property Size" value="<?php echo esc_attr( $propertySize ); ?>">
    		</div>
    		<div class="form-group">
    			<label for="property_id">Number Of Bedrooms</label>
    			<input type="number" name="bedrooms" id="bedrooms" class="form-control" placeholder="Enter Number Of Bedrooms" value="<?php echo esc_attr( $bedRooms ); ?>">
    		</div>
    		<div class="form-group">
    			<label for="bathroom">Number Of Bathroom</label>
    			<input type="number" name="bathroom" id="bathroom" class="form-control" placeholder="Enter Number Of Bathroom" value="<?php echo esc_attr( $bathRoom); ?>">
    		</div>
    	</div>
    	<div class="col-sm-12 col-md-6 col-lg-6">
    		<div class="form-group">
    			<label for="property_status">Property Status</label>
    			<select class="form-control" name="property_status" id="property_status">
    				<option value="For Sell">For Sell</option>
    				<option value="For Rent">For Rent</option>
    				<option value="Other">Other</option>
    			</select>
    		</div>
    		<div class="form-group">
    			<label for="available_date">Available From</label>
    			<input type="date" name="available_date" id="available_date" class="form-control" placeholder="Available From" value="<?php echo esc_attr( $availableDate ); ?>">
    		</div>
    		<div class="form-group">
    			<label for="property_floors">Floors</label>
    			<input type="text" name="property_floors" id="property_floors" class="form-control" placeholder="Enter About Floors" value="<?php echo esc_attr( $propertyFloors ); ?>">
    		</div>
    		<div class="form-group">
    			<label for="property_pluming">Plumbing</label>
    			<input type="text" name="property_pluming" id="property_pluming" class="form-control" placeholder="Enter About Plumbing" value="<?php echo esc_attr( $propertyPluming ); ?>">
    		</div>
    		<div class="form-group">
    			<label for="built_year">Year Built</label>
    			<select name="built_year" id="built_year" class="form-control">
    			<?php
    			for ($i=1900; $i <2100 ; $i++) { 
    				if($i<=date('Y'))
    				{
    					?>
    					<option value="<?= $i ?>"><?= $i ?></option>
    					<?php
    				}
    			}
    			?>
    			</select>
    		</div>
    	</div>
    </div>
    
    
    <?php
}
//Save,update meta data
function skgp_property_save_meta( $post_id ) {

  if( !isset( $_POST['skgp_nonce'] ) || !wp_verify_nonce( $_POST['skgp_nonce'],'skgp_property_nonce') ) 
    return;

  if ( !current_user_can( 'edit_post', $post_id ))
    return;

  if ( isset($_POST['property_id']) ) {        
    update_post_meta($post_id, 'propertyId', sanitize_text_field( $_POST['property_id']));      
  }  

  if ( isset($_POST['property_price']) ) {        
    update_post_meta($post_id, 'propertyPrice', sanitize_text_field( $_POST['property_price'] ));      
  }

  if ( isset($_POST['property_size']) ) {        
    update_post_meta($post_id, 'propertySize',  sanitize_text_field($_POST['property_size']));      
  }

  if ( isset($_POST['bedrooms']) ) {        
    update_post_meta($post_id, 'bedRooms',  sanitize_text_field($_POST['bedrooms']));      
  }

  if ( isset($_POST['bathroom']) ) {        
    update_post_meta($post_id, 'bathRoom',  sanitize_text_field($_POST['bathroom']));      
  }

  if ( isset($_POST['property_status']) ) {        
    update_post_meta($post_id, 'propertyStatus',  sanitize_text_field($_POST['property_status']));      
  }

  if ( isset($_POST['available_date']) ) {        
    update_post_meta($post_id, 'availableDate',  sanitize_text_field($_POST['available_date']));      
  }

  if ( isset($_POST['property_floors']) ) {        
    update_post_meta($post_id, 'propertyFloors',  sanitize_text_field($_POST['property_floors']));      
  }

  if ( isset($_POST['property_pluming']) ) {        
    update_post_meta($post_id, 'propertyPluming',  sanitize_text_field($_POST['property_pluming']));      
  }

  if ( isset($_POST['built_year']) ) {        
    update_post_meta($post_id, 'builtYear',  sanitize_text_field($_POST['built_year']));      
  }

}
add_action('save_post', 'skgp_property_save_meta');

?>