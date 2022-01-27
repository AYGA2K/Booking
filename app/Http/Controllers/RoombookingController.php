<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Guest;
use App\Models\Hotel_booking;
use App\Models\Rooms;
use App\Models\Villa_booking;
use Carbon\Carbon;
use Illuminate\Database\Events\TransactionBeginning;
use Illuminate\Http\Request;

class RoombookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'hotel_id'=>'',
            'name'=>'required',
           'adress'=>'required',
           'checkin'=>'',
           'checkout'=>'',
            ]);
            $data = $request->all();
           $room=Rooms::find($request->input('room_id'));
           $room->status=0;
           $room->save();
            $guest= new Guest();
            $hotelbooking=new Hotel_booking();
             $guest->guest_name=$request->input('name');
             $guest->adress=$request->input('adress');
            $guest->save();
            $hotelbooking->hotel_id=$request->input('hotel_id');
            $hotelbooking->guest_id=$guest->id;
            $hotelbooking->room_id=$request->input('room_id');
            $hotelbooking->checkin_date=$request->input('checkin');
            $hotelbooking->checkout_date=$request->input('checkout');
             $hotelbooking->save();
             $hotel_booking=Hotel_booking::all();
            return view('User.booking')->with('room',$room)->with('hotelbooking',$hotelbooking)->with('hotel_booking',$hotel_booking);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hotel_booking::destroy($id);
        $hotel_booking=Hotel_booking::all();
        $booking=Villa_booking::all();
        return view('User.booking')->with('hotel_booking',$hotel_booking)->with('booking',$booking);
    }
}
