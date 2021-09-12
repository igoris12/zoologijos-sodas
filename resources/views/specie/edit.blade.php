
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Edit species</div>
                <div class="card-body">             
                  <form method="POST" action="{{route('specie.update',$specie)}}">
                     Name: <input type="text" name="specie_name" value="{{$specie->name}}">
                     @csrf
                     <button type="submit">EDIT</button>
                  </form>
                  @extends('layouts.app')
               </div>
           </div>
       </div>
   </div>
</div>
@endsection

@section('title') Edit species @endsection
