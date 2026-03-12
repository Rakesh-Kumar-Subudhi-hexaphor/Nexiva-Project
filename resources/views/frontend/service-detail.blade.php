<x-frontend.app-layout>
    <main>
        <!-- Updated Breadcrumb area start -->
        <div class="bd-ud-breadcrumb__area bg-css" data-background="{{asset('frontend/assets/img/bg/ud-breadcrumb.jpg')}}">
            <div class="bd-ud-breadcrumb-shape-1 p-absolute w-img">
                <img src="{{asset('frontend/assets/img/shape/breadcrumb-shape-1.png')}}" alt="breadcrumb-shape-1">
            </div>
            <div class="bd-ud-breadcrumb-shape-2 p-absolute w-img">
                <img src="{{asset('frontend/assets/img/shape/breadcrumb-shape-2.png')}}" alt="breadcrumb-shape-1">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bd-ud-breadcrumb__wrapper">
                            <div class="bd-ud-breadcrumb__title">
                                <h2>Services details</h2>
                            </div>
                            <div class="bd-ud-breadcrumb__menu">
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><span><a href="{{route('index')}}">Nexiva</a></span>
                                        </li>
                                        <li class="trail-item trail-end"><span>Services details</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Updated Breadcrumb area end -->
        <section class="bd-ud-service-details pt-40">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="bd-ud-service-details-wrapper mb-60">
                            <div class="bd-ud-service-img w-img mb-35">
                                <img src="{{ asset($service->image) }}" alt="service">
                            </div>
                            <h3 class="bd-ud-service-title mb-25">{{ $service->title }}</h3>
                            <p class="bd-ud-service-text mb-35">{{ $service->short_desc }}</p>
                            <div class="row mb-30">
                                <div class="col-lg-12 col-xxl-8">
                                    {!! $service->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="bd-ud-service-sidebar">
                            <div class="bd-ud-service-list mb-40">
                                <ul>
                                    @foreach ($services as $service)
                                        <li><a
                                                href="{{ route('service.detail', $service->slug) }}">{{ $service->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-frontend.cta-box />

    </main>
</x-frontend.app-layout>
