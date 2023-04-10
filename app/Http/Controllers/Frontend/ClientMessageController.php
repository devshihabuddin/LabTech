<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ClientMessage;
use Illuminate\Http\Request;

class ClientMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientmessages = ClientMessage::latest()->get();
        return view('backend.client-message.index',compact('clientmessages'));
    }

    public function create()
    {
        return view('main-frontend.pages.client-message');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'               => 'required',
            'phone'              => 'required',
            'email'              => 'required',
            'message'            => 'required',
        ]);
           
            $data = array();
            $data['name']        = $request->name;
            $data['phone']       = $request->phone;
            $data['email']       = $request->email;
            $data['message']     = $request->message;
            
            $message = ClientMessage::create($data);
        
           if($message){
               return redirect()->back()->with('success','Message Send');
           }else{
               return back()->with('error','Something went wrong');
           }
    }
    public function show($id)
    {
        $clientmessages = ClientMessage::find($id);
        return view('backend.client-message.show',compact('clientmessages'));
    }
    public function destroy($id)
    {
        ClientMessage::find($id)->delete();
        return redirect()->back()->with('success','Message Sucssfully Deleted');
    }
}
