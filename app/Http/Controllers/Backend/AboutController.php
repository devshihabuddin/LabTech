<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Symfony\Contracts\Service\Attribute\Required;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::latest()->get();
        return view('backend.about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about.create');
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
            'title'              => 'string|required',
            'short_description'  => 'string|required',
            'image'              => 'required|image|mimes:jpeg,png,jpg',
            'mission'            => 'string|nullable',
            'vision'             => 'string|nullable',
            'quality_image'      => 'required'
        ]);
        $data = $request->all();
        if($image = $request->file('image')){
            $destinationPath = 'images/';
            $aboutImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $aboutImage);
            $data['image'] = "$aboutImage";
        }
        if($quality_image = $request->file('quality_image')){
            $destinationPath = 'images/';
            $aboutImage = date('YmdHis') . "." .$quality_image->getClientOriginalExtension();
            $quality_image->move($destinationPath, $aboutImage);
            $data['quality_image'] = "$aboutImage";
        }
        $about = About::create($data);
     
       if($about){
           return redirect()->route('abouts.index')->with('success','Successfully Created About');
       }else{
           return back()->with('error','Something went wrong');
       }
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
        $about = About::find($id);
        return view('backend.about.edit',compact('about'));
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
        $about=About::find($id);
        $this->validate($request,[
            'title'              => 'string|required',
            'short_description'  => 'string|required',
            'image'              => 'nullable|image|mimes:jpeg,png,jpg',
            'mission'            => 'string|nullable',
            'vision'             => 'string|nullable',
            'quality_image'      => 'nullable'
        ]);
        $data = $request->all();
        if($image = $request->file('image')){
            $destinationPath = 'images/';
            $aboutImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $aboutImage);
            $data['image'] = "$aboutImage";
        }else{
            unset($data['image']);
        }
        if($quality_image = $request->file('quality_image')){
            $destinationPath = 'images/';
            $aboutImage = date('YmdHis') . "." .$quality_image->getClientOriginalExtension();
            $quality_image->move($destinationPath, $aboutImage);
            $data['quality_image'] = "$aboutImage";
        }else{
            unset($data['quality_image']);
        }
        $about->update($data);
     
       if($about){
           return redirect()->route('abouts.index')->with('success','Successfully Updated About');
       }else{
           return back()->with('error','Something went wrong');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        About::find($id)->delete();
        return redirect()->back()->with('success','Successfully Deleted About');
    }
}
