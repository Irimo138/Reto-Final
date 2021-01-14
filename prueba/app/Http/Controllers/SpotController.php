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
            
            'file' => 'required|image',
            
        ]);
       $imagenes = $request->file('file')->store('public/imagenes');
       $url = Storage::url($imagenes);

       $spot = new Spot();
       $spot->name = $request->name;
       $spot->descripcion = $request->descripcion;
       $spot->latitud = $request->latitud;
       $spot->longitud = $request->longitud;

       Spot::create([
           'name' => $spot->name,
           'url' => $url,
           'descripcion' => $spot->descripcion,
           'latitud' => $spot->latitud,
           'longitud' => $spot->longitud,
       ]);

       //Al crear un nuevo spot te redirigirá a la página de explorador de spots
       //return view('mostrarSpots');
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
