<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index()
    {

        $article_to_check = Article::where('is_accepted', null)->first();
        return view('revisor.indexRevisor', compact('article_to_check'));
    }

    public function acceptArticle(Article $article)
    {

        $article->setAccepted(true);
        return redirect()->back()->with('revisorMessage', 'Complimeti, hai accettato l\'annuncio');
    }

    public function rejectArticle(Article $article)
    {

        $article->setAccepted(false);
        return redirect()->back()->with('revisorMessage', 'Complimeti, hai rifiutato l\'annuncio');
    }

    public function becomeRevisor()
    {
        return view('revisor-request');
    }



    public function store(Request $request)
    {
        Auth::user()->name= $request->input('name');
        Auth::user()->email = $request->input('email');
        $tellMeWhy = $request->input('tellMeWhy');
        Auth::user()->save();

        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user(), $tellMeWhy));

        return redirect()->route('home')->with('success', 'La tua richiesta è stata inviata con successo.');
    }



    public function makeRevisor(User $user)
    {
        Artisan::call('presto:makeUserRevisor', ["email" => $user->email]);
        return redirect('/')->with('acceptRevisor', 'Complimenti ' . Auth::user()->name . ', sei diventato revisore');
    }
}
