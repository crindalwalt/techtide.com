<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // retrieve data from database
        $blogs = Blog::all();

        // send to the blade file
        return view("blog.index", [
            'articles'  => $blogs,
        ]);
    }


    public function show()
    {
        return view("blog.show");
    }
}
