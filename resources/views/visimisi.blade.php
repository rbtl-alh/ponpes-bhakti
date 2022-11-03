@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('assets/css/visimisi.css') }}">

@section('title', 'Visi Misi')

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
                        @foreach($visi as $visi)
                      <p>{!! $visi->visi !!}</p>
                      @endforeach
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
            @foreach($misi as $misi)
            <div class="col-md-4 mb-4">
                <div class="card m-card mx-3">                
                    <div class="card-body text-center">
                      <p class="mt-4">{{ $misi->misi }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-md-4">
                <div class="card m-card mx-3">
                    <div class="card-body text-center">
                      <p class="mt-4">Mengembangkan dan melestarikan ilmu-ilmu agama Islam yang tertuang dalam kitab-kitab kuning dan litelatur-litelatur modern.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card m-card mx-3">
                    <div class="card-body text-center">
                      <p class="mt-4">Menyelenggarakan kegiatan KBM sesuai dengan SOP yang telah disepakati bersama.</p>
                    </div>
                </div>
            </div> --}}
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
