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
    .module-desc {
        color: #475569;
        font-size: 0.95rem;
        line-height: 1.65;
        margin-bottom: 1.25rem;
    }
    .module-checklist {
        list-style: none;
        padding: 0;
        margin: 0 0 1.75rem 0;
        display: flex;
        flex-direction: column;
        gap: 0.6rem;
    }
    .module-checklist li {
        font-size: 0.88rem;
        color: #334155;
        display: flex;
        align-items: center;
        gap: 0.6rem;
    }
    .module-checklist li i {
        color: #eab308;
        font-size: 0.85rem;
    }
    .module-badge-row {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
        margin-bottom: 1.5rem;
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
        
        <div class="trainings-overview-grid" style="margin-bottom: 5rem;">
            <div>
                <div style="font-size: 0.85rem; font-weight: 700; color: #1e3a8a; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 0.5rem;">GLOBAL RESEARCH ADVISORY</div>
                <h2 style="font-family: var(--font-heading); font-size: 2.25rem; color: #0f172a; margin-bottom: 1.25rem; line-height: 1.25;">
                    Empowering Academic Faculties & Research Centers Globally
                </h2>
                <p style="color: #475569; font-size: 1rem; line-height: 1.7; margin-bottom: 1.25rem;">
                    Since 2015, Dr. Shakil has delivered intensive, practical training workshops for universities, ORIC centers, and research institutes across Pakistan, the Middle East, Europe, UK, USA, Canada, and Australia.
                </p>
                <p style="color: #475569; font-size: 1rem; line-height: 1.7; margin-bottom: 1.75rem;">
                    Our training programs bridge the gap between academic theory and high-impact publishing by equipping scholars with cutting-edge software tools (NVivo, MAXQDA, VOSviewer, AMOS, SmartPLS), systematic literature methodologies, and funding strategy.
                </p>
                <a href="#training-proposal-form" class="btn-navy" style="padding: 0.85rem 1.75rem;">
                    Request Custom Training Syllabus <i class="fas fa-download" style="margin-left: 6px;"></i>
                </a>
            </div>

            <!-- Pictures Grid (4-Photo Layout for Desktop & Mobile) -->
            <div class="trainings-pictures-grid">
                <div style="border-radius: 16px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
                    <img src="{{ asset('images/hero_img_3.jpg') }}" alt="Computer Lab Workshop" style="width: 100%; height: 210px; object-fit: cover; display: block;">
                </div>
                <div style="border-radius: 16px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
                    <img src="{{ asset('images/hero_img_4.jpg') }}" alt="CPD Centre Building" style="width: 100%; height: 210px; object-fit: cover; display: block;">
                </div>
                <div style="border-radius: 16px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
                    <img src="{{ asset('images/course_qualitative_thumb.png') }}" alt="Qualitative Training Workshop" style="width: 100%; height: 210px; object-fit: cover; display: block;">
                </div>
                <div style="border-radius: 16px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
                    <img src="{{ asset('images/course_slr_thumb.png') }}" alt="Systematic Review Workshop" style="width: 100%; height: 210px; object-fit: cover; display: block;">
                </div>
            </div>
        </div>

        <!-- Workshop Tracks Grid -->
        <div class="section-header text-center" style="margin-bottom: 3.5rem;">
            <div class="section-subtitle">WORKSHOP TRACKS</div>
            <h2 class="section-title" style="font-size: 2.25rem;">Specialized Research Training Modules</h2>
            <p style="color: #64748b; max-width: 650px; margin: 0.5rem auto 0 auto; font-size: 1rem;">
                Explore our 6 core institutional workshop tracks available for on-campus and online university delivery.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 2rem; margin-bottom: 5rem;">
            
            <!-- Track 1 -->
            <div class="module-card">
                <div>
                    <div class="module-icon-box">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div class="module-badge-row">
                        <span class="module-badge"><i class="fas fa-clock"></i> 2-Day Workshop</span>
                        <span class="module-badge" style="background: #e0f2fe; color: #0369a1;">Scopus / SSCI</span>
                    </div>
                    <h3 class="module-title">Systematic Literature Review (SLR)</h3>
                    <p class="module-desc">
                        Hands-on training on PRISMA 2020 guidelines, protocol registration, search matrix design, quality assessment (PICO/PEO), and synthesis for Q1 journal submissions.
                    </p>
                    <ul class="module-checklist">
                        <li><i class="fas fa-check-circle"></i> PRISMA 2020 Flowchart & Protocol Formulation</li>
                        <li><i class="fas fa-check-circle"></i> Systematic Search Strings (Scopus & WoS)</li>
                        <li><i class="fas fa-check-circle"></i> Quality Appraisal & Synthesis Frameworks</li>
                    </ul>
                </div>
                <a href="#training-proposal-form" onclick="selectTrainingTrack('Systematic Literature Review (SLR)')" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.75rem;">
                    Inquire for Track <i class="fas fa-arrow-right" style="margin-left: 4px;"></i>
                </a>
            </div>

            <!-- Track 2 -->
            <div class="module-card">
                <div>
                    <div class="module-icon-box">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div class="module-badge-row">
                        <span class="module-badge"><i class="fas fa-clock"></i> 3-Day Bootcamp</span>
                        <span class="module-badge" style="background: #fcf6e5; color: #854d0e;">NVivo & MAXQDA</span>
                    </div>
                    <h3 class="module-title">Qualitative Data Analysis (NVivo / MAXQDA)</h3>
                    <p class="module-desc">
                        Step-by-step interview transcript coding, thematic network development, Braun & Clarke framework, inter-coder reliability, and qualitative reporting.
                    </p>
                    <ul class="module-checklist">
                        <li><i class="fas fa-check-circle"></i> Node Hierarchy & Thematic Coding Matrices</li>
                        <li><i class="fas fa-check-circle"></i> Sentiment & Cross-Tabulation Analysis</li>
                        <li><i class="fas fa-check-circle"></i> Qualitative Rigor & Trustworthiness</li>
                    </ul>
                </div>
                <a href="#training-proposal-form" onclick="selectTrainingTrack('Qualitative Data Analysis (NVivo / MAXQDA)')" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.75rem;">
                    Inquire for Track <i class="fas fa-arrow-right" style="margin-left: 4px;"></i>
                </a>
            </div>

            <!-- Track 3 -->
            <div class="module-card">
                <div>
                    <div class="module-icon-box">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div class="module-badge-row">
                        <span class="module-badge"><i class="fas fa-clock"></i> 2-Day Workshop</span>
                        <span class="module-badge" style="background: #f0fdf4; color: #166534;">VOSviewer & R</span>
                    </div>
                    <h3 class="module-title">Bibliometrics & Science Mapping</h3>
                    <p class="module-desc">
                        Co-citation analysis, bibliographic coupling, keyword co-occurrence, author networks, and automated science mapping using Web of Science and Scopus data.
                    </p>
                    <ul class="module-checklist">
                        <li><i class="fas fa-check-circle"></i> VOSviewer Cluster Visualization</li>
                        <li><i class="fas fa-check-circle"></i> Bibliometrix R-Package Analysis</li>
                        <li><i class="fas fa-check-circle"></i> Performance Metrics & Citation Analysis</li>
                    </ul>
                </div>
                <a href="#training-proposal-form" onclick="selectTrainingTrack('Bibliometrics & Science Mapping')" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.75rem;">
                    Inquire for Track <i class="fas fa-arrow-right" style="margin-left: 4px;"></i>
                </a>
            </div>

            <!-- Track 4 -->
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
                    <p class="module-desc">
                        Structural Equation Modeling (PLS-SEM), mediation/moderation testing, scale validation (CFA/EFA), and robust quantitative hypothesis testing.
                    </p>
                    <ul class="module-checklist">
                        <li><i class="fas fa-check-circle"></i> Measurement & Structural Model Assessment</li>
                        <li><i class="fas fa-check-circle"></i> Multi-Group & Moderation Analysis</li>
                        <li><i class="fas fa-check-circle"></i> Reporting SEM Results for Top Journals</li>
                    </ul>
                </div>
                <a href="#training-proposal-form" onclick="selectTrainingTrack('Quantitative Modeling (PLS-SEM & AMOS)')" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.75rem;">
                    Inquire for Track <i class="fas fa-arrow-right" style="margin-left: 4px;"></i>
                </a>
            </div>

            <!-- Track 5 -->
            <div class="module-card">
                <div>
                    <div class="module-icon-box">
                        <i class="fas fa-file-signature"></i>
                    </div>
                    <div class="module-badge-row">
                        <span class="module-badge"><i class="fas fa-clock"></i> 2-Day Seminar</span>
                        <span class="module-badge" style="background: #faf5ff; color: #6b21a8;">HEC & International</span>
                    </div>
                    <h3 class="module-title">Grant Writing & Research Proposals</h3>
                    <p class="module-desc">
                        Designing competitive grant proposals for international funding bodies (e.g. HEC, TRC Oman, Erasmus+, and national research funds).
                    </p>
                    <ul class="module-checklist">
                        <li><i class="fas fa-check-circle"></i> Grant Proposal Architecture & Rationale</li>
                        <li><i class="fas fa-check-circle"></i> Budget Justification & Work Packages</li>
                        <li><i class="fas fa-check-circle"></i> Reviewer Defense & Pitch Strategy</li>
                    </ul>
                </div>
                <a href="#training-proposal-form" onclick="selectTrainingTrack('Grant Writing & Research Proposals')" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.75rem;">
                    Inquire for Track <i class="fas fa-arrow-right" style="margin-left: 4px;"></i>
                </a>
            </div>

            <!-- Track 6 -->
            <div class="module-card">
                <div>
                    <div class="module-icon-box">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <div class="module-badge-row">
                        <span class="module-badge"><i class="fas fa-clock"></i> 1-Day Executive</span>
                        <span class="module-badge" style="background: #f8fafc; color: #334155;">ORIC Leadership</span>
                    </div>
                    <h3 class="module-title">Faculty Development & Institutional Advisory</h3>
                    <p class="module-desc">
                        Strategic guidance for ORICs, post-graduate research committees, and department chairs on boosting institutional publication productivity.
                    </p>
                    <ul class="module-checklist">
                        <li><i class="fas fa-check-circle"></i> ORIC Research Commercialization Roadmaps</li>
                        <li><i class="fas fa-check-circle"></i> Faculty Publication Mentorship Strategies</li>
                        <li><i class="fas fa-check-circle"></i> Institutional Impact & Citation Metrics</li>
                    </ul>
                </div>
                <a href="#training-proposal-form" onclick="selectTrainingTrack('Faculty Development & Institutional Advisory')" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.75rem;">
                    Inquire for Track <i class="fas fa-arrow-right" style="margin-left: 4px;"></i>
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
