<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    DasboarduserController,
    DasboardadminController,
    PeminjamanController,
    registerController
};

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('auth');

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'register'])->name('registrasi');
Route::post('register', [registerController::class, 'store'])->name('regisData');

Route::group(['middleware' => 'auth'], function () {

    // Route::post('login', [AuthController::class, 'authenticating']);

    // Hak akses admin
    // Route::group(['middleware' => 'role:1'], function () {
    //     Route::get('dashboardadmin', [DasboardadminController::class, 'index']);
    // });


    // admin
    Route::group(['middleware' => 'can:admin'], function () {
        Route::get('dashboardadmin', [DasboardadminController::class, 'index'])->name('dashboardAdmin');
        Route::post('tambahBuku', [DasboardadminController::class, 'store_buku'])->name('store_buku');

        // tampil tabel peminjam
        Route::get('tabelPeminjam', [DasboardadminController::class, 'peminjamanAdmin'])->name('tabelPeminjaman');

        // tampil tabel buku
        Route::get('tabelBuku', [DasboardadminController::class, 'tabelBuku'])->name('tabelBuku');
        Route::get('createBuku', [DasboardadminController::class, 'createBuku'])->name('createBuku');
        Route::get('updateBuku/{id}/updateBuku', [DasboardadminController::class, 'updateBuku'])->name('updateBuku');
        Route::put('editBuku', [DasboardadminController::class, 'editBuku'])->name('editBuku');
        Route::get('deleteBuku/{id}', [DasboardadminController::class, 'deleteBuku'])->name('deleteBuku');
        Route::get('updateStatus/{id}/', [PeminjamanController::class, 'updateStatusPeminjaman'])->name('DiKembalikan');


        // tampil tabel user
        Route::get('tabelUser', [DasboardadminController::class, 'tabelUser'])->name('tabelUser');
        Route::get('deleteUser/{id}', [DasboardadminController::class, 'deleteUser'])->name('deleteUser');
        
        // tampil kategori buku
        Route::get('tampilKategori', [DasboardadminController::class, 'tampilKategori'])->name('tampilKategori');
        Route::get('createKategori', [DasboardadminController::class, 'createKategori'])->name('createKategori');
        Route::post('storeKategori', [DasboardadminController::class, 'storeKategori'])->name('storeKategori');
        Route::get('deleteKategori/{id}', [DasboardadminController::class, 'deleteKategori'])->name('deleteKategori');
        
        
        // profile admin
        Route::get('profileAdmin', [DasboardadminController::class, 'profileAdmin'])->name('profileAdmin');
        Route::get('editProfileAdmin', [DasboardadminController::class, 'editProfileAdmin'])->name('editProfileAdmin');
        Route::put('updateProfileAdmin', [DasboardadminController::class, 'updateProfileAdmin'])->name('updateProfileAdmin');


        
        
    });


    // user
    Route::group(['middleware' => 'can:user'], function () {

        // dashboard
        Route::get('dashboarduser', [DasboarduserController::class, 'index'])->name('dashboardUser');

        // kataglog Buku
        Route::get('katalogBuku/{kategori}', [DasboarduserController::class, 'katalogBuku'])->name('katalogBuku');
        
        // peminjaman
        Route::get('hasilPeminjaman', [PeminjamanController::class, 'hasilPeminjaman'])->name('hasilPeminjaman');
        Route::get('peminjaman/{id}/peminjaman', [PeminjamanController::class, 'peminjaman'])->name('peminjaman');

        Route::post('pengajuanPeminjaman', [PeminjamanController::class, 'pengajuanPeminjaman'])->name('pengajuanPeminjaman');

        Route::get('pengingatKembaliPeminjaman', [PeminjamanController::class, 'pengingatKembaliPeminjaman'])->name('pengingatKembaliPeminjaman');
        
        // profile user
        Route::get('profileUser', [DasboarduserController::class, 'profileUser'])->name('profileUser');
        Route::get('editProfileUser', [DasboarduserController::class, 'editProfileUser'])->name('editProfileUser');
        Route::put('updateProfileUser', [DasboarduserController::class, 'updateProfileUser'])->name('updateProfileUser');

    });

    // Hak akses user 
    // Route::group(['middleware' => 'role:2'], function () {
    //     Route::get('dashboarduser', [DasboarduserController::class, 'index']);
    // });

    // Route::get('peminjaman', [PeminjamanController::class, 'peminjaman']);

    Route::get('mainlayout', [PeminjamanController::class, 'mainlayoutAdmin']);
});
