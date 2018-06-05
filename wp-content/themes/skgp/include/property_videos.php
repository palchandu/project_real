<?php
// Adding the metaboxes
add_action( 'add_meta_boxes', 'add_propery_video_meta' );

	/* Saving the data */
	add_action( 'save_post', 'property_video_meta_save' );

	/* Adding the main meta box container to the post editor screen */
	function add_propery_video_meta() {
	    add_meta_box(
	        'property-video',
	       'Property Videos',
	        'peoperty_video_init',
	        'post');
	}

	/*Printing the box content */
	function peoperty_video_init() {
	    global $post;
	    // Use nonce for verification
	    wp_nonce_field( plugin_basename( __FILE__ ), 'property_video_nonce' );
	    ?>
	    <div id="video_meta_item">
	    <?php

	    //Obtaining the linked employeedetails meta values
	    $propertyVideos = get_post_meta($post->ID,'propertyVideos',true);
	    $c1 = 0;
	    if ( count( $propertyVideos ) > 0 && is_array($propertyVideos)) {
	        foreach( $propertyVideos as $propertyVideo ) {
	            if ( isset( $propertyVideo['name'] ) ) {
	                printf( '<p>Video <textarea class="form-control" type="text" name="propertyVideos[%1$s][name]">%2$s </textarea><a href="javascript" class="remove-video">%4$s</a></p>', $c1, $propertyVideo['name'], $propertyVideo['bio'], 'Remove' );
	                $c1 = $c1 +1;
	            }
	        }
	    }

	    ?>
	<span id="output-video"></span>
	<a href="javascript::void(0)" class="add_video"><?php _e('Add Property Videos'); ?></a>
	<script>
	    var $ =jQuery.noConflict();
	    $(document).ready(function() {
	        var count1 = <?php echo $c1; ?>;
	        $(".add_video").click(function() {
	            count1 = count1 + 1;

	            $('#output-video').append('<p> Video <textarea class="form-control" type="text" name="propertyVideos['+count1+'][name]"></textarea> <a href="#" class="remove-video"><?php echo "Remove"; ?></a></p>' );
	            return false;
	        });
	       $(document.body).on('click','.remove-video',function() {
	            $(this).parent().remove();
	        });
	    });
	    </script>
	</div><?php

	}

	/* Save function for the entered data */
	function property_video_meta_save( $post_id ) {
	    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	        return;
	    // Verifying the nonce
	    if ( !isset( $_POST['property_video_nonce'] ) )
	        return;

	    if ( !wp_verify_nonce( $_POST['property_video_nonce'], plugin_basename( __FILE__ ) ) )
	        return;
	    // Updating the employeeDetails meta data
	    $propertyVideos = $_POST['propertyVideos'];

	    update_post_meta($post_id,'propertyVideos',$propertyVideos);
	}
?>