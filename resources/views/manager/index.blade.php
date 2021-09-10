@foreach ($managers as $manager)
  <a href="{{route('manager.edit',[$manager])}}"> {{$manager->name}} {{$manager->surname}}</a>
  <p>{{$manager->getSpecie->name}}</p>
  <form method="POST" action="{{route('manager.destroy', [$manager])}}">
   @csrf
   <button type="submit">DELETE</button>
  </form>
@endforeach
