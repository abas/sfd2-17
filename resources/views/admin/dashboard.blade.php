@extends('admin.layouts.app')
@section('content')
@php
$auth_user = \Illuminate\Support\Facades\Auth::user();
@endphp

@if(Auth::user()->user_type == 'admin')
<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Dashboard Title</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                
                <div class="box-body">
                    <div class="alert alert-warning alert-biodata" role="alert" style="display: block;">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Perhatian :</span>
                            <em>Hello, Selamat Datang <b>username</b></em>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <!-- <h3 class="jumlahbiodata">0</h3> -->
                                    <h3>title</h3>
                                    <p><small>sub title</small> 1</p>
                                </div>
                                <div class="icon">
                                    <!--<i class="ion ion-stats-bars"></i>-->
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                </div>
                                <a class="small-box-footer links" href="">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <!-- <h3 class="jumlahriwayat">0</h3> -->
                                    <h3>title</h3>
                                    <p><small>sub title</small> 2</p>
                                </div>
                                <div class="icon">
                                    <!--<i class="ion ion-person-add"></i>-->
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                </div>
                                <a class="small-box-footer links" href="">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div style="height: 200px"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
</div>
@endsection