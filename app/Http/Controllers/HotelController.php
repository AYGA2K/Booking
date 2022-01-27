<?php

namespace App\Http\Controllers;

use App\Models\Hotel_booking;
use App\Models\Hotels;
use App\Models\Rooms;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    
   public function index()
    {
        $hotels=Hotels::all();
        return  view('Admin/Hotels.index')->with('hotels',$hotels) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/Hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'name'=>'required',
       'city'=>'required',
       'photo'=>'required'
       

        ]);
         $a= new Hotels();
        
         $a->name=$request->input('name');
         $a->city=$request->input('city');
         $a->photo=$request->input('photo');
         $a->save();
        return redirect('Hotels');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        $hotel=Hotels::find($id);
       $booking=Hotel_booking::all();
        return view ('Admin/Hotels.show')->with('hotel',$hotel)->with('booking',$booking);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotel = Hotels::find($id);
        return view('Admin/Hotels.edit')->with('hotel', $hotel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
           'city'=>'required  ',
           'photo'=>'required'
          
    
            ]);
             $a= Hotels::find($id);
             $a->name=$request->input('name');
             $a->city=$request->input('city');
             $a->photo=$request->input('photo');
            
             $a->save();
             
             
             return redirect()->route('Hotels.index')->with('success', 'hotel updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hotels::destroy($id);
        return redirect()->route('Hotels.index')->with('flash_message', 'hotel deleted!');
    }
}
