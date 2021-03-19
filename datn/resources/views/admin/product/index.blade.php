@extends('layout-admin')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sản phẩm</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Về trang chủ <i class="fa fa-home" aria-hidden="true"></i></a>
                        <ol class="breadcrumb">
                            <li><a href="{{route('admin.dashboard')}}">Bảng điều khiển</a></li>
                            <li class="active">Sản phẩm</li>
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
                                            <th>Tên</th>
                                            <th>Ảnh</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>
                                            <th>Loại hình</th>
                                            <th>Danh mục</th>
                                            <th>Lượt xem</th>
                                            <th>Ngày cập nhật</th>
                                            <th><a href="{{route('admin.addProduct')}}" class="btn btn-primary">Thêm</a></th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        <tr>
                                            <td>1</td>
                                            <td>Mì tôm</td>
                                            <td><a href="#"><img src="plugins/images/users/varun.jpg" alt="" width="50"></a></td>
                                            <td>120.000đ</td>
                                            <td>78</td>
                                            <td>Thông Thường</td>
                                            <td>Thực phẩm</td>
                                            <td>112</td>
                                            <td>16/3/2021</td>
                                            <td style="font-size: 20px;">
                                                <a style="padding-left: 10px;" href="{{route('admin.editProduct')}}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                <a style="padding-left: 10px;" href="deleteProduct.html" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <!-- <tr>
                                            <td>1</td>
                                            <td>Mì tôm</td>
                                            <td><a href="#"><img src="plugins/images/users/varun.jpg" alt="" width="50"></a></td>
                                            <td>120.000đ</td>
                                            <td>78</td>
                                            <td>Đi chợ</td>
                                            <td>Gia dụng</td>
                                            <td>272</td>
                                            <td>16/3/2021</td>
                                            <td style="font-size: 20px;">
                                                <a style="padding-left: 10px;" href="editProduct.html"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                <a style="padding-left: 10px;" href="deleteProduct.html" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Mì tôm</td>
                                            <td><a href="#"><img src="plugins/images/users/varun.jpg" alt="" width="50"></a></td>
                                            <td>120.000đ</td>
                                            <td>78</td>
                                            <td>Đi chợ</td>
                                            <td>Đồ uống</td>
                                            <td>272</td>
                                            <td>16/3/2021</td>
                                            <td style="font-size: 20px;">
                                                <a style="padding-left: 10px;" href="editProduct.html"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                <a style="padding-left: 10px;" href="deleteProduct.html" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Mì tôm</td>
                                            <td><a href="#"><img src="plugins/images/users/varun.jpg" alt="" width="50"></a></td>
                                            <td>120.000đ</td>
                                            <td>78</td>
                                            <td>Thông Thường</td>
                                            <td>Thực phẩm</td>
                                            <td>272</td>
                                            <td>16/3/2021</td>
                                            <td style="font-size: 20px;">
                                                <a style="padding-left: 10px;" href="editProduct.html"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                <a style="padding-left: 10px;" href="deleteProduct.html" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Mì tôm</td>
                                            <td><a href="#"><img src="plugins/images/users/varun.jpg" alt="" width="50"></a></td>
                                            <td>120.000đ</td>
                                            <td>78</td>
                                            <td>Đi chợ</td>
                                            <td>Thực phẩm</td>
                                            <td>272</td>
                                            <td>16/3/2021</td>
                                            <td style="font-size: 20px;">
                                                <a style="padding-left: 10px;" href="editProduct.html"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                <a style="padding-left: 10px;" href="deleteProduct.html" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr> -->
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