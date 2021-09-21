<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get("/",[HomeController::class,"index"]);

Route::get("/users",[AdminController::class,"user"]);

Route::get("/customerlist",[AdminController::class,"customerlist"]);

Route::get("/deletemenu/{id}",[AdminController::class,"deletemenu"]);

Route::get("/deletecustomer/{id}",[AdminController::class,"deletecustomer"]);

Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);

Route::get("/updateview/{id}",[AdminController::class,"updateview"]);

Route::get("/updatecustomer/{id}",[AdminController::class,"updatecustomer"]);

Route::post("/update/{id}",[AdminController::class,"update"]);

Route::post("/updatecust/{id}",[AdminController::class,"updatecust"]);

Route::get("/foodmenu",[AdminController::class,"foodmenu"]);

Route::post("/uploadfood",[AdminController::class,"upload"]);

Route::post("/uploadcustomer",[AdminController::class,"uploadcustomer"]);

Route::get("/redirects",[HomeController::class,"redirects"]);

Route::post("/reservation",[AdminController::class,"reservation"]);

Route::get("/viewreservation",[AdminController::class,"viewreservation"]);

Route::get("/viewchef",[AdminController::class,"viewchef"]);

Route::post("/uploadchef",[AdminController::class,"uploadchef"]);

Route::get("/updatechef/{id}",[AdminController::class,"updatechef"]);

Route::post("/updatefoodchef/{id}",[AdminController::class,"updatefoodchef"]);

Route::get("/deletechef/{id}",[AdminController::class,"deletechef"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
