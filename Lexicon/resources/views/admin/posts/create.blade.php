@extends('layouts.admin')
@section('title', 'Add News / Blog Post')

@section('content')
<h4>Create News or Blog Post</h4>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Please fix the following issues:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" id="postForm">
    @csrf

    <div class="mb-3">
        <label>Post Type</label>
        <select name="type" class="form-select" required>
            <option value="">-- Select Type --</option>
            <option value="news">News</option>
            <option value="blog">Blog</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Subtitle (Optional)</label>
        <input type="text" name="subtitle" class="form-control">
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label>Published Date</label>
            <input type="date" name="published_at" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">
            <label>Reading Time</label>
            <input type="text" name="reading_time" class="form-control" placeholder="e.g. 3 min">
        </div>
    </div>

    <div class="mb-3">
        <label>Tags (comma-separated)</label>
        <input type="text" name="tags" class="form-control" placeholder="e.g. education,events,school">
    </div>

    <div class="mb-3">
        <label>Author Display Name (Optional)</label>
        <input type="text" name="author_display" class="form-control" placeholder="e.g. Lexicon Editorial">
    </div>

    <div class="mb-3">
    <label>Featured Images</label>
    <input type="file" name="featured_images[]" class="form-control" accept="image/*" multiple>
</div>


    <div class="mb-3">
        <label>Full Content</label>
        <textarea name="content" id="editor" rows="10" class="form-control"></textarea>
    </div>

    <button class="btn btn-primary">Publish Post</button>
</form>

<!-- CKEditor Integration -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/super-build/ckeditor.js"></script>
<script>
let ckEditorInstance;
ClassicEditor
    .create(document.querySelector('#editor'), {
        ckfinder: {
            uploadUrl: "{{ url('/admin/posts/upload?_token=' . csrf_token()) }}"
        },
        toolbar: {
            items: [
                'undo', 'redo', '|',
                'heading', '|',
                'bold', 'italic', 'link', '|',
                'bulletedList', 'numberedList', '|',
                'blockQuote', 'insertTable', '|',
                'uploadImage', 'imageInsert'
            ]
        },
        image: {
            resizeUnit: '%',
            resizeOptions: [
                { name: 'resizeImage:original', value: null, label: 'Original' },
                { name: 'resizeImage:25', value: '25', label: '25%' },
                { name: 'resizeImage:50', value: '50', label: '50%' },
                { name: 'resizeImage:75', value: '75', label: '75%' }
            ],
            toolbar: [
                'imageStyle:inline', 'imageStyle:block', 'imageStyle:side', '|',
                'resizeImage', 'imageTextAlternative'
            ]
        }
    })
    .then(editor => {
        ckEditorInstance = editor;
    })
    .catch(error => {
        console.error(error);
    });

document.getElementById('postForm').addEventListener('submit', function (e) {
    const content = ckEditorInstance.getData().trim();
    if (!content || content === '<p><br></p>') {
        alert('Please enter content.');
        e.preventDefault();
    }
});
</script>

<style>
.ck-content img {
    max-width: 100%;
    height: auto;
}
</style>
@endsection
