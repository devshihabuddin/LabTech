<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CEOtalk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompanyCEOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ceotalks = CEOtalk::all();
        return view('backend.CEO.index',compact('ceotalks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.CEO.create');
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
        $data = $request->all();
        if($image = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
        $talks = CEOtalk::create($data);
       if($talks){
           
           return redirect()->route('ceotalks.index')->with('success','Successfully Created');
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
        $talks = CEOtalk::find($id);
        return view('backend.CEO.edit',compact('talks'));
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
        $ceotalks = CEOtalk::find($id);
        $this->validate($request,[
            'title'        => 'required',
            'description'  => 'string|required',
        ]);
        $data = $request->all();
        if($image = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }else{
            unset($data['image']);
        }

        $ceotalks->update($data);
        return redirect()->route('ceotalks.index')->with('success','updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CEOtalk::find($id)->delete();
        return redirect()->back()->with('success','successfully Deleted.');
    }
}
