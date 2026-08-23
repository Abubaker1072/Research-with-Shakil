@extends('layouts.app')

@section('title', 'About Dr. Muhammad Shakil Ahmad | Researcher, Editor, Trainer and Life Coach')

@push('styles')
<style>
    .about-header-banner {
        background: #f3edff;
        padding: 3rem 0 3rem 0;
        border-bottom: 1px solid #e9d5ff;
    }
    .about-instructor-label {
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        color: #4b5563;
        text-transform: uppercase;
        margin-bottom: 0.5rem;
    }
    .about-instructor-name {
        font-family: var(--font-heading);
        font-size: 2.5rem;
        font-weight: 700;
        color: #111827;
        margin-bottom: 0.35rem;
    }
    .about-instructor-subtitle {
        font-size: 1.1rem;
        color: #4b5563;
        font-weight: 500;
    }
    .about-profile-card {
        background: #ffffff;
        border-radius: 20px;
        border: 1px solid #f1f5f9;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
        padding: 2.5rem 1.75rem;
        text-align: center;
        margin-top: -5rem;
        position: relative;
        z-index: 10;
    }
    .about-avatar-circle {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background: #eab308;
        margin: 0 auto 1.5rem auto;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        box-shadow: 0 6px 16px rgba(234, 179, 8, 0.3);
    }
    .about-avatar-circle img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .about-social-row {
        display: flex;
        justify-content: center;
        gap: 0.6rem;
        margin-top: 1rem;
    }
    .about-social-btn {
        width: 44px;
        height: 44px;
        border-radius: 10px;
        border: 1.5px solid #d8b4fe;
        color: #7e22ce;
        background: #ffffff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
        text-decoration: none;
        transition: all 0.2s ease;
    }
    .about-social-btn:hover {
        background: #7e22ce;
        color: #ffffff;
        border-color: #7e22ce;
        transform: translateY(-2px);
    }
    .about-stats-container {
        display: flex;
        gap: 3.5rem;
        margin-bottom: 2rem;
    }
    .about-stat-number {
        font-size: 1.25rem;
        font-weight: 700;
        color: #111827;
    }
    .about-stat-label {
        font-size: 0.88rem;
        color: #6b7280;
        margin-top: 0.15rem;
    }
    .about-section-heading {
        font-family: var(--font-heading);
        font-size: 1.75rem;
        font-weight: 700;
        color: #111827;
        margin-bottom: 1.25rem;
    }
    .about-text-body {
        color: #374151;
        font-size: 1.02rem;
        line-height: 1.8;
        margin-bottom: 1.5rem;
    }
</style>
@endpush

@section('content')

<!-- Header Banner matching Image 1 -->
<section class="about-header-banner">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 380px; gap: 3.5rem; align-items: flex-end;">
            <div>
                <div class="about-instructor-label">INSTRUCTOR</div>
                <h1 class="about-instructor-name">Muhammad Shakil Ahmad</h1>
                <div class="about-instructor-subtitle">Researcher, Editor, Trainer and Life Coach</div>
            </div>
            <div><!-- Spacer for Profile Card --></div>
        </div>
    </div>
</section>

<!-- Content & Profile Card Grid matching Image 1 -->
<section style="padding: 2.5rem 0 5rem 0; background: #ffffff;">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 380px; gap: 3.5rem; align-items: start;">
            
            <!-- Left Side: Stats & About Me Bio -->
            <div>
                <!-- Stats Row matching Image 1 -->
                <div class="about-stats-container">
                    <div>
                        <div class="about-stat-number">21,555</div>
                        <div class="about-stat-label">Total learners</div>
                    </div>
                    <div>
                        <div class="about-stat-number">1,867</div>
                        <div class="about-stat-label">Reviews</div>
                    </div>
                </div>

                <!-- About me Heading matching Image 1 -->
                <h2 class="about-section-heading">About me</h2>

                <!-- Text paragraph matching Image 1 exactly -->
                <p class="about-text-body">
                    Dr. Muhammad Shakil Ahmad is a distinguished academic and researcher specializing in the field of management. Possessing a Doctorate in Management, he brings forth a wealth of knowledge and expertise, particularly in the domains of human resource management and project management. Dr. Ahmad's unwavering dedication to education and research is evident through his extensive instructional experience at esteemed institutions across various universities.
                </p>

                <p class="about-text-body">
                    As the <strong>In-charge of ORIC (Office of Research Innovation & Commercialization)</strong>, Dr. Shakil has bridged academia and industry, securing competitive research funding from the <em>Ministry of Higher Education & Scientific Research (Oman)</em> and the <em>Higher Education Commission (HEC, Pakistan)</em>.
                </p>

                <!-- Primary Research Interests Tag List -->
                <h3 style="font-size: 1.2rem; font-weight: 700; margin: 2rem 0 1rem 0; color: #111827;">Primary Research & Coaching Domains</h3>
                <div style="display: flex; flex-wrap: wrap; gap: 0.6rem; margin-bottom: 2.5rem;">
                    @foreach($researchInterests as $interest)
                    <span style="padding: 0.45rem 1rem; border-radius: 8px; font-size: 0.88rem; font-weight: 600; background: #f8fafc; border: 1px solid #cbd5e1; color: #1e293b;">
                        <i class="fas fa-hashtag" style="color: #7e22ce; margin-right: 4px;"></i> {{ $interest }}
                    </span>
                    @endforeach
                </div>
            </div>

            <!-- Right Side: Floating Profile Card matching Image 1 -->
            <div>
                <div class="about-profile-card">
                    <!-- Circular avatar with mustard background -->
                    <div class="about-avatar-circle">
                        <img src="{{ asset('images/hero_dr_shakil_cutout_v2.jpg') }}" alt="Muhammad Shakil Ahmad">
                    </div>

                    <!-- 5 Outlined Social Icons matching Image 1 -->
                    <div class="about-social-row">
                        <a href="https://www.udemy.com/user/dr-muhammad-shakil-ahmad/" target="_blank" class="about-social-btn" title="Udemy Profile">
                            <i class="fas fa-link"></i>
                        </a>
                        <a href="https://facebook.com" target="_blank" class="about-social-btn" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://linkedin.com" target="_blank" class="about-social-btn" title="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://twitter.com" target="_blank" class="about-social-btn" title="Twitter / X">
                            <i class="fab fa-x-twitter"></i>
                        </a>
                        <a href="https://youtube.com" target="_blank" class="about-social-btn" title="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
