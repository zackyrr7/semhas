<?php

use App\Http\Controllers\ProfileController;
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
use App\Http\Controllers\Admin\AdminAuthController;
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
    return view('admin.Login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Route::get('dashboard', [SiteBackendController::class, 'index'])->name('admin.dashboard');



//backend pertanyaan



Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    Route::post('/logout', [AdminAuthController::class, 'adminLogout'])->name('adminLogout');
 
    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('pertanyaan', [PertanyaanController::class, 'indexPertanyaan'])->name('admin.pertanyaan');
        Route::get('detailpertanyaan/{id}',[PertanyaanController::class,'detailPertanyaan'])->name('admin.pertanyaan.detail');
        Route::get('pertanyaan/formubahbackend/{id}',[PertanyaanController::class,'formUbahBackend'])->name('admin.pertanyaan.formubah');
        Route::post('pertanyaan/ubah/{id}',[PertanyaanController::class,'ubahBackend'])->name('admin.pertanyaan.ubah');
        Route::get('pertanyaan/hapus/{id}',[PertanyaanController::class,'hapusBackend'])->name('admin.pertanyaan.hapus');
        Route::get('pertanyaan/formtambah',[PertanyaanController::class,'formTambahBackend'])->name('admin.pertanyaan.formtambah');
        Route::post('pertanyaan/tambah',[PertanyaanController::class,'tambahbackend'])->name('admin.pertanyaan.tambah');
        
        
        //backend user
        
        Route::get('dashboard', [UserController::class, 'indexUser'])->name('admin.dashboard');
        Route::get('user/{id}',[UserController::class,'detailUser'])->name('admin.user.detail');
        Route::get('user/formubahbackend/{id}',[UserController::class,'formUbahBackend'])->name('admin.user.formubah');
        Route::post('user/ubah/{id}',[UserController::class,'ubahBackend'])->name('admin.user.ubah');
        Route::get('user/hapus/{id}',[UserController::class,'hapusBackend'])->name('admin.user.hapus');
        Route::get('tambah/formtambah',[UserController::class,'formTambahBackend'])->name('admin.user.formtambah');
        Route::post('tambah/tambah',[UserController::class,'tambahbackend'])->name('admin.user.tambah');
        
        
        //backend pesan
        Route::get('pesan', [PesanController::class, 'indexPesan'])->name('admin.pesan');
        Route::get('pesan/{id}',[PesanController::class,'detailPesan'])->name('admin.pesan.detail');
        Route::get('pesan/hapus/{id}',[PesanController::class,'hapusBackend'])->name('admin.pesan.hapus');
        
        
        //backend emas
        Route::get('transaksi/emas', [GoldController::class, 'indexEmas'])->name('admin.emas');
        Route::get('transaksi/emas/{id}',[GoldController::class,'detailEmas'])->name('admin.emas.detail');
        Route::get('transaksi/emas/hapus/{id}',[GoldController::class,'hapusBackend'])->name('admin.emas.hapus');
        
        
        //backend Wallet
        Route::get('transaksi/wallet', [WalletController::class, 'indexWallet'])->name('admin.wallet');
        Route::get('transaksi/wallet/{id}',[WalletController::class,'detailWallet'])->name('admin.wallet.detail');
        Route::get('transaksi/wallet/hapus/{id}',[WalletController::class,'hapusBackend'])->name('admin.wallet.hapus');
        
        
        //backend listrik
        Route::get('transaksi/listrik', [LampuController::class, 'indexLampu'])->name('admin.listrik');
        Route::get('transaksi/listrik/{id}',[LampuController::class,'detailLampu'])->name('admin.listrik.detail');
        Route::get('transaksi/listrik/hapus/{id}',[LampuController::class,'hapusBackend'])->name('admin.listrik.hapus');
        
        
        //backend PDAM
        Route::get('transaksi/pdam', [PdamController::class, 'indexPdam'])->name('admin.pdam');
        Route::get('transaksi/pdam/{id}',[PdamController::class,'detailPdam'])->name('admin.pdam.detail');
        Route::get('transaksi/pdam/hapus/{id}',[PdamController::class,'hapusBackend'])->name('admin.pdam.hapus');
        
        //backend Cuci
        Route::get('transaksi/cuci', [CuciController::class, 'indexCuci'])->name('admin.cuci');
        Route::get('transaksi/cuci/{id}',[CuciController::class,'detailCuci'])->name('admin.cuci.detail');
        Route::get('transaksi/cuci/hapus/{id}',[CuciController::class,'hapusBackend'])->name('admin.cuci.hapus');
        
        
        //backend Barang
        Route::get('barang', [BarangController::class, 'indexBarang'])->name('admin.barang');
        Route::get('detailbarang/{id}',[BarangController::class,'detailBarang'])->name('admin.barang.detail');
        Route::get('barang/formubahbackend/{id}',[BarangController::class,'formUbahBackend'])->name('admin.barang.formubah');
        Route::post('barang/ubah/{id}',[BarangController::class,'ubahBackend'])->name('admin.barang.ubah');
        Route::get('barang/hapus/{id}',[BarangController::class,'hapusBackend'])->name('admin.barang.hapus');
        Route::get('barang/formtambah',[BarangController::class,'formTambahBackend'])->name('admin.barang.formtambah');
        Route::post('barang/tambah',[BarangController::class,'tambahbackend'])->name('admin.barang.tambah');
        
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
 
    });
});