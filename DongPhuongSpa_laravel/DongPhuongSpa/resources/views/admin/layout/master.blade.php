<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('')}}css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('')}}css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('')}}css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('')}}css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('')}}css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('')}}css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('')}}css/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('')}}css/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('')}}css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('')}}css/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('')}}css/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
    {{--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
    <link rel="stylesheet" href="{{asset('')}}iCheck/all.css">

    <link rel="stylesheet" href="{{asset('')}}css/select2.min.css">
    <!-- Google Font -->
    <link rel="stylesheet" href="{{asset('')}}css/fonts-google.css">

    <link rel="stylesheet" href="{{asset('')}}css/admin-style.css">
</head>
<body class="hold-transition skin-blue sidebar-mini body-home">
<div class="wrapper">
    {{--header--}}
    @include('admin.layout.header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('admin.layout.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @yield('content')
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.1.0
        </div>
        <strong>Copyright &copy; 2018 <a href="https://hbbsolution.com">HBB Solutions</a>.</strong> All rights
        reserved.
    </footer>
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('')}}js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('')}}js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('')}}js/bootstrap.min.js"></script>
<script src="{{asset('')}}js/select2.full.min.js"></script>
<!-- Morris.js charts -->
{{--<script src="{{asset('')}}js/raphael.min.js"></script>--}}
<script src="{{asset('')}}js/morris.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('')}}js/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{asset('')}}js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{asset('')}}js/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
{{--<script src="{{asset('')}}js/jquery.knob.min.js"></script>--}}
<!-- daterangepicker -->
<script src="{{asset('')}}js/moment.min.js"></script>
{{--<script src="{{asset('')}}js/daterangepicker.js"></script>--}}
<!-- datepicker -->
<script src="{{asset('')}}js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('')}}js/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{asset('')}}js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{asset('')}}js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('')}}js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{--<script src="{{asset('')}}js/dashboard.js"></script>--}}
<!-- AdminLTE for demo purposes -->
<script src="{{asset('')}}js/demo.js"></script>
<script src="{{asset('')}}js/jquery.dataTables.min.js"></script>
<script src="{{asset('')}}js/dataTables.bootstrap.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="{{asset('')}}iCheck/icheck.min.js"></script>
<script src="{{asset('')}}js/jquery.validate.js"></script>
<script src="{{URL::asset('')}}ckeditor/ckeditor.js"></script>
<script>
    $('.editors').each( function () {
        CKEDITOR.replace(this.id, {
        });
    });
</script>
@yield('scripts')
</body>
</html>
