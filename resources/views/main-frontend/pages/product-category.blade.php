@extends('main-frontend.layouts.master')
@section('content')
<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>products</li>
      </ol>
      <h2>Products</h2>
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
            <div class="float-end navbar" style="border: 1px solid #ededed;
    padding-right: 20px;">
              <ul>
                <li class="dropdown"><a href="#"><span>Products Sorting</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                    @foreach($categories as $category)
                    <li><a href="{{route('product.category',$category->slug)}}">{{strtoupper($category->category_name)}}</a></li>
                    @endforeach
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="text-center">
            <div class="row">
              @foreach($products as $product)
              <div class="col-lg-4 col-md-6 mb-2">
                <div class="card">
                  <div>
                    <img src="/images/product/{{$product->image}}" class="w-100 h-210" />
                  </div>
                  <div class="card-body">
                    <h5><strong>{{$product->title}}</strong></h5>
                    <h6 class=""><b>Brand :</b> <span class="brand">{{$product->brand}}</span></h6>
                    <h6 class=""><b>Model :</b> <span class="Model">{{$product->model}}</span></h6>
                    <p class=""><span class="cuntry">{{$product->made_by}}</span></p>
                    <button class="btn btn-primary"><a target="_blank" href="{{url('/view',$product->id)}}">View Details</a></button>
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
              <form action="{{url('/search')}}" type="get" style="border-radius: 7px; padding: 3px 10px;">
                <input type="search" name="query" placeholder="Search Product Here.." class="form-control">
                <button type="submit"><i class="bi bi-search"></i></button>
              </form>
            </div>
            <h3 class="sidebar-title" style="
    background-color: #e96b56;
    color: #fff;
    padding: 10px;">Filter by Categories</h3>
            <div class="sidebar-item categories">
              <ul>
                @foreach($categories as $category)
                <li>
                  <a href="{{route('product.category',$category->slug)}}">{{strtoupper($category->category_name)}}</a>
                  ({{$category->products->count()}})
                </li>
                @endforeach
              </ul>
            </div>
            <h3 class="sidebar-title" style="
    background-color: #e96b56;
    color: #fff;
    padding: 10px;">Recent Products</h3>
            <div class="sidebar-item recent-posts">
              @foreach($latest_products as $product)
              <div class="post-item clearfix" class="entry-img">
                <img src="/images/product/{{$product->image}}" alt="img" class="img-fluid">
                <h4><a href="blog-single.html"><strong>{{$product->title}}</strong></a></h4>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      {{ $products->links('pagination.custom')  }}
    </div>
  </section>
</main>
@endsection