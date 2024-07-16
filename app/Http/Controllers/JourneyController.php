<?php

namespace App\Http\Controllers;

use App\Models\Journey;
use Illuminate\Http\Request;

class JourneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $journeys = Journey::orderBy('id', 'desc')->get();
        return view('journey.listar', compact('journeys'));
        //return  $cursos;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('journey.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $journey= new Journey();
        $journey->num_plazas=$request->num_plazas;
        $journey->fecha=$request->fecha;
        $journey->dato_adicional=$request->dato_adicional;
        $journey->save();
        return $journey;
    }

    /**
     * Display the specified resource.
     */
    public function show(Journey $journey)
    {
        return view('journey.show', compact('journey'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Journey $journey)
    {
        return view('journey.edit',compact('journey'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Journey $journey)
    {
        $journey->num_plazas = $request->num_plazas;
        $journey->fecha = $request->fecha;
        $journey->dato_adicional = $request->dato_adicional;
        $journey->save();
        return redirect()->route('journey.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Journey $journey)
    {
        $journey->delete();
        return redirect()->route('journey.index');
    }
}
