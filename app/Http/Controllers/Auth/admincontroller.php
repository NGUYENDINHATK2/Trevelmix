<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tour;
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
      return view('layoutadmin.index');
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
        <td>' . $data->name_tour . '</td>
        <td>
            <img src="' . $data->Img_tour->img1 . '" width="250px;" alt="">
        </td>
        <td>' . $data->departure_day . '</td>
        <td>' . $data->status . '</td>
        <td class="text-center">
                                <button href="" class="btn btn-warning">Sửa </button>
                               
                            </td>
                            <td>
                                <button href="" id="delete" onclick="test()" class="btn btn-danger">Xoá</button>
                            </td>
                            <td>
                                <button  class="btn btn-success" id="details" >Xem Chi Tiết</button>

                            </td>
      </tr>
      ';
    }
    return response()->json($output);
  }
}
