@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Edit manager</div>
                    <div class="card-body">       
                        
                         <div class="block__form">
                        <form method="POST" action="{{route('manager.update',[$manager])}}">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" name="manager_name" value="{{$manager->name}}">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Surname</label>
                                <input class="form-control" type="text" name="manager_surname" value="{{$manager->surname}}">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Specie</label>
                                <select name="specie_id" >
                                    @foreach ($species as $specie)
                                        <option value="{{$specie->id}}" @if($specie->id == $manager->specie_id) selected @endif>
                                            {{$specie->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @csrf
                            <button type="submit" class="btn btn-success">Add</button>
                        </form> 
                    </div>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection

@section('title') Edit manager @endsection