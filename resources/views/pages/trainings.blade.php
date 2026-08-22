@extends('layouts.app')

@section('title', 'Institutional & Research Trainings | Dr. Muhammad Shakil Ahmad')

@section('content')

<!-- Header Banner -->
<section style="padding: 5.5rem 0 3.5rem 0; background: var(--navy-deep); color: #ffffff; border-bottom: 3px solid var(--gold);">
    <div class="container text-center">
        <h1 style="font-family: var(--font-heading); font-size: 2.75rem; color: #ffffff; margin-bottom: 0.5rem;">Institutional & Research Trainings</h1>
        <div class="gold-divider"></div>
        <p style="color: #cbd5e1; max-width: 700px; margin: 0 auto; font-size: 1.05rem;">
            Customized university workshops, ORIC capacity-building seminars, and hands-on research bootcamps led by Dr. Muhammad Shakil Ahmad.
        </p>
    </div>
</section>

<!-- Training Overview & Visual Showcase Grid -->
<section class="section-padding" style="background: var(--surface);">
    <div class="container">
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 4rem;">
            <div>
                <div style="font-size: 0.85rem; font-weight: 700; color: var(--gold); letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 0.5rem;">FACULTY & INSTITUTIONAL DEVELOPMENT</div>
                <h2 style="font-family: var(--font-heading); font-size: 2.2rem; color: var(--navy); margin-bottom: 1.25rem; line-height: 1.25;">
                    Empowering Academic Faculties & Research Centers Globally
                </h2>
                <p style="color: var(--muted); font-size: 1rem; line-height: 1.7; margin-bottom: 1.25rem;">
                    Since 2015, Dr. Shakil has delivered intensive, practical training workshops for universities, ORIC centers, and research institutes across Pakistan, the Middle East, Europe, UK, USA, Canada, and Australia.
                </p>
                <p style="color: var(--muted); font-size: 1rem; line-height: 1.7; margin-bottom: 1.75rem;">
                    Our training programs bridge the gap between academic theory and high-impact publishing by equipping scholars with cutting-edge software tools, systematic literature methodologies, and funding strategy.
                </p>
                <a href="{{ route('contact.index') }}" class="btn-navy" id="trainings-inquire-btn">
                    Request Institutional Training Proposal <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                </a>
            </div>

            <!-- Approved Pictures Grid -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                <div style="border-radius: 12px; overflow: hidden; box-shadow: var(--shadow-sm);">
                    <img src="{{ asset('images/hero_img_3.jpg') }}" alt="Computer Lab Workshop" style="width: 100%; height: 210px; object-fit: cover; display: block;">
                </div>
                <div style="border-radius: 12px; overflow: hidden; box-shadow: var(--shadow-sm);">
                    <img src="{{ asset('images/hero_img_4.jpg') }}" alt="CPD Centre Building" style="width: 100%; height: 210px; object-fit: cover; display: block;">
                </div>
                <div style="border-radius: 12px; overflow: hidden; box-shadow: var(--shadow-sm);">
                    <img src="{{ asset('images/course_qualitative_thumb.png') }}" alt="Qualitative Training Workshop" style="width: 100%; height: 210px; object-fit: cover; display: block;">
                </div>
                <div style="border-radius: 12px; overflow: hidden; box-shadow: var(--shadow-sm);">
                    <img src="{{ asset('images/hero_dr_shakil_cutout_v2.jpg') }}" alt="Dr. Shakil Interactive Session" style="width: 100%; height: 210px; object-fit: cover; display: block;">
                </div>
            </div>
        </div>

        <!-- Training Programs / Modules Breakdown Grid -->
        <div class="section-header text-center" style="margin-bottom: 3rem;">
            <div class="section-subtitle">WORKSHOP TRACKS</div>
            <h2 class="section-title">Specialized Research Training Modules</h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
            
            <div style="background: #ffffff; padding: 2rem; border-radius: 14px; border: 1px solid var(--border); box-shadow: var(--shadow-sm);">
                <div style="width: 48px; height: 48px; border-radius: 10px; background: rgba(30, 58, 138, 0.08); color: var(--navy); display: flex; align-items: center; justify-content: center; font-size: 1.25rem; margin-bottom: 1rem;">
                    <i class="fas fa-book-open"></i>
                </div>
                <h3 style="font-family: var(--font-heading); font-size: 1.25rem; color: var(--navy); margin-bottom: 0.5rem;">Systematic Literature Review (SLR)</h3>
                <p style="color: var(--muted); font-size: 0.92rem; line-height: 1.6;">
                    Hands-on training on PRISMA guidelines, protocol registration, search matrix design, quality assessment, and synthesis for Q1 journal submissions.
                </p>
            </div>

            <div style="background: #ffffff; padding: 2rem; border-radius: 14px; border: 1px solid var(--border); box-shadow: var(--shadow-sm);">
                <div style="width: 48px; height: 48px; border-radius: 10px; background: rgba(30, 58, 138, 0.08); color: var(--navy); display: flex; align-items: center; justify-content: center; font-size: 1.25rem; margin-bottom: 1rem;">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3 style="font-family: var(--font-heading); font-size: 1.25rem; color: var(--navy); margin-bottom: 0.5rem;">Qualitative Data Analysis (NVivo / MAXQDA)</h3>
                <p style="color: var(--muted); font-size: 0.92rem; line-height: 1.6;">
                    Step-by-step coding, thematic network development, inter-coder reliability, and qualitative reporting for social science & management research.
                </p>
            </div>

            <div style="background: #ffffff; padding: 2rem; border-radius: 14px; border: 1px solid var(--border); box-shadow: var(--shadow-sm);">
                <div style="width: 48px; height: 48px; border-radius: 10px; background: rgba(30, 58, 138, 0.08); color: var(--navy); display: flex; align-items: center; justify-content: center; font-size: 1.25rem; margin-bottom: 1rem;">
                    <i class="fas fa-project-diagram"></i>
                </div>
                <h3 style="font-family: var(--font-heading); font-size: 1.25rem; color: var(--navy); margin-bottom: 0.5rem;">Bibliometrics & Science Mapping (VOSviewer)</h3>
                <p style="color: var(--muted); font-size: 0.92rem; line-height: 1.6;">
                    Co-citation analysis, bibliographic coupling, keyword co-occurrence, and automated science mapping using Scopus and Web of Science data.
                </p>
            </div>

            <div style="background: #ffffff; padding: 2rem; border-radius: 14px; border: 1px solid var(--border); box-shadow: var(--shadow-sm);">
                <div style="width: 48px; height: 48px; border-radius: 10px; background: rgba(30, 58, 138, 0.08); color: var(--navy); display: flex; align-items: center; justify-content: center; font-size: 1.25rem; margin-bottom: 1rem;">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 style="font-family: var(--font-heading); font-size: 1.25rem; color: var(--navy); margin-bottom: 0.5rem;">Quantitative Modeling (SPSS, AMOS & SmartPLS)</h3>
                <p style="color: var(--muted); font-size: 0.92rem; line-height: 1.6;">
                    Structural Equation Modeling (PLS-SEM), mediation/moderation analysis, scale validation, and robust quantitative hypothesis testing.
                </p>
            </div>

            <div style="background: #ffffff; padding: 2rem; border-radius: 14px; border: 1px solid var(--border); box-shadow: var(--shadow-sm);">
                <div style="width: 48px; height: 48px; border-radius: 10px; background: rgba(30, 58, 138, 0.08); color: var(--navy); display: flex; align-items: center; justify-content: center; font-size: 1.25rem; margin-bottom: 1rem;">
                    <i class="fas fa-file-signature"></i>
                </div>
                <h3 style="font-family: var(--font-heading); font-size: 1.25rem; color: var(--navy); margin-bottom: 0.5rem;">Grant Writing & Research Proposals</h3>
                <p style="color: var(--muted); font-size: 0.92rem; line-height: 1.6;">
                    Designing competitive grant proposals for international funding bodies (e.g. HEC, TRC Oman, Erasmus+, and national research funds).
                </p>
            </div>

            <div style="background: #ffffff; padding: 2rem; border-radius: 14px; border: 1px solid var(--border); box-shadow: var(--shadow-sm);">
                <div style="width: 48px; height: 48px; border-radius: 10px; background: rgba(30, 58, 138, 0.08); color: var(--navy); display: flex; align-items: center; justify-content: center; font-size: 1.25rem; margin-bottom: 1rem;">
                    <i class="fas fa-users-cog"></i>
                </div>
                <h3 style="font-family: var(--font-heading); font-size: 1.25rem; color: var(--navy); margin-bottom: 0.5rem;">Faculty Development & Institutional Advisory</h3>
                <p style="color: var(--muted); font-size: 0.92rem; line-height: 1.6;">
                    Strategic guidance for ORICs, post-graduate research committees, and department chairs on boosting institutional publication productivity.
                </p>
            </div>

        </div>

        <!-- Custom Content Callout Box -->
        <div style="margin-top: 4rem; background: rgba(30, 58, 138, 0.04); border-left: 4px solid var(--navy); padding: 2rem; border-radius: 8px;">
            <div style="display: flex; gap: 1rem; align-items: flex-start;">
                <i class="fas fa-info-circle" style="color: var(--navy); font-size: 1.5rem; margin-top: 3px;"></i>
                <div>
                    <h4 style="font-family: var(--font-heading); font-size: 1.15rem; color: var(--navy); margin-bottom: 0.25rem;">Custom Workshop Curricula Available</h4>
                    <p style="color: var(--muted); font-size: 0.92rem; margin: 0; line-height: 1.6;">
                        Training agendas can be customized according to your university department, research center, or ORIC objectives. Detailed syllabus and schedule will be provided upon inquiry.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
