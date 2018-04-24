<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class BbsController extends Controller
{
    public function index()
    {
        $articles = Article::orderby('created_at')->get();

        return view('bbs')->with('articles', $articles);
    }

    public function postArticle(Request $request)
    {
        Article::create($request->only(['title','comment']));
        return redirect('/bbs');
    }
}
