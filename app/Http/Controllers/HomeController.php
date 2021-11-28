<?php

namespace App\Http\Controllers;
use App\Models\Tour;
use App\Models\User;
use App\Models\Banner;
use App\Models\booktourmodel;
use App\Models\infouser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UploadImgDrive;

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
        $tour = Tour::all();

        $tourtodays = Tour::where('departure_day', 'LIKE',  '%' . date('Y-m-d') . '%')->get();
  
        foreach ($tourtodays as $tour) {
          Tour::where('id', $tour->id)->update([
            'status_tour' => 'Đang Trải Nghiệm',
          ]);
        }
  
        $tourends = Tour::where('status_tour', 'Đang Trải Nghiệm')->get();
  
        foreach ($tourends as $tour) {
          $date = date('Y-m-d');
  
          //dd(date('Y-m-d', strtotime($tour->departure_day. ' + 1 days')));
          if ($tour->time_tour == '1 N 1 D') {
            if ($date == date('Y-m-d', strtotime($tour->departure_day . ' + 2 days'))) {
  
              # code...
              Tour::where('id', $tour->id)->update([
                'status_tour' => 'Hoàn Thành',
              ]);
            }
          }
          if ($tour->time_tour == '2 N 1 D') {
            if ($date == date('Y-m-d', strtotime($tour->departure_day . ' + 3 days'))) {
  
              # code...
              Tour::where('id', $tour->id)->update([
                'status_tour' => 'Hoàn Thành',
              ]);
            }
          }
          if ($tour->time_tour == '3 N 2 D') {
            if ($date == date('Y-m-d', strtotime($tour->departure_day . ' + 4 days'))) {
  
              # code...
              Tour::where('id', $tour->id)->update([
                'status_tour' => 'Hoàn Thành',
              ]);
            }
          }
          if ($tour->time_tour == '4 N 3 D') {
            if ($date == date('Y-m-d', strtotime($tour->departure_day . ' + 5 days'))) {
  
              # code...
              Tour::where('id', $tour->id)->update([
                'status_tour' => 'Hoàn Thành',
              ]);
            }
          }
          if ($tour->time_tour == '5 N 4 D') {
            if ($date == date('Y-m-d', strtotime($tour->departure_day . ' + 6 days'))) {
  
              # code...
              Tour::where('id', $tour->id)->update([
                'status_tour' => 'Hoàn Thành',
              ]);
            }
          }
          if($tour->time_tour=='6 N 5 D'){
            if ($date==date('Y-m-d', strtotime($tour->departure_day. ' + 7 days'))) {
             
              # code...
              Tour::where('id',$tour->id)->update([
                'status_tour' =>'Hoàn Thành',
               ]);
            }
        }
        }

   
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

      // if ('2021-11-01'<'2021-11-03' && '2021-11-01'>'2021-10-29') {
      //   dd('ss');
      //   # code...
      // }
      $data=  infouser::where('user_id', Auth::user()->id)->first();
        if ($data==null) {

         return view('auth.register1');
          # code...
        }
        else{
          $data=User::find(Auth::user()->id);
        $booktours1=booktourmodel::where('user_id',Auth::user()->id)->orderBy('created_at','desc')->get();
      
        $booktour2=[];
        $booktour3=[];
        $booktour4=[];

       foreach($booktours1 as $tour){

        
        if ($tour->Tour->status_tour=='Chưa Khởi Hành' ) {

           $booktour2[]=$tour;
            # code...
        }
        if ($tour->Tour->status_tour=='Đang Trải Nghiệm') {

            $booktour3[]=$tour;
             # code...
         }
         if ($tour->Tour->status_tour=='Hoàn Thành' ) {

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
    public function addinfouser(Request $request){
     
      $upimg=new UploadImgDrive();

    
     infouser::create([
        'date'=>$request->datea,
        'address'=>$request->address,
        'phonenumber'=>$request->phonenumber,
        'avatar'=>$upimg->save($request->avatar),
        'user_id' =>Auth::user()->id,
      ]);
      return redirect()->back();
    }

  
}
