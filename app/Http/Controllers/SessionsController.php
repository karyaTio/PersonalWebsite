<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function __construct(){
        $this->middleware('guest')->except(['destroy']);
    }

    public function create(){
        return view('sessions.create');
    }

    public function store(Request $request){

        if(! auth()->attempt(request(['email', 'password']))){
            return back()->withErrors([
                'message' => 'Username or password invalid'
            ]);
        }

        return redirect('/posts/manage');
    }

    public function destroy(){
        
        auth()->logout();

        return redirect('/');
    }
}
