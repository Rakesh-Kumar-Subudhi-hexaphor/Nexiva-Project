<x-frontend.app-layout>
       @php
      $pageId=1;
   @endphp
    <main>
        <!-- Updated banner area start  -->
        <div class="hero-area-three slider-trasition">
            <div class="hero-active-three swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($sliders as $slider)
                        <div class="swiper-slide">
                            <div class="et-hero-slide-1 et-slider-height position-relative d-flex align-items-center">
                                <div class="has-image position-absolute" data-background="{{ asset($slider->image) }}">
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <div class="et-hero__content">
                                                <h1 class="et-hero__subtitle mb-20">


                                                </h1>
                                                <h2 class="et-hero__title mb-35">
                                                    {{ $slider->title }}
                                                </h2>
                                                <p class="et-hero__description mb-55">
                                                    {{ $slider->short_desc }}
                                                </p>
                                                <div class="et-btn d-flex align-items-center">
                                                    <div>
                                                        <a class="et-hero__btn mr-25 bdevs-el-btn"
                                                            href="{{ route('contact') }}">Talk
                                                            To Our Expert
                                                            <span><i class="bdevs-btn-icon fas fa-angle-right"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                    <div>
                                                        <a class="et-hero__btn mr-25 bdevs-el-btn"
                                                            href="{{ route('solution') }}">Explore Our
                                                            Solutions
                                                            <span><i class="bdevs-btn-icon fas fa-angle-right"
                                                                    aria-hidden="true"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!-- <div class="et-slider-pagination">
               <div class="slider-paginations"></div>
            </div> -->
            </div>
        </div>

        <!-- Trust Signals Section Start -->
        <section class="trust-signals-area">
            <div class="container">

                <!-- Title -->
                <div class="trust-title text-center">
                    <h3>Trusted by Startups & Enterprises Worldwide</h3>
                    <p>Delivering secure, scalable and certified digital solutions.</p>
                </div>

                <!-- ✅ Brand Carousel -->
                <div class="swiper-container brand__actiive">
                    <div class="swiper-wrapper">
                        @foreach ($collaborators as $collaborater)
                            <div class="swiper-slide brand-item">
                                <img src="{{ asset($collaborater->logo) }}" alt="{{ $collaborater->name }}">
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section>




        <!-- Trust Signals Section End -->


        <!-- update hero area three end -->
        <!-- About area start -->
        <section class="about__area pt-50">
            <div class="container">
                <div class="row align-items-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-xl-6 col-lg-6">
                        <div class="about__left-one p-relative mb-60">
                            <div class="about__left-thumb">
                                <img src="{{asset('frontend/assets/img/about/about-01.jpg')}}" alt="about-img">
                            </div>
                            <div class="about__experience-shape">
                                <div class="about__experience-content">
                                    <h2 class="counter">30</h2>
                                    <span>Year Experience</span>
                                    <div class="about__experience-shape-icon">
                                        <i class="fal fa-trophy-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="about__right-content mb-60">
                            <div class="section__title-one mb-35">
                                <span>// About Us</span>
                                <h2>Your Strategic Technology Partner</h2>
                            </div>
                            <!-- <div class="about__description-text">
                        <p>We are a technology-driven IT company delivering reliable services, strategic consulting, and
                           scalable digital products. Our approach combines deep technical expertise with business
                           understanding to create long-term value for our clients.</p>
                     </div> -->
                            <div class="about__quote-content mb-40">
                                <h3>We are a technology-driven IT company delivering reliable services, strategic
                                    consulting,
                                    and
                                    scalable digital products. Our approach combines deep technical expertise with
                                    business
                                    understanding to create long-term value for our clients.</h3>
                                <div class="about__quote-author">
                                    <!-- <h4>Miranda Helson, <span>
                                 Head Of Idea</span>
                           </h4> -->
                                </div>
                            </div>
                            <div class="about__btn">
                                <a class="it__btn-3" href="about.html">learn more About Us<span><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About area end -->
        <!-- Counter area start -->
        <section class="counter__area z-index-11 include__bg">
            <div class="container">
                <div class="counter__bg-area include__bg pt-65 pb-35" data-background="{{asset('frontend/assets/img/bg/counter-bg.jpg')}}">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="counter__item text-center">
                                <div class="counter__item-number">
                                    <h2 class="counter">30</h2>
                                    <p>Year Experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="counter__item text-center">
                                <div class="counter__item-number">
                                    <h2 class="counter">696</h2>
                                    <p>Worldwide Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="counter__item text-center">
                                <div class="counter__item-number">
                                    <h2 class="counter">1200</h2>
                                    <p>Worldwide Captured</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="counter__item text-center">
                                <div class="counter__item-number">
                                    <h2 class="counter">5</h2>
                                    <span>+</span>
                                    <p>Masterclass Team</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter area end -->
        <!-- Service area start -->
        <div class="service__area-one section-bg pt-200 pb-50">
            <div class="container">

                <!-- Section Heading -->
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-lg-8 col-md-8">
                        <div class="section__title-one s-2 mb-50">
                            <span>// Our Services</span>
                            <h2>Our Core Offerings</h2>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <!-- <div class="col-lg-4 col-md-4">
                  <div class="service__btn mt-10 text-md-end d-none d-md-block">
                     <a class="it__btn-4" href="services.html">
                        <span>View All Services</span>
                        <i class="bdevs-btn-icon fas fa-angle-right"></i>
                     </a>
                  </div>
               </div>
            </div> -->

                    <div class="col-lg-4 col-md-4">
                        <div class="service__btn mt-10 text-md-end d-none d-md-block">
                            <a class="it__btn-4" href="{{ route('service') }}">
                                <span>View All Services</span>
                                <i class="bdevs-btn-icon fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service Cards -->
                <div class="row wow fadeInUp" data-wow-delay=".3s">

                    @foreach ($services as $service)
                        <div class="col-xl-4 col-md-6">
                            <div class="service__item-one mb-30">
                                <div class="service__item-wrapper">
                                    <div class="service__item-thumb">
                                        <img src="{{ asset($service->icon) }}" alt="" width="90px"
                                            height="90px">
                                    </div>
                                    <div class="service__item-content">
                                        <h3><a
                                                href="{{ route('service.detail', $service->slug) }}">{{ $service->title }}</a>
                                        </h3>
                                        <p>{{ $service->short_desc }}</p>
                                    </div>
                                    <div class="service__item-btn">
                                        <a class="service__btn1"
                                            href="{{ route('service.detail', $service->slug) }}">
                                            View Details →
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>



        <!-- Solutions & Products Section Start -->
        <section class="solutions-products-area pt-70 pb-90" style="background-color: #ffffff;">
            <div class="container">
                <!-- Section Heading -->
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-lg-12">
                        <div class="section__title-one s-2 text-center mb-50">
                            <span style="color: #0E84E1;">// SOLUTIONS & PRODUCTS</span>
                            <h2 style="color: #1a1a1a;">Solutions Built for Modern Businesses</h2>
                            <p class="mt-20" style="color: #666666;">Enterprise-grade solutions designed to drive
                                growth,
                                efficiency, and innovation</p>
                        </div>
                    </div>
                </div>

                <!-- Solutions Grid -->
                <div class="row wow fadeInUp" data-wow-delay=".5s">

                    @foreach ($solutions as $solution)
                        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                            <div class="solution__item enterprise-solution"
                                style="background: #f8f9fa; border: 1px solid #e9ecef;">
                                <div class="solution__icon-wrapper">
                                    <div class="solution__icon"
                                        style="background: linear-gradient(135deg, #0E84E1 0%, #3ba0ff 100%);">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="solution__number" style="color: #e9ecef;">

                                    </div>
                                </div>
                                <div class="solution__content">
                                    <h3 style="color: #1a1a1a;">{{ $solution->title }}</h3>
                                    <p style="color: #666666;">{{ $solution->short_desc }}</p>
                                    <ul class="solution__features">
                                        @foreach ($solution->key_point as $point)
                                            <li style="color: #555555;"><i class="fas fa-check"
                                                    style="color: #0E84E1;"></i>
                                                {{ $point }}
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- CTA Buttons -->
                <div class="row wow fadeInUp" data-wow-delay=".7s">
                    <div class="col-lg-12">
                        <div class="solutions-cta text-center mt-40">
                            <a class="solutions-btn solutions-btn-primary mr-20" href="{{ route('solution') }}"
                                style="background: #0E84E1; border-color: #0E84E1;">
                                <span>Explore Solutions</span>
                                <i class="bdevs-btn-icon fas fa-angle-right"></i>
                            </a>
                            <a class="solutions-btn solutions-btn-secondary" href="{{ route('contact') }}"
                                style="background: transparent; border-color: #0E84E1; color: #0E84E1;">
                                <span>Contact Us</span>
                                <i class="bdevs-btn-icon fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- skill-area start -->
        <!-- Speed area start -->
        <!-- <section class="speed-area include__bg grey-bg pt-120 pb-90" data-background="{{asset('frontend/assets/img/bg/speed-pattern.png')}}">
         <div class="container">
            <div class="row justify-content-center wow fadeInUp" data-wow-delay=".3s">
               <div class="section__title-one text-center mb-50">
                  <span>// Services //</span>
                  <h2>What we do here</h2>
               </div>
            </div>
            <div class="row justify-content-center wow fadeInUp" data-wow-delay=".3s">
               <div class="col-xl-12">
                  <div class="speed__input-wrapper">
                     <form action="#">
                        <div class="speed__input-item">
                           <div class="speed__input mb-30">
                              <input type="email" placeholder="Email address">
                              <i class="fa-solid fa-envelope-open"></i>
                           </div>
                           <div class="speed__input mb-30">
                              <input type="email" placeholder="Website name">
                              <i class="fa-brands fa-firefox-browser"></i>
                           </div>
                           <div class="cta-btn mb-30">
                              <a class="it__btn-2" href="service-details.html"><span>test speed</span><i
                                    class="bdevs-btn-icon fas fa-angle-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section> -->

        <!-- Industries We Serve Section Start -->
        <section class="industries-serve-area pt-25" style="background-color: #ffffff;">
            <div class="container">
                <!-- Section Heading -->
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-lg-12">
                        <div class="section__title-one s-2 text-center mb-50">
                            <span style="color: #0E84E1;">// INDUSTRIES WE SERVE</span>
                            <h2 style="color: #1a1a1a;">Industries We Serve</h2>
                            <p class="mt-20" style="color: #666666; max-width: 700px; margin: 0 auto;">
                                Delivering specialized technology solutions across diverse sectors with deep domain
                                expertise
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Industries Grid -->
                <div class="row wow fadeInUp" data-wow-delay=".5s">

                    @foreach ($industries as $industry)
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                            <div class="industry__card">
                                <div class="industry__card-inner">
                                    <!-- Front Side -->
                                    <div class="industry__card-front">
                                        <div class="industry__icon-wrapper">
                                            <div class="industry__icon"
                                                style="background: linear-gradient(135deg, #0E84E1 0%, #3ba0ff 100%);">
                                                <img src="{{ asset($industry->icon) }}" alt=""
                                                    width="40px" height="40px">
                                            </div>
                                        </div>
                                        <div class="industry__content">
                                            <h3 style="color: #1a1a1a;">{{ $industry->title }}</h3>
                                            <p style="color: #666666;">{{ $industry->short_desc }}</p>
                                            <div class="industry__features pb-5">
                                                @foreach ($industry->key_point as $point)
                                                    <span class="industry__feature-tag"
                                                        style="background: rgba(14, 132, 225, 0.1); color: #0E84E1;">
                                                        {{ $point }}
                                                    </span>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Back Side - Same structure with blue background -->
                                    <div class="industry__card-back">
                                        <div class="industry__icon-wrapper">
                                            <div class="industry__icon" style="background: rgba(255, 255, 255, 0.2);">
                                                <img src="{{ asset($industry->icon) }}" alt=""
                                                    width="40px" height="40px">
                                            </div>
                                        </div>
                                        <div class="industry__content">
                                            <h3 style="color: white;">{{ $industry->title }} Solutions</h3>
                                            <p style="color: rgba(255, 255, 255, 0.9);">{{ $industry->short_desc }}</p>


                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- CTA Button -->
                <div class="row wow fadeInUp" data-wow-delay=".7s">
                    <div class="col-lg-12">
                        <div class="industries-cta text-center">
                            <a class="industry-btn" href="{{ route('industry-serve') }}"
                                style="background: #0E84E1; border-color: #0E84E1;">
                                <span>View All Industries</span>
                                <i class="bdevs-btn-icon fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <!-- Why Choose Us Section Start -->
        <section class="why-choose-area pt-50 pb-25" style="background-color: #1F242C;">
            <div class="container">

                <!-- Section Heading -->
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-lg-12 ">
                        <div class="section__title-one s-2 text-center mb-60 ">
                            <span style="color: #0E84E1;">// WHY CHOOSE US</span>
                            <h2 style="color: #ffffff;">Why Choose Nexiva Technologies</h2>
                            <p class="mt-15" style="color: #bab8b8; max-width: 700px; margin: 0 auto;">
                                We deliver secure, scalable, and business-driven technology solutions with complete
                                transparency.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Choose Grid -->
                <div class="row wow fadeInUp" data-wow-delay=".5s">

                    <!-- Point 1 -->
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="choose__item">
                            <div class="choose__icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <h3>Business-Focused Approach</h3>
                            <p>We align every solution with your business goals, not just technology trends.</p>
                        </div>
                    </div>

                    <!-- Point 2 -->
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="choose__item">
                            <div class="choose__icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h3>Scalable & Secure Solutions</h3>
                            <p>Enterprise-grade security and scalability built into every product we deliver.</p>
                        </div>
                    </div>

                    <!-- Point 3 -->
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="choose__item">
                            <div class="choose__icon">
                                <i class="fas fa-users-cog"></i>
                            </div>
                            <h3>Experienced Technology Team</h3>
                            <p>Our skilled engineers deliver high-performance systems with proven expertise.</p>
                        </div>
                    </div>

                    <!-- Point 4 -->
                    <div class="col-xl-6 col-md-6 mb-30">
                        <div class="choose__item">
                            <div class="choose__icon">
                                <i class="fas fa-comments"></i>
                            </div>
                            <h3>Transparent Communication</h3>
                            <p>Clear updates, honest timelines, and full project visibility from start to finish.</p>
                        </div>
                    </div>

                    <!-- Point 5 -->
                    <div class="col-xl-6 col-md-6 mb-30">
                        <div class="choose__item">
                            <div class="choose__icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <h3>Global Delivery Standards</h3>
                            <p>We follow international processes to deliver high-quality solutions worldwide.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- Why Choose Us Section End -->



        <!-- Technology Stack Section Start -->

        <!-- Technology Stack Section Start -->
        <section class="technology-stack-area pt-50 pb-90" style="background-color:#e8eaed;">
            <div class="container">

                <!-- Section Heading -->
                <div class="row text-center mb-60">
                    <div class="col-lg-12">
                        <span style="color:#0E84E1;">// TECHNOLOGY STACK</span>
                        <h2 class="our" style="color:#1a1a1a;">Our Technology Expertise</h2>
                        <p style="color:rgba(20, 19, 19, 0.7); max-width:700px; margin:auto;">
                            Building confidence with modern enterprise-grade technologies.
                        </p>
                    </div>
                </div>

                <!-- Bootstrap Carousel -->
                <div id="techCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">

                    <div class="carousel-inner">

                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <div class="row g-4">

                                <!-- Frontend -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="tech-card">
                                        <div class="tech-icon">
                                            <i class="fa-solid fa-laptop-code"></i>
                                        </div>
                                        <h3>Frontend</h3>
                                        <p>React, Angular, Vue, Next.js</p>
                                    </div>
                                </div>

                                <!-- Backend -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="tech-card">
                                        <div class="tech-icon">
                                            <i class="fa-solid fa-server"></i>
                                        </div>
                                        <h3>Backend</h3>
                                        <p>Node.js, Java, Python, PHP</p>
                                    </div>
                                </div>

                                <!-- Mobile -->
                                <div class="col-lg-4 col-md-6 col-12 d-md-none d-lg-block">
                                    <div class="tech-card">
                                        <div class="tech-icon">
                                            <i class="fa-solid fa-mobile-screen-button"></i>
                                        </div>
                                        <h3>Mobile</h3>
                                        <p>Flutter, React Native, iOS</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <div class="row g-4">

                                <!-- Cloud -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="tech-card">
                                        <div class="tech-icon">
                                            <i class="fa-solid fa-cloud"></i>
                                        </div>
                                        <h3>Cloud</h3>
                                        <p>AWS, Azure, Google Cloud</p>
                                    </div>
                                </div>

                                <!-- Databases -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="tech-card">
                                        <div class="tech-icon">
                                            <i class="fa-solid fa-database"></i>
                                        </div>
                                        <h3>Databases</h3>
                                        <p>MySQL, MongoDB, PostgreSQL</p>
                                    </div>
                                </div>

                                <!-- DevOps -->
                                <div class="col-lg-4 col-md-6 col-12 d-md-none d-lg-block">
                                    <div class="tech-card">
                                        <div class="tech-icon">
                                            <i class="fa-solid fa-gears"></i>
                                        </div>
                                        <h3>DevOps</h3>
                                        <p>Docker, Kubernetes, CI/CD</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#techCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#techCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>

                </div>

            </div>
        </section>
        <!-- Technology Stack Section End -->


        <!-- Speed area end -->
        <!-- Portfolio area start -->
        <div class="portfolio__area fix pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="section-title-wrapper mb-50">
                        <div class="section__title-one">
                            <span>// Case Studies</span>
                            <h2>Case studies</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-12">
                        <div class="case-study-active swiper-container">
                            <div class="swiper-wrapper">
                                @foreach ($casestudies as $casestudy)
                                    <div class="swiper-slide case-study-item">
                                        <div class="case__study-thumb">
                                            <img src="{{ asset($casestudy->image) }}" alt="image not found">
                                            <div class="case__study-content">
                                                <h3><a
                                                        href="{{ route('case-study.detail', $casestudy->slug) }}">{{ $casestudy->title }}</a>
                                                </h3>

                                                <p>{{ $casestudy->short_desc }}</p>
                                                <a class="case__study-btn"
                                                    href="{{ route('case-study.detail', $casestudy->slug) }}">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                @endforeach
                       
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="case__study-nav">
                                <button class="case-study-button-prev"><i
                                        class="fa-regular fa-angle-left"></i></button>
                                <button class="case-study-button-next"><i
                                        class="fa-regular fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Engagement Models Section Start -->
        <!-- Engagement Models Section -->


        <!-- Engagement Models Section -->
        <section class="engagement-models-section pt-80 pb-80">
            <div class="container">

                <!-- Header -->
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <div class="section-header mb-50">
                            <span style="color:#0E84E1;">// How We Work</span>
                            <h2 class="section-title">Flexible Engagement Models</h2>
                            <p class="section-description">
                                Choose the partnership approach that best fits your project needs.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- ✅ ONE Grid Wrapper -->
                <div class="models-grid">

                    <!-- ✅ Card 1 -->
                    <div class="model-card">
                        <div class="model-icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <h3 class="model-title">Fixed Price</h3>
                        <p class="model-description">
                            Perfect for projects with clearly defined scope and requirements.
                        </p>
                        <a href="#contact" class="model-btn">
                            Choose This Model <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <!-- ✅ Card 2 -->
                    <div class="model-card">
                        <div class="model-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="model-title">Dedicated Team</h3>
                        <p class="model-description">
                            Hire a dedicated team of experts who work exclusively on your project.
                        </p>
                        <a href="#contact" class="model-btn">
                            Choose This Model <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <!-- ✅ Card 3 -->
                    <div class="model-card">
                        <div class="model-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3 class="model-title">Time & Material</h3>
                        <p class="model-description">
                            Pay for actual time and resources spent. Maximum flexibility.
                        </p>
                        <a href="#contact" class="model-btn">
                            Choose This Model <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <!-- ✅ Card 4 -->
                    <div class="model-card">
                        <div class="model-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3 class="model-title">Consulting</h3>
                        <p class="model-description">
                            Leverage our expertise on-demand for strategic guidance.
                        </p>
                        <a href="#contact" class="model-btn">
                            Choose This Model <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <x-frontend.cta-box />
    </main>
</x-frontend.app-layout>
