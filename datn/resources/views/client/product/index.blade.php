           @extends('layout-client')
           @section('content')

           <!-- Breadcrumb Area start -->
           <section class="breadcrumb-area">
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
<<<<<<< HEAD
                                        @foreach ($product as $item)
                                           <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 col-xs-12">
                                            
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="{{route('client.single-product')}}" class="thumbnail">
                                                        <img src="../public/uploads/products/{{$item->image_gallery}}" alt="" width="256" height="256"/>
                                                    </a>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">Mới</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>{{isset($item->category) ? $item->category->name : ''}}</span></a>
                                                    <h2><a href="{{route('client.single-product')}}" class="product-link">{{$item->name}}</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="current-price">{{$item->price}}vnđ</li>
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
                                           @endforeach    
=======
                                           @foreach($list_product as $item)
                                           <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 col-xs-12">
                                               <article class="list-product">
                                                   <div class="img-block">
                                                       <a href="{{route('client.single-product')}}" class="thumbnail">
                                                           <img src="../{{$item->image_gallery}}" alt="" width="256"
                                                               height="256" />
                                                       </a>
                                                   </div>
                                                   <ul class="product-flag">
                                                       <li class="new">Mới</li>
                                                   </ul>
                                                   <div class="product-decs">
                                                       <a class="inner-link"
                                                           href="shop-4-column.html"><span>{{isset($item->category) ? $item->category->name : ''}}</span></a>
                                                       <h2><a href="{{route('client.single-product')}}"
                                                               class="product-link">{{$item->name}}</a></h2>
                                                       <div class="rating-product">
                                                           <i class="ion-android-star"></i>
                                                           <i class="ion-android-star"></i>
                                                           <i class="ion-android-star"></i>
                                                           <i class="ion-android-star"></i>
                                                           <i class="ion-android-star"></i>
                                                       </div>
                                                       <div class="pricing-meta">
                                                           <ul>
                                                               <!-- <li class="old-price">7.000đ</li> -->
                                                               <li class="current-price">{{$item->price}}</li>
                                                               <!-- <li class="discount-price">-20%</li> -->
                                                           </ul>
                                                       </div>
                                                   </div>
                                                   <div class="add-to-link">
                                                       <ul>
                                                           <li class="cart"><a class="cart-btn" href="#">Thêm vào
                                                                   giỏ</a></li>
                                                           <li>
                                                               <a href="{{route('client.wishlist')}}"><i
                                                                       class="ion-android-favorite-outline"></i></a>
                                                           </li>
                                                       </ul>
                                                   </div>
                                               </article>

                                           </div>
                                           @endforeach
>>>>>>> 3f328be4ac30d4c13c894e450ae9ced78e37bed8
                                       </div>

                                   </div>
<<<<<<< HEAD
                        
=======
                                   <!-- Tab One End -->
                                   <!-- Tab Two Start -->
                                   <div id="shop-2" class="tab-pane">
                                       <div class="shop-list-wrap mb-30px scroll-zoom">
                                           <div class="row list-product m-0px">
                                               <div class="col-md-12">
                                                   <div class="row">
                                                       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                           <div class="left-img">
                                                               <div class="img-block">
                                                                   <a href="{{route('client.single-product')}}"
                                                                       class="thumbnail">
                                                                       <img class="first-img"
                                                                           src="assets/images/product-image/organic/product-7.jpg"
                                                                           alt="" />
                                                                       <img class="second-img"
                                                                           src="assets/images/product-image/organic/product-8.jpg"
                                                                           alt="" />
                                                                   </a>
                                                                   <div class="quick-view">
                                                                       <a class="quick_view" href="#"
                                                                           data-link-action="quickview"
                                                                           title="Quick view" data-toggle="modal"
                                                                           data-target="#exampleModal">
                                                                           <i class="ion-ios-search-strong"></i>
                                                                       </a>
                                                                   </div>
                                                               </div>
                                                               <ul class="product-flag">
                                                                   <li class="new">Mới</li>
                                                               </ul>
                                                           </div>
                                                       </div>
                                                       <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                           <div class="product-desc-wrap">
                                                               <div class="product-decs">
                                                                   <a class="inner-link"
                                                                       href="shop-4-column.html"><span>GRAPHIC
                                                                           CORNER</span></a>
                                                                   <h2><a href="{{route('client.single-product')}}"
                                                                           class="product-link">Fila Locker Room
                                                                           Varsity Jacket</a></h2>
                                                                   <div class="rating-product">
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                   </div>
                                                                   <div class="pricing-meta">
                                                                       <ul>
                                                                           <li class="old-price not-cut">€9.90</li>
                                                                       </ul>
                                                                   </div>
                                                                   <div class="product-intro-info">
                                                                       <p>Create a cool and sporty look with the FILA®
                                                                           Locker Room Varsity Jacket.</p>
                                                                       <p>Comfortable cotton-blend fabrication.</p>
                                                                       <p>Classic varsity jacket features brand details
                                                                           throughout.</p>
                                                                       <p>Flat knit collar.</p>
                                                                   </div>
                                                                   <div class="in-stock">Availability: <span>299 In
                                                                           Stock</span></div>
                                                               </div>
                                                               <div class="add-to-link">
                                                                   <ul>
                                                                       <li class="cart"><a class="cart-btn"
                                                                               href="#">Thêm vào giỏ hàng</a></li>
                                                                       <li>
                                                                           <a href="wishlist.html"><i
                                                                                   class="ion-android-favorite-outline"></i></a>
                                                                       </li>
                                                                       <li>
                                                                           <a href="compare.html"><i
                                                                                   class="ion-ios-shuffle-strong"></i></a>
                                                                       </li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="shop-list-wrap mb-30px scroll-zoom">
                                           <div class="row list-product m-0px">
                                               <div class="col-md-12">
                                                   <div class="row">
                                                       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                           <div class="left-img">
                                                               <div class="img-block">
                                                                   <a href="single-product.html" class="thumbnail">
                                                                       <img class="first-img"
                                                                           src="assets/images/product-image/organic/product-5.jpg"
                                                                           alt="" />
                                                                       <img class="second-img"
                                                                           src="assets/images/product-image/organic/product-5.jpg"
                                                                           alt="" />
                                                                   </a>
                                                                   <div class="quick-view">
                                                                       <a class="quick_view" href="#"
                                                                           data-link-action="quickview"
                                                                           title="Quick view" data-toggle="modal"
                                                                           data-target="#exampleModal">
                                                                           <i class="ion-ios-search-strong"></i>
                                                                       </a>
                                                                   </div>
                                                               </div>
                                                               <ul class="product-flag">
                                                                   <li class="new">Mới</li>
                                                               </ul>
                                                           </div>
                                                       </div>
                                                       <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                           <div class="product-desc-wrap">
                                                               <div class="product-decs">
                                                                   <a class="inner-link"
                                                                       href="shop-4-column.html"><span>GRAPHIC
                                                                           CORNER</span></a>
                                                                   <h2><a href="single-product.html"
                                                                           class="product-link">Juicy Couture Tricot
                                                                           Logo Stripe Jacket</a></h2>
                                                                   <div class="rating-product">
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                   </div>
                                                                   <div class="pricing-meta">
                                                                       <ul>
                                                                           <li class="old-price not-cut">€18.90</li>
                                                                       </ul>
                                                                   </div>
                                                                   <div class="product-intro-info">
                                                                       <p>Freshen up your look with the Juicy Couture™
                                                                           Tricot Logo Stripe Jacket.</p>
                                                                       <p>Polyester fabrication flaunts stripe and
                                                                           brand logo detail at sleeves.</p>
                                                                       <p>Stand collar.</p>
                                                                       <p>Front-zipper closure.</p>
                                                                       <p>100% polyester.</p>
                                                                   </div>
                                                                   <div class="in-stock">Availability: <span>300 In
                                                                           Stock</span></div>
                                                               </div>
                                                               <div class="add-to-link">
                                                                   <ul>
                                                                       <li class="cart"><a class="cart-btn"
                                                                               href="#">Thêm vào giỏ hàng</a></li>
                                                                       <li>
                                                                           <a href="wishlist.html"><i
                                                                                   class="ion-android-favorite-outline"></i></a>
                                                                       </li>
                                                                       <li>
                                                                           <a href="compare.html"><i
                                                                                   class="ion-ios-shuffle-strong"></i></a>
                                                                       </li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="shop-list-wrap mb-30px scroll-zoom">
                                           <div class="row list-product m-0px">
                                               <div class="col-md-12">
                                                   <div class="row">
                                                       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                           <div class="left-img">
                                                               <div class="img-block">
                                                                   <a href="single-product.html" class="thumbnail">
                                                                       <img class="first-img"
                                                                           src="assets/images/product-image/organic/product-19.jpg"
                                                                           alt="" />
                                                                       <img class="second-img"
                                                                           src="assets/images/product-image/organic/product-20.jpg"
                                                                           alt="" />
                                                                   </a>
                                                                   <div class="quick-view">
                                                                       <a class="quick_view" href="#"
                                                                           data-link-action="quickview"
                                                                           title="Quick view" data-toggle="modal"
                                                                           data-target="#exampleModal">
                                                                           <i class="ion-ios-search-strong"></i>
                                                                       </a>
                                                                   </div>
                                                               </div>
                                                               <ul class="product-flag">
                                                                   <li class="new">Mới</li>
                                                               </ul>
                                                           </div>
                                                       </div>
                                                       <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                           <div class="product-desc-wrap">
                                                               <div class="product-decs">
                                                                   <a class="inner-link"
                                                                       href="shop-4-column.html"><span>STUDIO
                                                                           DESIGN</span></a>
                                                                   <h2><a href="single-product.html"
                                                                           class="product-link">New Balance Fresh Foam
                                                                           LAZR v1 Sport</a></h2>
                                                                   <div class="rating-product">
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                   </div>
                                                                   <div class="pricing-meta">
                                                                       <ul>
                                                                           <li class="old-price not-cut">€18.90</li>
                                                                       </ul>
                                                                   </div>
                                                                   <div class="product-intro-info">
                                                                       <p>The New Balance® Fresh Foam LAZR v1 Sport
                                                                           running shoe gives you total focus on the
                                                                           road with its precision-engineered design.
                                                                       </p>
                                                                       <p>Predecessor: None.</p>
                                                                       <p>Support Type: Neutral.</p>
                                                                       <p>Flat knit collar.</p>
                                                                       <p>Cushioning: Minimal feel with extreme
                                                                           flexibility.</p>
                                                                   </div>
                                                                   <div class="in-stock">Availability: <span>300 In
                                                                           Stock</span></div>
                                                               </div>
                                                               <div class="add-to-link">
                                                                   <ul>
                                                                       <li class="cart"><a class="cart-btn"
                                                                               href="#">Thêm vào giỏ hàng</a></li>
                                                                       <li>
                                                                           <a href="wishlist.html"><i
                                                                                   class="ion-android-favorite-outline"></i></a>
                                                                       </li>
                                                                       <li>
                                                                           <a href="compare.html"><i
                                                                                   class="ion-ios-shuffle-strong"></i></a>
                                                                       </li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="shop-list-wrap mb-30px scroll-zoom">
                                           <div class="row list-product m-0px">
                                               <div class="col-md-12">
                                                   <div class="row">
                                                       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                           <div class="left-img">
                                                               <div class="img-block">
                                                                   <a href="single-product.html" class="thumbnail">
                                                                       <img class="first-img"
                                                                           src="assets/images/product-image/organic/product-18.jpg"
                                                                           alt="" />
                                                                       <img class="second-img"
                                                                           src="assets/images/product-image/organic/product-18.jpg"
                                                                           alt="" />
                                                                   </a>
                                                                   <div class="quick-view">
                                                                       <a class="quick_view" href="#"
                                                                           data-link-action="quickview"
                                                                           title="Quick view" data-toggle="modal"
                                                                           data-target="#exampleModal">
                                                                           <i class="ion-ios-search-strong"></i>
                                                                       </a>
                                                                   </div>
                                                               </div>
                                                               <ul class="product-flag">
                                                                   <li class="new">Mới</li>
                                                               </ul>
                                                           </div>
                                                       </div>
                                                       <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                           <div class="product-desc-wrap">
                                                               <div class="product-decs">
                                                                   <a class="inner-link"
                                                                       href="shop-4-column.html"><span>GRAPHIC
                                                                           CORNER</span></a>
                                                                   <h2><a href="single-product.html"
                                                                           class="product-link">Juicy Couture Solid
                                                                           Sleeve Puffer Jacket</a></h2>
                                                                   <div class="rating-product">
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                   </div>
                                                                   <div class="pricing-meta">
                                                                       <ul>
                                                                           <li class="old-price not-cut">€18.90</li>
                                                                       </ul>
                                                                   </div>
                                                                   <div class="product-intro-info">
                                                                       <p>Stay toasty with this Juicy Couture™ Solid
                                                                           Sleeve Puffer Jacket!</p>
                                                                       <p>Stand collar.</p>
                                                                       <p>Long sleeves.</p>
                                                                       <p>100% polyester;</p>
                                                                       <p>Lining: 100% polyester;</p>
                                                                       <p>Filling: 100% polyester.</p>
                                                                   </div>
                                                                   <div class="in-stock">Availability: <span>299 In
                                                                           Stock</span></div>
                                                               </div>
                                                               <div class="add-to-link">
                                                                   <ul>
                                                                       <li class="cart"><a class="cart-btn"
                                                                               href="#">Thêm vào giỏ hàng</a></li>
                                                                       <li>
                                                                           <a href="wishlist.html"><i
                                                                                   class="ion-android-favorite-outline"></i></a>
                                                                       </li>
                                                                       <li>
                                                                           <a href="compare.html"><i
                                                                                   class="ion-ios-shuffle-strong"></i></a>
                                                                       </li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="shop-list-wrap mb-30px scroll-zoom">
                                           <div class="row list-product m-0px">
                                               <div class="col-md-12">
                                                   <div class="row">
                                                       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                           <div class="left-img">
                                                               <div class="img-block">
                                                                   <a href="single-product.html" class="thumbnail">
                                                                       <img class="first-img"
                                                                           src="assets/images/product-image/organic/product-23.jpg"
                                                                           alt="" />
                                                                       <img class="second-img"
                                                                           src="assets/images/product-image/organic/product-22.jpg"
                                                                           alt="" />
                                                                   </a>
                                                                   <div class="quick-view">
                                                                       <a class="quick_view" href="#"
                                                                           data-link-action="quickview"
                                                                           title="Quick view" data-toggle="modal"
                                                                           data-target="#exampleModal">
                                                                           <i class="ion-ios-search-strong"></i>
                                                                       </a>
                                                                   </div>
                                                               </div>
                                                               <ul class="product-flag">
                                                                   <li class="new">Mới</li>
                                                               </ul>
                                                           </div>
                                                       </div>
                                                       <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                           <div class="product-desc-wrap">
                                                               <div class="product-decs">
                                                                   <a class="inner-link"
                                                                       href="shop-4-column.html"><span>GRAPHIC
                                                                           CORNER</span></a>
                                                                   <h2><a href="single-product.html"
                                                                           class="product-link">New Balance Fresh Foam
                                                                           Kaymin</a></h2>
                                                                   <div class="rating-product">
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                   </div>
                                                                   <div class="pricing-meta">
                                                                       <ul>
                                                                           <li class="old-price">€18.90</li>
                                                                           <li class="current-price">€15.12</li>
                                                                           <li class="discount-price">-20%</li>
                                                                       </ul>
                                                                   </div>
                                                                   <div class="product-intro-info">
                                                                       <p>Increase your distance with the superior
                                                                           cushioning of the Fresh Foam Kaymin running
                                                                           shoe from New Balance®.</p>
                                                                       <p>Predecessor: None.</p>
                                                                       <p>Support Type: Neutral.</p>
                                                                       <p>Cushioning: High energizing cushioning.</p>
                                                                   </div>
                                                                   <div class="in-stock">Availability: <span>298 In
                                                                           Stock</span></div>
                                                               </div>
                                                               <div class="add-to-link">
                                                                   <ul>
                                                                       <li class="cart"><a class="cart-btn"
                                                                               href="#">Thêm vào giỏ hàng</a></li>
                                                                       <li>
                                                                           <a href="wishlist.html"><i
                                                                                   class="ion-android-favorite-outline"></i></a>
                                                                       </li>
                                                                       <li>
                                                                           <a href="compare.html"><i
                                                                                   class="ion-ios-shuffle-strong"></i></a>
                                                                       </li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="shop-list-wrap mb-30px scroll-zoom">
                                           <div class="row list-product m-0px">
                                               <div class="col-md-12">
                                                   <div class="row">
                                                       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                           <div class="left-img">
                                                               <div class="img-block">
                                                                   <a href="single-product.html" class="thumbnail">
                                                                       <img class="first-img"
                                                                           src="assets/images/product-image/organic/product-9.jpg"
                                                                           alt="" />
                                                                       <img class="second-img"
                                                                           src="assets/images/product-image/organic/product-9.jpg"
                                                                           alt="" />
                                                                   </a>
                                                                   <div class="quick-view">
                                                                       <a class="quick_view" href="#"
                                                                           data-link-action="quickview"
                                                                           title="Quick view" data-toggle="modal"
                                                                           data-target="#exampleModal">
                                                                           <i class="ion-ios-search-strong"></i>
                                                                       </a>
                                                                   </div>
                                                               </div>
                                                               <ul class="product-flag">
                                                                   <li class="new">Mới</li>
                                                               </ul>
                                                           </div>
                                                       </div>
                                                       <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                           <div class="product-desc-wrap">
                                                               <div class="product-decs">
                                                                   <a class="inner-link"
                                                                       href="shop-4-column.html"><span>GRAPHIC
                                                                           CORNER</span></a>
                                                                   <h2><a href="single-product.html"
                                                                           class="product-link">Water and Wind
                                                                           Resistant Insulated Jacket</a></h2>
                                                                   <div class="rating-product">
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                   </div>
                                                                   <div class="pricing-meta">
                                                                       <ul>
                                                                           <li class="old-price not-cut">€11.90</li>
                                                                       </ul>
                                                                   </div>
                                                                   <div class="product-intro-info">
                                                                       <p>Stay ready for a change in weather with the
                                                                           IZOD® Water and Wind Resistant Insulated
                                                                           Jacket.</p>
                                                                       <p>Water-resistant jacket keeps you warm and
                                                                           dry.</p>
                                                                       <p>Stand collar features an attached hood.</p>
                                                                       <p>Front-zip closure.</p>
                                                                   </div>
                                                                   <div class="in-stock">Availability: <span>291 In
                                                                           Stock</span></div>
                                                               </div>
                                                               <div class="add-to-link">
                                                                   <ul>
                                                                       <li class="cart"><a class="cart-btn"
                                                                               href="#">Thêm vào giỏ hàng</a></li>
                                                                       <li>
                                                                           <a href="wishlist.html"><i
                                                                                   class="ion-android-favorite-outline"></i></a>
                                                                       </li>
                                                                       <li>
                                                                           <a href="compare.html"><i
                                                                                   class="ion-ios-shuffle-strong"></i></a>
                                                                       </li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="shop-list-wrap mb-30px scroll-zoom">
                                           <div class="row list-product m-0px">
                                               <div class="col-md-12">
                                                   <div class="row">
                                                       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                           <div class="left-img">
                                                               <div class="img-block">
                                                                   <a href="single-product.html" class="thumbnail">
                                                                       <img class="first-img"
                                                                           src="assets/images/product-image/organic/product-16.jpg"
                                                                           alt="" />
                                                                       <img class="second-img"
                                                                           src="assets/images/product-image/organic/product-17.jpg"
                                                                           alt="" />
                                                                   </a>
                                                                   <div class="quick-view">
                                                                       <a class="quick_view" href="#"
                                                                           data-link-action="quickview"
                                                                           title="Quick view" data-toggle="modal"
                                                                           data-target="#exampleModal">
                                                                           <i class="ion-ios-search-strong"></i>
                                                                       </a>
                                                                   </div>
                                                               </div>
                                                               <ul class="product-flag">
                                                                   <li class="new">Mới</li>
                                                               </ul>
                                                           </div>
                                                       </div>
                                                       <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                           <div class="product-desc-wrap">
                                                               <div class="product-decs">
                                                                   <a class="inner-link"
                                                                       href="shop-4-column.html"><span>STUDIO
                                                                           DESIGN</span></a>
                                                                   <h2><a href="single-product.html"
                                                                           class="product-link">Trans-Weight Hooded
                                                                           Wind and Water Resistant Shell</a></h2>
                                                                   <div class="rating-product">
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star-half"></i>
                                                                   </div>
                                                                   <div class="pricing-meta">
                                                                       <ul>
                                                                           <li class="old-price not-cut">€11.90</li>
                                                                       </ul>
                                                                   </div>
                                                                   <div class="product-intro-info">
                                                                       <p>Keep the elements away and warmth priority
                                                                           number one in this Nautica® Trans-Weight
                                                                           Hooded Wind and Water Resistant Shell.</p>
                                                                       <p>Hooded collar with a high collar for maximum
                                                                           coverage.</p>
                                                                       <p>Long sleeves with banded collars.</p>
                                                                       <p>Zip front closure.</p>
                                                                   </div>
                                                                   <div class="in-stock">Availability: <span>299 In
                                                                           Stock</span></div>
                                                               </div>
                                                               <div class="add-to-link">
                                                                   <ul>
                                                                       <li class="cart"><a class="cart-btn"
                                                                               href="#">Thêm vào giỏ hàng</a></li>
                                                                       <li>
                                                                           <a href="wishlist.html"><i
                                                                                   class="ion-android-favorite-outline"></i></a>
                                                                       </li>
                                                                       <li>
                                                                           <a href="compare.html"><i
                                                                                   class="ion-ios-shuffle-strong"></i></a>
                                                                       </li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="shop-list-wrap mb-30px scroll-zoom">
                                           <div class="row list-product m-0px">
                                               <div class="col-md-12">
                                                   <div class="row">
                                                       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                           <div class="left-img">
                                                               <div class="img-block">
                                                                   <a href="single-product.html" class="thumbnail">
                                                                       <img class="first-img"
                                                                           src="assets/images/product-image/organic/product-14.jpg"
                                                                           alt="" />
                                                                       <img class="second-img"
                                                                           src="assets/images/product-image/organic/product-14.jpg"
                                                                           alt="" />
                                                                   </a>
                                                                   <div class="quick-view">
                                                                       <a class="quick_view" href="#"
                                                                           data-link-action="quickview"
                                                                           title="Quick view" data-toggle="modal"
                                                                           data-target="#exampleModal">
                                                                           <i class="ion-ios-search-strong"></i>
                                                                       </a>
                                                                   </div>
                                                               </div>
                                                               <ul class="product-flag">
                                                                   <li class="new">Mới</li>
                                                               </ul>
                                                           </div>
                                                       </div>
                                                       <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                           <div class="product-desc-wrap">
                                                               <div class="product-decs">
                                                                   <a class="inner-link"
                                                                       href="shop-4-column.html"><span>GRAPHIC
                                                                           CORNER</span></a>
                                                                   <h2><a href="single-product.html"
                                                                           class="product-link">Madden by Steve Madden
                                                                           Cale 6</a></h2>
                                                                   <div class="rating-product">
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                   </div>
                                                                   <div class="pricing-meta">
                                                                       <ul>
                                                                           <li class="old-price">€19.90</li>
                                                                           <li class="current-price">€10.12</li>
                                                                           <li class="discount-price">-15%</li>
                                                                       </ul>
                                                                   </div>
                                                                   <div class="product-intro-info">
                                                                       <p>No one can deny your sleek style with these
                                                                           handsome Madden by Steve Madden® Cale 6
                                                                           oxfords.</p>
                                                                       <p>Man-made upper features a plain toe.</p>
                                                                       <p>Lace-up closure.</p>
                                                                       <p>Man-made lining.</p>
                                                                   </div>
                                                                   <div class="in-stock">Availability: <span>299 In
                                                                           Stock</span></div>
                                                               </div>
                                                               <div class="add-to-link">
                                                                   <ul>
                                                                       <li class="cart"><a class="cart-btn"
                                                                               href="#">Thêm vào giỏ hàng</a></li>
                                                                       <li>
                                                                           <a href="wishlist.html"><i
                                                                                   class="ion-android-favorite-outline"></i></a>
                                                                       </li>
                                                                       <li>
                                                                           <a href="compare.html"><i
                                                                                   class="ion-ios-shuffle-strong"></i></a>
                                                                       </li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="shop-list-wrap mb-30px scroll-zoom">
                                           <div class="row list-product m-0px">
                                               <div class="col-md-12">
                                                   <div class="row">
                                                       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                           <div class="left-img">
                                                               <div class="img-block">
                                                                   <a href="single-product.html" class="thumbnail">
                                                                       <img class="first-img"
                                                                           src="assets/images/product-image/organic/product-15.jpg"
                                                                           alt="" />
                                                                       <img class="second-img"
                                                                           src="assets/images/product-image/organic/product-22.jpg"
                                                                           alt="" />
                                                                   </a>
                                                                   <div class="quick-view">
                                                                       <a class="quick_view" href="#"
                                                                           data-link-action="quickview"
                                                                           title="Quick view" data-toggle="modal"
                                                                           data-target="#exampleModal">
                                                                           <i class="ion-ios-search-strong"></i>
                                                                       </a>
                                                                   </div>
                                                               </div>
                                                               <ul class="product-flag">
                                                                   <li class="new">Mới</li>
                                                               </ul>
                                                           </div>
                                                       </div>
                                                       <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                           <div class="product-desc-wrap">
                                                               <div class="product-decs">
                                                                   <a class="inner-link"
                                                                       href="shop-4-column.html"><span>GRAPHIC
                                                                           CORNER</span></a>
                                                                   <h2><a href="single-product.html"
                                                                           class="product-link">Calvin Klein Jeans
                                                                           Reflective Logo Full Zip</a></h2>
                                                                   <div class="rating-product">
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                   </div>
                                                                   <div class="pricing-meta">
                                                                       <ul>
                                                                           <li class="old-price not-cut">€29.00</li>
                                                                       </ul>
                                                                   </div>
                                                                   <div class="product-intro-info">
                                                                       <p>Calvin Klein® Jeans hoodie with reflective
                                                                           logo detailing at the sleeves.</p>
                                                                       <p>Sweatshirt crafted in a soft-knit fabric for
                                                                           superior comfort.</p>
                                                                       <p>Drawstring hood.</p>
                                                                       <p>Long sleeves.</p>
                                                                       <p>Full-zip front.</p>
                                                                   </div>
                                                                   <div class="in-stock">Availability: <span>300 In
                                                                           Stock</span></div>
                                                               </div>
                                                               <div class="add-to-link">
                                                                   <ul>
                                                                       <li class="cart"><a class="cart-btn"
                                                                               href="#">Thêm vào giỏ hàng</a></li>
                                                                       <li>
                                                                           <a href="wishlist.html"><i
                                                                                   class="ion-android-favorite-outline"></i></a>
                                                                       </li>
                                                                       <li>
                                                                           <a href="compare.html"><i
                                                                                   class="ion-ios-shuffle-strong"></i></a>
                                                                       </li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="shop-list-wrap mb-30px scroll-zoom">
                                           <div class="row list-product m-0px">
                                               <div class="col-md-12">
                                                   <div class="row">
                                                       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                           <div class="left-img">
                                                               <div class="img-block">
                                                                   <a href="single-product.html" class="thumbnail">
                                                                       <img class="first-img"
                                                                           src="assets/images/product-image/organic/product-6.jpg"
                                                                           alt="" />
                                                                       <img class="second-img"
                                                                           src="assets/images/product-image/organic/product-6.jpg"
                                                                           alt="" />
                                                                   </a>
                                                                   <div class="quick-view">
                                                                       <a class="quick_view" href="#"
                                                                           data-link-action="quickview"
                                                                           title="Quick view" data-toggle="modal"
                                                                           data-target="#exampleModal">
                                                                           <i class="ion-ios-search-strong"></i>
                                                                       </a>
                                                                   </div>
                                                               </div>
                                                               <ul class="product-flag">
                                                                   <li class="new">Mới</li>
                                                               </ul>
                                                           </div>
                                                       </div>
                                                       <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                           <div class="product-desc-wrap">
                                                               <div class="product-decs">
                                                                   <a class="inner-link"
                                                                       href="shop-4-column.html"><span>GRAPHIC
                                                                           CORNER</span></a>
                                                                   <h2><a href="single-product.html"
                                                                           class="product-link">New Balance Arishi
                                                                           Sport v1</a></h2>
                                                                   <div class="rating-product">
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                   </div>
                                                                   <div class="pricing-meta">
                                                                       <ul>
                                                                           <li class="old-price not-cut">€29.00</li>
                                                                       </ul>
                                                                   </div>
                                                                   <div class="product-intro-info">
                                                                       <p>Break old records and make new goals in the
                                                                           New Balance® Arishi Sport v1.</p>
                                                                       <p>Predecessor: None.</p>
                                                                       <p>Support Type: Neutral.</p>
                                                                       <p>Cushioning: High energizing cushioning.</p>
                                                                   </div>
                                                                   <div class="in-stock">Availability: <span>899 In
                                                                           Stock</span></div>
                                                               </div>
                                                               <div class="add-to-link">
                                                                   <ul>
                                                                       <li class="cart"><a class="cart-btn"
                                                                               href="#">Thêm vào giỏ hàng</a></li>
                                                                       <li>
                                                                           <a href="wishlist.html"><i
                                                                                   class="ion-android-favorite-outline"></i></a>
                                                                       </li>
                                                                       <li>
                                                                           <a href="compare.html"><i
                                                                                   class="ion-ios-shuffle-strong"></i></a>
                                                                       </li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="shop-list-wrap mb-30px scroll-zoom">
                                           <div class="row list-product m-0px">
                                               <div class="col-md-12">
                                                   <div class="row">
                                                       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                           <div class="left-img">
                                                               <div class="img-block">
                                                                   <a href="single-product.html" class="thumbnail">
                                                                       <img class="first-img"
                                                                           src="assets/images/product-image/organic/product-3.jpg"
                                                                           alt="" />
                                                                       <img class="second-img"
                                                                           src="assets/images/product-image/organic/product-4.jpg"
                                                                           alt="" />
                                                                   </a>
                                                                   <div class="quick-view">
                                                                       <a class="quick_view" href="#"
                                                                           data-link-action="quickview"
                                                                           title="Quick view" data-toggle="modal"
                                                                           data-target="#exampleModal">
                                                                           <i class="ion-ios-search-strong"></i>
                                                                       </a>
                                                                   </div>
                                                               </div>
                                                               <ul class="product-flag">
                                                                   <li class="new">Mới</li>
                                                               </ul>
                                                           </div>
                                                       </div>
                                                       <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                           <div class="product-desc-wrap">
                                                               <div class="product-decs">
                                                                   <a class="inner-link"
                                                                       href="shop-4-column.html"><span>GRAPHIC
                                                                           CORNER</span></a>
                                                                   <h2><a href="single-product.html"
                                                                           class="product-link">Brixton Patrol All
                                                                           Terrain Anorak Jacket</a></h2>
                                                                   <div class="rating-product">
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                   </div>
                                                                   <div class="pricing-meta">
                                                                       <ul>
                                                                           <li class="old-price not-cut">€29.00</li>
                                                                       </ul>
                                                                   </div>
                                                                   <div class="product-intro-info">
                                                                       <p>Whether you're exploring the woods or the
                                                                           city, the Brixton™ Patrol All Terrain Anorak
                                                                           Jacket has got you covered.</p>
                                                                       <p>Camo jacket crafted from 4.5 oz nylon ripstop
                                                                           with two-way stretch, and a water-repellent
                                                                           coating.</p>
                                                                       <p>Drawstring hood.</p>
                                                                   </div>
                                                                   <div class="in-stock">Availability: <span>899 In
                                                                           Stock</span></div>
                                                               </div>
                                                               <div class="add-to-link">
                                                                   <ul>
                                                                       <li class="cart"><a class="cart-btn"
                                                                               href="#">Thêm vào giỏ hàng</a></li>
                                                                       <li>
                                                                           <a href="wishlist.html"><i
                                                                                   class="ion-android-favorite-outline"></i></a>
                                                                       </li>
                                                                       <li>
                                                                           <a href="compare.html"><i
                                                                                   class="ion-ios-shuffle-strong"></i></a>
                                                                       </li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="shop-list-wrap mb-30px scroll-zoom">
                                           <div class="row list-product m-0px">
                                               <div class="col-md-12">
                                                   <div class="row">
                                                       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                           <div class="left-img">
                                                               <div class="img-block">
                                                                   <a href="single-product.html" class="thumbnail">
                                                                       <img class="first-img"
                                                                           src="assets/images/product-image/organic/product-1.jpg"
                                                                           alt="" />
                                                                       <img class="second-img"
                                                                           src="assets/images/product-image/organic/product-1.jpg"
                                                                           alt="" />
                                                                   </a>
                                                                   <div class="quick-view">
                                                                       <a class="quick_view" href="#"
                                                                           data-link-action="quickview"
                                                                           title="Quick view" data-toggle="modal"
                                                                           data-target="#exampleModal">
                                                                           <i class="ion-ios-search-strong"></i>
                                                                       </a>
                                                                   </div>
                                                               </div>
                                                               <ul class="product-flag">
                                                                   <li class="new">Mới</li>
                                                               </ul>
                                                           </div>
                                                       </div>
                                                       <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                           <div class="product-desc-wrap">
                                                               <div class="product-decs">
                                                                   <a class="inner-link"
                                                                       href="shop-4-column.html"><span>STUDIO
                                                                           DESIGN</span></a>
                                                                   <h2><a href="single-product.html"
                                                                           class="product-link">Juicy Couture Juicy
                                                                           Quilted Terry Track Jacket</a></h2>
                                                                   <div class="rating-product">
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                   </div>
                                                                   <div class="pricing-meta">
                                                                       <ul>
                                                                           <li class="old-price">€35.90</li>
                                                                           <li class="current-price">€34.12</li>
                                                                           <li class="discount-price">-5%</li>
                                                                       </ul>
                                                                   </div>
                                                                   <div class="product-intro-info">
                                                                       <p>Score extra points when it comes to your
                                                                           sporty look with the Juicy Couture™ Juicy
                                                                           Quilted Terry Track Jacket.</p>
                                                                       <p>Soft terry construction in a quilted design.
                                                                       </p>
                                                                       <p>Front zipper closure.</p>
                                                                       <p>61% cotton, 39% polyester;</p>
                                                                       <p>Lining: 58% cotton, 42% polyester.</p>
                                                                   </div>
                                                                   <div class="in-stock">Availability: <span>1189 In
                                                                           Stock</span></div>
                                                               </div>
                                                               <div class="add-to-link">
                                                                   <ul>
                                                                       <li class="cart"><a class="cart-btn"
                                                                               href="#">Thêm vào giỏ hàng</a></li>
                                                                       <li>
                                                                           <a href="wishlist.html"><i
                                                                                   class="ion-android-favorite-outline"></i></a>
                                                                       </li>
                                                                       <li>
                                                                           <a href="compare.html"><i
                                                                                   class="ion-ios-shuffle-strong"></i></a>
                                                                       </li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="shop-list-wrap mb-30px scroll-zoom">
                                           <div class="row list-product m-0px">
                                               <div class="col-md-12">
                                                   <div class="row">
                                                       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                           <div class="left-img">
                                                               <div class="img-block">
                                                                   <a href="single-product.html" class="thumbnail">
                                                                       <img class="first-img"
                                                                           src="assets/images/product-image/organic/product-11.jpg"
                                                                           alt="" />
                                                                       <img class="second-img"
                                                                           src="assets/images/product-image/organic/product-12.jpg"
                                                                           alt="" />
                                                                   </a>
                                                                   <div class="quick-view">
                                                                       <a class="quick_view" href="#"
                                                                           data-link-action="quickview"
                                                                           title="Quick view" data-toggle="modal"
                                                                           data-target="#exampleModal">
                                                                           <i class="ion-ios-search-strong"></i>
                                                                       </a>
                                                                   </div>
                                                               </div>
                                                               <ul class="product-flag">
                                                                   <li class="new">Mới</li>
                                                               </ul>
                                                           </div>
                                                       </div>
                                                       <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                           <div class="product-desc-wrap">
                                                               <div class="product-decs">
                                                                   <a class="inner-link"
                                                                       href="shop-4-column.html"><span>STUDIO
                                                                           DESIGN</span></a>
                                                                   <h2><a href="single-product.html"
                                                                           class="product-link">Originals Kaval
                                                                           Windbreaker Winter Jacket</a></h2>
                                                                   <div class="rating-product">
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                   </div>
                                                                   <div class="pricing-meta">
                                                                       <ul>
                                                                           <li class="old-price">€23.90</li>
                                                                           <li class="current-price">€21.51</li>
                                                                           <li class="discount-price">-10%</li>
                                                                       </ul>
                                                                   </div>
                                                                   <div class="product-intro-info">
                                                                       <p>Block out the haters with the fresh adidas®
                                                                           Originals Kaval Windbreaker Jacket.</p>
                                                                       <p>Part of the Kaval Collection.</p>
                                                                       <p>Regular fit is eased, but not sloppy, and
                                                                           perfect for any activity.</p>
                                                                       <p>Plain-woven jacket specifically constructed
                                                                           for freedom of movement.</p>
                                                                   </div>
                                                                   <div class="in-stock">Availability: <span>299 In
                                                                           Stock</span></div>
                                                               </div>
                                                               <div class="add-to-link">
                                                                   <ul>
                                                                       <li class="cart"><a class="cart-btn"
                                                                               href="#">Thêm vào giỏ hàng</a></li>
                                                                       <li>
                                                                           <a href="wishlist.html"><i
                                                                                   class="ion-android-favorite-outline"></i></a>
                                                                       </li>
                                                                       <li>
                                                                           <a href="compare.html"><i
                                                                                   class="ion-ios-shuffle-strong"></i></a>
                                                                       </li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="shop-list-wrap mb-30px scroll-zoom">
                                           <div class="row list-product m-0px">
                                               <div class="col-md-12">
                                                   <div class="row">
                                                       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                           <div class="left-img">
                                                               <div class="img-block">
                                                                   <a href="single-product.html" class="thumbnail">
                                                                       <img class="first-img"
                                                                           src="assets/images/product-image/organic/product-10.jpg"
                                                                           alt="" />
                                                                       <img class="second-img"
                                                                           src="assets/images/product-image/organic/product-10.jpg"
                                                                           alt="" />
                                                                   </a>
                                                                   <div class="quick-view">
                                                                       <a class="quick_view" href="#"
                                                                           data-link-action="quickview"
                                                                           title="Quick view" data-toggle="modal"
                                                                           data-target="#exampleModal">
                                                                           <i class="ion-ios-search-strong"></i>
                                                                       </a>
                                                                   </div>
                                                               </div>
                                                               <ul class="product-flag">
                                                                   <li class="new">Mới</li>
                                                               </ul>
                                                           </div>
                                                       </div>
                                                       <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                           <div class="product-desc-wrap">
                                                               <div class="product-decs">
                                                                   <a class="inner-link"
                                                                       href="shop-4-column.html"><span>GRAPHIC
                                                                           CORNER</span></a>
                                                                   <h2><a href="single-product.html"
                                                                           class="product-link">New Luxury Men's Slim
                                                                           Fit Shirt Short Sleeve...</a></h2>
                                                                   <div class="rating-product">
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                   </div>
                                                                   <div class="pricing-meta">
                                                                       <ul>
                                                                           <li class="old-price not-cut">€29.00</li>
                                                                       </ul>
                                                                   </div>
                                                                   <div class="product-intro-info">
                                                                       <p>Break old records and make new goals in the
                                                                           New Balance® Arishi Sport v1.</p>
                                                                       <p>Predecessor: None.</p>
                                                                       <p>Support Type: Neutral.</p>
                                                                       <p>Cushioning: High energizing cushioning.</p>
                                                                   </div>
                                                                   <div class="in-stock">Availability: <span>397 In
                                                                           Stock</span></div>
                                                               </div>
                                                               <div class="add-to-link">
                                                                   <ul>
                                                                       <li class="cart"><a class="cart-btn"
                                                                               href="#">Thêm vào giỏ hàng</a></li>
                                                                       <li>
                                                                           <a href="wishlist.html"><i
                                                                                   class="ion-android-favorite-outline"></i></a>
                                                                       </li>
                                                                       <li>
                                                                           <a href="compare.html"><i
                                                                                   class="ion-ios-shuffle-strong"></i></a>
                                                                       </li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="shop-list-wrap mb-30px scroll-zoom">
                                           <div class="row list-product m-0px">
                                               <div class="col-md-12">
                                                   <div class="row">
                                                       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                           <div class="left-img">
                                                               <div class="img-block">
                                                                   <a href="single-product.html" class="thumbnail">
                                                                       <img class="first-img"
                                                                           src="assets/images/product-image/organic/product-4.jpg"
                                                                           alt="" />
                                                                       <img class="second-img"
                                                                           src="assets/images/product-image/organic/product-4.jpg"
                                                                           alt="" />
                                                                   </a>
                                                                   <div class="quick-view">
                                                                       <a class="quick_view" href="#"
                                                                           data-link-action="quickview"
                                                                           title="Quick view" data-toggle="modal"
                                                                           data-target="#exampleModal">
                                                                           <i class="ion-ios-search-strong"></i>
                                                                       </a>
                                                                   </div>
                                                               </div>
                                                               <ul class="product-flag">
                                                                   <li class="new">Mới</li>
                                                               </ul>
                                                           </div>
                                                       </div>
                                                       <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                           <div class="product-desc-wrap">
                                                               <div class="product-decs">
                                                                   <a class="inner-link"
                                                                       href="shop-4-column.html"><span>GRAPHIC
                                                                           CORNER</span></a>
                                                                   <h2><a href="single-product.html"
                                                                           class="product-link">Brixton Patrol All
                                                                           Terrain Anorak Jacket 2</a></h2>
                                                                   <div class="rating-product">
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                   </div>
                                                                   <div class="pricing-meta">
                                                                       <ul>
                                                                           <li class="old-price not-cut">€29.00</li>
                                                                       </ul>
                                                                   </div>
                                                                   <div class="product-intro-info">
                                                                       <p>Whether you're exploring the woods or the
                                                                           city, the Brixton™ Patrol All Terrain Anorak
                                                                           Jacket has got you covered.</p>
                                                                       <p>Camo jacket crafted from 4.5 oz nylon ripstop
                                                                           with two-way stretch, and a water-repellent
                                                                           coating.</p>
                                                                       <p>Drawstring hood.</p>
                                                                   </div>
                                                                   <div class="in-stock">Availability: <span>400 In
                                                                           Stock</span></div>
                                                               </div>
                                                               <div class="add-to-link">
                                                                   <ul>
                                                                       <li class="cart"><a class="cart-btn"
                                                                               href="#">Thêm vào giỏ hàng</a></li>
                                                                       <li>
                                                                           <a href="wishlist.html"><i
                                                                                   class="ion-android-favorite-outline"></i></a>
                                                                       </li>
                                                                       <li>
                                                                           <a href="compare.html"><i
                                                                                   class="ion-ios-shuffle-strong"></i></a>
                                                                       </li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="shop-list-wrap scroll-zoom">
                                           <div class="row list-product m-0px">
                                               <div class="col-md-12">
                                                   <div class="row">
                                                       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                           <div class="left-img">
                                                               <div class="img-block">
                                                                   <a href="single-product.html" class="thumbnail">
                                                                       <img class="first-img"
                                                                           src="assets/images/product-image/organic/product-15.jpg"
                                                                           alt="" />
                                                                       <img class="second-img"
                                                                           src="assets/images/product-image/organic/product-15.jpg"
                                                                           alt="" />
                                                                   </a>
                                                                   <div class="quick-view">
                                                                       <a class="quick_view" href="#"
                                                                           data-link-action="quickview"
                                                                           title="Quick view" data-toggle="modal"
                                                                           data-target="#exampleModal">
                                                                           <i class="ion-ios-search-strong"></i>
                                                                       </a>
                                                                   </div>
                                                               </div>
                                                               <ul class="product-flag">
                                                                   <li class="new">Mới</li>
                                                               </ul>
                                                           </div>
                                                       </div>
                                                       <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                           <div class="product-desc-wrap">
                                                               <div class="product-decs">
                                                                   <a class="inner-link"
                                                                       href="shop-4-column.html"><span>GRAPHIC
                                                                           CORNER</span></a>
                                                                   <h2><a href="single-product.html"
                                                                           class="product-link">Juicy Couture Juicy
                                                                           Quilted Terry Track Jacket 2</a></h2>
                                                                   <div class="rating-product">
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                       <i class="ion-android-star"></i>
                                                                   </div>
                                                                   <div class="pricing-meta">
                                                                       <ul>
                                                                           <li class="old-price">€35.90</li>
                                                                           <li class="current-price">€34.11</li>
                                                                           <li class="discount-price">-5%</li>
                                                                       </ul>
                                                                   </div>
                                                                   <div class="product-intro-info">
                                                                       <p>Score extra points when it comes to your
                                                                           sporty look with the Juicy Couture™ Juicy
                                                                           Quilted Terry Track Jacket.</p>
                                                                       <p>Soft terry construction in a quilted design.
                                                                       </p>
                                                                       <p>Front zipper closure.</p>
                                                                       <p>61% cotton, 39% polyester;</p>
                                                                       <p>Lining: 58% cotton, 42% polyester.</p>
                                                                   </div>
                                                                   <div class="in-stock">Availability: <span>199 In
                                                                           Stock</span></div>
                                                               </div>
                                                               <div class="add-to-link">
                                                                   <ul>
                                                                       <li class="cart"><a class="cart-btn"
                                                                               href="#">Thêm vào giỏ hàng</a></li>
                                                                       <li>
                                                                           <a href="wishlist.html"><i
                                                                                   class="ion-android-favorite-outline"></i></a>
                                                                       </li>
                                                                       <li>
                                                                           <a href="compare.html"><i
                                                                                   class="ion-ios-shuffle-strong"></i></a>
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
                                   <!-- Tab Two End -->

>>>>>>> 3f328be4ac30d4c13c894e450ae9ced78e37bed8
                               </div>
                               <!-- Shop Tab Content End -->
                               <!--  Pagination Area Start -->
                               <div class="pro-pagination-style text-center">
                                   <ul>
                                       <li>
                                           <a class="prev" href="#"><i class="ion-ios-arrow-left"></i></a>
                                       </li>
                                       <li><a class="active" href="#">1</a></li>
                                       <li><a href="#">2</a></li>
                                       <li>
                                           <a class="next" href="#"><i class="ion-ios-arrow-right"></i></a>
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
                                       @foreach ($category as $item)
                                       <div class="sidebar-widget-list">
                                           <ul>
                                               @foreach($cates as $item)
                                               <li>
                                                   <div class="sidebar-widget-list-left">
<<<<<<< HEAD
                                                       <input type="checkbox" /> <a href="{{ route('client.product') }}">{{ $item->name }}<span style="background: red;
                                                        padding: 0px 4px;
                                                        color: #fff;
                                                        position: absolute;
                                                        top: -19%;
                                                        font-size: 9px;
                                                        border-radius: 10px;">{{  count($item->products) }}</span>
=======
                                                       <input type="checkbox" /> <a href="#">{{$item->name}}
                                                       <span style="position: absolute;
                                                                    top: -15%;
                                                                    background: #d7d7d7;
                                                                    padding: 0px 3px;
                                                                    font-size: 9px;
                                                                    color: #484848;
                                                                    border-radius: 5px;">{{ count($item->products) }}</span>
>>>>>>> 3f328be4ac30d4c13c894e450ae9ced78e37bed8
                                                       </a>
                                                       <span class="checkmark"></span>
                                                   </div>
                                               </li>
<<<<<<< HEAD
                                               
=======
                                               @endforeach
>>>>>>> 3f328be4ac30d4c13c894e450ae9ced78e37bed8
                                           </ul>
                                       </div>
                                       @endforeach
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