@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container my-4" style="padding-top: 50px;padding-left:20px;">
  <h1 style="font-size: 45px;">Shop Mac</h1>
  <div class="container-text" style="display: flex;padding-top:30px">
    <a class="navbar-link" href="#models" style="color:black;text-decoration:none;margin-right: 20px;">
      <p>All Models</p>
    </a>
    <a class="navbar-link" href="#promo" style="color:black;text-decoration:none;margin: 0;">
      <p>Accesories</p>
    </a>
  </div>
</div>

<section id="models" style="padding-top:20px"> <!-- Remove the "#" symbol from the id -->
  <div class="container-fluid" style="margin-left: -40px">
  <h2 style="padding-left:130px">All Models.<span style="color:#6e6e73"> All about Mac.</span></h2>
    <div id="carousel">
      <!-- first item -->
      <div class="item-f"></div>
      <!-- items -->
      @foreach ($viewData["products"] as $product)
      @if ($product->getCategory() === 'mac')
      <div class="item" style="min-height: 60vh; min-width: 330px;" onclick="location.href='{{ route('product.show', ['id' => $product->getId()]) }}'">
        <div class="c-header" style="padding: 30px 30px 0 30px; margin:0">
          <h2 style="padding:0">{{ $product->getName() }}</h2>
          <p style="font-weight: 300;">From <span style="font-weight: 600;">${{$product->getPrice() }}</span></p>
        </div>
        <div class="c-img">
          <img src="{{ asset('/img/products/'.$product->getImage()) }}" style="max-height:230px; width:auto">
        </div>
      </div>
      @endif
      @endforeach
    </div>
  </div>
</section>

<section id="promo" style="padding-top:20px"> <!-- Remove the "#" symbol from the id -->
  <div class="container-fluid" style="margin-left: -40px">
    <h2 style="padding-left:130px">Accessories.<span style="color:#6e6e73"> Made for Mac.</span></h2>
    <div id="carousel">
      <!-- first item -->
      <div class="item-f"></div>
      <!-- items -->
      <div class="item" style="height: 435px; min-width:fit-content; width:300px">
        <div class="c-header">
          <h2 style="padding-top: 20px; padding-left:20px; padding-bottom:0">Get the most<br>from your Mac.</h2>
        </div>
        <div class="c-img">
          <img src="{{ asset('img/display/aksesoris.jpg')}}" style="width:auto; height:280px;border-radius:18;padding-top:-10px">
        </div>
      </div>
      @foreach ($viewData["products"] as $product)
      @if ($product->getCategory() === 'secondary')
      <div class="item" style="min-width:330px;width:300px" onclick="location.href='{{ route('product.show', ['id' => $product->getId()]) }}'">
        <div class="c-img" style="margin: 20px;padding-top:20px">
          <img src="{{ asset('/img/products/'.$product->getImage()) }}" style="min-width:100px;width:240px;height:auto;">
        </div>
        <div class="c-footer" style="padding: 30px 10px 0 10px">
          <h5>{{ $product->getName() }}</h5>
          <p>${{$product->getPrice() }}</p>
        </div>
      </div>
      @endif
      @endforeach
    </div>
  </div>
</section>
@endsection