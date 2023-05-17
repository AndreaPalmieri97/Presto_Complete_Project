<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class CreateArticle extends Component
{
    use WithFileUploads;

    public $name;
    public $category_id;
    public $category;
    public $description;
    public $price;
    public $temporary_images;
    public $images = [];
    public $image;

    protected $rules = [
        'name' => 'required|min:4',
        'images.*' => 'image',
        'temporary_images.*' => 'image',

    ];

    public function updatedTemporaryImages()
    {

        if ($this->validate([
            'temporary_images.*' => 'image',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }


    public function removeImage($key)
    {

        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function store()
    {
        $this->validate();
        // $category = Category::find($this->category);

        // $this->article = $category->articles()->create();

        $this->article = Category::find($this->category)->articles()->create([

            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            "user_id" => Auth::user()->id,

        ]);

        if (count($this->images)) {
            foreach ($this->images as $image) {
                $this->article->images()->create(['path' => $image->store('images', 'public')]);
            }
        }

        return redirect()->route('thanks')->with('message', 'Annuncio inserito correttamente. Grazie per aver utilizzato Presto.it');
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
