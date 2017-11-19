@extends('admin.layouts.app') @section('content')
@if(session('isAda'))
<script>
  alert('code tidak valid! atau salah!')
</script>
@endif
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
            Tambah Stand
            <i class="fa fa-rocket"></i>
          </button>
        </div>

        <div class="box-body">
          <div class="content">
            <div class="row">
              <!-- Stand ADD Here! -->
              @foreach($stand as $get)
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
                    <span class="info-box-text">{{$get->name}}</span>
                    <span class="info-box-number" style="text-decoration:none;"><b>{{$get->participant}}</b> peserta</span>
                    <br>
                    <a data-toggle="modal" data-target="#participant-done{{$get->id}}">add Point
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
  @foreach($stand as $mod)
  <div class="modal fade" id="participant-done{{$mod->id}}" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="text-red">
              <b>x</b>
            </span>
          </button>
          <h4 class="modal-title">Add Point</h4>
        </div>

        <div class="modal-body">
          <form action="{{route('addpoint',$mod->id)}}" method="post">
            {{ csrf_field() }}
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-code"></i></span>
              <input name="generate_code" class="form-control" placeholder="Generated Code" type="text">
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-rub"></i>
              </span>
              <select class="form-control" name="point">
                <option value="10">10 point</option>
                <option value="20">20 point</option>
                <option value="30">30 point</option>
              </select>
            </div>
            <br>
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary pull-right">Submit</button>
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
          <h4 class="modal-title">Tambah Stand</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" action="{{route('stand')}}">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="nama-stand" class="col-sm-3 control-label">Nama Stand</label>
                <div class="col-sm-9">
                  <input type="text" name="name" class="form-control" id="nama-stand">
                </div>
              </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>
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