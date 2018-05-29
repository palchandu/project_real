<?php
/*
Template Name:Contact
*/
get_header('common');
?>
<!--===== #/HEADER =====--> 


<!--===== PAGE TITLE =====-->
<div class="page-title page-main-section parallaxie" style="background-image: url(images/titlebg-1.jpg);">
  <div class="container padding-bottom-top-120 text-uppercase text-center">
    <div class="main-title">
      <h1>Contact us</h1>
      <h5>10 Years Of Experience!</h5>
      <div class="line_4"></div>
      <div class="line_5"></div>
      <div class="line_6"></div>
      <a href="index-2.html">home</a><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span><a href="contact-us.html">Contact us</a> 
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
              <form class="callus padding-bottom"  id="contact-form" onSubmit="return false">
            
                     <div class="form-group">
                         <div id="result">
                         </div>
                     </div>
            
              <div class="col-md-12">
                    <div class="single-query">
                        <input type="text" class ="keyword-input" placeholder="Name" name="name" id="name">
                    </div>
                </div>
               <div class="col-md-12">    
                    <div class="single-query">
                        <input type="text" class ="keyword-input" placeholder="Phone" name="phone" id="phone">
                    </div>
               </div>
               <div class="col-md-12">     
                    <div class="single-query">
                        <input type="email" class ="keyword-input" placeholder="E - mail" name="email" id="email">
                    </div>
               </div>
               <div class="col-md-12">
                    <div class="single-query">
                        <textarea name="message" placeholder="Message" id="message"></textarea>
                    </div>
               </div>
                 <div class="col-md-12">   
                      <button type="submit" class="btn_fill" id="btn_submit" name="btn_submit">Submit</button>
                 </div>     
                    </form>
        
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
              <p><i class="icon-telephone114"></i> (+01) 34 56 7890</p>
              <a href="#.">
                <p><i class=" icon-icons142"></i> info@ideahomes.com</p>
              </a>
              <a href="#.">
                <p><i class="icon-browser2"></i>www.ideahomes.com</p>
              </a>
              <p><i class="icon-icons74"></i> Idea Homes, Merrick Way, FL 12345 Australia</p>
            </div>
            <ul class="socials">
              <li><a href="#."><i class="fa fa-facebook"></i></a></li>
              <li><a href="#."><i class="fa fa-twitter"></i></a></li>
              <li><a href="#."><i class="fa fa-youtube"></i></a></li>
              <li><a href="#."><i class="fa fa-instagram"></i></a></li>
              <li><a href="#."><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
       
      </div>
    </div>
    
    <div class="contact">
      <div id="map"></div>
    </div>
</section>
<!--===== #/CONTACT US =====-->


<!--===== CONTACT =====-->
<section id="contact" class="bg-color-red">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch"><i class="icon-telephone114"></i>
          <ul>
            <li>
              <h4 class="p-font-17">Phone Number</h4>
            </li>
            <li>
              <p class="p-font-15">+1 900 234 567 - 68</p>
            </li>
          </ul>
        </div>
        <div class="get-tech-line"><img src="images/get-tuch-line.png" alt="line"/></div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch"><i class="icon-icons74"></i>
          <ul>
            <li>
              <h4 class="p-font-17">Victoria Hall,</h4>
            </li>
            <li>
              <p class="p-font-15">Idea Homes, australia</p>
            </li>
          </ul>
        </div>
        <div class="get-tech-line"><img src="images/get-tuch-line.png" alt="line"/></div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch"><i class=" icon-icons142"></i>
          <ul>
            <li>
              <h4 class="p-font-17">Email Address</h4>
            </li>
            <li>
              <a href="#."><p class="p-font-15">info@ideahomes.com</p></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!--===== #/CONTACT =====--> 


<!--===== FOOTER =====-->
<?php
get_footer();
?>