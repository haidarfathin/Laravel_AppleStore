<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        $viewData['role'] = User::all();
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Macintosh";
        $viewData["subtitle"] =  "About us";
        $viewData["description"] =  "Halo";
        $viewData["author"] = "Developed by: dar";
        return view('home.about')->with("viewData", $viewData);
    }
}
