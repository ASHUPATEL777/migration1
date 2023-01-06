<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>ASHITI | @yield('title')</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- bootstrap css -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('temp/css/bootstrap.min.css') }}">
<!-- style css -->
<link rel="stylesheet" href="{{ asset('temp/css/style.css') }}">
<!-- responsive-->
<link rel="stylesheet" href="{{ asset('temp/css/responsive.css') }}">
<!-- awesome fontfamily -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
<div class="loader"><img src="{{ asset('temp/images/loading.gif')}}" alt="" /></div>
</div>
<!-- end loader -->
<div id="mySidepanel" class="sidepanel">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
<a href="/">Home</a>
<a href="/About-us">About</a>
<a href="/Services">Services</a>
<a href="/Contact-us">Contact</a>
<a href="/account">Account</a>
</div>
<!-- header -->
<header>
<!-- header inner -->
<div class="head-top">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-3">
            <div class="logo">
               <a href="index.html"><img src="{{ asset('temp/images/logo_footer.png')}}" /></a>
            </div>
         </div>
         <div class="col-sm-9">
            <ul class="email text_align_right">
               <li class="d_none"> <i class="fa fa-map-marker" aria-hidden="true"></i>Location</a></li>
               <li class="d_none"><i class="fa fa-phone" aria-hidden="true"></i>+71  1234567890</a></li>
               <li class="d_none"> <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>demo@gmail.com</a></li>
               <li class="d_none"> <a href="#">Login <i class="fa fa-user" aria-hidden="true"></i></a> </li>
               <li class="d_none"><i class="fa fa-search" style="cursor: pointer;" aria-hidden="true"></i></li>
               <li> <button class="openbtn" onclick="openNav()"><img src="{{ asset('temp/images/menu_btn.png')}}"></button></li>
            </ul>
         </div>
      </div>
   </div>
</div>
</header>
<!-- end header -->
@yield('content')
   <!-- footer -->
   <footer>
   <div class="footer py-4">
      <div class="container">
         <div class="row">
            <div class="col-md-10 offset-md-1">
               <ul class="social_icon text_align_center">
                  <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                  <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                  <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
               </ul>
            </div>
            <div class="col-md-4 col-sm-6">
               <div class="reader">
                  <a href="index.html"><img src="{{ asset('temp/images/logo_footer.png')}}" alt="#"/></a>
                  <p class="padd_flet40">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
               </div>
            </div>
            <div class="col-md-2 col-sm-6">
               <div class="reader">
                  <h3>Explore</h3>
                  <ul class="xple_menu">
                     <li><a href="/">Home</a></li>
                     <li><a href="/About-us">About</a></li>
                     <li><a href="/Services">Services</a></li>
                     <li><a href="/Contact-us">Contact Us</a></li>
                     <li><a href="/account">Account</a></li>
                  
                  </ul>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="reader">
                  <h3>Recent Posts</h3>
                  <ul class="re_post">
                     <li><img src="{{ asset('temp/images/re_img1.jpg')}}" alt="#"/></li>
                     <li><img src="{{ asset('temp/images/re_img2.jpg')}}" alt="#"/></li>
                     <li><img src="{{ asset('temp/images/re_img3.jpg')}}" alt="#"/></li>
                     <li><img src="{{ asset('temp/images/re_img4.jpg')}}" alt="#"/></li>
                  </ul>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="reader">
                  <h3>Contact Us</h3>
                  <p>Basco<br> 
                     A-777,Basco Mall,<br>
                     Near Big Bazzar,<br>
                     150 ft. Ring Road,<br>
                     Rajkot.
                   </p>
               </div>
            </div>
         </div>
      </div>
      <div class="copyright text_align_center">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <br>
               <br>
            <br>              </div>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="{{ asset('temp/js/jquery.min.js') }}"></script>
<script src="{{ asset('temp/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('temp/js/custom.js') }}"></script>
<script src="{{ asset('temp/js/jquery-3.0.0.min.js') }}"></script>
</body>
</html>