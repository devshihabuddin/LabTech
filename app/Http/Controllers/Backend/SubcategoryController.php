<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategory = Subcategory::latest()->get();
        return view('backend.subcategory.index',compact('subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('backend.subcategory.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'category_id'       => 'required',
            'subcategory_name'  => 'required|unique:subcategories'
        ]);

        $data = array([
            'category_id'       => $request->category_id,
            'subcategory_name'  => $request->subcategory_name,
            'subcategory_slug'  => Str::slug($request->subcategory_name)
        ]);
        Subcategory::insert($data);
        return redirect()->back()->with('success','Successfully Created Sub-Category');
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
        $subcategories = Subcategory::find($id);
        return view('backend.subcategory.edit',compact('subcategories','category'));
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
        $subcategory = Subcategory::find($id);

        $subcategory->category_id       = $request->category_id;
        $subcategory->subcategory_name  = $request->subcategory_name;
        $subcategory->subcategory_slug  = Str::slug($request->subcategory_name);
        $subcategory->save();

        return redirect()->route('subcategory.index')->with('success','Successfully Updated Sub-Category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subcategory::find($id)->delete();
        return redirect()->back()->with('success','Successfully Deleted Sub-Category');
    }
}
