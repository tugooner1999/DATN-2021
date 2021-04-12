@extends('layout-admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Bảng điều khiển</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <a href="{{route('client.homepage')}}" target="_blank"
                    class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Về trang chủ
                    <i class="fa fa-home" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-xs-12" style="width: 20%;">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Đơn hàng</h3>
                    <ul class="list-inline two-part">
                        <li>
                            <div id="sparklinedash"></div>
                        </li>
                        <li class="text-right"><i class="ti-arrow-up text-success"></i> <span
                                class="counter text-success">1275</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12" style="width: 20%;">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Sản phẩm</h3>
                    <ul class="list-inline two-part">
                        <li>
                            <div id="sparklinedash2"></div>
                        </li>
                        <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span
                                class="counter text-purple">{{$product}}</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12" style="width: 20%;">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Bình Luận</h3>
                    <ul class="list-inline two-part">
                        <li>
                            <div id="sparklinedash3"></div>
                        </li>
                        <li class="text-right"><i class="ti-arrow-up text-info"></i> <span
                                class="counter text-info">911</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12" style="width: 20%;">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Mã giảm giá</h3>
                    <ul class="list-inline two-part">
                        <li>
                            <div id="sparklinedash4"></div>
                        </li>
                        <li class="text-right"><i class="ti-arrow-up text-danger"></i> <span
                                class="counter text-danger">{{$voucher}}</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12" style="width: 20%;">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Tài khoản</h3>
                    <ul class="list-inline two-part">
                        <li>
                        <i style="margin-left: 38px;" class="fa fa-users" aria-hidden="true"></i>
                        </li>
                        <li class="text-right" style="text-align: left;"><i class="ti-arrow-up text-dark" ></i> <span
                                class="counter text-dark" >{{$user}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="white-box">
                    <h3 class="box-title">Biên động doanh thu</h3>
                    <ul class="list-inline text-right">
                        <li>
                            <h5><i class="fa fa-circle m-r-5 text-info"></i>Tháng này</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-circle m-r-5 text-inverse"></i>Tháng trước</h5>
                        </li>
                    </ul>
                    <div id="ct-visits" style="height: 405px;"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                        <select class="form-control pull-right row b-none">
                            <option>Hôm nay</option>
                            <option>3 ngày</option>
                            <option>7 ngày</option>
                            <option>15 ngày</option>
                            <option>30 ngày</option>
                        </select>
                    </div>
                    <h3 class="box-title">Giao dịch gần đây</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tài khoản</th>
                                    <th>Loại GD</th>
                                    <th>Ngày GD</th>
                                    <th>Số tiền</th>
                                    <th>Chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="txt-oflo">Đào Hùng</td>
                                    <td>Nạp tiền</td>
                                    <td class="txt-oflo">April 18, 2017</td>
                                    <td><span class="text-success">+240.000đ</span></td>
                                    <td><a href="#"><i class="fa fa-edit"></i> Xem chi tiết</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="txt-oflo">Nguyên</td>
                                    <td>Hoàn tiền</td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="text-info">+20.000đ</span></td>
                                    <td><a href="#"><i class="fa fa-edit"></i> Xem chi tiết</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="txt-oflo">Tú</td>
                                    <td>Hoàn tiền</td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="text-info">+32.000đ</span></td>
                                    <td><a href="#"><i class="fa fa-edit"></i> Xem chi tiết</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="txt-oflo">Thanh</td>
                                    <td>Thanh toán</td>
                                    <td class="txt-oflo">April 20, 2017</td>
                                    <td><span class="text-danger">-30.000đ</span></td>
                                    <td><a href="#"><i class="fa fa-edit"></i> Xem chi tiết</a></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td class="txt-oflo">Đào Hùng</td>
                                    <td>Nạp tiền</td>
                                    <td class="txt-oflo">April 18, 2017</td>
                                    <td><span class="text-success">+240.000đ</span></td>
                                    <td><a href="#"><i class="fa fa-edit"></i> Xem chi tiết</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="txt-oflo">Nguyên</td>
                                    <td>Hoàn tiền</td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="text-info">+20.000đ</span></td>
                                    <td><a href="#"><i class="fa fa-edit"></i> Xem chi tiết</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="txt-oflo">Tú</td>
                                    <td>Hoàn tiền</td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="text-info">+32.000đ</span></td>
                                    <td><a href="#"><i class="fa fa-edit"></i> Xem chi tiết</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="txt-oflo">Thanh</td>
                                    <td>Thanh toán</td>
                                    <td class="txt-oflo">April 20, 2017</td>
                                    <td><span class="text-danger">-30.000đ</span></td>
                                    <td><a href="#"><i class="fa fa-edit"></i> Xem chi tiết</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-8 col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Bình luận gần đây</h3>
                    <div class="comment-center p-t-10">
                        <div class="comment-body">
                            <div class="user-img"> <img src="{{asset('assets/admin/plugins/images/users/pawandeep.jpg')}}" alt="user"
                                    class="img-circle">
                            </div>
                            <div class="mail-contnet">
                                <h5>Nguyên</h5><span class="time">10:20 AM 20 may 2016</span>
                                <br /><span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium
                                    lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie
                                    feugiat. Aenean commodo dui pellentesque molestie feugiat</span> <a href=""
                                    class="btn btn btn-rounded btn-default btn-outline m-r-5"><i
                                        class="fa fa-comments-o"></i> Phản hồi</a><a href="#"
                                    class="btn-rounded btn btn-default btn-outline"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                        <div class="comment-body">
                            <div class="user-img"> <img src="{{asset('assets/admin/plugins/images/users/pawandeep.jpg')}}" alt="user"
                                    class="img-circle">
                            </div>
                            <div class="mail-contnet">
                                <h5>Nguyên</h5><span class="time">10:20 AM 20 may 2016</span>
                                <br /><span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium
                                    lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie
                                    feugiat. Aenean commodo dui pellentesque molestie feugiat</span> <a href=""
                                    class="btn btn btn-rounded btn-default btn-outline m-r-5"><i
                                        class="fa fa-comments-o"></i> Phản hồi</a><a href="#"
                                    class="btn-rounded btn btn-default btn-outline"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                        <div class="comment-body">
                            <div class="user-img"> <img src="{{asset('assets/admin/plugins/images/users/pawandeep.jpg')}}" alt="user"
                                    class="img-circle">
                            </div>
                            <div class="mail-contnet">
                                <h5>Nguyên</h5><span class="time">10:20 AM 20 may 2016</span>
                                <br /><span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium
                                    lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie
                                    feugiat. Aenean commodo dui pellentesque molestie feugiat</span> <a href=""
                                    class="btn btn btn-rounded btn-default btn-outline m-r-5"><i
                                        class="fa fa-comments-o"></i> Phản hồi</a><a href="#"
                                    class="btn-rounded btn btn-default btn-outline"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="panel">
                    <div class="sk-chat-widgets">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                CHAT LISTING
                            </div>
                            <div class="panel-body">
                                <ul class="chatonline">
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success btn-circle btn-lg" type="button"><i
                                                    class="fa fa-phone"></i></button>
                                            <button class="btn btn-info btn-circle btn-lg" type="button"><i
                                                    class="fa fa-comments-o"></i></button>
                                        </div>
                                        <a href="javascript:void(0)"><img src="{{asset('assets/admin/plugins/images/users/varun.jpg')}}"
                                                alt="user-img" class="img-circle"> <span>Varun Dhavan <small
                                                    class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success btn-circle btn-lg" type="button"><i
                                                    class="fa fa-phone"></i></button>
                                            <button class="btn btn-info btn-circle btn-lg" type="button"><i
                                                    class="fa fa-comments-o"></i></button>
                                        </div>
                                        <a href="javascript:void(0)"><img src="{{asset('assets/admin/plugins/images/users/genu.jpg')}}"
                                                alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small
                                                    class="text-warning">Away</small></span></a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success btn-circle btn-lg" type="button"><i
                                                    class="fa fa-phone"></i></button>
                                            <button class="btn btn-info btn-circle btn-lg" type="button"><i
                                                    class="fa fa-comments-o"></i></button>
                                        </div>
                                        <a href="javascript:void(0)"><img src="{{asset('assets/admin/plugins/images/users/ritesh.jpg')}}"
                                                alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small
                                                    class="text-danger">Busy</small></span></a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success btn-circle btn-lg" type="button"><i
                                                    class="fa fa-phone"></i></button>
                                            <button class="btn btn-info btn-circle btn-lg" type="button"><i
                                                    class="fa fa-comments-o"></i></button>
                                        </div>
                                        <a href="javascript:void(0)"><img src="{{asset('assets/admin/plugins/images/users/arijit.jpg')}}"
                                                alt="user-img" class="img-circle"> <span>Arijit Sinh <small
                                                    class="text-muted">Offline</small></span></a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success btn-circle btn-lg" type="button"><i
                                                    class="fa fa-phone"></i></button>
                                            <button class="btn btn-info btn-circle btn-lg" type="button"><i
                                                    class="fa fa-comments-o"></i></button>
                                        </div>
                                        <a href="javascript:void(0)"><img src="{{asset('assets/admin/plugins/images/users/govinda.jpg')}}"
                                                alt="user-img" class="img-circle"> <span>Govinda Star <small
                                                    class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success btn-circle btn-lg" type="button"><i
                                                    class="fa fa-phone"></i></button>
                                            <button class="btn btn-info btn-circle btn-lg" type="button"><i
                                                    class="fa fa-comments-o"></i></button>
                                        </div>
                                        <a href="javascript:void(0)"><img src="{{asset('assets/admin/plugins/images/users/hritik.jpg')}}"
                                                alt="user-img" class="img-circle"> <span>John Abraham<small
                                                    class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success btn-circle btn-lg" type="button"><i
                                                    class="fa fa-phone"></i></button>
                                            <button class="btn btn-info btn-circle btn-lg" type="button"><i
                                                    class="fa fa-comments-o"></i></button>
                                        </div>
                                        <a href="javascript:void(0)"><img src="{{asset('assets/admin/plugins/images/users/varun.jpg')}}"
                                                alt="user-img" class="img-circle"> <span>Varun Dhavan <small
                                                    class="text-success">online</small></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-center"> 2021 &copy; Ample Admin brought to you by MarketNow.com </footer>
</div>

@endsection