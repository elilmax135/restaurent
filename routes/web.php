<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Controller;
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



Route::get('/',[HomeController::class,"index"]);



Route::get('/redirects',[HomeController::class,"redirects"]);


Route::get('/users', [AdminController::class, "user"]);

Route::get('/foodmenu', [AdminController::class, "foodmenu"]);

//upload
Route::post('/uploadfood', [AdminController::class, "upload"]);

Route::get('/userdelete/{id}', [AdminController::class, "userdelete"]);

Route::get('/deletemenu/{id}', [AdminController::class, "deletemenu"]);
//update foodmenu



Route::get('/showupdate/{id}', [AdminController::class, "updatemenu"]);
Route::post('/update/{id}', [AdminController::class, "update"]);


//reservation
Route::post('/reservation', [AdminController::class, "reservation"]);

Route::get('/viewreservation', [AdminController::class, "viewreservation"]);

//chef
Route::post('/foodchef', [AdminController::class, "foodchef"]);

Route::get('/viewfoodchef', [AdminController::class, "viewfoodchef"]);


Route::get('/deletechef/{id}', [AdminController::class, "deletechef"]);

Route::get('/updatechef/{id}', [AdminController::class, "updatechefview"]);

Route::post('/updatecf/{id}', [AdminController::class, "updatecf"]);


// add cart
Route::post('/addcart/{id}', [HomeController::class, "addcart"]);


Route::get('/showcart/{id}', [HomeController::class, "showcart"]);


Route::get('/remove/{id}', [HomeController::class, "remove"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
