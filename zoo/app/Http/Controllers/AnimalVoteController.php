<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnimalVoteRequest;
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

    public function VoteAnimal()
    {
        $votes = AnimalVote::all();
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

        if ($vote && $vote->photo) {
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


}
