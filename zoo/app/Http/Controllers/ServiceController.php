<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\service;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function creerService(ServiceRequest $request)
    {
        $cheminimg1 = '';
        $cheminimg2 = '';
        $cheminimg3 = '';

        if ($request->hasFile('img1')) {
            $cheminimg1 = $request->file('img1')->store('Service', 'public');
        }

        if ($request->hasFile('img2')) {
            $cheminimg2 = $request->file('img2')->store('Service', 'public');
        }

        if ($request->hasFile('img3')) {
            $cheminimg3 = $request->file('img3')->store('Service', 'public');
        }

        $nom = $request->input('nom');
        $description = $request->input('description');

        service::create([
            'nom' => $nom,
            'description' => $description,

            'img1' => $cheminimg1,
            'img2' => $cheminimg2,
            'img3' => $cheminimg3,
        ]);

        return redirect('/gestionService')->with('status', 'Service ajouté avec succès');
    }


    public function listeService()
    {
        $services = service::all();
        return view('gestion.gestionService', compact('services'));
    }

    public function formCreerService()
    {
        return view('gestion.ajoutService');
    }


    public function Service()
    {
        $services = service::all();

        return view('pages.service', compact('services'));
    }


    public function formModifService($id)
    {
        $services = service::find($id);
        return view('gestion.modifService', compact('services'));
    }

    public function modifService($id, ServiceRequest $request)
    {
        $service = service::findOrFail($id);

        $service->nom = $request->input('nom');
        $service->description = $request->input('description');

        Storage::disk('public')->delete([$service->img1]);

        if ($request->hasFile('img1')) {
            $service->img1 = $request->file('img1')->store('service', 'public');
        }

        Storage::disk('public')->delete([$service->img2]);

        if ($request->hasFile('img1')) {
            $service->img2 = $request->file('img2')->store('service', 'public');
        }

        Storage::disk('public')->delete([$service->img3]);

        if ($request->hasFile('img3')) {
            $service->img3 = $request->file('img3')->store('service', 'public');
        }

        $service->save();

        return redirect('/gestionService')->with('status', 'Service modifié avec succès');
    }

    public function deleteService($id)
    {
        $service = service::find($id);

        $imgChemin1 = [
            public_path('public/' . $service->img1)
        ];

        foreach($imgChemin1 as $chemin){
            File::delete($chemin);
        }

        $imgChemin2 = [
            public_path('public/' . $service->img2)
        ];

        foreach($imgChemin2 as $chemin2){
            File::delete($chemin2);
        }

        $imgChemin3 = [
            public_path('public/' . $service->img3)
        ];

        foreach($imgChemin3 as $chemin3){
            File::delete($chemin3);
        }
        $service->delete();

        return redirect('/gestionService')->with('status', 'Service supprimé avec succès');
    }

}



// verification controller service modif et effacer PHOTO
