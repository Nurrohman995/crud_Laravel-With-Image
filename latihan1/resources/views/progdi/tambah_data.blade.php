@extends('layout/template')

@section('content')

    <div id="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Tambah data progdi</li>
            </ol>
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Tambah siswa
                </div>
                <div class="card-body">
                    <form action="{{ URL::to('/admin/insert') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" autofocus name="nama_progdi" required placeholder="Nama">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-danger"><i class="fas fa-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
