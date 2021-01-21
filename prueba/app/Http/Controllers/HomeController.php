<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spot;

class HomeController extends Controller
{
    public function index(){
        
        //en la siguiente variable se almacenan todos los registros de spot
        $spots = Spot::all();

        //utilizamos compact para que la vista pueda acceder a los registros
        return view('dashboard')->with('spots', $spots);
    }
    
    public function info($id){
        
        //en la siguiente variable se almacenan todos los registros de spot
        $spots = Spot::where('id')->$id;

        //utilizamos compact para que la vista pueda acceder a los registros
        return view('infoSpot')->with('spots', $spots);
    }
}
