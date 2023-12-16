<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $searchTerm = $request->input('query');

        // Effectuer la requête à l'API
        $response = Http::get('https://dummyjson.com/products/search', [
            'q' => $searchTerm
        ]);

        // Vérifier si la requête est réussie
        if ($response->successful()) {
            $results = $response->json()['products'];
        } else {
            $results = [];
        }
        return view('pages.search', compact('searchTerm', 'results'));
    }
}
