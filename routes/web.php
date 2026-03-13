<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneControler;
use App\Http\Controllers\WatchController;
use App\Models\Phone;
use App\Models\Watch;
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

Route::get('/', function () {
    $phones = Phone::latest()->take(6)->get();
    $watches = Watch::latest()->take(6)->get();

    return view('Home', compact('phones', 'watches'));
})->name('home');

// Phone management routes (web UI)
Route::prefix('phones')->group(function () {   
    Route::get('/', [PhoneControler::class, 'index'])->name('phones.index');
    Route::get('/create', [PhoneControler::class, 'create'])->name('phones.create');
    Route::post('/', [PhoneControler::class, 'store'])->name('phones.store');
    Route::get('/{id}/edit', [PhoneControler::class, 'edit'])->name('phones.edit');
    Route::put('/{id}', [PhoneControler::class, 'update'])->name('phones.update');
    Route::delete('/{id}', [PhoneControler::class, 'destroy'])->name('phones.destroy');
});

// Watch management routes (web UI)
Route::prefix('watches')->group(function () {
    Route::get('/', [WatchController::class, 'index'])->name('watches.index');
    Route::get('/create', [WatchController::class, 'create'])->name('watches.create');
    Route::post('/', [WatchController::class, 'store'])->name('watches.store');
    Route::get('/{id}/edit', [WatchController::class, 'edit'])->name('watches.edit');
    Route::put('/{id}', [WatchController::class, 'update'])->name('watches.update');
    Route::delete('/{id}', [WatchController::class, 'destroy'])->name('watches.destroy');
});


