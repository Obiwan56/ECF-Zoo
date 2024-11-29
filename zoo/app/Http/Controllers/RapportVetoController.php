<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RapportRequest;
use App\Models\Animal;
use App\Models\RapportVeto;

class RapportVetoController extends Controller
{
    public function ajoutRapport(RapportRequest $request)
    {
        $data = $request->only(['date', 'detail', 'animal_id']);
        RapportVeto::create($data);

        return redirect()->route('gestion.gestionRapportVeto')->with('status', 'Rapport ajouté avec succès');
    }

    public function listeRapport()
    {
        $rapports = RapportVeto::with('animal')->orderBy('date', 'desc')->get();
        return view('gestion.gestionRapportVeto', compact('rapports'));
    }

    public function formAjoutRapport()
    {
        $animals = Animal::all(); // Récupérer tous les animaux pour le formulaire
        return view('gestion.ajoutRapportVeto', compact('animals'));
    }

    public function formModifRapport($id)
    {
        $rapport = RapportVeto::findOrFail($id);
        $animals = Animal::all();
        return view('gestion.modifRapportVeto', compact('rapport', 'animals'));
    }

    public function modifRapport($id, RapportRequest $request)
    {
        $rapport = RapportVeto::findOrFail($id);

        $rapport->date = $request->input('date');
        $rapport->detail = $request->input('detail');
        $rapport->animal_id = $request->input('animal_id');

        $rapport->save();

        return redirect()->route('gestion.gestionRapportVeto')->with('status', 'Rapport modifié avec succès');
    }

    public function deleteRapport($id)
    {
        $rapport = RapportVeto::findOrFail($id);
        $rapport->delete();

        return redirect()->route('gestion.gestionRapportVeto')->with('status', 'Rapport supprimé avec succès');
    }


    public function detailRapport($id)
{
    $rapports = RapportVeto::with('animal')->findOrFail($id);
    $animal = $rapports->animal; // Récupération de l'animal associé

    return view('gestion.detailRapportVeto', compact('rapports', 'animal'));
}

}
