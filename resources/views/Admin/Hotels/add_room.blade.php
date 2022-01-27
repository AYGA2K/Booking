@extends('layouts.app')
@section('content')
    {!! Form::open(['action' => 'App\Http\Controllers\roomcontroller@store', 'methode'=>'POST' ]) !!}
  
    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >
        {{Form::label('type', 'type')}}
        {{Form::text('type', '', ['class' => 'form-control'])}}
    </div>
    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >
        {{Form::label('price', 'price')}}
        {{Form::text('price', '', ['class' => 'form-control'])}}
    </div>
    
    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >
        {{Form::label('Hotel', 'Hotel')}}
        {{ Form::select('hotel_id',$hotels,null, ['class' => 'form-control', 'id' => 'hotel_id'])}}
    </div>
    

    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >     
    {{Form::submit('Submit', ['class'=>'btn btn-primary   '  ])}}
    </div>
    {!! Form::close() !!}
    

    @endsection