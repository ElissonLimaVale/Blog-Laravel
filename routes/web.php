<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\LoginController;
use App\Http\Controllers\Site\PostsController;
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
    
Route::get('/', LoginController::class)->name('Site.Login'); 

Route::get('/home', HomeController::class)->name('Site.Home'); 

Route::get('/search', [SearchController::class, 'Search'])->name('Site.Search'); 

// posts
Route::get('/posts', [PostsController::class, 'index'])->name('Site.Posts'); 
Route::get('/posts/create', [PostsController::class, 'create'])->name('Site.Posts.Create'); 
