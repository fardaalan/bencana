@extends('layouts.inti')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Kelola Laporan</h1>

                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Kelola Laporan</li>
                </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->

            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <a href="#tambahAkun" data-toggle="modal" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="tabel-1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Lokasi</th>
                                        <th>Jenis Bencana</th>
                                        <th>Telepon</th>
                                        <th>Desc</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($laporan as $a)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$a->nama}}</td>
                                        <td>{{$a->lokasi}}</td>
                                        <td>{{$a->jenis}}</td>
                                        <td>{{$a->telp}}</td>
                                        <td>{{$a->deskripsi}}</td>
                                        <td><a href="/admin/laporan/{{$a->id}}/destroy"><i class="fa fa-trash"></i></a></td>
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

    <!-- Modal Tambah Akun-->
<div class="modal fade" id="tambahAkun" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Akun</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/storeAkun" method="post" id="formAkun">
          @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="formGroupExampleInput">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama Pengguna" name="nama">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username Pengguna" name="username">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Password</label>
                <input type="text" class="form-control" id="pass" placeholder="Password Pengguna" name="password">
            </div>
            <div class="form-group">
                <label for="">Role</label>
                <select class="form-control" name="role">
                    <option value="">-- PILIH --</option>
                    <option value="Admin">Admin</option>
                    <option value="Manager">Manager</option>
                    <option value="Cashier">Cashier</option>
                </select>
            </div>
            <label for="">Status Akun</label>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch1" name="status" checked>
                <label class="custom-control-label" for="customSwitch1">Aktif / Inaktif</label>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
