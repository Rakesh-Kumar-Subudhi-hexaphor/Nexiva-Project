   <!-- Footer area start -->
   <footer>
       <div class="bd-ud-footer-wrapper bd-ud-overlay-1"
           data-background="{{ asset('frontend/assets/img/bg/ud-footer-bg.png') }}">
           <div class="bd-ud-footer-top pt-120 pb-10">
               <div class="container">
                   <div class="row">
                       <div class="col-xxl-3 col-xl-3 col-md-6">
                           <div class="bd-ud-footer__widget bd-ud-footer__widget1 mb-60">
                               <div class="bd-ud-footer__title">
                                   <h4>About Company</h4>
                               </div>
                               <div class="bd-ud-footer-content">
                                   <p class="mb-35">We are a technology-driven IT company delivering reliable services,
                                       strategic consulting,
                                       and
                                       scalable digital products. Our approach combines deep technical expertise with
                                       business
                                       understanding to create long-term value for our clients.</p>
                               </div>
                               <div class="bd-ud-footer-contact">
                                   <ul>
                                       <li><a href="tel:91036259003"><i class="fa-solid fa-phone"></i> +91 036 259
                                               003</a></li>
                                       <li><a href=""><i class="fa-solid fa-envelope"></i> <span
                                                   class="__cf_email__"
                                                   data-cfemail="620b0c040d22071a030f120e074c010d0f">[email&#160;protected]</span></a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>

                       <div class="col-xxl-2 col-xl-3 col-md-6">
                           <div class="bd-ud-footer__widget bd-ud-footer__widget2 mb-60">
                               <div class="bd-ud-footer__title">
                                   <h4>Our Services</h4>
                               </div>
                               <div class="bd-ud-footer-link">
                                   @php
                                       $policies = \App\Models\Policy::all();
                                       $services = \App\Models\Service::latest()->take(5)->get();
                                   @endphp
                                   <ul>
                                       @foreach ($services as $service)
                                           <li><a
                                                   href="{{ route('service.detail', $service->slug) }}">{{ $service->title }}</a>
                                           </li>
                                       @endforeach
                                   </ul>
                               </div>

                               <div class="legal bd-ud-footer__title mt-20">
                                   <h4>Legal</h4>
                               </div>
                               <div class="bd-ud-footer-link">
                                   <ul>
                                       @foreach ($policies as $policy)
                                           <li><a href="{{ route('policy', $policy->slug) }}">{{ $policy->title }}</a>
                                           </li>
                                       @endforeach
                                   </ul>
                               </div>
                           </div>
                       </div>



                       <div class="col-xxl-2 col-xl-2 col-md-4">
                           <div class="bd-ud-footer__widget bd-ud-footer__widget3 mb-60">
                               <div class="bd-ud-footer__title">
                                   <h4>Quick Links</h4>
                               </div>

                               <div class="bd-ud-footer-link">
                                   <ul>
                                       <li><a href="{{ route('service') }}">Our Services</a></li>
                                       <li><a href="{{ route('team') }}">Team Members</a></li>
                                       <li><a href="{{ route('blog') }}">Latest Blog</a></li>
                                       <li><a href="{{ route('solution') }}">Solutions</a></li>
                                       <li><a href="{{ route('casestudy') }}">Case Studies</a></li>
                                       <li><a href="{{ route('industry-serve') }}">Industry We Serve</a></li>

                                       <!-- Policy Links — directly visible -->

                                   </ul>
                               </div>




                           </div>
                       </div>


                       <div class="col-xxl-4 col-xl-4 col-md-7">
                           <div class="bd-ud-footer__widget bd-ud-footer__widget4 mb-60">
                               <div class="bd-ud-email-subscribe ud-white-bg bd-ud-email--120">
                                   <div class="bd-ud-footer-logo mb-30">
                                       <a href="index.html"><img
                                               src="{{ asset('frontend/assets/img/logo/logobg2remove.png') }}"
                                               alt="logo"
                                               style="max-height: 60px; width: auto; object-fit: contain;">></a>
                                   </div>
                                   <p class="mb-30">Subscribe Our Newsletter To Get Latest Update And News</p>
                                   <form action="{{ route('newsletter.subscribe') }}" method="POST"
                                       class="bd-ud-subscribe-form">
                                       @csrf
                                       <div class="bu-ud-input">
                                           <input type="text" name="email" placeholder="Enter mail">
                                           <i class="fa-light fa-envelope"></i>
                                       </div>
                                       <button type="submit">Subscribe Now</button>
                                   </form>
                                   <div class="bd-ud-footer-social">
                                       <a href="#">Facebook</a>
                                       <a href="#">Instagram</a>
                                       <a href="#">Twitter</a>
                                       <a href="#">YouTube</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="bd-ud-footer-bottom p-relative pt-30 pb-20">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-6">
                           <div class="bd-ud-copy-text bd-ud-gth">
                               <p>Copyright@2026 Nexiva. All rights reserved.</p>
                           </div>
                       </div>
                       <div class="col-lg-6">
                           <div class="bd-ud-footer-menu bd-ud-gth text-lg-end mb-15">
                               <nav>
                                   <ul>
                                       <li><a href="{{ route('faq') }}">FAQ</a></li>
                                       <li><a href="{{ route('job') }}">CAREERS</a></li>
                                       <li><a href="{{ route('contact') }}">CONTACT</a></li>
                                   </ul>
                               </nav>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </footer>
