<footer class="footer-navy">
    <div class="container">
        <div class="footer-grid-navy">
            <!-- Col 1: Address & Contact Details -->
            <div>
                <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7; margin-bottom: 0.75rem;">
                    Research with Shakil, ORIC Leadership Complex<br>
                    Street 1-A, Research Enclave, Islamabad
                </p>
                <p style="color: #cbd5e1; font-size: 0.92rem; margin-bottom: 0.5rem;">
                    <strong>Tel</strong> +92 300 0000000 | 051 8480200
                </p>
                <p style="color: #cbd5e1; font-size: 0.92rem; margin-bottom: 0.75rem;">
                    <strong>Email</strong> info@researchwithshakil.com
                </p>
                <p style="margin-bottom: 1.5rem;">
                    <a href="{{ route('contact.index') }}" style="color: var(--gold); font-size: 0.88rem; text-decoration: underline;">View on Google Map</a>
                </p>

                <h4 class="footer-col-title" style="margin-bottom: 0;">Contact Us</h4>
            </div>

            <!-- Col 2: Programs -->
            <div>
                <h4 class="footer-col-title">Programs</h4>
                <ul class="footer-links-list">
                    <li><a href="{{ route('services.index') }}">Systematic Literature Review</a></li>
                    <li><a href="{{ route('services.index') }}">Thematic & Qualitative Analysis</a></li>
                    <li><a href="{{ route('services.index') }}">Meta-Analysis Coaching</a></li>
                    <li><a href="{{ route('services.index') }}">Dissertation Writing Bootcamp</a></li>
                </ul>
            </div>

            <!-- Col 3: Resources -->
            <div>
                <h4 class="footer-col-title">Resources</h4>
                <ul class="footer-links-list">
                    <li><a href="https://www.udemy.com/user/dr-muhammad-shakil-ahmad/" target="_blank">Udemy 18 Courses Profile</a></li>
                    <li><a href="{{ route('publications.index') }}">Research Publications</a></li>
                    <li><a href="{{ route('publications.index') }}">Oman & HEC Grants</a></li>
                    <li><a href="{{ route('admin.inquiries') }}">Admin Portal</a></li>
                </ul>
            </div>

            <!-- Col 4: About -->
            <div>
                <h4 class="footer-col-title">About</h4>
                <ul class="footer-links-list">
                    <li><a href="{{ route('about') }}">Dr. Shakil Ahmad Bio</a></li>
                    <li><a href="{{ route('about') }}">ASPA Young Scholar Award</a></li>
                    <li><a href="{{ route('about') }}">ORIC Leadership</a></li>
                    <li><a href="{{ route('contact.index') }}">Booking & Consultation</a></li>
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
                <a href="{{ route('contact.index') }}" style="color: #cbd5e1;">Contact us</a>
            </div>

            <!-- Social Icon Boxes -->
            <div class="footer-social-boxes">
                <a href="https://facebook.com" target="_blank" class="social-box-icon" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://instagram.com" target="_blank" class="social-box-icon" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com" target="_blank" class="social-box-icon" title="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://linkedin.com" target="_blank" class="social-box-icon" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</footer>
