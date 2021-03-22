@extends('layout-admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Cập nhật sản phẩm</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank"
                    class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Về trang chủ
                    <i class="fa fa-home" aria-hidden="true"></i></a>

                <ol class="breadcrumb">
                    <li><a href="{{route('admin.dashboard')}}">Bảng điều khiển</a></li>
                    <li class="active">Cập nhật sản phẩm</li>
                </ol>
            </div>
        </div>
        <div class="row">
            @foreach($edit_product as $key => $item)
            <form class="form-horizontal form-material" action="{{URL::to('/admin/products/update/'.$item->id)}}" method="POST" enctype="multipart/form-data" role="form">
            @csrf
                <div class="col-md-8 col-xs-12">
                    <div class="white-box">
                        <div class="form-group">
                            <label class="col-md-12">Tên sản phẩm</label>
                            <div class="col-md-12">
                                <input type="text" name="product_name" value="{{$item->name}}" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Giá</label>
                            <div class="col-md-12">
                                <input type="number" value="{{$item->price}}" class="form-control form-control-line"
                                    name="product_price" id="example-email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Số lượng</label>
                            <div class="col-md-12">
                                <input type="number" name="product_quantily" value="{{$item->quantily}}" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Mô tả</label>
                            <div class="col-md-12">
                                <textarea rows="5" name="product_description"
                                    class="form-control form-control-line">{{$item->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Danh Mục</label>
                            <div class="col-sm-12">
                                <select name="product_cate" class="form-control form-control-line">
                                    @foreach($cate_product as $key => $cate)
                                    @if($cate->id == $item->category_id)
                                    <option selected value="{{  $cate->id }}">{{$cate->name}}</option>
                                    @else
                                    <option value="{{  $cate->id }}">{{$cate->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" 
                    @if($item->allow_market == 1)
                        checked
                    @endif
                    type="checkbox" name="allow_market" id="allow_market" value="1">
                            <label class="form-check-label" for="exampleCheck1">Sản phẩm để đi chợ</label>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-danger">Cập nhật</button>
                                <a href="{{route('admin.listProduct')}}" class="btn btn-success">Trở về</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="white-box">
                        <img src="../public/uploads/products/{{$item->image_gallery}}" width="100%" height="350px"
                            alt="">
                        <div class="form-group">
                            <label class="col-sm-12">Tải ảnh mới</label>
                            <input name="product_image" class="col-sm-12" type="file">
                        </div>
                    </div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
<footer class="footer text-center"> 2021 &copy; Ample Admin brought to you by MarketNow.com </footer>
</div>

@endsection