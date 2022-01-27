@extends('layouts.app')
@section('content')

<div class=" d-grid gap-3" >  
<h1 class="text-primary fs-1 p-2   " style="text-align: center; " > {{ $hotel->name }} </h1>

<div  class="p-2 bg-light border  " >   
   

    <table class="table">
      <thead  >
        <tr class="table-light text-info">
          <th scope="col">Room Number</th>
          <th scope="col">Room type</th>
          <th scope="col">Room price </th>
          <th scope="col">Room status</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($hotel->rooms as $room)
        <tr class=" table-secondary  ">
          <th scope="row">{{  $room->id }}</th>
          <td >{{  $room->type }}</td>
          <td>{{  $room->price }}</td>
          <td> @if (  $room->status )  availlable  
         
              
          @else
              Not availlable from 
              @foreach ($booking as $item)
              @if ($item->room->id==$room->id)
                  {{ $item->checkin_date }}

                  to {{$item->checkout_date}}
              @endif
              @endforeach
           
          @endif  </td>
          <td><a type="button" href=" {{route('Rooms.edit', $room->id)}}" class="btn btn-info btn-sm ">Edit</a></td>
                  
          <td> {!! Form::open(['route' => ['Rooms.destroy', $room->id], 'method'=>'DELETE']) !!}
              <button type="submit" class="btn btn-danger">Delete</button>
              {!! Form::close() !!} </td> 
        </tr>
        @endforeach
      </tbody>
   </table>
  
 
   <a  style="margin-left: 90%"  type="button"  href=" {{ route ('Rooms.create') }} " class="btn btn-primary  ">Add a Room </a>
   </div>
  </div>

@endsection