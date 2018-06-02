<?php
/*
Template Name:Testimonials
*/
get_header('common');
?>
<!--===== #/HEADER =====--> 


<!--===== PAGE TITLE =====-->
<div class="page-title page-main-section parallaxie">
    <div class="container padding-bottom-top-120 text-uppercase text-center">
        <div class="main-title">
            <h1>Happy Customer</h1>
            <div class="line_4"></div>
            <div class="line_5"></div>
            <div class="line_6"></div>
             </div>
    </div>
</div>
<!--===== #/PAGE TITLE =====-->


<!--===== TESTINOMIAL =====-->
<section id="testinomila_page" class="padding">
  <div class="container">
    <div class="row bottom40">
      <div class="col-md-12">
        <h2 class="text-uppercase">Customar <span class="color_red">Feedback</span></h2>
        <div class="line_1"></div>
         <div class="line_2"></div>
         <div class="line_3"></div> 
      </div>
    </div>
    <div id="js-grid-masonry" class="cbp">
      <?php
      $args = array( 'post_type' => 'skgp_testimonials');
      $all_testimonials = new WP_Query( $args );
      if($all_testimonials->have_posts())
        {
          $vals=true;
           while ($all_testimonials->have_posts()) {
            $all_testimonials->the_post();
            $id = get_the_ID();
            $client_name=get_post_meta( $post->ID, 'post_title', true );
            $client_designation=get_post_meta( $post->ID, 'client_designation', true );
            $image_url = get_post_meta($post->ID, 'upload_image', true);
            $customer_review=get_post_meta( $post->ID, 'customer_review', true );
            ?>
              <div class="cbp-item">
                <div class="cbp-caption-defaultWrap">
                  <div class="testinomial_wrap">
                    <div class="testinomial_text blue_dark  text-center">
                      <p><?= $customer_review ?></p>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/quote.png" alt="quote" class="quote">
                    </div>
                    <div class="testinomial_pic">
                      <img src="<?php echo $image_url; ?>" alt="testinomial" width="59">
                      <h4 class="color"><?= $client_name ?></h4>
                      <span class="post_img">( <?= $client_designation ?>  )</span>
                    </div> 
                  </div>
                </div>
              </div>
            <?php
          }
        }
      ?>
    </div>
  </div>
</section>
<!--===== #/TESTINOMIAL =====--> 

<!--===== FOOTER =====-->
<?php
get_footer();
?>