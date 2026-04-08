<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function addcategory()
    {
        return view('admin.addcategory');
    }

    function store(Request $request)
    {
        $Category = new Category();
        $Category->name = $request->name;
        $Category->save();

        return back();
    }
}
