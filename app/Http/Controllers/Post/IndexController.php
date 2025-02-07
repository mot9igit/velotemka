<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(1);
        $popular = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(5);
        return view('post.index', ["posts" => $posts, 'popular' => $popular]);
    }
}
