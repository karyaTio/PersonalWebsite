<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){

        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required'
        ]);

        Post::create([
            'title' => $request->post('title'),
            'slug' => $request->post('slug'),
            'body' => $request->post('body')
        ]);        

        return redirect('/');
    }

    public function show($slug){

        $post = Post::where('slug', '=', $slug)->firstOrFail();



        return view('posts.show', compact('post'));
    }


}
