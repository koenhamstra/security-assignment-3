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
    <title>Data web</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/security.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="./css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="./images/fevicon.png" type="image/gif"/>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
          media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="./images/loading.gif" alt="#"/></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="/"><img src="./images/logo.png" alt="#"/></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/blog">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/123"> About </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/flight"> Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact</a>
                                </li>
                                @auth()
                                    <li class="nav-item logout">
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                                {{ __('Log out') }}
                                            </x-responsive-nav-link>
                                        </form>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="/login">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/register">Register</a>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header inner -->
<!-- end header -->
<!-- banner -->
<section class="banner_main">
    <div class="container">
        <div class="row d_flex">
            <div class="col-md-5">
                <div class="text-bg">
                    <h1>Mr.<br> Hamstra</h1>
                    <span>Framework Development 2</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    <a href="#">Get Started</a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="text-img">
                    <figure><img src="./images/img.png"/></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->
<!-- why -->
{{-- <div id="why" class="why">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Why you should choose </h2>
               <p>making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still </p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <div id="box_ho" class="why-box">
               <i><img src="images/why1.png" alt="#" /></i>
               <h3>Powerful Features</h3>
               <p>making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still </p>
            </div>
            <a class="read_more bg" href="#">Read More</a>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <div class="why-box">
               <i><img src="images/why2.png" alt="#" /></i>
               <h3>Totaly Optimised</h3>
               <p>making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still </p>
            </div>
            <a class="read_more bg" href="#">Read More</a>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <div class="why-box">
               <i><img src="images/why3.png" alt="#" /></i>
               <h3>Worldwide Support</h3>
               <p>making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still </p>
            </div>
            <a class="read_more bg" href="#">Read More</a>
         </div>
      </div>
   </div>
</div> --}}
<!-- end why -->
<!-- contact -->
{{-- <div id="contact" class="contact">
   <div class="container">
      <div class="row">
         <div class="col-md-6 offset-md-3 ">
            <form class="main_form">
               <div class="row">
                  <div class="col-sm-12">
                     <input class="contactus" placeholder="Name" type="text" name="Name">
                  </div>
                  <div class="col-sm-12">
                     <input class="contactus" placeholder="Email" type="text" name=" Email">
                  </div>
                  <div class="col-sm-12">
                     <input class="contactus" placeholder="Phone" type="text" name="Phone">
                  </div>
                  <div class="col-sm-12">
                     <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                  </div>
                  <div class="col-sm-12">
                     <button class="send">Send</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div> --}}

<!-- end contact -->
<!--  footer -->
{{-- <footer>
   <div class="footer">
      <div class="container">
         <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="cont">
                  <h3>Contact now</h3>
                  <span>Free Multipurpose Responsive Landing Page 2019</span>
                  <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quissed do eiusmod tempor incididunt ut labore et dolore
                     magna aliqua. Ut enim ad minim veniam, quis
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="copyright">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <p>© 2019 All Rights Reserved. <a href="https://html.design/">Free html Templates</a></p>
               </div>
            </div>
         </div>
      </div>
   </div> --}}

{{--</footer>--}}
<!-- end footer -->
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>

