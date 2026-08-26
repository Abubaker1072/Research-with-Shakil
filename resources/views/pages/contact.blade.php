@extends('layouts.app')

@section('title', 'Contact & Advisory Inquiries | Dr. Muhammad Shakil Ahmad')
@section('meta_description', 'Get in touch with Dr. Muhammad Shakil Ahmad for 1-on-1 dissertation coaching, institutional research workshops, and HR strategy consulting.')

@push('styles')
<style>
    /* Global Section Design Tokens */
    :root {
        --card-radius: 20px;
        --card-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
        --card-hover-shadow: 0 20px 45px rgba(30, 58, 138, 0.14);
        --primary-navy: #0f172a;
        --accent-blue: #0284c7;
        --accent-gold: #eab308;
    }

    /* Hero Section with Ambient Gradient */
    .contact-hero-section {
        padding: 5.5rem 0 4.5rem 0;
        background: linear-gradient(135deg, #0b132b 0%, #1c2541 50%, #0f172a 100%);
        color: #ffffff;
        position: relative;
        overflow: hidden;
        border-bottom: 3px solid #eab308;
    }
    .contact-hero-section::before {
        content: '';
        position: absolute;
        width: 650px;
        height: 650px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(234, 179, 8, 0.14) 0%, rgba(0,0,0,0) 70%);
        top: -180px;
        right: -120px;
        pointer-events: none;
    }
    .contact-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        padding: 0.5rem 1.3rem;
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 30px;
        font-size: 0.82rem;
        color: #fef08a;
        font-weight: 800;
        margin-bottom: 1.5rem;
        text-transform: uppercase;
        letter-spacing: 1.2px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    .contact-hero-title {
        font-family: var(--font-heading);
        font-size: 2.85rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 0.85rem;
        line-height: 1.2;
    }
    .contact-hero-subtitle {
        color: #cbd5e1;
        max-width: 760px;
        margin: 0 auto;
        font-size: 1.1rem;
        line-height: 1.75;
    }

    /* 3 Top Interactive Information Cards */
    .contact-info-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.75rem;
        margin-top: -3.5rem;
        margin-bottom: 4rem;
        position: relative;
        z-index: 10;
    }
    .contact-info-card {
        background: #ffffff;
        border-radius: var(--card-radius);
        border: 1px solid #cbd5e1;
        padding: 2.25rem 1.75rem;
        box-shadow: var(--card-shadow);
        text-align: center;
        transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease, border-color 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 100%;
        position: relative;
        overflow: hidden;
    }
    .contact-info-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #0284c7, #eab308);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    .contact-info-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--card-hover-shadow);
        border-color: #0284c7;
    }
    .contact-info-card:hover::before {
        opacity: 1;
    }

    .contact-info-icon-box {
        width: 64px;
        height: 64px;
        border-radius: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.65rem;
        margin-bottom: 1.25rem;
    }
    .contact-info-heading {
        font-family: var(--font-heading);
        font-size: 1.25rem;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 0.5rem;
    }
    .contact-info-text {
        color: #475569;
        font-size: 0.95rem;
        line-height: 1.65;
        margin: 0;
    }
    .contact-info-subtext {
        font-size: 0.84rem;
        color: #0284c7;
        font-weight: 700;
        margin-top: 0.6rem;
        display: inline-block;
    }

    /* Main Section 2-Column Grid */
    .contact-main-grid {
        display: grid;
        grid-template-columns: 380px 1fr;
        gap: 2.5rem;
        align-items: stretch;
    }

    /* Sidebar Box */
    .contact-sidebar-card {
        background: #ffffff;
        border: 1px solid #cbd5e1;
        border-radius: var(--card-radius);
        padding: 2.25rem 1.85rem;
        box-shadow: var(--card-shadow);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }
    .contact-sidebar-img {
        width: 100%;
        height: 250px;
        border-radius: 16px;
        object-fit: cover;
        margin-bottom: 1.5rem;
        border: 1px solid #e2e8f0;
    }
    .contact-highlights-list {
        list-style: none;
        padding: 0;
        margin: 1.25rem 0 1.5rem 0;
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }
    .contact-highlights-list li {
        font-size: 0.94rem;
        color: #334155;
        font-weight: 600;
        display: flex;
        align-items: flex-start;
        gap: 0.65rem;
    }
    .contact-highlights-list li i {
        color: #0284c7;
        font-size: 0.95rem;
        margin-top: 3px;
        flex-shrink: 0;
    }

    /* Main Form Card */
    .contact-form-card {
        background: #ffffff;
        border: 1px solid #cbd5e1;
        border-radius: var(--card-radius);
        padding: 2.75rem 2.25rem;
        box-shadow: 0 15px 40px rgba(15, 23, 42, 0.06);
    }

    .form-group-label {
        font-weight: 700;
        color: #0f172a;
        font-size: 0.88rem;
        margin-bottom: 0.45rem;
        display: block;
    }
    .form-control-custom {
        width: 100%;
        height: 50px;
        border-radius: 12px;
        border: 1px solid #cbd5e1;
        padding: 0 1.1rem;
        font-size: 0.95rem;
        color: #0f172a;
        background: #f8fafc;
        transition: all 0.25s ease;
    }
    .form-control-custom:focus {
        background: #ffffff;
        border-color: #0284c7;
        box-shadow: 0 0 0 4px rgba(2, 132, 199, 0.12);
        outline: none;
    }
    textarea.form-control-custom {
        height: auto;
        padding: 1rem 1.1rem;
    }

    /* FAQ Section */
    .faq-accordion-container {
        margin-top: 4.5rem;
    }
    .faq-card {
        background: #ffffff;
        border: 1px solid #cbd5e1;
        border-radius: 16px;
        margin-bottom: 1rem;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
        transition: border-color 0.25s ease;
    }
    .faq-card:hover {
        border-color: #0284c7;
    }
    .faq-header {
        padding: 1.35rem 1.6rem;
        font-size: 1.08rem;
        font-weight: 800;
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
        color: #0284c7;
    }
    .faq-header.active i {
        transform: rotate(180deg);
    }
    .faq-body {
        padding: 0 1.6rem 1.35rem 1.6rem;
        color: #475569;
        font-size: 0.98rem;
        line-height: 1.7;
        display: none;
        border-top: 1px solid #f1f5f9;
        padding-top: 1rem;
    }

    /* Responsive Rules */
    @media (max-width: 992px) {
        .contact-info-grid {
            grid-template-columns: 1fr;
            gap: 1.25rem;
            margin-top: -2.5rem;
        }
        .contact-main-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
    }
    @media (max-width: 768px) {
        .contact-hero-section {
            padding: 4rem 1rem 3.5rem 1rem !important;
        }
        .contact-hero-title {
            font-size: 2.1rem !important;
        }
        .contact-form-card {
            padding: 1.75rem 1.25rem !important;
            border-radius: 18px !important;
        }
        .contact-sidebar-card {
            padding: 1.5rem 1.25rem !important;
            border-radius: 18px !important;
        }
    }
</style>
@endpush

@section('content')

<!-- Header Hero Banner -->
<section class="contact-hero-section">
    <div class="container text-center reveal-scroll-up">
        <div class="contact-hero-badge">
            <i class="fas fa-paper-plane"></i> DIRECT ADVISORY CHANNEL
        </div>
        <h1 class="contact-hero-title">Academic & Advisory Contact</h1>
        <p class="contact-hero-subtitle">
            Have questions about 1-on-1 dissertation coaching, institutional research workshops, or HR strategy consulting? Submit your inquiry below for direct, personalized guidance from Dr. Shakil Ahmad's team.
        </p>
    </div>
</section>

<!-- 3 Floating Information Cards -->
<section style="background: #f8fafc; padding-bottom: 4.5rem;">
    <div class="container" style="max-width: 1180px;">
        
        <div class="contact-info-grid">
            <!-- Card 1: Email Advisory -->
            <div class="contact-info-card reveal-card-box">
                <div class="contact-info-icon-box" style="background: #e0f2fe; color: #0284c7;">
                    <i class="fas fa-envelope-open-text"></i>
                </div>
                <h3 class="contact-info-heading">Direct Email Advisory</h3>
                <p class="contact-info-text">
                    <strong>info@researchwithshakil.com</strong>
                </p>
                <span class="contact-info-subtext">Primary Advisory & Inquiry Medium</span>
            </div>

            <!-- Card 2: Academic Institution -->
            <div class="contact-info-card reveal-card-box">
                <div class="contact-info-icon-box" style="background: #fef3c7; color: #d97706;">
                    <i class="fas fa-university"></i>
                </div>
                <h3 class="contact-info-heading">Academic Appointment</h3>
                <p class="contact-info-text">
                    <strong>Teesside University, UK</strong><br>
                    Teesside International Business School
                </p>
                <span class="contact-info-subtext" style="color: #d97706;">Senior Lecturer & PhD Supervisor</span>
            </div>

            <!-- Card 3: Global Virtual Consultations -->
            <div class="contact-info-card reveal-card-box">
                <div class="contact-info-icon-box" style="background: #dcfce7; color: #166534;">
                    <i class="fas fa-globe-americas"></i>
                </div>
                <h3 class="contact-info-heading">Global Virtual Advisory</h3>
                <p class="contact-info-text">
                    <strong>1-on-1 Zoom / Teams Sessions</strong>
                </p>
                <span class="contact-info-subtext" style="color: #166534;">Supporting UK, USA, EU, Asia & Gulf Scholars</span>
            </div>
        </div>

        <!-- Main 2-Column Section: Sidebar + Form -->
        <div class="contact-main-grid">
            
            <!-- Left Sidebar: About & Highlights -->
            <div class="contact-sidebar-card reveal-card-box">
                <div>
                    <img src="{{ asset('images/dr_shakil_library_suit.jpg') }}" alt="Dr. Muhammad Shakil Ahmad" class="contact-sidebar-img">
                    
                    <h3 style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 800; color: #0f172a; margin-bottom: 0.4rem;">
                        Dr. Muhammad Shakil Ahmad
                    </h3>
                    <p style="font-size: 0.88rem; color: #0284c7; font-weight: 800; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 1rem;">
                        PhD in Management | H-index 39
                    </p>
                    
                    <p style="font-size: 0.92rem; color: #475569; line-height: 1.65; margin-bottom: 1rem;">
                        UK-based research methodology expert, senior lecturer, and HR consultant with 15+ years of international academic supervision.
                    </p>

                    <ul class="contact-highlights-list">
                        <li><i class="fas fa-check-circle"></i> 16,000+ Researchers & Professionals Trained</li>
                        <li><i class="fas fa-check-circle"></i> 90+ SSCI Q1 Journal Publications</li>
                        <li><i class="fas fa-check-circle"></i> PhD & DBA Thesis Defense Mentorship</li>
                        <li><i class="fas fa-check-circle"></i> Customized Institutional Workshops</li>
                    </ul>
                </div>

                <div style="background: #f8fafc; padding: 1.1rem 1.25rem; border-radius: 14px; border: 1px solid #e2e8f0; margin-top: 1rem;">
                    <div style="font-size: 0.84rem; font-weight: 800; color: #0f172a; display: flex; align-items: center; gap: 0.4rem; margin-bottom: 0.25rem;">
                        <i class="fas fa-clock" style="color: #0284c7;"></i> Response Commitment
                    </div>
                    <div style="font-size: 0.86rem; color: #64748b; line-height: 1.5;">
                        All inquiries are reviewed directly by Dr. Shakil's advisory team within 24–48 business hours.
                    </div>
                </div>
            </div>

            <!-- Right Main Form: Clean, Aesthetic Contact Form -->
            <div class="contact-form-card reveal-card-box">
                <div style="margin-bottom: 2rem;">
                    <span style="background: #e0f2fe; color: #0369a1; padding: 0.35rem 0.9rem; border-radius: 20px; font-weight: 800; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 0.6rem;">
                        ACADEMIC INQUIRY FORM
                    </span>
                    <h2 style="font-family: var(--font-heading); font-size: 2.1rem; font-weight: 800; color: #0f172a; margin: 0 0 0.4rem 0;">
                        Send a Direct Message
                    </h2>
                    <p style="color: #64748b; font-size: 0.98rem; margin: 0;">
                        Fill in your details below and we will respond directly to your email address with recommended next steps.
                    </p>
                </div>

                <form action="{{ route('contact.store') }}" method="POST" id="contact-page-form">
                    @csrf
                    
                    <div class="form-row-grid" style="margin-bottom: 1.25rem;">
                        <div class="form-group" style="margin-bottom: 0;">
                            <label class="form-group-label" for="name">Full Name *</label>
                            <input type="text" name="name" id="name" class="form-control-custom" placeholder="e.g. Dr. Sarah Jenkins" required>
                        </div>
                        <div class="form-group" style="margin-bottom: 0;">
                            <label class="form-group-label" for="email">Email Address *</label>
                            <input type="email" name="email" id="email" class="form-control-custom" placeholder="your.name@university.edu" required>
                        </div>
                    </div>

                    <div class="form-row-grid" style="margin-bottom: 1.25rem;">
                        <div class="form-group" style="margin-bottom: 0;">
                            <label class="form-group-label" for="academic_level">Academic Role / Category *</label>
                            <select name="academic_level" id="academic_level" class="form-control-custom" required>
                                <option value="PhD Candidate">PhD / DBA Candidate</option>
                                <option value="Master's Researcher">Master's Student</option>
                                <option value="University Faculty">University Faculty</option>
                                <option value="Corporate / HR Leadership">Corporate / HR Leadership</option>
                                <option value="Independent Scholar">Independent Scholar</option>
                            </select>
                        </div>
                        <div class="form-group" style="margin-bottom: 0;">
                            <label class="form-group-label" for="service_type">Select Service / Program *</label>
                            <select name="service_type" id="service_type" class="form-control-custom" required>
                                <option value="Assistance in Proposal Writing">Assistance in Proposal Writing</option>
                                <option value="Help with the Research Publication Process">Help with the Research Publication Process</option>
                                <option value="Dissertation Writing Consultancy">Dissertation Writing Consultancy</option>
                                <option value="Systematic Literature Review Support">Systematic Literature Review Support</option>
                                <option value="Live Institutional Training Proposal">Live Institutional Training Proposal</option>
                                <option value="Workplace Policy Design & Review">Workplace Policy Design & Review</option>
                                <option value="Organizational Innovation Consulting">Organizational Innovation Consulting</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" style="margin-bottom: 1.75rem;">
                        <label class="form-group-label" for="message">Research Goal / Project Details *</label>
                        <textarea name="message" id="message" class="form-control-custom" placeholder="Describe your thesis topic, research challenge, target journal, or institutional training requirements..." rows="5" required></textarea>
                    </div>

                    <div style="text-align: right;">
                        <button type="submit" class="btn-navy" style="padding: 0.95rem 2.6rem; font-size: 0.98rem; border-radius: 12px; font-weight: 800; cursor: pointer; display: inline-flex; align-items: center; gap: 0.6rem;" id="contact-submit-btn">
                            <span>Submit Academic Inquiry</span> <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <!-- Interactive FAQ Accordion -->
        <div class="faq-accordion-container" style="max-width: 960px; margin-left: auto; margin-right: auto;">
            <div class="section-header text-center" style="margin-bottom: 2.25rem;">
                <div class="section-subtitle">COMMON QUESTIONS</div>
                <h2 class="section-title" style="font-size: 2rem;">Frequently Asked Questions</h2>
            </div>

            <div class="faq-card reveal-card-box">
                <div class="faq-header">
                    <span>How quickly will I receive a response to my inquiry?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-body">
                    All consultation applications are reviewed directly by Dr. Shakil Ahmad's advisory team. Applicants receive an email response with recommended service options and available strategy call time slots within 24 to 48 business hours.
                </div>
            </div>

            <div class="faq-card reveal-card-box">
                <div class="faq-header">
                    <span>How are 1-on-1 advisory sessions conducted?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-body">
                    1-on-1 advisory sessions are held virtually via Zoom or Microsoft Teams. This allows seamless video collaboration, screen sharing for thesis/paper drafts, and flexible scheduling across different time zones worldwide.
                </div>
            </div>

            <div class="faq-card reveal-card-box">
                <div class="faq-header">
                    <span>Can institutional workshops be customized for our university or department?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-body">
                    Yes. Every institutional workshop or faculty bootcamp is customized after an initial scoping call to align with your institution's specific research area, methodological tools (e.g. SPSS, SmartPLS, NVivo, VOSviewer), and target outcomes.
                </div>
            </div>

            <div class="faq-card reveal-card-box">
                <div class="faq-header">
                    <span>Where can I access Dr. Shakil's self-paced online courses?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-body">
                    All 18 self-paced online courses in research methodology, academic publishing, and systematic literature review are hosted on Udemy with lifetime access. You can browse the full catalog on our <a href="{{ route('courses.index') }}" style="color: #0284c7; font-weight: 700;">Courses Page</a>.
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Interactive Accordion & Reveal JS -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    // FAQ Accordion
    const faqHeaders = document.querySelectorAll(".faq-header");
    faqHeaders.forEach(function (header) {
        header.addEventListener("click", function () {
            const body = this.nextElementSibling;
            const isOpen = body.style.display === "block";

            document.querySelectorAll(".faq-body").forEach(b => b.style.display = "none");
            document.querySelectorAll(".faq-header").forEach(h => h.classList.remove("active"));

            if (!isOpen) {
                body.style.display = "block";
                this.classList.add("active");
            }
        });
    });

    // Reveal Animation
    const revealObserver = new IntersectionObserver(function (entries, observer) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add("in-view");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll(".reveal-scroll-up, .reveal-card-box").forEach(function (el) {
        revealObserver.observe(el);
    });
});
</script>

@endsection
