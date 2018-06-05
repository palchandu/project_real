<?php
/*
Template Name:Contact
*/
get_header('common');
?>
<!--===== #/HEADER =====--> 
<?php
    if(have_posts())
    {
      the_post();
    ?>

<!--===== PAGE TITLE =====-->
<div class="page-title page-main-section parallaxie" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  <div class="container padding-bottom-top-120 text-uppercase text-center">
    <div class="main-title">
      <h1>Contact us</h1>
      <div class="line_4"></div>
      <div class="line_5"></div>
      <div class="line_6"></div>
    </div>
  </div>
</div>
<!--===== #/PAGE TITLE =====-->


<!--===== CONTACT US =====-->
<section id="contact-us">
  <div class="container">
      <div class="row padding">
        
        <div class="col-md-8">
          <div class="bottom40">
                <h2 class="text-uppercase">Send us<span class="color_red"> a message </span></h2>
                <div class="line_1"></div>
                <div class="line_2"></div>
                <div class="line_3"></div>
              </div>
          <div class="agent-p-form p-t-30">
            
            <div class="row">
             <div class="form-group">
                 <div id="result">
                 </div>
             </div>
        <?php echo do_shortcode('[contact-form-7 id="225" title="Contact form 1"]'); ?>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="bottom40">
                <h2 class="text-uppercase">get in<span class="color_red"> touch</span></h2>
                <div class="line_1"></div>
                <div class="line_2"></div>
                <div class="line_3"></div>
              </div>
              
          <div class="agent-p-contact p-t-30">
            <div class="agetn-contact-2">
              <p><i class="icon-telephone114"></i> <?php global $skgp_options; echo $skgp_options['footer_phone']; ?></p>
              <a href="#.">
                <p><i class=" icon-icons142"></i> <?php global $skgp_options; echo $skgp_options['footer_email']; ?></p>
              </a>
              <a href="#.">
                <p><i class="icon-browser2"></i><?php global $skgp_options; echo $skgp_options['footer_website']; ?></p>
              </a>
              <p><i class="icon-icons74"></i> <?php global $skgp_options; echo $skgp_options['footer_address']; ?></p>
            </div>
            <ul class="socials">
              <li><a href="<?php global $skgp_options; echo $skgp_options['connect_facebook']; ?>."><i class="fa fa-facebook"></i></a></li>
              <li><a href="<?php global $skgp_options; echo $skgp_options['connect_twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
              <li><a href="<?php global $skgp_options; echo $skgp_options['connect_youtube']; ?>"><i class="fa fa-youtube"></i></a></li>
              <li><a href="<?php global $skgp_options; echo $skgp_options['connect_instagram']; ?>"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
       
      </div>
    </div>
    
    <div class="contact">
      <div id="map_123">
        <?php $google_map = get_post_meta( $post->ID, 'contact_google_map', true ); echo $google_map; ?>
      </div>
    </div>
</section>
<?php
    }
  ?>
<!--===== #/CONTACT US =====-->

<!--===== FOOTER =====-->
<?php
get_footer();
?>