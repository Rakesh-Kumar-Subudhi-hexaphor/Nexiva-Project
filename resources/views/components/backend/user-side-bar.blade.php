<style>
    .site-logo {
        width: 100%;
        padding: 10px;
    }
</style>


<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


    <div class="app-brand demo " style="background: #000">
        <a href="{{ route('admin.dashboard') }}" class="app-brand-link">
            <img src="{{ asset('frontend/assets/img/logo/Nexiva1-removebg.png') }}" alt="bd-ud-logo" class="site-logo">

        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>



    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item">
            <a href="{{ route('admin.dashboard') }}" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate" data-i18n="Dashboards">Dashboards</div>
            </a>

        </li>




        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Apps & Pages">Apps &amp; Pages</span>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.slider') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate" data-i18n="Slider">Slider</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.collaborator') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate" data-i18n="Trusted By">Trusted By</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.certification') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate" data-i18n="Certification">Certification</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.faq') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate" data-i18n="FAQ">FAQ</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.blog') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate" data-i18n="Blog">Blog</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.service') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate" data-i18n="Service">Service</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.solution') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate" data-i18n="Solution">Solution</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.job') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate" data-i18n="Career">Career</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.industry-serve') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate" data-i18n="Industry We Serve">Industry We Serve</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.newsletter') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate" data-i18n="Newsletter">Newsletter</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.seo') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate" data-i18n="Seo">Seo</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.team') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate" data-i18n="Team">Team</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.breadcrumb') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate" data-i18n="Breadcrumb">Breadcrumb</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.testimonial') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate" data-i18n="Testimonial">Testimonial</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.casestudy') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate" data-i18n="Case Study">Case Study</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.policy') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate" data-i18n="Policy">Policy</div>
            </a>
        </li>




        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bx-check-shield'></i>
                <div class="text-truncate" data-i18n="Inquires">Inquires</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.contact') }}" class="menu-link">
                        <div class="text-truncate">Contact</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.career-inquiry') }}" class="menu-link">
                        <div class="text-truncate">Career</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.career-general-inquiry') }}" class="menu-link">
                        <div class="text-truncate">General Career</div>
                    </a>

            </ul>
        </li>





    </ul>



</aside>
<!-- / Menu -->
