<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SearchController;
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



    Route::get('/', [PostController::class, 'index'])->middleware('auth')->name('index');
    Route::resource('post', PostController::class)->except(['show'])->middleware(['poster']);
    Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show')->middleware(['auth']);
   
    Route::get('/post/checkSlug/', [PostController::class, 'checkSlug']);
    
    Route::get('/categories/{category:name}', [PostController::class, 'showByCategories']);
    
    Route::get('/profile/{user:username}', [UserController::class, 'show'])->middleware('auth')->name('profile');
    Route::resource('user', UserController::class)->middleware('auth');

    Route::resource('search', SearchController::class)->middleware('auth');

    Route::resource('category', CategoryController::class)->middleware('poster');

    Route::resource('dashboard', AdminController::class)->middleware('admin');
    Route::get('/admin/posts/', [AdminController::class, 'posts'])->name('dashboard.posts')->middleware('admin');;
    Route::get('/admin/users/', [AdminController::class, 'users'])->name('dashboard.users')->middleware('admin');;
    Route::get('/admin/categories/', [AdminController::class, 'categories'])->name('dashboard.categories')->middleware('admin');;

require __DIR__.'/auth.php';
