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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                        <a href="/admin/tour" class="text-decoration-none">
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
                    <li class="nav-item active" >
                        <a href="/manageruser" class="text-decoration-none">
                            <i class="la la-bell"></i>
                            <p>Quản Lý Tài Khoản</p>
                      
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/managerorder" class="text-decoration-none">
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
                <h3><b>Danh Sách Admin</b></h3>
        <table class="table  table-hover ">
                        <thead>
                    
                            <td>Tài khoản</td>
                            <td>Email</td>
                           
                            <th scope="col" class="text-center">Hành Động</th>
                          </thead>
                          <tbody id="listadmin">
                         
                           @foreach ($admins as $admin)
                       

                           <tr>
                 
                            <td>{{$admin->name}}</td>
                            <td>{{$admin->email}}</td>
                       
                          
                            <td class="text-center">
                             <a href=" " class="btn btn-warning"><i class="fas fa-edit"></i> </a>
                             {{-- <button class="btn btn-warning" onclick="edittour({{$data->id}})">Sửa </button> --}}
                             {{-- <button type="button" class="btn btn-warning" onclick="edittour({{$data->id}})" data-toggle="modal" data-target=".bd-example-modal-lg">Sửa</button> --}}
                            
                             
                         </td>
                         <td>
                             <form action="/api/admin/{{$admin->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name=""  id="delete" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>


                             </form>
                         </td>
                         <td>
                             <a  class="btn btn-success" href="" id="details" > <i class="fas fa-eye"></i></a>
 
                         </td>
                           </tr>
                               
                           @endforeach
                          </tbody>
            </table>
            <h3><b>Danh Sách Nhân Viên</b></h3>
        <table class="table  table-hover ">
                        <thead>
                      
                            <td>Tài khoản</td>
                            <td>Email</td>
                       
                            <th scope="col" class="text-center">Hành Động</th>
                          </thead>
                          <tbody id="listtour">
                            @foreach ($categories as $admin)
                            @php
                            $stt=1
                        @endphp
 
                            <tr>
                  
                             <td>{{$admin->name}}</td>
                             <td>{{$admin->email}}</td>
                        
                           
                             <td class="">
                              <a href=" " class="btn btn-warning"><i class="fas fa-edit"></i> </a>
                              {{-- <button class="btn btn-warning" onclick="edittour({{$data->id}})">Sửa </button> --}}
                              {{-- <button type="button" class="btn btn-warning" onclick="edittour({{$data->id}})" data-toggle="modal" data-target=".bd-example-modal-lg">Sửa</button> --}}
                             
                              
                          </td>
                          <td>
                            <form action="/api/admin/{{$admin->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name=""  id="delete" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>


                             </form>                          </td>
                          <td>
                              <a  class="btn btn-success" href="" id="details" > <i class="fas fa-eye"></i></a>
  
                          </td>
                            </tr>
                                
                            @endforeach
                      
                          </tbody>
            </table>
            <h3><b>Danh Sách Người Dùng</b></h3>
            <table class="table  table-hover ">
                <thead>
                
                    <td>Tài khoản</td>
                    <td>Email</td>
               
                    <th scope="col" class="text-center">Hành Động</th>
                  </thead>
                  <tbody id="listtour">
                    @foreach ($clients as $admin)
                    

                    <tr>
              
                     <td>{{$admin->name}}</td>
                     <td>{{$admin->email}}</td>
                
                   
                     <td class="text-center">
                      <a href=" " class="btn btn-warning"><i class="fas fa-edit"></i> </a>
                  
                      
                  </td>
                  <td>
                    <form action="/api/admin/{{$admin->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name=""  id="delete" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>


                     </form>                  </td>
                  <td>
                      <a  class="btn btn-success" href="" id="details" > <i class="fas fa-eye"></i></a>

                  </td>
                    </tr>
                        
                    @endforeach
              
                  </tbody>
    </table>
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