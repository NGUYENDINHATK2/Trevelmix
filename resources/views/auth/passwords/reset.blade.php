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
                <h1 class="text-center"><b>Đổi Mật Khẩu Tài Khoản</b></h1>

              <form method="POST" action="{{ route('password.update') }}">
            
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group row">

                    <div class="">
                        <input id="email" type="email" class="form-control shadowbox rounded-pill border @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus >

                       
                    </div>
                  
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

                <div class="form-group row">

                    <div class="">
                        <input id="password" type="password" class="form-control rounded-pill border @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  placeholder="Mật Khẩu Mới">

                     
                    </div>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

                <div class="form-group  row">

                    <div class="">
                        <input id="password-confirm" type="password" class="rounded-pill form-control border" name="password_confirmation" required autocomplete="new-password" placeholder="Xác Nhận Lại Mật Khẩu">
                    </div>
                </div>

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