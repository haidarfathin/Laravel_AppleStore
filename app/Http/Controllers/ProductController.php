<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Our Products - MStore";
        $viewData["subtitle"] =  "List of Products";
        $viewData["products"] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }
    
    public function mac()
    {
        $viewData = [];
        $viewData["title"] = "Mac - MStore";
        $viewData["subtitle"] =  "List of Products";
        $viewData["products"] = Product::all();
        return view('product.mac')->with("viewData", $viewData);
    }

    public function iphone()
    {
        $viewData = [];
        $viewData["title"] = "iPhone - MStore";
        $viewData["subtitle"] =  "List of Products";
        $viewData["products"] = Product::all();
        return view('product.iphone')->with("viewData", $viewData);
    }

    public function ipad()
    {
        $viewData = [];
        $viewData["title"] = "iPad - MStore";
        $viewData["subtitle"] =  "List of Products";
        $viewData["products"] = Product::all();
        return view('product.ipad')->with("viewData", $viewData);
    }

    public function pods()
    {
        $viewData = [];
        $viewData["title"] = "Airpods - MStore";
        $viewData["subtitle"] =  "List of Products";
        $viewData["products"] = Product::all();
        return view('product.pods')->with("viewData", $viewData);
    }
    
    public function watch()
    {
        $viewData = [];
        $viewData["title"] = "Watch - MStore";
        $viewData["subtitle"] =  "List of Products";
        $viewData["products"] = Product::all();
        return view('product.watch')->with("viewData", $viewData);
    }


    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product->getName()." - MStore";
        $viewData["subtitle"] =  $product->getName()." - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }

    public function showPods($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product->getName()." - MStore";
        $viewData["subtitle"] =  $product->getName()." - Product information";
        $viewData["product"] = $product;
        return view('product.pods')->with("viewData", $viewData);
    }

    public function showWatch($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product->getName()." - MStore";
        $viewData["subtitle"] =  $product->getName()." - Product information";
        $viewData["product"] = $product;
        return view('product.watch')->with("viewData", $viewData);
    }
    
}
