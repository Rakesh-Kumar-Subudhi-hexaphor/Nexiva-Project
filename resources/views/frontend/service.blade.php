<x-frontend.app-layout>
      @php
      $pageId=4;
   @endphp
    <main>
   <x-frontend.banner :pageId="$pageId" title="Our Services" />
        <!-- Updated Services area start -->
        <section class="bd-ud-services3-area bg-css pt-105 ">
            <div class="container">
                <div class="bd-ud-services3-title-wrapper mb-25 wow fadeInUp" data-wow-delay=".3s">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8">
                            <div class="bd-ud-section-area mb-20">
                                <div class="bd-ud-section-title">
                                    <h2>Our Business & IT Solutions Services</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-10">
                            <p>Our approach combines deep technical expertise, industry knowledge, and a strong
                                commitment to
                                quality, enabling us to deliver measurable business value to our clients worldwide.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bd-ud-services3-item-wrapper wow fadeInUp" data-wow-delay=".5s">
                    <div class="row">
                        @foreach ($services as $service)
                            <div class="col-xxl-3 col-lg-4 col-md-6">
                                <div class="bd-ud-services3-item style-2 mb-30">
                                    <div class="bd-ud-services3-icon ml--7 mb-25">
                                       <img src="{{ asset($service->icon) }}" alt="" width="90px" height="90px">
                                    </div>
                                    <div class="bd-ud-services3-image-overlay">
                                        <img src="{{ asset('frontend/assets/img/service/service-overlay.png') }}" alt="service">
                                    </div>
                                    <div class="bd-ud-services3-content">
                                        <h4 class="bd-ud-services3-title t2"><a href="{{ route('service.detail', $service->slug) }}">{{ $service->title }}</a></h4>
                                        <p class="bd-ud-services3-text">{{ $service->short_desc }}</p>
                                    </div>
                                    <div class="bd-ud-services3-btn p-relative z-10">
                                        <a href="{{ route('service.detail', $service->slug) }}">View details</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
      <x-frontend.cta-box/>
    </main>
</x-frontend.app-layout>
