@extends('main-frontend.layouts.master')
@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>Product</li>
        </ol>
        <h2>Product Details</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Product Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8 entries">
            
            <div class="text-center">
              <div class="row">
              
                <div class="col-lg-12 col-md-4 mb-3">             
                    <div class="zoom card">
                      <br>
                      <div class="">
                        <img src="/images/product/{{$product->image}}"  />
                      </div>
                      
                      <h1><strong>{{$product->title}}</strong></h1>
                      
                      
                      <p class="card-text text-center">Description: {!! html_entity_decode($product->description) !!}</p>
                      <!-- <h4><strong>Description:</strong>{!! html_entity_decode($product->description) !!}</h4> -->
                      
                      <hr>
                        <h4>Brand:{{$product->brand}}</h4>
                        <hr>
                        <h4>Model:{{$product->model}}</h4>
                        <hr>
                        <h4>{{$product->made_by}}</h4>
                        
                        </div>
                        <button class="btn btn-sm btn-success"><a target="_blank" href="{{url('/view',$product->id)}}">Catalog</a></button>
                        
                      
                   
                </div>                             
              </div>                         
            </div>              
          </div>       
          <!-- End Product entries list -->
          <div class="col-lg-4">
                <div class="sidebar">
                <div class="sidebar-item search-form">
                    <form action="{{url('/search')}}" type="get">
                      <input type="search" name="query" placeholder="Search product Here.." class="form-control">
                      <button type="submit"><i class="bi bi-search"></i></button>
                    </form>
                  </div>
                    <h3 class="sidebar-title">Filter by Categories</h3>
                    <div class="sidebar-item categories">
                        <ul>
                        @foreach($categories as $category)
                            <li>
                            <a href="{{route('product.category',$category->slug)}}">{{$category->category_name}}</a>
                            ({{$category->products->count()}})
                            </li>
                        @endforeach
                        </ul>
                    </div>
                    <h3 class="sidebar-title">Recent Products</h3>
                    <div class="sidebar-item recent-posts">
                        @foreach($latest_products as $product)
                        <div class="post-item clearfix" class="entry-img">
                        <a href="{{route('product.details',$product->slug)}}">
                        <img src="/images/product/{{$product->image}}" alt="img" class="img-fluid">
                        <h4><a href="{{route('product.details',$product->slug)}}">{{$product->title}}</a></h4>
                        </div>
                        @endforeach
                    </div>
                </div>
          </div>
        </div>
        
      </div>     
    </section>
</main>
@endsection