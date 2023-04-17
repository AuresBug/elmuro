<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.admin');
    }

    public function home()
    {
        $posts = Post::all();

        return view('home', compact('posts'));
    }
}
