@extends('layout-admin')
@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Chi tiết đơn hàng</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <a href="{{route('client.homepage')}}" target="_blank"
                    class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Về trang chủ
                    <i class="fa fa-home" aria-hidden="true"></i></a>
                <ol class="breadcrumb">
                    <li><a href="{{route('admin.dashboard')}}">Bảng điều khiển</a></li>
                    <li class="active">Chi tiết đơn hàng</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8" style="margin:0 auto;">
                <div class="white-box">
                    <div class="order-detail-header__back-button"><svg enable-background="new 0 0 11 11"
                            viewBox="0 0 11 11" x="0" y="0"
                            class="shopee-svg-icon order-detail-header__back-button--arrow icon-arrow-left">
                            <g>
                                <path
                                    d="m8.5 11c-.1 0-.2 0-.3-.1l-6-5c-.1-.1-.2-.3-.2-.4s.1-.3.2-.4l6-5c .2-.2.5-.1.7.1s.1.5-.1.7l-5.5 4.6 5.5 4.6c.2.2.2.5.1.7-.1.1-.3.2-.4.2z">
                                </path>
                            </g>
                        </svg> <a style="color: rgba(0,0,0,.54);" href="{{route('admin.listOrder')}}">TRỞ LẠI</a>
                    </div>
                    <div class="order-detail-header__note"><span class="order-content__header__order-sn">ID ĐƠN HÀNG.
                            21040474K2HU3G</span><span class="order-detail-header__separator"></span>
                    </div>

                    <div class="order-detail-page__delivery__container-wrapper">
                        <div class="_1AsWWl"></div>
                        <div class="order-detail-page__delivery__container">
                            <div class="order-detail-page__delivery__header">
                                <div class="order-detail-page__delivery__header__title">Địa chỉ nhận hàng</div>
                            </div>
                            <div class="order-detail-page__delivery__content">
                                <div class="order-detail-page__delivery__shipping-address__container">
                                    <div class="order-detail-page__delivery__shipping-address">
                                        <div class="order-detail-page__delivery__shipping-address__shipping-name">Lê
                                            Hữu Tú</div>
                                        <div class="order-detail-page__delivery__shipping-address__detail">
                                            <span>(+84)367361426</span>
                                            <br>, toà nhà Đơn Nguyên 3, KTX Mỹ Đình, đường
                                            Nguyễn Cơ Thạch, Phường Mỹ Đình Ii, Quận Nam Từ Liêm, Hà Nội <br>
                                            <div class="_1AwALX"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="info-bottom">
                    <div class=" col-sm-12 info-people">
                        <div class="images-name-order">
                            <img src="{{asset('storage/avatars/081d8846dec2750c5ac918ccdb03d195.jpg')}}" alt="">
                        </div>
                        <div class="name-kh">
                            <a href="">lehuutu99@gmail.com</a>
                        </div>
                    </div>

                    <div class=" col-sm-12 info-product-order">
                        <div class="col-sm-8" style="padding: 15px 5px;float:left;">
                            <div class="all-info">
                                <div class="image-item-product">
                                    <img src="{{asset('assets/client/images/product-image/cosmatic/1.jpg')}}" alt="">
                                </div>

                                <div class="content-info">
                                    <div class="name-product" style="padding:5px;"><span style="font-size:18px;">Son lì
                                            A12 Blackground</span></div>
                                    <div class="category-product" style="padding:5px;"><span style="color: #777;">Văn
                                            phòng phẩm</span></div>
                                    <div class="quantily-product" style="padding:5px;"><span>x 2</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4" style="padding: 15px 5px;position:relative;">
                            <div class="price-product" style="position:relative;"><span>đ150.000</span></div>
                        </div>
                    </div>

                    <!-- payment_setail -->
                    <div class="payment-detail__container Ovq6t9">
                        <div class="payment-detail__item">
                            <div class="payment-detail__item__description">Tổng tiền hàng</div>
                            <div class="payment-detail__item__value">
                                <div class="payment-detail__item__value-text">₫155.000</div>
                            </div>
                        </div>
                        <div class="payment-detail__item">
                            <div class="payment-detail__item__description">Vận chuyển-J&amp;T Express</div>
                            <div class="payment-detail__item__value">
                                <div class="payment-detail__item__value-text">₫16.050</div>
                            </div>
                        </div>
                        <div class="payment-detail__item">
                            <div class="payment-detail__item__description">Miễn Phí Vận Chuyển<div
                                    class="shopee-drawer"></div>
                            </div>
                            <div class="payment-detail__item__value">
                                <div class="payment-detail__item__value-text">-₫14.550</div>
                            </div>
                        </div>
                        <div class="payment-detail__item payment-detail__item--last">
                            <div class="payment-detail__item__description">Tổng số tiền</div>
                            <div class="payment-detail__item__value payment-detail__item__value--highlighted">
                                <div class="payment-detail__item__value-text">
                                    <div>
                                        <div style="margin: 5px -26px;">₫156.500</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="payment-detail__container">
                        <div class="payment-detail__item payment-detail__item--last">
                            <div class="payment-detail__item__description">
                                <div class="payment-detail__item__description-inner" style="padding: 7px;">
                                Phương thức Thanh toán
                                </div>
                            </div>
                            <div class="payment-detail__item__value" style="padding: 10px;">
                                <div class="payment-detail__item__value-text"><span
                                        class="payment-detail__payment-method-value">Thanh toán khi nhận hàng</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection