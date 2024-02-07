<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
  <!--<![endif]-->

  <!-- Mirrored from html.dynamiclayers.net/te/organze/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Oct 2023 04:59:41 GMT -->
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content="Organic Food &amp; Farming HTML Template"
    />
    <meta name="author" content="ThemeEaster" />
    <title>Home | Desco</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset ('frontend/assets/img/favicon.png')}}" />

    <link rel="stylesheet" href="{{ asset ('frontend/assets/css/fontawesome.min.css')}}" />

    <link rel="stylesheet" href="{{ asset ('frontend/assets/css/themify-icons.css')}}" />

    <link rel="stylesheet" href="{{ asset ('frontend/assets/css/elegant-font-icons.css')}}" />

    <link rel="stylesheet" href="{{ asset ('frontend/assets/css/food-icon.css')}}" />

    <link rel="stylesheet" href="{{ asset ('frontend/assets/css/animate.min.css')}}" />

    <link rel="stylesheet" href="{{ asset ('frontend/assets/css/bootstrap.min.css')}}" />

    <link rel="stylesheet" href="{{ asset ('frontend/assets/css/slicknav.min.css')}}" />

    <link rel="stylesheet" href="{{ asset ('frontend/assets/css/slick.css')}}" />

    <link rel="stylesheet" href="{{ asset ('frontend/assets/css/slider.css')}}" />

    <link rel="stylesheet" href="{{ asset ('frontend/assets/css/venobox/venobox.css')}}" />

    <link rel="stylesheet" href="{{ asset ('frontend/assets/css/owl.carousel.min.css')}}" />

    <link rel="stylesheet" href="{{ asset ('frontend/assets/css/main.css')}}" />

    <link rel="stylesheet" href="{{ asset ('frontend/assets/css/responsive.css')}}" />
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  </head>
  <body data-spy="scroll" data-target="#navmenu" data-offset="70">
    <!--[if lt IE 8]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience.
      </p>
    <![endif]-->
    <div class="site-preloader-wrap">
      <div class="spinner"></div>
    </div>
    <header id="header" class="header-section">
      <div class="container">
        <nav class="navbar">
          <a href="index.html" class="navbar-brand">
            <img class="logo-dark" src="img/Logo.png" alt="Saasbiz" />
          </a>
          <div class="d-flex menu-wrap">
            <div id="mainmenu" class="mainmenu">
              <ul class="nav">
                <li>
                  <a data-scroll class="nav-link active" href="{{route('home')}}"
                    >Home<span class="sr-only">(current)</span></a
                  >
                </li>
                <li><a href="{{route('about')}}">About Us</a></li>
                <li><a href="{{route('product')}}">Product</a></li>
                <li><a href="{{route('gallery')}}">Gallery</a></li>
                <!-- <li>
                  <a href="shop.html">Shop</a>
                  <ul>
                    <li><a href="shop.html">Shop Page</a></li>
                    <li><a href="product-details.html">Product Details</a></li>
                    <li><a href="cart.html">Cart Page</a></li>
                    <li><a href="checkout.html">Checkout Page</a></li>
                  </ul>
                </li> -->
                
                
                <li><a href="{{route('contact')}}">Contact</a></li>
              </ul>
            </div>
            <!-- <div class="header-right">
              <a class="menu-btn btn-white" href="#">Get Started</a>
            </div> -->
          </div>
        </nav>
      </div>
    </header>
    @yield('content')

    <footer class="widget-section">
      <div class="widget-wrap padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-sm-6 sm-padding">
              <div class="widget-content">
                <a href="#">
                  <div style="width:150px;height:70px;margin-bottom:20px">
                  <img src="img/Logo.png" alt="Desco" />
                   </div>
                </a>
                <p>
                  Building your own home is about desire, fantasy. But it’s
                  achievable anyone can do it.
                </p>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6 sm-padding">
              <div class="widget-content footer">
                <h4>Product </h4>
                <ul class="widget-links">
                  <li><a href="{{route('product.four')}}">Peanut Chilli Powder</a></li>
                  <li><a href="{{route('product.one')}}">Peanut Pepper Powder</a></li>
                  <li><a href="{{route('product.two')}}">Coconut & Dal Powder</a></li>
                  <li><a href="{{route('product.three')}}">Puffed Rice</a></li>
                </ul>
              </div>
            </div>
             
            
            <div class="col-lg-2 col-sm-6 sm-padding">
              <div class="widget-content footer">
                <h4>Company</h4>
                <ul class="widget-links">
                <li><a href="{{route('home')}}">Home</a></li>
                  <li><a href="{{route('about')}}">About Us</a></li>
                  <li><a href="{{route('product')}}">Product</a></li>
                  <li><a href="{{route('gallery')}}">Gallery</a></li>
                  <li><a href="{{route('contact')}}">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 sm-padding">
              <div class="widget-content footer">
            
            
              
            
                <h4>Headquaters</h4>
                <p class="p-0 m-0"> No . 63 , &nbsp;Oom Shakthi Nagar
              Savadi,<br>
              Cuddalore - 607001</p>
                <span>
  <a
    href="https://html.dynamiclayers.net/cdn-cgi/l/email-protection"
    class="__cf_email__"
    data-cfemail="0149646d6d6e417564606c5962646d2f6f6475"
    style="color: white;" 
  >descoinnovative@gmail.com</a>
</span>
               
                <span><a class="text-white" style="color: #fff;" href="https://api.whatsapp.com/send?phone=9442379051&text=Business">Contact - whatsapp : <br> <b>(+91) 94423 79051</b> & <b>(+91) 94894 10965</b> </a></span>

                <span>Certified by  Food Corporation of India</span>
              </div>
            </div>
            <!-- <div class="col-lg-4 col-sm-6 sm-padding">
              <div class="widget-content footer">
                <h4>Newslatter Subscription</h4>
                <p>
                  Subscribe and get 10% off from our <br />architecture company.
                </p>
                <div class="subscribe-box clearfix">
                  <div class="subscribe-form-wrap">
                    <form action="#" class="subscribe-form">
                      <input
                        type="email"
                        name="email"
                        id="subs-email"
                        class="form-input"
                        placeholder="Enter Your Email Address..."
                      />
                      <button type="submit" class="submit-btn">
                        Subscribe
                      </button>
                      <div id="subscribe-result">
                        <p class="subscription-success"></p>
                        <p class="subscription-error"></p>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
      <div class="footer-section align-center">
        <div class="container">
          <p> @copyright<script>document.write(new Date().getFullYear())</script>Desco</p>
         
        </div>
      </div>
    </footer>
    
    <a data-scroll href="#header" id="scroll-to-top"
      ><i class="ti-arrow-up"></i
    ></a>

    <script
      data-cfasync="false"
      src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
    <script src="{{ asset ('frontend/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset ('frontend/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ asset ('frontend/assets/js/vendor/tether.min.js')}}"></script>
    <script src="{{ asset ('frontend/assets/js/vendor/jquery.slicknav.min.js')}}"></script>
    <script src="{{ asset ('frontend/assets/js/vendor/owl.carousel.min.js')}}"></script>
    <script src="{{ asset ('frontend/assets/js/vendor/smooth-scroll.min.js')}}"></script>
    <script src="{{ asset ('frontend/assets/js/vendor/jquery.isotope.v3.0.2.js')}}"></script>
    <script src="{{ asset ('frontend/assets/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset ('frontend/assets/js/vendor/venobox.min.js')}}"></script>
    <script src="{{ asset ('frontend/assets/js/vendor/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset ('frontend/assets/js/vendor/slick.min.js')}}"></script>
    <script src="{{ asset ('frontend/assets/js/vendor/wow.min.js')}}"></script>
    <script src="{{ asset ('frontend/assets/js/main.js')}}"></script>
    <script>
      (function () {
        var js =
          "window['__CF$cv$params']={r:'816dbbd32ca19faf',t:'MTY5NzQzMjM3OS45NDEwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/dffb14d6/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
        var _0xh = document.createElement("iframe");
        _0xh.height = 1;
        _0xh.width = 1;
        _0xh.style.position = "absolute";
        _0xh.style.top = 0;
        _0xh.style.left = 0;
        _0xh.style.border = "none";
        _0xh.style.visibility = "hidden";
        document.body.appendChild(_0xh);
        function handler() {
          var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
          if (_0xi) {
            var _0xj = _0xi.createElement("script");
            _0xj.innerHTML = js;
            _0xi.getElementsByTagName("head")[0].appendChild(_0xj);
          }
        }
        if (document.readyState !== "loading") {
          handler();
        } else if (window.addEventListener) {
          document.addEventListener("DOMContentLoaded", handler);
        } else {
          var prev = document.onreadystatechange || function () {};
          document.onreadystatechange = function (e) {
            prev(e);
            if (document.readyState !== "loading") {
              document.onreadystatechange = prev;
              handler();
            }
          };
        }
      })();
    </script>
  </body>

  <!-- Mirrored from html.dynamiclayers.net/te/organze/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Oct 2023 05:00:01 GMT -->
</html>
