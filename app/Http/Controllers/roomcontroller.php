<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use App\Models\Rooms;
use Illuminate\Http\Request;

class roomcontroller extends Controller
{
    public function index()
    {
        $hotels=Hotels::all();
        return  view('Admin/Hotels.index')->with('hotels',$hotels) ;
    }


   
    public function create()
    {
        $hotels=Hotels::all();
        $select=[];
        foreach ($hotels as $hotel){
            $select[$hotel->id]=$hotel->name;
        }
        return view('Admin/Hotels.add_room')->with('hotels',$select);
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
        'type'=>'required',
       'price'=>'required'
       

        ]);
         $a= new Rooms();
        
         $a->type=$request->input('type');
         $a->price=$request->input('price');
         $a->hotel_id=$request->input('hotel_id');
        
         $a->save();
        return redirect('Rooms');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        $room=Rooms::find($id);
        return view ('Rooms.show')->with('room',$room);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Rooms::find($id);
        return view('Admin/Hotels.edit_room')->with('room', $room);
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
            'type'=>'required',
           'price'=>'required  ',
          'status'=>'required'
    
            ]);
             $room= Rooms::find($id);
             $room->type=$request->input('type');
             $room->price=$request->input('price');
             $room->status=$request->input('status');

            
             $room->save();
             
             
             return redirect()->route('Hotels.show')->with('success', 'room updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rooms::destroy($id);
        return redirect('Hotels')->with('flash_message', 'room deleted!');
    }
}
