<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class admincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        // $user=User::orderBy('ID', 'desc')->limit(1)->first();
        // dd( $user->id);
       
        if (Auth::user()->is_Admin==0||Auth::user()->is_Admin==1) {
        return view('layoutadmin.index');
          # code...
      }
      else
      return view('index');
    }


    public function tour()
    {
        //

        // $user=User::orderBy('ID', 'desc')->limit(1)->first();
        // dd( $user->id);
       
        if (Auth::user()->is_Admin==0||Auth::user()->is_Admin==1) {
        return view('layoutadmin.admintour');
          # code...
      }
      else
      return view('index');
    }
    public function hotel()
    {
        //

        // $user=User::orderBy('ID', 'desc')->limit(1)->first();
        // dd( $user->id);
       
        if (Auth::user()->is_Admin==0||Auth::user()->is_Admin==1) {
        return view('layoutadmin.adminhotel');
          # code...
      }
      else
      return view('index');
    }
    
}
