<html>
@foreach($families as $family)
    <h3>{{$family->name}}<h3>
    <h3>{{$family->place->id}}<h3>
@endforeach
<a href="families/create">create a family</a>

