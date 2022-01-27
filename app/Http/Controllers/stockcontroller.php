<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\villa_guest;
use App\Models\Villa_booking;
use App\Models\Villas;
use App\Models\Guest;
use App\Models\Hotel_booking;
use App\Models\Rooms;
use Carbon\Carbon;
use Illuminate\Database\Events\TransactionBeginning;
use Illuminate\Http\Request;

class stockController extends Controller
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
            'villa_id'=>'',
            'name'=>'required',
           'adress'=>'required',
           'checkin'=>'',
           'checkout'=>'',
             ]);
             $data = $request->all();
         
            $villa_guest= new villa_guest();
            $villabooking=new villa_booking();
             $villa_guest->vguest_name=$request->input('name');
             $villa_guest->vadress=$request->input('adress');
            $villa_guest->save();
            
            $villabooking->villaid=$request->input('villa_id');
             $villabooking->vguestid=$villa_guest->id;
           
            $villabooking->checkin_date=$request->input('checkin');
            $villabooking->checkout_date=$request->input('checkout');
            $villabooking->save();
            $booking=Villa_booking::all();
            $hotel_booking=Hotel_booking::all();
            return view('User.booking')->with('villabooking',$villabooking)->with('booking',$booking)->with('hotel_booking',$hotel_booking);
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
        Villa_booking::destroy($id);
        
        $hotel_booking=Hotel_booking::all();
        $booking=Villa_booking::all();
        return view('User.booking')->with('hotel_booking',$hotel_booking)->with('booking',$booking);
        
    }
}
