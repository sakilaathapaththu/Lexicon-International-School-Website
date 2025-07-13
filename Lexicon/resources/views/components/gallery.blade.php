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
    @forelse ($groupedImages as $title => $images)
        @php
            $firstImage = $images->first();
            $slug = \Illuminate\Support\Str::slug($title ?? 'gallery-group');
        @endphp

        <div class="gallery-item" data-category="{{ strtolower($firstImage->description ?? 'photography') }}">
            <div class="gallery-image" data-bs-toggle="modal" data-bs-target="#modal-{{ $slug }}">
                <img src="{{ asset($firstImage->image_path) }}" alt="{{ $title }}">
                <div class="gallery-overlay">
                    <div class="gallery-content">
                        <h3 class="gallery-title">{{ $title ?? 'Untitled' }}</h3>
                        <p class="gallery-category">{{ $firstImage->description ?? 'Gallery' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for this group -->
        <div class="modal fade" id="modal-{{ $slug }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content bg-dark">
                    <div class="modal-header border-0">
                        <h5 class="modal-title text-white">{{ $title ?? 'Gallery Group' }}</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex flex-wrap gap-3 justify-content-center">
                        @foreach ($images as $img)
                            <img src="{{ asset($img->image_path) }}" alt="Grouped Image" class="img-fluid rounded" style="max-height: 300px;">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @empty
        <p class="text-center text-muted">No gallery images available.</p>
    @endforelse
</div>

    </div>
</section>
@endsection

@section('scripts')
<!-- At end of body -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
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
