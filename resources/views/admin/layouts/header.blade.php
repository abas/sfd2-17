<html>
    <head>
        <title>Dashboard</title>

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
                        <b><img src="{{asset('img/logo.png')}}" width="35" height="auto"></b>
                    </span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">
                        <span class="pull-left">
                            <img src="{{asset('img/logo.png')}}" width="35" height="auto">
                            <b>Dashboard</b>
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
                        <ul class="nav navbar-nav">
                            
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-danger"><span class="jumlahbiodata">0</span></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">
                                        <span class="xnotifikasi">Anda tidak memiliki pemberitahuan terkini</span>
                                    </li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;">
                                            <ul class="menu" style="overflow: hidden; height: 200px; width: 100%;">
                                                <li><a href="" class="links"><i class="fa fa-arrow-circle-right text-aqua"></i> Perubahan Biodata <span class="r_biodata"></span></a></li>
                                                <li><a href="" class="links"><i class="fa fa-arrow-circle-right text-aqua"></i> Perubahan Data <span class="r_biodata"></span></a></li>
                                            </ul>
                                            <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; border-radius: 7px; z-index: 99; right: 1px; display: block;"></div>
                                            <div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false">
                                    <img alt="User Image" class="user-image" src="{{asset('img/default.jpg')}}">
                                    <span class="hidden-xs">{{ Auth::user()->name }}</span>
                                </a>

                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header" style="height: auto;">
                                        <img src="{{asset('img/default.jpg')}}" class="img-circle" alt="User Image">
                                        <p>
                                        {{ Auth::user()->name }}
                                            <small>{{ Auth::user()->user_type}}</small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a id="profil_user2" href="" class="btn btn-default">Ubah Password</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="{{ route('logout') }}" class="btn btn-danger btn-flat"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign out</a>
                                        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
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
                        <p>{{ Auth::user()->name }}</p>
                        <a href="#"><i class="fa fa-circle text-success"></i>{{ Auth::user()->user_type }}</a>
                    </div>
                </div>
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 521px;">
                    <section class="sidebar" style="overflow: hidden; width: auto; height: 521px;">
                        <!-- sidebar menu: : style can be found in sidebar.less -->
                        <ul class="sidebar-menu">
                            <li class="header">MENU UTAMA</li>
                            <ul class="sidebar-menu">
                                <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i><span>Dashboard</span> <span class="dashboard"></span></a></li>
                                <li class="treeview active">
                                    <a href="#"><i class="fa fa-users"></i><span>Software Freedom Day</span> <span class="epersonal"></span><i class="fa fa-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li class="active"><a href=""><i class="fa fa-arrow-circle-right"></i> Workshop <span class="biodatapegawai"></span><i class="fa fa-angle-left pull-right"></i></a>
                                            <ul class="treeview-menu">
                                                <li><a id="" href="#"><i class="fa fa-arrow-circle-right"></i> All Participant</a></li>
                                            </ul>
                                        </li>
                                        <li class="active"><a href=""><i class="fa fa-arrow-circle-right"></i> Festival <span class="biodatapegawai"></span><i class="fa fa-angle-left pull-right"></i></a>
                                            <ul class="treeview-menu">
                                                <li><a id="" href="{{route('festival')}}"><i class="fa fa-arrow-circle-right"></i> All Participant<span class="biodata pull-right"></span></a></li>
                                                <li><a id="" href="{{route('stand')}}"><i class="fa fa-arrow-circle-right"></i> All Stand<span class="biodata pull-right"></span></a></li>
                                                <!-- <li><a id="" href="add-point.html"><i class="fa fa-arrow-circle-right"></i> Add Point<span class="biodata pull-right"></span></a></li> -->
                                                <li><a id="" href="{{route('merchandise')}}"><i class="fa fa-arrow-circle-right"></i>Merchandise<span class="biodata pull-right"></span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </ul>
                        </section>
                    <div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.2); width: 3px; position: absolute; top: 0px; opacity: 0.4; border-radius: 7px; z-index: 99; right: 1px; height: 521px; display: none;"></div>
                    <div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                </div>
                <!-- /.sidebar -->
            </aside>


            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" id="utama" style="min-height: 520px;">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard 
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
        