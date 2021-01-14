<?php

namespace App\Http\Controllers;
use Storage;

use Illuminate\Http\Request;
use App\Models\Spot;

class SpotController extends Controller
{
    public function index()
    {
        return view('spots');
    }
    public function store(Request $request){

        $request->validate([
            'Titulo' => 'required|string|max:255',
            'file' => 'required|image',
            'Descripción' =>'required|string|max:255|unique:users',
            'Latitud' =>'required|string|max:255',
            'Longitud' =>'required|string|max:255',
            ]);

        $imagenes = $request->file('file')->store('public/imagenes');
        $url = Storage::url($imagenes);


        $spots = new \App\Models\Spot();
        $spots->titulo = $request->titulo;
        $spots->descripcion = $request->descripcion;
        $spots->latitud = $request->latitud;
        $spots->longitud = $request->longitud;

        Spot::create([
            'titulo' => $spots->titulo,
            'url' => $url,
            'descripcion' => $spots->descripcion,
            'latitud' => $spots->latitud,
            'longitud' => $spots->longitud,
        ]);
    }
    public function delete($id){
        /*
        $spots = App\Models\Spot::findOrFail($id);
        $spots->delete();
        return redirect("/spot");
        */
    }
    public function show(){
        $spots = \App\Models\Spot::all();
        return view("spots", array('spots'=>$spots)); 
    }
}