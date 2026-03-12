<x-frontend.app-layout>
       @php
      $pageId=9;
   @endphp
    <main>
<x-frontend.banner :pageId="$pageId" title="Industries We Serve" />


        <!-- Industries Hero Section -->
        <section class="industries-hero  pb-20">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <div class="industries-header mb-50">
                            <div class="bd-ud-section-subtitle mb-20">
                                <span class="bd-ud-section-gradient">GLOBAL TRUST BUILDER</span>
                            </div>
                            <h1 class="mb-30">Industries We Serve</h1>
                            <p class="lead-text">At Nexiva Technologies, we deliver tailored technology solutions across
                                diverse
                                sectors. Our deep domain expertise helps organizations navigate digital transformation,
                                optimize
                                operations, and achieve sustainable growth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Industries Grid -->
        <section class="industries-grid-section pb-40">
            <div class="container">
                <div class="row g-4">
                    <!-- Healthcare -->
                    @foreach ($industries as $industry)
                        <div class="col-xl-4 col-md-6">
                            <div class="industry-card">
                                <div class="industry-icon">
                                    <img src="{{ asset($industry->icon) }}" alt="">
                                </div>
                                <h3>{{ $industry->title }}</h3>
                                <p>{{ $industry->short_desc }}</p>
                                </p>
                                <div class="industry-solutions">
                                    @php
                                        $tagsArray = array_filter(explode(',', $industry->tags));
                                    @endphp
                                    @foreach ($tagsArray as $tag)
                                        <span>{{ $tag }}</span>
                                    @endforeach
                                </div>
                                {{-- <a href="" class="industry-link">Explore Solutions <i
                                    class="fa-solid fa-arrow-right"></i></a> --}}
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- CTA Button -->



            </div>
        </section>

        <!-- Why Choose Us -->
        <section class="industries-why-section  pb-40">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="industries-why-content">
                            <div class="bd-ud-section-subtitle mb-20">
                                <span class="bd-ud-section-gradient">WHY CHOOSE US</span>
                            </div>
                            <h2 class="mb-30">Domain Expertise Meets Technical Excellence</h2>
                            <p class="mb-40">Our team combines deep industry knowledge with cutting-edge technology
                                expertise to deliver
                                solutions that address specific sector challenges while driving innovation and
                                efficiency.</p>

                            <div class="industries-benefits">
                                <div class="benefit-item">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Deep industry-specific understanding</span>
                                </div>
                                <div class="benefit-item">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Compliance and regulatory expertise</span>
                                </div>
                                <div class="benefit-item">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Customized solutions for unique challenges</span>
                                </div>
                                <div class="benefit-item">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Proven track record across sectors</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="industries-stats">
                            <div class="stat-card">
                                <h3>25+</h3>
                                <p>Years Industry Experience</p>
                            </div>
                            <div class="stat-card">
                                <h3>500+</h3>
                                <p>Projects Delivered</p>
                            </div>
                            <div class="stat-card">
                                <h3>50+</h3>
                                <p>Industry Partners</p>
                            </div>
                            <div class="stat-card">
                                <h3>98%</h3>
                                <p>Client Satisfaction Rate</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-frontend.cta-box />
    </main>
</x-frontend.app-layout>
