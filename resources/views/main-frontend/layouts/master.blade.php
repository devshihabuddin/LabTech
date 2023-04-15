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
<style>
  
/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
}

.navbar a,
.navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0 10px 30px;
  font-family: "Poppins", sans-serif;
  font-size: 13px;
  color: #545454;
  white-space: nowrap;
  transition: 0.3s;
}

.navbar a i,
.navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}

.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover>a {
  color: #e96b56;
}

.navbar .getstarted,
.navbar .getstarted:focus {
  background: #e96b56;
  padding: 8px 20px;
  margin-left: 30px;
  border-radius: 4px;
  color: #fff;
}

.navbar .getstarted:hover,
.navbar .getstarted:focus:hover {
  color: #fff;
  background: #ec7f6d;
}

.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 24px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
}

.navbar .dropdown ul li {
  min-width: 200px;
}

.navbar .dropdown ul a {
  padding: 10px 20px;
  font-size: 14px;
  text-transform: none;
  color: #545454;
}

.navbar .dropdown ul a i {
  font-size: 12px;
}

.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover>a {
  color: #e96b56;
}

.navbar .dropdown:hover>ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}

.navbar .dropdown .dropdown:hover>ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #545454;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

.mobile-nav-toggle.bi-x {
  color: #fff;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}

.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(59, 59, 59, 0.9);
  transition: 0.3s;
  z-index: 999;
}

.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}

.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}

.navbar-mobile a,
.navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  color: #545454;
}

.navbar-mobile a:hover,
.navbar-mobile .active,
.navbar-mobile li:hover>a {
  color: #e96b56;
}

.navbar-mobile .getstarted,
.navbar-mobile .getstarted:focus {
  margin: 15px;
}

.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
  min-width: 200px;
}

.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}

.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover,
.navbar-mobile .dropdown ul .active:hover,
.navbar-mobile .dropdown ul li:hover>a {
  color: #e96b56;
}

.navbar-mobile .dropdown>.dropdown-active {
  display: block;
}

/*--------------------------------------------------------------
# Blog
--------------------------------------------------------------*/
#blog .float-end{
  border: 1px solid #ededed;
  padding-right: 20px;
}
#blog .card img{
height: 210px;
}
#blog button a{
color: #fff;
}



.blog {
  padding: 40px 0 20px 0;
}

.blog .entry {
  padding: 30px;
  margin-bottom: 60px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

.blog .entry .entry-img {
  max-height: 440px;
  margin: -30px -30px 20px -30px;
  overflow: hidden;
}

.blog .entry .entry-title {
  font-size: 28px;
  font-weight: bold;
  padding: 0;
  margin: 0 0 20px 0;
}

.blog .entry .entry-title a {
  color: #545454;
  transition: 0.3s;
}

.blog .entry .entry-title a:hover {
  color: #e96b56;
}

.blog .entry .entry-meta {
  margin-bottom: 15px;
  color: #bababa;
}

.blog .entry .entry-meta ul {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  align-items: center;
  padding: 0;
  margin: 0;
}

.blog .entry .entry-meta ul li+li {
  padding-left: 20px;
}

.blog .entry .entry-meta i {
  font-size: 16px;
  margin-right: 8px;
  line-height: 0;
}

.blog .entry .entry-meta a {
  color: #777777;
  font-size: 14px;
  display: inline-block;
  line-height: 1;
}

.blog .entry .entry-content p {
  line-height: 24px;
}

.blog .entry .entry-content .read-more {
  -moz-text-align-last: right;
  text-align-last: right;
}

.blog .entry .entry-content .read-more a {
  display: inline-block;
  background: #e96b56;
  color: #fff;
  padding: 6px 20px;
  transition: 0.3s;
  font-size: 14px;
  border-radius: 4px;
}

.blog .entry .entry-content .read-more a:hover {
  background: #ec7f6d;
}

.blog .entry .entry-content h3 {
  font-size: 22px;
  margin-top: 30px;
  font-weight: bold;
}

.blog .entry .entry-content blockquote {
  overflow: hidden;
  background-color: #fafafa;
  padding: 60px;
  position: relative;
  text-align: center;
  margin: 20px 0;
}

.blog .entry .entry-content blockquote p {
  color: #444444;
  line-height: 1.6;
  margin-bottom: 0;
  font-style: italic;
  font-weight: 500;
  font-size: 22px;
}

.blog .entry .entry-content blockquote::after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 3px;
  background-color: #545454;
  margin-top: 20px;
  margin-bottom: 20px;
}

.blog .entry .entry-footer {
  padding-top: 10px;
  border-top: 1px solid #e6e6e6;
}

.blog .entry .entry-footer i {
  color: #a1a1a1;
  display: inline;
}

.blog .entry .entry-footer a {
  color: #616161;
  transition: 0.3s;
}

.blog .entry .entry-footer a:hover {
  color: #e96b56;
}

.blog .entry .entry-footer .cats {
  list-style: none;
  display: inline;
  padding: 0 20px 0 0;
  font-size: 14px;
}

.blog .entry .entry-footer .cats li {
  display: inline-block;
}

.blog .entry .entry-footer .tags {
  list-style: none;
  display: inline;
  padding: 0;
  font-size: 14px;
}

.blog .entry .entry-footer .tags li {
  display: inline-block;
}

.blog .entry .entry-footer .tags li+li::before {
  padding-right: 6px;
  color: #6c757d;
  content: ",";
}

.blog .entry .entry-footer .share {
  font-size: 16px;
}

.blog .entry .entry-footer .share i {
  padding-left: 5px;
}

.blog .entry-single {
  margin-bottom: 30px;
}

.blog .blog-author {
  padding: 20px;
  margin-bottom: 30px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

.blog .blog-author img {
  width: 120px;
  margin-right: 20px;
}

.blog .blog-author h4 {
  font-weight: 600;
  font-size: 22px;
  margin-bottom: 0px;
  padding: 0;
  color: #545454;
}

.blog .blog-author .social-links {
  margin: 0 10px 10px 0;
}

.blog .blog-author .social-links a {
  color: rgba(84, 84, 84, 0.5);
  margin-right: 5px;
}

.blog .blog-author p {
  font-style: italic;
  color: #b7b7b7;
}

.blog .blog-comments {
  margin-bottom: 30px;
}

.blog .blog-comments .comments-count {
  font-weight: bold;
}

.blog .blog-comments .comment {
  margin-top: 30px;
  position: relative;
}

.blog .blog-comments .comment .comment-img {
  margin-right: 14px;
}

.blog .blog-comments .comment .comment-img img {
  width: 60px;
}

.blog .blog-comments .comment h5 {
  font-size: 16px;
  margin-bottom: 2px;
}

.blog .blog-comments .comment h5 a {
  font-weight: bold;
  color: #444444;
  transition: 0.3s;
}

.blog .blog-comments .comment h5 a:hover {
  color: #e96b56;
}

.blog .blog-comments .comment h5 .reply {
  padding-left: 10px;
  color: #545454;
}

.blog .blog-comments .comment h5 .reply i {
  font-size: 20px;
}

.blog .blog-comments .comment time {
  display: block;
  font-size: 14px;
  color: #6e6e6e;
  margin-bottom: 5px;
}

.blog .blog-comments .comment.comment-reply {
  padding-left: 40px;
}

.blog .blog-comments .reply-form {
  margin-top: 30px;
  padding: 30px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

.blog .blog-comments .reply-form h4 {
  font-weight: bold;
  font-size: 22px;
}

.blog .blog-comments .reply-form p {
  font-size: 14px;
}

.blog .blog-comments .reply-form input {
  border-radius: 4px;
  padding: 10px 10px;
  font-size: 14px;
}

.blog .blog-comments .reply-form input:focus {
  box-shadow: none;
  border-color: #f5bab0;
}

.blog .blog-comments .reply-form textarea {
  border-radius: 4px;
  padding: 10px 10px;
  font-size: 14px;
}

.blog .blog-comments .reply-form textarea:focus {
  box-shadow: none;
  border-color: #f5bab0;
}

.blog .blog-comments .reply-form .form-group {
  margin-bottom: 25px;
}

.blog .blog-comments .reply-form .btn-primary {
  border-radius: 4px;
  padding: 10px 20px;
  border: 0;
  background-color: #545454;
}

.blog .blog-comments .reply-form .btn-primary:hover {
  background-color: #616161;
}

.blog .blog-pagination {
  color: #878787;
}

.blog .blog-pagination ul {
  display: flex;
  padding: 0;
  margin: 0;
  list-style: none;
}

.blog .blog-pagination li {
  margin: 0 5px;
  transition: 0.3s;
}

.blog .blog-pagination li a {
  color: #545454;
  padding: 7px 16px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.blog .blog-pagination li.active,
.blog .blog-pagination li:hover {
  background: #e96b56;
}

.blog .blog-pagination li.active a,
.blog .blog-pagination li:hover a {
  color: #fff;
}

.blog .sidebar {
  padding: 30px;
  margin: 0 0 60px 20px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

.blog .sidebar .sidebar-title {
  background-color: #e96b56;
  color: #fff;
  padding: 10px;
  font-size: 20px;
  font-weight: 700;
  margin: 0 0 15px 0;
  position: relative;
}

.blog .sidebar .sidebar-item {
  margin-bottom: 30px;
}

.blog .sidebar .search-form form {
  background: #fff;
  border: 1px solid #ddd;
  padding: 0px 0px;
  border-radius: 7px;
  position: relative;
}

.blog .sidebar .search-form form input[type=text] {
  border: 0;
  padding: 4px;
  border-radius: 4px;
  width: calc(100% - 40px);
}

.blog .sidebar .search-form form button {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 15px;
  margin: -1px;
  background: #e96b56;
  color: #fff;
  transition: 0.3s;
  border-radius: 0 4px 4px 0;
  line-height: 0;
}

.blog .sidebar .search-form form button i {
  line-height: 0;
}

.blog .sidebar .search-form form button:hover {
  background: #eb7b68;
}

.blog .sidebar .categories ul {
  list-style: none;
  padding: 0;
}

.blog .sidebar .categories ul li+li {
  padding-top: 10px;
}

.blog .sidebar .categories ul a {
  color: #545454;
  transition: 0.3s;
}

.blog .sidebar .categories ul a:hover {
  color: #e96b56;
}

.blog .sidebar .categories ul a span {
  padding-left: 5px;
  color: #aaaaaa;
  font-size: 14px;
}

.blog .sidebar .recent-posts .post-item+.post-item {
  margin-top: 15px;
}

.blog .sidebar .recent-posts img {
  width: 80px;
  float: left;
}

.blog .sidebar .recent-posts h4 {
  font-size: 15px;
  margin-left: 95px;
  font-weight: bold;
}

.blog .sidebar .recent-posts h4 a {
  color: #545454;
  transition: 0.3s;
}

.blog .sidebar .recent-posts h4 a:hover {
  color: #e96b56;
}

.blog .sidebar .recent-posts time {
  display: block;
  margin-left: 95px;
  font-style: italic;
  font-size: 14px;
  color: #aaaaaa;
}

.blog .sidebar .tags {
  margin-bottom: -10px;
}

.blog .sidebar .tags ul {
  list-style: none;
  padding: 0;
}

.blog .sidebar .tags ul li {
  display: inline-block;
}

.blog .sidebar .tags ul a {
  color: #949494;
  font-size: 14px;
  padding: 6px 14px;
  margin: 0 6px 8px 0;
  border: 1px solid white;
  display: inline-block;
  transition: 0.3s;
}

.blog .sidebar .tags ul a:hover {
  color: #fff;
  border: 1px solid #e96b56;
  background: #e96b56;
}

.blog .sidebar .tags ul a span {
  padding-left: 5px;
  color: #ededed;
  font-size: 14px;
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
        <a target="_blank" href="{{$setting->instragram_url}}" class="youtube"><i class="bi bi-youtube"></i></a>
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