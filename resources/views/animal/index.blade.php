@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Animals</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($animals as  $animal)
                            <li class="list-group-item">
                                <div class="listBlock">
                                    <div class="listBlock__content">
                                        <div class="item">
                                            <b><p>{{$animal->name}}</p></b>
                                        </div>
                                        <div class="item">
                                            <p><b><i>Specie: </i></b> {{$animal->getSpecie->name}} </p>
                                        </div>
                                        <div class="item">
                                            <p><b><i>Birth: </i></b> {{$animal->birth_year}} </p>
                                        </div >
                                        <div class="item">
                                            <p><b><i>Master: </i></b> {{$animal->getManager->name}} {{$animal->getManager->surname}}</p>
                                        </div>

                                    </div>

                                    <div class="listBlock__buttons">
                                        <a href="{{route('animal.edit',[$animal])}}" class="btn btn-info">Edit</a>
                                        <form method="POST" action="{{route('animal.destroy', $animal)}}">
                                            <button  class="btn btn-danger" type="submit">DELETE</button>
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

@section('title') Animals @endsection
