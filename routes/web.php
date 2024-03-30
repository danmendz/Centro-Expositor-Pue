<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\AreaController;
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
})->name('page-index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin routes
    Route::middleware('can:acceder-admin')->group(function () {
        Route::get('/admin/index', function () {
            return view('admin.index');
        })->name('admin.index');

        // Route::get('users', function () {
        //     return view('admin.usuario.usuarios');
        // })->name('users');

        Route::resource('salons', SalonController::class);
        Route::resource('users', UserController::class);
        Route::resource('eventos', EventoController::class);
        Route::resource('areas', AreaController::class);
        // Route::get('salones', function () {
        //     return view('admin.salon.salones');
        // })->name('salones');
    });

    // Cliente routes
    Route::middleware('can:acceder-cliente')->group(function () {
        Route::get('my-events', function () {
            return view('cliente.eventos');
        })->name('my-events');
        
        Route::get('/cliente/index', function () {
            return view('cliente.index');
        })->name('cliente.index');
    });

    // Usuario routes
    Route::middleware('can:acceder-usuario')->group(function () {
        Route::get('events', function () {
            return view('usuario.eventos');
        })->name('events');

        Route::get('/usuario/index', function () {
            return view('usuario.index');
        })->name('usuario.index');
    });
});

require __DIR__.'/auth.php';
