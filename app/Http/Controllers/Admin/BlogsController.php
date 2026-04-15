<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogsController extends Controller
{

    function store(Request $request) {
        $blog = new Blog();
        $blog ->title = $request->title;
        $blog ->content= $request->content;
        $blog->source = $request->source;
        $blog->save();

        return back();
    }

    function blogs() {
        return view("admin.blogs");
    }

    function show(){
        $blogs = Blog::all();
        return view("blogs.show", compact("blogs"));
    }
}
