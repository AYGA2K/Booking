@extends('layouts.app')
@section('content')

 
<table class="table-responsive  ">
   
    <table class="table table-light table-hover  "  >

        <thead>
            <tr>
                <th>Name</th>
                <th>City</th>
                <th>Image</th>
                <th>Actions</th>
                <th></th>
               
            </tr>
        </thead>
        <tbody table-hover >
        
          @foreach ($hotels  as $hotel)
              <tr>
                  <td>{{ $hotel->name }}</td>
                  <td>{{ $hotel->city }}</td>
                  <td> <img src="{{ asset($hotel->photo) }}" alt="{{ $hotel->name }}"> </td>
                 
                  <td  > <a type="button"  href=" {{route('Hotels.show', $hotel->id)}}" class="btn btn-info btn-sm ">Show</a> 
                  <a type="button" href=" {{route('Hotels.edit', $hotel->id)}}" class="btn btn-info btn-sm ">Edit</a></td>
                  
                <td> {!! Form::open(['route' => ['Hotels.destroy', $hotel->id], 'method'=>'DELETE']) !!}
                    <button type="submit" class="btn btn-danger">Delete</button>
                    {!! Form::close() !!} </td>  
                </tr>
                  @endforeach
         
       

        </tbody>

    </table>
    
</table>
<a  style="margin-left: 90%"  type="button"  href=" {{ route ('Hotels.create') }} " class="btn btn-primary">Add a Hotel </a>
    
@endsection