@extends('layout-admin')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Voucher</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="{{route('client.homepage')}}" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Về trang chủ <i class="fa fa-home" aria-hidden="true"></i></a>
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
                                            <th>ID</th>
                                            <th>Tên Voucher</th>
                                            <th>Mã code</th>
                                            <th>Ngày bắt đầu</th>
                                            <th>Ngày kết thúc</th>
                                            <th>Số lượng </th>
                                            <th><select class="sort1">
                                                <option value="all">All Loại voucher</option>
                                                <option value="1">Giảm theo tiền</option>
                                                <option value="2">Giảm theo %</option>
                                            </select></th>      
                                            <th>Giá trị </th>                                     
                                            <th>Người tạo</th>
                                            <th><select class="sort1">
                                                <option value="all">All Trạng thái</option>
                                                <option value="1">Đang kích hoạt</option>
                                                <option value="2">Đã khoá</option>
                                            </select></th>
                                            <th><select class="sort1">
                                                <option value="all">All Hết hạn</option>
                                                <option value="1">Đang sử dụng</option>
                                                <option value="2">Hết hạn</option>
                                            </select></th>
                                            <th><a href="{{route('admin.addVoucher')}}" class="btn btn-primary">Thêm</a></th>
                                        </tr>
                                    </thead>
                                    <tbody id="FilterContainer">
                                        @foreach ($voucher as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->code}}</td>                                         
                                            <td>{{$item->start_date}}</td>
                                            <td>{{$item->finish_date}}</td>
                                            <td>{{$item->amount}}</td>
                                            <td ><?php 
                                                if ($item->type==1) {
                                                ?>
                                                Giảm theo giá tiền
                                            <?php 
                                            }else {
                                            ?>
                                                Giảm theo %
                                                <?php
                                            }
                                            ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    if ($item->type==1) {
                                                    ?>
                                                    Giảm {{ $item->value }} VND
                                                <?php 
                                                }else {
                                                ?>
                                                    Giảm {{ $item->value }} %
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                @php
                                                    $parent = App\Models\User::find($item->created_by);
                                                @endphp
                                                @if($parent)
                                                {{$parent->name}}
                                            @endif
                                            </td>
                                            
                                            <td class="text-{{$item->status == 1 ? "success" : "danger"}}">{{$item->status == 1 ? "Đang kích hoạt" : "Đã khoá"}}
                                            </td>
                                            <td>
                                                @if($item->finish_date>=$today)
                                                    <span class="text-success">Đang sử dụng</span>
                                                @else
                                                    <span class="text-danger">Hết hạn</span>
                                                @endif
                                            </td>
                                            <td style="font-size: 20px;">
                                                <a style="padding-left: 10px;" href="{{route('admin.editVoucher',['id' => $item->id])}}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                <a style="padding-left: 10px;" onclick="return confirm('bạn chắc chắn muốn xoá voucher: {{$item->name}}')"  href="{{route( 'admin.deteleVoucher',[ 'id'=>$item->id]) }}" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                <a href="{{route('admin.sendMailVoucher',['id' => $item->id])}}" class="btn btn-default">Gửi mã voucher</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                                <div class="col-xs-12 offset-xs-8 text-center pull-right ">
                                    {{$voucher->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center"> 2021 &copy; Ample Admin brought to you by MarketNow.com </footer>
        </div>
@endsection
