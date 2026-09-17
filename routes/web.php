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

Route::get('/peta-sebaran', function () {
    return view('public.map-dashboard');
})->name('public.map');

Route::get('/informasi-peluang', [\App\Http\Controllers\OpportunityController::class, 'index'])->name('opportunities.index');
Route::get('/informasi-peluang/{opportunity:slug}', [\App\Http\Controllers\OpportunityController::class, 'show'])->name('opportunities.show');

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

// Super Admin Routes
Route::middleware(['auth', 'role:super_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    // Add other super admin routes here, e.g., branches management
});

// Branch Admin Routes
Route::middleware(['auth', 'role:branch_admin'])->prefix('branch-admin')->name('branch-admin.')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\BranchAdmin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('members', \App\Http\Controllers\BranchAdmin\MemberController::class);
    Route::resource('submissions', \App\Http\Controllers\BranchAdmin\SubmissionController::class);
});

// Map API Routes
Route::prefix('api/map')->name('api.map.')->group(function () {
    Route::get('/provinces', [\App\Http\Controllers\Api\MapController::class, 'getProvinces'])->name('provinces');
    Route::get('/provinces/{id}/regencies', [\App\Http\Controllers\Api\MapController::class, 'getRegencies'])->name('regencies');
    Route::get('/locations', [\App\Http\Controllers\Api\MapController::class, 'getLocations'])->name('locations');
});

require __DIR__.'/auth.php';
