<form  action="{{ route('familiess.store') }}" method="post">
        @csrf
            <input type='text' name='name' >
            <br><br>
            <input type='text' name='national' >
            <input type='text' name='national' >
            <input type='text' name='phone' >
           
            <select name='place_id'>
            @foreach ($places as $place )
                <option value='{{$place->id}}'>{{$place->name}}</option>
               
            @endforeach
        </select>
        