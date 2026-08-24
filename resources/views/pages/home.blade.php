@extends('layouts.app')

@section('title', 'Dr. Muhammad Shakil Ahmad | Senior Lecturer & Academic Researcher')

@section('content')

<!-- Hero Section with Campus Background Image -->
<section class="mdi-hero-section">
    <div class="container hero-grid">
        <!-- Left Side: Title, Description & Primary CTA -->
        <div>
            <div style="font-size: 0.85rem; font-weight: 800; color: #fef08a; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 0.5rem;">TEESSIDE INTERNATIONAL BUSINESS SCHOOL (UK)</div>
            <h1 class="hero-title-mdi">
                Research with Shakil
            </h1>
            <p class="hero-text-mdi" style="font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.25rem;">
                Dr. Muhammad Shakil Ahmad is a Senior Lecturer at Teesside International Business School, Teesside University (UK), and a research methodology, project management, and HR expert who has trained over 16,000 learners worldwide through online courses, live training programs, and one-on-one consultations. He holds a PhD in Management, has published 90+ papers in SSCI-indexed journals (H-index 39), and has 15+ years of academic experience across the UK, Oman, Pakistan, and South Korea.
            </p>
            <p style="color: #cbd5e1; font-size: 0.95rem; margin-bottom: 2rem; line-height: 1.6;">
                Several publications feature in Scopus Q1 and SSCI indexed journals across leading global publishers in the UK, USA, Europe, Middle East, and Asia.
            </p>
            
            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="#booking-form-section" class="btn-navy" id="hero-get-in-touch" style="padding: 0.9rem 2.2rem; font-weight: 800;">
                    BOOK CONSULTATION <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                </a>
                <a href="{{ route('courses.index') }}" class="btn-light-surface" style="padding: 0.9rem 1.8rem; font-weight: 700;">
                    Explore 18 Courses
                </a>
            </div>
        </div>

        <!-- Right Side: Official Hero Portrait Photo -->
        <div>
            <div style="border-radius: 24px; overflow: hidden; border: 4px solid rgba(255,255,255,0.15); box-shadow: 0 20px 45px rgba(0,0,0,0.3); max-width: 440px; margin: 0 auto; background: #0f172a;">
                <img src="{{ asset('images/dr_shakil_hero.jpg') }}" alt="Dr. Muhammad Shakil Ahmad - Senior Lecturer at Teesside University UK" style="width: 100%; height: 500px; object-fit: cover; display: block;">
            </div>
        </div>
    </div>
</section>

<!-- Compact Stat Bar with Zero-to-Target Animated Counters -->
<section class="stats-bar-compact" id="stats-bar-trigger">
    <div class="container stats-grid-compact">
        <div class="stat-card-compact">
            <div class="stat-number-compact" data-target="16000">0</div>
            <div class="stat-label-compact">Global Learners</div>
        </div>
        <div class="stat-card-compact">
            <div class="stat-number-compact" data-target="90">0</div>
            <div class="stat-label-compact">SSCI / Scopus Papers</div>
        </div>
        <div class="stat-card-compact">
            <div class="stat-number-compact" data-target="39">0</div>
            <div class="stat-label-compact">Google Scholar H-Index</div>
        </div>
        <div class="stat-card-compact">
            <div class="stat-number-compact" data-target="18">0</div>
            <div class="stat-label-compact">Udemy Courses</div>
        </div>
    </div>
</section>





<!-- HOMEPAGE DETAILED "ABOUT ME" ENTITY SECTION (VN4, Item 10) -->
<section style="padding: 4.5rem 0; background: #ffffff;">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1.2fr; gap: 3.5rem; align-items: center;">
            
            <!-- Left: Profile Image Box -->
            <div style="position: relative;">
                <div style="border-radius: 20px; overflow: hidden; border: 1px solid #e2e8f0; box-shadow: 0 15px 35px rgba(0,0,0,0.08);">
                    <img src="{{ asset('images/hero_img_2.jpg') }}" alt="Dr. Muhammad Shakil Ahmad" style="width: 100%; height: 420px; object-fit: cover; display: block;">
                </div>
                <div style="position: absolute; bottom: -20px; right: -20px; background: #0f172a; color: #ffffff; padding: 1.25rem 1.5rem; border-radius: 16px; border: 2px solid #eab308; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                    <div style="font-size: 1.6rem; font-weight: 900; color: #fef08a;">Teesside University</div>
                    <div style="font-size: 0.85rem; color: #cbd5e1; font-weight: 600;">Senior Lecturer (UK)</div>
                </div>
            </div>

            <!-- Right: Entity Details -->
            <div>
                <div style="font-size: 0.85rem; font-weight: 800; color: #0284c7; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 0.5rem;">ACADEMIC PROFILE & LEADERSHIP</div>
                <h2 style="font-family: var(--font-heading); font-size: 2.25rem; color: #0f172a; margin-bottom: 1.25rem; line-height: 1.25;">
                    Dr. Muhammad Shakil Ahmad
                </h2>
                <p style="color: #334155; font-size: 1rem; line-height: 1.7; margin-bottom: 1rem;">
                    Dr. Muhammad Shakil Ahmad is a distinguished academic authority, researcher, and Senior Lecturer at Teesside University, UK. Possessing a Doctorate in Management, he specializes in workplace dignity, human resource management, project management, and sustainable organizational growth.
                </p>
                <p style="color: #334155; font-size: 1rem; line-height: 1.7; margin-bottom: 1.5rem;">
                    Having served as In-charge of the Office of Research Innovation & Commercialization (ORIC), Dr. Shakil has bridged academia and industry by securing competitive research funding from the <em>Ministry of Higher Education & Scientific Research (Oman)</em> and the <em>Higher Education Commission (HEC, Pakistan)</em>. His publication record includes 90+ peer-reviewed SSCI and Scopus Q1 journal articles, yielding a Google Scholar H-index of 39.
                </p>

                <!-- Entity Badges -->
                <div style="display: flex; flex-wrap: wrap; gap: 0.6rem; margin-bottom: 2rem;">
                    <span style="font-size: 0.85rem; font-weight: 700; padding: 0.4rem 0.85rem; border-radius: 8px; background: #f0f7ff; color: #0369a1; border: 1px solid #bae6fd;">
                        <i class="fas fa-certificate" style="margin-right: 4px;"></i> Senior Lecturer @ Teesside University
                    </span>
                    <span style="font-size: 0.85rem; font-weight: 700; padding: 0.4rem 0.85rem; border-radius: 8px; background: #f0f7ff; color: #0369a1; border: 1px solid #bae6fd;">
                        <i class="fas fa-graduation-cap" style="margin-right: 4px;"></i> PhD in Management
                    </span>
                    <span style="font-size: 0.85rem; font-weight: 700; padding: 0.4rem 0.85rem; border-radius: 8px; background: #fffbeb; color: #854d0e; border: 1px solid #fef08a;">
                        <i class="fas fa-star" style="margin-right: 4px;"></i> H-Index 39
                    </span>
                    <span style="font-size: 0.85rem; font-weight: 700; padding: 0.4rem 0.85rem; border-radius: 8px; background: #f0fdf4; color: #166534; border: 1px solid #bbf7d0;">
                        <i class="fas fa-book" style="margin-right: 4px;"></i> 90+ Scopus/SSCI Papers
                    </span>
                </div>

                <a href="{{ route('about') }}" class="btn-navy" style="padding: 0.8rem 1.6rem;">
                    Read Full Academic Bio <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- THREE HOMEPAGE OVERVIEW SECTIONS (Courses, Trainings, Consultation) -->
<section class="section-padding" style="background: var(--surface);" id="overview-section">
    <div class="container">
        <div class="section-header text-center" style="margin-bottom: 3rem;">
            <div class="section-subtitle">ACADEMIC OFFERINGS</div>
            <h2 class="section-title">Academic Programs & Advisory Overview</h2>
            <p style="color: var(--muted); max-width: 650px; margin: 0 auto; font-size: 1rem;">
                Explore high-impact online courses, institutional training workshops, and personalized 1-on-1 consultation services below.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2.25rem; align-items: stretch;">
            
            <!-- 1. COURSES OVERVIEW SECTION -->
            <div style="background: #ffffff; border-radius: 20px; border: 1px solid #e2e8f0; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); transition: transform 0.3s ease, box-shadow 0.3s ease; height: 100%; cursor: pointer;" class="overview-card-editorial" onclick="window.location.href='{{ route('courses.index') }}'">
                <div>
                    <div style="height: 170px; position: relative; overflow: hidden; background: #0f172a;">
                        <img src="{{ asset('images/course_slr_thumb.png') }}" alt="Courses Overview" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.9;">
                        <div style="position: absolute; top: 14px; left: 14px; background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(8px); border: 1px solid rgba(255, 255, 255, 0.2); color: #fef08a; font-size: 0.75rem; font-weight: 700; padding: 0.3rem 0.75rem; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.8px;">
                            <i class="fas fa-graduation-cap" style="margin-right: 4px;"></i> 18 Online Bootcamps
                        </div>
                    </div>

                    <div style="padding: 1.75rem 1.75rem 1rem 1.75rem;">
                        <h3 style="font-family: var(--font-heading); font-size: 1.45rem; font-weight: 700; color: #0f172a; margin-bottom: 0.6rem;">Courses</h3>
                        <p style="color: #475569; font-size: 0.95rem; line-height: 1.65; margin-bottom: 1.25rem;">
                            Comprehensive self-paced video bootcamps covering Systematic Literature Reviews, Qualitative & Thematic Analysis (NVivo/MAXQDA), Meta-Analysis, Bibliometrics, and Scopus Q1 Journal Writing.
                        </p>

                        <div style="display: flex; flex-wrap: wrap; gap: 0.45rem; margin-bottom: 1.25rem;">
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">PRISMA 2020</span>
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">NVivo & MAXQDA</span>
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">VOSviewer</span>
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #fef9c3; color: #854d0e; border: 1px solid #fef08a;">Direct Udemy Links</span>
                        </div>
                    </div>
                </div>

                <div style="padding: 0 1.75rem 1.75rem 1.75rem; margin-top: auto;">
                    <a href="{{ route('courses.index') }}" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.85rem 1.5rem; font-weight: 700; border-radius: 12px;" id="overview-view-courses-btn" onclick="event.stopPropagation();">
                        View All 18 Courses <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                    </a>
                </div>
            </div>

            <!-- 2. TRAININGS OVERVIEW SECTION -->
            <div style="background: #ffffff; border-radius: 20px; border: 1px solid #e2e8f0; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); transition: transform 0.3s ease, box-shadow 0.3s ease; height: 100%; cursor: pointer;" class="overview-card-editorial" onclick="window.location.href='{{ route('trainings.index') }}'">
                <div>
                    <div style="height: 170px; position: relative; overflow: hidden; background: #0f172a;">
                        <img src="{{ asset('images/hero_img_3.jpg') }}" alt="Trainings Overview" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.9;">
                        <div style="position: absolute; top: 14px; left: 14px; background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(8px); border: 1px solid rgba(255, 255, 255, 0.2); color: #fef08a; font-size: 0.75rem; font-weight: 700; padding: 0.3rem 0.75rem; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.8px;">
                            <i class="fas fa-chalkboard-teacher" style="margin-right: 4px;"></i> Institutional Workshops
                        </div>
                    </div>

                    <div style="padding: 1.75rem 1.75rem 1rem 1.75rem;">
                        <h3 style="font-family: var(--font-heading); font-size: 1.45rem; font-weight: 700; color: #0f172a; margin-bottom: 0.6rem;">Trainings</h3>
                        <p style="color: #475569; font-size: 0.95rem; line-height: 1.65; margin-bottom: 1.25rem;">
                            Interactive university workshops, faculty development seminars, and intensive research capacity-building bootcamps customized for ORIC centers and global academic institutions.
                        </p>

                        <div style="display: flex; flex-wrap: wrap; gap: 0.45rem; margin-bottom: 1.25rem;">
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">Faculty Seminars</span>
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">ORIC Building</span>
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">Live / On-Campus</span>
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #e0f2fe; color: #0369a1; border: 1px solid #bae6fd;">Custom Syllabus</span>
                        </div>
                    </div>
                </div>

                <div style="padding: 0 1.75rem 1.75rem 1.75rem; margin-top: auto;">
                    <a href="{{ route('trainings.index') }}" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.85rem 1.5rem; font-weight: 700; border-radius: 12px;" id="overview-explore-trainings-btn" onclick="event.stopPropagation();">
                        Explore Trainings <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                    </a>
                </div>
            </div>

            <!-- 3. CONSULTATION OVERVIEW SECTION -->
            <div style="background: #ffffff; border-radius: 20px; border: 1px solid #e2e8f0; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); transition: transform 0.3s ease, box-shadow 0.3s ease; height: 100%; cursor: pointer;" class="overview-card-editorial" onclick="window.location.href='{{ route('consultation.index') }}'">
                <div>
                    <div style="height: 170px; position: relative; overflow: hidden; background: #0f172a;">
                        <img src="{{ asset('images/hero_img_1.jpg') }}" alt="Consultation Overview" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.9;">
                        <div style="position: absolute; top: 14px; left: 14px; background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(8px); border: 1px solid rgba(255, 255, 255, 0.2); color: #fef08a; font-size: 0.75rem; font-weight: 700; padding: 0.3rem 0.75rem; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.8px;">
                            <i class="fas fa-user-tie" style="margin-right: 4px;"></i> 1-on-1 Mentorship
                        </div>
                    </div>

                    <div style="padding: 1.75rem 1.75rem 1rem 1.75rem;">
                        <h3 style="font-family: var(--font-heading); font-size: 1.45rem; font-weight: 700; color: #0f172a; margin-bottom: 0.6rem;">Consultation</h3>
                        <p style="color: #475569; font-size: 0.95rem; line-height: 1.65; margin-bottom: 1.25rem;">
                            Dedicated 1-on-1 personalized academic advisory and mentorship for PhD candidates, Master's thesis defense, Scopus journal revisions, and international grant proposals.
                        </p>

                        <div style="display: flex; flex-wrap: wrap; gap: 0.45rem; margin-bottom: 1.25rem;">
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">PhD Dissertation</span>
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">Peer-Review Support</span>
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #f1f5f9; color: #334155; border: 1px solid #e2e8f0;">Grant Strategy</span>
                            <span style="font-size: 0.78rem; font-weight: 600; padding: 0.25rem 0.65rem; border-radius: 6px; background: #f0fdf4; color: #166534; border: 1px solid #bbf7d0;">Zoom / Teams</span>
                        </div>
                    </div>
                </div>

                <div style="padding: 0 1.75rem 1.75rem 1.75rem; margin-top: auto;">
                    <a href="{{ route('consultation.index') }}" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.85rem 1.5rem; font-weight: 700; border-radius: 12px;" id="overview-book-consultation-btn" onclick="event.stopPropagation();">
                        Book Consultation <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SCHOLAR QUOTE SECTION -->
<section class="scholar-quote-section" id="scholar-quote-trigger">
    <div class="container">
        <div class="scholar-quote-grid-photo-left">
            <div class="scroll-quote-img-left" id="quote-img-element">
                <div class="scholar-photo-frame">
                    <img src="{{ asset('images/hero_dr_shakil_cutout_v2.jpg') }}" alt="Dr. Muhammad Shakil Ahmad" class="scholar-photo-img">
                </div>
            </div>

            <div class="scroll-quote-text-right" id="quote-text-element">
                <blockquote class="scholar-quote-text">
                    “Enrolling in the Research & Mentorship program with Dr. Shakil has been a transformative decision that has sharpened academic acumen and publication success”
                </blockquote>

                <div class="scholar-author-name">— Dr. Ayesha Rehman</div>
                <div class="scholar-author-tag">SCOPUS Q1 PUBLISHED SCHOLAR 2024</div>
            </div>
        </div>
    </div>
</section>

<!-- 3-COLUMN VALUE PROPOSITION FEATURE SECTION (VN2, Item 5 & 6 Light Blue Accent Contrast) -->
<section style="background: #f0f7ff; padding: 4.5rem 0; border-top: 1px solid #bae6fd; border-bottom: 1px solid #bae6fd;">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            
            <!-- Card 1: Academic & Career Impact (VN2, Item 5) -->
            <div style="background: #ffffff; padding: 2.25rem 2rem; border-radius: 16px; border: 1px solid #cbd5e1; display: flex; align-items: flex-start; gap: 1.5rem; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04); transition: transform 0.25s ease;" class="value-prop-card">
                <div style="width: 66px; height: 66px; border-radius: 16px; background: rgba(30, 58, 138, 0.08); border: 1px solid rgba(30, 58, 138, 0.18); color: #1e3a8a; display: flex; align-items: center; justify-content: center; font-size: 1.65rem; flex-shrink: 0; box-shadow: 0 4px 10px rgba(30, 58, 138, 0.06);">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <div>
                    <h3 style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 700; color: #0f172a; margin-bottom: 0.5rem;">Trainings</h3>
                    <p style="color: #475569; font-size: 0.94rem; line-height: 1.65; margin: 0;">

Interactive university workshops, faculty development seminars, and intensive research capacity-building bootcamps customized for ORIC centers and global academic institutions.                    </p>
                </div>
            </div>

            <!-- Card 2: Institutional Recognition -->
            <div style="background: #ffffff; padding: 2.25rem 2rem; border-radius: 16px; border: 1px solid #cbd5e1; display: flex; align-items: flex-start; gap: 1.5rem; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04); transition: transform 0.25s ease;" class="value-prop-card">
                <div style="width: 66px; height: 66px; border-radius: 16px; background: rgba(30, 58, 138, 0.08); border: 1px solid rgba(30, 58, 138, 0.18); color: #1e3a8a; display: flex; align-items: center; justify-content: center; font-size: 1.65rem; flex-shrink: 0; box-shadow: 0 4px 10px rgba(30, 58, 138, 0.06);">
                    <i class="fas fa-university"></i>
                </div>
                <div>
                    <h3 style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 700; color: #0f172a; margin-bottom: 0.5rem;">Institutional Recognition</h3>
                    <p style="color: #475569; font-size: 0.94rem; line-height: 1.65; margin: 0;">
                        Training modules and advisory frameworks are recognized across HEC Pakistan, Ministry of Higher Education (Oman), and leading university ORIC centers.
                    </p>
                </div>
            </div>

            <!-- Card 3: Methodological Mastery -->
            <div style="background: #ffffff; padding: 2.25rem 2rem; border-radius: 16px; border: 1px solid #cbd5e1; display: flex; align-items: flex-start; gap: 1.5rem; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04); transition: transform 0.25s ease;" class="value-prop-card">
                <div style="width: 66px; height: 66px; border-radius: 16px; background: rgba(30, 58, 138, 0.08); border: 1px solid rgba(30, 58, 138, 0.18); color: #1e3a8a; display: flex; align-items: center; justify-content: center; font-size: 1.65rem; flex-shrink: 0; box-shadow: 0 4px 10px rgba(30, 58, 138, 0.06);">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div>
                    <h3 style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 700; color: #0f172a; margin-bottom: 0.5rem;">Methodological Mastery</h3>
                    <p style="color: #475569; font-size: 0.94rem; line-height: 1.65; margin: 0;">
                        Gain hands-on mastery of PRISMA 2020 literature review matrices, NVivo/MAXQDA qualitative coding, VOSviewer science mapping, and SmartPLS/AMOS SEM.
                    </p>
                </div>
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
                    Comprehensive methodological expertise spanning systematic reviews, qualitative software coding, quantitative structural modeling, and journal publishing.
                </p>
                <div style="margin-top: 1.75rem; border-radius: 16px; overflow: hidden; border: 1px solid #cbd5e1; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);">
                    <img src="{{ asset('images/research_domains_showcase.png') }}" alt="Research & Training Domains Methodology Showcase" style="width: 100%; height: 260px; object-fit: cover; display: block;">
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
                    <span class="domain-text">Qualitative & Thematic Analysis (NVivo / MAXQDA)</span>
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
                    <span class="domain-text">SPSS, AMOS & SmartPLS Quantitative Analysis</span>
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

        <!-- 4-CARD RESEARCH SHOWCASE IMAGE GRID BELOW THE HEADER (VN4, Item 9) -->
        <div style="margin-top: 3.5rem; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
            
            <div style="background: #ffffff; border-radius: 16px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 6px 18px rgba(0,0,0,0.05); transition: transform 0.25s ease;" class="domain-img-card">
                <div style="height: 170px; overflow: hidden;">
                    <img src="{{ asset('images/course_bibliometrics_thumb.png') }}" alt="VOSviewer Science Mapping & Bibliometrics" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 1.25rem;">
                    <div style="font-weight: 800; font-size: 1.05rem; color: #0f172a; margin-bottom: 0.35rem;">Science Mapping Networks</div>
                    <div style="font-size: 0.85rem; color: #475569;">VOSviewer co-citation & bibliometric cluster visualization.</div>
                </div>
            </div>

            <div style="background: #ffffff; border-radius: 16px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 6px 18px rgba(0,0,0,0.05); transition: transform 0.25s ease;" class="domain-img-card">
                <div style="height: 170px; overflow: hidden;">
                    <img src="{{ asset('images/course_slr_thumb.png') }}" alt="PRISMA 2020 Systematic Review Model" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 1.25rem;">
                    <div style="font-weight: 800; font-size: 1.05rem; color: #0f172a; margin-bottom: 0.35rem;">PRISMA 2020 Framework</div>
                    <div style="font-size: 0.85rem; color: #475569;">Rigorous search matrix & systematic synthesis for Q1 journals.</div>
                </div>
            </div>

            <div style="background: #ffffff; border-radius: 16px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 6px 18px rgba(0,0,0,0.05); transition: transform 0.25s ease;" class="domain-img-card">
                <div style="height: 170px; overflow: hidden;">
                    <img src="{{ asset('images/course_qualitative_thumb.png') }}" alt="NVivo & MAXQDA Qualitative Analysis" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 1.25rem;">
                    <div style="font-weight: 800; font-size: 1.05rem; color: #0f172a; margin-bottom: 0.35rem;">Qualitative Coding</div>
                    <div style="font-size: 0.85rem; color: #475569;">Braun & Clarke thematic coding using NVivo and MAXQDA.</div>
                </div>
            </div>

            <div style="background: #ffffff; border-radius: 16px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 6px 18px rgba(0,0,0,0.05); transition: transform 0.25s ease;" class="domain-img-card">
                <div style="height: 170px; overflow: hidden;">
                    <img src="{{ asset('images/course_meta_thumb.png') }}" alt="Structural Equation Modeling SmartPLS" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 1.25rem;">
                    <div style="font-weight: 800; font-size: 1.05rem; color: #0f172a; margin-bottom: 0.35rem;">Structural Equation Modeling</div>
                    <div style="font-size: 0.85rem; color: #475569;">SmartPLS 4 & AMOS mediation, moderation, and path testing.</div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Responsive Booking & Consultation Form Section -->
<section id="booking-form-section" class="section-padding" style="background: var(--surface);">
    <div class="container" style="max-width: 850px;">
        <div style="background: #ffffff; padding: 2.75rem; border-radius: 16px; border: 1px solid var(--border); box-shadow: var(--shadow-md);">
            <div class="section-header" style="margin-bottom: 2rem;">
                <div class="section-subtitle">GET IN TOUCH</div>
                <h2 class="section-title" style="font-size: 2rem;">Book a Consultation</h2>
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

                <div class="form-grid-responsive">
                    <div class="form-group">
                        <label class="form-label">WhatsApp Number *</label>
                        <input type="text" name="whatsapp" class="form-control" placeholder="+92 300 0000000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Academic Role *</label>
                        <select name="academic_level" class="form-control" required>
                            <option value="PhD Candidate">PhD Candidate</option>
                            <option value="Master's Researcher">Master's Student</option>
                            <option value="University Faculty">University Faculty</option>
                        </select>
                    </div>
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

                <div style="text-align: center; margin-top: 1.5rem;">
                    <button type="submit" class="btn-navy" style="padding: 0.9rem 2.5rem;" id="home-submit-btn">
                        Submit Application
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- WHAT LEARNERS ARE SAYING SECTION (With Review & AggregateRating JSON-LD Schema) -->
<section class="section-padding" style="background: #ffffff; border-top: 1px solid #e2e8f0;">
    <div class="container">
        <div class="section-header text-center" style="margin-bottom: 3rem;">
            <div class="section-subtitle">STUDENT REVIEWS & TESTIMONIALS</div>
            <h2 class="section-title">What Learners Are Saying</h2>
            <p style="color: var(--muted); max-width: 650px; margin: 0.5rem auto 0 auto; font-size: 1rem;">
                Feedback from over 16,000 global learners and 1,800+ five-star reviews on Udemy.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem;">
            <!-- Review Card 1 -->
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 16px; padding: 1.75rem; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div style="color: #eab308; margin-bottom: 0.75rem;">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <blockquote style="font-size: 0.98rem; color: #334155; line-height: 1.6; margin: 0 0 1rem 0; font-style: italic;">
                        “This course was the key to my successful defense.”
                    </blockquote>
                </div>
                <div style="font-weight: 800; color: #0f172a; font-size: 0.9rem;">— Andrew <span style="font-weight: 500; color: #64748b; font-size: 0.8rem;">(PhD Candidate)</span></div>
            </div>

            <!-- Review Card 2 -->
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 16px; padding: 1.75rem; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div style="color: #eab308; margin-bottom: 0.75rem;">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <blockquote style="font-size: 0.98rem; color: #334155; line-height: 1.6; margin: 0 0 1rem 0; font-style: italic;">
                        “Transformed my research into a strong defense.”
                    </blockquote>
                </div>
                <div style="font-weight: 800; color: #0f172a; font-size: 0.9rem;">— Michael <span style="font-weight: 500; color: #64748b; font-size: 0.8rem;">(Master's Researcher)</span></div>
            </div>

            <!-- Review Card 3 -->
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 16px; padding: 1.75rem; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div style="color: #eab308; margin-bottom: 0.75rem;">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <blockquote style="font-size: 0.98rem; color: #334155; line-height: 1.6; margin: 0 0 1rem 0; font-style: italic;">
                        “Turned my ideas into a polished dissertation.”
                    </blockquote>
                </div>
                <div style="font-weight: 800; color: #0f172a; font-size: 0.9rem;">— Erich <span style="font-weight: 500; color: #64748b; font-size: 0.8rem;">(DBA Scholar)</span></div>
            </div>

            <!-- Review Card 4 -->
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 16px; padding: 1.75rem; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div style="color: #eab308; margin-bottom: 0.75rem;">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <blockquote style="font-size: 0.98rem; color: #334155; line-height: 1.6; margin: 0 0 1rem 0; font-style: italic;">
                        “Clear, practical, and highly methodical step-by-step guidance.”
                    </blockquote>
                </div>
                <div style="font-weight: 800; color: #0f172a; font-size: 0.9rem;">— Sarah <span style="font-weight: 500; color: #64748b; font-size: 0.8rem;">(University Faculty)</span></div>
            </div>
        </div>
    </div>
</section>

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
      "author": { "@type": "Person", "name": "Andrew" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5" },
      "reviewBody": "This course was the key to my successful defense."
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Michael" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5" },
      "reviewBody": "Transformed my research into a strong defense."
    },
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Erich" },
      "reviewRating": { "@type": "Rating", "ratingValue": "5" },
      "reviewBody": "Turned my ideas into a polished dissertation."
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
                    He offers 18 on-demand courses covering research methodology, literature review writing, quantitative and qualitative data analysis, dissertation structuring, and academic publishing, available on Udemy with lifetime access.
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
        "text": "He offers 18 on-demand courses covering research methodology, literature review writing, quantitative and qualitative data analysis, dissertation structuring, and academic publishing, available on Udemy."
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
        <p style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.65; margin-bottom: 2rem;">
            Whether finishing a dissertation, upskilling a research team, or building a stronger HR strategy — let's work on it together.
        </p>
        
        <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
            <a href="{{ route('courses.index') }}" class="btn-navy" style="background: #eab308; color: #0f172a; font-weight: 800; padding: 0.85rem 1.8rem;">
                Explore Courses <i class="fas fa-graduation-cap" style="margin-left: 4px;"></i>
            </a>
            <a href="{{ route('consultation.index') }}" class="btn-light-surface" style="padding: 0.85rem 1.8rem;">
                Book a Consultation <i class="fas fa-calendar-check" style="margin-left: 4px;"></i>
            </a>
            <a href="{{ route('contact.index') }}" class="btn-light-surface" style="padding: 0.85rem 1.8rem; background: rgba(255,255,255,0.1); border-color: rgba(255,255,255,0.2);">
                Contact Me <i class="fas fa-envelope" style="margin-left: 4px;"></i>
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
});
</script>

@endsection
