<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="mail">
        <div class="container">
            <h3>Mã khuyến mãi cho khách hàng từ <b>Cửa hàng Chúc An</b></h3>
        </div>
        <div class="container" style="background-color: white">
            <h2 class="note"><b><i>
                @if ($voucher['type'] == 1)
                    Giảm {{number_format($voucher['value'],0,',','.')  }} VND
                @else
                    Giảm {{$voucher['value']  }} %
                @endif
                    cho tổng đơn hàng mua
            </i></b></h2>
            <div class="container">
                <p class="code">Sử dụng code sau: <span class="promo"><b>{{ $voucher['code'] }}</b> </span> chỉ còn  {{ $voucher['amount'] }}  mã giảm giá. nhanh tay đặt mua kẻo hết</p>
                <p class="expire">Ngày bắt đầu: <b>{{ $voucher['start_date'] }}</b>  <br> / Ngày hết hạn: <b>{{ $voucher['start_date'] }}</b>  </p>
            </div>
        </div>
    </div>
</body>
</html>
