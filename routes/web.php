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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post("/addcart/{id}",[HomeController::class, "addcart"]);

Route::get("/viewcritic",[AdminController::class, "viewcritic"]);

Route::post("/critic",[AdminController::class, "critic"]);

Route::post("/update/{id}",[AdminController::class, "update"]);

Route::get("/updateview/{id}",[AdminController::class, "updateview"])->name("updateview");

Route::get("/deletemenu/{id}",[AdminController::class, "deletemenu"])->name("deletemenu");

Route::post("/uploadfood",[AdminController::class, "upload"]);

Route::get("/foodmenu",[AdminController::class, "foodmenu"]);

Route::get("/deleteuser/{id}",[AdminController::class, "deleteuser"]);

Route::get("/users",[AdminController::class, "user"]);

// practice route views
Route::get("home", [HomeController::class, "index"]);

Route::get("/redirects", [HomeController::class,"redirects"]);

//practice route Auth
Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'create'])->name('register');

Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store'])->name('register');

// Route::view('/', 'home')->name('home');

Route::get('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/home');
})->name('logout');

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');

Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenicate']);

Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store'])->name('register')->middleware('guest');
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate'])->name('login')->middleware('guest');

// Route::post('/logout', function () {
//     auth()->logout();
//     request()->session()->invalidate();
//     request()->session()->regenerateToken();

//     return redirect('/home');
// })->name('logout')->middleware('auth');

// Route::view('/home', 'home')->name('home')->middleware('auth');

