@extends('layouts.main')
@section('content')
    <!-- page title -->
<section class="page-title bg-primary position-relative">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="text-white font-tertiary">Disasters</h1>
        </div>
      </div>
    </div>
    <!-- background shapes -->
    <img src="{{asset('temp/images/illustrations/page-title.png')}}" alt="illustrations" class="bg-shape-1 w-100">
    <img src="{{asset('temp/images/illustrations/dots-cyan.png')}}" alt="illustrations" class="bg-shape-3">
    <img src="{{asset('temp/images/illustrations/dots-group-cyan.png')}}" alt="illustrations" class="bg-shape-6">
  </section>
  <!-- /page title -->

  <!-- contact -->
  <section class="section section-on-footer" data-background="{{asset('temp/images/backgrounds/bg-dots.png')}}">
    <div class="container">
      <div class="row">

        <div class="col-lg-12 mx-auto">
          <div class="bg-white rounded text-center p-5 shadow-down">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Nama</th>
                    <th>Lokasi</th>
                    <th>Jenis</th>
                    <th>Telp</th>
                    <th>Deskripsi</th>
                </tr>
                @foreach ($laporans as $laporan)
                <tr>

                        <td>{{ $laporan->nama }}</td>
                        <td>{{ $laporan->lokasi }}</td>
                        <td>{{ $laporan->jenis }}</td>
                        <td>{{ $laporan->telp }}</td>
                        <td>{{ $laporan->deskripsi }}</td>

                </tr>
                @endforeach
            </table>

            {{$laporans->links()}}
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /contact -->
@endsection
