<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function create() {
        return view('create');
    }

    public function store(Request $request) {

        Article::create(
            [
                'name' => $request->input('name'),
                'category' => $request->input('category'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
            ]
        );
        return redirect()->route('thanks')->with('message', 'Annuncio inserito correttamente. Grazie per aver utilizzato Presto.it');
    }

    public function thanks() {
        return view('thanks');
    }

    public function index() {

        $article = Article::OrderBy('created.at', 'desc')->get();
        
        return view('index', compact('article'));
    }
}
