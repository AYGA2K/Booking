@extends('layouts.app')
@section('content')
 
<table class="table-responsive  ">

    <h1 class="text-primary fs-1 p-2   " style="text-align: center; " > Hotels </h1>
   
    <table class="table table-light table-hover  " style="width: 40%; margin-left:30% "    >

        <thead>
            <tr>
                <th>Name</th>
                <th>City</th>
          
               
            </tr>
        </thead>
        <tbody table-hover >
        
          @foreach ($hotels  as $hotel)
              <tr>
                  <td>{{ $hotel->name }}</td>
                  <td>{{ $hotel->city }}</td>
                
                  @endforeach
         
       

        </tbody>
    
</table>

 
<table class="table table-light table-hover  " style="width: 40%; margin-left:30% "  >
    <h1 class="text-primary fs-1 p-2   " style="text-align: center; " > Villas </h1>

    <thead>
        <tr>
            <th>Name</th>
            <th>City</th>
          
        </tr>             
    </thead>
    <tbody table-hover >
    
      @foreach ($villas  as $villa) 
          <tr>
              <td>{{ $villa->name }}</td>
              <td>{{ $villa->city }}</td>
            
              

              @endforeach
     
   

    </tbody>

</table>


    
@endsection     