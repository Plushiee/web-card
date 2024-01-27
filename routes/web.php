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
Route::get('/map', [WebMainController::class, 'map'])->name('map');

// API Start
Route::get('/API/get-minecraft-map', [WebMainController::class, 'getMap'])->name('minecraft.map');
// API End
