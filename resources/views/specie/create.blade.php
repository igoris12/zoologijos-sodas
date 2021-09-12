@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">New species</div>
                <div class="card-body">
                    <div class="block__form">
                        <form method="POST" action="{{route('specie.store')}}">
                            <label class="form-label">Name </label>
                            <input class="form-control" type="text" name="specie_name">
                            @csrf
                            <button type="submit">ADD</button>
                        </form> 
                    </div>
                        
               </div>
           </div>
       </div>
   </div>
</div>
@endsection

@section('title') News species @endsection
