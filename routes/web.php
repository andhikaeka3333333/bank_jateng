<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminSubmissionController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DepositoController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JatengaiController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\PembiayaanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubmissionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/sejarah', [HistoryController::class, 'index']);
Route::get('/tentang', [AboutController::class, 'index']);
Route::get('/pimpinan', [LeaderController::class, 'index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Semua user bisa akses create, store, index, show
    Route::resource('deposito', DepositoController::class)->only([
        'index',
        'create',
        'store',
        'show'
    ]);

    // Hanya admin bisa approve/reject/update/destroy
    Route::middleware('admin')->group(function () {
        Route::post('deposito/{id}/approve', [DepositoController::class, 'approve'])->name('deposito.approve');
        Route::post('deposito/{id}/reject', [DepositoController::class, 'reject'])->name('deposito.reject');
        Route::resource('deposito', DepositoController::class)->only([
            'edit',
            'update',
            'destroy'
        ]);
    });

    // Pembiayaan juga sama, tinggal sesuaikan
    Route::resource('pembiayaan', PembiayaanController::class)->only([
        'index',
        'create',
        'store',
        'show'
    ]);

    Route::middleware('admin')->group(function () {
        Route::post('pembiayaan/{id}/approve', [PembiayaanController::class, 'approve'])->name('pembiayaan.approve');
        Route::post('pembiayaan/{id}/reject', [PembiayaanController::class, 'reject'])->name('pembiayaan.reject');
        Route::resource('pembiayaan', PembiayaanController::class)->only([
            'edit',
            'update',
            'destroy'
        ]);
    });

    Route::middleware('auth')->group(function () {
        Route::get('/tabungan', [SubmissionController::class, 'index'])->name('tabungan.index');
        Route::post('/tabungan', [SubmissionController::class, 'store'])->name('tabungan.store');


    });

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/admin/tabungan', [AdminSubmissionController::class, 'index'])->name('admin.tabungan.index');
        Route::post('/admin/tabungan/{id}/approve', [AdminSubmissionController::class, 'approve'])->name('admin.tabungan.approve');
        Route::post('/admin/tabungan/{id}/reject', [AdminSubmissionController::class, 'reject'])->name('admin.tabungan.reject');
    });
});



Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/password', [ProfileController::class, 'editPassword'])->name('profile.password');
    Route::patch('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');
});

// Admin (CRUD penuh)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('articles', ArticleController::class);
});

Route::middleware(['auth'])->group(function () {
        Route::get('/profil', [ProfileController::class, 'index'])->name('profil.index');
        Route::post('/profil/password', [ProfileController::class, 'updatePassword'])->name('profil.updatePassword');
    });

// User publik bisa lihat artikel
Route::get('/berita', [ArticleController::class, 'index'])->name('news.index');
Route::get('/berita/{article}', [ArticleController::class, 'show'])->name('news.show');
Route::get('/welcome/berita/{article}', [ArticleController::class, 'showWelcome'])->name('news.show');
Route::get('/jatengai', [JatengaiController::class, 'index']);
Route::post('/jatengai/ask', [JatengaiController::class, 'ask'])->name('jatengai.ask');


require __DIR__ . '/auth.php';
