@extends('layouts.app')

@section('title', 'News & Blogs - Lexicon International School')

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/news.css') }}">
@endsection

@section('content')
<section class="hero-section">
    <div class="container">
        <div class="hero-content" data-aos="fade-up">
            <h1 class="hero-title">News & Blogs</h1>
            <p class="hero-subtitle">Stay Updated with Our Latest News and Educational Insights</p>
            <div class="hero-divider"></div>
        </div>
    </div>
</section>

<div class="main-container">
    <div class="container">
      <div class="d-flex justify-content-center mb-4">
            <ul class="nav nav-tabs" id="postTabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="news-tab" data-bs-toggle="tab" data-bs-target="#news" type="button" role="tab">
                        <i class="fas fa-newspaper me-2"></i>News
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="blog-tab" data-bs-toggle="tab" data-bs-target="#blog" type="button" role="tab">
                        <i class="fas fa-blog me-2"></i>Blogs
                    </button>
                </li>
            </ul>
        </div>

        <div class="tab-content" id="postTabsContent">
            @foreach(['news', 'blog'] as $type)
            <div class="tab-pane fade {{ $type === 'news' ? 'show active' : '' }}" id="{{ $type }}" role="tabpanel">
                @php $typePosts = $posts->where('type', $type); @endphp
                
                @if($typePosts->count() > 0)
                <div class="row g-4">
                    @foreach($typePosts as $index => $post)
                        @php $firstImage = $post->images->first(); @endphp
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <div class="news-card" style="background-image: url('{{ asset($firstImage->image_path ?? 'images/default-news.jpg') }}');">
                                <div class="news-overlay"></div>
                                <div class="news-content">
                                    <div class="news-meta">
                                        <i class="fas fa-calendar-alt"></i>
                                        {{ \Carbon\Carbon::parse($post->published_at)->format('F d, Y') }}
                                        <i class="fas fa-clock ms-2"></i>
                                        {{ $post->reading_time ?? '2 min' }} read
                                    </div>
                                    <div class="news-title">{{ \Illuminate\Support\Str::limit($post->title, 80) }}</div>
                                    <div class="news-tags mb-3">
                                        <span><i class="fas fa-tag me-1"></i>{{ ucfirst($post->type) }}</span>
                                        @foreach(explode(',', $post->tags) as $tag)
                                            <span>{{ trim($tag) }}</span>
                                        @endforeach
                                    </div>
                                    <button class="read-more-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#postModal"
                                        data-title="{{ $post->title }}"
                                        data-date="{{ \Carbon\Carbon::parse($post->published_at)->format('F d, Y') }}"
                                        data-reading="{{ $post->reading_time ?? '2 min' }}"
                                        data-content="{{ htmlentities($post->content) }}"
                                        data-images='@json($post->images->pluck("image_path"))'>
                                        <i class="fas fa-arrow-right me-2"></i>Read More
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @else
                <div class="empty-state" data-aos="fade-up">
                    <i class="fas fa-{{ $type === 'news' ? 'newspaper' : 'blog' }}"></i>
                    <h3>No {{ ucfirst($type) }} Available</h3>
                    <p>Check back later for new {{ $type }} posts!</p>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title" id="postModalLabel">Post Title</h5>
                    <small>
                        <i class="fas fa-calendar-alt me-2"></i><span id="postDate"></span>
                        <i class="fas fa-clock ms-3 me-2"></i><span id="postReadingTime"></span>
                    </small>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div id="postContent" class="text-dark fs-6 mb-4"></div>
                <div id="postImageGrid" class="row g-4"></div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-2"></i>Close
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
AOS.init({ 
    once: true, 
    duration: 800,
    offset: 100,
    easing: 'ease-out-cubic'
});

const modal = document.getElementById('postModal');
modal.addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;

    modal.querySelector('.modal-title').textContent = button.getAttribute('data-title');
    modal.querySelector('#postDate').textContent = button.getAttribute('data-date');
    modal.querySelector('#postReadingTime').textContent = button.getAttribute('data-reading');
    modal.querySelector('#postContent').innerHTML = decodeHTMLEntities(button.getAttribute('data-content'));

    const images = JSON.parse(button.getAttribute('data-images') || '[]');
    const grid = modal.querySelector('#postImageGrid');
    grid.innerHTML = '';

    if (images.length > 0) {
        images.forEach((image, index) => {
            const col = document.createElement('div');
            col.className = 'col-md-4 col-6';
            col.innerHTML = `<img src="${image}" class="img-fluid rounded shadow-sm" data-aos="zoom-in" data-aos-delay="${index * 100}" alt="Post image ${index + 1}">`;
            grid.appendChild(col);
        });
        
        // Re-initialize AOS for dynamically added elements
        setTimeout(() => {
            AOS.refresh();
        }, 100);
    }
});

function decodeHTMLEntities(text) {
    const txt = document.createElement('textarea');
    txt.innerHTML = text;
    return txt.value;
}

// Add smooth scrolling for better UX
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Add loading state for read more buttons
document.querySelectorAll('.read-more-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const originalContent = this.innerHTML;
        this.innerHTML = '<span class="loading-spinner me-2"></span>Loading...';
        
        setTimeout(() => {
            this.innerHTML = originalContent;
        }, 500);
    });
});
</script>
@endsection