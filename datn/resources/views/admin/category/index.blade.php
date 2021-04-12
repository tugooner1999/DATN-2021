@extends('layout-admin')
@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Danh Mục</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="{{route('client.homepage')}}" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Về trang chủ <i class="fa fa-home" aria-hidden="true"></i></a>
                        <ol class="breadcrumb">
                            <li><a href="{{route('admin.dashboard')}}">Bảng điều khiển</a></li>
                            <li class="active">Danh mục</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                                <h3 class="box-title">Danh sách</h3>
                                <div class="app-search hidden-sm hidden-xs m-r-10">
                                    <input id="myInput" class="form-control form-control-navbar" style="border: 0.5px solid"
                                        type="text" placeholder="Tìm kiếm" aria-label="Search">
                                </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tên</th>
                                            <th>Ảnh</th>
                                            <th>Số sản phẩm</th>
                                            <th><a href="{{route('admin.addCate')}}" class="btn btn-primary">Thêm</a></th>
                                        </tr>
                                    </thead>
                                    <tbody id="FilterContainer">
                                        @foreach ($category as $item)
                                            <tr class="column">
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->name}}</td>
                                                <td><img src="{{$item->image}}" width="100" height="100" alt=""></td>
                                                <td>{{ count($item->products) }}</td>
                                                <td style="font-size: 20px;">
                                                    <a style="padding-left: 10px;" href="{{route('admin.editCate',['id'=>$item->id])}}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                    <a class="text-danger" href="{{route( 'admin.deteleCate',[ 'id'=>$item->id]) }}"  
                                                        onclick="return confirm('Bạn muốn xóa danh mục {{$item->name}}')"><i class="fa fa-trash" aria-hidden="true"></i>
                                                        </a>
                                                </td>
                                            </tr>  
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                                <div class="col-xs-12 offset-xs-8 text-center pull-right ">
                                    {{$category->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center"> 2021 &copy; Ample Admin brought to you by MarketNow.com </footer>
        </div>

@endsection
