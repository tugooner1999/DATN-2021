@extends('layout-client')
@section('content')
<!-- Breadcrumb Area start -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-hrading">Giới Thiệu</h1>
                    <ul class="breadcrumb-links">
                        <li><a href="index-2.html">Trang chủ</a></li>
                        <li>Giới thiệu</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- About Area Start -->
<section class="about-area">
    <div class="container container-2">
        <div class="row">
            <div class="col-lg-6 mb-res-sm-50px">
                <div class="about-left-image">
                    <img src="{{asset('assets/client/images/feature-bg/1.jpg')}}" alt="" class="img-responsive" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="about-title">
                        <h2>Chào mừng đến với tạp hoá Chúc An</h2>
                    </div>
                    <p class="mb-30px">
                        Cửa hàng tạp hoá Chúc An là cửa hàng nhỏ lẻ nằm trên phố Đại Từ sầm uất của phường Đại Kim, quận Hoàng Mai. Được khai trương và đi vào kinh doanh từ ngày 26/08/1999
                        cho đến nay đã được 22 năm, là một trong những cửa hàng tạp hoá lâu đời và uy tín nhất của phố Đại Từ. Là một cửa hàng tạp hoá kinh doanh theo mô hình hộ gia đình, không
                        phải tư nhân nên cửa hàng không có nhiều cơ sở ở những nơi khác. Với phương châm là mang đến cho khách hàng những mặt hàng thiết yếu và chất lương với giá thành hợp lý, tạp hoá 
                        Chúc An luôn chọn lọc những sản phẩm theo nhu cầu sử dụng của người tiêu dùng. Một điểm cộng nữa của Chúc An đó là thái độ của nhân viên rất thân thiện và vô cùng xinh đẹp:))

                    </p>
                    </br>
                    <p>
                        ! số thành tích của cửa hàng
                        </br>- Năm 2010, kỉ niệm 1000 năm Thăng Long - Hà Nội, cửa hàng đã vinh dự được nhân bằng khen hộ gia đình kinh doanh tạp hoá xuất sắc của quận
                        </br>- Năm 2015, bằng khen về chất lượng sản phẩm tốt
                        </br>- Năm 2019, Bằng khen về thu nhập tạp hoá hộ gia đình đạt mức trên 69% so với các kinh doanh hộ gia đình khác
                        </br>- Năm 2020, Thi đua xuất sắc của tỉnh
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-60px">
            <div class="col-md-4 mb-res-sm-30px">
                <div class="single-about">
                    <h4>Our Company</h4>
                    <p>
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur
                        adipisicing
                        elit.
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-res-sm-30px">
                <div class="single-about">
                    <h4>Our Team</h4>
                    <p>
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur
                        adipisicing
                        elit.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-about">
                    <h4>Testimonial</h4>
                    <p>
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur
                        adipisicing
                        elit.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Area End -->
@endsection