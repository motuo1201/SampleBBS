<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BbsController extends Controller
{
    public function index()
    {
        $articles = [
            'タイトル１'=>'ここに記事を書きます。',
            'タイトル２'=>'２件目の記事です'
        ];

        return view('bbs')->with('articles', $articles);
    }
}
