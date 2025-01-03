<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::resource('/', HomeController::class);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
