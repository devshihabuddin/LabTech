@extends('main-frontend.layouts.master')
@section('css')

@endsection
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>training</li>
        </ol>
        <h2>Training</h2>
      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Training Section ======= -->
    <section id="training" class="training">
      <div class="container">
        <div class="row">
          @foreach($tranings as $traning)
          <div class="col-lg-4 col-md-4 mb-3">
            <a href="{{route('traning.description',$traning->slug)}}">
              <div class="zoom">
                <div class="">
                  <img src="/images/traning/{{$traning->image}}" class="w-100" />
                </div>
                <div class="p-3">
                  <h4><a href="{{route('traning.description',$traning->slug)}}">{{$traning->title}}</a></h4>
                </div>
              </div>
            </a>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End training Section -->
  </main><!-- End #main -->
@endsection

