<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('backend.slider.index',compact('sliders'));
    }

    // status->active/inactive button
    public function sliderstatus(Request $request){
        if($request->mode=='true'){
            DB::table('sliders')->where('id',$request->id)->update(['status'=>'active']);
        }else{
            DB::table('sliders')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Successfully updated status','status'=>true]);
    }

    public function create()
    {
        return view('backend.slider.create');
    }

    public function store(Request $request)
    {
       
        $this->validate($request,[
            'title'        => 'required',
            'description'  => 'string|nullable',
            'image'        => 'required|image|mimes:jpeg,png,jpg',
            'status'       => 'nullable|in:active,inactive'
        ]);
        $data = $request->all();
        $slug = Str::slug($request->input('title'));
        if($image = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
        $data['slug']=date('YmdHis') . "-" .$slug;
        $slider = Slider::create($data);
       if($slider){
           
           return redirect()->back()->with('success','Successfully Created Slider');
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
        $slider = Slider::find($id);
        return view('backend.slider.edit',compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        $this->validate($request,[
            'title'        => 'required',
            'description'  => 'string|required',
        ]);
        $data = $request->all();
        $slug = Str::slug($request->input('title'));
        if($image = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }else{
            unset($data['image']);
        }
        $data['slug']=date('YmdHis') . "-" .$slug;

        $slider->update($data);
        return redirect()->route('sliders.index')->with('success','Slider updated successfully.');

    }

    public function destroy($id)
    {
        Slider::find($id)->delete();
        return redirect()->back()->with('success','Slider successfully Deleted.');
    }
}
