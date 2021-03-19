@extends('layout-admin')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Tài khoản</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Về trang chủ <i class="fa fa-home" aria-hidden="true"></i></a>
                        <ol class="breadcrumb">
                            <li><a href="{{route('admin.dashboard')}}">Bảng điều khiển</a></li>
                            <li class="active">Tài khoản</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Danh sách</h3>
                            <div class="app-search hidden-sm hidden-xs m-r-10">
                                <input id="myInput" class="form-control form-control-navbar" style="border: 0.5px solid" type="text" placeholder="Tìm kiếm" aria-label="Search">
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tài khoản</th>
                                            <th>Ảnh</th>
                                            <th>Quyền</th>
                                            <th>Email</th>
                                            <th>SĐT</th>
                                            <th>Địa chỉ</th>
                                            <th>Trạng thái</th>
                                            <th>Điểm</th>
                                            <th><a href="{{route('admin.addUser')}}" class="btn btn-primary">Thêm</a></th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                    @forelse($user as $objU)
                                        <tr>
                                            <td>{{$objU->id}}</td>
                                            <td>{{$objU->name}}</td>
                                            <td><img src="{{$objU->image}}" alt="" width="50"></td>
                                            <td class="text-primary">{{$objU->role_id}}</td>
                                            <td>{{$objU->email}}</td>
                                            <td>{{$objU->phone}}</td>
                                            <td>{{$objU->address}}</td>
                                            <td class='{{$objU->status == 1 ? "text-success" : "text-danger"}}'>
                                            {{$objU->status == 1 ? "Hoạt động" : "Cấm"}}
                                            </td>
                                            <td>{{$objU->coins}}</td>
                                            <td style="font-size: 20px;">
                                                <a style="padding-left: 10px;" href="{{route('admin.editUser')}}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                <a style="padding-left: 10px;" href="{{route( 'admin.deteleUser',[ 'id'=>$objU->id]) }}" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        @empty
                        <tr>
                            <td colspan="11" align="center">
                                Danh sách trống
                            </td>
                        </tr>
                    @endforelse   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center"> 2021 &copy; Ample Admin brought to you by MarketNow.com </footer>
        </div>
@endsection