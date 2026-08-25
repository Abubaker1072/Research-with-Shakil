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
    
    /* Interactive Module Track Cards (Compact & Sleek) */
    .module-card {
        background: #ffffff;
        border-radius: 16px;
        border: 1px solid #e2e8f0;
        padding: 1.5rem 1.75rem;
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
            Customized university workshops, faculty capacity-building seminars, and hands-on research bootcamps led by Dr. Muhammad Shakil Ahmad across international institutions.
        </p>

        <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
            <a href="#training-proposal-form" class="btn-navy" style="background: #eab308; color: #0f172a; padding: 0.85rem 2rem; font-weight: 700;">
                Request Workshop Proposal <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
            </a>
        </div>

        <!-- Stats Counter Grid -->
        <div class="trainings-stats-grid">
            <div class="trainings-stat-card">
                <div class="trainings-stat-num">{{ $stats['workshops'] ?? '50+' }}</div>
                <div class="trainings-stat-text">University Workshops</div>
            </div>
            <div class="trainings-stat-card">
                <div class="trainings-stat-num">{{ $stats['scholars'] ?? '12,000+' }}</div>
                <div class="trainings-stat-text">Scholars & Faculty Trained</div>
            </div>
            <div class="trainings-stat-card">
                <div class="trainings-stat-num">{{ $stats['partners'] ?? '15+' }}</div>
                <div class="trainings-stat-text">Global Academic Partners</div>
            </div>
            <div class="trainings-stat-card">
                <div class="trainings-stat-num">{{ $stats['customized'] ?? '100%' }}</div>
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
                    Since 2015, Dr. Shakil has delivered intensive, practical training workshops for universities, research centers, and research institutes across Pakistan, the Middle East, Europe, UK, USA, Canada, and Australia.
                </p>
                
                <!-- Program Highlights Structured List -->
                <div style="margin-bottom: 1.75rem; display: flex; flex-direction: column; gap: 0.75rem;">
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <i class="fas fa-check-circle" style="color: #0284c7; margin-top: 4px; font-size: 1.1rem;"></i>
                        <span style="color: #334155; font-weight: 600; font-size: 0.95rem;"><strong>Academic Methodology Mastery:</strong> Hands-on training in research paper writing, literature synthesis, and thematic analysis.</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <i class="fas fa-check-circle" style="color: #0284c7; margin-top: 4px; font-size: 1.1rem;"></i>
                        <span style="color: #334155; font-weight: 600; font-size: 0.95rem;"><strong>PRISMA 2020 Protocols:</strong> Systematic review matrices, risk of bias tools, and quality appraisal.</span>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <i class="fas fa-check-circle" style="color: #0284c7; margin-top: 4px; font-size: 1.1rem;"></i>
                        <span style="color: #334155; font-weight: 600; font-size: 0.95rem;"><strong>Institutional Capacity:</strong> Strategic roadmaps to multiply Scopus Q1 and SSCI publication output and grant success.</span>
                    </div>
                </div>

                <a href="#training-proposal-form" class="btn-navy" style="padding: 0.85rem 1.75rem;">
                    Request Custom Training Proposal <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                </a>
            </div>

            <!-- Pictures Grid Showcase Dynamic From Database -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem;">
                @foreach($galleryImages as $img)
                <div style="border-radius: 16px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border: 1px solid #e2e8f0; position: relative;">
                    <img src="{{ asset($img->image_path) }}" alt="{{ $img->title }}" style="width: 100%; height: 200px; object-fit: cover; display: block;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(0deg, rgba(15,23,42,0.9) 0%, transparent 100%); padding: 0.75rem 1rem; color: #ffffff; font-weight: 700; font-size: 0.8rem;">
                        {{ $img->title }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Workshop Tracks Grid Dynamic From Database -->
        <div class="section-header text-center" style="margin-bottom: 3.5rem;">
            <div class="section-subtitle">WORKSHOP TRACKS</div>
            <h2 class="section-title" style="font-size: 2.25rem;">Specialized Research Training Programs</h2>
            <p style="color: #64748b; max-width: 650px; margin: 0.5rem auto 0 auto; font-size: 1rem;">
                Explore {{ count($trainings) }} core institutional workshop tracks, presented with detailed module items and learning outcomes.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem; margin-bottom: 5rem;">
            @foreach($trainings as $index => $program)
            <div class="module-card reveal-card-box" data-delay="{{ $index }}">
                <div>
                    <div class="module-icon-box">
                        <i class="fas {{ $program->icon ?? 'fa-book-open' }}"></i>
                    </div>
                    <div class="module-badge-row">
                        <span class="module-badge"><i class="fas fa-clock"></i> {{ $program->duration_badge }}</span>
                        <span class="module-badge" style="background: {{ $program->badge_bg ?? '#e0f2fe' }}; color: {{ $program->badge_color ?? '#0369a1' }};">{{ $program->type_badge }}</span>
                    </div>
                    <h3 class="module-title">{{ $program->title }}</h3>
                    
                    @if(is_array($program->modules) && count($program->modules) > 0)
                    <ul class="module-list-group">
                        @foreach($program->modules as $mod)
                        <li class="module-list-item">
                            <i class="fas fa-check-circle"></i>
                            <span><strong>{{ $mod['title'] ?? '' }}:</strong> {{ $mod['desc'] ?? '' }}</span>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <a href="#training-proposal-form" onclick="selectTrainingTrack('{{ addslashes($program->title) }}')" class="btn-navy" style="width: 100%; text-align: center; display: block; padding: 0.75rem;">
                    Inquire for Program <i class="fas fa-arrow-right" style="margin-left: 4px;"></i>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- Interactive Institutional Training Proposal Form Section -->
<section id="training-proposal-form" class="section-padding" style="background: #f8fafc; border-top: 1px solid #e2e8f0; overflow: hidden;">
    <div class="container" style="max-width: 660px;">
        <div class="reveal-scroll-up" style="background: #ffffff; padding: 1.75rem 2rem; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 10px 30px rgba(0,0,0,0.06);">
            
            <div class="section-header text-center" style="margin-bottom: 1.25rem;">
                <div class="section-subtitle">INSTITUTIONAL INQUIRY</div>
                <h2 class="section-title" style="font-size: 1.65rem; margin-bottom: 0.2rem;">Request Institutional Training Proposal</h2>
                <p style="color: #64748b; font-size: 0.9rem; margin-top: 0.3rem;">
                    Provide your university or organization details below to receive a customized workshop agenda, schedule, and fee proposal.
                </p>
            </div>

            <form action="{{ route('contact.store') }}" method="POST" id="trainingProposalForm">
                @csrf
                <div class="form-grid-responsive">
                    <div class="form-group">
                        <label class="form-label">Full Name / Representative *</label>
                        <input type="text" name="name" class="form-control" placeholder="Dr. / Prof. Your Name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Official Email Address *</label>
                        <input type="email" name="email" class="form-control" placeholder="name@university.edu" required>
                    </div>
                </div>

                <div class="form-grid-responsive">
                    <div class="form-group">
                        <label class="form-label">WhatsApp / Official Phone *</label>
                        <input type="text" name="whatsapp" class="form-control" placeholder="+92 300 0000000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Institution / University Name *</label>
                        <input type="text" name="institution" class="form-control" placeholder="University Name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Select Workshop Track *</label>
                    <select name="service_type" id="training_track_select" class="form-control" required>
                        <option value="Research Paper Writing">Research Paper Writing</option>
                        <option value="Dissertation Writing">Dissertation Writing</option>
                        <option value="Systematic Literature Review and Protocol Development">Systematic Literature Review and Protocol Development</option>
                        <option value="Thematic Analysis">Thematic Analysis</option>
                        <option value="Grant Writing">Grant Writing</option>
                        <option value="How to write research papers for high ranked journals">How to write research papers for high ranked journals</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Proposed Dates & Audience Size *</label>
                    <textarea name="message" class="form-control" placeholder="Specify expected participant count (e.g. 30 faculty members), target dates, and preferred delivery mode..." rows="3" required></textarea>
                </div>

                <div style="text-align: center; margin-top: 1.25rem;">
                    <button type="submit" class="btn-navy" style="padding: 0.7rem 2.2rem; font-size: 0.9rem; border-radius: 10px;" id="trainings-submit-btn">
                        Submit Proposal Request <i class="fas fa-paper-plane" style="margin-left: 6px;"></i>
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
                const delay = parseInt(entry.target.getAttribute("data-delay") || "0", 10);
                entry.target.style.transitionDelay = (delay * 0.12) + "s";
                entry.target.classList.add("in-view");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    document.querySelectorAll(".reveal-scroll-up, .reveal-card-box").forEach(function (el) {
        revealObserver.observe(el);
    });
});

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
