<?php

namespace App\Http\Controllers\Form\TableManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller {

    // Function qui supprime dans la bdd la ligne selon l'id récupèré
    public function destroy($id) {
        return Contact::destroy($id);
    }

}
