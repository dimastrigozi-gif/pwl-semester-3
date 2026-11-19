<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\OrganizerController;
use Illuminate\Support\Facades\Route;

// halaman publik
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/cari-turnamen', [PageController::class, 'cariTurnamen'])->name('cari-turnamen');
Route::get('/turnamen/{id}', [PageController::class, 'detailTurnamen'])->name('detail-turnamen');
Route::get('/turnamen/{id}/daftar', [PageController::class, 'pendaftaran'])->name('pendaftaran');
Route::get('/turnamen/{id}/bayar', [PageController::class, 'pembayaran'])->name('pembayaran');
Route::get('/turnamen-saya', [PageController::class, 'turnamenSaya'])->name('turnamen-saya');
Route::get('/jadwal', [PageController::class, 'jadwal'])->name('jadwal');
Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');

// auth sederhana (session manual, TODO: ganti Auth Laravel nanti)
Route::get('/signin', [PageController::class, 'signInForm'])->name('signin');
Route::post('/signin', [PageController::class, 'signIn']);
Route::get('/signup', [PageController::class, 'signUpForm'])->name('signup');
Route::post('/signup', [PageController::class, 'signUp']);
Route::post('/logout', [PageController::class, 'logout'])->name('logout');

// organizer
Route::prefix('organizer')->name('organizer.')->group(function () {
    Route::get('/dashboard', [OrganizerController::class, 'dashboard'])->name('dashboard');
    Route::get('/turnamen-saya', [OrganizerController::class, 'turnamenSaya'])->name('turnamen-saya');
    Route::get('/buat-turnamen', [OrganizerController::class, 'buatTurnamenForm'])->name('buat-turnamen');
    Route::post('/buat-turnamen', [OrganizerController::class, 'simpanTurnamen'])->name('simpan-turnamen');
});

// kalau halamannya gak ada
Route::fallback(function () {
    return response()->view('pages.404', [], 404);
});
