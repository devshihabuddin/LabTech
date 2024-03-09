<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File; 


class ProdutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('backend.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('backend.product.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'        => 'string|required',
            'model'        => 'string|nullable',
            'made_by'      => 'string|nullable',
            'brand'        => 'string|nullable',
            'image'        => 'required|image|mimes:jpeg,png,jpg',
            'file'         => 'nullable|file|mimes:pdf',
        ]);
        $categoryId =DB::table('subcategories')->where('id',$request->subcategory_id)->first()->category_id;
        //DB::table('subcategories')->where('id',$request->id)->first();
        $slug = Str::slug($request->title);

        $data = array();
        $data['category_id']    = $categoryId;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['title']          = $request->title;
        $data['slug']           = $slug;
        $data['model']          = $request->model;
        $data['made_by']        = $request->made_by;
        $data['brand']          = $request->brand;
        $data['description']    = $request->description;

        if($image = $request->file('image')){
            $destinationPath = 'images/product/';
            $productImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $productImage);
            $data['image'] = "$productImage";
        }
        if($file = $request->file('file')){
            $destinationPath = 'images/product-pdf/';
            $productPdf = date('YmdHis') . "." .$file->getClientOriginalExtension();
            $file->move($destinationPath, $productPdf);
            $data['file'] = "$productPdf";
        }
        $product = Product::create($data);

     
       if($product){
           
           return redirect()->back()->with('success','Successfully Created Product');
       }else{
           return back()->with('error','Something went Product');
       }
    }

    //pdf download
    public function download($file){
        return response()->download(public_path('/images/product-pdf/'.$file));
    }
    //pdf view 
    public function pdfView($id){
        $data = Product::find($id);
        return view('backend.product.pdfview',compact('data'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $product = Product::find($id);
        return view('backend.product.edit',compact('product','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $this->validate($request,[
            'title'        => 'required',
        ]);
        $categoryId =DB::table('subcategories')->where('id',$request->subcategory_id)->first()->category_id;
        $slug = Str::slug($request->title);

        $data = array();
        $data['category_id']    =$categoryId;
        $data['subcategory_id'] =$request->subcategory_id;
        $data['title']          =$request->title;
        $data['slug']           =$slug;
        $data['model']          = $request->model;
        $data['made_by']        = $request->made_by;
        $data['brand']          = $request->brand;
        $data['description']    = $request->description;

        if($image = $request->file('image')){
            $destinationPath = 'images/product/';
            $productImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $productImage);
            $data['image'] = "$productImage";
        }else{
            unset($data['image']);
        }
        if($file = $request->file('file')){
            $destinationPath = 'images/product-pdf/';
            $productPdf = date('YmdHis') . "." .$file->getClientOriginalExtension();
            $file->move($destinationPath, $productPdf);
            $data['file'] = "$productPdf";
        }else{
            unset($data['file']);
        }
        $product->update($data);

        return redirect()->route('products.index')->with('success','Product Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('success','Product Successfully Deleted');
    }
}
