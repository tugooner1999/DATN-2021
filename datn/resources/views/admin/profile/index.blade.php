@extends('layout-admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Thông tin cá nhân</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank"
                    class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to
                    Pro</a>
                <ol class="breadcrumb">
                    <li><a href="{{route('admin.dashboard')}}">Bảng điều khiển</a></li>
                    <li class="active">Thông tin cá nhân</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="white-box">
                    <div class="user-bg"> <img width="100%" alt="user" src="plugins/images/large/img1.jpg">
                        <div class="overlay-box">
                            <div class="user-content">
                                <a href="javascript:void(0)"><img src="{{asset('assets/admin/plugins/images/users/genu.jpg')}}"
                                        class="thumb-lg img-circle" alt="img"></a>
                                <h4 class="text-white">Đào Hùng</h4>
                                <h5 class="text-white"><i class="fa fa-envelope" aria-hidden="true"></i>
                                    MarketNow@gmail.com</h5>
                            </div>
                        </div>
                    </div>
                    <div class="user-btm-box">
                        <div class="col-md-12 col-sm-12 text-center">
                            <p class="text-purple"><i class="ti-facebook"></i></p>
                            <h2><i class="fa fa-phone" aria-hidden="true"></i> 0987654321</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xs-12">
                <div class="white-box">
                    <form class="form-horizontal form-material">
                        <div class="form-group">
                            <label class="col-md-12">Họ tên</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="email" placeholder="johnathan@admin.com"
                                    class="form-control form-control-line" name="example-email" id="example-email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Phone</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="0987654321" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Địa chỉ</label>
                            <div class="col-md-12">
                                <textarea rows="5"
                                    class="form-control form-control-line">Hồ Tùng Mậu - Mai dịch - Cầu giấy - Hà Nội</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Thành phố</label>
                            <div class="col-sm-12">
                                <select class="form-control form-control-line">
                                    <option>Hà Nội</option>
                                    <option>Hải Phòng</option>
                                    <option>Hải Dương</option>
                                    <option>Hưng Yên</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Cập nhật</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-center"> 2021 &copy; Ample Admin brought to you by MarketNow.com </footer>
</div>
@endsection