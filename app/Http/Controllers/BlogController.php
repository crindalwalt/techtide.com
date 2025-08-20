<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{

    public function dashboard (){
        return view('admin.dashboard');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allBlogs = Blog::latest()->get();

        return view("admin.blog.index",[
            'blogs' => $allBlogs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.blog.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        //file upload
        if($request->hasFile("cover_image")){
            $image = $request->file("cover_image");
            $extension = $image->getClientOriginalExtension();
            $filename = "BLOG_IMG-" . time()  . "."  . $extension;

            $image->storePubliclyAs("Blog-Images",$filename,"public");
        }else{
            dd("file exist nai krti ");

        }



        // save the data into the database
        $newBlog = Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id,
            'time_to_read' => $request->time_to_read,
            'cover_image' => "storage/Blog-Images/" . $filename,
            'cover_image_caption' => $request->cover_image_caption,
            'blog_body' => $request->blog_body,
            'tags' => $request->tags,
        ]);

        Alert::success("Blog posted 🎊","Your blog is not live on the website");
        return redirect()->route("admin.blog.list");

    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
