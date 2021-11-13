<?php

namespace App\Http\Controllers;
use App\Models\Tour;
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
        $datas=Tour::all();
        $tournew=Tour::orderBy('created_at','desc')->limit(3)->get();
    
        
       
       return view('index')
       ->with('datas', $datas)
       ->with('tournew', $tournew)
       ;
    }
}
