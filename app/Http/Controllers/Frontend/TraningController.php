<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Traning;
use Illuminate\Http\Request;

class TraningController extends Controller
{
   //traning page
   public function traning(){
    $tranings = Traning::latest()->get();
    return view('main-frontend.pages.traning',compact('tranings'));
   }

    public function traningDescription(Request $request,$slug){
        $tranings = Traning::where('slug',$slug)->get();
        $categories=Category::with('products')->get();
        $latest_products = Product::latest()->limit('5')->get();
        return view('main-frontend.pages.traning-description',compact('tranings','categories','latest_products'));
    }
}
