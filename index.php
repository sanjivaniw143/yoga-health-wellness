<?php $title="Yoga Health And Wellness Center" ?>
<?php include'includes/head.php';?>
<?php include'includes/menu.php';?>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/yoga-banner.jpg" alt="" >
    </div>
   <!--  <div class="carousel-item">
      <img src="images/2.jpg" alt="" >
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="" >
    </div> -->
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
 
<section id="about">
  <div class="container">
     <div class="section-title clearfix">
                                <div class="title-header">
                                    <h5>  About Us</h5>
                                    <h2 class="title">Yoga Health & Wellness center</h2>
                                </div>
                            </div><!-- section title end -->
    <div class="row">
    
     <div class="col-md-6 mt-5">
       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
       <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using </p>
     </div>
      <div class="col-md-6 mt-3">
       <img src="images/about.jpg">
     </div>
    </div>
  </div>
</section>

<section style="       background: url(images/ben.jpg) no-repeat;
    height: 521px;
    background-size: cover;" id="services">
  <div class="container">

    <div class="row">
    
      <div class="col-md-6">
        <div class="section-title clearfix pb-5 mb-5">
                                <div class="title-header">
                                    <h5 class="text-white">  Services</h5>
                                    <h2 class="title text-white">Benefits of Yoga</h2>
                                </div>
                            </div><!-- section title end -->
<ul class="list-unstyled inner-list2 pt-3">
<li class="list"><a class="dropdown-item " href="" style="border-top: 1px dotted #f3f3f3;">Weight Loss</a></li>
<li class="list"><a class="dropdown-item " href="">Stop Your Pain</a></li>
<li class="list"><a class="dropdown-item " href="">Relieves Depression, Anxiety</a></li>
<li class="list"><a class="dropdown-item " href="">Control Your Blood Pressure</a></li>

<li class="list"><a class="dropdown-item " href="">Yoga improves strength, balance and flexibility.</a></li>
<li class="list"><a class="dropdown-item " href="">Yoga helps with back pain relief.</a></li>
<li class="list"><a class="dropdown-item " href="">Yoga benefits heart health.</a></li>
</ul>
                           <!--  <h2></i>Brain and vessels</h2>
                            <h2></i>Brain and vessels</h2>
                            <h2></i>Brain and vessels</h2>
                            <h2></i>Brain and vessels</h2> -->
      </div>
    </div>
  </div>
</section>

<section id="testimonials">
  <div class="container">
      <div class="section-title clearfix pb-5 mb-5">
                                <div class="title-header">
                                    <h5>  Reviews</h5>
                                    <h2 class="title">What our Client Says!</h2>
                                </div>
                            </div><!-- section title end -->
    <div class="row">
      <div class="col-md-12 ">
                    
            <div class="testimonial-bg text-center">
                    <img src="images/quotes-img.png">
                <div id="testimonial-slider" class="owl-carousel col-md-12">
                    <div class="testimonial pt-4">
 <i class="fa fa-star color-yellow"></i>
<i class="fa fa-star color-yellow"></i> <i class="fa fa-star color-yellow"></i>
<i class="fa fa-star color-yellow"></i> <i class="fa fa-star color-yellow"></i></i>
                        <p class="description">

                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                       
                        <h3 class="title pt-4">-Rahul Shah</h3>
                       
                    </div>
 
                       
                    </div>
                </div>
             
            </div>
    </div>
  </div>
</section>

<!--Sign up form section start-->
<div class="signup" id="signup">
  <div class="container bottom_news" >
    <div class="row">
      <div class="col-md-10 col-md-offset-1" id="fly-it-left123">
        <h1>Start classes for free 14 days</h1>
        <p>Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-1">
        <input type="text" id="txt_name" placeholder="Name" class="form-control input-lg">
      </div>
      <div class="col-md-4">
        <input type="text" id="txt_email" placeholder="Email" class="form-control input-lg">
      </div>
      <div class="col-md-2"> <a href="javascript:void(0);" class="btn btn-default btn-block btn-yellow" onClick="mail_send('bottom_news')">Submit</a> </div>
    </div>
    <div id="mail_msg" class="col-md-10 col-md-offset-1"></div>
  </div>
</div>
<!--sign up form section close--> 

<section class="footer ">
    <div class="container text-center">
    
  <!--   <div class="icon-social">
        <h2 class="f500 text-uppercase">Be Social</h2>
        <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="" target="_blank"><i class="fab fa-twitter" target="_blank"></i></a>
        <a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a href="" target="_blank"><i class="fab fa-youtube"></i></a>
      </div> -->
     
      <div class="copyright-content">
        <div class="container text-center">
          <p  class="text-white">Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved, <span class="d-inline-block">By Yoga Health & wellness Center</span></p>
        </div>
      </div>
    </div>
  </section>
<div class="navbar-fixed-bottom d-lg-none d-xl-none d-md-none d-sm-none col-xs-12 " style="width:100%;text-align: center;position: fixed;right: 0;bottom: 0;left: 0;padding: 4px;background-color:lightgray;text-align: center;z-index:29">
<div class="d-lg-none d-xl-none d-md-none d-sm-none col-xs-12" style="background-color:#018F99;margin-top: 6px;padding:8px;  ">
<a href="tel:91 7208009584" style="color:white;">
<img src="images/phone-icon.png" style="    width: 32px;" alt="Call"> Call For Appointment</a>
</div>
</div>
 <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- <script src="https://kit.fontawesome.com/2afb0dc715.js" crossorigin="anonymous"></script> -->
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/script.js"></script>
  
</body>
</html>
