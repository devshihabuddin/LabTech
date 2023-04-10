<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Client;
use App\Models\ContactPage;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index(){
        $abouts     = About::latest()->get();
        $categories = Category::where(['status'=>'active'])->orderBy('id','DESC')->limit('8')->get();
        $clients    = Client::where(['status'=>'active'])->orderBy('id','DESC')->limit('5')->get();
        $products = Product::latest()->limit('4')->get();
        
        return view('main-frontend.index',compact('abouts','categories','clients','products'));
    }
    // Start home page category -> product
    public function productCategory(Request $request,$slug)
    {
        $category_products = Category::with('products')->where('slug',$slug)->first();
        $products = $category_products->products()->paginate(6);
        $categories=Category::with('products')->get();
        $latest_products = Product::latest()->limit('5')->get();
        return view('main-frontend.pages.product-category',compact('products','categories','latest_products'));
    }
    public function pdfView($id){
        $data = Product::find($id);
        return view('main-frontend.pages.pdfview',compact('data'));
    }
    //search product
    public function search(Request $request){
       // return $request->input();
        $search_text = $_GET['query'];
        $products = Product::where('title','LIKE', '%'.$search_text.'%')->get();
        return view('main-frontend.pages.search-category-product',compact('products'));
    }
    // End home page category -> product

    //subcategory page
    public function productSubCategory(Request $request,$id){
        $products = DB::table('products')->where('subcategory_id',$id)->paginate(6);
       // $subcategory_products = Subcategory::with('products')->where('subcategory_id',$id)->first();
      // $subcategory_products = DB::table('products')->leftJoin('subcategories','subcategories.id','products.subcategory_id')
       // $products = $subcategory_products->products()->paginate(6);
        $categories=Category::with('products')->get();
        $latest_products = Product::latest()->limit('5')->get();
        return view('main-frontend.pages.product-subcategory',compact('products','categories','latest_products'));
    }
    
    //gallary 
    public function gallary(){
        $galleries = Gallery::latest()->get();
        return view('main-frontend.pages.gallary',compact('galleries'));
    }
    ///our client page
    public function client(){
        $clients = Client::latest()->get();
        return view('main-frontend.pages.client',compact('clients'));
    }
    ///contact page 
    public function contact(){
        $contacts = ContactPage::latest()->get();
        return view('main-frontend.pages.contact-us',compact('contacts'));
    }
    
}
