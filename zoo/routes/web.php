<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\HabitatController;
use App\Http\Controllers\NourritureController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RapportVetoController;
use App\Http\Controllers\RepasAnimalController;
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

Route::get('/habitat/{id}', [HabitatController::class, 'detailHabitat'])->name('detailHabitat');

Route::get('/animal/{id}', [AnimalController::class, 'show'])->name('animal');



Route::get('/habitat', [HabitatController::class, 'habitat']);
Route::get('/detailHabitat/{id}', [HabitatController::class, 'detailHabitat']);


Route::get('/deconnexion', [UserController::class, 'deconnexion']);



Route::get('/gestionCommentaire', [CommentaireController::class, 'gestionCom']);
Route::get('/deleteCom/{id}', [CommentaireController::class, 'deleteCom']);
Route::get('/deleteCom2/{id}', [CommentaireController::class, 'deleteCom2']);
Route::get('/aprouvCom/{id}', [CommentaireController::class, 'aprouvCom']);
Route::get('/listeComPubli', [CommentaireController::class, 'commentaireOk']);


Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/ajoutEmploye', [UserController::class, 'formUser']);
    Route::post('/ajoutEmploye', [UserController::class, 'creerEmploye']);
    Route::get('/gestionEmploye', [UserController::class, 'listeEmploye']);
    Route::get('/modifEmploye/{id}', [UserController::class, 'modifEmploye']);
    Route::post('/modifEmploye/{id}', [UserController::class, 'modifUser']);
    Route::get('/effacerEmploye/{id}', [UserController::class, 'effacerEmploye']);
});

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

Route::get('/gestionHabitat', [HabitatController::class, 'listeHabitat']);
Route::get('/ajoutHabitat', [HabitatController::class, 'formCreerHabitat']);
Route::post('/ajoutHabitat', [HabitatController::class, 'creerHabitat']);
Route::get('/modifHabitat/{id}', [HabitatController::class, 'formModifHabitat']);
Route::post('/modifHabitat/{id}', [HabitatController::class, 'modifHabitat']);
Route::get('/effacerHabitat/{id}', [HabitatController::class, 'deleteHabitat']);

Route::get('/gestionNourriture', [NourritureController::class, 'listeNourriture']);
Route::get('/ajoutNourriture', [NourritureController::class, 'formCreerNouriture']);
Route::post('/ajoutNourriture', [NourritureController::class, 'creerNourriture']);
Route::get('/modifNourriture/{id}', [NourritureController::class, 'formModifNourriture']);
Route::post('/modifNourriture/{id}', [NourritureController::class, 'modifNourriture']);
Route::get('/effacerNourriture/{id}', [NourritureController::class, 'deleteNourriture']);

Route::get('/gestionRepasAnimal', [RepasAnimalController::class, 'listeDesRepas']);
Route::get('/ajoutRepasAnimal', [RepasAnimalController::class, 'formAjoutRepas']);
Route::post('/ajoutRepasAnimal', [RepasAnimalController::class, 'ajouterRepas']);
Route::get('/modifRepasAnimal/{id}', [RepasAnimalController::class, 'formModifRepas']);
Route::post('/modifRepasAnimal/{id}', [RepasAnimalController::class, 'modifRepas']);
Route::get('/deleteRepas/{id}', [RepasAnimalController::class, 'deleteRepas']);


Route::middleware(['auth', 'role:veto'])->group(function () {

    Route::get('/gestionRapportVeto', [RapportVetoController::class, 'listeRapport'])->name('gestion.gestionRapportVeto');
    Route::get('/ajoutRapportVeto', [RapportVetoController::class, 'formAjoutRapport'])->name('gestion.ajoutRapportVeto');
    Route::post('/ajoutRapportVeto', [RapportVetoController::class, 'ajoutRapport'])->name('gestion.ajoutRapportVeto');
    Route::get('/modifRapportVeto/{id}', [RapportVetoController::class, 'formModifRapport'])->name('gestion.modifRapportVeto');
    Route::post('/modifRapportVeto/{id}', [RapportVetoController::class, 'modifRapport'])->name('gestion.modifRapportVeto');
    Route::get('/deleteRapport/{id}', [RapportVetoController::class, 'deleteRapport'])->name('gestion.deleteRapport');
});





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
