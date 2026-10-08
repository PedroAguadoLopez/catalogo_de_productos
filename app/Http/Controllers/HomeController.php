<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        // Obtenemos todos los productos de la base de datos
        $products = Product::orderBy('category')->orderBy('name')->get();

        // Pasamos la lista a la vista "pages/home"
        return view('pages.home', compact('products'));
    }
}