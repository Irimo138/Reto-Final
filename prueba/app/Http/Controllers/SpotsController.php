<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spot;

class SpotsController extends Controller
{
    public function index()
    {
        return view('spots');
    }
    public function store(Request $request){

        $spots = new spot;
        $request->validate([
            'Titulo' => 'required|string|max:255',
            'Descripción' =>'required|string|max:255|unique:users',
            'Latitud' =>'required|string|max:255',
            'Longitud' =>'required|string|max:255',
            'Nickname' =>'required|string|max:255',
            ]);

        $spots = new App\Models\Spot();
        $spots->titulo = $request->titulo;
        $spots->descripcion = $request->descripcion;
        $spots->latitud = $request->latitud;
        $spots->longitud = $request->longitud;
        $spots->save();
        return redirect("/spot");
    }
    public function delete($id){
        $spots = App\Models\Spot::findOrFail($id);
        $spots->delete();
        return redirect("/spot");
    }
    public function show(){
        $tasks = App\Models\Spot::all();
        return view("indexSpot", array('spots'=>$spots)); 
    }
}
