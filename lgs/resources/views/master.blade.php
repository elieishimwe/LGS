<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title>Lumumba Graduate Institute</title>
        <meta name="keywords" content="HTML5,CSS3,Template" />
        <meta name="description" content="" />
        <meta name="Author" content="Elie Ishiwme" />

        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

        <!-- WEB FONTS : use %7C instead of | (pipe) -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

        <!-- CORE CSS -->
        <link href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- REVOLUTION SLIDER -->
        <link href="{{ asset('/plugins/slider.revolution/css/extralayers.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/plugins/slider.revolution/css/settings.css') }}" rel="stylesheet" type="text/css" />

        <!-- THEME CSS -->
        <link href="{{ asset('/css/essentials.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/layout.css') }}" rel="stylesheet" type="text/css" />

        <!-- PAGE LEVEL SCRIPTS -->
        <link href="{{ asset('/css/header-1.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/color_scheme/green.css') }}" rel="stylesheet" type="text/css" id="color_scheme" />
    </head>

    <!--
        AVAILABLE BODY CLASSES:

        smoothscroll            = create a browser smooth scroll
        enable-animation        = enable WOW animations

        bg-grey                 = grey background
        grain-grey              = grey grain background
        grain-blue              = blue grain background
        grain-green             = green grain background
        grain-blue              = blue grain background
        grain-orange            = orange grain background
        grain-yellow            = yellow grain background

        boxed                   = boxed layout
        pattern1 ... patern11   = pattern background
        menu-vertical-hide      = hidden, open on click

        BACKGROUND IMAGE [together with .boxed class]
        data-background="assets/images/boxed_background/1.jpg"
    -->
    <body class="smoothscroll enable-animation">

        <!-- SLIDE TOP -->
        <div id="slidetop">

            <div class="container">

                <div class="row">

                    <div class="col-md-4">
                        <h6><i class="icon-heart"></i> WHY SMARTY?</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. </p>
                    </div>

                    <div class="col-md-4">
                        <h6><i class="icon-attachment"></i> RECENTLY VISITED</h6>
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> This is a very long text, very very very very very very very very very very very very </a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Dolor sit amet,consectetur adipiscing elit amet</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet,consectetur adipiscing elit</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h6><i class="icon-envelope"></i> CONTACT INFO</h6>
                        <ul class="list-unstyled">
                            <li><b>Address:</b> PO Box 21132, Here Weare St, <br /> Melbourne, Vivas 2355 Australia</li>
                            <li><b>Phone:</b> 1-800-565-2390</li>
                            <li><b>Email:</b> <a href="mailto:support@yourname.com">support@yourname.com</a></li>
                        </ul>
                    </div>

                </div>

            </div>

          

        </div>
        <!-- /SLIDE TOP -->


        <!-- wrapper -->
        <div id="wrapper">

            <!-- Top Bar -->
            <div id="topBar">
                <div class="container">

                    <!-- right -->
                    <!-- <ul class="top-links list-inline pull-right">
                        <li class="text-welcome hidden-xs">Welcome to Smarty, <strong>John Doe</strong></li>
                        <li>
                            <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><i class="fa fa-user hidden-xs"></i> MY ACCOUNT</a>
                            <ul class="dropdown-menu pull-right">
                                <li><a tabindex="-1" href="#"><i class="fa fa-history"></i> ORDER HISTORY</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="#"><i class="fa fa-bookmark"></i> MY WISHLIST</a></li>
                                <li><a tabindex="-1" href="#"><i class="fa fa-edit"></i> MY REVIEWS</a></li>
                                <li><a tabindex="-1" href="#"><i class="fa fa-cog"></i> MY SETTINGS</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="#"><i class="glyphicon glyphicon-off"></i> LOGOUT</a></li>
                            </ul>
                        </li>
                    </ul> -->

                    <!-- left -->
                    <!-- <ul class="top-links list-inline">
                        <li class="hidden-xs"><a href="page-contact-1.html">CONTACT</a></li>
                        <li>
                            <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><img class="flag-lang" src="assets/images/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a>
                            <ul class="dropdown-langs dropdown-menu">
                                <li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/flags/de.png" width="16" height="11" alt="lang" /> GERMAN</a></li>
                                <li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/flags/ru.png" width="16" height="11" alt="lang" /> RUSSIAN</a></li>
                                <li><a tabindex="-1" href="#"><img class="flag-lang" src="assets/images/flags/it.png" width="16" height="11" alt="lang" /> ITALIAN</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#">USD</a>
                            <ul class="dropdown-langs dropdown-menu">
                                <li><a tabindex="-1" href="#">USD</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="#">EUR</a></li>
                                <li><a tabindex="-1" href="#">GBP</a></li>
                            </ul>
                        </li>
                    </ul> -->

                </div>
            </div>
            <!-- /Top Bar -->


            <!--
                AVAILABLE HEADER CLASSES

                Default nav height: 96px
                .header-md      = 70px nav height
                .header-sm      = 60px nav height

                .noborder       = remove bottom border (only with transparent use)
                .transparent    = transparent header
                .translucent    = translucent header
                .sticky         = sticky header
                .static         = static header
                .dark           = dark header
                .bottom         = header on bottom

                shadow-before-1 = shadow 1 header top
                shadow-after-1  = shadow 1 header bottom
                shadow-before-2 = shadow 2 header top
                shadow-after-2  = shadow 2 header bottom
                shadow-before-3 = shadow 3 header top
                shadow-after-3  = shadow 3 header bottom

                .clearfix       = required for mobile menu, do not remove!

                Example Usage:  class="clearfix sticky header-sm transparent noborder"
            -->
            <div id="header" class="sticky shadow-after-3 clearfix">

                <!-- TOP NAV -->
                <header id="topNav">
                    <div class="container">

                        <!-- Mobile Menu Button -->
                        <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- BUTTONS -->
                        <ul class="pull-right nav nav-pills nav-second-main">



                        </ul>
                        <!-- /BUTTONS -->


                        <!-- Logo -->
                        <a class="logo pull-left" href="index.html">
                            <img src="{{ asset('/images/logo.png') }}" alt="" />
                        </a>

                        <!--
                            Top Nav

                            AVAILABLE CLASSES:
                            submenu-dark = dark sub menu
                        -->
                        <div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
                            <nav class="nav-main">

                                <!--
                                    NOTE

                                    For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
                                    Direct Link Example:

                                    <li>
                                        <a href="#">HOME</a>
                                    </li>
                                -->
                                <ul id="topMain" class="nav nav-pills nav-main">
                                    <li class="dropdown active"><!-- HOME -->
                                        <a class="" href="/">
                                            HOME
                                        </a>
                                       
                                    </li>
                                    <li class="dropdown active"><!-- HOME -->
                                        <a class="" href="about">
                                            ABOUT US
                                        </a>
                                       
                                    </li>
                                    <li class="dropdown active"><!-- HOME -->
                                        <a class="" href="programmes">
                                            PROGRAMMES
                                        </a>
                                       
                                    </li>

                                   

                                    <li class="dropdown active"><!-- HOME -->
                                        <a class="" href="contact">
                                            CONTACT US
                                        </a>
                                       
                                    </li>
                                  
                                
                                 
            

                                </ul>

                            </nav>
                        </div>

                    </div>
                </header>
                <!-- /Top Nav -->

            </div>



          @yield('content')

            <!-- INFO BAR -->
           <!--  <section class="info-bar info-bar-clean">
               <div class="container">
           
                   <div class="row">
           
                       <div class="col-sm-4">
                           <i class="glyphicon glyphicon-globe"></i>
                           <h3>FULLY RESPONSIVE</h3>
                           <p>Smarty Template is fully responsive</p>
                       </div>
           
                       <div class="col-sm-4">
                           <i class="glyphicon glyphicon-usd"></i>
                           <h3>ADMIN INCLUDED</h3>
                           <p>Smarty Template include admin</p>
                       </div>
           
                       <div class="col-sm-4">
                           <i class="glyphicon glyphicon-flag"></i>
                           <h3>ONLINE SUPPORT 24/7</h3>
                           <p>Free support via email</p>
                       </div>
           
                   </div>
           
               </div>
           </section> -->
            <!-- /INFO BAR -->



            <!-- WELCOME -->
       <!--      <section class="nopadding-bottom">
           <div class="container">
               <header class="text-center margin-bottom-40">
                   <h1 class="weight-300">Welcome to Smarty</h1>
                   <h2 class="weight-300 letter-spacing-1 size-13"><span>THE MOST COMPLETE TEMPLATE EVER</span></h2>
               </header>
       
               <div class="text-center">
                   <p class="lead">
                       Smarty has powerful options &amp; tools, unlimited designs, responsive framework and amazing support.
                       We are dedicated to providing you with the best experience possible. Read below to find out why the sky's the limit when using Smarty.
                   </p>
       
                   <div class="margin-top-40">
                       <img class="img-responsive" src="assets/images/demo/index/ipad.jpg" alt="welcome" />
                   </div>
       
               </div>
           </div>
       </section> -->
            <!-- /WELCOME -->




            <!-- -->
          <!--   <section class="alternate">
              <div class="container">
          
                  <div class="row">
          
                      <div class="col-md-4">
          
                          <div class="box-icon box-icon-side box-icon-color box-icon-round">
                              <i class="fa fa-tablet"></i>
                              <a class="box-icon-title" href="#">
                                  <h2>Fully Reposnive</h2>
                              </a>
                              <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                              <a class="box-icon-more font-lato weight-300" href="#">Learn More</a>
                          </div>
          
                      </div>
          
                      <div class="col-md-4">
          
                          <div class="box-icon box-icon-side box-icon-color box-icon-round">
                              <i class="fa fa-tint"></i>
                              <a class="box-icon-title" href="#">
                                  <h2>Reusable Elements</h2>
                              </a>
                              <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                              <a class="box-icon-more font-lato weight-300" href="#">Learn More</a>
                          </div>
          
                      </div>
          
                      <div class="col-md-4">
          
                          <div class="box-icon box-icon-side box-icon-color box-icon-round">
                              <i class="fa fa-cogs"></i>
                              <a class="box-icon-title" href="#">
                                  <h2>Multipurpose</h2>
                              </a>
                              <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                              <a class="box-icon-more font-lato weight-300" href="#">Learn More</a>
                          </div>
          
                      </div>
          
                  </div>
          
              </div>
          </section> -->
            <!-- / -->




            <!-- -->
         <!--    <section>
             <div class="container">
                 <header class="text-center margin-bottom-40">
                     <h1 class="weight-300">Real Support. Real People.</h1>
                     <h2 class="weight-300 letter-spacing-1 size-13"><span>THE MOST COMPLETE TEMPLATE EVER</span></h2>
                 </header>
         
                 <div class="row">
         
                     <div class="col-sm-6">
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>
         
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam.</p>
         
                         <a class="btn btn-default" href="#">LEARN MORE</a>
                     </div>
         
                     <div class="col-sm-6">
                         <img class="img-responsive" src="assets/images/demo/index/support.jpg" alt="support" />
                     </div>
         
                 </div>
             </div>
         </section> -->
            <!-- / -->




            <!-- COLOR BOXES -->
           <!--  <section class="nopadding noborder">
               .box-pink
                   .box-blue
                   .box-orange
                   .box-yellow
                   .box-purple
                   .box-red
                   .box-brown
                   .box-green
                   .box-black
                   .box-gray
                   .box-teal
           
           
           
               CREATE YOUR OWN COLORS - CSS EXAMPLE:
                   .box-pink>div:nth-child(1) {
                       background-color:#e2476b;
                   }
                   .box-pink>div:nth-child(2) {
                       background-color:#e9738f;
                   }
                   .box-pink>div:nth-child(3) {
                       background-color:#f09fb2;
                   }
                   .box-pink>div:nth-child(4) {
                       background-color:#f7cbd5;
                   }
               <div class="row box-gradient box-gray">
                   <div class="col-xs-6 col-sm-3">
                       <i class="fa fa-child fa-4x"></i>
                       <h2 class="countTo font-raleway" data-speed="3000">8165</h2>
                       <p>HAPPY CUSTOMERS</p>
                   </div>
           
                   <div class="col-xs-6 col-sm-3">
                       <i class="fa fa-smile-o fa-4x"></i>
                       <h2 class="countTo font-raleway" data-speed="3000">1033</h2>
                       <p>FACIALS</p>
                   </div>
           
                   <div class="col-xs-6 col-sm-3">
                       <i class="fa fa-heart fa-4x"></i>
                       <h2 class="countTo font-raleway" data-speed="3000">24567</h2>
                       <p>MASSAGES</p>
                   </div>
           
                   <div class="col-xs-6 col-sm-3">
                       <i class="fa fa-female fa-4x"></i>
                       <h2 class="countTo font-raleway" data-speed="3000">68</h2>
                       <p>MOTHERS TO BE</p>
                   </div>
               </div>
           </section> -->
            <!-- /COLOR BOXES -->




            <!-- Features -->
         <!--    <section>
             <div class="container">
         
                 <header class="text-center margin-bottom-40">
                     <h1 class="weight-300">Smarty Features</h1>
                     <h2 class="weight-300 letter-spacing-1 size-13"><span>WE TRULY CARE ABOUT OUR CUSTOMERS</span></h2>
                 </header>
         
                 <div class="row margin-top-80">
         
                     <div class="col-lg-4 col-md-4 col-md-push-4 text-center">
         
                         <img class="img-responsive" src="assets/images/demo/iphone-min.png" alt="" />
         
                     </div>
         
                     <div class="col-lg-4 col-md-4 col-sm-6 col-md-pull-4">
         
                         <div class="box-icon box-icon-right">
                             <a class="box-icon-title" href="#">
                                 <i class="fa fa-eye"></i>
                                 <h2>Retina Ready</h2>
                             </a>
                             <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                         </div>
         
                         <div class="box-icon box-icon-right">
                             <a class="box-icon-title" href="#">
                                 <i class="fa fa-check"></i>
                                 <h2>Unlimited Options</h2>
                             </a>
                             <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                         </div>
         
                         <div class="box-icon box-icon-right">
                             <a class="box-icon-title" href="#">
                                 <i class="fa fa-rocket"></i>
                                 <h2>Premium Sliders</h2>
                             </a>
                             <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                         </div>
         
                         <div class="box-icon box-icon-right">
                             <a class="box-icon-title" href="#">
                                 <i class="fa fa-flash"></i>
                                 <h2>performance</h2>
                             </a>
                             <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                         </div>
         
                     </div>
         
                     <div class="col-lg-4 col-md-4 col-sm-6">
         
                         <div class="box-icon box-icon-left">
                             <a class="box-icon-title" href="#">
                                 <i class="fa fa-tablet"></i>
                                 <h2>Fully Reposnive</h2>
                             </a>
                             <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                         </div>
         
                         <div class="box-icon box-icon-left">
                             <a class="box-icon-title" href="#">
                                 <i class="fa fa-random"></i>
                                 <h2>Clean Design</h2>
                             </a>
                             <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                         </div>
         
                         <div class="box-icon box-icon-left">
                             <a class="box-icon-title" href="#">
                                 <i class="fa fa-tint"></i>
                                 <h2>Reusable Elements</h2>
                             </a>
                             <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                         </div>
         
                         <div class="box-icon box-icon-left">
                             <a class="box-icon-title" href="#">
                                 <i class="fa fa-cogs"></i>
                                 <h2>Multipurpose</h2>
                             </a>
                             <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                         </div>
         
                     </div>
         
                 </div>
         
         
             </div>
         </section> -->
            <!-- /Features -->




            <!-- CALLOUT -->
       <!--      <section class="callout-dark heading-title heading-arrow-bottom">
           <div class="container">
       
               <header class="text-center">
                   <h1 class="weight-300 size-40">Our Latest Works</h1>
                   <h2 class="weight-300 letter-spacing-1 size-13"><span>WE TRULY CARE ABOUT OUR CUSTOMERS</span></h2>
               </header>
       
           </div>
       </section> -->
            <!-- /CALLOUT -->




            <!-- WORK -->
          <!--   <section class="nopadding">
              <div id="portfolio" class="portfolio-nogutter">
                  <div class="row mix-grid">
          
                      <div class="col-md-3 col-sm-3 mix development">item
          
                          <div class="item-box">
                              <figure>
                                  <span class="item-hover">
                                      <span class="overlay dark-5"></span>
                                      <span class="inner">
          
                                          lightbox
                                          <a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/1-min.jpg" data-plugin-options='{"type":"image"}'>
                                              <span class="fa fa-plus size-20"></span>
                                          </a>
          
                                          details
                                          <a class="ico-rounded" href="portfolio-single-slider.html">
                                              <span class="glyphicon glyphicon-option-horizontal size-20"></span>
                                          </a>
          
                                      </span>
                                  </span>
          
                                  <img class="img-responsive" src="assets/images/demo/mockups/600x399/1-min.jpg" width="600" height="399" alt="">
                              </figure>
          
                              <div class="item-box-desc">
                                  <h3>Nature Photography</h3>
                                  <ul class="list-inline categories nomargin">
                                      <li><a href="#">Photography</a></li>
                                      <li><a href="#">Design</a></li>
                                  </ul>
                              </div>
          
                          </div>
          
                      </div>/item
          
          
                      <div class="col-md-3 col-sm-3 mix development">item
          
                          <div class="item-box">
                              <figure>
                                  <span class="item-hover">
                                      <span class="overlay dark-5"></span>
                                      <span class="inner">
          
                                          lightbox
                                          <a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/11-min.jpg" data-plugin-options='{"type":"image"}'>
                                              <span class="fa fa-plus size-20"></span>
                                          </a>
          
                                          details
                                          <a class="ico-rounded" href="portfolio-single-slider.html">
                                              <span class="glyphicon glyphicon-option-horizontal size-20"></span>
                                          </a>
          
                                      </span>
                                  </span>
          
                                  <img class="img-responsive" src="assets/images/demo/mockups/600x399/11-min.jpg" width="600" height="399" alt="">
                              </figure>
          
                              <div class="item-box-desc">
                                  <h3>Nature Photography</h3>
                                  <ul class="list-inline categories nomargin">
                                      <li><a href="#">Photography</a></li>
                                      <li><a href="#">Design</a></li>
                                  </ul>
                              </div>
          
                          </div>
          
                      </div>/item
          
          
                      <div class="col-md-3 col-sm-3 mix photography">item
          
                          <div class="item-box">
                              <figure>
                                  <span class="item-hover">
                                      <span class="overlay dark-5"></span>
                                      <span class="inner">
          
                                          lightbox
                                          <a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/20-min.jpg" data-plugin-options='{"type":"image"}'>
                                              <span class="fa fa-plus size-20"></span>
                                          </a>
          
                                          details
                                          <a class="ico-rounded" href="portfolio-single-slider.html">
                                              <span class="glyphicon glyphicon-option-horizontal size-20"></span>
                                          </a>
          
                                      </span>
                                  </span>
          
                                  <img class="img-responsive" src="assets/images/demo/mockups/600x399/20-min.jpg" width="600" height="399" alt="">
                              </figure>
          
                              <div class="item-box-desc">
                                  <h3>Fashion Design</h3>
                                  <ul class="list-inline categories nomargin">
                                      <li><a href="#">Photography</a></li>
                                      <li><a href="#">Design</a></li>
                                  </ul>
                              </div>
          
                          </div>
          
                      </div>/item
          
          
                      <div class="col-md-3 col-sm-3 mix design">item
          
                          <div class="item-box">
                              <figure>
                                  <span class="item-hover">
                                      <span class="overlay dark-5"></span>
                                      <span class="inner">
          
                                          lightbox
                                          <a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/19-min.jpg" data-plugin-options='{"type":"image"}'>
                                              <span class="fa fa-plus size-20"></span>
                                          </a>
          
                                          details
                                          <a class="ico-rounded" href="portfolio-single-slider.html">
                                              <span class="glyphicon glyphicon-option-horizontal size-20"></span>
                                          </a>
          
                                      </span>
                                  </span>
          
                                  <img class="img-responsive" src="assets/images/demo/mockups/600x399/19-min.jpg" width="600" height="399" alt="">
                              </figure>
          
                              <div class="item-box-desc">
                                  <h3>Ocean Project</h3>
                                  <ul class="list-inline categories nomargin">
                                      <li><a href="#">Photography</a></li>
                                      <li><a href="#">Design</a></li>
                                  </ul>
                              </div>
          
                          </div>
          
                      </div>/item
          
          
                      <div class="col-md-3 col-sm-3 mix design">item
          
                          <div class="item-box">
                              <figure>
                                  <span class="item-hover">
                                      <span class="overlay dark-5"></span>
                                      <span class="inner">
          
                                          lightbox
                                          <a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/12-min.jpg" data-plugin-options='{"type":"image"}'>
                                              <span class="fa fa-plus size-20"></span>
                                          </a>
          
                                          details
                                          <a class="ico-rounded" href="portfolio-single-slider.html">
                                              <span class="glyphicon glyphicon-option-horizontal size-20"></span>
                                          </a>
          
                                      </span>
                                  </span>
          
                                  <img class="img-responsive" src="assets/images/demo/mockups/600x399/12-min.jpg" width="600" height="399" alt="">
                              </figure>
          
                              <div class="item-box-desc">
                                  <h3>Architect Project</h3>
                                  <ul class="list-inline categories nomargin">
                                      <li><a href="#">Architecture</a></li>
                                      <li><a href="#">Design</a></li>
                                  </ul>
                              </div>
          
                          </div>
          
                      </div>/item
          
          
                      <div class="col-md-3 col-sm-3 mix development">item
          
                          <div class="item-box">
                              <figure>
                                  <span class="item-hover">
                                      <span class="overlay dark-5"></span>
                                      <span class="inner">
          
                                          lightbox
                                          <a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/13-min.jpg" data-plugin-options='{"type":"image"}'>
                                              <span class="fa fa-plus size-20"></span>
                                          </a>
          
                                          details
                                          <a class="ico-rounded" href="portfolio-single-slider.html">
                                              <span class="glyphicon glyphicon-option-horizontal size-20"></span>
                                          </a>
          
                                      </span>
                                  </span>
          
                                  <img class="img-responsive" src="assets/images/demo/mockups/600x399/13-min.jpg" width="600" height="399" alt="">
                              </figure>
          
                              <div class="item-box-desc">
                                  <h3>Speaker Design</h3>
                                  <ul class="list-inline categories nomargin">
                                      <li><a href="#">Audio</a></li>
                                      <li><a href="#">Design</a></li>
                                  </ul>
                              </div>
          
                          </div>
          
                      </div>/item
          
          
                      <div class="col-md-3 col-sm-3 mix photography">item
          
                          <div class="item-box">
                              <figure>
                                  <span class="item-hover">
                                      <span class="overlay dark-5"></span>
                                      <span class="inner">
          
                                          lightbox
                                          <a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/14-min.jpg" data-plugin-options='{"type":"image"}'>
                                              <span class="fa fa-plus size-20"></span>
                                          </a>
          
                                          details
                                          <a class="ico-rounded" href="portfolio-single-slider.html">
                                              <span class="glyphicon glyphicon-option-horizontal size-20"></span>
                                          </a>
          
                                      </span>
                                  </span>
          
                                  <img class="img-responsive" src="assets/images/demo/mockups/600x399/14-min.jpg" width="600" height="399" alt="">
                              </figure>
          
                              <div class="item-box-desc">
                                  <h3>Mobile Development</h3>
                                  <ul class="list-inline categories nomargin">
                                      <li><a href="#">Development</a></li>
                                      <li><a href="#">Design</a></li>
                                  </ul>
                              </div>
          
                          </div>
          
                      </div>/item
          
          
                      <div class="col-md-3 col-sm-3 mix design">item
          
                          <div class="item-box">
                              <figure>
                                  <span class="item-hover">
                                      <span class="overlay dark-5"></span>
                                      <span class="inner">
          
                                          lightbox
                                          <a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/15-min.jpg" data-plugin-options='{"type":"image"}'>
                                              <span class="fa fa-plus size-20"></span>
                                          </a>
          
                                          details
                                          <a class="ico-rounded" href="portfolio-single-slider.html">
                                              <span class="glyphicon glyphicon-option-horizontal size-20"></span>
                                          </a>
          
                                      </span>
                                  </span>
          
                                  <img class="img-responsive" src="assets/images/demo/mockups/600x399/15-min.jpg" width="600" height="399" alt="">
                              </figure>
          
                              <div class="item-box-desc">
                                  <h3>Nature Art</h3>
                                  <ul class="list-inline categories nomargin">
                                      <li><a href="#">Nature</a></li>
                                      <li><a href="#">Art</a></li>
                                  </ul>
                              </div>
          
                          </div>
          
                      </div>/item
          
                  </div>
          
              </div>
          </section> -->
            <!-- /WORK -->




            <!-- -->
            <!-- <section> -->
        <!--         <div class="container">
        
            <div class="row">
        
                toggle
                <div class="col-md-4 col-sm-4">
                    <div class="toggle toggle-accordion toggle-transparent toggle-bordered-full">
        
                        <div class="toggle active">
                            <label>Lorem ipsum dolor.</label>
                            <div class="toggle-content">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
        
                        <div class="toggle">
                            <label>Sit amet, consectetur.</label>
                            <div class="toggle-content">
                                <p>Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc.</p>
                            </div>
                        </div>
        
                        <div class="toggle">
                            <label>Consectetur adipiscing elit.</label>
                            <div class="toggle-content">
                                <p>Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>
                            </div>
                        </div>
        
                    </div>
                </div>
                /toggle
        
                skills
                <div class="col-md-4 col-sm-4">
                    <h4>Our Skills</h4>
        
                    <label>
                        <span class="pull-right">60%</span>
                        MARKETING
                    </label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%; min-width: 2em;"></div>
                    </div>
        
                    <label>
                        <span class="pull-right">88%</span>
                        SALES
                    </label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 88%; min-width: 2em;"></div>
                    </div>
        
                    <label>
                        <span class="pull-right">93%</span>
                        DESIGN
                    </label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 93%; min-width: 2em;"></div>
                    </div>
        
                    <label>
                        <span class="pull-right">77%</span>
                        DEVELOPMENT
                    </label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 77%; min-width: 2em;"></div>
                    </div>
        
                    <label>
                        <span class="pull-right">99%</span>
                        OTHER
                    </label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 99%; min-width: 2em;"></div>
                    </div>
        
                </div>
                /skills
        
                recent news
                <div class="col-md-4 col-sm-4">
                    <h4>Recent News</h4>
        
                    <div class="row tab-post">post
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <a href="blog-sidebar-left.html">
                                <img src="assets/images/demo/people/300x300/1-min.jpg" width="50" alt="" />
                            </a>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <a href="blog-sidebar-left.html" class="tab-post-link">Maecenas metus nulla</a>
                            <small>June 29 2014</small>
                        </div>
                    </div>/post
        
                    <div class="row tab-post">post
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <a href="blog-sidebar-left.html">
                                <img src="assets/images/demo/people/300x300/2-min.jpg" width="50" alt="" />
                            </a>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <a href="blog-sidebar-left.html" class="tab-post-link">Curabitur pellentesque neque eget</a>
                            <small>June 29 2014</small>
                        </div>
                    </div>/post
        
                    <div class="row tab-post">post
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <a href="blog-sidebar-left.html">
                                <img src="assets/images/demo/people/300x300/3-min.jpg" width="50" alt="" />
                            </a>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <a href="blog-sidebar-left.html" class="tab-post-link">Nam et lacus neque. Ut enim massa</a>
                            <small>June 29 2014</small>
                        </div>
                    </div>/post
        
                </div>
                /recent news
        
            </div>
        
        </div>
                    </section> -->
            <!-- / -->




            <!-- PARALLAX -->
       <!--      <section class="parallax parallax-2" style="background-image: url('assets/images/demo/1200x800/3-min.jpg');">
           <div class="overlay dark-8">dark overlay [1 to 9 opacity]</div>
       
           <div class="container">
       
               <div class="text-center">
                   <h3 class="nomargin">Smarty Inside</h3>
                   <p class="font-lato weight-300 lead nomargin-top">We can't solve problems by using the same kind of thinking we used when we created them.</p>
               </div>
       
               <ul class="margin-top-80 social-icons list-unstyled list-inline">
                   <li>
                       <a target="_blank" href="#">
                           <i class="fa fa-facebook"></i>
                           <h4>Facebook</h4>
                           <span>Be Our Friend</span>
                       </a>
                   </li>
                   <li>
                       <a target="_blank" href="#">
                           <i class="fa fa-twitter"></i>
                           <h4>Twitter</h4>
                           <span>Follow Us</span>
                       </a>
                   </li>
                   <li>
                       <a target="_blank" href="#">
                           <i class="fa fa-youtube"></i>
                           <h4>Youtube</h4>
                           <span>Our Videos</span>
                       </a>
                   </li>
                   <li>
                       <a target="_blank" href="#">
                           <i class="fa fa-instagram"></i>
                           <h4>Instagram</h4>
                           <span>See Our Images</span>
                       </a>
                   </li>
                   <li>
                       <a target="_blank" href="#">
                           <i class="fa fa-linkedin"></i>
                           <h4>Linkedin</h4>
                           <span>Check Our Identity</span>
                       </a>
                   </li>
                   <li>
                       <a target="_blank" href="#">
                           <i class="fa fa-pinterest"></i>
                           <h4>Pinterest</h4>
                           <span>Visual Discovery</span>
                       </a>
                   </li>
               </ul>
       
           </div>
       
       </section> -->
            <!-- /PARALLAX -->




            <!-- TEAM -->
    <!--         <section>
        <div class="container">
    
            <header class="text-center margin-bottom-60">
                <h1 class="weight-300">Smarty Team</h1>
                <h2 class="weight-300 letter-spacing-1 size-13"><span>WE TRULY CARE ABOUT OUR CUSTOMERS</span></h2>
            </header>
    
            <div class="row">
    
                item
                <div class="col-md-3 col-sm-6">
    
                    <div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
                        <div class="front">
                            <div class="box1 box-default">
                                <div class="box-icon-title">
                                    <img class="img-responsive" src="assets/images/demo/people/460x700/7-min.jpg" alt="" />
                                    <h2>Felica Doe</h2>
                                    <small>CEO</small>
                                </div>
                            </div>
                        </div>
    
                        <div class="back">
                            <div class="box2 box-default">
                                <h4 class="nomargin">Felica Doe</h4>
                                <small>CEO</small>
    
                                <hr />
    
                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
    
                                <hr />
    
                                <a href="#" class="social-icon social-icon-sm social-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="social-icon social-icon-sm social-twitter">
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon social-icon-sm social-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
    
                </div>
                /item
    
                item
                <div class="col-md-3 col-sm-6">
    
                    <div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
                        <div class="front">
                            <div class="box1 box-default">
                                <div class="box-icon-title">
                                    <img class="img-responsive" src="assets/images/demo/people/460x700/12-min.jpg" alt="" />
                                    <h2>Joana Doe</h2>
                                    <small>Art Director</small>
                                </div>
                            </div>
                        </div>
    
                        <div class="back">
                            <div class="box2 box-default">
                                <h4 class="nomargin">Joana Doe</h4>
                                <small>Art Director</small>
    
                                <hr />
    
                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
    
                                <hr />
    
                                <a href="#" class="social-icon social-icon-sm social-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="social-icon social-icon-sm social-twitter">
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon social-icon-sm social-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
    
                </div>
                /item
    
                item
                <div class="col-md-3 col-sm-6">
    
                    <div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
                        <div class="front">
                            <div class="box1 box-default">
                                <div class="box-icon-title">
                                    <img class="img-responsive" src="assets/images/demo/people/460x700/10-min.jpg" alt="" />
                                    <h2>Melissa Doe</h2>
                                    <small>Web Developer</small>
                                </div>
                            </div>
                        </div>
    
                        <div class="back">
                            <div class="box2 box-default">
                                <h4 class="nomargin">Melissa Doe</h4>
                                <small>Web Developer</small>
    
                                <hr />
    
                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
    
                                <hr />
    
                                <a href="#" class="social-icon social-icon-sm social-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="social-icon social-icon-sm social-twitter">
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon social-icon-sm social-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
    
                </div>
                /item
    
                item
                <div class="col-md-3 col-sm-6">
    
                    <div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
                        <div class="front">
                            <div class="box1 box-default">
                                <div class="box-icon-title">
                                    <img class="img-responsive" src="assets/images/demo/people/460x700/8-min.jpg" alt="" />
                                    <h2>Jessica Doe</h2>
                                    <small>Manager</small>
                                </div>
                            </div>
                        </div>
    
                        <div class="back">
                            <div class="box2 box-default">
                                <h4 class="nomargin">Jessica Doe</h4>
                                <small>Manager</small>
    
                                <hr />
    
                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
    
                                <hr />
    
                                <a href="#" class="social-icon social-icon-sm social-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="social-icon social-icon-sm social-twitter">
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon social-icon-sm social-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
    
                </div>
                /item
    
            </div>
    
    
        </div>
    </section> -->
            <!-- /TEAM -->




            <!-- RECENT NEWS -->
         <!--    <section>
             <div class="container">
         
                 <header class="text-center margin-bottom-60">
                     <h1 class="weight-300">Recent News</h1>
                     <h2 class="weight-300 letter-spacing-1 size-13"><span>WE TRULY CARE ABOUT OUR CUSTOMERS</span></h2>
                 </header>
         
                 controlls-over      = navigation buttons over the image
                     buttons-autohide    = navigation buttons visible on mouse hover only
         
                     data-plugin-options:
                         "singleItem": true
                         "autoPlay": true (or ms. eg: 4000)
                         "navigation": true
                         "pagination": true
                         "items": "4"
         
                     owl-carousel item paddings
                         .owl-padding-0
                         .owl-padding-3
                         .owl-padding-6
                         .owl-padding-10
                         .owl-padding-15
                         .owl-padding-20
                 <div class="owl-carousel owl-padding-10 buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items":"4", "autoPlay": 4000, "navigation": true, "pagination": false}'>
                     <div class="img-hover">
                         <a href="blog-single-default.html">
                             <img class="img-responsive" src="assets/images/demo/451x300/24-min.jpg" alt="">
                         </a>
         
                         <h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                         <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                         <ul class="text-left size-12 list-inline list-separator">
                             <li>
                                 <i class="fa fa-calendar"></i>
                                 29th Jan 2015
                             </li>
                             <li>
                                 <a href="blog-single-default.html#comments">
                                     <i class="fa fa-comments"></i>
                                     3
                                 </a>
                             </li>
                         </ul>
                     </div>
                     <div class="img-hover">
                         <a href="blog-single-default.html">
                             <img class="img-responsive" src="assets/images/demo/451x300/17-min.jpg" alt="">
                         </a>
         
                         <h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                         <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                         <ul class="text-left size-12 list-inline list-separator">
                             <li>
                                 <i class="fa fa-calendar"></i>
                                 29th Jan 2015
                             </li>
                             <li>
                                 <a href="blog-single-default.html#comments">
                                     <i class="fa fa-comments"></i>
                                     3
                                 </a>
                             </li>
                         </ul>
                     </div>
                     <div class="img-hover">
                         <a href="blog-single-default.html">
                             <img class="img-responsive" src="assets/images/demo/451x300/30-min.jpg" alt="">
                         </a>
         
                         <h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                         <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                         <ul class="text-left size-12 list-inline list-separator">
                             <li>
                                 <i class="fa fa-calendar"></i>
                                 29th Jan 2015
                             </li>
                             <li>
                                 <a href="blog-single-default.html#comments">
                                     <i class="fa fa-comments"></i>
                                     3
                                 </a>
                             </li>
                         </ul>
                     </div>
                     <div class="img-hover">
                         <a href="blog-single-default.html">
                             <img class="img-responsive" src="assets/images/demo/451x300/26-min.jpg" alt="">
                         </a>
         
                         <h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                         <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                         <ul class="text-left size-12 list-inline list-separator">
                             <li>
                                 <i class="fa fa-calendar"></i>
                                 29th Jan 2015
                             </li>
                             <li>
                                 <a href="blog-single-default.html#comments">
                                     <i class="fa fa-comments"></i>
                                     3
                                 </a>
                             </li>
                         </ul>
                     </div>
                     <div class="img-hover">
                         <a href="blog-single-default.html">
                             <img class="img-responsive" src="assets/images/demo/451x300/18-min.jpg" alt="">
                         </a>
                         <h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                         <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                         <ul class="text-left size-12 list-inline list-separator">
                             <li>
                                 <i class="fa fa-calendar"></i>
                                 29th Jan 2015
                             </li>
                             <li>
                                 <a href="blog-single-default.html#comments">
                                     <i class="fa fa-comments"></i>
                                     3
                                 </a>
                             </li>
                         </ul>
                     </div>
                     <div class="img-hover">
                         <a href="blog-single-default.html">
                             <img class="img-responsive" src="assets/images/demo/451x300/34-min.jpg" alt="">
                         </a>
                         <h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                         <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                         <ul class="text-left size-12 list-inline list-separator">
                             <li>
                                 <i class="fa fa-calendar"></i>
                                 29th Jan 2015
                             </li>
                             <li>
                                 <a href="blog-single-default.html#comments">
                                     <i class="fa fa-comments"></i>
                                     3
                                 </a>
                             </li>
                         </ul>
                     </div>
                     <div class="img-hover">
                         <a href="blog-single-default.html">
                             <img class="img-responsive" src="assets/images/demo/451x300/37-min.jpg" alt="">
                         </a>
                         <h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                         <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                         <ul class="text-left size-12 list-inline list-separator">
                             <li>
                                 <i class="fa fa-calendar"></i>
                                 29th Jan 2015
                             </li>
                             <li>
                                 <a href="blog-single-default.html#comments">
                                     <i class="fa fa-comments"></i>
                                     3
                                 </a>
                             </li>
                         </ul>
                     </div>
                     <div class="img-hover">
                         <a href="blog-single-default.html">
                             <img class="img-responsive" src="assets/images/demo/451x300/23-min.jpg" alt="">
                         </a>
                         <h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                         <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                         <ul class="text-left size-12 list-inline list-separator">
                             <li>
                                 <i class="fa fa-calendar"></i>
                                 29th Jan 2015
                             </li>
                             <li>
                                 <a href="blog-single-default.html#comments">
                                     <i class="fa fa-comments"></i>
                                     3
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
         
             </div>
         </section> -->
            <!-- /RECENT NEWS -->


            <!--
                controlls-over      = navigation buttons over the image
                buttons-autohide    = navigation buttons visible on mouse hover only

                data-plugin-options:
                    "singleItem": true
                    "autoPlay": true (or ms. eg: 4000)
                    "navigation": true
                    "pagination": true
            -->
      <!--       <div class="text-center margin-top-30 margin-bottom-30">
          <div class="owl-carousel nomargin" data-plugin-options='{"items":6, "singleItem": false, "autoPlay": true}'>
              <div>
                  <img class="img-responsive" src="assets/images/demo/brands/1.jpg" alt="">
              </div>
              <div>
                  <img class="img-responsive" src="assets/images/demo/brands/2.jpg" alt="">
              </div>
              <div>
                  <img class="img-responsive" src="assets/images/demo/brands/3.jpg" alt="">
              </div>
              <div>
                  <img class="img-responsive" src="assets/images/demo/brands/4.jpg" alt="">
              </div>
              <div>
                  <img class="img-responsive" src="assets/images/demo/brands/5.jpg" alt="">
              </div>
              <div>
                  <img class="img-responsive" src="assets/images/demo/brands/6.jpg" alt="">
              </div>
              <div>
                  <img class="img-responsive" src="assets/images/demo/brands/7.jpg" alt="">
              </div>
              <div>
                  <img class="img-responsive" src="assets/images/demo/brands/8.jpg" alt="">
              </div>
          </div>
      </div> -->


            <!-- FOOTER -->
            <footer id="footer">
                <div class="container">

                    <div class="row">

                      <!--   <div class="col-md-3">
                          Footer Logo
                          <img class="footer-logo" src="assets/images/logo-footer.png" alt="" />
                      
                          Small Description
                          <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                      
                          Contact Address
                          <address>
                              <ul class="list-unstyled">
                                  <li class="footer-sprite address">
                                      PO Box 21132<br>
                                      Here Weare St, Melbourne<br>
                                      Vivas 2355 Australia<br>
                                  </li>
                                  <li class="footer-sprite phone">
                                      Phone: 1-800-565-2390
                                  </li>
                                  <li class="footer-sprite email">
                                      <a href="mailto:support@yourname.com">support@yourname.com</a>
                                  </li>
                              </ul>
                          </address>
                          /Contact Address
                      
                      </div> -->
<!-- 
                        <div class="col-md-3">

                            Latest Blog Post
                            <h4 class="letter-spacing-1">LATEST NEWS</h4>
                            <ul class="footer-posts list-unstyled">
                                <li>
                                    <a href="#">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue</a>
                                    <small>29 June 2015</small>
                                </li>
                                <li>
                                    <a href="#">Nullam id dolor id nibh ultricies</a>
                                    <small>29 June 2015</small>
                                </li>
                                <li>
                                    <a href="#">Duis mollis, est non commodo luctus</a>
                                    <small>29 June 2015</small>
                                </li>
                            </ul>
                            /Latest Blog Post

                        </div> -->

                    <!--     <div class="col-md-2">
                    
                        Links
                        <h4 class="letter-spacing-1">EXPLORE SMARTY</h4>
                        <ul class="footer-links list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Our Clients</a></li>
                            <li><a href="#">Our Pricing</a></li>
                            <li><a href="#">Smarty Tour</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                        /Links
                    
                    </div> -->

                     <!--    <div class="col-md-4">
                     
                         Newsletter Form
                         <h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
                         <p>Subscribe to Our Newsletter to get Important News &amp; Offers</p>
                     
                         <form class="validate" action="php/newsletter.php" method="post" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
                             <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                 <input type="email" id="email" name="email" class="form-control required" placeholder="Enter your Email">
                                 <span class="input-group-btn">
                                     <button class="btn btn-success" type="submit">Subscribe</button>
                                 </span>
                             </div>
                         </form>
                         /Newsletter Form
                     
                         Social Icons
                      <div class="margin-top-20">
                          <a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
                      
                              <i class="icon-facebook"></i>
                              <i class="icon-facebook"></i>
                          </a>
                      
                          <a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
                              <i class="icon-twitter"></i>
                              <i class="icon-twitter"></i>
                          </a>
                      
                          <a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
                              <i class="icon-gplus"></i>
                              <i class="icon-gplus"></i>
                          </a>
                      
                          <a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
                              <i class="icon-linkedin"></i>
                              <i class="icon-linkedin"></i>
                          </a>
                      
                          <a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
                              <i class="icon-rss"></i>
                              <i class="icon-rss"></i>
                          </a>
                      
                      </div>
                         /Social Icons
                     
                     </div> -->

                    </div>

                </div>

                <div class="copyright">
                    <div class="container">
                        <ul class="pull-right nomargin list-inline mobile-block">
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li>&bull;</li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                        &copy; All Rights Reserved, LGI
                    </div>
                </div>
            </footer>
            <!-- /FOOTER -->

        </div>
        <!-- /wrapper -->


        <!--
            SIDE PANEL

                sidepanel-dark          = dark color
                sidepanel-light         = light color (white)
                sidepanel-theme-color       = theme color

                sidepanel-inverse       = By default, sidepanel is placed on right (left for RTL)
                                If you add "sidepanel-inverse", will be placed on left side (right on RTL).
        -->
        <div id="sidepanel" class="sidepanel-light">
            <a id="sidepanel_close" href="#"><!-- close -->
                <i class="glyphicon glyphicon-remove"></i>
            </a>

            <div class="sidepanel-content">
                <h2 class="sidepanel-title">Explore Smarty</h2>

                <!-- SIDE NAV -->
                <ul class="list-group">

                    <li class="list-group-item">
                        <a href="#">
                            <i class="ico-category et-heart"></i>
                            ABOUT US
                        </a>
                    </li>
                    <li class="list-group-item list-toggle"><!-- add "active" to stay open on page load -->
                        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-1" class="collapsed">
                            <i class="ico-dd icon-angle-down"><!-- Drop Down Indicator --></i>
                            <i class="ico-category et-strategy"></i>
                            PORTFOLIO
                        </a>
                        <ul id="collapse-1" class="list-unstyled collapse"><!-- add "in" to stay open on page load -->
                            <li><a href="#"><i class="fa fa-angle-right"></i> 1 COLUMN</a></li>
                            <li class="active">
                                <span class="badge">New</span>
                                <a href="#"><i class="fa fa-angle-right"></i> 2 COLUMNS</a>
                            </li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> 3 COLUMNS</a></li>
                        </ul>
                    </li>
                    <li class="list-group-item list-toggle"><!-- add "active" to stay open on page load -->
                        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-2" class="collapsed">
                            <i class="ico-dd icon-angle-down"><!-- Drop Down Indicator --></i>
                            <i class="ico-category et-trophy"></i>
                            PORTFOLIO
                        </a>
                        <ul id="collapse-2" class="list-unstyled collapse"><!-- add "in" to stay open on page load -->
                            <li><a href="#"><i class="fa fa-angle-right"></i> SLIDER</a></li>
                            <li class="active"><a href="#"><i class="fa fa-angle-right"></i> HEADERS</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> FOOTERS</a></li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <i class="ico-category et-happy"></i>
                            BLOG
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <i class="ico-category et-beaker"></i>
                            FEATURES
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <i class="ico-category et-map-pin"></i>
                            CONTACT
                        </a>
                    </li>

                </ul>
                <!-- /SIDE NAV -->

                <!-- social icons -->
                <div class="text-center margin-bottom-30">

                    <a href="#" class="social-icon social-icon-sm social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="#" class="social-icon social-icon-sm social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>

                    <a href="#" class="social-icon social-icon-sm social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin">
                        <i class="icon-linkedin"></i>
                        <i class="icon-linkedin"></i>
                    </a>

                    <a href="#" class="social-icon social-icon-sm social-rss" data-toggle="tooltip" data-placement="top" title="RSS">
                        <i class="icon-rss"></i>
                        <i class="icon-rss"></i>
                    </a>

                </div>
                <!-- /social icons -->

            </div>

        </div>
        <!-- /SIDE PANEL -->


        <!-- SCROLL TO TOP -->
        <a href="#" id="toTop"></a>


        <!-- PRELOADER -->
        <div id="preloader">
            <div class="inner">
                <span class="loader"></span>
            </div>
        </div><!-- /PRELOADER -->


       

        <!-- JAVASCRIPT FILES -->
       
        <script type="text/javascript">var plugin_path = 'plugins/';</script>
        <script type="text/javascript" src="{{ asset('/plugins/jquery/jquery-2.1.4.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('/js/scripts.js') }}"></script>


        <!-- REVOLUTION SLIDER -->
        <script type="text/javascript" src="{{ asset('/plugins/slider.revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/view/demo.revolution_slider.js') }}"></script>

    </body>
</html>
