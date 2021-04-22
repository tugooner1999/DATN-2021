@extends('layout-client')
@section('content')


<!-- Slider Arae Start -->
<div class="slider-area">
    <div class="slider-active-3 owl-carousel slider-hm8 owl-dot-style">
        <!-- Slider Single Item Start -->
        @foreach ($slider as $ad)
        <div class="slider-height-6 d-flex align-items-start justify-content-start bg-img"
            style="background-image: url({{$ad->image}});">
            <div class="container">
                <div class="slider-content-1 slider-animated-1 text-left">
                    <span class="animated">{{ $ad->description }}</span>
                    <h1 class="animated">
                        {{$ad->title}}
                    </h1>
                    <p class="animated">Giao hàng miễn phí trong 500m</p>
                    <a href="shop-4-column.html" class="shop-btn animated">ĐẶT HÀNG</a>
                </div>
            </div>
        </div>
        @endforeach

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
                    <h2>HOT DEAL!
                    </h2>
                </div>
            </div>
        </div>
        <!-- Section Title End -->
        <!-- Best Sell Slider Carousel Start -->
        <div class="best-sell-slider owl-carousel owl-nav-style">
            @foreach ($product as $item)
            
            <article class="list-product">
                <div class="img-block">
                    <a href="{{route('client.single-product', ['id'=>$item->id])}}" class="thumbnail">
                        <img src="{{$item->image_gallery}}" alt="" width="256" height="256"/>
                    </a>
                </div>

                <ul class="product-flag">
                    <li class="{{$item->quantily <= 0 ? 'new bg-danger' : 'new'}}">{{$item->quantily <= 0 ? "Hết hàng" : "Mới"}}</li>
                </ul>
                <div class="product-decs">
                    <a class="inner-link" href="shop-4-column.html"><span>{{isset($item->category) ? $item->category->name : ''}}</span></a>
                    <h2><a href="{{route('client.single-product',['id'=>$item->id])}}" class="product-link">{{$item->name}}</a></h2>
                    <div class="rating-product">
                        <i class="ion-android-star"></i>
                        <i class="ion-android-star"></i>
                        <i class="ion-android-star"></i>
                        <i class="ion-android-star"></i>
                        <i class="ion-android-star"></i>
                    </div>
                    <div class="pricing-meta">
                        <ul>
                            <li class="current-price">{{number_format($item->price)}}đ</li>
                        </ul>
                    </div>
                </div>
                <div class="add-to-link">
                    <ul>
                        <li class="cart"><a
                        @if(Auth::check())
                        class="cart-btn"
                        product-id='{{$item->id}}'
                        @else
                        href="{{route('client.login')}}"
                        @endif
                        >Thêm vào giỏ</a></li>
                        <li>
                            <a href="{{route('client.wishlist')}}"><i class="ion-android-favorite-outline"></i></a>
                        </li>
                    </ul>
                </div>
            </article>
        @endforeach
        </div>
        <!-- Best Sells Carousel End -->
    </div>
</section>
<!-- Best Sells Slider End -->

<!-- Category Area Start -->
<section class="categorie-area" style="
    height: 326px;
">
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
                <div class="category-list banner-inner banner-box" style="border: outset; ">
                    <div class="category-thumb">
                        <a href="{{route('client.shop')}}">
                            <img src="{{$item->image}}" alt="" width="" height="200"/>
                        </a>
                    </div>
                    <div class="desc-listcategoreis">
                        <div class="name_categories">
                            <h4>{{$item->name}}</h4>
                        </div>
                        <span class="number_product" >{{count($item->products) }} Sản phẩm</span>
                        <a href="{{route('client.shop')}}"> Shop Now <i class="ion-android-arrow-dropright-circle"></i></a>
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
             @foreach ($product as $item)
             <div class="feature-slider-item">
             <article class="list-product">
                    <div class="img-block">
                        <a href="{{route('client.single-product', ['id'=>$item->id])}}" class="thumbnail">
                            <img class="first-img" src="{{$item->image_gallery}}" alt="" />
                        </a>
                    </div>
                    <div class="product-decs">
                        <a class="inner-link" href="shop-4-column.html"><span>{{isset($item->category) ? $item->category->name : ''}}</span></a>
                        <h2><a href="{{route('client.single-product', ['id'=>$item->id])}}" class="product-link">{{$item->name}}</a></h2>
                        <div class="rating-product">
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                        </div>
                        <div class="pricing-meta">
                            <ul>
                                <li class="current-price">{{number_format($item->price)}}đ</li>
                            </ul>
                        </div>
                    </div>
                </article>
                </div>
        @endforeach
            <!-- Feature Slider End -->
        </div>
</section>
<div class="banner-area-2 mt-0px mb-100px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="banner-inner banner-box">
                            <a href="shop-4-column.html"><img src="{{asset('assets/client/images/banner-image/4.jpg')}}" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
