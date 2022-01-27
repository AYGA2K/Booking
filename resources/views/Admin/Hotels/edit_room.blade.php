@extends('layouts.app')
@section('content')
    {!! Form::open(['action' => 'App\Http\Controllers\roomcontroller@store', 'methode'=>'POST' ]) !!}
    {!! csrf_field() !!}
    @method("PATCH")
    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >
        {{Form::label('type', 'type')}}
        {{Form::text('type',  $room->type , ['class' => 'form-control'])}}
    </div>
    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >
        {{Form::label('price', 'price')}}
        {{Form::text('price', $room->price, ['class' => 'form-control'])}}
    </div>
    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >
        {{Form::label('status', 'status')}}
        {{Form::text('status', $room->status, ['class' => 'form-control'])}}
    </div>
    
    
    

    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >     
    {{Form::submit('Submit', ['class'=>'btn btn-primary   '  ])}}
    </div>
    {!! Form::close() !!}
    

    @endsection