<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\InventarioController;


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
});

Route::middleware(['auth'])->group(function () {
    Route::resource('productos', ProductoController::class);
    Route::get('productos/{producto}/inventario/create', [InventarioController::class, 'create'])->name('inventarios.create');
    Route::post('inventarios', [InventarioController::class, 'store'])->name('inventarios.store');
});
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');

Route::delete('/productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');

require __DIR__.'/auth.php';
