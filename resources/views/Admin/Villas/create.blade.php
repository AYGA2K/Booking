@extends('layouts.app')
@section('content')

    {!! Form::open(['action' => 'App\Http\Controllers\VillaController@store', 'methode'=>'POST' ]) !!}
    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >
        {{Form::label('name', 'name')}}
        {{Form::text('name', '', ['class' => 'form-control'])}}
    </div>
    <div class="mb-3 m-3 mx-auto " style="width: 40%;"  >
        {{Form::label('city', 'city')}}
        {{Form::text('city', '', ['class' => 'form-control'])}}
    </div>
    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >
        {{Form::label('address', 'address')}}
        {{Form::text('address', '', ['class' => 'form-control'])}}
    </div>
    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >
        {{Form::label('photo', 'photo')}}
        {{Form::text('photo', '', ['class' => 'form-control'])}}

    </div>
    
    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >     
    {{Form::submit('Submit', ['class'=>'btn btn-primary   '  ])}}
    </div>
    {!! Form::close() !!}
    
    @endsection

