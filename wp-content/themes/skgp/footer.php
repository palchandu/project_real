<!--===== CONTACT =====-->
<section id="contact" class="bg-color-red">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch">
          <i class="icon-telephone114"></i>
          <ul>
          <li> <h4>Phone Number</h4> </li>
            <li>
              <p class="p-font-15"><?php global $skgp_options; echo $skgp_options['contact_phone_number']; ?></p>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch">
          <i class="icon-icons74"></i>
          <?php global $skgp_options; echo $skgp_options['contact_location']; ?>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch">
          <i class=" icon-icons142"></i>
          <ul>
          <li> <h4>Email Address</h4> </li>
            <li>
              <a href="mailto:help@getwebsoftware.com?subject=Enquiry"><p class="p-font-15"><?php global $skgp_options; echo $skgp_options['contact_email_addr']; ?></p></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!--===== #/CONTACT =====-->
<footer id="footer" class="footer divider layer-overlay overlay-dark-8">
  <div class="container pt-70">
    <div class="row border-bottom">
      <div class="col-sm-6 col-md-4">
        <div class="widget dark">
          <img class="mt-5 mb-20" alt="" src="<?php global $skgp_options; echo $skgp_options['footer_logo']['url']; ?>">
          <p><?php global $skgp_options; echo $skgp_options['footer_address']; ?></p>
          <ul class="list-inline mt-5">
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href=""><?php global $skgp_options; echo $skgp_options['footer_phone']; ?></a> </li>
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a class="text-gray" href=""><?php global $skgp_options; echo $skgp_options['footer_email']; ?></a> </li>
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-2 mr-5"></i> <a class="text-gray" href=""><?php global $skgp_options; echo $skgp_options['footer_website']; ?></a> </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="widget dark">
          <h4 class="widget-title">Quick Links</h4>
          <div class="small-title">
            <div class="line1 background-color-white"></div>
            <div class="line2 background-color-white"></div>
            <div class="clearfix"></div>
          </div>
           <?php 
            wp_nav_menu(array(
              'theme_location'=>'footer_menu',
              'container' => false,
              'items_wrap' => '<ul class="list angle-double-right list-border">%3$s</ul>',
              ));
           
            ?> 
          
        </div>
      </div>
      <div class="col-sm-6 col-md-1"></div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h4 class="widget-title">Connect With Us</h4>
          <div class="small-title">
            <div class="line1 background-color-white"></div>
            <div class="line2 background-color-white"></div>
            <div class="clearfix"></div>
          </div>
          <div class="opening-hourse">
            <ul class="socials">
            <li><a href="<?php global $skgp_options; echo $skgp_options['connect_facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="<?php global $skgp_options; echo $skgp_options['connect_twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="<?php global $skgp_options; echo $skgp_options['connect_youtube']; ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
            <li><a href="<?php global $skgp_options; echo $skgp_options['connect_instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
          </ul>
          <div class="mb20">
          <form class="padding-top-30">
            <input class="search" placeholder="Enter your Email" type="search">
            <a href="#." class="button"><i class="icon-mail-envelope-open"></i></a>
          </form>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-5">
          <p class="font-11 text-black-777 m-0 copy-right"><?php global $skgp_options; echo $skgp_options['copy_right_year']; ?> <a href="<?php global $skgp_options; echo $skgp_options['copy_website_url']; ?>"><span class="color_red"><?php global $skgp_options; echo $skgp_options['copy_website_name']; ?></span></a>. <?php global $skgp_options; echo $skgp_options['copy_right_text']; ?></p>
        </div>
        <div class="col-md-6 col-sm-7 text-right">
          <div class="widget no-border m-0">
           
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- FOOTER --> 


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="text-uppercase">Send us<span class="color_red"> a message </span></h2>
      </div>

      <div class="modal-body">


        <div class="short-msg-tab"> 
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
              <div class="row">
                
                <?php echo do_shortcode('[contact-form-7 id="225" title="Contact form 1"]'); ?>
              </div>
            </div>
            
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- #/Modal -->
<?php wp_footer(); ?>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>

</html>
