<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KabkotaController;
use App\Http\Controllers\FaskesController;
use App\Http\Controllers\RolefaskesController;

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


Route::middleware(['auth', 'verified'])->group(function () {
    // Rute untuk halaman utama
    Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

    // Rute untuk menampilkan form create
    Route::get('/create', [WelcomeController::class, 'create'])->name('faskes.create');

    // Rute untuk menyimpan faskes baru
    Route::post('/store', [WelcomeController::class, 'store'])->name('faskes.store');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'admin'])->group(function () {
    // admin
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    // admin/provinsi
    Route::resource('admin/provinsi', ProvinsiController::class);
    Route::get('admin/provinsi', [ProvinsiController::class, 'provinsi'])->name('admin.provinsi.index');
    Route::get('admin/provinsi/create', [ProvinsiController::class, 'create'])->name('admin.provinsi.create');
    Route::post('admin/provinsi', [ProvinsiController::class, 'store'])->name('admin.provinsi.store');
    Route::get('admin/provinsi/{id}', [ProvinsiController::class, 'show'])->name('admin.provinsi.show');
    Route::get('admin/provinsi/{id}/edit', [ProvinsiController::class, 'edit'])->name('admin.provinsi.edit');
    Route::put('admin/provinsi/{id}', [ProvinsiController::class, 'update'])->name('admin.provinsi.update');
    Route::delete('admin/provinsi/{id}', [ProvinsiController::class, 'destroy'])->name('admin.provinsi.destroy');

    // admin/kabkotas
    Route::resource('admin/kabkota', KabkotaController::class);
    Route::get('admin/kabkota', [KabkotaController::class, 'kabkota'])->name('admin.kabkota.index');
    Route::get('admin/kabkota/create', [KabkotaController::class, 'create'])->name('admin.kabkota.create');
    Route::post('admin/kabkota', [KabkotaController::class, 'store'])->name('admin.kabkota.store');
    Route::get('admin/kabkota/{id}', [KabkotaController::class, 'show'])->name('admin.kabkota.show');
    Route::get('admin/kabkota/{id}/edit', [KabkotaController::class, 'edit'])->name('admin.kabkota.edit');
    Route::put('admin/kabkota/{id}', [KabkotaController::class, 'update'])->name('admin.kabkota.update');
    Route::delete('admin/kabkota/{id}', [KabkotaController::class, 'destroy'])->name('admin.kabkota.destroy');

    // admin/faskes
    Route::resource('admin/faskes', FaskesController::class);
    Route::get('admin/faskes', [FaskesController::class, 'faskes'])->name('admin.faskes.index');
    Route::get('admin/faskes/create', [FaskesController::class, 'create'])->name('admin.faskes.create');
    Route::post('admin/faskes', [FaskesController::class, 'store'])->name('admin.faskes.store');
    Route::get('admin/faskes/{id}', [FaskesController::class, 'show'])->name('admin.faskes.show');
    Route::get('admin/faskes/{id}/edit', [FaskesController::class, 'edit'])->name('admin.faskes.edit');
    Route::put('admin/faskes/{id}', [FaskesController::class, 'update'])->name('admin.faskes.update');
    Route::delete('admin/faskes/{id}', [FaskesController::class, 'destroy'])->name('admin.faskes.destroy');
});

Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // FaskesRole
    Route::get('/faskes', [RolefaskesController::class, 'index'])->name('rolefaskes.index');
    Route::get('/faskes/create', [RolefaskesController::class, 'create'])->name('rolefaskes.create');
    Route::post('/faskes', [RolefaskesController::class, 'store'])->name('rolefaskes.store');
    Route::get('/faskes/{id}', [RolefaskesController::class, 'show'])->name('rolefaskes.show');
    Route::get('/faskes/{id}/edit', [RolefaskesController::class, 'edit'])->name('rolefaskes.edit');
    Route::put('/faskes/{id}', [RolefaskesController::class, 'update'])->name('rolefaskes.update');
    Route::delete('/faskes/{id}', [RolefaskesController::class, 'destroy'])->name('rolefaskes.destroy');
});

require __DIR__.'/auth.php';
