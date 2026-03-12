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
                                <h2>case study details</h2>
                            </div>
                            <div class="bd-ud-breadcrumb__menu">
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><span><a href="{{route('index')}}">Nexiva</a></span>
                                        </li>
                                        <li class="trail-item trail-end"><span>case study details</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Updated Breadcrumb area end -->

        <!-- Case details area start -->
        <section class="case__details-area pt-120 pb-85">
            <div class="container">
                <div class="case__details-wrapper wow fadeInUp" data-wow-delay=".3s">
                    <div class="case__details-thumb">
                        <img src="{{ asset($casestudy->image) }}" alt="">
                    </div>
                    <div class="case__meta-wrapper">
                        <div class="case__meta">
                            <div class="case__list">
                                <div class="meta__item">
                                    <span>Client:</span>
                                    <p>{{ $casestudy->client }}</p>
                                </div>
                                <div class="meta__item">
                                    <span>Date:</span>
                                    <p>{{ \Carbon\Carbon::parse($casestudy->date)->format('F d, Y') }}</p>
                                </div>
                                <div class="meta__item">
                                    <span>Services:</span>
                                    <p>
                                        @foreach ($services as $service)
                                            {{ $service }}@if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                            <div class="case__meta-btn">
                                <a class="it__btn-2" href="{{ $casestudy->url }}"><span>Live Preview</span><i
                                        class="bdevs-btn-icon fas fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <h4 class="case__details-title">{{ $casestudy->title }}</h4>
                    {!! $casestudy->description !!}
                </div>
            </div>
        </section>
        <!-- Case details area end -->
    </main>
</x-frontend.app-layout>
