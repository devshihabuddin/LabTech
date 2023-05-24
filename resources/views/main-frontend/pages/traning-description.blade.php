@extends('main-frontend.layouts.master')
@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>Traning</li>
        </ol>
        <h2>Traning</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Product Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8 entries">
            <div class="clearfix mb-3">
              <!-- <div class="float-start">
                  <strong>Showing </strong> <span> 1-9</span> <span> of </span> <span class="total-products"> 14 </span>
                  <span>results</span>
                </div> -->
                
            </div>
            <div class="text-center">
              <div class="row">
              @foreach($tranings as $traning)
                <div class="col-lg-12 col-md-4 mb-3">             
                    <div class="zoom">
                      <div class="">
                        <img src="/images/traning/{{$traning->image}}" class="w-100" />
                      </div>
                      <div class="card">
                        <h4><strong>{{$traning->title}} </strong><small>Traning</small></h4>
                        <h6 class=""><b>Description :</b> <span class="brand">{!! html_entity_decode($traning->description) !!}</span></h6>
                      </div>
                    </div>                   
                </div>               
                @endforeach
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
                        <img src="/images/product/{{$product->image}}" alt="img" class="img-fluid">
                        <h4><a href="blog-single.html">{{$product->title}}</a></h4>
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