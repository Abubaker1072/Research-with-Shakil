@extends('layouts.app')

@section('title', 'Research Courses, University Training & HR Consulting | Dr. Shakil Ahmad')
@section('meta_description', 'Explore research methodology courses, live university/HR training, and 1-on-1 dissertation and HR consulting with Dr. Muhammad Shakil Ahmad, PhD.')
@section('meta_keywords', 'research methodology training, dissertation consultation, PhD thesis help, HR consulting services, academic writing courses, university research workshops')

@push('styles')
<style>
    .service-card-block {
        background: #ffffff;
        border-radius: 16px;
        border: 1px solid #cbd5e1;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        padding: 1.5rem 1.75rem;
        margin-bottom: 1.75rem;
    }
    .service-card-title {
        font-family: var(--font-heading);
        font-size: 1.45rem;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 0.6rem;
    }
    .direct-answer-text {
        font-size: 1.05rem;
        color: #1e293b;
        font-weight: 600;
        line-height: 1.7;
        background: #f0f7ff;
        border-left: 4px solid #0284c7;
        padding: 1rem 1.25rem;
        border-radius: 8px;
        margin-bottom: 1.75rem;
    }
    .service-list-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
        margin-bottom: 1.75rem;
    }
    .service-list-box {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        padding: 1.25rem 1.5rem;
    }
    .service-list-box h4 {
        font-size: 1.05rem;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 0.75rem;
    }
    .service-list-box ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        font-size: 0.92rem;
        color: #334155;
    }
    .service-list-box ul li {
        display: flex;
        align-items: flex-start;
        gap: 0.5rem;
    }
    .service-list-box ul li i {
        color: #0284c7;
        margin-top: 4px;
    }
</style>
@endpush

@section('content')

<!-- Services Hero Banner -->
<section style="padding: 5rem 0 3.5rem 0; background: var(--navy-deep); color: #ffffff; border-bottom: 3px solid var(--gold);">
    <div class="container text-center" style="max-width: 900px;">
        <div style="font-size: 0.85rem; font-weight: 800; color: #fef08a; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 0.5rem;">ACADEMIC & EXECUTIVE ADVISORY</div>
        <h1 style="font-family: var(--font-heading); font-size: 2.75rem; color: #ffffff; margin-bottom: 1rem;">
            Ways to Work With Dr. Shakil Ahmad
        </h1>
        <p style="color: #e2e8f0; font-size: 1.1rem; line-height: 1.7; max-width: 750px; margin: 0 auto;">
            Dr. Shakil Ahmad offers three ways to get research and HR expertise: on-demand online courses, live training for universities and organizations, and one-on-one consultation for individual research or HR challenges.
        </p>
    </div>
</section>

<!-- Main Services Section -->
<section class="section-padding" style="background: #f8fafc;">
    <div class="container" style="max-width: 1100px;">

        <!-- 1. COURSES SECTION -->
        <div class="service-card-block reveal-card-box" id="on-demand-courses" data-delay="0">
            <div style="font-size: 0.82rem; font-weight: 800; color: #0284c7; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 0.35rem;">SERVICE OFFERING 1</div>
            <h2 class="service-card-title">Courses: On-Demand Courses in Research & Academic Writing</h2>
            
            <div class="direct-answer-text">
                Dr. Shakil Ahmad's self-paced courses teach the full research process — from formulating a research question to publishing in a peer-reviewed journal — and are available with lifetime access on Udemy.
            </div>

            <div class="service-list-grid">
                <!-- Popular Course Topics -->
                <div class="service-list-box">
                    <h4>Popular Course Topics</h4>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Research Methodology for Beginners</li>
                        <li><i class="fas fa-check-circle"></i> Writing a Winning Literature Review (PRISMA 2020)</li>
                        <li><i class="fas fa-check-circle"></i> Qualitative & Thematic Analysis</li>
                        <li><i class="fas fa-check-circle"></i> Structuring and Defending Your Thesis / Dissertation</li>
                        <li><i class="fas fa-check-circle"></i> Academic Writing & Publishing in SSCI / Scopus Journals</li>
                        <li><i class="fas fa-check-circle"></i> Research Paper Writing & Statistical Analysis</li>
                    </ul>
                </div>

                <!-- Why Students Choose These Courses -->
                <div class="service-list-box">
                    <h4>Why Students Choose These Courses</h4>
                    <ul>
                        <li><i class="fas fa-star" style="color: #eab308;"></i> Taught by a published, SSCI-indexed researcher (H-index 39)</li>
                        <li><i class="fas fa-users" style="color: #0284c7;"></i> 20,000+ students enrolled, 4.4+ average instructor rating</li>
                        <li><i class="fas fa-infinity" style="color: #166534;"></i> Lifetime access — learn on your own schedule</li>
                        <li><i class="fas fa-file-alt" style="color: #0284c7;"></i> Practical templates and frameworks applied immediately</li>
                    </ul>
                </div>
            </div>

            <div>
                <a href="{{ route('courses.index') }}" class="btn-navy" style="padding: 0.85rem 1.8rem; font-weight: 700;">
                    View All 18 Courses on Udemy <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                </a>
            </div>
        </div>

        <!-- 2. TRAININGS SECTION -->
        <div class="service-card-block reveal-card-box" id="live-trainings" data-delay="1">
            <div style="font-size: 0.82rem; font-weight: 800; color: #0284c7; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 0.35rem;">SERVICE OFFERING 2</div>
            <h2 class="service-card-title">Trainings: Live Trainings & Workshops</h2>
            
            <div class="direct-answer-text">
                Dr. Shakil Ahmad delivers live, interactive training programs for universities, departments, and organizations in research methodology, academic writing, and human resource management — tailored to each group's needs.
            </div>

            <div class="service-list-grid">
                <!-- Formats Available -->
                <div class="service-list-box">
                    <h4>Formats Available</h4>
                    <ul>
                        <li><i class="fas fa-clock"></i> Half-day and full-day intensive workshops</li>
                        <li><i class="fas fa-calendar-alt"></i> Multi-week structured training programs</li>
                        <li><i class="fas fa-university"></i> University / department-wide research writing bootcamps</li>
                        <li><i class="fas fa-briefcase"></i> Corporate HR strategy & organizational development workshops</li>
                        <li><i class="fas fa-laptop-house"></i> Online or in-person delivery</li>
                    </ul>
                </div>

                <!-- Ideal For -->
                <div class="service-list-box">
                    <h4>Ideal For</h4>
                    <ul>
                        <li><i class="fas fa-graduation-cap"></i> University research offices and postgraduate schools</li>
                        <li><i class="fas fa-user-graduate"></i> PhD and DBA cohorts preparing for thesis submission</li>
                        <li><i class="fas fa-building"></i> HR departments building capability in talent & HR strategy</li>
                        <li><i class="fas fa-chart-line"></i> Institutions seeking to raise research output & citation rates</li>
                    </ul>
                </div>
            </div>

            <p style="color: #475569; font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">
                Each training is customized after an initial consultation to match your team's current skill level and goals — no generic, one-size-fits-all content.
            </p>

            <div>
                <a href="{{ route('trainings.index') }}#training-proposal-form" class="btn-navy" style="padding: 0.85rem 1.8rem; font-weight: 700;">
                    Request a Training Proposal <i class="fas fa-paper-plane" style="margin-left: 6px;"></i>
                </a>
            </div>
        </div>

        <!-- 3. CONSULTATIONS SECTION -->
        <div class="service-card-block reveal-card-box" id="one-on-one-consultation" data-delay="2">
            <div style="font-size: 0.82rem; font-weight: 800; color: #0284c7; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 0.35rem;">SERVICE OFFERING 3</div>
            <h2 class="service-card-title">Consultations: One-on-One Consultation</h2>
            
            <div class="direct-answer-text">
                Dr. Shakil Ahmad offers personalized, one-on-one consultation for researchers, students, and organizations who need direct expert guidance on a specific dissertation, research design, or HR challenge.
            </div>

            <div class="service-list-grid">
                <!-- Consultation Areas -->
                <div class="service-list-box">
                    <h4>Consultation Areas</h4>
                    <ul>
                        <li><i class="fas fa-book"></i> Dissertation / thesis structure, methodology & defense preparation</li>
                        <li><i class="fas fa-project-diagram"></i> Research design and data analysis strategy</li>
                        <li><i class="fas fa-award"></i> Journal selection & publication strategy for SSCI / Scopus journals</li>
                        <li><i class="fas fa-file-invoice"></i> Grant and funding proposal review</li>
                        <li><i class="fas fa-user-check"></i> HR policy design and organizational innovation strategy</li>
                    </ul>
                </div>

                <!-- How It Works -->
                <div class="service-list-box">
                    <h4>How It Works</h4>
                    <ul>
                        <li><i class="fas fa-phone-alt"></i> <strong>1. Book an intro call:</strong> Share your challenge and goals.</li>
                        <li><i class="fas fa-map-signs"></i> <strong>2. Get a tailored plan:</strong> A clear roadmap for your situation.</li>
                        <li><i class="fas fa-comments"></i> <strong>3. Work session(s):</strong> Focused 1-on-1 guidance to move forward.</li>
                    </ul>
                </div>
            </div>

            <div>
                <a href="{{ route('consultation.index') }}" class="btn-navy" style="padding: 0.85rem 1.8rem; font-weight: 700;">
                    Book Your Consultation <i class="fas fa-calendar-check" style="margin-left: 6px;"></i>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- Service Schema JSON-LD -->
<script type="application/ld+json">
{
  "{{ '@context' }}": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "serviceType": "Academic Courses",
      "name": "On-Demand Research Methodology Courses",
      "provider": {
        "@type": "Person",
        "name": "Dr. Muhammad Shakil Ahmad"
      },
      "description": "Self-paced courses teaching research methodology, literature review writing, data analysis, and academic publishing on Udemy."
    },
    {
      "@type": "Service",
      "serviceType": "Corporate Training",
      "name": "Live University & HR Workshop Trainings",
      "provider": {
        "@type": "Person",
        "name": "Dr. Muhammad Shakil Ahmad"
      },
      "description": "Customized cohort-based live research training programs for universities, research centers, and HR departments."
    },
    {
      "@type": "Service",
      "serviceType": "Academic Consulting",
      "name": "One-on-One Research & HR Consultation",
      "provider": {
        "@type": "Person",
        "name": "Dr. Muhammad Shakil Ahmad"
      },
      "description": "Personalized 1-on-1 dissertation coaching, research design strategy, SSCI journal publication guidance, and HR policy consulting."
    }
  ]
}
</script>

<!-- SERVICES FREQUENTLY ASKED QUESTIONS SECTION (With FAQPage Schema) -->
<section class="section-padding" style="background: #ffffff; border-top: 1px solid #e2e8f0;">
    <div class="container" style="max-width: 900px;">
        <div class="section-header text-center" style="margin-bottom: 3rem;">
            <div class="section-subtitle">SERVICES FAQ</div>
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p style="color: var(--muted); font-size: 1rem;">
                Clear answers regarding courses, trainings, and one-on-one consultation options.
            </p>
        </div>

        <div style="display: flex; flex-direction: column; gap: 1rem;">
            
            <details style="background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 12px; padding: 1.25rem 1.5rem; cursor: pointer;">
                <summary style="font-weight: 800; font-size: 1.05rem; color: #0f172a;">
                    What is the difference between a course, a training, and a consultation?
                </summary>
                <p style="color: #475569; font-size: 0.96rem; line-height: 1.65; margin-top: 0.85rem;">
                    A course is self-paced and online, best for individual learning on Udemy. A training is a live, group program for universities or organizations. A consultation is one-on-one, focused on a specific problem or thesis project.
                </p>
            </details>

            <details style="background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 12px; padding: 1.25rem 1.5rem; cursor: pointer;">
                <summary style="font-weight: 800; font-size: 1.05rem; color: #0f172a;">
                    How much does a consultation with Dr. Shakil Ahmad cost?
                </summary>
                <p style="color: #475569; font-size: 0.96rem; line-height: 1.65; margin-top: 0.85rem;">
                    Pricing depends on the scope of the engagement. Book an intro call or submit an inquiry to receive a tailored quote based on your goals and timeline.
                </p>
            </details>

            <details style="background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 12px; padding: 1.25rem 1.5rem; cursor: pointer;">
                <summary style="font-weight: 800; font-size: 1.05rem; color: #0f172a;">
                    Are the training programs available online?
                </summary>
                <p style="color: #475569; font-size: 0.96rem; line-height: 1.65; margin-top: 0.85rem;">
                    Yes. Trainings can be delivered online via Zoom/Teams, in person on campus, or in a hybrid format depending on the institution's needs.
                </p>
            </details>

            <details style="background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 12px; padding: 1.25rem 1.5rem; cursor: pointer;">
                <summary style="font-weight: 800; font-size: 1.05rem; color: #0f172a;">
                    Do I need a background in statistics to take the research methodology courses?
                </summary>
                <p style="color: #475569; font-size: 0.96rem; line-height: 1.65; margin-top: 0.85rem;">
                    No. The courses are designed for beginners through advanced researchers, with step-by-step guidance for research design and analysis.
                </p>
            </details>

        </div>
    </div>
</section>

<!-- FAQPage JSON-LD Schema for Services Page -->
<script type="application/ld+json">
{
  "{{ '@context' }}": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is the difference between a course, a training, and a consultation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A course is self-paced and online, best for individual learning. A training is a live, group program for universities or organizations. A consultation is one-on-one, focused on a specific problem or project."
      }
    },
    {
      "@type": "Question",
      "name": "How much does a consultation with Dr. Shakil Ahmad cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Pricing depends on the scope of the engagement. Book an intro call to receive a tailored quote based on your goals."
      }
    },
    {
      "@type": "Question",
      "name": "Are the training programs available online?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Trainings can be delivered online, in person, or in a hybrid format depending on the institution's needs."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need a background in statistics to take the research methodology courses?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. The courses are designed for beginners through advanced researchers, with dedicated modules for step-by-step research execution."
      }
    }
  ]
}
</script>

<!-- NOT SURE WHERE TO START? CTA BANNER -->
<section style="background: #0f172a; color: #ffffff; padding: 4rem 0; text-align: center; border-top: 3px solid #eab308;">
    <div class="container" style="max-width: 800px;">
        <h2 style="font-family: var(--font-heading); font-size: 2.25rem; font-weight: 800; color: #ffffff; margin-bottom: 1rem;">
            Not Sure Where to Start?
        </h2>
        <p style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.65; margin-bottom: 2rem;">
            Tell me what you're working on — a thesis, a publication, an HR challenge, or a training need — and I'll point you to the right service.
        </p>
        
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="{{ route('contact.index') }}" class="btn-navy" style="background: #eab308; color: #0f172a; font-weight: 800; padding: 0.85rem 2.2rem; font-size: 1rem; border-radius: 12px; text-decoration: none;">
                Contact Me <i class="fas fa-envelope" style="margin-left: 6px;"></i>
            </a>
            <a href="{{ route('consultation.index') }}#consultation-booking-form" class="btn-navy" style="background: transparent; color: #ffffff; border: 2px solid #ffffff; font-weight: 800; padding: 0.85rem 2.2rem; font-size: 1rem; border-radius: 12px; text-decoration: none;">
                Book a Free Discovery Call <i class="fas fa-calendar-check" style="margin-left: 6px;"></i>
            </a>
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const revealObserver = new IntersectionObserver(function (entries, observer) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                const delay = parseInt(entry.target.getAttribute("data-delay") || "0", 10);
                entry.target.style.transitionDelay = (delay * 0.12) + "s";
                entry.target.classList.add("in-view");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    document.querySelectorAll(".reveal-scroll-up, .reveal-card-box").forEach(function (el) {
        revealObserver.observe(el);
    });
});
</script>

@endsection
