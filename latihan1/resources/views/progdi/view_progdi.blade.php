@extends('layout/template')

@section('content')

<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Data Progdi</li>
            </li>
        </ol>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Data Progdi
                <a href="{{ URL::to('/admin/tambah_progdi') }}" class="btn btn-default"><i class="fas fa-plus"></i> Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspasing="0">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Nama Progdi</th>
                                <th>Create datetime</th>
                                <th>Update Datetime</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @php
                            $no = 1;
                        @endphp
                        <tbody>
                        @foreach ($progdi as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->nama_progdi }}</td>
                            <td>{{ $item->create_datetime }}</td>
                            <td>{{ $item->update_datetime }}</td>
                            <td>
                                <a href="{{ URL::to('/admin/edit/'.$item->id) }}" class="btn btn-dark"><i class="fas fa-pen-fancy"></i> Edit</a>
                                <a href="{{ URL::to('admin/delete/'.$item->id) }}" onclick="return confirm('apakah yakin ingin menghapus')" class="btn btn-outline-danger"><i class="fas fa-remove"></i> Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
