<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'nickname' =>'required|string|max:255|unique:users',
            'city' =>'required|string|max:255',
            'fecha' =>'required|date',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'rol'=>'Usuario',
            ]);

        Auth::login($user = User::create([
            'name' => $request->name,
            'apellido'=>$request->apellido,
            'nickname' => $request->nickname,
            'city' => $request->nickname,
            'fecha' => $request->fecha,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rol' => "Usuario"
        ]));

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
