@extends('layouts.user')

@section('content')
<div class="container" style="padding-top:100px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">SFD | Cari Tahu Status Mu</div>
                @if(session('message'))
                <script>
                    alert('Maaf kak, code yang anda masukkan tidak ada :)');
                </script>
                @endif
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('cariaku') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('generate_code') ? ' has-error' : '' }}">
                            <label for="generate_code" class="col-md-4 control-label">Your Code</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="generate_code" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Cari
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
