@extends('main-frontend.layouts.master')
@push('css')
<style>
.photo-gallery {
    color: #313437;
    background-color: #fff;
  }

  .photo-gallery p {
    color: #7d8285;
  }

  .photo-gallery h2 {
    font-weight: bold;
    margin-bottom: 40px;
    padding-top: 40px;
    color: inherit;
  }

  @media (max-width:767px) {
    .photo-gallery h2 {
      margin-bottom: 25px;
      padding-top: 25px;
      font-size: 24px;
    }
  }

  .photo-gallery .intro {
    font-size: 16px;
    max-width: 500px;
    margin: 0 auto 40px;
  }

  .photo-gallery .intro p {
    margin-bottom: 0;
  }

  .photo-gallery .photos {
    padding-bottom: 20px;
  }

  .photo-gallery .item {
    padding-bottom: 30px;
  }
</style>
@endpush
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>gallery</li>
        </ol>
        <h2>Photo Gallery</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">
        <div class="photo-gallery">
          <div class="container">
            <div class="row photos">
              @foreach($galleries as $gallery)
              <div class="col-sm-6 col-md-4 col-lg-3 item">
                <a href="/images/gallery/{{$gallery->image}}" data-lightbox="photos">
                  <img class="img-fluid" src="/images/gallery/{{$gallery->image}}" alt="Image name">
                </a>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

@endsection

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endpush