@extends('layouts.app')

@section('title', '1-on-1 Academic Advisory & HR Consultation | Dr. Muhammad Shakil Ahmad')

@push('styles')
<style>
    .consultation-hero-section {
        padding: 5.5rem 0 4rem 0;
        background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #0f172a 100%);
        color: #ffffff;
        position: relative;
        overflow: hidden;
    }
    .consultation-hero-section::before {
        content: '';
        position: absolute;
        width: 600px;
        height: 600px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(234, 179, 8, 0.12) 0%, rgba(0,0,0,0) 70%);
        top: -150px;
        right: -100px;
        pointer-events: none;
    }
    .consultation-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.45rem 1.2rem;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 30px;
        font-size: 0.85rem;
        color: #fef08a;
        font-weight: 700;
        margin-bottom: 1.25rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    /* 2-Column Grid Layout for Consultation Cards */
    .consultation-grid-2col {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.75rem;
        margin-bottom: 3.5rem;
        align-items: stretch;
    }
    .consultation-card-box {
        background: #ffffff;
        border: 1px solid #cbd5e1;
        border-radius: 18px;
        padding: 1.5rem;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.04);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        height: 100%;
        position: relative;
    }
    .consultation-card-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 14px 30px rgba(30, 58, 138, 0.12);
        border-color: #0284c7;
    }
    .consultation-img-wrapper {
        height: 190px;
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 1.25rem;
        background: #f1f5f9;
        border: 1px solid #e2e8f0;
    }
    .consultation-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    .consultation-card-box:hover .consultation-img-wrapper img {
        transform: scale(1.04);
    }
    .consultation-card-category {
        font-size: 0.78rem;
        font-weight: 800;
        color: #0284c7;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 0.4rem;
    }
    .consultation-card-title {
        font-family: var(--font-heading);
        font-size: 1.25rem;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 0.6rem;
        line-height: 1.3;
    }
    .consultation-card-desc {
        font-size: 0.92rem;
        color: #475569;
        line-height: 1.65;
        margin-bottom: 1rem;
    }
    .consultation-features-list {
        list-style: none;
        padding: 0;
        margin: 0 0 1.25rem 0;
        display: flex;
        flex-direction: column;
        gap: 0.45rem;
    }
    .consultation-features-list li {
        font-size: 0.88rem;
        color: #334155;
        font-weight: 600;
        display: flex;
        align-items: flex-start;
        gap: 0.5rem;
    }
    .consultation-features-list li i {
        color: #0284c7;
        margin-top: 3px;
    }

    /* Section Intro Box */
    .section-intro-card {
        background: #f8fafc;
        border: 1px solid #cbd5e1;
        border-radius: 18px;
        padding: 1.75rem;
        margin-bottom: 2.5rem;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.02);
    }
    .section-intro-text {
        font-size: 1.02rem;
        color: #334155;
        line-height: 1.75;
        margin: 0;
    }

    /* How It Works Card */
    .how-it-works-box {
        background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%);
        border-radius: 20px;
        padding: 3rem 2rem;
        color: #ffffff;
        margin: 4rem 0 3rem 0;
        text-align: center;
        box-shadow: 0 10px 30px rgba(15, 23, 42, 0.15);
    }
    .step-number-circle {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: #eab308;
        color: #0f172a;
        font-weight: 800;
        font-size: 1.25rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
    }

    @media (max-width: 992px) {
        .consultation-grid-2col {
            grid-template-columns: 1fr !important;
            gap: 1.5rem !important;
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
        <h1 style="font-family: var(--font-heading); font-size: 2.75rem; color: #ffffff; margin-bottom: 0.8rem;">
            Consultation & Advisory Services
        </h1>
        <p style="color: #cbd5e1; max-width: 820px; margin: 0 auto; font-size: 1.08rem; line-height: 1.7;">
            Expert 1-on-1 advisory for researchers, students, and organizations. From proposal drafting to journal publication, and research-grounded HR policy design.
        </p>
    </div>
</section>

<!-- MAIN CONTENT AREA -->
<section class="section-padding" style="background: #f8fafc;">
    <div class="container" style="max-width: 1150px;">

        <!-- 1. FOR RESEARCHERS & STUDENTS SECTION -->
        <div id="for-students" style="margin-bottom: 4rem; scroll-margin-top: 100px;">
            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.25rem;">
                <span style="background: #e0f2fe; color: #0369a1; padding: 0.4rem 1rem; border-radius: 20px; font-weight: 800; font-size: 0.82rem; text-transform: uppercase; letter-spacing: 1px;">
                    SECTION 1
                </span>
                <h2 style="font-family: var(--font-heading); font-size: 2.1rem; font-weight: 800; color: #0f172a; margin: 0;">
                    For Researchers & Students
                </h2>
            </div>

            <!-- Hero Intro Paragraph for Researchers & Students -->
            <div class="section-intro-card">
                <p class="section-intro-text">
                    <strong>Dissertation and thesis consultation, research design review, methodology troubleshooting, and publication support</strong> for candidates who need expert eyes on their work before submission or defense. From the first proposal draft to the final defense, I work alongside you at every stage of the research journey helping you frame a fundable proposal, navigate the publication process in top-tier journals, structure a dissertation that holds together end to end, and build the literature foundation your study rests on. Each of these draws directly on my own experience: securing funded grants from Oman's Ministry of Higher Education and Pakistan's HEC, publishing 90+ papers in SSCI-indexed journals with an H-index of 39, and supervising DBA, MBA, and Ph.D. candidates for over 15 years across the UK, Oman, Pakistan, and South Korea.
                </p>
            </div>

            <!-- 4 Cards Grid for Researchers & Students -->
            <div class="consultation-grid-2col">
                
                <!-- 1. Assistance in Proposal Writing -->
                <div class="consultation-card-box reveal-card-box">
                    <div>
                        <div class="consultation-img-wrapper">
                            <img src="{{ asset('images/consultation_prog_2.jpg') }}" alt="Assistance in Proposal Writing">
                        </div>
                        <div class="consultation-card-category">PROPOSAL & METHODOLOGY</div>
                        <h3 class="consultation-card-title">Assistance in Proposal Writing</h3>
                        <p class="consultation-card-desc">
                            Building a proposal that clears committee review the first time: a clear problem statement, justified methodology, and objectives that are answerable within your timeline.
                        </p>
                        <ul class="consultation-features-list">
                            <li><i class="fas fa-check-circle"></i> Clear Problem Statement Formulation</li>
                            <li><i class="fas fa-check-circle"></i> Justified Methodology & Design</li>
                            <li><i class="fas fa-check-circle"></i> Committee-Ready Proposal Structure</li>
                            <li><i class="fas fa-check-circle"></i> Timeline & Feasibility Alignment</li>
                        </ul>
                    </div>
                    <div style="margin-top: auto; padding-top: 1rem;">
                        <a href="#consultation-booking-form" onclick="selectServiceOption('Assistance in Proposal Writing')" class="btn-navy" style="width: 100%; text-align: center; display: block; border-radius: 10px;">
                            BOOK THIS SERVICE <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                        </a>
                    </div>
                </div>

                <!-- 2. Help with the Research Publication Process -->
                <div class="consultation-card-box reveal-card-box">
                    <div>
                        <div class="consultation-img-wrapper">
                            <img src="{{ asset('images/consultation_prog_3.jpg') }}" alt="Help with the Research Publication Process">
                        </div>
                        <div class="consultation-card-category">JOURNAL PUBLISHING</div>
                        <h3 class="consultation-card-title">Help with the Research Publication Process</h3>
                        <p class="consultation-card-desc">
                            Guidance through journal selection, positioning your contribution, navigating peer review, and drafting a response-to-reviewers letter that gets you across the finish line.
                        </p>
                        <ul class="consultation-features-list">
                            <li><i class="fas fa-check-circle"></i> Journal Selection & Impact Matching</li>
                            <li><i class="fas fa-check-circle"></i> Positioning Research Contribution</li>
                            <li><i class="fas fa-check-circle"></i> Navigating Peer Review & Revisions</li>
                            <li><i class="fas fa-check-circle"></i> Response-to-Reviewers Drafting</li>
                        </ul>
                    </div>
                    <div style="margin-top: auto; padding-top: 1rem;">
                        <a href="#consultation-booking-form" onclick="selectServiceOption('Help with the Research Publication Process')" class="btn-navy" style="width: 100%; text-align: center; display: block; border-radius: 10px;">
                            BOOK THIS SERVICE <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                        </a>
                    </div>
                </div>

                <!-- 3. Dissertation Writing Consultancy -->
                <div class="consultation-card-box reveal-card-box">
                    <div>
                        <div class="consultation-img-wrapper">
                            <img src="{{ asset('images/course_lit_review_thumb.png') }}" alt="Dissertation Writing Consultancy">
                        </div>
                        <div class="consultation-card-category">DISSERTATION MENTORSHIP</div>
                        <h3 class="consultation-card-title">Dissertation Writing Consultancy</h3>
                        <p class="consultation-card-desc">
                            Chapter-by-chapter support through problem formulation, literature review, methodology design, data analysis, and defense preparation.
                        </p>
                        <ul class="consultation-features-list">
                            <li><i class="fas fa-check-circle"></i> Chapter-by-Chapter Support</li>
                            <li><i class="fas fa-check-circle"></i> Literature Synthesis & Gap Framing</li>
                            <li><i class="fas fa-check-circle"></i> Data Analysis & Interpretation</li>
                            <li><i class="fas fa-check-circle"></i> Defense Preparation & Mock Q&A</li>
                        </ul>
                    </div>
                    <div style="margin-top: auto; padding-top: 1rem;">
                        <a href="#consultation-booking-form" onclick="selectServiceOption('Dissertation Writing Consultancy')" class="btn-navy" style="width: 100%; text-align: center; display: block; border-radius: 10px;">
                            BOOK THIS SERVICE <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                        </a>
                    </div>
                </div>

                <!-- 4. Systematic Literature Review Support -->
                <div class="consultation-card-box reveal-card-box">
                    <div>
                        <div class="consultation-img-wrapper">
                            <img src="{{ asset('images/consultation_prog_4.jpg') }}" alt="Systematic Literature Review Support">
                        </div>
                        <div class="consultation-card-category">LITERATURE REVIEWS</div>
                        <h3 class="consultation-card-title">Systematic Literature Review Support</h3>
                        <p class="consultation-card-desc">
                            Defining your search strategy, applying inclusion/exclusion criteria (e.g., PRISMA), and synthesizing findings into a credible evidence base for your study.
                        </p>
                        <ul class="consultation-features-list">
                            <li><i class="fas fa-check-circle"></i> Search Strategy & Database Setup</li>
                            <li><i class="fas fa-check-circle"></i> PRISMA Inclusion/Exclusion Criteria</li>
                            <li><i class="fas fa-check-circle"></i> Quality Appraisal & Risk of Bias</li>
                            <li><i class="fas fa-check-circle"></i> Evidence Base Synthesis</li>
                        </ul>
                    </div>
                    <div style="margin-top: auto; padding-top: 1rem;">
                        <a href="#consultation-booking-form" onclick="selectServiceOption('Systematic Literature Review Support')" class="btn-navy" style="width: 100%; text-align: center; display: block; border-radius: 10px;">
                            BOOK THIS SERVICE <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>


        <!-- 2. FOR ORGANIZATIONS SECTION -->
        <div id="for-organizations" style="margin-bottom: 3.5rem; scroll-margin-top: 100px;">
            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.25rem;">
                <span style="background: #fef9c3; color: #854d0e; padding: 0.4rem 1rem; border-radius: 20px; font-weight: 800; font-size: 0.82rem; text-transform: uppercase; letter-spacing: 1px;">
                    SECTION 2
                </span>
                <h2 style="font-family: var(--font-heading); font-size: 2.1rem; font-weight: 800; color: #0f172a; margin: 0;">
                    For Organizations & HR Functions
                </h2>
            </div>

            <!-- Hero Intro Paragraph for Organizations -->
            <div class="section-intro-card" style="border-left: 4px solid #eab308;">
                <p class="section-intro-text">
                    <strong>HR consultation for organizations that want practice grounded in research</strong>, not templates borrowed from unrelated industries. Drawing on published work in workplace dignity, servant leadership, and organizational sustainability, I help leadership teams and HR functions design policy and practice that actually holds up in day-to-day operations.
                </p>
            </div>

            <!-- 5 Cards Grid for Organizations -->
            <div class="consultation-grid-2col">
                
                <!-- 1. Workplace Policy Design & Review -->
                <div class="consultation-card-box reveal-card-box">
                    <div>
                        <div class="consultation-img-wrapper">
                            <img src="{{ asset('images/consultation_prog_5.jpg') }}" alt="Workplace Policy Design & Review">
                        </div>
                        <div class="consultation-card-category">HR POLICY & GOVERNANCE</div>
                        <h3 class="consultation-card-title">Workplace Policy Design & Review</h3>
                        <p class="consultation-card-desc">
                            Auditing and rebuilding HR policies (performance management, grievance handling, employee relations) so they're consistent, fair, and legally sound — not just copied from a template.
                        </p>
                        <ul class="consultation-features-list">
                            <li><i class="fas fa-check-circle"></i> Performance Management Audit</li>
                            <li><i class="fas fa-check-circle"></i> Grievance Handling & Relations</li>
                            <li><i class="fas fa-check-circle"></i> Legal & Operational Alignment</li>
                            <li><i class="fas fa-check-circle"></i> Consistency & Fairness Review</li>
                        </ul>
                    </div>
                    <div style="margin-top: auto; padding-top: 1rem;">
                        <a href="#consultation-booking-form" onclick="selectServiceOption('Workplace Policy Design & Review')" class="btn-navy" style="width: 100%; text-align: center; display: block; border-radius: 10px;">
                            BOOK THIS CONSULTATION <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                        </a>
                    </div>
                </div>

                <!-- 2. Organizational Innovation Consulting -->
                <div class="consultation-card-box reveal-card-box">
                    <div>
                        <div class="consultation-img-wrapper">
                            <img src="{{ asset('images/hero_img_2.jpg') }}" alt="Organizational Innovation Consulting">
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
                        <a href="#consultation-booking-form" onclick="selectServiceOption('Organizational Innovation Consulting')" class="btn-navy" style="width: 100%; text-align: center; display: block; border-radius: 10px;">
                            BOOK THIS CONSULTATION <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                        </a>
                    </div>
                </div>

                <!-- 3. Servant Leadership Practice -->
                <div class="consultation-card-box reveal-card-box">
                    <div>
                        <div class="consultation-img-wrapper">
                            <img src="{{ asset('images/dr_shakil_presentation_quote.jpg') }}" alt="Servant Leadership Practice">
                        </div>
                        <div class="consultation-card-category">LEADERSHIP DEVELOPMENT</div>
                        <h3 class="consultation-card-title">Servant Leadership Practice</h3>
                        <p class="consultation-card-desc">
                            Translating servant leadership principles into concrete manager behaviors and evaluation criteria, so it becomes how the organization actually operates, not just a slogan in the handbook.
                        </p>
                        <ul class="consultation-features-list">
                            <li><i class="fas fa-check-circle"></i> Behavioral Competency Mapping</li>
                            <li><i class="fas fa-check-circle"></i> Manager Evaluation Criteria</li>
                            <li><i class="fas fa-check-circle"></i> Operational Practice Integration</li>
                            <li><i class="fas fa-check-circle"></i> Executive & Leadership Coaching</li>
                        </ul>
                    </div>
                    <div style="margin-top: auto; padding-top: 1rem;">
                        <a href="#consultation-booking-form" onclick="selectServiceOption('Servant Leadership Practice')" class="btn-navy" style="width: 100%; text-align: center; display: block; border-radius: 10px;">
                            BOOK THIS CONSULTATION <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                        </a>
                    </div>
                </div>

                <!-- 4. Sustainable HR Management Systems -->
                <div class="consultation-card-box reveal-card-box">
                    <div>
                        <div class="consultation-img-wrapper">
                            <img src="{{ asset('images/hero_img_4.jpg') }}" alt="Sustainable HR Management Systems">
                        </div>
                        <div class="consultation-card-category">SUSTAINABLE HR</div>
                        <h3 class="consultation-card-title">Sustainable HR Management Systems</h3>
                        <p class="consultation-card-desc">
                            Designing HR systems built for long-term organizational health: retention, employee wellbeing, and workforce planning that holds up beyond a single budget cycle.
                        </p>
                        <ul class="consultation-features-list">
                            <li><i class="fas fa-check-circle"></i> Long-Term Retention Architecture</li>
                            <li><i class="fas fa-check-circle"></i> Employee Wellbeing Frameworks</li>
                            <li><i class="fas fa-check-circle"></i> Strategic Workforce Planning</li>
                            <li><i class="fas fa-check-circle"></i> Sustainable Health Metrics</li>
                        </ul>
                    </div>
                    <div style="margin-top: auto; padding-top: 1rem;">
                        <a href="#consultation-booking-form" onclick="selectServiceOption('Sustainable HR Management Systems')" class="btn-navy" style="width: 100%; text-align: center; display: block; border-radius: 10px;">
                            BOOK THIS CONSULTATION <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                        </a>
                    </div>
                </div>

                <!-- 5. Workplace Dignity Assessments -->
                <div class="consultation-card-box reveal-card-box" style="grid-column: 1 / -1;">
                    <div>
                        <div class="consultation-img-wrapper" style="height: 230px;">
                            <img src="{{ asset('images/dr_shakil_symposium_speaker.jpg') }}" alt="Workplace Dignity Assessments">
                        </div>
                        <div class="consultation-card-category">ORGANIZATIONAL CULTURE</div>
                        <h3 class="consultation-card-title">Workplace Dignity Assessments</h3>
                        <p class="consultation-card-desc">
                            Reviewing how employees are treated across every level of the organization, and identifying where policy or culture is quietly undermining morale and retention.
                        </p>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 0.5rem; margin-bottom: 1.25rem;">
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
                        <a href="#consultation-booking-form" onclick="selectServiceOption('Workplace Dignity Assessments')" class="btn-navy" style="width: 100%; text-align: center; display: block; border-radius: 10px;">
                            BOOK THIS CONSULTATION <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>


        <!-- 3. HOW IT WORKS SECTION -->
        <div class="how-it-works-box reveal-scroll-up">
            <div style="font-size: 0.85rem; font-weight: 800; color: #fef08a; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 0.5rem;">
                SIMPLE 3-STEP PROCESS
            </div>
            <h2 style="font-family: var(--font-heading); font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 2rem;">
                How It Works
            </h2>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 2rem; margin-bottom: 2.5rem; text-align: left;">
                
                <!-- Step 1 -->
                <div style="background: rgba(255, 255, 255, 0.08); padding: 1.75rem; border-radius: 16px; border: 1px solid rgba(255, 255, 255, 0.15);">
                    <div class="step-number-circle">1</div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; color: #ffffff; margin-bottom: 0.5rem;">Book an Initial Consultation Call</h3>
                    <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
                        Book your initial consultation call via the scheduling form below.
                    </p>
                </div>

                <!-- Step 2 -->
                <div style="background: rgba(255, 255, 255, 0.08); padding: 1.75rem; border-radius: 16px; border: 1px solid rgba(255, 255, 255, 0.15);">
                    <div class="step-number-circle">2</div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; color: #ffffff; margin-bottom: 0.5rem;">Share Your Challenge</h3>
                    <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
                        Share your research, HR challenge, or institutional goal in detail.
                    </p>
                </div>

                <!-- Step 3 -->
                <div style="background: rgba(255, 255, 255, 0.08); padding: 1.75rem; border-radius: 16px; border: 1px solid rgba(255, 255, 255, 0.15);">
                    <div class="step-number-circle">3</div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; color: #ffffff; margin-bottom: 0.5rem;">Receive a Tailored Plan</h3>
                    <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
                        Receive a tailored plan — one-off session or ongoing engagement.
                    </p>
                </div>

            </div>

            <a href="#consultation-booking-form" class="btn-navy" style="background: #eab308; color: #0f172a; font-weight: 800; padding: 0.9rem 2.4rem; font-size: 1.05rem; border-radius: 12px; text-decoration: none; display: inline-block;">
                Book a Consultation <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
            </a>
        </div>

    </div>
</section>

<!-- Responsive Booking & Consultation Form Section -->
<section id="consultation-booking-form" class="section-padding" style="background: #ffffff; border-top: 1px solid var(--border); overflow: hidden;">
    <div class="container" style="max-width: 720px;">
        <div class="reveal-scroll-up" style="background: var(--surface); padding: 2.5rem 2rem; border-radius: 20px; border: 1px solid var(--border); box-shadow: 0 10px 30px rgba(0,0,0,0.06);">
            <div class="section-header" style="margin-bottom: 1.75rem;">
                <div class="section-subtitle">SCHEDULE YOUR SESSION</div>
                <h2 class="section-title" style="font-size: 1.85rem; margin-bottom: 0.4rem;">Book Your Consultation</h2>
                <p style="color: var(--muted); font-size: 0.98rem; margin-top: 0.3rem;">
                    Select your required program below and share details about your research or organizational goal.
                </p>
            </div>

            <form action="{{ route('contact.store') }}" method="POST" id="consultationFormPage">
                @csrf
                <div class="form-row-grid" style="margin-bottom: 1.25rem;">
                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label" style="font-weight: 700; color: #0f172a; font-size: 0.88rem; margin-bottom: 0.4rem; display: block;">Full Name *</label>
                        <input type="text" name="name" class="form-control" style="width: 100%; height: 46px; border-radius: 10px; border: 1px solid #cbd5e1; padding: 0 1rem; font-size: 0.92rem;" placeholder="Your Full Name" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label" style="font-weight: 700; color: #0f172a; font-size: 0.88rem; margin-bottom: 0.4rem; display: block;">Email Address *</label>
                        <input type="email" name="email" class="form-control" style="width: 100%; height: 46px; border-radius: 10px; border: 1px solid #cbd5e1; padding: 0 1rem; font-size: 0.92rem;" placeholder="your.email@university.edu" required>
                    </div>
                </div>

                <div class="form-row-grid" style="margin-bottom: 1.25rem;">
                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label" style="font-weight: 700; color: #0f172a; font-size: 0.88rem; margin-bottom: 0.4rem; display: block;">WhatsApp Number *</label>
                        <input type="text" name="whatsapp" class="form-control" style="width: 100%; height: 46px; border-radius: 10px; border: 1px solid #cbd5e1; padding: 0 1rem; font-size: 0.92rem;" placeholder="+92 300 0000000" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label" style="font-weight: 700; color: #0f172a; font-size: 0.88rem; margin-bottom: 0.4rem; display: block;">Category / Role *</label>
                        <select name="academic_level" class="form-control" style="width: 100%; height: 46px; border-radius: 10px; border: 1px solid #cbd5e1; padding: 0 1rem; font-size: 0.92rem;" required>
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
                    <select name="service_type" id="consultation_service_select" class="form-control" style="width: 100%; height: 46px; border-radius: 10px; border: 1px solid #cbd5e1; padding: 0 1rem; font-size: 0.92rem;" required>
                        <optgroup label="For Researchers & Students">
                            <option value="Assistance in Proposal Writing">Assistance in Proposal Writing</option>
                            <option value="Help with the Research Publication Process">Help with the Research Publication Process</option>
                            <option value="Dissertation Writing Consultancy">Dissertation Writing Consultancy</option>
                            <option value="Systematic Literature Review Support">Systematic Literature Review Support</option>
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

                <div class="form-group" style="margin-bottom: 1.5rem;">
                    <label class="form-label" style="font-weight: 700; color: #0f172a; font-size: 0.88rem; margin-bottom: 0.4rem; display: block;">Message & Project Overview *</label>
                    <textarea name="message" class="form-control" style="width: 100%; border-radius: 10px; border: 1px solid #cbd5e1; padding: 0.75rem 1rem; font-size: 0.92rem;" placeholder="Describe research topic, HR challenge, current progress, or deadline..." rows="4" required></textarea>
                </div>

                <div style="text-align: center;">
                    <button type="submit" class="btn-navy" style="padding: 0.85rem 2.4rem; font-size: 0.95rem; border-radius: 10px; font-weight: 800; cursor: pointer;" id="consultation-submit-btn">
                        Submit Consultation Request <i class="fas fa-paper-plane" style="margin-left: 6px;"></i>
                    </button>
                </div>
            </form>
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
