@extends('layouts.app')

@section('title', 'About Us - Lexicon International School')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>International School Advisory Council</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/advisory.css') }}">
</head>
<body>

<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="bg-light py-2 px-3 rounded mb-4">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Advisory Council</li>
    </ol>
</nav>

<!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Our Academic Staff</h1>
                <p class="hero-subtitle">Excellence in Educational Leadership & Teaching</p>
                <div class="hero-divider"></div>
            </div>
        </div>
    </section>

    <!-- Executive Leadership Section -->
    <section class="content-section executive-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Executive Leadership</h2>
                <p class="section-subtitle">
                    Meet our distinguished leadership team who guide Lexicon International School with vision, expertise, and unwavering commitment to educational excellence.
                </p>
            </div>

            <div class="staff-grid">
                <div class="staff-card">
                    <div class="staff-image-container">
                        <div class="staff-image">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&h=400&fit=crop&crop=face" alt="Ms. Emma Williams">
                        </div>
                    </div>
                    <h3 class="staff-name">Dr. Sarah Johnson</h3>
                    <p class="staff-title">Principal (Head of School)</p>
                    <p class="staff-description">
                        Leading our school with 15+ years of international education experience, Dr. Johnson brings a wealth of knowledge in academic excellence, strategic planning, and student development. Her vision shapes our commitment to nurturing global citizens.
                    </p>
                </div>

                <div class="staff-card">
                    <div class="staff-image-container">
                        <div class="staff-image">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop&crop=face" alt="Mr. Michael Chen">
                        </div>
                    </div>
                    <h3 class="staff-name">Mr. Michael Chen</h3>
                    <p class="staff-title">Deputy Principal</p>
                    <p class="staff-description">
                        Supporting academic operations and student affairs with expertise in curriculum development and international education standards.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Academic Leadership Section -->
    <section class="content-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Academic Leadership</h2>
                <p class="section-subtitle">
                    Our dedicated academic leaders bring specialized expertise to guide students through their educational journey from primary through secondary education.
                </p>
            </div>

            <div class="staff-grid">
                <div class="staff-card">
                    <div class="staff-image-container">
                        <div class="staff-image">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&h=400&fit=crop&crop=face" alt="Ms. Emma Williams">
                        </div>
                    </div>
                    <h3 class="staff-name">Ms. Emma Williams</h3>
                    <p class="staff-title">Head of Primary School</p>
                    <p class="staff-description">
                        Overseeing Grades 1-5 with focus on foundational learning, creative teaching methods, and holistic child development.
                    </p>
                </div>

                <div class="staff-card">
                    <div class="staff-image-container">
                        <div class="staff-image">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=400&fit=crop&crop=face" alt="Dr. James Rodriguez">
                        </div>
                    </div>
                    <h3 class="staff-name">Dr. James Rodriguez</h3>
                    <p class="staff-title">Head of Secondary School</p>
                    <p class="staff-description">
                        Leading Grades 6-12 with expertise in preparing students for university admission and career readiness through rigorous academics.
                    </p>
                </div>

                <div class="staff-card">
                    <div class="staff-image-container">
                        <div class="staff-image">
                            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&h=400&fit=crop&crop=face" alt="Ms. Lisa Park">
                        </div>
                    </div>
                    <h3 class="staff-name">Ms. Lisa Park</h3>
                    <p class="staff-title">Curriculum Coordinator</p>
                    <p class="staff-description">
                        Coordinating IB, Cambridge, and international curricula to ensure seamless integration and academic excellence across all programs.
                    </p>
                </div>

                <div class="staff-card">
                    <div class="staff-image-container">
                        <div class="staff-image">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400&h=400&fit=crop&crop=face" alt="Mr. David Thompson">
                        </div>
                    </div>
                    <h3 class="staff-name">Mr. David Thompson</h3>
                    <p class="staff-title">Head of Examinations Dept.</p>
                    <p class="staff-description">
                        Managing all internal and external assessments, coordinating with international exam boards, and ensuring examination integrity.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-number">85+</span>
                    <span class="stat-label">Teaching Staff</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">15+</span>
                    <span class="stat-label">Academic Departments</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">40+</span>
                    <span class="stat-label">Nationalities</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">98%</span>
                    <span class="stat-label">Qualified Teachers</span>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scroll reveal animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe staff cards and stat items
        document.querySelectorAll('.staff-card, .stat-item').forEach(element => {
            observer.observe(element);
        });

        // Parallax effect for hero section (subtle)
        let ticking = false;
        function updateParallax() {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero-section');
            if (hero) {
                hero.style.transform = `translateY(${scrolled * 0.2}px)`;
            }
            ticking = false;
        }

        function requestParallaxUpdate() {
            if (!ticking) {
                requestAnimationFrame(updateParallax);
                ticking = true;
            }
        }

        window.addEventListener('scroll', requestParallaxUpdate);

        // Smooth scrolling for anchor links
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

        // Add subtle hover animations to stat numbers
        document.querySelectorAll('.stat-number').forEach(stat => {
            stat.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05)';
                this.style.transition = 'transform 0.3s ease';
            });
            
            stat.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>
@endsection