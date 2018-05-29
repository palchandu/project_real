<?php
get_header();
?>
<!-- SLIDER -->
<section class="rev_slider_wrapper">
  <div id="rev_slider_3" class="rev_slider"  data-version="5.0">
    <ul>
    <?php
    $args = array( 'post_type' => 'home_slider');
    $all_slider = new WP_Query( $args );
    if($all_slider->have_posts())
    {
      while ($all_slider->have_posts()) {
        $all_slider->the_post();
        $id = get_the_ID();

        $category = get_the_category();
      $link = get_category_link( $category[0]->term_id );
        ?>
        <li data-transition="fade">
          <img src="<?php the_post_thumbnail_url('slider_img'); ?>"  alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">
           <div class="tp-caption  tp-resizeme" 
              data-x="left" data-hoffset="20" 
              data-y="top" data-voffset="300" 
              data-transform_idle="o:1;"         
              data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
              data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
              data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
              data-splitin="none" 
              data-splitout="none"
              data-responsive_offset="on"
              data-start="700">
              
              <div class="slide-content left-slide">

                  <div class="big-title"><?= the_title() ?></div>
                  <p><?php the_content(); ?></p>
                  <div class="btns-box">
                      <a href="<?php echo $link ; ?>" class="btn_fill">View More</a>
                  </div>
              </div>
          </div>
        </li>
        <?php
      }
      
    }
    else
    {
      ?>
      <li data-transition="fade">
        <img src="<?php echo get_template_directory_uri(); ?>/images/banner-4.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">
         <div class="tp-caption  tp-resizeme" 
            data-x="left" data-hoffset="20" 
            data-y="top" data-voffset="300" 
            data-transform_idle="o:1;"         
            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
            data-splitin="none" 
            data-splitout="none"
            data-responsive_offset="on"
            data-start="700">
            
            <div class="slide-content left-slide">

                <div class="big-title">Dummy Slider</div>
                <p>This is dummy slider</p>
                <div class="btns-box">
                    <a href="#." class="btn_fill">View More</a>
                </div>
            </div>
        </div>
      </li>
      <?php
    }
    ?>
    </ul>
  </div>
</section>
<!-- /#SLIDER --> 



<!-- PROPERTY LISTING -->
<section id="property" class="bg_light padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 bottom40">
        <h2 class="uppercase">PROPERTY <span class="color_red">LISTINGS</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
        <p>We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div class="row">
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
            $propertyStatus = get_post_meta($post->ID, 'propertyStatus', true);
            ?>
            <div class="col-md-4 col-sm-6">
              <div class="property_item bottom40">
                <div class="image">
                  <img style="width: 360px; height: 251px;" src="<?php the_post_thumbnail_url(); ?>" alt="listin" class="img-responsive">
                  <div class="property_meta">
                  <span><i class="fa fa-object-group"></i><?php echo $propertySize; ?> sq ft </span>
                  <span><i class="fa fa-bed"></i><?= $bedRooms ?></span>
                  <span><i class="fa fa-bath"></i><?=$bathRoom ?> Bathroom</span></div>
                  <div class="price"><span class="tag"><?= $propertyStatus ?></span></div>
                  <div class="overlay">
                  <div class="centered"><a class="link_arrow white_border" href="<?php the_permalink() ?>">View Detail</a></div>
                  </div>
                </div>
                <div class="proerty_content">
                  <div class="proerty_text">
                    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                    <span>45 Regent Street, London, UK</span>
                    <p class="p-font-15"> <?= get_excerpt() ?></p>
                  </div>
                  <div class="favroute clearfix">
                    <p class="pull-md-left">&#8377;<?= $propertyPrice ?></p>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }
      }
      else
      {
        echo "No Property Found.";
      }
    ?>
    </div>
    <div class="row">
      <div class="col-md-12">
        <?php 
        
        global $wp_query;
$total = $wp_query->max_num_pages;
// Only paginate if we have more than one page
if ( $total > 1 )  {
     // Get the current page
     if ( !$current_page = get_query_var('paged') )
          $current_page = 1;
     // Structure of “format” depends on whether we’re using pretty permalinks
     $format = empty( get_option('permalink_structure') ) ? '&page=%#%' : 'page/%#%/';
     echo paginate_links(array(
          'base' => get_pagenum_link(1) . '%_%',
          'format' => $format,
          'current' => $current_page,
          'total' => $total,
          'mid_size' => 4,
          'type' => 'list'
     ));
}  
        ?>
      </div>
    </div>
  </div>
</section>
<!-- PROPERTY LISTING -->


<!-- Testimonials -->
<div id="our-partner" class="padding image-text-eig parallaxie">
  <div class="container">
    <div class="row mb-20">
        <div class="col-sm-1 col-md-2"></div>
        <div class="col-xs-12 col-sm-10 col-md-8 text-center">
          <h2 class="text-uppercase" style="color: #fff;">Happy <span class="color_red">Clients</span></h2>
          <div class="line_1-1"></div>
          <div class="line_2-2"></div>
          <div class="line_3-3"></div>
          
        </div>
        <div class="col-sm-1 col-md-2"></div>
      </div>
    <div class="col-md-12">
      <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>   
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                  <div class="item carousel-item active">
                    <div class="img-box"><img src="https://www.tutorialrepublic.com/examples/images/clients/1.jpg" alt=""></div>
                    <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                    <p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
                  </div>
                  <div class="item carousel-item">
                    <div class="img-box"><img src="https://www.tutorialrepublic.com/examples/images/clients/3.jpg" alt=""></div>
                    <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                    <p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
                  </div>
                  <div class="item carousel-item">
                    <div class="img-box"><img src="https://www.tutorialrepublic.com/examples/images/clients/3.jpg" alt=""></div>
                    <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                    <p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
                  </div>
                </div>
                
              </div>
      </div>
    </div>
  </div>
</div>


<!-- IMAGE WITH CONTENT -->

<!-- PARTNER -->
<div id="our-partner" class=" bg_light padding">
  <div class="container">
    <div class="row mb-20">
        <div class="col-sm-1 col-md-2"></div>
        <div class="col-xs-12 col-sm-10 col-md-8 text-center">
          <h2 class="text-uppercase">Our Trusted <span class="color_red">Partners</span></h2>
          <div class="line_1-1"></div>
          <div class="line_2-2"></div>
          <div class="line_3-3"></div>
          
        </div>
        <div class="col-sm-1 col-md-2"></div>
      </div>
    <div class="col-md-12">
      <div class="row">
        <div id="our-partner-slider" class="owl-carousel">
          <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-1.png" alt="Partners"></div>
          <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-2.png" alt="Partners"></div>
          <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-3.png" alt="Partners"></div>
          <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-4.png" alt="Partners"></div>
          <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-5.png" alt="Partners"></div>
          <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-1.png" alt="Partners"></div>
          <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-2.png" alt="Partners"></div>
          <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-3.png" alt="Partners"></div>
          <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-4.png" alt="Partners"></div>
          <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-5.png" alt="Partners"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- PARTNER -->


<!-- CONTACT -->
<section id="contact" class="bg-color-red">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch">
          <i class="icon-telephone114"></i>
          <ul>
            <li> <h4>Phone Number</h4> </li>
            <li> <p>+1 900 234 567 - 68</p> </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch">
          <i class="icon-icons74"></i>
          <ul>
            <li><h4>Victoria Hall,</h4></li>
            <li><p>Idea Homes, australia</p></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch">
          <i class=" icon-icons142"></i>
          <ul>
            <li><h4>Email Address</h4></li>
            <li><a href="#.">info@ideahomes.com</a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- CONTACT --> 


<!-- FOOTER -->
<?php
get_footer();
?>