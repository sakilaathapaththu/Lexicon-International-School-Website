@extends('layouts.app')

@section('title', 'LexCon International School')

@section('content')

    <!-- Hero Section -->
    <section class="hero text-white py-5" id="home">
        <div class="hero-slider">
            <div class="hero-slide active" style="background-image: url('{{ asset('images/hero-bg1.jpg') }}')"></div>
            <div class="hero-slide" style="background-image: url('{{ asset('images/hero-bg2.jpg') }}')"></div>
            <div class="hero-slide" style="background-image: url('{{ asset('images/hero-bg3.jpg') }}')"></div>
            <div class="hero-slide" style="background-image: url('{{ asset('images/hero-bg4.jpg') }}')"></div>
        </div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4 hero-title">Welcome to LexCon International School</h1>
                    <p class="lead mb-4 hero-subtitle">Empowering minds, shaping futures through innovative education and global perspectives</p>
                    <a href="#programs" class="btn btn-light btn-lg px-4 py-2 hero-btn">Explore Programs</a>
                </div>
            </div>
        </div>
        
        <!-- Slider Navigation Dots -->
        <div class="hero-dots">
            <span class="hero-dot active" data-slide="0"></span>
            <span class="hero-dot" data-slide="1"></span>
            <span class="hero-dot" data-slide="2"></span>
            <span class="hero-dot" data-slide="3"></span>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission py-5" id="about">
        <div class="container">
            <h2 class="text-center mb-5 display-5 fw-bold">Our Mission</h2>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="h4 mb-3 text-primary">Excellence in Education</h3>
                    <p class="mb-3">We are committed to providing world-class education that prepares students for success in an increasingly interconnected world. Our innovative approach combines traditional academic excellence with modern teaching methodologies.</p>
                    <p class="mb-4">Through personalized learning experiences and a diverse curriculum, we nurture critical thinking, creativity, and global citizenship in every student.</p>
                    <a href="#" class="btn btn-outline-primary">Learn More</a>
                </div>
                <div class="col-lg-6">
                    <div class="bg-light p-5 rounded shadow-sm text-center">
                        <h3 class="h5 mb-3 text-primary">Inspiring Excellence</h3>
                        <p class="text-muted">Classroom interaction and engagement</p>
                        <div class="bg-primary rounded-circle mx-auto" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-graduation-cap text-white fs-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="impact py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-3 display-5 fw-bold">Our Impact</h2>
            <p class="text-center text-muted mb-5">Making a difference in education and student lives worldwide</p>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card text-center border-0 shadow-sm h-100">
                        <div class="card-body py-5">
                            <div class="display-4 fw-bold text-primary mb-3">2,500+</div>
                            <div class="h5 text-muted">Students Enrolled</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center border-0 shadow-sm h-100">
                        <div class="card-body py-5">
                            <div class="display-4 fw-bold text-primary mb-3">150+</div>
                            <div class="h5 text-muted">Expert Teachers</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center border-0 shadow-sm h-100">
                        <div class="card-body py-5">
                            <div class="display-4 fw-bold text-primary mb-3">95%</div>
                            <div class="h5 text-muted">University Acceptance</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Academic Programs -->
<section class="programs py-5" id="programs">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <p class="text-muted mb-2">Comprehensive education from foundation to advanced levels</p>
                <h2 class="display-5 fw-bold mb-3">Academic Programs</h2>
                <p class="text-muted">Advanced curriculum preparing students for higher education Specialized programs for university preparation Hands-on learning with focus on real-world applications</p>
                <a href="#" class="btn btn-outline-primary">READ MORE</a>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Primary Education -->
        <div class="program-card">
            <div class="program-bg" style="background-image: url('{{ asset('images/hero-bg1.jpg') }}');"></div>
            <div class="program-overlay red-overlay">
                <div class="program-content">
                    <div class="program-number">1</div>
                    <h3 class="program-title">Primary Education</h3>
                    <p class="program-subtitle">Building strong foundations...</p>
                    <ul class="program-features">
                        <li><i class="fas fa-check"></i> Literacy & Numeracy</li>
                    </ul>
                    <a href="#" class="btn btn-warning btn-sm">Read more</a>
                </div>
            </div>
        </div>
            
            <!-- Secondary Education -->
            <div class="col-lg-6">
                <div class="program-card">
                    <div class="program-bg secondary-bg"></div>
                    <div class="program-overlay blue-overlay">
                        <div class="program-content">
                            <div class="program-number">2</div>
                            <h3 class="program-title">Secondary Education</h3>
                            <p class="program-subtitle">Foundation learning with focus on core subjects and character development</p>
                            <ul class="program-features">
                                <li><i class="fas fa-check"></i> Core Academic Excellence</li>
                                <li><i class="fas fa-check"></i> Character Development</li>
                                <li><i class="fas fa-check"></i> Science & Social Studies</li>
                                <li><i class="fas fa-check"></i> Arts & Physical Education</li>
                            </ul>
                            <a href="#" class="btn btn-warning btn-sm">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Advanced Level -->
            <div class="col-lg-6">
                <div class="program-card">
                    <div class="program-bg advanced-bg"></div>
                    <div class="program-overlay dark-overlay">
                        <div class="program-content">
                            <div class="program-number">3</div>
                            <h3 class="program-title">Advanced Level</h3>
                            <p class="program-subtitle">Foundation learning with focus on core subjects and character development</p>
                            <ul class="program-features">
                                <li><i class="fas fa-check"></i> University Preparation</li>
                                <li><i class="fas fa-check"></i> Advanced Coursework</li>
                                <li><i class="fas fa-check"></i> Research Projects</li>
                                <li><i class="fas fa-check"></i> Critical Thinking Skills</li>
                            </ul>
                            <a href="#" class="btn btn-warning btn-sm">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Advanced Level 2 -->
            <div class="col-lg-6">
                <div class="program-card">
                    <div class="program-bg advanced2-bg"></div>
                    <div class="program-overlay orange-overlay">
                        <div class="program-content">
                            <div class="program-number">4</div>
                            <h3 class="program-title">Advanced Level</h3>
                            <p class="program-subtitle">Specialized training with focus on advanced concepts and practical applications</p>
                            <ul class="program-features">
                                <li><i class="fas fa-check"></i> Specialized Subjects</li>
                                <li><i class="fas fa-check"></i> Practical Applications</li>
                                <li><i class="fas fa-check"></i> Higher Mathematics</li>
                                <li><i class="fas fa-check"></i> Science & Social Studies</li>
                            </ul>
                            <a href="#" class="btn btn-warning btn-sm">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
     <!-- Custom Home Page Styles -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    

@endsection

@section('scripts')
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Home Page Scripts -->
    <script src="{{ asset('js/home.js') }}"></script>
@endsection