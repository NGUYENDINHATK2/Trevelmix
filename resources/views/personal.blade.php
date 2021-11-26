@extends('layouts.app')

@section('content')
<style>
  body{
    background : linear-gradient(to right, rgb(38, 241, 248), rgb(215, 88, 247));
  }
  #div2,#div3 {
    display: none;

  }
  .a{
    background : linear-gradient(to right, rgb(246, 250, 250), rgb(206, 203, 207));
    color: rgb(8, 8, 8);
    border: 2px solid white;
   
  }
</style>



<div class="container a " style="margin-top:200px;" >
  <div class="row   p-0"  >
    <div class="col-lg-4 p-3 ">
      <div class="row ">
        <img class="rounded-circle" src="{{$data->Infouser->avatar}}" alt="Chua co hinh anh" onerror="this.onerror=null; this.src='https://thuthuattienich.com/wp-content/uploads/2017/02/anh-dai-dien-facebook-doc-3.jpg '" width="100%" height="400px">

      </div>
    </div>
    <div class="col-lg-8 ">
      
      <div class="row  p-5">
        <div class="row mt-3">
          <h5> <b>Tên Tài Khoản :</b> {{Auth::user()->name}}</h5>
        </div>
        <div class="row  mt-3">
          <h5> <b>Email Đăng Nhập :</b> {{$data->email}}</h5>
        </div>
        @if ($data->Infouser!=null)
       
        <div class="row  mt-3">
          <h5> <b>Ngày Sinh :</b> {{$data->Infouser->date}} </h5>
        </div>
        <div class="row mt-3" >
          <h5><b> Địa Chỉ :</b> {{$data->Infouser->address}}</h5>
        </div>

        <div class="row mt-3">
          <h5> <b>SDT:</b> {{$data->Infouser->phonenumber}}</h5>
        </div>

            
        @endif

        <div class="row mt-4 p-0 text-light">
          <div class="col-lg-4  p-1 text-center" >
            <button class="btn btn-primary" id="btn1" type="submit"><b>Xem Tour Chưa Khởi Hành</b></button>
          </div>
          <div class="col-lg-4  p-1 text-center" >
            <button class="btn text-light " id="btn2" type="submit" style="background:rgb(34, 231, 16);"><b>Xem Tour Đang Trải Nghiệm</b></button>
          </div>
          <div class="col-lg-4  p-1 text-center" >
            <button class="btn text-light  " id="btn3" style="background:rgb(235, 232, 25);" type="submit"><b>Xem Tour Đã Trải Nghiệm</b></button>
          </div>
        </div>
      </div>
    
      

    </div>
  </div>
</div>

<div class="container  bg-light  p-0 ">
  <div class="row  p-0" id="div1">
    
    <div class="row text-center mt-5">
      <h4><b>Tour Chưa Khởi Hành</b></h4>
    </div>


    @foreach ($booktours2 as $tour)
    <div class="row p-2  ">
     
      <div class="row p-0">
        <div class="col-lg-4 p-0 bg-info">
            <img src="{{$tour->Tour->Img_tour->img1}}" width="100%" height="100%" alt="">
        </div>
        <div class="col-lg-6 p-5 ">
            <div class="row">
              <h4>Mã Đặt : {{$tour->id_book_tour}}</h4>
            </div>
            <div class="row">
              <h4>Tên Tour : {{$tour->Tour->name_tour}}</h4>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <h6>Ngày Đặt : {{$tour->created_at}}</h6>
              </div>
              <div class="col-lg-6">
               <div class="row">
                 <div class="col-lg-6">
                  <h6> Người Lớn : {{$tour->number_of_adults}}</h6>
                 </div>
                 <div class="col-lg-6">
                  <h6> Người Trẻ Em : {{$tour->number_of_children}}</h6>
                 </div>
               </div>
              </div>
            </div>
            <div class="row">
              <h5>Tổng Tiền : {{number_format($tour->sum_money)}} VND</h5>
            </div>
            <div class="row">
            <h5>
              Thanh Toán :

              @if ($tour->thanhtoan=='no')
                  {{'Chưa Thanh Toán'}}

              @else
                {{'Đã Thanh Toán'}}
              @endif
            </h5>
            </div>
            <div class="row">
              <h5>Ngày Khởi Hành : {{$tour->date_book}}</h5>
            </div>
        </div>
      </div>

    </div>
        
    @endforeach


  </div>


  <div class="row" id="div2">
    <div class="row text-center pt-5">
      <h4><b>Tour Đang Trải Nghiệm</b></h4>
    </div>


    @foreach ($booktours3 as $tour)
    <div class="row p-2  ">
     
      <div class="row p-0">
        <div class="col-lg-4 p-0 bg-info">
            <img src="{{$tour->Tour->Img_tour->img1}}" width="100%" height="100%" alt="">
        </div>
        <div class="col-lg-6 p-5 ">
            <div class="row">
              <h4>Mã Đặt : {{$tour->id_book_tour}}</h4>
            </div>
            <div class="row">
              <h4>Tên Tour : {{$tour->Tour->name_tour}}</h4>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <h6>Ngày Đặt : {{$tour->created_at}}</h6>
              </div>
              <div class="col-lg-6">
               <div class="row">
                 <div class="col-lg-6">
                  <h6> Người Lớn : {{$tour->number_of_adults}}</h6>
                 </div>
                 <div class="col-lg-6">
                  <h6> Người Trẻ Em : {{$tour->number_of_children}}</h6>
                 </div>
               </div>
              </div>
            </div>
            <div class="row">
              <h5>Tổng Tiền : {{number_format($tour->sum_money)}} VND</h5>
            </div>
            <div class="row">
            <h5>
              Thanh Toán :

              @if ($tour->thanhtoan=='no')
                  {{'Chưa Thanh Toán'}}

              @else
                {{'Đã Thanh Toán'}}
              @endif
            </h5>
            </div>
            <div class="row">
              <h5>Ngày Khởi Hành : {{$tour->date_book}}</h5>
            </div>
        </div>
      </div>

    </div>
        
    @endforeach
  </div>
  <div class="row" id="div3">
    <div class="row text-center pt-5">
      <h4><b>Tour Đã Trải Nghiệm</b></h4>
    </div>


    @foreach ($booktours4 as $tour)
    <div class="row p-2  ">
     
      <div class="row p-0">
        <div class="col-lg-4 p-0 bg-info">
            <img src="{{$tour->Tour->Img_tour->img1}}" width="100%" height="100%" alt="">
        </div>
        <div class="col-lg-6 p-5 ">
            <div class="row">
              <h4>Mã Đặt : {{$tour->id_book_tour}}</h4>
            </div>
            <div class="row">
              <h4>Tên Tour : {{$tour->Tour->name_tour}}</h4>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <h6>Ngày Đặt : {{$tour->created_at}}</h6>
              </div>
              <div class="col-lg-6">
               <div class="row">
                 <div class="col-lg-6">
                  <h6> Người Lớn : {{$tour->number_of_adults}}</h6>
                 </div>
                 <div class="col-lg-6">
                  <h6> Người Trẻ Em : {{$tour->number_of_children}}</h6>
                 </div>
               </div>
              </div>
            </div>
            <div class="row">
              <h5>Tổng Tiền : {{number_format($tour->sum_money)}} VND</h5>
            </div>
            <div class="row">
            <h5>
              Thanh Toán :

              @if ($tour->thanhtoan=='no')
                  {{'Chưa Thanh Toán'}}

              @else
                {{'Đã Thanh Toán'}}
              @endif
            </h5>
            </div>
            <div class="row">
              <h5>Ngày Khởi Hành : {{$tour->date_book}}</h5>
            </div>
        </div>
      </div>

    </div>
    @endforeach
  </div>
</div>
<script>



$(document).ready(function(){
$("#btn1").click(function(){
    $('#div1').show();
    $('#div2').hide();
    $('#div3').hide();
    
    
});

$("#btn2").click(function(){
    $('#div2').show();
    $('#div1').hide();
    $('#div3').hide();
});
$("#btn3").click(function(){
    $('#div3').show();
    $('#div1').hide();
    $('#div2').hide();
});
});

</script>
<script src="{{asset('js1/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('js1/custom.js')}}"></script>
    
    
@endsection