@extends('layout/template')

@section('content')

<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Form Edit</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header">
                <li class="fas fa-table"></li>
                Form Edit
            </div>
            <div class="card-body">
                <form action="{{ URL::to('admin/update',$progdi->id) }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="nama">Nama Progdi</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="kode" value="{{ $progdi->id }}">
                            <input type="text" name="nama_progdi" class="form-control" value="{{ $progdi->nama_progdi }}">
                        </div>
                    </div>
                        <button type="submit" class="btn btn-success btn-circle"> Edit Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
