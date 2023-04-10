<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::latest()->get();
        return view('backend.client.index',compact('clients'));
    }

    // status->active/inactive button
    public function clientstatus(Request $request){
        if($request->mode=='true'){
            DB::table('clients')->where('id',$request->id)->update(['status'=>'active']);
        }else{
            DB::table('clients')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Successfully updated status','status'=>true]);
    }

    public function create()
    {
        return view('backend.client.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'        => 'required',
            'web_url'      => 'nullable',
            'image'        => 'required|image|mimes:jpeg,png,jpg',
            'status'       => 'nullable|in:active,inactive'
        ]);
        $data = $request->all();
        if($image = $request->file('image')){
            $destinationPath = 'images/client/';
            $profileImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
        $client = Client::create($data);
       if($client){
           
           return redirect()->back()->with('success','Successfully Created Client');
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
        $client = Client::find($id);
        return view('backend.client.edit',compact('client'));
    }


    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        $this->validate($request,[
            'title'        => 'required',
            'image'        => 'nullable|image|mimes:jpeg,png,jpg',
        ]);
        $data = $request->all();
        if($image = $request->file('image')){
            $destinationPath = 'images/client/';
            $profileImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }else{
            unset($data['image']);
        }
        $client->update($data);

       return redirect()->route('clients.index')->with('success','Successfully Updated Client');
       
    }

    
    public function destroy($id)
    {
        Client::find($id)->delete();
        return redirect()->back()->with('success','Client successfully Deleted.');
    }
}
