<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Gallery;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
   
    public function index()
{
     // ✅ Load all posts (remove 2-week filter)
        $posts = Post::with('images')
            ->whereNotNull('published_at')
            ->orderByDesc('published_at')
            ->take(6) // or change to `->get()` to show all
            ->get();

    $recentImages = Gallery::where('created_at', '>=', now()->subDays(14))
                ->latest()
                ->get()
                ->groupBy('title');

    return view('home.home', compact('posts', 'recentImages'));
}

}
