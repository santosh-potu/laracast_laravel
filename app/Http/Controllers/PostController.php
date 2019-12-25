<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    
    public function show($slug){
        
        //$post = \DB::table('posts')->where('slug',$slug)->first();
       $post = \App\Post::where('slug',$slug)->firstOrFail();
        return view('post',
                ['post'=>$post]);
    }
}
