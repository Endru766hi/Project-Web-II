<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisPenyewaannController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenyewaanController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('home.index');
});
Route::get('/tutorial', function () {
    return view('home.tutorial');
});
Route::get('/about', function () {
    return view('home.about');
});
Route::get('/contact', function () {
    return view('home.contact');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    //dasboard
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('auth/login',[DashboardController::class,'index']);

    //booking
    // Route::get('Booking',[BookingController::class,'index'])->name('booking/booking');

    //USer
    Route::get('/data-user',[UserController::class,'index'])->name('user/index-user');
    Route::get('/tambah-user',[UserController::class,'create'])->name('user/tambah-user');
    Route::post('/simpan-user',[UserController::class,'store'])->name('user/store-user');
    Route::get('/user/edit-user/{id}',[UserController::class,'edit'])->name('user/edit-user');
    Route::patch('/ubah-data/{id}',[UserController::class,'update'])->name('user/update');
    Route::delete('/user/hapus-user/{id}',[UserController::class,'destroy'])->name('user/hapus-user');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        //data lapangan
    Route::get('/data-lapangan',[lapanganController::class,'index'])->name('lapangan/index');
    Route::get('/tambah-data',[lapanganController::class,'create'])->name('lapangan/tambah-data');
    Route::post('/simpan-lapangan',[lapanganController::class,'store'])->name('lapangan/store');
    Route::get('/edit-data/{id}',[lapanganController::class,'edit'])->name('lapangan/edit-data');
    Route::put('/ubah-data-data/{id}',[lapanganController::class,'update'])->name('lapangan/update');
    Route::delete('/hapus-lapangan/{id}',[lapanganController::class,'destroy'])->name('lapangan/hapus-data');

        //data jenis lapangan
    Route::get('/data-penyewaan',[JenisPenyewaannController::class,'index'])->name('jenis/index-jp');
    Route::get('/tambah-jenis',[JenisPenyewaannController::class,'create'])->name('jenis/tambah-jp');
    Route::post('/simpan-penyewaan',[JenisPenyewaannController::class,'store'])->name('jenis/store-jp');
    Route::get('/edit-jenis/{id}',[JenisPenyewaannController::class,'edit'])->name('jenis/edit-jp');
    Route::put('/ubah-jenis/{id}',[JenisPenyewaannController::class,'update'])->name('jenis/update');
    Route::delete('/hapus-jenis/{id}',[JenisPenyewaannController::class,'destroy'])->name('jenis/hapus-jp');

    //data penyewaan
    Route::get('/data-sewa',[PenyewaanController::class,'index'])->name('penyewaan/index');
    Route::get('/booking/{id}',[PenyewaanController::class,'create'])->name('penyewaan/tambah-data');
    Route::post('/simpan-sewa',[PenyewaanController::class,'store'])->name('penyewaan/store');
    Route::get('/edit-sewa/{id}',[PenyewaanController::class,'edit'])->name('penyewaan/edit-data');
    Route::put('/ubah-sewa/{id}',[PenyewaanController::class,'update'])->name('penyewaan/update');
    Route::delete('/hapus-sewa/{id}',[PenyewaanController::class,'destroy'])->name('penyewaan/hapus-data');

});

require __DIR__.'/auth.php';


