@extends('layouts.app')

@section('title', 'Research & Publications | Dr. Muhammad Shakil Ahmad')

@push('styles')
<style>
    .pub-hero-section {
        padding: 5.5rem 0 4rem 0;
        background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #0f172a 100%);
        color: #ffffff;
        position: relative;
        overflow: hidden;
    }
    .pub-hero-badge {
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
    .pub-hero-title {
        font-family: var(--font-heading);
        font-size: 3rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 1rem;
    }
    .pub-hero-subtitle {
        color: #cbd5e1;
        max-width: 750px;
        margin: 0 auto 2rem auto;
        font-size: 1.1rem;
        line-height: 1.7;
    }

    /* Filter Panel */
    .pub-filter-panel {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        padding: 1.25rem 1.5rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        margin-bottom: 3rem;
    }
    .pub-filter-tabs {
        display: flex;
        gap: 0.6rem;
        flex-wrap: wrap;
        margin-top: 1rem;
    }
    .pub-filter-btn {
        padding: 0.5rem 1.1rem;
        border-radius: 10px;
        font-size: 0.85rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.25s ease;
        border: 1px solid #e2e8f0;
        background: #f8fafc;
        color: #475569;
    }
    .pub-filter-btn.active {
        background: #1e3a8a;
        color: #ffffff;
        border-color: #1e3a8a;
        box-shadow: 0 4px 12px rgba(30, 58, 138, 0.2);
    }

    /* Publication Item Card */
    .pub-item-card {
        background: #ffffff;
        border-radius: 16px;
        border: 1px solid #e2e8f0;
        padding: 1.75rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.03);
        transition: all 0.25s ease;
        position: relative;
    }
    .pub-item-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(30, 58, 138, 0.08);
        border-color: #cbd5e1;
    }
    .pub-card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 0.75rem;
        margin-bottom: 0.75rem;
    }
    .pub-badge-type {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        font-size: 0.78rem;
        font-weight: 700;
        padding: 0.25rem 0.75rem;
        border-radius: 6px;
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
        font-size: 1.3rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 0.5rem;
        line-height: 1.4;
    }
    .pub-card-journal {
        color: #1e3a8a;
        font-size: 0.95rem;
        font-weight: 600;
        margin-bottom: 0.75rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .pub-card-abstract {
        color: #475569;
        font-size: 0.94rem;
        line-height: 1.65;
        margin-bottom: 1.25rem;
    }
    .pub-card-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1rem;
        padding-top: 0.9rem;
        border-top: 1px solid #f1f5f9;
        font-size: 0.88rem;
        color: #64748b;
    }
    .copy-doi-btn {
        background: #f1f5f9;
        border: 1px solid #cbd5e1;
        color: #334155;
        padding: 0.3rem 0.75rem;
        border-radius: 6px;
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
</style>
@endpush

@section('content')

<!-- Rich Hero Section -->
<section class="pub-hero-section">
    <div class="container text-center">
        <div class="pub-hero-badge">
            <i class="fas fa-microscope"></i> SCOPUS & WEB OF SCIENCE INDEXED RESEARCH
        </div>
        <h1 class="pub-hero-title">Research & Publications</h1>
        <p class="pub-hero-subtitle">
            Peer-reviewed Q1 journal articles, systematic literature reviews, and competitive international research grants secured across leading journals.
        </p>

        <div style="display: flex; justify-content: center; gap: 2rem; flex-wrap: wrap; margin-top: 2rem; font-size: 0.95rem; color: #cbd5e1;">
            <div><i class="fas fa-check-circle" style="color: #facc15; margin-right: 6px;"></i> Journal of Knowledge Management</div>
            <div><i class="fas fa-check-circle" style="color: #facc15; margin-right: 6px;"></i> Leadership & Org Dev Journal</div>
            <div><i class="fas fa-check-circle" style="color: #facc15; margin-right: 6px;"></i> HEC & Oman TRC Funded PI</div>
        </div>
    </div>
</section>

<!-- Main Content & Filter Area -->
<section class="section-padding" style="background: #f8fafc;">
    <div class="container">
        
        <!-- Filter & Search Control Panel -->
        <div class="pub-filter-panel">
            <div style="display: flex; gap: 1rem; align-items: center; justify-content: space-between; flex-wrap: wrap;">
                <div style="position: relative; flex: 1; min-width: 280px;">
                    <i class="fas fa-search" style="position: absolute; left: 1rem; top: 50%; transform: translateY(-50%); color: #94a3b8;"></i>
                    <input type="text" id="pubSearchInput" class="form-control" style="padding-left: 2.8rem; border-radius: 10px; background: #f8fafc;" placeholder="Search papers by title, journal, topic, or DOI...">
                </div>
                <div style="font-size: 0.88rem; color: #64748b; font-weight: 500;" id="pubCountText">
                    Showing all publications & grants
                </div>
            </div>

            <div class="pub-filter-tabs">
                <button class="pub-filter-btn active" data-filter="all">All Items</button>
                <button class="pub-filter-btn" data-filter="grant">Funded Research Grants</button>
                <button class="pub-filter-btn" data-filter="review">Systematic Literature Reviews</button>
                <button class="pub-filter-btn" data-filter="article">Scopus / SSCI Journal Articles</button>
            </div>
        </div>

        <!-- Publications List -->
        <div id="publicationsContainer">
            
            <!-- 1. Grants -->
            @foreach($grants as $grant)
            <div class="pub-item-card pub-card-item" data-type="grant" data-search="{{ strtolower($grant->title . ' ' . $grant->journal . ' ' . $grant->authors) }}">
                <div class="pub-card-header">
                    <span class="pub-badge-type grant"><i class="fas fa-coins"></i> Funded Research Grant</span>
                    <span style="font-size: 0.85rem; font-weight: 700; color: #854d0e; background: #fef9c3; padding: 0.2rem 0.6rem; border-radius: 6px;">Year: {{ $grant->year }}</span>
                </div>
                <h2 class="pub-card-title">{{ $grant->title }}</h2>
                <div class="pub-card-journal"><i class="fas fa-university"></i> Funding Body: {{ $grant->journal }}</div>
                <p class="pub-card-abstract">{{ $grant->abstract }}</p>
                <div class="pub-card-footer">
                    <div><i class="fas fa-user-tie"></i> Role: {{ $grant->authors }}</div>
                    <div><i class="fas fa-check-double" style="color: #166534;"></i> Status: Awarded & Completed</div>
                </div>
            </div>
            @endforeach

            <!-- 2. Systematic Reviews -->
            @foreach($systematicReviews as $sr)
            <div class="pub-item-card pub-card-item" data-type="review" data-search="{{ strtolower($sr->title . ' ' . $sr->journal . ' ' . $sr->authors . ' ' . $sr->doi) }}">
                <div class="pub-card-header">
                    <span class="pub-badge-type review"><i class="fas fa-book"></i> Systematic Literature Review</span>
                    <span style="font-size: 0.8rem; font-weight: 700; color: #0369a1; background: #e0f2fe; padding: 0.2rem 0.6rem; border-radius: 6px;">Scopus Q1</span>
                </div>
                <h2 class="pub-card-title">{{ $sr->title }}</h2>
                <div class="pub-card-journal"><i class="fas fa-journal-whills"></i> {{ $sr->journal }} ({{ $sr->year }})</div>
                <p class="pub-card-abstract">{{ $sr->abstract }}</p>
                <div class="pub-card-footer">
                    <div><i class="fas fa-user-edit"></i> Authors: {{ $sr->authors }}</div>
                    <div style="display: flex; align-items: center; gap: 0.6rem;">
                        <span style="font-family: monospace; font-size: 0.82rem;">DOI: {{ $sr->doi }}</span>
                        <button onclick="copyDOIText('{{ $sr->doi }}', this)" class="copy-doi-btn">Copy DOI <i class="fas fa-copy"></i></button>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- 3. Journal Articles -->
            @foreach($journalArticles as $ja)
            <div class="pub-item-card pub-card-item" data-type="article" data-search="{{ strtolower($ja->title . ' ' . $ja->journal . ' ' . $ja->authors . ' ' . $ja->doi) }}">
                <div class="pub-card-header">
                    <span class="pub-badge-type article"><i class="fas fa-file-alt"></i> Peer-Reviewed Journal Article</span>
                    <span style="font-size: 0.8rem; font-weight: 700; color: #166534; background: #f0fdf4; padding: 0.2rem 0.6rem; border-radius: 6px;">SSCI / Scopus</span>
                </div>
                <h2 class="pub-card-title">{{ $ja->title }}</h2>
                <div class="pub-card-journal"><i class="fas fa-feather"></i> {{ $ja->journal }} ({{ $ja->year }})</div>
                <p class="pub-card-abstract">{{ $ja->abstract }}</p>
                <div class="pub-card-footer">
                    <div><i class="fas fa-users"></i> Authors: {{ $ja->authors }}</div>
                    <div style="display: flex; align-items: center; gap: 0.6rem;">
                        <span style="font-family: monospace; font-size: 0.82rem;">DOI: {{ $ja->doi }}</span>
                        <button onclick="copyDOIText('{{ $ja->doi }}', this)" class="copy-doi-btn">Copy DOI <i class="fas fa-copy"></i></button>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>

<!-- Interactive Live Filter Script -->
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

        pubCountText.innerText = "Showing " + count + " publication" + (count !== 1 ? "s" : "");
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
