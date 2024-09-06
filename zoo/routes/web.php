<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
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

Route::get('/service', [ServiceController::class, 'service']);

Route::get('/animaux', [AnimalController::class, 'animal']);
Route::get('/detailAnimaux/{id}', [AnimalController::class, 'detailAnimal']);

Route::get('/deconnexion', [UserController::class, 'deconnexion']);




Route::get('/gestionCommentaire', [CommentaireController::class, 'gestionCom']);
Route::get('/deleteCom/{id}', [CommentaireController::class, 'deleteCom']);
Route::get('/deleteCom2/{id}', [CommentaireController::class, 'deleteCom2']);
Route::get('/aprouvCom/{id}', [CommentaireController::class, 'aprouvCom']);
Route::get('/listeComPubli', [CommentaireController::class, 'commentaireOk']);

Route::get('/ajoutEmploye', [UserController::class, 'formUser']);
Route::post('/ajoutEmploye', [UserController::class, 'creerEmploye']);
Route::get('/gestionEmploye', [UserController::class, 'listeEmploye']);
Route::get('/modifEmploye/{id}', [UserController::class, 'modifEmploye']);
Route::post('/modifEmploye/{id}', [UserController::class, 'modifUser']);
Route::get('/effacerEmploye/{id}', [UserController::class, 'effacerEmploye']);

Route::get('/gestionService', [ServiceController::class, 'listeService']);
Route::get('/ajoutService', [ServiceController::class, 'formCreerService']);
Route::post('/ajoutService', [ServiceController::class, 'creerService']);
Route::get('/modifService/{id}', [ServiceController::class, 'formModifService']);
Route::post('/modifService/{id}', [ServiceController::class, 'modifService']);
Route::get('/effacerService/{id}', [ServiceController::class, 'deleteService']);

Route::get('/gestionAnimaux', [AnimalController::class, 'listeAnimaux']);
Route::get('/ajoutAnimaux', [AnimalController::class, 'formCreerAnimaux']);
Route::post('/ajoutAnimaux', [AnimalController::class, 'creerAnimaux']);
Route::get('/modifAnimaux/{id}', [AnimalController::class, 'formModifAnimaux']);
Route::post('/modifAnimaux/{id}', [AnimalController::class, 'modifAnimaux']);
Route::get('/effacerAnimaux/{id}', [AnimalController::class, 'deleteAnimaux']);












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
