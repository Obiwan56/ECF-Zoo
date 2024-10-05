<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\HoraireRequest;
use App\Models\Horaire;

class HoraireController extends Controller
{

    public function listeHoraire()
    {
        $horaires = Horaire::all();
        return view('gestion.gestionHoraire', compact('horaires'));
    }

    public function formModifHoraire($id)
    {
        $horaire = Horaire::findOrFail($id);

        return view('gestion.modifHoraire', compact('horaire'));
    }

    public function modifHoraire($id, HoraireRequest $request)
    {
        $horaire = Horaire::findorFail($id);

        $horaire->horaire1 = $request->input('horaire1');
        $horaire->horaire2 = $request->input('horaire2');

        $horaire->save();

        return redirect('/gestionHoraire')->with('success', 'Horaire modifée');
    }

    public function ajoutHoraire(HoraireRequest $request)
    {
        $data = $request->only(['horaire1', 'horaire2']);
        Horaire::create($data);

        return redirect()->route('gestion.gestionHoraire')->with('status', 'Horaire ajouté avec succès');
    }

    public function formAjoutHoraire()
    {
        $horaires = Horaire::all(); // Récupérer tous les animaux pour le formulaire
        return view('gestion.ajoutHoraire', compact('horaires'));
    }

    public function deleteHoraire($id)
    {
        $horaire = Horaire::findOrFail($id);
        $horaire->delete();

        return redirect()->route('gestion.gestionHoraire')->with('status', 'Horaire supprimé avec succès');
    }
}



//Finir la gestion des horaires
