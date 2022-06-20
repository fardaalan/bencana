@extends('layouts.main')
@section('content')
     <!-- hero area -->
<section class="hero-area bg-primary" id="parallax">
    <div class="container">


    </div>
    <div class="layer-bg">
      <img class="img-fluid img-responsive" src="{{asset('temp/images/illustrations/sar.png')}}" alt="bg-shape">
    </div>
    <div class="row">
        <div class="col-lg-11 mx-auto mt-5 centered">
          <h1 class="text-white font-tertiary text-center">Laporan Bencana Kota Semarang</h1>
        </div>
      </div>

    <!--<div class="layer" id="l2">
      <img src="{{asset('temp/images/illustrations/dots-cyan.png')}}" alt="bg-shape">
    </div>
    <div class="layer" id="l3">
      <img src="{{asset('temp/images/illustrations/basarnas.png')}}" alt="bg-shape">
    </div>
    <div class="layer" id="l4">
      <img src="{{asset('temp/images/illustrations/bpnb.png')}}" alt="bg-shape">
    </div>
    <div class="layer" id="l5">
      <img src="{{asset('temp/images/illustrations/leaf-yellow.png')}}" alt="bg-shape">
    </div>
    <div class="layer" id="l6"
      <img src="{{asset('temp/images/illustrations/leaf-cyan.png')}}" alt="bg-shape">
    </div>
    <div class="layer" id="l7">
      <img src="{{asset('temp/images/illustrations/dots-group-orange.png')}}" alt="bg-shape">
    </div>
    <div class="layer" id="l8">
      <img src="{{asset('temp/images/illustrations/leaf-pink-round.png')}}" alt="bg-shape">
    </div>
    <div class="layer" id="l9">
      <img src="{{asset('temp/images/illustrations/leaf-cyan-2.png')}}" alt="bg-shape">
    </div>

    <!-- social icon -->
    <ul class="list-unstyled ml-5 mt-3 position-relative zindex-1">
      <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-facebook"></i></a></li>
      <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-instagram"></i></a></li>
      <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-dribbble"></i></a></li>
      <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-twitter"></i></a></li>
    </ul>
    <!-- /social icon -->
  </section>
  <!-- /hero area -->

  <!-- contact -->
  <section class="section section-on-footer" data-background="{{asset('temp/images/backgrounds/bg-dots.png')}}">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <h2 class="section-title">Form Laporan Bencana</h2>
          </div>
        <div class="col-lg-12 mx-auto">
          <div class="bg-white rounded text-center p-5 shadow-down">
            <form action="/laporan/store" class="row" method="POST">
                {{ csrf_field() }}
              <div class="col-12">
                <input type="text" id="name" name="name" placeholder="Nama" class="form-control px-0 mb-4" required>
              </div>
              <div class="col-12">
                <input type="text" id="name" name="lokasi" placeholder="Lokasi" class="form-control px-0 mb-4" required>
              </div>
              <div class="col-12">
                <input type="text" id="name" name="jenis" placeholder="Jenis Bencana" class="form-control px-0 mb-4" required>
              </div>
              <div class="col-12">
                <input type="text" id="name" name="telp" placeholder="No Telpon" class="form-control px-0 mb-4" required>
              </div>
              <div class="col-12">
                <textarea name="desc" id="message" class="form-control px-0 mb-4"
                  placeholder="Deskripsi" required></textarea>
              </div>
              <div class="col-lg-6 col-10 mx-auto">
                <button class="btn btn-primary w-100" type="submit">send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /contact -->
@endsection
