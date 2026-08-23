@extends('layouts.app')

@section('title', 'My courses (18) | Dr. Muhammad Shakil Ahmad')

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
    
    /* Sleek Filter & Search Control Panel */
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
        padding: 0.7rem 1.4rem;
        border-radius: 12px;
        font-weight: 600;
        font-size: 0.9rem;
        text-decoration: none;
        transition: all 0.2s ease;
        box-shadow: 0 4px 12px rgba(30, 58, 138, 0.2);
    }
    .udemy-profile-direct-btn:hover {
        background: #1e40af;
        transform: translateY(-2px);
        color: #ffffff;
        box-shadow: 0 6px 18px rgba(30, 58, 138, 0.3);
    }

    /* Aesthetic Category Pill Buttons */
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

    /* Course Cards Layout */
    .courses-grid-layout {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
        gap: 2rem;
        margin-bottom: 4rem;
    }
    .img2-course-card {
        background: #ffffff;
        border-radius: 16px;
        border: 1px solid #e2e8f0;
        padding: 1.25rem;
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
        transform: translateY(-5px);
        box-shadow: 0 14px 28px rgba(30, 58, 138, 0.1);
        border-color: #cbd5e1;
    }
    .img2-thumb-wrapper {
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 185px;
        margin-bottom: 1.25rem;
        background: #f8fafc;
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
        font-size: 0.78rem;
        font-weight: 700;
        padding: 0.25rem 0.75rem;
        border-radius: 6px;
        position: absolute;
        top: 12px;
        left: 12px;
        z-index: 2;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .img2-course-title {
        font-family: var(--font-heading);
        font-size: 1.25rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 0.5rem;
        line-height: 1.35;
    }
    .img2-course-desc {
        color: #475569;
        font-size: 0.92rem;
        line-height: 1.6;
        margin-bottom: 0.75rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .img2-instructor-name {
        color: #64748b;
        font-size: 0.88rem;
        margin-bottom: 1rem;
        font-weight: 500;
    }
    .img2-pills-row {
        display: flex;
        flex-wrap: wrap;
        gap: 0.4rem;
        margin-bottom: 1.25rem;
    }
    .img2-pill-badge {
        padding: 0.22rem 0.6rem;
        border-radius: 6px;
        border: 1px solid #e2e8f0;
        background: #f8fafc;
        color: #475569;
        font-size: 0.78rem;
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
</style>
@endpush

@section('content')

<!-- Header Title & Controls Section -->
<section class="courses-page-header">
    <div class="container">
        
        <div class="courses-title-row">
            <div>
                <h1 class="courses-page-title">
                    My courses <span class="courses-count-badge" id="resultsCountBadge">18 Courses</span>
                </h1>
                <p style="color: #64748b; font-size: 0.98rem; margin: 0.4rem 0 0 0;">
                    Explore 18 self-paced video bootcamps by Dr. Muhammad Shakil Ahmad. All courses open on Udemy.
                </p>
            </div>
            
            <div>
                <a href="https://www.udemy.com/user/dr-muhammad-shakil-ahmad/" target="_blank" class="udemy-profile-direct-btn">
                    <i class="fab fa-udemy" style="font-size: 1.1rem;"></i> Visit Udemy Profile <i class="fas fa-external-link-alt" style="font-size: 0.75rem;"></i>
                </a>
            </div>
        </div>

        <!-- Aesthetic Control & Filter Panel -->
        <div class="filter-panel-card">
            <div class="filter-search-row">
                <div class="search-input-wrapper">
                    <i class="fas fa-search"></i>
                    <input type="text" id="courseSearchInput" class="search-input-field" placeholder="Search courses by topic (e.g. SLR, NVivo, Meta-Analysis, Scopus)...">
                </div>
                <div style="font-size: 0.88rem; color: #64748b; font-weight: 500;" id="filterStatusText">
                    Showing all 18 online bootcamps
                </div>
            </div>

            <!-- Dynamic Category Pills -->
            <div class="course-filter-bar" id="categoryFilterPills">
                <button class="course-filter-btn active" data-category="all">
                    <i class="fas fa-layer-group"></i> All 18 Courses
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
            @php
                $thumbnails = [
                    'course_slr_thumb.png',
                    'course_thematic_thumb.png',
                    'course_meta_thumb.png',
                    'course_lit_review_thumb.png',
                    'course_bibliometrics_thumb.png',
                    'course_qualitative_thumb.png',
                ];
            @endphp

            @foreach($courses as $index => $course)
            <a href="{{ $course->udemy_url }}" target="_blank" class="img2-course-card course-card-item" data-category="{{ $course->category }}" data-title="{{ strtolower($course->title) }}" data-desc="{{ strtolower($course->description) }}">
                <div>
                    <!-- Thumbnail with Bestseller badge -->
                    <div class="img2-thumb-wrapper">
                        @if($index === 0 || $index === 6)
                            <span class="img2-bestseller-badge"><i class="fas fa-fire" style="margin-right: 3px;"></i> Bestseller</span>
                        @endif
                        <img src="{{ asset('images/' . ($thumbnails[$index % 6])) }}" alt="{{ $course->title }}" class="img2-thumb-img">
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
                        <span class="img2-old-price">${{ number_format($course->price * 5, 2) }}</span>
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

    </div>
</section>

<!-- Interactive Live Filter & Search JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".course-filter-btn");
    const courseCards = document.querySelectorAll(".course-card-item");
    const searchInput = document.getElementById("courseSearchInput");
    const noResultsBox = document.getElementById("noResultsBox");
    const resultsCountBadge = document.getElementById("resultsCountBadge");
    const filterStatusText = document.getElementById("filterStatusText");

    let currentCategory = "all";
    let currentSearch = "";

    function filterCourses() {
        let visibleCount = 0;

        courseCards.forEach(function (card) {
            const cardCategory = card.getAttribute("data-category");
            const title = card.getAttribute("data-title");
            const desc = card.getAttribute("data-desc");

            const matchesCategory = (currentCategory === "all" || cardCategory === currentCategory);
            const matchesSearch = (!currentSearch || title.includes(currentSearch) || desc.includes(currentSearch));

            if (matchesCategory && matchesSearch) {
                card.style.display = "flex";
                visibleCount++;
            } else {
                card.style.display = "none";
            }
        });

        if (visibleCount === 0) {
            noResultsBox.style.display = "block";
        } else {
            noResultsBox.style.display = "none";
        }

        resultsCountBadge.innerText = visibleCount + " Course" + (visibleCount !== 1 ? "s" : "");
        
        if (currentCategory === "all" && !currentSearch) {
            filterStatusText.innerText = "Showing all 18 online bootcamps";
        } else {
            filterStatusText.innerText = "Showing " + visibleCount + " filtered course" + (visibleCount !== 1 ? "s" : "");
        }
    }

    filterButtons.forEach(function (btn) {
        btn.addEventListener("click", function () {
            filterButtons.forEach(b => b.classList.remove("active"));
            this.classList.add("active");

            currentCategory = this.getAttribute("data-category");
            filterCourses();
        });
    });

    if (searchInput) {
        searchInput.addEventListener("input", function () {
            currentSearch = this.value.trim().toLowerCase();
            filterCourses();
        });
    }
});
</script>

@endsection
