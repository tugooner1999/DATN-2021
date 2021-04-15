@extends('layout-admin')
@section('content')

<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row bg-title">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Thêm slider</h4> </div>
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <a href="{{route('client.homepage')}}" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Về trang chủ <i class="fa fa-home" aria-hidden="true"></i></a>
                            
                            <ol class="breadcrumb">
                                <li><a href="#">Bảng điều khiển</a></li>
                                <li class="active">Sửa slider</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-xs-12">
                            <div class="white-box">
                            
                                <form class="form-horizontal form-material" action="" method="POST" enctype="multipart/form-data" >
                                    @isset($msg)
                    <p style="color: green">{{$msg}}</p>
                @endisset
                @isset($errs)
                    @foreach($errs as $e)
                        <p style="color: red"> {{  implode('<br>', $e ) }}  </p>
                    @endforeach
                @endisset
                                @csrf
                                    <div class="form-group">
                                        <label class="col-md-12">Title</label>
                                        <div class="col-md-12">
                                            <input type="text" name ="title" value="{{$objU->title}}" class="form-control form-control-line"> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Mô tả</label>
                                        <div class="col-md-12">
                                            <textarea rows="5"  name="description" class="form-control form-control-line">{{$objU->description}}</textarea>
                                        </div>
                                    </div>
                                    <img src="{{$objU->image}}" width="250px" height="200px" alt="">
                                    <div class="form-group">
                                        <label class="col-sm-12">Tải ảnh mới</label>
                                        <input class="col-sm-12" type="file" name="image">
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-danger">Thêm mới</button>
                                            <a href="{{route('admin.listSlider')}}" class="btn btn-success">Trở về</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>
            
@endsection