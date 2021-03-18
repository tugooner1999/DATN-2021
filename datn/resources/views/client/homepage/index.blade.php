@extends('layout-client')
@section('content')


<!-- Slider Arae Start -->
<div class="slider-area">
    <div class="slider-active-3 owl-carousel slider-hm8 owl-dot-style">
        <!-- Slider Single Item Start -->
        <div class="slider-height-6 d-flex align-items-start justify-content-start bg-img"
            style="background-image: url(assets/client/images/slider-image/sample-1.jpg);">
            <div class="container">
                <div class="slider-content-1 slider-animated-1 text-left">
                    <span class="animated">Kẹo hoa quả</span>
                    <h1 class="animated">
                        Kẹo hoa quả các loại<br />
                        Dừa Dứa
                    </h1>
                    <p class="animated">Giao hàng miễn phí trong bán kính 500m</p>
                    <a href="shop-4-column.html" class="shop-btn animated">ĐẶT HÀNG</a>
                </div>
            </div>
        </div>
        <!-- Slider Single Item End -->
        <!-- Slider Single Item Start -->
        <div class="slider-height-6 d-flex align-items-start justify-content-start bg-img"
            style="background-image: url(assets/client/images/slider-image/sample-2.jpg);">
            <div class="container">
                <div class="slider-content-1 slider-animated-1 text-left">
                    <span class="animated">100% TỰ NHIÊN</span>
                    <h1 class="animated">
                        Nước uống trái cây <br />
                        Đồ uống mùa hè
                    </h1>
                    <a href="shop-4-column.html" class="shop-btn animated">ĐẶT HÀNG</a>
                </div>
            </div>
        </div>
        <!-- Slider Single Item End -->
    </div>
</div>
<!-- Slider Arae End -->
<!-- Static Area Start -->
<section class="static-area mtb-60px">
    <div class="container">
        <div class="static-area-wrap">
            <div class="row">
                <!-- Static Single Item Start -->
                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                    <div class="single-static pb-res-md-0 pb-res-sm-0 pb-res-xs-0">
                        <img src="{{asset('assets/client/images/icons/static-icons-1.png')}}" alt="" class="img-responsive" />
                        <div class="single-static-meta">
                            <h4>Miễn phí giao hàng</h4>
                            <p>cho đơn hàng bán kính dưới 500m tại cửa hàng</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
                <!-- Static Single Item Start -->
                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                    <div class="single-static pb-res-md-0 pb-res-sm-0 pb-res-xs-0 pt-res-xs-20">
                        <img src="{{asset('assets/client/images/icons/static-icons-2.png')}}" alt="" class="img-responsive" />
                        <div class="single-static-meta">
                            <h4>Đặt hàng trực tuyến</h4>
                            <p>Đặt hàng nhanh gọn trực tuyến trên internet</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
                <!-- Static Single Item Start -->
                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                    <div class="single-static pt-res-md-30 pb-res-sm-30 pb-res-xs-0 pt-res-xs-20">
                        <img src="{{asset('assets/client/images/icons/static-icons-3.png')}}" alt="" class="img-responsive" />
                        <div class="single-static-meta">
                            <h4>Thanh toán đa dạng</h4>
                            <p>Thanh toán đa dạng theo nhiều loại hình </p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
                <!-- Static Single Item Start -->
                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                    <div class="single-static pt-res-md-30 pb-res-sm-30 pt-res-xs-20">
                        <img src="{{asset('assets/client/images/icons/static-icons-4.png')}}" alt="" class="img-responsive" />
                        <div class="single-static-meta">
                            <h4>Hỗ trợ 24/7</h4>
                            <p>Gọi cho chúng tôi nếu bạn có thắc mắc</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
            </div>
        </div>
    </div>
</section>
<!-- Static Area End -->
<!-- Best Sells Area Start -->
<section class="best-sells-area mb-30px">
    <div class="container">
        <!-- Section Title Start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>HOT DEAL!</h2>
                </div>
            </div>
        </div>
        <!-- Section Title End -->
        <!-- Best Sell Slider Carousel Start -->
        <div class="best-sell-slider owl-carousel owl-nav-style">
            <article class="list-product">
                <div class="img-block">
                    <a href="{{route('client.single-product')}}" class="thumbnail">
                        <img src="{{asset('assets/client//images/product-image/organic/product-1.jpg')}}" alt="" />
                    </a>
                </div>
                <ul class="product-flag">
                    <li class="new">Mới</li>
                </ul>
                <div class="product-decs">
                    <a class="inner-link" href="shop-4-column.html"><span>THỰC PHẨM</span></a>
                    <h2><a href="{{route('client.single-product')}}" class="product-link">Bim bim ôshi</a></h2>
                    <div class="rating-product">
                        <i class="ion-android-star"></i>
                        <i class="ion-android-star"></i>
                        <i class="ion-android-star"></i>
                        <i class="ion-android-star"></i>
                        <i class="ion-android-star"></i>
                    </div>
                    <div class="pricing-meta">
                        <ul>
                            <li class="old-price">7.000đ</li>
                            <li class="current-price">5.000đ</li>
                            <li class="discount-price">-20%</li>
                        </ul>
                    </div>
                </div>
                <div class="add-to-link">
                    <ul>
                        <li class="cart"><a class="cart-btn" href="#">Thêm vào giỏ</a></li>
                        <li>
                            <a href="{{route('client.wishlist')}}"><i class="ion-android-favorite-outline"></i></a>
                        </li>
                    </ul>
                </div>
            </article>
        </div>
        <!-- Best Sells Carousel End -->
    </div>
</section>
<!-- Best Sells Slider End -->

<!-- Category Area Start -->
<section class="categorie-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title -->
                <div class="section-title mt-res-sx-30px mt-res-md-30px">
                    <h2>DANH MỤC</h2>
                </div>
                <!-- Section Title -->
            </div>
        </div>
        <!-- Category Slider Start -->
        <div class="category-slider owl-carousel owl-nav-style">
            <!-- Single item -->
            @foreach($cates as $item)
            <div class="category-item">
                <div class="category-list mb-30px">
                    <div class="category-thumb">
                        <a href="shop-4-column.html">
                            <img src="{{$item->image}}" alt="" with="200" height="200"/>
                        </a>
                    </div>
                    <div class="desc-listcategoreis">
                        <div class="name_categories">
                            <h4 style = "color: white">{{$item->name}}</h4>
                        </div>
                        <span class="number_product">12</span>
                    </div>
                </div>
            </div>
            @endforeach            
        </div>
    </div>
</section>
<!-- Category Area End  -->

<!-- Feature Area Start -->
<section class="feature-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title -->
                <div class="section-title">
                    <h2>XEM NHIỀU NHẤT</h2>
                </div>
                <!-- Section Title -->
            </div>
        </div>
        <!-- Feature Slider Start -->
        <div class="feature-slider owl-carousel owl-nav-style">
            <!-- Single Item -->
            <div class="feature-slider-item">
                <article class="list-product">
                    <div class="img-block">
                        <a href="single-product.html" class="thumbnail">
                            <img class="first-img" src="{{asset('assets/client/images/product-image/organic/product-18.jpg')}}" alt="" />
                        </a>
                    </div>
                    <div class="product-decs">
                        <a class="inner-link" href="shop-4-column.html"><span>THỰC PHẨM</span></a>
                        <h2><a href="single-product.html" class="product-link">Mì tôm oshi</a></h2>
                        <div class="rating-product">
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                        </div>
                        <div class="pricing-meta">
                            <ul>
                                <li class="old-price not-cut">120.000đ</li>
                            </ul>
                        </div>
                    </div>
                </article>
                <!-- Single Item -->
            </div>
            <!-- Feature Slider End -->
        </div>
</section>
@endsection