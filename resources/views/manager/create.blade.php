@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">New manager</div>
                <div class="card-body"> 
                    <div class="block__form">
                        <form method="POST" action="{{route('manager.store')}}">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input class="form-control" 
                                type="text" 
                                name="manager_name" 
                                value="{{old('manager_name')}}">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Surname</label>
                                <input class="form-control" 
                                type="text" 
                                name="manager_surname" 
                                value="{{old('manager_surname')}}">
                            </div>

                           <div class="form-group">
                                <label class="form-label">Specie</label>
                                <select name="specie_id" >
                                    <option value="0" selected disabled>Select specie</option>
                                    @foreach ($species as $specie)
                                        <option value="{{$specie->id}}" @if(old('specie_id') == $specie->id) selected @endif>{{$specie->name}}</option>
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

@section('title') New manager @endsection