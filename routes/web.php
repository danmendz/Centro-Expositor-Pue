<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\CajonController;
use App\Http\Controllers\InvitadoController;
use App\Http\Controllers\ReservacionCajonController;
use App\Http\Controllers\LoginApiController;

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
Route::get('/obtener-usuario', [LoginApiController::class, 'obtenerUsuario']);
Route::get('/obtener-eventos', [LoginApiController::class, 'obtenerEventos']);
Route::put('/actualizar-estatus', [LoginApiController::class, 'actualizarEstatus']);

Route::get('/', function () {
    return view('Centro-Expositor');
})->name('page-index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('eventos', EventoController::class);
    Route::resource('reservas', ReservaController::class);
    Route::resource('reservacion-cajons', ReservacionCajonController::class);
    Route::get('disponible/eventos', [EventoController::class, 'eventosDisponibles'])->name('lista.eventos');
    Route::get('cajones-reservados', [ReservacionCajonController::class, 'cajonesReservados'])->name('reservados.cajones');
    Route::get('mis-reservas', [ReservaController::class, 'misReservas'])->name('mis.reservas');
    Route::get('reservas-cajones', [ReservacionCajonController::class, 'listarReservas'])->name('reservas.estacionamiento');
    Route::get('reserva/evento', [EventoController::class, 'reservar'])->name('reservar.evento');
    Route::post('insertar', [EventoController::class, 'inserta'])->name('eventos.insertar');
    
    // Admin routes
    Route::middleware('can:acceder-admin')->group(function () {
        
        // Route::get('/admin/index', function () {
        //     return view('admin.index');
        // })->name('admin.index');

        Route::get('/admin/index', [EventoController::class, 'eventos'])->name('admin.index');

        Route::resource('salons', SalonController::class);
        Route::resource('users', UserController::class);
        Route::resource('areas', AreaController::class);
        Route::resource('cajons', CajonController::class);
        Route::resource('invitados', InvitadoController::class);

        Route::get('reportes', function () {
            return view('admin.reporte.index');
        })->name('reportes-index');

        Route::get('aprobar-evento/{idEvento}', [ReservaController::class, 'aprobarEvento'])->name('reservas.aprobar');

    });

    // Cliente routes
    Route::middleware('can:acceder-cliente')->group(function () {
        Route::get('/cliente/index', function () {
            return view('cliente.index');
        })->name('cliente.index');
        
        Route::get('mis/eventos', [AreaController::class, 'accesoArea'])->name('eventos');
        Route::get('autorizado/eventos', [AreaController::class, 'accesoArea'])->name('autorizados.eventos');
        // Route::get('disponible/eventos', [EventoController::class, 'eventosDisponibles'])->name('lista.eventos');
        Route::get('asignada/areas', [AreaController::class, 'listarAsignadas'])->name('asignadas.areas');
        Route::get('acceso/area', [AreaController::class, 'accesoArea'])->name('acceso.area');
        // Route::get('cajones-reservados', [ReservacionCajonController::class, 'cajonesReservados'])->name('reservados.cajones');
        // Route::get('mis-reservas', [ReservaController::class, 'misReservas'])->name('mis.reservas');
        // Route::get('reservas-cajones', [ReservacionCajonController::class, 'listarReservas'])->name('reservas.estacionamiento');
        Route::get('acceso/pendientes', [AreaController::class, 'accesoArea'])->name('accesos.pendientes');
        Route::get('acceso/aprobados', [AreaController::class, 'accesoArea'])->name('accesos.aprobados');
        // Route::get('reserva/evento', [EventoController::class, 'reservar'])->name('reservar.evento');
        // Route::post('insertar', [EventoController::class, 'inserta'])->name('eventos.insertar');
        Route::get('mis-eventos/', [EventoController::class, 'misEventos'])->name('mis.eventos');
        Route::get('/cajones/{id_area}', [CajonController::class, 'listar'])->name('listar.cajones');
        Route::match(['get', 'post'], 'crear-reserva/{id_cajon}', [ReservacionCajonController::class, 'crearReserva'])->name('crear.reserva');
        Route::post('reservar/cajon', [ReservacionCajonController::class, 'reservarCajon'])->name('reserva.cajon');
    });


    // Usuario routes
    Route::middleware('can:acceder-usuario')->group(function () {
        Route::get('/usuario/index', function () {
            return view('usuario.index');
        })->name('usuario.index');
    });
});

require __DIR__.'/auth.php';
