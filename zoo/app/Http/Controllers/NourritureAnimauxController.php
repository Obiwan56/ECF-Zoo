<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\NourritureRequest;
use App\Models\Animal;
use App\Models\NourritureAnimaux;

class NourritureAnimauxController extends Controller
{
    public function ajouterNourriture(NourritureRequest $request)
    {
        $data = $request->only(['date', 'nourriture', 'quantite', 'animal_id']);

        NourritureAnimaux::create($data);

        return redirect('/gestionNourriture')->with('status', 'Nourriture ajouté avec succès');
    }

    public function listeNourriture()
    {
        $nourritures = NourritureAnimaux::with('animal')->get();
        return view('gestion.gestionNourriture', compact('nourritures'));
    }

    public function formCreerNourriture()
    {
        $nourritures = NourritureAnimaux::all();
        return view('gestion.ajoutNourriture', compact('nourritures'));
    }

    public function nourriture()
    {
        $nourritures = NourritureAnimaux::with('animal')->get();
        return view('pages.animaux', compact('nourritures'));
    }

    public function formModifNourriture($id)
    {
        $nourritures = NourritureAnimaux::find($id);
        $animals = Animal::all();
        return view('gestion.modifNourriture', compact('nourritures', 'animals'));
    }

    public function modifNourriture($id, NourritureRequest $request)
    {
        $nourriture = NourritureAnimaux::findOrFail($id);

        $nourriture->date = $request->input('date');
        $nourriture->nourriture = $request->input('nourriture');
        $nourriture->quantite = $request->input('quantite');
        $nourriture->animal_id = $request->input('animal_id');

        $nourriture->save();

        return redirect('/gestionNourriture')->with('status', 'Nourriture modifié avec succès');
    }

    public function effacerNourriture($id)
    {
        $nourriture = NourritureAnimaux::find($id);

        if (!$nourriture) {
            return redirect('/gestionNouriture')->with('error', 'Nourriture non trouvé.');
        }

        $nourriture->delete();

        return redirect('/gestionNourriture')->with('status', 'Nourriture supprimé avec succès');
    }



    public function show($id)
    {
        $nourriture = NourritureAnimaux::with('animal')->findOrFail($id);
        return view('pages.detailNourriture', compact('nourriture'));
    }

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
}


//crud créé mais pas testé, création des vues à faire et des routes
