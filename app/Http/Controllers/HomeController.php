<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // retrieve data from database
        $blogs = Blog::latest()->get();

        // send to the blade file
        return view("blog.index", [
            'articles'  => $blogs,
        ]);
    }


    public function show(Blog $blog)
    {

        return view("blog.show", [
            'blog' => $blog,
        ]);
    }
}
