<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UploadImgDrive;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
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
        $upimg=new UploadImgDrive();

       $linkimg=$upimg->save($request->img);

        Banner::create([
            'title'=>$request->title,
            'img'=>$linkimg,
            'tour_id'=>$request->id_tour,
        ]);
        return redirect('/admin/promotion');
        
       
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
        

        $request->validate([
            'img' => 'mimes:png,jpg,jpeg,|max:15048',
        ]);
    
        $upimg=new UploadImgDrive();
        $data=[
            'title'=>$request->title,
            'img'=>$upimg->save($request->img),
            'show'=>$request->show,
        ];
        Banner::where('id',$id)->update($data);
        return redirect()->route('banner');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    
    {
        //
    
         $banner->delete();
         return redirect()->route('banner');
    }
}
