@extends('layout-client')
@section('content')
<!-- Breadcrumb Area start -->
<section class="breadcrumb-area" style="
    background: repeating-linear-gradient(21deg, #4fb68d96, #edb1b100 244px);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-hrading">Chi tiết sản phẩm</h1>
                    <ul class="breadcrumb-links">
                        <li><a href="{{route('client.homepage')}}">Trang chủ</a></li>
                        <li>Chi tiết</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->
<!-- Shop details Area start -->
<section class="product-details-area mtb-60px">
    <div class="container">
        <div class="row">

            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="product-details-img product-details-tab">
                    <div class="zoompro-wrap zoompro-2">
                        <div class="zoompro-border zoompro-span">
                            <img class="zoompro" src="../../{{$product->image_gallery}}" data-zoom-image="../../{{$product->image_gallery}}" alt="" width="80" height="500"/>
                        </div>
                    </div>
                    <div id="gallery" class="product-dec-slider-2" style="text-align: left">
                        <a class="active" data-image="../../{{$product->image_gallery}}"
                            data-zoom-image="../../{{$product->image_gallery}}">
                            <img src="../../{{$product->image_gallery}}" alt="" />
                        </a>
                        @foreach($img_url as $img)
                        <a data-image="../../{{$img->img_url}}"
                            data-zoom-image="../../{{$img->img_url}}">
                            <img src="../../{{$img->img_url}}" alt="" />
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="product-details-content">
                    <h2>{{$product->name}}</h2>
                    <p class="reference">{{isset($product->category) ? $product->category->name : ''}}</p>
                    <div class="pro-details-rating-wrap">
                        <div class="rating-product">
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                        </div>

                        <span class="read-review"><a class="reviews" href="#">Bình luận (1)</a></span>
                    </div>
                    <p>{{$product->description}}</p>
                    <div class="pricing-meta">
                        <ul>
                            <li  class="old-price not-cut text-danger">Giá :{{number_format($product->price)}}đ</li><br>
                            <li class="tinhtrang pb-2">Tình trạng : <b>{{$product->quantily <= 0 ? " Hết hàng " : " Còn hàng "}}</b></li>
                        </ul>
                    </div>
                    <div class="pro-details-quality mt-0px">
                        <div class="pro-details-cart btn-hover" >
                        <a product-id='{{$product->id}}'
                        @if(Auth::check())
                        class="cart-btn"
                        @else
                        href="{{route('client.login')}}"
                        @endif
                        >Thêm vào giỏ</a></li>
                        </div>
                        <div class="cart-plus-minus" style="visibility: hidden;">
                            <input class="cart-plus-minus-box" type="text" name="quantily" value="1" />
                            <input class="cart-plus-minus-box" prod-id="{{$product['id']}}" type="text" name="quantily" value="1" />
                        </div>
                    </div>
                    <div class="pro-details-wish-com">
                        <div class="pro-details-wishlist">
                            <a href="#"><i class="ion-android-favorite-outline"></i>Thêm vào danh sách yêu thích</a>
                        </div>
                    </div>
                    <div class="pro-details-social-info">
                        <span>Chia sẻ</span>
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
                    <div class="pro-details-policy">
                        <ul>
                            <li><img src="{{asset('assets/client/images/icons/policy.png')}}" alt="" /><span>Giao hàng miễn phí</span></li>
                            <li><img src="{{asset('assets/client/images/icons/policy-2.png')}}" alt="" /><span>Miễn phí đổi trả</span></li>
                            <li><img src="{{asset('assets/client/images/icons/policy-3.png')}}" alt="" /><span>Áp dụng mã giảm giá</span>s</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop details Area End -->
<!-- product details description area start -->
<div class="description-review-area mb-60px">
    <div class="container">
        <div class="description-review-wrapper">
            <div class="description-review-topbar nav">
                <a class="active" data-toggle="tab" href="#des-details3">Bình Luận</a>
                <a data-toggle="tab" href="#des-details2">MÔ TẢ</a>
            </div>
            <div class="tab-content description-review-bottom">
                <div id="des-details2" class="tab-pane">
                    <div class="product-anotherinfo-wrapper">
                        <p>{{$product->description}}</p>
                    </div>
                </div>
                <div id="des-details3" class="tab-pane active">
                    <div class="row">
                        <div class="col-lg-12">
                            @foreach($comments as $item)
                            <div class="review-wrapper">
                                <div class="single-review">
                                    <div class="review-img">
                                        <img src="../../{{isset($item->user_comment) ? $item->user_comment->avatar : ''}}"
                                            width="60" height="80" style="border-radius:100px;" alt="" />
                                    </div>
                                    
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-left">
                                                <div class="review-name">
                                                    <h4 style="line-height:2;font-weight:bold;">
                                                        {{isset($item->user_comment) ? $item->user_comment->name : ''}}
                                                    </h4>
                                                </div>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                            </div>
                                            <!-- <div class="review-left">
                                                <a href="#">Reply</a>
                                            </div> -->
                                        </div>
                                        <div class="review-bottom">
                                            <p style="width:100%;">
                                                {{$item->ra_content}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                        <div class="col-lg-12" style="height: 28px; border-top: 1px solid #ebebeb; margin-top: 30px;">
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="ratting-form-wrapper pl-50">
                                <div class="ratting-form">


                                    <!-- đánh giá sản phẩm theo rating -->
                                    <div class="component_rating">
                                        <h3 style="font-weight:bold; font-size:30px; ">Đánh giá sản phẩm</h3>
                                        <div class="row component_rating_content"
                                            style="display:flex; align-items:center; border:1px solid #dedede;width:100%;margin:25px auto;">
                                            <div class="col-sm-3">
                                                <div class="rating-item"
                                                    style=" posision:relative; border-right: 1px solid #dedede;">
                                                    <div class=""><span class="fa fa-star"
                                                            style="font-size:100px; color:#ff9705;display:block; margin:0 auto; text-align:center;"></span>
                                                        <b
                                                            style="position:absolute; top:50%; left:50%;transform:translateX(-50%) translateY(-40%); font-size: 26px;color: #fff;">2.5</b>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-1"></div>

                                            <div class="col-sm-7">
                                                <div class="list_rating" style="padding:20px;">
                                                    @for($i = 1; $i <= 5; $i++) <div class="item_rating"
                                                        style="display:flex; align-items:center;">
                                                        <div style="width:10%;">
                                                            {{ $i }}<span class="fa fa-star" style="padding: 0 5px;"></span>
                                                        </div>
                                                        <div style="width:70%; margin:0 20px;">
                                                            <span class=""
                                                                style="width:100%; height:8px; display:block; border:1px solid #dedede; border-radius:5px;">
                                                                <b
                                                                    style="width:30%; background-color:#f25800; display:block; height:100%; border-radius:5px;"></b>
                                                            </span>
                                                        </div>
                                                        <div style="width:20%;">
                                                            <a style="color:#666;" href="">290 đánh giá</a>
                                                        </div>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- <div class="star-box">
                                            <span style="margin: 0px 15px 0 0;">Đánh giá:</span>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div> -->

                                @if(isset(Auth::user()->name))
                                <?php
                                $listRatingText = [
                                    1 => 'Không thích',
                                    2 => 'Tạm được',
                                    3 => 'Bình thường',
                                    4 => 'Rất tốt',
                                    5 => 'Tuyệt vời',
                                ];
                                ?>
                                <div class="" style="display:flex; font-size:20px;">
                                    <p style="font-weight:bold;margin-bottom:0;">Chọn đánh giá của bạn </p>
                                    <span class="list_start" ; style="margin:0 30px;">
                                        @for($i = 1; $i <= 5; $i++) <i class="fa fa-star" data-key="{{ $i }}" style="padding: 0 3px;"></i>
                                            @endfor
                                    </span>
                                    <span class="list_text"></span>
                                    <input type="hidden" value="" class="number_rating">
                                </div>
                                <br>
                                <div class="row">
                                    <br>
                                    <div class="col-md-12">
                                        <form method="POST" class="form-rating-submit" action="{{URL::to('/client/single-product/rating/'.$product->id)}}"
                                            role="form">
                                            @csrf
                                            <p style="color:green; font-weight:bold;  font-size:18px; margin:15px 0px;">
                                                @if(session('thongbao'))
                                                {{session('thongbao')}}
                                                @endif
                                            </p>
                                            <div class="rating-form-style form-submit">
                                                <textarea name="ra_content" id="ra_content"
                                                    placeholder="Viết bình luận ..."></textarea>
                                                <input type="submit" class="js_rating_product" value="Bình Luận" />
                                                <!-- <a class="js_rating_product" 
                                                style="background:#4fb68d;color:#fff;padding:10px 31px;font-size:19px;border-radius:25px;"
                                                 href="{{route('client.comment_product',$product->id)}}">GỬI</a> -->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- {{URL::to('/client/single-product/rating/'.$product->id)}} -->
<!-- product details description area end -->
<!-- Recent Add Product Area Start -->
<section class="recent-add-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title -->
                <div class="section-title">
                    <h2>Sản phẩm liên quan</h2>
                </div>
                <!-- Section Title -->
            </div>
        </div>
        <!-- Recent Product slider Start -->
        <div class="recent-product-slider owl-carousel owl-nav-style">
            <!-- Single Item -->
            @foreach($cates as $item)
            <article class="list-product">
                <div class="img-block">
                    <a href="{{route('client.single-product',['id'=>$item->id])}}" class="thumbnail">
                        <img src="../../{{$item->image_gallery}}" alt="" />
                    </a>
                </div>
                <ul class="product-flag">
                    <li class="new">Mới</li>
                </ul>
                <div class="product-decs">
                    <a class="inner-link" href="{{route('client.single-product',['id'=>$item->id])}}"><span>THỰC PHẨM</span></a>
                    <h2><a href="" class="product-link">{{$item->name}}</a></h2>
                    <div class="rating-product">
                        <i class="ion-android-star"></i>
                        <i class="ion-android-star"></i>
                        <i class="ion-android-star"></i>
                        <i class="ion-android-star"></i>
                        <i class="ion-android-star"></i>
                    </div>
                    <div class="pricing-meta">
                        <ul>
                            <!-- <li class="old-price">{{$item->name}}</li> -->
                            <li class="current-price">{{number_format($item->price)}}đ</li>
                            <li class="discount-price">-20%</li>
                        </ul>
                    </div>
                </div>
                <div class="add-to-link">
                    <ul>
                        <li class="cart"><a @if(Auth::check()) class="cart-btn"  product-id='{{$item->id}}'
                                            @else href="{{route('client.login')}}"
                                            @endif>Thêm vào giỏ</a>
                        </li>
                        <li>
                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                        </li>
                    </ul>
                </div>
            </article>
            @endforeach
            <!-- End Single Item -->
        </div>
        <!-- Recent product slider end -->
    </div>
</section>
<!-- Recent product area end -->
@endsection
