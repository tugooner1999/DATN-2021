@extends('layout-admin')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Voucher</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Về trang chủ <i class="fa fa-home" aria-hidden="true"></i></a>
                        <ol class="breadcrumb">
                            <li><a href="{{route('admin.dashboard')}}">Bảng điều khiển</a></li>
                            <li class="active">Voucher</li>
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
                                            <th>Tên Voucher</th>
                                            <th>Mã code</th>
                                            <th>Ngày bắt đầu</th>
                                            <th>Ngày hết hạn</th>
                                            <th>Loại</th>                                           
                                            <th>Người tạo</th>
                                            <th>Trạng thái</th>
                                            <th><a href="{{route('admin.addVouncher')}}" class="btn btn-primary">Thêm</a></th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        <tr>
                                            <td>1</td>
                                            <td>Giảm giá tuần vàng</td>
                                            <td>WEEK20221</td>
                                            <td>24/7/2021</td>
                                            <td>25/8/2021</td>
                                            <td>Theo %</td>
                                            <td>taikhoan1</td>
                                            <td class="text-success">Đã sử dụng</td>
                                            <td style="font-size: 20px;">
                                                <a style="padding-left: 10px;" href="{{route('admin.editVouncher')}}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                <a style="padding-left: 10px;" href="deleteVoucher.html" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Chúc Mừng Năm Mới</td>
                                            <td>HPNEWYEAR2021</td>
                                            <td>24/7/2021</td>
                                            <td>25/8/2021</td>
                                            <td>Theo giá trị</td>
                                            <td>taikhoan1</td>
                                            <td class="text-primary">Chưa sử dụng</td>
                                            <td style="font-size: 20px;">
                                                <a style="padding-left: 10px;" href="{{route('admin.editVouncher')}}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                <a style="padding-left: 10px;" href="deleteVoucher.html" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Chúc Mừng Năm Mới</td>
                                            <td>HPNEWYEAR2021</td>
                                            <td>24/7/2021</td>
                                            <td>25/8/2021</td>
                                            <td>Theo giá trị</td>
                                            <td>taikhoan1</td>
                                            <td class="text-danger">Hết hạn</td>
                                            <td style="font-size: 20px;">
                                                <a style="padding-left: 10px;" href="{{route('admin.editVouncher')}}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                <a style="padding-left: 10px;" href="deleteVoucher.html" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
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