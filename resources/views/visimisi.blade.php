@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('assets/css/visimisi.css') }}">

@section('content')
<section class="banner container-fluid"> 
    <div class="row">
        <img class="banner-img" src="{{ asset('assets/img/fotobareng.jpeg') }}" alt="">
        <div class="banner-layer"></div>
        <div class="container">
            <div>
                <div class="row title d-flex justify-content-center">
                    <div class="col-7">
                        <h2 class="jdl text-center">VISI & MISI</h2>
                        <h2 class="jdl text-center"></h2>
                        <h2 class="jdl text-center"></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</section>  
<section class="visimisi mt-4">
    <div class="container">
        <div class="row d-flex justify-content-center pt-2">
            <h2 class="text-center" style="font-weight: 700; color: #1C6758;">
                Visi
            </h2>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="">
                <hr class="vm-hr">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card v-card">
                    <div class="card-body text-center">
                      <p>Menjadi Kawah condro dimuko generasi muslim yang manusiawi, cerdas dalam hidup, serta professional sebagai makhluk.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mt-4 d-flex justify-content-start">
            <div class="circle-1">
                <img src="{{ asset('assets/img/vm-circle1.png') }}" alt="">            
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center mt-4">
            <h2 class="text-center" style="font-weight: 700; color: #1C6758;">
                Misi
            </h2>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="">
                <hr class="vm-hr">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <div class="card m-card mx-3">                
                    <div class="card-body text-center">
                      <p>Membina budaya kesalihan ( kesalihan individu dan kesalihan social ) di kalangan santri dan masyarakat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card m-card mx-3">
                    <div class="card-body text-center">
                      <p>Mengembangkan dan melestarikan ilmu-ilmu agama Islam yang tertuang dalam kitab-kitab kuning dan litelatur-litelatur modern.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card m-card mx-3">
                    <div class="card-body text-center">
                      <p>Menyelenggarakan kegiatan KBM sesuai dengan SOP yang telah disepakati bersama.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row d-flex justify-content-end">
            <div class="circle-2">
                <img src="{{ asset('assets/img/vm-circle.png') }}" alt="">            
            </div>
        </div>
    </div>
</section>

@endsection
