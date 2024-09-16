<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AnimauxRequest;
use App\Http\Requests\AnimauxRequest2;
use App\Models\Animal;
use Illuminate\Support\Facades\Storage;

class AnimalController extends Controller
{
    public function creerAnimaux(AnimauxRequest $request)
    {
        $cheminimg1 = '';
        $cheminimg2 = '';
        $cheminimg3 = '';
        $cheminimg4 = '';
        $cheminimg5 = '';

        if ($request->hasFile('img1')) {
            $cheminimg1 = $request->file('img1')->store('Animaux', 'public');
        }

        if ($request->hasFile('img2')) {
            $cheminimg2 = $request->file('img2')->store('Animaux', 'public');
        }

        if ($request->hasFile('img3')) {
            $cheminimg3 = $request->file('img3')->store('Animaux', 'public');
        }

        if ($request->hasFile('img4')) {
            $cheminimg4 = $request->file('img4')->store('Animaux', 'public');
        }

        if ($request->hasFile('img5')) {
            $cheminimg5 = $request->file('img5')->store('Animaux', 'public');
        }

        $race = $request->input('race');
        $prenom = $request->input('prenom');
        $etat = $request->input('etat');

        Animal::create([
            'race' => $race,
            'prenom' => $prenom,
            'etat' => $etat,

            'img1' => $cheminimg1,
            'img2' => $cheminimg2,
            'img3' => $cheminimg3,
            'img4' => $cheminimg4,
            'img5' => $cheminimg5,
        ]);

        // dd($request->all());

        return redirect('/gestionAnimaux')->with('status', 'Animaux ajouté avec succès');
    }

    public function listeAnimaux()
    {
        $animals = Animal::all();
        return view('gestion.gestionAnimaux', compact('animals'));
    }

    public function formCreerAnimaux()
    {
        return view('gestion.ajoutAnimaux');
    }


    public function animal()
    {
        $animals = Animal::all();

        return view('pages.animaux', compact('animals'));
    }

    public function formModifAnimaux($id)
    {
        $animals = Animal::find($id);
        return view('gestion.modifAnimaux', compact('animals'));
    }


    public function modifAnimaux($id, AnimauxRequest2 $request)
    {
        $animal = Animal::findOrFail($id);

        $animal->race = $request->input('race');
        $animal->prenom = $request->input('prenom');
        $animal->etat = $request->input('etat');

        if ($request->hasFile('img1')) {
            // Supprimer l'ancienne image si elle existe
            if ($animal->img1) {
                Storage::disk('public')->delete($animal->img1);
            }
            // Stocker la nouvelle image
            $animal->img1 = $request->file('img1')->store('Animaux', 'public');
        }

        if ($request->hasFile('img2')) {
            if ($animal->img2) {
                Storage::disk('public')->delete($animal->img2);
            }
            $animal->img2 = $request->file('img2')->store('Animaux', 'public');
        }

        if ($request->hasFile('img3')) {
            if ($animal->img3) {
                Storage::disk('public')->delete($animal->img3);
            }
            $animal->img3 = $request->file('img3')->store('Animaux', 'public');
        }

        if ($request->hasFile('img4')) {
            if ($animal->img4) {
                Storage::disk('public')->delete($animal->img4);
            }
            $animal->img4 = $request->file('img4')->store('Animaux', 'public');
        }


        if ($request->hasFile('img5')) {
            if ($animal->img5) {
                Storage::disk('public')->delete($animal->img5);
            }
            $animal->img5 = $request->file('img5')->store('Animaux', 'public');
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

        $images = ['img1', 'img2', 'img3', 'img4', 'img5'];

        foreach ($images as $img) {
            if ($animal->$img) {
                Storage::disk('public')->delete($animal->$img);
            }
        }

        $animal->delete();

        return redirect('/gestionAnimaux')->with('status', 'Animal supprimé avec succès');
    }



    public function detailAnimal($id)
    {
        $animal = Animal::findOrFail($id);
        return view('pages.detailAnimaux', compact('animal'));
    }
}



