@extends('layouts.app')

@section('title', 'Services & Consultation | 1-on-1 Advisory, Workshops & HR Consulting | Dr. Muhammad Shakil Ahmad')
@section('meta_description', 'Comprehensive academic advisory, 1-on-1 dissertation coaching for scholars, live university research workshops, and research-grounded HR consultation.')

@push('styles')
<style>
    /* Global Section Design Tokens */
    :root {
        --card-radius: 20px;
        --card-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
        --card-hover-shadow: 0 20px 45px rgba(30, 58, 138, 0.14);
        --primary-navy: #0f172a;
        --accent-blue: #0284c7;
        --accent-gold: #eab308;
    }

    /* Hero Section with Vibrant Gradient */
    .consultation-hero-section {
        padding: 5.5rem 0 4.5rem 0;
        background: linear-gradient(135deg, #0b132b 0%, #1c2541 50%, #0f172a 100%);
        color: #ffffff;
        position: relative;
        overflow: hidden;
        border-bottom: 3px solid #eab308;
    }
    .consultation-hero-section::before {
        content: '';
        position: absolute;
        width: 650px;
        height: 650px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(234, 179, 8, 0.15) 0%, rgba(0,0,0,0) 70%);
        top: -180px;
        right: -120px;
        pointer-events: none;
    }
    .consultation-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        padding: 0.5rem 1.3rem;
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 30px;
        font-size: 0.82rem;
        color: #fef08a;
        font-weight: 800;
        margin-bottom: 1.5rem;
        text-transform: uppercase;
        letter-spacing: 1.2px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    /* Sticky Sub-Header Quick Navigation Strip */
    .sticky-services-nav {
        position: sticky;
        top: 75px;
        z-index: 99;
        background: rgba(255, 255, 255, 0.92);
        backdrop-filter: blur(16px);
        border-bottom: 1px solid #e2e8f0;
        padding: 0.85rem 0;
        box-shadow: 0 4px 20px rgba(0,0,0,0.04);
        transition: all 0.3s ease;
    }
    .services-nav-pills {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
        list-style: none;
        padding: 0;
        margin: 0;
        overflow-x: auto;
        white-space: nowrap;
        scrollbar-width: none;
    }
    .services-nav-pills::-webkit-scrollbar {
        display: none;
    }
    .services-nav-pill-link {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.55rem 1.2rem;
        background: #f1f5f9;
        color: #334155;
        font-size: 0.88rem;
        font-weight: 700;
        border-radius: 25px;
        text-decoration: none;
        border: 1px solid #cbd5e1;
        transition: all 0.25s ease;
    }
    .services-nav-pill-link:hover,
    .services-nav-pill-link.active {
        background: #0f172a;
        color: #ffffff;
        border-color: #0f172a;
        box-shadow: 0 4px 12px rgba(15, 23, 42, 0.15);
    }
    .services-nav-pill-link i {
        color: #0284c7;
        transition: color 0.25s ease;
    }
    .services-nav-pill-link:hover i,
    .services-nav-pill-link.active i {
        color: #fef08a;
    }

    /* Section Intro Box */
    .section-intro-card {
        background: #ffffff;
        border: 1px solid #cbd5e1;
        border-left: 5px solid #0284c7;
        border-radius: 16px;
        padding: 1.75rem 2rem;
        margin-bottom: 2.25rem;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.03);
    }
    .section-intro-text {
        font-size: 1.05rem;
        color: #334155;
        line-height: 1.75;
        margin: 0;
    }

    /* 2-Column Grid Layout for Proper Box Cards */
    .consultation-grid-2col {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
        margin-bottom: 3.5rem;
        align-items: stretch;
    }

    /* Standardized Card Box Component */
    .consultation-card-box {
        background: #ffffff;
        border: 1px solid #cbd5e1;
        border-radius: var(--card-radius);
        padding: 1.75rem;
        box-shadow: var(--card-shadow);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease, border-color 0.3s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
    }
    .consultation-card-box::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #0284c7, #eab308);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    .consultation-card-box:hover {
        transform: translateY(-6px);
        box-shadow: var(--card-hover-shadow);
        border-color: #0284c7;
    }
    .consultation-card-box:hover::before {
        opacity: 1;
    }

    /* Image Wrapper inside Card */
    .consultation-img-wrapper {
        height: 210px;
        border-radius: 14px;
        overflow: hidden;
        margin-bottom: 1.35rem;
        background: #f1f5f9;
        border: 1px solid #e2e8f0;
        position: relative;
    }
    .consultation-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        image-rendering: -webkit-optimize-contrast;
        filter: contrast(1.04) brightness(1.02) saturate(1.06);
        transition: transform 0.4s ease, filter 0.4s ease;
    }
    .consultation-card-box:hover .consultation-img-wrapper img {
        transform: scale(1.06);
        filter: contrast(1.08) brightness(1.05) saturate(1.1);
    }
    .consultation-badge-tag {
        position: absolute;
        top: 0.85rem;
        right: 0.85rem;
        background: rgba(15, 23, 42, 0.85);
        backdrop-filter: blur(8px);
        color: #ffffff;
        font-size: 0.75rem;
        font-weight: 800;
        padding: 0.35rem 0.85rem;
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        letter-spacing: 0.5px;
    }

    .consultation-card-category {
        font-size: 0.8rem;
        font-weight: 800;
        color: #0284c7;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        margin-bottom: 0.4rem;
    }
    .consultation-card-title {
        font-family: var(--font-heading);
        font-size: 1.35rem;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 0.7rem;
        line-height: 1.3;
    }
    .consultation-card-desc {
        font-size: 0.94rem;
        color: #475569;
        line-height: 1.65;
        margin-bottom: 1.25rem;
    }

    /* Structured Feature List */
    .consultation-features-list {
        list-style: none;
        padding: 0;
        margin: 0 0 1.5rem 0;
        display: flex;
        flex-direction: column;
        gap: 0.55rem;
    }
    .consultation-features-list li {
        font-size: 0.9rem;
        color: #334155;
        font-weight: 600;
        display: flex;
        align-items: flex-start;
        gap: 0.6rem;
    }
    .consultation-features-list li i {
        color: #0284c7;
        margin-top: 3px;
        font-size: 0.95rem;
        flex-shrink: 0;
    }

    /* Live Training Core Tracks Box Grid */
    .training-tracks-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.25rem;
        margin-bottom: 2rem;
    }
    .training-track-box {
        background: #ffffff;
        border: 1px solid #cbd5e1;
        border-radius: 16px;
        padding: 1.25rem 1.5rem;
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
        transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
    }
    .training-track-box:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 24px rgba(2, 132, 199, 0.1);
        border-color: #0284c7;
    }
    .track-icon-box {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: #e0f2fe;
        color: #0284c7;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        flex-shrink: 0;
    }

    /* How It Works Box */
    .how-it-works-box {
        background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%);
        border-radius: 24px;
        padding: 3.5rem 2.25rem;
        color: #ffffff;
        margin: 4.5rem 0 3.5rem 0;
        text-align: center;
        box-shadow: 0 15px 35px rgba(15, 23, 42, 0.18);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    .step-number-circle {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: #eab308;
        color: #0f172a;
        font-weight: 800;
        font-size: 1.3rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.1rem;
        box-shadow: 0 6px 16px rgba(234, 179, 8, 0.35);
    }

    /* Responsiveness Rules */
    @media (max-width: 992px) {
        .consultation-grid-2col {
            grid-template-columns: 1fr !important;
            gap: 1.75rem !important;
        }
        .consultation-img-wrapper {
            height: 200px !important;
        }
        .services-nav-pills {
            justify-content: flex-start !important;
            padding: 0 1rem !important;
        }
    }

    @media (max-width: 768px) {
        .consultation-hero-section {
            padding: 4rem 1rem 3rem 1rem !important;
        }
        .consultation-hero-section h1 {
            font-size: 2.1rem !important;
        }
        .consultation-card-box {
            padding: 1.35rem !important;
            border-radius: 16px !important;
        }
        .consultation-card-title {
            font-size: 1.2rem !important;
        }
        .how-it-works-box {
            padding: 2.5rem 1.25rem !important;
            border-radius: 18px !important;
        }
    }

    @media (max-width: 480px) {
        .consultation-hero-section h1 {
            font-size: 1.75rem !important;
        }
        .consultation-img-wrapper {
            height: 180px !important;
        }
    }
</style>
@endpush

@section('content')

<!-- Navy & Gold Header Banner -->
<section class="consultation-hero-section">
    <div class="container text-center reveal-scroll-up">
        <div class="consultation-hero-badge">
            <i class="fas fa-handshake"></i> RESEARCH & HR ADVISORY PARTNERSHIPS
        </div>
        <h1 style="font-family: var(--font-heading); font-size: 2.85rem; color: #ffffff; margin-bottom: 0.85rem; font-weight: 800;">
            Services & Consultation
        </h1>
        <p style="color: #cbd5e1; max-width: 840px; margin: 0 auto; font-size: 1.1rem; line-height: 1.75;">
            Comprehensive 1-on-1 dissertation coaching for scholars, live institutional research workshops for universities, and evidence-grounded HR policy consultation for organizations.
        </p>
    </div>
</section>

<!-- Sticky Sub-Header Quick Jump Navigation Strip -->
<div class="sticky-services-nav">
    <div class="container">
        <ul class="services-nav-pills">
            <li>
                <a href="#for-students" class="services-nav-pill-link">
                    <i class="fas fa-user-graduate"></i> 1-on-1 Students Advisory
                </a>
            </li>
            <li>
                <a href="#live-trainings" class="services-nav-pill-link">
                    <i class="fas fa-chalkboard-teacher"></i> Live Workshops
                </a>
            </li>
            <li>
                <a href="#on-demand-courses" class="services-nav-pill-link">
                    <i class="fas fa-play-circle"></i> On-Demand Courses
                </a>
            </li>
            <li>
                <a href="#for-organizations" class="services-nav-pill-link">
                    <i class="fas fa-building"></i> HR & Organizations
                </a>
            </li>
            <li>
                <a href="#consultation-booking-form" class="services-nav-pill-link" style="background: #0284c7; color: #ffffff; border-color: #0284c7;">
                    <i class="fas fa-calendar-check" style="color: #ffffff;"></i> Book Session
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- MAIN CONTENT AREA -->
<section class="section-padding" style="background: #f8fafc; padding-top: 3.5rem;">
    <div class="container" style="max-width: 1180px;">

        <!-- 1. FOR RESEARCHERS & STUDENTS SECTION -->
        <div id="for-students" style="margin-bottom: 4.5rem; scroll-margin-top: 130px;">
            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.25rem; flex-wrap: wrap;">
                <span style="background: #e0f2fe; color: #0369a1; padding: 0.4rem 1rem; border-radius: 20px; font-weight: 800; font-size: 0.82rem; text-transform: uppercase; letter-spacing: 1px;">
                    SECTION 1: STUDENTS & SCHOLARS
                </span>
                <h2 style="font-family: var(--font-heading); font-size: 2.15rem; font-weight: 800; color: #0f172a; margin: 0;">
                    One-on-One Advisory & Dissertation Services
                </h2>
            </div>

            <!-- Hero Intro Paragraph for Researchers & Students -->
            <div class="section-intro-card">
                <p class="section-intro-text">
                    <strong>Dissertation & thesis coaching, research design review, methodology troubleshooting, and publication support</strong> for PhD/DBA candidates who need expert eyes on their work before defense. From the first proposal draft to the final oral defense, Dr. Shakil Ahmad works alongside you at every stage — drawing on 15+ years of academic supervision across the UK, Oman, Pakistan, and South Korea with 90+ SSCI Q1 publications (H-index 39).
                </p>
            </div>

            <!-- 4 Cards Grid for Researchers & Students -->
            <div class="consultation-grid-2col">
                
                <!-- Card 1: Proposal Writing -->
                <div class="consultation-card-box reveal-card-box">
                    <div>
                        <div class="consultation-img-wrapper">
                            <img src="{{ asset('images/dr_shakil_library_suit.jpg') }}" alt="Assistance in Proposal Writing" loading="eager">
                            <span class="consultation-badge-tag">Proposal Stage</span>
                        </div>
                        <div class="consultation-card-category">PROPOSAL & METHODOLOGY</div>
                        <h3 class="consultation-card-title">Assistance in Proposal Writing</h3>
                        <p class="consultation-card-desc">
                            Building a proposal that clears committee review the first time: a clear problem statement, justified methodology, and objectives answerable within your timeline.
                        </p>
                        <ul class="consultation-features-list">
                            <li><i class="fas fa-check-circle"></i> Clear Problem Statement Formulation</li>
                            <li><i class="fas fa-check-circle"></i> Justified Methodology & Research Design</li>
                            <li><i class="fas fa-check-circle"></i> Committee-Ready Proposal Structure</li>
                            <li><i class="fas fa-check-circle"></i> Feasibility & Scope Alignment</li>
                        </ul>
                    </div>
                    <div style="margin-top: auto; padding-top: 1rem;">
                        <a href="#consultation-booking-form" onclick="selectServiceOption('Assistance in Proposal Writing')" class="btn-navy" style="width: 100%; text-align: center; display: block; border-radius: 12px; padding: 0.8rem 1rem; font-size: 0.92rem;">
                            BOOK THIS SERVICE <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 2: Research Publication Process -->
                <div class="consultation-card-box reveal-card-box">
                    <div>
                        <div class="consultation-img-wrapper">
                            <img src="{{ asset('images/dr_shakil_presentation_quote.jpg') }}" alt="Help with the Research Publication Process" loading="eager">
                            <span class="consultation-badge-tag">Publication Target</span>
                        </div>
                        <div class="consultation-card-category">JOURNAL PUBLISHING</div>
                        <h3 class="consultation-card-title">Help with the Research Publication Process</h3>
                        <p class="consultation-card-desc">
                            Guidance through journal selection, positioning your contribution, navigating peer review, and drafting response-to-reviewers letters that get accepted.
                        </p>
                        <ul class="consultation-features-list">
                            <li><i class="fas fa-check-circle"></i> Journal Selection & Impact Matching (SSCI/Scopus)</li>
                            <li><i class="fas fa-check-circle"></i> Positioning Novel Scientific Contribution</li>
                            <li><i class="fas fa-check-circle"></i> Navigating Peer Review Revisions</li>
                            <li><i class="fas fa-check-circle"></i> Response-to-Reviewers Drafting</li>
                        </ul>
                    </div>
                    <div style="margin-top: auto; padding-top: 1rem;">
                        <a href="#consultation-booking-form" onclick="selectServiceOption('Help with the Research Publication Process')" class="btn-navy" style="width: 100%; text-align: center; display: block; border-radius: 12px; padding: 0.8rem 1rem; font-size: 0.92rem;">
                            BOOK THIS SERVICE <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 3: Dissertation Writing Consultancy -->
                <div class="consultation-card-box reveal-card-box">
                    <div>
                        <div class="consultation-img-wrapper">
                            <img src="{{ asset('images/hero_img_3.jpg') }}" alt="Dissertation Writing Consultancy" loading="eager">
                            <span class="consultation-badge-tag">Full Mentorship</span>
                        </div>
                        <div class="consultation-card-category">DISSERTATION MENTORSHIP</div>
                        <h3 class="consultation-card-title">Dissertation Writing Consultancy</h3>
                        <p class="consultation-card-desc">
                            Chapter-by-chapter support through problem formulation, literature review, methodology design, data analysis, and oral defense preparation.
                        </p>
                        <ul class="consultation-features-list">
                            <li><i class="fas fa-check-circle"></i> Chapter-by-Chapter Review & Guidance</li>
                            <li><i class="fas fa-check-circle"></i> Literature Synthesis & Gap Framing</li>
                            <li><i class="fas fa-check-circle"></i> Data Analysis & Interpretation (SPSS/SmartPLS/NVivo)</li>
                            <li><i class="fas fa-check-circle"></i> Defense Preparation & Mock Q&A</li>
                        </ul>
                    </div>
                    <div style="margin-top: auto; padding-top: 1rem;">
                        <a href="#consultation-booking-form" onclick="selectServiceOption('Dissertation Writing Consultancy')" class="btn-navy" style="width: 100%; text-align: center; display: block; border-radius: 12px; padding: 0.8rem 1rem; font-size: 0.92rem;">
                            BOOK THIS SERVICE <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 4: Systematic Literature Review Support -->
                <div class="consultation-card-box reveal-card-box">
                    <div>
                        <div class="consultation-img-wrapper">
                            <img src="{{ asset('images/dr_shakil_teaching_symposium.jpg') }}" alt="Systematic Literature Review Support" loading="eager">
                            <span class="consultation-badge-tag">PRISMA Framework</span>
                        </div>
                        <div class="consultation-card-category">LITERATURE REVIEWS</div>
                        <h3 class="consultation-card-title">Systematic Literature Review Support</h3>
                        <p class="consultation-card-desc">
                            Defining your search strategy, applying inclusion/exclusion criteria (PRISMA 2020), and synthesizing findings into a high-impact evidence base.
                        </p>
                        <ul class="consultation-features-list">
                            <li><i class="fas fa-check-circle"></i> Search Strategy & Database Query Protocol</li>
                            <li><i class="fas fa-check-circle"></i> PRISMA Flowchart & Screening Setup</li>
                            <li><i class="fas fa-check-circle"></i> Quality Appraisal & Risk of Bias Assessment</li>
                            <li><i class="fas fa-check-circle"></i> Synthesizing Findings for Publication</li>
                        </ul>
                    </div>
                    <div style="margin-top: auto; padding-top: 1rem;">
                        <a href="#consultation-booking-form" onclick="selectServiceOption('Systematic Literature Review Support')" class="btn-navy" style="width: 100%; text-align: center; display: block; border-radius: 12px; padding: 0.8rem 1rem; font-size: 0.92rem;">
                            BOOK THIS SERVICE <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>


        <!-- 2. LIVE INSTITUTIONAL TRAININGS & WORKSHOPS SECTION -->
        <div id="live-trainings" style="margin-bottom: 4.5rem; scroll-margin-top: 130px;">
            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.25rem; flex-wrap: wrap;">
                <span style="background: #dcfce7; color: #166534; padding: 0.4rem 1rem; border-radius: 20px; font-weight: 800; font-size: 0.82rem; text-transform: uppercase; letter-spacing: 1px;">
                    SECTION 2: INSTITUTIONAL TRAININGS
                </span>
                <h2 style="font-family: var(--font-heading); font-size: 2.15rem; font-weight: 800; color: #0f172a; margin: 0;">
                    Live University & Executive Workshops
                </h2>
            </div>

            <div class="section-intro-card" style="border-left-color: #166534;">
                <p class="section-intro-text">
                    <strong>Customized, live cohort training for universities, research centers, and HR departments</strong> in research methodology, academic publishing, and organizational development — delivered online or in-person.
                </p>
            </div>

            <!-- Core Workshop Tracks Showcase Grid -->
            <div style="background: #ffffff; border: 1px solid #cbd5e1; border-radius: var(--card-radius); padding: 2.25rem 2rem; margin-bottom: 2rem; box-shadow: var(--card-shadow);">
                <h3 style="font-family: var(--font-heading); font-size: 1.4rem; font-weight: 800; color: #0f172a; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.6rem;">
                    <i class="fas fa-chalkboard-teacher" style="color: #0284c7;"></i> Core Workshop & Live Training Tracks
                </h3>
                
                <div class="training-tracks-grid">
                    <div class="training-track-box">
                        <div class="track-icon-box"><i class="fas fa-pen-nib"></i></div>
                        <div>
                            <div style="font-weight: 800; font-size: 1rem; color: #0f172a; margin-bottom: 0.2rem;">Research Paper Writing</div>
                            <div style="font-size: 0.88rem; color: #64748b;">Structuring articles for high impact factor SSCI journals.</div>
                        </div>
                    </div>

                    <div class="training-track-box">
                        <div class="track-icon-box"><i class="fas fa-book-open"></i></div>
                        <div>
                            <div style="font-weight: 800; font-size: 1rem; color: #0f172a; margin-bottom: 0.2rem;">Dissertation & Thesis Writing</div>
                            <div style="font-size: 0.88rem; color: #64748b;">End-to-end framework for PhD and Master's thesis completion.</div>
                        </div>
                    </div>

                    <div class="training-track-box">
                        <div class="track-icon-box"><i class="fas fa-search"></i></div>
                        <div>
                            <div style="font-weight: 800; font-size: 1rem; color: #0f172a; margin-bottom: 0.2rem;">Systematic Literature Review</div>
                            <div style="font-size: 0.88rem; color: #64748b;">PRISMA protocol, database search & scoping reviews.</div>
                        </div>
                    </div>

                    <div class="training-track-box">
                        <div class="track-icon-box"><i class="fas fa-layer-group"></i></div>
                        <div>
                            <div style="font-weight: 800; font-size: 1rem; color: #0f172a; margin-bottom: 0.2rem;">Thematic & Qualitative Analysis</div>
                            <div style="font-size: 0.88rem; color: #64748b;">Coding interviews, thematic synthesis & qualitative rigor.</div>
                        </div>
                    </div>

                    <div class="training-track-box">
                        <div class="track-icon-box"><i class="fas fa-file-invoice-dollar"></i></div>
                        <div>
                            <div style="font-weight: 800; font-size: 1rem; color: #0f172a; margin-bottom: 0.2rem;">Grant & Funding Proposals</div>
                            <div style="font-size: 0.88rem; color: #64748b;">Writing winning applications for competitive research grants.</div>
                        </div>
                    </div>

                    <div class="training-track-box">
                        <div class="track-icon-box"><i class="fas fa-journal-whills"></i></div>
                        <div>
                            <div style="font-weight: 800; font-size: 1rem; color: #0f172a; margin-bottom: 0.2rem;">High Ranked Journal Masterclass</div>
                            <div style="font-size: 0.88rem; color: #64748b;">Understanding reviewer mindsets & citation strategies.</div>
                        </div>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-bottom: 1.75rem;">
                    <div style="background: #f8fafc; padding: 1.5rem; border-radius: 16px; border: 1px solid #e2e8f0;">
                        <h4 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin-bottom: 0.85rem; display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-clock" style="color: #0284c7;"></i> Formats Available
                        </h4>
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.55rem; font-size: 0.92rem; color: #475569;">
                            <li><i class="fas fa-check-circle" style="color: #0284c7;"></i> Half-day & full-day intensive masterclasses</li>
                            <li><i class="fas fa-check-circle" style="color: #0284c7;"></i> Multi-week structured research bootcamps</li>
                            <li><i class="fas fa-check-circle" style="color: #0284c7;"></i> University / department-wide research retreats</li>
                            <li><i class="fas fa-check-circle" style="color: #0284c7;"></i> Online (Zoom/Teams) or in-person campus workshops</li>
                        </ul>
                    </div>

                    <div style="background: #f8fafc; padding: 1.5rem; border-radius: 16px; border: 1px solid #e2e8f0;">
                        <h4 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin-bottom: 0.85rem; display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-users" style="color: #0284c7;"></i> Ideal For
                        </h4>
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.55rem; font-size: 0.92rem; color: #475569;">
                            <li><i class="fas fa-check-circle" style="color: #0284c7;"></i> University research offices & postgraduate schools</li>
                            <li><i class="fas fa-check-circle" style="color: #0284c7;"></i> PhD and DBA cohorts preparing for thesis defense</li>
                            <li><i class="fas fa-check-circle" style="color: #0284c7;"></i> HR & organizational leadership teams</li>
                            <li><i class="fas fa-check-circle" style="color: #0284c7;"></i> Institutions aiming to boost SSCI publication rates</li>
                        </ul>
                    </div>
                </div>

                <div style="text-align: center; margin-top: 1.25rem;">
                    <a href="#consultation-booking-form" onclick="selectServiceOption('Live Institutional Training Proposal')" class="btn-navy" style="padding: 0.85rem 2.2rem; font-size: 0.95rem; border-radius: 12px; display: inline-block;">
                        Request a Training Proposal <i class="fas fa-paper-plane" style="margin-left: 6px;"></i>
                    </a>
                </div>
            </div>
        </div>


        <!-- 3. ON-DEMAND COURSES HIGHLIGHT SECTION -->
        <div id="on-demand-courses" style="margin-bottom: 4.5rem; scroll-margin-top: 130px;">
            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.25rem; flex-wrap: wrap;">
                <span style="background: #fef3c7; color: #92400e; padding: 0.4rem 1rem; border-radius: 20px; font-weight: 800; font-size: 0.82rem; text-transform: uppercase; letter-spacing: 1px;">
                    SECTION 3: ON-DEMAND COURSES
                </span>
                <h2 style="font-family: var(--font-heading); font-size: 2.15rem; font-weight: 800; color: #0f172a; margin: 0;">
                    Self-Paced Research Masterclasses
                </h2>
            </div>

            <div style="background: #ffffff; border: 1px solid #cbd5e1; border-radius: var(--card-radius); padding: 2.25rem 2rem; box-shadow: var(--card-shadow);">
                <div style="font-size: 1.05rem; color: #334155; line-height: 1.7; margin-bottom: 1.75rem;">
                    Dr. Shakil Ahmad's 18 self-paced online courses cover the complete research lifecycle — from formulating questions to publishing in peer-reviewed journals — available with lifetime access on Udemy.
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.75rem; margin-bottom: 1.75rem;">
                    <div style="background: #f8fafc; padding: 1.5rem; border-radius: 16px; border: 1px solid #e2e8f0;">
                        <h4 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin-bottom: 0.85rem;">Popular Course Topics</h4>
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.55rem; font-size: 0.92rem; color: #475569;">
                            <li><i class="fas fa-check-circle" style="color: #0284c7;"></i> Research Methodology for Beginners</li>
                            <li><i class="fas fa-check-circle" style="color: #0284c7;"></i> Writing a Winning Literature Review (PRISMA 2020)</li>
                            <li><i class="fas fa-check-circle" style="color: #0284c7;"></i> Qualitative & Thematic Analysis</li>
                            <li><i class="fas fa-check-circle" style="color: #0284c7;"></i> Academic Writing & Publishing in SSCI Journals</li>
                        </ul>
                    </div>

                    <div style="background: #f8fafc; padding: 1.5rem; border-radius: 16px; border: 1px solid #e2e8f0;">
                        <h4 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin-bottom: 0.85rem;">Why Scholars Enrol</h4>
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.55rem; font-size: 0.92rem; color: #475569;">
                            <li><i class="fas fa-star" style="color: #eab308;"></i> Taught by SSCI-indexed author (H-index 39)</li>
                            <li><i class="fas fa-users" style="color: #0284c7;"></i> 16,000+ active global learners</li>
                            <li><i class="fas fa-infinity" style="color: #166534;"></i> Lifetime access with downloadable templates</li>
                            <li><i class="fas fa-certificate" style="color: #0284c7;"></i> Verified Udemy Certificate of Completion</li>
                        </ul>
                    </div>
                </div>

                <div style="text-align: center;">
                    <a href="{{ route('courses.index') }}" class="btn-navy" style="padding: 0.85rem 2.2rem; font-size: 0.95rem; border-radius: 12px; display: inline-block;">
                        Browse All 18 Online Courses <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                    </a>
                </div>
            </div>
        </div>


        <!-- 4. FOR ORGANIZATIONS SECTION -->
        <div id="for-organizations" style="margin-bottom: 4rem; scroll-margin-top: 130px;">
            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.25rem; flex-wrap: wrap;">
                <span style="background: #fef9c3; color: #854d0e; padding: 0.4rem 1rem; border-radius: 20px; font-weight: 800; font-size: 0.82rem; text-transform: uppercase; letter-spacing: 1px;">
                    SECTION 4: ORGANIZATIONS & HR
                </span>
                <h2 style="font-family: var(--font-heading); font-size: 2.15rem; font-weight: 800; color: #0f172a; margin: 0;">
                    For Organizations & HR Functions
                </h2>
            </div>

            <!-- Hero Intro Paragraph for Organizations -->
            <div class="section-intro-card" style="border-left-color: #eab308;">
                <p class="section-intro-text">
                    <strong>HR consultation for organizations that want practice grounded in research</strong>, not templates borrowed from unrelated industries. Drawing on published work in workplace dignity, servant leadership, and organizational sustainability, I help leadership teams and HR functions design policy and practice that holds up in day-to-day operations.
                </p>
            </div>

            <!-- 5 Cards Grid for Organizations -->
            <div class="consultation-grid-2col">
                
                <!-- 1. Workplace Policy Design & Review -->
                <div class="consultation-card-box reveal-card-box">
                    <div>
                        <div class="consultation-img-wrapper">
                            <img src="{{ asset('images/hero_img_4.jpg') }}" alt="Workplace Policy Design & Review">
                            <span class="consultation-badge-tag">HR Policy Audit</span>
                        </div>
                        <div class="consultation-card-category">HR POLICY & GOVERNANCE</div>
                        <h3 class="consultation-card-title">Workplace Policy Design & Review</h3>
                        <p class="consultation-card-desc">
                            Auditing and rebuilding HR policies (performance management, grievance handling, employee relations) so they're consistent, fair, and legally sound — not just copied from a template.
                        </p>
                        <ul class="consultation-features-list">
                            <li><i class="fas fa-check-circle"></i> Performance Management Audit</li>
                            <li><i class="fas fa-check-circle"></i> Grievance Handling & Relations Framework</li>
                            <li><i class="fas fa-check-circle"></i> Legal & Operational Alignment</li>
                            <li><i class="fas fa-check-circle"></i> Consistency & Fairness Review</li>
                        </ul>
                    </div>
                    <div style="margin-top: auto; padding-top: 1rem;">
                        <a href="#consultation-booking-form" onclick="selectServiceOption('Workplace Policy Design & Review')" class="btn-navy" style="width: 100%; text-align: center; display: block; border-radius: 12px; padding: 0.8rem 1rem; font-size: 0.92rem;">
                            BOOK THIS CONSULTATION <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                        </a>
                    </div>
                </div>

                <!-- 2. Organizational Innovation Consulting -->
                <div class="consultation-card-box reveal-card-box">
                    <div>
                        <div class="consultation-img-wrapper">
                            <img src="{{ asset('images/dr_shakil_library_suit.jpg') }}" alt="Organizational Innovation Consulting">
                            <span class="consultation-badge-tag">Innovation Culture</span>
                        </div>
                        <div class="consultation-card-category">INNOVATION STRATEGY</div>
                        <h3 class="consultation-card-title">Organizational Innovation Consulting</h3>
                        <p class="consultation-card-desc">
                            Helping leadership teams build the structures and culture that let innovation happen consistently, rather than depending on individual initiative.
                        </p>
                        <ul class="consultation-features-list">
                            <li><i class="fas fa-check-circle"></i> Innovation Infrastructure Setup</li>
                            <li><i class="fas fa-check-circle"></i> Culture & Systematic Ideation</li>
                            <li><i class="fas fa-check-circle"></i> Cross-Functional Collaboration</li>
                            <li><i class="fas fa-check-circle"></i> Measurable Innovation Metrics</li>
                        </ul>
                    </div>
                    <div style="margin-top: auto; padding-top: 1rem;">
                        <a href="#consultation-booking-form" onclick="selectServiceOption('Organizational Innovation Consulting')" class="btn-navy" style="width: 100%; text-align: center; display: block; border-radius: 12px; padding: 0.8rem 1rem; font-size: 0.92rem;">
                            BOOK THIS CONSULTATION <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                        </a>
                    </div>
                </div>

                <!-- 3. Servant Leadership Practice -->
                <div class="consultation-card-box reveal-card-box">
                    <div>
                        <div class="consultation-img-wrapper">
                            <img src="{{ asset('images/dr_shakil_presentation_quote.jpg') }}" alt="Servant Leadership Practice">
                            <span class="consultation-badge-tag">Leadership Coaching</span>
                        </div>
                        <div class="consultation-card-category">LEADERSHIP DEVELOPMENT</div>
                        <h3 class="consultation-card-title">Servant Leadership Practice</h3>
                        <p class="consultation-card-desc">
                            Translating servant leadership principles into concrete manager behaviors and evaluation criteria, so it becomes how the organization actually operates.
                        </p>
                        <ul class="consultation-features-list">
                            <li><i class="fas fa-check-circle"></i> Behavioral Competency Mapping</li>
                            <li><i class="fas fa-check-circle"></i> Manager Evaluation Criteria</li>
                            <li><i class="fas fa-check-circle"></i> Operational Practice Integration</li>
                            <li><i class="fas fa-check-circle"></i> Executive & Leadership Coaching</li>
                        </ul>
                    </div>
                    <div style="margin-top: auto; padding-top: 1rem;">
                        <a href="#consultation-booking-form" onclick="selectServiceOption('Servant Leadership Practice')" class="btn-navy" style="width: 100%; text-align: center; display: block; border-radius: 12px; padding: 0.8rem 1rem; font-size: 0.92rem;">
                            BOOK THIS CONSULTATION <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                        </a>
                    </div>
                </div>

                <!-- 4. Sustainable HR Management Systems -->
                <div class="consultation-card-box reveal-card-box">
                    <div>
                        <div class="consultation-img-wrapper">
                            <img src="{{ asset('images/hero_img_3.jpg') }}" alt="Sustainable HR Management Systems">
                            <span class="consultation-badge-tag">Retention Strategy</span>
                        </div>
                        <div class="consultation-card-category">SUSTAINABLE HR</div>
                        <h3 class="consultation-card-title">Sustainable HR Management Systems</h3>
                        <p class="consultation-card-desc">
                            Designing HR systems built for long-term organizational health: retention, employee wellbeing, and workforce planning that holds up beyond budget cycles.
                        </p>
                        <ul class="consultation-features-list">
                            <li><i class="fas fa-check-circle"></i> Long-Term Retention Architecture</li>
                            <li><i class="fas fa-check-circle"></i> Employee Wellbeing Frameworks</li>
                            <li><i class="fas fa-check-circle"></i> Strategic Workforce Planning</li>
                            <li><i class="fas fa-check-circle"></i> Sustainable Health Metrics</li>
                        </ul>
                    </div>
                    <div style="margin-top: auto; padding-top: 1rem;">
                        <a href="#consultation-booking-form" onclick="selectServiceOption('Sustainable HR Management Systems')" class="btn-navy" style="width: 100%; text-align: center; display: block; border-radius: 12px; padding: 0.8rem 1rem; font-size: 0.92rem;">
                            BOOK THIS CONSULTATION <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                        </a>
                    </div>
                </div>

                <!-- 5. Workplace Dignity Assessments -->
                <div class="consultation-card-box reveal-card-box" style="grid-column: 1 / -1;">
                    <div>
                        <div class="consultation-img-wrapper" style="height: 280px;">
                            <img src="{{ asset('images/dr_shakil_teaching_symposium.jpg') }}" alt="Workplace Dignity Assessments - Dr. Shakil Ahmad Symposium" style="object-position: center 15%;">
                            <span class="consultation-badge-tag">Culture Audit & Symposium</span>
                        </div>
                        <div class="consultation-card-category">ORGANIZATIONAL CULTURE</div>
                        <h3 class="consultation-card-title">Workplace Dignity Assessments</h3>
                        <p class="consultation-card-desc">
                            Reviewing how employees are treated across every level of the organization, and identifying where policy or culture is quietly undermining morale and retention.
                        </p>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 0.75rem; margin-bottom: 1.25rem;">
                            <ul class="consultation-features-list" style="margin: 0;">
                                <li><i class="fas fa-check-circle"></i> Cross-Level Dignity Audits</li>
                                <li><i class="fas fa-check-circle"></i> Morale & Retention Bottleneck Analysis</li>
                            </ul>
                            <ul class="consultation-features-list" style="margin: 0;">
                                <li><i class="fas fa-check-circle"></i> Culture Risk Assessment</li>
                                <li><i class="fas fa-check-circle"></i> Actionable Dignity Restoration Plan</li>
                            </ul>
                        </div>
                    </div>
                    <div style="margin-top: auto; padding-top: 1rem;">
                        <a href="#consultation-booking-form" onclick="selectServiceOption('Workplace Dignity Assessments')" class="btn-navy" style="width: 100%; text-align: center; display: block; border-radius: 12px; padding: 0.85rem 1rem; font-size: 0.92rem;">
                            BOOK THIS CONSULTATION <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>


        <!-- 5. HOW IT WORKS SECTION -->
        <div class="how-it-works-box reveal-scroll-up">
            <div style="font-size: 0.85rem; font-weight: 800; color: #fef08a; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 0.6rem;">
                SIMPLE 3-STEP PROCESS
            </div>
            <h2 style="font-family: var(--font-heading); font-size: 2.3rem; font-weight: 800; color: #ffffff; margin-bottom: 2.25rem;">
                How Consultation Works
            </h2>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 2rem; margin-bottom: 2.5rem; text-align: left;">
                
                <!-- Step 1 -->
                <div style="background: rgba(255, 255, 255, 0.08); padding: 1.75rem; border-radius: 18px; border: 1px solid rgba(255, 255, 255, 0.15);">
                    <div class="step-number-circle">1</div>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #ffffff; margin-bottom: 0.5rem;">Book an Initial Call</h3>
                    <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.65; margin: 0;">
                        Submit your research or organizational goals via the scheduling form below.
                    </p>
                </div>

                <!-- Step 2 -->
                <div style="background: rgba(255, 255, 255, 0.08); padding: 1.75rem; border-radius: 18px; border: 1px solid rgba(255, 255, 255, 0.15);">
                    <div class="step-number-circle">2</div>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #ffffff; margin-bottom: 0.5rem;">Share Your Challenge</h3>
                    <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.65; margin: 0;">
                        Share your dissertation draft, publication target, or HR policy requirements.
                    </p>
                </div>

                <!-- Step 3 -->
                <div style="background: rgba(255, 255, 255, 0.08); padding: 1.75rem; border-radius: 18px; border: 1px solid rgba(255, 255, 255, 0.15);">
                    <div class="step-number-circle">3</div>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #ffffff; margin-bottom: 0.5rem;">Receive a Tailored Plan</h3>
                    <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.65; margin: 0;">
                        Receive direct 1-on-1 strategic guidance to achieve your goals smoothly.
                    </p>
                </div>

            </div>

            <a href="#consultation-booking-form" class="btn-navy" style="background: #eab308; color: #0f172a; font-weight: 800; padding: 0.95rem 2.5rem; font-size: 1.05rem; border-radius: 12px; text-decoration: none; display: inline-block;">
                Schedule Your Consultation <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
            </a>
        </div>

    </div>
</section>

<!-- Responsive Booking & Consultation Form Section -->
<section id="consultation-booking-form" class="section-padding" style="background: #ffffff; border-top: 1px solid var(--border); overflow: hidden; scroll-margin-top: 90px;">
    <div class="container" style="max-width: 760px;">
        <div class="reveal-scroll-up" style="background: #ffffff; padding: 2.75rem 2.25rem; border-radius: 24px; border: 1px solid #cbd5e1; box-shadow: 0 15px 40px rgba(0,0,0,0.06);">
            <div class="section-header text-center" style="margin-bottom: 2rem;">
                <div class="section-subtitle">SCHEDULE YOUR SESSION</div>
                <h2 class="section-title" style="font-size: 2rem; margin-bottom: 0.4rem;">Book Your Consultation</h2>
                <p style="color: #64748b; font-size: 1rem; margin-top: 0.4rem;">
                    Select your required program below and Dr. Shakil Ahmad's advisory team will respond directly to your email.
                </p>
            </div>

            <form action="{{ route('contact.store') }}" method="POST" id="consultationFormPage">
                @csrf
                <div class="form-row-grid" style="margin-bottom: 1.25rem;">
                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label" style="font-weight: 700; color: #0f172a; font-size: 0.88rem; margin-bottom: 0.4rem; display: block;">Full Name *</label>
                        <input type="text" name="name" class="form-control" style="width: 100%; height: 48px; border-radius: 12px; border: 1px solid #cbd5e1; padding: 0 1rem; font-size: 0.94rem;" placeholder="Your Full Name" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label" style="font-weight: 700; color: #0f172a; font-size: 0.88rem; margin-bottom: 0.4rem; display: block;">Email Address *</label>
                        <input type="email" name="email" class="form-control" style="width: 100%; height: 48px; border-radius: 12px; border: 1px solid #cbd5e1; padding: 0 1rem; font-size: 0.94rem;" placeholder="your.email@university.edu" required>
                    </div>
                </div>

                <div class="form-row-grid" style="margin-bottom: 1.25rem;">
                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label" style="font-weight: 700; color: #0f172a; font-size: 0.88rem; margin-bottom: 0.4rem; display: block;">WhatsApp Number <span style="font-weight: 400; color: #64748b;">(Optional)</span></label>
                        <input type="text" name="whatsapp" class="form-control" style="width: 100%; height: 48px; border-radius: 12px; border: 1px solid #cbd5e1; padding: 0 1rem; font-size: 0.94rem;" placeholder="+92 300 0000000">
                    </div>
                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label" style="font-weight: 700; color: #0f172a; font-size: 0.88rem; margin-bottom: 0.4rem; display: block;">Category / Role *</label>
                        <select name="academic_level" class="form-control" style="width: 100%; height: 48px; border-radius: 12px; border: 1px solid #cbd5e1; padding: 0 1rem; font-size: 0.94rem;" required>
                            <option value="PhD Candidate">PhD / DBA Candidate</option>
                            <option value="Master's Researcher">Master's Student</option>
                            <option value="University Faculty">University Faculty</option>
                            <option value="Corporate / HR Leadership">Corporate / HR Leadership</option>
                            <option value="Independent Scholar">Independent Scholar</option>
                        </select>
                    </div>
                </div>

                <div class="form-group" style="margin-bottom: 1.25rem;">
                    <label class="form-label" style="font-weight: 700; color: #0f172a; font-size: 0.88rem; margin-bottom: 0.4rem; display: block;">Service Requested *</label>
                    <select name="service_type" id="consultation_service_select" class="form-control" style="width: 100%; height: 48px; border-radius: 12px; border: 1px solid #cbd5e1; padding: 0 1rem; font-size: 0.94rem;" required>
                        <optgroup label="For Researchers & Students (1-on-1)">
                            <option value="Assistance in Proposal Writing">Assistance in Proposal Writing</option>
                            <option value="Help with the Research Publication Process">Help with the Research Publication Process</option>
                            <option value="Dissertation Writing Consultancy">Dissertation Writing Consultancy</option>
                            <option value="Systematic Literature Review Support">Systematic Literature Review Support</option>
                        </optgroup>
                        <optgroup label="Institutional Trainings & Workshops">
                            <option value="Live Institutional Training Proposal">Live Institutional Training Proposal</option>
                            <option value="University Research Paper Bootcamp">University Research Paper Bootcamp</option>
                            <option value="SLR & Meta-Analysis Faculty Workshop">SLR & Meta-Analysis Faculty Workshop</option>
                        </optgroup>
                        <optgroup label="For Organizations (HR Consultation)">
                            <option value="Workplace Policy Design & Review">Workplace Policy Design & Review</option>
                            <option value="Organizational Innovation Consulting">Organizational Innovation Consulting</option>
                            <option value="Servant Leadership Practice">Servant Leadership Practice</option>
                            <option value="Sustainable HR Management Systems">Sustainable HR Management Systems</option>
                            <option value="Workplace Dignity Assessments">Workplace Dignity Assessments</option>
                        </optgroup>
                    </select>
                </div>

                <div class="form-group" style="margin-bottom: 1.75rem;">
                    <label class="form-label" style="font-weight: 700; color: #0f172a; font-size: 0.88rem; margin-bottom: 0.4rem; display: block;">Message & Project Overview *</label>
                    <textarea name="message" class="form-control" style="width: 100%; border-radius: 12px; border: 1px solid #cbd5e1; padding: 0.85rem 1rem; font-size: 0.94rem;" placeholder="Describe your thesis topic, current progress, deadline, or organizational challenge..." rows="4" required></textarea>
                </div>

                <div style="text-align: center;">
                    <button type="submit" class="btn-navy" style="padding: 0.9rem 2.6rem; font-size: 0.98rem; border-radius: 12px; font-weight: 800; cursor: pointer; display: inline-flex; align-items: center; gap: 0.5rem;" id="consultation-submit-btn">
                        <span>Submit Consultation Request</span> <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Closing CTA Banner Section: Not Sure Where to Start? -->
<section class="services-cta-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 50%, #0f172a 100%); color: #ffffff; padding: 4.5rem 1rem; text-align: center; border-top: 3px solid #eab308; position: relative; overflow: hidden;">
    <div class="container reveal-scroll-up" style="max-width: 820px; position: relative; z-index: 2;">
        <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(234, 179, 8, 0.15); border: 1px solid rgba(234, 179, 8, 0.3); color: #fef08a; padding: 0.4rem 1.1rem; border-radius: 20px; font-weight: 800; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1.2px; margin-bottom: 1.25rem;">
            <i class="fas fa-compass"></i> NEED GUIDANCE?
        </div>
        <h2 style="font-family: var(--font-heading); font-size: 2.4rem; font-weight: 800; color: #ffffff; margin-bottom: 1rem; line-height: 1.25;">
            Not Sure Where to Start?
        </h2>
        <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 1.75; margin-bottom: 2.25rem; max-width: 720px; margin-left: auto; margin-right: auto;">
            Tell me what you're working on — a thesis, a publication, an HR challenge, or a training need — and I'll point you to the right service.
        </p>
        
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; align-items: center;">
            <a href="{{ route('contact.index') }}" class="btn-navy" style="background: #eab308; color: #0f172a; font-weight: 800; padding: 0.95rem 2.4rem; font-size: 1rem; border-radius: 12px; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem; transition: transform 0.25s ease, box-shadow 0.25s ease; box-shadow: 0 4px 15px rgba(234, 179, 8, 0.3);">
                Contact Me <i class="fas fa-envelope"></i>
            </a>
            <a href="#consultation-booking-form" class="btn-navy" style="background: transparent; color: #ffffff; border: 2px solid #ffffff; font-weight: 800; padding: 0.95rem 2.4rem; font-size: 1rem; border-radius: 12px; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem; transition: background 0.25s ease, color 0.25s ease;">
                Book a Free Discovery Call <i class="fas fa-calendar-check"></i>
            </a>
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

    document.querySelectorAll(".reveal-scroll-up, .reveal-card-box").forEach(function (el) {
        revealObserver.observe(el);
    });

    // Update active nav pill link on scroll
    const sections = document.querySelectorAll("div[id]");
    const navPills = document.querySelectorAll(".services-nav-pill-link");

    window.addEventListener("scroll", function () {
        let currentSection = "";
        sections.forEach(function (section) {
            const sectionTop = section.offsetTop - 160;
            if (window.scrollY >= sectionTop) {
                currentSection = section.getAttribute("id");
            }
        });

        navPills.forEach(function (pill) {
            pill.classList.remove("active");
            if (pill.getAttribute("href") === "#" + currentSection) {
                pill.classList.add("active");
            }
        });
    });
});

function selectServiceOption(serviceName) {
    const selectElem = document.getElementById("consultation_service_select");
    if (selectElem) {
        for (let i = 0; i < selectElem.options.length; i++) {
            if (selectElem.options[i].value.toLowerCase().includes(serviceName.toLowerCase()) || 
                serviceName.toLowerCase().includes(selectElem.options[i].value.toLowerCase())) {
                selectElem.selectedIndex = i;
                break;
            }
        }
    }
}
</script>

@endsection
