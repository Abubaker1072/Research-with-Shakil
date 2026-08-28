@extends('layouts.app')

@section('title', 'Dr. Shakil Ahmad | Research Methodology Courses, Training & HR Consulting')
@section('meta_description', 'Dr. Muhammad Shakil Ahmad, PhD, is a UK-based research methodology expert and HR consultant with 16,000+ learners trained. Explore courses, trainings & consultations.')
@section('meta_keywords', 'research methodology courses online, dissertation coach, PhD research training, academic writing consultant, HR consultant UK, thesis writing help, Dr. Shakil Ahmad')

@push('styles')
<style>
    /* Smooth Scroll Reveal Animation Styles */
    .reveal-scroll {
        opacity: 0;
        transform: translateY(35px);
        transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        will-change: opacity, transform;
    }
    .reveal-scroll-left {
        opacity: 0;
        transform: translateX(-35px);
        transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        will-change: opacity, transform;
    }
    .reveal-scroll-right {
        opacity: 0;
        transform: translateX(35px) scale(0.95);
        transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        will-change: opacity, transform;
    }

    .reveal-scroll.in-view,
    .reveal-scroll-left.in-view,
    .reveal-scroll-right.in-view {
        opacity: 1 !important;
        transform: translate(0, 0) scale(1) !important;
    }

    /* Staggered Career Achievement Box Animations */
    .achievement-card-box {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity 0.65s cubic-bezier(0.16, 1, 0.3, 1), transform 0.65s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease, border-color 0.3s ease !important;
        will-change: opacity, transform;
    }
    .achievement-card-box.in-view {
        opacity: 1 !important;
        transform: translateY(0) !important;
    }
    .achievement-card-box:hover {
        transform: translateY(-6px) !important;
        box-shadow: 0 14px 30px rgba(2, 132, 199, 0.14) !important;
        border-color: #0284c7 !important;
    }

    /* Hero & Meet Shakil Section Responsive Layout Styles (iOS & Android Optimized) */
    .hero-institution-badge {
        font-size: 0.8rem;
        font-weight: 800;
        color: #fef08a;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        margin-bottom: 0.85rem;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 0.35rem 0.9rem;
        border-radius: 30px;
        backdrop-filter: blur(8px);
    }
    .hero-portrait-card {
        border-radius: 24px;
        overflow: hidden;
        border: 4px solid rgba(255,255,255,0.18);
        box-shadow: 0 20px 45px rgba(0,0,0,0.35);
        max-width: 440px;
        margin: 0 auto;
        background: #0f172a;
    }
    .hero-portrait-card img {
        width: 100%;
        height: 480px;
        object-fit: cover;
        display: block;
    }

    .meet-shakil-grid {
        display: grid;
        grid-template-columns: 1fr 340px;
        gap: 3.5rem;
        align-items: center;
    }

    .meet-shakil-img-card {
        border-radius: 20px;
        overflow: hidden;
        border: 4px solid #ffffff;
        box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        background: #0f172a;
        transition: transform 0.3s ease;
    }
    .meet-shakil-img-card img {
        width: 100%;
        height: 380px;
        object-fit: cover;
        display: block;
    }

    @media (max-width: 992px) {
        .reveal-scroll-left,
        .reveal-scroll-right {
            transform: translateY(25px) !important;
        }

        .hero-grid,
        .meet-shakil-grid {
            grid-template-columns: 1fr !important;
            gap: 2rem !important;
        }

        .hero-portrait-card {
            max-width: 360px !important;
            margin-top: 1.25rem !important;
        }

        .hero-portrait-card img {
            height: 380px !important;
        }

        .meet-shakil-img-card {
            max-width: 380px !important;
            margin: 1.25rem auto 0 auto !important;
        }

        .meet-shakil-img-card img {
            height: 320px !important;
        }
    }

    @media (max-width: 576px) {
        .hero-title-mdi {
            font-size: 1.65rem !important;
            line-height: 1.28 !important;
        }

        .hero-text-mdi {
            font-size: 0.95rem !important;
            line-height: 1.65 !important;
        }

        .hero-institution-badge {
            font-size: 0.72rem !important;
            padding: 0.3rem 0.75rem !important;
            letter-spacing: 0.8px !important;
        }

        .hero-portrait-card {
            max-width: 100% !important;
            border-radius: 20px !important;
        }

        .hero-portrait-card img {
            height: 320px !important;
        }

        .meet-shakil-img-card img {
            height: 270px !important;
        }

        .hero-cta-buttons {
            flex-direction: column !important;
            width: 100% !important;
            gap: 0.75rem !important;
        }

        .hero-cta-buttons a {
            width: 100% !important;
            text-align: center !important;
            justify-content: center !important;
            padding: 0.85rem 1.25rem !important;
        }
    }
</style>
@endpush

@section('content')

<!-- Hero Section with Dynamic Campus Background Image from Database -->
<section class="mdi-hero-section" style="background: linear-gradient(180deg, rgba(8, 26, 56, 0.70) 0%, rgba(14, 38, 78, 0.78) 100%), url('{{ asset($heroBgImage ?? 'images/hero_campus_bg.jpg') }}') center/cover no-repeat;">
    <div class="container hero-grid">
        <!-- Left Side: Title, Description & Primary CTA -->
        <div>
            <h1 class="hero-title-mdi" style="font-size: 2.25rem; line-height: 1.25;">
                Research Methodology Courses, Training & HR Consulting with Dr. Shakil Ahmad
            </h1>
            <p class="hero-text-mdi" style="font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.25rem;">
                Dr. Muhammad Shakil Ahmad is a Senior Lecturer at Teesside International Business School, Teesside University (UK), and a research methodology, project management, and HR expert who has trained over 16,000 learners worldwide through online courses, live training programs, and one-on-one consultations. He holds a PhD in Management, has published 90+ papers in SSCI-indexed journals (H-index 39), and has 15+ years of academic experience across the UK, Oman, Pakistan, and South Korea.
            </p>
            <p style="color: #cbd5e1; font-size: 1rem; margin-bottom: 2rem; line-height: 1.6; font-weight: 500;">
                Get expert help with research methodology, academic writing, and HR strategy  through self-paced courses, institutional training, or direct consultation.
            </p>
            
            <div class="hero-cta-buttons" style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="{{ route('courses.index') }}" class="btn-navy" id="hero-explore-courses" style="padding: 0.9rem 2.2rem; font-weight: 800; background: #eab308; color: #0f172a; border-radius: 10px;">
                    Explore My Courses <i class="fas fa-graduation-cap" style="margin-left: 6px;"></i>
                </a>
                <a href="{{ route('consultation.index') }}" class="btn-light-surface" style="padding: 0.9rem 1.8rem; font-weight: 700; border-radius: 10px;">
                    Book a Consultation <i class="fas fa-calendar-check" style="margin-left: 6px;"></i>
                </a>
            </div>
        </div>

        <!-- Right Side: Official Hero Portrait Photo -->
        <div>
            <div class="hero-portrait-card">
                <img src="{{ asset($heroPortraitImage ?? 'images/dr_shakil_hero.jpg') }}" alt="Dr. Muhammad Shakil Ahmad - Senior Lecturer at Teesside University UK">
            </div>
        </div>
    </div>
</section>

<!-- Trust Strip / Stat Bar -->
<section class="stats-bar-compact" id="stats-bar-trigger">
    <div class="container stats-grid-compact">
        <div class="stat-card-compact">
            <div class="stat-number-compact" data-target="16000">0</div>
            <div class="stat-label-compact">16,000+ Learners Empowered Worldwide</div>
        </div>
        <div class="stat-card-compact">
            <div class="stat-number-compact" data-target="1800">0</div>
            <div class="stat-label-compact">1,800+ Five-Star Reviews on Udemy</div>
        </div>
        <div class="stat-card-compact">
            <div class="stat-number-compact" data-target="{{ $stats['courses'] }}">0</div>
            <div class="stat-label-compact">18 Courses in Research Methodology & Academic Writing</div>
        </div>
        <div class="stat-card-compact">
            <div class="stat-number-compact" data-target="90">0</div>
            <div class="stat-label-compact">90+ Papers in SSCI-Indexed Journals | H-Index 39</div>
        </div>
    </div>
</section>







<!-- MEET DR. MUHAMMAD SHAKIL AHMAD SECTION -->
<section class="section-padding" style="background: #ffffff; border-bottom: 1px solid #e2e8f0; overflow: hidden;" id="meet-shakil-section">
    <div class="container" style="max-width: 1050px;">
        <div class="meet-shakil-grid">
            <div class="reveal-scroll-left">
                <div class="section-subtitle" style="color: #0284c7; font-weight: 800; letter-spacing: 1.5px;">ABOUT THE INSTRUCTOR</div>
                <h2 style="font-family: var(--font-heading); font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 1.25rem;">
                    Meet Dr. Muhammad Shakil Ahmad
                </h2>
                <p style="color: #334155; font-size: 1.02rem; line-height: 1.75; margin-bottom: 1rem;">
                    Dr. Muhammad Shakil Ahmad is a management researcher and educator specializing in Human Resource Management, Project Management, and Organizational Innovation, currently teaching at Teesside University in the UK.
                </p>
                <p style="color: #334155; font-size: 1.02rem; line-height: 1.75; margin-bottom: 1rem;">
                    With over 15 years of academic experience across the UK, Oman, Pakistan, and South Korea, he has built a career around one goal: making advanced research skills and professional development accessible — to undergraduates, postgraduates, executives, and organizations alike.
                </p>
                <p style="color: #334155; font-size: 1.02rem; line-height: 1.75; margin-bottom: 1rem;">
                    He has authored more than 90 papers in SSCI-indexed journals (H-index: 39), supervised DBA, MBA, and PhD scholars, and led funded research projects spanning healthcare, education, and sustainable development.
                </p>
                <p style="color: #334155; font-size: 1.02rem; line-height: 1.75; margin-bottom: 1.5rem;">
                    Outside the classroom, his courses, workshops, and consultations have helped thousands of learners understand research methodology, defend dissertations with confidence, and strengthen HR practice inside their organizations.
                </p>
                <a href="{{ route('about') }}" class="btn-navy" style="padding: 0.85rem 1.75rem; font-weight: 700;">
                    Read the Full Bio <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                </a>
            </div>
            <div style="text-align: center;" class="reveal-scroll-right">
                <div class="meet-shakil-img-card">
                    <img src="{{ asset($bioImage ?? 'images/dr_shakil_presentation_quote.jpg') }}" alt="Dr. Muhammad Shakil Ahmad Presentation Bio">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHAT I CAN HELP YOU WITH SECTION (3 Service Blocks) -->
<section class="section-padding" style="background: var(--surface);" id="overview-section">
    <div class="container">
        <div class="section-header text-center" style="margin-bottom: 3rem;">
            <div class="section-subtitle">SERVICES OFFERED</div>
            <h2 class="section-title">What I Can Help You With</h2>
            <p style="color: var(--muted); max-width: 650px; margin: 0 auto; font-size: 1rem;">
                Get expert help through self-paced courses, institutional training, or direct consultation.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem; align-items: stretch;">
            
            <!-- 1. COURSES OVERVIEW SECTION -->
            <div style="background: #ffffff; border-radius: 18px; border: 1px solid #e2e8f0; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); transition: transform 0.3s ease, box-shadow 0.3s ease; height: 100%; cursor: pointer;" class="overview-card-editorial" onclick="window.location.href='/courses'">
                <div>
                    <div style="height: 160px; position: relative; overflow: hidden; background: #0f172a;">
                        <img src="{{ asset('images/courses_overview_banner.png') }}" alt="Courses Overview" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.95;">
                        <div style="position: absolute; top: 12px; left: 12px; background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(8px); border: 1px solid rgba(255, 255, 255, 0.2); color: #fef08a; font-size: 0.75rem; font-weight: 700; padding: 0.28rem 0.7rem; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.8px;">
                            <i class="fas fa-graduation-cap" style="margin-right: 4px;"></i> On-Demand Courses
                        </div>
                    </div>

                    <div style="padding: 1.4rem 1.4rem 0.85rem 1.4rem;">
                        <div style="min-height: 2.8rem; display: flex; align-items: center; margin-bottom: 0.4rem;">
                            <h3 style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0;">On-Demand Courses</h3>
                        </div>
                        <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1rem; min-height: 4.8rem;">
                            18 self-paced courses covering research methodology, dissertation writing, and data analysis, available on Udemy with lifetime access.
                        </p>

                        <div style="display: flex; flex-wrap: wrap; gap: 0.4rem; margin-bottom: 1rem; min-height: 52px; align-content: flex-start;">
                            <span style="font-size: 0.76rem; font-weight: 600; padding: 0.22rem 0.6rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">18 Courses</span>
                            <span style="font-size: 0.76rem; font-weight: 600; padding: 0.22rem 0.6rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">Lifetime Access</span>
                            <span style="font-size: 0.76rem; font-weight: 600; padding: 0.22rem 0.6rem; border-radius: 6px; background: #fef9c3; color: #854d0e; border: 1px solid #fef08a;">Udemy Platform</span>
                        </div>
                    </div>
                </div>

                <div style="padding: 0 1.4rem 1.4rem 1.4rem; margin-top: auto;">
                    <a href="{{ route('courses.index') }}" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.75rem 1.25rem; font-size: 0.88rem; font-weight: 700; border-radius: 10px;" id="overview-view-courses-btn" onclick="event.stopPropagation();">
                        Browse Courses <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                    </a>
                </div>
            </div>

            <!-- 2. TRAININGS OVERVIEW SECTION -->
            <div style="background: #ffffff; border-radius: 18px; border: 1px solid #e2e8f0; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); transition: transform 0.3s ease, box-shadow 0.3s ease; height: 100%; cursor: pointer;" class="overview-card-editorial" onclick="window.location.href='{{ route('services.index') }}#live-trainings'">
                <div>
                    <div style="height: 160px; position: relative; overflow: hidden; background: #0f172a;">
                        <img src="{{ asset('images/trainings_overview_banner.jpg') }}" alt="Trainings Overview" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.95;">
                        <div style="position: absolute; top: 12px; left: 12px; background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(8px); border: 1px solid rgba(255, 255, 255, 0.2); color: #fef08a; font-size: 0.75rem; font-weight: 700; padding: 0.28rem 0.7rem; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.8px;">
                            <i class="fas fa-chalkboard-teacher" style="margin-right: 4px;"></i> Live Workshops
                        </div>
                    </div>

                    <div style="padding: 1.4rem 1.4rem 0.85rem 1.4rem;">
                        <div style="min-height: 2.8rem; display: flex; align-items: center; margin-bottom: 0.4rem;">
                            <h3 style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0; line-height: 1.25;">Live Trainings & Workshops</h3>
                        </div>
                        <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1rem; min-height: 4.8rem;">
                            Customized, cohort-based training for universities, HR departments, and organizations, delivered online or in person.
                        </p>

                        <div style="display: flex; flex-wrap: wrap; gap: 0.4rem; margin-bottom: 1rem; min-height: 52px; align-content: flex-start;">
                            <span style="font-size: 0.76rem; font-weight: 600; padding: 0.22rem 0.6rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">Universities</span>
                            <span style="font-size: 0.76rem; font-weight: 600; padding: 0.22rem 0.6rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">HR Departments</span>
                            <span style="font-size: 0.76rem; font-weight: 600; padding: 0.22rem 0.6rem; border-radius: 6px; background: #e0f2fe; color: #0369a1; border: 1px solid #bae6fd;">Online / In Person</span>
                        </div>
                    </div>
                </div>

                <div style="padding: 0 1.4rem 1.4rem 1.4rem; margin-top: auto;">
                    <a href="{{ route('services.index') }}#live-trainings" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.75rem 1.25rem; font-size: 0.88rem; font-weight: 700; border-radius: 10px;" id="overview-explore-trainings-btn" onclick="event.stopPropagation();">
                        View Trainings <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                    </a>
                </div>
            </div>

            <!-- 3. CONSULTATION OVERVIEW SECTION -->
            <div style="background: #ffffff; border-radius: 18px; border: 1px solid #e2e8f0; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); transition: transform 0.3s ease, box-shadow 0.3s ease; height: 100%; cursor: pointer;" class="overview-card-editorial" onclick="window.location.href='/consultation'">
                <div>
                    <div style="height: 160px; position: relative; overflow: hidden; background: #0f172a;">
                        <img src="{{ asset('images/consultation_overview_banner.jpg') }}" alt="Consultation Overview" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.95;">
                        <div style="position: absolute; top: 12px; left: 12px; background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(8px); border: 1px solid rgba(255, 255, 255, 0.2); color: #fef08a; font-size: 0.75rem; font-weight: 700; padding: 0.28rem 0.7rem; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.8px;">
                            <i class="fas fa-user-tie" style="margin-right: 4px;"></i> 1-on-1 Advisory
                        </div>
                    </div>

                    <div style="padding: 1.4rem 1.4rem 0.85rem 1.4rem;">
                        <div style="min-height: 2.8rem; display: flex; align-items: center; margin-bottom: 0.4rem;">
                            <h3 style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0;">One-on-One Consultation</h3>
                        </div>
                        <p style="color: #475569; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1rem; min-height: 4.8rem;">
                            Direct, personalized guidance on dissertations, research design, journal publication, and HR strategy from a published SSCI author.
                        </p>

                        <div style="display: flex; flex-wrap: wrap; gap: 0.4rem; margin-bottom: 1rem; min-height: 52px; align-content: flex-start;">
                            <span style="font-size: 0.76rem; font-weight: 600; padding: 0.22rem 0.6rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">Dissertation Mentorship</span>
                            <span style="font-size: 0.76rem; font-weight: 600; padding: 0.22rem 0.6rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">SSCI Journals</span>
                            <span style="font-size: 0.76rem; font-weight: 600; padding: 0.22rem 0.6rem; border-radius: 6px; background: #f0fdf4; color: #166534; border: 1px solid #bbf7d0;">HR Strategy</span>
                        </div>
                    </div>
                </div>

                <div style="padding: 0 1.4rem 1.4rem 1.4rem; margin-top: auto;">
                    <a href="{{ route('consultation.index') }}" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.75rem 1.25rem; font-size: 0.88rem; font-weight: 700; border-radius: 10px;" id="overview-book-consultation-btn" onclick="event.stopPropagation();">
                        Book a Session <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SCHOLAR QUOTE SECTION -->
<section class="scholar-quote-section" id="scholar-quote-trigger" style="padding: 3rem 0 !important; background: var(--surface);">
    <div class="container">
        <div class="scholar-quote-grid-photo-left" style="display: grid; grid-template-columns: 300px 1fr; gap: 2.5rem; align-items: center;">
            <div class="scroll-quote-img-left" id="quote-img-element">
                <div class="scholar-photo-frame" style="max-width: 300px; padding: 0.75rem; border-radius: 12px; margin: 0 auto; background: #ffffff; border: 1px solid var(--border); box-shadow: 0 8px 20px rgba(14, 38, 78, 0.06);">
                    <img src="{{ asset('images/review_magnifying_glass.jpg') }}" alt="Academic Literature Review & Publication Mentorship" class="scholar-photo-img" style="height: 210px; width: 100%; object-fit: cover; border-radius: 8px;">
                </div>
            </div>

            <div class="scroll-quote-text-right" id="quote-text-element">
                <blockquote class="scholar-quote-text" style="font-family: var(--font-body), system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important; font-size: 1.25rem !important; font-weight: 500 !important; font-style: normal !important; color: #0f172a !important; line-height: 1.6 !important; margin-bottom: 1rem !important;">
                    “Enrolling in the Research & Mentorship program with Dr. Shakil has been a transformative decision that has sharpened academic acumen and publication success”
                </blockquote>

                <div class="scholar-author-name" style="font-size: 1.02rem !important; font-weight: 600 !important; color: #0f172a !important;">— Dr. Ayesha Rehman</div>
                <div class="scholar-author-tag" style="font-size: 0.75rem !important; font-weight: 700 !important; color: #b91c1c !important; letter-spacing: 0.08em; text-transform: uppercase; margin-top: 0.2rem;">SCOPUS Q1 PUBLISHED SCHOLAR 2024</div>
            </div>
        </div>
    </div>
</section>

<!-- CAREER ACHIEVEMENTS SECTION (6 Bullets with Staggered Scroll Animation) -->
<section style="background: #f0f7ff; padding: 4.5rem 0; border-top: 1px solid #bae6fd; border-bottom: 1px solid #bae6fd; overflow: hidden;" id="career-achievements-section">
    <div class="container">
        <div class="section-header text-center reveal-scroll" style="margin-bottom: 2.5rem;">
            <div class="section-subtitle" style="color: #0284c7;">ACADEMIC & MENTORSHIP HIGHLIGHTS</div>
            <h2 class="section-title">Career Achievements</h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
            
            <!-- Bullet 1: Research Leadership -->
            <div class="achievement-card-box" style="background: #ffffff; padding: 1.5rem 1.6rem; border-radius: 14px; border: 1px solid #cbd5e1; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);" data-delay="0">
                <div style="font-weight: 800; font-size: 1.05rem; color: #0f172a; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="fas fa-microscope" style="color: #0284c7;"></i> Research Leadership
                </div>
                <p style="color: #475569; font-size: 0.92rem; line-height: 1.65; margin: 0;">
                    Principal Investigator and Co-Principal Investigator on funded projects in healthcare, education, and sustainable development policy.
                </p>
            </div>

            <!-- Bullet 2: Teaching & Mentorship -->
            <div class="achievement-card-box" style="background: #ffffff; padding: 1.5rem 1.6rem; border-radius: 14px; border: 1px solid #cbd5e1; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);" data-delay="1">
                <div style="font-weight: 800; font-size: 1.05rem; color: #0f172a; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="fas fa-user-graduate" style="color: #0284c7;"></i> Teaching & Mentorship
                </div>
                <p style="color: #475569; font-size: 0.92rem; line-height: 1.65; margin: 0;">
                    DBA, MBA, PhD, and undergraduate instruction with student satisfaction ratings of 4.6+.
                </p>
            </div>

            <!-- Bullet 3: Published Authority -->
            <div class="achievement-card-box" style="background: #ffffff; padding: 1.5rem 1.6rem; border-radius: 14px; border: 1px solid #cbd5e1; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);" data-delay="2">
                <div style="font-weight: 800; font-size: 1.05rem; color: #0f172a; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="fas fa-book-open" style="color: #0284c7;"></i> Published Authority
                </div>
                <p style="color: #475569; font-size: 0.92rem; line-height: 1.65; margin: 0;">
                    Peer-reviewed work in the Journal of Knowledge Management, Personnel Review, Leadership & Organization Development Journal, Journal of Intellectual Capital, and CSR & Environmental Management.
                </p>
            </div>

            <!-- Bullet 4: Institutional Leadership -->
            <div class="achievement-card-box" style="background: #ffffff; padding: 1.5rem 1.6rem; border-radius: 14px; border: 1px solid #cbd5e1; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);" data-delay="3">
                <div style="font-weight: 800; font-size: 1.05rem; color: #0f172a; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="fas fa-university" style="color: #0284c7;"></i> Institutional Leadership
                </div>
                <p style="color: #475569; font-size: 0.92rem; line-height: 1.65; margin: 0;">
                    Member of academic councils, ethics committees, and editorial boards.
                </p>
            </div>

            <!-- Bullet 5: Global Recognition -->
            <div class="achievement-card-box" style="background: #ffffff; padding: 1.5rem 1.6rem; border-radius: 14px; border: 1px solid #cbd5e1; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);" data-delay="4">
                <div style="font-weight: 800; font-size: 1.05rem; color: #0f172a; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="fas fa-award" style="color: #0284c7;"></i> Global Recognition
                </div>
                <p style="color: #475569; font-size: 0.92rem; line-height: 1.65; margin: 0;">
                    Young Scholar Award nominee, American Society for Public Administration (2015); member, ASPA and the Community of Inquiry Framework (University of Calgary, Canada); Associate Regional Director, International Institute of Marketing Professionals, Canada.
                </p>
            </div>

            <!-- Bullet 6: Grant Success -->
            <div class="achievement-card-box" style="background: #ffffff; padding: 1.5rem 1.6rem; border-radius: 14px; border: 1px solid #cbd5e1; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);" data-delay="5">
                <div style="font-weight: 800; font-size: 1.05rem; color: #0f172a; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
                    <i class="fas fa-hand-holding-usd" style="color: #0284c7;"></i> Grant Success
                </div>
                <p style="color: #475569; font-size: 0.92rem; line-height: 1.65; margin: 0;">
                    Research funding from the Ministry of Higher Education and Scientific Research (Oman) and the Higher Education Commission of Pakistan.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- NINE DOMAINS. REAL DEPTH. SECTION WITH RESEARCH IMAGERY GRID (VN4, Item 9) -->
<section class="domains-section">
    <div class="container">
        
        <div class="domains-grid">
            <div>
                <div class="domains-subtitle">RESEARCH & TRAINING DOMAINS</div>
                <h2 class="domains-headline">Nine domains.<br>Real depth.</h2>
                <p style="color: #475569; font-size: 1rem; line-height: 1.65; margin-top: 1rem;">
                    Comprehensive methodological expertise spanning systematic reviews, qualitative research, research paper writing, grant proposals, and journal publishing.
                </p>
                <div style="margin-top: 1.75rem; border-radius: 16px; overflow: hidden; border: 1px solid #cbd5e1; box-shadow: 0 12px 28px rgba(0, 0, 0, 0.1);">
                    <img src="{{ asset('images/dr_shakil_teaching_symposium.jpg') }}" alt="Dr. Muhammad Shakil Ahmad presenting at Global Reach Symposium" style="width: 100%; height: 310px; object-fit: cover; object-position: center 20%; display: block;">
                </div>
            </div>

            <div class="domains-list-two-col">
                <div class="domain-item-row">
                    <span class="domain-num">01</span>
                    <span class="domain-text">Systematic Literature Review & Meta-Analysis</span>
                </div>
                <div class="domain-item-row">
                    <span class="domain-num">06</span>
                    <span class="domain-text">Research Methodology & Theoretical Frameworks</span>
                </div>
                <div class="domain-item-row">
                    <span class="domain-num">02</span>
                    <span class="domain-text">Qualitative & Thematic Analysis</span>
                </div>
                <div class="domain-item-row">
                    <span class="domain-num">07</span>
                    <span class="domain-text">Bibliometrics & Science Mapping (VOSviewer)</span>
                </div>
                <div class="domain-item-row">
                    <span class="domain-num">03</span>
                    <span class="domain-text">High-Impact Q1 Journal Publishing (Scopus/SSCI)</span>
                </div>
                <div class="domain-item-row">
                    <span class="domain-num">08</span>
                    <span class="domain-text">Research Paper Writing & Publication Strategy</span>
                </div>
                <div class="domain-item-row">
                    <span class="domain-num">04</span>
                    <span class="domain-text">Dissertation & Thesis Proposal Mentorship</span>
                </div>
                <div class="domain-item-row">
                    <span class="domain-num">09</span>
                    <span class="domain-text">Faculty Development & Institutional Advisory</span>
                </div>
                <div class="domain-item-row">
                    <span class="domain-num">05</span>
                    <span class="domain-text">Academic Grant Writing & Funding Proposals</span>
                </div>
            </div>
        </div>



    </div>
</section>

<!-- Responsive Booking & Consultation Form Section -->
<section id="booking-form-section" class="section-padding" style="background: var(--surface);">
    <div class="container" style="max-width: 660px;">
        <div style="background: #ffffff; padding: 1.75rem 2rem; border-radius: 16px; border: 1px solid var(--border); box-shadow: 0 10px 30px rgba(0,0,0,0.06);">
            <div class="section-header" style="margin-bottom: 1.25rem;">
                <div class="section-subtitle">GET IN TOUCH</div>
                <h2 class="section-title" style="font-size: 1.65rem; margin-bottom: 0.2rem;">Book a Consultation</h2>
            </div>

            <form action="{{ route('contact.store') }}" method="POST" id="consultationForm">
                @csrf
                <div class="form-grid-responsive">
                    <div class="form-group">
                        <label class="form-label">Full Name *</label>
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email Address *</label>
                        <input type="email" name="email" class="form-control" placeholder="your.name@university.edu" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Academic Role *</label>
                    <select name="academic_level" class="form-control" required>
                        <option value="PhD Candidate">PhD Candidate</option>
                        <option value="Master's Researcher">Master's Student</option>
                        <option value="University Faculty">University Faculty</option>
                        <option value="Corporate / HR Leadership">Corporate / HR Leadership</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Program / Service Requested *</label>
                    <select name="service_type" id="service_type" class="form-control" required>
                        <option value="Dissertation & Thesis Coaching">Dissertation & Thesis Coaching</option>
                        <option value="Systematic Literature Review & Meta-Analysis Consulting">Systematic Literature Review & Meta-Analysis Consulting</option>
                        <option value="Scientific Paper Writing & Journal Submission Support">Scientific Paper Writing & Journal Submission Support</option>
                        <option value="Grant Writing & Research Advisory">Grant Writing & Research Advisory</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Message & Project Overview *</label>
                    <textarea name="message" class="form-control" placeholder="Provide details regarding research topic or defense target..." required></textarea>
                </div>

                <div style="text-align: center; margin-top: 1.25rem;">
                    <button type="submit" class="btn-navy" style="padding: 0.7rem 2.2rem; font-size: 0.9rem; border-radius: 10px;" id="home-submit-btn">
                        Submit Application
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- WHAT LEARNERS ARE SAYING SECTION -->
<section class="section-padding" style="background: #ffffff; border-top: 1px solid #e2e8f0;">
    <div class="container">
        
        <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 2.25rem; flex-wrap: wrap; gap: 1.25rem;">
            <div>
                <div class="section-subtitle">STUDENT REVIEWS & ACADEMIC IMPACT</div>
                <h2 class="section-title" style="margin-bottom: 0.4rem;">What Scholars & Learners Say</h2>
                <p style="color: var(--muted); max-width: 650px; margin: 0; font-size: 0.95rem;">
                    Feedback from Pakistani & International PhD candidates, Master's scholars, and university faculty mentored by Dr. Muhammad Shakil Ahmad.
                </p>
            </div>
            
            <!-- Slider Arrow Controls -->
            <div style="display: flex; gap: 0.75rem; align-items: center;">
                <button id="testimonial-prev-btn" style="width: 44px; height: 44px; border-radius: 50%; border: 1px solid #cbd5e1; background: #ffffff; color: #0f172a; font-size: 1rem; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.2s ease; box-shadow: 0 2px 8px rgba(0,0,0,0.04);" aria-label="Previous Testimonials" onmouseover="this.style.background='#0f172a'; this.style.color='#ffffff'; this.style.borderColor='#0f172a';" onmouseout="this.style.background='#ffffff'; this.style.color='#0f172a'; this.style.borderColor='#cbd5e1';">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button id="testimonial-next-btn" style="width: 44px; height: 44px; border-radius: 50%; border: 1px solid #cbd5e1; background: #ffffff; color: #0f172a; font-size: 1rem; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.2s ease; box-shadow: 0 2px 8px rgba(0,0,0,0.04);" aria-label="Next Testimonials" onmouseover="this.style.background='#0f172a'; this.style.color='#ffffff'; this.style.borderColor='#0f172a';" onmouseout="this.style.background='#ffffff'; this.style.color='#0f172a'; this.style.borderColor='#cbd5e1';">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- 2-Card Horizontal Scroll Track -->
        <div id="testimonialTrack" style="display: flex; gap: 1.5rem; overflow-x: auto; scroll-behavior: smooth; scrollbar-width: none; -ms-overflow-style: none; padding: 0.5rem 0.25rem 1.5rem 0.25rem;">
            
            <!-- Review Card 1 (Andrew - Udemy Quote) -->
            <div style="flex: 0 0 calc(50% - 0.75rem); box-sizing: border-box; background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 16px; padding: 1.75rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 12px rgba(0,0,0,0.03);" class="testimonial-slide-card">
                <div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
                        <div style="color: #eab308;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 700; background: #e0f2fe; color: #0369a1; padding: 0.2rem 0.6rem; border-radius: 6px;">Udemy Review</span>
                    </div>
                    <blockquote style="font-size: 1.05rem; color: #334155; line-height: 1.65; margin: 0 0 1.25rem 0; font-style: italic; font-weight: 600;">
                        “This course was the key to my successful defense.”
                    </blockquote>
                </div>
                <div style="border-top: 1px solid #e2e8f0; padding-top: 0.85rem; display: flex; align-items: center; gap: 0.75rem;">
                    <div style="width: 42px; height: 42px; border-radius: 50%; background: #0f172a; color: #fef08a; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.9rem;">A</div>
                    <div>
                        <div style="font-weight: 800; color: #0f172a; font-size: 0.92rem;">Andrew</div>
                        <div style="font-weight: 500; color: #64748b; font-size: 0.8rem;">Udemy Student • Research Methodology</div>
                    </div>
                </div>
            </div>

            <!-- Review Card 2 (Michael - Udemy Quote) -->
            <div style="flex: 0 0 calc(50% - 0.75rem); box-sizing: border-box; background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 16px; padding: 1.75rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 12px rgba(0,0,0,0.03);" class="testimonial-slide-card">
                <div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
                        <div style="color: #eab308;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 700; background: #fef9c3; color: #854d0e; padding: 0.2rem 0.6rem; border-radius: 6px;">Udemy Review</span>
                    </div>
                    <blockquote style="font-size: 1.05rem; color: #334155; line-height: 1.65; margin: 0 0 1.25rem 0; font-style: italic; font-weight: 600;">
                        “Transformed my research into a strong defense.”
                    </blockquote>
                </div>
                <div style="border-top: 1px solid #e2e8f0; padding-top: 0.85rem; display: flex; align-items: center; gap: 0.75rem;">
                    <div style="width: 42px; height: 42px; border-radius: 50%; background: #1e3a8a; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.9rem;">M</div>
                    <div>
                        <div style="font-weight: 800; color: #0f172a; font-size: 0.92rem;">Michael</div>
                        <div style="font-weight: 500; color: #64748b; font-size: 0.8rem;">Udemy Student • Academic Writing</div>
                    </div>
                </div>
            </div>

            <!-- Review Card 3 (Erich - Udemy Quote) -->
            <div style="flex: 0 0 calc(50% - 0.75rem); box-sizing: border-box; background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 16px; padding: 1.75rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 12px rgba(0,0,0,0.03);" class="testimonial-slide-card">
                <div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
                        <div style="color: #eab308;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 700; background: #f0fdf4; color: #166534; padding: 0.2rem 0.6rem; border-radius: 6px;">Udemy Review</span>
                    </div>
                    <blockquote style="font-size: 1.05rem; color: #334155; line-height: 1.65; margin: 0 0 1.25rem 0; font-style: italic; font-weight: 600;">
                        “Turned my ideas into a polished dissertation.”
                    </blockquote>
                </div>
                <div style="border-top: 1px solid #e2e8f0; padding-top: 0.85rem; display: flex; align-items: center; gap: 0.75rem;">
                    <div style="width: 42px; height: 42px; border-radius: 50%; background: #065f46; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.9rem;">E</div>
                    <div>
                        <div style="font-weight: 800; color: #0f172a; font-size: 0.92rem;">Erich</div>
                        <div style="font-weight: 500; color: #64748b; font-size: 0.8rem;">Udemy Student • Thesis Structuring</div>
                    </div>
                </div>
            </div>

            <!-- Review Card 3 (Pakistani University Faculty) -->
            <div style="flex: 0 0 calc(50% - 0.75rem); box-sizing: border-box; background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 16px; padding: 1.75rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 12px rgba(0,0,0,0.03);" class="testimonial-slide-card">
                <div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
                        <div style="color: #eab308;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 700; background: #f0fdf4; color: #166534; padding: 0.2rem 0.6rem; border-radius: 6px;">Faculty Workshop</span>
                    </div>
                    <blockquote style="font-size: 0.95rem; color: #334155; line-height: 1.65; margin: 0 0 1.25rem 0; font-style: italic;">
                        “We invited Dr. Shakil for an institutional research workshop. His hands-on training on VOSviewer science mapping and academic grant proposals directly boosted our faculty publication output in SSCI journals.”
                    </blockquote>
                </div>
                <div style="border-top: 1px solid #e2e8f0; padding-top: 0.85rem; display: flex; align-items: center; gap: 0.75rem;">
                    <div style="width: 42px; height: 42px; border-radius: 50%; background: #065f46; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.9rem;">AK</div>
                    <div>
                        <div style="font-weight: 800; color: #0f172a; font-size: 0.92rem;">Dr. Aisha Khan</div>
                        <div style="font-weight: 500; color: #64748b; font-size: 0.8rem;">Head of Department (Lahore, Pakistan)</div>
                    </div>
                </div>
            </div>

            <!-- Review Card 4 (Middle East / Oman Scholar) -->
            <div style="flex: 0 0 calc(50% - 0.75rem); box-sizing: border-box; background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 16px; padding: 1.75rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 12px rgba(0,0,0,0.03);" class="testimonial-slide-card">
                <div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
                        <div style="color: #eab308;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 700; background: #fef08a; color: #854d0e; padding: 0.2rem 0.6rem; border-radius: 6px;">DBA Dissertation</span>
                    </div>
                    <blockquote style="font-size: 0.95rem; color: #334155; line-height: 1.65; margin: 0 0 1.25rem 0; font-style: italic;">
                        “1-on-1 mentorship with Dr. Shakil gave me the exact blueprint needed for my DBA dissertation defense. His guidance on organizational innovation and project management literature saved me over a year of revision.”
                    </blockquote>
                </div>
                <div style="border-top: 1px solid #e2e8f0; padding-top: 0.85rem; display: flex; align-items: center; gap: 0.75rem;">
                    <div style="width: 42px; height: 42px; border-radius: 50%; background: #0369a1; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.9rem;">AS</div>
                    <div>
                        <div style="font-weight: 800; color: #0f172a; font-size: 0.92rem;">Al-Mughairi Salim</div>
                        <div style="font-weight: 500; color: #64748b; font-size: 0.8rem;">DBA Executive Candidate (Sultanate of Oman)</div>
                    </div>
                </div>
            </div>

            <!-- Review Card 5 (Pakistani Master's Scholar) -->
            <div style="flex: 0 0 calc(50% - 0.75rem); box-sizing: border-box; background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 16px; padding: 1.75rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 12px rgba(0,0,0,0.03);" class="testimonial-slide-card">
                <div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
                        <div style="color: #eab308;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 700; background: #e0f2fe; color: #0369a1; padding: 0.2rem 0.6rem; border-radius: 6px;">Udemy Bootcamp</span>
                    </div>
                    <blockquote style="font-size: 0.95rem; color: #334155; line-height: 1.65; margin: 0 0 1.25rem 0; font-style: italic;">
                        “Enrolling in Dr. Shakil's Udemy meta-analysis course made quantitative data synthesis effortless. The practical Excel calculation templates were crystal clear and directly applicable to my research paper.”
                    </blockquote>
                </div>
                <div style="border-top: 1px solid #e2e8f0; padding-top: 0.85rem; display: flex; align-items: center; gap: 0.75rem;">
                    <div style="width: 42px; height: 42px; border-radius: 50%; background: #1e3a8a; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.9rem;">HS</div>
                    <div>
                        <div style="font-weight: 800; color: #0f172a; font-size: 0.92rem;">Muhammad Hamza Siddiqui</div>
                        <div style="font-weight: 500; color: #64748b; font-size: 0.8rem;">Postgraduate Scholar (Karachi, Pakistan)</div>
                    </div>
                </div>
            </div>

            <!-- Review Card 6 (International South Korea Researcher) -->
            <div style="flex: 0 0 calc(50% - 0.75rem); box-sizing: border-box; background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 16px; padding: 1.75rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 12px rgba(0,0,0,0.03);" class="testimonial-slide-card">
                <div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem;">
                        <div style="color: #eab308;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 700; background: #f0fdf4; color: #166534; padding: 0.2rem 0.6rem; border-radius: 6px;">Journal Revision</span>
                    </div>
                    <blockquote style="font-size: 0.95rem; color: #334155; line-height: 1.65; margin: 0 0 1.25rem 0; font-style: italic;">
                        “Dr. Shakil is a master research educator. His guidance on research methodology and peer-review response letters helped our team achieve final acceptance in a top SSCI journal.”
                    </blockquote>
                </div>
                <div style="border-top: 1px solid #e2e8f0; padding-top: 0.85rem; display: flex; align-items: center; gap: 0.75rem;">
                    <div style="width: 42px; height: 42px; border-radius: 50%; background: #0f172a; color: #fef08a; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.9rem;">MC</div>
                    <div>
                        <div style="font-weight: 800; color: #0f172a; font-size: 0.92rem;">Min-jun Choi</div>
                        <div style="font-weight: 500; color: #64748b; font-size: 0.8rem;">Post-Doctoral Researcher (Seoul, South Korea)</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@push('scripts')
<style>
    #testimonialTrack::-webkit-scrollbar {
        display: none;
    }
    @media (max-width: 768px) {
        .testimonial-slide-card {
            flex: 0 0 100% !important;
        }
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const track = document.getElementById('testimonialTrack');
        const prevBtn = document.getElementById('testimonial-prev-btn');
        const nextBtn = document.getElementById('testimonial-next-btn');

        if (track && prevBtn && nextBtn) {
            prevBtn.addEventListener('click', function() {
                const cardWidth = track.firstElementChild ? track.firstElementChild.offsetWidth + 24 : 400;
                track.scrollBy({ left: -cardWidth, behavior: 'smooth' });
            });

            nextBtn.addEventListener('click', function() {
                const cardWidth = track.firstElementChild ? track.firstElementChild.offsetWidth + 24 : 400;
                track.scrollBy({ left: cardWidth, behavior: 'smooth' });
            });
        }
    });
</script>
@endpush

<!-- Review & AggregateRating JSON-LD Schema -->
<script type="application/ld+json">
{
  "{{ '@context' }}": "https://schema.org",
  "@type": "Product",
  "name": "Research Methodology & Academic Writing Courses by Dr. Shakil Ahmad",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.6",
    "reviewCount": "1800"
  },
  "review": [
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Dr. Tariq Mahmood" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5" },
      "reviewBody": "Dr. Shakil's PRISMA 2020 systematic literature review framework was instrumental in getting my PhD paper accepted in a Scopus Q1 journal."
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Eleanor Vance" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5" },
      "reviewBody": "Taking Dr. Shakil's qualitative research and thematic analysis bootcamp transformed my dissertation and helped me pass my defense with distinction."
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Dr. Aisha Khan" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5" },
      "reviewBody": "His hands-on training on VOSviewer science mapping and academic grant proposals directly boosted our faculty publication output."
    }
  ]
}
</script>

<!-- FAQ SECTION (With FAQPage Schema for AEO / GEO) -->
<section class="section-padding" style="background: #f8fafc; border-top: 1px solid #e2e8f0;">
    <div class="container" style="max-width: 900px;">
        <div class="section-header text-center" style="margin-bottom: 3rem;">
            <div class="section-subtitle">FREQUENTLY ASKED QUESTIONS</div>
            <h2 class="section-title">Answers to Common Questions</h2>
            <p style="color: var(--muted); font-size: 1rem;">
                Quotable answers regarding Dr. Shakil's courses, institutional workshops, and consulting.
            </p>
        </div>

        <div style="display: flex; flex-direction: column; gap: 1rem;">
            
            <details style="background: #ffffff; border: 1px solid #cbd5e1; border-radius: 12px; padding: 1.25rem 1.5rem; cursor: pointer;">
                <summary style="font-weight: 800; font-size: 1.05rem; color: #0f172a;">
                    Who is Dr. Muhammad Shakil Ahmad?
                </summary>
                <p style="color: #475569; font-size: 0.96rem; line-height: 1.65; margin-top: 0.85rem;">
                    Dr. Muhammad Shakil Ahmad is a Senior Lecturer at Teesside International Business School, Teesside University (UK), specializing in Human Resource Management, Project Management, and Organizational Innovation, with 15+ years of academic experience and 90+ published papers in SSCI-indexed journals.
                </p>
            </details>

            <details style="background: #ffffff; border: 1px solid #cbd5e1; border-radius: 12px; padding: 1.25rem 1.5rem; cursor: pointer;">
                <summary style="font-weight: 800; font-size: 1.05rem; color: #0f172a;">
                    What courses does Dr. Shakil Ahmad offer?
                </summary>
                <p style="color: #475569; font-size: 0.96rem; line-height: 1.65; margin-top: 0.85rem;">
                    He offers on-demand courses covering research methodology, literature review writing, quantitative and qualitative data analysis, dissertation structuring, and academic publishing, available on Udemy with lifetime access.
                </p>
            </details>

            <details style="background: #ffffff; border: 1px solid #cbd5e1; border-radius: 12px; padding: 1.25rem 1.5rem; cursor: pointer;">
                <summary style="font-weight: 800; font-size: 1.05rem; color: #0f172a;">
                    Does Dr. Shakil Ahmad offer HR consulting?
                </summary>
                <p style="color: #475569; font-size: 0.96rem; line-height: 1.65; margin-top: 0.85rem;">
                    Yes. He provides one-on-one consultations and organizational training in HR policy design, talent strategy, and organizational innovation, drawing on his published research in the field.
                </p>
            </details>

            <details style="background: #ffffff; border: 1px solid #cbd5e1; border-radius: 12px; padding: 1.25rem 1.5rem; cursor: pointer;">
                <summary style="font-weight: 800; font-size: 1.05rem; color: #0f172a;">
                    Can universities book training with Dr. Shakil Ahmad?
                </summary>
                <p style="color: #475569; font-size: 0.96rem; line-height: 1.65; margin-top: 0.85rem;">
                    Yes. He delivers live, customized training programs for university research offices, PhD/DBA cohorts, and HR departments, available online or in person.
                </p>
            </details>

            <details style="background: #ffffff; border: 1px solid #cbd5e1; border-radius: 12px; padding: 1.25rem 1.5rem; cursor: pointer;">
                <summary style="font-weight: 800; font-size: 1.05rem; color: #0f172a;">
                    How many students has Dr. Shakil Ahmad trained?
                </summary>
                <p style="color: #475569; font-size: 0.96rem; line-height: 1.65; margin-top: 0.85rem;">
                    Over 16,000 learners worldwide, with 20,000+ students enrolled across his Udemy courses and 1,800+ five-star reviews.
                </p>
            </details>

        </div>
    </div>
</section>

<!-- FAQPage JSON-LD Schema for Homepage -->
<script type="application/ld+json">
{
  "{{ '@context' }}": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Who is Dr. Muhammad Shakil Ahmad?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Dr. Muhammad Shakil Ahmad is a Senior Lecturer at Teesside International Business School, Teesside University (UK), specializing in Human Resource Management, Project Management, and Organizational Innovation, with 15+ years of academic experience and 90+ published papers in SSCI-indexed journals."
      }
    },
    {
      "@type": "Question",
      "name": "What courses does Dr. Shakil Ahmad offer?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "He offers on-demand courses covering research methodology, literature review writing, quantitative and qualitative data analysis, dissertation structuring, and academic publishing, available on Udemy."
      }
    },
    {
      "@type": "Question",
      "name": "Does Dr. Shakil Ahmad offer HR consulting?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. He provides one-on-one consultations and organizational training in HR policy design, talent strategy, and organizational innovation, drawing on his published research in the field."
      }
    },
    {
      "@type": "Question",
      "name": "Can universities book training with Dr. Shakil Ahmad?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. He delivers live, customized training programs for university research offices, PhD/DBA cohorts, and HR departments, available online or in person."
      }
    },
    {
      "@type": "Question",
      "name": "How many students has Dr. Shakil Ahmad trained?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Over 16,000 learners worldwide, with 20,000+ students enrolled across his Udemy courses and 1,800+ five-star reviews."
      }
    }
  ]
}
</script>

<!-- READY TO TAKE THE NEXT STEP? CTA BANNER -->
<section style="background: #0f172a; color: #ffffff; padding: 4rem 0; text-align: center; border-top: 3px solid #eab308;">
    <div class="container" style="max-width: 800px;">
        <h2 style="font-family: var(--font-heading); font-size: 2.25rem; font-weight: 800; color: #ffffff; margin-bottom: 1rem;">
            Ready to Take the Next Step?
        </h2>
        <p style="color: #e2e8f0; font-size: 1.1rem; line-height: 1.7; max-width: 650px; margin: 0 auto 2rem auto;">
            Whether you're finishing a dissertation, upskilling your team, or building a stronger HR strategy — let's work on it together.
        </p>
        
        <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
            <a href="{{ route('courses.index') }}" class="btn-navy" style="background: #eab308; color: #0f172a; font-weight: 800; padding: 0.85rem 1.8rem;">
                Explore Courses <i class="fas fa-graduation-cap" style="margin-left: 4px;"></i>
            </a>
            <a href="{{ route('consultation.index') }}" class="btn-light-surface" style="padding: 0.85rem 1.8rem;">
                Book a Consultation <i class="fas fa-calendar-check" style="margin-left: 4px;"></i>
            </a>
            <a href="{{ route('contact.index') }}" style="padding: 0.85rem 1.8rem; background: rgba(255,255,255,0.15); color: #ffffff !important; border: 1px solid rgba(255,255,255,0.4); font-weight: 700; border-radius: 8px; display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; text-decoration: none; transition: all 0.2s ease;" onmouseover="this.style.background='rgba(255,255,255,0.25)';" onmouseout="this.style.background='rgba(255,255,255,0.15)';">
                Contact Me <i class="fas fa-envelope"></i>
            </a>
        </div>
    </div>
</section>

<!-- Intersection Observer Script for Scroll Animations & Counter Animation -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const courseCards = document.querySelectorAll(".udemy-course-card");
    if (courseCards.length > 0) {
        const cardsObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add("in-view");
                }
            });
        }, { threshold: 0.15 });

        courseCards.forEach(function (card, idx) {
            card.style.transitionDelay = ((idx % 3) * 0.15) + "s";
            cardsObserver.observe(card);
        });
    }

    const triggerElement = document.getElementById("scholar-quote-trigger");
    const textElement = document.getElementById("quote-text-element");
    const imgElement = document.getElementById("quote-img-element");

    if (triggerElement && textElement && imgElement) {
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    textElement.classList.add("in-view");
                    imgElement.classList.add("in-view");
                }
            });
        }, { threshold: 0.2 });

        observer.observe(triggerElement);
    }

    const statsTrigger = document.getElementById("stats-bar-trigger");
    let animated = false;

    if (statsTrigger) {
        const statsObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting && !animated) {
                    animated = true;
                    const counters = document.querySelectorAll(".stat-number-compact");
                    
                    counters.forEach(function (counter) {
                        const target = parseInt(counter.getAttribute("data-target"), 10);
                        let current = 0;
                        const duration = 1800;
                        const stepTime = 20;
                        const steps = duration / stepTime;
                        const increment = target / steps;

                        const timer = setInterval(function () {
                            current += increment;
                            if (current >= target) {
                                counter.innerText = target.toLocaleString() + "+";
                                clearInterval(timer);
                            } else {
                                counter.innerText = Math.floor(current).toLocaleString() + "+";
                            }
                        }, stepTime);
                    });
                }
            });
        }, { threshold: 0.3 });

        statsObserver.observe(statsTrigger);
    }

    // Scroll Reveal Observer for Meet Dr. Shakil & Career Achievements
    const scrollRevealObserver = new IntersectionObserver(function (entries, observer) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add("in-view");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll(".reveal-scroll, .reveal-scroll-left, .reveal-scroll-right").forEach(function (el) {
        scrollRevealObserver.observe(el);
    });

    const achievementCards = document.querySelectorAll(".achievement-card-box");
    if (achievementCards.length > 0) {
        const achievementObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    const delayIndex = parseInt(entry.target.getAttribute("data-delay") || "0", 10);
                    entry.target.style.transitionDelay = (delayIndex * 0.1) + "s";
                    entry.target.classList.add("in-view");
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        achievementCards.forEach(function (card) {
            achievementObserver.observe(card);
        });
    }
});
</script>

@endsection
