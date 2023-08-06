@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container-fluid text-center card-hero" style="height:600px;padding:80px;background-color:white;border-radius:30px">
    <h1 style="font-size: 65px;">Macbook Air 15"</h1>
    <h2 style="font-size: 25px;">Impressively big. Impossibly thin.</h2><br>
    <a href="{{ route('product.mac') }}" style="text-decoration: none;">
        <h4 style="font-size: 20px;" class="text-primary">Find More ></h4>
    </a>
    <br><br><br>
    <img src="{{ asset('img/display/hero-mac.png') }}" height="200px">
</div>
<br>

<div class="row">
    <div class="col-md">
        <div class="container-fluid text-center card-hero" style="height:600px;padding:80px;background-color:black;border-radius:30px">
            <h1 style="font-size: 40px; color:white">Airpods 2nd Gen</h1>
            <h2 style="font-size: 20px; color:white">Sound. Experience.</h2><br>
            <a href="{{ route('product.pods') }}" style="text-decoration: none;">
                <h4 style="font-size: 18px;" class="text-primary">Find More ></h4>
            </a>
            <br><br><br>
            <img src="{{ asset('img/display/hero-airpod.jpg') }}" height="305px">
        </div>
    </div>
    <div class="col-md">
        <div class="container-fluid text-center card-hero" style="height:600px;padding:80px;background-color:black;border-radius:30px">
            <h1 style="font-size: 50px; color:white">iPad Pro</h1>
            <h2 style="font-size: 20px; color:white">Supercharged by M2</h2><br>
            <a href="{{ route('product.ipad') }}" style="text-decoration: none;">
                <h4 style="font-size: 15px;" class="text-primary">Find More ></h4>
            </a>
            <img src="{{ asset('img/display/hero-ipad.jpg') }}" width="530px" style="object-fit: cover;">
        </div>
    </div>
</div>
<br>
<div class="container-fluid text-center card-hero" style="height:600px;padding:80px;background-color:black;border-radius:30px">
    <h1 style="font-size: 50px; color:white">iPhone 14 Pro</h1>
    <h2 style="font-size: 25px; color:white">Pro. Beyond.</h2><br>
    <a href="{{ route('product.iphone') }}" style="text-decoration: none;">
        <h4 style="font-size: 20px;" class="text-primary">Find More ></h4>
    </a>
    <br><br><br>
    <img src="{{ asset('img/display/hero-iphone.jpg') }}" height="285px">
</div>
<br>

<div class="row">
    <div class="col-md">
        <div class="container-fluid text-center card-hero" style="height:600px;padding:80px;background-color:black;border-radius:30px">
            <h1 style="font-size: 45px; color:white">Apple Watch</h1>
            <h2 style="font-size: 20px; color:white">A healthy leap ahead.</h2><br>
            <a href="{{ route('product.watch') }}" style="text-decoration: none;">
                <h4 style="font-size: 15px;" class="text-primary">Find More ></h4>
            </a>
            <br><br><br>
            <img src="{{ asset('img/display/hero-watch.jpg') }}" height="303px">
        </div>
    </div>
    <div class="col-md">
        <div class="container-fluid text-center card-hero" style="height:600px;padding:80px;background-color:white;border-radius:30px; position: relative;">
            <h1 style="font-size: 50px;">Accesories</h1>
            <h2 style="font-size: 20px;">Essentials. Helpfull.</h2>
            <br>
            <a href="{{ route('product.mac') }}" style="text-decoration: none;">
                <h4 style="font-size: 18px;" class="text-primary">Find More ></h4>
            </a>
            <br><br><br>
            <div style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;">
            <img src="{{ asset('img/display/hero-ac.png') }}" style="max-width: 100%; max-height: 100%; position: absolute; top: 73%; left: 50%; transform: translate(-50%, -50%); border-bottom-right-radius: 20px; border-bottom-left-radius: 30px;">
            </div>
        </div>
    </div>


</div>
<br>
@endsection