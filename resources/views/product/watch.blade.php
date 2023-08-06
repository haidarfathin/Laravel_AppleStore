@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

<div class="container-fluid text-center airpod">
  <div class="container airpod-banner">
    <h1>APPLE WATCH</h1>
    <img src="{{ asset('/img/display/watch-banner.png') }}" height="400px">
  </div>
  <h1 class="header" style="font-size: 40px;">Which Apple Watch are<br>right for you?</h1>
  <div class="container airpods py-5">
    <div class="row">
    @foreach ($viewData["products"] as $product)
      @if ($product->getCategory() === 'watch')
      <div class="col-md-4 text-center">
        <img src="{{ asset('/img/products/'.$product->getImage()) }}" height="180px">
        <br><br>
        <p style="font-size: 25px; font-weight: 600; margin-bottom: 0">{{ $product->getName() }}</p>
        <p style="font-size: 18px;">${{ $product->getPrice() }}</p><br>
        <form method="POST" action="{{ route('cart.add', ['id'=> $product->getId()]) }}">
          @csrf
          <button class="btn btn-primary text-white" style="width: 70px; border-radius: 20px; height: 40px; align-items: center;" type="submit">Buy</button>
        </form>
      </div>
      @endif
    @endforeach
    </div>
  </div>
</div>

@endsection