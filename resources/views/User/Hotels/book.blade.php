
@extends('layouts.app')
@section('content')
            
                
                  
                   <div class="d-flex justify-content-around">
                 
                    @foreach ($hotels as $hotel)
                    @if ($hotel->city==$input['hotel_city'])
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset($hotel->photo) }}" alt="{{ $hotel->name }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title" id="hotel_name" >{{ $hotel->name }}</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
     
                          <button class="btn btn-primary card-button-margin " onclick="getvalue()" id="hotel" name="hotel" value="{{ $hotel->id}}"data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Select</button>
                        </div>
                      </div>
             
                      
                    @endif
                    @endforeach
               
                   </div>
        
            <div class="collapse" id="collapseExample">
                <div class="card card-body">

                    {!! Form::open(['action' => 'App\Http\Controllers\RoombookingController@store', 'methode'=>'POST' ]) !!}
                    <div class="mb-3 m-3 mx-auto d-none " style="width: 40%;" >
                        <label for="">Hotelid</label>
                        <input type="text"  name="hotel_id" id="hotelid_input" value="" class="form-control" >
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
                        <label for="">Hotel</label>
                        <input type="text"  name="hotel" id="hotel_input" value="" class="form-control" aria-label="Disabled input example" disabled readonly >
                    </div>
               
                    <div class="mb-3 m-3 mx-auto  d-none " style="width: 40%;" >
                        <label for="">Checkin</label>
                        <input type="text" id="date" name="checkin" value="{{$input['checkin']}}"   class="form-control" >
                    </div>
                    <div class="mb-3 m-3 mx-auto  d-none " style="width: 40%;" >
                        <label for="">Checkout</label>
                        <input type="text"  name="checkout" value="{{$input['checkout']}}"  class="form-control" >
                    </div>
                    <div class="mb-3 m-3 mx-auto   " style="width: 40%;" >
                        <select class="form-select" style="color: blue"  name="room_id" aria-label="Default select example">
                          @foreach ($rooms as $room)
                          <option   value=" {{$room->id}} "> room number: {{ $room->id }}  price {{$room->price}} type {{ $room->type }} </option>
                          @endforeach
                          </select>
                    </div>
                    <div class="mb-3 m-3 mx-auto " style="width: 40%;" >     
                    {{Form::submit('Submit', ['class'=>'btn btn-primary   '  ])}}
                    </div>
                    {!! Form::close() !!}
                    
                </div>
              </div>
 

              <script>
                 function getvalue() {
                    var hotel_id= document.getElementById('hotel').value;
                  var hotel= document.getElementById('hotel_name').textContent;
                  document.getElementById('hotel_input').value=hotel;
                  document.getElementById('hotelid_input').value=hotel_id;
                 }
                 


              </script>
    
@endsection