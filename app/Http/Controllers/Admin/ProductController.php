<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function addproduct()
    {
        $categories = Category::orderBy('name', 'asc')->get();


        return view('admin.addproduct', compact('categories'));
    }

    function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|string',
            'image' => 'required|mimes:jpg,jpeg,png|max:3048',

        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;

        $imagePath = $request->file('image')->store('images/products', 'public');
        $product->image = '/storage/' . $imagePath;
        $product->save();

        return back();
    }

    public function products()
    {
        $products = Product::with('category')   // eager load category
            ->latest()                          // optional: newest products first
            ->paginate(20);

        return view('admin.allproduct', compact('products'));
    }

    function edit($id)
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $product = Product::where('id', $id)->first();
        // or
        $product = Product::find($id);

        return view('admin.edit_products', compact('categories', 'product'));
    }

    function view($id)
    {
        // Fetch the product by ID
        $categories = Category::orderBy('name', 'asc')->get();
        $product = Product::where('id', $id)->first();
        // or

        // Return the view with product data
        return view('admin.view_product', compact('product'));
    }

    function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->save();

        return back();
    }


    function delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return back();
    }
}
