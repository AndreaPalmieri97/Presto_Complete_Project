<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homePage()
    {
        $categories = Category::all();

        return view('welcome', compact('categories'));
    }
}
