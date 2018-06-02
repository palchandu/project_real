<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>SKGP </title>
<link rel="shortcut icon" href="images/short_icon1.png">
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?> 
</head>


<body>

<!--===== BACK TO TOP =====-->
<div class="short-msg">
  <a href="#." class="back-to"><i class="icon-arrow-up2"></i></a>
  <a href="#." class="short-topup" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
</div>
<!--===== #/BACK TO TOP =====-->


<!--===== HEADER =====-->
<header id="main_header">

  <!--===== HEADER BOTTOM =====-->
  <div id="header-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-2 hidden-xs hidden-sm"><a href="<?php echo site_url(); ?>"><img src="<?php global $skgp_options; echo $skgp_options['site_logo_two']['url']; ?>" alt="logo"/></a></div>
        <div class="col-md-10 col-sm-12 col-xs-12">
          <div class="get-tuch text-left top20">
            <i class="icon-telephone114"></i>
            <ul>
              <li>
                <h4>Phone Number</h4>
              </li>
              <li>
                <p><?php global $skgp_options; echo $skgp_options['contact_phone_number']; ?></p>
              </li>
            </ul>
          </div>
          <div class="get-tech-line top20"><img src="<?php echo get_template_directory_uri(); ?>/images/get-tuch-line.png" alt="line"/></div>
          <div class="get-tuch text-left top20">
            <i class="icon-icons74"></i>
            <?php global $skgp_options; echo $skgp_options['contact_location']; ?>
          </div>
          <div class="get-tech-line top20"><img src="<?php echo get_template_directory_uri(); ?>/images/get-tuch-line.png" alt="line"/></div>
          <div class="get-tuch text-left top20">
            <i class=" icon-icons142"></i>
            <ul>
              <li>
                <h4>Email Address</h4>
              </li>
              <li>
                <p><a href="mailto:help@getwebsoftware.com?subject=Enquiry"><?php global $skgp_options; echo $skgp_options['contact_email_addr']; ?></a></p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== #/HEADER BOTTOM =====--> 

  <!--===== NAV-BAR =====-->
  <nav class="navbar navbar-default navbar-sticky bootsnav">

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <div class="container">
      <div class="row">
        <div class="col-md-12">

        <!-- Start Atribute Navigation -->
        <div class="attr-nav">
            <ul>
                <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
            </ul>
        </div>        
        <!-- End Atribute Navigation -->

          <!-- Start Header Navigation -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i></button>
            <a class="navbar-brand sticky_logo" href="<?php echo site_url(); ?>"><img src="<?php  echo $skgp_options['site_logo_one']['url']; ?>" class="logo" alt=""></a>
          </div>
          <!-- End Header Navigation --> 

          <div class="collapse navbar-collapse" id="navbar-menu">
          <?php 
            wp_nav_menu(array(
              'theme_location'=>'primary_menu',
              'container' => false,
              'items_wrap' => '<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">%3$s</ul>',
              ));
           
            ?> 
            <!-- <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
              <li><a href="index.php">Home</a></li>
              <li class="active"><a href="about.php">About Us</a></li>
              <li><a href="listing-1.php">SKGP Floors</a></li>
              <li><a href="listing-1.php">SKGP Property</a></li>
              <li><a href="listing-1.php">SKGP Interior</a></li>
              <li><a href="testimonials.php">Happy Customer</a></li>
              <li><a href="contact-us.php">Contact Us</a></li>
            </ul> -->
          </div>

        </div>
      </div>
    </div>
  </nav>
  <!--===== #/NAV-BAR =====--> 

</header>