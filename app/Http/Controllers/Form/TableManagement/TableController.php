<?php

namespace App\Http\Controllers\Form\TableManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Devis;
use App\Savs;
use App\Contact;

class TableController extends Controller {

    public function index() {
        // function de base lors du chargement de la page
    }

    public function showDevisTable() {

        // Récupèration de toutes les infos de la table devis dans la bdd
        $devis = Devis::all();

        // Return des infos récupèré
        return view('admin\table\devisTable', [
            'devis' => $devis
        ]);

    }

    public function showContactTable() {

        // Récupèration de toutes les infos de la table contact dans la bdd
        $contacts = Contact::all();

        // Return des infos récupèré
        return view('admin\table\contactTable', [
            'contacts' => $contacts
        ]);

    }

    public function showSavTable() {

        // Récupèration de toutes les infos de la table sav dans la bdd
        $savs = Savs::all();

        // Return des infos récupèré
        return view('admin\table\savTable', [
            'savs' => $savs,
        ]);

    }

}
