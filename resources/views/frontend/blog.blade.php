<x-frontend.app-layout>
    @php
        $pageId = 3;
    @endphp
    <main>
        <x-frontend.banner :pageId="$pageId" title="Our Blog" />

        <!-- Blog Section Start -->
        <section class="blog-section section-padding fix">
            <div class="container">
                <!-- Blog Header -->
                <div class="blog-header text-center mb-60 wow fadeInUp " data-wow-delay=".3s">
                    <div class="bd-ud-section-subtitle mb-30">
                        <span class="bd-ud-section-gradient">Latest Articles</span>
                    </div>
                    <h2 class="blog-main-title">Insights & Technology Updates</h2>
                    <p class="blog-subtitle">Discover expert perspectives on modern IT solutions, digital
                        transformation, and emerging technologies.</p>
                </div>

                <!-- Blog Grid -->
                <div class="row g-4 blog-grid">
                    @foreach ($blogs as $blog)
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="{{ $loop->index * 0.1 }}">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src="{{ asset($blog->thumbnail) }}" alt="{{ $blog->slug }}">
                                    {{-- <div class="blog-category">Technology</div> --}}
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span><i
                                                class="fa-regular fa-calendar"></i>{{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>
                                        {{-- <span><i class="fa-regular fa-clock"></i> 5 min read</span> --}}
                                    </div>
                                    <h3 class="blog-title">
                                        <a href="{{ route('blog.detail', $blog->slug) }}">
                                            {{ $blog->title }}
                                        </a>
                                    </h3>
                                    <p class="blog-excerpt">
                                        {{ Str::limit($blog->short_desc, 120) }}
                                    </p>
                                    <a href="{{ route('blog.detail', $blog->slug) }}" class="blog-read-btn">
                                        Read More <i class="fa-solid fa-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <!-- <div class="blog-pagination mt-60 wow fadeInUp" data-wow-delay=".9s">
                    <nav>
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div> -->
            </div>
        </section>
        <!-- Blog Section End -->
        <x-frontend.cta-box />
    </main>
</x-frontend.app-layout>
