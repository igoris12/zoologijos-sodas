@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Edit animal</div>
                <div class="card-body">        
                    
                    <div class="block__form">
                        <form method="POST" action="{{route('animal.update',[$animal])}}">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" name="animal_name" value="{{$animal->name}}">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Birth year</label>
                                <input class="form-control" type="text" name="animal_birth" value="{{$animal->birth_year}}">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Birth year</label>
                                <textarea  name="animal_book">{{$animal->animal_book}}</textarea>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Specie</label>
                                <select name="specie_id" >
                                    @foreach ($species as $specie)
                                        <option value="{{$specie->id}}" @if($specie->id == $animal->specie_id) selected @endif>
                                            {{$specie->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Manager</label>
                                <select name="manager_id">
                                    @foreach ($managers as $manager)
                                        <option value="{{$manager->id}}" @if($manager->id == $animal->manager_id) selected @endif>
                                            {{$manager->name}} {{$manager->surname}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            @csrf
                            <button type="submit" class="btn btn-info">Edit</button>
                        </form> 
                    </div>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection

@section('title') Edit animal @endsection
