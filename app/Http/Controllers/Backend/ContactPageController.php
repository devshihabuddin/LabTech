<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactPage;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = ContactPage::latest()->get();
        return view('backend.contact-page.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.contact-page.create');
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
            'map_url'            => 'nullable',
            'phone'              => 'required',
            'email'              => 'required',
            'address'            => 'required',
        ]);
           
            $data = array();
            $data['phone']       = $request->phone;
            $data['email']       = $request->email;
            $data['address']     = $request->address;
            $data['map_url']     = $request->map_url;
            
            $contacts = ContactPage::create($data);
        
           if($contacts){
               return redirect()->route('contactpage.index')->with('success','Contact Successfully Created');
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
        $contact = ContactPage::find($id);
        return view('backend.contact-page.edit',compact('contact'));
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
        $contact = ContactPage::find($id);
        $this->validate($request,[
            'map_url'            => 'nullable',
            'phone'              => 'required',
            'email'              => 'required',
            'address'            => 'required',
        ]);
           
            $data = array();
            $data['phone']       = $request->phone;
            $data['email']       = $request->email;
            $data['address']     = $request->address;
            $data['map_url']     = $request->map_url;
            
            $contact->update($data);
        
           if($contact){
               return redirect()->route('contactpage.index')->with('success','Contact Successfully Updated');
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
        ContactPage::find($id)->delete();
        return redirect()->back()->with('success','Contact Successfully Deleted');

    }
}
