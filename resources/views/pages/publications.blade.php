@extends('layouts.app')

@section('title', 'Research & Publications | Dr. Muhammad Shakil Ahmad')

@section('content')

@include('partials.under-development-banner')

<!-- Header Banner -->
<section style="padding: 6rem 0 3rem 0; background: #0f172a; color: #ffffff;">
    <div class="container text-center">
        <h1 style="font-size: 2.75rem; color: #ffffff; margin-bottom: 0.75rem;">Research & Publications</h1>
        <p style="color: #cbd5e1; max-width: 650px; margin: 0 auto;">
            Peer-reviewed journal articles, systematic literature reviews, and competitive research grants secured across leading international journals.
        </p>
    </div>
</section>

<!-- Publications Content Area -->
<section class="section-padding" style="background: var(--bg-main);">
    <div class="container">
        
        <!-- Competitive Funding & Grants -->
        <div style="margin-bottom: 4rem;">
            <div class="section-header" style="text-align: left; margin-bottom: 2rem;">
                <div class="section-subtitle">Competitive Funding</div>
                <h2 class="section-title" style="font-size: 2rem;">Research Grants Secured</h2>
            </div>

            <div class="cards-grid">
                @foreach($grants as $grant)
                <div class="glass-card" style="border-left: 4px solid var(--accent-lime-dark);">
                    <span class="pub-type-badge" style="background: rgba(140, 198, 63, 0.2); color: var(--accent-lime-dark);"><i class="fas fa-coins"></i> Funded Research Grant</span>
                    <h3 class="pub-title">{{ $grant->title }}</h3>
                    <div class="pub-journal" style="color: var(--accent-lime-dark); font-weight: 700;"><i class="fas fa-university"></i> {{ $grant->journal }}</div>
                    <p class="card-text" style="font-size: 0.92rem;">{{ $grant->abstract }}</p>
                    <div style="font-size: 0.85rem; color: var(--text-muted); font-weight: 600;">
                        Role: {{ $grant->authors }} | Year: {{ $grant->year }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Systematic Literature Reviews -->
        <div style="margin-bottom: 4rem;">
            <div class="section-header" style="text-align: left; margin-bottom: 2rem;">
                <div class="section-subtitle">Synthesized Knowledge</div>
                <h2 class="section-title" style="font-size: 2rem;">Systematic Literature Reviews</h2>
            </div>

            @foreach($systematicReviews as $sr)
            <div class="pub-card">
                <span class="pub-type-badge"><i class="fas fa-book"></i> Systematic Review</span>
                <h3 class="pub-title">{{ $sr->title }}</h3>
                <div class="pub-journal"><i class="fas fa-journal-whills"></i> {{ $sr->journal }} ({{ $sr->year }})</div>
                <p style="color: var(--text-secondary); font-size: 0.94rem; margin-bottom: 0.75rem; line-height: 1.6;">
                    {{ $sr->abstract }}
                </p>
                <div style="display: flex; justify-content: space-between; align-items: center; font-size: 0.85rem; color: var(--text-muted);">
                    <div><i class="fas fa-user-edit"></i> {{ $sr->authors }}</div>
                    <div style="font-family: monospace;">DOI: {{ $sr->doi }}</div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Peer-Reviewed Journal Articles -->
        <div>
            <div class="section-header" style="text-align: left; margin-bottom: 2rem;">
                <div class="section-subtitle">Peer-Reviewed Papers</div>
                <h2 class="section-title" style="font-size: 2rem;">Selected Journal Articles</h2>
            </div>

            @foreach($journalArticles as $ja)
            <div class="pub-card">
                <span class="pub-type-badge" style="background: rgba(37, 99, 235, 0.15); color: #2563eb;"><i class="fas fa-file-alt"></i> Journal Article</span>
                <h3 class="pub-title">{{ $ja->title }}</h3>
                <div class="pub-journal" style="color: #2563eb;"><i class="fas fa-feather"></i> {{ $ja->journal }} ({{ $ja->year }})</div>
                <p style="color: var(--text-secondary); font-size: 0.94rem; margin-bottom: 0.75rem; line-height: 1.6;">
                    {{ $ja->abstract }}
                </p>
                <div style="display: flex; justify-content: space-between; align-items: center; font-size: 0.85rem; color: var(--text-muted);">
                    <div><i class="fas fa-user-friends"></i> {{ $ja->authors }}</div>
                    <div style="font-family: monospace;">DOI: {{ $ja->doi }}</div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

@endsection
