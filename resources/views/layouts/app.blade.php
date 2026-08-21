<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Dr. Muhammad Shakil Ahmad | Researcher, Trainer & Executive Coach')</title>
    <meta name="description" content="@yield('meta_description', 'Official website of Dr. Muhammad Shakil Ahmad - PhD in Management, Researcher, Academic Editor, Grant PI, and Executive Life Coach. Master Systematic Literature Review, Thematic Analysis, and Research Publication.')">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>
<body>

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
