@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container-fluid" style="background-color: white; padding:20px 40px 40px 40px;">
<a href="{{ url()->previous() }}" class="btn btn-secondary back-button" style="background-color:#121212">
  <i class="fas fa-arrow-left"></i>
</a>
<div class="container">
  <div class="row">
  <div class="col-md-8" style="max-width: 100%;">
      <div class="box" style="margin:50px">
        <img src="{{ asset('/img/products/'.$viewData["product"]->getImage()) }}">
      </div>
    </div>
    <div class="col-md-4" style="padding-bottom:20px">
      <div class="teks" style="max-width: 350px; overflow:auto;margin-top:30px;">
        <h1 class="card-title" style="font-weight: 600;">
          {{ $viewData["product"]->getName() }}
        </h1>
        <h5 style="font-weight: 300;">${{ $viewData['product']->getPrice() }}</h6>
        <br>
        <h4>Overview</h4>
        <p id="style-1">{{ $viewData["product"]->getDescription() }}</p>
      </div>
      <br>
      <form method="POST" action="{{ route('cart.add', ['id'=> $viewData['product']->getId()]) }}">
        <div class="row">
          @csrf
          <div class="col-auto">
            <div class="input-group col-auto" style="width:120px">
              <div class="input-group-text">Qty</div>
              <input type="number" min="1" max="10" class="form-control quantity-input" name="quantity" value="1">
            </div>
          </div>
          <div class="col-md">
            <button class="btn btn-primary text-white" style="width:100%;border-radius:10px" type="submit">Add to Bag</button>
          </div>
        </div>
      </form>
      <br>
      <p style="font-size:10pt">*Free Shipping only for region Indonesia</p>
    </div>
    
  </div>
</div>
</div>
@endsection