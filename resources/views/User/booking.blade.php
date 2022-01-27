@extends('layouts.app')
@section('content')

<div  style="width: 50% " > 
  
        
  @isset($hotel_booking)
  <h1 class="text-primary fs-1 p-2   " style="text-align: center; " > Hotels </h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Adress</th>
        <th scope="col">Room number</th>
        <th scope="col">Checkin date</th>
        <th scope="col">Checkout date</th>
        <th scope="col">Price</th>
        <th scope="col">Cancel</th>
      </tr>
    </thead>
    <tbody>
   


      @foreach ($hotel_booking as $item)
      <tr>
       
        <th scope="row">{{ $item->guest->guest_name }}</th>
        <td>{{ $item->guest->adress }}</td>
        <td> {{$item->room_id  }} </td>
        <td>{{ $item->checkin_date }}</td>
        <td>{{ $item->checkout_date }}</td>
        <td>{{ $item->room->price }}</td>
         
          <td> {!! Form::open(['route' => ['rooms.destroy', $item->id], 'method'=>'DELETE']) !!}
              <button type="submit" class="btn btn-danger">Cancel</button>
          </td>
     
      </tr>
      @endforeach
      @endisset

      @isset($hotelbooking)

   
      <tr>
       
        <th scope="row">{{ $hotelbooking->guest->guest_name }}</th>
        <td>{{ $hotelbooking->guest->adress }}</td>
        <td> {{$hotelbooking->room_id  }} </td>
        <td>{{ $hotelbooking->checkin_date }}</td>
        <td>{{ $hotelbooking->checkout_date }}</td>
        <td>{{ $hotelbooking->room->price }}</td>
        <td> {!! Form::open(['route' => ['rooms.destroy', $item->id], 'method'=>'DELETE']) !!}
          <button type="submit" style="margin-left: 120%;" class="btn btn-danger">Cancel</button>
          </td>
      </tr>
   
      @endisset
    </tbody>
 </table>






  <table class="table">
    <h1 class="text-primary fs-1 p-2   " style="text-align: center; " > Villas </h1>
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Adress</th>
     
        <th scope="col">Checkin date</th>
        <th scope="col">Checkout date</th>
      
        <th scope="col">Cancel</th>
      </tr>
    </thead>
    <tbody>


      @isset($villabooking)

<tr>
 
  <th scope="row">{{ $villabooking->villa_guest->vguest_name }}</th>
  <td>{{ $villabooking->villa_guest->vadress }}</td>
  <td>{{ $villabooking->villa->address }}</td>
  <td>{{ $villabooking->checkin_date }}</td>
  <td>{{ $villabooking->checkout_date }}</td>
  <td> {!! Form::open(['route' => ['stock.destroy', $villabooking->id], 'method'=>'DELETE']) !!}
    <button type="submit" class="btn btn-danger">Cancel</button>
</td>
</tr>

 @endisset  

@isset($booking)
@foreach ($booking as $item)
<tr>

  <th scope="row">{{ $item->villa_guest->vguest_name}}</th>
  <td>{{ $item->villa_guest->vadress }}</td>
  
  <td>{{ $item->checkin_date }}</td>
  <td>{{ $item->checkout_date }}</td>
  <td> {!! Form::open(['route' => ['stock.destroy', $item->id], 'method'=>'DELETE']) !!}
    <button type="submit" class="btn btn-danger">Cancel</button>
</td>

</tr>
@endforeach
@endisset
</div>
</div>
@endsection