<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::all();
        return view('backend.settings.index',compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
       $this->validate($request,[
        'title'        => 'required',
        'phone'        => 'required',
        'email'        => 'required',
        'address'      => 'required',
        'image'        => 'required|image|mimes:jpeg,png,jpg',
    ]);
       
        $data = array();
        $data['title']              =$request->title;
        $data['phone']              =$request->phone;
        $data['email']              =$request->email;
        $data['address']            =$request->address;
        $data['facebook_url']       =$request->facebook_url;
        $data['instragram_url']     =$request->instragram_url;
        $data['twitter_url']        =$request->twitter_url;
        $data['linkedin_url']       =$request->linkedin_url;
        

        if($image = $request->file('image')){
            $destinationPath ='images/logo/';
            $profileImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
        $setting = Setting::create($data);
    
       if($setting){
           return redirect()->route('settings.index')->with('success','Successfully Created Settings');
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
        $setting = Setting::find($id);
       return view('backend.settings.edit',compact('setting'));
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
        $settings = Setting::find($id);
        $this->validate($request,[
            'title'        => 'required',
            'phone'        => 'required',
            'email'        => 'required',
            'address'      => 'required',
            'image'        => 'nullable|image|mimes:jpeg,png,jpg',
        ]);
        $data = array();
        $data['title']              =$request->title;
        $data['phone']              =$request->phone;
        $data['email']              =$request->email;
        $data['address']            =$request->address;
        $data['facebook_url']       =$request->facebook_url;
        $data['instragram_url']     =$request->instragram_url;
        $data['twitter_url']        =$request->twitter_url;
        $data['linkedin_url']       =$request->linkedin_url;
        

        if($image = $request->file('image')){
            $destinationPath ='images/logo/';
            $profileImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }else{
            unset($data['image']);
        }
        $settings->update($data);
    
        return redirect()->route('settings.index')->with('success','Successfully Updated Settings');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setting = Setting::find($id);
        $setting->delete();
        return redirect()->back()->with('success','Settings Successfully Deleted');
    }
}
