<?php

namespace App\Http\Controllers;
use App\Models\Tour;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $datas=Tour::orderBy('created_at','asc')->limit(6)->get();
        $tournew=Tour::orderBy('created_at','desc')->limit(3)->get();
    
        $banners=Banner::orderBy('created_at','desc')->limit(4)->get();
       
       return view('index')
       ->with('datas', $datas)
       ->with('tournew', $tournew)
       ->with('banners',$banners);
       
    }
    public function personal(){

        
        return view('personal');
    }
}
