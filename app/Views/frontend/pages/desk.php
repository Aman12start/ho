<?php  echo $this->extend('frontend/Common/template');?>
<?php echo $this->section('content');?>
         <!-- ==== / header end ==== -->
         <!-- ==== banner start ==== -->
         <section class="common-banner" data-background="<?= base_url();?>public/assets/images/background/breadcrumb-bg.png">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="common-banner__inner">
                        <h2 class="title-animation">From MD's Desk</h2>
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item">
                                 <a href="index.php">Home</a>
                              </li>
                              <li class="breadcrumb-item active" aria-current="page">
                                 MD's Desk
                              </li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / banner end ==== -->
         <!-- ==== team details section start ==== -->
         <section class="team-details">
            <div class="container">
               <div class="row vertical-column-gap-lg">
                  <div class="col-12 col-lg-5">
                     <div class="team-details__thumb" data-aos="fade-up" data-aos-duration="1200">
                        <img src="<?= base_url();?>public/assets/images/team/two.png" alt="Image">
                     </div>
                  </div>
                  <div class="col-12 col-lg-7">
                     <div class="team-details__content">
                        <!-- <div class="content">
                           <span>Sweet Home</span>
                           <h4 class="title-animation">Polly Matzinger
                           </h4>
                           <p><a href="tel:256-255-6579"><i class="icon-mobile"></i> Call: +256 255 6579</a></p>
                           <p>19 Properties</p>
                        </div> -->
                        <div class="about-me">
                           <div class="about-me__header">
                              <h4 class="title-animation">From MD's Desk</h4>
                           </div>
                           <div class="about-me__content" data-aos="fade-up" data-aos-duration="1200">
                            
                                <p >                 
                                    Olbuiz Homes is a trusted name in Indian Real Estate market, known for its exceptional commitment values which are showcased in our landmark projects in the developing National Capital Region (NCR).
                                    </p>
                                    <p>
                                    With a remarkable history of accomplishments spanning many years, Real State has made a name for itself among customers and industry peers owing to its focus on quality, best standards and timely delivery of projects. Guided by the motto to provide the ordinary masses the experience of exceptional living standards in each of their projects, olbuiz Homes has endeavoured to give their buyers more than their expectations without any additional financial burden. Our commitment to excellence inspires us to give our customers all that which meets their requirements and is only the very best. It is what has made Olbuiz Homes  a trusted and much respected name over the years.
                                    </p>
                                    <p>
                                    We are sanguine that we will continue to take forward this rich legacy into the future with the conviction and support of our peers and customers.
                                    </p>
                                    <p>
                                    Mr. Deepak Verma
                                    (MD)
                                 </p>
                           </div>
                        </div>
                        <div class="team-social" data-aos="fade-up" data-aos-duration="1200">
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
                        <div class="team-skill" data-aos="fade-up" data-aos-duration="1200">
                           <div class="team-skill__header">
                           
                           </div>
                        </div>
                        <div class="team-contact">
                           <div class="team-contact__header">
                              <h4 class="title-animation">Contact With Us Now </h4>
                           </div>
                           <div class="team-contact__form" data-aos="fade-up" data-aos-duration="1200">
                              <form action="#" method="post">
                                 <div class="input-group">
                                    <textarea name="team-contact-message" id="teamContactMessage"
                                       placeholder="Write Your Message"></textarea>
                                 </div>
                                 <div class="input-group">
                                    <div class="input-single">
                                       <input type="tel" name="team-author-name" id="teamAuthorName"
                                          placeholder="Name">
                                    </div>
                                    <div class="input-single">
                                       <input type="email" name="team-author-email" id="teamAuthorEmail"
                                          placeholder="Email">
                                    </div>
                                 </div>
                                 <div class="input-group-checkbox">
                                    <input type="checkbox" name="save-info" id="saveInfo">
                                    <label for="saveInfo"> Save my name, email, and website in this browser for
                                    the next time I comment.</label>
                                 </div>
                                 <div class="cta">
                                    <button type="submit" class="btn--primary">Send Message</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
       
   <?php echo $this->endsection();?> 
   