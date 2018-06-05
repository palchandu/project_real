<?php
/*
Template Name:About
*/
get_header('common');
if(have_posts())
{
  the_post();
?>
<!--===== #/HEADER =====--> 


<!--===== PAGE TITLE =====-->
<div class="page-title page-main-section parallaxie" style="background-image: url(&quot;<?php the_post_thumbnail_url('slider_img'); ?>&quot;); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 68.4px;">
  <div class="container padding-bottom-top-120 text-uppercase text-center">
    <div class="main-title">
      <h1>about us</h1>
      <div class="line_4"></div>
      <div class="line_5"></div>
      <div class="line_6"></div>
    </div>
  </div>
</div>
<!--===== #/PAGE TITLE =====-->


<!--===== ABOUT US =====-->
<section id="about_us" class="about-us padding">
  <div class="container">
    <div class="row">
      <div class="history-section">
        <div class="col-md-8 col-sm-8 col-xs-12">
          <h2 class="text-uppercase">Company <span class="color_red">overview</span></h2>
          <div class="line_1"></div>
          <div class="line_2"></div>
          <div class="line_3"></div>
          <p class="top20 bottom40"><?php the_content() ?></p>
          
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div id="about_single" class="owl-carousel">
           <?php
            //print_r(miu_get_images($post_id));
          if(count(miu_get_images($post_id))>0)
          {
            $slideImg=miu_get_images($post_id);
            foreach ($slideImg as $key => $valueImg) {
              ?>
              <div class="item">
              <div class="content-right-md">
                <figure class="effect-layla">
                  <img style=" height: 349px; width: 570px;" src="<?php echo $valueImg; ?>" alt="img"/>
                  <figcaption> </figcaption>
                </figure>
              </div>
            </div>
              <?php
            }
          }
          ?>
          </div>
          <div class="property-query-area padding-all20">
          <div class="row">
            <div class="col-md-12">
              <h3 class="text-uppercase  bottom40 top20">Recent <span class="color_red">Properties</span></h3>
            </div>
          </div>
          <?php
          get_sidebar();
          ?>
          
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--===== #/ABOUT US =====-->

<!--===== OUR PARTNER =====-->
<!-- <div id="our-partner">
  <div class="container-fluid">
    <div id="partner_slider" class="owl-carousel">
    <?php
        $args = array( 'post_type' => 'skgp_partner');
        $all_partner = new WP_Query( $args );
        if($all_partner->have_posts())
        {
          while ($all_partner->have_posts()) {
            $all_partner->the_post();
            $id = get_the_ID();
            $partner_name=get_post_meta( $post->ID, 'post_title', true );
            $partner_website=get_post_meta( $post->ID, 'partner_website', true );
            $uploaded_partner_image = get_post_meta($post->ID, 'uploaded_partner_image', true);
            ?>
             <div class="item"><a data-toggle="tooltip" title="<?= $partner_name ?>" data-placement="top" href="<?= $partner_website ?>" target="_blank"><img src="<?php echo $uploaded_partner_image; ?>" alt="<?= $partner_name ?>"></a></div>
            <?php
          }
        }
        ?>
    </div>

  </div>
</div> -->
<!--===== #/OUR PARTNER =====-->  

<!--===== #/FOOTER =====--> 
<?php
}
get_footer();
?>
