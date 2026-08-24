@extends('layouts.app')

@section('title', $course->title . ' | Dr. Muhammad Shakil Ahmad')

@push('styles')
<style>
    .detail-hero {
        background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%);
        color: #ffffff;
        padding: 4rem 0 3rem 0;
    }
    .detail-breadcrumb {
        font-size: 0.88rem;
        color: #94a3b8;
        margin-bottom: 1.5rem;
    }
    .detail-breadcrumb a {
        color: #cbd5e1;
        text-decoration: none;
    }
    .detail-breadcrumb a:hover {
        color: #ffffff;
        text-decoration: underline;
    }
    .detail-title {
        font-family: var(--font-heading);
        font-size: 2.25rem;
        font-weight: 800;
        line-height: 1.35;
        margin-bottom: 1rem;
    }
    .detail-subtitle {
        font-size: 1.1rem;
        color: #cbd5e1;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }
    .detail-meta-row {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        align-items: center;
    }
    .detail-badge {
        background: rgba(255, 255, 255, 0.1);
        padding: 0.35rem 0.85rem;
        border-radius: 8px;
        font-size: 0.88rem;
        font-weight: 600;
        border: 1px solid rgba(255, 255, 255, 0.15);
    }
    .detail-card-sidebar {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        padding: 1.5rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        position: sticky;
        top: 100px;
    }
    .detail-price-huge {
        font-size: 2.2rem;
        font-weight: 800;
        color: #0f172a;
    }
    .detail-price-old {
        font-size: 1.1rem;
        color: #94a3b8;
        text-decoration: line-through;
        margin-left: 0.5rem;
    }
    .btn-udemy-enroll {
        display: block;
        width: 100%;
        text-align: center;
        background: #7c3aed;
        color: #ffffff;
        font-weight: 700;
        padding: 0.9rem;
        border-radius: 12px;
        text-decoration: none;
        font-size: 1rem;
        margin-top: 1.25rem;
        transition: all 0.2s ease;
        box-shadow: 0 4px 14px rgba(124, 58, 237, 0.3);
    }
    .btn-udemy-enroll:hover {
        background: #6d28d9;
        color: #ffffff;
        transform: translateY(-2px);
    }
</style>
@endpush

@section('content')
<section class="detail-hero">
    <div class="container">
        <div class="detail-breadcrumb">
            <a href="{{ route('home') }}">Home</a> / <a href="{{ route('courses.index') }}">Courses</a> / <span>{{ $course->title }}</span>
        </div>
        <div class="row" style="display: flex; flex-wrap: wrap; gap: 2rem;">
            <div style="flex: 1; min-width: 300px;">
                <span class="detail-badge" style="background: var(--gold); color: #0f172a; border: none; font-weight: 700;">{{ $course->category }}</span>
                <h1 class="detail-title" style="margin-top: 1rem;">{{ $course->title }}</h1>
                <p class="detail-subtitle">{{ $course->description }}</p>
                <div class="detail-meta-row">
                    <span class="detail-badge"><i class="fas fa-star" style="color: #eab308;"></i> {{ $course->rating }} ({{ $course->reviews_count }} ratings)</span>
                    <span class="detail-badge"><i class="fas fa-clock"></i> {{ $course->duration }}</span>
                    <span class="detail-badge"><i class="fas fa-book-open"></i> {{ $course->lectures_count }} lectures</span>
                    <span class="detail-badge"><i class="fas fa-signal"></i> {{ $course->level }}</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="padding: 4rem 0; background: #f8fafc;">
    <div class="container">
        <div style="display: flex; flex-wrap: wrap; gap: 2.5rem;">
            <div style="flex: 2; min-width: 300px;">
                <div style="background: #ffffff; padding: 2rem; border-radius: 16px; border: 1px solid #e2e8f0; margin-bottom: 2rem;">
                    <h2 style="font-size: 1.4rem; font-weight: 700; margin-bottom: 1rem; color: #0f172a;">What You Will Learn</h2>
                    <ul style="list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1rem;">
                        <li style="display: flex; gap: 0.5rem; font-size: 0.95rem; color: #334155;"><i class="fas fa-check-circle" style="color: #10b981; margin-top: 3px;"></i> Step-by-step practical research methodologies</li>
                        <li style="display: flex; gap: 0.5rem; font-size: 0.95rem; color: #334155;"><i class="fas fa-check-circle" style="color: #10b981; margin-top: 3px;"></i> Comprehensive data analysis & visualization techniques</li>
                        <li style="display: flex; gap: 0.5rem; font-size: 0.95rem; color: #334155;"><i class="fas fa-check-circle" style="color: #10b981; margin-top: 3px;"></i> Peer-reviewed publishing standards and templates</li>
                        <li style="display: flex; gap: 0.5rem; font-size: 0.95rem; color: #334155;"><i class="fas fa-check-circle" style="color: #10b981; margin-top: 3px;"></i> Lifetime access with certificate of completion</li>
                    </ul>
                </div>

                @if($relatedCourses->count() > 0)
                <div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: #0f172a; margin-bottom: 1rem;">Related Courses</h3>
                    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 1rem;">
                        @foreach($relatedCourses as $rel)
                        <div style="background: #ffffff; padding: 1.25rem; border-radius: 12px; border: 1px solid #e2e8f0;">
                            <h4 style="font-size: 1rem; font-weight: 700; color: #0f172a; margin-bottom: 0.5rem;">{{ $rel->title }}</h4>
                            <p style="font-size: 0.85rem; color: #64748b; margin-bottom: 1rem;">{{ Str::limit($rel->description, 90) }}</p>
                            <a href="{{ route('courses.show', $rel->slug) }}" style="color: #1e3a8a; font-weight: 700; font-size: 0.88rem; text-decoration: none;">View Course <i class="fas fa-arrow-right"></i></a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <div style="flex: 1; min-width: 280px;">
                <div class="detail-card-sidebar">
                    <div style="margin-bottom: 1rem;">
                        <span class="detail-price-huge">${{ number_format($course->price, 2) }}</span>
                        @if($course->original_price)
                        <span class="detail-price-old">${{ number_format($course->original_price, 2) }}</span>
                        @endif
                    </div>
                    <p style="font-size: 0.88rem; color: #64748b;">Full lifetime access on Udemy with video lectures & downloadable resources.</p>
                    <a href="{{ $course->udemy_url ?? 'https://www.udemy.com/user/dr-muhammad-shakil-ahmad/' }}" target="_blank" class="btn-udemy-enroll">
                        Enroll on Udemy <i class="fas fa-external-link-alt" style="font-size: 0.8rem; margin-left: 4px;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
