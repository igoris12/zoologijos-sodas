@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Managers</div>
                <div class="card-body"> 
                    
                    <ul class="list-group">
                        @foreach ($managers as $manager)
                                <li class="list-group-item">
                                    <div class="listBlock">
                                        <div class="listBlock__content">
                                            <div class="item">
                                                <p>{{$manager->name}} {{$manager->surname}} </p>
                                            </div>
                                            <div class="item">
                                                <p><b><i>Specie: </i></b>{{$manager->getSpecie->name}}</p>
                                            </div>
                                        </div>

                                        <div class="listBlock__buttons">
                                        <a href="{{route('manager.edit',[$manager])}}" class="btn btn-info">Edit</a>
                                            <form method="POST"  action="{{route('manager.destroy', $manager)}}">
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                            @csrf
                                            </form>
                                        </div>
                                    </div> 
                                </li>

                        @endforeach
	                </ul>

               </div>
           </div>
       </div>
   </div>
</div>
@endsection

@section('title') Managers @endsection