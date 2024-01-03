<meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link href="{{ url('assets/img/tea.png') }}" rel="icon">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top " style="background-color: #37517e;">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Coffee RR</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Pesanan Ku </a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">Metode Pembayaran</a></li>
          <li><a class="nav-link scrollto" href="#team">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          @if(empty(Auth::user()))
            <a href="{{ url('/login') }}" class="nav-item nav-link" style="margin-left: 10px; margin-right: 40px; ">LogIn</a>
          @else
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="margin-left: 10px;">Pesanan</a>
                  <div class="dropdown-menu text-capitalize">
                   <a href="{{ url('/cart') }}" class="dropdown-item">
                      <i class="bi bi-cart-plus-fill"></i>
                                    <span style="padding-left: 10px;"> Pesanan Ku </span>
                                </a>

                                <hr class="dropdown-divider">
                                <a href="{{ url('/metode-pembayaran') }}" class="dropdown-item">
                                    <i class="bi bi-envelope-paper bi bi-cash"></i>
                                    <span style="padding-left: 10px;"> Metode Pembayaran</span>
                                </a>

                                <hr class="dropdown-divider">
                                

                                <hr class="dropdown-divider">
                                <a href="{{ url('bayar') }}" class="dropdown-item">
                                    <i class="bi bi-hourglass-split"></i>
                                    <span style="padding-left: 10px;"> Status Pembayaran </span>
                                </a>
                            </div>
                        </div> 

                        <!-- Navbar-->
                        <div class="nav-item dropdown" style="margin-right: 50px;">
                            <a class="nav-link nav-profile d-flex align-items-center " href="#" data-bs-toggle="dropdown">     
                                <span class="d-none d-md-block dropdown-toggle ps-2" style="margin-left: 5px;">
                                    @if(empty(Auth::user()->name))
                                        {{ '' }}
                                    @else
                                        {{ Auth::user()->name }}
                                    @endif
                                </span>
                            
                            </a><!-- End Profile Iamge Icon -->

                            <div class="dropdown-menu text-capitalize">
                                <span class="d-none d-md-block text-center ps-2" style="font-weight: bold; font-size: 16px;">
                                    @if(empty(Auth::user()->name))
                                        {{ '' }}
                                    @else
                                        {{ Auth::user()->name }}
                                    @endif
                                </span>
                                <span class="d-none d-md-block text-center ps-2" style="font-size: 14px; ">
                                    @if(empty(Auth::user()->role))
                                        {{ '' }}
                                    @else
                                        {{ Auth::user()->role }}
                                    @endif
                                </span>
                                
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                    <a class="dropdown-item d-flex align-items-center" href="{{ url('/myprofil') }}">
                                        <i class="bi bi-person" style="margin-right: 10px;"></i>
                                        <span>My Profile</span>
                                    </a>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                    <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <i class="bi bi-box-arrow-right" style="margin-right: 10px;"></i> {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>
                        </div> 
                    @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->