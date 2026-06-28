<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\InformasiController;
use App\Models\Berita;

// Halaman utama
Route::get('/', function () {
    $beritas = Berita::where('is_published', true)
        ->latest()
        ->take(3)
        ->get();

    return view('welcome', compact('beritas'));
});

// Halaman publik
Route::get('/informasi', [InformasiController::class, 'index'])
    ->name('informasi.index');

Route::get('/informasi/{berita:slug}', [InformasiController::class, 'show'])
    ->name('informasi.show');

// SPMB
Route::view('/spmb', 'spmb.spmb')
    ->name('spmb');
    
// profil
Route::view('/profil-sekolah', 'profil.profil-sekolah')
    ->name('profil.sekolah');

Route::view('/sejarah-sekolah', 'profil.sejarah-sekolah')
    ->name('profil.sejarah');

Route::view('/sambutan-kepala-sekolah', 'profil.sambutan')
    ->name('profil.sambutan');

// visi misi
Route::view('/visi-misi', 'visi-misi.visi-misi')
    ->name('visi-misi');

// ekstrakurikuler
Route::view('/ekstrakurikuler', 'ekstrakurikuler.ekstrakurikuler')
    ->name('ekstrakurikuler');

// contact
Route::view('/contact', 'contact.contact')
    ->name('contact');

    
// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Auth
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('berita', BeritaController::class);

});

require __DIR__.'/auth.php';