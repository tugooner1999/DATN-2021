@extends('layout-client')
@section('content')
<!-- Breadcrumb Area start -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-hrading">Thông Tin Tài Khoản</h1>
                    <ul class="breadcrumb-links">
                        <li><a href="{{route('client.homepage')}}">Trang Chủ</a></li>
                        <li>Thông tin tài khoản</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->
<div class="checkout-area mtb-60px">
                <div class="container">
                    <div class="row">
                        <div class="ml-auto mr-auto col-lg-9">
                            <div class="checkout-wrapper">
                                <div id="faq" class="panel-group">
                                    <div class="panel panel-default single-my-account">
                                        <div class="panel-heading my-account-title">
                                            <h3 class="panel-title"><span>1 .</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-1">Thay đổi thông tin tài khoản của bạn</a></h3>
                                        </div>
                                        <div id="my-account-1" class="panel-collapse collapse show">
                                            <div class="panel-body">
                                                <div class="myaccount-info-wrapper">
                                                    <div class="account-info-wrapper">
                                                        <h4>Thông tin tài khoản của bạn</h4>
                                                        <h5>Thông tin cá nhân</h5>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                            <div class="billing-info">
                                                                <label>Tên tài khoản</label>
                                                                <input type="text" value="@if(Auth::user()) {{Auth::user()->name}} @endif" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="billing-info">
                                                                <label>Email</label>
                                                                <input type="email" value="@if(Auth::user()) {{Auth::user()->email}} @endif" readonly/>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="billing-info">
                                                                <label>Số điện thoại</label>
                                                                <input type="text" value="@if(Auth::user()) {{Auth::user()->phone}} @endif"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="billing-back-btn">
                                                        <div class="billing-back">
                                                            <a href="#"><i class="fa fa-arrow-up"></i> back</a>
                                                        </div>
                                                        <div class="billing-btn">
                                                            <button type="submit">Lưu</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default single-my-account">
                                        <div class="panel-heading my-account-title">
                                            <h3 class="panel-title"><span>2 .</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-2">Thay đổi mật khẩu của bạn</a></h3>
                                        </div>
                                        <div id="my-account-2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="myaccount-info-wrapper">
                                                    <div class="account-info-wrapper">
                                                        <h4>Đổi mật khẩu</h4>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                            <div class="billing-info">
                                                                <label>Mật khẩu cũ</label>
                                                                <input type="password" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="billing-info">
                                                                <label>Mật khẩu mới</label>
                                                                <input type="password" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="billing-info">
                                                                <label>Nhập lại mật khẩu mơi</label>
                                                                <input type="password" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="billing-back-btn">
                                                        <div class="billing-back">
                                                            <a href="#"><i class="fa fa-arrow-up"></i> back</a>
                                                        </div>
                                                        <div class="billing-btn">
                                                            <button type="submit">Lưu</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default single-my-account">
                                        <div class="panel-heading my-account-title">
                                            <h3 class="panel-title"><span>3 .</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-3">Thay đổi địa chỉ của bạn</a></h3>
                                        </div>
                                        <div id="my-account-3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="myaccount-info-wrapper">
                                                    <div class="account-info-wrapper">
                                                        <h4>Sổ Địa chỉ</h4>
                                                    </div>
                                                    <div class="entries-wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                                                                <div class="entries-info text-center">
                                                                <textarea name="" id="" cols="30" rows="10">
                                                                @if(Auth::user()) {{Auth::user()->address}} @endif
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                                                                <div class="entries-edit-delete text-center">
                                                                    <a class="edit" href="#">Edit</a>
                                                                    <a href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="billing-back-btn">
                                                        <div class="billing-back">
                                                            <a href="#"><i class="fa fa-arrow-up"></i> back</a>
                                                        </div>
                                                        <div class="billing-btn">
                                                            <button type="submit">Lưu</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default single-my-account">
                                        <div class="panel-heading my-account-title">
                                            <h3 class="panel-title"><span>4 .</span> <a href="{{route('client.show-wishlist')}}">Sản phẩm ưa thích của bạn</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection