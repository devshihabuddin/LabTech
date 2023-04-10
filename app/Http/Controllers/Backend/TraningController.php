<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Traning;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TraningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tranings = Traning::latest()->get();
        return view('backend.traning.index',compact('tranings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.traning.create');
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
            'title'        => 'required',
            'description'  => 'string|nullable',
            'image'        => 'required|image|mimes:jpeg,png,jpg',
        ]);
        $data = array();
        $data['title']              =$request->title;
        $data['description']        =$request->description;

        $slug = Str::slug($request->input('title'));
        if($image = $request->file('image')){
            $destinationPath = 'images/traning/';
            $traningImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $traningImage);
            $data['image'] = "$traningImage";
        }
        $data['slug']=date('YmdHis') . "-" .$slug;
        $tranings = Traning::create($data);
       if($tranings){
           
           return redirect()->back()->with('success','Traning Successfully Created');
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
        $traning = Traning::find($id);
        return view('backend.traning.edit',compact('traning'));
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
        $tranings = Traning::find($id);
        $this->validate($request,[
            'title'        => 'required',
            'image'        => 'nullable|image|mimes:jpeg,png,jpg',
        ]);
        $data = array();
        $data['title']              =$request->title;
        $data['description']        =$request->description;
        
        $slug = Str::slug($request->input('title'));
        if($image = $request->file('image')){
            $destinationPath = 'images/traning/';
            $traningImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $traningImage);
            $data['image'] = "$traningImage";
        }else{
            unset($data['image']);
        }
        $data['slug']=date('YmdHis') . "-" .$slug;
        $tranings->update($data);
       if($tranings){
           
           return redirect()->route('traning.index')->with('success','Traning Successfully Updated');
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
        Traning::find($id)->delete();
        return back()->with('success','Traning Successfully Deleted');
    }
}
