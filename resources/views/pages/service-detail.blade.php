@extends('layouts.app')

@section('title', $service->title . ' | Dr. Muhammad Shakil Ahmad')

@push('styles')
<style>
    .service-detail-hero {
        background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%);
        color: #ffffff;
        padding: 4rem 0 3rem 0;
    }
    .service-detail-title {
        font-family: var(--font-heading);
        font-size: 2.25rem;
        font-weight: 800;
        margin-bottom: 1rem;
    }
    .service-detail-desc {
        font-size: 1.1rem;
        color: #cbd5e1;
        max-width: 800px;
        line-height: 1.6;
    }
    .btn-book-service {
        display: inline-block;
        background: var(--gold, #d97706);
        color: #ffffff;
        font-weight: 700;
        padding: 0.85rem 1.75rem;
        border-radius: 12px;
        text-decoration: none;
        margin-top: 1.5rem;
        transition: all 0.2s ease;
    }
    .btn-book-service:hover {
        background: #b45309;
        color: #ffffff;
        transform: translateY(-2px);
    }
</style>
@endpush

@section('content')
<section class="service-detail-hero">
    <div class="container">
        <div style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 1.5rem;">
            <a href="{{ route('home') }}" style="color: #cbd5e1; text-decoration: none;">Home</a> / <a href="{{ route('services.index') }}" style="color: #cbd5e1; text-decoration: none;">Services</a> / <span>{{ $service->title }}</span>
        </div>
        <h1 class="service-detail-title">{{ $service->title }}</h1>
        <p class="service-detail-desc">{{ $service->short_description ?? $service->description }}</p>
        <a href="{{ route('consultation.index') }}" class="btn-book-service">
            Book Consultation for this Service <i class="fas fa-arrow-right"></i>
        </a>
    </div>
</section>

<section style="padding: 4rem 0; background: #f8fafc;">
    <div class="container">
        <div style="display: flex; flex-wrap: wrap; gap: 2.5rem;">
            <div style="flex: 2; min-width: 300px;">
                <div style="background: #ffffff; padding: 2rem; border-radius: 16px; border: 1px solid #e2e8f0; margin-bottom: 2rem; line-height: 1.7; color: #334155;">
                    <h2 style="font-size: 1.4rem; font-weight: 700; color: #0f172a; margin-bottom: 1rem;">Service Overview</h2>
                    <p>{{ $service->full_description ?? $service->description }}</p>
                </div>

                @if($otherServices->count() > 0)
                <div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: #0f172a; margin-bottom: 1rem;">Other Consultancy Services</h3>
                    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 1rem;">
                        @foreach($otherServices as $other)
                        <div style="background: #ffffff; padding: 1.25rem; border-radius: 12px; border: 1px solid #e2e8f0;">
                            <h4 style="font-size: 1rem; font-weight: 700; color: #0f172a; margin-bottom: 0.5rem;">{{ $other->title }}</h4>
                            <p style="font-size: 0.85rem; color: #64748b; margin-bottom: 1rem;">{{ Str::limit($other->description, 90) }}</p>
                            <a href="{{ route('services.show', $other->slug) }}" style="color: #1e3a8a; font-weight: 700; font-size: 0.88rem; text-decoration: none;">Explore Service <i class="fas fa-arrow-right"></i></a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <div style="flex: 1; min-width: 280px;">
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 1.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.05); sticky: top: 100px;">
                    <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 1rem;">Need Personalized Advisory?</h3>
                    <p style="font-size: 0.9rem; color: #64748b; margin-bottom: 1.5rem;">Schedule a 1-on-1 session with Dr. Muhammad Shakil Ahmad to get customized guidance for your research or organization.</p>
                    <a href="{{ route('contact.index') }}" class="btn-navy" style="display: block; text-align: center; text-decoration: none; padding: 0.85rem; border-radius: 10px; font-weight: 700;">
                        Contact Dr. Shakil <i class="fas fa-paper-plane" style="margin-left: 4px;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
