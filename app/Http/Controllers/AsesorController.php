<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use Illuminate\Http\Request;

class AsesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asesors = Asesor::all(); //Se consultan todos los asesores
 return view('asesors.index', ['asesors' => $asesors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('Asesors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Asesor::create($request->all());
        return to_route('asesors.index')->with('info', 'Asesor creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Asesor $asesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asesor $asesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asesor $asesor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asesor $asesor)
    {
        //
    }
}
