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
            
            // thêm vào giỏ hàng
            $('.cart-btn').click(function(){
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
            // $('#update-cart').click(function(e){
            //     e.preventDefault();
            //     var updateCart = $('.cart-plus-minus-box').each(function(item){
            //         var idProduct = $(this).attr('prod-id')
            //         var quantity = $(this).val()
            //         $.ajax({
            //             type:"POST",
            //             url: "{{route('client.update-cart')}}",
            //             dataType:"json",
            //             data:{
            //                 id:idProduct,    
            //                 quantity:quantity,
            //                 _token:"{{csrf_token()}}"
            //             },
            //             success: function(result){
            //                 if(result.status === true){
            //                     var totalPrice = result.data[idProduct].quantity * result.data[idProduct].price
            //                     $('.product-subtotal').each(function(item){
            //                         var proId =$(this).attr("prod-id")
            //                         if(result.data[idProduct].id == proId){
            //                             $(this).html(totalPrice + " VNĐ")
            //                             $('head').append(`<style>.count-cart::after{ content:'${result.totalItem}' !important}</style>`);
            //                         }  
            //                     })
            //                     Swal.fire('', 'Cập nhật giỏ hàng thành công', 'success') 
            //                 }
            //                 if(result.status === false){
            //                     toastr.error(result.msg,'Lỗi')
            //                 }
            //             }

            //         })
                    
                    
                    
            //     })              
            

                          
            // })
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
                                $('.product-subtotal').each(function(item){
                                    var proId =$(this).attr("prod-id")
                                    var totalPrice = result.data[proId].quantity * result.data[proId].price
                                    if(result.data[proId].id == proId){
                                        $(this).html(totalPrice + " VNĐ")
                                        $('head').append(`<style>.count-cart::after{ content:'${result.totalItem}' !important}</style>`);
                                    }  
                                })
                                $('.grand-totall h5 span').html(result.totalPriceInCart + " VNĐ")
                                Swal.fire('', 'Cập nhật giỏ hàng thành công', 'success') 
                                
                            }
                            if(result.status === false){
                                toastr.error(result.msg,'Lỗi')
                            }
                            
                        }

                    })           
            

                          
            })
           
        })
    </script>
</body>

</html>