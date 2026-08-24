@extends('layouts.app')

@section('title', 'Online Courses & Bootcamps | Dr. Muhammad Shakil Ahmad')

@push('styles')
<style>
    .courses-page-header {
        padding: 3.5rem 0 2rem 0;
        background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
    }
    .courses-title-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1.5rem;
        margin-bottom: 2rem;
    }
    .courses-page-title {
        font-family: var(--font-heading);
        font-size: 2.25rem;
        font-weight: 800;
        color: #0f172a;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    .courses-count-badge {
        font-size: 0.9rem;
        font-weight: 700;
        background: rgba(30, 58, 138, 0.1);
        color: #1e3a8a;
        padding: 0.3rem 0.8rem;
        border-radius: 20px;
        border: 1px solid rgba(30, 58, 138, 0.2);
    }
    
    /* Filter & Search Control Panel */
    .filter-panel-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        padding: 1.25rem 1.5rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        margin-bottom: 2.5rem;
    }
    .filter-search-row {
        display: flex;
        gap: 1rem;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        margin-bottom: 1.25rem;
    }
    .search-input-wrapper {
        position: relative;
        flex: 1;
        min-width: 280px;
    }
    .search-input-wrapper i {
        position: absolute;
        left: 1.1rem;
        top: 50%;
        transform: translateY(-50%);
        color: #94a3b8;
        font-size: 1rem;
    }
    .search-input-field {
        width: 100%;
        padding: 0.75rem 1rem 0.75rem 2.8rem;
        border-radius: 12px;
        border: 1px solid #cbd5e1;
        font-size: 0.95rem;
        color: #0f172a;
        outline: none;
        transition: all 0.2s ease;
        background: #f8fafc;
    }
    .search-input-field:focus {
        border-color: #1e3a8a;
        background: #ffffff;
        box-shadow: 0 0 0 4px rgba(30, 58, 138, 0.1);
    }
    .udemy-profile-direct-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: #1e3a8a;
        color: #ffffff;
        padding: 0.75rem 1.5rem;
        border-radius: 12px;
        font-weight: 700;
        font-size: 0.92rem;
        text-decoration: none;
        transition: all 0.2s ease;
        box-shadow: 0 4px 14px rgba(30, 58, 138, 0.2);
    }
    .udemy-profile-direct-btn:hover {
        background: #1e40af;
        transform: translateY(-2px);
        color: #ffffff;
        box-shadow: 0 6px 18px rgba(30, 58, 138, 0.3);
    }

    /* Category Filter Pills */
    .course-filter-bar {
        display: flex;
        gap: 0.6rem;
        flex-wrap: wrap;
        align-items: center;
    }
    .course-filter-btn {
        padding: 0.5rem 1.1rem;
        border-radius: 10px;
        font-size: 0.85rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        border: 1px solid #e2e8f0;
        background: #f8fafc;
        color: #475569;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
    }
    .course-filter-btn:hover {
        background: #ffffff;
        border-color: #cbd5e1;
        color: #1e3a8a;
        transform: translateY(-1px);
    }
    .course-filter-btn.active {
        background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%);
        color: #ffffff;
        border-color: #1e3a8a;
        box-shadow: 0 4px 12px rgba(30, 58, 138, 0.25);
    }

    /* Course Cards Layout (Compact & Well-Proportioned) */
    .courses-grid-layout {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 1.25rem;
        margin-bottom: 2rem;
    }
    .img2-course-card {
        background: #ffffff;
        border-radius: 14px;
        border: 1px solid #e2e8f0;
        padding: 1rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.04);
        transition: all 0.3s ease;
        text-decoration: none;
        color: inherit;
        position: relative;
    }
    .img2-course-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 22px rgba(30, 58, 138, 0.09);
        border-color: #cbd5e1;
    }
    .img2-thumb-wrapper {
        border-radius: 10px;
        overflow: hidden;
        position: relative;
        height: 155px;
        margin-bottom: 0.85rem;
        background: #f8fafc;
        border: 1px solid #f1f5f9;
    }
    .img2-thumb-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }
    .img2-course-card:hover .img2-thumb-img {
        transform: scale(1.04);
    }
    .img2-bestseller-badge {
        background: #ccfbf1;
        color: #065f46;
        font-size: 0.72rem;
        font-weight: 700;
        padding: 0.2rem 0.6rem;
        border-radius: 6px;
        position: absolute;
        top: 10px;
        left: 10px;
        z-index: 2;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .img2-course-title {
        font-family: var(--font-heading);
        font-size: 1.08rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 0.35rem;
        line-height: 1.3;
    }
    .img2-course-desc {
        color: #475569;
        font-size: 0.88rem;
        line-height: 1.5;
        margin-bottom: 0.6rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .img2-instructor-name {
        color: #64748b;
        font-size: 0.82rem;
        margin-bottom: 0.75rem;
        font-weight: 500;
    }
    .img2-pills-row {
        display: flex;
        flex-wrap: wrap;
        gap: 0.35rem;
        margin-bottom: 0.85rem;
    }
    .img2-pill-badge {
        padding: 0.18rem 0.5rem;
        border-radius: 5px;
        border: 1px solid #e2e8f0;
        background: #f8fafc;
        color: #475569;
        font-size: 0.75rem;
        font-weight: 500;
        white-space: nowrap;
    }
    .img2-pill-badge.rating {
        font-weight: 700;
        color: #0f172a;
        background: #fffbeb;
        border-color: #fef08a;
    }
    .img2-price-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 0.9rem;
        border-top: 1px solid #f1f5f9;
    }
    .img2-price-box {
        display: flex;
        align-items: baseline;
        gap: 0.5rem;
    }
    .img2-current-price {
        font-size: 1.3rem;
        font-weight: 800;
        color: #0f172a;
    }
    .img2-old-price {
        font-size: 0.92rem;
        text-decoration: line-through;
        color: #94a3b8;
    }
    .img2-enroll-link-btn {
        color: #1e3a8a;
        font-weight: 700;
        font-size: 0.85rem;
        display: flex;
        align-items: center;
        gap: 0.3rem;
    }
    .no-results-box {
        display: none;
        text-align: center;
        padding: 4rem 2rem;
        background: #ffffff;
        border-radius: 16px;
        border: 1px dashed #cbd5e1;
        grid-column: 1 / -1;
    }

    /* Custom Pagination Styling Matching Image 2 */
    .udemy-pagination-container {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1.5rem;
        margin-top: 3.5rem;
        margin-bottom: 2rem;
    }
    .pagination-circle-btn {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        border: 1.5px solid #7c3aed;
        background: #ffffff;
        color: #7c3aed;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
        cursor: pointer;
        transition: all 0.25s ease;
        outline: none;
    }
    .pagination-circle-btn:hover:not(:disabled) {
        background: #7c3aed;
        color: #ffffff;
        box-shadow: 0 4px 14px rgba(124, 58, 237, 0.3);
    }
    .pagination-circle-btn:disabled {
        opacity: 0.3;
        cursor: not-allowed;
        border-color: #cbd5e1;
        color: #94a3b8;
    }
    .pagination-numbers-row {
        display: flex;
        align-items: center;
        gap: 1.5rem;
    }
    .pagination-num-item {
        font-size: 1.35rem;
        font-weight: 700;
        color: #6d28d9;
        cursor: pointer;
        position: relative;
        padding: 0.3rem 0.6rem;
        transition: color 0.2s ease;
        user-select: none;
    }
    .pagination-num-item.active {
        font-weight: 800;
        color: #5b21b6;
    }
    .pagination-num-item.active::after {
        content: '';
        position: absolute;
        bottom: -6px;
        left: 10%;
        right: 10%;
        height: 4px;
        background: #5b21b6;
        border-radius: 3px;
    }
    .pagination-num-item:hover:not(.active) {
        color: #8b5cf6;
    }
</style>
@endpush

@section('content')

<!-- Header Title & Controls Section -->
<section class="courses-page-header">
    <div class="container">
        
        <div class="courses-title-row">
            <div>
                <h1 class="courses-page-title">
                    Online Courses & Bootcamps
                </h1>
                <p style="color: #64748b; font-size: 0.98rem; margin: 0.4rem 0 0 0;">
                    Explore self-paced video bootcamps by Dr. Muhammad Shakil Ahmad. Every course links directly to its dedicated Udemy page.
                </p>
            </div>
            
            <div style="display: flex; gap: 0.75rem; flex-wrap: wrap;">
                <a href="https://www.udemy.com/user/muhammadshakilahmad/" target="_blank" class="udemy-profile-direct-btn">
                    <i class="fab fa-udemy" style="font-size: 1.2rem;"></i> Visit Udemy Profile <i class="fas fa-external-link-alt" style="font-size: 0.75rem;"></i>
                </a>
            </div>
        </div>

        <!-- Filter Panel -->
        <div class="filter-panel-card">
            <div class="filter-search-row">
                <div class="search-input-wrapper">
                    <i class="fas fa-search"></i>
                    <input type="text" id="courseSearchInput" class="search-input-field" placeholder="Search courses by topic (e.g. SLR, NVivo, Meta-Analysis, Scopus)...">
                </div>
                <div style="font-size: 0.88rem; color: #64748b; font-weight: 500;" id="filterStatusText">
                    Showing 6 courses per page
                </div>
            </div>

            <!-- Dynamic Category Pills -->
            <div class="course-filter-bar" id="categoryFilterPills">
                <button class="course-filter-btn active" data-category="all">
                    <i class="fas fa-layer-group"></i> All Courses
                </button>
                @foreach($categories as $cat)
                <button class="course-filter-btn" data-category="{{ $cat }}">
                    <i class="fas fa-tag" style="font-size: 0.75rem; opacity: 0.7;"></i> {{ $cat }}
                </button>
                @endforeach
            </div>
        </div>

        <!-- Courses Grid -->
        <div class="courses-grid-layout" id="coursesGrid">

            @foreach($courses as $index => $course)
            @php
                $targetUrl = (!empty($course->udemy_url) && str_contains($course->udemy_url, '/course/')) 
                    ? $course->udemy_url 
                    : 'https://www.udemy.com/user/dr-muhammad-shakil-ahmad/';
                $thumbFile = !empty($course->image) ? $course->image : 'course_slr_thumb.png';
            @endphp
            <a href="{{ $targetUrl }}" target="_blank" rel="noopener noreferrer" class="img2-course-card course-card-item" data-category="{{ $course->category }}" data-title="{{ strtolower($course->title) }}" data-desc="{{ strtolower($course->description) }}">
                <div>
                    <!-- Thumbnail with Bestseller badge -->
                    <div class="img2-thumb-wrapper">
                        @if($course->is_featured && $index === 0)
                            <span class="img2-bestseller-badge"><i class="fas fa-fire" style="margin-right: 3px;"></i> Bestseller</span>
                        @endif
                        <img src="{{ asset('images/' . $thumbFile) }}" alt="{{ $course->title }}" class="img2-thumb-img">
                    </div>

                    <!-- Course Title & Subtitle -->
                    <h3 class="img2-course-title">{{ $course->title }}</h3>
                    <p class="img2-course-desc">{{ $course->description }}</p>
                    <div class="img2-instructor-name"><i class="fas fa-user-check" style="color: #1e3a8a; margin-right: 4px;"></i> Muhammad Shakil Ahmad</div>

                    <!-- Tags Pill Row -->
                    <div class="img2-pills-row">
                        <span class="img2-pill-badge">Course</span>
                        <span class="img2-pill-badge rating"><i class="fas fa-star" style="color: #eab308; margin-right: 2px;"></i> {{ $course->rating }}</span>
                        <span class="img2-pill-badge">{{ $course->reviews_count }} ratings</span>
                        <span class="img2-pill-badge">{{ $course->duration }}</span>
                        <span class="img2-pill-badge">{{ $course->lectures_count }} lectures</span>
                        <span class="img2-pill-badge">{{ $course->level }}</span>
                    </div>
                </div>

                <!-- Price & CTA Row -->
                <div class="img2-price-row">
                    <div class="img2-price-box">
                        <span class="img2-current-price">${{ number_format($course->price, 2) }}</span>
                        <span class="img2-old-price">${{ number_format($course->original_price ?? 39.99, 2) }}</span>
                    </div>
                    <span class="img2-enroll-link-btn">
                        View on Udemy <i class="fas fa-external-link-alt" style="font-size: 0.75rem;"></i>
                    </span>
                </div>
            </a>
            @endforeach

            <!-- Empty Search Results Box -->
            <div class="no-results-box" id="noResultsBox">
                <i class="fas fa-search" style="font-size: 2.5rem; color: #cbd5e1; margin-bottom: 1rem;"></i>
                <h3 style="font-size: 1.2rem; color: #0f172a; margin-bottom: 0.5rem;">No matching courses found</h3>
                <p style="color: #64748b; font-size: 0.92rem; margin: 0;">Try adjusting your search terms or selecting a different category filter above.</p>
            </div>
        </div>

        <!-- Dynamic 6-per-page Pagination UI matching Image 2 -->
        <div class="udemy-pagination-container" id="udemyPaginationContainer">
            <button type="button" class="pagination-circle-btn" id="prevPageBtn" aria-label="Previous Page">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="pagination-numbers-row" id="paginationNumbersRow">
                <!-- Page numbers rendered via JS -->
            </div>
            <button type="button" class="pagination-circle-btn" id="nextPageBtn" aria-label="Next Page">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

    </div>
</section>

<!-- Interactive Pagination, Search & Category Filter JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".course-filter-btn");
    const courseCards = Array.from(document.querySelectorAll(".course-card-item"));
    const searchInput = document.getElementById("courseSearchInput");
    const noResultsBox = document.getElementById("noResultsBox");
    const resultsCountBadge = document.getElementById("resultsCountBadge");
    const filterStatusText = document.getElementById("filterStatusText");

    const paginationContainer = document.getElementById("udemyPaginationContainer");
    const prevPageBtn = document.getElementById("prevPageBtn");
    const nextPageBtn = document.getElementById("nextPageBtn");
    const paginationNumbersRow = document.getElementById("paginationNumbersRow");

    const itemsPerPage = 6;
    let currentPage = 1;
    let currentCategory = "all";
    let currentSearch = "";

    function getMatchingCards() {
        return courseCards.filter(function (card) {
            const cardCategory = card.getAttribute("data-category");
            const title = card.getAttribute("data-title");
            const desc = card.getAttribute("data-desc");

            const matchesCategory = (currentCategory === "all" || cardCategory === currentCategory);
            const matchesSearch = (!currentSearch || title.includes(currentSearch) || desc.includes(currentSearch));

            return matchesCategory && matchesSearch;
        });
    }

    function renderPage() {
        const matchingCards = getMatchingCards();
        const totalItems = matchingCards.length;
        const totalPages = Math.ceil(totalItems / itemsPerPage) || 1;

        if (currentPage > totalPages) {
            currentPage = totalPages;
        }
        if (currentPage < 1) {
            currentPage = 1;
        }

        // Hide all cards first
        courseCards.forEach(card => card.style.display = "none");

        // Calculate slice for current page
        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;

        const pageCards = matchingCards.slice(startIndex, endIndex);
        pageCards.forEach(card => card.style.display = "flex");

        // Toggle No Results Box
        if (totalItems === 0) {
            noResultsBox.style.display = "block";
            paginationContainer.style.display = "none";
        } else {
            noResultsBox.style.display = "none";
            paginationContainer.style.display = (totalPages > 1) ? "flex" : "none";
        }

        // Update counts and status text
        if (resultsCountBadge) { resultsCountBadge.innerText = totalItems + " Course" + (totalItems !== 1 ? "s" : ""); }
        filterStatusText.innerText = "Showing page " + currentPage + " of " + totalPages + " (" + totalItems + " total)";

        // Render Page Number Buttons
        paginationNumbersRow.innerHTML = "";
        for (let i = 1; i <= totalPages; i++) {
            const numBtn = document.createElement("span");
            numBtn.className = "pagination-num-item" + (i === currentPage ? " active" : "");
            numBtn.innerText = i;
            numBtn.addEventListener("click", function () {
                currentPage = i;
                renderPage();
                window.scrollTo({ top: document.querySelector('.courses-page-header').offsetTop - 20, behavior: 'smooth' });
            });
            paginationNumbersRow.appendChild(numBtn);
        }

        // Enable / Disable Prev & Next buttons
        prevPageBtn.disabled = (currentPage === 1);
        nextPageBtn.disabled = (currentPage === totalPages || totalPages === 0);
    }

    // Prev Button Click
    prevPageBtn.addEventListener("click", function () {
        if (currentPage > 1) {
            currentPage--;
            renderPage();
            window.scrollTo({ top: document.querySelector('.courses-page-header').offsetTop - 20, behavior: 'smooth' });
        }
    });

    // Next Button Click
    nextPageBtn.addEventListener("click", function () {
        const matchingCards = getMatchingCards();
        const totalPages = Math.ceil(matchingCards.length / itemsPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            renderPage();
            window.scrollTo({ top: document.querySelector('.courses-page-header').offsetTop - 20, behavior: 'smooth' });
        }
    });

    // Category Buttons Click
    filterButtons.forEach(function (btn) {
        btn.addEventListener("click", function () {
            filterButtons.forEach(b => b.classList.remove("active"));
            this.classList.add("active");

            currentCategory = this.getAttribute("data-category");
            currentPage = 1;
            renderPage();
        });
    });

    // Search Input
    if (searchInput) {
        searchInput.addEventListener("input", function () {
            currentSearch = this.value.trim().toLowerCase();
            currentPage = 1;
            renderPage();
        });
    }

    // Initial render on load
    renderPage();
});
</script>

@endsection
