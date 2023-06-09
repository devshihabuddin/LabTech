<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // product page
    public function index(){
        $products = Product::Paginate(6);
        $categories=Category::with('products')->get();
        $latest_products = Product::latest()->limit('5')->get();
        return view('main-frontend.pages.products',compact('products','categories','latest_products'));
    }
    public function productDetails(Request $request,$slug)
    {
        $product = Product::where('slug',$slug)->first();
        $categories=Category::with('products')->get();
        $latest_products = Product::latest()->limit('5')->get();
        return view('main-frontend.pages.product-details',compact('product','categories','latest_products'));
    }
}
