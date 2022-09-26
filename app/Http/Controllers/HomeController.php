<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];

        $viewData['title'] = "Home Page - Online Store";
        return view("home.index")->with("viewData", $viewData);
    }
    public function about()
    {
        $viewData = [];
        $viewData['title'] = "About us - Online Store";
        $viewData['subtitle'] = "About us";
        $viewData['description'] = "This is an about page ...";
        $viewData['author'] = "Developed by: Destiny";
        //the with() method will return the particular data
        //we want to pass to the view
        //in this case we are returning it as an array .
        return view('home.about')->with('viewData', $viewData);
    }
}
