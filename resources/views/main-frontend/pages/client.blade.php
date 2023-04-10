@extends('main-frontend.layouts.master')
@push('css')
<style>
  #clients .clients-wrap {
    border-top: 1px solid #d6eaff;
    border-left: 1px solid #d6eaff;
}
#clients .client-logo {
    /* padding: 64px; */
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-right: 1px solid #d6eaff;
    border-bottom: 1px solid #d6eaff;
    overflow: hidden;
    background: #fff;
    height: 160px;
}
</style>
@endpush
@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>clients</li>
        </ol>
        <h2>Our CLients</h2>
      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Our Client Section ======= -->
    <section id="clients" class="section-bg">
      <div class="container">
        <div class="row no-gutters clients-wrap clearfix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
          @foreach($clients as $client)
        <div class="col-lg-3 col-md-4 col-xs-6">
            <a target="_blank" href="{{$client->web_url}}">
              <div class="client-logo">
                <img src="/images/client/{{$client->image}}" class="img-fluid" alt="{{$client->title}}">
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
  </main>
@endsection

@section('js')

@endsection