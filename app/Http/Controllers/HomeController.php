<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        // Chargement de la page d'accueil avec la view home
        return view('home');
    }

    public function login() {
        // Page login
        return view('auth/login');
    }

    public function legalMentionView() {
        // Mention légal
        return view('legal/mention');
    }
}
