@extends('layout-admin')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Đơn hàng</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Về trang chủ <i class="fa fa-home" aria-hidden="true"></i></a>
                        <ol class="breadcrumb">
                            <li><a href="{{route('admin.dashboard')}}">Bảng điều khiển</a></li>
                            <li class="active">Đơn hàng</li>
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
                                            <th>Loại</th>
                                            <th>Giá trị</th>
                                            <th>Voucher KM</th>
                                            <th>Trạng thái</th>
                                            <th>Tình trạng</th>
                                            <th>Ngày đặt</th>
                                            <th>Chi tiết đơn</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        <tr>
                                            <td>1</td>
                                            <td><a href="profile.html">taikhoan1</a></td>
                                            <td>Thông thường</td>
                                            <td>675.000đ</td>
                                            <td class="text-danger">-23.000đ</td>
                                            <td class="text-success">Đã thanh toán</td>
                                            <td class="text-warning">Chưa hoàn thành</td>
                                            <td>24/7/2021</td>
                                            <td><a href="#"><i class="fa fa-edit"></i> Xem chi tiết</a></td>
                                            <td style="font-size: 20px;">
                                                <a style="padding-left: 10px;" href="{{route('admin.editOrder')}}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                <a style="padding-left: 10px;" href="deleteOder.html" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="profile.html">taikhoan1</a></td>
                                            <td>Thông thường</td>
                                            <td>245.000đ</td>
                                            <td class="text-danger">0đ</td>
                                            <td class="text-success">Đã thanh toán</td>
                                            <td class="text-success">Đã hoàn thành</td>
                                            <td>24/7/2021</td>
                                            <td><a href="#"><i class="fa fa-edit"></i> Xem chi tiết</a></td>
                                            <td style="font-size: 20px;">
                                                <a style="padding-left: 10px;" href="{{route('admin.editOrder')}}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                <a style="padding-left: 10px;" href="deleteOder.html" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="profile.html">taikhoan1</a></td>
                                            <td>Đi chợ</td>
                                            <td>155.000đ</td>
                                            <td class="text-danger">-10.000đ</td>
                                            <td class="text-warning">Chưa thanh toán</td>
                                            <td class="text-warning">Chưa hoàn thành</td>
                                            <td>24/7/2021</td>
                                            <td><a href="#"><i class="fa fa-edit"></i> Xem chi tiết</a></td>
                                            <td style="font-size: 20px;">
                                                <a style="padding-left: 10px;" href="{{route('admin.editOrder')}}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                <a style="padding-left: 10px;" href="deleteOder.html" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="profile.html">taikhoan1</a></td>
                                            <td>Đi chợ</td>
                                            <td>123.000đ</td>
                                            <td class="text-danger">-10.000đ</td>
                                            <td class="text-warning">Chưa thanh toán</td>
                                            <td class="text-danger">Đã Hủy</td>
                                            <td>24/7/2021</td>
                                            <td><a href="#"><i class="fa fa-edit"></i> Xem chi tiết</a></td>
                                            <td style="font-size: 20px;">
                                                <a style="padding-left: 10px;" href="{{route('admin.editOrder')}}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                <a style="padding-left: 10px;" href="deleteOder.html" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
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