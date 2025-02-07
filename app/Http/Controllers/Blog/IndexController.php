<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(12);
        $popular = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(5);
        return view('blog.index', ["posts" => $posts, 'popular' => $popular]);
    }
}
