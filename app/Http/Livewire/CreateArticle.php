<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateArticle extends Component
{

    public $name;
    public $category_id;
    public $category;
    public $description;
    public $price;


    public function store() {

        $category = Category::find($this->category);
        $category->articles()->create([

            'name'=>$this->name,
            'description'=>$this->description,
            'price'=>$this->price,
            "user_id" => Auth::user()->id,
            

        ]);
        return redirect()->route('thanks')->with('message', 'Annuncio inserito correttamente. Grazie per aver utilizzato Presto.it');

    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
