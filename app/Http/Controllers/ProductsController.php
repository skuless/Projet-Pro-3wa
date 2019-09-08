<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // Chargement des différentes pages produits

    public function pergolaView()
    {
        return view('products/pergola');
    }

    public function terrasseView()
    {
        return view('products/terrasse');
    }
}
