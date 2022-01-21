<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function Search(Request $request) {
        
        $posts = Post::where('title', $request->query('busca'))->get();
        return view('Search.Search', [ 'response' => $posts ]);
    }
}





