@extends('layouts.app')

@section('title', 'Founder\'s Message - Lexicon International School')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>International School Advisory Council</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/founder.css') }}">
</head>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1 class="section-title fade-in">Lexicon International School Director's Message</h1>
                    <p class="section-subtitle fade-in">A Vision for Educational Excellence</p>
                    <div class="fade-in">
                        <p class="lead">Discover the inspiring journey and vision behind Lexicon International School through the words of our esteemed founder.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center fade-in">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&h=600&fit=crop&crop=face" alt="School Building" class="img-fluid rounded-circle" style="width: 400px; height: 400px; object-fit: cover; border: 8px solid white; box-shadow: var(--shadow-hover);">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Founder Profile Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="founder-card slide-in-left">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="founder-image-container">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=400&fit=crop&crop=face" alt="Dr. Richard Anderson" class="founder-image">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="founder-info">
                                    <h2 class="founder-name">Mr. Roshan Jayawardena</h2>
                                    <p class="founder-title">Director of Lexicon International School</p>
                                    <div class="founder-credentials">
                                        <strong>Credentials:</strong><br>
                                        • Ph.D. in Educational Leadership, Harvard University<br>
                                        • M.Ed. in Curriculum and Instruction, Stanford University<br>
                                        • 25+ years in International Education<br>
                                        • Former Principal at Singapore International School
                                    </div>
                                    <p class="text-muted">Dr. Anderson has dedicated his life to transforming education and nurturing young minds across the globe. His vision for holistic education has shaped thousands of students' futures.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Message Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="message-card slide-in-right">
                        <div class="message-content">
                            <h3 class="mb-4" style="color: var(--cool-blue); font-weight: 700;">A Message from Our Director</h3>
                            <p class="message-text">
                                Welcome to Lexicon International School, where we believe that every child is a unique individual with unlimited potential. When I founded this institution fifteen years ago, I had a simple yet profound vision: to create an educational environment where students don't just learn subjects, but discover their passions, develop critical thinking skills, and become confident global citizens.
                            </p>
                            <p class="message-text">
                                Education is not merely about academic achievement; it's about nurturing the whole child. At Lexicon, we focus on developing intellectual curiosity, emotional intelligence, creativity, and social responsibility. Our international curriculum, combined with innovative teaching methodologies, ensures that our students are prepared not just for examinations, but for life itself.
                            </p>
                            <p class="message-text">
                                I am immensely proud of what we have accomplished together – our students, teachers, parents, and the entire Lexicon community. As we look towards the future, we remain committed to our core values of excellence, integrity, and inclusivity. We continue to evolve, embracing new technologies and pedagogical approaches while staying true to our fundamental belief in the power of education to transform lives.
                            </p>
                            <p class="message-text">
                                Thank you for being part of our journey. Together, we are shaping the leaders of tomorrow.
                            </p>
                            <div class="mt-4">
                                <strong style="color: var(--text-primary);">Mr. Roshan Jayawardena</strong><br>
                                <em style="color: var(--text-secondary);">Director, Lexicon International School</em>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling animation observer
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all animated elements
        document.addEventListener('DOMContentLoaded', function() {
            const animatedElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right');
            animatedElements.forEach(el => {
                observer.observe(el);
            });

            // Add staggered animation delays
            const fadeInElements = document.querySelectorAll('.fade-in');
            fadeInElements.forEach((el, index) => {
                el.style.transitionDelay = `${index * 0.1}s`;
            });
        });

        // Parallax effect for hero section
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelector('.hero-section');
            if (parallax) {
                const speed = scrolled * 0.5;
                parallax.style.transform = `translateY(${speed}px)`;
            }
        });
    </script>
@endsection