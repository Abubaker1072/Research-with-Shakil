<nav class="navbar-white">
    <div class="container nav-container">
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="nav-brand">
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
                    About <i class="fas fa-chevron-down" style="font-size: 0.75rem; margin-left: 2px;"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('about') }}" class="dropdown-item">Dr. Shakil Ahmad Profile</a></li>
                    <li><a href="{{ route('about') }}#qualifications" class="dropdown-item">Academic Qualifications</a></li>
                    <li><a href="{{ route('about') }}#teaching-experience" class="dropdown-item">Teaching & Research Advisory</a></li>
                </ul>
            </li>

            <!-- COURSES Dropdown Menu -->
            <li class="nav-item-dropdown">
                <a href="{{ route('courses.index') }}" class="nav-link {{ request()->routeIs('courses.*') ? 'active' : '' }}">
                    Courses <i class="fas fa-chevron-down" style="font-size: 0.75rem; margin-left: 2px;"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('courses.index') }}" class="dropdown-item">All Online Courses</a></li>
                    <li><a href="{{ route('courses.index') }}?category=Systematic+Literature+Review" class="dropdown-item">Systematic Literature Review</a></li>
                    <li><a href="{{ route('courses.index') }}?category=Qualitative+Analysis" class="dropdown-item">Qualitative & Thematic Analysis</a></li>
                    <li><a href="{{ route('courses.index') }}?category=Bibliometrics" class="dropdown-item">Bibliometrics & Meta-Analysis</a></li>
                </ul>
            </li>

            <!-- TRAININGS Page -->
            <li>
                <a href="{{ route('trainings.index') }}" class="nav-link {{ request()->routeIs('trainings.*') ? 'active' : '' }}">
                    Trainings
                </a>
            </li>

            <!-- CONSULTATION Dropdown Menu -->
            <li class="nav-item-dropdown">
                <a href="{{ route('consultation.index') }}" class="nav-link {{ request()->routeIs('consultation.*') ? 'active' : '' }}">
                    Consultation <i class="fas fa-chevron-down" style="font-size: 0.75rem; margin-left: 2px;"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('consultation.index') }}" class="dropdown-item">1-on-1 Consultation Overview</a></li>
                    <li><a href="{{ route('consultation.index') }}#consultation-booking-form" class="dropdown-item">Book Advisory Session</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('publications.index') }}" class="nav-link {{ request()->routeIs('publications.*') ? 'active' : '' }}">
                    Publications
                </a>
            </li>

            <li>
                <a href="{{ route('contact.index') }}" class="nav-link {{ request()->routeIs('contact.*') ? 'active' : '' }}">
                    Contact
                </a>
            </li>
        </ul>

        <!-- Right Side Primary CTA -->
        <div class="nav-cta-wrapper">
            <a href="#booking-form-section" class="btn-navy" id="nav-lets-talk-btn">
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
