<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\visitorsController;
use App\Http\Controllers\servicesController;
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

Route::get('/', [homeController::class, 'HomeIndex'])->name('home');
Route::get('/visitors', [visitorsController::class, 'visitorsIndex'])->name('visitors');
Route::get('/services', [servicesController::class, 'servicesIndex'])->name('services');
Route::get('/getServicesData', [servicesController::class, 'getServicesData']);
Route::post('/serviceDelete', [servicesController::class, 'serviceDelete']);
Route::post('/serviceDetails', [servicesController::class, 'getServiceDetails']);