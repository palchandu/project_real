<?php
// Adding the metaboxes
add_action( 'add_meta_boxes', 'add_propery_features_meta' );

	/* Saving the data */
	add_action( 'save_post', 'property_features_meta_save' );

	/* Adding the main meta box container to the post editor screen */
	function add_propery_features_meta() {
	    add_meta_box(
	        'property-feauters',
	       'Property Features',
	        'peoperty_feauters_init',
	        'post');
	}

	/*Printing the box content */
	function peoperty_feauters_init() {
	    global $post;
	    // Use nonce for verification
	    wp_nonce_field( plugin_basename( __FILE__ ), 'property_features_nonce' );
	    ?>
	    <div id="employee_meta_item">
	    <?php

	    //Obtaining the linked employeedetails meta values
	    $propertyDetails = get_post_meta($post->ID,'propertyDetails',true);
	    $c = 0;
	    if ( count( $propertyDetails ) > 0 && is_array($propertyDetails)) {
	        foreach( $propertyDetails as $propertyDetail ) {
	            if ( isset( $propertyDetail['name'] ) || isset( $propertyDetail['bio'] ) ) {
	                printf( '<p>Property <input class="form-control" type="text" name="propertyDetails[%1$s][name]" value="%2$s" /> <a href="#" class="remove-package">%4$s</a></p>', $c, $propertyDetail['name'], $propertyDetail['bio'], 'Remove' );
	                $c = $c +1;
	            }
	        }
	    }

	    ?>
	<span id="output-package"></span>
	<a href="javascript::void(0)" class="add_package"><?php _e('Add Property Features'); ?></a>
	<script>
	    var $ =jQuery.noConflict();
	    $(document).ready(function() {
	        var count = <?php echo $c; ?>;
	        $(".add_package").click(function() {
	            count = count + 1;

	            $('#output-package').append('<p> Name <input class="form-control" type="text" name="propertyDetails['+count+'][name]" value="" /> <a href="#" class="remove-package"><?php echo "Remove"; ?></a></p>' );
	            return false;
	        });
	       $(document.body).on('click','.remove-package',function() {
	            $(this).parent().remove();
	        });
	    });
	    </script>
	</div><?php

	}

	/* Save function for the entered data */
	function property_features_meta_save( $post_id ) {
	    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	        return;
	    // Verifying the nonce
	    if ( !isset( $_POST['property_features_nonce'] ) )
	        return;

	    if ( !wp_verify_nonce( $_POST['property_features_nonce'], plugin_basename( __FILE__ ) ) )
	        return;
	    // Updating the employeeDetails meta data
	    $propertyDetails = $_POST['propertyDetails'];

	    update_post_meta($post_id,'propertyDetails',$propertyDetails);
	}
?>