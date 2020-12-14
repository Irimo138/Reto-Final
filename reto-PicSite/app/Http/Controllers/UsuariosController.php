<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class UsuariosController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function registrar()
    {
        return view('registrar');
    }
    
    public function store(Request $request){
        $user = new App\Models\Usuario();
        $user->name = $request->nombre;
        $user->name = $request->email;
        $user->name = $request->nickname;
        $user->name = $request->contraseña;
        $user->name = $request->nacimiento;
        $user->name = $request->ciudad;
        $user->save();
        return redirect("/");
    }

}
