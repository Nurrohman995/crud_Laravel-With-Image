@extends('layout/template')

@section('content')

<div id="content-wrapper">
    <div class="container-fluid">
          <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Data Siswa</li>
            </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
           <i class="fas fa-table"></i>
            Data Siswa
            <a href="{{ URL::to('tambah_siswa') }}" class="btn btn-warning"><i class="fas fa-plus-circle"></i>Tambah</a>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Name</th>
                                <th>Alamat</th>
                                <th>Nomor Telepon</th>
                                <th>Image</th>
                                <th>create datetime</th>
                                <th>Update Datetime</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($MahasiswaModel as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->nomor_telepon }}</td>
                                <td>
                                    @if ($item->image)
                                        <img src="{{ asset('storage/'.$item->image) }}" width="86px">
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>{{ $item->create_datetime }}</td>
                                <td>{{ $item->update_datetime }}</td>
                                <td>
                                    <a href="{{ URL::to('edit/'.$item->id) }}" class="btn btn-primary" title="Edit"><i class="fas fa-pen"></i> Edit</a>
                                    <a href="{{ URL::to('/delete/'.$item->id) }}" onclick="return confirm('Apakah anda yakin ingin menghapus {{ $item->name }}')" class="btn btn-danger" title="Hapus"><i class="fas fa-remove"></i> Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

    @endsection
