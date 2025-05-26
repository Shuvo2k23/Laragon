<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/add', function () {
    return view('addUser');
})->name('view.addUser');
Route::controller(userController::class)->group(function(){
    Route::get('/','getUsers')->name('home');
    Route::get('/users/id/{id}'
        ,'byId')
        ->name('view.user');
    Route::get('/users/del/{id}'
        ,'delById')
        ->name('view.del');
    Route::post('/add-user','addUser')->name('addUser');

    Route::post('/update/{id}'
        ,'update')
        ->name('update.user');

    Route::get('/update-user/{id}'
        ,'updateUser')
        ->name('update.page');
});
