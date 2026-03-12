<x-frontend.app-layout>
    @php
    $meta
    @endphp
    <main>
        <!-- Blog Details Breadcrumb area start -->
        <div class="bd-ud-breadcrumb__area bg-css blog-breadcrumb" data-background="{{asset('frontend/assets/img/bg/ud-breadcrumb.jpg')}}">
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
                                <h2 class="text-white">Blog Detail</h2>
                                <p class="blog-hero-subtitle text-white">
                                    Stay updated with the latest technology insights, industry trends, and best
                                    practices from Nexiva's experts.
                                </p>
                            </div>
                            <div class="bd-ud-breadcrumb__menu">
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><span><a href="{{ route('index') }}">Home</a></span>
                                        </li>
                                        <li class="trail-item"><span><a href="{{ route('blog') }}">Blog</a></span></li>
                                        <li class="trail-item trail-end"><span>Blog Details</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Details Breadcrumb area end -->

        <!-- Blog Details Content Start -->
        <section class="blog-details-section section-padding">
            <div class="container">
                <div class="row">
                    <!-- Main Content -->
                    <div class="col-lg-8">
                        <article class="blog-details-content">
                            <!-- Featured Image -->
                            <div class="blog-featured-image mb-5 wow fadeInUp" data-wow-delay=".2s">
                                <img src="{{ asset($blog->thumbnail) }}" alt="{{ $blog->slug }}"
                                    class="img-fluid rounded-3 ">
                            </div>

                            <!-- Content -->
                            <div class="blog-content">
                                <!-- Introduction -->
                                <div class="blog-intro mb-5 wow fadeInUp" data-wow-delay=".3s">
                                    <h2 class="section-title">{{ $blog->title }}</h2>

                                </div>

                                <!-- Main Content Sections -->
                                <div class="blog-body">
                                    {!! $blog->description !!}
                                </div>

                                <!-- Tags & Share -->
                                <div class="blog-footer wow fadeInUp" data-wow-delay="1.1s">
                                    <div class="row align-items-center">
                                        <div class="col-md-8 mb-3 mb-md-0">
                                            <div class="blog-tags">
                                                <span class="tags-label">Tags:</span>
                                                @php
                                                    $tagsArray = array_filter(explode(',', $blog->tag));
                                                @endphp
                                                @foreach ($tagsArray as $tag)
                                                    <a href="#" class="tag">{{ $tag }}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-4 text-md-end">
                      <div class="social-share">
                        <span class="share-label">Share:</span>
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                      </div>
                    </div> --}}
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Author Bio -->
                        <div class="author-bio mb-5 wow fadeInUp" data-wow-delay="1.2s">
                            <div class="author-wrapper">
                                <div class="author-image">
                                    <img src="assets/img/Blog/post-comment-2.png" alt="Sarah Johnson">
                                </div>
                                <div class="author-info">
                                    <h3>Sarah Johnson</h3>
                                    <p class="author-title">Technology Lead & Senior Solutions Architect</p>
                                    <p class="author-description">With over 12 years of experience in IT consulting and
                                        digital
                                        transformation, Sarah specializes in helping businesses leverage technology for
                                        operational
                                        excellence and competitive advantage.</p>
                                    <div class="author-social">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                        <a href="#"><i class="fab fa-medium"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Comments Section -->
                        <div class="comments-section mb-5 wow fadeInUp" data-wow-delay="1.3s">
                            <h3 class="comments-title">Comments (3)</h3>

                            <!-- Comment 1 -->
                            <div class="comment-item">
                                <div class="comment-wrapper">
                                    <div class="comment-author">
                                        <img src="assets/img/Blog/post-comment.png" alt="Michael Chen">
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-header">
                                            <h4>Michael Chen</h4>
                                            <span class="comment-date">January 16, 2025 at 2:30 PM</span>
                                            <div class="comment-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                        <p>Excellent insights! We implemented similar solutions last quarter and saw a
                                            35% increase in team
                                            productivity. The section on implementation strategies was particularly
                                            helpful.</p>
                                        <a href="#" class="reply-btn">Reply</a>
                                    </div>
                                </div>

                                <!-- Reply -->
                                <div class="comment-item reply">
                                    <div class="comment-wrapper">
                                        <div class="comment-author">
                                            <img src="assets/img/Blog/post-comment-2.png" alt="Sarah Johnson">
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-header">
                                                <h4>Sarah Johnson</h4>
                                                <span class="comment-date">January 16, 2025 at 3:45 PM</span>
                                            </div>
                                            <p>Thank you, Michael! Great to hear about your success. Would love to hear
                                                more about your
                                                implementation journey.</p>
                                            <a href="#" class="reply-btn">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Comment 2 -->
                            <div class="comment-item">
                                <div class="comment-wrapper">
                                    <div class="comment-author">
                                        <img src="assets/img/Blog/post-comment.png" alt="David Wilson">
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-header">
                                            <h4>David Wilson</h4>
                                            <span class="comment-date">January 15, 2025 at 5:20 PM</span>
                                            <div class="comment-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                        </div>
                                        <p>Great article! Could you elaborate more on the cybersecurity aspects when
                                            implementing these
                                            solutions? Security is our primary concern.</p>
                                        <a href="#" class="reply-btn">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Comment Form -->
                        <div class="comment-form wow fadeInUp" data-wow-delay="1.4s">
                            <h3 class="form-title">Leave a Comment</h3>
                            <form id="comment-form">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Your Comment" rows="5" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="rating-input">
                                            <span>Your Rating:</span>
                                            <div class="stars">
                                                <i class="fa-regular fa-star" data-rating="1"></i>
                                                <i class="fa-regular fa-star" data-rating="2"></i>
                                                <i class="fa-regular fa-star" data-rating="3"></i>
                                                <i class="fa-regular fa-star" data-rating="4"></i>
                                                <i class="fa-regular fa-star" data-rating="5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">
                                            Post Comment <i class="fa-solid fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-4">
                        <aside class="blog-sidebar">
                            <!-- Search Widget -->
                            <!-- <div class="sidebar-widget search-widget mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h3 class="widget-title">Search</h3>
                <form class="search-form">
                  <input type="text" placeholder="Search articles...">
                  <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
              </div> -->

                            <!-- Categories Widget -->
                            <div class="sidebar-widget categories-widget mb-5 wow fadeInUp" data-wow-delay=".4s">
                                <h3 class="widget-title">Categories</h3>
                                <ul class="categories-list">
                                    <li><a href="#">Technology <span class="count">(15)</span></a></li>
                                    <li><a href="#">Cloud Solutions <span class="count">(08)</span></a></li>
                                    <li><a href="#">Cybersecurity <span class="count">(12)</span></a></li>
                                    <li><a href="#">Digital Transformation <span class="count">(10)</span></a>
                                    </li>
                                    <li><a href="#">Software Development <span class="count">(18)</span></a>
                                    </li>
                                    <li><a href="#">Business Strategy <span class="count">(07)</span></a></li>
                                    <li><a href="#">IT Consulting <span class="count">(09)</span></a></li>
                                </ul>
                            </div>

                            <!-- Recent Posts Widget -->
                            <div class="sidebar-widget recent-posts-widget mb-5 wow fadeInUp" data-wow-delay=".5s">
                                <h3 class="widget-title">Recent Articles</h3>
                                <div class="recent-posts">
                                    <div class="recent-post-item">
                                        <div class="post-image">
                                            <img src="assets/img/Blog/project-details-03.jpg" alt="Recent Post">
                                        </div>
                                        <div class="post-content">
                                            <h5><a href="blog-details.html">Choosing the Right Cloud Platform: AWS vs
                                                    Azure vs Google
                                                    Cloud</a></h5>
                                            <span class="post-date">Jan 10, 2025</span>
                                        </div>
                                    </div>
                                    <div class="recent-post-item">
                                        <div class="post-image">
                                            <img src="assets/img/Blog/project-details-04.jpg" alt="Recent Post">
                                        </div>
                                        <div class="post-content">
                                            <h5><a href="blog-details.html">How Custom Software Solutions Improve
                                                    Customer Experience</a></h5>
                                            <span class="post-date">Jan 5, 2025</span>
                                        </div>
                                    </div>
                                    <div class="recent-post-item">
                                        <div class="post-image">
                                            <img src="assets/img/Blog/service-details-01.jpg" alt="Recent Post">
                                        </div>
                                        <div class="post-content">
                                            <h5><a href="blog-details.html">Top Cybersecurity Trends Every Business
                                                    Should Know in 2025</a>
                                            </h5>
                                            <span class="post-date">Dec 20, 2024</span>
                                        </div>
                                    </div>
                                    <div class="recent-post-item">
                                        <div class="post-image">
                                            <img src="assets/img/Blog/service-details-2.jpg" alt="Recent Post">
                                        </div>
                                        <div class="post-content">
                                            <h5><a href="blog-details.html">DevOps Best Practices for Efficient
                                                    Software Delivery</a></h5>
                                            <span class="post-date">Dec 15, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tags Widget -->
                            <div class="sidebar-widget tags-widget mb-5 wow fadeInUp" data-wow-delay=".6s">
                                <h3 class="widget-title">Popular Tags</h3>
                                <div class="tags-list">
                                    <a href="#" class="tag">IT Solutions</a>
                                    <a href="#" class="tag">Cloud</a>
                                    <a href="#" class="tag">Security</a>
                                    <a href="#" class="tag">AI</a>
                                    <a href="#" class="tag">Digital</a>
                                    <a href="#" class="tag">Transformation</a>
                                    <a href="#" class="tag">Productivity</a>
                                    <a href="#" class="tag">Automation</a>
                                    <a href="#" class="tag">Business</a>
                                    <a href="#" class="tag">Technology</a>
                                </div>
                            </div>

                            <!-- Newsletter Widget -->
                            <!-- <div class="sidebar-widget newsletter-widget wow fadeInUp" data-wow-delay=".7s">
                <div class="newsletter-box">
                  <h3 class="widget-title">Subscribe to Newsletter</h3>
                  <p>Get the latest technology insights directly in your inbox.</p>
                  <form class="newsletter-form">
                    <input type="email" placeholder="Your email address" required>
                    <button type="submit" class="btn btn-primary w-100">
                      Subscribe <i class="fa-solid fa-arrow-right"></i>
                    </button>
                  </form>
                </div>
              </div> -->
                        </aside>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Articles -->
        <section class="related-articles section-padding bg-light">
            <div class="container">
                <div class="section-header text-center mb-5 wow fadeInUp" data-wow-delay=".2s">
                    <h2 class="section-title">Related Articles</h2>
                    <p class="section-subtitle">Discover more insights on technology and business transformation</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="related-article-card">
                            <div class="article-image">
                                <img src="assets/img/Blog/blog-post-5.jpg" alt="Cloud Platform Comparison">
                            </div>
                            <div class="article-content">
                                <span class="article-category">Cloud</span>
                                <h4><a href="blog-details.html">Choosing the Right Cloud Platform: AWS vs Azure vs
                                        Google Cloud</a></h4>
                                <div class="article-meta">
                                    <span><i class="fa-regular fa-calendar"></i> Jan 10, 2025</span>
                                    <span><i class="fa-regular fa-clock"></i> 7 min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay=".4s">
                        <div class="related-article-card">
                            <div class="article-image">
                                <img src="assets/img/Blog/blog-post-6.jpg" alt="Software Solutions">
                            </div>
                            <div class="article-content">
                                <span class="article-category">Development</span>
                                <h4><a href="blog-details.html">How Custom Software Solutions Improve Customer
                                        Experience</a></h4>
                                <div class="article-meta">
                                    <span><i class="fa-regular fa-calendar"></i> Jan 5, 2025</span>
                                    <span><i class="fa-regular fa-clock"></i> 6 min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay=".5s">
                        <div class="related-article-card">
                            <div class="article-image">
                                <img src="assets/img/Blog/blog-post-2.jpg" alt="Cybersecurity Trends">
                            </div>
                            <div class="article-content">
                                <span class="article-category">Security</span>
                                <h4><a href="blog-details.html">Top Cybersecurity Trends Every Business Should Know in
                                        2025</a></h4>
                                <div class="article-meta">
                                    <span><i class="fa-regular fa-calendar"></i> Dec 20, 2024</span>
                                    <span><i class="fa-regular fa-clock"></i> 10 min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-frontend.cta-box />
    </main>
</x-frontend.app-layout>
