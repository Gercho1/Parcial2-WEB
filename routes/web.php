<?php
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('cliente/registrar', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('cliente/guardar', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('cliente/listar', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('cliente/{cliente}/editar', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('cliente/{cliente}/actualizar', [ClienteController::class, 'update'])->name('cliente.actualizar');