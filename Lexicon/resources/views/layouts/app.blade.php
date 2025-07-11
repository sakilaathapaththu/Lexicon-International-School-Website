<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <title>@yield('title')</title>
    
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    @yield('styles')

</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <span class="brand-text">LexCon International School</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/about') }}">About the School</a></li>
                            <li><a class="dropdown-item" href="{{ url('/advisory') }}">Advisory Council</a></li>
                            <li><a class="dropdown-item" href="{{ url('/founder') }}">Founder's Message</a></li>
                            <li><a class="dropdown-item" href="{{ url('/director') }}">Director's Message</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#programs">Programs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">News & Updates</a>
                    </li>
                </ul>
                <div class="navbar-actions">
                    <a href="#apply" class="btn btn-primary navbar-btn">Apply Now</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Wrapper -->
    <div class="main-content">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <!-- School Information -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="footer-logo">LexCon International School</div>
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
                                info@lexconinternational.edu.lk
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-globe"></i>
                                www.lexconinternational.edu.lk
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
                            &copy; 2025 LexCon International School, Kurunegala. All rights reserved. 
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

    @yield('scripts')

    <!-- Font Awesome for Icons -->
    <script src="https://kit.fontawesome.com/your-fontawesome-key.js" crossorigin="anonymous"></script>
    
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>