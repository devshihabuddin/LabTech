<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ======= Contact Section ======= -->
    
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 ">
            <iframe class="contact iframe" src="/images/product-pdf/{{$data->file}}" frameborder="0" 
            ></iframe>
          </div>  
        </div>
      </div>
    </section><!-- End Contact Section -->
    
</body>
</html>
<style>
        .contact iframe {
  border:0; 
  width: 100%; 
  height: 600px;
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
  color: #e96b56;
  border-radius: 50%;
  padding: 8px;
  border: 2px dotted #fef5f4;
}

.contact .info-box h3 {
  font-size: 20px;
  color: #777777;
  font-weight: 700;
  margin: 10px 0;
}

.contact .info-box p {
  padding: 0;
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.contact .php-email-form {
  box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
  padding: 30px;
}

.contact .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br+br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input:focus,
.contact .php-email-form textarea:focus {
  border-color: #e96b56;
}

.contact .php-email-form input {
  padding: 10px 15px;
}

.contact .php-email-form textarea {
  padding: 12px 15px;
}

.contact .php-email-form button[type=submit] {
  background: #e96b56;
  border: 0;
  border-radius: 50px;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
}

.contact .php-email-form button[type=submit]:hover {
  background: #e6573f;
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}
</style>

