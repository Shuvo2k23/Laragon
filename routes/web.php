<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/about','about')->name('about');   
Route::view('/post','post')->name('post');   

Route::get('/test/{id}',[PageController::class,'showUser'])->name('test');
