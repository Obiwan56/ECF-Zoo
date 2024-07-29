<?php

use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/formCommentaire', [CommentaireController::class, 'formCom']);
Route::post('/formCommentaire', [CommentaireController::class, 'ajoutCom']);

Route::get('/allCommentaire', [CommentaireController::class, 'listeCommentaireOk']);
Route::get('/', [CommentaireController::class, 'dixDerCom']);

Route::get('/gestionCommentaire', [CommentaireController::class, 'gestionCom']);
Route::get('/deleteCom/{id}', [CommentaireController::class, 'deleteCom']);
Route::get('/deleteCom2/{id}', [CommentaireController::class, 'deleteCom2']);
Route::get('/aprouvCom/{id}', [CommentaireController::class, 'aprouvCom']);
Route::get('/listeComPubli', [CommentaireController::class, 'commentaireOk']);
















Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
