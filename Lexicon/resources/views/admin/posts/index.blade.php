@extends('layouts.admin')
@section('title', 'All Posts')

@section('content')
<h4>News & Blog Posts</h4>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('posts.create') }}" class="btn btn-success mb-3">+ Add New Post</a>

<div class="row">
    @foreach($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card h-100 position-relative">
                @if($post->images->count())
                    <img src="{{ asset($post->images->first()->image_path) }}" class="card-img-top" alt="{{ $post->title }}">
                @else
                    <img src="{{ asset('images/default-news.jpg') }}" class="card-img-top" alt="Default">
                @endif

                <!-- Edit icon -->
                <button class="btn btn-sm btn-light position-absolute top-0 end-0 m-2" data-bs-toggle="modal" data-bs-target="#editModal{{ $post->id }}">
                    ✏️
                </button>

                <div class="card-body">
                    <small class="text-muted">
                        {{ $post->published_at->format('F d, Y') }} · {{ $post->reading_time }}
                    </small>
                    <h5 class="mt-2">{{ $post->title }}</h5>

                    @if($post->subtitle)
                        <p class="text-muted">{{ $post->subtitle }}</p>
                    @endif

                    @if($post->tags)
                        <div class="mt-2">
                            @foreach(explode(',', $post->tags) as $tag)
                                <span class="badge bg-secondary">{{ trim($tag) }}</span>
                            @endforeach
                        </div>
                    @endif

                    <!-- Delete Button -->
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="mt-3">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger w-100" onclick="return confirm('Are you sure you want to delete this post?')">
                            🗑️ Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- 🛠️ Edit Modal -->
        <div class="modal fade" id="editModal{{ $post->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $post->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit: {{ $post->title }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                            <div class="mb-2">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
                            </div>

                            <div class="mb-2">
                                <label>Subtitle</label>
                                <input type="text" name="subtitle" class="form-control" value="{{ $post->subtitle }}">
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label>Published At</label>
                                    <input type="date" name="published_at" class="form-control" value="{{ $post->published_at->format('Y-m-d') }}" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label>Reading Time</label>
                                    <input type="text" name="reading_time" class="form-control" value="{{ $post->reading_time }}">
                                </div>
                            </div>

                            <div class="mb-2">
                                <label>Tags</label>
                                <input type="text" name="tags" class="form-control" value="{{ $post->tags }}">
                            </div>

                            <div class="mb-2">
                                <label>Upload More Featured Images</label>
                                <input type="file" name="featured_images[]" class="form-control" accept="image/*" multiple>
                                @if($post->images->count())
                                    <div class="mt-2">
                                        <strong>Current Images:</strong><br>
                                        @foreach($post->images as $img)
                                            <img src="{{ asset($img->image_path) }}" class="img-thumbnail me-1 mb-1" style="width: 70px; height: 70px;">
                                        @endforeach
                                    </div>
                                @endif
                            </div>

                            <div class="mb-2">
                                <label>Content</label>
                                <textarea name="content" class="form-control" rows="5">{{ $post->content }}</textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-primary">Update</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    @endforeach
</div>
@endsection
