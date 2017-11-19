<html>

<head>
    <title>SFD | Status</title>

    <link rel="icon" type="{{asset('img/ico')}}" href="./img/logo.png">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fileinput.min.css')}}">

    <!--Legacy Framework Mbiyen-->
    <link rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.min.css')}}">

    <!--NOTINY-->
    <link rel="stylesheet" href="{{asset('css/notiny.min.css')}}">

    <!--VALIDATION-->
    <link rel="stylesheet" href="{{asset('css/validationEngine.jquery.css')}}" type="text/css">

    <!--    TABLE-->
    <!-- <link rel="stylesheet" href="{{asset('css/tablefix.css')}}" type="text/css"> -->

    <link rel="stylesheet" type="text/css" href="{{asset('css/materialPreloader.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-iconpicker.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/s2-docs.css')}}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">

</head>

<body class="fixed skin-blue sidebar-mini" style="">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="dashboard.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">
                    <b>
                        <img src="{{asset('img/logo.png')}}" width="35" height="auto">
                    </b>
                </span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">
                    <span class="pull-left">
                        <img src="{{asset('img/logo.png')}}" width="35" height="auto">
                        <b>Software Freedom Day</b>
                    </span>
                </span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav"></ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img alt="User Image" class="img-circle" src="{{asset('img/default.jpg')}}">
                </div>
                <div class="pull-left info">
                    <p>{{ $participant->name }}</p>
                    <a href="#">
                        <i class="fa fa-circle text-success"></i>{{ $participant->username }}</a>
                </div>
            </div>
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 521px;">
                <div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.2); width: 3px; position: absolute; top: 0px; opacity: 0.4; border-radius: 7px; z-index: 99; right: 1px; height: 521px; display: none;"></div>
                <div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" id="utama" >
            @yield('content')
            <footer class="main-footer">
                <div class="">
                    <b>Version</b> 1.0 alpha
                </div>
                <strong>Copyright © 2017
                    <a href="https://doscom.org" target="_blank">doscom</a>.</strong> All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>
        </div>
        <script src="{{asset('js/script.js')}}"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script src="{{asset('js/analytics.js')}}"></script>
        <!-- jQuery 2.2.0 -->
        <script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
        <script src="{{asset('js/jquery-ui.min.js')}}"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('js/app.min.js')}}"></script>
        <!-- Sparkline -->
        <!-- SlimScroll 1.3.0 -->
        <script src="{{asset('js/jquery.slimscroll.min.js')}}"></script>

        <!--Legacy Framework Mbiyen-->
        <script src="{{asset('js/moment.js')}}"></script>
        <script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>

        <!-- NOTINY -->
        <script src="{{asset('js/notiny.min.js')}}"></script>

        <!--CKEDITOR-->
        <script src="{{asset('js/ckeditor.js')}}"></script>
        <script src="{{asset('js/jquery.js')}}"></script>
        <!--CKEDITOR-->

        <!--chart-->
        <script src="{{asset('js/highcharts.js')}}"></script>
        <script src="{{asset('js/data.js')}}"></script>
        <script src="{{asset('js/exporting.js')}}"></script>
        <!--chart-->

        <script src="{{asset('js/materialPreloader.min.js')}}"></script>

        <!--TABS  -->
        <script src="{{asset('js/bootstrap-tab.min.js')}}"></script>
        <!--TABS  -->

        <!--VALDATION-->
        <script src="{{asset('js/jquery.validationEngine-id.js')}}"></script>
        <script src="{{asset('js/jquery.validationEngine.js')}}"></script>

        <!--TABLE  -->
        <script src="{{asset('js/tablefix.js')}}"></script>
        <script src="{{asset('js/fontawesome-iconpicker.js')}}"></script>
        <script src="{{asset('js/jquery.amaran.min.js')}}"></script>
        <script src="{{asset('js/bootbox.min.js')}}"></script>
        <script src="{{asset('js/select2.full.min.js')}}"></script>
        <script src="{{asset('js/jquery.maskedinput.js')}}"></script>
        <script src="{{asset('js/claravel.js')}}"></script>
        <script src="{{asset('js/fileinput.js')}}"></script>
        <script src="{{asset('js/moment.min.js')}}"></script>
        <script src="{{asset('js/fullcalendar.min.js')}}"></script>
        <script src="{{asset('js/Chart.min.js')}}"></script>

        <!-- DataTables -->
        <script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

        <script>
            $(function () {
                $('#example1').DataTable()
                $('#example2').DataTable({
                    'paging': true,
                    'lengthChange': true,
                    'searching': false,
                    'ordering': true,
                    'info': true,
                    'autoWidth': true
                })
            })

            $(document).ready(function () {
                $('#table-participant').DataTable();
            });
        </script>
</body>

</html>