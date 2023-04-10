@extends('backend.layouts.master')
@section('content')
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Add User</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Users</li>
                            <li class="breadcrumb-item active">Add User</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    @include('backend.layouts.notification')
                    <div class="card">
                        <div class="body">
                            <form id="basic-form" action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>User Name:</label>
                                    <input type="text" name="username" placeholder="username" class="form-control"  value="{{$user->username}}">
                                </div>
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="email" name="email" placeholder="abc@gmail.com" class="form-control"  value="{{$user->email}}">
                                </div>
                                <div class="form-group">
                                    <label>Phone:</label>
                                    <input type="number" name="phone" placeholder="+88.." class="form-control"  value="{{$user->phone}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image" class="form-control">
                                    <img src="/images/user/{{$user->image}}" width="300px" alt="">

                                </div>
                                <div class="form-group">
                                    <label>Password:</label>
                                    <input type="password" name="password" placeholder="+password.." class="form-control" value="{{$user->password}}">
                                </div>
                                <br>
                                <input type="submit" class="btn btn-primary" value="Submit">
                                <button type="submit" class="btn btn-outline-secondary">Cancle</button>
                            </form>
                        </div>
                    </div>
                </div>          
            </div>            
        </div>
    </div>
@endsection
@push('js')

@endpush