<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function sections(){
        return view('sections');
    }

    public function contact(){
        return view('contact');
    }

    public function product_details($slug){
        $product = Product::where('slug', $slug)->first();
        return view('product-details', compact('product'));
    }
}
