@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('assets/css/berita.css') }}" type="text/css">
@section('content')

<section class="banner container-fluid"> 
    <div class="row">
        <img class="banner-img" src="{{ asset('assets/img/fotobareng.jpeg') }}" alt="">
        <div class="banner-layer"></div>
        <div class="container">
            <div>
                <div class="row title d-flex justify-content-center">
                    <div class="col-7">
                        <h2 class="jdl text-center" >KATEGORI BERITA</h2>
                        <h2 class="jdl text-center" ></h2>
                        <h2 class="jdl text-center" ></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>   

    <div class="container">
        <div class="row mt-4">
        @foreach($kategori as $item)
            <div class="col-md-3">
                <a href="{{ url('/berita?category='.$item['slug']) }}">
                    <div class="card">
                        <div class="card-body">
                          {{ $item['nama'] }}
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
        </div>
    </div>
</section>  



@endsection