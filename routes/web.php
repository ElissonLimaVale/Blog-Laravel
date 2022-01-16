<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\SearchController;

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
    
Route::get('/', HomeController::class)->name('Site.Home'); 

Route::get('/search', [SearchController::class, 'Search'])->name('Site.Search'); 
