

@extends('layouts.app')
@section('content')
            
                   
                   <div class="d-flex justify-content-around">
                 
                   @foreach ($villas as $villa)
               
                    @if ($villa->city==$input['villa_city'])
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset($villa->photo) }}" alt="{{ $villa->name }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title" id="villa_name" >{{ $villa->name }}</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
     
                          <button class="btn btn-primary card-button-margin " onclick="getvalue()" id="villa" name="villa" value="{{ $villa->id}}"data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Select</button>
                        </div>
                      </div>
                    @endif 
                    @endforeach
               
            </div>

         
         
            <div class="collapse" id="collapseExample">
                <div class="card card-body">

                {!! Form::open(['action' => 'App\Http\Controllers\stockcontroller@store', 'methode'=>'POST' ]) !!}                    <div class="mb-3 m-3 mx-auto d-none " style="width: 40%;" >
                        <label for="">villaid</label>
                        <input type="text"  name="villa_id" id="villaid_input" value="" class="form-control" >
                    </div>
                    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >
                      <label for="">Fullname</label>
                      <input type="text"  name="name" class="form-control" >
                    </div>
                    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >
                        <label for="">Adress</label>
                        <input type="text"  name="adress" class="form-control" >
                      </div>
                   
                    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >
                        <label for="">Villa</label>
                        <select class="form-select" style="color: blue"  name="villa_id" aria-label="Default select example">
                          @foreach ($villas as $villa)
                          @if ($villa->city==$input['villa_city'])
                          <option   value=" {{$villa->id}} ">  {{ $villa->name }} </option>
                          @endif
                          @endforeach
                          </select>
                      </div>
               
                    <div class="mb-3 m-3 mx-auto  d-none " style="width: 40%;" >
                        <label for="">Checkin</label>
                        <input type="text" id="date" name="checkin" value="{{$input['checkin']}}"   class="form-control" >
                    </div>
                    <div class="mb-3 m-3 mx-auto  d-none " style="width: 40%;" >
                        <label for="">Checkout</label>
                        <input type="text"  name="checkout" value="{{$input['checkout']}}"  class="form-control" >
                      
                    </div>
                   
                    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >     
                    {{Form::submit('Submit', ['class'=>'btn btn-primary   '  ])}}
                    </div>
                    {!! Form::close() !!}
                    
                </div>
              </div>

              
              <script>               
                 function getvalue() {
                    var villa_id= document.getElementById('villa').value;
                  var villa= document.getElementById('villa_name').textContent;
                  document.getElementById('villa_input').value=villa;
                  document.getElementById('villaid_input').value=villa_id;
                 }
                 


              </script>
    
@endsection


