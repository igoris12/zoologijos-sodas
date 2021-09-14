
@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Edit species</div>
                <div class="card-body">   
                    <div class="block__form">
                        <form method="POST" action="{{route('specie.update',[$specie])}}">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" name="specie_name" value="{{$specie->name}}">
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

@section('title') Edit species @endsection
