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
        $data=[
            'id_book_tour'=>'TVVN-'.date('Y-m-d').'-'.Auth::user()->id,
            'number_of_adults'=>$request->adults,
            'number_of_children'=>$request->children,
            'sum_money'=>$request->summoney,
            'date_book'=>date('Y-m-d'),
            'thanhtoan'=>'no',
            'user_id'=>Auth::user()->id,
            'tour_id'=>$request->tour_id,
        ];
      
      booktourmodel::create($data);

      $mail=new MailController();
    $mail->Booktourmail(Auth::user()->email,'TVVN-'.date('Y-m-d').'-'.Auth::user()->id,$request->name_tour);
    return view('Thankyou');

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
        //
    }
}
