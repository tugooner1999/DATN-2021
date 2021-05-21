@extends('layout-admin')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Đơn hàng</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="{{route('client.homepage')}}" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Về trang chủ <i class="fa fa-home" aria-hidden="true"></i></a>
                        <ol class="breadcrumb">
                            <li><a href="{{route('admin.dashboard')}}">Bảng điều khiển</a></li>
                            <li class="active">Đơn hàng</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                        <p class="success" style="color:green; font-size:20px; font-weight:bold;">
                            <?php
                            $message = Session::get('message');
                            if($message){
                                echo $message;
                                Session::put('message', NULL);
                                }
                            ?>
                        </p>
                            <h3 class="box-title">Danh sách</h3>
                            <a href="{{route('admin.outset')}}"><button class="btn btn-success">Kết ngày</button></a>
                        <br>
                        <h5 style="font-size:16px;font-weight:700;">Hôm nay : {{$carbon}}</h5>
                        <h5 style="font-size:16px;font-weight:700;">Tổng tiền đã thu : {{number_format($sum_price_1)}} ₫</h5>
                        <h5 style="font-size:16px;font-weight:700;">Tổng tiền chưa thu : {{number_format($sum_price_0)}} ₫</h5>
                            <div class="table-responsive">
                                <table class="table table-hover" id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tài khoản</th>
                                            <th>Giá trị</th>
                                            <th>Loại</th>
                                            {{-- <th>Trạng thái</th> --}}
                                            <th>Tình trạng</th>
                                            <th>Ngày đặt</th>
                                            <th>Chi tiết</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($oder as $key => $item)
                                        <tr>
                                            <td>{{$key}}</td>
                                            <td><a href="profile.html">{{$item->customer_fullname}}</a></td>
                                            <td>{{number_format($item->totalMoney)}}đ</td>
                                            <td>
                                                {{$item->order_market == 1 ? "Thông Thường" : "Đi chợ"}}
                                            </td>
                                            {{-- <td class="text-success">Đã thanh toán</td> --}}   
                                            <td class=' {{$item->status == null ? "text-danger" : "text-success"}}'>
                                            {{$item->status == 0 ? "Chưa hoàn thành" : "Đã hoàn thành"}}
                                            </td>
                                            <td>{{$item->created_at}}</td>
                                            <td><a href="{{URL::to('/admin/order/order-detail/'.$item->id)}}"><i class="fa fa-edit"></i> Xem</a></td>
                                            
                                            <td style="font-size: 20px;">
                                            <button type="button" data-url="{{route('order-update',['id' => $item->id])}}" data-target="#update" class='btn btn-warning'>Hoàn Thành</button>
                                            
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th style="visibility:hidden;">Tài khoản</th>
                                            <th style="visibility:hidden;">Giá trị</th>
                                            <th style="border:none">Loại</th>
                                            {{-- <th style="border:none">Trạng thái</th> --}}
                                            <th style="border:none">Tình trạng</th>
                                            <th style="border:none">Ngày đặt</th>
                                            <th style="visibility:hidden;">Chi tiết</th>
                                            <th style="visibility:hidden;">Hành động</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center"> 2021 &copy; Ample Admin brought to you by MarketNow.com </footer>
        </div>
@endsection