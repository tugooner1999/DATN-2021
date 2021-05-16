@extends('layout-client')
@section('content')
<?php
    $totalPriceInCart = 0;                               
    if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart'] as $val){
            $totalPriceInCart += $val['price'] * $val['quantity'];
        }
    }
?>
<!-- Breadcrumb Area start -->
<section class="breadcrumb-area" style="
    background: repeating-linear-gradient(21deg, #4fb68d96, #edb1b100 244px);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-hrading">Giỏ Hàng</h1>
                    <ul class="breadcrumb-links">
                        <li><a href="index-2.html">Trang chủ</a></li>
                        <li>Giỏ hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->
<!-- cart area start -->
<div class="cart-main-area mtb-60px">
<div class="container">
        @if (isset($_SESSION['cart']) && !empty($_SESSION['cart']))
        <h3 class="cart-page-title">Giỏ hàng đi chợ của bạn</h3>
        <div class="row content-cart">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Ảnh</th>
                                    <th>Tên Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($_SESSION['cart'] as $item)
                                    <tr id="{{$item['id']}}">
                                        <td class="product-thumbnail">
                                            <a href="#"><img width="60" height="60" src="{{asset('/')}}{{$item['image']}}" alt="" /></a>
                                        </td>
                                        <td class="product-name"><a href="#">{{$item['name']}}</a></td>
                                        <td class="product-price-cart"><span class="amount">{{number_format($item['price'])}} VNĐ</span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" prod-id="{{$item['id']}}" type="text" name="qtybutton" value="{{$item['quantity']}}" />
                                            </div>
                                        </td>
                                        <td class="product-subtotal" prod-id="{{$item['id']}}">{{number_format($item['price'] * $item['quantity'])}} VNĐ</td>
                                        <td class="product-remove">
                                            <a href="#" prod-id="{{$item['id']}}"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                @endforeach  
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-clear">
                                <button id="update-cart">Cập nhật giỏ hàng</button>
                                </div>
                                <div class="cart-clear">
                                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModals">
                                Lưu
                                </button>
                                    <a href="#" id="delete-cart">Xóa giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- form submit -->
                    <div class="modal fade" id="myModals">
                        <div class="modal-dialog">
                            <div class="modal-content">
      
                        <!-- Modal Header -->
                        <div class="modal-header">
                             <h4 class="modal-title">Nhập thông tin nhận hàng</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
        
                        <!-- Modal body -->
                        <div class="modal-body">
                            <input class="mt-4 pl-2" type="text" style="width:100%;height:36px;" id="full-name-customer" value="@if(Auth::user()) {{Auth::user()->name}} @endif">
                            <input class="mt-4 pl-2" type="text" style="width:100%;height:36px;" id="email-customer" value="@if(Auth::user()) {{Auth::user()->email}} @endif">
                            <input class="mt-4 pl-2" type="text" style="width:100%;height:36px;" id="phone-customer" value="@if(Auth::user()) {{Auth::user()->phone}} @endif">
                            <label for="appt">Thời gian nhận hàng mong muốn:</label><br>
                            <input type="time" id="appt" name="appt" min="09:00" max="18:00" required>
                            <small>Từ 9h sáng đến 18h chiều</small>
                            <textarea class="mt-4 pl-2" rows="5" type="text" style="width:100%;height:px;" id="address-customer" placeholder="Địa chỉ nhận hàng" require>@if(Auth::user()) {{Auth::user()->address}} @endif</textarea>                        
                            </div>
                            <label for="appts" style="padding-left: 33%;">Cảm ơn khách hàng đã lựa chọn chúng tôi !</label>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Lưu</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Thoát</button>
                        </div>
                                </div>
                            </div>
                        </div>
                </form>  
        @else
            <h3 class="container-fluid text-center">Giỏ hàng trống!</h3>                    
        @endif
    </div>
    <div class="container">
        @if (isset($_SESSION['cart']) && !empty($_SESSION['cart']))
        <h3 class="cart-page-title">Giỏ hàng của bạn</h3>
        <div class="row content-cart">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Ảnh</th>
                                    <th>Tên Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Hạnh động</th>
                                </tr>
                            </thead>
                            <tbody>
                                    
                                    @foreach ($_SESSION['cart'] as $item)
                                        
                                    <tr id="{{$item['id']}}">
                                        <td class="product-thumbnail">
                                            <a href="#"><img width="60" height="60" src="{{asset('/')}}{{$item['image']}}" alt="" /></a>
                                        </td>
                                        <td class="product-name"><a href="#">{{$item['name']}}</a></td>
                                        <td class="product-price-cart"><span class="amount">{{number_format($item['price'])}} VNĐ</span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" prod-id="{{$item['id']}}" type="text" name="qtybutton" value="{{$item['quantity']}}" />
                                            </div>
                                        </td>
                                        <td class="product-subtotal" prod-id="{{$item['id']}}">{{number_format($item['price'] * $item['quantity'])}} VNĐ</td>
                                        <td class="product-remove">
                                            <a href="#" prod-id="{{$item['id']}}"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    <a href="{{route('client.homepage')}}">Tiếp tục mua sắm</a>
                                </div>
                                <div class="cart-clear">
                                    <button id="update-cart">Cập nhật giỏ hàng</button>
                                    <a href="#" id="delete-cart">Xóa giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    
                    <div class="col-lg-4 col-md-6 voucher-box">
                        <?php if(!isset($_SESSION['voucher'])) : ?>
                        <div class="discount-code-wrapper">
                            <div class="title-wrap">
                                
                                <h4 class="cart-bottom-title section-bg-gray">Mã giảm giá</h4>
                            </div>
                            <div class="discount-code">
                                <p>Nhập mã phiếu giảm giá của bạn nếu bạn có.</p>
                                <form>
                                    <input type="text" id="voucher-code" required="" name="name" />
                                    <button id="add-voucher" class="cart-btn-2" type="submit">Áp dụng phiếu giảm giá</button>
                                </form>
                            </div>
                        </div>
                        <?php endif ?>
                    </div>
                    
                    <div class="col-lg-8 col-md-12">
                        <div class="grand-totall">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gary-cart">Hóa đơn chi tiết</h4>
                            </div>
                            <h5>Tổng tiền sản phẩm <span id="total-price-cart">{{number_format($totalPriceInCart)}} VNĐ</span></h5>
                            <h5>Giảm giá 
                                <span id="sale-off">
                                    <?php 
                                        $voucherPrice = 0;
                                        if(isset($_SESSION['voucher'])){
                                            if($_SESSION['voucher']['type'] == 1){
                                                $voucherPrice = ($_SESSION['voucher']['value']);
                                                echo number_format($voucherPrice). " VNĐ";
                                            }
                                            else if($_SESSION['voucher']['type'] == 2){
                                                $voucherPrice = ($totalPriceInCart * ($_SESSION['voucher']['value']) /100);
                                                echo number_format($voucherPrice) . " VNĐ";
                                            }   
                                        }
                                        else {
                                            echo $voucherPrice." VNĐ";
                                        }
                            
                                    ?> 
                                </span>
                            </h5>
                            
                            <h5>Phí giao hàng <span>0 VNĐ</span></h5>
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gary-cart">Thông tin đặt hàng</h4>
                                
                            </div>
                            {{-- <label for="">Họ Tên</label> --}}
                            <input class="mt-4 pl-2" type="text" style="width:100%;height:36px;" id="full-name-customer" value="@if(Auth::user()) {{Auth::user()->name}} @endif">
                            <input class="mt-4 pl-2" type="text" style="width:100%;height:36px;" id="email-customer" value="@if(Auth::user()) {{Auth::user()->email}} @endif">
                            {{-- <label for="">Số điện thoại</label> --}}
                            <input class="mt-4 pl-2" type="text" style="width:100%;height:36px;" id="phone-customer" value="@if(Auth::user()) {{Auth::user()->phone}} @endif">
                            <textarea class="mt-4 pl-2" rows="5" type="text" style="width:100%;height:px;" id="address-customer" placeholder="Địa chỉ nhận hàng"></textarea>
                            <div class="total-shipping">
                                <h5>Phí phát sinh</h5>
                                <ul>
                                    <li><input type="checkbox" class="select-payment-method" value="cod"/> Thanh toán khi nhận hàng</li>
                                    <li><input type="checkbox" class="select-payment-method" value="vnpay"/> Thanh toán online qua VNPay</li>
                                </ul>
                            </div>
                            <?php 
                                $totalPriceInCartAfterAddVoucher = ($totalPriceInCart) - $voucherPrice;
                            ?>
                            <h4 class="grand-totall-title">Tổng tiền {{number_format($totalPriceInCartAfterAddVoucher)}} VNĐ</span></h4>
                            <a id="checkout" href="">Thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
            <h3 class="container-fluid text-center">Giỏ hàng trống!</h3>                    
        @endif
    </div>
</div>
<!-- cart area end -->
@endsection