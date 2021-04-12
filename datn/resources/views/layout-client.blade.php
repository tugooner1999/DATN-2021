<?php
    if(!isset($_SESSION)) 
    { 
        session_start();
    }                                
    $totalItem = 0;
    if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart'] as $val){
            $totalItem += $val['quantity'];
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tạp hoá Chúc An</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/client/images/favicon/favicon.png')}}" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" href="{{asset('assets/client/css/vendor/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/style.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{asset('assets/client/css/responsive.min.css')}}">
    
    <style>
        
        .count-cart::after{ content:'{{$totalItem}}' !important}
    </style>
</head>

<body>

    <div id="main">
        @include('client/layout/header')
        @yield('content')
        @include('client/layout/footer')
    </div>
    <script src="{{asset('assets/client/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/client/js/vendor/modernizr-3.7.1.min.js')}}"></script>
    <script src="{{asset('assets/client/js/plugins.min.js')}}"></script>
    <script src="{{asset('assets/client/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        
        $(document).ready(function(){
            var typeVoucher =sessionStorage.getItem('typeVoucher')
            var voucherValue =sessionStorage.getItem('voucherValue')
            $('.select-payment-method').click(function(){
                $('.select-payment-method').not(this).prop("checked", false);
            })
            $('#checkout').click(function(e){
                e.preventDefault()
                var checkBoxPayment = $('.select-payment-method').is(':checked')
                console.log(checkBoxPayment)
                if(checkBoxPayment){
                    alert('checked')
                }
            })
            // Thêm mã giảm giá
            $('#add-voucher').click(function(e){
                e.preventDefault()
                var voucherCode = $('#voucher-code').val()
                if(!voucherCode){
                    toastr.error('Mã giảm giá không được bỏ trống', 'Thông báo')
                }
                else{
                    $.ajax({
                        type:"POST",
                        url: "{{route('client.addVoucherToCart')}}",
                        dataType:"json",
                        data:{
                            voucherCode:voucherCode,
                            _token:"{{csrf_token()}}"
                        },
                        success: function(result){
                            if(result.status === false){
                                toastr.error(result.msg, 'Thông báo')
                            }
                            if(result.status === true){
                                var totalPriceInCart = result.totalPriceInCart
                                Swal.fire('',result.msg , 'success')
                                $('.voucher-box').empty()
                                if(result.data.type ==2){
                                    sessionStorage.setItem("typeVoucher",result.data.type);
                                    // typeVoucher =result.data.type
                                    sessionStorage.setItem('voucherValue',result.data.value);
                                    // voucherValue =result.data.value
                                    $('#sale-off').html(new Intl.NumberFormat('en-GB').format(totalPriceInCart * result.data.value / 100) + " VNĐ")
                                    $('.grand-totall-title').html("Tổng tiền " + new Intl.NumberFormat('en-GB').format(totalPriceInCart - totalPriceInCart * result.data.value / 100) + " VNĐ")
                                }
                                if(result.data.type ==1){
                                    // typeVoucher =result.data.type
                                    // voucherValue =result.data.value
                                    sessionStorage.setItem("typeVoucher",result.data.type);
                                    sessionStorage.setItem('voucherValue',result.data.value);
                                    $('#sale-off').html(new Intl.NumberFormat('en-GB').format(result.data.value) + " VNĐ")
                                    $('.grand-totall-title').html("Tổng tiền " + new Intl.NumberFormat('en-GB').format(totalPriceInCart - result.data.value) + " VNĐ")
                                    
                                }
                                
                            }
                            
                        }
                    })
                }
                
            })
            // thêm vào giỏ hàng
            $('.cart-btn').click(function(e){
                e.preventDefault();
                var idProduct = $(this).attr('product-id')
                $.ajax({
                    type:"POST",
                    url: "{{route('client.add-to-cart')}}",
                    dataType:"json",
                    data:{
                        id:idProduct,
                        _token:"{{csrf_token()}}"
                    },
                    success: function(result){
                        if(result.status === true){
                            toastr.success('Thêm vào giỏ hàng công', 'Thông báo')
                            $('head').append(`<style>.count-cart::after{ content:'${result.totalItem}' !important}</style>`);
                        }
                        
                    }

                })
            })
            
            
            // cập nhật giỏ hàng
            
            $('#update-cart').click(function(e){
                e.preventDefault();
                var arrayProduct = []
                var arrayQuantity = []
                var updateCart = $('.cart-plus-minus-box').each(function(item){
                    var idProduct = $(this).attr('prod-id')
                    var quantity = $(this).val()
                    arrayProduct.push(idProduct)
                    arrayQuantity.push(quantity)
                })   
                $.ajax({
                        type:"POST",
                        url: "{{route('client.update-cart')}}",
                        dataType:"json",
                        data:{
                            id:arrayProduct,    
                            quantity:arrayQuantity,
                            _token:"{{csrf_token()}}"
                        },
                        success: function(result){
                            if(result.status === true){
                                console.log(typeVoucher)
                                var totalPriceInCart = result.totalPriceInCart
                                Swal.fire('', 'Cập nhật giỏ hàng thành công', 'success')
                                $('.product-subtotal').each(function(item){
                                    var proId =$(this).attr("prod-id")
                                    var totalPrice = new Intl.NumberFormat('en-GB').format(result.data[proId].quantity * result.data[proId].price)
                                    if(result.data[proId].id == proId){
                                        $(this).html(totalPrice + " VNĐ")
                                        $('head').append(`<style>.count-cart::after{ content:'${result.totalItem}' !important}</style>`);
                                    }  
                                })
                                if(typeVoucher==2){
                                    $('#sale-off').html(new Intl.NumberFormat('en-GB').format(totalPriceInCart * voucherValue / 100) + " VNĐ")
                                    $('.grand-totall-title').html("Tổng tiền " + new Intl.NumberFormat('en-GB').format(totalPriceInCart - totalPriceInCart * voucherValue / 100) + " VNĐ")
                                }
                                if(typeVoucher==1){
                                    console.log(1)
                                    $('#sale-off').html(new Intl.NumberFormat('en-GB').format(voucherValue) + " VNĐ")
                                    $('.grand-totall-title').html("Tổng tiền " + new Intl.NumberFormat('en-GB').format(totalPriceInCart - voucherValue) + " VNĐ")
                                }
                                $('#total-price-cart').html(new Intl.NumberFormat('en-GB').format(totalPriceInCart) + " VNĐ")
                                
                                
                            }
                            if(result.status === false){
                                toastr.error(result.msg,'Lỗi')
                            }
                            
                        }
                })           
            
            })
            //remove item cart 
            $('.product-remove a').click(function(e){
                e.preventDefault();
                var idProduct = $(this).attr('prod-id')
                $("#" +idProduct).fadeOut(1000,function(){
                    $.ajax({
                        type:"POST",
                        url: "{{route('client.remove-product-in-cart')}}",
                        dataType:"json",
                        data:{
                            action:'remove-one',
                            id:idProduct,    
                            _token:"{{csrf_token()}}"
                        },
                        success: function(result){
                            if(result.status === true){
                                var totalPriceInCart = result.totalPriceInCart
                                $('#total-price-cart').html(totalPriceInCart +" VNĐ")
                                if(typeVoucher ==2){
                                    $('#sale-off').html(new Intl.NumberFormat('en-GB').format(totalPriceInCart * voucherValue / 100) + " VNĐ")
                                    $('.grand-totall-title').html("Tổng tiền " + new Intl.NumberFormat('en-GB').format(totalPriceInCart - totalPriceInCart * voucherValue / 100) + " VNĐ")
                                }
                                if(typeVoucher ==1){
                                    $('#sale-off').html(new Intl.NumberFormat('en-GB').format(voucherValue) + " VNĐ")
                                    $('.grand-totall-title').html("Tổng tiền " + new Intl.NumberFormat('en-GB').format(totalPriceInCart - voucherValue) + " VNĐ")
                                }
                                // $('.grand-totall-title').html("Tổng tiền " + totalPriceInCart + " VNĐ")
                                $('head').append(`<style>.count-cart::after{ content:'${result.totalItem}' !important}</style>`);
                                $("#" +idProduct).remove()
                                if(!$("tbody tr").html()){
                                    sessionStorage.clear();
                                    $(".content-cart, .cart-page-title").empty()
                                    setTimeout(function(){
                                        $(".content-cart").append(`<h3 class="container-fluid text-center">Giỏ hàng trống!</h3>`)
                                    },200)    
                                }
                            }
                            
                        }

                    })
                })
                     
            })
            //remove all item cart
            $('#delete-cart').click(function(e){
                e.preventDefault();
                if(confirm("Bạn chắc chắn muốn xóa toàn bộ giỏ hàng ?")){
                    $.ajax({
                        type:"POST",
                        url: "{{route('client.remove-product-in-cart')}}",
                        dataType:"json",
                        data:{
                            action:'remove-all',  
                            _token:"{{csrf_token()}}"
                        },
                        success: function(result){
                            if(result.status === true){
                                sessionStorage.clear()
                                $('head').append(`<style>.count-cart::after{ content:'${0}' !important}</style>`);
                                $(".content-cart, .cart-page-title").empty()
                                setTimeout(function(){
                                    $(".content-cart").append(`<h3 class="container-fluid text-center">Giỏ hàng trống!</h3>`)
                                },200)
                            } 
                        }

                    })
                }
                
            })
           
        })
    </script>
</body>

</html>