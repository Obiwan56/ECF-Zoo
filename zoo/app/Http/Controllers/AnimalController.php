<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AnimauxRequest;
use App\Http\Requests\AnimauxRequest2;
use App\Models\Animal;
use App\Models\Habitat; // Importer le modèle Habitat
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnimalController extends Controller
{
    public function creerAnimaux(AnimauxRequest $request)
    {
        // Gestion simplifiée des images
        $images = [];
        for ($i = 1; $i <= 5; $i++) {
            $images["img$i"] = $request->hasFile("img$i") ? $request->file("img$i")->store('Animaux', 'public') : '';
        }

        $data = $request->only(['race', 'prenom', 'etat', 'habitat_id']);
        $data = array_merge($data, $images);

        Animal::create($data);

        return redirect('/gestionAnimaux')->with('status', 'Animaux ajouté avec succès');
    }

    public function listeAnimaux()
    {
        $animals = Animal::with('habitat')->get(); // Inclure les habitats liés
        return view('gestion.gestionAnimaux', compact('animals'));
    }

    public function formCreerAnimaux()
    {
        $habitats = Habitat::all(); // Récupérer tous les habitats
        return view('gestion.ajoutAnimaux', compact('habitats'));
    }

    public function animal(Request $request)
    {
        $race = $request->query('race'); // Récupérer la race sélectionnée depuis la requête

        $animals = $race
            ? Animal::with('habitat')->where('race', $race)->get()
            : Animal::with('habitat')->get();

        if ($request->ajax()) {
            return view('partials.animals', compact('animals'))->render();
        }

        $races = Animal::select('race')->distinct()->pluck('race');

        return view('pages.animaux', compact('animals', 'races'));
    }

    public function formModifAnimaux($id)
    {
        $animals = Animal::find($id); // Trouver l'animal par ID
        $habitats = Habitat::all(); // Récupérer tous les habitats
        return view('gestion.modifAnimaux', compact('animals', 'habitats')); // Passer les données à la vue
    }

    public function modifAnimaux($id, AnimauxRequest2 $request)
    {
        $animal = Animal::findOrFail($id);

        $animal->race = $request->input('race');
        $animal->prenom = $request->input('prenom');
        $animal->etat = $request->input('etat');
        $animal->habitat_id = $request->input('habitat_id'); // Mise à jour de l'habitat

        // Gestion des images
        for ($i = 1; $i <= 5; $i++) {
            if ($request->hasFile("img$i")) {
                if ($animal->{"img$i"}) {
                    Storage::disk('public')->delete($animal->{"img$i"}); // Supprimer l'ancienne image
                }
                $animal->{"img$i"} = $request->file("img$i")->store('Animaux', 'public'); // Stocker la nouvelle image
            }
        }

        $animal->save();

        return redirect('/gestionAnimaux')->with('status', 'Animal modifié avec succès');
    }

    public function deleteAnimaux($id)
    {
        $animal = Animal::find($id);

        if (!$animal) {
            return redirect('/gestionAnimaux')->with('error', 'Animal non trouvé.');
        }

        // Suppression des images liées
        for ($i = 1; $i <= 5; $i++) {
            if ($animal->{"img$i"}) {
                Storage::disk('public')->delete($animal->{"img$i"});
            }
        }

        $animal->delete();

        return redirect('/gestionAnimaux')->with('status', 'Animal supprimé avec succès');
    }

    public function detailAnimal($id)
    {
        $animal = Animal::with('habitat')->findOrFail($id); // Inclure les informations de l'habitat
        return view('pages.detailAnimaux', compact('animal'));
    }


    public function habitat()
    {
        return $this->belongsTo(Habitat::class);
    }
}
