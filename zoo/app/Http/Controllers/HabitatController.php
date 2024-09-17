<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\HabitatRequest;
use App\Http\Requests\HabitatRequest2;
use App\Models\Habitat; // Changer la première lettre en majuscule pour respecter la convention
use Illuminate\Support\Facades\Storage;

class HabitatController extends Controller
{
    public function creerHabitat(HabitatRequest $request)
    {
        // Gestion simplifiée des images
        $images = [];
        for ($i = 1; $i <= 3; $i++) {
            $images["img$i"] = $request->hasFile("img$i") ? $request->file("img$i")->store('habitat', 'public') : '';
        }

        $data = $request->only(['nom', 'description']);
        $data = array_merge($data, $images);

        Habitat::create($data);

        return redirect('/gestionHabitat')->with('status', 'Habitat ajouté avec succès');
    }

    public function listeHabitat()
    {
        $habitats = Habitat::all();
        return view('gestion.gestionHabitat', compact('habitats'));
    }

    public function formCreerHabitat()
    {
        return view('gestion.ajoutHabitat');
    }

    public function habitat()
    {
        $habitats = Habitat::all();
        return view('pages.habitat', compact('habitats'));
    }

    public function formModifHabitat($id)
    {
        $habitat = Habitat::find($id);
        return view('gestion.modifHabitat', compact('habitat'));
    }

    public function modifHabitat($id, HabitatRequest2 $request)
    {
        $habitat = Habitat::findOrFail($id);

        $habitat->nom = $request->input('nom');
        $habitat->description = $request->input('description');

        // Gestion simplifiée des images
        for ($i = 1; $i <= 3; $i++) {
            if ($request->hasFile("img$i")) {
                if ($habitat->{"img$i"}) {
                    Storage::disk('public')->delete($habitat->{"img$i"});
                }
                $habitat->{"img$i"} = $request->file("img$i")->store('habitat', 'public');
            }
        }

        $habitat->save();

        return redirect('/gestionHabitat')->with('status', 'Habitat modifié avec succès');
    }

    public function deleteHabitat($id)
    {
        $habitat = Habitat::find($id);

        if (!$habitat) {
            return redirect('/gestionHabitat')->with('error', 'Habitat non trouvé.');
        }

        // Suppression des images liées
        for ($i = 1; $i <= 3; $i++) {
            if ($habitat->{"img$i"}) {
                Storage::disk('public')->delete($habitat->{"img$i"});
            }
        }

        $habitat->delete();

        return redirect('/gestionHabitat')->with('status', 'Habitat supprimé avec succès');
    }

    public function detailHabitat($id)
    {
        $habitat = Habitat::findOrFail($id);
        return view('pages.detailHabitat', compact('habitat'));
    }
}
