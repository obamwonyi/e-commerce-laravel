<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//one way of defining a route in laravel 
Route::get('/', function () {
    //return view('welcome');
    $viewData = [];
    $viewData['title'] = "Home Page - Online Store";
    return view('home.index')->with("viewData",$viewData);
});

//another way of defining a route in laravel . 
//'App\Http\Controllers\HomeController@about 
//the route Controller above means 
//the HomeController.php will be executed  calling the 
//about() method in the class. 
Route::get('/about','App\Http\Controllers\HomeController@about')->name('home.about');
//where first parameter is the url to look out for 
//second parameter is the controller 
//this will return a static instance that can extend the named route 
// with the name() method 