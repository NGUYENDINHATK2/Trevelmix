<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tour;
use App\Models\booktourmodel;
use App\Models\Banner;

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

      $numberbuy=booktourmodel::count('id');
      
     

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


  public function managerorder()
  {
    //
    // $user=User::orderBy('ID', 'desc')->limit(1)->first();
    // dd( $user->id);
    if (Auth::user()->is_Admin == 0 || Auth::user()->is_Admin == 1) {

      $booktours=booktourmodel::orderBy('created_at','desc')->Paginate(4);


     
      
     

      return view('layoutadmin.Managerorder')
      ->with('booktours',$booktours);
  
      
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

  public function promotion(){
    if (Auth::user()->is_Admin == 0 || Auth::user()->is_Admin == 1) {
      $baners=Banner::orderBy('created_at','desc')->get();
      // dd(Tour::find(1)->Banner_tour);
      return view('layoutadmin.promotion')->with('baners',$baners);
      # code...
    } else
      return view('index');
  }
  public function promotiont(Request $request){
    if (Auth::user()->is_Admin == 0 || Auth::user()->is_Admin == 1) {
      $baners=Banner::orderBy('created_at','desc')->get();
      return view('layoutadmin.promotion')->with('data',Tour::find($request->idtour))
      ->with('baners',$baners);
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


      $datas = Tour::orderBy('created_at','desc')->Paginate(4);


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
      ->Paginate(5);


    foreach ($tous as $data) {
      $output .= '
        <tr>
        <td scope="row">' . $data->tour_code . '</td>
        <td style="max-width: 250px;">' . $data->name_tour . '</td>
        <td>
            <img src="' . $data->Img_tour->img1 . '" width="200px;" alt="">
        </td>
        <td>' . $data->departure_day . '</td>
        <td>' . $data->status . '</td>
        <td class="text-center">
        <a href=" /tour/'.$data->id.'/edit" class="btn btn-warning"><i class="fas fa-edit"></i> </a>
       
    </td>
    <td>
        <button href="" id="delete" onclick="deletetour('.$data->id.')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
    </td>
    <td>
        <a  class="btn btn-success" href="/tour/'.$data->id.'" id="details" > <i class="fas fa-eye"></i></a>

    </td>
    <td>
                                <a href="/admin/promotion-createbaner?idtour='.$data->id.'" class="btn btn-info text-light" >Tạo Banner</a>
        </td>
      </tr>
      ';
    }
    return response()->json($output);
  }
}
