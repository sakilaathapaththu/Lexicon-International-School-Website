<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
   public function index()
    {
        $images = Gallery::with('uploader')->latest()->get();
        return view('admin.gallery.index', compact('images'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:4096',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = 'storage/' . $file->store('gallery', 'public');

                Gallery::create([
                    'title' => $request->title,
                    'description' => $request->description,
                    'image_path' => $path,
                    'uploaded_by' => Auth::guard('admin')->id(),
                ]);
            }
        }

        return redirect()->route('gallery.index')->with('success', 'Images uploaded successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return back()->with('success', 'Image deleted.');
    }
}