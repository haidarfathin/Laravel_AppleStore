<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />

  <title>@yield('title', 'Online Store')</title>
</head>

<body>
  <!-- header -->
  <nav class="navbar navbar-expand-lg py-2" style="font-family: 'poppins', sans-serif; background-color:black; z-index:2">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="navbar-brand" href="{{ route('home.index') }}">Macnificent</a>
          <!-- <a class="nav-link active" href="{{ route('home.index') }}">Home</a> -->
          <a class="nav-link active" href="{{ route('product.index') }}">Store</a>
          
        </div>
        <div class="navbar-nav" style="margin-left:auto">
        <a class="nav-link active" href="{{ route('product.mac') }}">Mac</a>
          <a class="nav-link active" href="{{ route('product.iphone') }}">iPhone</a>
          <a class="nav-link active" href="{{ route('product.ipad') }}">iPad</a>
          <a class="nav-link active" href="{{ route('product.pods') }}">AirPods</a>
          <a class="nav-link active" href="{{ route('product.watch') }}">Watch</a>
          <div class="vr bg-white mx-2 d-none d-lg-block"></div>
          @guest
          <a class="nav-link active" href="{{ route('cart.index') }}" style="margin-right:15px">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" style="color: #f5f5f5;" class="bi bi-bag" viewBox="0 0 16 16">
              <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
            </svg>
          </a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" class="dropdown-toggle" id="dropdownMenuButton" data-mbd-toggle="dropdown" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" style="color:white" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
              </svg>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
              <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
            </ul>
          </li>
        </div>
        @else
        <div class="navbar-nav" style="margin-left:auto">
          <a class="nav-link active" href="{{ route('cart.index') }}" style="margin-right: 15px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" style="color: #f5f5f5;" class="bi bi-bag" viewBox="0 0 16 16">
              <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
            </svg>
          </a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" class="dropdown-toggle" id="dropdownMenuButton" data-mbd-toggle="dropdown" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" style="color:white" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
              </svg>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="{{ route('myaccount.orders') }}">Orders</a></li>
              <li>
                <form id="logout" action="{{ route('logout') }}" method="POST">
                  <a role="button" class="dropdown-item" onclick="document.getElementById('logout').submit();">Logout</a>
                  @csrf
                </form>
              </li>
            </ul>
          </li>
          @endguest
        </div>
      </div>
    </div>
  </nav>

  @if(Request::is('/'))
  <div class="header">
    <div class="hero">
      <video autoplay loop muted plays-inline class="back-video">
        <source src="{{ asset('/img/video.mp4') }}" type="video/mp4">
      </video>
      <div class="content">
        <h1>MACNIFICENT</h1>
        <br><br><br><br><br>
        <button type="button" class="btn mr-md-2 mb-md-0 mb-2 btn-lg" onclick="location.href='{{ route('product.index') }}'">Explore</button>
      </div>
    </div>
  </div>
  @endif


  <div class="container-fluid">
    @yield('content')
  </div>


  <div class="copyright py-4">
    <div class=" container my-5">
      <div class="row">
        <div class="col-md-4">
          <h5>Contact Info</h5><br>
          <p class="mb-0"><strong>Address</strong></p>
          <p>DP Mall Semarang, Lt. Dasar</p>
          <p class="mb-0"><strong>Email</strong></p>
          <p>store@macnificent.com</p>
          <p class="mb-0"><strong>Working Hours</strong></p>
          <p>Senin-Minggu / 08.00-20.00</p>
        </div>
        <div class="col-md-3">
          <h5>Our Store</h5><br>
          <p>Semarang</p>
          <p>Solo</p>
          <p>Yogyakarta</p>
        </div>
        <div class="col-md-5">
          <h5>Customer Service</h5><br>
          <div class="input-group mb-3">
            <input type="text" class="form-control" style="border-right: none; border-color:gray" placeholder="Ceritakan keluhan anda" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <button class="btn btn-outline-secondary" type="button" style="border-left: none;">Send</button>
          </div>
          <br>
          <i class="fa-brands fa-facebook-f" style="color: #000000; padding-right: 20px"></i>
          <i class="fa-brands fa-twitter" style="color: #000000;padding-right: 20px"></i>
          <i class="fa-brands fa-linkedin-in" style="color: #000000;padding-right: 20px"></i>
          <i class="fa-brands fa-instagram" style="color: #000000;"></i>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>