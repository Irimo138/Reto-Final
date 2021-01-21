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
<<<<<<< HEAD
        return view('exploradorl')->with('spots', $spots);
=======
        return view('dashboard')->with('spots', $spots);
>>>>>>> 5460f30c8fda081aa3621df6237e33572a05ee9d
    }
    
    public function info(Spot $spots){
        
        //en la siguiente variable se almacenan todos los registros de spot
        $spot = Spot::where('id',$spots->id);

        //utilizamos compact para que la vista pueda acceder a los registros
        return view('infoSpot')->with('spots', $spots);
    }
}
