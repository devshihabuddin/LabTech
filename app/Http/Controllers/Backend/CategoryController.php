<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('backend.category.index',compact('categories'));
    }
    
    // status->active/inactive button
    public function categorystatus(Request $request){
        if($request->mode=='true'){
            DB::table('categories')->where('id',$request->id)->update(['status'=>'active']);
        }else{
            DB::table('categories')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Successfully updated status','status'=>true]);
    }

    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'category_name' => 'required',
            'image'         => 'required|image|mimes:jpeg,png,jpg',
        ]);
        $data = $request->all();
        $slug = Str::slug($request->input('category_name'));
        if($image = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
        $data['slug']=$slug;
        $category = Category::create($data);

     
       if($category){
           
           return redirect()->back()->with('success','Successfully Created Category');
       }else{
           return back()->with('error','Something went wrong');
       }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $this->validate($request,[
            'category_name' => 'required',
        ]);
        $data = $request->all();
        $slug = Str::slug($request->input('category_name'));
        if($image = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }else{
            unset($data['image']);
        }
        $data['slug']=$slug;
        $category->update($data);

     
       if($category){
           return redirect()->route('category.index')->with('success','Successfully Updated Category');
       }else{
           return back()->with('error','Something went wrong');
       }
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->back()->with('success','Category successfully Deleted.');
    }
}
