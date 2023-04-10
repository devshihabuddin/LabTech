  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('/')}}">HOME</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('traning')}}">TRANING</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('gallery')}}">GALLERY</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('client')}}">CLIENTS</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('contact')}}">CONTACT US</a></li>
            </ul>
          </div>

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->
          @foreach(\App\Models\Setting::all() as $setting)
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Bangladesh Office</h4>
            <p>             
              {{$setting->address}} <br><br>
              <strong>Phone:</strong> {{$setting->phone}}<br>
              <strong>Email:</strong> {{$setting->email}}<br>
            </p>
          </div>
          @endforeach

          @foreach(\App\Models\FooterContact::all() as $footer)
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>China OFFice</h4>
            <p>             
              {{$footer->address}} <br><br>
              <strong>Phone:</strong> {{$footer->phone}}<br>
              <strong>Email:</strong> {{$footer->email}}<br>
            </p>
          </div>
          
          <div class="col-lg-3 col-md-6 footer-info">
          
            <h3>About {{$footer->title}}</h3>
            <p>{!! html_entity_decode($footer->short_description) !!}</p>
            @endforeach
            @foreach(\App\Models\Setting::all() as $setting)
            <div class="social-links mt-3">
              <a target="_blank" href="{{$setting->twitter_url}}" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a target="_blank" href="{{$setting->facebook_url}}" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a target="_blank" href="{{$setting->instragram_url}}" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a target="_blank" href="{{$setting->linkedin_url}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            @endforeach
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="credits">
        Developed by <a href="http://shihabcse.intels.co/">Md.Shihab Uddin</a>
      </div>
    </div>
  </footer><!-- End Footer -->