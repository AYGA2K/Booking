<?php

namespace App\Http\Controllers;

use App\Models\Hotel_booking;
use App\Models\Villa_booking;
use Illuminate\Support\Facades\DB;
use App\Models\Hotels;
use App\Models\Villas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashbordController extends Controller
{
   public function index()
   {
       if ( Auth::user()->hasRole('user') ) {
           return  view('User.home') ;
       }
       elseif (Auth::user()->hasRole('admin')) {
        $villas=Villas::all();
        $hotels=Hotels::all();

           return view('Admin.home')->with('hotels',$hotels)->with('villas',$villas);
       }
     
   }

   public function profile(){
       
    $hotel_booking=Hotel_booking::all();
    $booking=Villa_booking::all();
       return view('User.booking')->with('booking', $booking) ->with('hotel_booking',$hotel_booking) ;
      }



      
   public function profilee(){
       
    $villa_booking=Villa_booking::all();
       return view('User.booking')->with('villa_booking',$villa_booking) ;
      }



      
      public function stays(){
        
          $hotels=DB::table('hotels')->select('city')->distinct()->get();
          
        return view('User/Hotels.index')->with('hotels',$hotels);
       }




       public function stayss(){
        
        $villas=DB::table('villas')->select('city')->distinct()->get();
        
      return view('User/Villas.index')->with('villas',$villas);
     }


       public function contact(){
        return view('User.contact');
       }

     

       public function about(){
        return view('User.about');
       }



       
}
