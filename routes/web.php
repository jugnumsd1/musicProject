<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WritersController;
use App\Http\Controllers\NewuserController; 
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\Artist;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin_panel',[AdminController::class,('panel')])->name('admin.panel');
    Route::get('/admin_release',[AdminController::class,('release')]);
    Route::get('/admin_home',[AdminController::class,('index')]);
    Route::get('/admin_music',[AdminController::class,('music')]);
    Route::get('/admin_singer',[AdminController::class,('singer')]);
    Route::get('/writers',[AdminController::class,('writer')]);
    Route::get('/admin_newuser',[AdminController::class,('newuser')]);
    Route::get('/admin_category',[AdminController::class,('category')]);
    Route::get('/admin_detail',[AdminController::class,('detail')]);
   
});
Route::get('/play-audio', function () {
    return view('audio_play');
});
Route::get('/admin_newuser', [NewuserController::class, 'index'])->name('newuser.index');
Route::post('/newuser', [NewuserController::class, 'store'])->name('newuser.store');
Route::get('/admin_newuser_show/{id}', [NewuserController::class, 'show'])->name('newuser.show');
Route::put('/admin_newuser/{id}', [NewuserController::class, 'update'])->name('newuser.update');
Route::delete('/admin_newuser/{id}', [NewuserController::class, 'destroy'])->name('newuser.destroy');
Route::get('/count-users', [NewuserController::class, 'countUsers'])->name('newuser.count');



Route::get('/admin_writers', [WritersController::class, 'index'])->name('writers.index'); // Displays writers list
Route::post('/writers', [WritersController::class, 'store'])->name('writers.store');
Route::get('/admin_writers_show/{id}', [WritersController::class, 'show'])->name('writers.show'); // Store a new writer
Route::delete('/admin_writers/{id}', [WritersController::class, 'destroy'])->name('writers.destroy');
Route::put('/admin_writers/{id}', [WritersController::class, 'update'])->name('writers.update'); // Store a new writer


Route::get('/admin_category',[CategoryController::class,'index'])->name('category.index');
Route::post('/admin_category',[CategoryController::class,'store'])->name('category.store');

Route::get('/artist',[ArtistController::class,('index')])->name('artists.index');
Route::post('/artist',[ArtistController::class,('store')])->name('artists.store');
require __DIR__.'/auth.php';
