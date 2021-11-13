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
                        <a href="admin" class="text-decoration-none">
                            <i class="la la-dashboard"></i>
                            <p>Trang Chính</p>
                         
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="text-decoration-none">
                            <i class="la la-table"></i>
                            <p>Quản Lý Tour</p>
                       
                        </a>

                        <ul class="text-dark ms-4" style="list-style: none;">
                            <li class=""><b><a class="/admin/tour"  href="">Thêm Tour</a></b></li>
                            <li><b><a href="/admin/listtour" class="text-decoration-none">Xem Tour Hiện Có</a></b></li>
                            
                        </ul>
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
                    <li class="nav-item">
                        <a href="typography.html" class="text-decoration-none">
                            <i class="la la-font"></i>
                            <p>Quản Lý Đơn Đặt</p>
                        
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/promotion" class="text-decoration-none">
                            <i class="la la-fonticons"></i>
                            <p> Khuyến Mãi</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>

        
        <div class="main-panel">
            <div class="content">
                <div class="container-fuild">
                     <div class="row promotion ">
                        <h3><b>Thông tin khuyến mãi</b></h3>
                            <div class="col-sm-12 col-md-12 col-lg-12 shadow">
                        
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <input type="text" name="" class="form-control p-3" placeholder="Nội dung khuyến mãi" style="width:100%;height: 40px;border-radius:2px; ">
                                    <h3>Chọn ảnh</h3>
                                    <div class="row">
                                        <div class="col-4">
                                            <input  name="" type="file" class="file form-control" data-show-preview="false"> <br><br>

                                        </div>
                                        <div class="col-4">
                                            <input type="text" name="" class="form-control p-3" placeholder="Id khuyến mãi" style="width:100%;height: 40px;border-radius:2px; ">

                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-success " type="submit"><b>Thêm banner</b></button>

                                        </div>

                                    </div>

                                    
                                </form>
                                <br>
                                
                            </div>
                                                    
                     </div>

                     <div class="row mt-3">
                        <table class="table  banner ">
                            <thead>
                                <td class="text-center">Id</td>
                                <td class="text-center">Title</td>
                                <td class="text-center">Img</td>
                                <td class="text-center">Id tour</td>
                                <td class="text-center">Date</td>

                                <th scope="col" class="text-center">Hành Động</th>
                              </thead>
                              <tbody id="listbanner">
                               <td>1</td>
                               <td  style="min-width: 200px;">2</td>
                               <td><img src="https://docs.google.com/uc?id=1rJQfHpfqSN_VTel829NzbZR3_yH4idxn" alt="a" width="250px;">
                               </td>
                               <td style="min-width: 200px;">4</td>
                               <td style="min-width: 200px;">5</td>

                               <td class="text-center">                            
                                    <button class="btn btn-warning" >Sửa </button>                              
                                </td>
                                <td>
                                    <button href="" id="delete"  class="btn btn-danger">Xoá</button>
                                </td>
                                <td>
                                    <a  class="btn btn-success" href="" id="details" > Thêm</a>
    
                                </td>
                              </tbody>
                        </table>
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