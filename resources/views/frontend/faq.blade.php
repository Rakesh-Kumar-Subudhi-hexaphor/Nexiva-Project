<x-frontend.app-layout>
    @php
        $pageId = 8;
    @endphp
    <main>
        <x-frontend.banner :pageId="$pageId" title="Frequently Asked Questions" />

        <!-- Faq banner area start -->
        <!-- <section class="faq__banner-area d-flex align-items-center">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-8">
                  <div class="faq__info-warapper">
                     <div class="faq__banner-title">
                        <h2>Welcome to our support center!</h2>
                     </div>
                     <form action="#">
                        <div class="faq__search-input">
                           <input type="text" placeholder="Search it sulation...">
                           <button>Submit</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="faq__banner-thumb">
               <img src="assets/img/faq/faq-banner.png" alt="image not found">
            </div>
         </div>
      </section> -->
        <!-- Faq banner area start -->

        <!-- Faq accordion start -->
        <div class="bd__accordion__area pt-120 pb-70">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="section__title-one text-center mb-50">
                        <h2>Some Asked Questions</h2>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="accordion" id="accordionExample">

                        <div class="row custom-gx-5">

                            @foreach ($faqs->chunk(ceil($faqs->count() / 2)) as $chunk)
                                <div class="col-lg-6">
                                    <div class="bd-faq__accordion mb-30">

                                        @foreach ($chunk as $faq)
                                            <div class="accordion-item">

                                                <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapse{{ $faq->id }}"
                                                        aria-expanded="false"
                                                        aria-controls="collapse{{ $faq->id }}">

                                                        {{ $faq->question }}

                                                    </button>
                                                </h2>

                                                <div id="collapse{{ $faq->id }}"
                                                    class="accordion-collapse collapse"
                                                    aria-labelledby="heading{{ $faq->id }}"
                                                    data-bs-parent="#accordionExample">

                                                    <div class="accordion-body">
                                                        <p>{{ $faq->answer }}</p>
                                                    </div>

                                                </div>

                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Faq accordion end -->

        <x-frontend.cta-box />

    </main>
</x-frontend.app-layout>
