@extends('admin.layouts.app')
@section('content')

<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Workshop Participant</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
            
                <div class="box-body">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-input">Add Participant</button><br>
                    <div class="modal fade" id="modal-input">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form role="form" method="post" action="{{route('participant')}}">
                                {{ csrf_field() }}
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Add Parcipant</h4>
                                </div>
                                <div class="modal-body">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="exampleInputNama">Nama</label>
                                                    <input name="name" type="text" class="form-control" id="exampleInputNama">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputNama">Username</label>
                                                    <input name="username" type="text" class="form-control" id="exampleInputNama">
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
                                <th>Username</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> name</td>
                                <td> nim</td>
                                <td> email</td>
                                <td> progdi</td>
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
                                                    <span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Default Modal</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>One fine body&hellip;</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                        <div class="modal modal-danger fade" id="modal-danger">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Delete Participant</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure do you want to delete this participant</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline pull-left" >Yes</button>
                                                    <button type="button" class="btn btn-outline" data-dismiss="modal">No</button>
                                                </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    </center>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Nim</th>
                                <th>Email</th>
                                <th>Program Studi</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection