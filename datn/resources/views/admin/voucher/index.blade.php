@extends('layout-admin')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Voucher</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Về trang chủ <i class="fa fa-home" aria-hidden="true"></i></a>
                        <ol class="breadcrumb">
                            <li><a href="{{route('admin.dashboard')}}">Bảng điều khiển</a></li>
                            <li class="active">Voucher</li>
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
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tên Voucher</th>
                                            <th>Mã code</th>
                                            <th>Ngày bắt đầu</th>
                                            <th>Ngày hết hạn</th>
                                            <th>Loại</th>                                           
                                            <th>Người tạo</th>
                                            <th>Trạng thái</th>
                                            <th>Ngày tạo</th>
                                            <th><a href="{{route('admin.addVoucher')}}" class="btn btn-primary">Thêm</a></th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        @foreach ($voucher as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->code}}</td>
                                            <td>{{$item->start_date}}</td>
                                            <td>{{$item->finish_date}}</td>

                                            <td>
                                                @php
                                                    $parent = App\Models\Voucher_type::find($item->type_id);
                                                @endphp
                                                @if($parent !== false)
                                                    {{$parent->name}}
                                                @endif
                                            </td>
                                            <td>{{$item->created_by}}</td>
                                            <td class="text-{{$item->status == 1 ? "success" : "danger"}}">{{$item->status == 1 ? "Chưa sử dụng" : "Hết hạn"}}</td>
                                            <td>{{$item->created_at}}</td>
                                            <td style="font-size: 20px;">
                                                <a style="padding-left: 10px;" href="{{route('admin.editVoucher',['id'=>$item->id])}}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                {{-- <a style="padding-left: 10px;" href="{{route( 'admin.deteleVoucher',[ 'id'=>$item->id]) }}" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a> --}}
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