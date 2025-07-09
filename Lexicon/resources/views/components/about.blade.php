@extends('layouts.app')

@section('title', 'About Us - Lexicon International School')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Lexicon International School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>
<body>
    <!-- Hero Section -->
    <section class="bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">About Lexicon International School</h1>
                    <p class="lead mb-4">Shaping tomorrow's leaders through innovative education, global perspectives, and unwavering commitment to excellence.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <span class="badge bg-light text-primary fs-6 px-3 py-2 rounded-pill">Est. 2010</span>
                        <span class="badge bg-light text-primary fs-6 px-3 py-2 rounded-pill">International Curriculum</span>
                        <span class="badge bg-light text-primary fs-6 px-3 py-2 rounded-pill">Global Community</span>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="icon-circle-lg bg-white d-inline-flex align-items-center justify-content-center rounded-circle" data-aos="zoom-in" data-aos-delay="200">
                        <i class="fas fa-graduation-cap text-primary fs-1"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- School Campus Gallery Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary mb-3" data-aos="fade-up">Our Beautiful School</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Explore our state-of-the-art facilities designed for optimal learning</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="image-overlay" data-aos="fade-right" data-aos-delay="200">
                        <img src="{{ asset('images/school/main-building.jpg') }}" alt="Main School Building" class="img-fluid gallery-image w-100">
                        <div class="overlay-content">
                            <h4 class="fw-bold">Main Academic Building</h4>
                            <p class="mb-0">Modern classrooms with smart technology</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="image-overlay mb-3" data-aos="fade-left" data-aos-delay="300">
                        <img src="{{ asset('images/school/library.jpg') }}" alt="School Library" class="img-fluid gallery-image w-100">
                        <div class="overlay-content">
                            <h5 class="fw-bold">Digital Library</h5>
                            <p class="mb-0 small">Extensive collection & study spaces</p>
                        </div>
                    </div>
                    <div class="image-overlay" data-aos="fade-left" data-aos-delay="400">
                        <img src="{{ asset('images/school/cafeteria.jpg') }}" alt="School Cafeteria" class="img-fluid gallery-image w-100">
                        <div class="overlay-content">
                            <h5 class="fw-bold">Modern Cafeteria</h5>
                            <p class="mb-0 small">Healthy meals & social spaces</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-circle-sm bg-primary text-white d-inline-flex align-items-center justify-content-center rounded-circle me-3">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <h3 class="card-title mb-0 text-primary">Our Vision</h3>
                            </div>
                            <p class="card-text text-muted">To empower students with knowledge, skills, and values to thrive in a global community, fostering innovation, leadership, and social responsibility for a better tomorrow.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-circle-sm bg-success text-white d-inline-flex align-items-center justify-content-center rounded-circle me-3">
                                    <i class="fas fa-bullseye"></i>
                                </div>
                                <h3 class="card-title mb-0 text-success">Our Mission</h3>
                            </div>
                            <p class="card-text text-muted">We strive to create a dynamic learning environment that fosters creativity, critical thinking, and a lifelong passion for learning while preparing students for global citizenship.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Showcase Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary mb-3" data-aos="fade-up">World-Class Facilities</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Discover our exceptional learning environments</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100 hover-lift">
                        <div class="image-overlay">
                            <img src="{{ asset('images/school/science-lab.jpg') }}" alt="Science Laboratory" class="card-img-top feature-image">
                            <div class="overlay-content">
                                <h5 class="fw-bold">Science Labs</h5>
                                <p class="mb-0 small">Advanced equipment for hands-on learning</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary fw-bold">Science Laboratories</h5>
                            <p class="card-text text-muted">Fully equipped physics, chemistry, and biology labs with modern instruments and safety protocols.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100 hover-lift">
                        <div class="image-overlay">
                            <img src="{{ asset('images/school/computer-lab.jpg') }}" alt="Computer Laboratory" class="card-img-top feature-image">
                            <div class="overlay-content">
                                <h5 class="fw-bold">IT Center</h5>
                                <p class="mb-0 small">Latest technology & software</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-success fw-bold">Computer Laboratory</h5>
                            <p class="card-text text-muted">State-of-the-art computers with high-speed internet and latest software for digital literacy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="card border-0 shadow-sm h-100 hover-lift">
                        <div class="image-overlay">
                            <img src="{{ asset('images/school/sports-complex.jpg') }}" alt="Sports Complex" class="card-img-top feature-image">
                            <div class="overlay-content">
                                <h5 class="fw-bold">Sports Complex</h5>
                                <p class="mb-0 small">Multi-purpose athletic facilities</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-warning fw-bold">Sports Complex</h5>
                            <p class="card-text text-muted">Multi-purpose gymnasium, swimming pool, and outdoor courts for various sports activities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary mb-3">Our Core Values</h2>
                <p class="lead text-muted">The principles that guide everything we do</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-center">
                        <div class="icon-circle bg-primary text-white d-inline-flex align-items-center justify-content-center rounded-circle mb-3">
                            <i class="fas fa-lightbulb fs-3"></i>
                        </div>
                        <h4 class="text-primary fw-bold">Innovation</h4>
                        <p class="text-muted">Embracing new ideas and creative approaches to learning and problem-solving.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-center">
                        <div class="icon-circle bg-success text-white d-inline-flex align-items-center justify-content-center rounded-circle mb-3">
                            <i class="fas fa-heart fs-3"></i>
                        </div>
                        <h4 class="text-success fw-bold">Integrity</h4>
                        <p class="text-muted">Maintaining honesty, transparency, and ethical behavior in all our interactions.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-center">
                        <div class="icon-circle bg-warning text-white d-inline-flex align-items-center justify-content-center rounded-circle mb-3">
                            <i class="fas fa-users fs-3"></i>
                        </div>
                        <h4 class="text-warning fw-bold">Inclusivity</h4>
                        <p class="text-muted">Celebrating diversity and creating an environment where everyone feels valued.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-center">
                        <div class="icon-circle bg-info text-white d-inline-flex align-items-center justify-content-center rounded-circle mb-3">
                            <i class="fas fa-trophy fs-3"></i>
                        </div>
                        <h4 class="text-info fw-bold">Excellence</h4>
                        <p class="text-muted">Striving for the highest standards in academic achievement and personal growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Student Life Gallery Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary mb-3" data-aos="fade-up">Vibrant Student Life</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Experience the dynamic community that makes learning enjoyable</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="slide-up" data-aos-delay="200">
                    <div class="image-overlay">
                        <img src="{{ asset('images/school/classroom.jpg') }}" alt="Interactive Classroom" class="img-fluid gallery-image w-100">
                        <div class="overlay-content">
                            <h5 class="fw-bold">Interactive Learning</h5>
                            <p class="mb-0 small">Engaging classroom experiences</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="slide-up" data-aos-delay="300">
                    <div class="image-overlay">
                        <img src="{{ asset('images/school/students-studying.jpg') }}" alt="Students Studying" class="img-fluid gallery-image w-100">
                        <div class="overlay-content">
                            <h5 class="fw-bold">Collaborative Learning</h5>
                            <p class="mb-0 small">Students working together</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="slide-up" data-aos-delay="400">
                    <div class="image-overlay">
                        <img src="{{ asset('images/school/extracurricular.jpg') }}" alt="Extracurricular Activities" class="img-fluid gallery-image w-100">
                        <div class="overlay-content">
                            <h5 class="fw-bold">Extracurricular</h5>
                            <p class="mb-0 small">Arts, sports & clubs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Parallax Section with Background Image -->
    <section class="parallax-section py-5 text-white" style="background-image: url('{{ asset('images/school/campus-aerial.jpg') }}');" data-aos="fade-in">
        <div class="parallax-overlay"></div>
        <div class="container position-relative">
            <div class="row text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="display-4 fw-bold mb-4" data-aos="fade-up" data-aos-delay="200">Education That Transforms Lives</h2>
                    <p class="lead mb-4" data-aos="fade-up" data-aos-delay="300">We believe every student has the potential to achieve greatness. Our nurturing environment and innovative approach help unlock that potential.</p>
                    <a href="#" class="btn btn-light btn-lg hover-lift" data-aos="fade-up" data-aos-delay="400">
                        <i class="fas fa-play me-2"></i>Watch Our Story
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- What Makes Us Different Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary mb-3">What Makes Us Different</h2>
                <p class="lead text-muted">Discover the unique advantages that set Lexicon International School apart</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100 hover-lift">
                        <div class="card-body p-4 text-center">
                            <div class="icon-circle bg-primary text-white d-inline-flex align-items-center justify-content-center rounded-circle mb-3">
                                <i class="fas fa-globe fs-3"></i>
                            </div>
                            <h5 class="card-title text-primary fw-bold mb-3">International Curriculum</h5>
                            <p class="card-text text-muted">Globally recognized programs that prepare students for worldwide opportunities and success.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100 hover-lift">
                        <div class="card-body p-4 text-center">
                            <div class="icon-circle bg-success text-white d-inline-flex align-items-center justify-content-center rounded-circle mb-3">
                                <i class="fas fa-chalkboard-teacher fs-3"></i>
                            </div>
                            <h5 class="card-title text-success fw-bold mb-3">Experienced Faculty</h5>
                            <p class="card-text text-muted">Passionate educators with international experience and advanced qualifications.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100 hover-lift">
                        <div class="card-body p-4 text-center">
                            <div class="icon-circle bg-warning text-white d-inline-flex align-items-center justify-content-center rounded-circle mb-3">
                                <i class="fas fa-laptop fs-3"></i>
                            </div>
                            <h5 class="card-title text-warning fw-bold mb-3">Modern Facilities</h5>
                            <p class="card-text text-muted">State-of-the-art classrooms, laboratories, and technology infrastructure.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="flip-left" data-aos-delay="400">
                    <div class="card border-0 shadow-sm h-100 hover-lift">
                        <div class="card-body p-4 text-center">
                            <div class="icon-circle bg-info text-white d-inline-flex align-items-center justify-content-center rounded-circle mb-3">
                                <i class="fas fa-seedling fs-3"></i>
                            </div>
                            <h5 class="card-title text-info fw-bold mb-3">Holistic Development</h5>
                            <p class="card-text text-muted">Focus on academic excellence, character building, and co-curricular activities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- School Anthem Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="text-center mb-4">
                        <div class="bg-primary text-white rounded-circle p-4 d-inline-flex align-items-center justify-content-center mb-3" style="width: 100px; height: 100px;">
                            <i class="fas fa-music fs-1"></i>
                        </div>
                        <h2 class="display-5 fw-bold text-primary mb-3">Our School Anthem</h2>
                        <p class="lead text-muted">Words that unite our community and inspire our journey</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm hover-lift">
                        <div class="card-body p-4">
                            <div class="text-center mb-4">
                                <h4 class="text-primary fw-bold mb-3">"Rise Together, Shine Forever"</h4>
                                <p class="text-muted small mb-3">Official Anthem of Lexicon International School</p>
                            </div>
                            <div class="anthem-text">
                                <div class="mb-3">
                                    <p class="text-dark mb-0 lh-lg">
                                        <strong>Verse 1:</strong><br>
                                        <em class="text-muted">In halls of learning, bright and free,<br>
                                        Where knowledge flows like endless sea,<br>
                                        Lexicon stands, our beacon bright,<br>
                                        Guiding us toward the light.</em>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <p class="text-dark mb-0 lh-lg">
                                        <strong>Chorus:</strong><br>
                                        <em class="text-muted">Rise together, shine forever,<br>
                                        United we stand, divided never,<br>
                                        With wisdom, courage, hearts so true,<br>
                                        Lexicon, we honor you!</em>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <p class="text-dark mb-0 lh-lg">
                                        <strong>Verse 2:</strong><br>
                                        <em class="text-muted">From every corner of the world,<br>
                                        Our flags of friendship are unfurled,<br>
                                        Together we learn, together we grow,<br>
                                        In excellence, we onward go.</em>
                                    </p>
                                </div>
                                <div class="text-center mt-4">
                                    <button class="btn btn-primary btn-sm hover-lift">
                                        <i class="fas fa-play me-2"></i>Listen to Anthem
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="mb-3" data-aos="fade-up" data-aos-delay="100">
                        <i class="fas fa-users mb-3" style="font-size: 3rem;"></i>
                        <h2 class="display-4 fw-bold">1,200+</h2>
                        <p class="lead mb-0">Students</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="mb-3" data-aos="fade-up" data-aos-delay="200">
                        <i class="fas fa-chalkboard-teacher mb-3" style="font-size: 3rem;"></i>
                        <h2 class="display-4 fw-bold">80+</h2>
                        <p class="lead mb-0">Expert Faculty</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="mb-3" data-aos="fade-up" data-aos-delay="300">
                        <i class="fas fa-globe mb-3" style="font-size: 3rem;"></i>
                        <h2 class="display-4 fw-bold">25+</h2>
                        <p class="lead mb-0">Nationalities</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="mb-3" data-aos="fade-up" data-aos-delay="400">
                        <i class="fas fa-award mb-3" style="font-size: 3rem;"></i>
                        <h2 class="display-4 fw-bold">15+</h2>
                        <p class="lead mb-0">Years of Excellence</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary mb-3">Our Leadership</h2>
                <p class="lead text-muted">Meet the visionary leaders guiding our educational journey</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm text-center hover-lift">
                        <div class="card-body p-4">
                            <div class="bg-light rounded-circle p-4 d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                <i class="fas fa-user-tie text-primary fs-1"></i>
                            </div>
                            <h5 class="card-title text-primary fw-bold">Dr. Sarah Johnson</h5>
                            <p class="text-muted mb-2 fw-medium">Principal</p>
                            <p class="card-text small text-muted">Educational leader with 20+ years of experience in international education and curriculum development.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm text-center hover-lift">
                        <div class="card-body p-4">
                            <div class="bg-light rounded-circle p-4 d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                <i class="fas fa-user-graduate text-primary fs-1"></i>
                            </div>
                            <h5 class="card-title text-primary fw-bold">Prof. Michael Chen</h5>
                            <p class="text-muted mb-2 fw-medium">Academic Director</p>
                            <p class="card-text small text-muted">Renowned educator specializing in innovative teaching methodologies and student assessment strategies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm text-center hover-lift">
                        <div class="card-body p-4">
                            <div class="bg-light rounded-circle p-4 d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                <i class="fas fa-user-friends text-primary fs-1"></i>
                            </div>
                            <h5 class="card-title text-primary fw-bold">Ms. Emma Thompson</h5>
                            <p class="text-muted mb-2 fw-medium">Student Affairs Director</p>
                            <p class="card-text small text-muted">Dedicated professional focusing on student wellbeing, counseling, and extracurricular development.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- School Events Gallery Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary mb-3" data-aos="fade-up">School Events & Activities</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Memorable moments that shape our school community</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="image-overlay">
                        <img src="{{ asset('images/school/graduation-ceremony.jpg') }}" alt="Graduation Ceremony" class="img-fluid gallery-image w-100">
                        <div class="overlay-content">
                            <h5 class="fw-bold">Graduation Ceremony</h5>
                            <p class="mb-0 small">Celebrating achievements & new beginnings</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-12" data-aos="fade-left" data-aos-delay="300">
                            <div class="image-overlay">
                                <img src="{{ asset('images/school/science-fair.jpg') }}" alt="Science Fair" class="img-fluid gallery-image w-100" style="height: 120px;">
                                <div class="overlay-content">
                                    <h6 class="fw-bold">Science Fair</h6>
                                    <p class="mb-0 small">Innovation showcase</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-left" data-aos-delay="400">
                            <div class="image-overlay">
                                <img src="{{ asset('images/school/cultural-festival.jpg') }}" alt="Cultural Festival" class="img-fluid gallery-image w-100" style="height: 120px;">
                                <div class="overlay-content">
                                    <h6 class="fw-bold">Cultural Festival</h6>
                                    <p class="mb-0 small">Celebrating diversity</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="image-overlay">
                        <img src="{{ asset('images/school/happy-students.jpg') }}" alt="Happy Students" class="img-fluid gallery-image w-100">
                        <div class="overlay-content">
                            <h5 class="fw-bold">Join Our Family</h5>
                            <p class="mb-0 small">Your educational journey starts here</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="display-5 fw-bold text-primary mb-3">Ready to Join Our Community?</h2>
                    <p class="lead text-muted mb-4">Discover how Lexicon International School can provide your child with a world-class education and prepare them for a successful future.</p>
                    <div class="d-flex flex-column flex-md-row gap-3">
                        <a href="#" class="btn btn-primary btn-lg hover-lift">
                            <i class="fas fa-user-plus me-2"></i>Apply Now
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-lg hover-lift">
                            <i class="fas fa-calendar me-2"></i>Schedule Visit
                        </a>
                    </div>
                    <div class="mt-4">
                        <p class="text-muted small mb-2">
                            <i class="fas fa-phone text-primary me-2"></i>+94 31 2234567
                        </p>
                        <p class="text-muted small mb-2">
                            <i class="fas fa-envelope text-primary me-2"></i>admissions@lexiconinternational.edu.lk
                        </p>
                        <p class="text-muted small">
                            <i class="fas fa-map-marker-alt text-primary me-2"></i>123 Education Lane, Negombo, Sri Lanka
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Virtual Tour Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary mb-3" data-aos="fade-up">Take a Virtual Tour</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Experience our campus from anywhere in the world</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm hover-lift">
                        <div class="image-overlay">
                            <img src="{{ asset('images/school/virtual-tour-1.jpg') }}" alt="Virtual Tour - Classrooms" class="card-img-top" style="height: 200px; object-fit: cover;">
                            <div class="overlay-content">
                                <h5 class="fw-bold">Smart Classrooms</h5>
                                <p class="mb-0 small">Interactive learning spaces</p>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <a href="#" class="btn btn-primary btn-sm">
                                <i class="fas fa-play me-2"></i>Start Tour
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm hover-lift">
                        <div class="image-overlay">
                            <img src="{{ asset('images/school/virtual-tour-2.jpg') }}" alt="Virtual Tour - Labs" class="card-img-top" style="height: 200px; object-fit: cover;">
                            <div class="overlay-content">
                                <h5 class="fw-bold">Research Labs</h5>
                                <p class="mb-0 small">Advanced scientific equipment</p>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <a href="#" class="btn btn-primary btn-sm">
                                <i class="fas fa-play me-2"></i>Start Tour
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card border-0 shadow-sm hover-lift">
                        <div class="image-overlay">
                            <img src="{{ asset('images/school/virtual-tour-3.jpg') }}" alt="Virtual Tour - Campus" class="card-img-top" style="height: 200px; object-fit: cover;">
                            <div class="overlay-content">
                                <h5 class="fw-bold">Campus Grounds</h5>
                                <p class="mb-0 small">Beautiful outdoor spaces</p>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <a href="#" class="btn btn-primary btn-sm">
                                <i class="fas fa-play me-2"></i>Start Tour
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100,
                easing: 'ease-in-out'
            });

            // Add smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Add counter animation for statistics
            const stats = document.querySelectorAll('.bg-primary .display-4');
            const observerOptions = {
                threshold: 0.7
            };

            // const observer = new IntersectionObserver((entries) => {
            //     entries.forEach(entry => {
            //         if (entry.isIntersecting) {
            //             const target = entry.target;
            //             const text = target.textContent;
            //             const number = parseInt(text.replace(/\D/g, ''));
            //             const suffix = text.replace(/\d/g, '');
                        
            //             let current = 0;
            //             const increment = number / 50;
            //             const timer = setInterval(() => {
            //                 current += increment;
            //                 if (current >= number) {
            //                     current = number;
            //                     clearInterval(timer);
            //                 }
            //                 target.textContent = Math.floor(current) + suffix;
            //             }, 30);
                        
            //             observer.unobserve(target);
            //         }
            //     });
            // }, observerOptions);

            // stats.forEach(stat => {
            //     observer.observe(stat);
            // });
        });
    </script>
</body>
</html>
@endsection