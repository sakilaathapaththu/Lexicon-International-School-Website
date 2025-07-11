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
     <!-- General -->
    <section>
    <div class="general-container">
        <div class="row-g">
        <!-- Left side (light background with heading) -->
        <div class="left-side">
            <h1>
            LexCon is the largest network of International Schools in Sri Lanka with over 25,000+ students and over 3,300+ teachers in total and growing!
            </h1>
        </div>
        
        <!-- Right side (dark background with text) -->
        <div class="right-side">
            <p>At LexCon International School you can:</p>
            <ul>
            <li>Learn from skilled and talented teachers.</li>
            <li>Receive International Educational Certificates.</li>
            <li>Achieve your utmost potential.</li>
            <li>Be a part of a community of inspired, intellectual and talented individuals.</li>
            </ul>
            <p>
            We utilize the best practices available in teaching to develop the skills required for success in higher education.
            </p>
        </div>
        </div>
    </div>
    </section>

    
    <!-- About Section With Background Image -->
    <section class="about-LexCon-section position-relative text-white" style="background-image: url('{{ asset('images/about-lexcon.jpg') }}'); background-size: cover; background-position: center; min-height:150px;">
        <!-- Dark Overlay -->
        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.4);"></div>

        <!-- Centered Box With Space From Top -->
        <div class="container position-relative z-2 h-100 d-flex justify-content-center align-items-start">
            <div class="bg-dark bg-opacity-75 text-white p-4 p-md-5 rounded shadow" style="margin-top: 220px; max-width: 1200px;">
                <h2 class="fw-bold mb-3">About LexCon</h2>
                <p class="mb-3">
                    At LexCon International School, we empower students with knowledge, confidence, and compassion. Our community nurtures each learner through a blend of academic excellence, cultural values, and global perspectives.
                </p>
                <p class="mb-4">
                    Guided by experienced educators and an inclusive vision, LexCon prepares students to succeed in both local and international arenas — from early childhood to advanced levels.
                </p>
                <a href="#about-details" class="btn btn-light btn-sm">Read Full Story <i class="fas fa-arrow-right ms-1"></i></a>
            </div>
        </div>
    </section>
    <!-- Our Mission Section -->
    <section class="about-us-section py-5" id="about">
        <div class="container">
                      <div class="section-title">
                <h2>Our Mission</h2>
                <p>Making a difference in education and student lives worldwide</p>
            </div>
            <div class="row align-items-center">
                <!-- Left: Image -->
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="{{ asset('images/hero-bg1.jpg') }}" alt="About LexCon" class="img-fluid rounded shadow">
                    </div>

                    <!-- Right: Text -->
                    <div class="col-md-6">
                        <h2 class="display-5 fw-bold mb-4">About LexCon International School</h2>
                        <p class="text-muted mb-3">At LexCon, we believe in nurturing future leaders through a holistic, globally-aligned education. Our mission is to empower students to reach their full potential in an environment that fosters critical thinking, creativity, and collaboration.</p>
                        <p class="text-muted mb-4">With state-of-the-art facilities, a committed faculty, and a vibrant learning community, LexCon offers a unique educational experience that prepares students for success in the modern world.</p>
                        <a href="#mission" class="btn btn-outline-primary px-4 py-2">Our Mission</a>
                    </div>
                </div>
            </div>
        </section>

    <!-- Mission Section -->
    <!-- <section class="mission py-5" id="about">
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
    </section> -->

    <!-- Impact Section -->
    <section class="impact py-5 bg-light">
        <div class="container">
                        <div class="section-title">
                <h2>Our Impact</h2>
                <p>NMaking a difference in education and student lives worldwide</p>
            </div>
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
            <div class="row mb-4">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="section-title">
                        <h2>Academic Programs</h2>
                        <p>Advanced curriculum preparing students for higher education. Specialized programs for university preparation. Foundation learning with focus on core subjects and character development
                        </p>
                        <!-- <a href="#" class="btn btn-outline-primary mt-3">READ MORE</a> -->
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Primary Education - Big Box -->
                <div class="col-lg-8">
                    <div class="program-card h-100">
                        <div class="program-bg" style="background-image: url('{{ asset('images/hero-bg1.jpg') }}');"></div>
                        <div class="program-overlay red-overlay">
                            <div class="program-content" style="color: white;">
                                <div class="program-number">1</div>
                                <h3 class="program-title">Primary Education</h3>
                                <p class="program-subtitle">Foundation learning with focus on core subjects and character development</p>
                                <a href="#" class="btn btn-warning btn-sm">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Secondary Education - Small Box Right -->
                <div class="col-lg-4">
                    <div class="program-card h-100">
                        <div class="program-bg secondary-bg" style="background-image: url('{{ asset('images/hero-bg1.jpg') }}');"></div>
                        <div class="program-overlay blue-overlay">
                            <div class="program-content" style="color: white;">
                                <div class="program-number">2</div>
                                <h3 class="program-title">Secondary Education</h3>
                                <p class="program-subtitle">Foundation learning with focus on core subjects and character development</p>
                                <ul class="program-features">
                                    <li><i class="fas fa-check"></i> English & Mathematics</li>
                                    <li><i class="fas fa-check"></i> Science & Social Studies</li>
                                    <li><i class="fas fa-check"></i> Arts & Physical Education</li>
                                    <li><i class="fas fa-check"></i> Character Development</li>
                                </ul>
                                <a href="#" class="btn btn-warning btn-sm">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Advanced Level (Left Small Box) -->
                <div class="col-lg-6">
                    <div class="program-card h-100">
                        <div class="program-bg" style="background-image: url('{{ asset('images/hero-bg1.jpg') }}');"></div>
                        <div class="program-overlay dark-overlay">
                            <div class="program-content" style="color: white;">
                                <div class="program-number">3</div>
                                <h3 class="program-title">Advanced Level</h3>
                                <p class="program-subtitle">Foundation learning with focus on core subjects and character development</p>
                                <ul class="program-features">
                                    <li><i class="fas fa-check"></i> English & Mathematics</li>
                                    <li><i class="fas fa-check"></i> Science & Social Studies</li>
                                    <li><i class="fas fa-check"></i> Arts & Physical Education</li>
                                    <li><i class="fas fa-check"></i> Character Development</li>
                                </ul>
                                <a href="#" class="btn btn-warning btn-sm">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Advanced Level (Right Small Box) -->
                <div class="col-lg-6">
                    <div class="program-card h-100">
                        <div class="program-bg" style="background-image: url('{{ asset('images/hero-bg2.jpg') }}');"></div>
                        <div class="program-overlay orange-overlay">
                            <div class="program-content" style="color: white;">
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

    <!-- News Cards -->
    <section class="news-updates py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="section-title">
                    <h2>What's New with Lyceum</h2>
                    <p>News & Updates</p>
                </div>

            </div>
            <div class="row g-4">
                <!-- News Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm border-0 news-card">
                        <div class="card-img-container">
                            <img src="{{ asset('images/hero-bg1.jpg') }}" class="card-img-top" alt="News Image">
                            <div class="overlay-content">
                                <h5 class="card-title">Celebrating Excellence: Mr. Madhura Loku Kaluge Named Pearson </h5>
                                <p class="card-text" >Celebrating excellence and innovation in education with Mr. Madhura Loku Kaluge being named Pearson Edexcel Innovator of the Year.</p>
                                <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm border-0 news-card">
                        <div class="card-img-container">
                            <img src="{{ asset('images/hero-bg2.jpg') }}" class="card-img-top" alt="News Image">
                            <div class="overlay-content">
                                <h5 class="card-title">Lyceum Nugegoda 2025: A Dazzling Display of Creativity at Lyceum Nugegoda</h5>
                                <p class="card-text">A dazzling display of creativity and talent at Lyceum Nugegoda, showcasing the skills of our students in various fields.</p>
                                <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm border-0 news-card">
                        <div class="card-img-container">
                            <img src="{{ asset('images/hero-bg3.jpg') }}" class="card-img-top" alt="News Image">
                            <div class="overlay-content">
                                <h5 class="card-title">"Knots for Life" Workshop Empowers Young Learners at Lyceum International School, Nugegoda</h5>
                                <p class="card-text">The "Knots for Life" workshop inspired young learners to explore creativity and skills through unique hands-on experiences.</p>
                                <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- More News Cards -->
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-light btn-sm">View All News</a>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="photo-gallery py-5 bg-light" id="gallery">
    <div class="container">
        <div class="section-title text-center mb-4">
        <h2>Gallery</h2>
        <p>Explore moments from our vibrant school life and international events</p>
        </div>
        <div class="row g-4">
        <!-- 12 images -->
        <div class="col-5th">
            <div class="gallery-item">
            <img src="images/hero-bg1.jpg" class="img-fluid rounded shadow-sm" alt="Gallery 1">
            </div>
        </div>
        <div class="col-5th">
            <div class="gallery-item">
            <img src="images/hero-bg2.jpg" class="img-fluid rounded shadow-sm" alt="Gallery 2">
            </div>
        </div>
        <div class="col-5th">
            <div class="gallery-item">
            <img src="images/hero-bg2.jpg" class="img-fluid rounded shadow-sm" alt="Gallery 3">
            </div>
        </div>
        <div class="col-5th">
            <div class="gallery-item">
            <img src="images/hero-bg2.jpg" class="img-fluid rounded shadow-sm" alt="Gallery 4">
            </div>
        </div>
        <div class="col-5th">
            <div class="gallery-item">
            <img src="images/hero-bg2.jpg" class="img-fluid rounded shadow-sm" alt="Gallery 5">
            </div>
        </div>

        <!-- Next row -->
        <div class="col-5th">
            <div class="gallery-item">
            <img src="images/hero-bg1.jpg" class="img-fluid rounded shadow-sm" alt="Gallery 6">
            </div>
        </div>
        <div class="col-5th">
            <div class="gallery-item">
            <img src="images/hero-bg2.jpg" class="img-fluid rounded shadow-sm" alt="Gallery 7">
            </div>
        </div>
        <div class="col-5th">
            <div class="gallery-item">
            <img src="images/hero-bg1.jpg" class="img-fluid rounded shadow-sm" alt="Gallery 8">
            </div>
        </div>
            <div class="text-center mt-4">
            <a href="#" class="btn btn-light btn-sm">View All </a>
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