<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
=======
use App\Http\Controllers\ProfileController;
use App\Models\Blog;
use App\Models\Dokumentasi;
use App\Models\Footer;
use App\Models\Manajemen;
use App\Models\MitraIndustri;
use App\Models\Prestasi;
use App\Models\Tentang;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.index', [
        'tentangs' => Tentang::latest()->first(),
        'manajemens' => Manajemen::latest()->get(),
        'prestasis' => Prestasi::latest()->get(),
        'dokumentasis' => Dokumentasi::latest()->first(),
        'testimonials' => Testimoni::latest()->get(),
        'mitras' => MitraIndustri::latest()->get(),
        'blogs' => Blog::latest()->limit(6)->get(),
        'footers' => Footer::latest()->first(),
    ]);
});

Route::get('/blog/{id}', function ($id) {
    $blog = Blog::find($id);

    if (!$blog) {
        abort(404);
    }

    return view('layouts.index', [
        'blog' => $blog,
        'blogs' => Blog::latest()->limit(6)->get(),
    ]);
})->name('pages.blog.show');

Route::get('/blog', function () {
    return view('layouts.index', [
        'more_blogs' => Blog::latest()->get(),
    ]);
})->name('pages.blog.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// =========================
// 🔹 Halaman dengan Layout Baru
// =========================
Route::get('/newpage', function () {
    return view('pages.newpage');
});

Route::get('/tentang/profil-guru', function () {
    return view('tentang.profil-guru'); // ini menunjuk ke resources/views/tentang/profil-guru.blade.php
})->name('profil.guru');



require __DIR__ . '/auth.php';
>>>>>>> master
