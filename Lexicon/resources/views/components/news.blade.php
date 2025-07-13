@extends('layouts.app')

@section('title', 'News & Blogs - Lexicon International School')

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<style>
    .news-card {
        position: relative;
        color: white;
        border-radius: 10px;
        overflow: hidden;
        background-size: cover;
        background-position: center;
        height: 360px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 20px;
    }

    .news-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.65), transparent 60%);
        z-index: 1;
    }

    .news-content {
        position: relative;
        z-index: 2;
    }

    .news-title {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 8px;
    }

    .news-meta {
        font-size: 0.9rem;
        margin-bottom: 10px;
        opacity: 0.9;
    }

    .news-tags span {
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 4px;
        padding: 4px 8px;
        font-size: 0.75rem;
        margin-right: 5px;
    }
</style>
@endsection

@section('content')

<!-- Hero Section -->
<section class="hero-section text-center text-white py-5" style="background: linear-gradient(135deg, #2563eb, #1e3a8a);">
    <div class="container">
        <h1 class="hero-title mb-2">News & Blogs</h1>
        <p class="hero-subtitle">Stay updated with the latest from Lexicon International School</p>
    </div>
</section>

<!-- Tabs -->
<div class="container py-4">
    <ul class="nav nav-tabs justify-content-center" id="postTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="news-tab" data-bs-toggle="tab" data-bs-target="#news" type="button" role="tab">News</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="blog-tab" data-bs-toggle="tab" data-bs-target="#blog" type="button" role="tab">Blogs</button>
        </li>
    </ul>

    <div class="tab-content mt-4" id="postTabsContent">
        <!-- News Tab -->
        <div class="tab-pane fade show active" id="news" role="tabpanel">
            <div class="row g-4">
                @foreach($posts->where('type', 'news') as $post)
                    @php $firstImage = $post->images->first(); @endphp
                    <div class="col-md-6 col-lg-4">
                        <div class="news-card" style="background-image: url('{{ asset($firstImage->image_path ?? 'images/default-news.jpg') }}');">
                            <div class="news-overlay"></div>
                            <div class="news-content">
                                <div class="news-meta">
                                    {{ \Carbon\Carbon::parse($post->published_at)->format('F d, Y') }} • {{ $post->reading_time ?? '2 min' }} read
                                </div>
                                <div class="news-title">{{ \Illuminate\Support\Str::limit($post->title, 80) }}</div>
                                <div class="news-tags mb-2">
                                    <span>{{ ucfirst($post->type) }}</span>
                                    @foreach(explode(',', $post->tags) as $tag)
                                        <span>{{ trim($tag) }}</span>
                                    @endforeach
                                </div>
                                <button class="btn btn-sm btn-light"
                                    data-bs-toggle="modal"
                                    data-bs-target="#postModal"
                                    data-title="{{ $post->title }}"
                                    data-date="{{ \Carbon\Carbon::parse($post->published_at)->format('F d, Y') }}"
                                    data-reading="{{ $post->reading_time ?? '2 min' }}"
                                    data-content="{{ htmlentities($post->content) }}"
                                    data-images='@json($post->images->pluck("image_path"))'>
                                    Read More
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Blog Tab -->
        <div class="tab-pane fade" id="blog" role="tabpanel">
            <div class="row g-4">
                @foreach($posts->where('type', 'blog') as $post)
                    @php $firstImage = $post->images->first(); @endphp
                    <div class="col-md-6 col-lg-4">
                        <div class="news-card" style="background-image: url('{{ asset($firstImage->image_path ?? 'images/default-news.jpg') }}');">
                            <div class="news-overlay"></div>
                            <div class="news-content">
                                <div class="news-meta">
                                    {{ \Carbon\Carbon::parse($post->published_at)->format('F d, Y') }} • {{ $post->reading_time ?? '2 min' }} read
                                </div>
                                <div class="news-title">{{ \Illuminate\Support\Str::limit($post->title, 80) }}</div>
                                <div class="news-tags mb-2">
                                    <span>{{ ucfirst($post->type) }}</span>
                                    @foreach(explode(',', $post->tags) as $tag)
                                        <span>{{ trim($tag) }}</span>
                                    @endforeach
                                </div>
                                <button class="btn btn-sm btn-light"
                                    data-bs-toggle="modal"
                                    data-bs-target="#postModal"
                                    data-title="{{ $post->title }}"
                                    data-date="{{ \Carbon\Carbon::parse($post->published_at)->format('F d, Y') }}"
                                    data-reading="{{ $post->reading_time ?? '2 min' }}"
                                    data-content="{{ htmlentities($post->content) }}"
                                    data-images='@json($post->images->pluck("image_path"))'>
                                    Read More
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <div>
                    <h5 class="modal-title" id="postModalLabel">Post Title</h5>
                    <small><span id="postDate"></span> • <span id="postReadingTime"></span></small>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <!-- Content -->
                <div id="postContent" class="text-dark fs-6 mb-4"></div>

                <!-- Image Grid -->
                <div id="postImageGrid" class="row g-3"></div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<script>
document.getElementById('postModal').addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;
    const modal = this;

    // Set title, date, reading time
    modal.querySelector('.modal-title').textContent = button.getAttribute('data-title');
    modal.querySelector('#postDate').textContent = button.getAttribute('data-date');
    modal.querySelector('#postReadingTime').textContent = button.getAttribute('data-reading');

    // Set content
    const content = button.getAttribute('data-content');
    modal.querySelector('#postContent').innerHTML = decodeHTMLEntities(content);

    // Parse image list and display as grid
    const images = JSON.parse(button.getAttribute('data-images') || '[]');
    const grid = modal.querySelector('#postImageGrid');
    grid.innerHTML = '';

    images.forEach(image => {
        const col = document.createElement('div');
        col.className = 'col-md-4 col-6';
        col.innerHTML = `<img src="${image}" class="img-fluid rounded shadow-sm" style="object-fit:cover;">`;
        grid.appendChild(col);
    });
});

// Decode HTML
function decodeHTMLEntities(text) {
    const txt = document.createElement('textarea');
    txt.innerHTML = text;
    return txt.value;
}
</script>
@endsection

