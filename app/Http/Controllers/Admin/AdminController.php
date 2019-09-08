<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Devis;
use App\Savs;
use App\Contact;

class AdminController extends Controller {

    public function index() {
        // Vérification d'un compte connecté ou non
        if(auth()->check() === false)
        {
            // La personne n'est pas connecté alors retour sur la page d'accueil
            return view('home');
        }
        else {
            // Personne connecté donc récupèration de tout le contenu en bdd
            $devis = Devis::all();
            $savs = Savs::all();
            $contacts = Contact::all();

            // On return toutes les informations recueillis
            return view('admin/management', [
                'devis' => $devis,
                'savs' => $savs,
                'contacts' => $contacts
            ]);
        }
    }


}
