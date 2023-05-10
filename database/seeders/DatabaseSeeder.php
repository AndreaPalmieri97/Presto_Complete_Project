<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $categories = [
            [
                'name' => 'Mobili',
                'img' => 'mobili-antiquariato.png',
                'description' => "Mobili d'antiquariato in buono stato",
            ],
            [
                'name' => 'Gioelleria',
                'img' => 'gioielli.jpg',
                'description' => 'Articoli preziosi da tutto il mondo',
            ],
            [
                'name' => 'Giardinaggio',
                'img' => 'giardinaggio.jpg',
                'description' => 'Articoli per la cura del tuo giardino',
            ],
            [
                'name' => 'Elettronica',
                'img' => 'prodotti tech più innovativi.webp',
                'description' => 'Prodotti tech di qualità e delle migliori marche',
            ],
            [
                'name' => 'Giocattoli per bambini',
                'img' => 'giocattoli-per-bambini.jpeg',
                'description' => 'Solo il meglio per il tuo bambino',
            ],
            [
                'name' => 'Automobili',
                'img' => 'automobili.jpg',
                'description' => 'Le migliori auto con prezzi folli!',
            ],
            [
                'name' => 'Console',
                'img' => 'consoles.jpg',
                'description' => 'Console Nintendo,Xbox,Playstation',
            ],
            [
                'name' => 'Attrezzi fai-da-te',
                'img' => 'Attrezzi fai-da-te.jpg',
                'description' => 'Attrezzi per i tuoi hobby!',
            ],
            [
                'name' => 'Libri e fumetti',
                'img' => 'libri-bambini.jpg',
                'description' => 'Solo il meglio per gli appassionati della lettura',
            ],
            [
                'name' => 'Abbigliamento',
                'img' => 'Abbigliamento.jpg',
                'description' => 'Prodotti certificati della migliore qualità',
            ],
        ];


        foreach($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'img' => $category['img'],
                'description' => $category['description']
            ]);
        }
    }
}
