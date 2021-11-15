@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('styles/offers_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/offers_responsive.css')}}">



	
	<!-- Header -->


	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">Ưu Đãi Dành Riêng Cho Bạn</div>
		</div>
	</div>

	<!-- Offers -->

	<div class="offers">

		<!-- Search -->

		<div class="search">
			<div class="search_inner">

				<!-- Search Contents -->
				
				<div class="container fill_height no-padding">
					<div class="row fill_height no-margin">
						<div class="col fill_height no-padding">

							<!-- Search Tabs -->

							<div class="search_tabs_container">
								<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
									{{-- <div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/suitcase.png" alt=""><span>Khách Sạn</span></div> --}}
									<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/bus.png" alt="">Đặt Tour</div>
{{-- 									
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/departure.png" alt="">flights</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/island.png" alt="">trips</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/cruise.png" alt="">cruises</div> --}}

									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/diving.png" alt="">Khám Phá</div>
								</div>		
							</div>

							<!-- 1Search Panel -->

							

							<!-- 2Search Panel -->

							<div class="search_panel active">
								<form action="/tour" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
						
							
									<div class="search_item">
										<div>Địa Điểm Du Lịch</div>
										<input name="text_search" value="{{$infosearch['text_search']}}" type="text" class="destination search_input" required="required">
									</div>
									
									<div class="search_item">
										<div>Giá Tiền</div>
										<select name="money" id="adults_2" class="dropdown_item_select search_input">
										<option value="{{$infosearch['money']}}">Từ {{$infosearch['money']}}</option>
										<option value="1600000 ">Từ  1.600.000 </option>
										<option value="2600000 ">Từ  2.600.000 </option>
										<option value="4000000">Từ  4.000.000</option>
										<option value="8000000">Từ  8.000.000</option>
										<option value="10000000">Từ  10.000.000</option>
										<option value="15000000">Từ  15.000.000</option>
										
										<option value="50000000">Giá Khác</option>
										
										</select>			
													
									</div>
									<div class="search_item">
										<div>Nơi Khởi Hành</div>
										<select name="address_start" id="children_2" class="dropdown_item_select search_input">
											<option value="{{$infosearch['address']}}">{{$infosearch['address']}}</option>
											<option value="Hà Nội">Hà Nội</option>
											<option value="Đà Nẵng">Đà Nẵng</option>
											<option value="HCM">HCM</option>
										</select>
									</div>
									<div class="search_item">
									
		
										<div>Số Ngày </div>
										<select name="numberday" id="adults_2" class="dropdown_item_select search_input">
										<option value="{{$infosearch['date']}}">{{$infosearch['date']}}</option>
										<option value="1 N 1 D">1 N 1 D</option>
										<option value="2 N 1 D">2 N 1 D</option>
										<option value="3 N 2 D">3 N 2 D</option>
										<option value="4 N 3 D">4 N 3 D</option>
										<option value="5 N 4 D">5 N 4 D</option>
										<option value="6 N 5 D">6 N 5 D</option>
										<option value="Số Khác">Số Khác</option>
									
										</select>
									</div>
									<div class="more_options">
										<div class="more_options_trigger">
												<a href="#">Đặt Tour Riêng</a>
										</div>
									
									</div>
									<button class="button search_button">Tìm Kiếm<span></span><span></span><span></span></button>
								</form>
							</div>

							<!--3 Search Panel -->
							{{-- <div class="more_options">
								<div class="more_options_trigger">
										<a href="#">Đặt Tour Riêng</a>
								</div>
							
							</div> --}}

							<div class="search_panel">
								<form action="#" id="search_form_3" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
									<div class="search_item">
										<div>Nơi Bạn Muốn Xem Thông Tin</div>
										<input type="text" class="destination search_input" required="required">
									</div>
								
									<button class="button search_button">Tìm Kiếm<span></span><span></span><span></span></button>
								</form>
							</div>

					
						</div>
					</div>
				</div>	
			</div>	
		</div>

		<!-- Offers -->

		<div class="container">
			<div class="row">
				<div class="col-lg-1 temp_col"></div>
				<div class="col-lg-11">
					
					<!-- Offers Sorting -->
					<div class="offers_sorting_container">
						<ul class="offers_sorting">
							<li>
								<span class="sorting_text">Giá</span>
								<i class="fa fa-chevron-down"></i>
								<ul>
									<li class="sort_btn" data-isotope-option='{ "sortBy": "original-order" }' data-parent=".price_sorting"><span>Tất cả</span></li>
									<li class="sort_btn" data-isotope-option='{ "sortBy": "price" }' data-parent=".price_sorting"><span>Tăng Dần</span></li>
								</ul>
							</li>
							{{-- <li>
								<span class="sorting_text">location</span>
								<i class="fa fa-chevron-down"></i>
								<ul>
									<li class="sort_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>default</span></li>
									<li class="sort_btn" data-isotope-option='{ "sortBy": "name" }'><span>alphabetical</span></li>
								</ul>
							</li> --}}
							<li>
								<span class="sorting_text">stars</span>
								<i class="fa fa-chevron-down"></i>
								<ul>
									
									<li class="filter_btn" data-filter=".rating_3"><span>3</span></li>
									<li class="filter_btn" data-filter=".rating_4"><span>4</span></li>
									<li class="filter_btn" data-filter=".rating_5"><span>5</span></li>
								</ul>
							</li>
							<li class="distance_item">
								<span class="sorting_text">cách trung  tâm</span>
								<i class="fa fa-chevron-down"></i>
								<ul>
									<li class="num_sorting_btn"><span>Dưới 5km</span></li>
									<li class="num_sorting_btn"><span>Dưới 10km</span></li>
									<li class="num_sorting_btn"><span>Dưới 15Km</span></li>
								</ul>
							</li>
							<li>
								<span class="sorting_text">Đánh Giá</span>
								<i class="fa fa-chevron-down"></i>
								<ul>
									<li class="num_sorting_btn"><span>3 sao</span></li>
									<li class="num_sorting_btn"><span>4 sao</span></li>
									<li class="num_sorting_btn"><span>5 sao</span></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-12">
					<!-- Offers Grid -->

					<div class="offers_grid">

						<!-- Offers Item -->
{{-- 					
						<div class="offers_item rating_4 ">
							<h2><b>Không Có Tour Phù Hợp Bạn Xem Thêm 1 Vài Tour Khác Nhé !</b></h3>
						</div> --}}
							
						@if (empty($tours[0]))
						<div class="offers_item rating_4 ">
							<h2><b>Không Có Tour Phù Hợp Bạn Xem Thêm 1 Vài Tour Khác Nhé !</b></h3>
						</div>
							
						@endif
			

						@foreach ($tours as $tour)
                        <div class="offers_item rating_4 ">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@kensuarez -->
										<div class="offers_image_background" style="background-image:url({{$tour->Img_tour->img1}})"></div>
										<div class="offer_name" ><a href="">{{$tour->name_tour}}</a></div>
									</div>
								</div>
								<div class="col-lg-8" >
									<div class="offers_content " style="position: relative;">
										<div class="offers_price" style="font-size: 27px;">{{$tour->name_tour}}</div>
									
                                        <div class="mt-2">
                                            <h3>{{number_format($tour->price_adults)}} VND \ 1 Người </h3>
                                        </div>
										<p class="offers_text">{{$tour->Tour_details->title}} </p>
										<div class="offers_icons">
                                          
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button"><a href="/tour/{{$tour->id}}">Đặt Ngay<span></span><span></span><span></span></a></div>
										<div class="" style="position:absolute; right:0; bottom:5px;;">
											<div class="offer_reviews_content">
												<div class="offer_reviews_title">Rất Tốt</div>
												<div class="offer_reviews_subtitle">100 reviews</div>
											</div>
											<div class="offer_reviews_rating text-center">8.1</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                            
                        @endforeach

						<!-- Offers Item -->

					



					</div>
					<div class="row">
						{{$tours->links()}}
					</div>
				</div>
				<hr class="mt-3">
				<div class="col-lg-12">
					<h3 class="mb-4"><b>Tour Mới Trải Nghiệm Mới</b> </h3>

					@foreach ($toursuggestions as $tour)
                        <div class="offers_item rating_4 ">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@kensuarez -->
										<div class="offers_image_background" style="background-image:url({{$tour->Img_tour->img1}})"></div>
										<div class="offer_name"><a href="single_listing.html">{{$tour->name_tour}}</a></div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content" style="position: relative;">
										<div class="offers_price" style="font-size: 27px;">{{$tour->name_tour}}</div>
									
                                        <div class="mt-2">
                                            <h3>{{number_format($tour->price_adults)}} VND \ 1 Người </h3>
                                        </div>
										<p class="offers_text">{{$tour->Tour_details->title}} </p>
										<div class="offers_icons">
                                          
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button"><a href="/tour/{{$tour->id}}">Đặt Ngay<span></span><span></span><span></span></a></div>
										<div style="position:absolute; right:0; bottom:5px;;">
											<div class="offer_reviews_content">
												<div class="offer_reviews_title">Rất Tốt</div>
												<div class="offer_reviews_subtitle"></div>
											</div>
											<div class="offer_reviews_rating text-center">8.1</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                            
                        @endforeach
				</div>

			</div>
		</div>		
	</div>

	


<script src="{{asset('js1/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('js1/offers_custom.js')}}"></script>


	
@endsection