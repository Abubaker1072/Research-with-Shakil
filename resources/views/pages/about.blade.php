@extends('layouts.app')

@section('title', 'About Dr. Muhammad Shakil Ahmad | Senior Lecturer & Management Researcher')

@push('styles')
<style>
    .about-header-banner {
        background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #0f172a 100%);
        color: #ffffff;
        padding: 4.5rem 0 4rem 0;
        position: relative;
        overflow: hidden;
    }
    .about-header-banner::before {
        content: '';
        position: absolute;
        width: 500px;
        height: 500px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(234, 179, 8, 0.12) 0%, rgba(0,0,0,0) 70%);
        top: -100px;
        right: -50px;
        pointer-events: none;
    }
    .about-header-grid {
        display: grid;
        grid-template-columns: 1fr 340px;
        gap: 3.5rem;
        align-items: flex-end;
    }
    .about-instructor-label {
        font-size: 0.82rem;
        font-weight: 800;
        letter-spacing: 1.5px;
        color: #fef08a;
        text-transform: uppercase;
        margin-bottom: 0.5rem;
    }
    .about-instructor-name {
        font-family: var(--font-heading);
        font-size: 2.8rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 0.5rem;
        line-height: 1.2;
    }
    .about-instructor-subtitle {
        font-size: 1.15rem;
        color: #cbd5e1;
        font-weight: 500;
        line-height: 1.6;
    }
    .about-main-grid {
        display: grid;
        grid-template-columns: 1fr 340px;
        gap: 3.5rem;
        align-items: start;
    }
    .about-profile-card {
        background: #ffffff;
        border-radius: 24px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 20px 45px rgba(0, 0, 0, 0.1);
        padding: 2.25rem 1.75rem;
        text-align: center;
        margin-top: -7.5rem;
        position: relative;
        z-index: 20;
    }
    .about-avatar-circle {
        width: 165px;
        height: 165px;
        border-radius: 50%;
        background: #eab308;
        margin: 0 auto 1.5rem auto;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(234, 179, 8, 0.35);
        border: 4px solid #ffffff;
    }
    .about-avatar-circle img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .about-social-row {
        display: flex;
        justify-content: center;
        gap: 0.6rem;
        margin-top: 1.25rem;
    }
    .about-social-btn {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        border: 1.5px solid #e2e8f0;
        color: #1e3a8a;
        background: #f8fafc;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
        text-decoration: none;
        transition: all 0.25s ease;
    }
    .about-social-btn:hover {
        background: #1e3a8a;
        color: #ffffff;
        border-color: #1e3a8a;
        transform: translateY(-2px);
    }
    .about-stats-container {
        display: flex;
        gap: 3rem;
        margin-bottom: 2.25rem;
        padding-bottom: 1.75rem;
        border-bottom: 1px solid #e2e8f0;
        flex-wrap: wrap;
    }
    .about-stat-number {
        font-size: 1.4rem;
        font-weight: 800;
        color: #0f172a;
    }
    .about-stat-label {
        font-size: 0.88rem;
        color: #64748b;
        margin-top: 0.15rem;
    }
    .about-section-heading {
        font-family: var(--font-heading);
        font-size: 2.1rem;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 1.25rem;
        line-height: 1.25;
    }
    .about-text-body {
        color: #334155;
        font-size: 1.05rem;
        line-height: 1.8;
        margin-bottom: 1.25rem;
    }
    
    /* Service Assistance Cards */
    .help-service-card {
        background: #ffffff;
        border: 1px solid #cbd5e1;
        border-radius: 16px;
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.03);
        transition: all 0.25s ease;
    }
    .help-service-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 24px rgba(30, 58, 138, 0.08);
        border-color: #1e3a8a;
    }

    /* Training Photo Showcase Grid */
    .training-photos-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 1.5rem;
        margin-top: 1.5rem;
    }
    .training-photo-card {
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid #e2e8f0;
        box-shadow: 0 6px 18px rgba(0,0,0,0.06);
        position: relative;
        background: #0f172a;
        transition: transform 0.3s ease;
    }
    .training-photo-card:hover {
        transform: translateY(-4px);
    }
    .training-photo-img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        display: block;
        opacity: 0.9;
        transition: opacity 0.3s ease;
    }
    .training-photo-card:hover .training-photo-img {
        opacity: 1;
    }
    .training-photo-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(0deg, rgba(15,23,42,0.95) 0%, rgba(15,23,42,0.4) 70%, transparent 100%);
        padding: 1rem;
        color: #ffffff;
    }

    @media (max-width: 768px) {
        .about-header-grid,
        .about-main-grid {
            grid-template-columns: 1fr !important;
            gap: 1.5rem !important;
        }
        .about-profile-card {
            margin-top: 1.5rem !important;
            width: 100% !important;
        }
    }
</style>
@endpush

@section('content')

<!-- Header Banner -->
<section class="about-header-banner">
    <div class="container">
        <div class="about-header-grid">
            <div>
                <div class="about-instructor-label">TEESSIDE UNIVERSITY (UK) • SENIOR LECTURER</div>
                <h1 class="about-instructor-name">Dr. Muhammad Shakil Ahmad</h1>
                <div class="about-instructor-subtitle">
                    Management researcher and educator specializing in Human Resource Management, Project Management, and Organizational Innovation, teaching at Teesside University, UK. 15+ years of academic experience across the UK, Oman, Pakistan, and South Korea.
                </div>
            </div>
            <div><!-- Spacer for Top Right Floating Card --></div>
        </div>
    </div>
</section>

<!-- Main Profile & Content Section -->
<section style="padding: 3rem 0 5rem 0; background: #ffffff;">
    <div class="container">
        <div class="about-main-grid">
            
            <!-- Left Main Column -->
            <div class="reveal-scroll-up">
                
                <!-- Trust Stats Strip -->
                <div class="about-stats-container">
                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                        <i class="fas fa-users" style="font-size: 1.5rem; color: #1e3a8a;"></i>
                        <div>
                            <div class="about-stat-number">{{ $stats['learners'] ?? '16,000+' }}</div>
                            <div class="about-stat-label">Global Learners</div>
                        </div>
                    </div>

                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                        <i class="fas fa-journal-whills" style="font-size: 1.5rem; color: #0284c7;"></i>
                        <div>
                            <div class="about-stat-number">{{ $stats['ssci_papers'] ?? '90+ Papers' }}</div>
                            <div class="about-stat-label">SSCI & Scopus Q1</div>
                        </div>
                    </div>

                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                        <i class="fas fa-star" style="font-size: 1.5rem; color: #eab308;"></i>
                        <div>
                            <div class="about-stat-number">H-Index {{ $stats['h_index'] ?? '39' }}</div>
                            <div class="about-stat-label">Google Scholar</div>
                        </div>
                    </div>
                </div>

                <!-- Meet Dr. Muhammad Shakil Ahmad Heading & Bio (Section 4.1) -->
                <h2 class="about-section-heading">Meet Dr. Muhammad Shakil Ahmad</h2>

                <p class="about-text-body">
                    Dr. Muhammad Shakil Ahmad is a management researcher and educator specializing in Human Resource Management, Project Management, and Organizational Innovation, currently teaching at Teesside University in the UK.
                </p>

                <p class="about-text-body">
                    With over 15 years of academic experience across the UK, Oman, Pakistan, and South Korea, he has built a career around one goal: making advanced research skills and professional development accessible — to undergraduates, postgraduates, executives, and organizations alike.
                </p>

                <p class="about-text-body">
                    He has authored more than 90 papers in SSCI-indexed journals (H-index: 39), supervised DBA, MBA, and PhD scholars, and led funded research projects spanning healthcare, education, and sustainable development.
                </p>

                <p class="about-text-body">
                    Outside the classroom, his courses, workshops, and consultations have helped thousands of learners understand research methodology, defend dissertations with confidence, and strengthen HR practice inside their organizations.
                </p>

                <!-- Structured Career Achievements Block (Academic Qualifications & Achievements) -->
                <div id="qualifications" style="background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 20px; padding: 2rem; margin: 2.5rem 0; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03); scroll-margin-top: 110px;">
                    <h3 style="font-family: var(--font-heading); font-size: 1.45rem; font-weight: 800; color: #0f172a; margin-bottom: 1.25rem; display: flex; align-items: center; gap: 0.6rem;">
                        <i class="fas fa-trophy" style="color: #eab308; font-size: 1.3rem;"></i> Academic Qualifications & Career Achievements
                    </h3>
                    
                    <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 1.1rem; color: #334155; font-size: 0.98rem; line-height: 1.65;">
                        @foreach($awardsAndMemberships as $award)
                        <li style="display: flex; align-items: flex-start; gap: 0.85rem;">
                            <i class="fas fa-check-circle" style="color: #0284c7; margin-top: 4px; font-size: 1.1rem;"></i>
                            <span><strong>{{ $award->title }}:</strong> {{ $award->description }} ({{ $award->organization ?? 'Global' }})</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Teaching & Research Advisory Section -->
                <div id="teaching-experience" style="margin: 3rem 0; scroll-margin-top: 110px;">
                    <h3 style="font-family: var(--font-heading); font-size: 1.5rem; font-weight: 800; color: #0f172a; margin-bottom: 1.5rem;">
                        Teaching & Research Advisory Frameworks
                    </h3>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem;">
                        
                        <!-- 1. On-Demand Courses -->
                        <div class="help-service-card">
                            <div>
                                <div style="font-size: 0.78rem; font-weight: 800; color: #0284c7; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.4rem;">SELF-PACED LEARNING</div>
                                <h4 style="font-weight: 800; font-size: 1.15rem; color: #0f172a; margin-bottom: 0.6rem;">On-Demand Courses</h4>
                                <p style="font-size: 0.92rem; color: #475569; line-height: 1.6; margin-bottom: 1.25rem;">
                                    Self-paced courses covering research methodology, dissertation writing, and data analysis, available on Udemy with lifetime access.
                                </p>
                            </div>
                            <a href="{{ route('courses.index') }}" class="btn-navy" style="padding: 0.75rem 1.25rem; font-size: 0.88rem; text-align: center; border-radius: 10px;">
                                Browse Courses <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                            </a>
                        </div>

                        <!-- 2. Live Trainings & Workshops -->
                        <div class="help-service-card">
                            <div>
                                <div style="font-size: 0.78rem; font-weight: 800; color: #0284c7; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.4rem;">INSTITUTIONAL CAPACITY</div>
                                <h4 style="font-weight: 800; font-size: 1.15rem; color: #0f172a; margin-bottom: 0.6rem;">Live Trainings & Workshops</h4>
                                <p style="font-size: 0.92rem; color: #475569; line-height: 1.6; margin-bottom: 1.25rem;">
                                    Customized, cohort-based training for universities, HR departments, and organizations, delivered online or in person.
                                </p>
                            </div>
                            <a href="{{ route('trainings.index') }}" class="btn-navy" style="padding: 0.75rem 1.25rem; font-size: 0.88rem; text-align: center; border-radius: 10px;">
                                View Trainings <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                            </a>
                        </div>

                        <!-- 3. One-on-One Consultation -->
                        <div class="help-service-card">
                            <div>
                                <div style="font-size: 0.78rem; font-weight: 800; color: #0284c7; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.4rem;">1-ON-1 ADVISORY</div>
                                <h4 style="font-weight: 800; font-size: 1.15rem; color: #0f172a; margin-bottom: 0.6rem;">One-on-One Consultation</h4>
                                <p style="font-size: 0.92rem; color: #475569; line-height: 1.6; margin-bottom: 1.25rem;">
                                    Direct, personalized guidance on dissertations, research design, journal publication, and HR strategy from a published SSCI author.
                                </p>
                            </div>
                            <a href="{{ route('consultation.index') }}" class="btn-navy" style="padding: 0.75rem 1.25rem; font-size: 0.88rem; text-align: center; border-radius: 10px;">
                                Book a Session <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <!-- Training Photo Showcase Section (Dynamic From Database) -->
                <div style="margin: 3.5rem 0 2rem 0; padding-top: 2.5rem; border-top: 1px solid #e2e8f0;">
                    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem; margin-bottom: 1rem;">
                        <div>
                            <div style="font-size: 0.82rem; font-weight: 800; color: #0284c7; text-transform: uppercase; letter-spacing: 1px;">WORKSHOP & BOOTCAMP GALLERY</div>
                            <h3 style="font-family: var(--font-heading); font-size: 1.6rem; font-weight: 800; color: #0f172a; margin: 0.2rem 0 0 0;">
                                Institutional Training & Research Workshops
                            </h3>
                        </div>
                        <a href="{{ route('trainings.index') }}" style="color: #1e3a8a; font-weight: 700; font-size: 0.9rem; text-decoration: none;">
                            Explore All Programs <i class="fas fa-arrow-right" style="margin-left: 4px;"></i>
                        </a>
                    </div>
                    <p style="color: #64748b; font-size: 0.95rem; margin-bottom: 1.5rem;">
                        Visual highlights from university capacity-building workshops, academic seminars, and hands-on software bootcamps conducted worldwide.
                    </p>

                    <div class="training-photos-grid">
                        @foreach($galleryImages as $photo)
                        <div class="training-photo-card">
                            <img src="{{ asset($photo->image_path) }}" alt="{{ $photo->title }}" class="training-photo-img">
                            <div class="training-photo-caption">
                                <div style="font-weight: 800; font-size: 0.95rem; color: #fef08a;">{{ $photo->title }}</div>
                                <div style="font-size: 0.8rem; color: #cbd5e1;">{{ $photo->caption }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Google Scholar Profile Banner -->
                <div style="margin: 2.5rem 0 1rem 0; background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); padding: 1.75rem; border-radius: 16px; color: #ffffff; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1.25rem;">
                    <div>
                        <div style="font-size: 0.8rem; font-weight: 800; color: #fef08a; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.35rem;">SCOPUS & GOOGLE SCHOLAR</div>
                        <div style="font-size: 1.2rem; font-weight: 800;">Google Scholar Citations & H-Index 39 Profile</div>
                        <div style="font-size: 0.88rem; color: #cbd5e1; margin-top: 0.2rem;">Author of 90+ papers in peer-reviewed SSCI & Scopus Q1 journals.</div>
                    </div>
                    <a href="https://scholar.google.com/citations?user=Kr6MOa0AAAAJ&hl=en&oi=ao" target="_blank" class="btn-navy" style="background: #eab308; color: #0f172a; font-weight: 800; padding: 0.8rem 1.5rem; border-radius: 10px; text-decoration: none; white-space: nowrap;">
                        <i class="fas fa-graduation-cap" style="margin-right: 6px;"></i> View Scholar Profile <i class="fas fa-external-link-alt" style="font-size: 0.75rem; margin-left: 4px;"></i>
                    </a>
                </div>

            </div>

            <!-- Right Side: Profile Card -->
            <div class="reveal-scroll-right">
                <div class="about-profile-card">
                    <div class="about-avatar-circle">
                        <img src="{{ asset('images/hero_dr_shakil_cutout_v2.jpg') }}" alt="Dr. Muhammad Shakil Ahmad">
                    </div>

                    <h3 style="font-family: var(--font-heading); font-size: 1.3rem; font-weight: 800; color: #0f172a; margin-bottom: 0.35rem;">Dr. Muhammad Shakil Ahmad</h3>
                    <p style="font-size: 0.85rem; color: #64748b; font-weight: 600; margin-bottom: 1.25rem;">Senior Lecturer • Teesside University (UK)</p>

                    <div style="display: flex; flex-direction: column; gap: 0.65rem; margin-bottom: 1.5rem; text-align: left; background: #f8fafc; padding: 1rem; border-radius: 12px; border: 1px solid #e2e8f0; font-size: 0.85rem; color: #334155;">
                        @foreach($qualifications as $qual)
                        <div><i class="fas {{ $qual->icon }}" style="color: {{ $qual->icon_color }}; width: 20px;"></i> <strong>{{ $qual->label }}:</strong> {{ $qual->title }}</div>
                        @endforeach
                    </div>

                    <div class="about-social-row">
                        <a href="https://www.udemy.com/user/dr-muhammad-shakil-ahmad/" target="_blank" class="about-social-btn" title="Udemy Profile">
                            <i class="fab fa-udemy"></i>
                        </a>
                        <a href="https://scholar.google.com/citations?user=Kr6MOa0AAAAJ&hl=en&oi=ao" target="_blank" class="about-social-btn" title="Google Scholar">
                            <i class="fas fa-graduation-cap"></i>
                        </a>
                        <a href="https://linkedin.com" target="_blank" class="about-social-btn" title="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://twitter.com" target="_blank" class="about-social-btn" title="Twitter / X">
                            <i class="fab fa-x-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const revealObserver = new IntersectionObserver(function (entries, observer) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add("in-view");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    document.querySelectorAll(".reveal-scroll-up, .reveal-scroll-right, .reveal-card-box").forEach(function (el) {
        revealObserver.observe(el);
    });
});
</script>

@endsection
