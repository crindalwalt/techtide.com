<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get("/",[HomeController::class,'index'])->name("home");
Route::get("/blog-detail",[HomeController::class,"show"])->name("blog.detail");
