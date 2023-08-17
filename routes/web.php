<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Whoops\Run;

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

Route::get('/', [PageController::class, 'dashboard']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/pengajuan-layanan', [ApplicationController::class, 'storeApplication']);
});

Route::middleware('auth:admin')->group(function () {
    Route::get("/admin", [AdminController::class, 'dashboard']);

    Route::get("/admin/dashboard", [AdminController::class, 'dashboard']);

    Route::get("/admin/data-pengajuan", [AdminController::class, 'application']);

    Route::get("/admin/data-pengajuan/{id}", [AdminController::class, 'detailPengajuan']);

    Route::get('/approve/{id}', [AdminController::class, 'approve']);

    Route::get('/reject/{id}', [AdminController::class, 'reject']);

    Route::post('/download', [AdminController::class, 'download']);

    Route::post('/admin/logout', [AdminController::class, 'destroy']);
    
});

Route::get('/admin/login', [AdminController::class, 'login'])->middleware('guest:admin');

Route::post('/admin/login', [AdminController::class, 'authentication'])->middleware(('guest:admin'));

Route::get('/dashboard', [PageController::class, 'dashboard']);

Route::get('/statistik', [PageController::class, 'statistic']);

Route::get('{jenis_layanan}/detail-layanan', [PageController::class, 'detailLayanan']);

Route::get('/{layanan}/jenis-layanan', [PageController::class, 'jenisLayanan']);


// Javascript request
Route::get('/app-statistik', [ApplicationController::class, 'statistik']);

require __DIR__ . '/auth.php';
