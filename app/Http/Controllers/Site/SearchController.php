<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function Search(Request $request) {

        return view('Search.Search', [ 'response' => $request->query('busca') ]);
    }
}
