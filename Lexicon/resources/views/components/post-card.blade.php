@php
    $firstImage = $post->images->first();
@endphp

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
                data-content="{{ htmlentities($post->content) }}"
                data-date="{{ \Carbon\Carbon::parse($post->published_at)->format('F d, Y') }}"
                data-reading="{{ $post->reading_time ?? '2 min' }}"
                data-images='@json($post->images->pluck("image_path"))'>
                Read More
            </button>
        </div>
    </div>
</div>
