<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\GoldController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\LampuController;
use App\Http\Controllers\PdamController;
use App\Http\Controllers\CuciController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TabunganController;
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


//Route::get('/admin/dashboard', [SiteBackendController::class, 'index'])->name('admin.dashboard');



//backend pertanyaan
Route::get('/admin/pertanyaan', [PertanyaanController::class, 'indexPertanyaan'])->name('admin.pertanyaan');
Route::get('/admin/detailpertanyaan/{id}',[PertanyaanController::class,'detailPertanyaan'])->name('admin.pertanyaan.detail');
Route::get('/admin/pertanyaan/formubahbackend/{id}',[PertanyaanController::class,'formUbahBackend'])->name('admin.pertanyaan.formubah');
Route::post('/admin/pertanyaan/ubah/{id}',[PertanyaanController::class,'ubahBackend'])->name('admin.pertanyaan.ubah');
Route::get('/admin/pertanyaan/hapus/{id}',[PertanyaanController::class,'hapusBackend'])->name('admin.pertanyaan.hapus');
Route::get('/admin/pertanyaan/formtambah',[PertanyaanController::class,'formTambahBackend'])->name('admin.pertanyaan.formtambah');
Route::post('/admin/pertanyaan/tambah',[PertanyaanController::class,'tambahbackend'])->name('admin.pertanyaan.tambah');


//backend user

Route::get('/admin/dashboard', [UserController::class, 'indexUser'])->name('admin.dashboard');
Route::get('/admin/user/{id}',[UserController::class,'detailUser'])->name('admin.user.detail');
Route::get('/admin/user/formubahbackend/{id}',[UserController::class,'formUbahBackend'])->name('admin.user.formubah');
Route::post('/admin/user/ubah/{id}',[UserController::class,'ubahBackend'])->name('admin.user.ubah');
Route::get('/admin/user/hapus/{id}',[UserController::class,'hapusBackend'])->name('admin.user.hapus');
Route::get('/admin/tambah/formtambah',[UserController::class,'formTambahBackend'])->name('admin.user.formtambah');
Route::post('/admin/tambah/tambah',[UserController::class,'tambahbackend'])->name('admin.user.tambah');


//backend pesan
Route::get('/admin/pesan', [PesanController::class, 'indexPesan'])->name('admin.pesan');
Route::get('/admin/pesan/{id}',[PesanController::class,'detailPesan'])->name('admin.pesan.detail');
Route::get('/admin/pesan/hapus/{id}',[PesanController::class,'hapusBackend'])->name('admin.pesan.hapus');


//backend emas
Route::get('/admin/transaksi/emas', [GoldController::class, 'indexEmas'])->name('admin.emas');
Route::get('/admin/transaksi/emas/{id}',[GoldController::class,'detailEmas'])->name('admin.emas.detail');
Route::get('/admin/transaksi/emas/hapus/{id}',[GoldController::class,'hapusBackend'])->name('admin.emas.hapus');


//backend Wallet
Route::get('/admin/transaksi/wallet', [WalletController::class, 'indexWallet'])->name('admin.wallet');
Route::get('/admin/transaksi/wallet/{id}',[WalletController::class,'detailWallet'])->name('admin.wallet.detail');
Route::get('/admin/transaksi/wallet/hapus/{id}',[WalletController::class,'hapusBackend'])->name('admin.wallet.hapus');


//backend listrik
Route::get('/admin/transaksi/listrik', [LampuController::class, 'indexLampu'])->name('admin.listrik');
Route::get('/admin/transaksi/listrik/{id}',[LampuController::class,'detailLampu'])->name('admin.listrik.detail');
Route::get('/admin/transaksi/listrik/hapus/{id}',[LampuController::class,'hapusBackend'])->name('admin.listrik.hapus');


//backend PDAM
Route::get('/admin/transaksi/pdam', [PdamController::class, 'indexPdam'])->name('admin.pdam');
Route::get('/admin/transaksi/pdam/{id}',[PdamController::class,'detailPdam'])->name('admin.pdam.detail');
Route::get('/admin/transaksi/pdam/hapus/{id}',[PdamController::class,'hapusBackend'])->name('admin.pdam.hapus');

//backend Cuci
Route::get('/admin/transaksi/cuci', [CuciController::class, 'indexCuci'])->name('admin.cuci');
Route::get('/admin/transaksi/cuci/{id}',[CuciController::class,'detailCuci'])->name('admin.cuci.detail');
Route::get('/admin/transaksi/cuci/hapus/{id}',[CuciController::class,'hapusBackend'])->name('admin.cuci.hapus');


//backend Barang
Route::get('/admin/barang', [BarangController::class, 'indexBarang'])->name('admin.barang');
Route::get('/admin/detailbarang/{id}',[BarangController::class,'detailBarang'])->name('admin.barang.detail');
Route::get('/admin/barang/formubahbackend/{id}',[BarangController::class,'formUbahBackend'])->name('admin.barang.formubah');
Route::post('/admin/barang/ubah/{id}',[BarangController::class,'ubahBackend'])->name('admin.barang.ubah');
Route::get('/admin/barang/hapus/{id}',[BarangController::class,'hapusBackend'])->name('admin.barang.hapus');
Route::get('/admin/barang/formtambah',[BarangController::class,'formTambahBackend'])->name('admin.barang.formtambah');
Route::post('/admin/barang/tambah',[BarangController::class,'tambahbackend'])->name('admin.barang.tambah');

// backend tabungan
Route::get('/tabungan', [TabunganController::class, 'indexTabungan'])->name('admin.tabungan');
Route::get('/tabungan/{id}', [TabunganController::class, 'detailTabungan'])->name('admin.tabungan.detail');
Route::get('/tabungan/hapus/{id}', [TabunganController::class, 'deleteTabungan'])->name('admin.tabungan.hapus');
Route::post('/tabungan/store', [TabunganController::class, 'store'])->name('admin.tabungan.store');
Route::get('/user/formubahbackend/{id}', [UserController::class, 'formUbahBackend'])->name('admin.user.formubah');
Route::post('/user/ubah/{id}', [UserController::class, 'ubahBackend'])->name('admin.user.ubah');
Route::get('/user/hapus/{id}', [UserController::class, 'hapusBackend'])->name('admin.user.hapus');
Route::get('/tambah/formtambah', [UserController::class, 'formTambahBackend'])->name('admin.user.formtambah');
Route::post('/tambah/tambah', [UserController::class, 'tambahbackend'])->name('admin.user.tambah');