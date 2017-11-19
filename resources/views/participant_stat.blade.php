@extends('layouts.app') @section('content')
<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Status</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="alert alert-warning alert-biodata" role="alert" style="display: block;">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Perhatian :</span>
                        <em>Hai,
                            <b>{{$participant->name}} </b>
                            <br>
                            Ayo kumpulkan point dan tukarkan dengan Merchandise yang menarik :D
                        </em>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-md-6">
                            <!-- small box -->
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <!-- <h3 class="jumlahbiodata">0</h3> -->
                                    <p>
                                        <small>
                                            <b>Your Point '(^-^)'</b>
                                        </small>
                                    </p>
                                    <h3>{{$participant->point}}</h3>
                                </div>
                                <div class="icon">
                                    <!--<i class="ion ion-stats-bars"></i>-->
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12 col-md-6">
                            <table id="table-participant" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Point</th>
                                        <th>Exchange</th>
                                        <th>Sisa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>390</td>
                                        <td>Kaos TeaLinuxOS</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div style="height: 100px"></div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection