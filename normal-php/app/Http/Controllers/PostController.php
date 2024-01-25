<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::latest()->paginate(8);

        return view('post', compact('post'));
    }

    public function indexSearch()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    public function search(Request $request)
    {

        $search = $request->search;

        $posts = Post::where(function ($query) use ($search) {

            $query->where('title', 'like', "%$search%")
                ->orWhere('description', 'like', "%$search%");
        })
            ->orWhereHas('category', function ($query) use ($search) {
                $query->where('name', 'like', "%$search%");
            })
            ->orWhereHas('user', function ($query) use ($search) {
                $query->where('name', 'like', "%$search%");
            })
            ->get();

        return view('index', compact('posts', 'search'));
    }
}
