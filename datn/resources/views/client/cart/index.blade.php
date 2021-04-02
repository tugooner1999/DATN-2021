@extends('layout-client')
@section('content')
<!-- Breadcrumb Area start -->
<section class="breadcrumb-area">
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
        @if (isset($_SESSION['cart']))
        <h3 class="cart-page-title">Giỏ hàng của bạn</h3>
        <div class="row">
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
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img src="{{asset('/')}}{{$item['image']}}" alt="" /></a>
                                        </td>
                                        <td class="product-name"><a href="#">{{$item['name']}}</a></td>
                                        <td class="product-price-cart"><span class="amount">{{$item['price']}} VNĐ</span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" prod-id="{{$item['id']}}" type="text" name="qtybutton" value="{{$item['quantity']}}" />
                                            </div>
                                        </td>
                                        <td class="product-subtotal" prod-id="{{$item['id']}}">{{$item['price'] * $item['quantity']}} VNĐ</td>
                                        <td class="product-remove">
                                            <a href="#"><i class="fa fa-times"></i></a>
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
                                    <a href="#">Tiếp tục mua sắm</a>
                                </div>
                                <div class="cart-clear">
                                    <button id="update-cart">Cập nhật giỏ hàng</button>
                                    <a href="#">Xóa giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="discount-code-wrapper">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gray">Mã giảm giá</h4>
                            </div>
                            <div class="discount-code">
                                <p>Nhập mã phiếu giảm giá của bạn nếu bạn có.</p>
                                <form>
                                    <input type="text" required="" name="name" />
                                    <button class="cart-btn-2" type="submit">Áp dụng phiếu giảm giá</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="grand-totall">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gary-cart">Hóa đơn chi tiết</h4>
                            </div>
                            <h5>Tổng tiền sản phẩm <span>$260.00</span></h5>
                            <div class="total-shipping">
                                <h5>Phí phát sinh</h5>
                                <ul>
                                    <li><input type="checkbox" /> Thanh toán khi nhận hàng <span>$20.00</span></li>
                                    <li><input type="checkbox" /> Thanh toán ATM <span>$30.00</span></li>
                                </ul>
                            </div>
                            <h4 class="grand-totall-title">Tổng tiền <span>$260.00</span></h4>
                            <a href="checkout.html">Thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
            <h3 class="cart-page-title">Giỏ hàng trống!</h3>                    
        @endif
    </div>
</div>
<!-- cart area end -->
@endsection