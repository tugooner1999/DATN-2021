@extends('layout-client')
@section('content')
<!-- Breadcrumb Area start -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-hrading">chi tiết sản phẩm</h1>
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
                            <img class="zoompro" src="{{asset('assets/client/images/product-image/organic/product-11.jpg')}}"
                                data-zoom-image="{{asset('assets/client/images/product-image/organic/zoom/1.jpg')}}" alt="" />
                        </div>
                    </div>
                    <div id="gallery" class="product-dec-slider-2">
                        <a class="active" data-image="{{asset('assets/client/images/product-image/organic/product-11.jpg')}}"
                            data-zoom-image="{{asset('assets/client/images/product-image/organic/zoom/1.jpg')}}">
                            <img src="{{asset('assets/client/images/product-image/organic/product-11.jpg')}}" alt="" />
                        </a>
                        <a data-image="{{asset('assets/client/images/product-image/organic/product-9.jpg')}}"
                            data-zoom-image="{{asset('assets/client/images/product-image/organic/zoom/2.jpg')}}">
                            <img src="{{asset('assets/client/images/product-image/organic/product-9.jpg')}}" alt="" />
                        </a>
                        <a data-image="{{asset('assets/client/images/product-image/organic/product-20.jpg')}}"
                            data-zoom-image="{{asset('assets/client/images/product-image/organic/zoom/3.jpg')}}">
                            <img src="{{asset('assets/client/images/product-image/organic/product-20.jpg')}}" alt="" />
                        </a>
                        <a data-image="{{asset('assets/client/images/product-image/organic/product-19.jpg')}}"
                            data-zoom-image="{{asset('assets/client/images/product-image/organic/zoom/4.jpg')}}">
                            <img src="{{asset('assets/client/images/product-image/organic/product-19.jpg')}}" alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="product-details-content">
                    <h2>Bim bim Snack Oshi</h2>
                    <p class="reference">Thực phẩm</p>
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
                    <div class="pricing-meta">
                        <ul>
                            <li class="old-price not-cut">10.000đ</li>
                        </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore
                        magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                    <div class="pro-details-quality mt-0px">
                        <div class="cart-plus-minus">
                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                        </div>
                        <div class="pro-details-cart btn-hover">
                            <a href="#"> Thêm vào giỏ</a>
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
                            <li><img src="{{asset('assets/client/images/icons/policy-3.png')}}" alt="" /><span>Áp dụng mã giảm giá</span>
                            </li>
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
                <a class="active" data-toggle="tab" href="#des-details2">MÔ TẢ</a>
                <a data-toggle="tab" href="#des-details3">Bình Luận</a>
            </div>
            <div class="tab-content description-review-bottom">
                <div id="des-details2" class="tab-pane active">
                    <div class="product-anotherinfo-wrapper">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        <p>
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in
                            voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                            in culpa qui officia deserunt
                        </p>
                    </div>
                </div>
                <div id="des-details3" class="tab-pane">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="review-wrapper">
                                <div class="single-review">
                                    <div class="review-img">
                                        <img src="{{asset('assets/client/images/testimonial-image/1.png')}}" alt="" />
                                    </div>
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-left">
                                                <div class="review-name">
                                                    <h4>White Lewis</h4>
                                                </div>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                            </div>
                                            <div class="review-left">
                                                <a href="#">Reply</a>
                                            </div>
                                        </div>
                                        <div class="review-bottom">
                                            <p>
                                                Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia
                                                Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula.
                                                Phasellus quam nisi, congue id nulla.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="ratting-form-wrapper pl-50">
                                <div class="ratting-form">
                                    <form action="#">
                                        <div class="star-box">
                                            <span>Đánh giá:</span>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="rating-form-style form-submit">
                                                    <textarea name="Nội dung" placeholder="Message"></textarea>
                                                    <input type="submit" value="Bình Luận" />
                                                </div>
                                            </div>
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
            <article class="list-product">
                <div class="img-block">
                    <a href="{{route('client.single-product')}}" class="thumbnail">
                        <img src="{{asset('assets/client/images/product-image/organic/product-1.jpg')}}" alt="" />
                    </a>
                </div>
                <ul class="product-flag">
                    <li class="new">Mới</li>
                </ul>
                <div class="product-decs">
                    <a class="inner-link" href="#"><span>THỰC PHẨM</span></a>
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
                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                        </li>
                    </ul>
                </div>
            </article>
            <!-- End Single Item -->
        </div>
        <!-- Recent product slider end -->
    </div>
</section>
<!-- Recent product area end -->
@endsection