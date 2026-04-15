<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Restaurant; // Add this import
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function addproduct()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $restaurants = Restaurant::orderBy('name', 'asc')->get(); // Add this

        return view('admin.addproduct', compact('categories', 'restaurants'));
    }

    function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric', // Changed from 'string' to 'numeric'
            'image' => 'required|mimes:jpg,jpeg,png|max:3048',
            'category_id' => 'required|exists:categories,id', // Add validation
            'restaurant_id' => 'required|exists:restaurants,id', // Add validation for restaurant
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->restaurant_id = $request->restaurant_id; // Add this

        $imagePath = $request->file('image')->store('images/products', 'public');
        $product->image = '/storage/' . $imagePath;
        $product->save();

        return back()->with('success', 'Product added successfully!');
    }

    public function products()
    {
        $products = Product::with(['category', 'restaurant']) // Add restaurant to eager load
            ->latest()
            ->paginate(20);

        return view('admin.allproduct', compact('products'));
    }

    function edit($id)
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $restaurants = Restaurant::orderBy('name', 'asc')->get(); // Add this
        $product = Product::find($id); // Simplified

        return view('admin.edit_products', compact('categories', 'restaurants', 'product'));
    }

    function view($id)
    {
        $product = Product::with(['category', 'restaurant'])->find($id); // Load relationships
        $categories = Category::orderBy('name', 'asc')->get();

        return view('admin.view_product', compact('product', 'categories'));
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'restaurant_id' => 'required|exists:restaurants,id', // Add validation
            'image' => 'nullable|mimes:jpg,jpeg,png|max:3048', // Make image optional for update
        ]);

        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->restaurant_id = $request->restaurant_id; // Add this

        // Handle image update if a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($product->image && file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }
            
            $imagePath = $request->file('image')->store('images/products', 'public');
            $product->image = '/storage/' . $imagePath;
        }
        
        $product->save();

        return back()->with('success', 'Product updated successfully!');
    }

    function delete($id)
    {
        $product = Product::find($id);
        
        // Delete product image
        if ($product->image && file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }
        
        $product->delete();

        return back()->with('success', 'Product deleted successfully!');
    }
}