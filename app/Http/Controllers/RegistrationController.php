<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
   public function create()
    {
        return view('registration.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'password' => bcrypt($request->post('password'))
        ]);

        auth()->login($user);

        return redirect('/posts/manage');
    }
}
