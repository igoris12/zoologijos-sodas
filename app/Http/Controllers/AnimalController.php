<?php

namespace App\Http\Controllers;

use App\Models\animal;
use Illuminate\Http\Request;
use App\Models\Manager;
use App\Models\Specie as AnimalSpecie;



class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $animals = Animal::all();

       return view('animal.index', ['animals' => $animals]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $species = AnimalSpecie::all();
        $managers = Manager::all();
        return view('animal.create', ['species' => $species, 'managers' => $managers]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $animal = new Animal;

        $animal->name = $request->animal_name;
        $animal->birth_year = $request->animal_birth;
        $animal->animal_book = $request->animal_book;
        $animal->manager_id = $request->manager_id;
        $animal->specie_id = $request->specie_id;

        $animal->save();
        return redirect()->route('animal.index');

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
    public function edit(animal $animal)
    {
        $species = AnimalSpecie::all();
        $managers = Manager::all();
        $animals = Animal::all();
        return view('animal.edit', ['managers' => $managers, 'species' => $species, 'animal' => $animal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\specie  $specie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, animal $animal)
    {
        $animal->name = $request->animal_name;
        $animal->birth_year = $request->animal_birth;
        $animal->animal_book = $request->animal_book;
        $animal->manager_id = $request->manager_id;
        $animal->specie_id = $request->specie_id;

        $animal->save();
        return redirect()->route('animal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\specie  $specie
     * @return \Illuminate\Http\Response
     */
    public function destroy(animal $animal)
    {
        $animal->delete();
        return redirect()->route('animal.index')->with('success_message', 'Animal was successfuly deleted.');
    }
}
