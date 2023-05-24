@extends('main-frontend.layouts.master')
@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>products</li>
        </ol>
        <h2>Results for Products</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    @if(count($products)>0)
        <!-- ======= Product Section ======= -->
        <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
            <div class="col-lg-12 entries">
                <div class="text-center">
                <div class="row">
                @foreach($products as $product)
                    <div class="col-lg-3 col-md-6 mb-2">             
                        <div class="card">
                        <div>
                            <img src="/images/product/{{$product->image}}" class="w-100" />
                        </div>
                        <div class="card-body">
                            <h5>{{$product->title}}</h5>
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
            </div>
        </div>
        </section>
    @else
        <div class="col-12 " >
            <h1>---No result found---</h1>
        </div>
    @endif
</main>
@endsection