<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get("/",[HomeController::class,'index'])->name("home");
Route::get("/blog-detail",[HomeController::class,"show"])->name("blog.detail");



Route::get("/admin",function () {
    return "ap admin waly page per ponch gye hn";
})->name("admin");
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/posts',[BlogController::class,'index'])->middleware(['auth', 'verified'])->name('admin.blog.list');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
