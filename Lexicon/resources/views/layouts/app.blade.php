<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <title>@yield('title')</title>
    
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @yield('styles')
    
    <style>
        body {
            padding-top: 70px; /* Add top padding to prevent content from hiding behind the fixed navbar */
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }
        
        .dropdown-menu {
            margin-top: 0;
        }
        
        .dropdown-toggle::after {
            margin-left: 0.3em;
        }
    </style>
</head>
<body>

    <!-- Fixed Navigation Bar -->
    <nav class="fixed-top bg-white d-flex justify-content-between align-items-center py-3 px-4 shadow-sm" style="max-width: 100%; z-index: 1030;">
        <div style="font-size: 1.5rem; font-weight: bold; color: #e74c3c;">
            LexCon International School
        </div>
        <ul class="d-flex list-unstyled gap-4 mb-0 align-items-center">
            <li><a href="{{ url('/') }}" class="text-decoration-none text-dark fw-medium">Home</a></li>
            <li class="dropdown position-relative">
                <a href="#" class="text-decoration-none text-dark fw-medium dropdown-toggle" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    About
                </a>
                <ul class="dropdown-menu shadow-sm" aria-labelledby="aboutDropdown">
                    <li><a class="dropdown-item py-2" href="{{ url('/about') }}">About the School</a></li>
                    <li><a class="dropdown-item py-2" href="{{ url('/advisory') }}">Advisory Council</a></li>
                    <li><a class="dropdown-item py-2" href="{{ url('/about/founders-message') }}">Founder's Message</a></li>
                    <li><a class="dropdown-item py-2" href="{{ url('/about/directors-message') }}">Director's Message</a></li>
                </ul>
            </li>
            <li><a href="#programs" class="text-decoration-none text-dark fw-medium">Programs</a></li>
            <li><a href="#contact" class="text-decoration-none text-dark fw-medium">Contact</a></li>
            <li><a href="#news" class="text-decoration-none text-dark fw-medium">News & Updates</a></li>
        </ul>

    </nav>

    @yield('content')

    @yield('scripts')

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Footer -->
<footer class="bg-dark text-white py-4 mt-5">
    <div class="container text-center">
        <p class="mb-2">© 2025 LexCon International School. All Rights Reserved.</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="#facebook" class="text-white text-decoration-none">Facebook</a>
            <a href="#twitter" class="text-white text-decoration-none">Twitter</a>
            <a href="#instagram" class="text-white text-decoration-none">Instagram</a>
            <a href="#privacy" class="text-white text-decoration-none">Privacy Policy</a>
        </div>
    </div>
</footer>

</body>
</html>
