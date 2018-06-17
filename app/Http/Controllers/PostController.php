<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(){

        $posts = Post::latest()
            ->filter(request()->only(['month', 'year']))
            ->get();

        return view('posts.index', compact('posts'));
    }

    public function create(){

        return view('posts.create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required'
        ]);

        Post::create([
            'title' => $request->post('title'),
            'slug' => $request->post('slug'),
            'body' => $request->post('content'),
            'user_id' => auth()->user()->id
        ]);        

        return redirect('/posts/manage');
    }

    public function show($slug){

        $post = Post::where('slug', '=', $slug)->firstOrFail();

        return view('posts.show', compact('post'));
    }

    public function edit($id){
        $post = Post::find($id);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'title' => 'required', 
            'slug' => 'required',
            'body' => 'required'
        ]);

        $post = Post::find($id);

        $post->title = $request->post('title');
        $post->slug = $request->post('slug');
        $post->body = $request->post('body');

        $post->save();

        return redirect('/posts/manage');
    }

    public function manage(){

        $posts = Post::all();

        return view('posts.manage', compact('posts'));
    }
}
