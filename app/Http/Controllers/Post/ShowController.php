<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $date = Carbon::parse($post->created_at);
        $relatedPosts = Post::where("category_id", $post->category_id)->where("id", '<>', $post->id)->get()->take(3);
        $popular = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(5);
        return view('post.show', ["post" => $post, "date" => $date,'popular' => $popular, 'related' => $relatedPosts]);
    }
}
