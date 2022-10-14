@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('assets/css/galeri.css') }}">

@section('title', 'Galeri')

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
        <div class="col-md-4 mt-5 kat-img">
            <a href="/galeri/all">
                <div class="card kategori-card bg-dark text-white">
                    <img src="{{ asset('assets/img/fotobareng.jpeg') }}" class="card-img" alt="...">
                    <div class="cover"></div>
                    <div class="kat-overlay">
                        <div class="kat-icon" title="User Profile"></div>
                    </div>                 
                    <div class="card-img-overlay">
                        <h5 class="card-title text-center text-cover">ALL</h5> 
                    </div>
              </div>
            </a>
        </div>
        @foreach($kateogri as $item)
        <div class="col-md-4 mt-5 kat-img">
            <a href="{{ url('galeri/' . $item->nama_kategori) }}">
                <div class="card kategori-card bg-dark text-white">
                    <img src="{{ asset('assets/img/fotobareng.jpeg') }}" class="card-img" alt="...">
                    <div class="cover"></div>
                    <div class="kat-overlay">
                        <div class="kat-icon" title="User Profile"></div>
                    </div>    
                    <div class="card-img-overlay">
                      <h5 class="card-title text-center text-cover" style="text-transform: uppercase;">{{ $item->nama_kategori }}</h5>                  
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    {{-- <div class="row justify-content-around">
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
    </div> --}}
</section>

@endsection