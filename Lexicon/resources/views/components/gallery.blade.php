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
    <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- not fullscreen -->
        <div class="modal-content border-0 bg-transparent">
            <div class="modal-body p-0 position-relative">

                <!-- Image display with overlay -->
                <div class="position-relative w-100">
                    <!-- Actual Image -->
                    <img src="{{ asset($firstImage->image_path) }}" alt="Gallery Image"
                         class="img-fluid w-100" style="object-fit: cover; border-radius: 8px;">

                    <!-- Title (top-left) and Close Button (top-right) overlaying image -->
                    <div class="position-absolute top-0 start-0 w-100 d-flex justify-content-between align-items-start p-3 z-3">
                        <h5 class="text-white bg-dark bg-opacity-150 px-3 py-2 rounded m-0">
                            {{ $title ?? 'Gallery Group' }}
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>

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
