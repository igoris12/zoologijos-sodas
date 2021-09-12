
@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">New animal</div>
                <div class="card-body">
                    <form method="POST" action="{{route('animal.store')}}">
                            Name: <input type="text" name="animal_name">
                            Birth year: <input type="text" name="animal_birth">
                            AInimal book: <textarea name="animal_book"></textarea>
                        <select name="specie_id">
                            @foreach ($species as $specie)
                                <option value="{{$specie->id}}">{{$specie->name}}</option>
                            @endforeach
                        </select>

                        <select name="manager_id">
                            @foreach ($managers as $manager)
                                <option value="{{$manager->id}}">{{$manager->name}} {{$manager->surname}}</option>
                            @endforeach
                        </select>
                            @csrf
                        <button type="submit">ADD</button>
                    </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection

@section('title') New animal @endsection
