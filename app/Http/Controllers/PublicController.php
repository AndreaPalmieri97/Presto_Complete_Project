<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public $category = [
        [
            'categoria' => 'Mobili',
            'img' => 'mobili-antiquariato.png',
            'description' => "Mobili d'antiquariato in buono stato",
        ],
        [
            'categoria' => 'Gioelleria',
            'img' => 'gioielli.jpg',
            'description' => 'Articoli preziosi da tutto il mondo',
        ],
        [
            'categoria' => 'Giardinaggio',
            'img' => 'giardinaggio.jpg',
            'description' => 'Articoli per la cura del tuo giardino',
        ],
        [
            'categoria' => 'Elettronica',
            'img' => 'prodotti tech più innovativi.webp',
            'description' => 'Prodotti tech di qualità e delle migliori marche',
        ],
        [
            'categoria' => 'Giocattoli per bambini',
            'img' => 'giocattoli-per-bambini.jpeg',
            'description' => 'Solo il meglio per il tuo bambino',
        ],
        [
            'categoria' => 'Automobili',
            'img' => 'automobili.jpg',
            'description' => 'Le migliori auto con prezzi folli!',
        ],
        [
            'categoria' => 'Console',
            'img' => 'consoles.jpg',
            'description' => 'Console Nintendo,Xbox,Playstation',
        ],
        [
            'categoria' => 'Attrezzi fai-da-te',
            'img' => 'Attrezzi fai-da-te.jpg',
            'description' => 'Attrezzi per i tuoi hobby!',
        ],
        [
            'categoria' => 'Libri e fumetti',
            'img' => 'libri-bambini.jpg',
            'description' => 'Solo il meglio per gli appassionati della lettura',
        ],
        [
            'categoria' => 'Abbigliamento',
            'img' => 'Abbigliamento.jpg',
            'description' => 'Prodotti certificati della migliore qualità',
        ]

    ];
    public function homePage()
    {
        $categories = Category::all();

        return view('welcome', ['category' => $this->category], compact('categories'));
    }
}
