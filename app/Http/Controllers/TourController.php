<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
       
    
        // dd($request->numberday);

        $tours = Tour::where('name_tour', 'LIKE', '%' . $request->text_search . '%')
        ->Where('price_adults', '<=', $request->money  )
        ->Where('receiving_address','LIKE', '%' . $request->address_start . '%')
        ->where('time_tour',$request->numberday)
        ->where('status','Hoạt Động')
       
        ->Paginate(15);
        
        return view('toursearchresults')->with('tours',$tours);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        
        $data=Tour::where('id',$id)->first();
       
        return view('showtour')->with('data',$data);
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

        $data=Tour::where('id',$id)->first();
        
        return  view('layoutadmin.edittour')->with('data', $data);
    
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
        //
    }

}
