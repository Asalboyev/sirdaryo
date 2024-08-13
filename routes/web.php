<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainControler;

use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\Admin\AdsController;
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


Route::get('/lang/{lang}', function ($lang) {
   session(['lang'=>$lang]);
   return back();
});

Route::get('/', [MainControler::class, 'index'])->name('index');
Route::get('/category/{slug}', [MainControler::class, 'categoryPosts'])->name('categoryPosts');
Route::get('/posts/{slug}', [MainControler::class, 'postDetail'])->name('postDetail');
Route::get('/contact', [MainControler::class, 'contact']);
Route::get('/search', [MainControler::class, 'search'])->name('search');


Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('categories', CategoriesController::class);
    Route::resource('posts', PostsController::class);
    Route::resource('tags', TagsController::class);
    Route::resource('ads', AdsController::class);

    Route::post('/post-image-upload',[PostsController::class,'upload'])->name('upload');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
