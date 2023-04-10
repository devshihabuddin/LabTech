<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lab Tach</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('main-frontend/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('main-frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('main-frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('main-frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('main-frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('main-frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('main-frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('main-frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('main-frontend/assets/css/style.css')}}" rel="stylesheet">
  <style>
  /*--------------------------------------------------------------
# Product Details
--------------------------------------------------------------*/
.product-slide {
  padding-top: 40px;
}

.product-slide .product-slide-slider img {
  width: 100%;
}

.product-slide .product-slide-slider .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.product-slide .product-slide-slider .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid #e96b56;
}

.product-slide .product-slide-slider .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #e96b56;
}

.product-slide .portfolio-info {
  padding: 30px;
  box-shadow: 0px 0 30px rgba(84, 84, 84, 0.08);
}

.product-slide .portfolio-info h3 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #eee;
}

.product-slide .portfolio-info ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.product-slide .portfolio-info ul li+li {
  margin-top: 10px;
}

.product-slide .portfolio-description {
  padding-top: 30px;
}

.product-slide .portfolio-description h2 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 20px;
}

.product-slide .portfolio-description p {
  padding: 0;
}
</style>


@stack('css')
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
  @foreach(\App\Models\Setting::all() as $setting)
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">    
        <i class="bi bi-envelope d-flex align-items-center"><span>{{$setting->email}}</span></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{$setting->phone}}</span></i>   
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a target="_blank" href="{{$setting->twitter_url}}" class="twitter"><i class="bi bi-twitter"></i></a>
        <a target="_blank" href="{{$setting->facebook_url}}" class="facebook"><i class="bi bi-facebook"></i></a>
        <a target="_blank" href="{{$setting->instragram_url}}" class="instagram"><i class="bi bi-instagram"></i></a>
        <a target="_blank" href="{{$setting->linkedin_url}}" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
    @endforeach
  </section>

    @include('main-frontend.layouts.header')
    
    @yield('content')

    @include('main-frontend.layouts.footer')


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('main-frontend/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('main-frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('main-frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('main-frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('main-frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('main-frontend/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('main-frontend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('main-frontend/assets/js/main.js')}}"></script>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  
  <script>
  /**
   * product slide slider
   */
  new Swiper('.product-slide-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });
  new PureCounter();
</script>
@stack('js')
</body>

</html>