@extends('backend.layouts.master')
@section('content')
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Add CEO Talks</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">CEO Talks</li>
                            <li class="breadcrumb-item active">Form CEO Talks</li>
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
                            <form action="{{route('ceotalks.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" placeholder="Title" class="form-control"  required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="write somthing..." rows="5" cols="30" required></textarea>
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
