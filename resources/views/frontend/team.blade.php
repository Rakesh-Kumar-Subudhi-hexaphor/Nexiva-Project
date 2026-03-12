<x-frontend.app-layout>
    @php
        $pageId = 11;
    @endphp
    <main>
        <x-frontend.banner :pageId="$pageId" title="Our Team" />
        <!-- Team area start -->
        <section class="team__area pt-120 pb-90">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="section__title-wrapper text-center mb-50">
                        <div class="section__title-one">
                            <span>// Our Team</span>
                            <h2>Meet Our Experienced <br> Team Member</h2>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    @foreach ($teams as $team)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="singel__team-item mb-30">
                                <div class="singel__team-thumb">
                                    <a href="#">
                                        <img src="{{ asset($team->image) }}" alt="image not found">
                                    </a>
                                    <div class="singel__team-content">
                                        <h3><a href="#">{{ $team->title }}</a></h3>
                                        <span>{{ $team->designation }} </span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>
        <x-frontend.cta-box />
        <!-- Team area end -->

    </main>
</x-frontend.app-layout>
