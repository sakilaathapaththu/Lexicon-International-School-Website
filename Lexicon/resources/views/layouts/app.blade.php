<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <title>@yield('title')</title>
    
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    @yield('styles')
    
    <style>
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

    <!-- Navigation Bar -->
    <nav class="d-flex justify-content-between align-items-center py-3 px-4 mx-auto" style="max-width: 1200px;">
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
                    <li><a class="dropdown-item py-2" href="{{ url('/about/advisory-council') }}">Advisory Council</a></li>
                    <li><a class="dropdown-item py-2" href="{{ url('/about/founders-message') }}">Founder's Message</a></li>
                    <li><a class="dropdown-item py-2" href="{{ url('/about/directors-message') }}">Director's Message</a></li>
                </ul>
            </li>
            <li><a href="#programs" class="text-decoration-none text-dark fw-medium">Programs</a></li>
            <li><a href="#contact" class="text-decoration-none text-dark fw-medium">Contact</a></li>
        </ul>
        <a href="#apply" class="btn btn-danger rounded-pill fw-medium px-4 py-2">Apply Now</a>
    </nav>

    @yield('content')

    @yield('scripts')

    <!-- Bootstrap JS Bundle (optional, if you need JS features like dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>