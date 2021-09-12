@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Species</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($species as $specie)
                        <li class="list-group-item">
                            <div class="listBlock">
                                <div  class="listBlock__content">
                                    <h4>{{$specie->name}}</h4>
                                </div>

                                <div class="listBlock__buttons">
                                    <a href="{{route('specie.edit',[$specie])}}" class="btn btn-info">Edit</a>
                                    <form method="POST" action="{{route('specie.destroy', $specie)}}">
                                        <button class="btn btn-danger" type="submit">DELETE</button>
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

@section('title') Species @endsection
