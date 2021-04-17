@extends('layout-admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Danh sach bình luận</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <a href="{{route('client.homepage')}}" target="_blank"
                    class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Về trang chủ
                    <i class="fa fa-home" aria-hidden="true"></i></a>
                <ol class="breadcrumb">
                    <li><a href="{{route('admin.dashboard')}}">Bảng điều khiển</a></li>
                    <li class="active">Bình luận</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Danh sách</h3>
                    <div class="table-responsive">
                        <table class="table table-hover" id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="width:3%;">#</th>
                                    <th>Người dùng</th>
                                    <th>Tài khoản</th>
                                    <th>Điện thoại</th>
                                    <th style="width:30%;">Nội dung</th>
                                    <th>Đánh giá</th>
                                    <th>Sản phẩm</th>
                                    <th>Ngày đăng</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comment as $pro => $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td style="font-weight:bold;">
                                        {{isset($item->user_comment) ? $item->user_comment->name : ''}}</td>
                                    <td><a href="#">{{isset($item->user_comment) ? $item->user_comment->email : ''}}
                                        </a></td>
                                    <td style="font-weight:bold;">
                                        {{isset($item->user_comment) ? $item->user_comment->phone : ''}}</td>
                                    <td>{{$item->ra_content}}</td>
                                    <td>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    </td>
                                    <td class="text-info"><a
                                            href="">{{isset($item->product_comment) ? $item->product_comment->name : ''}}</a>
                                    </td>
                                    <td>{{$item->created_at}}</td>
                                    <td style="font-size: 20px;">
                                        <a style="padding-left: 10px;"
                                            onclick="return confirm('Bạn có chắc muốn xoá bình luận này: {{$item->ra_content}}')"
                                            href="{{route('admin.removeComment', ['id' => $item->id])}}"
                                            class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                @endforeach
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