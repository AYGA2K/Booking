@extends('layouts.app')
@section('content')


{!! Form::open(['action' => 'App\Http\Controllers\hotel_bookingcontroller@store', 'methode'=>'POST' ]) !!}
    <div class="mycenterclass" >  
<div class="booking-form">
    <form>
        <div class="form-group">
          
            <select name="hotel_city" class="form-select" aria-label="Default select example" id="">
                
                @foreach ($hotels as $hotel)
                <option class="form-control"  value="{{ $hotel->city }}"> {{ $hotel->city }} </option>
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