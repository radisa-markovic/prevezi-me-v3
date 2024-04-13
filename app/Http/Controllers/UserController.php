<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function loginForm()
    {
        return view("users.login");
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            "name" => "required|min:1",
            "email" => ["required", "email", Rule::unique('users', "email")],
            "password" => "bail|required|min:8|confirmed"
        ]);

        //Hash password
        $formFields['password'] = bcrypt($formFields["password"]);
        $user = User::create($formFields);
        auth()->login($user);

        return redirect("/");
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            "email" => "bail|required|email",
            "password" => "required|min:8"
        ]);

        if(auth()->attempt($formFields))
        {
            $request->session()->regenerate();
            
            return redirect("/");
        }

        return back()->withErrors([
            "email" => "Invalid credentials"
        ])->onlyInput("email");
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/");
    }

    public function register()
    {
        return view("users.register");
    }

    public function show(Request $request)
    {
        $user = User::find($request->id);
        return view("users.show", ['user' => $user]);
    }
}
