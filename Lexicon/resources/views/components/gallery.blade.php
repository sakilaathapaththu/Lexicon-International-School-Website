@extends('layouts.app')

@section('title', 'Gallery - Lexicon International School')

@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
@endsection
@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Gallery</h1>
            <p class="hero-subtitle">Excellence in Educational Leadership & Teaching</p>
            <div class="hero-divider"></div>
        </div>
    </div>
</section>

<!-- Gallery Categories -->
<section class="gallery-categories">
    <div class="container">
        <div class="category-filters">
            <button class="filter-btn active" data-filter="all">ALL</button>
            <button class="filter-btn" data-filter="photography">PHOTOGRAPHY</button>
            <button class="filter-btn" data-filter="travel">TRAVEL</button>
            <button class="filter-btn" data-filter="nature">NATURE</button>
            <button class="filter-btn" data-filter="fashion">FASHION</button>
            <button class="filter-btn" data-filter="lifestyle">LIFE STYLE</button>
        </div>
    </div>
</section>

<!-- Gallery Grid -->
<section class="gallery-grid">
    <div class="container">
        <div class="masonry-grid" id="galleryGrid">
            <!-- Gallery Item 1 -->
            <div class="gallery-item" data-category="photography travel">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Mountain Landscape">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Mountain Adventure</h3>
                            <p class="gallery-category">Photography • Travel</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div class="gallery-item" data-category="nature">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Geometric Design">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Geometric Patterns</h3>
                            <p class="gallery-category">Nature • Design</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div class="gallery-item" data-category="lifestyle">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Culinary Art">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Culinary Masterpiece</h3>
                            <p class="gallery-category">Life Style • Food</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 4 -->
            <div class="gallery-item" data-category="fashion">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Fashion Portrait">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Fashion Portrait</h3>
                            <p class="gallery-category">Fashion • Photography</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 5 -->
            <div class="gallery-item" data-category="photography">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Abstract Art">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Abstract Creativity</h3>
                            <p class="gallery-category">Photography • Art</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 6 -->
            <div class="gallery-item" data-category="lifestyle">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Connection">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Human Connection</h3>
                            <p class="gallery-category">Life Style • Emotion</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 7 -->
            <div class="gallery-item" data-category="nature">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Pet Photography">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Pet Companion</h3>
                            <p class="gallery-category">Nature • Photography</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 8 -->
            <div class="gallery-item" data-category="lifestyle">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Coffee Culture">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Coffee Culture</h3>
                            <p class="gallery-category">Life Style • Food</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 9 -->
            <div class="gallery-item" data-category="photography">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Artistic Expression">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Artistic Expression</h3>
                            <p class="gallery-category">Photography • Art</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 10 -->
            <div class="gallery-item" data-category="travel">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Body Art">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Body Art Expression</h3>
                            <p class="gallery-category">Travel • Culture</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 11 -->
            <div class="gallery-item" data-category="travel">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Automotive">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Automotive Beauty</h3>
                            <p class="gallery-category">Travel • Photography</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 12 -->
            <div class="gallery-item" data-category="lifestyle">
                <div class="gallery-image">
                    <img src="images/hero-bg2.jpg" alt="Gentle Touch">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3 class="gallery-title">Gentle Moments</h3>
                            <p class="gallery-category">Life Style • Emotion</p>
                        </div>
                    </div>
                </div>
            </div>
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
