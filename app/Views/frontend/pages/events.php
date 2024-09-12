<?php  echo $this->extend('frontend/Common/template');?>
<?php echo $this->section('content');?>
         <!-- ==== / header end ==== -->
         <!-- ==== banner start ==== -->
         <section class="common-banner" data-background="<?= base_url();?>public/assets/images/background/breadcrumb-bg.png">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="common-banner__inner">
                        <h2 class="title-animation">News and Events</h2>
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item">
                                 <a href="index.php">Home</a>
                              </li>
                              <li class="breadcrumb-item active" aria-current="page">
                                 News and Events
                              </li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / banner end ==== -->
         <!-- ==== service section start ==== -->
         <section class="service service-main">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-12 col-xl-5">
                     <div class="section__header text-center">

                        <h2 class="title-animation">News and Events</h2>
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
               <!-- <div class="row vertical-column-gap-lg justify-content-center">
                  <div class="col-12 col-lg-6 col-xl-4">
                     <div class="service__single" data-aos="fade-up" data-aos-duration="1200">
                        <div class="thumb">
                           <i class="flaticon-buy-home"></i>
                        </div>
                        <div class="content">
                           <h4><a href="commercial.php
">Buy a Home</a></h4>
                           <p>over 1 million+ homes for sale available on
                              the website, we can match you with a house
                              you will want to call home.
                           </p>
                           <div class="cta">
                              <a href="commercial.php
" class="btn--primary">Find Home</a>
                           </div>
                        </div>
                        <div class="bg-thumb">
                           <img src="<?= base_url();?>public/assets/images/background/service-bg-sm.png" alt="Image">
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-6 col-xl-4">
                     <div class="service__single" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="thumb">
                           <i class="flaticon-rent"></i>
                        </div>
                        <div class="content">
                           <h4><a href="commercial.php
">Rent a Home</a></h4>
                           <p>over 1 million+ homes for sale available on
                              the website, we can match you with a house
                              you will want to call home.
                           </p>
                           <div class="cta">
                              <a href="commercial.php
" class="btn--primary">Find Home</a>
                           </div>
                        </div>
                        <div class="bg-thumb">
                           <img src="<?= base_url();?>public/assets/images/background/service-bg-sm.png" alt="Image">
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-6 col-xl-4">
                     <div class="service__single" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                        <div class="thumb">
                           <i class="flaticon-deal"></i>
                        </div>
                        <div class="content">
                           <h4><a href="commercial.php
">Sell a Home</a></h4>
                           <p>over 1 million+ homes for sale available on
                              the website, we can match you with a house
                              you will want to call home.
                           </p>
                           <div class="cta">
                              <a href="commercial.php
" class="btn--primary">Find Home</a>
                           </div>
                        </div>
                        <div class="bg-thumb">
                           <img src="<?= base_url();?>public/assets/images/background/service-bg-sm.png" alt="Image">
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-6 col-xl-4">
                     <div class="service__single" data-aos="fade-up" data-aos-duration="1200">
                        <div class="thumb">
                           <i class="flaticon-rent-1"></i>
                        </div>
                        <div class="content">
                           <h4><a href="commercial.php
">Property Management</a></h4>
                           <p>over 1 million+ homes for sale available on
                              the website, we can match you with a house
                              you will want to call home.
                           </p>
                           <div class="cta">
                              <a href="commercial.php
" class="btn--primary">Find Home</a>
                           </div>
                        </div>
                        <div class="bg-thumb">
                           <img src="<?= base_url();?>public/assets/images/background/service-bg-sm.png" alt="Image">
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-6 col-xl-4">
                     <div class="service__single" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="thumb">
                           <i class="flaticon-house-key"></i>
                        </div>
                        <div class="content">
                           <h4><a href="commercial.php
">Mortage Service</a></h4>
                           <p>over 1 million+ homes for sale available on
                              the website, we can match you with a house
                              you will want to call home.
                           </p>
                           <div class="cta">
                              <a href="commercial.php
" class="btn--primary">Find Home</a>
                           </div>
                        </div>
                        <div class="bg-thumb">
                           <img src="<?= base_url();?>public/assets/images/background/service-bg-sm.png" alt="Image">
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-6 col-xl-4">
                     <div class="service__single" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                        <div class="thumb">
                           <i class="flaticon-realtor"></i>
                        </div>
                        <div class="content">
                           <h4><a href="commercial.php
">Consulting Service</a></h4>
                           <p>over 1 million+ homes for sale available on
                              the website, we can match you with a house
                              you will want to call home.
                           </p>
                           <div class="cta">
                              <a href="commercial.php
" class="btn--primary">Find Home</a>
                           </div>
                        </div>
                        <div class="bg-thumb">
                           <img src="<?= base_url();?>public/assets/images/background/service-bg-sm.png" alt="Image">
                        </div>
                     </div>
                  </div>
               </div> -->
            </div>
         </section>
         <!-- ==== / service section end ==== -->
         <!-- ==== property type section start ==== -->
         <!-- <section class="property-type" data-background="<?= base_url();?>public/assets/images/property/slider-bg.png">
            <div class="container">
               <div class="row align-items-center vertical-column-gap-lg">
                  <div class="col-12 col-xl-8">
                     <div class="section__header">
                        <span>Property Type</span>
                        <h2 class="title-animation">Let's Explore by Property Type</h2>
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
   