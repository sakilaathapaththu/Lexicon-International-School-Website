@extends('layouts.app')

@section('title', 'News - Lexicon International School')

@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <link href="{{ asset('css/news.css') }}" rel="stylesheet">
@endsection

@section('content')

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">News & Updates</h1>
            <p class="hero-subtitle">Stay updated with the latest from Lexicon International School</p>
            <div class="hero-divider"></div>
        </div>
    </div>
</section>

<!-- News & Updates Section -->
<section class="news-updates-section py-5">
        <div class="row g-4" id="newsGrid">
            <!-- News Card 1 -->
            <div class="col-md-6 col-lg-4 news-item">
                <div class="card border-0 shadow-sm h-100 news-card">
                    <div class="news-img-wrapper">
                        <img src="images/hero-bg1.jpg" alt="News Title" class="card-img-top news-img">
                    </div>
                    <div class="card-body">
                        <h5 class="news-title">New Campus Opening in Colombo</h5>
                        <p class="news-snippet text-muted">We are thrilled to announce the launch of our newest campus offering world-class facilities and academic excellence.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-secondary">July 12, 2025</small>
                            <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News Card 2 -->
            <div class="col-md-6 col-lg-4 news-item">
                <div class="card border-0 shadow-sm h-100 news-card">
                    <div class="news-img-wrapper">
                        <img src="images/hero-bg2.jpg" alt="News Title" class="card-img-top news-img">
                    </div>
                    <div class="card-body">
                        <h5 class="news-title">Student Achievements 2025</h5>
                        <p class="news-snippet text-muted">Our students excelled in national and international competitions, showcasing their talents and dedication to excellence.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-secondary">June 30, 2025</small>
                            <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News Card 3 -->
            <div class="col-md-6 col-lg-4 news-item">
                <div class="card border-0 shadow-sm h-100 news-card">
                    <div class="news-img-wrapper">
                        <img src="images/hero-bg3.jpg" alt="News Title" class="card-img-top news-img">
                    </div>
                    <div class="card-body">
                        <h5 class="news-title">Lexicon Hosts International Educators</h5>
                        <p class="news-snippet text-muted">Educators from around the globe joined us for a conference on modern teaching methods and inclusive education.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-secondary">June 18, 2025</small>
                            <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add more news cards as needed -->
        </div>

    </div>
</section>


@endsection
@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            const filterValue = this.getAttribute('data-filter');
            
            galleryItems.forEach(item => {
                if (filterValue === 'all' || item.getAttribute('data-category').includes(filterValue)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>
@endsection
