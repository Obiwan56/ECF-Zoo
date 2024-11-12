<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnimalVoteRequest;
use App\Http\Requests\AnimalVoteRequest2;
use App\Models\AnimalVote;
use Illuminate\Support\Facades\Storage;

class AnimalVoteController extends Controller
{
    // Liste tous les votes
    public function listeVoteAnimal()
    {
        $votes = AnimalVote::all();
        return view('voteAnimal.gestionVoteAnimal', compact('votes'));
    }

    //page pour voter
    public function VoteAnimal()
    {
        $votes = AnimalVote::paginate(10);
        return view('voteAnimal.VoteAnimal', compact('votes'));
    }

    // Affiche le formulaire pour créer un vote
    public function formCreerAnimalVote()
    {
        return view('voteAnimal.ajoutAnimalVote');
    }

    // Enregistre un nouvel enregistrement
    public function creerAnimalVote(AnimalVoteRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'photo' => 'required|image',
        ]);

        // Gestion de la photo
        $path = $request->file('photo')->store('photos', 'public');

        // Création d'un nouvel enregistrement
        AnimalVote::create([
            'name' => $request->name,
            'race' => $request->race,
            'photo' => $path,
            'votes' => 0, // Incrémentation initialisée à 0
        ]);

        return redirect('gestionVoteAnimal')->with('status', 'Animal ajouté avec succès');
    }

    // Supprime un enregistrement
    public function deleteVote($id)
    {
        $vote = AnimalVote::find($id);

        if (!$vote) {
            return redirect('/gestionVoteAnimal')->with('status', 'Animal non trouvé');
        }

        if ($vote->photo) {
            Storage::disk('public')->delete($vote->photo);
        }

        $vote->delete();

        return redirect('/gestionVoteAnimal')->with('status', 'Animal supprimé avec succès');
    }


    // Incrémentation des votes
    public function incrementVote(AnimalVote $animalVote)
{
    $animalVote->increment('votes');
    return redirect('/')->with('status', 'Merci pour votre participation');
}

    //modif vote animal
    public function formModifAnimalVote($id)
    {
        $votes = AnimalVote::find($id);
        return view('voteAnimal.modifAnimalVote', compact('votes'));
    }


    public function modifVote($id, AnimalVoteRequest2 $request)
    {
        $vote = AnimalVote::findOrFail($id);

        $vote->name = $request->input('name');
        $vote->race = $request->input('race');
        // $vote->votes = $request->input('votes');

        if ($request->hasFile('photo')) {
            // Supprimer l'ancienne image si elle existe
            if ($vote->photo) {
                Storage::disk('public')->delete($vote->photo);
            }
            // Stocker la nouvelle image
            $vote->photo = $request->file('photo')->store('photos', 'public');
        }
        $vote->save();

        return redirect('/gestionVoteAnimal')->with('status', 'Modification OK');
    }
}
