<x-frontend.app-layout>
    <main>
        <div class="bd-ud-breadcrumb__area bg-css blog-breadcrumb"
            data-background="{{ asset('frontend/assets/img/bg/ud-breadcrumb.jpg') }}">
            <div class="bd-ud-breadcrumb-shape-1 p-absolute w-img">
                <img src="{{ asset('frontend/assets/img/shape/breadcrumb-shape-1.png') }}" alt="breadcrumb-shape-1">
            </div>
            <div class="bd-ud-breadcrumb-shape-2 p-absolute w-img">
                <img src="{{ asset('frontend/assets/img/shape/breadcrumb-shape-2.png') }}" alt="breadcrumb-shape-1">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bd-ud-breadcrumb__wrapper">
                            <div class="bd-ud-breadcrumb__title">
                                <h2 class="text-white">{{ $policy->type }}</h2>
                                {{-- <p class="blog-hero-subtitle text-white">
                                    Stay updated with the latest technology insights, industry trends, and best
                                    practices from Nexiva's experts.
                                </p> --}}
                            </div>
                            <div class="bd-ud-breadcrumb__menu">
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><span><a
                                                    href="{{ route('index') }}">Nexiva</a></span>
                                        </li>
                                        <li class="trail-item trail-end"><span>{{ $policy->type }}</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Terms Content -->
        <section class="terms-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="terms-content">
                            <div class="terms-header text-center mb-50">
                                <h2 class="mb-20">{{ $policy->type }}</h2>
                                <p class="lead">Last Updated:
                                    {{ \Carbon\Carbon::parse($policy->updated_at)->format('F d, Y') }}</p>
                            </div>
                            <div class="terms-section">
                                {!! $policy->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-frontend.app-layout>
