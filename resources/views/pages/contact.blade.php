@extends('layouts.app')

@section('title', 'Contact Us | Research with Shakil')

@section('content')

@include('partials.under-development-banner')

<!-- MDi Style Contact Page Hero (Matching User Image 1 Exactly) -->
<section class="mdi-contact-hero-wrapper">
    <div class="container">
        <div class="mdi-contact-banner-container">
            <!-- Overlapping White Query Card -->
            <div class="mdi-contact-overlay-box">
               
                <h1 class="mdi-query-heading">We're here for you</h1>
                <p class="mdi-query-subtext">Comments or questions are welcome.</p>

                <div class="mdi-contact-info-list">
                    <!-- Location Item -->
                    <div class="mdi-contact-item">
                        <i class="fas fa-map-marker-alt mdi-contact-icon"></i>
                        <div>
                            <div class="mdi-contact-title">Location</div>
                            <div class="mdi-contact-desc">
                                ORIC Leadership Complex, Street 1-A,<br>
                                Research Enclave, Islamabad, Pakistan
                            </div>
                        </div>
                    </div>

                    <!-- Email Item -->
                    <div class="mdi-contact-item">
                        <i class="fas fa-envelope-open-text mdi-contact-icon"></i>
                        <div>
                            <div class="mdi-contact-title">Email us</div>
                            <div class="mdi-contact-desc">
                                info@researchwithshakil.com
                            </div>
                        </div>
                    </div>

                    <!-- Call Us Item -->
                    <div class="mdi-contact-item">
                        <i class="fas fa-phone-alt mdi-contact-icon"></i>
                        <div>
                            <div class="mdi-contact-title">Call us</div>
                            <div class="mdi-contact-desc">
                                +92 300 0000000 | 051 8480200
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Consultation Inquiry Form Section -->
<section class="section-padding" style="background: var(--bg-main);">
    <div class="container" style="max-width: 850px;">
        <div class="glass-card" style="padding: 3rem;">
            <div class="section-header" style="margin-bottom: 2rem;">
                <div class="section-subtitle">Send Your Inquiry</div>
                <h2 class="section-title">Schedule a Consultation Session</h2>
                <p style="color: #64748b; font-size: 0.95rem;">
                    Please fill out the form below and Dr. Shakil Ahmad's advisory team will respond within 24 hours.
                </p>
            </div>

            <form action="{{ route('contact.store') }}" method="POST" id="contact-page-form">
                @csrf
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem;">
                    <div class="form-group">
                        <label class="form-label" for="name">Your Name *</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">Email Address *</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem;">
                    <div class="form-group">
                        <label class="form-label" for="whatsapp">WhatsApp Number *</label>
                        <input type="text" name="whatsapp" id="whatsapp" class="form-control" placeholder="+92 300 0000000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="academic_level">Academic Role *</label>
                        <select name="academic_level" id="academic_level" class="form-control" required>
                            <option value="PhD Candidate">PhD Candidate</option>
                            <option value="Master's Researcher">Master's Student</option>
                            <option value="University Faculty">University Faculty</option>
                            <option value="Other">Other Scholar</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="service_type">Select Service *</label>
                    <select name="service_type" id="service_type" class="form-control" required>
                        <option value="Dissertation & Thesis Coaching">Dissertation & Thesis Coaching</option>
                        <option value="Systematic Literature Review & Meta-Analysis Consulting">Systematic Literature Review & Meta-Analysis Consulting</option>
                        <option value="Scientific Paper Writing & Journal Submission Support">Scientific Paper Writing & Journal Submission Support</option>
                        <option value="Grant Writing & Research Advisory">Grant Writing & Research Advisory</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label" for="message">Your Research Goal / Inquiry *</label>
                    <textarea name="message" id="message" class="form-control" placeholder="Provide details about your thesis or paper publication goal..." required></textarea>
                </div>

                <div style="text-align: center; margin-top: 1.5rem;">
                    <button type="submit" class="btn-mdi" style="padding: 0.9rem 2.5rem;" id="contact-submit-btn">
                        Submit Inquiry
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
