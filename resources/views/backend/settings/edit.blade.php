@extends('backend.layouts.master')
@section('content')
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Edit Settings</h2>                     
                    </div>
                </div>
            </div>
            <div class="row clearfix">
            @include('backend.layouts.notification')
                <div class="col-md-12">
                    <div class="card">
                        <div class="body">
                            <form id="basic-form" action="{{route('settings.update',$setting->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                                <div class="form-group">
                                    <label>Project Title</label>
                                    <input type="text" name="title" placeholder=" Title" class="form-control" value="{{$setting->title}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <img src="/images/logo/{{$setting->image}}" width="300px" alt="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder=" email" class="form-control" value="{{$setting->email}}">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="number" name="phone" placeholder=" phone" class="form-control" value="{{$setting->phone}}">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" placeholder=" Address" class="form-control" value="{{$setting->address}}">
                                </div>
                                <div class="form-group">
                                    <label>Facebook Url</label>
                                    <input type="text" name="facebook_url" placeholder=" facebook_url" class="form-control" value="{{$setting->facebook_url}}">
                                </div>
                                <div class="form-group">
                                    <label>Twitter Url</label>
                                    <input type="text" name="twitter_url" placeholder=" twitter_url" class="form-control" value="{{$setting->twitter_url}}">
                                </div>
                                <div class="form-group">
                                    <label>Linkedin Url</label>
                                    <input type="text" name="linkedin_url" placeholder=" linkedin_url" class="form-control" value="{{$setting->linkedin_url}}">
                                </div>
                                <div class="form-group">
                                    <label>Instragram Url</label>
                                    <input type="text" name="instragram_url" placeholder=" instragram_url" class="form-control" value="{{$setting->instragram_url}}">
                                </div>
                              
                                <br>
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
@push('js')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
    $('#lfm1').filemanager('image');

</script>

<script>
    $(document).ready(function() {
        $('#description').summernote();
    });
  </script>
  <script>
      $('#is_parent').change(function(e){
          e.preventDefault();
          var is_checked=$('#is_parent').prop('checked');
          //alert(is_checked);
          if(is_checked){
              $('#parent_cat_div').addClass('d-none');
              $('#parent_cat_div').val('');

          }else{
              $('#parent_cat_div').removeClass('d-none');
          }
      })
  </script>
@endpush