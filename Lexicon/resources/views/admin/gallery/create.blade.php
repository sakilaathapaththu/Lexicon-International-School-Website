@extends('layouts.admin')
@section('title', 'Upload Gallery Images')

@section('content')
<h4>Upload Images</h4>

@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label>Title (optional)</label>
        <input type="text" name="title" class="form-control">
    </div>

    <div class="mb-3">
        <label>Description (optional)</label>
        <textarea name="description" class="form-control" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label>Select Images</label>
        <input type="file" name="images[]" class="form-control" multiple required>
    </div>

    <button class="btn btn-primary">Upload</button>
</form>
@endsection
