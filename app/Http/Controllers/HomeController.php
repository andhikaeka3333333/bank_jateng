<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

   public function index()
    {
        $articles = Article::latest()->paginate(8);
        return view('welcome', compact('articles'));
    }

    
}
