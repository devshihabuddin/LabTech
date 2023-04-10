@extends('backend.layouts.master')
@section('content')
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Add About</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">About</li>
                            <li class="breadcrumb-item active">Edit About</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
            <div class="col-lg-12">
                @include('backend.layouts.notification')
            </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="body">
                            <form action="{{route('abouts.update',$about->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" placeholder=" Short Title" class="form-control" value="{{$about->title}}">
                                </div>
                                <div class="form-group">
                                    <label> Short Description</label>
                                    <textarea class="form-control" id="short_description" name="short_description" placeholder="write somthing..." rows="5" cols="30">{{$about->short_description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image" class="form-control">
                                    <img src="/images/{{$about->image}}" width="300px" alt="">
                                </div>
                                <div class="form-group">
                                    <label>Mission</label>
                                    <textarea class="form-control" id="mission" name="mission" placeholder="write somthing..." rows="5" cols="30">{{$about->mission}}</textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label>Vision</label>
                                    <textarea class="form-control" id="vision" name="vision" placeholder="write somthing..." rows="5" cols="30">{{$about->vision}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Quality Image</label>
                                    <input type="file" class="form-control" name="quality_image" class="form-control">
                                    <img src="/images/{{$about->quality_image}}" width="300px" alt="">
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
<script>
    $(document).ready(function() {
        $('#short_description').summernote();
    });
    $(document).ready(function() {
        $('#mission').summernote();
    });
    $(document).ready(function() {
        $('#vision').summernote();
    });
  </script>
@endpush