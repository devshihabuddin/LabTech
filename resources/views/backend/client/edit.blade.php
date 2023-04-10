@extends('backend.layouts.master')
@section('content')
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Edit Client</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Client</li>
                            <li class="breadcrumb-item active">Form Client</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="body">
                            <form id="basic-form" action="{{route('clients.update',$client->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Client Company Name</label>
                                    <input type="text" name="title" value="{{$client->title}}" placeholder=" client Title" class="form-control"  required>
                                </div>
                                <div class="form-group">
                                    <label>Client website Link</label>
                                    <input type="text" name="web_url" value="{{$client->web_url}}" placeholder="www.websitelink.com" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <img src="/images/client/{{$client->image}}" width="300px" alt="">
                                </div><br>
                                <input type="submit" class="btn btn-primary" value="Update">
                                <button type="submit" class="btn btn-outline-secondary">Cancle</button>
                            </form>
                        </div>
                    </div>
                </div>
             
            </div>
            
        </div>
    </div>
@endsection
