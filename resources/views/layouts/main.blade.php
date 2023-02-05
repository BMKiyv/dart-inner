<!DOCTYPE html>
<html lang="en">

<head>
  <!--====== Required meta tags ======-->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!--====== Title ======-->
  <title>@yield('title')</title>

  @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/js/bootstrap.bundle.min.js','resources/js/glightbox.min.js','resources/js/tiny-slider.js'])
</head>

<body>

  <!--====== NAVBAR NINE PART START ======-->

  <section class="navbar-area navbar-nine">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/">
              <img style="width: 100px" src="assets/images/dart-logo.jpg" alt="Logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine"
              aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="page-scroll active" href="#hero-area">Головна</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="#services">Відділи</a>
                </li>

                <li class="nav-item">
                  <a class="page-scroll" style="width: max-content;" href="#pricing">Робочі плани</a>
                </li>
                @if(!Auth::user())
                <li class="nav-item">
                  <a class="page-scroll-login" href="{{route('login')}}">Увійти</a>
                </li>
                @endif
                @if(Auth::user())
                <form class="nav-item" action="{{route('logout')}}" method="POST">
                    @csrf
                  <button class="logout"  type="submit">Вийти</button>
                </form>
                @if(Auth::user()->is_admin===1)
                <li class="nav-item">
                  <a class="page-scroll-login" style="width: max-content;" href="{{route('admin',[str_replace('http://', '',$GLOBALS['_ENV']['APP_URL']),'user'=>Auth::user()])}}">Адмін-панель</a>
                </li>
                @endif
                <li class="nav-item user-position">
                    <span class="user-name nav-item">{{Auth::user()->name }}</span>
                  </li>
                @endif
              </ul>
            </div>

            <div class="navbar-btn d-none d-lg-inline-block">
              <a class="menu-bar" href="#side-menu-left"><i class="lni lni-menu"></i></a>
            </div>
          </nav>
          <!-- navbar -->
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </section>

  <!--====== NAVBAR NINE PART ENDS ======-->

  <!--====== SIDEBAR PART START ======-->

  <div class="sidebar-left">
    <div class="sidebar-close">
      <a class="close" href="#close"><i class="lni lni-close"></i></a>
    </div>
    <div class="sidebar-content">
      <div class="sidebar-logo">
        <a href="index.html"><img style="width: 50px" src="assets/images/dart-logo.jpg" alt="Logo" /></a>
      </div>
      {{-- <p class="text">ДАРТ утворено 04 грудня 2019 року згідно з постановою Кабінету Міністрів України №995 “Питання утворення деяких центральних органів виконавчої влади”.</p> --}}
      <!-- logo -->
      <div class="sidebar-menu">
        <h5 class="menu-title">Швидкі лінки</h5>
        <ul>
          <li><a href="javascript:void(0)">Про нас</a></li>
          <li><a href="javascript:void(0)">Наш колектив</a></li>
          <li><a href="javascript:void(0)">Новини</a></li>
          <li><a href="javascript:void(0)">Ще щось</a></li>
        </ul>
      </div>
      <!-- menu -->
      <div class="sidebar-social align-items-center justify-content-center">
        <h5 class="social-title">Слідкувати за нами</h5>
        <ul>
          <li>
            <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
          </li>
          <li>
            <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
          </li>
          <li>
            <a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
          </li>
          <li>
            <a href="javascript:void(0)"><i class="lni lni-youtube"></i></a>
          </li>
        </ul>
      </div>
      <!-- sidebar social -->
    </div>
    <!-- content -->
  </div>
  <div class="overlay-left"></div>

  <!--====== SIDEBAR PART ENDS ======-->

  <!-- Start header Area -->
 
  @yield('content')
  <!-- Start Footer Area -->
  <footer class="footer-area footer-eleven">
    <!-- Start Footer Top -->
    <div class="footer-top">
      <div class="container">
        <div class="inner-content">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="footer-widget f-about">
                <div class="logo">
                  <a href="index.html">
                    <img style="width: 150px" src="assets/images/dart-logo.jpg" alt="#" class="img-fluid" />
                  </a>
                </div>
                <p>
                  Making the world a better place through constructing elegant
                  hierarchies.
                </p>
                <p class="copyright-text">
                  <span>© 2023 SATD</span>Designed and Developed by
                  <a href="javascript:void(0)" rel="nofollow"> IT Department DART </a>
                </p>
              </div>
              <!-- End Single Widget -->
            </div>
            <div class="col-lg-2 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="footer-widget f-link">
                <h5>Solutions</h5>
                <ul>
                  <li><a href="javascript:void(0)">Marketing</a></li>
                  <li><a href="javascript:void(0)">Analytics</a></li>
                  <li><a href="javascript:void(0)">Commerce</a></li>
                  <li><a href="javascript:void(0)">Insights</a></li>
                </ul>
              </div>
              <!-- End Single Widget -->
            </div>
            <div class="col-lg-2 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="footer-widget f-link">
                <h5>Support</h5>
                <ul>
                  <li><a href="javascript:void(0)">Pricing</a></li>
                  <li><a href="javascript:void(0)">Documentation</a></li>
                  <li><a href="javascript:void(0)">Guides</a></li>
                  <li><a href="javascript:void(0)">API Status</a></li>
                </ul>
              </div>
              <!-- End Single Widget -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="footer-widget newsletter">
                <h5>Subscribe</h5>
                <p>Subscribe to our newsletter for the latest updates</p>
                <form action="#" method="get" target="_blank" class="newsletter-form">
                  <input name="EMAIL" placeholder="Email address" required="required" type="email" />
                  <div class="button">
                    <button class="sub-btn">
                      <i class="lni lni-envelope"></i>
                    </button>
                  </div>
                </form>
              </div>
              <!-- End Single Widget -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ End Footer Top -->
  </footer>
  <!--/ End Footer Area -->


  <a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
  </a>

  <!--====== js ======-->


  <script>

    //===== close navbar-collapse when a  clicked
   
  </script>
</body>

</html>