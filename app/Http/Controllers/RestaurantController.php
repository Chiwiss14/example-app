<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('admin.restaurants', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     
        return view('restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|string|max:255',
            'address' => 'required|string',
            'image' => 'required|mimes:jpg,jpeg,png|max:3048',
        ]);

    
        $restaurant = new Restaurant();
        $restaurant->name = $request->name;
        $restaurant->email = $request->email;
        $restaurant->address = $request->address;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/restaurants', 'public');
            $restaurant->image = '/storage/' . $imagePath;
        }
        
        $restaurant->save();

        return redirect()->route('admin.restaurants.index')
            ->with('success', 'Restaurant created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        return view('admin.restaurants.show', compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        // Use Route Model Binding for cleaner code
        return view('admin.restaurants.edit', compact('restaurant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|string|max:255',
            'address' => 'required|string',
            'image' => 'nullable|mimes:jpg,jpeg,png|max:3048', // Make image optional for update
        ]);

        $restaurant->name = $request->name;
        $restaurant->address = $request->address; 
        $restaurant->email = $request->email;

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($restaurant->image && Storage::disk('public')->exists(str_replace('/storage/', '', $restaurant->image))) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $restaurant->image));
            }
            
            $imagePath = $request->file('image')->store('images/restaurants', 'public');
            $restaurant->image = '/storage/' . $imagePath;
        }
        
        $restaurant->save();

        return redirect()->route('admin.restaurants.index')
            ->with('success', 'Restaurant updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        // Delete associated image
        if ($restaurant->image && Storage::disk('public')->exists(str_replace('/storage/', '', $restaurant->image))) {
            Storage::disk('public')->delete(str_replace('/storage/', '', $restaurant->image));
        }
        
        $restaurant->delete();
        
        return redirect()->route('admin.restaurants.index')
            ->with('success', 'Restaurant deleted successfully.');
    }
}