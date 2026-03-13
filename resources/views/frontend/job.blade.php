<x-frontend.app-layout>
    @php
        $pageId = 6;
    @endphp
    <main>
        <x-frontend.banner :pageId="$pageId" title="Careers at Nexiva Technologies" />
        <!-- Careers Hero Section -->
        <section class="career-hero-section bg-css" data-background="assets/img">
            <div class="container">
                <div class="row align-items-center min-vh-80">
                    <div class="col-lg-8 ">
                        <div class="career-hero-content wow fadeInUp " data-wow-delay=".3s">
                            <div class="bd-ud-section-subtitle ">
                                <span class="bd-ud-section-gradient">Join Our Team</span>
                            </div>
                            <h1 class="career-hero-title text-black">Build Your Career in Technology Innovation</h1>
                            <p class="career-hero-description text-black">
                                At Nexiva Technologies, we're not just building software – we're shaping the future of
                                digital
                                transformation. Join a team of passionate innovators working on cutting-edge technology
                                solutions.
                            </p>
                            <div class="career-hero-cta mt-4">
                                <a href="#open-positions" class="btn btn-primary me-3">
                                    View Open Positions <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <a href="#why-join-us" class="btn  btn-primary me-3">
                                    Why Join Us?
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="career-hero-image wow fadeInUp" data-wow-delay=".5s">
                            <img src="{{ asset('frontend/assets/img/Blog/blog-post-6.jpg') }}" alt="Team Collaboration"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="career-hero-wave">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#ffffff" fill-opacity="1"
                        d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                    </path>
                </svg>
            </div>
        </section>

        <!-- Why Join Us Section -->
        <section class="why-join-section section-padding" id="why-join-us">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center">
                        <div class="section-header wow fadeInUp" data-wow-delay=".3s">
                            <div class="bd-ud-section-subtitle mb-30">
                                <span class="bd-ud-section-gradient">Why Nexiva?</span>
                            </div>
                            <h2 class="section-title">Why Build Your Career With Us</h2>
                            <p class="section-subtitle">We foster an environment where innovation meets opportunity, and
                                talent meets
                                growth.</p>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Benefit 1 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fa-solid fa-rocket"></i>
                            </div>
                            <h3 class="benefit-title">Growth Opportunities</h3>
                            <p class="benefit-description">
                                Continuous learning programs, mentorship, and clear career progression paths to help you
                                reach your full
                                potential.
                            </p>
                            <ul class="benefit-list">
                                <li><i class="fa-solid fa-check"></i> Skill Development Programs</li>
                                <li><i class="fa-solid fa-check"></i> Leadership Training</li>
                                <li><i class="fa-solid fa-check"></i> Cross-functional Exposure</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Benefit 2 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <h3 class="benefit-title">Collaborative Culture</h3>
                            <p class="benefit-description">
                                Work with brilliant minds in an inclusive environment that values teamwork,
                                transparency, and open
                                communication.
                            </p>
                            <ul class="benefit-list">
                                <li><i class="fa-solid fa-check"></i> Agile Team Structure</li>
                                <li><i class="fa-solid fa-check"></i> Knowledge Sharing Sessions</li>
                                <li><i class="fa-solid fa-check"></i> Regular Team Events</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Benefit 3 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fa-solid fa-lightbulb"></i>
                            </div>
                            <h3 class="benefit-title">Innovation Focus</h3>
                            <p class="benefit-description">
                                Work on cutting-edge technologies and solve complex challenges that make a real impact
                                on businesses
                                worldwide.
                            </p>
                            <ul class="benefit-list">
                                <li><i class="fa-solid fa-check"></i> Latest Tech Stack</li>
                                <li><i class="fa-solid fa-check"></i> R&D Initiatives</li>
                                <li><i class="fa-solid fa-check"></i> Hackathons & Innovation Labs</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Benefit 4 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <h3 class="benefit-title">Work-Life Balance</h3>
                            <p class="benefit-description">
                                Flexible work arrangements, comprehensive wellness programs, and a supportive
                                environment for your
                                overall well-being.
                            </p>
                            <ul class="benefit-list">
                                <li><i class="fa-solid fa-check"></i> Flexible Hours</li>
                                <li><i class="fa-solid fa-check"></i> Remote Work Options</li>
                                <li><i class="fa-solid fa-check"></i> Wellness Programs</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Benefit 5 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fa-solid fa-award"></i>
                            </div>
                            <h3 class="benefit-title">Competitive Benefits</h3>
                            <p class="benefit-description">
                                Attractive compensation packages, health insurance, retirement plans, and
                                performance-based rewards.
                            </p>
                            <ul class="benefit-list">
                                <li><i class="fa-solid fa-check"></i> Health Insurance</li>
                                <li><i class="fa-solid fa-check"></i> Performance Bonuses</li>
                                <li><i class="fa-solid fa-check"></i> Retirement Plans</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Benefit 6 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fa-solid fa-globe"></i>
                            </div>
                            <h3 class="benefit-title">Global Exposure</h3>
                            <p class="benefit-description">
                                Work with international clients and teams, gaining exposure to global business practices
                                and diverse
                                perspectives.
                            </p>
                            <ul class="benefit-list">
                                <li><i class="fa-solid fa-check"></i> International Projects</li>
                                <li><i class="fa-solid fa-check"></i> Global Team Collaboration</li>
                                <li><i class="fa-solid fa-check"></i> Cultural Exchange Programs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Life at Nexiva -->
        <section class="life-at-nexiva section-padding bg-light">
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <div class="section-header wow fadeInUp" data-wow-delay=".3s">
                            <div class="bd-ud-section-subtitle mb-25">
                                <span class="bd-ud-section-gradient ">Our Culture</span>
                            </div>
                            <h2 class="section-title">Life at Nexiva Technologies</h2>
                            <p class="section-subtitle">We believe great work happens in environments where people feel
                                valued,
                                supported, and inspired.</p>
                        </div>

                        <div class="culture-features">
                            <div class="culture-feature wow fadeInUp" data-wow-delay=".4s">
                                <div class="feature-icon">
                                    <i class="fa-solid fa-handshake"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Collaborative Environment</h4>
                                    <p>Open workspaces that encourage teamwork and spontaneous idea sharing.</p>
                                </div>
                            </div>

                            <div class="culture-feature wow fadeInUp" data-wow-delay=".5s">
                                <div class="feature-icon">
                                    <i class="fa-solid fa-graduation-cap"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Continuous Learning</h4>
                                    <p>Regular training sessions, workshops, and access to online learning platforms.
                                    </p>
                                </div>
                            </div>

                            <div class="culture-feature wow fadeInUp" data-wow-delay=".6s">
                                <div class="feature-icon">
                                    <i class="fa-solid fa-trophy"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Recognition & Rewards</h4>
                                    <p>Regular recognition programs and rewards for outstanding contributions.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="culture-gallery wow fadeInUp" data-wow-delay=".7s">
                            <div class="row g-3">
                                <div class="col-6">
                                    <img src="{{ asset('frontend/assets/img/Blog/project-details-04.jpg') }}"
                                        alt="Team Meeting" class="img-fluid rounded-3">
                                </div>
                                <div class="col-6">
                                    <img src="{{ asset('frontend/assets/img/Blog/blog-post-5.jpg') }}"
                                        alt="Training Session" class="img-fluid rounded-3">
                                </div>
                                <div class="col-6 mt-3">
                                    <img src="{{ asset('frontend/assets/img/Blog/blog-post-2.jpg') }}"
                                        alt="Team Celebration" class="img-fluid rounded-3">
                                </div>
                                <div class="col-6 mt-3">
                                    <img src="{{ asset('frontend/assets/img/Blog/blog-post-4.jpg') }}"
                                        alt="Work Environment" class="img-fluid rounded-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Open Positions Section -->

        <section class="open-positions-section section-padding" id="open-positions">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center">
                        <div class="section-header wow fadeInUp" data-wow-delay=".3s">
                            <div class="bd-ud-section-subtitle mb-30">
                                <span class="bd-ud-section-gradient">Open Positions</span>
                            </div>
                            <h2 class="section-title">Join Our Growing Team</h2>
                            <p class="section-subtitle">Explore exciting opportunities across various domains and
                                technologies.</p>
                        </div>
                    </div>
                </div>

                <!-- Job Listings in Grid Layout (3 per row) -->
                <div class="row g-4 job-listings-grid">
                    @foreach ($jobs as $job)
                        <div class="col-lg-4 col-md-6">
                            <div class="job-card-grid wow fadeInUp" data-wow-delay=".4s"
                                data-department="{{ $job->slug }}" data-location="{{ $job->location }}"
                                data-type="{{ $job->type }}">
                                <div class="job-header">
                                    <div class="job-title-section">
                                        <h3 class="job-title">{{ $job->title }}</h3>
                                        <div class="job-meta">
                                            {{-- <span class="job-department">Software Development</span> --}}
                                            <span class="job-location">{{ $job->location }}</span>
                                            <span class="job-type">{{ $job->type }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-description">
                                    <p>{{ $job->description }}</p>
                                    <div class="job-requirements">
                                        <h5>Requirements:</h5>
                                        <ul>
                                            @foreach ($job->requirements as $point)
                                                <li>{{ $point }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="job-action mt-3">
                                    <button class="btn btn-outline-primary w-100 apply-btn"
                                        data-job-id="{{ $job->id }}" data-job-title="{{ $job->title }}">
                                        Apply Now <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>



        <!-- Application Modal -->
        <div class="modal fade" id="applicationModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Apply for <span id="modal-job-title"></span></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form id="jobApplicationForm" action="{{ route('career.post.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="job_id" id="job_id">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Full Name *</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email Address *</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone Number *</label>
                                        <input type="tel" class="form-control" name="phone" required>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Cover Letter</label>
                                        <textarea class="form-control" name="message" rows="4"
                                            placeholder="Tell us why you're interested in this position..."></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Upload Resume/CV *</label>
                                        <div class="file-upload-wrapper">
                                            <input type="file" class="form-control" name="cv"
                                                accept=".pdf,.doc,.docx" required>
                                            <small class="text-muted">Accepted formats: PDF, DOC, DOCX (Max:
                                                2MB)</small>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" form="jobApplicationForm" class="btn btn-primary">
                            Submit Application <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Application Process -->
        <section class="application-process section-padding bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center">
                        <div class="section-header wow fadeInUp" data-wow-delay=".3s">
                            <div class="bd-ud-section-subtitle mb-30">
                                <span class="bd-ud-section-gradient">Hiring Process</span>
                            </div>
                            <h2 class="section-title">Our Application Process</h2>
                            <p class="section-subtitle">We've designed a transparent and efficient hiring process to
                                ensure the best
                                experience for all candidates.</p>
                        </div>
                    </div>
                </div>

                <div class="process-steps">
                    <div class="process-step wow fadeInUp" data-wow-delay=".4s">
                        <div class="step-number">01</div>
                        <div class="step-content">
                            <h3>Application Submission</h3>
                            <p>Submit your application through our portal. Make sure to include your resume and any
                                relevant portfolio
                                links.</p>
                        </div>
                    </div>

                    <div class="process-step wow fadeInUp" data-wow-delay=".5s">
                        <div class="step-number">02</div>
                        <div class="step-content">
                            <h3>Initial Screening</h3>
                            <p>Our HR team reviews your application and will contact you within 5-7 business days if
                                there's a
                                potential fit.</p>
                        </div>
                    </div>

                    <div class="process-step wow fadeInUp" data-wow-delay=".6s">
                        <div class="step-number">03</div>
                        <div class="step-content">
                            <h3>Technical Assessment</h3>
                            <p>Depending on the role, you may complete a technical assignment or assessment to evaluate
                                your skills.
                            </p>
                        </div>
                    </div>

                    <div class="process-step wow fadeInUp" data-wow-delay=".7s">
                        <div class="step-number">04</div>
                        <div class="step-content">
                            <h3>Interview Rounds</h3>
                            <p>You'll have interviews with our technical team and hiring managers to assess both
                                technical and
                                cultural fit.</p>
                        </div>
                    </div>

                    <div class="process-step wow fadeInUp" data-wow-delay=".8s">
                        <div class="step-number">05</div>
                        <div class="step-content">
                            <h3>Final Decision</h3>
                            <p>We make our hiring decision and extend an offer to successful candidates within 1-2 weeks
                                of final
                                interviews.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="career-faq section-padding">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center">
                        <div class="section-header wow fadeInUp" data-wow-delay=".3s">
                            <div class="bd-ud-section-subtitle mb-30">
                                <span class="bd-ud-section-gradient">FAQs</span>
                            </div>
                            <h2 class="section-title">Frequently Asked Questions</h2>
                            <p class="section-subtitle">Find answers to common questions about working at Nexiva
                                Technologies.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10 mx-auto">

                        <div class="accordion" id="careerAccordion">

                            @foreach ($faqs as $faq)
                                <div class="accordion-item wow fadeInUp"
                                    data-wow-delay="{{ 0.4 + $loop->index * 0.1 }}s">

                                    <h3 class="accordion-header">
                                        <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq{{ $faq->id }}">

                                            {{ $faq->question }}

                                        </button>
                                    </h3>

                                    <div id="faq{{ $faq->id }}"
                                        class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                        data-bs-parent="#careerAccordion">

                                        <div class="accordion-body">
                                            {{ $faq->answer }}
                                        </div>

                                    </div>

                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <!-- <section class="career-cta section-padding">
      <div class="container">
        <div class="cta-wrapper-application bg-gradient rounded-4 p-5 wow fadeInUp" data-wow-delay=".3s">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <div class="cta-content">
                <h3 class="text-black mb-3">Don't See the Perfect Role?</h3>
                <p class="text-black mb-0">We're always looking for talented individuals. Send us your resume and we'll
                  keep you in mind for future opportunities.</p>
              </div>
            </div>
            <div class="col-lg-4 text-lg-end">
              <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#generalApplicationModal">
                Submit General Application <i class="fa-solid fa-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section> -->



        <section class="bd-ud-cta pt-105  mb-50"
            data-background="{{ asset('frontend/assets/img/bg/ud-cta-bg.png') }}">
            <div class="container">
                <div class="row align-items-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-lg-7">
                        <div class="bd-ud-cta-content mb-50">
                            <div class="bd-ud-section-title mb-35">
                                <h2 class="text-white">Don't See the Perfect Role?</h2>
                            </div>
                            <p>We're always looking for talented individuals. Send us your resume and we'll
                                keep you in mind for future opportunities.</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="bd-ud-cta-btn text-lg-end mb-50">
                            <a class="bd-ud-btn" data-bs-toggle="modal" data-bs-target="#generalApplicationModal">
                                Submit General
                                Application<i class="fa-sharp fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- General Application Modal -->
        <div class="modal fade" id="generalApplicationModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">General Application</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form id="generalApplicationForm" method="POST" action="{{ route('career.general.inquiry') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Full Name *</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email Address *</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone Number *</label>
                                        <input type="tel" class="form-control" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Desired Role/Department</label>
                                        <input type="text" class="form-control" name="desired_role"
                                            placeholder="e.g., Software Developer, DevOps Engineer">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Tell us about yourself</label>
                                        <textarea class="form-control" name="message" rows="4"
                                            placeholder="Share your skills, experience, and what you're looking for..."></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Upload Resume/CV *</label>
                                        <div class="file-upload-wrapper">
                                            <input type="file" class="form-control" name="cv"
                                                accept=".pdf,.doc,.docx" required>
                                            <small class="text-muted">Accepted formats: PDF, DOC, DOCX (Max:
                                                5MB)</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Portfolio/LinkedIn Profile (Optional)</label>
                                        <input type="url" class="form-control" name="portfolio"
                                            placeholder="https://">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input"
                                            required>
                                        <label class="form-check-label">
                                            I agree to the <a href="#">Privacy Policy</a> and consent to my
                                            data being stored for
                                            future opportunities.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" form="generalApplicationForm" class="btn btn-primary">
                            Submit Application <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.querySelectorAll('.apply-btn').forEach(button => {

            button.addEventListener('click', function() {

                let jobTitle = this.getAttribute('data-job-title');
                let jobId = this.getAttribute('data-job-id');

                document.getElementById('modal-job-title').innerText = jobTitle;
                document.getElementById('job_id').value = jobId;

                let modal = new bootstrap.Modal(document.getElementById('applicationModal'));
                modal.show();

            });

        });
    </script>
</x-frontend.app-layout>
