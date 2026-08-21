@extends('layouts.app')

@section('title', 'About Dr. Muhammad Shakil Ahmad | PhD, Researcher, Editor & Trainer')

@section('content')

<!-- Header Banner -->
<section style="padding: 6rem 0 3rem 0; background: #0f172a; color: #ffffff;">
    <div class="container text-center">
        <h1 style="font-size: 2.75rem; color: #ffffff; margin-bottom: 0.75rem;">About Dr. Muhammad Shakil Ahmad</h1>
        <p style="color: #cbd5e1; max-width: 650px; margin: 0 auto;">
            PhD in Management, Academic Journal Editor, Research Grant PI, and Executive Life Coach.
        </p>
    </div>
</section>

<!-- Detailed Bio & Background -->
<section class="section-padding" style="background: var(--bg-main);">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1.2fr; gap: 3.5rem; align-items: start;">
            <div style="background: #ffffff; padding: 1.25rem; border-radius: 14px; border: 1px solid #e2e8f0; box-shadow: var(--shadow-md);">
                <img src="{{ asset('images/dr_shakil_suit.jpg') }}" alt="Dr. Muhammad Shakil Ahmad" style="width: 100%; height: 360px; object-fit: cover; border-radius: 10px; margin-bottom: 1.25rem;">
                
                <h3 style="font-size: 1.35rem; color: #0f172a; margin-bottom: 0.25rem;">Dr. M. Shakil Ahmad</h3>
                <p style="color: var(--accent-lime-dark); font-weight: 700; font-size: 0.95rem; margin-bottom: 1rem;">PhD in Management</p>

                <div style="border-top: 1px solid #e2e8f0; padding-top: 1rem; font-size: 0.9rem; color: #475569;">
                    <div style="margin-bottom: 0.6rem;"><i class="fas fa-briefcase" style="color: var(--accent-lime-dark); width: 22px;"></i> In-charge, ORIC Leadership</div>
                    <div style="margin-bottom: 0.6rem;"><i class="fas fa-award" style="color: #f59e0b; width: 22px;"></i> ASPA Young Scholar Award (2015)</div>
                    <div><i class="fas fa-globe" style="color: #2563eb; width: 22px;"></i> 21,550+ Udemy Scholars</div>
                </div>
            </div>

            <div>
                <h2 style="font-size: 2rem; margin-bottom: 1.25rem; color: #0f172a;">Academic Biography</h2>
                <p style="color: var(--text-secondary); font-size: 1.02rem; line-height: 1.8; margin-bottom: 1.25rem;">
                    Dr. Muhammad Shakil Ahmad holds a <strong>PhD in Management</strong> with a specialized focus on Human Resource Management and Project Management. Throughout his distinguished academic career across multiple top-tier universities, he has established an extensive research footprint in peer-reviewed journals including the <em>Journal of Knowledge Management</em>, <em>Leadership & Organization Development Journal</em>, and <em>Journal of Intellectual Capital</em>.
                </p>
                <p style="color: var(--text-secondary); font-size: 1.02rem; line-height: 1.8; margin-bottom: 1.5rem;">
                    As the <strong>In-charge of ORIC (Office of Research Innovation & Commercialization)</strong>, Dr. Shakil has bridged academia and industry, securing competitive research funding from the <em>Ministry of Higher Education & Scientific Research (Oman)</em> and the <em>Higher Education Commission (HEC, Pakistan)</em>.
                </p>

                <!-- Research Interests Tag Grid -->
                <h3 style="font-size: 1.2rem; margin-bottom: 0.75rem; color: #0f172a;">Primary Research Interests</h3>
                <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 2rem;">
                    @foreach($researchInterests as $interest)
                    <span style="padding: 0.4rem 0.9rem; border-radius: 6px; font-size: 0.85rem; font-weight: 600; background: #ffffff; border: 1px solid #cbd5e1; color: #0f172a;">
                        <i class="fas fa-hashtag" style="color: var(--accent-lime-dark);"></i> {{ $interest }}
                    </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CPD Centre & Mentor Research Showcase -->
<section class="section-padding" style="background: var(--bg-surface);">
    <div class="container">
        <div class="section-header">
            <div class="section-subtitle">Academic Engagements</div>
            <h2 class="section-title">Postgraduate & Research Mentorship</h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
            <div class="glass-card">
                <img src="{{ asset('images/dr_shakil_cpd_centre.jpg') }}" alt="CPD Centre" style="width: 100%; height: 220px; object-fit: cover; border-radius: 8px; margin-bottom: 1.25rem;">
                <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Postgraduate & CPD Executive Advisory</h3>
                <p style="color: #475569; font-size: 0.92rem;">Leading continuous professional development seminars, executive coaching, and thesis defense bootcamps.</p>
            </div>

            <div class="glass-card">
                <img src="{{ asset('images/mentor_research_banner.png') }}" alt="Mentor Research" style="width: 100%; height: 220px; object-fit: cover; border-radius: 8px; margin-bottom: 1.25rem;">
                <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Mentor Research Global Platform</h3>
                <p style="color: #475569; font-size: 0.92rem;">Empowering over 21,500+ global research scholars through structured literature review and publication guides.</p>
            </div>
        </div>
    </div>
</section>

@endsection
