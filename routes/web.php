<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('mail-sending-system')->group(function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::prefix('inquiry')->group(function () {
        Route::get('index', [InquiryController::class, 'index'])->name('inquiry.index');
        Route::get('create', [InquiryController::class, 'create'])->name('inquiry.create');
        Route::post('create', [InquiryController::class, 'store'])->name('inquiry.store');
    });
    Route::get('/user/index', [UserController::class, 'index'])->name('user.index');
});
