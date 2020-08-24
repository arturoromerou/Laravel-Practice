<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;
use Symfony\Component\Routing\Route as RoutingRoute;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/views', function () {
    $name = 'Arturo';
    $last_name = 'Romero';
    $array = [1,2,3,4,5,6];
    $number = 2;
    return view('view', compact("name", "last_name", "array", "number"));
});

Route::group(["prefix" => 'admin'], function(){
    Route::get("/admin/{name?}", function($name = "Default") {
        return "hola admin " . $name;
    });
});

Route::get("/name/{name?}", function($name = "Default") {
    return "hola " . $name;
});