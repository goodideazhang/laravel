<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="AdminLTE,AdminEAP,AdminLTE框架">
    <meta name="description" content="基于AdminLTE的快速开发框架,让web开发更简单">
    <title>laravel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!--  -->
    <link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico" media="screen">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('/icon/favicon.ico')}}" media="screen"/>
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{URL::asset('/packages/adminlte/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{URL::asset('/fonts/css/font-awesome.min.css')}}">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->

    <link rel="stylesheet" href="{{URL::asset('/css/base.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->
    <!-- table and edit -->
    <link rel="stylesheet" href="{{URL::asset('/packages/adminlte/plugins/datatables/dataTables.bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/packages/adminlte/plugins/datatables/select.bootstrap.min.css')}}">
    <link rel="stylesheet"
          href="{{URL::asset('/packages/adminlte/plugins/bootstrap-validator/dist/css/bootstrap-validator.css')}}"/>
    <link rel="stylesheet" href="{{URL::asset('/packages/adminlte/plugins/iCheck/all.css')}}">
    <!-- daterangepicker -->
<!--<link rel="stylesheet" href="{{URL::asset('/packages/adminlte/plugins/daterangepicker/daterangepicker.css')}}">-->
    <link rel="stylesheet" href="{{URL::asset('/packages/adminlte/plugins/datepicker/datepicker3.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/packages/adminlte/plugins/select2/select2.min.css')}}">
    <!-- treeview -->
    <link rel="stylesheet"
          href="{{URL::asset('/packages/adminlte/plugins/bootstrap-treeview/bootstrap-treeview.min.css')}}"/>
    <!-- Theme style -->
    <link rel="stylesheet" href="{{URL::asset('/packages/adminlte/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/packages/adminlte/dist/css/skins/_all-skins.css')}}">
    @yield('css')
</head>
<body class="hold-transition skin-blue sidebar-mini fixed">
<a name="main"></a>
<div class="wrapper">

    @include('layouts.partials.header')

    @include('layouts.partials.sidebar')


    <div class="content-wrapper" id="mainDiv">

        @yield('content')

    </div>


    @include('layouts.partials.footer')


    <div class="control-sidebar-bg"></div>

</div>

<!-- jQuery 2.2.0 -->
<script src="{{URL::asset('/packages/adminlte/plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>
<!--JSON2-->
{{--<script src="{{URL::asset('/packages/common/json/json2.js')}}"></script>--}}
<!-- Bootstrap 3.3.6 -->
<script src="{{URL::asset('/packages/adminlte/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::asset('/packages/adminlte/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('/packages/adminlte/dist/js/app.min.js')}}"></script>
<script src="{{URL::asset('/packages/adminlte/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>

<!-- dataTable -->
<script src="{{URL::asset('/packages/adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('/packages/adminlte/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script src="{{URL::asset('/js/dataTables.js')}}"></script>
<!-- form -->
<script src="{{URL::asset('/packages/adminlte/plugins/bootstrap-validator/dist/js/bootstrap-validator.js')}}"></script>
<script src="{{URL::asset('/packages/adminlte/plugins/iCheck/icheck.min.js')}}"></script>

<!--daterangepicker-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{URL::asset('/packages/adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>-->

<script src="{{URL::asset('/packages/adminlte/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{URL::asset('/packages/adminlte/plugins/datepicker/locales/bootstrap-datepicker.zh-CN.js')}}"></script>
<!-- treeview -->
<script src="{{URL::asset('/packages/adminlte/plugins/bootstrap-treeview/bootstrap-treeview.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('/packages/adminlte/dist/js/demo.js')}}"></script>
<!--select2-->
<script src="{{URL::asset('/packages/adminlte/plugins/select2/select2.full.min.js')}}"></script>

<script type="text/javascript" src="{{URL::asset('/js/base.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js/base-modal.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js/base-form.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js/base-datasource.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js/base-org.js')}}"></script>
<!-- 加入页面的的脚本 -->

@yield('javascript')

</body>

</html>
