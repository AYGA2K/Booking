

 
   
@extends('layouts.app')
@section('content')

<div class=" d-grid gap-3" >  
<h1 class="text-primary fs-1 p-2   " style="text-align: center; " > {{ $villas->name }} </h1>

<div  class="p-2 bg-light border  " >   
   
<div class="card-body">
       
      
        
 
        <tr class=" table-secondary  ">
        <td> <img src="{{ asset($villas->photo) }}" alt="{{ $villas->name }}"> </td>
        
        <h5 class="card-title">Name : {{ $villas->name }}</h5>
        <p class="card-text">city : {{ $villas->city }}</p>
        <p class="card-text">Addresse : {{ $villas->address }}</p>
          <td> @if (  $villas->status )  availlable  
         
              
          @else
              Not availlable from 
              @foreach ($booking as $item)
              @if ($item->villa->id==$villa->id)
                  {{ $item->checkin_date }}

                  to {{$item->checkout_date}}
              @endif
              @endforeach
           
          @endif
         
  

@endsection

