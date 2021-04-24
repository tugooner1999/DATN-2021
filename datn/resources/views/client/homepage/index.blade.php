@extends('layout-client')
@section('content')
<style>
.rating-active .active {
    color: #ff9705 !important;
}
</style>
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

<!-- Category Area Start -->
<section class="categorie-area" style="height: 326px; margin-top: 50px;">
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
                            <img src="{{$item->image}}" alt="" width="" height="200" />
                        </a>
                    </div>
                    <div class="desc-listcategoreis">
                        <div class="name_categories">
                            <h4>{{$item->name}}</h4>
                        </div>
                        <span class="number_product">{{count($item->products) }} Sản phẩm</span>
                        <a href="{{route('client.shop')}}"> Shop Now <i
                                class="ion-android-arrow-dropright-circle"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Category Area End  -->

<!-- Best Sells Area Start -->
<section class="best-sells-area mb-30px">
    <div class="container">
        <!-- Section Title Start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Sản phẩm đi chợ
                    </h2>
                </div>
            </div>
        </div>
        <!-- Section Title End -->
        <!-- Best Sell Slider Carousel Start -->
        <div class="best-sell-slider owl-carousel owl-nav-style">
            @foreach ($market_product as $item)
            <?php
                $avg = 0;
                if($item->pro_total_rating){
                    $avg = round($item->pro_total_number / $item->pro_total_rating, 2);
                }
            ?>
            <article class="list-product">
                
                <div class="img-block">
                    <a href="{{route('client.single-product', ['id'=>$item->id])}}" class="thumbnail">
                        <img src="{{$item->image_gallery}}" alt="" width="256" height="256" />
                    </a>
                </div>
                
                <ul class="product-flag">
                    <li class="{{$item->quantily <= 0 ? 'new bg-danger' : 'new'}}">
                        {{$item->quantily <= 0 ? "Hết hàng" : "Mới"}}</li>
                </ul>
                <div class="product-decs">
                    <a class="inner-link"
                        href="shop-4-column.html"><span>{{isset($item->category) ? $item->category->name : ''}}</span>
                    </a>
                    
                    <h2><a href="{{route('client.single-product',['id'=>$item->id])}}"
                            class="product-link">{{$item->name}}</a></h2>
                    <div class="rating-active">
                        @for($i = 1; $i <= 5; $i++) <i class="fa fa-star {{ $i <= $avg ? 'active' : '' }}">
                            </i>
                            @endfor
                    </div>
                    <div class="pricing-meta">
                        <ul>
                            <li class="">{{($item->views)}} Views</li>
                        </ul>
                        <ul>
                            <li class="current-price">{{number_format($item->price)}}đ</li>
                        </ul>
                    </div>
                </div>
                <div class="add-to-link">
                    <ul>
                        <li class="cart">
                            @if ($today <= "09:00:00" && $item->allow_market ==2)
                            <a @if(Auth::check()) class="cart-btn" product-id='{{$item->id}}' @else
                                href="{{route('client.login')}}" @endif >Thêm vào giỏ</a>
                            @endif
                            @if ($item->allow_market ==1)
                            <a @if(Auth::check()) class="cart-btn" product-id='{{$item->id}}' @else
                                href="{{route('client.login')}}" @endif >Thêm vào giỏ</a>
                            @endif

                            @if($today > "09:00:00" && $item->allow_market ==2)
                            <a @if(Auth::check()) class="cart-btns" product-id='{{$item->id}}' @else
                                href="{{route('client.login')}}" @endif >Thêm vào giỏ</a>
                            @endif
                        </li>
                       
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

<!-- Hot deal area Start -->
<section class="hot-deal-area mb-30px">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Section Title -->
                        <div class="section-title">
                            <h2>Sản phẩm hót</h2>
                            <p>Xem ngay những sản phẩm dành cho bạn</p>
                        </div>
                        <!-- Section Title End-->
                    </div>
                </div>
                <!-- Hot Deal Slider Start -->
                <div class="hot-deal owl-carousel owl-nav-style mb-res-sm-30px mb-res-sm-30px">
                    <!--  Single item -->
                    @foreach ($new_product as $item)
                    <?php
                        $avg = 0;
                        if($item->pro_total_rating){
                            $avg = round($item->pro_total_number / $item->pro_total_rating, 2);
                        }
                    ?>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="{{route('client.single-product', ['id'=>$item->id])}}" class="thumbnail">
                                <img class="first-img" style="width: 83%;margin: 0 auto;" src="{{$item->image_gallery}}"
                                    alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                    data-toggle="modal" data-target="#exampleModal">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">Mới</li>
                        </ul>
                        <div class="product-decs">
                            <a class="inner-link"
                                href="shop-4-column.html"><span>{{isset($item->category) ? $item->category->name : ''}}</span></a>
                            <h2><a href="{{route('client.single-product',['id'=>$item->id])}}"
                                    class="product-link">{{$item->name}}</a></h2>
                            <div class="rating-active">
                                @for($i = 1; $i <= 5; $i++) <i class="fa fa-star {{ $i <= $avg ? 'active' : '' }}">
                                    </i>
                                    @endfor
                            </div>
                            <div class="pricing-meta">
                                <ul style="padding:7px;">
                                    <li class="">Lượt xem : {{($item->views)}}</li>
                                </ul>
                                <ul>
                                    <li class="current-price">{{number_format($item->price)}}đ</li>
                                </ul>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" product-id='{{$item->id}}' href="#">Thêm vào giỏ </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="in-stock" style="padding:10px;">Số lượng: <span>{{$item->quantily}} trong kho</span></div>
                        </div>
                    </article>
                    @endforeach
                </div>
                <!-- Hot Deal Slider end -->
            </div>
            <!-- New Arrivals Area Start -->
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Section Title -->
                        <div class="section-title ml-0px">
                            <h2>Sản phẩm mới</h2>
                            <p>Cùng nhau trải nhiệm những món quà cực kì hấp dẫn</p>
                        </div>
                        <!-- Section Title -->
                    </div>
                </div>

                <div class="new-product-slider owl-carousel owl-nav-style">
                    <!-- Product Single Item -->
                    @foreach ($new_product as $item)
                        <?php
                            $avg = 0;
                            if($item->pro_total_rating){
                                $avg = round($item->pro_total_number / $item->pro_total_rating, 2);
                            }
                        ?>
                    <div class="product-inner-item">
                        <article class="list-product mb-30px">
                            <div class="img-block">
                                <a href="{{route('client.single-product', ['id'=>$item->id])}}" class="thumbnail">
                                    <img class="first-img" src="{{$item->image_gallery}}" alt="" />
                                    <!-- <img class="second-img" src="assets/images/product-image/organic/product-16.jpg"
                                        alt="" /> -->
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">Mơi</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link"
                                    href="{{route('client.single-product', ['id'=>$item->id])}}"><span>{{isset($item->category) ? $item->category->name : ''}}</span></a>
                                <h2><a href="{{route('client.single-product',['id'=>$item->id])}}" class="product-link">{{$item->name}}</a>
                                </h2>
                                <div class="rating-active">
                                    @for($i = 1; $i <= 5; $i++) <i class="fa fa-star {{ $i <= $avg ? 'active' : '' }}">
                                        </i>
                                        @endfor
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="current-price">{{number_format($item->price)}}đ</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" product-id='{{$item->id}}' href="#">Thêm vào giỏ </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>
                <hr>
                <br>
                <div class="new-product-slider owl-carousel owl-nav-style">
                    <!-- Product Single Item -->
                    @foreach ($new_product1 as $item)
                        <?php
                            $avg = 0;
                            if($item->pro_total_rating){
                                $avg = round($item->pro_total_number / $item->pro_total_rating, 2);
                            }
                        ?>
                    <div class="product-inner-item">
                        <article class="list-product mb-30px">
                            <div class="img-block">
                                <a href="{{route('client.single-product', ['id'=>$item->id])}}" class="thumbnail">
                                    <img class="first-img" src="{{$item->image_gallery}}" alt="" />
                                    <!-- <img class="second-img" src="assets/images/product-image/organic/product-16.jpg"
                                        alt="" /> -->
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                        data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">Mơi</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link"
                                    href="{{route('client.single-product', ['id'=>$item->id])}}"><span>{{isset($item->category) ? $item->category->name : ''}}</span></a>
                                <h2><a href="{{route('client.single-product',['id'=>$item->id])}}" class="product-link">{{$item->name}}</a>
                                </h2>
                                <div class="rating-active">
                                    @for($i = 1; $i <= 5; $i++) <i class="fa fa-star {{ $i <= $avg ? 'active' : '' }}">
                                        </i>
                                        @endfor
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="current-price">{{number_format($item->price)}}đ</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" product-id='{{$item->id}}' href="#">Thêm vào giỏ </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hot Deal Area End -->


<div class="banner-area-2 mt-0px mb-100px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-inner banner-box">
                    <a href="shop-4-column.html"><img src="{{asset('assets/client/images/banner-image/4.jpg')}}"
                            alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</div>

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
            @foreach ($new_product as $item)
            <?php
                $avg = 0;
                if($item->pro_total_rating){
                    $avg = round($item->pro_total_number / $item->pro_total_rating, 2);
                }
            ?>
            <div class="feature-slider-item">
                <article class="list-product">
                    <div class="img-block">
                        <a href="{{route('client.single-product', ['id'=>$item->id])}}" class="thumbnail">
                            <img class="first-img" src="{{asset($item->image_gallery)}}" alt="" />
                        </a>
                    </div>
                    <div class="product-decs" style="width:51%;">
                        <a class="inner-link" style="margin-bottom: -60px;"
                            href="shop-4-column.html"><span>{{isset($item->category) ? $item->category->name : ''}}</span></a>
                        <h2
                            style="white-space: pre-wrap;  width:100%;overflow: hidden; text-overflow: ellipsis; -webkit-line-clamp: 3;-webkit-box-orient: vertical;display: -webkit-box;">
                            <a href="{{route('client.single-product', ['id'=>$item->id])}}"
                                class="product-link">{{$item->name}}</a>
                        </h2>
                        <div class="rating-active" style="padding: 4px 0px;">
                            @for($i = 1; $i <= 5; $i++) <i class="fa fa-star {{ $i <= $avg ? 'active' : '' }}"></i>
                                @endfor
                        </div>
                        <div class="pricing-meta">
                            <ul>
                                <li class="">{{($item->views)}} Views</li>
                            </ul>
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
            <!-- form modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="tab-content quickview-big-img">
                            <div id="pro-1" class="tab-pane fade show active">
                                <img src="assets/images/product-image/organic/product-11.jpg" alt="" />
                            </div>
                            <div id="pro-2" class="tab-pane fade">
                                <img src="assets/images/product-image/organic/product-9.jpg" alt="" />
                            </div>
                            <div id="pro-3" class="tab-pane fade">
                                <img src="assets/images/product-image/organic/product-20.jpg" alt="" />
                            </div>
                            <div id="pro-4" class="tab-pane fade">
                                <img src="assets/images/product-image/organic/product-19.jpg" alt="" />
                            </div>
                        </div>
                        <!-- Thumbnail Large Image End -->
                        <!-- Thumbnail Image End -->
                        <div class="quickview-wrap mt-15">
                            <div class="quickview-slide-active owl-carousel nav owl-nav-style owl-nav-style-2" role="tablist">
                                <a class="active" data-toggle="tab" href="#pro-1"><img src="assets/images/product-image/organic/product-11.jpg" alt="" /></a>
                                <a data-toggle="tab" href="#pro-2"><img src="assets/images/product-image/organic/product-9.jpg" alt="" /></a>
                                <a data-toggle="tab" href="#pro-3"><img src="assets/images/product-image/organic/product-20.jpg" alt="" /></a>
                                <a data-toggle="tab" href="#pro-4"><img src="assets/images/product-image/organic/product-19.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-details-content quickview-content">
                            <h2>Originals Kaval Windbr</h2>
                            <p class="reference">Reference:<span> demo_17</span></p>
                            <div class="pro-details-rating-wrap">
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                            <div class="pro-details-size-color">
                                <div class="pro-details-color-wrap">
                                    <span>Color</span>
                                    <div class="pro-details-color-content">
                                        <ul>
                                            <li class="blue"></li>
                                            <li class="maroon active"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                </div>
                                <div class="pro-details-cart btn-hover">
                                    <a href="#"> + Add To Cart</a>
                                </div>
                            </div>
                            <div class="pro-details-wish-com">
                                <div class="pro-details-wishlist">
                                    <a href="#"><i class="ion-android-favorite-outline"></i>Add to wishlist</a>
                                </div>
                                <div class="pro-details-compare">
                                    <a href="#"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                </div>
                            </div>
                            <div class="pro-details-social-info">
                                <span>Share</span>
                                <div class="social-info">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="ion-social-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Static Area Start -->
<section class="static-area mtb-60px">
    <div class="container">
        <div class="static-area-wrap">
            <div class="row">
                <!-- Static Single Item Start -->
                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                    <div class="single-static pb-res-md-0 pb-res-sm-0 pb-res-xs-0">
                        <img src="{{asset('assets/client/images/icons/static-icons-1.png')}}" alt=""
                            class="img-responsive" />
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
                        <img src="{{asset('assets/client/images/icons/static-icons-2.png')}}" alt=""
                            class="img-responsive" />
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
                        <img src="{{asset('assets/client/images/icons/static-icons-3.png')}}" alt=""
                            class="img-responsive" />
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
                        <img src="{{asset('assets/client/images/icons/static-icons-4.png')}}" alt=""
                            class="img-responsive" />
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
@endsection
