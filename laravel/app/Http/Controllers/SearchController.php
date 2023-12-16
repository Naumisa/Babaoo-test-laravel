<?php

namespace App\Http\Controllers;

use App\Models\Search;
use App\Models\SearchCache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $searchTerm = $request->input('query');

        $search = new Search();
        $search->query = $searchTerm;
        $search->user_id = auth()->id();
        $search->save();

        $cachedSearch = SearchCache::where('query', $searchTerm)->first();

        if ($cachedSearch)
        {
            $results = json_decode($cachedSearch->results, true);
        }
        else
        {
            // Effectuer la requête à l'API
            $response = Http::get('https://dummyjson.com/products/search', [
                'q' => $searchTerm
            ]);

            $results = [];

            // Vérifier si la requête est réussie
            if ($response->successful())
            {
                $results = $response->json()['products'];
            }

            SearchCache::create([
                'query' => $searchTerm,
                'results' => json_encode($results)
            ]);
        }

        return view('pages.search', compact('searchTerm', 'results'));
    }
}
