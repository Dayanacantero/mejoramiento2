<?php

namespace App\Http\Controllers;

use App\Models\Traveler;
use Illuminate\Http\Request;

class TravelerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $travelers = Traveler::orderBy('id', 'desc')->get();
        return view('traveler.listar', compact('travelers'));
        //return  $cursos;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('traveler.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $traveler= new Traveler();
        $traveler->name=$request->name;
        $traveler->adress=$request->adress;
        $traveler->telephone=$request->telephone;
        $traveler->save();
        return $traveler;
    }

    /**
     * Display the specified resource.
     */
    public function show(Traveler $traveler)
    {
        return view('traveler.show', compact('traveler'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Traveler $traveler)
    {
        return view('traveler.edit',compact('traveler'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Traveler $traveler)
    {
        $traveler->name = $request->name;
        $traveler->adress = $request->adress;
        $traveler->telephone = $request->telephone;
        $traveler->save();
        return redirect()->route('traveler.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Traveler $traveler)
    {
        $traveler->delete();
        return redirect()->route('traveler.index');
    }
}
