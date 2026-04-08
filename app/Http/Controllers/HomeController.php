<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function productPage()
    {
        $products = Product::all();
       return view ('products', compact('products'));
    }

    function cartPage() {
        return view ('carts');
     }


     function checkoutPage() {
        return view ('checkout');
     }


     function productdetailsPage() {
        return view ('productdetails');
     }
    }
