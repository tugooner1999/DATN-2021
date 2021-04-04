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
                            <form class="form-horizontal form-material" method="post" action="">
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-12">Tên Voucher</label>
                                    <div class="col-md-12">
                                        <input type="text" value="" name="name" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Mã Code</label>
                                    <div class="col-md-12">
                                        <input type="text" value="" class="form-control form-control-line" name="code" id="example-email"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Ngày bắt đầu</label>
                                    <div class="col-md-12">
                                        <input type="date" value="" name="start_date" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Ngày kết thúc</label>
                                    <div class="col-md-12">
                                        <input type="date" value="" name="finish_date" class="form-control form-control-line">
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="col-sm-12">Loại</label>
                                    <div class="col-sm-12">
                                        <select name="type_id" class="form-control form-control-line">
                                            @foreach($voucher_type as $vou)
                                            <option value="{{  $vou->id }}">{{$vou->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Trạng thái</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line" name="status">
                                            <option name="status" value="1">Chưa sử dụng</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-danger">Thêm mới</button>
                                        <a href="{{route('admin.listVoucher')}}" class="btn btn-success">Trở về</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection