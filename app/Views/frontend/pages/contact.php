<?php  echo $this->extend('frontend/Common/template');?>
<?php echo $this->section('content');?>
         <!-- ==== / header end ==== -->
         <!-- ==== banner start ==== -->
         <section class="common-banner" data-background="<?= base_url();?>public/assets/images/background/breadcrumb-bg.png">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="common-banner__inner">
                        <h2 class="title-animation">Contact Us</h2>
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item">
                                 <a href="index.php">Home</a>
                              </li>
                              <li class="breadcrumb-item active" aria-current="page">
                                 Contact Us
                              </li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / banner end ==== -->
         <!-- ==== contact section start ==== -->
         <section class="contact">
            <div class="container">
               <div class="row vertical-column-gap-lg">
                  <div class="col-12 col-lg-5">
                     <div class="contact__content">
                        <div class="contact__content-single">
                           <h2 class="title-animation">Representative Office</h2>
                           <ul>
                              <li><a href="https://www.google.com/maps/place/Kentucky,+USA/@37.8172108,-87.087054,8z/data=!3m1!4b1!4m6!3m5!1s0x8842734c8b1953c9:0x771f6f4ec5ccdffc!8m2!3d37.8393332!4d-84.2700179!16zL20vMDQ5OHk?entry=ttu"
                                 target="_blank">C 702, IThum Tower
Sector 62, Noida, Uttar Pradesh, 201309
                                 </a>
                              </li>
                             
                              <li><a href="cybercell@runpaisa.com

                                 ">cybercell@runpaisa.com


                                 </a>
                              </li>
                           </ul>
                        </div>
                        <div class="contact__content-single">
                           <h2 class="title-animation">Business Contacts
                           </h2>
                           <ul>
                              
                              <li><a href="support@runpaisa.com
                                 ">support@runpaisa.com
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <div class="contact__content-single">
                           <h2 class="title-animation">Customer Care
                           </h2>
                           <ul>
                              <li><a href="tel:+91 7838718428">+91 7838718428
                                 </a>
                              </li>
                              <li><a href="support@runpaisa.com
                                 ">support@runpaisa.com
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <div class="contact__social contact__content-single">
                           <h4>Social Media:</h4>
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
                  <div class="col-12 col-lg-7">
                     <div class="contact__map" data-aos="zoom-in" data-aos-duration="1200">
                        <iframe<div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=ithum%20tower%20sector%2062%20noida%20C%20702%20201309+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps trackers</a></iframe></div>
                           ></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / contact section end ==== -->
         <!-- ==== contact form section start ==== -->
         <section class="contact-form">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-12 col-xl-5">
                     
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-12 col-xl-10">
                     <div class="contact__form">
                           <form action="<?= base_url('contactusdata'); ?>" method="POST">
                                 <div class="input-group" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="input-single">
                                          <input type="text" name="name" id="contactName" placeholder="Name" value="<?= set_value('name'); ?>">
                                         <?= isset($validation) ? $validation->getError('name') : '' ?>
                                    </div>
                                    <div class="input-single">
                                          <input type="email" name="email" id="contactEmail" placeholder="Email" value="<?= set_value('email'); ?>">
                                          <?= isset($validation) ? $validation->getError('email') : '' ?>
                                    </div>
                                  </div>
                                 <div class="input-group" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                                    <div class="input-single">
                                          <input type="tel" name="mobile_number" id="contactNumber" placeholder="Mobile Number" value="<?= set_value('mobile_number'); ?>">
                                          <?= isset($validation) ? $validation->getError('mobile_number') : '' ?>
                                    </div>
                                 <div class="input-single">
                                    <input type="text" name="subject" id="contactSubject" placeholder="Subject" value="<?= set_value('subject'); ?>">
                                    <?= isset($validation) ? $validation->getError('subject') : '' ?>
                                 </div>
                                 </div>
                                 <div class="input-group" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                                    <textarea name="message" id="contactMessage" placeholder="Message"><?= set_value('message'); ?></textarea>
                                    <?= isset($validation) ? $validation->getError('message') : '' ?>
                                 </div>
                                 <div class="text-center">
                                 <button type="submit" class="btn--primary">Send Message</button>
                              </div>
                          </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      
   <?php echo $this->endsection();?> 
   