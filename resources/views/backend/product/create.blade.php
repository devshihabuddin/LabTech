@extends('backend.layouts.master')
@section('content')
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Add Product</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Product</li>
                            <li class="breadcrumb-item active">Form Product</li>
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
                            <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" name="title" placeholder="Product Name" class="form-control"  required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category</label>
                                    <select name="subcategory_id" class="form-control" id="">
                                       
                                    <option selected disabled>Choose Category</option>
                                    @foreach($category as $cat)
                                        @php
                                            $subcategories =DB::table('subcategories')->where('category_id',$cat->id)->get();
                                        @endphp
                                        <option disabled class="text-info">{{$cat->category_name}}</option>
                                        @foreach($subcategories as $sub)
                                        <option value="{{$sub->id}}">---{{$sub->subcategory_name}}</option>
                                        @endforeach
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Model Name</label>
                                    <input type="text" name="model" placeholder="Model name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Brand Name</label>
                                    <input type="text" name="brand" placeholder="Brand Name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Made In</label>
                                    <input type="text" name="made_by" placeholder="Made in Bangladesh" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">PDF File</label>
                                    <input type="file" class="form-control" name="file" class="form-control">
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
        $('#description').summernote();
    });
</script>
@endpush
