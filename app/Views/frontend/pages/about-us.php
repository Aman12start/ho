<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from themecraze.net/html/alexis/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2024 12:41:54 GMT -->
<head>
      <!-- required meta -->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- #favicon -->
      <link rel="shortcut icon" href="<?= base_url();?>public/assets/images/favicon.png" type="image/x-icon">
      <link rel="icon" href="<?= base_url();?>public/assets/images/favicon.png" type="image/x-icon">
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
      <link rel="stylesheet" href="<?= base_url();?>public/assets/css/blue-theme.css" id="switch-color">
      <!-- main css -->
      <link rel="stylesheet" href="<?= base_url();?>public/assets/css/main.css">
      <!-- responsive css -->
      <link rel="stylesheet" href="<?= base_url();?>public/assets/css/responsive.css">
   </head>
   <body>
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
                              <a href="https://www.facebook.com/" target="_blank"
                                 aria-label="share us on facebook" title="facebook">
                              <i class="flaticon-facebook"></i>
                              </a>
                              <a href="https://www.twitter.com/" target="_blank" aria-label="share us on twitter"
                                 title="twitter">
                              <i class="flaticon-twitter"></i>
                              </a>
                              <a href="https://www.instagram.com/" target="_blank"
                                 aria-label="share us on instagram" title="instagram">
                              <i class="flaticon-instagram"></i>
                              </a>
                              <a href="https://www.linkedin.com/" target="_blank"
                                 aria-label="share us on linkedin" title="linkedin">
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
                                 <!-- <img src="<?= base_url();?>public/assets/images/log.png" alt="Image" style="width: 120px;"> -->
                                 </a>
                              </div>
                              <div class="navbar__menu d-none d-xl-block">
                                 <ul class="navbar__list">
                                    <li class="navbar__item nav-fade">
                                       <a href="index.php" 
                                          class="">Home</a>
                                       <ul class="">
                                         
                                       </ul>
                                    </li>
                                    <li class="navbar__item navbar__item--has-children nav-fade">
                                       <a href="#" aria-label="dropdown menu"
                                          class="navbar__dropdown-label dropdown-label-alter">Project</a>
                                       <ul class="navbar__sub-menu">
                                          <li>
                                             <a href="residential.php">Residential</a>
                                          </li>
                                          <li>
                                             <a href="commercial.php">Commercial</a>
                                          </li>
                                         
                                       </ul>
                                    </li>
                                    <li class="navbar__item navbar__item--has-children nav-fade">
                                       <a href="#" aria-label="dropdown menu"
                                          class="navbar__dropdown-label dropdown-label-alter">About</a>
                                       <ul class="navbar__sub-menu">
                                          <li>
                                             <a href="about.php">About Us</a>
                                          </li>
                                         
                                          <li>
                                             <a href="desk.php">Md Desk</a>
                                          </li>
                                       </ul>
                                    </li>
                                    <li class="navbar__item navbar__item--has-children nav-fade">
                                       <a href="#" aria-label="dropdown menu"
                                          class="navbar__dropdown-label dropdown-label-alter">Media</a>
                                       <ul class="navbar__sub-menu">
                                          <!-- <li>
                                             <a href="about.php">Advertising & Events</a>
                                          </li> -->
                                          <li>
                                             <a href="events.php">News & Events</a>
                                          </li>
                                          <!-- <li>
                                             <a href="sign-in.php">Notice</a>
                                         </li> -->
                                       </ul>
                                    </li>

                                    <li class="navbar__item nav-fade">
                                       <a href="contact.php">Contact Us</a>
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
                                          <a href="tel:01-793-7938">(+01)-793-7938</a>
                                       </div>
                                    </div>
                                 </div>
                                 <button class="open-offcanvas-nav d-flex d-xl-none"
                                    aria-label="toggle mobile menu" title="open offcanvas menu">
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
               </nav>
            </div>
            <div class="mobile-menu__backdrop"></div>
            <!-- ==== / mobile menu end ==== -->
         </header>
         <!-- ==== / header end ==== -->
         <!-- ==== banner start ==== -->
         <section class="common-banner" data-background="<?= base_url();?>public/assets/images/background/breadcrumb-bg.png">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="common-banner__inner">
                        <h2 class="title-animation">About Us</h2>
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item">
                                 <a href="index.php">About</a>
                              </li>
                              <li class="breadcrumb-item active" aria-current="page">
                                 Our Company
                              </li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / banner end ==== -->
         <!-- ==== team section start ==== -->
         <section class="team">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-12 col-xl-5">
                     <div class="col-md-12 section__header text-center">
                        <!-- <span>Touch Our Team</span> -->
                        <h2 class="title-animation">The Company</h2>
                        <div>
                        <p class="group">Real State Group is a leading Indian Builder and Developer- leading with compelling impact towards excellence. With vision and experience in designing and building residential and commercial complexes, the Group exhibits the most superior standards in terms of quality and yet remains affordable to the masses. With the passing time & experience, the Group is giving new dimension to the white board, getting recognized, respected and trusted in NCR. This goodwill is the result of the company’s outstanding efforts and achievements for nearly 3 decades.
                           <br>
                           The Real State Group is committed to provide finest homes to the masses designed aesthetically and valued at superlative standards. Panchsheel Group believes in a futuristic approach to strengthen this commitment to excellence in every aspect and in each project undertaken.
                           
                           The Group is also committed towards realizing its motto of designing residential and commercial complexes for a progressive and modern India, yet adhering to traditional values, which according to us positively transforms the world and makes it a better place to live in. </p>
                           <h2>Vision</h2>
                           <p class="group">To provide homes and commercial infrastructure for a modern India which not just compare to the best in the world but are affordable too.</p>
                           <h2>Mission</h2>
                           <p class="group">Our mission is to honestly and ethically stand by our commitment to deliver real estate projects. On time. On exacting world standards. On expectations that our clients have. On the high standards that we have set for ourselves.</p>
                           <h2>Values</h2>
                           <p class="group">The Real State Group is driven by the philosophy of providing every person with a lifestyle which with its par-excellence brings comfort and convenience at affordable prices. Our commitment to our values fosters a genuine feeling of community and allows everyone to focus on the fulfillment of common goals.

                              The Group’s inspirational dedication to the value serves as a guiding philosophy. Quality, Technology and Adaptability for every undertaking always remain at the forefront of the values adopted by the Group. The concern for the highest levels of quality is nurtured at every level to achieve the crucial requirement for keeping pace with progress.</p>
                              <h2>Driving Force</h2>
                              <p class="group">With vision to design and build such residential and commercial complexes which showcase excellence in quality, design and specifications, yet are affordable to the masses, Panchsheel Group has come up to be a recognized, respected and trusted real estate developer in NCR. The workforce here is not only highly qualified but also highly adaptable to every challenge that comes in the way. The ability to take on challenges has enabled the Group to successfully execute projects that have been new to its experience.</p>
                              <h2>Future</h2>
                              <p class="group">The Real State Group continues to honour its commitment to the founding philosophy of making available superior quality infrastructure to every Indian, We foresee a future that promises to be at par with global standards, yet appreciated and owned by masses; A future where the Group continues to be at the technological forefront of the real estate sector; A future that strengthens commitment to excellence; A future that makes the world a better place to live in.</p>
                        </div>
                        <div class="icon-thumb justify-content-center">
                           <div class="icon-thumb-single">
                              <span></span>
                              <span></span>
                           </div>
                           <img src="<?= base_url();?>public/assets/images/sub-icon.png" alt="Image" class="filter-img">
                           <div class="icon-thumb-single">
                              <span></span>
                              <span></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row vertical-column-gap-lg">
                  <div class="col-12 col-sm-6 col-xl-3">
                     <div class="team__single" data-aos="fade-up" data-aos-duration="1200">
                        <div class="thumb-wrapper">
                           <div class="thumb">
                              <!-- <img src="<?= base_url();?>public/assets/images/team/one.png" alt="Image"> -->
                           </div>
                           <div class="thumb-hover">
                              <div class="small-thumb">
                                 <a href="desk.php">
                                 <!-- <img src="<?= base_url();?>public/assets/images/team/one.png" alt="Image"> -->
                                 </a>
                              </div>
                              <p>Properties Agent</p>
                              <div class="social">
                                 <a href="https://www.facebook.com/" target="_blank"
                                    aria-label="share us on facebook" title="facebook">
                                 <i class="flaticon-facebook"></i>
                                 </a>
                                 <a href="https://www.twitter.com/" target="_blank"
                                    aria-label="share us on twitter" title="twitter">
                                 <i class="flaticon-twitter"></i>
                                 </a>
                                 <a href="https://www.instagram.com/" target="_blank"
                                    aria-label="share us on instagram" title="instagram">
                                 <i class="flaticon-instagram"></i>
                                 </a>
                                 <a href="https://www.linkedin.com/" target="_blank"
                                    aria-label="share us on linkedin" title="linkedin">
                                 <i class="flaticon-linkedin"></i>
                                 </a>
                              </div>
                           </div>
                           <a href="desk.php" class="arr"><i class="flaticon-share"></i></a>
                        </div>
                        <div class="content">
                           <!-- <span>Sunshine</span> -->
                           <!-- <h4><a href="desk.php">Andren Willium</a></h4> -->
                           <!-- <p><a href="tel:256-255-6579"><i class="icon-mobile"></i> Call: +256 255 6579</a></p> -->
                           <!-- <p>09 Properties</p> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-xl-3">
                     <div class="team__single" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="thumb-wrapper">
                           <div class="thumb">
                              <!-- <img src="<?= base_url();?>public/assets/images/team/two.png" alt="Image"> -->
                           </div>
                           <div class="thumb-hover">
                              <div class="small-thumb">
                                 <a href="desk.php">
                                 <!-- <img src="<?= base_url();?>public/assets/images/team/two.png" alt="Image"> -->
                                 </a>
                              </div>
                              <p>Properties Agent</p>
                              <div class="social">
                                 <a href="https://www.facebook.com/" target="_blank"
                                    aria-label="share us on facebook" title="facebook">
                                 <i class="flaticon-facebook"></i>
                                 </a>
                                 <a href="https://www.twitter.com/" target="_blank"
                                    aria-label="share us on twitter" title="twitter">
                                 <i class="flaticon-twitter"></i>
                                 </a>
                                 <a href="https://www.instagram.com/" target="_blank"
                                    aria-label="share us on instagram" title="instagram">
                                 <i class="flaticon-instagram"></i>
                                 </a>
                                 <a href="https://www.linkedin.com/" target="_blank"
                                    aria-label="share us on linkedin" title="linkedin">
                                 <i class="flaticon-linkedin"></i>
                                 </a>
                              </div>
                           </div>
                           <a href="desk.php" class="arr"><i class="flaticon-share"></i></a>
                        </div>
                        <div class="content">
                           <!-- <span>Sweet Home</span>
                           <h4><a href="desk.php">Polly Matzinger
                              </a>
                           </h4>
                           <p><a href="tel:256-255-6579"><i class="icon-mobile"></i> Call: +256 255 6579</a></p>
                           <p>19 Properties</p> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-xl-3">
                     <div class="team__single" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                        <div class="thumb-wrapper">
                           <div class="thumb">
                              <!-- <img src="<?= base_url();?>public/assets/images/team/three.png" alt="Image"> -->
                           </div>
                           <div class="thumb-hover">
                              <div class="small-thumb">
                                 <a href="desk.php">
                                 <!-- <img src="<?= base_url();?>public/assets/images/team/three.png" alt="Image"> -->
                                 </a>
                              </div>
                              <p>Properties Agent</p>
                              <div class="social">
                                 <a href="https://www.facebook.com/" target="_blank"
                                    aria-label="share us on facebook" title="facebook">
                                 <i class="flaticon-facebook"></i>
                                 </a>
                                 <a href="https://www.twitter.com/" target="_blank"
                                    aria-label="share us on twitter" title="twitter">
                                 <i class="flaticon-twitter"></i>
                                 </a>
                                 <a href="https://www.instagram.com/" target="_blank"
                                    aria-label="share us on instagram" title="instagram">
                                 <i class="flaticon-instagram"></i>
                                 </a>
                                 <a href="https://www.linkedin.com/" target="_blank"
                                    aria-label="share us on linkedin" title="linkedin">
                                 <i class="flaticon-linkedin"></i>
                                 </a>
                              </div>
                           </div>
                           <a href="desk.php" class="arr"><i class="flaticon-share"></i></a>
                        </div>
                        <div class="content">
                           <!-- <span>Eco Builders</span>
                           <h4><a href="desk.php">Thomas Stewart
                              </a>
                           </h4>
                           <p><a href="tel:256-255-6579"><i class="icon-mobile"></i> Call: +256 255 6579</a></p>
                           <p>05 Properties</p> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-xl-3">
                     <div class="team__single" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                        <div class="thumb-wrapper">
                           <div class="thumb">
                              <!-- <img src="<?= base_url();?>public/assets/images/team/four.png" alt="Image"> -->
                           </div>
                           <div class="thumb-hover">
                              <div class="small-thumb">
                                 <a href="desk.php">
                                 <!-- <img src="<?= base_url();?>public/assets/images/team/four.png" alt="Image"> -->
                                 </a>
                              </div>
                              <p>Properties Agent</p>
                              <div class="social">
                                 <a href="https://www.facebook.com/" target="_blank"
                                    aria-label="share us on facebook" title="facebook">
                                 <i class="flaticon-facebook"></i>
                                 </a>
                                 <a href="https://www.twitter.com/" target="_blank"
                                    aria-label="share us on twitter" title="twitter">
                                 <i class="flaticon-twitter"></i>
                                 </a>
                                 <a href="https://www.instagram.com/" target="_blank"
                                    aria-label="share us on instagram" title="instagram">
                                 <i class="flaticon-instagram"></i>
                                 </a>
                                 <a href="https://www.linkedin.com/" target="_blank"
                                    aria-label="share us on linkedin" title="linkedin">
                                 <i class="flaticon-linkedin"></i>
                                 </a>
                              </div>
                           </div>
                           <a href="desk.php" class="arr"><i class="flaticon-share"></i></a>
                        </div>
                        <div class="content">
                           <!-- <span>EMark Street</span>
                           <h4><a href="desk.php">Cathy Decosta
                              </a>
                           </h4>
                           <p><a href="tel:256-255-6579"><i class="icon-mobile"></i> Call: +256 255 6579</a></p>
                           <p>22 Properties</p> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-xl-3">
                     <div class="team__single" data-aos="fade-up" data-aos-duration="1200">
                        <div class="thumb-wrapper">
                           <div class="thumb">
                              <!-- <img src="<?= base_url();?>public/assets/images/team/five.png" alt="Image"> -->
                           </div>
                           <div class="thumb-hover">
                              <div class="small-thumb">
                                 <a href="desk.php">
                                 <!-- <img src="<?= base_url();?>public/assets/images/team/five.png" alt="Image"> -->
                                 </a>
                              </div>
                              <p>Properties Agent</p>
                              <div class="social">
                                 <a href="https://www.facebook.com/" target="_blank"
                                    aria-label="share us on facebook" title="facebook">
                                 <i class="flaticon-facebook"></i>
                                 </a>
                                 <a href="https://www.twitter.com/" target="_blank"
                                    aria-label="share us on twitter" title="twitter">
                                 <i class="flaticon-twitter"></i>
                                 </a>
                                 <a href="https://www.instagram.com/" target="_blank"
                                    aria-label="share us on instagram" title="instagram">
                                 <i class="flaticon-instagram"></i>
                                 </a>
                                 <a href="https://www.linkedin.com/" target="_blank"
                                    aria-label="share us on linkedin" title="linkedin">
                                 <i class="flaticon-linkedin"></i>
                                 </a>
                              </div>
                           </div>
                           <a href="desk.php" class="arr"><i class="flaticon-share"></i></a>
                        </div>
                        <div class="content">
                           <!-- <span>Sunshine</span>
                           <h4><a href="desk.php">Andren Willium</a></h4>
                           <p><a href="tel:256-255-6579"><i class="icon-mobile"></i> Call: +256 255 6579</a></p>
                           <p>09 Properties</p> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-xl-3">
                     <div class="team__single" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="thumb-wrapper">
                           <div class="thumb">
                              <!-- <img src="<?= base_url();?>public/assets/images/team/six.png" alt="Image"> -->
                           </div>
                           <div class="thumb-hover">
                              <div class="small-thumb">
                                 <a href="desk.php">
                                 <img src="<?= base_url();?>public/assets/images/team/six.png" alt="Image">
                                 </a>
                              </div>
                              <p>Properties Agent</p>
                              <div class="social">
                                 <a href="https://www.facebook.com/" target="_blank"
                                    aria-label="share us on facebook" title="facebook">
                                 <i class="flaticon-facebook"></i>
                                 </a>
                                 <a href="https://www.twitter.com/" target="_blank"
                                    aria-label="share us on twitter" title="twitter">
                                 <i class="flaticon-twitter"></i>
                                 </a>
                                 <a href="https://www.instagram.com/" target="_blank"
                                    aria-label="share us on instagram" title="instagram">
                                 <i class="flaticon-instagram"></i>
                                 </a>
                                 <a href="https://www.linkedin.com/" target="_blank"
                                    aria-label="share us on linkedin" title="linkedin">
                                 <i class="flaticon-linkedin"></i>
                                 </a>
                              </div>
                           </div>
                           <a href="desk.php" class="arr"><i class="flaticon-share"></i></a>
                        </div>
                        <div class="content">
                           <!-- <span>Sweet Home</span>
                           <h4><a href="desk.php">Polly Matzinger
                              </a>
                           </h4>
                           <p><a href="tel:256-255-6579"><i class="icon-mobile"></i> Call: +256 255 6579</a></p>
                           <p>19 Properties</p> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-xl-3">
                     <div class="team__single" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                        <div class="thumb-wrapper">
                           <div class="thumb">
                              <!-- <img src="<?= base_url();?>public/assets/images/team/seven.png" alt="Image"> -->
                           </div>
                           <div class="thumb-hover">
                              <div class="small-thumb">
                                 <a href="desk.php">
                                 <!-- <img src="<?= base_url();?>public/assets/images/team/seven.png" alt="Image"> -->
                                 </a>
                              </div>
                              <p>Properties Agent</p>
                              <div class="social">
                                 <a href="https://www.facebook.com/" target="_blank"
                                    aria-label="share us on facebook" title="facebook">
                                 <i class="flaticon-facebook"></i>
                                 </a>
                                 <a href="https://www.twitter.com/" target="_blank"
                                    aria-label="share us on twitter" title="twitter">
                                 <i class="flaticon-twitter"></i>
                                 </a>
                                 <a href="https://www.instagram.com/" target="_blank"
                                    aria-label="share us on instagram" title="instagram">
                                 <i class="flaticon-instagram"></i>
                                 </a>
                                 <a href="https://www.linkedin.com/" target="_blank"
                                    aria-label="share us on linkedin" title="linkedin">
                                 <i class="flaticon-linkedin"></i>
                                 </a>
                              </div>
                           </div>
                           <a href="desk.php" class="arr"><i class="flaticon-share"></i></a>
                        </div>
                        <div class="content">
                           <!-- <span>Eco Builders</span>
                           <h4><a href="desk.php">Thomas Stewart
                              </a>
                           </h4>
                           <p><a href="tel:256-255-6579"><i class="icon-mobile"></i> Call: +256 255 6579</a></p>
                           <p>05 Properties</p> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-xl-3">
                     <div class="team__single" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                        <div class="thumb-wrapper">
                           <div class="thumb">
                              <!-- <img src="<?= base_url();?>public/assets/images/team/eight.png" alt="Image"> -->
                           </div>
                           <div class="thumb-hover">
                              <div class="small-thumb">
                                 <a href="desk.php">
                                 <!-- <img src="<?= base_url();?>public/assets/images/team/eight.png" alt="Image"> -->
                                 </a>
                              </div>
                              <p>Properties Agent</p>
                              <div class="social">
                                 <a href="https://www.facebook.com/" target="_blank"
                                    aria-label="share us on facebook" title="facebook">
                                 <i class="flaticon-facebook"></i>
                                 </a>
                                 <a href="https://www.twitter.com/" target="_blank"
                                    aria-label="share us on twitter" title="twitter">
                                 <i class="flaticon-twitter"></i>
                                 </a>
                                 <a href="https://www.instagram.com/" target="_blank"
                                    aria-label="share us on instagram" title="instagram">
                                 <i class="flaticon-instagram"></i>
                                 </a>
                                 <a href="https://www.linkedin.com/" target="_blank"
                                    aria-label="share us on linkedin" title="linkedin">
                                 <i class="flaticon-linkedin"></i>
                                 </a>
                              </div>
                           </div>
                           <a href="desk.php" class="arr"><i class="flaticon-share"></i></a>
                        </div>
                        <div class="content">
                           <!-- <span>EMark Street</span>
                           <h4><a href="desk.php">Cathy Decosta
                              </a>
                           </h4>
                           <p><a href="tel:256-255-6579"><i class="icon-mobile"></i> Call: +256 255 6579</a></p>
                           <p>22 Properties</p> -->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- <div class="row">
                  <div class="col-12">
                     <div class="team-main-pagination" data-aos="fade-up" data-aos-duration="1200">
                        <ul class="pagination blog-pagination">
                           <li>
                              <button>
                              <i class="fa-solid fa-arrow-left"></i>
                              </button>
                           </li>
                           <li>
                              <a href="about.php">1</a>
                           </li>
                           <li>
                              <a href="about.php" class="active">2</a>
                           </li>
                           <li>
                              <a href="about.php">3</a>
                           </li>
                           <li>
                              <button>
                              <i class="fa-solid fa-arrow-right"></i>
                              </button>
                           </li>
                        </ul> -->
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / team section end ==== -->
         <!-- ==== property type section start ==== -->
         <!-- <section class="property-type" data-background="<?= base_url();?>public/assets/images/property/slider-bg.png">
            <div class="container">
               <div class="row align-items-center vertical-column-gap-lg">
                  <div class="col-12 col-xl-8">
                     <div class="section__header">
                        <span>Property Type</span>
                        <h2>Let's Explore by Property Type</h2>
                        <div class="icon-thumb">
                           <div class="icon-thumb-single">
                              <span></span>
                              <span></span>
                           </div>
                           <img src="<?= base_url();?>public/assets/images/sub-icon.png" alt="Image" class="filter-img">
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-xl-4">
                     <div class="slider-navigation-two justify-content-start justify-content-xl-end ">
                        <button type="button" aria-label="prev slide" title="prev slide"
                           class="prev-property prev-slide">
                        <i class="fa-solid fa-angles-left"></i><span>Prev</span>
                        </button>
                        <button type="button" aria-label="next slide" title="next slide"
                           class="next-property next-slide active">
                        <span>Next</span><i class="fa-solid fa-angles-right"></i>
                        </button>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="property-type-slider-wrapper">
                        <div class="property-type-slider swiper">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="property-type-item">
                                    <div class="thumb">
                                       <i class="flaticon-skyscrapers"></i>
                                    </div>
                                    <div class="content">
                                       <h5><a href="commercial.php
">Commercial</a></h5>
                                       <p>06 Listings</p>
                                    </div>
                                    <img src="<?= base_url();?>public/assets/images/property/item-bg.png" alt="Image" class="item-bg">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="property-type-item">
                                    <div class="thumb">
                                       <i class="flaticon-office"></i>
                                    </div>
                                    <div class="content">
                                       <h5><a href="commercial.php
">Restaurant</a></h5>
                                       <p>16 Listings</p>
                                    </div>
                                    <img src="<?= base_url();?>public/assets/images/property/item-bg.png" alt="Image" class="item-bg">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="property-type-item">
                                    <div class="thumb">
                                       <i class="flaticon-villa"></i>
                                    </div>
                                    <div class="content">
                                       <h5><a href="commercial.php
">Villas</a></h5>
                                       <p>12 Listings</p>
                                    </div>
                                    <img src="<?= base_url();?>public/assets/images/property/item-bg.png" alt="Image" class="item-bg">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="property-type-item">
                                    <div class="thumb">
                                       <i class="flaticon-house-3"></i>
                                    </div>
                                    <div class="content">
                                       <h5><a href="commercial.php
">Homes</a></h5>
                                       <p>26 Listings</p>
                                    </div>
                                    <img src="<?= base_url();?>public/assets/images/property/item-bg.png" alt="Image" class="item-bg">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="property-type-item">
                                    <div class="thumb">
                                       <i class="flaticon-villa-1"></i>
                                    </div>
                                    <div class="content">
                                       <h5><a href="commercial.php
">Offices</a></h5>
                                       <p>07 Listings</p>
                                    </div>
                                    <img src="<?= base_url();?>public/assets/images/property/item-bg.png" alt="Image" class="item-bg">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="property-type-item">
                                    <div class="thumb">
                                       <i class="flaticon-skyscrapers"></i>
                                    </div>
                                    <div class="content">
                                       <h5><a href="commercial.php
">Commercial</a></h5>
                                       <p>06 Listings</p>
                                    </div>
                                    <img src="<?= base_url();?>public/assets/images/property/item-bg.png" alt="Image" class="item-bg">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="property-type-item">
                                    <div class="thumb">
                                       <i class="flaticon-office"></i>
                                    </div>
                                    <div class="content">
                                       <h5><a href="commercial.php
">Restaurant</a></h5>
                                       <p>16 Listings</p>
                                    </div>
                                    <img src="<?= base_url();?>public/assets/images/property/item-bg.png" alt="Image" class="item-bg">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="property-type-item">
                                    <div class="thumb">
                                       <i class="flaticon-villa"></i>
                                    </div>
                                    <div class="content">
                                       <h5><a href="commercial.php
">Villas</a></h5>
                                       <p>12 Listings</p>
                                    </div>
                                    <img src="<?= base_url();?>public/assets/images/property/item-bg.png" alt="Image" class="item-bg">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="property-type-item">
                                    <div class="thumb">
                                       <i class="flaticon-house-3"></i>
                                    </div>
                                    <div class="content">
                                       <h5><a href="commercial.php
">Homes</a></h5>
                                       <p>26 Listings</p>
                                    </div>
                                    <img src="<?= base_url();?>public/assets/images/property/item-bg.png" alt="Image" class="item-bg">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="property-type-item">
                                    <div class="thumb">
                                       <i class="flaticon-villa-1"></i>
                                    </div>
                                    <div class="content">
                                       <h5><a href="commercial.php
">Offices</a></h5>
                                       <p>07 Listings</p>
                                    </div>
                                    <img src="<?= base_url();?>public/assets/images/property/item-bg.png" alt="Image" class="item-bg">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section> -->
         <!-- ==== / property type section end ==== -->
         <!-- ==== footer start ==== -->
        <!-- ==== / team section end ==== -->
   <!-- ==== blog section start ==== -->
   <!-- <section class="blog" data-background="<?= base_url();?>public/assets/images/blog/blog-bg.png">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-12 col-xl-5">
               <div class="section__header text-center">
                  <span>Our Latest Blog</span>
                  <h2 class="title-animation">Latest News & Stories</h2>
                  <div class="icon-thumb justify-content-center">
                     <div class="icon-thumb-single">
                        <span></span>
                        <span></span>
                     </div>
                     <img src="<?= base_url();?>public/assets/images/sub-icon.png" alt="Image" class="filter-img">
                     <div class="icon-thumb-single">
                        <span></span>
                        <span></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row vertical-column-gap">
            <div class="col-12 col-md-6 col-xl-4">
               <div class="blog__single" data-aos="fade-up" data-aos-duration="1200">
                  <div class="thumb">
                     <a href="blog-details.php">
                        <img src="<?= base_url();?>public/assets/images/blog/one.png" alt="Image">
                     </a>
                  </div>
                  <div class="content">
                     <div class="blog-meta">
                        <p><i class="flaticon-person"></i>Robert Fox</p>
                        <p><i class="flaticon-calendar"></i>22 / 08 / 2024</p>
                     </div>
                     <h4><a href="blog-details.php">Including Animation in
                           Your Design System</a>
                     </h4>
                     <a href="blog-details.php" class="cta">Read More</a>
                  </div>
               </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
               <div class="blog__single" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                  <div class="thumb">
                     <a href="blog-details.php">
                        <img src="<?= base_url();?>public/assets/images/blog/two.png" alt="Image">
                     </a>
                  </div>
                  <div class="content">
                     <div class="blog-meta">
                        <p><i class="flaticon-person"></i>Robert Fox</p>
                        <p><i class="flaticon-calendar"></i>22 / 08 / 2024</p>
                     </div>
                     <h4><a href="blog-details.php">Some Easy Way To Buy
                           A Small Apartment</a>
                     </h4>
                     <a href="blog-details.php" class="cta">Read More</a>
                  </div>
               </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
               <div class="blog__single" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                  <div class="thumb">
                     <a href="blog-details.php">
                        <img src="<?= base_url();?>public/assets/images/blog/three.png" alt="Image">
                     </a>
                  </div>
                  <div class="content">
                     <div class="blog-meta">
                        <p><i class="flaticon-person"></i>Robert Fox</p>
                        <p><i class="flaticon-calendar"></i>22 / 08 / 2024</p>
                     </div>
                     <h4><a href="blog-details.php">Modern Apartment
                           Adjacent to CEO Park</a>
                     </h4>
                     <a href="blog-details.php" class="cta">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!-- ==== / blog section end ==== -->
   <!-- ==== partner slider start ==== -->
   <!-- <div class="partner">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="partner-slider swiper">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="partner-single">
                           <a href="commercial.php
">
                              <img src="<?= base_url();?>public/assets/images/partners/one.png" alt="Image" class="filter-black">
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="partner-single">
                           <a href="commercial.php
">
                              <img src="<?= base_url();?>public/assets/images/partners/two.png" alt="Image" class="filter-black">
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="partner-single">
                           <a href="commercial.php
">
                              <img src="<?= base_url();?>public/assets/images/partners/three.png" alt="Image" class="filter-black">
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="partner-single">
                           <a href="commercial.php
">
                              <img src="<?= base_url();?>public/assets/images/partners/four.png" alt="Image" class="filter-black">
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="partner-single">
                           <a href="commercial.php
">
                              <img src="<?= base_url();?>public/assets/images/partners/five.png" alt="Image" class="filter-black">
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="partner-single">
                           <a href="commercial.php
">
                              <img src="<?= base_url();?>public/assets/images/partners/one.png" alt="Image" class="filter-black">
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="partner-single">
                           <a href="commercial.php
">
                              <img src="<?= base_url();?>public/assets/images/partners/two.png" alt="Image" class="filter-black">
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="partner-single">
                           <a href="commercial.php
">
                              <img src="<?= base_url();?>public/assets/images/partners/three.png" alt="Image" class="filter-black">
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="partner-single">
                           <a href="commercial.php
">
                              <img src="<?= base_url();?>public/assets/images/partners/four.png" alt="Image" class="filter-black">
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="partner-single">
                           <a href="commercial.php
">
                              <img src="<?= base_url();?>public/assets/images/partners/five.png" alt="Image" class="filter-black">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> -->
   <!-- ==== / partner slider end ==== -->
   <!-- ==== footer start ==== -->
   <?php echo $this->endsection();?> 
   