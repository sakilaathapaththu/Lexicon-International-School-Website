@extends('layouts.app')

@section('title', 'LexCon International School')

@section('content')

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h1>Welcome to LexCon International School</h1>
                <p>Empowering minds, shaping futures through innovative education and global perspectives</p>
                <a href="#programs" class="cta-button">Explore Programs</a>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission" id="about">
        <div class="container">
            <h2 class="section-title">Our Mission</h2>
            <div class="mission-content">
                <div class="mission-text">
                    <h3>Excellence in Education</h3>
                    <p>We are committed to providing world-class education that prepares students for success in an increasingly interconnected world. Our innovative approach combines traditional academic excellence with modern teaching methodologies.</p>
                    <p>Through personalized learning experiences and a diverse curriculum, we nurture critical thinking, creativity, and global citizenship in every student.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
                <div class="mission-image">
                    <div>
                        <h3>Inspiring Excellence</h3>
                        <p>Classroom interaction and engagement</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="impact">
        <div class="container">
            <h2 class="section-title">Our Impact</h2>
            <p class="section-description">Making a difference in education and student lives worldwide</p>
            <div class="impact-stats">
                <div class="stat-card">
                    <div class="stat-number">2,500+</div>
                    <div class="stat-label">Students Enrolled</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">150+</div>
                    <div class="stat-label">Expert Teachers</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">95%</div>
                    <div class="stat-label">University Acceptance</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Academic Programs -->
    <section class="programs" id="programs">
        <div class="container">
            <h2 class="section-title">Academic Programs</h2>
            <p class="section-description">Comprehensive educational pathways designed to unlock every student's potential</p>
            <div class="program-grid">
                <div class="program-card">
                    <div class="program-image">
                        <div>
                            <h3>Primary Education</h3>
                            <p>Foundation years (Ages 5-11)</p>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3 class="program-title">Primary Program</h3>
                        <p class="program-description">Building strong foundations in literacy, numeracy, and critical thinking through engaging, hands-on learning experiences.</p>
                        <a href="#" class="program-button">Learn More</a>
                    </div>
                </div>
                <div class="program-card">
                    <div class="program-image">
                        <div>
                            <h3>Secondary Education</h3>
                            <p>Advanced learning (Ages 12-16)</p>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3 class="program-title">Secondary Program</h3>
                        <p class="program-description">Comprehensive curriculum preparing students for higher education with specialized tracks in sciences, humanities, and arts.</p>
                        <a href="#" class="program-button">Learn More</a>
                    </div>
                </div>
                <div class="program-card">
                    <div class="program-image">
                        <div>
                            <h3>International Baccalaureate</h3>
                            <p>Global certification (Ages 16-18)</p>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3 class="program-title">IB Diploma</h3>
                        <p class="program-description">Internationally recognized program developing inquiring, knowledgeable, and caring young people.</p>
                        <a href="#" class="program-button">Learn More</a>
                    </div>
                </div>
                <div class="program-card">
                    <div class="program-image">
                        <div>
                            <h3>STEM Excellence</h3>
                            <p>Science & Technology focus</p>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3 class="program-title">STEM Program</h3>
                        <p class="program-description">Advanced science, technology, engineering, and mathematics education with state-of-the-art facilities and research opportunities.</p>
                        <a href="#" class="program-button">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endsection