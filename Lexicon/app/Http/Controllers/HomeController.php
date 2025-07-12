<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::whereDate('published_at', '>=', now()->subWeeks(2))
                    ->latest()
                    ->take(3)
                    ->get();

        $recentImages = Gallery::where('created_at', '>=', now()->subDays(14))
                    ->latest()
                    ->get()
                    ->groupBy('title');

        return view('home.home', compact('posts', 'recentImages'));
    }
}
