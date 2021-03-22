@extends('layout-admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Thêm sản phẩm mới</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank"
                    class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Về trang chủ
                    <i class="fa fa-home" aria-hidden="true"></i></a>

                <ol class="breadcrumb">
                    <li><a href="#">Bảng điều khiển</a></li>
                    <li class="active">Thêm sản phẩm</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <form class="form-horizontal form-material" action="{{route('admin.addProduct')}}" method="POST" enctype="multipart/form-data" role="form">
                @csrf
                <div class="col-md-8 col-xs-12">
                    <div class="white-box">
                        <div class="form-group">
                            <label class="col-md-12">Tên sản phẩm</label>
                            <div class="col-md-12">
                                <input type="text" value="" name="product_name" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Giá</label>
                            <div class="col-md-12">
                                <input type="number" value="" name="product_price" class="form-control form-control-line"
                                     id="example-email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Số lượng</label>
                            <div class="col-md-12">
                                <input type="number" name="product_quantily" value="" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Mô tả</label>
                            <div class="col-md-12">
                                <textarea rows="5" name="product_description" class="form-control form-control-line"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Danh Mục</label>
                            <div class="col-sm-12">
                                <select name="product_cate" class="form-control form-control-line">
                                    @foreach($cates as $cate)
                                    <option value="{{  $cate->id }}">{{$cate->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="allow_market" id="allow_market" value="1">
                            <label class="form-check-label" for="exampleCheck1">Sản phẩm để đi chợ</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-danger">Thêm mới</button>
                            <a href="{{route('admin.listProduct')}}" class="btn btn-success">Trở về</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="white-box">
                        <img src="" width="100%" height="200px" alt="">
                        <div class="form-group">
                            <label class="col-sm-12">Tải ảnh mới</label>
                            <input class="col-sm-12" name="product_image" type="file">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<footer class="footer text-center"> 2021 &copy; Ample Admin brought to you by MarketNow.com </footer>
</div>

@endsection