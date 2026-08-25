<footer class="footer-navy">
    <div class="container">
        <div class="footer-grid-navy">
            <!-- Col 1: Academic & Contact Details -->
            <div>
                <h4 class="footer-col-title" style="margin-top: 0;">Contact & Advisory</h4>
                <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7; margin-bottom: 0.75rem;">
                    Research Methodology & Academic Advisory
                </p>
                <p style="color: #cbd5e1; font-size: 0.92rem; margin-bottom: 0.75rem;">
                    <strong>Email</strong> info@researchwithshakil.com
                </p>
                <p style="margin-bottom: 1.5rem;">
                    <a href="{{ route('contact.index') }}" style="color: var(--gold); font-size: 0.88rem; text-decoration: underline;">Contact & Advisory Inquiry</a>
                </p>
            </div>

            <!-- Col 2: Offerings -->
            <div>
                <h4 class="footer-col-title">Offerings</h4>
                <ul class="footer-links-list">
                    <li><a href="{{ route('courses.index') }}">All Online Courses</a></li>
                    <li><a href="{{ route('services.index') }}">Consultancy Services</a></li>
                    <li><a href="{{ route('trainings.index') }}">Institutional Trainings</a></li>
                    <li><a href="{{ route('consultation.index') }}">1-on-1 Consultation</a></li>
                    <li><a href="{{ route('consultation.index') }}#consultation-booking-form">Dissertation Mentorship</a></li>
                </ul>
            </div>

            <!-- Col 3: Resources -->
            <div>
                <h4 class="footer-col-title">Resources</h4>
                <ul class="footer-links-list">
                    <li><a href="https://scholar.google.com/citations?user=Kr6MOa0AAAAJ&hl=en&oi=ao" target="_blank">Google Scholar Profile</a></li>
                    <li><a href="https://www.udemy.com/user/dr-muhammad-shakil-ahmad/" target="_blank">Udemy Instructor Profile</a></li>
                    <li><a href="{{ route('publications.index') }}">Research Publications</a></li>
                    <li><a href="{{ route('publications.index') }}?type=grant">Grants</a></li>
                    <li><a href="{{ route('admin.inquiries') }}">Admin Portal</a></li>
                </ul>
            </div>

            <!-- Col 4: About -->
            <div>
                <h4 class="footer-col-title">About</h4>
                <ul class="footer-links-list">
                    <li><a href="{{ route('about') }}">Dr. Shakil Ahmad Bio</a></li>
                    <li><a href="{{ route('about') }}#qualifications">Academic Qualifications</a></li>
                    <li><a href="{{ route('about') }}#teaching-experience">Teaching & Research Advisory</a></li>
                    <li><a href="{{ route('consultation.index') }}">Booking & Consultation</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="footer-bottom-bar">
            <div>
                Copyright &copy; {{ date('Y') }} Research with Shakil | All rights reserved
            </div>
            
            <div style="display: flex; gap: 1.25rem; font-size: 0.88rem;">
                <a href="{{ route('about') }}" style="color: #cbd5e1;">Privacy Policy</a>
                <span style="color: #475569;">|</span>
                <a href="{{ route('contact.index') }}" style="color: #cbd5e1;">Contact</a>
            </div>

            <!-- Social Icon Boxes -->
            <div class="footer-social-boxes">
                <a href="https://scholar.google.com/citations?user=Kr6MOa0AAAAJ&hl=en&oi=ao" target="_blank" class="social-box-icon" title="Google Scholar"><i class="fas fa-graduation-cap"></i></a>
                <a href="https://www.udemy.com/user/dr-muhammad-shakil-ahmad/" target="_blank" class="social-box-icon" title="Udemy"><i class="fab fa-udemy"></i></a>
                <a href="https://twitter.com" target="_blank" class="social-box-icon" title="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://linkedin.com" target="_blank" class="social-box-icon" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</footer>
