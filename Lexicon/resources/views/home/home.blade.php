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
            <h2 class="text-center mb-3 display-5 fw-bold">Academic Programs</h2>
            <p class="text-center text-muted mb-5">Comprehensive educational pathways designed to unlock every student's potential</p>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-header bg-primary text-white py-4">
                            <h3 class="h5 mb-1">Primary Education</h3>
                            <p class="mb-0 opacity-75">Foundation years (Ages 5-11)</p>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h3 class="h5 mb-3 text-primary">Primary Program</h3>
                            <p class="flex-grow-1">Building strong foundations in literacy, numeracy, and critical thinking through engaging, hands-on learning experiences.</p>
                            <a href="#" class="btn btn-outline-primary mt-auto">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-header bg-success text-white py-4">
                            <h3 class="h5 mb-1">Secondary Education</h3>
                            <p class="mb-0 opacity-75">Advanced learning (Ages 12-16)</p>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h3 class="h5 mb-3 text-success">Secondary Program</h3>
                            <p class="flex-grow-1">Comprehensive curriculum preparing students for higher education with specialized tracks in sciences, humanities, and arts.</p>
                            <a href="#" class="btn btn-outline-success mt-auto">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-header bg-info text-white py-4">
                            <h3 class="h5 mb-1">International Baccalaureate</h3>
                            <p class="mb-0 opacity-75">Global certification (Ages 16-18)</p>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h3 class="h5 mb-3 text-info">IB Diploma</h3>
                            <p class="flex-grow-1">Internationally recognized program developing inquiring, knowledgeable, and caring young people.</p>
                            <a href="#" class="btn btn-outline-info mt-auto">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-header bg-warning text-dark py-4">
                            <h3 class="h5 mb-1">STEM Excellence</h3>
                            <p class="mb-0 opacity-75">Science & Technology focus</p>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h3 class="h5 mb-3 text-warning">STEM Program</h3>
                            <p class="flex-grow-1">Advanced science, technology, engineering, and mathematics education with state-of-the-art facilities and research opportunities.</p>
                            <a href="#" class="btn btn-outline-warning mt-auto">Learn More</a>
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