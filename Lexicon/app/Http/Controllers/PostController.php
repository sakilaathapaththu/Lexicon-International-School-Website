<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\PostImage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('author')->latest()->get();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'subtitle' => 'nullable|string|max:255',
        'published_at' => 'required|date',
        'reading_time' => 'nullable|string|max:20',
        'content' => 'required|string',
        'tags' => 'nullable|string',
        'type' => 'required|in:news,blog',
        'author_display' => 'nullable|string|max:255',
        'featured_images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:7048',
    ]);

    $slug = Str::slug($request->title);
    if (Post::where('slug', $slug)->exists()) {
        $slug .= '-' . time();
    }

    $post = Post::create([
        'title' => $request->title,
        'subtitle' => $request->subtitle,
        'slug' => $slug,
        'published_at' => $request->published_at,
        'reading_time' => $request->reading_time,
        'content' => $request->content,
        'tags' => $request->tags,
        'type' => $request->type,
        'author_display' => $request->author_display,
        'author_id' => Auth::guard('admin')->id(),
    ]);

    // Save multiple featured images
    if ($request->hasFile('featured_images')) {
        foreach ($request->file('featured_images') as $file) {
            $path = 'storage/' . $file->store('post_images', 'public');
            PostImage::create([
                'post_id' => $post->id,
                'image_path' => $path
            ]);
        }
    }

    return redirect()->route('posts.index')->with('success', 'Post published with multiple images.');
}


   public function uploadImage(Request $request)
{
    if ($request->hasFile('upload')) {
        $file = $request->file('upload');

        $ext = strtolower($file->getClientOriginalExtension());
        if (!in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
            return response()->json([
                'uploaded' => false,
                'error' => ['message' => 'Only JPG, JPEG, PNG, GIF, WEBP allowed.']
            ]);
        }

        $filename = $file->store('post_images', 'public');
        $url = asset('storage/' . $filename);

        return response()->json([
            'uploaded' => true,
            'url' => $url,
        ]);
    }

    return response()->json([
        'uploaded' => false,
        'error' => ['message' => 'No file uploaded.']
    ]);
}



    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'published_at' => 'required|date',
            'reading_time' => 'nullable|string|max:20',
            'content' => 'required|string',
            'tags' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpg,jpeg,png|max:7048',
        ]);

        if ($request->hasFile('featured_image')) {
            $imagePath = 'storage/' . $request->file('featured_image')->store('post_images', 'public');
            $post->featured_image = $imagePath;
        }

        $post->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'published_at' => $request->published_at,
            'reading_time' => $request->reading_time,
            'content' => $request->content,
            'tags' => $request->tags,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post updated.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted.');
    }

public function showNews()
{
    $posts = Post::with(['author', 'images'])->orderByDesc('published_at')->get();
    return view('components.news', compact('posts'));
}




}