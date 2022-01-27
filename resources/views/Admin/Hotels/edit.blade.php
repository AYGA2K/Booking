@extends('layouts.app')
@section('content')
    {!! Form::open(['action' => ['App\Http\Controllers\HotelController@update',$hotel->id], 'methode'=>'POST' ]) !!}
    {!! csrf_field() !!}
    @method("PATCH")
    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >
        {{Form::label('name', 'name')}}
        {{Form::text('name', $hotel->name, ['class' => 'form-control'])}}
    </div>
    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >
        {{Form::label('city', 'city')}}
        {{Form::text('city', $hotel->city, ['class' => 'form-control'])}}
    </div>
    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >
        {{Form::label('photo', 'photo')}}
        {{Form::text('photo', $hotel->photo, ['class' => 'form-control'])}}
    </div>
   
    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >     
    {{Form::submit('Submit', ['class'=>'btn btn-primary   '  ])}}
    </div>
    {!! Form::close() !!}
    

    @endsection