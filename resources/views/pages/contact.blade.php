@extends('layouts.app')

@section('title', 'Contact & Advisory Inquiries | Research with Shakil')

@push('styles')
<style>
    .contact-hero-section {
        padding: 5rem 0 3.5rem 0;
        background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #0f172a 100%);
        color: #ffffff;
    }
    .contact-hero-title {
        font-family: var(--font-heading);
        font-size: 2.75rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 0.75rem;
    }
    .contact-hero-subtitle {
        color: #cbd5e1;
        max-width: 650px;
        margin: 0 auto;
        font-size: 1.05rem;
        line-height: 1.6;
    }

    /* Info Cards Grid */
    .contact-info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 1.5rem;
        margin-top: -3rem;
        margin-bottom: 4rem;
        position: relative;
        z-index: 10;
    }
    .contact-info-card {
        background: #ffffff;
        border-radius: 16px;
        border: 1px solid #e2e8f0;
        padding: 2rem 1.5rem;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
        text-align: center;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }
    .contact-info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 16px 32px rgba(30, 58, 138, 0.12);
    }
    .contact-info-icon {
        width: 60px;
        height: 60px;
        border-radius: 16px;
        background: rgba(30, 58, 138, 0.08);
        color: #1e3a8a;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin: 0 auto 1.25rem auto;
    }
    .contact-info-heading {
        font-family: var(--font-heading);
        font-size: 1.2rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 0.5rem;
    }
    .contact-info-text {
        color: #64748b;
        font-size: 0.92rem;
        line-height: 1.6;
        margin: 0;
    }

    /* FAQ Accordion */
    .faq-accordion-container {
        margin-top: 4rem;
    }
    .faq-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        margin-bottom: 1rem;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.02);
    }
    .faq-header {
        padding: 1.25rem 1.5rem;
        font-size: 1.05rem;
        font-weight: 700;
        color: #0f172a;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: space-between;
        user-select: none;
        transition: background 0.2s ease;
    }
    .faq-header:hover {
        background: #f8fafc;
    }
    .faq-header i {
        transition: transform 0.3s ease;
        color: #1e3a8a;
    }
    .faq-header.active i {
        transform: rotate(180deg);
    }
    .faq-body {
        padding: 0 1.5rem 1.25rem 1.5rem;
        color: #475569;
        font-size: 0.95rem;
        line-height: 1.65;
        display: none;
        border-top: 1px solid #f1f5f9;
        padding-top: 1rem;
    }
</style>
@endpush

@section('content')

<!-- Hero Header Banner -->
<section class="contact-hero-section">
    <div class="container text-center">
        <h1 class="contact-hero-title">Academic Mentorship & Support</h1>
        <p class="contact-hero-subtitle">
            Have questions about 1-on-1 advisory, institutional workshops, or thesis mentorship? Send an inquiry and Dr. Shakil's advisory team will respond promptly.
        </p>
    </div>
</section>

<!-- 4 Interactive Information Cards -->
<section style="background: #f8fafc; padding-bottom: 4rem;">
    <div class="container">
        
        <div class="contact-info-grid">
            <!-- Card 1: Email -->
            <div class="contact-info-card">
                <div class="contact-info-icon">
                    <i class="fas fa-envelope-open-text"></i>
                </div>
                <h3 class="contact-info-heading">Email Advisory</h3>
                <p class="contact-info-text">
                    info@researchwithshakil.com<br>
                    <span style="font-size: 0.82rem; color: #1e3a8a; font-weight: 600;">Academic Advisory Support</span>
                </p>
            </div>

            <!-- Card 3: Call Us -->
            <div class="contact-info-card">
                <div class="contact-info-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3 class="contact-info-heading">Advisory Helpline</h3>
                <p class="contact-info-text">
                    Academic Advisory Helpdesk<br>
                    Mon - Sat, 9 AM - 6 PM (GMT)
                </p>
            </div>

            <!-- Card 4: WhatsApp -->
            <div class="contact-info-card">
                <div class="contact-info-icon" style="background: #dcfce7; color: #166534;">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <h3 class="contact-info-heading">WhatsApp Support</h3>
                <p class="contact-info-text" style="margin-bottom: 0.75rem;">
                    Contact the advisory team for scheduling inquiries.
                </p>
                <a href="https://wa.me/923000000000?text=Hello%20Dr.%20Shakil,%20I%20would%20like%20to%20inquire%20about%20research%20consultation" target="_blank" style="color: #166534; font-weight: 700; font-size: 0.88rem; text-decoration: none;">
                    Start WhatsApp Message <i class="fas fa-arrow-right" style="font-size: 0.75rem;"></i>
                </a>
            </div>
        </div>

        <!-- Consultation Form Box (Compact & Well-Proportioned) -->
        <div style="max-width: 660px; margin: 0 auto; background: #ffffff; padding: 1.75rem 2rem; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 10px 30px rgba(0,0,0,0.06);">
            
            <div class="section-header text-center" style="margin-bottom: 1.25rem;">
                <div class="section-subtitle">SEND AN INQUIRY</div>
                <h2 class="section-title" style="font-size: 1.65rem; margin-bottom: 0.2rem;">Schedule a Consultation Session</h2>
                <p style="color: #64748b; font-size: 0.9rem; margin-top: 0.3rem;">
                    Fill out the form below and Dr. Shakil Ahmad's advisory team will respond promptly.
                </p>
            </div>

            <form action="{{ route('contact.store') }}" method="POST" id="contact-page-form">
                @csrf
                <div class="form-row-grid" style="margin-bottom: 1rem;">
                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label" for="name">Your Name *</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label" for="email">Email Address *</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="your.name@university.edu" required>
                    </div>
                </div>

                <div class="form-row-grid" style="margin-bottom: 1rem;">
                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label" for="whatsapp">WhatsApp Number *</label>
                        <input type="text" name="whatsapp" id="whatsapp" class="form-control" placeholder="+92 300 0000000" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label" for="academic_level">Academic Role *</label>
                        <select name="academic_level" id="academic_level" class="form-control" required>
                            <option value="PhD Candidate">PhD Candidate</option>
                            <option value="Master's Researcher">Master's Student</option>
                            <option value="University Faculty">University Faculty</option>
                            <option value="Independent Scholar">Independent Scholar</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="service_type">Select Service / Program *</label>
                    <select name="service_type" id="service_type" class="form-control" required>
                        <option value="Dissertation & Thesis Coaching">Dissertation & Thesis Coaching</option>
                        <option value="Systematic Literature Review & Meta-Analysis Consulting">Systematic Literature Review & Meta-Analysis Consulting</option>
                        <option value="Scientific Paper Writing & Journal Submission Support">Scientific Paper Writing & Journal Submission Support</option>
                        <option value="Grant Writing & Research Advisory">Grant Writing & Research Advisory</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label" for="message">Research Goal / Inquiry *</label>
                    <textarea name="message" id="message" class="form-control" placeholder="Provide details regarding thesis topic, current progress, or publication goal..." rows="3" required></textarea>
                </div>

                <div style="text-align: center; margin-top: 1.25rem;">
                    <button type="submit" class="btn-navy" style="padding: 0.7rem 2.2rem; font-size: 0.9rem; border-radius: 10px;" id="contact-submit-btn">
                        Submit Inquiry <i class="fas fa-paper-plane" style="margin-left: 6px;"></i>
                    </button>
                </div>
            </form>
        </div>

        <!-- Interactive FAQ Accordion -->
        <div class="faq-accordion-container" style="max-width: 850px; margin: 4rem auto 0 auto;">
            <div class="section-header text-center" style="margin-bottom: 2rem;">
                <div class="section-subtitle">GOT QUESTIONS?</div>
                <h2 class="section-title" style="font-size: 1.8rem;">Frequently Asked Questions</h2>
            </div>

            <div class="faq-card">
                <div class="faq-header">
                    <span>How quickly does the advisory team respond to inquiries?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-body">
                    All consultation applications are reviewed promptly. Applicants receive an email or WhatsApp message with available strategy call time slots.
                </div>
            </div>

            <div class="faq-card">
                <div class="faq-header">
                    <span>Are 1-on-1 advisory sessions conducted online or in-person?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-body">
                    1-on-1 advisory sessions are conducted online via Zoom or Microsoft Teams for international scholars across the UK, USA, Europe, Middle East, and Asia.
                </div>
            </div>

            <div class="faq-card">
                <div class="faq-header">
                    <span>Can institutional workshops be customized for an academic institution?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-body">
                    Yes. All institutional workshops and faculty capacity-building seminars are tailored to the institution's specific research domain, methodological tools (VOSviewer, Bibliometrics), and target timeline.
                </div>
            </div>

            <div class="faq-card">
                <div class="faq-header">
                    <span>How can Dr. Shakil's 18 online video bootcamps be accessed?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-body">
                    All 18 online courses can be explored on the <a href="{{ route('courses.index') }}">Courses page</a>. Clicking any course redirects directly to its dedicated course page on Udemy.
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Interactive FAQ Accordion JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const faqHeaders = document.querySelectorAll(".faq-header");

    faqHeaders.forEach(function (header) {
        header.addEventListener("click", function () {
            const body = this.nextElementSibling;
            const isOpen = body.style.display === "block";

            // Close all
            document.querySelectorAll(".faq-body").forEach(b => b.style.display = "none");
            document.querySelectorAll(".faq-header").forEach(h => h.classList.remove("active"));

            if (!isOpen) {
                body.style.display = "block";
                this.classList.add("active");
            }
        });
    });
});
</script>

@endsection
