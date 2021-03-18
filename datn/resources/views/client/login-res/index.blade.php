@extends('layout-client')
@section('content')
<!-- Breadcrumb Area start -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-hrading">Đăng nhập / Đăng ký</h1>
                    <ul class="breadcrumb-links">
                        <li><a href="{{route('client.homepage')}}">Trang chủ</a></li>
                        <li>Đăng nhập / Đăng ký</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->
<!-- login area start -->
<div class="login-register-area mb-60px mt-53px">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4>Đăng nhập</h4>
                        </a>
                        <a data-toggle="tab" href="#lg2">
                            <h4>Đăng kí</h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form
                                        action="https://htmldemo.hasthemes.com/ecolife-preview/ecolife/assets/php/mail.php"
                                        method="post">
                                        <input type="text" name="user-name" placeholder="Tên tài khoản" />
                                        <input type="password" name="user-password" placeholder="Mật khẩu" />
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox" />
                                                <a class="flote-none" href="javascript:void(0)">Nhớ mật khẩu</a>
                                                <a href="#">Quên mật khẩu?</a>
                                            </div>
                                            <button type="submit"><span>Đăng nhập</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form
                                        action="https://htmldemo.hasthemes.com/ecolife-preview/ecolife/assets/php/mail.php"
                                        method="post">
                                        <input type="text" name="user-name" placeholder="Tên tài khoản" />
                                        <input type="password" name="user-password" placeholder="Mật khẩu" />
                                        <input name="user-email" placeholder="Email" type="email" />
                                        <input name="user-email" placeholder="Điện thoại" type="number" />
                                        <div class="button-box">
                                            <button type="submit"><span>Đăng ký</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login area end -->
@endsection