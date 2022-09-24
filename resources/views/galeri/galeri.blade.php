@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('assets/css/galeri.css') }}">

@section('content')
<section class="banner container-fluid"> 
    <div class="row">
        <img class="banner-img" src="{{ asset('assets/img/fotobareng.jpeg') }}" alt="">
        <div class="banner-layer"></div>
        <div class="container">
            <div>
                <div class="row title d-flex justify-content-center">
                    <div class="col-7">
                        <h2 class="jdl text-center">GALERI</h2>
                        <h2 class="jdl text-center"></h2>
                        <h2 class="jdl text-center"></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</section>  
<section class="container galeri">
    <div class="row justify-content-around">
        <div class="col-md-4 mt-5">
            <div class="card bg-dark text-white">
                <img src="{{ asset('assets/img/fotobareng.jpeg') }}" class="card-img" alt="...">
                <div class="cover"></div>
                <div class="card-img-overlay">
                  <h5 class="card-title text-center text-cover">ALL</h5>                  
                </div>
              </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="card bg-dark text-white">
                <img src="{{ asset('assets/img/fotobareng.jpeg') }}" class="card-img" alt="...">
                <div class="cover"></div>
                <div class="card-img-overlay">
                  <h5 class="card-title text-center text-cover">KEGIATAN SANTRI</h5>                  
                </div>
              </div>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-md-4 mt-5">
            <div class="card bg-dark text-white">
                <img src="{{ asset('assets/img/fotobareng.jpeg') }}" class="card-img" alt="...">
                <div class="cover"></div>
                <div class="card-img-overlay">
                  <h5 class="card-title text-center text-cover">PERAYAAN HARI BESAR</h5>                  
                </div>
              </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="card bg-dark text-white">
                <img src="{{ asset('assets/img/fotobareng.jpeg') }}" class="card-img" alt="...">
                <div class="cover"></div>
                <div class="card-img-overlay">
                  <h5 class="card-title text-center text-cover">STUDY TOUR</h5>                  
                </div>
              </div>
        </div>
    </div>
</section>

@endsection