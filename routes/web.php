<?php

use App\Http\Controllers\WebMainController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WebMainController::class, 'main'])->name('main');
Route::get('/API/plushiewhy-profile-picture',[WebMainController::class, 'instagram_profile_picture'])->name('instagram.plushiee_profile_picture'); //--> Ambil Profile Picture
Route::get('/API/fetch-instagram-data',[WebMainController::class, 'instagram_profile_info'])->name('instagram.plushiee_profile_info'); //--> Ambil Profile Picture
