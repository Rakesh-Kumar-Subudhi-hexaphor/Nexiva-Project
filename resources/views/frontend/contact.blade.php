<x-frontend.app-layout>
      @php
      $pageId=5;
   @endphp
       <main>
   <x-frontend.banner :pageId="$pageId" title="Contact Us" />
      <!-- Updated Breadcrumb area end -->
      <!-- Contact area start -->
      <section class="contact__area pt-40 pb-60">
         <div class="container">
            <div class="row wow fadeInUp" data-wow-delay=".3s">
               <div class="col-lg-6">
                  <div class="contact__info-wrapper mb-30">
                     <div class="section__title-one mb-20">
                        <span>// Contact Us</span>
                        <h2>Get in Touch</h2>
                     </div>
                     <div class="contact__info-item">
                        <div class="contact__info-icon">
                           <span style="font-size: 24px; color: #0E84E1;">📞</span>
                        </div>
                        <div class="contact__info-content">
                           <span>Call Anytime</span>
                           <h5><a href="tel:926668880000">92 666 888 0000</a></h5>
                        </div>
                     </div>

                     <div class="contact__info-item">
                        <div class="contact__info-icon">
                           <span style="font-size: 24px; color: #0E84E1;">✉️</span>
                        </div>
                        <div class="contact__info-content">
                           <span>Send Email</span>
                           <h5><a href="mailto:needhelp@company.com">needhelp@company.com</a></h5>
                        </div>
                     </div>

                     <div class="contact__info-item">
                        <div class="contact__info-icon">
                           <span style="font-size: 24px; color: #0E84E1;">📍</span>
                        </div>
                        <div class="contact__info-content">
                           <span>Visit Office</span>
                           <h5><a target="_blank" href="https://www.google.com/maps">86 Road Broklyn Street, New
                                 York</a></h5>
                        </div>
                     </div>

                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="contact__form bd-ud-contact-form mb-60">
                     <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="contact__from-input">
                                 <input type="text" placeholder="Name" name="name" required>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="contact__from-input">
                                 <input type="email" placeholder="Email" name="email" required>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="contact__from-input">
                                 <input type="number" placeholder="Number" name="phone" required>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="contact__from-input">
                                 <input type="text" placeholder="Subject" name="subject">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="contact__from-input">
                                 <textarea name="message" id="Message" placeholder="Write Massage" required></textarea>
                              </div>
                           </div>
                           <div class="col-12">
                              <button class="comment__btn e-btn" type="submit">Send a Massage</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Contact area end -->

      <!-- Cta area start  -->
      <section class="cta__area">
         <div class="container">
            <div class="contact__cta-wrapper section-bg">
               <div class="row align-items-center">
                  <div class="col-xl-9">
                     <div class="contact__cta-content mb-30">
                        <div class="cta-contact__info">
                           <div class="cta__number-icon">
                              <img src="{{ asset('frontend/assets/img/about/icon/about-phn.png') }}" alt="">
                           </div>
                           <div class="cta__number-text">
                              <span>Get a Free Consultation</span>
                              <h3><a href="tel:6668880000">666 888 0000</a></h3>
                           </div>
                        </div>
                        <div class="cta__description">
                           <p>Lorem ipsum dolor sit amet nsectetur
                              cing elituspe ndisse suscipit.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3">
                     <div class="cta-btn text-xl-end text-start mb-30">
                        <a class="it__btn-2" href="#">Discover more<span><i
                                 class="fa-solid fa-angle-right"></i></span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Cta area start  -->

      <!-- Google map area start -->
      <div class="google__map-area">
         <div class="google__map-inner ">
            <iframe
               src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d58406.46569369821!2d90.41868754902342!3d23.804225084757515!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1662012770299!5m2!1sen!2sbd"></iframe>
         </div>
      </div>
      <!-- Google map area end -->

   </main>
</x-frontend.app-layout>
