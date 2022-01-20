<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\LoginController;
use App\Http\Controllers\Site\PostsController;
use App\Http\Controllers\Site\SearchController;


// login
Route::get('/', LoginController::class)->name('Site.Login'); 

// home
Route::get('/home', HomeController::class)->name('Site.Home'); 
Route::get('/search', [SearchController::class, 'Search'])->name('Site.Search'); 

// posts
Route::get('/posts', [PostsController::class, 'index'])->name('Site.Posts'); 
Route::get('/posts/create', [PostsController::class, 'create'])->name('Site.Posts.Create'); 
Route::post('/posts/create', [PostsController::class, 'store'])->name('Site.Posts.Store'); 
Route::get('posts/delete/${id}', [PostsController::class, 'destroy'])->name('Site.Posts.Delete'); 
Route::get('posts/edit/${id}', [PostsController::class, 'edit'])->name('Site.Posts.Edit'); 
Route::post('/posts/update', [PostsController::class, 'update'])->name('Site.Posts.Update'); 

