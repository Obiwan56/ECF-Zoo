<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\User2Request;
use App\Http\Requests\UserRequest3;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function creerEmploye(UserRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = bcrypt($request->password);

        $user->save();

        return redirect('/gestionEmploye')->with('status', 'Employé(e) ajouté avec succès');
    }

    public function listeEmploye()
    {
        $roles = ['employe', 'veto']; // rôles affichés
        $users = User::whereIn('role', $roles)->get(); // Filtrer les utilisateurs par rôle
        return view('gestion.gestionEmploye', compact('users'));
    }


    public function formUser()
    {
        return view('gestion.ajoutEmploye');
    }

    public function modifEmploye($id)
    {
        $users = User::find($id);

        return view('gestion.modifEmploye', compact('users'));
    }

    public function modifUser(User2Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->role = $request->role;

        $user->update();

        return redirect('/gestionEmploye')->with('status', 'Employé(e) modifié avec succès');
    }

    public function effacerEmploye($id)
    {

        $user = User::find($id);
        $user->delete();

        return redirect('/gestionEmploye')->with('status', 'Employé(e) supprimé avec succès');
    }

    public function deconnexion()
    {
        auth()->logout();

        return redirect('/')->with('status', 'Vous êtes bien déconnecté');
    }


    public function formModifMdp($id)
    {
        $user = User::findOrFail($id);
        return view('gestion.modifMdp', compact('user'));
    }

    public function modifMdp(UserRequest3 $request, $id)
    {
        $user = User::findOrFail($id);

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/')->with('status', 'Mot de passe modifié avec succès');
    }
}
