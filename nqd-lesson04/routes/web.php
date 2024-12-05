<?php

use App\Http\Controllers\nqdProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

#Views
Route::get('/nqd-view1',function(){
    return view('nqd-view1',['name'=>"K23CNT2 - Project 1 - DuyNguyen"]);
});

Route::get('/nqd-view2',function(){
    return view('nqd-view2',[
                'name'=>"K23CNT2 - Project 1 - DuyNguyen",
                'array'=> [1,3,2,6,9]
            ]);
});

Route::get('/nqd-view3',function(){
    return view('nqd-view3',[
                'name'=>"K23CNT2 - Project 1 - DuyNguyen",
                'array'=> [10,13,12,1,23,31],
                'user'=>[],
            ]);
});

Route::get('/', [nqdProductController::class,'index']);

#Template Blade Layout
Route::get('/home',function(){
    return view('index');
});
    
Route::get('/about-us',function(){
    return view('about');
});
    
Route::get('/contact',function(){
    return view('contact');
});