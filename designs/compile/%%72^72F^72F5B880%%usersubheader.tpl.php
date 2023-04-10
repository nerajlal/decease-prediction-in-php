<?php /* Smarty version 2.6.26, created on 2022-11-07 18:47:55
         compiled from usersubheader.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Disease Prediction System : Home</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.ico"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="user/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="user/css/font-awesome.min.css" rel="stylesheet">       
    <!-- Default Theme css file -->
    <link id="switcher" href="user/css/themes/default-theme.css" rel="stylesheet">   
    <!-- Slick slider css file -->
    <link href="user/css/slick.css" rel="stylesheet"> 
    <!-- Photo Swipe Image Gallery -->     
    <link rel='stylesheet prefetch' href='user/css/photoswipe.css'>
    <link rel='stylesheet prefetch' href='user/css/default-skin.css'>    

    <!-- Main structure css file -->
    <link href="user/style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>  
    <link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:900' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
  </head>
  <body>  
    
    <!-- BEGAIN PRELOADER -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-user-md"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  
          <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->              
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="index.php"><i class="fa fa-user-md"></i>Disease Prediction<span>&nbsp;system</span></a>              
              <!-- IMG BASED LOGO  -->
              <!--  <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>   -->                    
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li class="active"><a href="usermainheader.php">Home</a></li>
                <li><a href="userprofile.php">Profile</a></li>
                <!-- <li><a href="about-us.html">About Us</a></li> -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Service <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="message.php">Message</a></li>
                    <li><a href="outbox.php">Outbox</a></li>
                    <li><a href="inbox.php">Inbox</a></li>
                  </ul>
                </li>
                <li><a href="symptoms.php">Predict Disease</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Appointment<span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="appointment.php">Fix Doctor Appointment</a></li>
                    <li><a href="viewbooking.php">View Doctor Appointment </a></li>
                    <li><a href="labappointment.php">Lab appointment</a></li>
                    <li><a href="viewlabbooking.php">View Lab Appointment</a></li>
                    <!-- <li><a href="blog-archive-with-right-sidebar.html">Blog Archive with Right Sidebar</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                    <li><a href="blog-single-with-left-sidebar.html">Blog Single with Left Sidebar</a></li>
                    <li><a href="blog-single-with-right-sidebar.html">Blog Single with Right Sidebar</a></li> -->           
                  </ul>
                </li>
                <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Page <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="404.html">404 Page</a></li>
                    <li><a href="#">Link Two</a></li>
                    <li><a href="#">Link Three</a></li>               
                  </ul>
                </li>               
                <li><a href="contact.html"class="w3-button w3-white w3-border w3-border-red w3-round-large">contact</a></li> -->
               <a href="logout.php"><button type="submit" class="btn navbar-btn btn-danger" name="logout" id="logout" value="LOG OUT">Log Out</button></a>
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header><br><br><br><br><br><br><br><br><br><br>
    <!--=========== END HEADER SECTION ================-->   

    <!--=========== BEGIN SLIDER SECTION ================-->
    <!-- <section id="sliderArea">
       Start slider wrapper -->      
     <!--  <div class="top-slider">
         Start First slide -->
       <!--  <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/14.jpg" alt="">
          </div> -->
          <!-- <div class="slider-text">
            <h2>An <strong>Excellent Theme</strong> for your Health Related Project</h2>
            <p><strong>WpF Medinova</strong> Theme suitable for any health and medical related projets or business</p>
            <div class="readmore_area">
              <a data-hover="Read More" href="#"><span>Read More</span></a>                
            </div>
          </div>
        </div> -->
        <!-- End First slide -->

        <!-- Start 2nd slide -->
        <!-- <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/15.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2><strong>Best Template</strong> For your Medical Website</h2>
            <p><strong>WpF Medinova</strong> Theme suitable for any health and medical related projets or business</p>
            <div class="readmore_area">
              <a data-hover="Read More" href="#"><span>Read More</span></a>                
            </div>
          </div>
        </div> -->
        <!-- End 2nd slide -->

        <!-- Start Third slide -->
        <!-- <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/7.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2>An <strong>Excellent Theme</strong> for your Health Related Project</h2>
            <p><strong>WpF Medinova</strong> Theme suitable for any health and medical related projets or business</p>
            <div class="readmore_area">
              <a data-hover="Read More" href="#"><span>Read More</span></a>                
            </div>
          </div>
        </div> -->
        <!-- End Third slide -->

        <!-- Start Fourth slide -->
        <!-- <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/12.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2><strong>Best Template</strong> For your Medical Website</h2>
            <p><strong>WpF Medinova</strong> Theme suitable for any health and medical related projets or business</p>
            <div class="readmore_area">
              <a data-hover="Read More" href="#"><span>Read More</span></a>                
            </div>
          </div>
        </div> -->
        <!-- End Fourth slide -->

        <!-- Start Fifth slide -->
        <!-- <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/9.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2>An <strong>Excellent Theme</strong> for your Health Related Project</h2>
            <p><strong>WpF Medinova</strong> Theme suitable for any health and medical related projets or business</p>
            <div class="readmore_area">
              <a data-hover="Read More" href="#"><span>Read More</span></a>                
            </div>
          </div>
        </div> -->
        <!-- End Fifth slide -->
      <!-- </div>/top-slider -->
    <!-- </section> -->
    <!--=========== END SLIDER SECTION ================-->