<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
   public function show($id){
       $article = \App\Article::findOrFail($id);
       
       return view('articles.show',['article'=>$article]);
   }
   
   public function index(){
       $articles = \App\Article::latest()->get();
       
       return view('articles.index',['articles'=>$articles]);
       
   }
}
