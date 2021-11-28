<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\booktourmodel;
class BookTour extends Controller
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
     // $this->middleware('auth');

       if (isset(Auth::user()->id)) {
          # code...
          $data=[
            'id_book_tour'=>'B'.$request->tour_code.'-'.Auth::user()->id.'-'.$request->tour_id.'-'.rand(10,100).'-'.date('Y-m-d'),
            'number_of_adults'=>$request->adults,
            'number_of_children'=>$request->children,
            'sum_money'=>$request->summoney,
            'date_book'=>$request->date_start,
           
            'thanhtoan'=>'no',
            'user_id'=>Auth::user()->id,
            'tour_id'=>$request->tour_id,
        ];
      
      booktourmodel::create($data);

      $mail=new MailController();
    $mail->Booktourmail(Auth::user()->email,'B'.$request->tour_code.'-'.Auth::user()->id.'-'.$request->tour_id.'-'.rand(10,100).'-'.date('Y-m-d'),$request->name_tour);

    $data=[
        'nametour'=>$request->name_tour,
    ];
    return view('Thankyou')->with('data',$data);
      }
      else{
          return redirect('/login');
      }

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
       booktourmodel::where('id', $id)->update([
           'thanhtoan'=>'yes'
       ]);
       return redirect()->back();
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
       booktourmodel::where('tour_id', $id)
       ->where('date_book',$request->departure_day)->update(
           [
            'thanhtoan'=>'yes'
           ]
       );
       return redirect()->back();
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
