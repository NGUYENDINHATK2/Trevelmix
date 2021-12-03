<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tour;
use App\Models\booktourmodel;
use App\Models\Banner;
use App\Http\Controllers\MailController;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class admincontroller extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function __construct()
  {
      $this->middleware('auth');

  }
  public function index()
  {
    //

    // $user=User::orderBy('ID', 'desc')->limit(1)->first();
    // dd( $user->id);

    if (Auth::user()->is_Admin == 0 || Auth::user()->is_Admin == 1) {

      $tour = Tour::all();
      foreach ($tour as $tour1) {

        if ($tour1->departure_day<=date('Y-m-d')) {
          # code...
          Tour::where('id', $tour1->id)->update([
            'status_tour' => 'Đang Trải Nghiệm',
            'status'=>'Ngừng'
          ]);
        }

      
      }

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
          if ($date == date('Y-m-d', strtotime($tour->departure_day . ' + 2 days')) ) {

            # code...
            
          Tour::where('id', $tour->id)->update([
              'status_tour' => 'Hoàn Thành',
              'status'=>'Ngừng'
            ]);
          }
        }
        if ($tour->time_tour == '2 N 1 D') {
          if ($date == date('Y-m-d', strtotime($tour->departure_day . ' + 3 days'))) {

            # code...
            Tour::where('id', $tour->id)->update([
              'status_tour' => 'Hoàn Thành',
              'status'=>'Ngừng'
            ]);
          }
        }
        if ($tour->time_tour == '3 N 2 D') {
          if ($date == date('Y-m-d', strtotime($tour->departure_day . ' + 4 days'))) {

            # code...
            Tour::where('id', $tour->id)->update([
              'status_tour' => 'Hoàn Thành',
              'status'=>'Ngừng'
            ]);
          }
        }
        if ($tour->time_tour == '4 N 3 D') {
          if ($date == date('Y-m-d', strtotime($tour->departure_day . ' + 5 days')) ) {

            # code...
            Tour::where('id', $tour->id)->update([
              'status_tour' => 'Hoàn Thành',
              'status'=>'Ngừng'
            ]);
          }
        }
        if ($tour->time_tour == '5 N 4 D') {
          if ($date == date('Y-m-d', strtotime($tour->departure_day . ' + 6 days'))) {

            # code...
            Tour::where('id', $tour->id)->update([
              'status_tour' => 'Hoàn Thành',
              'status'=>'Ngừng'
            ]);
          }
        }
        if($tour->time_tour=='6 N 5 D'){
          if ($date==date('Y-m-d', strtotime($tour->departure_day. ' + 7 days'))) {
           
            # code...
            Tour::where('id',$tour->id)->update([
              'status_tour' =>'Hoàn Thành',
              'status'=>'Ngừng'
             ]);
          }
      }
      }



      $numberuser = User::count('id');

      $numbertour = Tour::count('id');

      $numberbuy = booktourmodel::count('id');

      $summoney = booktourmodel::where('thanhtoan', 'yes')->sum('sum_money');

      $summoneyday = booktourmodel::where('updated_at', 'LIKE', '%' . date('Y-m-d') . '%')
        ->where('thanhtoan', 'yes')->sum('sum_money');

      $sumorderday = booktourmodel::where('created_at', 'LIKE', '%' . date('Y-m-d') . '%')->count('id');


      $booktours1 = booktourmodel::orderBy('created_at', 'desc')->get();

      $booktour2 = 0;
      $booktour3 = 0;
      $booktour4 = 0;

      foreach ($booktours1 as $tour) {
        if ($tour->Tour->status_tour == 'Chưa Khởi Hành') {

          $booktour2++;
          # code...
        }
        if ($tour->Tour->status_tour == 'Đang Trải Nghiệm') {

          $booktour3++;
          # code...
        }
        if ($tour->Tour->status_tour == 'Hoàn Thành') {

          $booktour4++;
          # code...
        }
      }


      return view('layoutadmin.index')->with('numberuser', $numberuser)
        ->with('numbertour', $numbertour)
        ->with('numberbuy', $numberbuy)
        ->with('summoney', $summoney)
        ->with('summoneyday', $summoneyday)
        ->with('sumorderday', $sumorderday)
        ->with('booktours2', $booktour2)
        ->with('booktours3', $booktour3)
        ->with('booktours4', $booktour4);
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


      $admins = User::where('is_Admin', '0')->get();
      $categories = User::where('is_Admin', '2')->get();
      $clients = User::where('is_Admin', '3')->get();

      return view('layoutadmin.ManagerUser')
        ->with('categories', $categories)
        ->with('clients', $clients)
        ->with('admins', $admins);
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

      $booktours = booktourmodel::orderBy('created_at', 'desc')->Paginate(4);


      $tourtodays = Tour::where('departure_day', 'LIKE',  '%' . date('Y-m-d') . '%')->get();

      $tourprepares= Tour::where('departure_day', 'LIKE',  '%' . date('Y-m-d', strtotime(date('Y-m-d') . ' + 1 days')) . '%')
      ->orWhere('departure_day', 'LIKE',  '%' . date('Y-m-d', strtotime(date('Y-m-d') . ' + 2 days')) . '%')
      ->orWhere('departure_day', 'LIKE',  '%' . date('Y-m-d', strtotime(date('Y-m-d') . ' + 3 days')) . '%')->get();

      // if ('2021-11-24'<='2021-12-24') {
      //   dd('â');
      //   # code...
      // }

      $experiencing=Tour::where('status_tour','Đang Trải Nghiệm')->get();

      return view('layoutadmin.Managerorder')
        ->with('booktours', $booktours)
        ->with('tourtodays', $tourtodays)
        ->with('tourprepares',$tourprepares)
        ->with('experiencing',$experiencing);


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



      $categories = User::where('is_Admin', '2')->get();

      return view('layoutadmin.admintour')
        ->with('categories', $categories);
      # code...
    } else
      return view('index');
  }

  public function promotion()
  {
    if (Auth::user()->is_Admin == 0 || Auth::user()->is_Admin == 1) {
      $baners = Banner::orderBy('created_at', 'desc')->get();
      // dd(Tour::find(1)->Banner_tour);
      return view('layoutadmin.promotion')->with('baners', $baners);
      # code...
    } else
      return view('index');
  }
  public function promotiont(Request $request)
  {
    if (Auth::user()->is_Admin == 0 || Auth::user()->is_Admin == 1) {
      $baners = Banner::orderBy('created_at', 'desc')->get();
      return view('layoutadmin.promotion')->with('data', Tour::find($request->idtour))
        ->with('baners', $baners);
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


      $datas = Tour::orderBy('created_at', 'desc')->Paginate(4);


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
      ->orWhere('status',   $request->keyword)
      ->Paginate(100);


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
        <a href=" /tour/' . $data->id . '/edit" class="btn btn-warning"><i class="fas fa-edit"></i> </a>
       
    </td>
    <td>
        <button href="" id="delete" onclick="deletetour(' . $data->id . ')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
    </td>
    <td>
        <a  class="btn btn-success" href="/tour/' . $data->id . '" id="details" > <i class="fas fa-eye"></i></a>

    </td>
    <td>
                                <a href="/admin/promotion-createbaner?idtour=' . $data->id . '" class="btn btn-info text-light" >Tạo Banner</a>
        </td>
      </tr>
      ';
    }
    return response()->json($output);
  }


  public function MailTours(Request $request){
   

    $tours=Tour::find($request->id);

    $booktour=booktourmodel::where('tour_id',$request->id)->get();
    
    $mail=new MailController();

      foreach ($booktour as $book){
        $mail->mailtourm($book->User->email,$book->id_book_tour,$book->Tour->name_tour,$book->Tour->departure_day);
      }
      return redirect('/admin/managerorder');

  }

 public function tourdetails(Request $request){
 


    $datatours=Tour::find($request->id);
    $databooks=booktourmodel::where('tour_id',$request->id)->where('date_book',$datatours->departure_day)->get();
    // ->where('date_book',$datatours->departure_day);
  $sumbook=booktourmodel::where('tour_id',$request->id)->where('date_book',$datatours->departure_day)->count('id');
 
$sum1=0;
$sum2=0;
  foreach ($databooks as $book){
    $sum1=$book->number_of_adults ;
    $sum2=$book->number_of_children;
  }
  
    return view('layoutadmin.TourDetails')
    ->with('datatours',$datatours)
    ->with('databooks',$databooks)
    ->with('sumbook',$sumbook)
    ->with('sum1', $sum1)
    ->with('sum2', $sum2);

 }
}
