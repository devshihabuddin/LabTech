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

  <!-- owl-carosal css -->
  <link href="{{asset('main-frontend/assets/css/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('main-frontend/assets/css/owl.theme.default.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('main-frontend/assets/css/style.css')}}" rel="stylesheet">

<style>
  /*--------------------------------------------------------------
# Product Details
--------------------------------------------------------------*/
/* .product-slide {
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
} */

a {
  color: #0aa33a;
  text-decoration: none;
}

a:hover {
  color: #58e886;
  text-decoration: none;
}
/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 996;
  background: #0aa33a;
  width: 40px;
  height: 40px;
  border-radius: 4px;
  transition: all 0.4s;
}

.back-to-top i {
  font-size: 28px;
  color: #fff;
  line-height: 0;
}

.back-to-top:hover {
  background: #58e886;
  color: #fff;
}

.back-to-top.active {
  visibility: visible;
  opacity: 0.7;
}

/*--------------------------------------------------------------
# Top Bar
--------------------------------------------------------------*/
#topbar {
  background: #545454;
  padding: 10px 0;
  font-size: 14px;
}

#topbar .contact-info i {
  font-style: normal;
  color: #0aa33a;
}

#topbar .contact-info i a,
#topbar .contact-info i span {
  padding-left: 5px;
  color: #fff;
}

#topbar .contact-info i a {
  line-height: 0;
  transition: 0.3s;
}

#topbar .contact-info i a:hover {
  color: #e96b56;
}

#topbar .social-links a {
  color: #bababa;
  line-height: 0;
  transition: 0.3s;
  margin-left: 10px;
}

#topbar .social-links a:hover {
  color: #0aa33a;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 70vh;
  background-color: rgba(59, 59, 59, 0.8);
  overflow: hidden;
  padding: 0;
  position: relative;
  z-index: 1;
}

#hero .carousel-item {
  width: 100%;
  height: 70vh;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-position: center center;
}

#hero .carousel-item::before {
  content: "";
  background-color: rgba(255, 255, 255, 0.6);
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
}

#hero .carousel-container {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  padding-bottom: 120px;
}

#hero .carousel-content {
  text-align: center;
}

#hero h2 {
  color: #2e2e2e;
  margin-bottom: 30px;
  font-size: 48px;
  font-weight: 700;
}

#hero h2 span {
  color: #0aa33a;
}

#hero p {
  width: 80%;
  animation-delay: 0.4s;
  margin: 0 auto 30px auto;
  color: arken(#545454, 15);
}

#hero .carousel-inner .carousel-item {
  transition-property: opacity;
  background-position: center top;
}

#hero .carousel-inner .carousel-item,
#hero .carousel-inner .active.carousel-item-start,
#hero .carousel-inner .active.carousel-item-end {
  opacity: 0;
}

#hero .carousel-inner .active,
#hero .carousel-inner .carousel-item-next.carousel-item-start,
#hero .carousel-inner .carousel-item-prev.carousel-item-end {
  opacity: 1;
  transition: 0.5s;
}

#hero .carousel-inner .carousel-item-next,
#hero .carousel-inner .carousel-item-prev,
#hero .carousel-inner .active.carousel-item-start,
#hero .carousel-inner .active.carousel-item-end {
  left: 0;
  transform: translate3d(0, 0, 0);
}

#hero .carousel-control-prev,
#hero .carousel-control-next {
  width: 10%;
}

#hero .carousel-control-next-icon,
#hero .carousel-control-prev-icon {
  background: none;
  font-size: 48px;
  line-height: 1;
  width: auto;
  height: auto;
  color: #545454;
}

#hero .carousel-indicators li {
  cursor: pointer;
  background: #0aa33a;
  overflow: hidden;
  border: 0;
  width: 12px;
  height: 12px;
  border-radius: 50px;
  margin-bottom: 180px;
  opacity: 0.2;
}

#hero .carousel-indicators li.active {
  opacity: 1;
}

#hero .btn-get-started {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 32px;
  border-radius: 50px;
  transition: 0.5s;
  line-height: 1;
  margin: 10px;
  color: #fff;
  animation-delay: 0.8s;
  border: 2px solid #e96b56;
  background: #e96b56;
}

#hero .btn-get-started:hover {
  background: transparent;
  color: #e96b56;
  text-decoration: none;
}

@media (max-height: 768px),
(max-width: 1200px) {
  #hero {
    margin-bottom: 60px;
  }

  #hero .carousel-container {
    padding-bottom: 0;
  }

  #hero .carousel-indicators li {
    margin-bottom: 0;
  }
}

@media (max-width: 768px) {
  #hero {
    height: 90vh;
  }

  #hero .carousel-item {
    height: 90vh;
  }
}

@media (min-width: 1024px) {
  #hero p {
    width: 50%;
  }

  #hero .carousel-control-prev,
  #hero .carousel-control-next {
    width: 5%;
  }
}
/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 0 0 20px 0;
}

.section-bg {
  background-color: white;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 28px;
  font-weight: 600;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
  font-family: "Poppins", sans-serif;
}

.section-title h2::after {
  content: "";
  position: absolute;
  display: block;
  width: 50px;
  height: 3px;
  background: #0aa33a;
  bottom: 0;
  left: calc(50% - 25px);
}

.section-title p {
  margin-bottom: 0;
}
/*--------------------------------------------------------------
# Our Clients
--------------------------------------------------------------*/
/* #clients{
  background-color: #f3f3f3!important;
  padding-top: 30px;
  } */

  .clients .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.clients .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid #0aa33a;
}

.clients .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #0aa33a;
}

.clients .swiper-slide img {
  
  transition: 0.3s;
  
}

.clients .swiper-slide img:hover {
  filter: none;
  opacity: 0.7;
}

/* portfolio */
.portfolio .portfolio-wrap .portfolio-links a:hover {
  color: #0aa33a;
}
/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact .info-box {
  color: #444444;
  text-align: center;
  box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
  padding: 20px 0 30px 0;
}

.contact .info-box i {
  font-size: 32px;
  color: #0aa33a;
  border-radius: 50%;
  padding: 8px;
  border: 2px dotted #fef5f4;
}
/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  background: #404040;
  padding: 0 0 30px 0;
  color: #fff;
  font-size: 14px;
}

#footer .footer-newsletter {
  padding: 50px 0;
  background: #404040;
}

#footer .footer-newsletter h4 {
  font-size: 24px;
  margin: 0 0 20px 0;
  padding: 0;
  line-height: 1;
  font-weight: 600;
}

#footer .footer-newsletter form {
  margin-top: 30px;
  background: #fff;
  padding: 6px 10px;
  position: relative;
  border-radius: 50px;
}

#footer .footer-newsletter form input[type=email] {
  border: 0;
  padding: 8px;
  width: calc(100% - 140px);
}

#footer .footer-newsletter form input[type=submit] {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 30px;
  margin: 3px;
  background: #e96b56;
  color: #fff;
  transition: 0.3s;
  border-radius: 50px;
}

#footer .footer-newsletter form input[type=submit]:hover {
  background: #e6573f;
}

#footer .footer-top {
  background: #3b3b3b;
  border-top: 1px solid #474747;
  border-bottom: 1px solid #474747;
  padding: 60px 0 30px 0;
}

#footer .footer-top .footer-info {
  margin-bottom: 30px;
}

#footer .footer-top .footer-info h3 {
  font-size: 18px;
  margin: 0 0 20px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-weight: 700;
}

#footer .footer-top .footer-info p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Raleway", sans-serif;
  color: #fff;
}

#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #545454;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
  background: #0aa33a;
  color: #fff;
  text-decoration: none;
}

#footer .footer-top h4 {
  font-size: 16px;
  font-weight: bold;
  color: #fff;
  text-transform: uppercase;
  position: relative;
  padding-bottom: 12px;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul i {
  padding-right: 2px;
  color: #0aa33a;
  font-size: 18px;
  line-height: 1;
}

#footer .footer-top .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #fff;
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}

#footer .footer-top .footer-links ul a:hover {
  color: #0aa33a;
}

#footer .footer-top .footer-contact {
  margin-bottom: 30px;
}

#footer .footer-top .footer-contact p {
  line-height: 26px;
}

#footer .copyright {
  text-align: center;
  padding-top: 30px;
}

#footer .credits {
  padding-top: 10px;
  text-align: center;
  font-size: 13px;
  color: #fff;
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
  color: #0aa33a;
}

.navbar .getstarted,
.navbar .getstarted:focus {
  background: #0aa33a;
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
  color: #0aa33a;
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
  color: #0aa33a;
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
  color: #0aa33a;
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
  background-color: #0aa33a;
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
  background: #0aa33a;
  color: #fff;
  transition: 0.3s;
  border-radius: 0 4px 4px 0;
  line-height: 0;
}

.blog .sidebar .search-form form button i {
  line-height: 0;
}

.blog .sidebar .search-form form button:hover {
  background: #58e886;;
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
  color: #0aa33a;
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
  color: #0aa33a;
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

  <!-- owl-carosol -->
  <script src="{{asset('main-frontend/assets/js/jquery-3.6.4.min.js')}}"></script>
  <script src="{{asset('main-frontend/assets/js/owl.carousel.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('main-frontend/assets/js/main.js')}}"></script>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  
  <!-- <script>
  
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
</script> -->
<script>
  /**
   * product slide slider
   */
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>
@stack('js')
</body>

</html>