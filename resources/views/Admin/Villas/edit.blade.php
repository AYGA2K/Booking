

    @extends('layouts.app')
@section('content')
    {!! Form::open(['action' => ['App\Http\Controllers\VillaController@update',$villa->id], 'methode'=>'POST' ]) !!}
    {!! csrf_field() !!}
    @method("PATCH")
    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >
        {{Form::label('name', 'name')}}
        {{Form::text('name', $villa->name, ['class' => 'form-control'])}}
    </div>
    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >
        {{Form::label('city', 'city')}}
        {{Form::text('city', $villa->city, ['class' => 'form-control'])}}
    </div>
    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >
        {{Form::label('address', 'address')}}
        {{Form::text('address', $villa->address, ['class' => 'form-control'])}}  
    </div>
    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >
        {{Form::label('photo', 'photo')}}
        {{Form::text('photo', $villa->photo, ['class' => 'form-control'])}}
    </div>
    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >     
    {{Form::submit('update', ['class'=>'btn btn-primary   '  ])}}
    </div>
    {!! Form::close() !!}
    

    @endsection