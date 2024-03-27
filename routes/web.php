<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // admin
    Route::get('users', function () { 
        Gate::authorize('see-users'); 
        return view('admin.users');
    })->name('users');

    Route::get('/admin/index', function () {
        Gate::authorize('admin-index'); 
        return view('admin.index');
    })->name('admin.index');
    
    // cliente
    Route::get('events', function () {
        Gate::authorize('see-events'); 
        return view('cliente.events');
    })->name('events');

    Route::get('/cliente/index', function () {
        Gate::authorize('cliente-index'); 
        return view('cliente.index');
    })->name('cliente.index');

    // usuario
    Route::get('/usuario/index', function () {
        Gate::authorize('usuario-index'); 
        return view('usuario.index');
    })->name('usuario.index');
});

require __DIR__.'/auth.php';
