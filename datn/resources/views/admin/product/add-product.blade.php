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
            <form class="form-horizontal form-material" action="{{route('admin.addProduct')}}" method="POST"
                enctype="multipart/form-data" role="form">
                
                @csrf
                <div class="col-md-8 col-xs-12">
                    <div class="white-box">
                        <div class="form-group">
                            <label class="col-md-12">Tên sản phẩm</label>
                            <div class="col-md-12">
                                <input type="text" value="" name="name" class="form-control form-control-line">
                            </div>
                        </div>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Giá</label>
                            <div class="col-md-12">
                                <input type="number" name="price" class="form-control form-control-line" id="example-email">
                            </div>
                        </div>
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label class="col-md-12">Số lượng</label>
                            <div class="col-md-12">
                                <input type="number" name="quantily" value=""
                                    class="form-control form-control-line">
                            </div>
                        </div>
                        @error('quantily')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label class="col-md-12">Mô tả</label>
                            <div class="col-md-12">
                                <textarea rows="5" name="description" class="form-control form-control-line"></textarea>
                            </div>
                        </div>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label class="col-sm-12">Danh Mục</label>
                            <div class="col-sm-12">
                                <select name="category_id" class="form-control form-control-line">
                                    @foreach($cates as $cate)
                                    <option value="{{$cate->id }}">{{$cate->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="styled" id="exampleCheck1" name="allow_market" id="checkbox2" value="1">
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
                        <img id="image" src="../public/uploads/products/image-default.png" width="100%" height="200px" alt="">
                        <hr>
                        <div class="form-group">
                            <label class="col-sm-12">Tải ảnh mới</label>
                            <input class="col-sm-12" name="image_gallery" type="file" onchange="changeImage()" id="fileImage">
                        </div>
                        @error('image_gallery')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>
<footer class="footer text-center"> 2021 &copy; Ample Admin brought to you by MarketNow.com </footer>
</div>

@endsection