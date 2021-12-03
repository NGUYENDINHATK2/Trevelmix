@extends('layouts.app')


@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/about_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/about_responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('plugins/colorbox/colorbox.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/single_listing_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/single_listing_responsive.css')}}">


<style>
	img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */


/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
footer{

	display: none;
}
</style>
	
	<!-- Header -->

	<!-- Home -->



	<!-- Offers -->

	<div class="listing mt-5">



		<!-- Single Listing -->

		<div class="container mt-5">
			<div class="row p-0" >
				<div class="col-lg-12">
					<div class="single_listing">
						
						<!-- Hotel Info -->

						<div class="hotel_info">

							<!-- Title -->
							<div class="hotel_title_container d-flex flex-lg-row flex-column">
								<div class="hotel_title_content">
									<h1 class="hotel_title fs-1"><b>{{$data->name_tour}} </b></h1>
									<div class="rating_r rating_r_4 hotel_rating mt-4 mb-4">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
								</div>
								<div class="hotel_title_button ml-lg-auto text-lg-right">
									<div class="button book_button trans_200">
										<a href="#"  data-toggle="modal" data-target="#exampleModal">Xác Nhận Đặt<span></span><span></span><span></span></a>
										{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
											Launch demo modal
										  </button> --}}
									</div>
								
								</div>
							</div>

						

							<div class="container p-0">
							<div class="mySlides">
								<div class="numbertext">1 / 6</div>
								<img src="{{$data->Img_tour->img1}}" style="width:100%">
							</div>

							<div class="mySlides">
								<div class="numbertext">2 / 6</div>
								<img src="{{$data->Img_tour->img2}}" style="width:100%">
							</div>

							<div class="mySlides">
								<div class="numbertext">3 / 6</div>
								<img src="{{$data->Img_tour->img3}}" style="width:100%">
							</div>
								
							<div class="mySlides">
								<div class="numbertext">4 / 6</div>
								<img src="{{$data->Img_tour->img4}}" style="width:100%">
							</div>

							<div class="mySlides">
								<div class="numbertext">5 / 6</div>
								<img src="{{$data->Img_tour->img5}}" style="width:100%">
							</div>
								
							<div class="mySlides">
								<div class="numbertext">6 / 6</div>
								<img src="{{$data->Img_tour->img6}}" style="width:100%">
							</div>


							<div class="caption-container">
								<p id="caption"></p>
							</div>

							<div class="row ps-1 ">
								<div class="column me-0  pe-0">
								<img class="demo cursor" src="{{$data->Img_tour->img1}}" style="width:100%;height: 100px;" onclick="currentSlide(1)" alt="Cảnh Đẹp ">
								</div>
								<div class="column pe-0 ps-0 ">
								<img class="demo cursor" src="{{$data->Img_tour->img2}}" style="width:100%;height: 100px;" onclick="currentSlide(2)" alt="Cảnh Đẹp">
								</div>
								<div class="column pe-0 ps-0 ">
								<img class="demo cursor" src="{{$data->Img_tour->img3}}" style="width:100%;height: 100px;" onclick="currentSlide(3)" alt="Cảnh Đẹp">
								</div>
								<div class="column pe-0 ps-0 ">
								<img class="demo cursor" src="{{$data->Img_tour->img4}}" style="width:100%;height: 100px;" onclick="currentSlide(4)" alt="Cảnh Đẹp">
								</div>
								<div class="column pe-0 ps-0 ">
								<img class="demo cursor" src="{{$data->Img_tour->img5}}" style="width:100%;height: 100px;" onclick="currentSlide(5)" alt="Cảnh Đẹp">
								</div>    
								<div class="column pe-3 ps-0 ">
								<img class="demo cursor" src="{{$data->Img_tour->img6}}" style="width:100%;height: 100px;" onclick="currentSlide(6)" alt="Cảnh Đẹp">
								</div>
							</div>
							</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

							<!-- Hotel Info Text -->


							<!-- Hotel Info Tags -->

						

						</div>

						<div class="container mt-5 p-0 text-dark">
							<div class="row">
								<h4 ><b>Số Người Tối Đa : <font >{{$data->amountofpeople}}</font> </b></h4>

								<h4><b>Số Chỗ Còn Lại : <font id="maxpeople">{{$data->amountofpeople-$slot}}</font></b></h4>
							</div>
							<div class="row">
							<h2>	<b>{{$data->Tour_details->title}}</b></h2>
							</div>
							<div class="row">
								<pre><p>{{$data->Tour_details->description}}</p></pre>
							</div>
							<div class="row">
								@if ($data->gift!='')
								<h5><b>Quà Tặng Trong Tour : {{$data->gift}}</b></h5>
									
								@endif
							</div>
							<div class="row mt-3">
								<h2><b>Những Trải Nghiệm Thú Vị Trong Tour</b></h2>
							</div>

							<div class="row">
								<pre><p>{{$data->Tour_details->experience_tour}}</p></p>
							</div>

							<div class="row">
								<h2><b>Chương Trình Tour</b></h1>
							</div>
							<div class="row">
								<h3><b>Ngày Khởi Hành: {{$data->departure_day}}</b></h3>
							</div>
							<div class="row">
								<h3><b>Điểm Đón Khách: {{$data->receiving_address}}</b></h3>
							</div>

							<div class="row">
								<h3><b>{{$data->Tour_details->title_day_1}}</b></h3>
							</div>
							<div class="row">
								<pre><p>{{$data->Tour_details->description_day_1 }}</p></pre>
							</div>
							<div class="row mt-3 mb-3">
								<img src="{{$data->Img_tour->img7}}" alt="">
							</div>
							<div class="row">
								<h3><b>{{$data->Tour_details->title_day_2}}</b></h3>
							</div>
							<div class="row">
							<pre>	<p>{{$data->Tour_details->description_day_2 }}</p></pre>
							</div>
							<div class="row mt-3 mb-3">
								<img src="{{$data->Img_tour->img8}}" alt="">
							</div>
							<div class="row">
								<h3><b>{{$data->Tour_details->title_day_3}}</b></h3>
							</div>
							<div class="row">
							<pre>	<p>{{$data->Tour_details->description_day_3 }}</p></pre>
							</div>
							<div class="row mt-3 mb-3">
								<img src="{{$data->Img_tour->img9}}" alt="">
							</div>
							<div class="row">
								<h3><b>{{$data->Tour_details->title_day_back}}</b></h3>
							</div>
							<div class="row">
							<pre>	<p>{{$data->Tour_details->description_day_back }}</p></pre>
							</div>
							
							
							
								
							
							
						</div>
						
		 <hr>
						<!-- Reviews -->
						<div class="row text-dark">
							<h2><b>Chính Sách Thu Phí</b></h2>

							<p>Ngay khi xe khởi hành nhân viên sẽ thu phí dựa theo danh sách trên hệ thống</p>
							<h2><b>Dich vụ đi kèm </b></h2>
							<p>-Phương Tiện Di Chuyển</p>
							<p>- Đồ ăn</p>
							<p>-Bảo Hiểm Hành Khách</p>
							<p>-Tour Đã Bao Gồm Phòng ở Và Dịch Vụ nghỉ chân</p>
							<p>- Trẻ em dưới 10 tuổi: Miễn phí, ngủ chung bố mẹ (Gia đình tự lo cho Bé các chi phi phí phát sinh)</p>
							<p>- Từ 10  tuổi: 100% vé tour (ngủ chung bố mẹ, 1 chỗ ngồi trên xe, ăn uống theo chương trình)</p>
							<p>Mỗi cặp vợ chồng chỉ được kèm 1 bé, bé thứ 2 mua 1 vé người lớn.</p>
						</div>
					

					
					</div>
				</div>
			</div>
		</div>	
		
		
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
				<form action="/book" method="POST">
					@csrf

					<div class="modal-header">
						<h3 class="modal-title text-dark" id="exampleModalLabel"><b>Xác Nhận Đặt Tour</b></h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body p-3">
						<input type="hidden" name="name_tour"value="{{$data->name_tour}}">

						  	<input type="hidden" name="tour_id"value="{{$data->id}}">
							<input type="hidden" name="tour_code" value="{{$data->tour_code}}">
							<input type="hidden" name="date_start" value="{{$data->departure_day}}">
						  <div class="row">

							
							  <h3 class="text-dark">Đặt Tour Số : {{$data->tour_code}}</h3>
						  </div>
						<div class="row">
							<h3>Ngày Khởi Hành</h3>
						</div>
						<div class="row p-3 ">
							
							<input type="text" readonly class="form-control" value="{{$data->departure_day}}">
						</div>
						<div class="row">
							<h3>Số Người Lớn - Giá : 	<font>{{number_format($data->price_adults)}}</font> VND </h3>
						</div>

						<div class="row p-3 ">
							
							<input type="number" name="adults" id="adults" min="1" max="20"class="form-control" value="1" placeholder="Số Người Lớn">
						</div>
						
						<div class="row">
							<h3>Số Trẻ Dưới 10 tuổi - Giá : 	<font>{{number_format($data->price_children)}}</font> VND </h3>
						</div>
						<div class="row p-3 ">
							
							<input type="number" name="children" id="children"  id="children" min="0" class="form-control" value="1" placeholder="Số Người Dưới Hoặc Bằng 10 Tuổi">
						</div>

						<div class="row">
							<h3>Tổng Tiền</h3>
						</div>
						<div class="row p-3">
							<input type="text" id="summoney" name="summoney" value="6200000" readonly class="form-control" placeholder="">
						</div>
						
					  </div>
					  <div class="row">
						  <p class="text-center">Mọi Thắc Mắc Liên Hệ 19001811</p>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
						<button type="submit" id="summitbtn" class="btn btn-primary">Xác Nhận</button>
					  </div>

				</form>
			  </div>
			</div>
		  </div>
	</div>

	<script>
$(document).ready(function() {


   

$(document).on('keyup','#adults',function(){
	
var max=$('#maxpeople').text();


var number=$(this).val();
var number2=$('#children').val();

if ((Number(number)+Number(number2))>Number(max)){ 

	alert('Vượt Quá Số Người Quy Định');
	$('#summitbtn').hide();
	return false;
	
}

var money1 =number*{{$data->price_adults}};
var money2 =$('#children').val()*{{$data->price_children}};

money1=Number(money1);
money2=Number(money2);

$('#summoney').val(money1+money2);
	
$('#summitbtn').show();

	
});


$(document).on('keyup','#children',function(){
	var max=$('#maxpeople').text();
	var number=$(this).val();
	var number2=$('#adults').val();

if ((Number(number)+Number(number2))>Number(max)){ 

	alert('Vượt Quá Số Người Quy Định');
	$('#summitbtn').hide();
	return false;
	
}

var money1 =number*{{$data->price_children}};
var money2 =$('#adults').val()*{{$data->price_adults}};

money1=Number(money1);
money2=Number(money2);

$('#summoney').val(money1+money2 );
$('#summitbtn').show();
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