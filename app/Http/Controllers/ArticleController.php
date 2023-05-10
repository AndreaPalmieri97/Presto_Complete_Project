<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    public function create() {
        return view('create');
    }

    public function store(Request $request) {

        Article::create(
            [
                "user_id" => Auth::user()->id,
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

        $article = Article::orderBy('created_at', 'desc')->get();

        return view('index', compact('article'));
    }

    

}
