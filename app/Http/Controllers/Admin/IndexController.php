<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $counters = array();
        $counters['users'] = User::all()->count();
        $counters['posts'] = Post::all()->count();
        $counters['categories'] = Category::all()->count();
        $counters['tags'] = Tag::all()->count();
        return view('admin.index', ["counters" => $counters]);
    }
}
