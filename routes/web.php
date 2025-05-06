<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\http\Controllers\GunController;
Route::resource ('Gun', GunController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/gun/create', [GunController::class, 'create'])->name('gun.create');

Route::post('/gun', [GunController::class, 'store'])->name('gun.store');

Route::get('/gun/{gun}', [GunController::class, 'show'])->name('gun.show');

Route::get('/gun/{gun}/edit', [GunController::class, 'edit'])->name('gun.edit');

Route::put('/gun/{gun}', [GunController::class, 'update'])->name('gun.update');

Route::delete('/gun/{gun}', [GunController::class, 'destroy'])->name('gun.destroy');

Route::get('/gun', [GunController::class, 'index'])->name('gun.index');