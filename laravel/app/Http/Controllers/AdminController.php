<?php

namespace App\Http\Controllers;

use App\Models\Search;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $searchStats = Search::select('query')
            ->selectRaw('COUNT(*) as count')
            ->groupBy('query')
            ->orderBy('count', 'DESC')
            ->get();

        return view('admin.index', compact('searchStats'));
    }
}
