<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spot;
class spotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $spot = new spot;
        $request->validate([
            'Titulo' => 'required|string|max:255',
            'Descripción' =>'required|string|max:255|unique:users',
            'Latitud' =>'required|string|max:255',
            'Longitud' =>'required|string|max:255',
            'Nickname' =>'required|string|max:255',
            ]);

            Auth::login($user = Spots::create([
            'Titulo'=>$request->Titulo,
            'Descripción' => $request->Descripción,
            'Latitud' => $request->Latitud,
            'Longitud' => $request->Longitud,
            'Nickname' => $request->Nickname,
            ]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
