<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware;
Route::resource('/', GuestController::class);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::middleware([Middleware\Authenticated::class])->group(function () {
    Route::get('/inventory', function () {
        return view('inventory.index');
    })->middleware(Middleware\HasPermission::class);
    // ->withoutMiddleware(\App\Http\Middleware\Admin::class);
});
