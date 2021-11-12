@extends('layoutadmin.app')

@section('contentadmin')



<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
<link rel="stylesheet" href="{{ asset('assets/css/ready.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/demo.css')}}">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>
<div class="wrapper">

   



    <div class="main-header">
        <div class="logo-header">
            <a href="admin" class="text-decoration-none logo">
                Trang Chính 

              
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
        </div>
        <nav class="navbar navbar-header navbar-expand-lg">
            <div class="container-fluid">
                
                <form class="navbar-left navbar-form nav-search mr-md-3" action="">
                    <div class="input-group">
                        <input type="text" placeholder="Search ..." class="form-control">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="la la-search search-icon"></i>
                            </span>
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-envelope"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-bell"></i>
                            <span class="notification">3</span>
                        </a>
                        <ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">
                            <li>
                                <div class="dropdown-title">You have 4 new notification</div>
                            </li>
                        
                            <li>
                                <a  class="see-all" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="la la-angle-right"></i> </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle profile-pic text-decoration-none" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="https://webcongnghe247.com/wp-content/uploads/2021/07/nh-dai-dien-FB-mac-dinh-nu-800x800.jpg" alt="user-img" width="36" class="img-circle"><span > {{Auth::user()->name}}</span></span> </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <div class="user-box">
                                    <div class="u-img"><img src="https://webcongnghe247.com/wp-content/uploads/2021/07/nh-dai-dien-FB-mac-dinh-nu-800x800.jpg" alt="user"></div>
                                    <div class="u-text">
                                        <h4> {{Auth::user()->name}}</h4>
                                        <p class="text-muted">hello@themekita.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                    </div>
                                </li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ti-user"></i> My Profile</a>
                                <a class="dropdown-item" href="#"></i> My Balance</a>
                                <a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Logout</a>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="sidebar">
            <div class="scrollbar-inner sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="https://webcongnghe247.com/wp-content/uploads/2021/07/nh-dai-dien-FB-mac-dinh-nu-800x800.jpg">
                    </div>
                    <div class="info">
                        <a class="text-decoration-none" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span>
                               {{Auth::user()->name}}
                                <span class="user-level">Administrator</span>
                                <span class="caret"></span>
                            </span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                            <ul class="nav">
                                <li>
                                    <a href="#profile" class="text-decoration-none">
                                        <span class="link-collapse">Thông tin của tôi</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#edit" class="text-decoration-none">
                                        <span class="link-collapse">Chỉnh Sửa Hồ Sơ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#settings" class="text-decoration-none">
                                        <span class="link-collapse">Cài Đặt</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item ">
                        <a href="/admin" class="text-decoration-none">
                            <i class="la la-dashboard"></i>
                            <p>Trang Chính</p>
                         
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="admin/tour" class="text-decoration-none">
                            <i class="la la-table"></i>
                            <p>Quản Lý Tour</p>
                       
                        </a>

                     
                    </li>
                   
                    <li class="nav-item">
                        <a href="tables.html" class="text-decoration-none">
                            <i class="la la-th"></i>
                            <p>Quản Lý Trang Khám Phá</p>
                     
                        </a>
                    </li>
                    <li class="nav-item" >
                        <a href="/manageruser" class="text-decoration-none">
                            <i class="la la-bell"></i>
                            <p>Quản Lý Tài Khoản</p>
                      
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="text-decoration-none">
                            <i class="la la-font"></i>
                            <p>Quản Lý Đơn Đặt</p>
                        
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="icons.html" class="text-decoration-none">
                            <i class="la la-fonticons"></i>
                            <p> Khuyến Mãi</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>

        
        <div class="main-panel">
            <div class="content">
             <div class="container  ">
                 <div class="row mb-4">

                   
                     <h4>Đang Sửa Tour : {{$data->tour_code}}</h4>
                     
                 </div>
               
                <div class="row  shadow pb-2">
                  <form id="formdata" action=" /api/tour/{{$data->id}} " name="myForm"  method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                       
                        <div class="col-sm-12 col-md-6 col-lg-6  ">
                            <h5 for="" class="">Tên Tour</h5>
                            <div class="row  p-3 pt-0 ">
                              
                                <input required type="text" value="{{$data->name_tour}}" name="name_tour" class="border-0" placeholder="Nhập Tên Tour" style="width:100%;height: 40px;border-radius:2px; "  >
                               
                            </div>

                            <h5 for="" class="">Thời Gian Tour</h5>
                            <div class="row  p-3 pt-0 ">
                              
                                <input required type="text" value="{{$data->time_tour}}" name="time_tour" class="border-0" placeholder="Ví dụ : 3 Ngày 2 Đêm" style="width:100%;height: 40px;border-radius:2px; "  >
                            </div>
                            <h5 for="" class="">Giá Cho Người Lớn</h5>
                            <div class="row  p-3 pt-0 ">
                              
                                <input required type="text" value="{{$data->price_adults}}" name="price_adults" class="border-0" placeholder="Ví Dụ :1.600.000" style="width:100%;height: 40px;border-radius:2px; "  >
                            </div>
                            <h5 for="" class="">Giá Cho Trẻ Em Dưới 10 Tuổi</h5>
                            <div class="row  p-3 pt-0 ">
                              
                                <input required type="text" value="{{$data->price_children}}" name="price_children" class="border-0" placeholder="Ví Dụ :1.600.000" style="width:100%;height: 40px;border-radius:2px; "  >
                            </div>

                            <h5 for="" class="">Sale</h5>
                            <div class="row  p-3 pt-0 ">
                              
                                <input required type="text" value="{{$data->sale}}" name="sale" class="border-0" placeholder="Ví Dụ :30% " style="width:100%;height: 40px;border-radius:2px; "  >
                            </div>

                            <h5 for="" class="">Gói Quà Tặng Có Trong Tour</h5>
                            <div class="row  p-3 pt-0 ">
                              
                                <input required type="text" value="{{$data->gift}}" name="gift" class="border-0" placeholder="Ví Dụ :2 vé cáp treo free,..." style="width:100%;height: 40px;border-radius:2px; "  >
                            </div>

                            <h5 for="" class="">Ngày Khởi Hành Tour</h5>
                            <div class="row  p-3 pt-0 ">
                              
                                <input required type="text" name="departure_day" value="{{$data->departure_day}}"  class="border-0"  style="width:100%;height: 40px;border-radius:2px; "  >
                            </div>

                            <h5 for="" class="">Nơi Nhận Khách</h5>
                            <div class="row  p-3 pt-0 ">
                              
                                <input required type="text" value="{{$data->receiving_address}}" name="receiving_address" class="border-0" placeholder="Ví Dụ :Chợ bến thành  .TP HCM" style="width:100%;height: 40px;border-radius:2px; "  >
                            </div>

                            <h5 for="" class="">Trang Thái</h5>
                            <div class="row  p-3 pt-0 ">
                              <select class="form-control" name="status" id="">
                                  <option value="Hoạt Động">Hoạt Động</option>
                                  <option value="Ngừng">Ngừng</option>
                              </select>
                            </div>

                            <h5 for="" class="mt-4">Ảnh 3  </h5>
                            <div class="row  p-3 pt-1 ">
                               
                            <input type="file"   name="img3" class="border-0 form-control"  style="width:100%;height: 40px;border-radius:2px;  "  >
                               
                            <img src="{{$data->Img_tour->img3}}" width="100%" alt="">
                             
                            </div>
                            <h5 for="" class="mt-3">Ảnh 4  </h5>
                            <div class="row  p-3 pt-0 ">
                               
                            <input type="file"    name="img4" class="border-0 form-control"  style="width:100%;height: 40px;border-radius:2px;  "  >
                               
                            <img src="{{$data->Img_tour->img4}}" width="100%" alt="">
                             
                            </div>
                            <h5 for="" class="mt-3">Ảnh 5  </h5>
                            <div class="row  p-3 pt-0 ">
                               
                            <input type="file"   name="img5" class="border-0 form-control"  style="width:100%;height: 40px;border-radius:2px;  "  >
                               
                            <img src="{{$data->Img_tour->img5}}" width="100%" alt="">
                             
                            </div>
                            <h5 for="" class="mt-3">Ảnh 6  </h5>
                            <div class="row  p-3 pt-0 ">
                               
                            <input type="file"   name="img6" class="border-0 form-control"  style="width:100%;height: 40px;border-radius:2px;  "  >
                               
                            <img src="{{$data->Img_tour->img6}}" width="100%" alt="">
                             
                            </div>
                                
                           
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">

                       
                            
                            <h5 for="" class="">Ảnh 1  </h5>
                            <div class="row  p-3 pt-0 ">
                               
                            <input type="file"    name="img1" class="border-0 form-control"  style="width:100%;height: 40px;border-radius:2px;  "  >
                               
                            <img src="{{$data->Img_tour->img1}}" width="100%" alt="">
                             
                            </div>

                            <h5 for="" class="mt-3">Ảnh 2  </h5>
                            <div class="row  p-3 pt-0 ">
                               
                            <input type="file"   name="img2" class="border-0 form-control"  style="width:100%;height: 40px;border-radius:2px;  "  >
                               
                            <img src="{{$data->Img_tour->img2}}" width="100%" alt="">
                             
                            </div>
                            <h5 for="" class="mt-3">Ảnh 7  </h5>
                            <div class="row  p-3 pt-0 ">
                               
                            <input type="file"   name="img7" class="border-0 form-control"  style="width:100%;height: 40px;border-radius:2px;  "  >
                               
                            <img src="{{$data->Img_tour->img7}}" width="100%" alt="">
                             
                            </div>
                            <h5 for="" class="mt-3">Ảnh 8  </h5>
                            <div class="row  p-3 pt-0 ">
                               
                            <input type="file"   name="img8" class="border-0 form-control"  style="width:100%;height: 40px;border-radius:2px;  "  >
                               
                            <img src="{{$data->Img_tour->img8}}" width="100%" alt="">
                             
                            </div>
                            <h5 for="" class="mt-3">Ảnh 9  </h5>
                            <div class="row  p-3 pt-0 ">
                               
                            <input type="file"   name="img9" class="border-0 form-control"  style="width:100%;height: 40px;border-radius:2px;  "  >
                               
                            <img src="{{$data->Img_tour->img9}}" width="100%" alt="">
                             
                            </div>
                            <h5 for="" class="mt-3">Ảnh 10  </h5>
                            <div class="row  p-3 pt-0 ">
                               
                            <input type="file"   name="img10" class="border-0 form-control"  style="width:100%;height: 40px;border-radius:2px;  "  >
                               
                            <img src="{{$data->Img_tour->img10}}" width="100%" alt="">
                             
                            </div>
                                
                          

                     
                         
                        </div>

                    </div>

                    <div class="row shadow pb-5 p-3">

                        <h5 class="text-center mt-3 mb-4">Chi Tiết Tour</h5>
                       
                       <div>
                        <h5 for="" class="">Tiêu Đề Giới Thiệu </h5>
                       
                          
                        <input type="text" required value="{{$data->Tour_details->title}}" name="title" class="border-0 ps-3" placeholder="Ví Dụ :Phú Quốc – Thiên đường nghỉ dưỡng lý tưởng" style="width:100%;height: 40px;border-radius:2px; "  >
                        
                       </div>


                           
                       <div class="mt-3">
                        <h5 for="" class="">Mô tả  Giới Thiệu </h5>
                       
                          
                       <textarea class="p-0" name="description" id="" rows="5" style="width:100%;" >
                        {{$data->Tour_details->description}}
                    </textarea>
                        
                       </div>

                       <div class="mt-3">
                        <h5 for="" class="">Những Trải Nghiệm Thú Vị Trong Tour </h5>
                       
                          
                       <textarea class="p-3 pt-2" name="experience_tour" id="" rows="10" style="width:100%;" placeholder="Ví Dụ :Phú Quốc được mệnh danh là thiên đường nghỉ dưỡng với...">
                    
                        {{$data->Tour_details->experience_tour}}
                    </textarea>
                        
                       </div>
                       <h5 class="text-center">Chương Trình Đón Khách</h5>
                       <div class="mt-3">
                        <h5 for="" class="">Ngày 1:Tiêu Đề</h5>
                       
                          
                        <input type="text" required value="{{$data->Tour_details->title}}" name="title_day_1" class="border-0 ps-3" placeholder="Ví Dụ :Phú Quốc – Thiên đường nghỉ dưỡng lý tưởng" style="width:100%;height: 40px;border-radius:2px; "  >
                        
                       </div>

                       <div class="mt-3">
                        <h5 for="" class="">Ngày 1:Mô Tả</h5>
                       
                          
                        <textarea class="p- pt-2" name="description_day_1" id="" rows="10" style="width:100%;" placeholder="Ví Dụ :06:30: Đến Hà Tiên, đoàn dùng điểm tâm sáng, nghỉ ngơi . 07:30: Đoàn ra bến Tàu, đáp chuyến tàu cao tốc đi Phú Quốc.">
                            {{$data->Tour_details->description_day_1}}
                        </textarea>
                        
                       </div>
                       <div class="mt-3">
                        <h5 for="" class="">Ngày 2:Tiêu Đề</h5>
                       
                          
                        <input type="text" value=" {{$data->Tour_details->title_day_2}}"  class="border-0 ps-3" name="title_day_2" placeholder="Ví Dụ :NGÀY 1: TP.HCM - HÀ TIÊN - PHÚ QUỐC - VINPEARLAND/SAFARI ( ĂN SÁNG, TRƯA)" style="width:100%;height: 40px;border-radius:2px; "  >
                        
                       </div>

                       <div class="mt-3">
                        <h5 for="" class="">Ngày 2:Mô Tả</h5>
                       
                          
                        <textarea class="p-3 pt-2" name="description_day_2" id="" rows="10" style="width:100%;" placeholder="Ví Dụ :06:30: Đến Hà Tiên, đoàn dùng điểm tâm sáng, nghỉ ngơi . 07:30: Đoàn ra bến Tàu, đáp chuyến tàu cao tốc đi Phú Quốc.">
                            {{$data->Tour_details->description_day_2}}
                        </textarea>
                        
                       </div>
                       <div class="mt-3">
                        <h5 for="" class="">Ngày 3:Tiêu Đề</h5>
                       
                          
                        <input type="text"  value=" {{$data->Tour_details->title_day_3}}"  class="border-0 ps-3" name="title_day_3" placeholder="Ví Dụ :NGÀY 1: TP.HCM - HÀ TIÊN - PHÚ QUỐC - VINPEARLAND/SAFARI ( ĂN SÁNG, TRƯA)" style="width:100%;height: 40px;border-radius:2px; "  >
                        
                       </div>

                       <div class="mt-3">
                        <h5 for="" class="">Ngày 3:Mô Tả</h5>
                       
                          
                        <textarea class="p-3 pt-2" name="description_day_3" id="" rows="10" style="width:100%;" placeholder="Ví Dụ :06:30: Đến Hà Tiên, đoàn dùng điểm tâm sáng, nghỉ ngơi . 07:30: Đoàn ra bến Tàu, đáp chuyến tàu cao tốc đi Phú Quốc.">
                            {{$data->Tour_details->description_day_3}}
                        </textarea>
                     
                       </div>
                       <div class="mt-3">
                        <h5 for="" class="">Ngày Còn lại:Tiêu Đề</h5>
                       
                          
                        <input type="text"  value=" {{$data->Tour_details->title_day_back}}"  name="title_day_back" class="border-0 ps-3" placeholder="Ví Dụ :NGÀY 1: TP.HCM - HÀ TIÊN - PHÚ QUỐC - VINPEARLAND/SAFARI ( ĂN SÁNG, TRƯA)" style="width:100%;height: 40px;border-radius:2px; "  >
                        
                       </div>

                       <div class="mt-3">
                        <h5 for="" class="">Ngày Còn Lại:Mô Tả</h5>
                       
                          
                        <textarea class="p-3 pt-2" name="description_day_back" id="" rows="10" style="width:100%;" placeholder="Ví Dụ :06:30: Đến Hà Tiên, đoàn dùng điểm tâm sáng, nghỉ ngơi . 07:30: Đoàn ra bến Tàu, đáp chuyến tàu cao tốc đi Phú Quốc.">
                        
                            {{$data->Tour_details->description_day_back}}
                        </textarea>
                        
                       </div>
                       <div class="mt-3">
                        <h5 for="" class="">Số Người Trong Tour</h5>
                       
                          
                        <input type="number" class="border-0 ps-3" value="{{$data->amountofpeople}}" name="amountofpeople"  style="width:100%;height: 40px;border-radius:2px; "  >
                        
                       </div>
                      

                    </div>
                    <div class="row mt-3">
                        <button type="submit" class="btn btn-success">Xác Nhận Sửa Tour</button>
                    </div>

                    </form>
                </div>

                <hr>
                
             </div>
            </div>
        
        </div>


      
    </div>
 
</div>
<!-- Modal -->
<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">									
                <p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
                <p>
                    <b>We'll let you know when it's done</b></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('assets/js/core/jquery.3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugin/chartist/chartist.min.js')}}"></script>
<script src="{{asset('assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js')}}"></script>
<script src="{{asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script>
<script src="{{asset('assets/js/plugin/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('assets/js/plugin/jquery-mapael/maps/world_countries.min.js')}}"></script>
<script src="{{asset('assets/js/plugin/chart-circle/circles.min.js')}}"></script>
<script src="{{asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/ready.min.js')}}"></script>
<script src="{{asset('assets/js/demo.js')}}"></script>

    
@endsection 