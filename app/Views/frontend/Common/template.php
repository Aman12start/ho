<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themecraze.net/html/alexis/events.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2024 12:41:56 GMT -->

<head>
   <!-- required meta -->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- #favicon -->
   <link rel="shortcut icon" href="<?= base_url()?>public/assets/images/favicon.png" type="image/x-icon">
   <link rel="icon" href=" href="<?= base_url()?>public/assets/images/favicon.png" type="image/x-icon">
   <!-- #title -->
   <title>Olbuiz Homes</title>
   <!-- #keywords -->
   <meta name="keywords" content="real estate, house listing, directory listing, html, bootstrap, scss">
   <!-- #description -->
   <meta name="description" content="Real Estate Html5 Template">
   <!-- google fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com/">
   <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
   <link
      href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&amp;family=Montserrat:ital,wght@0,100..900;1,100..900&amp;display=swap"
      rel="stylesheet">
   <!-- color themes -->
   <link rel="stylesheet" href="<?= base_url('public/assets/css/blue-theme.css'); ?>" id="switch-color">
   <!-- main css -->
   <link rel="stylesheet" href="<?= base_url('public/assets/css/main.css'); ?>">
   <!-- responsive css -->
   <link rel="stylesheet" href="<?= base_url('public/assets/css/responsive.css'); ?>">

</head>

<body>
    <!--  <?php // echo "hrello" ; ?> -->
   <!--[if lt IE 9]>
      <p class="browserupgrade">
         You are using an <strong>outdated</strong> browser. Please
         <a href="https://browsehappy.com/">upgrade your browser</a> to improve
         your experience and security.
      </p>
      <![endif]-->
   <div class="page-wrapper">
      <!-- preloader start -->
      <div class="preloader"></div>
      <!-- / preloader start -->

      <!-- ==== header start ==== -->
      <header class="main-header">
         <div class="main-header__topbar d-none d-lg-block">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="main-header__topbar__content">
                        <div class="main-header__topbar__content-wrapper">
                           <ul class="main-header__topbar__list">
                              <!-- <li><a href="sign-in.php"><i class="icon-user-key"></i>Login or Register</a>
                                 </li> -->
                              <!-- <li><a href="commercial.php
"><i class="icon-home"></i>Submit
                                    Property</a>
                                 </li>
                              </ul>
                              <select name="country" class="main-header__topbar__select-country">
                                 <option data-flag="fi-gb-eng">English</option>
                                 <option data-flag="fi-us">Spanish</option>
                                 <option data-flag="fi-cn">Chinese</option>
                                 <option data-flag="fi-it">Italian</option>
                              </select> -->
                        </div>
                        <div class="social">
                           <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook"
                              title="facebook">
                              <i class="flaticon-facebook"></i>
                           </a>
                           <a href="https://www.twitter.com/" target="_blank" aria-label="share us on twitter"
                              title="twitter">
                              <i class="flaticon-twitter"></i>
                           </a>
                           <a href="https://www.instagram.com/" target="_blank" aria-label="share us on instagram"
                              title="instagram">
                              <i class="flaticon-instagram"></i>
                           </a>
                           <a href="https://www.linkedin.com/" target="_blank" aria-label="share us on linkedin"
                              title="linkedin">
                              <i class="flaticon-linkedin"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="main-header__menu">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="main-header__menu-box">
                        <nav class="navbar p-0">
                           <div class="navbar-logo d-block d-lg-none">
                              <a href="index.php">
                                 <!-- <img src="assets/images/log.png" alt="Image" style="width: 120px ;"> -->
                              </a>
                           </div>
                           <div class="navbar__menu d-none d-xl-block">
                              <ul class="navbar__list">
                                 <li class="navbar__item nav-fade">
                                    <a href="<?= base_url();?>" class="">Home</a>
                                    <ul class="">

                                    </ul>
                                 </li>
                                 <li class="navbar__item navbar__item--has-children nav-fade">
                                    <a href="#" aria-label="dropdown menu"
                                       class="navbar__dropdown-label dropdown-label-alter">Project</a>
                                    <ul class="navbar__sub-menu">
                                       <li>
                                          <a href="<?= base_url('servicepage/'.'1') ?>">Residential</a>
                                       </li>
                                       <li>
                                          <a href="<?= base_url('servicepage/'.'2') ?>">Commercial</a>
                                       </li>

                                    </ul>
                                 </li>
                                 <li class="navbar__item navbar__item--has-children nav-fade">
                                    <a href="#" aria-label="dropdown menu"
                                       class="navbar__dropdown-label dropdown-label-alter">About</a>
                                    <ul class="navbar__sub-menu">
                                       <li>
                                          <a href="<?= site_url('/about') ?>">About Us</a>
                                       </li>

                                       <li>
                                          <a href="<?= site_url('/desk') ?>">MD Desk</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="navbar__item navbar__item--has-children nav-fade">
                                    <a href="#" aria-label="dropdown menu"
                                       class="navbar__dropdown-label dropdown-label-alter">Media</a>

                                    <!-- <a href="events.php">Media</a> -->
                                    <ul class="navbar__sub-menu">
                                       <!-- <li>
                                             <a href="about.php">Advertising & Events</a>
                                          </li>  -->
                                       <li>
                                          <a href="<?= site_url('/events')?>">News & Events</a>
                                       </li>
                                       <!-- <li>
                                             <a href="sign-in.php">Notice</a>
                                         </li>  -->
                                    </ul>
                                 </li>

                                 <li class="navbar__item nav-fade">
                                    <a href="<?= site_url('/contact') ?> ">Contact Us</a>
                                 </li>
                              </ul>
                           </div>
                           <div class="navbar__options">
                              <div class="navbar__mobile-options d-none d-xl-block">
                                 <div class="contact-btn">
                                    <div class="contact-icon">
                                       <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="contact-content">
                                       <p>Call Us Now</p>

                                       <a href="tel:+91 7838718428">
                                          (+91) 7838718428</a>
                                    </div>
                                 </div>
                              </div>
                              <button class="open-offcanvas-nav d-flex d-xl-none" aria-label="toggle mobile menu"
                                 title="open offcanvas menu">
                                 <span class="icon-bar top-bar"></span>
                                 <span class="icon-bar middle-bar"></span>
                                 <span class="icon-bar bottom-bar"></span>
                              </button>
                           </div>
                        </nav>
                        <div class="logo d-none d-lg-flex">
                           <a href="index.php">
                              <img src="<?= base_url();?>public/assets/images/log.png" alt="Image" style="width: 103px;">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- ==== mobile menu start ==== -->
         <div class="mobile-menu d-block d-xl-none">
            <nav class="mobile-menu__wrapper">
               <div class="mobile-menu__header nav-fade">
                  <div class="logo">
                     <a href="index.php" aria-label="home page" title="logo">
                        <img src="<?= base_url();?>public/assets/images/log.png" alt="Image" style="width: 90px;">
                     </a>
                  </div>
                  <button aria-label="close mobile menu" class="close-mobile-menu">
                     <i class="fa-solid fa-xmark"></i>
                  </button>
               </div>
               <div class="mobile-menu__list"></div>
               <div class="mobile-menu__social social nav-fade">
                  <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook"
                     title="facebook">
                     <i class="flaticon-facebook"></i>
                  </a>
                  <a href="https://www.twitter.com/" target="_blank" aria-label="share us on twitter" title="twitter">
                     <i class="flaticon-twitter"></i>
                  </a>
                  <a href="https://www.instagram.com/" target="_blank" aria-label="share us on instagram"
                     title="instagram">
                     <i class="flaticon-instagram"></i>
                  </a>
                  <a href="https://www.linkedin.com/" target="_blank" aria-label="share us on linkedin"
                     title="linkedin">
                     <i class="flaticon-linkedin"></i>
                  </a>
               </div>
            </nav>
         </div>
         <div class="mobile-menu__backdrop"></div>
         <!-- ==== / mobile menu end ==== -->
      </header>

      <?php echo $this->renderSection('content');?>

      <footer class="footer">
      <div class="container">
         <div class="row vertical-column-gap-lg">
            <div class="col-12 col-md-6 col-xl-3">
               <div class="footer__widget" data-aos="fade-up" data-aos-duration="1200">
                  <div class="footer__logo">
                     <a href="index.php">
                        <!-- <img src="footer_logo_png" alt="footer_logo"> -->
                        <img src="<?= base_url();?>public/assets/images/log.png" alt="Image" style="width: 120px;">
                     </a>
                  </div>
                  <div class="footer__widget-content">
                     <p>At Olbuiz Homes Real Estate Agency, we are dedicated to helping you find the perfect property, whether you're buying, selling, or renting. With a commitment to excellence and a deep understanding of the real estate market. 
                     </p>
                     <!-- <p>Our experienced team provides personalized solutions tailored to your needs. Trust Olbuiz Homes to guide you every step of the way as we turn your real estate goals into reality</p> -->
                     <!-- <p>Quis nostrud exercita laboris nisi ut
                        aliquip commodo.
                     </p> -->
                  </div>
               </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2 offset-xl-1">
               <div class="footer__widget" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                  <div class="footer__widget-header">
                     <img src="<?= base_url();?>public/assets/images/sub-icon.png" class="filter-img" alt="Image">
                     <h4 class="title-animation">Services</h4>
                  </div>
                  <div class="footer__widget-content">
                     <ul class="footer__widget-list">
                        <li><a href="<?= site_url('/about') ?>"><i class="fa-solid fa-angle-right"></i> About Us</a>
                        </li>
                        <!-- <li><a href="residential.php"><i class="fa-solid fa-angle-right"></i>
                              Listing</a> -->
                        <!-- </li>
                        <li><a href="events.php"><i class="fa-solid fa-angle-right"></i> How It
                              Works</a> -->
                        <!-- </li> -->
                        <!-- <li><a href="events.php"><i class="fa-solid fa-angle-right"></i> Our
                                 Services</a>
                              </li> -->
                        <!-- <li><a href="blog-grid-view.php"><i class="fa-solid fa-angle-right"></i> Our
                              Blog</a>
                        </li> -->
                        <li><a href="<?= site_url('/contact') ?>"><i class="fa-solid fa-angle-right"></i> Contact Us</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- chnges by jst_enjoy -->
            <div class="col-12 col-md-6 col-xl-3">
               <div class="footer__widget" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                  <div class="footer__widget-header footer__widget-header-alt">
                     <img src="<?= base_url();?>public/assets/images/sub-icon.png" class="filter-img" alt="Image">
                     <h4 class="title-animation">Top News</h4>
                  </div>
                  <div class="footer__widget-content">
                     <div class="footer__blog-single">
                        <div class="thumb">
                           
                           <img src="<?= base_url();?>public/assets/images/blog/footer-one.png" alt="Image">
                           </a>
                        </div>
                        <div class="content">
                           <h5 style= "color: white";>The Added Value
                                 Social Worker</a>
                           </h5>
                         
                        </div>
                     </div>
                     <div class="footer__blog-single">
                        <div class="thumb">
                         
                              <img src="<?= base_url();?>public/assets/images/blog/footer-two.png" alt="Image">
                           </a>
                        </div>
                        <div class="content">
                           <h5 style= "color: white";>Ways to Increase
                                 Trust
                           </h5>
                          
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
               <div class="footer__widget" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                  <div class="footer__widget-header footer__widget-header-alt">
                     <img src="<?= base_url();?>public/assets/images/sub-icon.png" class="filter-img" alt="Image">
                     <h4 class="title-animation">Contact Now</h4>
                  </div>
                  <div class="footer__widget-content">
                     <ul class="footer__contact-list">
                        <li><a href="https://www.google.com/maps/place/iThum-Noida/@28.6270614,77.3723967,17z/data=!3m1!4b1!4m6!3m5!1s0x390ce5336becb191:0xa89caf8bfb9e7068!8m2!3d28.6270614!4d77.3723967!16s%2Fg%2F11j118h_hh?entry=ttu&g_ep=EgoyMDI0MDgyOC4wIKXMDSoASAFQAw%3D%3D"
                              target="_blank"><i class="fa-solid fa-location-dot"></i>Plot no. A, 40, Block A, Industrial Area, Sector 62, Noida, Uttar Pradesh 201301
                           </a>
                        </li>
                        <li><a href="tel:
+91 8800012901"><i class="fa-solid fa-phone-flip"></i>
+91 8800012901</a>
                        </li>
                        <li style = "color: white";><i class="fa-regular fa-envelope"></i>cybercell@runpaisa.com
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="footer__bottom">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-12 col-lg-6">
                  <div class="footer__bottom-left">
                     <ul class="footer__bottom-list justify-content-center justify-content-lg-start">
                        <li style= "color: white";><a href="<?= site_url('/disclaimer') ?>
">Disclaimer</a>
                        <li><span>-----</span></li>
                        <li><a href="<?= site_url('/privacy') ?>">Privacy Policy</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-12 col-lg-6">
                  <div class="footer__bottom-right text-center text-lg-end">
                     <p><span id="copyrightYear"></span> &copy; All copyright served by OLBUIZ HOMES<a></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- ==== / footer end ==== -->
   <!-- ==== color switcher start ==== -->

   <!-- ==== / color switcher end ==== -->
   <!-- ==== mouse cursor drag start ==== -->
   <div class="mouseCursor cursor-outer"></div>
   <div class="mouseCursor cursor-inner"></div>
   <!-- ==== / mouse cursor drag end ==== -->
   <!-- ==== scroll to top start ==== -->
   <button class="progress-wrap" aria-label="scroll indicator" title="back to top">
      <span></span>
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </button>
   <!-- ==== / scroll to top end ==== -->
   </div>
   <!-- ==== js dependencies start ==== -->
   <!-- jquery -->
   <script src="<?= base_url();?>public/assets/js/jquery-3.7.1.min.js"></script>
   <!-- bootstrap five js -->
   <script src="<?= base_url();?>public/assets/js/bootstrap.bundle.min.js"></script>
   <!-- nice select js -->
   <script src="<?= base_url();?>public/assets/js/jquery.nice-select.min.js"></script>
   <!-- magnific popup js -->
   <script src="<?= base_url();?>public/assets/js/jquery.magnific-popup.min.js"></script>
   <!-- swiper slider js -->
   <script src="<?= base_url();?>public/assets/js/swiper-bundle.min.js"></script>
   <!-- viewport js -->
   <script src="<?= base_url();?>public/assets/js/viewport.jquery.js"></script>
   <!-- odometer js -->
   <script src="<?= base_url();?>public/assets/js/odometer.min.js"></script>
   <!-- aos js -->
   <script src="<?= base_url();?>public/assets/js/aos.js"></script>
   <!-- lenis smooth scroll -->
   <script src="<?= base_url();?>public/assets/js/lenis.min.js"></script>
   <!-- splittext js -->
   <script src="<?= base_url();?>public/assets/js/SplitText.min.js"></script>
   <!-- scrollto js -->
   <script src="<?= base_url();?>public/assets/js/ScrollToPlugin.min.js"></script>
   <!-- scrolltrigger js -->
   <script src="<?= base_url();?>public/assets/js/ScrollTrigger.min.js"></script>
   <!-- gsap js -->
   <script src="<?= base_url();?>public/assets/js/gsap.min.js"></script>
   <!-- ==== / js dependencies end ==== -->
   <!-- colour settings js -->
   <script src="<?= base_url();?>public/assets/js/color-settings.js"></script>
   <!-- main js -->
   <script src="<?= base_url();?>public/assets/js/custom.js"></script>
</body>



</html>