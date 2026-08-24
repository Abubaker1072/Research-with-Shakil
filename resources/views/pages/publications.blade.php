@extends('layouts.app')

@section('title', 'Peer-Reviewed Research & Publications | Dr. Muhammad Shakil Ahmad')

@push('styles')
<style>
    .pub-hero-section {
        padding: 5.5rem 0 4rem 0;
        background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #0f172a 100%);
        color: #ffffff;
        position: relative;
        overflow: hidden;
    }
    .pub-hero-section::before {
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
    .pub-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.4rem 1.1rem;
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
    .pub-hero-title {
        font-family: var(--font-heading);
        font-size: 3rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 1rem;
        line-height: 1.2;
    }
    .pub-hero-subtitle {
        color: #cbd5e1;
        max-width: 780px;
        margin: 0 auto 2rem auto;
        font-size: 1.1rem;
        line-height: 1.7;
    }

    /* Scholar Hero Card */
    .scholar-hero-card {
        background: rgba(255, 255, 255, 0.07);
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 20px;
        padding: 1.5rem 2rem;
        max-width: 800px;
        margin: 2rem auto 0 auto;
        backdrop-filter: blur(10px);
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1.5rem;
    }
    .scholar-stat-item {
        text-align: center;
    }
    .scholar-stat-num {
        font-size: 1.6rem;
        font-weight: 800;
        color: #facc15;
    }
    .scholar-stat-label {
        font-size: 0.82rem;
        color: #cbd5e1;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Control & Filter Panel */
    .pub-filter-panel {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 18px;
        padding: 1.5rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        margin-bottom: 3rem;
    }
    .pub-filter-tabs {
        display: flex;
        gap: 0.6rem;
        flex-wrap: wrap;
        margin-top: 1.25rem;
    }
    .pub-filter-btn {
        padding: 0.55rem 1.25rem;
        border-radius: 10px;
        font-size: 0.88rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.25s ease;
        border: 1px solid #e2e8f0;
        background: #f8fafc;
        color: #475569;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
    }
    .pub-filter-btn.active {
        background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%);
        color: #ffffff;
        border-color: #1e3a8a;
        box-shadow: 0 4px 12px rgba(30, 58, 138, 0.25);
    }

    /* Academic Publication Card */
    .pub-item-card {
        background: #ffffff;
        border-radius: 18px;
        border: 1px solid #e2e8f0;
        padding: 2rem;
        margin-bottom: 1.75rem;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
        transition: all 0.25s ease;
        position: relative;
    }
    .pub-item-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 28px rgba(30, 58, 138, 0.09);
        border-color: #cbd5e1;
    }
    .pub-card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 0.75rem;
        margin-bottom: 0.85rem;
    }
    .pub-badge-type {
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
        font-size: 0.78rem;
        font-weight: 700;
        padding: 0.28rem 0.8rem;
        border-radius: 6px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .pub-badge-type.grant {
        background: #fef9c3;
        color: #854d0e;
        border: 1px solid #fef08a;
    }
    .pub-badge-type.review {
        background: #e0f2fe;
        color: #0369a1;
        border: 1px solid #bae6fd;
    }
    .pub-badge-type.article {
        background: #f0fdf4;
        color: #166534;
        border: 1px solid #bbf7d0;
    }
    .pub-card-title {
        font-family: var(--font-heading);
        font-size: 1.35rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 0.6rem;
        line-height: 1.4;
    }
    .pub-card-authors {
        font-size: 0.94rem;
        color: #334155;
        margin-bottom: 0.6rem;
        font-weight: 500;
    }
    .pub-card-journal {
        color: #1e3a8a;
        font-size: 0.95rem;
        font-weight: 700;
        margin-bottom: 0.85rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .pub-card-abstract {
        color: #475569;
        font-size: 0.94rem;
        line-height: 1.65;
        margin-bottom: 1.25rem;
        background: #f8fafc;
        padding: 1rem 1.25rem;
        border-radius: 12px;
        border-left: 3px solid #cbd5e1;
    }
    .pub-card-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1rem;
        padding-top: 1rem;
        border-top: 1px solid #f1f5f9;
        font-size: 0.88rem;
        color: #64748b;
    }
    .copy-doi-btn {
        background: #f1f5f9;
        border: 1px solid #cbd5e1;
        color: #334155;
        padding: 0.35rem 0.85rem;
        border-radius: 8px;
        font-size: 0.8rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    .copy-doi-btn:hover {
        background: #1e3a8a;
        color: #ffffff;
        border-color: #1e3a8a;
    }
    .scholar-direct-link-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        color: #0369a1;
        font-weight: 700;
        font-size: 0.85rem;
        text-decoration: none;
    }
    .scholar-direct-link-btn:hover {
        text-decoration: underline;
    }
</style>
@endpush

@section('content')

<!-- Hero Header Section -->
<section class="pub-hero-section">
    <div class="container text-center">
        <div class="pub-hero-badge">
            <i class="fas fa-microscope"></i> SCOPUS & WEB OF SCIENCE INDEXED RESEARCH
        </div>
        <h1 class="pub-hero-title">Research & Peer-Reviewed Publications</h1>
        <p class="pub-hero-subtitle">
            Author of 90+ papers in SSCI and Scopus Q1 journals across Human Resource Management, Project Management, Healthcare, and Sustainable Development.
        </p>

        <!-- Official Google Scholar Card -->
        <div class="scholar-hero-card">
            <div style="text-align: left;">
                <div style="font-size: 0.8rem; font-weight: 800; color: #fef08a; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.25rem;">OFFICIAL CITATIONS PROFILE</div>
                <div style="font-weight: 800; font-size: 1.25rem; color: #ffffff;">Google Scholar Repository</div>
                <div style="font-size: 0.88rem; color: #cbd5e1; margin-top: 0.25rem;">Dr. Muhammad Shakil Ahmad • Teesside University (UK)</div>
            </div>

            <div style="display: flex; gap: 2rem; align-items: center; flex-wrap: wrap;">
                <div class="scholar-stat-item">
                    <div class="scholar-stat-num">90+</div>
                    <div class="scholar-stat-label">Publications</div>
                </div>
                <div class="scholar-stat-item">
                    <div class="scholar-stat-num">39</div>
                    <div class="scholar-stat-label">H-Index</div>
                </div>
                <div class="scholar-stat-item">
                    <div class="scholar-stat-num">1,800+</div>
                    <div class="scholar-stat-label">Citations</div>
                </div>

                <a href="https://scholar.google.com/citations?user=Kr6MOa0AAAAJ&hl=en&oi=ao" target="_blank" class="btn-navy" style="background: #eab308; color: #0f172a; font-weight: 800; padding: 0.75rem 1.4rem; border-radius: 12px; text-decoration: none; white-space: nowrap;">
                    <i class="fas fa-graduation-cap" style="margin-right: 6px;"></i> Scholar Profile <i class="fas fa-external-link-alt" style="font-size: 0.75rem; margin-left: 4px;"></i>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- Main Content & Filter Area -->
<section class="section-padding" style="background: #f8fafc;">
    <div class="container">
        
        <!-- Filter & Search Control Panel -->
        <div class="pub-filter-panel">
            <div style="display: flex; gap: 1rem; align-items: center; justify-content: space-between; flex-wrap: wrap; margin-bottom: 1rem;">
                <div style="position: relative; flex: 1; min-width: 280px;">
                    <i class="fas fa-search" style="position: absolute; left: 1.1rem; top: 50%; transform: translateY(-50%); color: #94a3b8; font-size: 1rem;"></i>
                    <input type="text" id="pubSearchInput" class="form-control" style="padding-left: 2.8rem; border-radius: 12px; background: #f8fafc; border: 1px solid #cbd5e1; height: 46px;" placeholder="Search papers by title, journal, author, or DOI...">
                </div>
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <span style="font-size: 0.88rem; color: #64748b; font-weight: 600;" id="pubCountText">Showing all items</span>
                    <a href="https://scholar.google.com/citations?user=Kr6MOa0AAAAJ&hl=en&oi=ao" target="_blank" style="display: inline-flex; align-items: center; gap: 0.5rem; background: #f0f7ff; color: #0369a1; border: 1px solid #bae6fd; padding: 0.65rem 1.25rem; border-radius: 10px; font-weight: 700; font-size: 0.88rem; text-decoration: none;">
                        <i class="fas fa-graduation-cap"></i> Google Scholar Profile <i class="fas fa-external-link-alt" style="font-size: 0.75rem;"></i>
                    </a>
                </div>
            </div>

            <!-- Category Filter Tabs -->
            <div class="pub-filter-tabs">
                <button class="pub-filter-btn active" data-filter="all">
                    <i class="fas fa-layer-group"></i> All Publications
                </button>
                <button class="pub-filter-btn" data-filter="grant">
                    <i class="fas fa-coins"></i> Funded Research Grants
                </button>
                <button class="pub-filter-btn" data-filter="review">
                    <i class="fas fa-book"></i> Systematic Literature Reviews
                </button>
                <button class="pub-filter-btn" data-filter="article">
                    <i class="fas fa-file-alt"></i> Scopus / SSCI Articles
                </button>
            </div>
        </div>

        <!-- Publications List Container -->
        <div id="publicationsContainer">
            
            <!-- 1. Grants -->
            @foreach($grants as $grant)
            <div class="pub-item-card pub-card-item" data-type="grant" data-search="{{ strtolower($grant->title . ' ' . $grant->journal . ' ' . $grant->authors) }}">
                <div class="pub-card-header">
                    <span class="pub-badge-type grant"><i class="fas fa-coins"></i> Funded Research Grant</span>
                    <span style="font-size: 0.85rem; font-weight: 700; color: #854d0e; background: #fef9c3; padding: 0.25rem 0.75rem; border-radius: 6px; border: 1px solid #fef08a;">Awarded Year: {{ $grant->year }}</span>
                </div>
                <h2 class="pub-card-title">{{ $grant->title }}</h2>
                <div class="pub-card-journal"><i class="fas fa-university"></i> Funding Body: {{ $grant->journal }}</div>
                <div class="pub-card-authors"><i class="fas fa-user-tie" style="color: #0284c7; margin-right: 4px;"></i> <strong>Investigator Role:</strong> {{ $grant->authors }}</div>
                <div class="pub-card-abstract">{{ $grant->abstract }}</div>
                <div class="pub-card-footer">
                    <div><i class="fas fa-check-double" style="color: #166534; margin-right: 4px;"></i> <strong>Status:</strong> Awarded & Completed</div>
                    <a href="https://scholar.google.com/citations?user=Kr6MOa0AAAAJ&hl=en&oi=ao" target="_blank" class="scholar-direct-link-btn">
                        View Scholar Record <i class="fas fa-external-link-alt"></i>
                    </a>
                </div>
            </div>
            @endforeach

            <!-- 2. Systematic Reviews -->
            @foreach($systematicReviews as $sr)
            <div class="pub-item-card pub-card-item" data-type="review" data-search="{{ strtolower($sr->title . ' ' . $sr->journal . ' ' . $sr->authors . ' ' . $sr->doi) }}">
                <div class="pub-card-header">
                    <span class="pub-badge-type review"><i class="fas fa-book"></i> Systematic Literature Review</span>
                    <span style="font-size: 0.8rem; font-weight: 700; color: #0369a1; background: #e0f2fe; padding: 0.25rem 0.75rem; border-radius: 6px; border: 1px solid #bae6fd;">Scopus Q1 / SSCI</span>
                </div>
                <h2 class="pub-card-title">{{ $sr->title }}</h2>
                <div class="pub-card-journal"><i class="fas fa-journal-whills"></i> {{ $sr->journal }} ({{ $sr->year }})</div>
                <div class="pub-card-authors"><i class="fas fa-users" style="color: #0284c7; margin-right: 4px;"></i> <strong>Authors:</strong> {{ $sr->authors }}</div>
                <div class="pub-card-abstract">{{ $sr->abstract }}</div>
                <div class="pub-card-footer">
                    <div style="display: flex; align-items: center; gap: 0.6rem;">
                        <span style="font-family: monospace; font-size: 0.85rem; font-weight: 600; color: #334155;">DOI: {{ $sr->doi }}</span>
                        <button onclick="copyDOIText('{{ $sr->doi }}', this)" class="copy-doi-btn">Copy DOI <i class="fas fa-copy" style="margin-left: 2px;"></i></button>
                    </div>
                    <a href="https://scholar.google.com/citations?user=Kr6MOa0AAAAJ&hl=en&oi=ao" target="_blank" class="scholar-direct-link-btn">
                        Google Scholar Citation <i class="fas fa-external-link-alt"></i>
                    </a>
                </div>
            </div>
            @endforeach

            <!-- 3. Journal Articles -->
            @foreach($journalArticles as $ja)
            <div class="pub-item-card pub-card-item" data-type="article" data-search="{{ strtolower($ja->title . ' ' . $ja->journal . ' ' . $ja->authors . ' ' . $ja->doi) }}">
                <div class="pub-card-header">
                    <span class="pub-badge-type article"><i class="fas fa-file-alt"></i> Peer-Reviewed Journal Article</span>
                    <span style="font-size: 0.8rem; font-weight: 700; color: #166534; background: #f0fdf4; padding: 0.25rem 0.75rem; border-radius: 6px; border: 1px solid #bbf7d0;">SSCI / Scopus</span>
                </div>
                <h2 class="pub-card-title">{{ $ja->title }}</h2>
                <div class="pub-card-journal"><i class="fas fa-feather"></i> {{ $ja->journal }} ({{ $ja->year }})</div>
                <div class="pub-card-authors"><i class="fas fa-users" style="color: #0284c7; margin-right: 4px;"></i> <strong>Authors:</strong> {{ $ja->authors }}</div>
                <div class="pub-card-abstract">{{ $ja->abstract }}</div>
                <div class="pub-card-footer">
                    <div style="display: flex; align-items: center; gap: 0.6rem;">
                        <span style="font-family: monospace; font-size: 0.85rem; font-weight: 600; color: #334155;">DOI: {{ $ja->doi }}</span>
                        <button onclick="copyDOIText('{{ $ja->doi }}', this)" class="copy-doi-btn">Copy DOI <i class="fas fa-copy" style="margin-left: 2px;"></i></button>
                    </div>
                    <a href="https://scholar.google.com/citations?user=Kr6MOa0AAAAJ&hl=en&oi=ao" target="_blank" class="scholar-direct-link-btn">
                        Google Scholar Citation <i class="fas fa-external-link-alt"></i>
                    </a>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>

<!-- Interactive Filter & Copy DOI Script -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".pub-filter-btn");
    const pubCards = document.querySelectorAll(".pub-card-item");
    const searchInput = document.getElementById("pubSearchInput");
    const pubCountText = document.getElementById("pubCountText");

    let currentFilter = "all";
    let currentQuery = "";

    function filterPubs() {
        let count = 0;

        pubCards.forEach(function (card) {
            const cardType = card.getAttribute("data-type");
            const searchData = card.getAttribute("data-search");

            const matchesFilter = (currentFilter === "all" || cardType === currentFilter);
            const matchesQuery = (!currentQuery || searchData.includes(currentQuery));

            if (matchesFilter && matchesQuery) {
                card.style.display = "block";
                count++;
            } else {
                card.style.display = "none";
            }
        });

        if (currentFilter === "all" && !currentQuery) {
            pubCountText.innerText = "Showing all " + count + " publication items";
        } else {
            pubCountText.innerText = "Showing " + count + " filtered publication" + (count !== 1 ? "s" : "");
        }
    }

    filterButtons.forEach(function (btn) {
        btn.addEventListener("click", function () {
            filterButtons.forEach(b => b.classList.remove("active"));
            this.classList.add("active");

            currentFilter = this.getAttribute("data-filter");
            filterPubs();
        });
    });

    if (searchInput) {
        searchInput.addEventListener("input", function () {
            currentQuery = this.value.trim().toLowerCase();
            filterPubs();
        });
    }
});

function copyDOIText(doi, btnElem) {
    navigator.clipboard.writeText(doi).then(function () {
        const origText = btnElem.innerHTML;
        btnElem.innerHTML = 'Copied! <i class="fas fa-check"></i>';
        btnElem.style.background = '#166534';
        btnElem.style.color = '#ffffff';

        setTimeout(function () {
            btnElem.innerHTML = origText;
            btnElem.style.background = '#f1f5f9';
            btnElem.style.color = '#334155';
        }, 2000);
    });
}
</script>

@endsection
