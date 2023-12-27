<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProfileController;


Route::get('/', [HomeController::class, 'index'])->name('home.index');

//skill
Route::post('/skill/store', [SkillController::class, 'store'])->name('skill.store');
Route::post('/skill/category/store', [SkillController::class, 'storeCategory'])->name('skill.category.store');

// project
Route::post('/store', [HomeController::class, 'store'])->name('home.store');
Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('home.delete');
Route::post('/update/{id}', [HomeController::class, 'update'])->name('home.update');

// contact
Route::post('/send-mail', [MailController::class, 'sendMail'])->name('home.mail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
