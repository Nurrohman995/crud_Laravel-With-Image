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
               <i class="fa fa-table"></i>
                Tambah Siswa
            </div>
            <div class="card-body">
                <form action="{{ URL::to('update',$MahasiswaModel->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="id" value="{{ $MahasiswaModel->id }}">
                            <input type="text" class="form-control" name="name" value="{{ $MahasiswaModel->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $MahasiswaModel->nomor_telepon }}" name="nomor_telepon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $MahasiswaModel->alamat }}" placeholder="alamat" name="alamat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            @if ($MahasiswaModel->image)
                                <img src="{{ asset('storage/'.$MahasiswaModel->image) }}" width="89px">
                            @else
                                Tidak Ada Avatar
                            @endif
                            <br>
                        <input type="file" name="image" id="image" class="form-control">
                        <small class="text-mutes">Kosongkan jika tidak ingin mengubah</small>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </form>
            </div>
        </div>
@endsection
