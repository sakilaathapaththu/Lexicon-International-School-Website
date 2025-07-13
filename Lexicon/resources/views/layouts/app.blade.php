<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <title>@yield('title')</title>
    
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

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
    <footer class="footer">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <!-- School Information -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="footer-logo">LexiCon International School</div>
                        <p class="footer-description">
                            Empowering young minds through excellence in education, innovation, and global citizenship. 
                            We nurture students to become confident, creative, and compassionate leaders of tomorrow.
                        </p>
                        <div class="accreditation-badges">
                            <span class="badge-item">Cambridge Curriculum</span>
                            <span class="badge-item">IB Authorized</span>
                            <span class="badge-item">COBIS Member</span>
                        </div>
                    </div>
                    
                    <!-- Quick Links -->
                    <div class="col-lg-2 col-md-6 mb-4">
                        <h5>Quick Links</h5>
                        <ul class="footer-links">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/about') }}">About Us</a></li>
                            <li><a href="{{ url('/programs') }}">Programs</a></li>
                            <li><a href="{{ url('/admissions') }}">Admissions</a></li>
                            <li><a href="{{ url('/news') }}">News & Events</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    
                    <!-- Academic Programs -->
                    <div class="col-lg-2 col-md-6 mb-4">
                        <h5>Programs</h5>
                        <ul class="footer-links">
                            <li><a href="{{ url('/early-years') }}">Early Years</a></li>
                            <li><a href="{{ url('/primary') }}">Primary School</a></li>
                            <li><a href="{{ url('/secondary') }}">Secondary School</a></li>
                            <li><a href="{{ url('/sixth-form') }}">Sixth Form</a></li>
                            <li><a href="{{ url('/extracurricular') }}">Extracurricular</a></li>
                            <li><a href="{{ url('/scholarships') }}">Scholarships</a></li>
                        </ul>
                    </div>
                    
                    <!-- Contact Information -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <h5>Contact Information</h5>
                        <div class="contact-info">
                            <div class="mb-3">
                                <i class="fas fa-map-marker-alt"></i>
                                No. 123, Education Lane,<br>
                                Kurunegala 60000,<br>
                                North Western Province, Sri Lanka
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-phone"></i>
                                +94 37 222 3456
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-envelope"></i>
                                info@lexiconinternational.edu.lk
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-globe"></i>
                                www.lexiconinternational.edu.lk
                            </div>
                        </div>
                        
                        <!-- Social Media Links -->
                        <div class="social-links">
                            <a href="#" aria-label="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" aria-label="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" aria-label="YouTube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <p class="mb-0">
                            &copy; 2025 LexiCon International School, Kurunegala. All rights reserved. 
                            <a href="{{ url('/privacy') }}" class="text-decoration-none">Privacy Policy</a> | 
                            <a href="{{ url('/terms') }}" class="text-decoration-none">Terms of Service</a>
                        </p>
                    </div>
                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                        <p class="mb-0 developer-credit">
                            Developed by <a href="https://blackcode.lk" target="_blank">BlackCode</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
