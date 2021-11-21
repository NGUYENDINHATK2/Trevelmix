<?php

namespace App\Http\Controllers;
use App\Models\Tour;
use App\Models\User;
use App\Models\Banner;
use App\Models\booktourmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $datas=Tour::where('status','Hoạt Động')->orderBy('created_at','asc')->limit(6)->get();
        $tournew=Tour::where('status','Hoạt Động')->orderBy('created_at','desc')->limit(3)->get();
    
        $banners=Banner::where('show','Yes')->orderBy('created_at','desc')->limit(4)->get();
       
       return view('index')
       ->with('datas', $datas)
       ->with('tournew', $tournew)
       ->with('banners',$banners);
       
    }
    public function personal(){

        $data=User::find(Auth::user()->id);
        $booktours1=booktourmodel::where('user_id',Auth::user()->id)->orderBy('created_at','desc')->get();
      
        $booktour2=[];
        $booktour3=[];
        $booktour4=[];

       foreach($booktours1 as $tour){
        if ($tour->Tour->status_tour=='Chưa Khởi Hành') {

           $booktour2[]=$tour;
            # code...
        }
        if ($tour->Tour->status_tour=='Đang Trải Nghiệm') {

            $booktour3[]=$tour;
             # code...
         }
         if ($tour->Tour->status_tour=='Hoàn Thành') {

            $booktour4[]=$tour;
             # code...
         }
       }

     

        return view('personal')->with('data',$data)
        ->with('booktours2',$booktour2)
        ->with('booktours3',$booktour3)
        ->with('booktours4',$booktour4);
    }

  
}
