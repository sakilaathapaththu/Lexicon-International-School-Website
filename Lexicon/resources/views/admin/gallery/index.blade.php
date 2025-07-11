@extends('layouts.admin')
@section('title', 'Photo Gallery')

@section('content')
<h4>Gallery Images</h4>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('gallery.create') }}" class="btn btn-success mb-4">+ Upload New Images</a>

<div class="row">
    @forelse ($images as $image)
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset($image->image_path) }}" class="card-img-top" style="object-fit: cover; height: 250px;" alt="Gallery Image">
            <div class="card-body">
                @if($image->title)
                <h5 class="card-title">{{ $image->title }}</h5>
                @endif

                @if($image->description)
                <p class="card-text text-muted">{{ Str::limit($image->description, 100) }}</p>
                @endif

                <small class="text-muted">Uploaded by: {{ $image->uploader->username ?? 'Admin' }}</small>
            </div>
            <div class="card-footer text-end">
                <form action="{{ route('gallery.destroy', $image->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">🗑️ Delete</button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12">
        <p class="text-muted">No images in the gallery yet.</p>
    </div>
    @endforelse
</div>
@endsection
