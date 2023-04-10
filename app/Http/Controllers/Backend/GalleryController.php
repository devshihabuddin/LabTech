<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function index(){
        $galleries = Gallery::latest()->get();
        return view('backend.gallery.index',compact('galleries'));
    }

    public function create(){
        return view('backend.gallery.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'image'         => 'required|image|mimes:jpeg,png,jpg',
        ]);
        $data = $request->all();
        if($image = $request->file('image')){
            $destinationPath = 'images/gallery/';
            $profileImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
        $category = Gallery::create($data);
       if($category){ 
           return redirect()->back()->with('success','Successfully Created Category');
       }else{
           return back()->with('error','Something went wrong');
       }
    }

    public function destroy($id)
    {
        Gallery::find($id)->delete();
        return redirect()->back()->with('success','Successfully Deleted Gallery');
    }
}
