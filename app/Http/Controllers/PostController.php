<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Finder\Finder;

class PostController extends Controller
{
    public function index()
    {
        
        return view('index', [
            "title"=> "IRS-BLOG",
            // "posts" => Post::all(),
            "posts" => Post::latest()->filter(request(['search']))
            ->paginate(15)
            ->withQueryString(),
            "categories" =>Category::all(),
            "authors" =>User::all()
        ]);
    }

    public function show(POST $post)
    {
        return view('post', [
            "title"=> "Single post",
            "posts"=> $post,
            "categories" =>Category::all(),
            "authors" =>User::all()
        ]);
    }
}