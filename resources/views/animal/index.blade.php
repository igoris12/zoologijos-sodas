@foreach ($animals as $animal)
  <a href="{{route('animal.edit',[$animal])}}">{{$animal->name}}</a>
  <p>{{$animal->getSpecie->name}} </p>
  <p>{{$animal->getManager->name}} {{$animal->getManager->surname}}</p>
  <form method="POST" action="{{route('animal.destroy', [$animal])}}">
   @csrf
   <button type="submit">DELETE</button>
  </form>

@endforeach
