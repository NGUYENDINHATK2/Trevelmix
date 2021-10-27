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
                <h1 class="text-center">Đăng Ký Tài Khoản </h1>

                <form method="POST" action="{{ route('register') }}">
                    
                    @csrf

                    <div class="row mt-0  emailinput border rounded-pill" >

                        <input class="rounded-pill" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Tên tài khoản">
                    </div>

                    @error('name')
                    <p class="mt-2 text-danger">{{ $message }} !!</p>
                    
                    @enderror

                    <div class="row mt-4  emailinput border rounded-pill">
                        {{-- <input class="rounded-pill" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> --}}
                        <input  class="rounded-pill" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email đăng nhập">

                    </div>
                    

                  <div>
                    @error('email')
                    <p class="mt-2 text-danger">{{ $message }} !!</p>

                    @enderror
                  </div>

                  <div class="row mt-4  emailinput border rounded-pill">
                    {{-- <input class="rounded-pill" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> --}}
                    <input id="password" class="rounded-pill"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mật Khẩu">

                </div>
                

              <div>
                @error('password')
                <p class="mt-2 text-danger">{{ $message }} !!</p>

                @enderror
              </div>

              <div class="row mt-4  emailinput border rounded-pill">
                {{-- <input class="rounded-pill" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> --}}
                <input id="password-confirm" class="rounded-pill" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Nhập Lại Mật Khẩu">

            </div>
            

     

                   

                    <div class="row mt-3 pe-3 ps-3">
                        <button type="submit" class=" text-light rounded-pill buttonlogin">
                            <b>{{ __('Đăng Ký') }}</b>
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
    });


    $("#password-confirm").click(function(){
       $("#password-confirm").addClass("shadowbox");
    }),
    $("#name").click(function(){
       $("#name").addClass("shadowbox");
    }),
    

    $('#password').click(function(){
        $("#password").addClass("shadowbox")
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