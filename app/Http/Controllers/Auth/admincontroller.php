<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tour;
use App\Models\Booktour;

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

    if (Auth::user()->is_Admin == 0 || Auth::user()->is_Admin == 1) {


      $numberuser=User::count('id');

      $numbertour=Tour::count('id');

      $numberbuy=Booktour::count('id');
      
     

      return view('layoutadmin.index')->with('numberuser',$numberuser)
      ->with('numbertour',$numbertour)
      ->with('numberbuy',$numberbuy);
      # code...
    } else
      return view('index');
  }
  public function manageruser()
  {
    //
    // $user=User::orderBy('ID', 'desc')->limit(1)->first();
    // dd( $user->id);
    if (Auth::user()->is_Admin == 0 || Auth::user()->is_Admin == 1) {
      return view('layoutadmin.ManagerUser');
      # code...
    } else
      return view('index');
  }

  public function tour()
  {
    //

    // $user=User::orderBy('ID', 'desc')->limit(1)->first();
    // dd( $user->id);

    if (Auth::user()->is_Admin == 0 || Auth::user()->is_Admin == 1) {





      return view('layoutadmin.admintour');
      # code...
    } else
      return view('index');
  }

  
  public function listtour()
  {
    //

    // $user=User::orderBy('ID', 'desc')->limit(1)->first();
    // dd( $user->id);

    if (Auth::user()->is_Admin == 0 || Auth::user()->is_Admin == 1) {


      $datas = Tour::Paginate(4);


      return view('layoutadmin.listtour')->with('datas', $datas);
      # code...
    } else
      return view('index');
  }
  public function search_tour(Request $request)
  {
    $output = '';
    $tous = Tour::where('name_tour', 'LIKE', '%' . $request->keyword . '%')
      ->orWhere('tour_code', 'LIKE', '%' . $request->keyword . '%')
      ->orWhere('departure_day',   $request->keyword)
      ->Paginate(4);


    foreach ($tous as $data) {
      $output .= '
        <tr>
        <td scope="row">' . $data->tour_code . '</td>
        <td style="max-width: 250px;">' . $data->name_tour . '</td>
        <td>
            <img src="' . $data->Img_tour->img1 . '" width="250px;" alt="">
        </td>
        <td>' . $data->departure_day . '</td>
        <td>' . $data->status . '</td>
        <td class="text-center">
        <a href=" /tour/'.$data->id.'/edit" class="btn btn-warning">Sửa </a>
       
    </td>
    <td>
        <button href="" id="delete" onclick="deletetour('.$data->id.')" class="btn btn-danger">Xoá</button>
    </td>
    <td>
        <a  class="btn btn-success" href="/tour/'.$data->id.'" id="details" > Chi Tiết</a>

    </td>
      </tr>
      ';
    }
    return response()->json($output);
  }
}
