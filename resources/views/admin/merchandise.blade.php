@extends('admin.layouts.app') @section('content')
<!-- Main content -->
<section class="content">
  <!-- Info boxes -->
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">All Stand</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse">
              <i class="fa fa-minus"></i>
            </button>
          </div>
          <br>
          <br>
          <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#tambah-stand">
            Tambah Merchandise
            <i class="fa fa-rocket"></i>
          </button>
        </div>

        <div class="box-body">
          <div class="content">
            <div class="row">
              <!-- Stand ADD Here! -->
              @foreach($barang as $get)
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="info-box">
                  @if($get->id % 5 == 0)
                    <span class="info-box-icon bg-orange-active">
                  @elseif($get->id % 4 == 0)
                    <span class="info-box-icon bg-green">
                  @elseif($get->id % 3 == 0)
                    <span class="info-box-icon bg-aqua">
                  @elseif($get->id % 2 == 0)
                    <span class="info-box-icon bg-red">
                  @elseif($get->id % 1 == 0)
                      <span class="info-box-icon bg-navy">
                  @endif
                    <i style="padding-top:15px;" class="fa fa-desktop"></i>
                  </span>

                  <div class="info-box-content">
                    <span class="info-box-text">{{$get->nama_barang}}</span>
                    <span class="info-box-number" style="text-decoration:none;"><b>{{$get->total}}</b> tersisa</span>
                    <span class="info-box-number" style="text-decoration:none;">required : <b>{{$get->point}}</b></span>
                    <br>
                    <a data-toggle="modal" data-target="#participant-done{{$get->id}}">Option
                      <i class="fa fa-arrow-circle-right"></i>
                    </a>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @foreach($barang as $mod)
  <div class="modal fade" id="participant-done{{$mod->id}}" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="text-red">
              <b>x</b>
            </span>
          </button>
          <h4 class="modal-title">Tambah / Kurang Merchandise</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('update',$mod->id)}}">
          {{ csrf_field() }}
            <input type="text" name="tambahi" value="true" style="display:none">
            <button type="submit" class="btn btn-success">Add</button>
            <span> // untuk <b>menambah</b> Merchandise</span>
          </form>
          <form method="post" action="{{route('update',$mod->id)}}">
            {{ csrf_field() }}
            <input type="text" name="kurangi" value="true" style="display:none">
            <button type="submit" class="btn btn-danger">Sub</button>
            <span> // untuk <b>mengurangi</b> Merchandise</span>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  <div class="modal fade" id="tambah-stand" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title">Tambah Merchandise</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" action="{{route('addbarang')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="nama_barang" class="col-sm-3 control-label">Nama Barang</label>
                <div class="col-sm-9">
                  <input type="text" name="nama_barang" class="form-control" id="nama_barang">
                </div>
              </div>
              <div class="form-group">
                <label for="point" class="col-sm-3 control-label">Point</label>
                <div class="col-sm-9">
                  <input type="number" name="point" class="form-control" id="point">
                </div>
              </div>
              <div class="form-group">
                <label for="total" class="col-sm-3 control-label">Total Merchandise</label>
                <div class="col-sm-9">
                  <input type="number" name="total" class="form-control" id="total">
                </div>
              </div>
              </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="reset" class="btn btn-default" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-info pull-right">Create</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
</section>
</div>
@endsection