<x-frontend.app-layout>
   @php
      $pageId=2;
   @endphp
    <main>
         <x-frontend.banner :pageId="$pageId" title="About Us" />

        <!-- Updated About area start -->
        <section class="bd-ud-about3 pt-60">
            <div class="container">
                <div class="row align-items-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-xl-6 col-lg-8 pb-0">
                        <div class="bd-ud-about3-wrapper mr--35 p-relative ">
                            <div class="bd-ud-about3-img w-img">
                                <img src="{{asset('frontend/assets/img/about/ud-about-3.png')}}" alt="about">
                            </div>
                            <!-- <div class="bd-ud-about3-icon bottom p-absolute w-img">
                        <img src="{{asset('frontend/assets/img/about/ud-about-3-icon.png')}}" alt="about icon">
                     </div> -->
                            <div class="bd-ud-about3-experience p-absolute">
                                <div class="bd-ud-about3-experience-num">
                                    <h3><span class="counter">25</span>+</h3>
                                </div>
                                <div class="bd-ud-about3-experience-text">
                                    <h4>YEAR OF <br> EXPERIENCE</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-10">
                        <div class="bd-ud-about3-content-wrapper pl-70 mb-60">
                            <div class="bd-ud-section-title-area mb-20">
                                <div class="bd-ud-section-subtitle mb-5">
                                    <span class="bd-ud-section-gradient">About us</span>
                                </div>
                                <div class="bd-ud-section-title">
                                    <h2>Who We Are</h2>
                                </div>
                            </div>
                            <div class="bd-ud-about3-content-inner">
                                <p class=""><span class="va"> Nexiva </span> is a technology-driven IT company
                                    providing
                                    end-to-end IT services, strategic
                                    consulting, and product-based solutions. We help organizations navigate digital
                                    transformation through secure, scalable, and future-ready technology solutions
                                    tailored to
                                    business needs.</p>
                                <div class="bd-ud-app-check-list mb-25">
                                    <ul>
                                        <li>Web And Mobile Application</li>
                                        <li>New Domain Registration</li>
                                        <li>Data Text Synchronization</li>
                                        <li>Web And Mobile Application</li>
                                    </ul>
                                </div>
                                <p class="mb-55">Our approach combines deep technical expertise, industry knowledge,
                                    and a
                                    strong commitment to quality, enabling us to deliver measurable business value to
                                    our clients
                                    worldwide.</p>
                            </div>
                            <div class="bd-ud-about3-btn">
                                <a class="bd-ud-btn-border" href="services-2.html">Explore Our Services <i
                                        class="fa-sharp fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Updated About area end -->
        <!-- Updated History area start -->
        <section class="bd-ud-history-area bd-ud-history-padd bd-ud-gray-1">
            <div class="container">
                <div class="row justify-content-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-lg-8">
                        <div class="bd-ud-section-title-area text-center mb-65">
                            <div class="bd-ud-section-subtitle mb-25">
                                <span class="bd-ud-section-gradient two">Company History</span>
                            </div>
                            <div class="bd-ud-section-title">
                                <h2>Our Company History</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bd-ud-history-wrapper ">
                    <div class="bd-ud-history-item-wrapper">
                        <div class="bd-ud-history-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="bd-ud-history-img w-img p-relative mb-55 wow fadeInLeft"
                                        data-wow-delay=".3s">
                                        <img src="{{asset('frontend/assets/img/history/ud-history-01.jpg')}}" alt="ud-history-01">
                                        <span class="bd-ud-history-time">1985</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="bd-ud-history-content ml-40 mb-55 wow fadeInRight" data-wow-delay=".3s">
                                        <h3 class="bd-ud-history-title">Welcome to our company</h3>
                                        <p class="bd-ud-history-text mb-30">When an unknown printer took a galley of
                                            type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries
                                            unchanged.</p>
                                        <div class="bd-ud-app-check-list mb-25">
                                            <ul>
                                                <li>Web And Mobile Application</li>
                                                <li>Smart IT Services</li>
                                                <li>Next-Gen Digital Solutions</li>
                                            </ul>
                                        </div>
                                        <p class="bd-ud-history-text">When an unknown printer took a galley of type and
                                            scrambled
                                            it to make a type specimen book. It has survived not only five centuries
                                            unchanged.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bd-ud-history-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-lg-2">
                                    <div class="bd-ud-history-img w-img p-relative ml-40 mb-55 wow fadeInRight"
                                        data-wow-delay=".5s">
                                        <img src="{{asset('frontend/assets/img/history/ud-history-02.jpg')}}" alt="ud-history-01">
                                        <span class="bd-ud-history-time left">2005</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-lg-1">
                                    <div class="bd-ud-history-content mr-75 mb-55 wow fadeInLeft"
                                        data-wow-delay=".5s">
                                        <h3 class="bd-ud-history-title">Our company mission</h3>
                                        <p class="bd-ud-history-text mb-30">To deliver reliable IT services,
                                            consulting, and
                                            digital products by leveraging modern technologies, best practices, and a
                                            client-centric approach.</p>
                                        <div class="bd-ud-app-check-list mb-25">
                                            <ul>
                                                <li>Web And Mobile Application</li>
                                                <li>New Domain Registration</li>
                                                <li>Data Text Synchronization</li>
                                            </ul>
                                        </div>
                                        <p class="bd-ud-history-text">When an unknown printer took a galley of type and
                                            scrambled
                                            it to make a type specimen book. It has survived not only five centuries
                                            unchanged.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bd-ud-history-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="bd-ud-history-img w-img p-relative mb-55 wow fadeInLeft"
                                        data-wow-delay=".7s">
                                        <img src="{{asset('frontend/assets/img/history/ud-history-03.jpg')}}" alt="ud-history-01">
                                        <span class="bd-ud-history-time">2020</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="bd-ud-history-content ml-40 mb-55 wow fadeInRight"
                                        data-wow-delay=".7s">
                                        <h3 class="bd-ud-history-title">Our company vission</h3>
                                        <p class="bd-ud-history-text mb-30">To be a globally recognized technology
                                            partner
                                            enabling businesses to innovate, grow, and succeed through intelligent
                                            digital
                                            solutions.</p>
                                        <div class="bd-ud-app-check-list mb-25">
                                            <ul>
                                                <li>Web And Mobile Application</li>
                                                <li>New Domain Registration</li>
                                                <li>Data Text Synchronization</li>
                                            </ul>
                                        </div>
                                        <p class="bd-ud-history-text">When an unknown printer took a galley of type and
                                            scrambled
                                            it to make a type specimen book. It has survived not only five centuries
                                            unchanged.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Updated History area end -->


        <!-- Updated Core Values area start -->
        <section class="bd-ud-core-values-area pt-35 pb-25">
            <div class="container">
                <div class="row justify-content-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-lg-8">
                        <div class="bd-ud-section-title-area text-center mb-65">
                            <div class="bd-ud-section-subtitle mb-25">
                                <span class="bd-ud-section-gradient">Our Core Values</span>
                            </div>
                            <div class="bd-ud-section-gradient">
                                <h2>Our Core Values</h2>
                            </div>
                            <p class="mt-20">These principles guide every decision we make and every solution we
                                deliver,
                                ensuring we build lasting trust with our clients and partners.</p>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Integrity Value -->
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="bd-ud-core-value-card">
                            <div class="bd-ud-core-value-card-inner">
                                <div class="bd-ud-core-value-icon-wrapper">
                                    <div class="bd-ud-core-value-icon">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <!-- <div class="bd-ud-core-value-number">01</div> -->
                                </div>
                                <h3 class="bd-ud-core-value-title">Integrity</h3>
                                <p class="bd-ud-core-value-text">We operate with transparency and honesty in all our
                                    dealings,
                                    building trust through ethical practices.</p>
                                <div class="bd-ud-core-value-hover-content">
                                    <p>Every client relationship is built on a foundation of trust and ethical conduct.
                                    </p>
                                </div>
                                <div class="bd-ud-core-value-line"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Innovation Value -->
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="bd-ud-core-value-card">
                            <div class="bd-ud-core-value-card-inner">
                                <div class="bd-ud-core-value-icon-wrapper">
                                    <div class="bd-ud-core-value-icon">
                                        <i class="fas fa-lightbulb"></i>
                                    </div>
                                    <!-- <div class="bd-ud-core-value-number">02</div> -->
                                </div>
                                <h3 class="bd-ud-core-value-title">Innovation</h3>
                                <p class="bd-ud-core-value-text">We continuously evolve with technology, embracing
                                    change and
                                    creativity for cutting-edge solutions.</p>
                                <div class="bd-ud-core-value-hover-content">
                                    <p>Constantly exploring new technologies to solve tomorrow's challenges today.</p>
                                </div>
                                <div class="bd-ud-core-value-line"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Quality Value -->
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="bd-ud-core-value-card">
                            <div class="bd-ud-core-value-card-inner">
                                <div class="bd-ud-core-value-icon-wrapper">
                                    <div class="bd-ud-core-value-icon">
                                        <i class="fas fa-award"></i>
                                    </div>
                                    <!-- <div class="bd-ud-core-value-number">03</div> -->
                                </div>
                                <h3 class="bd-ud-core-value-title">Quality</h3>
                                <p class="bd-ud-core-value-text">We deliver excellence without compromise, maintaining
                                    the
                                    highest standards in every project.</p>
                                <div class="bd-ud-core-value-hover-content">
                                    <p>Quality is not an act, it's a habit we practice in every deliverable.</p>
                                </div>
                                <div class="bd-ud-core-value-line"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Collaboration Value -->
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="bd-ud-core-value-card">
                            <div class="bd-ud-core-value-card-inner">
                                <div class="bd-ud-core-value-icon-wrapper">
                                    <div class="bd-ud-core-value-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <!-- <div class="bd-ud-core-value-number">04</div> -->
                                </div>
                                <h3 class="bd-ud-core-value-title">Collaboration</h3>
                                <p class="bd-ud-core-value-text">We believe in long-term partnerships, working closely
                                    with
                                    clients as strategic allies.</p>
                                <div class="bd-ud-core-value-hover-content">
                                    <p>Your success is our success - we're in this together for the long haul.</p>
                                </div>
                                <div class="bd-ud-core-value-line"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Accountability Value -->
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="bd-ud-core-value-card">
                            <div class="bd-ud-core-value-card-inner">
                                <div class="bd-ud-core-value-icon-wrapper">
                                    <div class="bd-ud-core-value-icon">
                                        <i class="fas fa-user-check"></i>
                                    </div>
                                    <!-- <div class="bd-ud-core-value-number">05</div> -->
                                </div>
                                <h3 class="bd-ud-core-value-title">Accountability</h3>
                                <p class="bd-ud-core-value-text">We take ownership of outcomes, standing by our work
                                    and driving
                                    measurable results.</p>
                                <div class="bd-ud-core-value-hover-content">
                                    <p>We stand behind every solution we deliver and every promise we make.</p>
                                </div>
                                <div class="bd-ud-core-value-line"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Excellence Value -->
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="bd-ud-core-value-card">
                            <div class="bd-ud-core-value-card-inner">
                                <div class="bd-ud-core-value-icon-wrapper">
                                    <div class="bd-ud-core-value-icon">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <!-- <div class="bd-ud-core-value-number">06</div> -->
                                </div>
                                <h3 class="bd-ud-core-value-title">Excellence</h3>
                                <p class="bd-ud-core-value-text">We strive for excellence in everything we do, from
                                    strategy to
                                    execution and beyond.</p>
                                <div class="bd-ud-core-value-hover-content">
                                    <p>Going above and beyond is our standard, not the exception.</p>
                                </div>
                                <div class="bd-ud-core-value-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Updated Core Values area end -->

        <section class="capabilities-section">
            <div class="container">
                <div class="section-title">
                    <h2>What We Do</h2>
                    <p>Our core capabilities that help businesses grow digitally.</p>
                </div>

                <div class="capabilities-wrapper">
                    <!-- Card 1 -->
                    <div class="cap-card">
                        <div class="card-inner">
                            <div class="card-front">
                                <div class="cap-icon">
                                    <i class="fa-solid fa-headset"></i>
                                </div>
                                <h3>IT Services & Support</h3>
                                <p>Reliable managed IT services to keep operations running smoothly.</p>
                            </div>
                            <div class="card-back">
                                <div class="back-icon">
                                    <i class="fa-solid fa-headset"></i>
                                </div>
                                <h3>IT Services & Support</h3>
                                <p>24/7 support, network management, security solutions, and infrastructure maintenance.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="cap-card">
                        <div class="card-inner">
                            <div class="card-front">
                                <div class="cap-icon">
                                    <i class="fa-solid fa-lightbulb"></i>
                                </div>
                                <h3>IT Consulting & Strategy</h3>
                                <p>Technology planning aligned with real business goals.</p>
                            </div>
                            <div class="card-back">
                                <div class="back-icon">
                                    <i class="fa-solid fa-lightbulb"></i>
                                </div>
                                <h3>IT Consulting & Strategy</h3>
                                <p>Digital transformation, IT roadmap, process optimization, and strategic planning.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="cap-card">
                        <div class="card-inner">
                            <div class="card-front">
                                <div class="cap-icon">
                                    <i class="fa-solid fa-code"></i>
                                </div>
                                <h3>Software, Web Development</h3>
                                <p>High-performance apps tailored for modern customers.</p>
                            </div>
                            <div class="card-back">
                                <div class="back-icon">
                                    <i class="fa-solid fa-code"></i>
                                </div>
                                <h3>Software, Web Development</h3>
                                <p>Custom software, responsive websites, mobile apps, and e-commerce solutions.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="cap-card">
                        <div class="card-inner">
                            <div class="card-front">
                                <div class="cap-icon">
                                    <i class="fa-solid fa-cubes"></i>
                                </div>
                                <h3>Product & Platform Engineering</h3>
                                <p>End-to-end scalable digital product development.</p>
                            </div>
                            <div class="card-back">
                                <div class="back-icon">
                                    <i class="fa-solid fa-cubes"></i>
                                </div>
                                <h3>Product & Platform Engineering</h3>
                                <p>Scalable platforms, API development, microservices architecture, and system
                                    integration.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="cap-card">
                        <div class="card-inner">
                            <div class="card-front">
                                <div class="cap-icon">
                                    <i class="fa-solid fa-cloud"></i>
                                </div>
                                <h3>Cloud, DevOps & Automation</h3>
                                <p>Cloud migration and automation for speed and efficiency.</p>
                            </div>
                            <div class="card-back">
                                <div class="back-icon">
                                    <i class="fa-solid fa-cloud"></i>
                                </div>
                                <h3>Cloud, DevOps & Automation</h3>
                                <p>AWS/Azure/GCP migration, CI/CD pipelines, containerization, and infrastructure as
                                    code.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Center CTA Button -->
                <div class="capabilities-cta">
                    <a href="services-2.html" class="cap-btn">
                        View Our Capabilities <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>



        <!-- capabilities end area -->

        <section class="choose-section">
            <div class="container">

                <!-- Section Title -->
                <div class="section-title text-center text-white">
                    <h2>Why Choose <span class="techno"> "Nexiva Technologies" </span></h2>
                    <p>
                        We deliver secure, scalable, and business-aligned technology solutions
                        with transparency and global standards.
                    </p>
                </div>

                <!-- Choose Grid -->
                <div class="choose-grid">

                    <!-- Item -->
                    <div class="choose-card">
                        <div class="choose-icon">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <h3>Client-Centric Approach</h3>
                        <p>We align technology solutions with real business objectives.</p>
                    </div>

                    <!-- Item -->
                    <div class="choose-card">
                        <div class="choose-icon">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                        <h3>Experienced Technology Team</h3>
                        <p>Skilled professionals across modern and emerging tech stacks.</p>
                    </div>

                    <!-- Item -->
                    <div class="choose-card">
                        <div class="choose-icon">
                            <i class="fa-solid fa-shield-check"></i>

                        </div>
                        <h3>Scalable & Secure Solutions</h3>
                        <p>Built to grow with your business while staying protected.</p>
                    </div>

                    <!-- Item -->
                    <div class="choose-card">
                        <div class="choose-icon">
                            <i class="fa-solid fa-comments"></i>
                        </div>
                        <h3>Transparent Communication</h3>
                        <p>Clear processes, consistent updates, and regular reporting.</p>
                    </div>

                    <!-- Item -->
                    <div class="choose-card">
                        <div class="choose-icon">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <h3>Global Delivery Standards</h3>
                        <p>Consistent quality and execution across all engagements.</p>
                    </div>

                </div>
            </div>
        </section>



        <section class="differentiators-section">
            <div class="container">

                <!-- Heading -->
                <div class="diff-heading">
                    <h2>What Sets Us Apart</h2>
                    <p>
                        We don't just deliver technology — we build systems that help businesses scale,
                        stay secure, and compete globally.
                    </p>
                </div>

                <!-- Differentiators List -->
                <div class="diff-list">

                    <div class="diff-item">
                        <div class="diff-number">01</div>
                        <div class="diff-content">
                            <h4>Business-first technology approach</h4>
                        </div>
                        <div class="hover-gradient"></div>
                    </div>

                    <div class="diff-item">
                        <div class="diff-number">02</div>
                        <div class="diff-content">
                            <h4>Scalable and secure architectures</h4>
                        </div>
                        <div class="hover-gradient"></div>
                    </div>

                    <div class="diff-item">
                        <div class="diff-number">03</div>
                        <div class="diff-content">
                            <h4>Experienced, cross-functional teams</h4>
                        </div>
                        <div class="hover-gradient"></div>
                    </div>

                    <div class="diff-item">
                        <div class="diff-number">04</div>
                        <div class="diff-content">
                            <h4>Agile delivery methodology</h4>
                        </div>
                        <div class="hover-gradient"></div>
                    </div>

                    <div class="diff-item">
                        <div class="diff-number">05</div>
                        <div class="diff-content">
                            <h4>Global quality and compliance standards</h4>
                        </div>
                        <div class="hover-gradient"></div>
                    </div>

                </div>
            </div>
        </section>



        <!-- Updated Team Area Start  -->
        <section class="bd-ud-team-area bg-css pt-25 " data-background="{{asset('frontend/assets/img/bg/ud-team-bg.png')}}">
            <div class="container">
                <div class="row align-items-end mb-25 wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-lg-12 text-center leader pt-3">
                        <div class="bd-ud-section-title-area mb-40">
                            <div class="bd-ud-section-subtitle mb-30 ">
                                <span class="bd-ud-section-gradient">Leadership Perspective</span>
                            </div>

                            <div class="bd-ud-section-title">
                                <h2>Technology Should Enable Outcomes — Not Complexity</h2>

                                <p class="leadership-text">
                                    At Nexiva Technologies, we believe technology should enable business outcomes,
                                    not complexity. Our leadership team is committed to building long-term client
                                    relationships through trust, innovation, and consistent delivery excellence.
                                </p>

                                <a href="team.html" class="bd-ud-btn">
                                    Meet Our Team <i class="fa-sharp fa-solid fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- <div class="col-lg-5">
                  <div class="bd-ud-team-view-wrapper mb-40">
                     <div class="bd-ud-team-view">
                        <span><a href="team.html">View all</a> team <i
                              class="fa-sharp fa-solid fa-chevron-right"></i></span>
                     </div>
                     <div class="bd-ud-team-pagination"></div>
                  </div>
               </div>
            </div>
            <div class="bd-ud-team-wrapper wow fadeInUp" data-wow-delay=".5s">
               <div class="swiper-container bd-ud-team-active">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="bd-ud-team-item p-relative">
                           <div class="bd-ud-team-img w-img">
                              <a href="team-details.html"><img src="{{asset('frontend/assets/img/team/ud-team-1.jpg')}}" alt="team"></a>
                           </div>
                           <div class="bd-ud-team-text p-absolute">
                              <h4 class="bd-ud-team-title"><a href="team-details.html">Edward L. Odom</a></h4>
                              <span class="bd-ud-team-subtitle">Sr. web developer</span>
                           </div>
                           <div class="bd-ud-team-social p-absolute">
                              <div class="bd-ud-team-share"><i class="fa-sharp fa-solid fa-share-nodes"></i></div>
                              <div class="bd-ud-team-social-icon">
                                 <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="bd-ud-team-item p-relative">
                           <div class="bd-ud-team-img w-img">
                              <a href="team-details.html"><img src="{{asset('frontend/assets/img/team/ud-team-2.jpg')}}" alt="team"></a>
                           </div>
                           <div class="bd-ud-team-text p-absolute">
                              <h4 class="bd-ud-team-title"><a href="team-details.html">Edward L. Odom</a></h4>
                              <span class="bd-ud-team-subtitle">Sr. web developer</span>
                           </div>
                           <div class="bd-ud-team-social p-absolute">
                              <div class="bd-ud-team-share"><i class="fa-sharp fa-solid fa-share-nodes"></i></div>
                              <div class="bd-ud-team-social-icon">
                                 <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="bd-ud-team-item p-relative">
                           <div class="bd-ud-team-img w-img">
                              <a href="team-details.html"><img src="{{asset('frontend/assets/img/team/ud-team-3.jpg')}}" alt="team"></a>
                           </div>
                           <div class="bd-ud-team-text p-absolute">
                              <h4 class="bd-ud-team-title"><a href="team-details.html">Edward L. Odom</a></h4>
                              <span class="bd-ud-team-subtitle">Sr. web developer</span>
                           </div>
                           <div class="bd-ud-team-social p-absolute">
                              <div class="bd-ud-team-share"><i class="fa-sharp fa-solid fa-share-nodes"></i></div>
                              <div class="bd-ud-team-social-icon">
                                 <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="bd-ud-team-item p-relative">
                           <div class="bd-ud-team-img w-img">
                              <a href="team-details.html"><img src="{{asset('frontend/assets/img/team/ud-team-4.jpg')}}" alt="team"></a>
                           </div>
                           <div class="bd-ud-team-text p-absolute">
                              <h4 class="bd-ud-team-title"><a href="team-details.html">Edward L. Odom</a></h4>
                              <span class="bd-ud-team-subtitle">Sr. web developer</span>
                           </div>
                           <div class="bd-ud-team-social p-absolute">
                              <div class="bd-ud-team-share"><i class="fa-sharp fa-solid fa-share-nodes"></i></div>
                              <div class="bd-ud-team-social-icon">
                                 <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> -->
                </div>
        </section>
        <!-- Updated Team Area End  -->


        <section class="global-delivery-area">
            <div class="container">
                <div class="global-center">

                    <div class="bd-ud-section-subtitle mb-20">
                        <span class="bd-ud-section-gradient">
                            GLOBAL MINDSET & DELIVERY MODEL
                        </span>
                    </div>

                    <h2 class="global-title">
                        Global Mindset, Local Expertise
                    </h2>

                    <p>
                        With a strong presence in India and a global delivery mindset, we support
                        clients across industries and geographies.
                    </p>

                    <p>
                        Our delivery model is designed to ensure flexibility, efficiency, and
                        consistent quality across all engagements.
                    </p>

                    <a href="contact.html" class="bd-ud-btn">
                        Let’s Work Together
                        <i class="fa-sharp fa-solid fa-chevron-right"></i>
                    </a>

                </div>
            </div>
        </section>




        <section class="quality-security-area">
            <div class="container">
                <div class="quality-wrapper">

                    <!-- Left Heading -->
                    <div class="quality-left">
                        <div class="bd-ud-section-subtitle mb-30 ">
                            <span class="bd-ud-section-gradient"> QUALITY, SECURITY & COMPLIANCE</span>
                        </div>
                        <h2>Commitment to Quality & Security</h2>

                        <p>
                            We follow globally aligned engineering standards to ensure every solution
                            is secure, compliant, and built for long-term trust.
                        </p>
                    </div>

                    <!-- Right Points -->
                    <div class="quality-right">

                        <div class="quality-point">
                            <span>01</span>
                            <h4>Secure development practices</h4>
                        </div>

                        <div class="quality-point">
                            <span>02</span>
                            <h4>Data privacy and confidentiality</h4>
                        </div>

                        <div class="quality-point">
                            <span>03</span>
                            <h4>Industry-standard quality processes</h4>
                        </div>

                        <div class="quality-point">
                            <span>04</span>
                            <h4>Compliance-ready delivery frameworks</h4>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section class="testimonial-section section-padding fix">

            <!-- Arrows -->
            <div class="array-button">
                <button class="array-prev">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <button class="array-next">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>

            <div class="container">

                <!-- Heading -->
                <div class="section-title text-center">
                    <div class="bd-ud-section-subtitle mb-30 ">
                        <span class="bd-ud-section-gradient"> CLIENT TESTIMONIALS</span>
                    </div>

                    <h2>
                        Client Experiences Inspire <br>
                        Business Trust.
                    </h2>
                </div>

                <!-- Swiper Slider -->
                <div class="swiper testimonial-slider">
                    <div class="swiper-wrapper">

                        @foreach ($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <div class="testimonial-box-item">

                                    <p>
                                        “{{$testimonial->message}}”
                                    </p>

                                    <div class="client-info-item">
                                        <div class="info-item">
                                            <img src="{{ asset($testimonial->image) }}" alt="">
                                            <div class="content">
                                                <h4>{{ $testimonial->name }}</h4>
                                                <span>{{ $testimonial->designation }}, {{ $testimonial->company }}</span>
                                            </div>
                                        </div>

                                       
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Dots -->
                <div class="swiper-pagination"></div>

            </div>
        </section>


        <section class="certifications-area">
            <div class="container">

                <!-- Heading -->
                <div class="cert-heading text-center">
                    <!-- <span class="cert-subtitle">CERTIFICATIONS & COMPLIANCE</span> -->
                    <div class="bd-ud-section-subtitle mb-30 ">
                        <span class="bd-ud-section-gradient"> CERTIFICATIONS & COMPLIANCE</span>
                    </div>
                    <h2>Certifications & Compliance</h2>
                    <p>
                        We align with globally recognized quality, security, and delivery practices
                        to support enterprise and regulated engagements.
                    </p>
                </div>

                <!-- Logo Grid -->
                <div class="cert-logo-grid">
                    @foreach ($certificates as $certificate)
                        <div class="cert-logo">
                            <img src="{{ asset($certificate->image) }}" alt="{{ $certificate->name }}">
                        </div>
                    @endforeach
                </div>

            </div>
        </section>



        <x-frontend.cta-box />
    </main>
</x-frontend.app-layout>
