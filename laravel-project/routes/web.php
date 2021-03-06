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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/send-mail',function(){

    \Mail::to("yadavsantosh6562@gmail.com")->send(new \App\Mail\Registermail([
        'title'=>'Welcome to Laravel',
        'message'=>'Hi User You are Registered Successfuly'
    ]));

});