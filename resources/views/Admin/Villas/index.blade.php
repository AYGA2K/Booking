@extends('layouts.app')
@section('content')

 
<table class="table-responsive  ">
   
    <table class="table table-light table-hover  "  >

        <thead>
            <tr>
                <th>Name</th>
                <th>City</th>
                <th>address</th>
                <th>image</th> 
            </tr>             
        </thead>
        <tbody table-hover >
        
          @foreach ($villas  as $villa) 
              <tr>
                  <td>{{ $villa->name }}</td>
                  <td>{{ $villa->city }}</td>
                  <td>{{ $villa->address }}</td>
                  
                  <td> <img src="{{ asset($villa->photo) }}" alt="{{ $villa->name }}"> </td>
                  <td  > <a type="button"  href=" {{route('Villas.show', $villa->id)}}" class="btn btn-info btn-sm ">Show</a> </td> 
                  <td><a type="button" href=" {{route('Villas.edit', $villa->id)}}" class="btn btn-info btn-sm ">Edit</a></td>
                  
                <td> {!! Form::open(['route' => ['Villas.destroy', $villa->id], 'method'=>'DELETE']) !!}
                    <button type="submit" class="btn btn-danger" onclick="return confirm(&quot;confirm delete?&quot;)">Delete</button>
                    {!! Form::close() !!} </td>  
                </tr>
                  @endforeach
         
       

        </tbody>

    </table>
    
  
    <a  style="margin-left: 90%" type="button"  href=" {{ route ('Villas.create') }} " class="btn btn-primary">Add a Villa </a>


    
@endsection















