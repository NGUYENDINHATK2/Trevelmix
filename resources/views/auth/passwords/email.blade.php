@extends('layouts.app')

@section('content')



<div class="container-fuild loginmain">

    <div class="container loginmain-form">
        
        <div class="row " style="height:100%;padding-top:15%;
        padding-bottom:15%  ">
            <div class="col-sm-12 col-md-6 col-lg-6 logo-login" >

               <div class="row" style="width: 70%; margin: 0px auto;">
                   <h1 style="font-size:105px ; color: rgb(38, 241, 248) ; "><b>Travel</b></h1>
                   <h1 style="font-size:100px; padding-left: 250px; color:rgb(215, 88, 247);'"><b>Vn</b></h1>
               </div>
                
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 form-login">
                <h1 class="text-center"><b>Yêu Cầu Đổi Mật Khẩu</b></h1>

                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    Chúng Tôi Đã Gửi Một Thông Báo Đến Gmail Của Bạn
                </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group row">

                        <div class="">
                            <input id="email" type="email" class="rounded-pill border form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Nhập Email Của Bạn">

                          
                        </div>
                    </div>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="row mt-3 pe-3 ps-3">
                    <button type="submit" class=" text-light rounded-pill buttonlogin">
                        <b>{{ __('Xác Nhận') }}</b>
                    </button>
                </div>
                
                
                </form>

             
            </div>
        </div>
    </div>

</div>

<script>

$(document).ready(function(){
    $("#email").click(function(){
       $("#email").addClass("shadowbox");
    }),
    
    

    $('#password').click(function(){
        $("#password").addClass("shadowbox")
    })
    $('#password-confirm').click(function(){
        $("#password-confirm").addClass("shadowbox")
    })

    

});

</script>

<script src="{{asset('js1/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('js1/custom.js')}}"></script>
   
    
@endsection