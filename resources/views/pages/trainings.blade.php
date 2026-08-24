@extends('layouts.app')

@section('title', 'Institutional & Research Trainings | Dr. Muhammad Shakil Ahmad')

@push('styles')
<style>
    .trainings-hero-section {
        padding: 5.5rem 0 4rem 0;
        background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #0f172a 100%);
        color: #ffffff;
        position: relative;
        overflow: hidden;
    }
    .trainings-hero-section::before {
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
    .trainings-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.4rem 1rem;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 30px;
        font-size: 0.85rem;
        color: #fef08a;
        font-weight: 600;
        margin-bottom: 1.25rem;
    }
    .trainings-hero-title {
        font-family: var(--font-heading);
        font-size: 3rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 1rem;
        line-height: 1.2;
    }
    .trainings-hero-subtitle {
        color: #cbd5e1;
        max-width: 750px;
        margin: 0 auto 2rem auto;
        font-size: 1.1rem;
        line-height: 1.7;
    }
    .trainings-stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1.5rem;
        margin-top: 3rem;
        padding-top: 2.5rem;
        border-top: 1px solid rgba(255, 255, 255, 0.12);
    }
    .trainings-stat-card {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 14px;
        padding: 1.25rem;
        text-align: center;
        backdrop-filter: blur(5px);
    }
    .trainings-stat-num {
        font-size: 2rem;
        font-weight: 800;
        color: #facc15;
    }
    .trainings-stat-text {
        font-size: 0.88rem;
        color: #cbd5e1;
        margin-top: 0.25rem;
    }
    
    /* Interactive Module Track Cards */
    .module-card {
        background: #ffffff;
        border-radius: 16px;
        border: 1px solid #e2e8f0;
        padding: 2.25rem;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .module-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 32px rgba(30, 58, 138, 0.12);
        border-color: #cbd5e1;
    }
    .module-icon-box {
        width: 56px;
        height: 56px;
        border-radius: 14px;
        background: linear-gradient(135deg, rgba(30, 58, 138, 0.1) 0%, rgba(30, 58, 138, 0.05) 100%);
        color: #1e3a8a;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin-bottom: 1.25rem;
    }
    .module-title {
        font-family: var(--font-heading);
        font-size: 1.35rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 0.75rem;
    }
    .module-list-group {
        list-style: none;
        padding: 0;
        margin: 0 0 1.5rem 0;
        display: flex;
        flex-direction: column;
        gap: 0.65rem;
    }
    .module-list-item {
        font-size: 0.9rem;
        color: #334155;
        display: flex;
        align-items: flex-start;
        gap: 0.65rem;
        line-height: 1.5;
    }
    .module-list-item i {
        color: #0284c7;
        font-size: 0.9rem;
        margin-top: 3px;
        flex-shrink: 0;
    }
    .module-badge-row {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
        margin-bottom: 1.25rem;
    }
    .module-badge {
        font-size: 0.78rem;
        font-weight: 600;
        padding: 0.2rem 0.6rem;
        border-radius: 6px;
        background: #f1f5f9;
        color: #475569;
    }
</style>
@endpush

@section('content')

<!-- Rich Hero Section -->
<section class="trainings-hero-section">
    <div class="container text-center">
        <div class="trainings-hero-badge">
            <i class="fas fa-award"></i> FACULTY & INSTITUTIONAL CAPACITY BUILDING
        </div>
        <h1 class="trainings-hero-title">
            Institutional & Research Trainings
        </h1>
        <p class="trainings-hero-subtitle">
            Customized university workshops, ORIC capacity-building seminars, and hands-on research bootcamps led by Dr. Muhammad Shakil Ahmad across international institutions.
        </p>

        <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
            <a href="#training-proposal-form" class="btn-navy" style="background: #eab308; color: #0f172a; padding: 0.85rem 2rem; font-weight: 700;">
                Request Workshop Proposal <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
            </a>
        </div>

        <!-- Stats Counter Grid -->
        <div class="trainings-stats-grid">
            <div class="trainings-stat-card">
                <div class="trainings-stat-num">50+</div>
                <div class="trainings-stat-text">University Workshops</div>
            </div>
            <div class="trainings-stat-card">
                <div class="trainings-stat-num">12,000+</div>
                <div class="trainings-stat-text">Scholars & Faculty Trained</div>
            </div>
            <div class="trainings-stat-card">
                <div class="trainings-stat-num">15+</div>
                <div class="trainings-stat-text">Global Academic Partners</div>
            </div>
            <div class="trainings-stat-card">
                <div class="trainings-stat-num">100%</div>
                <div class="trainings-stat-text">Customized Curricula</div>
            </div>
        </div>
    </div>
</section>

<!-- Visual Showcase & Overview -->
<section class="section-padding" style="background: #ffffff;">
    <div class="container">
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3.5rem; align-items: center; margin-bottom: 5rem;">
            <div>
                <div style="font-size: 0.85rem; font-weight: 700; color: #1e3a8a; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 0.5rem;">GLOBAL RESEARCH ADVISORY</div>
                <h2 style="font-family: var(--font-heading); font-size: 2.25rem; color: #0f172a; margin-bottom: 1.25rem; line-height: 1.25;">
                    Empowering Academic Faculties & Research Centers Globally
                </h2>
                <p style="color: #475569; font-size: 1rem; line-height: 1.7; margin-bottom: 1.25rem;">
                    Since 2015, Dr. Shakil has delivered intensive, practical training workshops for universities, ORIC centers, and research institutes across Pakistan, the Middle East, Europe, UK, USA, Canada, and Australia.
                </p>
                
                <!-- Program Highlights Structured List -->
                <div style="margin-bottom: 1.75rem; display: flex; flex-direction: column; gap: 0.75rem;">
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <i class="fas fa-check-circle" style="color: #0284c7; margin-top: 4px; font-size: 1.1rem;"></i>
                        <span style="color: #334155; font-weight: 600; font-size: 0.95rem;"><strong>Software Tool Mastery:</strong> Hands-on lab coding in NVivo, MAXQDA, VOSviewer, SmartPLS 4, AMOS & SPSS.</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <i class="fas fa-check-circle" style="color: #0284c7; margin-top: 4px; font-size: 1.1rem;"></i>
                        <span style="color: #334155; font-weight: 600; font-size: 0.95rem;"><strong>PRISMA 2020 Protocols:</strong> Systematic review matrices, risk of bias tools, and GRADE meta-analysis.</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <i class="fas fa-check-circle" style="color: #0284c7; margin-top: 4px; font-size: 1.1rem;"></i>
                        <span style="color: #334155; font-weight: 600; font-size: 0.95rem;"><strong>Institutional Capacity:</strong> Strategic ORIC roadmaps to multiply Scopus Q1 and SSCI publication output.</span>
                    </div>
                </div>

                <a href="#training-proposal-form" class="btn-navy" style="padding: 0.85rem 1.75rem;">
                    Request Custom Training Proposal <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                </a>
            </div>

            <!-- Pictures Grid Showcase -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem;">
                <div style="border-radius: 16px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border: 1px solid #e2e8f0; position: relative;">
                    <img src="{{ asset('images/hero_img_3.jpg') }}" alt="Computer Lab Workshop Session" style="width: 100%; height: 200px; object-fit: cover; display: block;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(0deg, rgba(15,23,42,0.9) 0%, transparent 100%); padding: 0.75rem 1rem; color: #ffffff; font-weight: 700; font-size: 0.8rem;">
                        Hands-On Computer Lab Sessions
                    </div>
                </div>
                <div style="border-radius: 16px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border: 1px solid #e2e8f0; position: relative;">
                    <img src="{{ asset('images/hero_img_4.jpg') }}" alt="CPD Centre Auditorium Lecture" style="width: 100%; height: 200px; object-fit: cover; display: block;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(0deg, rgba(15,23,42,0.9) 0%, transparent 100%); padding: 0.75rem 1rem; color: #ffffff; font-weight: 700; font-size: 0.8rem;">
                        CPD Faculty Executive Seminars
                    </div>
                </div>
                <div style="border-radius: 16px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border: 1px solid #e2e8f0; position: relative;">
                    <img src="{{ asset('images/course_qualitative_thumb.png') }}" alt="NVivo Qualitative Bootcamp" style="width: 100%; height: 200px; object-fit: cover; display: block;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(0deg, rgba(15,23,42,0.9) 0%, transparent 100%); padding: 0.75rem 1rem; color: #ffffff; font-weight: 700; font-size: 0.8rem;">
                        NVivo & MAXQDA Bootcamps
                    </div>
                </div>
                <div style="border-radius: 16px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border: 1px solid #e2e8f0; position: relative;">
                    <img src="{{ asset('images/course_bibliometrics_thumb.png') }}" alt="VOSviewer Science Mapping" style="width: 100%; height: 200px; object-fit: cover; display: block;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(0deg, rgba(15,23,42,0.9) 0%, transparent 100%); padding: 0.75rem 1rem; color: #ffffff; font-weight: 700; font-size: 0.8rem;">
                        VOSviewer Science Mapping
                    </div>
                </div>
            </div>
        </div>

        <!-- Workshop Tracks Grid (Lists instead of Paragraphs) -->
        <div class="section-header text-center" style="margin-bottom: 3.5rem;">
            <div class="section-subtitle">WORKSHOP TRACKS</div>
            <h2 class="section-title" style="font-size: 2.25rem;">Specialized Research Training Programs</h2>
            <p style="color: #64748b; max-width: 650px; margin: 0.5rem auto 0 auto; font-size: 1rem;">
                Explore 6 core institutional workshop tracks, presented with detailed module items and learning outcomes.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 2rem; margin-bottom: 5rem;">
            
            <!-- Program 1 -->
            <div class="module-card">
                <div>
                    <div class="module-icon-box">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div class="module-badge-row">
                        <span class="module-badge"><i class="fas fa-clock"></i> 2-Day Workshop</span>
                        <span class="module-badge" style="background: #e0f2fe; color: #0369a1;">Scopus / SSCI</span>
                    </div>
                    <h3 class="module-title">Systematic Literature Review (SLR) Masterclass</h3>
                    
                    <ul class="module-list-group">
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>PRISMA 2020 Protocol:</strong> Protocol formulation, registration, search matrix design, and flowchart generation.</span>
                        </li>
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Advanced Search Strings:</strong> Constructing Boolean operators for Scopus, Web of Science, and PubMed.</span>
                        </li>
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Quality Appraisal & Bias:</strong> PICO/PEO frameworks, CASP checklists, and GRADE evidence scoring.</span>
                        </li>
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Q1 Journal Publishing:</strong> Structuring systematic synthesis for top-tier peer-reviewed journals.</span>
                        </li>
                    </ul>
                </div>
                <a href="#training-proposal-form" onclick="selectTrainingTrack('Systematic Literature Review (SLR)')" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.75rem;">
                    Inquire for Program <i class="fas fa-arrow-right" style="margin-left: 4px;"></i>
                </a>
            </div>

            <!-- Program 2 -->
            <div class="module-card">
                <div>
                    <div class="module-icon-box">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div class="module-badge-row">
                        <span class="module-badge"><i class="fas fa-clock"></i> 3-Day Bootcamp</span>
                        <span class="module-badge" style="background: #fcf6e5; color: #854d0e;">NVivo & MAXQDA</span>
                    </div>
                    <h3 class="module-title">Qualitative Data Analysis (NVivo & MAXQDA)</h3>
                    
                    <ul class="module-list-group">
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Transcript Coding & Nodes:</strong> Importing interview transcriptions, audio, and documents to build node hierarchies.</span>
                        </li>
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Thematic Frameworks:</strong> Applying Braun & Clarke 6-stage thematic analysis and grounded theory coding.</span>
                        </li>
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Advanced Software Queries:</strong> Running matrix coding, word trees, sentiment analysis, and cross-tabulations.</span>
                        </li>
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Rigor & Trustworthiness:</strong> Inter-coder reliability testing and audit trails for thesis defense.</span>
                        </li>
                    </ul>
                </div>
                <a href="#training-proposal-form" onclick="selectTrainingTrack('Qualitative Data Analysis (NVivo / MAXQDA)')" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.75rem;">
                    Inquire for Program <i class="fas fa-arrow-right" style="margin-left: 4px;"></i>
                </a>
            </div>

            <!-- Program 3 -->
            <div class="module-card">
                <div>
                    <div class="module-icon-box">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div class="module-badge-row">
                        <span class="module-badge"><i class="fas fa-clock"></i> 2-Day Workshop</span>
                        <span class="module-badge" style="background: #f0fdf4; color: #166534;">VOSviewer & R</span>
                    </div>
                    <h3 class="module-title">Bibliometrics & Science Mapping (VOSviewer)</h3>
                    
                    <ul class="module-list-group">
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Database Data Harvesting:</strong> Exporting formatted RIS and BibTeX records from Scopus and Web of Science.</span>
                        </li>
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Co-Citation & Network Maps:</strong> Constructing author networks, journal co-citations, and keyword clusters.</span>
                        </li>
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Software Visualizations:</strong> Overlay visualization, density maps, and Bibliometrix R-package integration.</span>
                        </li>
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>High-Impact Reporting:</strong> Translating science mapping outputs into publication-ready bibliometric manuscripts.</span>
                        </li>
                    </ul>
                </div>
                <a href="#training-proposal-form" onclick="selectTrainingTrack('Bibliometrics & Science Mapping')" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.75rem;">
                    Inquire for Program <i class="fas fa-arrow-right" style="margin-left: 4px;"></i>
                </a>
            </div>

            <!-- Program 4 -->
            <div class="module-card">
                <div>
                    <div class="module-icon-box">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="module-badge-row">
                        <span class="module-badge"><i class="fas fa-clock"></i> 3-Day Bootcamp</span>
                        <span class="module-badge" style="background: #fef2f2; color: #991b1b;">SmartPLS 4 & AMOS</span>
                    </div>
                    <h3 class="module-title">Quantitative Modeling (PLS-SEM & AMOS)</h3>
                    
                    <ul class="module-list-group">
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Structural Equation Modeling:</strong> Evaluating reflective and formative measurement and structural models.</span>
                        </li>
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Mediation & Moderation:</strong> Bootstrapping mediation effects, slope analysis, and multi-group moderation (MGA).</span>
                        </li>
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Scale Construct Validation:</strong> Confirmatory Factor Analysis (CFA), convergent & discriminant validity (HTMT).</span>
                        </li>
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Statistical Reporting:</strong> APA table formatting and SmartPLS 4 / AMOS report generation.</span>
                        </li>
                    </ul>
                </div>
                <a href="#training-proposal-form" onclick="selectTrainingTrack('Quantitative Modeling (PLS-SEM & AMOS)')" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.75rem;">
                    Inquire for Program <i class="fas fa-arrow-right" style="margin-left: 4px;"></i>
                </a>
            </div>

            <!-- Program 5 -->
            <div class="module-card">
                <div>
                    <div class="module-icon-box">
                        <i class="fas fa-file-signature"></i>
                    </div>
                    <div class="module-badge-row">
                        <span class="module-badge"><i class="fas fa-clock"></i> 2-Day Seminar</span>
                        <span class="module-badge" style="background: #faf5ff; color: #6b21a8;">HEC & International</span>
                    </div>
                    <h3 class="module-title">Academic Grant Writing & Funding Proposals</h3>
                    
                    <ul class="module-list-group">
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Proposal Architecture:</strong> Structuring rationale, state-of-the-art literature gaps, and research objectives.</span>
                        </li>
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Budget & Work Packages:</strong> Designing project milestones, Gantt charts, risk management, and budget lines.</span>
                        </li>
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Funding Agencies:</strong> Targeting HEC NRPU, TRC Oman, Horizon Europe, and international agency calls.</span>
                        </li>
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Reviewer Defense Strategy:</strong> Anticipating reviewer critiques and pitching proposal value proposition.</span>
                        </li>
                    </ul>
                </div>
                <a href="#training-proposal-form" onclick="selectTrainingTrack('Grant Writing & Research Proposals')" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.75rem;">
                    Inquire for Program <i class="fas fa-arrow-right" style="margin-left: 4px;"></i>
                </a>
            </div>

            <!-- Program 6 -->
            <div class="module-card">
                <div>
                    <div class="module-icon-box">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <div class="module-badge-row">
                        <span class="module-badge"><i class="fas fa-clock"></i> 1-Day Executive</span>
                        <span class="module-badge" style="background: #f8fafc; color: #334155;">ORIC Leadership</span>
                    </div>
                    <h3 class="module-title">Faculty Development & ORIC Advisory</h3>
                    
                    <ul class="module-list-group">
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>ORIC Strategic Roadmaps:</strong> Institutional commercialization policies and industry collaboration.</span>
                        </li>
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Faculty Output Productivity:</strong> Mentorship frameworks to multiply Scopus Q1 and SSCI publications.</span>
                        </li>
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Citation & H-Index Growth:</strong> Building research visibility, Google Scholar profiles, and institutional rankings.</span>
                        </li>
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Thesis Supervision Best Practices:</strong> Frameworks for effective PhD/DBA mentorship and viva defense.</span>
                        </li>
                    </ul>
                </div>
                <a href="#training-proposal-form" onclick="selectTrainingTrack('Faculty Development & Institutional Advisory')" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.75rem;">
                    Inquire for Program <i class="fas fa-arrow-right" style="margin-left: 4px;"></i>
                </a>
            </div>

        </div>

    </div>
</section>

<!-- Interactive Institutional Training Proposal Form Section -->
<section id="training-proposal-form" class="section-padding" style="background: #f8fafc; border-top: 1px solid #e2e8f0;">
    <div class="container" style="max-width: 850px;">
        <div style="background: #ffffff; padding: 3rem; border-radius: 20px; border: 1px solid #e2e8f0; box-shadow: 0 10px 30px rgba(0,0,0,0.06);">
            
            <div class="section-header text-center" style="margin-bottom: 2rem;">
                <div class="section-subtitle">INSTITUTIONAL INQUIRY</div>
                <h2 class="section-title" style="font-size: 2rem;">Request Institutional Training Proposal</h2>
                <p style="color: #64748b; font-size: 0.95rem; margin-top: 0.5rem;">
                    Provide your university or organization details below to receive a customized workshop agenda, schedule, and fee proposal.
                </p>
            </div>

            <form action="{{ route('contact.store') }}" method="POST" id="trainingProposalForm">
                @csrf
                <div class="form-row-grid">
                    <div class="form-group">
                        <label class="form-label">Full Name / Representative *</label>
                        <input type="text" name="name" class="form-control" placeholder="Dr. / Prof. Your Name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Official Email Address *</label>
                        <input type="email" name="email" class="form-control" placeholder="name@university.edu" required>
                    </div>
                </div>

                <div class="form-row-grid">
                    <div class="form-group">
                        <label class="form-label">WhatsApp / Official Phone *</label>
                        <input type="text" name="whatsapp" class="form-control" placeholder="+92 300 0000000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Institution / University Name *</label>
                        <input type="text" name="institution" class="form-control" placeholder="University / ORIC Name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Select Workshop Track *</label>
                    <select name="service_type" id="training_track_select" class="form-control" required>
                        <option value="Systematic Literature Review (SLR)">Systematic Literature Review (SLR)</option>
                        <option value="Qualitative Data Analysis (NVivo / MAXQDA)">Qualitative Data Analysis (NVivo / MAXQDA)</option>
                        <option value="Bibliometrics & Science Mapping">Bibliometrics & Science Mapping</option>
                        <option value="Quantitative Modeling (PLS-SEM & AMOS)">Quantitative Modeling (PLS-SEM & AMOS)</option>
                        <option value="Grant Writing & Research Proposals">Grant Writing & Research Proposals</option>
                        <option value="Faculty Development & Institutional Advisory">Faculty Development & Institutional Advisory</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Proposed Dates & Audience Size *</label>
                    <textarea name="message" class="form-control" placeholder="Specify expected participant count (e.g. 30 faculty members), target dates, and preferred delivery mode (On-Campus or Online)..." rows="4" required></textarea>
                </div>

                <div style="text-align: center; margin-top: 2rem;">
                    <button type="submit" class="btn-navy" style="padding: 0.9rem 2.5rem; font-size: 1rem;" id="trainings-submit-btn">
                        Submit Proposal Request <i class="fas fa-paper-plane" style="margin-left: 6px;"></i>
                    </button>
                </div>
            </form>

        </div>
    </div>
</section>

<script>
function selectTrainingTrack(trackName) {
    const selectElem = document.getElementById("training_track_select");
    if (selectElem) {
        for (let i = 0; i < selectElem.options.length; i++) {
            if (selectElem.options[i].value === trackName) {
                selectElem.selectedIndex = i;
                break;
            }
        }
    }
}
</script>

@endsection
