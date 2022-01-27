@extends('layouts.app')
@section('content')


{!! Form::open(['action' => 'App\Http\Controllers\villa_bookingcontroller@store', 'methode'=>'POST' ]) !!}
    <div class="mycenterclass" >  
<div class="booking-form">
    <form>
        <div class="form-group">
          
            <select name="villa_city" class="form-select" aria-label="Default select example" id="">
                
                @foreach ($villas as $villa)
                <option class="form-control"  value="{{ $villa->city }}"> {{ $villa->city }} </option>
                @endforeach
            </select>
           
  
         
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <span class="form-label">Check In</span>
                    <input class="form-control" type="date" name="checkin" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <span class="form-label">Check out</span>
                    <input class="form-control" type="date" name="checkout"  required>
                </div>
            </div>
        </div>
        
     
</div>   
</div>
<div class="mb-3 m-3 mx-auto " style="width: 40%;" >     
    {{Form::submit('Submit', ['class'=>'btn btn-primary   '  ])}}
    </div>
    {!! Form::close() !!}
    
@endsection