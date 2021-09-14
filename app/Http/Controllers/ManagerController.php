<?php

namespace App\Http\Controllers;

use App\Models\manager;
use Illuminate\Http\Request;
use App\Models\Specie;
use App\Models\Specie as AnimalSpecie;
use Validator;




class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $managers = Manager::all();
        return view('manager.index', ['managers' => $managers]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $species = AnimalSpecie::all();
        $managers = Specie::all();
        return view('manager.create', ['managers' => $managers, 'species' => $species]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),
       [
           'manager_name' => ['required', 'min:3', 'max:64'],
           'manager_surname' => ['required', 'min:3', 'max:64'],
           'specie_id' => ['required' ,'integer', 'min:1'],


       ],
 
       );
       if ($validator->fails()) {
           $request->flash();
           return redirect()->back()->withErrors($validator);
       }



        $manager = new Manager;
        $manager->name = $request->manager_name;
        $manager->surname = $request->manager_surname;
       $manager->specie_id = $request->specie_id;

        $manager->save();
        return redirect()->route('manager.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function show(manager $manager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function edit(manager $manager)
    {   
        $species = AnimalSpecie::all();

        $managers = Specie::all();
        return view('manager.edit', ['manager' => $manager, 'species' => $species]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, manager $manager)
    {


        $validator = Validator::make($request->all(),
       [
           'manager_name' => ['required', 'min:3', 'max:64'],
           'manager_surname' => ['required', 'min:3', 'max:64'],
           'specie_id' => ['required' ,'integer', 'min:1'],


       ],
 
       );
       if ($validator->fails()) {
           $request->flash();
           return redirect()->back()->withErrors($validator);
       }


        $manager->name = $request->manager_name;
        $manager->surname = $request->manager_surname;
        $manager->specie_id = $request->specie_id;

        $manager->save();
        return redirect()->route('manager.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function destroy(manager $manager)
    {
        if($manager->getAnimal->count()){
           return redirect()->route('manager.index')->with('info_message', 'You cant delete this manager.');
       }

       $manager->delete();
       return redirect()->route('manager.index')->with('success_message', 'Manager was successfuly deleted.');
    }
}
