@extends('layout-client')
@section('content')
<!-- Breadcrumb Area start -->
<section class="breadcrumb-area" style="
    background: repeating-linear-gradient(21deg, #4fb68d96, #edb1b100 244px);
">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-hrading">Sản Phẩm</h1>
                    <ul class="breadcrumb-links">
                        <li><a href="{{route('client.homepage')}}">Trang chủ</a></li>
                        <li>Sản phẩm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->
<!-- Shop Category Area End -->
<div class="shop-category-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-lg-last col-md-12 order-md-first">

                <!-- Shop Top Area Start -->
                <div class="shop-top-bar">
                    <!-- Left Side start -->
                    <div class="shop-tab nav mb-res-sm-15">
                        <a class="active" href="#shop-1" data-toggle="tab">
                            <i class="fa fa-th show_grid"></i>
                        </a>
                        <a href="#shop-2" data-toggle="tab">
                            <i class="fa fa-list-ul"></i>
                        </a>
                        <p>Hiển thị 10 / 327 sản phẩm</p>
                    </div>
                    <!-- Left Side End -->
                    <!-- Right Side Start -->
                    <div class="select-shoing-wrap">

                        <div class="shot-product">
                            <p>Sắp xếp</p>
                        </div>
                        <div class="shop-select">
                            <select>
                                <option value="">Mới nhất</option>
                                <option value="">Cũ nhất</option>
                                <option value="">Từ thấp tới cao</option>
                                <option value="">Từ cao xuống thấp</option>
                            </select>
                        </div>
                    </div>
                    <!-- Right Side End -->
                </div>
                <!-- Shop Top Area End -->

                <!-- Shop Bottom Area Start -->
                <div class="shop-bottom-area mt-35">
                    <!-- Shop Tab Content Start -->
                    <div class="tab-content jump">
                        <!-- Tab One Start -->
                        <div id="shop-1" class="tab-pane active">

                            <div class="row">
                            @foreach ($list_product as $item)
                                <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 col-xs-12">
                                
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="{{route('client.single-product',['id'=>$item->id])}}" class="thumbnail">
                                            <img src="../{{$item->image_gallery}}" alt="" width="256" height="256"/>
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
                                            <li class="cart">
                                                <a class="cart-btn" product-id='{{$item->id}}' href="#">Thêm vào giỏ</a>
                                            </li>
                                            <li>
                                                <a href="{{route('client.wishlist')}}"><i class="ion-android-favorite-outline"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>  
                            
                                </div>
                                @endforeach    
                            </div>

                        </div>
            
                    </div>
                    <!-- Shop Tab Content End -->
                    <!--  Pagination Area Start -->
                    <div class="pro-pagination-style text-center">
                    
                        <ul>
                            <li>
                            {{$list_product->links()}}
                            </li>
                        </ul>
                    </div>
                    <!--  Pagination Area End -->

                </div>
                <!-- Shop Bottom Area End -->
            </div>
            <!-- Sidebar Area Start -->
            <div class="col-lg-3 order-lg-first col-md-12 order-md-last mb-res-md-60px mb-res-sm-60px">
                <div class="left-sidebar">
                    <div class="sidebar-heading">
                        <div class="main-heading">
                            <h2>Lọc</h2>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="pro-sidebar-title">Danh mục</h4>
                          
                            <div class="sidebar-widget-list">
                                <ul>
                                    @foreach($cates as $item)
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox"  /> <a href="{{ route('client.product') }}">{{ $item->name }} ({{  count($item->products) }})</span>
                                            </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    @endforeach   
                                </ul>
                            </div>
                            
                        </div>
                        <!-- Sidebar single item -->
                    </div>
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget mt-20">
                        <h4 class="pro-sidebar-title">Giá</h4>
                        <div class="price-filter mt-10">
                            <div class="price-slider-amount">
                                <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                            </div>
                            <div id="slider-range"></div>
                        </div>
                    </div>
                    <div class="sidebar-widget tag mt-30">
                        <div class="main-heading">
                            <h2>Tag</h2>
                        </div>
                        <div class="sidebar-widget-tag">
                            <ul>
                                <li><a href="#">Fresh Fruit</a></li>
                                <li><a href="#">Vegetables</a></li>
                                <li><a href="#">Fresh Salad</a></li>
                                <li><a href="#"> Butter & Eggs</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar single item -->
                </div>
            </div>
            <!-- Sidebar Area End -->
        </div>
    </div>
</div>
<!-- Shop Category Area End -->
@endsection