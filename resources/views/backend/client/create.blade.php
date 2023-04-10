@extends('backend.layouts.master')
@section('content')
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Add Client</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Client</li>
                            <li class="breadcrumb-item active">Form Client</li>
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
                            <form id="basic-form" action="{{route('clients.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Client Company Name</label>
                                    <input type="text" name="title" placeholder="Name..." class="form-control"  required>
                                </div>
                                <div class="form-group">
                                    <label>Client website Link</label>
                                    <input type="text" name="web_url" placeholder="www.websitelink.com" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Logo</label>
                                    <input type="file" class="form-control" name="image" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="status" class="form-control" id="">
                                        <option value="active" {{old('status')=='active' ? 'selected' : ''}}> Active</option>
                                        <option value="inactive" {{old('status')=='inactive' ? 'selected' : ''}}> Inactive</option>
                                    </select>
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
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>

<script>
    $(document).ready(function() {
        $('#description').summernote();
    });
  </script>
@endpush