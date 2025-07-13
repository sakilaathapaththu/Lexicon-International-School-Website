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
            <h1 class="hero-title">News</h1>
            <p class="hero-subtitle">Excellence in Educational Leadership & Teaching</p>
            <div class="hero-divider"></div>
        </div>
    </div>
</section>

<!-- News & Updates Section -->
<section class="news-updates-section py-5">
    <div class="container">
        <div class="section-header text-center mb-4">
            <h2 class="section-title">News & Updates</h2>
            <p class="section-subtitle">Stay updated with the latest from Lexicon International School</p>
            <div class="hero-divider mx-auto"></div>
        </div>

        <div class="row g-4" id="newsGrid">
            @forelse ($posts as $post)
                <div class="col-md-6 col-lg-4 news-item">
                    <div class="card border-0 shadow-sm h-100 news-card">
                        <div class="news-img-wrapper">
                            <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}" class="card-img-top news-img">
                        </div>
                        <div class="card-body">
                            <h5 class="news-title">{{ \Illuminate\Support\Str::limit($post->title, 70) }}</h5>
                            <p class="news-snippet text-muted">{{ \Illuminate\Support\Str::limit(strip_tags($post->content), 120) }}</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <small class="text-secondary">{{ \Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}</small>
                                <a href="{{ url('/posts/'.$post->id) }}" class="btn btn-outline-primary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-muted text-center">No recent news available.</p>
            @endforelse
        </div>

        <div class="text-center mt-4">
            <a href="{{ url('/posts') }}" class="btn btn-primary btn-sm">View All News</a>
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
