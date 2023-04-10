@extends('main-frontend.layouts.master')
@section('css')

@endsection
@section('content')
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="index.html">Home</a></li>
      <li>company</li>
    </ol>
    <h2>Company</h2>

  </div>
</section><!-- End Breadcrumbs -->
@foreach($abouts as $about)
<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row">
      <div class="col-lg-6">
        <img src="/images/{{$about->image}}" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content">
        <h3>{{$about->title}}</h3>
        <p>{!! html_entity_decode($about->short_description) !!}
        </p>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Mission Vission Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row">
      <div class="col-lg-6 pt-4 pt-lg-0 content">
        <h3>Mission</h3>
        <p>
        {!! html_entity_decode($about->mission) !!}
        </p>
        <h3>Vision</h3>
        <p>
        {!! html_entity_decode($about->vision) !!}
        </p>
      </div>
      <div class="col-lg-6">
        <h3>Quality</h3>
        <img src="/images/{{$about->quality_image}}" class="img-fluid" alt="">
      </div>
    </div>

  </div>
</section><!-- End Mission Vission  Section -->
@endforeach


</main><!-- End #main -->
@endsection

@section('js')

@endsection