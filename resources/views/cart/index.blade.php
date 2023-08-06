@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container-fluid" style="background-color: white;">
  <div class="container text-center py-5">
    <h1 style="font-weight: 500;">Your bag total is ${{ $viewData["total"] }}</h1>
    <p>Free delivery, Indonesia region only</p>
    <br>
    @if (count($viewData["products"]) > 0)
    <button type="btn" class="btn-primary btn" style="width:300px;border-radius:10px">
        <a href="{{ route('cart.purchase') }}" style="text-decoration: none;">Checkout</a>
    </button>
    @else
    <h4 class="text-primary">Your bag is empty, happy shopping!</h4>
    @endif
  </div>
  <!-- item -->
  <hr class="divider" style="margin-left:80px;margin-right:70px">
  @foreach($viewData["products"] as $product)
  <div class="container py-4">
    <div class="item-prod">
      <div class="row">
        <div class="col-md-3">
          <div class="box-img-cart">
            <img src="{{ asset('/img/products/'.$product->getImage()) }}">
          </div>
        </div>
        <div class="col-md-5">
          <div class="container">
            <h2>{{ $product->getName() }}</h2>
            <h6 class="text-primary" style="font-weight: 400;">Quantity: {{ session('products')[$product->getId()] }}</h6>
            <p style="visibility: hidden;">{{ $product->getId() }}</p>
          </div>
        </div>
        <div class="col-md">
          <div class="container">
            <h3 class="float-end">${{ $product->getPrice() }}</h3>
          </div>
        </div>
      </div>
    </div>
    <hr class="divider">
  </div>
  @endforeach
  <br>
  <!-- total -->
  <div class="container" style="padding-bottom: 40px; text-align:right">
    <div class="row">
      <div class="col-md-8">
      </div>
      <div class="col-md-2">
        <p>Subtotal</p>
        <p>Shipping</p>
      </div>
      <div class="col-md-2" style="text-align: end;">
        <p>${{ $viewData["total"] }}</p>
        <p>FREE</p>
      </div>
    </div>

    <hr class="divider float-end" width="370px"><br><br>
    <div class="row">
      <div class="col-md-8">
      </div>
      <div class="col-md-2">
        <h4 style="font-weight: 700;">Total</h4>
      </div>
      <div class="col-md-2" style="text-align: end;">
        <h4 style="font-weight: 700;">${{ $viewData["total"] }}</h4><br>
      </div>
    </div>

    <div class="btn-wrapper" style="padding-right: 0;">
    @if (count($viewData["products"]) > 0)
      <a href="{{ route('cart.delete') }}" style="text-decoration: none; padding-right:10px">
        <button type="btn" class="btn-outline-danger btn" style="width:150px;height:45px;border-radius:10px;">
          Remove All
        </button>
      </a>
      <button type="btn" class="btn-primary btn" style="width:100px;height:45px;border-radius:10px">
        <a href="{{ route('cart.purchase') }}" style="text-decoration: none;">Checkout</a>
      </button>
      @endif
    </div>
  </div>
</div>
@endsection