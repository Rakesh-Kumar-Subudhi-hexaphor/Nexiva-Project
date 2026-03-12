<x-frontend.app-layout>
      @php
      $pageId=7;
   @endphp
    <main>
<x-frontend.banner :pageId="$pageId" title="Case Studies" />

        <!-- Case__filter area start -->
        <div class="case__filter-area pt-115 pb-120">
            <div class="container">
                <div class="row grid case-grid-items wow fadeInUp" data-wow-delay=".3s">
                    @foreach ($casestudies as $casestudy)
                        <div class="col-xl-4 col-lg-6 col-md-6 grid-item c-2 c-4">
                            <div class="case__filter-wrapper filter__hover-style mb-30">
                                <div class="case__filter-tumb w-img">
                                    <img src="{{ route($casestudy->image) }}" alt="{{ $casestudy->slug }}">
                                </div>
                                <div class="case__filter-content">
                                    <a class="case__filter-overlay" href="{{ route('casestudy.detail',$casestudy->slug) }}"></a>
                                    <h3><a href="{{ route('casestudy.detail',$casestudy->slug) }}">{{ $casestudy->title }} </a></h3>
                                    <p>{{ $casestudy->short_desc }}</p>
                                    <a class="case__filter-btn" href="{{ route('casestudy.detail',$casestudy->slug) }}"><i
                                            class="fa-regular fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
</x-frontend.app-layout>
