<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.index');
});

Route::prefix('profil')->name('public.profil.')->group(function () {
    Route::get('/sejarah', function () {
        return view('public.profil.sejarah');
    })->name('sejarah');

    Route::get('/visi-misi', function () {
        return view('public.profil.visi-misi');
    })->name('visi-misi');

    Route::get('/tugas-fungsi', function () {
        return view('public.profil.tugas-fungsi');
    })->name('tugas-fungsi');
});

Route::get('/organisasi', function () {
    return view('public.organization');
})->name('public.organization');

Route::get('/organisasi/{slug}', function ($slug) {
    return view('public.organization-detail', compact('slug'));
})->name('public.organization.detail');

Route::get('/program', function () {
    return view('public.program');
})->name('public.program');

Route::get('/program/{slug}', function ($slug) {
    return view('public.program-detail', compact('slug'));
})->name('public.program.detail');

Route::get('/berita', function () {
    return view('public.news');
})->name('public.news');

Route::get('/berita/{slug}', function ($slug) {
    return view('public.news-detail', compact('slug'));
})->name('public.news.detail');

Route::get('/publikasi', function () {
    return view('public.publication');
})->name('public.publication');

Route::get('/dokumentasi', function () {
    return view('public.gallery');
})->name('public.gallery');

Route::get('/dokumentasi/{slug}', function ($slug) {
    return view('public.gallery-detail', compact('slug'));
})->name('public.gallery.detail');

Route::get('/keanggotaan', function () {
    return view('public.membership');
})->name('public.membership');

Route::get('/kontak', function () {
    return view('public.contact');
})->name('public.contact');

Route::get('/admin/login', function () {
    return view('auth.admin-login');
})->name('admin.login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
