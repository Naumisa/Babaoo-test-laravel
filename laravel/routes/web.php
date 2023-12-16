<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('pages.home'); })->name('home');
Route::get('/search', [SearchController::class, 'index'])->name('search.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () { return view('pages.dashboard'); })->name('dashboard');

    Route::middleware([
        'admin'
    ])->group(function () {
        Route::get('/admin', function () { return view('pages.admin'); })->name('admin.index');
    });
});
