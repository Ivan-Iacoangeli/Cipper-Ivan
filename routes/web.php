<?php

use App\Http\Controllers\CipperController;
use App\Http\Middleware\RedirectIfAuth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware(RedirectIfAuth::class);

Route::middleware('auth')->group(function(){
    Route::get('/home' , [CipperController::class , 'index'])->name('home');
});