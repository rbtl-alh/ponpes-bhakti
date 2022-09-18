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
                        <h2 class="jdl text-center" >BERITA</h2>
                        <h2 class="jdl text-center" ></h2>
                        <h2 class="jdl text-center" ></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <div class="row justify-content-center">
        <div class="card mb-3" style="max-width: 1000px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="assets/img/menanampohon.jpg" alt="Sabar ya:)">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Penanaman Pohon Pertama</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
    </div>
</section>    
@endsection
