<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
//use文を追加し、Laravelの「Auth」という機能を使う宣言をする。
use Illuminate\Support\Facades\Auth;

class BbsController extends Controller
{
    public function index()
    {
        $articles = Article::orderby('created_at')->get();

        return view('bbs')->with('articles', $articles);
    }

    public function postArticle(Request $request)
    {
        //ログインをしているユーザーの情報を取得する。
        $loginUser      = Auth::user();        
        //掲示板に投稿されたタイトルと本文を取得する。
        $postedArticle  = $request->only(['title','comment']);
        //上記の2つの情報を1つの配列にまとめる。
        $arrayForCreate = array_merge($postedArticle, ['user_id'=>$loginUser->id]);
        //Articlesテーブルに登録する。
        Article::create($arrayForCreate);
        return redirect('/bbs');
    }
}
