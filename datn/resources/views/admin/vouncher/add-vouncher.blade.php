@extends('layout-admin')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Thêm Voucher Mới</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Về trang chủ <i class="fa fa-home" aria-hidden="true"></i></a>
                        
                        <ol class="breadcrumb">
                            <li><a href="{{route('admin.dashboard')}}">Bảng điều khiển</a></li>
                            <li class="active">Thêm voucher</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material">
                                <div class="form-group">
                                    <label class="col-md-12">Tên Voucher</label>
                                    <div class="col-md-12">
                                        <input type="text" value="" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Mã Code</label>
                                    <div class="col-md-12">
                                        <input type="text" value="" class="form-control form-control-line" name="example-email" id="example-email"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Ngày bắt đầu</label>
                                    <div class="col-md-12">
                                        <input type="date" value="" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Ngày kết thúc</label>
                                    <div class="col-md-12">
                                        <input type="date" value="" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Loại</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line">
                                            <option>Theo giá trị</option>
                                            <option>Theo %</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Trạng thái</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line">
                                            <option>Chưa sử dụng</option>
                                            <option>Đã sử dụng</option>
                                            <option>Hết hạn</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-danger">Thêm mới</button>
                                        <a href="{{route('admin.listVouncher')}}" class="btn btn-success">Trở về</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection