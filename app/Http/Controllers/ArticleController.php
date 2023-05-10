<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    public function create() {
        $categories = Category::all();
        return view('create', compact('categories'));
    }

    public function store(Request $request) {

        Article::create(
            [
                "user_id" => Auth::user()->id,
                "category_id" => $request->input('category_id'),
                'img' => $request->file('img')->store('public/articles'),
                'name' => $request->input('name'),
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
