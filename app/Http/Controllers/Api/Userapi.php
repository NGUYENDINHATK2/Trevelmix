<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\booktourmodel;
use App\Models\infouser;
use App\Models\User;
use Illuminate\Http\Request;

class Userapi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        //   echo  $data->infousera[0]['address'] ;
        // $data=User::get();





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
        if ($request->is_Admin==5) {
            User::where('id', $id)->update([
                'name' => $request->name,
             
            ]);
            return redirect()->back();
            # code...
        }
       User::where('id', $id)->update([
          'name' => $request->name,
        'is_Admin'=>$request->is_Admin
      ]);
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
        booktourmodel::where('user_id', $id)->delete();
        infouser::where('user_id', $id)->delete();
        User::where('id', $id)->delete();
        return redirect('/admin/manageruser');
    }
}
