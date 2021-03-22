@extends('layout-admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Sản phẩm</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank"
                    class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Về trang chủ
                    <i class="fa fa-home" aria-hidden="true"></i></a>
                <ol class="breadcrumb">
                    <li><a href="{{route('admin.dashboard')}}">Bảng điều khiển</a></li>
                    <li class="active">Sản phẩm</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Danh sách</h3>
                    <div class="app-search hidden-sm hidden-xs m-r-10">
                        <input id="myInput" class="form-control form-control-navbar" style="border: 0.5px solid" type="text" placeholder="Tìm kiếm" aria-label="Search">
                    </div>
                    </br>
                    <p class="success" style="color:green; font-size:20px; font-weight:bold;">
                        <?php
                        $message = Session::get('message');
                        if($message){
                            echo $message;
                            Session::put('message', NULL);
                        }
                    ?>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên</th>
                                    <th>Ảnh</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th><select class="sort1">
                                                    <option value="all">All Loại hình</option>
                                                    <option value="1">Thông thường</option>
                                                    <option value="2">Đi chợ</option>
                                                </select></th>
                                    <th>
                                    <select class="sort2">
                                        <option value="all">All Danh Mục</option>
                                        @foreach($category as $cate)
                                            <option value="{{$cate->id}}">{{$cate->name}}</option>
                                        @endforeach
                                    </select></th>
                                    
                                    </th>
                                    <th>Lượt xem</th>
                                    <th>Ngày cập nhật</th>
                                    <th><a href="{{route('admin.createProduct')}}" class="btn btn-primary">Thêm</a></th>
                                </tr>
                            </thead>
                            <tbody id="FilterContainer">
                                @foreach($pro as $no => $item)
                                <tr class="column" data-data1="{{$item->allow_market}}" data-data2="{{$item->category_id}}">
                                    <td>{{$item->id}}</td>
                                    <td style="font-weight:bold;">{{$item->name}}</td>
                                    <td><img src="../public/uploads/products/{{$item->image_gallery}}" alt=""
                                            height="100" width="100"></td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->quantily}}</td>
                                    <td>{{$item->allow_market == 1 ? "Thông thường" : "Đi chợ"}}</td>
                                    <td>{{isset($item->category) ? $item->category->name : ''}}</td>
                                    <td>{{$item->views}}</td>
                                    <td>{{$item->update_at}}</td>
                                    <td style="font-size: 20px;">
                                        <a style="padding-left: 10px;"
                                            href="{{URL::to('/admin/products/edit/'.$item->id)}}"><i
                                                class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                        <a onclick="return confirm('Bạn chắc chắn muốn xóa sản phẩm này')"
                                            style="padding-left: 10px;"
                                            href="{{route('admin.removeProduct',['id' => $item->id])}}"
                                            class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-center"> 2021 &copy; Ample Admin brought to you by MarketNow.com </footer>
</div>
@endsection