@extends('layouts.app')


@section('content')



<link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/about_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/about_responsive.css')}}">



	


	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">Về Chúng Tôi</div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="intro_image"><img src="images/intro.png" alt=""></div>
				</div>
				<div class="col-lg-5 ">
					<div class="intro_content">
						<div class="intro_title">CHÚNG TÔI CÓ NHỮNG CHUYẾN DU LỊCH TỐT NHẤT</div>
						<p class="intro_text">Travelvn tự tin là trang web du lịch tốt nhất với nhiều ưu đãi nhất hiện nay 
							bạn có thể đi đến bất cứ nơi đâu ,tận hưởng 1 kỳ nghỉ hoàn mĩ mà bạn xứng đáng ,ngoài ra chúng tôi còn là nơi bạn có thể tìm kiếm thông 
							tin nơi bạn muốn tìm hiểu ,bạn có thế nắm rõ được ,nơi đó có điểm gì nổi bật ,vị trí các khách sạn ... ,chúng tôi còn mang đến rất nhiều ưu đãi nhất
							còn chờ gì nữa chọn cho mình 1 tour nào
						</p>
						<br>
						<h1><b class="text-warning">Travelvn.com</b></h1>
						{{-- <div class="button intro_button position-absolute bottom-0 end-0"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div> --}}
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Stats -->

	<div class="stats">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">Thống Kê Các Năm</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<p class="stats_text">Số lượng khách hàng truy cập chúng tôi rất nhiều và ngày càng gia tăng ,chúng tôi mang đến sự uy tín  và tiện ích </p>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="stats_years">
						<div class="stats_years_last">2020</div>
						<div class="stats_years_new float-right">2021</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="stats_contents">
						
						<!-- Stats Item -->
						<div class="stats_item d-flex flex-md-row flex-column clearfix">
							<div class="stats_last order-md-1 order-3">
								<div class="stats_last_icon d-flex flex-column align-items-center justify-content-end">
									<img src="images/stats_1.png" alt="">
								</div>
								<div class="stats_last_content">
									<div class="stats_number">1642</div>
									<div class="stats_type">Khách hàng</div>
								</div>
							</div>
							<div class="stats_bar order-md-2 order-2" data-x="1642" data-y="3527" data-color="#31124b">
								<div class="stats_bar_perc">
									<div>
										<div class="stats_bar_value"></div>
									</div>
								</div>
							</div>
							<div class="stats_new order-md-3 order-1 text-right">
								<div class="stats_new_icon d-flex flex-column align-items-center justify-content-end">
									<img src="images/stats_1.png" alt="">
								</div>
								<div class="stats_new_content">
									<div class="stats_number">3527</div>
									<div class="stats_type">Khách hàng</div>
								</div>
							</div>
						</div>
						
						<!-- Stats Item -->
						<div class="stats_item d-flex flex-md-row flex-column clearfix">
							<div class="stats_last order-md-1 order-3">
								<div class="stats_last_icon d-flex flex-column align-items-center justify-content-end">
									<img src="images/stats_2.png" alt="">
								</div>
								<div class="stats_last_content">
									<div class="stats_number">768</div>
									<div class="stats_type">Khách Hàng Thân Thiết</div>
								</div>
							</div>
							<div class="stats_bar order-md-2 order-2" data-x="768" data-y="145" data-color="#a95ce4">
								<div class="stats_bar_perc">
									<div>
										<div class="stats_bar_value"></div>
									</div>
								</div>
							</div>
							<div class="stats_new order-md-3 order-1 text-right">
								<div class="stats_new_icon d-flex flex-column align-items-center justify-content-end">
									<img src="images/stats_2.png" alt="">
								</div>
								<div class="stats_new_content">
									<div class="stats_number">145</div>
									<div class="stats_type">Khách Hàng Thân Thiết</div>
								</div>
							</div>
						</div>

						<!-- Stats Item -->
						<div class="stats_item d-flex flex-md-row flex-column clearfix">
							<div class="stats_last order-md-1 order-3">
								<div class="stats_last_icon d-flex flex-column align-items-center justify-content-end">
									<img src="images/stats_3.png" alt="">
								</div>
								<div class="stats_last_content">
									<div class="stats_number">11546</div>
									<div class="stats_type">Với Tôi</div>
								</div>
							</div>
							<div class="stats_bar order-md-2 order-2" data-x="11546" data-y="9321" data-color="#fa6f1b">
								<div class="stats_bar_perc">
									<div>
										<div class="stats_bar_value"></div>
									</div>
								</div>
							</div>
							<div class="stats_new order-md-3 order-1 text-right">
								<div class="stats_new_icon d-flex flex-column align-items-center justify-content-end">
									<img src="images/stats_3.png" alt="">
								</div>
								<div class="stats_new_content">
									<div class="stats_number">9321</div>
									<div class="stats_type">Với Tôi</div>
								</div>
							</div>
						</div>

						<!-- Stats Item -->
						<div class="stats_item d-flex flex-md-row flex-column clearfix">
							<div class="stats_last order-md-1 order-3">
								<div class="stats_last_icon d-flex flex-column align-items-center justify-content-end">
									<img src="images/stats_4.png" alt="">
								</div>
								<div class="stats_last_content">
									<div class="stats_number">3729</div>
									<div class="stats_type">vật phẩm</div>
								</div>
							</div>
							<div class="stats_bar order-md-2 order-2" data-x="3729" data-y="17429" data-color="#fa9e1b">
								<div class="stats_bar_perc">
									<div>
										<div class="stats_bar_value"></div>
									</div>
								</div>
							</div>
							<div class="stats_new order-md-3 order-1 text-right">
								<div class="stats_new_icon d-flex flex-column align-items-center justify-content-end">
									<img src="images/stats_4.png" alt="">
								</div>
								<div class="stats_new_content">
									<div class="stats_number">17429</div>
									<div class="stats_type">Các mặt hàng khác</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Add -->

	<div class="add">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="add_container">
						<div class="add_background" style="background-image:url(images/add.jpg)"></div>
						<div class="add_content">
							<h1 class="add_title">thailand</h1>
							<div class="add_subtitle">Từ <span>9.999.000 VND</span></div>
							<div class="button add_button"><div class="button_bcg"></div><a href="#">Khám Phá Ngay Bây Giờ<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Milestones -->

	<div class="milestones">
		<div class="container">
			<div class="row">
				
				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_1.png" alt=""></div>
						<div class="milestone_counter" data-end-value="255">0</div>
						<div class="milestone_text">Khách Hàng</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_2.png" alt=""></div>
						<div class="milestone_counter" data-end-value="1176">0</div>
						<div class="milestone_text">Sản Phẩm</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_3.png" alt=""></div>
						<div class="milestone_counter" data-end-value="46">0</div>
						<div class="milestone_text">Tỉnh Thành</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_4.png" alt=""></div>
						<div class="milestone_counter" data-end-value="127">0</div>
						<div class="milestone_text">Đang trải nghiệm</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Footer -->

	



<script src="{{asset('js1/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('js1/about_custom.js')}}"></script>


	
@endsection