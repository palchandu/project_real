<?php
get_header('common');
?>
<!--===== #/HEADER =====-->


<!--===== PAGE TITLE =====-->
<div class="page-title page-main-section parallaxie">
  <div class="container padding-bottom-top-120 text-uppercase text-center">
    <div class="main-title">
      <h1>Property Details</h1>
      <div class="line_4"></div>
      <div class="line_5"></div>
      <div class="line_6"></div>
     </div>
  </div>
</div>
<!--===== #/PAGE TITLE =====--> 

<?php
if(have_posts())
{
  while(have_posts())
    {
      the_post();
      $propertyPrice = get_post_meta($post->ID, 'propertyPrice', true);
      $propertySize = get_post_meta($post->ID, 'propertySize', true);
      $bedRooms = get_post_meta($post->ID, 'bedRooms', true);
      $bathRoom = get_post_meta($post->ID, 'bathRoom', true);
      $propertyId = get_post_meta($post->ID, 'propertyId', true);
      $availableDate = get_post_meta($post->ID, 'availableDate', true);
      $propertyStatus = get_post_meta($post->ID, 'propertyStatus', true);
      $builtYear = get_post_meta($post->ID, 'builtYear', true);
      $propertyFloors = get_post_meta($post->ID, 'propertyFloors', true);
      $propertyPluming = get_post_meta($post->ID, 'propertyPluming', true);
      $property_address=get_post_meta( $post->ID, 'property_address', true );
      ?>
        <!-- PROPERTY DETAILS-->
        <section id="news-section-1" class="property-details padding_top">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2 class="text-uppercase"><?= the_title() ?></h2>
                <div class="line_1"></div>
                <div class="line_2"></div>
                <div class="line_3"></div>
                <p class="bottom20"><?php echo $property_address; ?></p>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12">
                  
                    <div id="property-d-1" class="owl-carousel">
                      <?php
                        //print_r(miu_get_images($post_id));
                      if(count(miu_get_images($post_id))>0)
                      {
                        $slideImg=miu_get_images($post_id);
                        foreach ($slideImg as $key => $valueImg) {
                          ?>
                          <div class="item"><img src="<?php echo $valueImg; ?>" alt="image" /></div>
                          <?php
                        }
                      }
                      ?>
                    </div>
                    <div id="property-d-1-2" class="owl-carousel">
                      <?php
                        //print_r(miu_get_images($post_id));
                      if(count(miu_get_images($post_id))>0)
                      {
                        $slideImg=miu_get_images($post_id);
                        foreach ($slideImg as $key => $valueImg) {
                          ?>
                          <div class="item"><img src="<?php echo $valueImg; ?>" alt="image" /></div>
                          <?php
                        }
                      }
                      ?>
                      
                    </div>
                  </div>
                </div>
                <div class="row top40">
                  <div class="col-md-8">
                    <div class="row margin_bottom">
                      <div class="col-xs-12 top40">
                        <h3 class="text-uppercase bottom30">Property <span class="color_red">Description</span></h3>
                        <p class="bottom30"><?php the_content() ?></p>
                        
                        <div class="property_meta top10">
                          <span><i class="fa fa-object-group"></i><?= $propertySize ?> sq ft </span>
                          <span><i class="fa fa-bed"></i><?= $bedRooms ?> Bedrooms</span>
                          <span><i class="fa fa-bath"></i><?= $bathRoom ?> Bathroom</span>
                        </div>
                      </div>
                    </div>
                    <div class="row margin_bottom">
                      <div class="col-xs-12">
                        <h3 class="text-uppercase bottom30">Quick  <span class="color_red">Summery</span></h3>
                      </div>
                      <div class="property-d-table clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <table class="table table-striped table-responsive">
                            <tbody>
                              <tr>
                                <td><b>Property Id</b></td>
                                <td class="text-right"><?= $propertyId ?></td>
                              </tr>
                              <tr>
                                <td><b>Price</b></td>
                                <td class="text-right"><?= $propertyPrice ?> / month</td>
                              </tr>
                              <tr>
                                <td><b>Property Size</b></td>
                                <td class="text-right"><?= $propertySize ?> ft2</td>
                              </tr>
                              <tr>
                                <td><b>Bedrooms</b></td>
                                <td class="text-right"><?= $bedRooms ?></td>
                              </tr>
                              <tr>
                                <td><b>Bathrooms</b></td>
                                <td class="text-right"><?= $bathRoom ?></td>
                              </tr>
                              
                            </tbody>
                          </table>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <table class="table table-striped table-responsive">
                            <tbody>
                              <tr>
                                <td><b>Status</b></td>
                                <td class="text-right"><?= $propertyStatus ?></td>
                              </tr>
                              <tr>
                                <td><b>Year Built</b></td>
                                <td class="text-right"><?= $builtYear ?></td>
                              </tr>
                              <tr>
                                <td><b>Floors</b></td>
                                <td class="text-right"><?= $propertyFloors ?></td>
                              </tr>
                              <tr>
                                <td><b>Plumbing</b></td>
                                <td class="text-right"><?= $propertyPluming ?></td>
                              </tr>
                              <tr>
                                <td><b>Available From</b></td>
                                <td class="text-right"><?= $availableDate ?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="row margin_bottom">
                      <div class="col-xs-12">
                        <h3 class="text-uppercase bottom30">Property <span class="color_red">Features</span></h3>
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="pro-list">
                        <?php
                          $propertyDetails = get_post_meta($post->ID,'propertyDetails',true);
                          foreach ($propertyDetails as $key => $propertyDetail) {
                            ?>
                            <li>
                                <?= $propertyDetail['name'] ?>
                              </li>
                            <?php
                          }
                        ?>
                        </ul>
                      </div>
                    </div>
                    
                  </div>
                  <div class="col-md-4 col-lg-4">
          
                    <div class="blog_info blog-thumbnail">
                     <div class="row">
                    <div class="col-md-12">
                      <h3 class="text-uppercase  bottom40 top40">Recent <span class="color_red">Properties</span></h3>
                    </div>
                  </div>
                   <?php
                    get_sidebar();
                    ?>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                <!--Property plans-->
                    <div class="row margin_bottom">
                      <div class="col-xs-12">
                        <h3 class="text-uppercase bottom20">Our <span class="color_red">Plans</span></h3>
                      </div>
                      <?php
                      $valuePlanImage = esc_attr(get_post_meta( $post->ID, 'a_upload_images', true ));
                      $data =array();
                      if(!empty($valuePlanImage)){
                      $data = explode(',',$valuePlanImage);
                        //print_r($data);
                      }
                      foreach($data as $v){
                        $src = wp_get_attachment_image_src( $v );
                      ?>
                      <div class="col-md-4 col-sm-4 col-xs-12 top10">
                        <div class="image">
                          <img src="<?php echo $src[0];?>" alt="image" />
                          <div class="overlay border_radius">
                            <a class="fancybox centered" href="<?php echo $src[0];?>" data-fancybox-group="gallery"><i class="icon-focus"></i></a>
                          </div>
                        </div>
                      </div>
                      <?php } 
                      ?>

                    </div>
                    <!--property Videos-->
                    <div class="row margin_bottom">
                      <div class="col-xs-12">
                        <h3 class="text-uppercase bottom20">Our <span class="color_red">Videos</span></h3>
                      </div>
                      <?php
                      $propertyVideos = get_post_meta($post->ID,'propertyVideos',true);
                      if ( count( $propertyVideos ) > 0 && is_array($propertyVideos)) {
                      foreach($propertyVideos as $propertyVideo ){
                      ?>
                      <div class="col-md-6 col-sm-6 col-xs-12 top10">
                       <?php echo $propertyVideo['name'] ?>
                      </div>
                      <?php }
                      } 
                      ?>

                    </div>
                    <!--property map-->
                    <div class="row margin_bottom">
                      <div class="col-xs-12">
                        <h3 class="text-uppercase bottom30">Property <span class="color_red">Map</span></h3>
                      </div>
                      <div class="col-md-12">
                        <div style="height: 350px;">
                          <?php
                          $google_map = get_post_meta( $post->ID, 'google_map', true );
                          echo $google_map;
                          ?>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- /PROPERTY DETAILS - 3 =-->

      <?php
    }
}
?>

<!--===== FOOTER =====-->
<?php
get_footer();
?>
