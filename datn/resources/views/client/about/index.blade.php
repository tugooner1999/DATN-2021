@extends('layout-client')
@section('content')
<!-- Breadcrumb Area start -->
<section class="breadcrumb-area" style="
    background: repeating-linear-gradient(21deg, #4fb68d96, #edb1b100 244px);">
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

                    @foreach ($about as $item)

                    <div class="about-title">
                        <h2>{!!$item->title!!}</h2>
                    </div>
                    <p class="mb-30px">
                        {!!$item->description!!}
                    </p>
                </div>
                                        
                @endforeach
            </div>
        </div>
        <div class="row mt-60px feature-slider owl-carousel owl-nav-style">
           
            @foreach ($product as $item)
            <div class="feature-slider-item">
            <article class="list-product">
                   <div class="img-block">
                       <a href="{{route('client.single-product', ['id'=>$item->id])}}" class="thumbnail">
                           <img class="first-img" src="{{asset($item->image_gallery)}}" alt="" />
                       </a>
                   </div>
                   <div class="product-decs">
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
        </div>
    </div>
</section>

<!-- About Area End -->
@endsection