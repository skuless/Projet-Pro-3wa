<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Devis;
use App\Savs;

class FormController extends Controller
{

    public function index()
    {
        return view('form/form');
    }

    public function formContact()
    {
        // Return contact view
        return view('form/contact');
    }

    public function formDevis()
    {
        // Return devis view
        return view('form/devis');
    }

    public function formSav()
    {
        // Return savs view
        return view('form/sav');
    }

    public function validateForm(Request $request)
    {
        // On vérifie que la checkbox est bien coché

        if ($request->get('condition') == 'on') {

            // Selon le type de formulaire le switch transmet dans les différentes tables de la bdd les infos que le client rentre dans le formulaire
            switch ($request->get('typeOfForm')) {
                case 'contact':

                    // Vérification des différentes infos dans chaque partie du formulaire
                    $this->validate($request, [
                        'lastname' => 'required|max:255',
                        'city' => 'required|max:255',
                        'phone' => 'required|digits:10',
                        'sujet' => 'required',
                        'condition' => 'required|accepted'
                    ]);
                    // On instancie la classe contact pour enregistré les informations
                    $contact = new Contact();

                    $contact->lastname = $request->get('lastname');
                    $contact->city = $request->get('city');
                    $contact->phone = $request->get('phone');
                    $contact->sujet = $request->get('sujet');

                    // Enregistrement des informations envoyé dans contact
                    $contact->save();

                    // Redirection sur la page de confirmation lorsque tout sera validé
                    return redirect()->route('confirmation');

                    break;

                case 'devis':

                    // Vérification des différentes infos dans chaque partie du formulaire
                    $this->validate($request, [
                        'lastname' => 'required|max:255',
                        'firstname' => 'required|max:255',
                        'address' => 'required|max:255',
                        'city' => 'required|max:255',
                        'postal' => 'required|digits:5',
                        'phone' => 'required|digits:10',
                        'email' => 'required|email',
                        'sujet' => 'required',
                        'condition' => 'required|accepted'
                    ]);

                    // On instancie la classe devis pour enregistré les informations
                    $devis = new Devis();

                    $devis->lastname = $request->get('lastname');
                    $devis->firstname = $request->get('firstname');
                    $devis->address = $request->get('address');
                    $devis->city = $request->get('city');
                    $devis->postal = $request->get('postal');
                    $devis->phone = $request->get('phone');
                    $devis->email = $request->get('email');
                    $devis->sujet = $request->get('sujet');

                    // Enregistrement des informations envoyé dans devis
                    $devis->save();

                    // Redirection sur la page de confirmation lorsque tout sera validé
                    return redirect()->route('confirmation');

                    break;

                case 'sav':

                    // Vérification des différentes infos dans chaque partie du formulaire
                    $this->validate($request, [
                        'lastname' => 'required|max:255',
                        'firstname' => 'required|max:255',
                        'address' => 'required|max:255',
                        'city' => 'required|max:255',
                        'sujet' => 'required',
                        'condition' => 'required|accepted'
                    ]);

                    // On instancie la classe savs pour enregistré les informations
                    $savs = new Savs();

                    $savs->lastname = $request->get('lastname');
                    $savs->firstname = $request->get('firstname');
                    $savs->address = $request->get('address');
                    $savs->city = $request->get('city');
                    $savs->sujet = $request->get('sujet');

                    // Enregistrement des informations envoyé dans savs
                    $savs->save();

                    // Redirection sur la page de confirmation lorsque tout sera validé
                    return redirect()->route('confirmation');

                    break;
            }
        }
    }

    public function confirmation(){
        // Formulaire valide donc chargement de la page de confirmation
        return view('form/confirm');
    }
}
