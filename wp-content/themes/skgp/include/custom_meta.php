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
    	<div class="col-sm-12 col-md-6 col-lg-6">
    		<div class="form-group">
    			<label for="property_id">Property Id</label>
    			<input type="text" name="property_id" id="property_id" class="form-control" placeholder="Enter Property Id">
    		</div>
    		<div class="form-group">
    			<label for="property_price">Price</label>
    			<input type="number" name="property_price" id="property_price" class="form-control" placeholder="Enter Property Price">
    		</div>
    		<div class="form-group">
    			<label for="property_size">Project Size(Sq.Ft.)</label>
    			<input type="number" name="property_size" id="property_size" class="form-control" placeholder="Enter Property Size">
    		</div>
    		<div class="form-group">
    			<label for="property_id">Number Of Bedrooms</label>
    			<input type="number" name="bedrooms" id="bedrooms" class="form-control" placeholder="Enter Number Of Bedrooms">
    		</div>
    		<div class="form-group">
    			<label for="bathroom">Number Of Bathroom</label>
    			<input type="number" name="bathroom" id="bathroom" class="form-control" placeholder="Enter Number Of Bathroom">
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
    			<input type="date" name="available_date" id="available_date" class="form-control" placeholder="Available From">
    		</div>
    		<div class="form-group">
    			<label for="property_floors">Floors</label>
    			<input type="text" name="property_floors" id="property_floors" class="form-control" placeholder="Enter About Floors">
    		</div>
    		<div class="form-group">
    			<label for="property_pluming">Plumbing</label>
    			<input type="number" name="property_pluming" id="property_pluming" class="form-control" placeholder="Enter About Plumbing">
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
?>