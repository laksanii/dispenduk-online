<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [PageController::class, 'dashboard']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/menu', [PageController::class, 'dashboard']);

Route::get('/statistik', function () {
    return view('dispenduk.statistik');
});

Route::get('{jenis_layanan}/detail-layanan', [PageController::class, 'detailLayanan']);

Route::get('/{layanan}/jenis-layanan', [PageController::class, 'jenisLayanan']);

Route::post('/pengajuan-layanan', [ApplicationController::class, 'storeApplication']);

require __DIR__.'/auth.php';
