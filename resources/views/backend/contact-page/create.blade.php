@extends('backend.layouts.master')
@section('content')
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Create Contact US</h2>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
            @include('backend.layouts.notification')
                <div class="col-md-12">
                    <div class="card">
                        <div class="body">
                            <form id="basic-form" action="{{route('contactpage.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder=" email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="number" name="phone" placeholder=" phone" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" placeholder=" Address" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label> Map_url</label>
                                    <textarea class="form-control" id="map_url" name="map_url" placeholder="write somthing..." rows="5" cols="30"></textarea>
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
        $('#map_url').summernote();
    });
  </script>
@endpush