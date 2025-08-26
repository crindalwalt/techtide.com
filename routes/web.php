<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

# user site routes
Route::get("/",[HomeController::class,'index'])->name("home");
Route::get("/blog/{blog}",[HomeController::class,"show"])->name("blog.detail");



# admin panel routes
Route::get('/dashboard', [BlogController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/blog',[BlogController::class,'index'])->middleware(['auth', 'verified'])->name('admin.blog.list');
Route::get("/dashboard/blog/create",[BlogController::class,'create'])->middleware(['auth', 'verified'])->name("admin.blog.create");
Route::post("/dashboard/blog/store",[BlogController::class,'store'])->middleware(['auth','verified'])->name("admin.blog.store");

















Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
