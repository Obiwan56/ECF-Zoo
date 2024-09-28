<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\NourritureRequest;
use App\Models\Animal;
use App\Models\Nourriture;

class NourritureController extends Controller
{
    // Liste toutes les nourritures avec l'animal associé
    public function listeNourriture()
    {
        $nourritures = Nourriture::with('animal')->get();
        return view('gestion.gestionNourriture', compact('nourritures'));
    }

    // Affiche le formulaire pour créer une nouvelle nourriture
    public function formCreerNouriture()
    {
        $animals = Animal::all(); // Récupère tous les animaux pour le formulaire
        return view('gestion.ajoutNourriture', compact('animals'));
    }

    // Crée une nouvelle nourriture avec les données du formulaire
    public function creerNourriture(NourritureRequest $request)
    {
        $data = $request->only(['aliment', 'animal_id']); // Récupère les données validées

        Nourriture::create($data); // Crée une nouvelle nourriture

        return redirect('/gestionNourriture')->with('status', 'Nourriture ajoutée avec succès');
    }

    // Affiche le formulaire pour modifier une nourriture existante
    public function formModifNourriture($id)
    {
        $nourriture = Nourriture::findOrFail($id); // Récupère la nourriture à modifier
        $animals = Animal::all(); // Récupère tous les animaux pour le formulaire

        return view('gestion.modifNourriture', compact('nourriture', 'animals'));
    }

    // Modifie une nourriture existante avec les données du formulaire
    public function modifNourriture($id, NourritureRequest $request)
    {
        $nourriture = Nourriture::findOrFail($id); // Récupère la nourriture à modifier

        // Met à jour les champs aliment et animal_id
        $nourriture->aliment = $request->input('aliment');
        $nourriture->animal_id = $request->input('animal_id');

        $nourriture->save(); // Sauvegarde les modifications

        return redirect('/gestionNourriture')->with('status', 'Nourriture modifiée avec succès');
    }

    // Supprime une nourriture existante
    public function deleteNourriture($id)
    {
        $nourriture = Nourriture::findOrFail($id); // Récupère la nourriture à supprimer

        $nourriture->delete(); // Supprime la nourriture

        return redirect('/gestionNourriture')->with('status', 'Nourriture supprimée avec succès');
    }
}
