<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/admin/plugins/images/favicon.png')}}">
    <title>Trang quản trị - hệ thống quản lý bán hàng tạp hoá Chúc An</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="{{asset('assets/admin/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}"
        rel="stylesheet">
    <link href="{{asset('assets/admin/plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/plugins/bower_components/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link
        href="{{asset('assets/admin/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}"
        rel="stylesheet">
    <link href="{{asset('assets/admin/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/colors/default.css')}}" id="theme" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script type="text/javascrip" src="{{asset('assets/admin/jquery/jquery-3.6.0.min.js')}}"></script>
</head>

<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="wrapper">
        @include('admin/layout/header')
        @include('admin/layout/sidebar')
        @yield('content')
        @include('admin/layout/footer')

    </div>

    <script>
        function changeImage() {
              var fileImage = document.getElementById("fileImage").files;
              if (fileImage.length > 0) {
                var fileToLoad = fileImage[0];
                var fileReader = new FileReader();
                fileReader.onload = function(fileLoadedEvent) {
                  var srcData = fileLoadedEvent.target.result;
                  var newImage = document.getElementById('image');
                  newImage.src = srcData;
                }
                fileReader.readAsDataURL(fileToLoad);
              }
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('assets/admin/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/admin/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/admin/js/waves.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/bower_components/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/custom.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/dashboard1.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable( {
            initComplete: function () {
                this.api().columns().every( function () {
                    var column = this;
                    var select = $('<select style="width: 100%"><option value="">All</option></select>')
                        .appendTo( $(column.footer()).empty() )
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
                            column
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                        } );
                    column.data().unique().sort().each( function ( d, j ) {
                        select.append( '<option value="'+d+'">'+d+'</option>' )
                    } );
                } );
            }
        } );
        } );
        </script>

    <script type="text/javascript" charset="UTF-8">
$.ajaxSetup({
    header:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})
    </script>
    <script>
        $('.btn-show').click(function(){
            var url = $(this).attr('data-url');
            $.ajax({
                type: 'get',
                url: url,
                dataType:"json",
                success: function(response) {
                    console.log(response)
                    $('p#id').html(response.data.description)
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    //xử lý lỗi tại đây
                }
            })
        })
        $('.btn-warning').click(function(){
            var url = $(this).attr('data-url');
            if (confirm('Hóa đơn này đã được hoàn thành')) {
            $.ajax({
                type: 'get',
                url: url,
                success: function(response) {
                    window.location.reload()
                    toastr.success('Cập nhật thành công', 'Thông báo')
                },
                error: function (jqXHR, textStatus, errorThrown) {
                }
            })
            }
        })
        $('.btn-outline-info').click(function(){
            var url = $(this).attr('data-url');
					if (confirm('Bạn có chắc muốn xóa không?')) {
						$.ajax({
							type: 'get',
							url: url,
							success: function(response) {
                                window.location.reload()
                                toastr.success('Xóa thành công', 'Thông báo')
							},
							error: function (jqXHR, textStatus, errorThrown) {
								//xử lý lỗi tại đây
							}
						})
					}
				})
        $('.btn-danger').click(function(){
            var url = $(this).attr('data-url');
            $.ajax({
                type: 'get',
                url: url,
                success: function(response) {
                    window.location.reload()
                },
                error: function (jqXHR, textStatus, errorThrown) {
                }
            })
        })
    </script>
    <script>
    $(document).ready(function(){
        $("#btnThemFile").click(function(){
            $("#chonFile").append("<br><input class='col-sm-12' name='gallery_img[]' type='file'>");
        });
    });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<script>
CKEDITOR.replace('description')
</script>
</body>

</html>
