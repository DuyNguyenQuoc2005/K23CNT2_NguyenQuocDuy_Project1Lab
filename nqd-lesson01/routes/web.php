<?php
use App\Http\Controllers\nqdAccountController;
use App\Http\Controllers\DuyProfileController;
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

#Lab2---------------------------------------
Route::get('/', function () {
    return view('welcome');
});

Route::get('/greating', function () {
    return "<h1> Hello, Nguyen Quoc Duy <h1>";
});

Route::get('/devmaster', function () {
    return "<h1>Welcome to, Devmaster Academy! <h1>";
});

Route::redirect('/here','/there');
Route::get('/there', function () {
    return "<h1>Redirect: here to there <h1>";
});

#Router return view
Route::get('/duyne', function () {
    return view('duyne');
});

Route::get('/devmaster/{id}', function ($id) {
    return '<h1>Devmaster '.$id;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return '<h1> Post: 2005 ; Comments: 2006';
});

#use Illuminate\Http\Request;

#Route::get('/use/{id}', function (Request $request, $id) {
#    return '<h1> User -> ' .$id;
#});

use Illuminate\Http\request;

Route::get ('/user/{id}',function (Request $request, $id) {
    return '<h1> user -> '. $id;
});

Route::get('/dev/{name}', function ($name = null) {
    return "<h1>Welcome to, $name";
});

Route::get('/user-dev/{name?}', function ($name = 'Duy Ne') {
    return "<h1>Welcome to, $name";
});

Route::get('/user-constraint/{name}', function ($name) {
    return "<h1>Route Constraint [A-Za-z]+";
})->where('name','[A-Za-z ]+');

Route::get('/user-constraint/{id}', function ($id) {
    return "<h1>Route Constraint [0-9]+";
})->where('id', '[0-9]+');

Route::get('/user-constraint/{id}/{name}', function ($id, $name) {
    return "<h1>Route Constraint ['id'=> '[0-9]+, 'name' => '[a-z]+']";
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('/user-check/{id}/{name}', function ($id, $name) {
    return "<h1>user-check whereNumber('id')->whereAlpha('name' [$id, $name]";
})->whereNumber('id')->whereAlpha('name');

Route::get('/user-check/{name}', function ($name) {
    return "<h1>user-check whereAlphaNumeric('name') => [$name]";
})->whereAlphaNumeric('name');

Route::get('/user-check/{id}', function ($id) {
    return "<h1>user-check whereAlphaUuid('id') => [$id]";
})->whereUuid('id');

#Encoded Forward Slashes
Route::get('/search/{search?}', function ($search) {
    return "<h1> Tham so tren url la unicode: $search </h1>";
})->where('search', '.*');

#Name Routes
Route::get('/name/profile', function () {
    return "<h1> Dat ten route </h1>";
})->name('named.prodile');

#Lab2----------------------------------------

#Lab3----------------------------------------
#nqdAccountController
Route::get('/account', [nqdAccountController::class,'index'])->name('account.index');

#nqdAccountController

#Lab3----------------------------------------