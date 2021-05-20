@extends('layout-client')
@section('content')
<style>
.form-group {
    margin-top: 15px;
}

</style>
<!-- Breadcrumb Area start -->
<section class="breadcrumb-area" style="
    background: repeating-linear-gradient(21deg, #4fb68d96, #edb1b100 244px);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-hrading">Đơn hàng của tôi</h1>
                    <ul class="breadcrumb-links">
                        <li><a href="{{route('client.homepage')}}">Trang chủ</a></li>
                        <li>Đơn hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="cart-main-area mtb-60px">
    <div class="container">
        <h3 class="cart-page-title">Danh sách đơn hàng</h3>
        @foreach($my_order as $key =>$item)
        <div class="row" style="margin: 63px 0;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="col-md-12" style="margin-bottom: 15px;padding: 0px;">
                    <strong style="color:#000;font-size:19px;text-transform:uppercase;">Mã đơn hàng :
                        {{$item->id}}</strong>
                </div>
                <div class="white-box" style="border:1px solid #4fb68d;">
                    <div class="col-md-12" style="background:#4fb68d; padding:10px;">
                        <strong style="color:#fff;padding: 15px;">Thông tin đặt hàng</strong>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="box-content">
                                <div class="col-md-12" style="margin-top:15px;"><strong>Ngày đặt hàng :
                                        {{$item->created_at}}</strong></div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Tên người đặt</strong></div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" value="{{$item->customer_fullname}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Địa chỉ</strong></div>
                                    <div class="col-md-12">
                                        <textarea name="" id="" cols="30" rows="5"
                                            class="form-control" readonly>{{$item->customer_address}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-content">
                                <div class="col-md-12"  style="margin-top:15px;">
                                    <strong>Tình trạng đơn hàng :
                                        <span class=' {{$item->status == 0 ? "text-danger" : "text-success"}}'>
                                            {{$item->status == 0 ? "Chưa hoàn thành" : "Đã hoàn thành"}}
                                        </span>
                                    </strong>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Email</strong></div>
                                    <div class="col-md-12">
                                        <input type="email" class="form-control" value="{{$item->customer_email}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:20px;">
                                    <div class="col-md-12"><strong>Số điện thoại</strong></div>
                                    <div class="col-md-12">
                                        <input type="number" max="11" min="12" class="form-control"
                                            value="{{$item->customer_phone}}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                <a href="{{URL::to('/client/order/order-detail/'.$item->id)}}"><button class="btn btn-success">Xem chi tiết</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="white-box" style="border:1px solid #4fb68d;">
                    <div class="col-md-12" style="background:#4fb68d; padding:10px;">
                        <strong style="color:#fff;padding: 15px;">Sản phẩm</strong>
                    </div>
                    <div class="col-md-12" style="padding:12px;border-bottom:1px solid #888;">
                        <strong style="padding:10px;">Tình trạng đơn hàng :
                            <span class=' {{$item->status == 0 ? "text-danger" : "text-success"}}'>
                                {{$item->status == 0 ? "Chưa hoàn thành" : "Đã hoàn thành"}}
                            </span>
                        </strong>
                    </div>

                    <div class="col-md-12" style="border:1px solid black;">
                        <div class="col-sm-8" style="float:left;">
                            <div class="all-info">
                                <div class="image-item-product">
                                    <img src="" alt="">
                                </div>
                                <div class="content-info">
                                    <div class="name-product"><span></span></div>
                                    <div class="category-product"><span></span></div>
                                    <div class="product_quantily"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="price-product">
                                <span>1500000</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div> -->
        </div>
        <div class="col-md-12" style="border:1px solid #888"></div>
        @endforeach
    </div>
</div>
@endsection