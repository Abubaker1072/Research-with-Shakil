<nav class="navbar-white">
    <div class="container nav-container">
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="nav-brand" style="margin-right: 3.5rem; flex-shrink: 0; display: inline-flex; align-items: center;">
            <img src="{{ asset('images/logo.png') }}" alt="Research with Shakil Logo" class="brand-logo-img" id="nav-brand-logo">
        </a>

        <!-- Mobile Hamburger Menu Toggle Button -->
        <button type="button" class="mobile-nav-toggle" id="mobileNavToggle" aria-label="Toggle Navigation Menu">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navigation Links with Dropdown Menus & Mobile Responsive Drawer -->
        <ul class="nav-links" id="mainNavLinks">
            <li>
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                    Home
                </a>
            </li>

            <!-- ABOUT Dropdown Menu -->
            <li class="nav-item-dropdown">
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                    About Us <i class="fas fa-chevron-down" style="font-size: 0.75rem; margin-left: 2px;"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('about') }}" class="dropdown-item">Dr. Shakil Ahmad Profile</a></li>
                    <li><a href="{{ route('about') }}#qualifications" class="dropdown-item">Academic Qualifications</a></li>
                    <li><a href="{{ route('about') }}#teaching-experience" class="dropdown-item">Teaching & Research Advisory</a></li>
                </ul>
            </li>

            <!-- SERVICES & CONSULTATION Dropdown Menu (Merged) -->
            <li class="nav-item-dropdown">
                <a href="{{ route('consultation.index') }}" class="nav-link {{ request()->routeIs('consultation*') || request()->routeIs('services*') ? 'active' : '' }}">
                    Services & Consultation <i class="fas fa-chevron-down" style="font-size: 0.75rem; margin-left: 2px;"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('consultation.index') }}" class="dropdown-item">All Services & Consultation</a></li>
                    <li><a href="{{ route('consultation.index') }}#for-students" class="dropdown-item">1-on-1 Advisory (Students & Researchers)</a></li>
                    <li><a href="{{ route('consultation.index') }}#for-organizations" class="dropdown-item">Institutional & HR Consultation</a></li>
                    <li><a href="{{ route('consultation.index') }}#consultation-booking-form" class="dropdown-item">Book a Consultation Session</a></li>
                </ul>
            </li>

            <!-- COURSES Dropdown Menu -->
            <li class="nav-item-dropdown">
                <a href="{{ route('courses.index') }}" class="nav-link {{ request()->routeIs('courses*') ? 'active' : '' }}">
                    Courses <i class="fas fa-chevron-down" style="font-size: 0.75rem; margin-left: 2px;"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('courses.index') }}" class="dropdown-item">All Online Courses</a></li>
                    <li><a href="{{ route('courses.index', ['category' => 'Literature Review']) }}" class="dropdown-item">Literature Review & SLR</a></li>
                    <li><a href="{{ route('courses.index', ['category' => 'Qualitative Research']) }}" class="dropdown-item">Qualitative Research & Thematic Analysis</a></li>
                    <li><a href="{{ route('courses.index', ['category' => 'Meta-Analysis']) }}" class="dropdown-item">Meta-Analysis</a></li>
                    <li><a href="{{ route('courses.index', ['category' => 'Journal Publishing']) }}" class="dropdown-item">Journal Publishing</a></li>
                    <li><a href="{{ route('courses.index', ['category' => 'Dissertation Help']) }}" class="dropdown-item">Dissertation Help</a></li>
                    <li><a href="{{ route('courses.index', ['category' => 'Bibliometrics']) }}" class="dropdown-item">Bibliometrics</a></li>
                    <li><a href="{{ route('courses.index', ['category' => 'Research Methods']) }}" class="dropdown-item">Research Methods</a></li>
                </ul>
            </li>

            <!-- PUBLICATIONS Dropdown Menu -->
            <li class="nav-item-dropdown">
                <a href="{{ route('publications.index') }}" class="nav-link {{ request()->routeIs('publications*') ? 'active' : '' }}">
                    Publications <i class="fas fa-chevron-down" style="font-size: 0.75rem; margin-left: 2px;"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('publications.index') }}" class="dropdown-item">All Publications</a></li>
                    <li><a href="{{ route('publications.index') }}?type=grant" class="dropdown-item">Grants</a></li>
                    <li><a href="{{ route('publications.index') }}?type=review" class="dropdown-item">Systematic Reviews</a></li>
                    <li><a href="{{ route('publications.index') }}?type=article" class="dropdown-item">Journal Articles</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('contact.index') }}" class="nav-link {{ request()->routeIs('contact*') ? 'active' : '' }}">
                    Contact Us
                </a>
            </li>
        </ul>

        <!-- Right Side Primary CTA -->
        <div class="nav-cta-wrapper">
            <a href="{{ route('contact.index') }}" class="btn-navy" id="nav-lets-talk-btn">
                Let's Talk <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</nav>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const toggleBtn = document.getElementById("mobileNavToggle");
    const navLinks = document.getElementById("mainNavLinks");

    if (toggleBtn && navLinks) {
        toggleBtn.addEventListener("click", function () {
            navLinks.classList.toggle("mobile-active");
            const icon = toggleBtn.querySelector("i");
            if (icon) {
                if (navLinks.classList.contains("mobile-active")) {
                    icon.className = "fas fa-times";
                } else {
                    icon.className = "fas fa-bars";
                }
            }
        });
    }
});
</script>
