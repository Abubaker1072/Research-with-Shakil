<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Dr. Shakil Ahmad | Research Methodology Courses, Training & HR Consulting')</title>
    <meta name="description" content="@yield('meta_description', 'Dr. Muhammad Shakil Ahmad, PhD, is a UK-based research methodology expert and HR consultant with 16,000+ learners trained. Explore courses, trainings & consultations.')">
    <meta name="keywords" content="@yield('meta_keywords', 'research methodology courses online, dissertation coach, PhD research training, academic writing consultant, HR consultant UK, thesis writing help, Dr. Shakil Ahmad')">
    
    <!-- Structured Data: Global Person Schema (AEO / GEO / SEO) -->
    <script type="application/ld+json">
    {
      "{{ '@context' }}": "https://schema.org",
      "@type": "Person",
      "name": "Dr. Muhammad Shakil Ahmad",
      "jobTitle": "Senior Lecturer",
      "worksFor": {
        "@type": "CollegeOrUniversity",
        "name": "Teesside University",
        "department": "Teesside International Business School"
      },
      "alumniOf": {
        "@type": "CollegeOrUniversity",
        "name": "PhD in Management"
      },
      "description": "Dr. Muhammad Shakil Ahmad is a Senior Lecturer at Teesside International Business School, Teesside University (UK), research methodology, project management, and HR expert with 90+ SSCI publications and 16,000+ global learners.",
      "sameAs": [
        "https://www.udemy.com/user/dr-muhammad-shakil-ahmad/",
        "https://scholar.google.com/citations?user=Kr6MOa0AAAAJ&hl=en&oi=ao"
      ]
    }
    </script>

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>
<body>

    <!-- Top Red Announcement Banner -->
    @include('partials.under-development-banner')

    <!-- Header Navigation -->
    @include('partials.navbar')

    <!-- Flash Notifications -->
    @if(session('success'))
        <div class="container" style="margin-top: 100px; margin-bottom: -60px;">
            <div class="alert alert-success">
                <i class="fas fa-check-circle" style="font-size: 1.25rem;"></i>
                <div>
                    <strong>Success!</strong> {{ session('success') }}
                    @if(session('whatsapp_url'))
                        <div style="margin-top: 0.5rem;">
                            <a href="{{ session('whatsapp_url') }}" target="_blank" class="btn btn-whatsapp" style="padding: 0.4rem 1rem; font-size: 0.85rem;">
                                <i class="fab fa-whatsapp"></i> Continue on WhatsApp
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endif

    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- Floating WhatsApp CTA -->
    @include('partials.whatsapp-button')

    <!-- Footer Area -->
    @include('partials.footer')

    <!-- Custom JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
