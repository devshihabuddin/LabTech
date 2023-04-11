@extends('backend.layouts.master')
@section('content')
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Create Settings</h2>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
            @include('backend.layouts.notification')
                <div class="col-md-12">
                    <div class="card">
                        <div class="body">
                            <form id="basic-form" action="{{route('settings.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Project Title</label>
                                    <input type="text" name="title" placeholder=" Title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Logo</label>
                                    <input type="file" name="image" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder=" email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" name="phone" placeholder=" phone" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" placeholder=" Address" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Facebook Url</label>
                                    <input type="text" name="facebook_url" placeholder=" facebook_url" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Twitter Url</label>
                                    <input type="text" name="twitter_url" placeholder=" twitter_url" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Linkedin Url</label>
                                    <input type="text" name="linkedin_url" placeholder=" linkedin_url" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>YouTube Url</label>
                                    <input type="text" name="instragram_url" placeholder="YouTube_url" class="form-control">
                                </div><br>
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
