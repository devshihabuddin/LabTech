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
          <li>Contact</li>
        </ol>
        <h2>Contact</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
      @if(Session::has('success'))
            <div class="alert alert-success fade show" id="alert" role="alert">
            {{ Session::get('success')}}
            </div>
            @endif  
       @foreach($contacts as $contact)
        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>{{$contact->address}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>{{$contact->email}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>{{$contact->phone}}</p>
            </div>
          </div>

        </div>
      

        <div class="row">
          <div class="col-lg-6 ">
            <iframe class="contact iframe" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" 
            ></iframe>
          </div>
          @endforeach
          <div class="col-lg-6">
                  
            <form action="{{route('clientmessage.store')}}" method="post">
                @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group ">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="phone" id="subject" placeholder="Phone" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div><br>
              <div class="text-center">
                <input class="btn btn-success" type="submit" value="Send Message">
            </div>             
            </form>
          </div>
        </div>
        
        
      </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
  <style>
    .contact iframe {
  border:0; 
  width: 100%; 
  height: 384px;
}
</style>
@endsection

@section('js')

@endsection