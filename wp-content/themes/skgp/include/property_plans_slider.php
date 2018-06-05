<?php
// Adding the metaboxes
add_action( 'add_meta_boxes', 'add_propery_planmap_meta' );

	/* Saving the data */
	add_action( 'save_post', 'propery_planmap_meta_save' );

	/* Adding the main meta box container to the post editor screen */
	function add_propery_planmap_meta() {
	    add_meta_box(
	        'property-planmap',
	       'Property Plan',
	        'peoperty_plan_init',
	        'post');
	}

	/*Printing the box content */
	function peoperty_plan_init() {
	    global $postimg;
	    // Use nonce for verification
	    wp_nonce_field( plugin_basename( __FILE__ ), 'property_plan_nonce' );
	    ?>
	    <div class="row">
	    	<div class="col-sm-12 col-md-12 col-lg-12" id="employee_meta_plan">
	    		<?php
	    		$propertyPlans = get_post_meta($postimg->ID,'propertyPlans',true);
	    		$cnt = 0;
	    		if ( count( $propertyPlans ) > 0 && is_array($propertyPlans)) {
		        foreach( $propertyPlans as $propertyPlan ) {
		            if ( isset( $propertyPlan['name'] )){
		                printf( '<p>  <input  id="image_plan%1$s" type="text" size="36" name="propertyPlans[%1$s][name]" value="%2$s" />
	        				<a id="upload_image_plan" imgcnt="%1$s" class="btn btn-xs btn-primary">Upload Image</a> 
	 						<a href="#" class="remove-plan btn btn-xs btn-info">%4$s</a></p>', $cnt, $propertyPlan['name'], 'Remove' );
		                $cnt = $cnt +1;
		            }
		        }
		    }
	    		?>
	    	<span id="output-plan"></span>
	    	<a href="javascript::void(0)" class="add_plan"><?php _e('Add Plan Image'); ?></a>
	    	<script>
	    var $ =jQuery.noConflict();
	    $(document).ready(function() {
	        var counts = <?php echo $cnt; ?>;
	        $(".add_plan").click(function() {
	            counts = counts + 1;

	            $('#output-plan').append('<p> Name <input  class="form-control" id="image_plan'+counts+'" type="text" name="propertyPlans['+counts+'][name]" value="" /> <a class="btn btn-xs btn-primary" id="upload_image_plan" imgcnt="'+counts+'">Upload Image</a> <a href="#" class="remove-plan btn btn-xs btn-info"><?php echo "Remove"; ?></a></p>' );
	            return false;
	        });
	       $(document.body).on('click','.remove-plan',function() {
	            $(this).parent().remove();
	        });

	       

	    });
	    </script>

	    	</div>
	    </div>
	    <?php
	    function my_admin_scripts2() {    
		    wp_enqueue_script('media-upload');
		    wp_enqueue_script('thickbox');
		    wp_register_script('my-upload', get_template_directory_uri().'/js/uploader.js', array('jquery','media-upload','thickbox'));
		    wp_enqueue_script('my-upload');
		}

		function my_admin_styles2() {

		    wp_enqueue_style('thickbox');
		}

		// better use get_current_screen(); or the global $current_screen

		    add_action('admin_print_scripts', 'my_admin_scripts2');
		    add_action('admin_print_styles', 'my_admin_styles2');

	}

	/* Save function for the entered data */
	function propery_planmap_meta_save( $post_id ) {
	    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	        return;
	    // Verifying the nonce
	    if ( !isset( $_POST['property_plan_nonce'] ) )
	        return;

	    if ( !wp_verify_nonce( $_POST['property_plan_nonce'], plugin_basename( __FILE__ ) ) )
	        return;
	    // Updating the employeeDetails meta data
	    $propertyPlans = $_POST['propertyPlans'];

	    update_post_meta($post_id,'propertyPlans',$propertyPlans);
	}
?>