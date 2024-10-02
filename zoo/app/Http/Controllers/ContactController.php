<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function formContact()
    {
        return view('pages.contact');
    }

    public function contact(ContactRequest $request)
    {
        try {
            // Envoie de l'email
            Mail::to('zarcadia56@gmail.com')->send(new ContactMail($request->validated()));

            return redirect()->route('accueil')->with('success', 'Votre message a bien été envoyé');
        } catch (\Exception $e) {
            // Log de l'erreur pour le développement
            Log::error('Erreur lors de l\'envoi de l\'e-mail: ' . $e->getMessage());

            return redirect()->route('accueil')->with('danger', 'Une erreur est survenue lors de l\'envoi de votre message');
        }
    }
}
