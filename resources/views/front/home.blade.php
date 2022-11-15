
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from kodesolution.com/html/2016/echarity-html/demo/index-mp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2022 21:07:14 GMT -->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="eCharity - Nonprofit, Crowdfunding & Charity HTML5 Template" />
<meta name="keywords" content="Charity,Nonprofit,Crowdfunding,Donation & Fundraising" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>eCharity - Nonprofit, Crowdfunding & Charity HTML5 Template</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->


<link href="{{ URL::asset('public/assets/front/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('public/assets/front/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('public/assets/front/css/animate.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('public/assets/front/css/css-plugin-collections.css') }}" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<!-- <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/> -->
<!-- CSS | Main style file -->
<link href="{{ URL::asset('public/assets/front/css/style-main.css') }}" rel="stylesheet" type="text/css">

<!-- CSS | Theme Color -->

<link href="{{ URL::asset('public/assets/front/css/colors/theme-skin-orange.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<!-- <link href="css/preloader.css" rel="stylesheet" type="text/css"> -->
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{ URL::asset('public/assets/front/css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<!-- <link href="css/responsive.css" rel="stylesheet" type="text/css"> -->
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{ URL::asset('public/assets/front/js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css"/>
<!-- <link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/> -->
<link  href="{{ URL::asset('public/assets/front/js/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css"/>

<!-- external javascripts -->
<script src="{{ URL::asset('public/assets/front/js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ URL::asset('public/assets/front/js/jquery-ui.min.js') }}"></script>
<script src="{{ URL::asset('public/assets/front/js/bootstrap.min.js') }}"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{ URL::asset('public/assets/front/js/jquery-plugin-collection.js') }}"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{ URL::asset('public/assets/front/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ URL::asset('public/assets/front/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <i class="flaticon-charity-shelter font-60 text-theme-colored floating"></i>
      <h5 class="line-height-50 font-18">Loading...</h5>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <!-- Header -->
  <header class="header">
    <div class="header-top bg-theme-colored sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="widget no-border m-0">
              <ul class="styled-icons icon-dark icon-theme-colored icon-sm sm-text-center">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-8">
            <div class="widget no-border m-0">
              <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="#">123-456-789</a> </li>
                <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i> Mon-Fri 8:00 to 2:00 </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#">contact@yourdomain.com</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-md-2">
            <div class="widget no-border m-0">
              <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
                <li class="mt-sm-10 mb-sm-10">
                  <!-- Modal: Appointment Starts -->
                  <a class="btn btn-default btn-flat btn-xs bg-light p-5 font-11 pl-10 pr-10 ajaxload-popup" href="ajax-load/donation-form.html">Donate Now</a>
                </li>
                <li class="mt-sm-10 mb-sm-10">
                  <a class="btn btn-default btn-flat btn-xs bg-light p-5 font-11 pl-10 pr-10 ajaxload-popup" href="ajax-load/volunteer-apply-form.html">Join Us</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord green no-bg">
            <a class="menuzord-brand pull-left flip" href="javascript:void(0)"><img src="images/logo-wide.png" alt=""></a>
            <ul class="menuzord-menu">
              <li class="active"><a href="#home">Home</a>
               <!--  <ul class="dropdown">
                  <li><a href="#">Multi Page Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-mp-layout1.html">Layout1</a></li>
                      <li><a href="index-mp-layout2.html">Layout2</a></li>
                      <li><a href="index-mp-layout3.html">Layout3</a></li>
                      <li><a href="index-mp-layout4.html">Layout4</a></li>
                      <li><a href="index-mp-layout5.html">Layout5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Single Page Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-sp-layout1.html">Layout1</a></li>
                      <li><a href="index-sp-layout2.html">Layout2</a></li>
                      <li><a href="index-sp-layout3.html">Layout3</a></li>
                      <li><a href="index-sp-layout4.html">Layout4</a></li>
                      <li><a href="index-sp-layout5.html">Layout5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Boxed Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-boxed-mp-layout1.html">Boxed Multi Page Layout1</a></li>
                      <li><a href="index-boxed-mp-layout2.html">Boxed Multi Page Layout2</a></li>
                      <li><a href="index-boxed-mp-layout3.html">Boxed Multi Page Layout3</a></li>
                      <li><a href="index-boxed-mp-layout4.html">Boxed Multi Page Layout4</a></li>
                      <li><a href="index-boxed-mp-layout5.html">Boxed Multi Page Layout5</a></li>
                      <li><a href="index-boxed-sp-layout1.html">Boxed Single Page Layout1</a></li>
                      <li><a href="index-boxed-sp-layout2.html">Boxed Single Page Layout2</a></li>
                      <li><a href="index-boxed-sp-layout3.html">Boxed Single Page Layout3</a></li>
                      <li><a href="index-boxed-sp-layout4.html">Boxed Single Page Layout4</a></li>
                      <li><a href="index-boxed-sp-layout5.html">Boxed Single Page Layout5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">RTL Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-rtl-mp-layout1.html">RTL Multi Page Layout1</a></li>
                      <li><a href="index-rtl-mp-layout2.html">RTL Multi Page Layout2</a></li>
                      <li><a href="index-rtl-mp-layout3.html">RTL Multi Page Layout3</a></li>
                      <li><a href="index-rtl-mp-layout4.html">RTL Multi Page Layout4</a></li>
                      <li><a href="index-rtl-mp-layout5.html">RTL Multi Page Layout5</a></li>
                      <li><a href="index-rtl-sp-layout1.html">RTL Single Page Layout1</a></li>
                      <li><a href="index-rtl-sp-layout2.html">RTL Single Page Layout2</a></li>
                      <li><a href="index-rtl-sp-layout3.html">RTL Single Page Layout3</a></li>
                      <li><a href="index-rtl-sp-layout4.html">RTL Single Page Layout4</a></li>
                      <li><a href="index-rtl-sp-layout5.html">RTL Single Page Layout5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Dark Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-dark-mp-layout1.html">Dark Multi Page Layout1</a></li>
                      <li><a href="index-dark-mp-layout2.html">Dark Multi Page Layout2</a></li>
                      <li><a href="index-dark-mp-layout3.html">Dark Multi Page Layout3</a></li>
                      <li><a href="index-dark-mp-layout4.html">Dark Multi Page Layout4</a></li>
                      <li><a href="index-dark-mp-layout5.html">Dark Multi Page Layout5</a></li>
                      <li><a href="index-dark-sp-layout1.html">Dark Single Page Layout1</a></li>
                      <li><a href="index-dark-sp-layout2.html">Dark Single Page Layout2</a></li>
                      <li><a href="index-dark-sp-layout3.html">Dark Single Page Layout3</a></li>
                      <li><a href="index-dark-sp-layout4.html">Dark Single Page Layout4</a></li>
                      <li><a href="index-dark-sp-layout5.html">Dark Single Page Layout5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Magazine Home Layouts <span class="label label-warning">New</span></a>
                    <ul class="dropdown">
                      <li><a href="index-hot-magazine-home-layout1.html">Magazine Home layout1</a></li>
                      <li><a href="index-hot-magazine-home-layout2.html">Magazine Home layout2</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Portfolio Home Layouts <span class="label label-warning">New</span></a>
                    <ul class="dropdown">
                      <li><a href="index-hot-portfolio-presentation-layout1.html">Portfolio Presentation Layout1</a></li>
                      <li><a href="index-hot-portfolio-presentation-layout2.html">Portfolio Presentation Layout2</a></li>
                      <li><a href="index-hot-portfolio-presentation-layout3.html">Portfolio Presentation Layout3</a></li>
                    </ul>
                  </li>
                  <li><a href="index-hot-shop-home.html">Shop Home <span class="label label-warning">New</span></a></li>
                  <li><a href="#">Home Variations <span class="label label-warning">New</span></a>
                    <ul class="dropdown">
                      <li><a href="#">Rev Slider</a>
                        <ul class="dropdown">
                          <li><a href="index-home-variation-revslider-style1.html">Layout1</a></li>
                          <li><a href="index-home-variation-revslider-style2.html">Layout2</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Maximage Slider</a>
                        <ul class="dropdown">
                          <li><a href="index-home-variation-maximageslider-style1.html">Layout1</a></li>
                          <li><a href="index-home-variation-maximageslider-style2.html">Layout2</a></li>
                          <li><a href="index-home-variation-maximageslider-style3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-home-variation-owl-carousel.html">Owl Slider</a></li>
                      <li><a href="index-home-variation-typed-text.html">Typed Text Layout</a></li>
                      <li><a href="index-home-variation-video-background.html">Youtube Background Video</a></li>
                      <li><a href="index-home-variation-html5-video.html">Html5 Background Video</a></li>
                      <li><a href="index-home-variation-bg-image-parallax.html">Bg Image Parallax Layout</a></li>
                      <li><a href="index-home-variation-bg-static.html">Bg Static Layout</a></li>
                      <li><a href="#">Home Appointment Form</a>
                        <ul class="dropdown">
                          <li><a href="index-home-variation-appointment-form-style1.html">Layout1</a></li>
                          <li><a href="index-home-variation-appointment-form-style2.html">Layout2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul> -->
              </li>
              <li><a href="#">Features</a>
                <!-- <ul class="dropdown">
                  <li><a href="features-preloader.html">Preloaders</a></li>
                  <li><a href="#">Header</a>
                    <ul class="dropdown">
                      <li><a href="features-header-style1.html">Header Style 1</a></li>
                      <li><a href="features-header-style2.html">Header Style 2</a></li>
                      <li><a href="features-header-style3.html">Header Style 3</a></li>
                      <li><a href="features-header-style4.html">Header Style 4</a></li>
                      <li><a href="features-header-style5.html">Header Style 5</a></li>
                      <li><a href="features-header-style6.html">Header Style 6</a></li>
                      <li><a href="features-header-vertical-nav.html">Vertical Header</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Page Title</a>
                    <ul class="dropdown">
                      <li><a href="features-page-title-bg-dark.html">Bg Dark</a></li>
                      <li><a href="features-page-title-bg-white.html">Bg White</a></li>
                      <li><a href="features-page-title-bg-image.html">Bg Image</a></li>
                      <li><a href="features-page-title-bg-image-parallax.html">Bg Image Parallax</a></li>
                      <li><a href="features-page-title-bg-pattern.html">Bg Pattern</a></li>
                      <li><a href="features-page-title-bg-video.html">Bg Video</a></li>
                      <li><a href="features-page-title-mini-version.html">Mini Version</a></li>
                      <li><a href="features-page-title-big-version.html">Big Version</a></li>
                      <li><a href="features-page-title-extra-big-version.html">Extra Big Version</a></li>
                      <li><a href="features-page-title-text-center.html">Text Center</a></li>
                      <li><a href="features-page-title-text-left.html">Text Left</a></li>
                      <li><a href="features-page-title-text-right.html">Text Right</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Side Push Panel</a>
                    <ul class="dropdown">
                      <li><a href="features-side-push-panel-left-overlay.html">Left Overlay</a></li>
                      <li><a href="features-side-push-panel-left-push.html">Left Push</a></li>
                      <li><a href="features-side-push-panel-right-overlay.html">Right Overlay</a></li>
                      <li><a href="features-side-push-panel-right-push.html">Right Push</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Sliders</a>
                    <ul class="dropdown">
                      <li><a href="#">Revolution Slider</a>
                        <ul class="dropdown">
                          <li><a href="features-home-revslider.html">Revolution Slider</a></li>
                          <li><a href="features-rev-slider-premium-templates.html">Revolution Slider All In One</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Layer Slider</a>
                        <ul class="dropdown">
                          <li><a href="features-home-layerslider.html">Layer Slider</a></li>
                          <li><a href="features-layerslider-slider-premium-templates.html">Layer Slider All In One</a></li>
                        </ul>
                      </li>
                      <li><a href="features-home-bg-image-slider.html">Bg Image Slider</a></li>
                      <li><a href="features-home-owl-fullwidth-carousel.html">Owl Fullwidth Carousel</a></li>
                      <li><a href="features-home-parallax-bg.html">Static/Parallax Image Bg</a></li>
                      <li><a href="features-home-video-bg.html">Video Image Bg</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Form</a>
                    <ul class="dropdown">
                      <li><a href="#">Contact Form</a>
                        <ul class="dropdown">
                          <li><a href="page-contact1.html">Form style 1</a></li>
                          <li><a href="page-contact2.html">Form style 2</a></li>
                          <li><a href="page-contact3.html">Form style 3</a></li>
                          <li><a href="page-contact4.html">Form style 4</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Login/Register Form</a>
                        <ul class="dropdown">
                          <li><a href="#">Login/Register</a>
                            <ul class="dropdown">
                              <li><a href="form-login-register-style1.html">Form style 1</a></li>
                              <li><a href="form-login-register-style2.html">Form style 2</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Login</a>
                            <ul class="dropdown">
                              <li><a href="form-login-style1.html">Form style 1</a></li>
                              <li><a href="form-login-style2.html">Form style 2</a></li>
                              <li><a href="form-login-style3.html">Form style 3</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Register</a>
                            <ul class="dropdown">
                              <li><a href="form-register-style1.html">Form style 1</a></li>
                              <li><a href="form-register-style2.html">Form style 2</a></li>
                              <li><a href="form-register-style3.html">Form style 3</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">Subscribe Form</a>
                        <ul class="dropdown">
                          <li><a href="form-subscribe.html">Form style 1</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Appointment Form</a>
                        <ul class="dropdown">
                          <li><a href="form-appointment-style1.html">Form style 1</a></li>
                          <li><a href="form-appointment-style2.html">Form style 2</a></li>
                          <li><a href="form-appointment-style3.html">Form style 3</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Job Apply Form</a>
                        <ul class="dropdown">
                          <li><a href="form-job-apply-style1.html">Form style 1</a></li>
                          <li><a href="form-job-apply-style2.html">Form style 2</a></li>
                          <li><a href="form-job-apply-style3.html">Form style 3</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Quick Contact Form</a>
                        <ul class="dropdown">
                          <li><a href="form-quick-contact-style1.html">Form style 1</a></li>
                          <li><a href="form-quick-contact-style2.html">Form style 2</a></li>
                          <li><a href="form-quick-contact-style3.html">Form style 3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">Paypal Form</a>
                    <ul class="dropdown">
                      <li><a href="#">Donation Onetime</a>
                        <ul class="dropdown">
                          <li><a href="form-paypal-donate-onetime-style1.html">Style1</a></li>
                          <li><a href="form-paypal-donate-onetime-style2.html">Style2</a></li>
                          <li><a href="form-paypal-donate-onetime-style3.html">Style3</a></li>
                          <li><a href="form-paypal-donate-onetime-style4.html">Style4</a></li>
                          <li><a href="form-paypal-donate-onetime-style5.html">Style5</a></li>
                          <li><a href="form-paypal-donate-onetime-style6.html">Style6</a></li>
                          <li><a href="form-paypal-donate-onetime-style7.html">Style7</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Donation Recurring</a>
                        <ul class="dropdown">
                          <li><a href="form-paypal-donate-recurring-style1.html">Style1</a></li>
                          <li><a href="form-paypal-donate-recurring-style2.html"> Style2</a></li>
                          <li><a href="form-paypal-donate-recurring-style3.html">Style3</a></li>
                          <li><a href="form-paypal-donate-recurring-style4.html">Style4</a></li>
                          <li><a href="form-paypal-donate-recurring-style5.html">Style5</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Both Onetime/Recurring</a>
                        <ul class="dropdown">
                          <li><a href="form-paypal-donate-both-onetime-recurring-style1.html">Style1</a></li>
                          <li><a href="form-paypal-donate-both-onetime-recurring-style2.html">Style2</a></li>
                          <li><a href="form-paypal-donate-both-onetime-recurring-style3.html">Style3</a></li>
                          <li><a href="form-paypal-donate-both-onetime-recurring-style4.html">Style4</a></li>
                          <li><a href="form-paypal-donate-both-onetime-recurring-style5.html">Style5</a></li>
                        </ul>
                      </li>
                      <li><a href="form-paypal-cart-style1.html">Cart Payment</a></li>
                      <li><a href="form-paypal-order-style1.html">Order Payment Style1</a></li>
                      <li><a href="form-paypal-order-style2.html">Order Payment Style2</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Popup Promo Box</a>
                    <ul class="dropdown">
                      <li><a href="features-popup-promo-box.html">Default</a></li>
                      <li><a href="features-popup-promo-box-cookie-enabled.html">Cookie Enabled</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Footer</a>
                    <ul class="dropdown">
                      <li><a href="features-footer-dark-style1.html#footer">Footer Dark One</a></li>
                      <li><a href="features-footer-dark-style2.html#footer">Footer Dark Two</a></li>
                      <li><a href="features-footer-dark-style3.html#footer">Footer Dark Three</a></li>
                      <li><a href="features-footer-dark-style4.html#footer">Footer Dark Four</a></li>
                      <li><a href="features-footer-dark-style5.html#footer">Footer Dark Five</a></li>
                      <li><a href="features-footer-dark-style6.html#footer">Footer Dark Six</a></li>
                      <li><a href="features-footer-white-style1.html#footer">Footer White One</a></li>
                      <li><a href="features-footer-white-style2.html#footer">Footer White Two</a></li>
                      <li><a href="features-footer-white-style3.html#footer">Footer White Three</a></li>
                      <li><a href="features-footer-white-style4.html#footer">Footer White Four</a></li>
                      <li><a href="features-footer-white-style5.html#footer">Footer White Five</a></li>
                      <li><a href="features-footer-white-style6.html#footer">Footer White Six</a></li>
                    </ul>
                  </li>
                </ul> -->
              </li>
              <li><a href="#">Pages</a>
                <!-- <ul class="dropdown">
                  <li><a href="#">About</a>
                    <ul class="dropdown">
                      <li><a href="page-about1.html">About Style 1</a></li>
                      <li><a href="page-about2.html">About Style 2</a></li>
                      <li><a href="page-about3.html">About Style 3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Get Involved</a>
                    <ul class="dropdown">
                      <li><a href="page-fundraise.html">Fundraise</a></li>
                      <li><a href="page-donate.html">Donate</a></li>
                      <li><a href="page-run-a-race.html">Run a Race</a></li>
                      <li><a href="page-campaign.html">Campaign</a></li>
                      <li><a href="page-philanthropy.html">Philanthropy</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Projects</a>
                    <ul class="dropdown">
                      <li><a href="page-running-projects.html">Running Projects List</a></li>
                      <li><a href="page-running-projects-details.html">Running Projects Details</a></li>
                      <li><a href="page-completed-projects.html">Completed Projects List</a></li>
                      <li><a href="page-completed-projects-details.html">Completed Projects Details</a></li>
                      <li><a href="page-next-projects.html">Next Projects List</a></li>
                      <li><a href="page-next-projects-details.html">Next Projects Details</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Team</a>
                    <ul class="dropdown">
                      <li><a href="page-team-style1.html">Team Style 1</a></li>
                      <li><a href="page-team-style2.html">Team Style 2</a></li>
                      <li><a href="page-team-member-details.html">Team Member Details</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Contact</a>
                    <ul class="dropdown">
                      <li><a href="page-contact1.html">Contact style 1</a></li>
                      <li><a href="page-contact2.html">Contact style 2</a></li>
                      <li><a href="page-contact3.html">Contact style 3</a></li>
                      <li><a href="page-contact4.html">Contact style 4</a></li>
                      <li><a href="page-contact5-with-multiple-marker.html">Contact 5 - Multiple Marker</a></li>
                      <li><a href="page-contact6-with-multiple-marker.html">Contact 6 - Multiple Marker</a></li>
                    </ul>
                  </li>
                  <li><a href="page-timetable.html">Timetable</a></li>
                  <li><a href="#">Calender</a>
                    <ul class="dropdown">
                      <li><a href="page-calendar1.html">Calendar Style1</a></li>
                      <li><a href="page-calendar2.html">Calendar Style2</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Events</a>
                    <ul class="dropdown">
                      <li><a href="#">Events Grid</a>
                        <ul class="dropdown">
                          <li><a href="events-grid-2column.html">Grid 2column</a></li>
                          <li><a href="events-grid-3column.html">Grid 3column</a></li>
                          <li><a href="events-grid-4column.html">Grid 4column</a></li>
                          <li><a href="events-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                          <li><a href="events-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Events List</a>
                        <ul class="dropdown">
                          <li><a href="events-list-left-sidebar.html">List Left Sidebar</a></li>
                          <li><a href="events-list-right-sidebar.html">List Right Sidebar</a></li>
                          <li><a href="events-list-no-sidebar.html">List No Sidebar</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Events Details</a>
                        <ul class="dropdown">
                          <li><a href="events-details-style1.html">Details Style1</a></li>
                          <li><a href="events-details-style2.html">Details Style2</a></li>
                          <li><a href="events-details-style3.html">Details Style3</a></li>
                        </ul>
                      </li>
                      <li><a href="events-table.html">Events Table</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Job <span class="label label-success">New</span></a>
                    <ul class="dropdown">
                      <li><a href="job-list.html">Job List</a></li>
                      <li><a href="job-details-style1.html">Job Details Style1</a></li>
                      <li><a href="job-details-style2.html">Job Details Style2</a></li>
                    </ul>
                  </li>
                  <li><a href="#">FAQ</a>
                    <ul class="dropdown">
                      <li><a href="page-faq-style1.html">FAQ Style1</a></li>
                      <li><a href="page-faq-style2.html">FAQ Style2</a></li>
                      <li><a href="page-faq-style3.html">FAQ Style3</a></li>
                      <li><a href="page-faq-style4.html">FAQ Style4</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Page 404</a>
                    <ul class="dropdown">
                      <li><a href="page-404-style1.html">style1</a></li>
                      <li><a href="page-404-style2.html">style2</a></li>
                      <li><a href="page-404-style3.html">style3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Shop</a>
                    <ul class="dropdown">
                      <li><a href="shop-category.html">Category</a></li>
                      <li><a href="shop-category-sidebar.html">Category Sidebar</a></li>
                      <li><a href="shop-product-details.html">Product Details</a></li>
                      <li><a href="shop-cart.html">Cart</a></li>
                      <li><a href="shop-checkout.html">Checkout</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Coming Soon</a>
                    <ul class="dropdown">
                      <li><a href="page-coming-soon-style1.html">style1</a></li>
                      <li><a href="page-coming-soon-style2.html">style2</a></li>
                      <li><a href="page-coming-soon-style3.html">style3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Under Construction</a>
                    <ul class="dropdown">
                      <li><a href="page-under-construction-style1.html">style1</a></li>
                      <li><a href="page-under-construction-style2.html">style2</a></li>
                      <li><a href="page-under-construction-style3.html">style3</a></li>
                    </ul>
                  </li>
                </ul> -->
              </li>
              <li><a href="#">Gallery</a>
               <!--  <ul class="dropdown">
                  <li><a href="page-gallery-3col.html">3 Columns</a></li>
                  <li><a href="page-gallery-3col-only-image.html">3 Columns Only Image</a></li>
                  <li><a href="page-gallery-4col.html">4 Columns</a></li>
                  <li><a href="page-gallery-4col-only-image.html">4 Columns Only Image</a></li>
                  <li><a href="page-gallery-grid.html">Grids (2-10 Columns)</a></li>
                  <li><a href="page-gallery-grid-animation.html">Grids with Animation (2-10 Columns)</a></li>
                  <li><a href="page-gallery-3col-tiles.html">3 Columns Tiles</a></li>
                  <li><a href="page-gallery-4col-tiles.html">4 Columns Tiles</a></li>
                  <li><a href="page-gallery-masonry-tiles.html">Tiles (2-10 Columns)</a></li>
                  <li><a href="page-gallery-masonry-tiles-animation.html">Tiles with Animation (2-10 Columns)</a></li>
                  <li><a href="page-gallery-prettyphoto.html">Pretty Photo Gallery</a></li>
                </ul> -->
              </li>
              <li><a href="#">Blog</a>
                <!-- <ul class="dropdown">
                  <li><a href="#">Blog Classic</a>
                    <ul class="dropdown">
                      <li><a href="blog-classic-no-sidebar.html">Blog Classic No Sidebar</a></li>
                      <li><a href="blog-classic-left-sidebar.html">Blog Classic Left Sidebar</a></li>
                      <li><a href="blog-classic-right-sidebar.html">Blog Classic Right Sidebar</a></li>
                      <li><a href="blog-classic-both-sidebar.html">Blog Classic Both Sidebar</a></li>
                      <li><a href="blog-classic-left-thumbs.html">Blog Classic Left Thumbs</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Blog Grid</a>
                    <ul class="dropdown">
                      <li><a href="blog-grid-2-column.html">Blog Grid 2 Column</a></li>
                      <li><a href="blog-grid-3-column.html">Blog Grid 3 Column</a></li>
                      <li><a href="blog-grid-4-column.html">Blog Grid 4 Column</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Blog Masonry</a>
                    <ul class="dropdown">
                      <li><a href="blog-masonry-2-column.html">Blog Masonry 2 Column</a></li>
                      <li><a href="blog-masonry-3-column.html">Blog Masonry 3 Column</a></li>
                      <li><a href="blog-masonry-4-column.html">Blog Masonry 4 Column</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Blog Single</a>
                    <ul class="dropdown">
                      <li><a href="blog-single-no-sidebar.html">Blog Single No Sidebar</a></li>
                      <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                      <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>
                      <li><a href="blog-single-both-sidebar.html">Blog Single Both Sidebar</a></li>
                      <li><a href="blog-single-disqus-comments.html">Blog Single Discuss Comments</a></li>
                      <li><a href="blog-single-facebook-comments.html">Blog Single Facebook Comments</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Blog Infinity Scroll</a>
                    <ul class="dropdown">
                      <li><a href="blog-extra-infinity-scroll.html">Blog Infinity Scroll Default</a></li>
                      <li><a href="blog-extra-infinity-scroll-lazyload.html">Blog Infinity Scroll Lazyload</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Blog Timeline</a>
                    <ul class="dropdown">
                      <li><a href="blog-timeline.html">Blog Timeline Default</a></li>
                      <li><a href="blog-timeline-masonry.html">Blog Timeline Masonry</a></li>
                    </ul>
                  </li>
                </ul> -->
              </li>
              <!-- <li><a href="javascript:void(0)">Shortcodes</a>
                <div class="megamenu">
                  <div class="megamenu-row">
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a href="shortcode-accordion.html"><i class="fa fa-list-ul"></i> Accordion</a></li>
                        <li><a href="shortcode-alerts.html"><i class="fa fa-exclamation-circle"></i> Alerts</a></li>
                        <li><a href="shortcode-animations.html"><i class="fa fa-magic"></i> Animations</a></li>
                        <li><a href="shortcode-background-html5-video.html"><i class="fa fa-video-camera"></i> HTML5 Background Video</a></li>
                        <li><a href="shortcode-blockquotes.html"><i class="fa fa-quote-right"></i> Blockquotes</a></li>
                        <li><a href="shortcode-button-groups-and-dropdowns.html"><i class="fa fa-link"></i> Button Groups</a></li>
                        <li><a href="shortcode-button-hover-effect.html"><i class="fa fa-flag-o"></i> Button Hover Effect</a></li>
                        <li><a href="shortcode-buttons.html"><i class="fa fa-external-link"></i> Buttons</a></li>
                        <li><a href="shortcode-call-to-actions.html"><i class="fa fa-plus-square"></i> Call To Actions</a></li>
                        <li><a href="shortcode-charts.html"><i class="fa fa-pie-chart"></i> Charts</a></li>
                        <li><a href="shortcode-columns-grids.html"><i class="fa fa-columns"></i> Columns Grids</a></li>
                        <li><a href="shortcode-divider.html"><i class="fa fa-indent"></i> Divider</a></li>
                        <li><a href="shortcode-dropcaps.html"><i class="fa fa-bold"></i> Dropcaps</a></li>
                        <li><a href="shortcode-datetime-datepicker.html"><i class="fa fa-calendar"></i> Date Picker</a></li>
                        <li><a href="shortcode-datetime-timepicker.html"><i class="fa fa-calendar"></i> Time Picker</a></li>
                        <li><a href="shortcode-datetime-datetimepicker.html"><i class="fa fa-calendar"></i> Bootstrap Date-Time Picker</a></li>
                      </ul>
                    </div>
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a href="shortcode-datetime-datepair.html"><i class="fa fa-calendar"></i> Date Pair</a></li>
                        <li><a href="shortcode-flex-sliders.html"><i class="fa fa-sliders"></i> Flex Sliders</a></li>
                        <li><a href="shortcode-flipbox.html"><i class="fa fa-square"></i> Flipbox</a></li>
                        <li><a href="shortcode-forms.html"><i class="fa fa-align-justify"></i> Forms</a></li>
                        <li><a href="shortcode-funfacts.html"><i class="fa fa-eye-slash"></i> Funfacts</a></li>
                        <li><a href="shortcode-iconbox.html"><i class="fa fa-unsorted"></i> Icon Box</a></li>
                        <li><a href="shortcode-icon-7stroke.html"><i class="fa fa-circle-o"></i> Icons 7stroke</a></li>
                        <li><a href="shortcode-icon-elegant-icons.html"><i class="fa fa-eye-slash"></i> Icons Elegant</a></li>
                        <li><a href="shortcode-icon-flat-color-icons.html"><i class="fa fa-i-cursor"></i> Icons Flat Color</a></li>
                        <li><a href="shortcode-icon-fontawesome.html"><i class="fa fa-fort-awesome"></i> Icons FontAwesome</a></li>
                        <li><a href="shortcode-icon-fontawesome-tutorial.html"><i class="fa fa-fonticons"></i> Icons FontAwesome Tutorial</a></li>
                        <li><a href="shortcode-icon-strokegap.html"><i class="fa fa-anchor"></i> Icons Stroke Gap</a></li>
                        <li><a href="shortcode-image-box.html"><i class="fa fa-file-image-o"></i> Image Box</a></li>
                        <li><a href="shortcode-instagram.html"><i class="fa fa-instagram"></i> Instagram Feed</a></li>
                        <li><a href="shortcode-labels-badges.html"><i class="fa fa-check-square-o"></i> Labels Badges</a></li>
                        <li><a href="shortcode-listgroup-panels.html"><i class="fa fa-th-list"></i> Listgroup Panels</a></li>
                      </ul>
                    </div>
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a href="shortcode-lists.html"><i class="fa fa-list"></i> Lists</a></li>
                        <li><a href="shortcode-maps.html"><i class="fa fa-map-o"></i> Maps</a></li>
                        <li><a href="shortcode-media-embed.html"><i class="fa fa-play-circle-o"></i> Media Embed</a></li>
                        <li><a href="shortcode-modal-bootstrap.html"><i class="fa fa-search-plus"></i> Modal</a></li>
                        <li><a href="shortcode-modal-lightbox.html"><i class="fa fa-expand"></i> Lightbox</a></li>
                        <li><a href="shortcode-navigation.html"><i class="fa fa-navicon"></i> Navigation</a></li>
                        <li><a href="shortcode-owl-carousel.html"><i class="fa fa-sliders"></i> Owl Carousel</a></li>
                        <li><a href="shortcode-pagination.html"><i class="fa fa-arrow-circle-o-right"></i> Pagination</a></li>
                        <li><a href="shortcode-pricing-tables.html"><i class="fa fa-dollar"></i> Pricing Tables</a></li>
                        <li><a href="shortcode-progressbar.html"><i class="fa fa-tasks"></i> Progress Bars</a></li>
                        <li><a href="shortcode-responsive.html"><i class="fa fa-tablet"></i> Responsive</a></li>
                        <li><a href="shortcode-separator.html"><i class="fa fa-minus-square-o"></i> Separator</a></li>
                        <li><a href="shortcode-sitemap.html"><i class="fa fa-sitemap"></i> Sitemap</a></li>
                        <li><a href="shortcode-sliders.html"><i class="fa fa-sliders"></i> Sliders</a></li>
                        <li><a href="shortcode-smoothscrolling.html"><i class="fa fa-binoculars"></i> Smoothscrolling</a></li>
                        <li><a href="shortcode-styled-icons.html"><i class="fa fa-facebook-square"></i> Styled Icons</a></li>
                      </ul>
                    </div>
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a href="shortcode-subscribe.html"><i class="fa fa-user-plus"></i> Subscribe</a></li>
                        <li><a href="shortcode-tables.html"><i class="fa fa-table"></i> Tables</a></li>
                        <li><a href="shortcode-tabs.html"><i class="fa fa-indent"></i> Tabs</a></li>
                        <li><a href="shortcode-team.html"><i class="fa fa-users"></i> Team</a></li>
                        <li><a href="shortcode-testimonials.html"><i class="fa fa-user-secret"></i> Testimonials</a></li>
                        <li><a href="shortcode-textblock.html"><i class="fa fa-bold"></i> Textblock</a></li>
                        <li><a href="shortcode-thumbnails-carousels.html"><i class="fa fa-sliders"></i> Thumbnails/carousels</a></li>
                        <li><a href="shortcode-title.html"><i class="fa fa-text-height"></i> Title</a></li>
                        <li><a href="shortcode-timer-final-countdown.html"><i class="fa fa-text-height"></i> Timer Final Countdown</a></li>
                        <li><a href="shortcode-timer-flipclock.html"><i class="fa fa-text-height"></i> Timer Flipclock</a></li>
                        <li><a href="shortcode-timer-slick-circular.html"><i class="fa fa-text-height"></i> Timer Slick Circular</a></li>
                        <li><a href="shortcode-twitter.html"><i class="fa fa-twitter-square"></i> Twitter Feed</a></li>
                        <li><a href="shortcode-typography.html"><i class="fa fa-font"></i> Typography</a></li>
                        <li><a href="shortcode-vertical-timeline.html"><i class="fa fa-arrows-v"></i> Vertical Timeline</a></li>
                        <li><a href="shortcode-widgets.html"><i class="fa fa-gift"></i> Widgets</a></li>
                        <li><a href="shortcode-working-process.html"><i class="fa fa-exchange"></i> Working Process</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li> -->
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider" data-version="5.0">
            <ul>

	             <!-- SLIDE 1 -->
	            <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg4.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
	                <!-- MAIN IMAGE -->
	                <img src="{{ URL::asset('public/assets/front/images/bg/bg4.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
	                <!-- LAYERS -->

	                <!-- LAYER NR. 1 -->
	                <div class="tp-caption tp-resizeme text-uppercase  bg-dark-transparent text-white font-raleway pl-30 pr-30"
	                  id="rs-1-layer-1"
	                
	                  data-x="['center']"
	                  data-hoffset="['0']"
	                  data-y="['middle']"
	                  data-voffset="['-90']" 
	                  data-fontsize="['28']"
	                  data-lineheight="['54']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1000" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">For the poor children 
	                </div>

	                <!-- LAYER NR. 2 -->
	                <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
	                  id="rs-1-layer-2"

	                  data-x="['center']"
	                  data-hoffset="['0']"
	                  data-y="['middle']"
	                  data-voffset="['-20']"
	                  data-fontsize="['48']"
	                  data-lineheight="['70']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1000" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">raise your helping hand 
	                </div>

	                <!-- LAYER NR. 3 -->
	                <div class="tp-caption tp-resizeme text-white text-center" 
	                  id="rs-1-layer-3"

	                  data-x="['center']"
	                  data-hoffset="['0']"
	                  data-y="['middle']"
	                  data-voffset="['50']"
	                  data-fontsize="['16']"
	                  data-lineheight="['28']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1400" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.
	                </div>

	                <!-- LAYER NR. 4 -->
	                <div class="tp-caption tp-resizeme" 
	                  id="rs-1-layer-4"

	                  data-x="['center']"
	                  data-hoffset="['0']"
	                  data-y="['middle']"
	                  data-voffset="['115']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;"
	                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
	                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
	                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1400" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-default btn-circled btn-transparent pl-20 pr-20" href="#">Donate Now</a> 
	                </div>
	            </li>

	             <!-- SLIDE 2 -->
	            <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg5.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
	                <!-- MAIN IMAGE -->
	                <img src="{{ URL::asset('public/assets/front/images/bg/bg5.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
	                <!-- LAYERS -->

	                <!-- LAYER NR. 1 -->
	                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
	                  id="rs-2-layer-1"

	                  data-x="['left']"
	                  data-hoffset="['30']"
	                  data-y="['middle']"
	                  data-voffset="['-110']" 
	                  data-fontsize="['110']"
	                  data-lineheight="['120']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1000" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 7; white-space: nowrap; font-weight:700;">Donate
	                </div>

	                <!-- LAYER NR. 2 -->
	                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pl-20 pr-20"
	                  id="rs-2-layer-2"

	                  data-x="['left']"
	                  data-hoffset="['35']"
	                  data-y="['middle']"
	                  data-voffset="['-25']" 
	                  data-fontsize="['35']"
	                  data-lineheight="['54']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1000" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 7; white-space: nowrap; font-weight:600; border-radius: 30px;">For the poor children 
	                </div>

	                <!-- LAYER NR. 3 -->
	                <div class="tp-caption tp-resizeme text-white" 
	                  id="rs-2-layer-3"

	                  data-x="['left']"
	                  data-hoffset="['35']"
	                  data-y="['middle']"
	                  data-voffset="['30']"
	                  data-fontsize="['16']"
	                  data-lineheight="['28']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1400" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.
	                </div>

	                <!-- LAYER NR. 4 -->
	                <div class="tp-caption tp-resizeme" 
	                  id="rs-2-layer-4"

	                  data-x="['left']"
	                  data-hoffset="['35']"
	                  data-y="['middle']"
	                  data-voffset="['95']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;"
	                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
	                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
	                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1400" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20" href="#">Donate Now</a> 
	                </div>
	            </li>

              <!-- SLIDE 3 -->
            <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg7.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ URL::asset('public/assets/front/images/bg/bg7.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pr-20 pl-20"
                  id="rs-3-layer-1"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['64']"
                  data-lineheight="['72']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;"><span class="">Help</span> The Poor
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                  id="rs-3-layer-2"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']" 
                  data-fontsize="['32']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">For Their Better Future 
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white text-right" 
                  id="rs-3-layer-3"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['30']"
                  data-fontsize="['16']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-3-layer-4"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['95']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored pl-20 pr-20" href="#">Donate Now</a> 
                </div>
            </li>

            </ul>
          </div><!-- end .rev_slider -->
        </div>
        <!-- end .rev_slider_wrapper -->
        <script>
          $(document).ready(function(e) {
            $(".rev_slider").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [600, 768, 960, 720],
              lazyType: "none",
              parallax: {
                  origo: "slidercenter",
                  speed: 1000,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                  type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->
      </div>
    </section>

    <!-- Section: welcome -->
    <section>
      <div class="container pt-0 pb-0">
        <div class="section-content">
          <div class="row equal-height-inner home-boxes" data-margin-top="-100px">
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto bg-theme-colored-lighter4">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-white icon-circled icon-xl" href="#"> <i class="flaticon-charity-hand-holding-a-stalk  text-theme-colored"></i> </a>
                    <div class="p-10">
                      <h4 class="text-uppercase text-white mt-0">Become a Volunteer</h4>
                      <p class="text-white">Lorem ipsum dolor sit amet, <br> conse ctetur adipisicing.</p>
                      <a href="page-become-a-volunteer.html" class="btn btn-border btn-circled btn-transparent btn-sm">Join us Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto bg-theme-colored-lighter3">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-white icon-circled icon-xl" href="#"> <i class="flaticon-charity-dove-of-peace text-theme-colored"></i> </a>
                    <div class="p-10">
                      <h4 class="text-uppercase text-white mt-0">Adopt a Child</h4>
                      <p class="text-white">Lorem ipsum dolor sit amet, <br> conse ctetur adipisicing.</p>
                      <a href="page-become-a-volunteer.html" class="btn btn-border btn-circled btn-transparent btn-sm">Contact us</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
              <div class="sm-height-auto bg-theme-colored-lighter2">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-white icon-circled icon-xl" href="#"> <i class="flaticon-charity-make-a-donation text-theme-colored"></i> </a>
                    <div class="p-10">
                      <h4 class="text-uppercase text-white mt-0">Get Involved</h4>
                      <p class="text-white">Lorem ipsum dolor sit amet, <br> conse ctetur adipisicing.</p>
                      <a href="page-become-a-volunteer.html" class="btn btn-border btn-circled btn-transparent btn-sm">Donate Us</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
              <div class="sm-height-auto bg-theme-colored">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-white icon-circled icon-xl" href="#"> <i class="flaticon-charity-responsible-use-of-water text-theme-colored"></i> </a>
                    <div class="p-10">
                      <h4 class="text-uppercase text-white mt-0">Emergency Case</h4>
                      <h3 class="text-white">+(012) 345 6789</h3>
                      <a href="page-become-a-volunteer.html" class="btn btn-border btn-circled btn-transparent btn-sm">Contact Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: About -->
    <section id="about2">
      <div class="container">
        <div class="section-content">
          <div class="row mt-10">
            <div class="col-sm-5 col-md-3 mb-sm-20">
              <h3 class="text-uppercase letter-space-1 mt-0">We are eCharity Funding <span class="text-theme-colored">  Network Worldwide.</span></h3>
              <p class="lead mt-20 mb-30">Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit, tenetur sequi expedita earum nobis optio tempora id repellendus?</p>
              <a href="#" class="btn btn-colored btn-theme-colored btn-sm">View Details</a>
            </div>
            <div class="col-sm-7 col-md-9">
              <div class="owl-carousel-3col">
                <div class="item">
                  <div class="box-hover-effect effect1 mb-sm-30">
                    <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="{{ URL::asset('public/assets/front/images/services/bg-3.jpg') }}" alt="..."></a> </div>
                    <div class="caption">
                      <h4 class="text-uppercase letter-space-1 mt-0">Building<span class="text-theme-colored"> Orphanage</span></h4>
                       <p>Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit eligendi</p>
                      <p><a href="#" class="btn btn-theme-colored btn-flat mt-10 btn-sm" role="button">Read More</a></p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="box-hover-effect effect1 mb-sm-30">
                    <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="{{ URL::asset('public/assets/front/images/services/bg-5.jpg') }}" alt="..."></a> </div>
                    <div class="caption">
                      <h4 class="text-uppercase letter-space-1 mt-0">Building<span class="text-theme-colored"> Hospital</span></h4>
                       <p>Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit eligendi</p>
                      <p><a href="#" class="btn btn-theme-colored btn-flat mt-10 btn-sm" role="button">Read More</a></p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="box-hover-effect effect1 mb-sm-30">
                    <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="{{ URL::asset('public/assets/front/images/services/bg-4.jpg') }}" alt="..."></a> </div>
                    <div class="caption">
                      <h4 class="text-uppercase letter-space-1 mt-0">Educating <span class="text-theme-colored"> Children</span></h4>
                       <p>Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit eligendi</p>
                      <p><a href="#" class="btn btn-theme-colored btn-flat mt-10 btn-sm" role="button">Read More</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Causes 3 -->
    <section class="bg-lighter"> 
      <div class="container pb-80">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-0 line-height-1">Our <span class="text-theme-colored"> Causes</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
          <div class="owl-carousel-3col" data-nav="true">
            <div class="item">
              <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="{{ URL::asset('public/assets/front/images/project/w1.jpg') }}">
                </div>
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div class="progress-bar" data-percent="84"></div>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10">
                  <h5><a href="#">Sponsor For Education</a></h5>
                  <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                  <ul class="list-inline clearfix mt-20">
                    <li class="pull-left pr-0">Raised: $1890</li>
                    <li class="text-theme-colored pull-right pr-0">Goal: $2500</li>
                  </ul>
                  <div class="mt-10">
                   <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                   <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> 89 Donors</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="{{ URL::asset('public/assets/front/images/project/w2.jpg') }}">
                </div>
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div class="progress-bar" data-percent="84"></div>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10">
                  <h5><a href="#">Sponsor For Food</a></h5>
                  <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                  <ul class="list-inline clearfix mt-20">
                    <li class="pull-left pr-0">Raised: $1890</li>
                    <li class="text-theme-colored pull-right pr-0">Goal: $2500</li>
                  </ul>
                  <div class="mt-10">
                   <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                   <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> 89 Donors</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="{{ URL::asset('public/assets/front/images/project/w3.jpg') }}">
                </div>
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div class="progress-bar" data-percent="84"></div>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10">
                  <h5><a href="#">Sponsor For Nepal</a></h5>
                  <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                  <ul class="list-inline clearfix mt-20">
                    <li class="pull-left pr-0">Raised: $1890</li>
                    <li class="text-theme-colored pull-right pr-0">Goal: $2500</li>
                  </ul>
                  <div class="mt-10">
                   <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                   <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> 89 Donors</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="{{ URL::asset('public/assets/front/images/project/w4.jpg') }}">
                </div>
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div class="progress-bar" data-percent="84"></div>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10">
                  <h5><a href="#">Sponsor For Refugees</a></h5>
                  <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                  <ul class="list-inline clearfix mt-20">
                    <li class="pull-left pr-0">Raised: $1890</li>
                    <li class="text-theme-colored pull-right pr-0">Goal: $2500</li>
                  </ul>
                  <div class="mt-10">
                   <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                   <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> 89 Donors</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="{{ URL::asset('public/assets/front/images/project/w7.jpg') }}">
                </div>
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div class="progress-bar" data-percent="84"></div>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10">
                  <h5><a href="#">Sponsor For Drinking Water</a></h5>
                  <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                  <ul class="list-inline clearfix mt-20">
                    <li class="pull-left pr-0">Raised: $1890</li>
                    <li class="text-theme-colored pull-right pr-0">Goal: $2500</li>
                  </ul>
                  <div class="mt-10">
                   <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                   <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> 89 Donors</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section:why choose us 2 -->
    <section id="about">
      <div class="container-fluid pt-0 pb-0">
        <div class="row equal-height">
          <div class="col-sm-6 col-md-6 pt-0 pb-0 bg-img-cover hidden-xs" data-bg-img="images/photos/p2.jpg">
          </div>
          <div class="col-sm-6 col-md-6 bg-lighter mt-sm-0 pt-sm-0">
            <div class="pt-80 pb-90 pl-80 pr-100 p-md-30">
              <h2 class="mb-30 mb-sm-10 mt-0 mt-sm-10 line-height-1 text-center">How <span class="text-theme-colored"> Can Help?</span></h2>
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box border-1px p-15 mb-30">
                    <a class="icon pull-left sm-pull-none flip" href="#">
                      <i class="flaticon-charity-make-an-online-donation text-theme-colored"></i>
                    </a>
                    <div class="ml-70 ml-sm-0">
                      <h5 class="icon-box-title mt-15 mt-sm-0 mb-5 text-uppercase">Give Donation</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box border-1px p-15 mb-30">
                    <a class="icon pull-left sm-pull-none flip" href="#">
                      <i class="flaticon-charity-shaking-hands-inside-a-heart text-theme-colored"></i>
                    </a>
                    <div class="ml-70 ml-sm-0">
                      <h5 class="icon-box-title mt-15 mt-sm-0  mb-5 text-uppercase">Become Volenteer</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box border-1px p-15 mb-30">
                    <a class="icon pull-left sm-pull-none flip" href="#">
                      <i class="flaticon-charity-hand-holding-a-gift text-theme-colored"></i>
                    </a>
                    <div class="ml-70 ml-sm-0">
                      <h5 class="icon-box-title mt-15 mt-sm-0 mb-5 text-uppercase">Give Scholarship</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box border-1px p-15 mb-30">
                    <a class="icon pull-left sm-pull-none flip" href="#">
                      <i class="flaticon-charity-dove-of-peace-1 text-theme-colored"></i>
                    </a>
                    <div class="ml-70 ml-sm-0">
                      <h5 class="icon-box-title mt-15 mt-sm-0 mb-5 text-uppercase">Adopt a Child</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   <!-- Section: Running Project 1  -->
    <section>
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="mt-0 line-height-1">Running  <span class="text-theme-colored"> Projects</span></h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="owl-carousel-4col horse-gallery" data-dots="true">
              <div class="gallery-item">
                <div class="thumb">

                  <img class="img-fullwidth" src="{{ URL::asset('public/assets/front/images/portfolio/p1.jpg') }}" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="{{ URL::asset('public/assets/front/images/portfolio/p1.jpg') }}"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="horse-details">
                  <h4 class="title mb-5"><a href="#">Earthquake Recovery</a></h4>
                  <span class="category">Nepal / South Asia</span>
                  <p>
                  <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                  <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
                  </p>
                </div>
              </div>
              <div class="gallery-item">
                <div class="thumb">
                  <img class="img-fullwidth" src="{{ URL::asset('public/assets/front/images/portfolio/p2.jpg') }}" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="{{ URL::asset('public/assets/front/images/portfolio/p2.jpg') }}"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="horse-details">
                  <h4 class="title mb-5"><a href="#">Relocate Refugees</a></h4>
                  <span class="category">Seria / Medilist</span>
                  <p>
                  <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                  <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
                  </p>
                </div>
              </div>
              <div class="gallery-item">
                <div class="thumb">
                  <img class="img-fullwidth" src="{{ URL::asset('public/assets/front/images/portfolio/p3.jpg') }}" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="{{ URL::asset('public/assets/front/images/portfolio/p3.jpg') }}"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="horse-details">
                  <h4 class="title mb-5"><a href="#">Pure Drinking Water</a></h4>
                  <span class="category">Somalia/ South Africa</span>
                  <p>
                  <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                  <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
                  </p>
                </div>
              </div>
              <div class="gallery-item">
                <div class="thumb">
                  <img class="img-fullwidth" src="{{ URL::asset('public/assets/front/images/portfolio/p4.jpg') }}" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="{{ URL::asset('public/assets/front/images/portfolio/p4.jpg') }}"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="horse-details">
                  <h4 class="title mb-5"><a href="#">Educating Poor</a></h4>
                  <span class="category">India / South Asia</span>
                  <p>
                  <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                  <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
                  </p>
                </div>
              </div>
              <div class="gallery-item">
                <div class="thumb">
                  <img class="img-fullwidth" src="{{ URL::asset('public/assets/front/images/portfolio/p5.jpg') }}" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="{{ URL::asset('public/assets/front/images/portfolio/p1.jpg') }}"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="horse-details">
                  <h4 class="title mb-5"><a href="#">Food For Poor</a></h4>
                  <span class="category">India / South Asia</span>
                  <p>
                  <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                  <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
                  </p>
                </div>
              </div>
              <div class="gallery-item">
                <div class="thumb">
                  <img class="img-fullwidth" src="{{ URL::asset('public/assets/front/images/portfolio/p6.jpg') }}" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="{{ URL::asset('public/assets/front/images/portfolio/p6.jpg') }}"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="horse-details">
                  <h4 class="title mb-5"><a href="#">Child Adoption</a></h4>
                  <span class="category">India / South Asia</span>
                  <p>
                  <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                  <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
                  </p>
                </div>
              </div>
              <div class="gallery-item">
                <div class="thumb">
                  <img class="img-fullwidth" src="{{ URL::asset('public/assets/front/images/portfolio/p7.jpg') }}" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="{{ URL::asset('public/assets/front/images/portfolio/p7.jpg') }}"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="horse-details">
                  <h4 class="title mb-5"><a href="#">Shalter For Refugees</a></h4>
                  <span class="category">Seria / Medilist</span>
                  <p>
                  <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                  <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
                  </p>
                </div>
              </div>
              <div class="gallery-item">
                <div class="thumb">
                  <img class="img-fullwidth" src="{{ URL::asset('public/assets/front/images/portfolio/p8.jpg') }}" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="{{ URL::asset('public/assets/front/images/portfolio/p8.jpg') }}"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="horse-details">
                  <h4 class="title mb-5"><a href="#">Collecting Volunteers</a></h4>
                  <span class="category">Sydney Roosters / Sydney</span>
                  <p>
                  <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                  <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Make a Donation 1 -->
    <section class="divider parallax" data-bg-img="{{ URL::asset('public/assets/front/images/bg/bg2.jpg') }}" data-parallax-ratio="0.7">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-md-8">
            <div class="bg-dark-transparent-8 p-40">
              <h3 class="mt-0 line-bottom text-white">Make a Donation Now!</h3>

              <!-- ===== START: Paypal Both Onetime/Recurring Form ===== -->
              <form id="paypal_donate_form_onetime_recurring">
                <div class="row">
                  <div class="col-md-12">
                    <img src="{{ URL::asset('public/assets/front/images/payment-card-logo-sm.png') }}" alt="">
                    <div class="form-group mt-20 mb-20">
                      <label><strong class="text-white">Payment Type</strong></label> <br>
                      <label class="radio-inline">
                        <input type="radio" checked="" value="one_time" name="payment_type"> 
                        One Time
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="recurring" name="payment_type"> 
                        Recurring
                      </label>
                    </div>
                  </div>

                  <div class="col-sm-12" id="donation_type_choice">
                    <div class="form-group mb-20">
                      <label><strong>Donation Type</strong></label>
                      <div class="radio mt-5">
                        <label class="radio-inline">
                          <input type="radio" value="D" name="t3" checked="">
                          Daily</label>
                        <label class="radio-inline">
                          <input type="radio" value="W" name="t3">
                          Weekly</label>
                        <label class="radio-inline">
                          <input type="radio" value="M" name="t3">
                          Monthly</label>
                        <label class="radio-inline">
                          <input type="radio" value="Y" name="t3">
                          Yearly</label>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <label><strong class="text-white">I Want to Donate for</strong></label>
                      <select name="item_name" class="form-control">
                        <option value="Educate Children">Educate Children</option>
                        <option value="Child Camps">Child Camps</option>
                        <option value="Clean Water for Life">Clean Water for Life</option>
                        <option value="Campaign for Child Poverty">Campaign for Child Poverty</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <label><strong class="text-white">Currency</strong></label>
                      <select name="currency_code" class="form-control">
                        <option value="">Select Currency</option>
                        <option value="USD" selected="selected">USD - U.S. Dollars</option>
                        <option value="AUD">AUD - Australian Dollars</option>
                        <option value="BRL">BRL - Brazilian Reais</option>
                        <option value="GBP">GBP - British Pounds</option>
                        <option value="HKD">HKD - Hong Kong Dollars</option>
                        <option value="HUF">HUF - Hungarian Forints</option>
                        <option value="INR">INR - Indian Rupee</option>
                        <option value="ILS">ILS - Israeli New Shekels</option>
                        <option value="JPY">JPY - Japanese Yen</option>
                        <option value="MYR">MYR - Malaysian Ringgit</option>
                        <option value="MXN">MXN - Mexican Pesos</option>
                        <option value="TWD">TWD - New Taiwan Dollars</option>
                        <option value="NZD">NZD - New Zealand Dollars</option>
                        <option value="NOK">NOK - Norwegian Kroner</option>
                        <option value="PHP">PHP - Philippine Pesos</option>
                        <option value="PLN">PLN - Polish Zlotys</option>
                        <option value="RUB">RUB - Russian Rubles</option>
                        <option value="SGD">SGD - Singapore Dollars</option>
                        <option value="SEK">SEK - Swedish Kronor</option>
                        <option value="CHF">CHF - Swiss Francs</option>
                        <option value="THB">THB - Thai Baht</option>
                        <option value="TRY">TRY - Turkish Liras</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group mb-20">
                      <label><strong class="text-white">How much do you want to donate?</strong></label>
                      <div class="radio mt-5">
                        <label class="radio-inline">
                          <input type="radio" name="amount" value="20">
                          $20</label>
                        <label class="radio-inline">
                          <input type="radio" name="amount" value="50">
                          $50</label>
                        <label class="radio-inline">
                          <input type="radio" name="amount" value="100">
                          $100</label>
                        <label class="radio-inline">
                          <input type="radio" name="amount" value="200">
                          $200</label>
                        <label class="radio-inline">
                          <input type="radio" name="amount" value="500">
                          $500</label>
                        <label class="radio-inline">
                          <input type="radio" name="amount" value="other">
                          Other Amount</label>
                      </div>
                      <div id="custom_other_amount">
                        <label><strong>Custom Amount:</strong></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group">
                      <button type="submit" class="btn btn-flat btn-dark btn-theme-colored mt-10 pl-30 pr-30" data-loading-text="Please wait...">Donate Now</button>
                    </div>
                  </div>
                </div>
              </form>
              
              <!-- Script for Donation Form Custom Amount -->
              <script type="text/javascript">
                $(document).ready(function(e) {
                  var $donation_form = $("#paypal_donate_form_onetime_recurring");
                  //toggle custom amount
                  var $custom_other_amount = $donation_form.find("#custom_other_amount");
                  $custom_other_amount.hide();
                  $donation_form.find("[name='amount']").change(function() {
                      var $this = $(this);
                      if ($this.val() == 'other') {
                        $custom_other_amount.show().append('<div class="input-group"><span class="input-group-addon">$</span> <input id="input_other_amount" type="text" name="amount" class="form-control" value="100"/></div>');
                      }
                      else{
                        $custom_other_amount.children( ".input-group" ).remove();
                        $custom_other_amount.hide();
                      }
                  });

                  //toggle donation_type_choice
                  var $donation_type_choice = $donation_form.find("#donation_type_choice");
                  $donation_type_choice.hide();
                  $("input[name='payment_type']").change(function() {
                      if (this.value == 'recurring') {
                          $donation_type_choice.show();
                      }
                      else {
                          $donation_type_choice.hide();
                      }
                  });


                  // submit form on click
                  $donation_form.on('submit', function(e){
                      //$( "#paypal_donate_form-onetime" ).submit();
                      var item_name = $donation_form.find("select[name='item_name'] option:selected").val();
                      var currency_code = $donation_form.find("select[name='currency_code'] option:selected").val();
                      var amount = $donation_form.find("[name='amount']:checked").val();
                      var t3 = $donation_form.find("input[name='t3']:checked").val();

                      if ( amount == 'other') {
                        amount = $donation_form.find("#input_other_amount").val();
                        console.log(amount);
                      }

                      // submit proper form now
                      if ( $("input[name='payment_type']:checked", $donation_form).val() == 'recurring' ) {
                          var recurring_form = $('#paypal_donate_form-recurring');

                          recurring_form.find("input[name='item_name']").val(item_name);
                          recurring_form.find("input[name='currency_code']").val(currency_code);
                          recurring_form.find("input[name='a3']").val(amount);
                          recurring_form.find("input[name='t3']").val(t3);

                          recurring_form.find("input[type='submit']").trigger('click');

                      } else if ( $("input[name='payment_type']:checked", $donation_form).val() == 'one_time' ) {
                          var onetime_form = $('#paypal_donate_form-onetime');

                          onetime_form.find("input[name='item_name']").val(item_name);
                          onetime_form.find("input[name='currency_code']").val(currency_code);
                          onetime_form.find("input[name='amount']").val(amount);

                          onetime_form.find("input[type='submit']").trigger('click');
                      }
                      return false;
                  });

                });
              </script>

              <!-- Paypal Onetime Form -->
              <form id="paypal_donate_form-onetime" class="hidden" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_donations">
                <input type="hidden" name="business" value="accounts@thememascot.com">

                <input type="hidden" name="item_name" value="Educate Children"> <!-- updated dynamically -->
                <input type="hidden" name="currency_code" value="USD"> <!-- updated dynamically -->
                <input type="hidden" name="amount" value="20"> <!-- updated dynamically -->

                <input type="hidden" name="no_shipping" value="1">
                <input type="hidden" name="cn" value="Comments...">
                <input type="hidden" name="tax" value="0">
                <input type="hidden" name="lc" value="US">
                <input type="hidden" name="bn" value="PP-DonationsBF">
                <input type="hidden" name="return" value="http://www.yoursite.com/thankyou.html">
                <input type="hidden" name="cancel_return" value="http://www.yoursite.com/paymentcancel.html">
                <input type="hidden" name="notify_url" value="http://www.yoursite.com/notifypayment.php">
                <input type="submit" name="submit">
              </form>
              
              <!-- Paypal Recurring Form -->
              <form id="paypal_donate_form-recurring" class="hidden" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_xclick-subscriptions">
                <input type="hidden" name="business" value="accounts@thememascot.com">

                <input type="hidden" name="item_name" value="Educate Children"> <!-- updated dynamically -->
                <input type="hidden" name="currency_code" value="USD"> <!-- updated dynamically -->
                <input type="hidden" name="a3" value="20"> <!-- updated dynamically -->
                <input type="hidden" name="t3" value="D"> <!-- updated dynamically -->


                <input type="hidden" name="p3" value="1">
                <input type="hidden" name="rm" value="2">
                <input type="hidden" name="src" value="1">
                <input type="hidden" name="sra" value="1">
                <input type="hidden" name="no_shipping" value="0">
                <input type="hidden" name="no_note" value="1">                     
                <input type="hidden" name="lc" value="US">
                <input type="hidden" name="bn" value="PP-DonationsBF">
                <input type="hidden" name="return" value="http://www.yoursite.com/thankyou.html">
                <input type="hidden" name="cancel_return" value="http://www.yoursite.com/paymentcancel.html">
                <input type="hidden" name="notify_url" value="http://www.yoursite.com/notifypayment.php">
                <input type="submit" name="submit">
              </form>
              <!-- ===== END: Paypal Both Onetime/Recurring Form ===== -->

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: volunteers 1 -->
   <!--  <section id="team">
      <div class="container pb-80">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="line-height-1 mt-0 mb-0 pb-20">Our<span class="text-theme-colored"> Volunteers</span></h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3 pb-sm-30">
              <div class="team-member">
                <div class="thumb"> <img src="images/team/1.jpg" alt="" class="img-fullwidth img-responsive"> </div>
                <div class="member-info">
                  <div class="member-biography p-20">
                    <h3 class="text-white mt-0 mb-10">Steve Smith</h3>
                    <h5 class="text-white">Student</h5>
                  </div>
                  <div class="bg-white-transparent-9 text-center">
                    <ul class="styled-icons icon-theme-colored icon-hover-theme-colored icon-circled pt-5">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 pb-sm-30">
              <div class="team-member">
                <div class="volunteer-thumb"> <img src="images/team/2.jpg" alt="" class="img-fullwidth img-responsive"> </div>
                <div class="member-info">
                  <div class="member-biography p-20">
                    <h3 class="text-white mt-0 mb-10">Steve Smith</h3>
                    <h5 class="text-white">Student</h5>
                  </div>
                  <div class="bg-white-transparent-9 text-center">
                    <ul class="styled-icons icon-theme-colored icon-hover-theme-colored icon-circled pt-5">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 pb-sm-30">
              <div class="team-member">
                <div class="volunteer-thumb"> <img src="images/team/3.jpg" alt="" class="img-fullwidth img-responsive"> </div>
                <div class="member-info">
                  <div class="member-biography p-20">
                    <h3 class="text-white mt-0 mb-10">Steve Smith</h3>
                    <h5 class="text-white">Businessman</h5>
                  </div>
                  <div class="bg-white-transparent-9 text-center">
                    <ul class="styled-icons icon-theme-colored icon-hover-theme-colored icon-circled pt-5">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 pb-sm-30">
              <div class="team-member">
                <div class="volunteer-thumb"> <img src="images/team/4.jpg" alt="" class="img-fullwidth img-responsive"> </div>
                <div class="member-info">
                  <div class="member-biography p-20">
                    <h3 class="text-white mt-0 mb-10">Steve Smith</h3>
                    <h5 class="text-white">Businessman</h5>
                  </div>
                  <div class="bg-white-transparent-9 text-center">
                    <ul class="styled-icons icon-theme-colored icon-hover-theme-colored icon-circled pt-5">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    
    <!-- divider: Became a Volunteers 1 -->
    <!-- <section class="divider parallax layer-overlay overlay-deeper" data-bg-img="images/bg/bg5.jpg">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-7">
              <h2 class="line-height-1 mt-0 mb-0 pb-20 text-white">Become a<span class="text-theme-colored"> Volunteers</span></h2>
              <p class="mb-30 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, et placeat ipsam, officiis fugiat doloremque ducimus tempore aliquid nihil soluta, quia similique veritatis! Quidem, repellendus exit placeat ipsam, officiis fugiat doloremque ducimus tempore aliquid nihil soluta, quia similique veritatis.</p>
              <a class="btn btn-dark btn-theme-colored btn-lg btn-flat pull-left pl-30 pr-30" href="#">Join Us</a>
            </div>
            <div class="col-md-5">
              <div class="fluid-video-wrapper">
                <iframe src="http://player.vimeo.com/video/22029657?title=0&amp;byline=0&amp;portrait=0" width="640" height="360"  title="Creative" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </section> -->

    <!-- Section: Gallery 1-->
    <section id="gallery">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="mt-0 line-bottom line-height-1">Upcoming <span class="text-theme-colored"> Events</span></h3>
              <div class="event media mb-20 no-bg no-border">
                <div class="event-date media-left text-center flip bg-theme-colored p-20">
                  <ul>
                    <li class="font-30 text-white font-weight-600 border-bottom pb-10">28</li>
                    <li class="font-22 text-white text-uppercase">Feb</li>
                  </ul>
                </div>
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#">Gear up for giving</a></h4>
                    <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                    <span class="text-gray-darkgray"><i class="fa fa-map-marker mr-5"></i> 25 Newyork City</span>
                    <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commod</p>
                  </div>
                </div>
              </div>
              <div class="event media mb-20 no-bg no-border">
                <div class="event-date media-left text-center flip bg-theme-colored p-20">
                  <ul>
                    <li class="font-30 text-white font-weight-600 border-bottom pb-10">28</li>
                    <li class="font-22 text-white text-uppercase">Feb</li>
                  </ul>
                </div>
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#">Gear up for giving</a></h4>
                    <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                    <span class="text-gray-darkgray"><i class="fa fa-map-marker mr-5"></i> 25 Newyork City</span>
                    <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commod</p>
                  </div>
                </div>
              </div>
              <div class="event media mb-20 no-bg no-border">
                <div class="event-date media-left text-center flip bg-theme-colored p-20">
                  <ul>
                    <li class="font-30 text-white font-weight-600 border-bottom pb-10">28</li>
                    <li class="font-22 text-white text-uppercase">Feb</li>
                  </ul>
                </div>
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#">Gear up for giving</a></h4>
                    <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                    <span class="text-gray-darkgray"><i class="fa fa-map-marker mr-5"></i> 25 Newyork City</span>
                    <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commod</p>
                  </div>
                </div>
              </div>
            </div>
           <!--  <div class="col-md-7 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="mt-0 line-bottom line-height-1">Photo <span class="text-theme-colored"> Gallery</span></h3>
              <!-- Portfolio Gallery Grid ->
              <div id="grid" class="gallery-isotope grid-3 gutter clearfix">
                <!-- Portfolio Item Start ->
                <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="images/gallery/s1.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="images/gallery/s1.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="images/gallery/s1.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start ->
                <div class="gallery-item branding">
                  <div class="thumb">
                    <img class="img-fullwidth" src="images/gallery/s2.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="#"><i class="fa fa-link"></i></a>
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="images/gallery/s2.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start ->
                <div class="gallery-item design">
                  <div class="thumb">
                    <img class="img-fullwidth" src="images/gallery/s3.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="images/gallery/s3.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start ->
                <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="images/gallery/s4.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fa fa-youtube-play"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start ->
                <div class="gallery-item branding">
                  <div class="thumb">
                    <img class="img-fullwidth" src="images/gallery/s5.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a class="popup-vimeo" href="https://vimeo.com/45830194"><i class="fa fa-play"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start ->
                <div class="gallery-item design">
                  <div class="thumb">
                    <div class="flexslider-wrapper">
                      <div class="flexslider">
                        <ul class="slides">
                          <li><a href="images/gallery/s1.jpg" title="Portfolio Gallery - Photo 1"><img src="images/gallery/s1.jpg" alt=""></a></li>
                          <li><a href="images/gallery/s2.jpg" title="Portfolio Gallery - Photo 2"><img src="images/gallery/s2.jpg" alt=""></a></li>
                          <li><a href="images/gallery/s3.jpg" title="Portfolio Gallery - Photo 3"><img src="images/gallery/s3.jpg" alt=""></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="#"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start ->
                <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="images/gallery/s1.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="images/gallery/s1.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="images/gallery/s2.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start ->
                <div class="gallery-item design">
                  <div class="thumb">
                    <div class="flexslider-wrapper" data-direction="vertical">
                      <div class="flexslider">
                        <ul class="slides">
                          <li><a href="images/gallery/s6.jpg" title="Portfolio Gallery - Photo 1"><img src="images/gallery/s6.jpg" alt=""></a></li>
                          <li><a href="images/gallery/s5.jpg" title="Portfolio Gallery - Photo 2"><img src="images/gallery/s5.jpg" alt=""></a></li>
                          <li><a href="images/gallery/s4.jpg" title="Portfolio Gallery - Photo 3"><img src="images/gallery/s4.jpg" alt=""></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="#"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start ->
                <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="images/gallery/s1.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="images/gallery/s1.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="images/gallery/s2.jpg">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

              </div>
              <!-- End Portfolio Gallery Grid -->
            </div> -->
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section: Testimonials and Logo -->
    <!-- <section class="divider parallax layer-overlay  overlay-white-5" data-stellar-background-ratio="0.2" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-0 pb-0">
        <div class="row equal-height">
          <div class="col-md-7">
            <div class="display-table-parent pr-90 pl-90">
              <div class="display-table">
                <div class="display-table-cell">
                  <div class="clients text-center pt-30 pb-20 bg-lightest-transparent">
                    <div class="row">
                      <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="images/clients/1.png" alt="" width="100" class="mb-10">
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="images/clients/2.png" alt="" width="100" class="mb-10">
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="images/clients/3.png" alt="" width="100" class="mb-10">
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="images/clients/4.png" alt="" width="100" class="mb-10">
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="images/clients/5.png" alt="" width="100" class="mb-10">
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="images/clients/6.png" alt="" width="100" class="mb-10">
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>                  
                  <div class="mt-30">
                    <h4 class="text-uppercase mb-5 text-black-222">Subscribe to our newsletter</h4>
                    <!-- Mailchimp Subscription Form->
                    <form id="mailchimp-subscription-form" class="newsletter-form mt-10">
                      <label class="display-block" for="mce-EMAIL"></label>
                      <div class="input-group">
                        <input type="email" id="mce-EMAIL" data-height="43px" class="form-control input-lg" placeholder="Your Email" name="EMAIL" value="">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-flat btn-lg btn-colored btn-theme-colored m-0" data-height="43px">Subscribe</button>
                        </span>
                      </div>
                    </form>

                    <!-- Mailchimp Subscription Form Validation->
                    <script type="text/javascript">
                      $('#mailchimp-subscription-form').ajaxChimp({
                          callback: mailChimpCallBack,
                          url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                      });

                      function mailChimpCallBack(resp) {
                          // Hide any previous response text
                          var $mailchimpform = $('#mailchimp-subscription-form'),
                              $response = '';
                          $mailchimpform.children(".alert").remove();
                          if (resp.result === 'success') {
                              $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                          } else if (resp.result === 'error') {
                              $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                          }
                          $mailchimpform.prepend($response);
                      }
                    </script>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5 bg-light-transparent">
            <div class="pt-50 pb-50 pl-20 pr-20">
              <h4 class="text-uppercase line-bottom mt-0">Our Donors Say</h4>
              <div class="testimonial-carousel owl-nav-top">
                <div class="item">
                  <div class="text-center">
                    <div class="thumb"><img class="img-circle" alt="" src="images/testimonials/1.jpg"></div>
                    <div class="content pt-10">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt adipiscing elit.</p>
                      <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                      <h5 class="author text-theme-colored mb-0">Catherine Grace</h5>
                      <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-wrapper text-center">
                    <div class="thumb"><img class="img-circle" alt="" src="images/testimonials/2.jpg"></div>
                    <div class="content pt-10">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt adipiscing elit.</p>
                      <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                      <h5 class="author text-theme-colored mb-0">Catherine Grace</h5>
                      <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-wrapper text-center">
                    <div class="thumb"><img class="img-circle" alt="" src="images/testimonials/3.jpg"></div>
                    <div class="content pt-10">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt adipiscing elit.</p>
                      <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                      <h5 class="author text-theme-colored mb-0">Catherine Grace</h5>
                      <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    
    <!-- Section: Blog -->
   <!--  <section id="blog" data-bg-img="images/pattern/p8.png">
      <div class="container pb-80">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="mt-0 line-height-1">Latest <span class="text-theme-colored">News</span></h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
              <article class="post clearfix mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="images/blog/1.jpg" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left flip text-center">
                      <ul>
                        <li class="font-16 font-weight-600 border-bottom bg-white-f1 pt-5 pr-15 pb-5 pl-15">28</li>
                        <li class="font-12 text-white text-uppercase bg-theme-colored pt-5 pr-15 pb-5 pl-15">Feb</li>
                      </ul>
                    </div>
                    <div class="media-body pl-10">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-capitalize m-0"><a href="#">This is a standard post with thumbnail</a></h4>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis</p>
                    <div class="mt-10"> <a href="#" class="btn btn-theme-colored btn-sm">Read More</a> </div>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <article class="post clearfix mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="images/blog/2.jpg" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left flip text-center">
                      <ul>
                        <li class="font-16 font-weight-600 border-bottom bg-white-f1 pt-5 pr-15 pb-5 pl-15">28</li>
                        <li class="font-12 text-white text-uppercase bg-theme-colored pt-5 pr-15 pb-5 pl-15">Feb</li>
                      </ul>
                    </div>
                    <div class="media-body pl-10">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-capitalize m-0"><a href="#">This is a standard post with thumbnail</a></h4>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis</p>
                    <div class="mt-10"> <a href="#" class="btn btn-theme-colored btn-sm">Read More</a> </div>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <article class="post clearfix mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="images/blog/3.jpg" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left flip text-center">
                      <ul>
                        <li class="font-16 font-weight-600 border-bottom bg-white-f1 pt-5 pr-15 pb-5 pl-15">28</li>
                        <li class="font-12 text-white text-uppercase bg-theme-colored pt-5 pr-15 pb-5 pl-15">Feb</li>
                      </ul>
                    </div>
                    <div class="media-body pl-10">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-capitalize m-0"><a href="#">This is a standard post with thumbnail</a></h4>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis</p>
                    <div class="mt-10"> <a href="#" class="btn btn-theme-colored btn-sm">Read More</a> </div>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>
     -->
              

  <!-- </div> -->
  <!-- end main-content -->
  
  <!-- Footer -->
  <footer id="footer" class="bg-black-222">
    <div class="container pt-80 pb-30">
      <div class="row border-bottom-black">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mb-20" alt="" src="images/logo-wide-white.png">
            <p>Lorem ipsum dolor sit amet, consecte tur adipisi cing elit lestias eius illum libero dolor nobis deleniti.</p>
            <p>203, Envato Labs, Behind Alis Steet, Melbourne, Australia.</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">123-456-789</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">contact@yourdomain.com</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#">www.yourdomain.com</a> </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Useful Links</h5>
            <ul class="list angle-double-right list-border">
              <li><a href="#">Body Building</a></li>
              <li><a href="#">Fitness Classes</a></li>
              <li><a href="#">Weight lifting</a></li>
              <li><a href="#">Yoga Courses</a></li>
              <li><a href="#">Training</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Twitter Feed</h5>
            <div class="twitter-feed list-border clearfix" data-username="Envato" data-count="2"></div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Latest News</h5>
            <div class="latest-posts">
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Sustainable Construction</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Storefront Installations</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-30">
        <div class="col-md-5">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Subscribe Us</h5>
            <!-- Mailchimp Subscription Form Starts Here -->
            <form id="mailchimp-subscription-form-footer" class="newsletter-form">
              <div class="input-group">
                <input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer">
                <span class="input-group-btn">
                  <button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0 font-14" type="submit">Subscribe</button>
                </span>
              </div>
            </form>
            <!-- Mailchimp Subscription Form Validation-->
            <script type="text/javascript">
              $('#mailchimp-subscription-form-footer').ajaxChimp({
                  callback: mailChimpCallBack,
                  url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
              });

              function mailChimpCallBack(resp) {
                  // Hide any previous response text
                  var $mailchimpform = $('#mailchimp-subscription-form-footer'),
                      $response = '';
                  $mailchimpform.children(".alert").remove();
                  console.log(resp);
                  if (resp.result === 'success') {
                      $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  } else if (resp.result === 'error') {
                      $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  }
                  $mailchimpform.prepend($response);
              }
            </script>
            <!-- Mailchimp Subscription Form Ends Here -->
          </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Call Us Now</h5>
            <div class="text-gray">
              +61 3 1234 5678 <br>
              +12 3 1234 5678
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Connect With Us</h5>
            <ul class="styled-icons icon-dark icon-circled icon-sm">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">Copyright &copy;2015 ThemeMascot. All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper --> 

<!-- Footer Scripts --> 
<!-- JS | Calendar Event Data --> 
<script src="{{ URL::asset('public/assets/front/js/calendar-events-data.js') }}"></script> 
<!-- JS | Custom script for all pages --> 
<script src="{{ URL::asset('public/assets/front/js/custom.js') }}"></script>
{{ URL::asset('public/assets/front/js/revolution-slider/js/extensions/revolution.extension.video.min.js') }}
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) --> 
<!-- <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>  -->
<script type="text/javascript" src="{{ URL::asset('public/assets/front/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('public/assets/front/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('public/assets/front/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('public/assets/front/js/revolution-slider/js/extensions/revolution.extension.migration.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('public/assets/front/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('public/assets/front/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('public/assets/front/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('public/assets/front/js/revolution-slider/js/extensions/revolution.extension.video.min.js') }}"></script>
</body>

<!-- Mirrored from kodesolution.com/html/2016/echarity-html/demo/index-mp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2022 21:07:19 GMT -->
</html>