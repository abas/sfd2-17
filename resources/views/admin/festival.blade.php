@extends('admin.layouts.app') @section('content')

<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Festival Participant</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>

                <div class="box-body">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-input">Add Participant</button>
                    <br>
                    <div class="modal fade" id="modal-input">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form role="form" method="post" action="{{route('participant')}}">
                                    {{ csrf_field() }}
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title">Add Parcipant</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="exampleInputNama">Nama</label>
                                                <input name="name" type="text" class="form-control" id="exampleInputNama">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input name="email" type="email" class="form-control" id="exampleInputEmail1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Phone</label>
                                                <input name="phone" type="text" class="form-control" id="exampleInputEmail1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">feedback</label>
                                                <input name="reason" value="Keep Going DOSCOM!" type="text" class="form-control" id="exampleInputEmail1">
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                    <table id="table-participant" class="data-table table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Code</th>
                                <th>Point</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($participant as $get)
                            <tr>
                                <td>{{$get->name}}</td>
                                <td>{{$get->generate_code}}</td>
                                <td>{{$get->point}}</td>
                                <td>{{$get->email}}</td>
                                <td>{{$get->phone}}</td>
                                <td>
                                    <center>
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                            <i class="fa fa-edit"></i> Edit
                                        </button>
                                        <div class="modal fade" id="modal-default">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title">Default Modal</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                        <div class="modal modal-danger fade" id="modal-danger">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title">Delete Participant</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure do you want to delete this participant</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline pull-left">Yes</button>
                                                        <button type="button" class="btn btn-outline" data-dismiss="modal">No</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </center>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection