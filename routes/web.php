<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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
Route::get('/users',[AdminController::class,"user"]);
Route::get('/userdelete/{id}',[AdminController::class,"userdelete"]);
Route::get('/foodmenu',[AdminController::class,"foodmenu"]);
Route::post('/uploadfood',[AdminController::class,"upload"]);
Route::get('/deletemenu/{id}',[AdminController::class,"deletemenu"]);
Route::get('/uploadmenu',[AdminController::class,"uploadmenu"]);
Route::get('/updatemenu/{id}',[AdminController::class,"updatemenu"]);
Route::post('/reservation',[AdminController::class,"reservation"]);
Route::get('/reservationview',[AdminController::class,"reservationview"]);
Route::get('/deletereservation/{id}',[AdminController::class,"deletereservation"]);
Route::get('/foodchef',[AdminController::class,"foodchef"]);
//Route::post('/uploadchef',[AdminController::class,"uploadchef"]);
Route::get('/deletechef/{id}',[AdminController::class,"deletechef"]);
Route::get('/uploadfoodchef',[AdminController::class,"uploadfoodchef"]);
Route::post('/uploadchefmenu',[AdminController::class,"uploadchefmenu"]);
Route::post('/addcart/{id}',[HomeController::class,"addcart"]);
Route::get('/showcart/{id}',[HomeController::class,"showcart"]);
Route::get('/deletecart/{id}',[HomeController::class,"deletecart"]);







Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
