@extends('layout/template')

@section('content')
<div id="content-wrapper">
        <div class="container-fluid">
              <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Tambah Data Siswa</li>
                </ol>

        <div class="card mb-3">
            <div class="card-header">
               <i class="fas fa-table"></i>
                Tambah Siswa
            </div>
            <div class="card-body">
                <form action="{{ URL::to('insert') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" autofocus required placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label"required>Nomor Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required placeholder="Nomor Telepon" name="nomor_telepon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="alamat" name="alamat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="image" class="form-control" id="image">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-warning"><i class="fas fa-save"></i> Simpan</button>
                </form>
            </div>
        </div>
@endsection
