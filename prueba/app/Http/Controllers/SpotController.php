<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Storage;

use Illuminate\Http\Request;
use App\Models\Spot;

class SpotController extends Controller
{
    
    public function index()
    {
        $id = Auth::user()->id;
        $spots = Spot::where('user_id',$id)->get();

        return view('misSpots', ['spots' => $spots]);

    }
    public function store(Request $request){

        $request->validate([
            
            'file' => 'required|image',
            
        ]);
        $imagenes = $request->file('file')->store('public/imagenes');
       $url = Storage::url($imagenes);

       $spots = new Spot();
       $spots->name = $request->name;
       $spots->descripcion = $request->descripcion;
       $spots->latitud = $request->latitud;
       $spots->longitud = $request->longitud;

       Spot::create([
           'name' => $spots->name,
           'url' => $url,
           'descripcion' => $spots->descripcion,
           'latitud' => $spots->latitud,
           'longitud' => $spots->longitud,
           'user_id' => auth()->user()->id,
       ]);

       //Al crear un nuevo spot te redirigirá a la página de explorador de spots
       return redirect()->route('explorador');
    }
    public function destroy(Spot $spot){
        
        //Para borrar la imagen del servidor, no solo la url de nuestra base de datos, tenemos que cambiarle la url de donde se almacena por la siguiente.
        $url = str_replace('storage','public',$spot->url);
        Storage::delete($url);

        $spot->delete();
        return redirect()->route('mios')->with('eliminado','ok');
        
    }
    public function edit($id){
        
        $spots = Spot::where('id',"=",$id);
        return view('editar')->with(compact('spots'));
        
    }
    public function show(){
        $spots = \App\Models\Spot::all();
        return view("spots", array('spots'=>$spots)); 
    }
}