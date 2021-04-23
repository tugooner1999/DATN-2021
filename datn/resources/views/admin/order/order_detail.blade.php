@extends('layout-admin')
@section('content')
<style>
.shopee-svg-icon {
    display: inline-block;
    width: 1em;
    height: 1em;
    fill: currentColor;
    position: relative;
}

.order-detail-header__note {
    right: 50px;
    position: absolute;
    top: 34px;
    font-size: 15px;
    line-height: 2rem;
}

.order-detail-page__delivery__container-wrapper {
    margin-bottom: .625rem;
    background: #fff;
    margin-top: 45px;
}

._1AsWWl {
    height: .1875rem;
    width: 100%;
    background-position-x: -1.875rem;
    background-size: 7.25rem .1875rem;
    background-image: repeating-linear-gradient(45deg, #6fa6d6, #6fa6d6 33px, transparent 0, transparent 41px, #f18d9b 0, #f18d9b 74px, transparent 0, transparent 82px);
}

.order-detail-page__delivery__container {
    padding: 1.1875rem 1.5rem 1.625rem;
}

.order-detail-page__delivery__header {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -moz-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -moz-box-align: end;
    -ms-flex-align: end;
    align-items: flex-end;
    padding-bottom: .8125rem;
}

.order-detail-page__delivery__header__title {
    color: rgba(0, 0, 0, .8);
    font-size: 19px;
    line-height: 25px;
    text-transform: capitalize;
}

.order-detail-page__delivery__shipping-address__container:last-child {
    max-width: 100%;
}

.order-detail-page__delivery__shipping-address__container {
    text-align: start;
    margin-right: 6%;
    padding-top: .625rem;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    max-width: 12.5rem;
}

.order-detail-page__delivery__shipping-address__shipping-name {
    line-height: 1.375rem;
    margin-bottom: .4375rem;
}

.order-detail-page__delivery__shipping-address__shipping-name {
    color: rgba(0, 0, 0, .8);
}

.order-detail-page__delivery__shipping-address__detail {
    line-height: 2;
}

.order-detail-page__delivery__shipping-address__detail {
    color: rgba(0, 0, 0, .54);
    font-size: 15px;
}

._1LhNIx,
.Ovq6t9 {
    border-bottom: 1px solid rgba(0, 0, 0, .09);
}

._1LhNIx {
    background: #fafafa;
    padding: .8125rem 1.5rem 0;
    height: auto;
}

.info-bottom {
    width: 100%;
    height: auto;
    background: #fafafa;
    margin-top: -30px;
}

.info-people {
    width: 100%;
    height: 70px;
    background: #fafafa;
    position: relative;
    border-bottom: 1px solid rgba(0, 0, 0, .09);
}

.images-name-order img {
    width: 50px;
    height: 50px;
    border-radius: 50px;
}

.images-product-order {
    position: absolute;
    top: 13%;
    bottom: 0;
    left: 2%;
    right: 0;
    margin: 0;
}

.name-kh {
    position: absolute;
    top: 30%;
    bottom: 0;
    left: 8%;
    right: 0;
    margin: 0;
}

.name-kh a {
    color: #000;
    font-size: 18px;
    font-weight: bold;
}

.name-kh a:hover {
    color: #f33155;
}

.info-product-order {
    background: #fafafa;
}

.info-product-order .all-info {
    width: 100%;
    height: 120px;
}

.info-product-order .all-info .image-item-product {
    width: 18%;
    height: 100%;
    float: left;
}

.info-product-order .all-info .image-item-product img {
    width: 100%;
    height: 100%;
}

.info-product-order .all-info .content-info {
    width: 82%;
    height: 100%;
    border: 1px solid #000;
    float: right;
    padding: 14px;
}
.info-product-order .price-product{
    width:100%;
    height:120px;
    border:1px solid #000;
}
</style>
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

                        <div class="col-sm-4" style="padding: 15px 5px;">
                            <div class="price-product"><span>150.000</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection