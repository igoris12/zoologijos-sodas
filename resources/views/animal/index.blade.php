@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Animals</div>
                <div class="card-body">             
                  @foreach ($animals as $animal)
                    <a href="{{route('animal.edit',[$animal])}}">{{$animal->name}}</a>
                    <p>{{$animal->getSpecie->name}} </p>
                    <p>{{$animal->getManager->name}} {{$animal->getManager->surname}}</p>
                    <form method="POST" action="{{route('animal.destroy', [$animal])}}">
                    @csrf
                    <button type="submit">DELETE</button>
                    </form>
                  @endforeach
               </div>
           </div>
       </div>
   </div>
</div>
@endsection

@section('title') Animals @endsection