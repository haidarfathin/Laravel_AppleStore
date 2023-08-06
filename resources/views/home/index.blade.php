@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<!-- category -->
<div class="container-fluid" style="margin: 40px 125px;">
  <div class="row">
    <div class="col-md-2">
      <div class="container text-center">
        <img src="{{ asset('img/display/mac-display.png') }}" height="100px">
        <a href="{{ route('product.mac') }}">
        <h5>Mac</h5>
        </a>
      </div>
    </div>
    <div class="col-md-2">
      <div class="container text-center">
        <img src="{{ asset('img/display/iphone-display.png') }}" height="80px" style="margin-bottom: 20px;">
        <a href="{{ route('product.iphone') }}">
        <h5>iPhone</h5>
        </a>
      </div>
    </div>
    <div class="col-md-2">
      <div class="container text-center">
        <img src="{{ asset('img/display/ipad-display.png') }}" height="80px" style="margin-bottom: 20px;">
        <a href="{{ route('product.ipad') }}">
        <h5>iPad</h5>
        </a>
      </div>
    </div>
    <div class="col-md-2">
      <div class="container text-center">
        <img src="{{ asset('img/display/watch-display.png') }}" height="80px" style="margin-bottom: 20px;">
        <a href="{{ route('product.watch') }}">
        <h5>Apple Watch</h5>
        </a>
      </div>
    </div>
    <div class="col-md-2">
      <div class="container text-center">
        <img src="{{ asset('img/display/pod-display.png') }}" height="80px" style="margin-bottom: 20px;">
        <a href="{{ route('product.pods') }}">
        <h5>AirPods</h5>
        </a>
      </div>
    </div>
  </div>
</div>


  <!-- highlight -->
  <div class="container-fluid" style="margin:-50px 40px 10px 40px">
    <div class="row">
      <div class="col-md-4 highlight">
        <div class="container grid-1 text-center" style="background-color: white;height: 520px;">
          <div class="text-wrap">
            <h5>Mac Trade-In</h5>
            <h3 style="font-weight:700">Get credit for your old Mac</h3>
            <p>Just trade in your eligible computer for credit or recycle it for free. It’s good for you and the planet.</p>
          </div>
          <div class="img-wrap">
            <img src="{{ asset('img/display/store-card-2.jpg') }}">
          </div>
        </div>
      </div>
      <div class="col-md" style="max-width:20px"></div>
      <div class="col-md-3 highlight">
        <div class="container grid-2" style="background-color:white; height: 250px; ">
          <h4 style="padding:20px">Get to know your new device with our Personal Assistant</h4>
          <div class="img-wrap">
            <img src="{{ asset('img/display/store-card-1.jpg') }}">
          </div>
        </div>
        <div class="row" style="padding-top:20px">
          <div class="col-md mx-0" style="margin: 0px;">
            <div class="container grid-2" style="height: 250px; background-color:black">
              <h5 style="padding:20px; color: white">Worry less with <br>MacCare+.</h5>
              <div class="img-wrap">
                <img src="{{ asset('img/display/store-card-4.png') }}">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md" style="max-width:20px"></div>
      <div class="col-md-4 highlight">
        <div class="container grid-3 text-center" style="background-color: white;height: 520px;">
          <div class="text-wrap">
            <h5>Limited time offer</h5>
            <h2 style="font-weight:700">Save on Mac for college</h2>
            <p>
              Receive a discount on a new Mac for your studies with Apple education pricing. Available for students, teachers, and staff.
            </p>
          </div>
          <div class="img-wrap">
            <img src="{{ asset('img/display/store-card-3.jpg') }}">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- highlight -->

  <!-- featured -->
  <div class="container-fluid">
    <h2 style="padding-left:130px">The latest.<span style="color:#6e6e73"> Take a look at what's new, right now</span></h2>
    <div id="carousel">
      <!-- first item -->
      <div class="item-f"></div>
      <!-- items -->
      <div class="item" onclick="location.href='{{ route('product.index') }}'">
        <div class="c-header">
          <h5 style="color: coral; margin-bottom: -12px;">NEW ARRIVAL</h5>
          <h2 style="font-weight: 600;">Macbook Air 13" with<br>M1 chip</h2>
        </div>
        <div class="c-img">
          <img src="{{ asset('img/display/2.jpg')}}">
        </div>
         
      </div>
      <div class="item" onclick="location.href='{{ route('product.index') }}'">
        <div class="c-header">
          <h5 style="color: coral; margin-bottom: -12px;">NEW ARRIVAL</h5>
          <h2 style="font-weight: 600;">Iphone 14</h2><br>
        </div>
        <div class="c-img">
          <img src="{{ asset('img/display/iphone-display.png')}}">
        </div>
         
      </div>
      <div class="item" onclick="location.href='{{ route('product.index') }}'">
        <div class="c-header">
          <h5 style="color: coral; margin-bottom: -12px;">HOMEPOD</h5>
          <h2 style="font-weight: 600;">Upgrade your house<br>with HomePod</h2>
        </div>
        <div class="c-img">
          <img src="{{ asset('img/display/hero-home.png')}}">
        </div>
         
      </div>
      <div class="item" onclick="location.href='{{ route('product.index') }}'">
        <div class="c-header">
          <h5 style="color: coral; margin-bottom: -12px;">NEW ARRIVAL</h5>
          <h2>Macbook Air 13" with<br>M1 chip</h2>
        </div>
        <div class="c-img">
          <img src="{{ asset('img/display/2.jpg')}}">
        </div>
         
      </div>
      <div class="item" onclick="location.href='{{ route('product.index') }}'">
        <div class="c-header">
          <h5 style="color: coral; margin-bottom: -12px;">NEW ARRIVAL</h5>
          <h2>Macbook Air 13" with<br>M1 chip</h2>
        </div>
        <div class="c-img">
          <img src="{{ asset('img/display/2.jpg')}}">
        </div>
         
      </div>
      <div class="item" onclick="location.href='{{ route('product.index') }}'">
        <div class="c-header">
          <h5 style="color: coral; margin-bottom: -12px;">NEW ARRIVAL</h5>
          <h2>Macbook Air 13" with<br>M1 chip</h2>
        </div>
        <div class="c-img">
          <img src="{{ asset('img/display/2.jpg')}}">
        </div>
         
      </div>
    </div>
  </div>
  <!-- featured -->

  <!-- blog -->
  <div class="container-fluid">
    <h2 style="padding-left:130px">Macnificent.<span style="color:#6e6e73"> More reasons to shop with us</span></h2>
    <div id="carousel">
      <!-- first item -->
      <div class="item-f"></div>
      <!-- items -->
      <div class="item" style="padding: 20px; min-height:235px;min-width:290px">
        <div class="item-logo">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" fill="currentColor" style="color:#68cc45" class="bi bi-truck" viewBox="0 0 16 16">
            <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
          </svg>
        </div>
        <br>
        <h4 style="font-weight: 500;">Enjoy <span style="color: #68cc45;">two-hour</span> delivery<br>from Macintosh Store, <br><span style="color: #68cc45;">free delivery </span>or <span style="color: #68cc45;">easy<br> pickup</span></h4>
      </div>
      <div class="item" style="padding: 20px; min-height:235px;min-width:290px">
        <div class="item-logo">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" fill="currentColor" style="color:#f8ab5e" class="bi bi-credit-card" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
            <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
          </svg>
        </div>
        <br>
        <h4 style="font-weight: 500;">Pay in full or <span style="color:#f8ab5e ">pay over time.</span> Your choice</h4>
      </div>
      <div class="item" style="padding: 20px; min-height:235px;min-width:290px">
        <div class="item-logo">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" fill="currentColor" style="color:#759beb" class="bi bi-shield-check" viewBox="0 0 16 16">
            <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
            <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
          </svg>
        </div>
        <br>
        <h4 style="font-weight: 500;">Our <span style="color:#759beb ">payment is secured.</span> No need to worry</h4>
      </div>
      <div class="item" style="padding: 20px; min-height:235px;min-width:290px">
        <div class="item-logo">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" fill="currentColor" style="color:#68cc45;" class="bi bi-person-check" viewBox="0 0 16 16">
            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
            <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
          </svg>
        </div>
        <br>
        <h4 style="font-weight: 500;">Careless? We've got you <span style="color:#68cc45">covered. </span>For <span style="color: #68cc45;">12 months*</span></h4>
      </div>
      <div class="item" style="padding: 20px; min-height:235px;min-width:290px">
        <div class="item-logo">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" fill="currentColor" style="color:#ac39ff" class="bi bi-gift" viewBox="0 0 16 16">
            <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
          </svg>
        </div>
        <br>
        <h4 style="font-weight: 500;">Get all the exciting <span style="color:#ac39ff">bonuses.</span>What a great deal right?</h4>
      </div>
    </div>
    <!-- blog -->

    @endsection