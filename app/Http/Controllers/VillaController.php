<?php

namespace App\Http\Controllers;
use App\Models\Villas;
use Illuminate\Http\Request;

class villaController extends Controller
{
   
    public function index()
    {
        $villas=Villas::all();
        return  view('Admin/Villas.index')->with('villas',$villas) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/Villas.create');
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
       'address'=>'required'
       

        ]);
         $a= new Villas();
        
         $a->name=$request->input('name');
         $a->city=$request->input('city');
         $a->address=$request->input('address');
         $a->photo=$request->input('photo');
         $a->save();
        return redirect('Villas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        $villa=Villas::find($id);
        return view ('Admin/Villas.show')->with('villas',$villa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $villa = Villas::find($id);
        return view('Admin/Villas.edit')->with('villa', $villa);
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
            'address'=>'required  ',
            'photo'=>'required'
             ]);
             $a= Villas::find($id);
             $a->name=$request->input('name');
             $a->city=$request->input('city');
             $a->address=$request->input('address');
             $a->photo=$request->input('photo');
             $a->save();
             
             
             return    redirect()->route('Villas.index')->with('success', 'villa updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Villas::destroy($id);
        return redirect()->route('Villas.index')->with('flash_message', 'villa deleted!');
    }
}
