@extends('layouts.inti')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Setting User</h1>

                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Setting User</li>
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
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $a)
                                    <tr>
                                        <td>{{$a->name}}</td>
                                        <td>{{$a->email}}</td>
                                        <td></td>
                                        <td></td>
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
      <form action="/admin/user/store" method="post" id="formAkun">
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
