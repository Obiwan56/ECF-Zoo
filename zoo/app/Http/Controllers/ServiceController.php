<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Http\Requests\ServiceRequest2;
use App\Models\service;
use Illuminate\Support\Facades\Storage;

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


    public function service()
    {
        $services = service::all();

        return view('pages.service', compact('services'));
    }


    public function formModifService($id)
    {
        $services = service::find($id);
        return view('gestion.modifService', compact('services'));
    }


    public function modifService($id, ServiceRequest2 $request)
    {
        $service = service::findOrFail($id);

        $service->nom = $request->input('nom');
        $service->description = $request->input('description');

        if ($request->hasFile('img1')) {
            // Supprimer l'ancienne image si elle existe
            if ($service->img1) {
                Storage::disk('public')->delete($service->img1);
            }
            // Stocker la nouvelle image
            $service->img1 = $request->file('img1')->store('service', 'public');
        }

        if ($request->hasFile('img2')) {
            if ($service->img2) {
                Storage::disk('public')->delete($service->img2);
            }
            $service->img2 = $request->file('img2')->store('service', 'public');
        }

        if ($request->hasFile('img3')) {
            if ($service->img3) {
                Storage::disk('public')->delete($service->img3);
            }
            $service->img3 = $request->file('img3')->store('service', 'public');
        }

        $service->save();

        return redirect('/gestionService')->with('status', 'Service modifié avec succès');
    }


    public function deleteService($id)
    {
        $service = service::find($id);

        if ($service->img1) {
            Storage::disk('public')->delete($service->img1);
        }

        if ($service->img2) {
            Storage::disk('public')->delete($service->img2);
        }

        if ($service->img3) {
            Storage::disk('public')->delete($service->img3);
        }

        $service->delete();

        return redirect('/gestionService')->with('status', 'Service supprimé avec succès');
    }
}
