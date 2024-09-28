<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RepasRequest;
use App\Models\Animal;
use App\Models\Nourriture;
use App\Models\RepasAnimal;
use Carbon\Carbon;

class RepasAnimalController extends Controller
{
    // Liste des repas
    public function listeDesRepas()
    {
        $repas = RepasAnimal::with('animal', 'nourriture')->get();
        return view('gestion.gestionRepasAnimal', compact('repas'));
    }

    // Formulaire pour ajouter un repas
    public function formAjoutRepas()
    {
        $nourritures = Nourriture::all(); // Récupère toutes les nourritures pour le formulaire
        $animals = Animal::all(); // Récupère tous les animaux pour le formulaire

        return view('gestion.ajoutRepasAnimal', compact('nourritures', 'animals'));
    }

    // Formulaire pour modifier un repas
    public function formModifRepas($id)
    {
        $repas = RepasAnimal::findOrFail($id); // Récupère le repas à modifier
        $animals = Animal::all(); // Récupère tous les animaux pour le formulaire
        $nourritures = Nourriture::all(); // Récupère toutes les nourritures pour le formulaire

        return view('gestion.modifRepasAnimal', compact('repas', 'nourritures', 'animals'));
    }

    // Ajouter un nouveau repas
    public function ajouterRepas(RepasRequest $request)
    {
        $data = [
            'quantite' => $request->input('quantite'),
            'date' => Carbon::parse($request->input('date'))->addHours(2)->format('Y-m-d H:i:s'), // Ajout de 2 heures
            'observation' => $request->input('observation'),
            'animal_id' => $request->input('animal_id'),
            'nourriture_id' => $request->input('nourriture_id'),
        ];

        RepasAnimal::create($data); // Crée un nouveau repas

        return redirect('/gestionRepasAnimal')->with('status', 'Repas ajouté avec succès');
    }

    // Modifier un repas existant
    public function modifRepas($id, RepasRequest $request)
    {
        $repas = RepasAnimal::findOrFail($id);
        $repas->quantite = $request->input('quantite');
        $repas->observation = $request->input('observation');
        $repas->date = Carbon::parse($request->input('date'))->addHours(2)->format('Y-m-d H:i:s'); // Ajout de 2 heures
        $repas->animal_id = $request->input('animal_id');
        $repas->nourriture_id = $request->input('nourriture_id');

        $repas->save(); // Enregistre les modifications

        return redirect('/gestionRepasAnimal')->with('status', 'Repas de l\'animal modifié avec succès');
    }

    // Supprimer un repas
    public function deleteRepas($id)
    {
        $repas = RepasAnimal::findOrFail($id);
        $repas->delete(); // Supprime le repas

        return redirect('/gestionRepasAnimal')->with('status', 'Repas de l\'animal supprimé avec succès');
    }
}
