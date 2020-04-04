<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    function welcome() {
        $articles = Article::where('published', '=', '1')
            ->orderBy('publishedDate', 'desc')
            ->limit(25)
            ->get();

        return view('welcome', [
            'articles' => $articles,
        ]);
    }

}
