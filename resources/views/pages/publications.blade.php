@extends('layouts.app')

@section('title', 'Peer-Reviewed Research, Publications & Grants | Dr. Muhammad Shakil Ahmad')

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
    .pub-filter-row {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    .pub-filter-tabs {
        display: flex;
        gap: 0.6rem;
        flex-wrap: wrap;
    }
    .pub-filter-btn, .pub-year-btn {
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
    .pub-filter-btn.active, .pub-year-btn.active {
        background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%);
        color: #ffffff;
        border-color: #1e3a8a;
        box-shadow: 0 4px 12px rgba(30, 58, 138, 0.25);
    }
    .pub-year-btn.active {
        background: #eab308;
        color: #0f172a;
        border-color: #eab308;
        box-shadow: 0 4px 12px rgba(234, 179, 8, 0.3);
    }

    /* 2-Column Grid Layout for Publications Cards (2 Boxes Per Row) */
    #publicationsContainer {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
        align-items: stretch;
    }
    .pub-item-card {
        background: #ffffff;
        border-radius: 14px;
        border: 1px solid #e2e8f0;
        padding: 1.35rem;
        margin-bottom: 0 !important;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
        transition: all 0.25s ease;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }
    .pub-item-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 24px rgba(30, 58, 138, 0.1);
        border-color: #cbd5e1;
    }
    @media (max-width: 992px) {
        #publicationsContainer {
            grid-template-columns: 1fr !important;
            gap: 1.25rem !important;
        }
    }
    .pub-card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 0.75rem;
        margin-bottom: 0.65rem;
    }
    .pub-badge-type {
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
        font-size: 0.75rem;
        font-weight: 700;
        padding: 0.22rem 0.65rem;
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
        font-size: 1.15rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 0.45rem;
        line-height: 1.35;
    }
    .pub-card-authors {
        font-size: 0.88rem;
        color: #334155;
        margin-bottom: 0.45rem;
        font-weight: 500;
    }
    .pub-card-journal {
        color: #1e3a8a;
        font-size: 0.9rem;
        font-weight: 700;
        margin-bottom: 0.65rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .pub-card-abstract {
        color: #475569;
        font-size: 0.88rem;
        line-height: 1.55;
        margin-bottom: 0.85rem;
        background: #f8fafc;
        padding: 0.75rem 1rem;
        border-radius: 10px;
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

    /* Year Group Divider Label */
    .year-group-heading {
        grid-column: 1 / -1;
        font-family: var(--font-heading);
        font-size: 1.5rem;
        font-weight: 800;
        color: #0f172a;
        margin-top: 1.5rem;
        margin-bottom: 0.5rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid #e2e8f0;
        display: flex;
        align-items: center;
    /* Pagination Button Styles */
    .pub-page-btn {
        padding: 0.5rem 0.9rem;
        border-radius: 8px;
        font-size: 0.85rem;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.2s ease;
        border: 1px solid #cbd5e1;
        background: #ffffff;
        color: #334155;
    }
    .pub-page-btn:hover:not(.disabled) {
        background: #1e3a8a;
        color: #ffffff;
        border-color: #1e3a8a;
    }
    .pub-page-btn.active {
        background: #eab308;
        color: #0f172a;
        border-color: #eab308;
        box-shadow: 0 3px 10px rgba(234, 179, 8, 0.3);
    }
    .pub-page-btn.disabled {
        opacity: 0.4;
        cursor: not-allowed;
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
        <h1 class="pub-hero-title">Research Publications & Grants</h1>
        <p class="pub-hero-subtitle">
            Author of 90+ papers in SSCI and Scopus Q1 journals across Human Resource Management, Project Management, Healthcare, and Sustainable Development, alongside funded research grants.
        </p>

        <!-- Official Google Scholar Card -->
        <div class="scholar-hero-card">
            <div style="text-align: left;">
                <div style="font-size: 0.8rem; font-weight: 800; color: #fef08a; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.25rem;">OFFICIAL CITATIONS PROFILE</div>
                <div style="font-weight: 800; font-size: 1.25rem; color: #ffffff;">Google Scholar Repository</div>
                <div style="font-size: 0.88rem; color: #cbd5e1; margin-top: 0.25rem;">Dr. Muhammad Shakil Ahmad • Senior Lecturer</div>
            </div>

            <div style="display: flex; gap: 2rem; align-items: center; flex-wrap: wrap;">
                <div class="scholar-stat-item">
                    <div class="scholar-stat-num">{{ count($allPublications) }}+</div>
                    <div class="scholar-stat-label">Publications</div>
                </div>
                <div class="scholar-stat-item">
                    <div class="scholar-stat-num">39</div>
                    <div class="scholar-stat-label">H-Index</div>
                </div>
                <div class="scholar-stat-item">
                    <div class="scholar-stat-num">8,900+</div>
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
            <div style="display: flex; gap: 1rem; align-items: center; justify-content: space-between; flex-wrap: wrap; margin-bottom: 1.25rem;">
                <div style="position: relative; flex: 1; min-width: 280px;">
                    <i class="fas fa-search" style="position: absolute; left: 1.1rem; top: 50%; transform: translateY(-50%); color: #94a3b8; font-size: 1rem;"></i>
                    <input type="text" id="pubSearchInput" class="form-control" style="padding-left: 2.8rem; border-radius: 12px; background: #f8fafc; border: 1px solid #cbd5e1; height: 46px;" placeholder="Search papers by title, journal, author, or DOI...">
                </div>
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <span style="font-size: 0.88rem; color: #64748b; font-weight: 600;" id="pubCountText">Showing all items</span>
                </div>
            </div>

            <div class="pub-filter-row">
                <!-- Type Filter Tabs (Grants, Systematic Reviews, Articles) -->
                <div class="pub-filter-tabs" id="typeFilterTabs">
                    <button class="pub-filter-btn active" data-filter="all">
                        <i class="fas fa-layer-group"></i> All Publications & Grants
                    </button>
                    <button class="pub-filter-btn" data-filter="grant" id="grants-tab-btn">
                        <i class="fas fa-hand-holding-usd" style="color: #eab308;"></i> Grants
                    </button>
                    <button class="pub-filter-btn" data-filter="review">
                        <i class="fas fa-book"></i> Systematic Literature Reviews
                    </button>
                    <button class="pub-filter-btn" data-filter="article">
                        <i class="fas fa-file-alt"></i> Scopus / SSCI Articles
                    </button>
                </div>

                <!-- Year-Wise Organization Filter Pills (Task 8 & 9) -->
                <div style="display: flex; align-items: center; gap: 0.5rem; flex-wrap: wrap; padding-top: 0.75rem; border-top: 1px dashed #cbd5e1;">
                    <span style="font-size: 0.82rem; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px; margin-right: 0.5rem;">
                        <i class="fas fa-calendar-alt"></i> Filter By Year:
                    </span>
                    <button class="pub-year-btn active" data-year="all">All Years</button>
                    @foreach($years as $yr)
                    <button class="pub-year-btn" data-year="{{ $yr }}">{{ $yr }}</button>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Publications List Container Organized Chronologically & Year-Wise -->
        <div id="publicationsContainer">
            
            @php
                $groupedPublications = $allPublications->groupBy('year');
            @endphp

            @foreach($groupedPublications as $year => $pubsInYear)
                <div class="year-group-heading year-header-item" data-year="{{ $year }}">
                    <i class="fas fa-calendar-check" style="color: #0284c7;"></i> Publications & Grants in {{ $year }}
                </div>

                @foreach($pubsInYear as $pub)
                @php
                    $pubTypeKey = strtolower($pub->type === 'Grant' ? 'grant' : ($pub->type === 'Systematic Review' ? 'review' : 'article'));
                @endphp
                <div class="pub-item-card pub-card-item" data-type="{{ $pubTypeKey }}" data-year="{{ $pub->year }}" data-search="{{ strtolower($pub->title . ' ' . $pub->journal . ' ' . $pub->authors . ' ' . ($pub->doi ?? '')) }}">
                    <div class="pub-card-header">
                        @if($pub->type === 'Grant')
                            <span class="pub-badge-type grant"><i class="fas fa-hand-holding-usd"></i> Funded Grant</span>
                            <span style="font-size: 0.85rem; font-weight: 700; color: #854d0e; background: #fef9c3; padding: 0.25rem 0.75rem; border-radius: 6px; border: 1px solid #fef08a;">Year: {{ $pub->year }}</span>
                        @elseif($pub->type === 'Systematic Review')
                            <span class="pub-badge-type review"><i class="fas fa-book"></i> Systematic Review</span>
                            <span style="font-size: 0.8rem; font-weight: 700; color: #0369a1; background: #e0f2fe; padding: 0.25rem 0.75rem; border-radius: 6px; border: 1px solid #bae6fd;">Year: {{ $pub->year }}</span>
                        @else
                            <span class="pub-badge-type article"><i class="fas fa-file-alt"></i> Journal Article</span>
                            <span style="font-size: 0.8rem; font-weight: 700; color: #166534; background: #f0fdf4; padding: 0.25rem 0.75rem; border-radius: 6px; border: 1px solid #bbf7d0;">Year: {{ $pub->year }}</span>
                        @endif
                    </div>

                    <h2 class="pub-card-title">{{ $pub->title }}</h2>
                    <div class="pub-card-journal">
                        <i class="fas {{ $pub->type === 'Grant' ? 'fa-university' : 'fa-journal-whills' }}"></i> 
                        {{ $pub->journal }}
                    </div>
                    <div class="pub-card-authors">
                        <i class="fas fa-user-tie" style="color: #0284c7; margin-right: 4px;"></i> 
                        <strong>{{ $pub->type === 'Grant' ? 'Investigator:' : 'Authors:' }}</strong> {{ $pub->authors }}
                    </div>
                    <div class="pub-card-abstract">{{ $pub->abstract }}</div>
                    
                    <div class="pub-card-footer">
                        @if(!empty($pub->doi))
                        <div style="display: flex; align-items: center; gap: 0.6rem;">
                            <span style="font-family: monospace; font-size: 0.85rem; font-weight: 600; color: #334155;">DOI: {{ $pub->doi }}</span>
                            <button onclick="copyDOIText('{{ $pub->doi }}', this)" class="copy-doi-btn">Copy DOI <i class="fas fa-copy" style="margin-left: 2px;"></i></button>
                        </div>
                        @else
                        <div><i class="fas fa-check-double" style="color: #166534; margin-right: 4px;"></i> <strong>Status:</strong> Awarded & Completed</div>
                        @endif

                        <a href="{{ !empty($pub->url) ? $pub->url : 'https://scholar.google.com/citations?user=Kr6MOa0AAAAJ&hl=en&oi=ao' }}" target="_blank" class="scholar-direct-link-btn">
                            View Publication Record <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            @endforeach

        </div>

        <!-- Responsive Pagination Controls Bar (10 Boxes Per Page) -->
        <div id="pubPaginationWrapper" style="display: flex; flex-direction: column; align-items: center; gap: 0.75rem; margin-top: 2.5rem; width: 100%;">
            <div id="pubPaginationNav" style="display: flex; align-items: center; justify-content: center; gap: 0.4rem; flex-wrap: wrap;"></div>
            <span style="font-size: 0.88rem; color: #64748b; font-weight: 600;" id="pubPageInfoText">Page 1</span>
        </div>

    </div>
</section>

<!-- Interactive Year-Wise & Grants Filter JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".pub-filter-btn");
    const yearButtons = document.querySelectorAll(".pub-year-btn");
    const pubCards = document.querySelectorAll(".pub-card-item");
    const yearHeaders = document.querySelectorAll(".year-header-item");
    const searchInput = document.getElementById("pubSearchInput");
    const pubCountText = document.getElementById("pubCountText");
    const paginationWrapper = document.getElementById("pubPaginationWrapper");
    const paginationNav = document.getElementById("pubPaginationNav");
    const pageInfoText = document.getElementById("pubPageInfoText");

    let currentFilter = "all";
    let currentYear = "all";
    let currentQuery = "";
    let currentPage = 1;
    const itemsPerPage = 10;

    function renderPublications() {
        const matchingCards = [];

        pubCards.forEach(function (card) {
            const cardType = card.getAttribute("data-type");
            const cardYear = card.getAttribute("data-year");
            const searchData = card.getAttribute("data-search");

            const matchesFilter = (currentFilter === "all" || cardType === currentFilter);
            const matchesYear = (currentYear === "all" || cardYear === currentYear);
            const matchesQuery = (!currentQuery || searchData.includes(currentQuery));

            if (matchesFilter && matchesYear && matchesQuery) {
                matchingCards.push(card);
            } else {
                card.style.display = "none";
            }
        });

        const totalMatching = matchingCards.length;
        const totalPages = Math.ceil(totalMatching / itemsPerPage) || 1;

        if (currentPage > totalPages) currentPage = totalPages;
        if (currentPage < 1) currentPage = 1;

        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;

        const visibleYearsOnPage = new Set();

        matchingCards.forEach(function (card, idx) {
            if (idx >= startIndex && idx < endIndex) {
                card.style.display = "flex";
                visibleYearsOnPage.add(card.getAttribute("data-year"));
            } else {
                card.style.display = "none";
            }
        });

        // Toggle year header dividers based on visible cards on current page
        yearHeaders.forEach(function (header) {
            const headerYear = header.getAttribute("data-year");
            if (visibleYearsOnPage.has(headerYear)) {
                header.style.display = "flex";
            } else {
                header.style.display = "none";
            }
        });

        // Update Counter Text
        if (totalMatching === 0) {
            pubCountText.innerText = "No matching publications found";
        } else {
            const fromItem = startIndex + 1;
            const toItem = Math.min(endIndex, totalMatching);
            pubCountText.innerText = `Showing ${fromItem}–${toItem} of ${totalMatching} publication` + (totalMatching !== 1 ? "s" : "");
        }

        // Render Pagination Nav Controls
        renderPaginationNav(totalPages, totalMatching);
    }

    function renderPaginationNav(totalPages, totalMatching) {
        if (totalPages <= 1 || totalMatching === 0) {
            paginationWrapper.style.display = "none";
            return;
        }

        paginationWrapper.style.display = "flex";
        pageInfoText.innerText = `Page ${currentPage} of ${totalPages}`;

        let navHtml = '';

        // Previous Page Button
        navHtml += `<button class="pub-page-btn ${currentPage === 1 ? 'disabled' : ''}" data-page="${currentPage - 1}" ${currentPage === 1 ? 'disabled' : ''}><i class="fas fa-chevron-left"></i> Prev</button>`;

        // Page Numbers
        for (let p = 1; p <= totalPages; p++) {
            if (p === 1 || p === totalPages || (p >= currentPage - 2 && p <= currentPage + 2)) {
                navHtml += `<button class="pub-page-btn ${p === currentPage ? 'active' : ''}" data-page="${p}">${p}</button>`;
            } else if (p === currentPage - 3 || p === currentPage + 3) {
                navHtml += `<span style="color: #94a3b8; padding: 0 0.25rem; font-size: 0.85rem; font-weight: 700;">...</span>`;
            }
        }

        // Next Page Button
        navHtml += `<button class="pub-page-btn ${currentPage === totalPages ? 'disabled' : ''}" data-page="${currentPage + 1}" ${currentPage === totalPages ? 'disabled' : ''}>Next <i class="fas fa-chevron-right"></i></button>`;

        paginationNav.innerHTML = navHtml;

        // Page click handlers
        paginationNav.querySelectorAll(".pub-page-btn").forEach(function(btn) {
            btn.addEventListener("click", function() {
                if (this.disabled || this.classList.contains("disabled")) return;
                const targetPage = parseInt(this.getAttribute("data-page"));
                if (targetPage && targetPage !== currentPage) {
                    currentPage = targetPage;
                    renderPublications();
                    const container = document.getElementById("publicationsContainer");
                    if (container) {
                        container.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                }
            });
        });
    }

    // Check URL parameters for pre-selected type filter (e.g. ?type=grant)
    const urlParams = new URLSearchParams(window.location.search);
    const typeParam = urlParams.get('type');
    if (typeParam) {
        currentFilter = typeParam;
        filterButtons.forEach(function (btn) {
            if (btn.getAttribute("data-filter") === typeParam) {
                filterButtons.forEach(b => b.classList.remove("active"));
                btn.classList.add("active");
            }
        });
    }

    // Type Filter Buttons Click
    filterButtons.forEach(function (btn) {
        btn.addEventListener("click", function () {
            filterButtons.forEach(b => b.classList.remove("active"));
            this.classList.add("active");
            currentFilter = this.getAttribute("data-filter");
            currentPage = 1;
            renderPublications();
        });
    });

    // Year Filter Buttons Click
    yearButtons.forEach(function (btn) {
        btn.addEventListener("click", function () {
            yearButtons.forEach(b => b.classList.remove("active"));
            this.classList.add("active");
            currentYear = this.getAttribute("data-year");
            currentPage = 1;
            renderPublications();
        });
    });

    // Search Input
    if (searchInput) {
        searchInput.addEventListener("input", function () {
            currentQuery = this.value.trim().toLowerCase();
            currentPage = 1;
            renderPublications();
        });
    }

    renderPublications();
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
