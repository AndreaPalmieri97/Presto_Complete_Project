<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\HydrationMiddleware\NormalizeComponentPropertiesForJavaScript;

class ArticleController extends Controller
{

    public function create()
    {
        $categories = Category::all();
        return view('create', compact('categories'));
    }

    // public function store(Request $request)
    // {

    //     Article::create(
    //         [
    //             "user_id" => Auth::user()->id,
    //             "category_id" => $request->input('category_id'),
    //             'img' => $request->file('img')->store('public/articles'),
    //             'name' => $request->input('name'),
    //             'description' => $request->input('description'),
    //             'price' => $request->input('price'),
    //         ]
    //     );
    //     return redirect()->route('thanks')->with('message', 'Annuncio inserito correttamente. Grazie per aver utilizzato Presto.it');
    // }

    public function thanks()
    {
        return view('thanks');
    }

    public function index()
    {

        $article = Article::orderBy('created_at', 'desc')->where('is_accepted', true)->get();

        return view('index', compact('article'));
    }

    public function show(Article $article)
    {
        return view('show', compact('article'));
    }

    public function filterCategory($id)
    {
        $categoria=Category::findOrFail($id);
        $article=$categoria->articles->where('is_accepted', true);
        $categoryName=$categoria->name;
        return view('filterCategory' ,compact('article' , 'categoryName'));
    }


    public function searchArticle(Request $request)
    {
        $articles = Article::search($request->searched)->where('is_accepted', true)->paginate(10);
        return view('filterArticle' , compact('articles'));
    }
}
