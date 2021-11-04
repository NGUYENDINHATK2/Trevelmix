<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;

use App\Http\Controllers\UploadImgDrive;
use App\Models\imagestours;
use App\Models\tour_details;

class TourApi extends Controller
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
        $request->validate([
          
            'img1' => 'required|mimes:png,jpg,jpeg,|max:15048',
            'img2' => 'required|mimes:png,jpg,jpeg,|max:5048',
            'img3' => 'required|mimes:png,jpg,jpeg,|max:5048',
            'img4' => 'required|mimes:png,jpg,jpeg,|max:5048',
            'img5' => 'required|mimes:png,jpg,jpeg,|max:5048',
            'img6' => 'required|mimes:png,jpg,jpeg,|max:5048',
            'img7' => 'required|mimes:png,jpg,jpeg,|max:5048',
            'img8' => 'required|mimes:png,jpg,jpeg,|max:5048',
            'img9' => 'required|mimes:png,jpg,jpeg,|max:5048',
            'img10' => 'required|mimes:png,jpg,jpeg,|max:5048',


            'title'=>'required',
            'description'=>'required',
            'experience_tour'=>'required',
            'title_day_1'=>'required',
            'description_day_1'=>'required',
            'title_day_2'=>'required',
            'description_day_2'=>'required',
            'title_day_3'=>'required',
            'description_day_3'=>'required',
            'title_day_back'=>'required',
            'description_day_back'=>'required',
            
        ]);

        $sale=$request->sale;
        $gift= $request->gift;
      if (  $request->sale=='') {
          $sale='0%';
          # code...
      }
      if (  $request->gift=='') {
        $gift='no';
        # code...
    }

      
        $datatour = [
            'name_tour' => $request->name_tour,
            'time_tour' => $request->time_tour,
            'price_adults' => $request->price_adults,
            'price_children' => $request->price_children,
            'sale' => $sale,
            'gift' => $gift,
            'departure_day' => $request->departure_day,
            'receiving_address' => $request->receiving_address,
        ];
       // dd($request->img1->extension());
        Tour::create($datatour);
        $id_tour = Tour::orderBy('ID', 'desc')->limit(1)->first()->id;

        $upimg=new UploadImgDrive();

        $dataimg1=$upimg->save($request->img1);
        $dataimg2=$upimg->save($request->img2);
        $dataimg3=$upimg->save($request->img3);
        $dataimg4=$upimg->save($request->img4);
        $dataimg5=$upimg->save($request->img5);
        $dataimg6=$upimg->save($request->img6);
        $dataimg7=$upimg->save($request->img7);
        $dataimg8=$upimg->save($request->img8);
        $dataimg9=$upimg->save($request->img9);
        $dataimg10=$upimg->save($request->img10);
        $dataimg=[
            'img1'=>$dataimg1,
            'img2'=>$dataimg2,
            'img3'=>$dataimg3,
            'img4'=>$dataimg4,
            'img5'=>$dataimg5,
            'img6'=>$dataimg6,
            'img7'=>$dataimg7,
            'img8'=>$dataimg8,
            'img9'=>$dataimg9,
            'img10'=>$dataimg10,
            'id_img_tour'=>$id_tour
        ];
        imagestours::create($dataimg);


        $datatourdetails=[
        'title'=>$request->title,
        'description'=>$request->description,
        'experience_tour'=>$request->experience_tour,
        'title_day_1'=>$request->title_day_1,
        'description_day_1'=>$request->description_day_1,
        'title_day_2'=>$request->title_day_2,
        'description_day_2'=>$request->description_day_2,
        'title_day_3'=>$request->title_day_3,
        'description_day_3'=>$request->description_day_3,
        'title_day_back'=>$request->title_day_back,
        'description_day_back'=>$request->description_day_back,
        'tour_id'=>$id_tour,
        ];

        tour_details::create($datatourdetails);



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
