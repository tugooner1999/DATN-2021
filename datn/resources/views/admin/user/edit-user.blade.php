@extends('layout-admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Cập nhật tài khoản</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank"
                    class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Về trang chủ
                    <i class="fa fa-home" aria-hidden="true"></i></a>

                <ol class="breadcrumb">
                    <li><a href="{{route('admin.dashboard')}}">Bảng điều khiển</a></li>
                    <li class="active">Cập nhật tài khoản</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="white-box">
                    <form class="form-horizontal form-material">
                        <div class="form-group">
                            <label class="col-md-12">Tên tài khoản</label>
                            <div class="col-md-12">
                                <input type="text" value="taikhoan1" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Phân quyền</label>
                            <div class="col-sm-12">
                                <select class="form-control form-control-line">
                                    <option>Thành Viên</option>
                                    <option>Quản trị</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Trạng thái</label>
                            <div class="col-sm-12">
                                <select class="form-control form-control-line">
                                    <option>Hoạt động</option>
                                    <option>Cấm</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="email" value="hungdx@fpt.edu.vn" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Phone</label>
                            <div class="col-md-12">
                                <input type="number" value="0987654321" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Địa chỉ</label>
                            <div class="col-md-12">
                                <textarea rows="5" class="form-control form-control-line">Cầu Giấy - Hà Nội</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-danger">Cập nhật</button>
                                <a href="{{route('admin.listUser')}}" class="btn btn-success">Trở về</a>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="white-box">
                    <img src="" width="100%" height="200px" alt="">
                    <div class="form-group">
                        <label class="col-sm-12">Tải ảnh mới</label>
                        <input class="col-sm-12" type="file">
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<footer class="footer text-center"> 2021 &copy; Ample Admin brought to you by MarketNow.com </footer>
</div>
@endsection