<?php

namespace App\Http\Controllers;

use App\Models\specie;
use Illuminate\Http\Request;

class SpecieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $species = Specie::all();
        return view('specie.index', ['species' => $species]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('specie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $specie = new Specie;
        $specie->name = $request->specie_name;
        $specie->save();
        return redirect()->route('specie.index')->with('success_message', 'New specie added.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\specie  $specie
     * @return \Illuminate\Http\Response
     */
    public function show(specie $specie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\specie  $specie
     * @return \Illuminate\Http\Response
     */
    public function edit(specie $specie)
    {
        return view('specie.edit', ['specie' => $specie]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\specie  $specie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, specie $specie)
    {
        $specie->name = $request->specie_name;
        $specie->save();
        return redirect()->route('specie.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\specie  $specie
     * @return \Illuminate\Http\Response
     */
    public function destroy(specie $specie)
    {
        if($specie->getManager->count() || $specie->getAnimal->count() ){
          return redirect()->route('specie.index')->with('info_message', 'You cant delete this specie.');

       }
       $specie->delete();
       return redirect()->route('specie.index')->with('success_message', 'Specie was successfuly deleted.');

    }
}
