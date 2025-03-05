<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function homepage()
    {
        $users = User::count();
        // return view('homepage', compact('users'));
                    return response([$users]);


        //select count(*) from users 
    }



    public function store(Request $request)
    {

        $attribute = $request->validate([

            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role_id' => ['required', 'exists:roles,id'],

        ]);

        $user = User::create($attribute);

        Auth::login($user);

        // dd("amine");

        // INSERT INTO `users`(`id`, `name`, `email`, `password`, `role_id`) VALUES ('','','','','')

    }


    public function signin(Request $request)
    {


        $attribute = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($attribute)) {
            return redirect('/login');
        }

        // dd("amine");


        return redirect('/homepage');


        //select email,password  from users 
        // where email=email  and password=password 

    }



    public function destroy()
    {
        Auth::logout();

        return redirect('/login');
    }
}
