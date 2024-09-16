<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\HabitatRequest;
use App\Http\Requests\HabitatRequest2;
use App\Models\habitat;
use Illuminate\Support\Facades\Storage;

class HabitatController extends Controller
{
    public function creerhabitat(HabitatRequest $request)
    {
        $cheminimg1 = '';
        $cheminimg2 = '';
        $cheminimg3 = '';

        if ($request->hasFile('img1')) {
            $cheminimg1 = $request->file('img1')->store('habitat', 'public');
        }

        if ($request->hasFile('img2')) {
            $cheminimg2 = $request->file('img2')->store('habitat', 'public');
        }

        if ($request->hasFile('img3')) {
            $cheminimg3 = $request->file('img3')->store('habitat', 'public');
        }

        $nom = $request->input('nom');
        $description = $request->input('description');

        habitat::create([
            'nom' => $nom,
            'description' => $description,

            'img1' => $cheminimg1,
            'img2' => $cheminimg2,
            'img3' => $cheminimg3,
        ]);

        // dd($request->all());

        return redirect('/gestionHabitat')->with('status', 'habitat ajouté avec succès');
    }

    public function listehabitat()
    {
        $habitats = habitat::all();
        return view('gestion.gestionHabitat', compact('habitats'));
    }

    public function formCreerhabitat()
    {
        return view('gestion.ajoutHabitat');
    }


    public function habitat()
    {
        $habitats = habitat::all();

        return view('pages.habitat', compact('habitats'));
    }

    public function formModifhabitat($id)
    {
        $habitats = habitat::find($id);
        return view('gestion.modifHabitat', compact('habitats'));
    }


    public function modifhabitat($id, HabitatRequest2 $request)
    {
        $habitat = habitat::findOrFail($id);

        $habitat->nom = $request->input('nom');
        $habitat->description = $request->input('description');

        if ($request->hasFile('img1')) {
            // Supprimer l'ancienne image si elle existe
            if ($habitat->img1) {
                Storage::disk('public')->delete($habitat->img1);
            }
            // Stocker la nouvelle image
            $habitat->img1 = $request->file('img1')->store('habitat', 'public');
        }

        if ($request->hasFile('img2')) {
            if ($habitat->img2) {
                Storage::disk('public')->delete($habitat->img2);
            }
            $habitat->img2 = $request->file('img2')->store('habitat', 'public');
        }

        if ($request->hasFile('img3')) {
            if ($habitat->img3) {
                Storage::disk('public')->delete($habitat->img3);
            }
            $habitat->img3 = $request->file('img3')->store('habitat', 'public');
        }

        $habitat->save();

        return redirect('/gestionHabitat')->with('status', 'Habitat modifié avec succès');
    }


    public function deletehabitat($id)
    {
        $habitat = habitat::find($id);

        if (!$habitat) {
            return redirect('/gestionHabitat')->with('error', 'Habitat non trouvé.');
        }

        $images = ['img1', 'img2', 'img3'];

        foreach ($images as $img) {
            if ($habitat->$img) {
                Storage::disk('public')->delete($habitat->$img);
            }
        }

        $habitat->delete();

        return redirect('/gestionHabitat')->with('status', 'Habitat supprimé avec succès');
    }



    public function detailhabitat($id)
    {
        $habitat = habitat::findOrFail($id);
        return view('pages.detailHabitat', compact('habitat'));
    }
}
