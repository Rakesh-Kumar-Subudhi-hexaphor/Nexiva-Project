<x-frontend.app-layout>
   @php
      $pageId=10;
   @endphp
    <main>
 <x-frontend.banner :pageId="$pageId" title="Our Solutions" />
        <section class="solutions-hero-area section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="solutions-hero-content wow fadeInUp" data-wow-delay=".3s">
                            <div class="bd-ud-section-subtitle mb-10">
                                <span class="bd-ud-section-gradient">SOLUTIONS </span>
                            </div>
                            <h1 class="hero-title mb-25">Solutions Built for <span class="text-gradient">Modern
                                    Businesses</span></h1>
                            <p class="hero-description mb-40">
                                We deliver enterprise-grade digital solutions and products that transform businesses,
                                drive innovation,
                                and accelerate growth. Our solutions are designed to solve complex challenges and
                                deliver measurable
                                results.
                            </p>
                            <div class="hero-cta-buttons d-flex flex-wrap gap-3">
                                <a href="#solutions" class="btn btn-primary">
                                    Explore Solutions <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                                <a href="#products" class="btn btn-outline-primary">
                                    View Products
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="solutions-hero-image wow fadeInUp" data-wow-delay=".5s">
                            <img src="{{asset('frontend/assets/img/Blog/project-details-03.jpg')}}" alt="Enterprise Solutions"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Trusted By Section -->
        <!-- <section class="trusted-by-section py-60">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-header text-center mb-50 text-black">
              <h3 class="section-subtitle">Trusted by Industry Leaders</h3>
              <div class="trusted-logos d-flex justify-content-center flex-wrap gap-5 mt-40">
                <div class="trusted-logo">
                  <img src="{{asset('frontend/assets/img/brand/brand-1.png')}}" alt="Brand 1">
                </div>
                <div class="trusted-logo">
                  <img src="{{asset('frontend/assets/img/brand/brand-2.png')}}" alt="Brand 2">
                </div>
                <div class="trusted-logo">
                  <img src="{{asset('frontend/assets/img/brand/brand-3.png')}}" alt="Brand 3">
                </div>
                <div class="trusted-logo">
                  <img src="{{asset('frontend/assets/img/brand/brand-4.png')}}" alt="Brand 4">
                </div>
                <div class="trusted-logo">
                  <img src="{{asset('frontend/assets/img/brand/brand-5.png')}}" alt="Brand 5">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

        <!-- Solutions Section -->
        <section id="solutions" class="solutions-section section-padding">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-lg-8 text-center">
                        <div class="section-header wow fadeInUp" data-wow-delay=".3s">
                            <div class="bd-ud-section-subtitle mb-30">
                                <span class="bd-ud-section-gradient">Our Solutions</span>
                            </div>
                            <h2 class="section-title">Enterprise Solutions</h2>
                            <p class="section-subtitle">Comprehensive digital solutions designed to address complex
                                business
                                challenges and drive transformation.</p>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    @foreach ($solutions as $solution)
                        <div class="col-lg-4 col-md-6">
                            <div class="solution-card wow fadeInUp" data-wow-delay=".4s">
                                <div class="solution-icon">
                                  <img src="{{ asset($solution->icon) }}" alt="{{ $solution->title }}">
                                </div>
                                <h3>{{ $solution->title }}</h3>
                                <p>{{ $solution->short_desc }}</p>
                                <ul class="solution-features">
                                  @foreach($solution->key_point as $point)
                                    <li><i class="fas fa-check"></i> {{ $point }}</li>
                                  @endforeach
                                </ul>
                                <a href="{{ route('solution.detail',$solution->slug) }}" class="solution-link">
                                    Learn More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

        <!-- Technology Stack Section -->
        <section class="technology-stack-section section-padding">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-lg-8 text-center">
                        <div class="section-header wow fadeInUp" data-wow-delay=".3s">
                            <div class="bd-ud-section-subtitle mb-30">
                                <span class="bd-ud-section-gradient">Technology Stack</span>
                            </div>
                            <h2 class="section-title">Built with Modern Technologies</h2>
                            <p class="section-subtitle">We leverage cutting-edge technologies to build robust,
                                scalable, and
                                future-proof solutions.</p>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- React -->
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-flip-card">
                            <div class="tech-flip-card-inner">
                                <!-- Front Side -->
                                <div class="tech-flip-card-front">
                                    <div class="tech-icon">
                                        <i class="fab fa-react"></i>
                                    </div>
                                    <!-- <span>React</span> -->
                                </div>
                                <!-- Back Side -->
                                <div class="tech-flip-card-back">
                                    <h4>React</h4>
                                    <p>Frontend library for building user interfaces</p>
                                    <div class="tech-tags">
                                        <span class="tech-tag">JavaScript</span>
                                        <span class="tech-tag">UI Library</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Angular -->
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-flip-card">
                            <div class="tech-flip-card-inner">
                                <div class="tech-flip-card-front">
                                    <div class="tech-icon">
                                        <i class="fab fa-angular"></i>
                                    </div>
                                    <!-- <span>Angular</span> -->
                                </div>
                                <div class="tech-flip-card-back">
                                    <h4>Angular</h4>
                                    <p>Platform for building mobile and desktop web applications</p>
                                    <div class="tech-tags">
                                        <span class="tech-tag">TypeScript</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vue.js -->
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-flip-card">
                            <div class="tech-flip-card-inner">
                                <div class="tech-flip-card-front">
                                    <div class="tech-icon">
                                        <i class="fab fa-vuejs"></i>
                                    </div>
                                    <!-- <span>Vue.js</span> -->
                                </div>
                                <div class="tech-flip-card-back">
                                    <h4>Vue.js</h4>
                                    <p class="text-white">Progressive JavaScript framework</p>
                                    <div class="tech-tags">
                                        <span class="tech-tag">JavaScript</span>
                                        <span class="tech-tag">Reactive</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Node.js -->
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-flip-card">
                            <div class="tech-flip-card-inner">
                                <div class="tech-flip-card-front">
                                    <div class="tech-icon">
                                        <i class="fab fa-node-js"></i>
                                    </div>
                                    <!-- <span>Node.js</span> -->
                                </div>
                                <div class="tech-flip-card-back">
                                    <h4>Node.js</h4>
                                    <p>JavaScript runtime built on Chrome's V8 engine</p>
                                    <div class="tech-tags">
                                        <span class="tech-tag">Backend</span>
                                        <span class="tech-tag">Runtime</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Python -->
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-flip-card">
                            <div class="tech-flip-card-inner">
                                <div class="tech-flip-card-front">
                                    <div class="tech-icon">
                                        <i class="fab fa-python"></i>
                                    </div>
                                    <!-- <span>Python</span> -->
                                </div>
                                <div class="tech-flip-card-back">
                                    <h4>Python</h4>
                                    <p>High-level programming language</p>
                                    <div class="tech-tags">
                                        <span class="tech-tag">Backend</span>
                                        <span class="tech-tag">AI/ML</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- AWS -->
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-flip-card">
                            <div class="tech-flip-card-inner">
                                <div class="tech-flip-card-front">
                                    <div class="tech-icon">
                                        <i class="fab fa-aws"></i>
                                    </div>
                                    <!-- <span>AWS</span> -->
                                </div>
                                <div class="tech-flip-card-back">
                                    <h4>AWS</h4>
                                    <p>Cloud computing services</p>
                                    <div class="tech-tags">
                                        <span class="tech-tag">Cloud</span>
                                        <span class="tech-tag">Infrastructure</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Azure -->
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-flip-card">
                            <div class="tech-flip-card-inner">
                                <div class="tech-flip-card-front">
                                    <div class="tech-icon">
                                        <i class="fas fa-cloud"></i>
                                    </div>
                                    <!-- <span>Azure</span> -->
                                </div>
                                <div class="tech-flip-card-back">
                                    <h4>Azure</h4>
                                    <p>Microsoft's cloud computing platform</p>
                                    <div class="tech-tags">
                                        <span class="tech-tag">Cloud</span>
                                        <span class="tech-tag">Microsoft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MongoDB -->
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-flip-card">
                            <div class="tech-flip-card-inner">
                                <div class="tech-flip-card-front">
                                    <div class="tech-icon">
                                        <i class="fas fa-database"></i>
                                    </div>
                                    <!-- <span>MongoDB</span> -->
                                </div>
                                <div class="tech-flip-card-back">
                                    <h4>MongoDB</h4>
                                    <p>NoSQL database program</p>
                                    <div class="tech-tags">
                                        <span class="tech-tag">Database</span>
                                        <span class="tech-tag">NoSQL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- PostgreSQL -->
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-flip-card">
                            <div class="tech-flip-card-inner">
                                <div class="tech-flip-card-front">
                                    <div class="tech-icon">
                                        <i class="fas fa-server"></i>
                                    </div>
                                    <!-- <span>PostgreSQL</span> -->
                                </div>
                                <div class="tech-flip-card-back">
                                    <h4>PostgreSQL</h4>
                                    <p>Open-source relational database</p>
                                    <div class="tech-tags">
                                        <span class="tech-tag">Database</span>
                                        <span class="tech-tag">SQL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Docker -->
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-flip-card">
                            <div class="tech-flip-card-inner">
                                <div class="tech-flip-card-front">
                                    <div class="tech-icon">
                                        <i class="fab fa-docker"></i>
                                    </div>
                                    <!-- <span>Docker</span> -->
                                </div>
                                <div class="tech-flip-card-back">
                                    <h4>Docker</h4>
                                    <p>Containerization platform</p>
                                    <div class="tech-tags">
                                        <span class="tech-tag">Containers</span>
                                        <span class="tech-tag">DevOps</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Git -->
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-flip-card">
                            <div class="tech-flip-card-inner">
                                <div class="tech-flip-card-front">
                                    <div class="tech-icon">
                                        <i class="fab fa-git-alt"></i>
                                    </div>
                                    <!-- <span>Git</span> -->
                                </div>
                                <div class="tech-flip-card-back">
                                    <h4>Git</h4>
                                    <p>Distributed version control system</p>
                                    <div class="tech-tags">
                                        <span class="tech-tag">Version Control</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kubernetes -->
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-flip-card">
                            <div class="tech-flip-card-inner">
                                <div class="tech-flip-card-front">
                                    <div class="tech-icon">
                                        <i class="fa-solid fa-headset"></i>
                                    </div>
                                    <!-- <span>K8s</span> -->
                                </div>
                                <div class="tech-flip-card-back">
                                    <h4>Kubernetes</h4>
                                    <p>Container orchestration system</p>
                                    <div class="tech-tags">
                                        <span class="tech-tag">Orchestration</span>
                                        <span class="tech-tag">DevOps</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <x-frontend.cta-box/>
    </main>
</x-frontend.app-layout>
