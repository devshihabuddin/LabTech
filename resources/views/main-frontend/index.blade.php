@extends('main-frontend.layouts.master')
@section('content')
<main id="main" >
<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox"> 
          
          @foreach(\App\Models\Slider::where('status','active')->get() as $slider)
          <div class="carousel-item active" style="background-image: url(images/{{$slider->image}})">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>{{$slider->title}}</span></h2>
                <p class="animate__animated animate__fadeInUp">{!! html_entity_decode($slider->description) !!}</p>               
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
      </div>
    </div>
  </section><!-- End Hero -->
    <section id="portfolio" class="portfolio" style="padding: 0 0 20px 0;">
      <div class="container">
          <div class="row portfolio-container">
           @foreach($categories as $category)
            <div class="col-lg-3 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="images/{{$category->image}}" style="height: 200px; width: 500px;" class="img-fluid" alt="">
                <div class="portfolio-info">
                  
                  <div class="portfolio-links">
                    <a href="{{route('product.category',$category->slug)}}" title="More Details">{{strtoupper($category->category_name)}}</a>
                  </div>
                </div>
              </div>
            </div>
           @endforeach
          </div>
      </div>
    </section>
    <section id="product-slide" class="product-slide" style="background-color: #f3f3f3!important; padding-top: 30px; padding-bottom: 30px;">
      <div class="container">
        <div class="section-title">
          <h2>Products</h2>
        </div>
        <div class="row gy-4">         
          <div class="col-lg-12">
            <div class="product-slide-slider swiper">
            <div class="float-start">
                <strong>Showing </strong> <span> 1- 4</span> <span> of </span> <span class="total-products"> <strong>{{\App\Models\Product::count()}}</strong> </span>
                <span>results</span>
              </div>
              <div class="swiper-wrapper align-items-center">        
                <div class="swiper-slide">                
                  <div class="row">
                  @foreach($products as $product)
                    <div class="col-md-3">
                      <div class="card">
                        <img class="card-img-top" src="/images/product/{{$product->image}}" style="height: 200px;" alt="Card image">
                        <div class="card-body">
                          <strong class="card-title">{{$product->title}}</strong>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>                 
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Product Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="padding-top: 30px;">
      <div class="container">
      <div class="section-title mt-2">
          <h2>LabTech</h2>
        </div>
        @foreach($abouts as $about)
        <div class="row">         
          <div class="col-lg-6 pt-4 pt-lg-0 content">           
            <p class="fst-italic">
            {!! html_entity_decode($about->short_description) !!}
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <img src="images/{{$about->image}}" width="400" class="img-fluid" alt="">
          </div>
        </div>
        @endforeach
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients" style="background-color: #f3f3f3!important;
  padding-top: 30px;">
      <div class="container">
        <div class="section-title">
          <h2>Clients</h2>
        </div>
        <div class="clients-slider swiper">       
          <div class="swiper-wrapper align-items-center">
          @foreach($clients as $client)
            <div class="swiper-slide"><img src="/images/client/{{$client->image}}" class="img-fluid" alt=""></div>
            @endforeach
          </div>     
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- End Clients Section --> 
</main><!-- End #main -->
@endsection