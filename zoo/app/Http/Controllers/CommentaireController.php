<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ComRequest;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CommentaireController extends Controller
{
    //affiche le formulaire de commentaire
    public function formCom()
    {
        return view('pages.formCommentaire');
    }

    //ajoute le commentaire
    public function ajoutCom(ComRequest $request)
    {
        $com = new Commentaire();
        $com->pseudo = $request->pseudo;
        $com->commentaire = $request->commentaire;


        $com->save();

        return redirect('/')->with('status', 'Merci pour votre commentaire');
    }

    //affighe la page gestion des commentaires
    public function gestionCom(Request $request)
    {
        $coms = Commentaire::where('validation', null)->get();

        return view('gestion.gestionCommentaire', compact('coms'));
    }

    //approuve les commentaires
    public function aprouvCom($id)
    {
        $com = Commentaire::find($id);
        $com->validation = 'ok';
        $com->save();

        return redirect('/gestionCommentaire')->with('status', 'Commentaire approuvé avec succès.');
    }

    //affiche les commentaires approuvés
    public function commentaireOk(Request $request)
    {
        $coms = Commentaire::where('validation', 'ok')->get();

        return view('gestion.listeComPubli', compact('coms'));
    }

    //affiche la liste des commentaires au clients
    public function listeCommentaireOk(Request $request)
    {
        $coms = Commentaire::where('validation', 'ok')->paginate(10);

        return view('pages.allCommentaire', compact('coms'));
    }


    //affiche les 10 derniers commentaires
    public function dixDerCom(Request $request)
    {
        $coms = Commentaire::where('validation', 'ok')
            ->orderBy('created_at', 'desc') // Trier par date de création décroissante
            ->take(10) // Prendre les 10 derniers commentaires
            ->get();

        return view('pages.accueil', compact('coms'));
    }

    //efface les commentaires
    public function deleteCom($id)
    {
        $com = Commentaire::find($id);
        $com->delete();

        return redirect('/gestionCommentaire')->with('status', 'Commentaire effacé avec succès.');
    }

    //efface les commentaires publiés
    public function deleteCom2($id)
    {
        $com = Commentaire::find($id);
        $com->delete();

        return redirect('/listeComPubli')->with('status', 'Commentaire effacé avec succès.');
    }
}
