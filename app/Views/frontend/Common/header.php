<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themecraze.net/html/alexis/events.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2024 12:41:56 GMT -->

<head>
   <!-- required meta -->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- #favicon -->
   <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
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
   <link rel="stylesheet" href="<?= base_url('assets/css/blue-theme.css'); ?>" id="switch-color">
   <!-- main css -->
   <link rel="stylesheet" href="<?= base_url('assets/css/main.css'); ?>">
   <!-- responsive css -->
   <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css'); ?>">

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
                                    <a href="index.php" class="">Home</a>
                                    <ul class="">

                                    </ul>
                                 </li>
                                 <li class="navbar__item navbar__item--has-children nav-fade">
                                    <a href="#" aria-label="dropdown menu"
                                       class="navbar__dropdown-label dropdown-label-alter">Project</a>
                                    <ul class="navbar__sub-menu">
                                       <li>
                                          <a href="<?= site_url('servicepage/'.'1') ?>">Residential</a>
                                       </li>
                                       <li>
                                          <a href="<?= site_url('servicepage/'.'2') ?>">Commercial</a>
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
                              <img src="assets/images/log.png" alt="Image" style="width: 103px;">
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
                        <img src="assets/images/log.png" alt="Image" style="width: 90px;">
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