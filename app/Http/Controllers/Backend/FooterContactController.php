<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FooterContact;
use Illuminate\Http\Request;

class FooterContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footercontacts = FooterContact::latest()->limit('1')->get();
        return view('backend.footer-contact.index',compact('footercontacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.footer-contact.create');
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
            'title'              => 'required',
            'phone'              => 'required',
            'email'              => 'required',
            'address'            => 'required',
            'short_description'  => 'required',
        ]);
           
            $data = array();
            $data['title']              =$request->title;
            $data['phone']              =$request->phone;
            $data['email']              =$request->email;
            $data['address']            =$request->address;
            $data['short_description']  =$request->short_description;
            
            $footer = FooterContact::create($data);
        
           if($footer){
               return redirect()->route('footercontact.index')->with('success','Footer Contact Successfully Created');
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
        $footer = FooterContact::find($id);
        return view('backend.footer-contact.edit',compact('footer'));
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
        $footers = FooterContact::find($id);
        $this->validate($request,[
            'title'              => 'required',
            'phone'              => 'required',
            'email'              => 'required',
            'address'            => 'required',
            'short_description'  => 'required',
        ]);
           
            $data = array();
            $data['title']              =$request->title;
            $data['phone']              =$request->phone;
            $data['email']              =$request->email;
            $data['address']            =$request->address;
            $data['short_description']  =$request->short_description;
            
            $footers->update($data);
        
           if($footers){
               return redirect()->route('footercontact.index')->with('success','Footer Contact Successfully Updated ');
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
        FooterContact::find($id)->delete();
        return redirect()->back()->with('success','Footer Contact Successfully Deleted');
    }
}
