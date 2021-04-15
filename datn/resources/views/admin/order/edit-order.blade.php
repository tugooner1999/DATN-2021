@extends('layout-admin')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Cập nhật đơn hàng</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="{{route('client.homepage')}}" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Về trang chủ <i class="fa fa-home" aria-hidden="true"></i></a>
                        
                        <ol class="breadcrumb">
                            <li><a href="#">Bảng điều khiển</a></li>
                            <li class="active">Cập nhật đơn hàng</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material">
                                <div class="form-group">
                                    <label class="col-sm-12">Loại</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line">
                                            <option>Thông thường</option>
                                            <option>Đi chợ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Tình trạng</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line">
                                            <option>Đã thanh toán</option>
                                            <option>Chưa thanh toán</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Trạng thái</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line">
                                            <option>Hoàn thành</option>
                                            <option>Chưa hoàn thành</option>
                                            <option>Hủy</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Ngày đặt</label>
                                    <div class="col-md-12">
                                        <input type="date" value="27/01/2021" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-danger">Cập nhật</button>
                                        <a href="{{route('admin.listOrder')}}" class="btn btn-success">Trở về</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection