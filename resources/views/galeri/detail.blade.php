@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('assets/css/galeri.css') }}">
<link rel="stylesheet" href="{{ asset('assets/lightbox2/dist/css/lightbox.min.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('assets/css/galeri1.scss') }}"> --}}

@section('content')
<section class="banner container-fluid"> 
    <div class="row">
        <img class="banner-img" src="{{ asset('assets/img/fotobareng.jpeg') }}" alt="">
        <div class="banner-layer"></div>
        <div class="container">
            <div>
                <div class="row title d-flex justify-content-center">
                    <div class="col-7">
                        <h2 class="jdl text-center">Nama Kategori</h2>
                        <h2 class="jdl text-center"></h2>
                        <h2 class="jdl text-center"></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</section>  

<section class="container">
    <div class="galeri-detail">
        <div class="row justify-content-around">
            <div class="col-md-4 mt-4 gmbr">
              <a class="example-image-link" href="{{ asset('assets/img/menanampohon.jpg') }}" data-lightbox="example-set">
                <div class="card bg-dark text-white">
                    <img src="{{ asset('assets/img/menanampohon.jpg') }}" class="card-img example-image" alt="..." onclick="lightbox(0)" >
                    <div class="overlay">
                      <div class="icon" title="User Profile">                    
                        <i class="fa fa-plus"></i>                                          
                      </div>
                    </div>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-4 gmbr">
              <a class="example-image-link" href="{{ asset('assets/img/menanampohon.jpg') }}" data-lightbox="example-set">
                <div class="card bg-dark text-white">
                    <img src="{{ asset('assets/img/menanampohon.jpg') }}" class="card-img example-image" alt="..." onclick="lightbox(0)" >
                    <div class="overlay">
                      <div class="icon" title="User Profile">                    
                        <i class="fa fa-plus"></i>                                          
                      </div>
                    </div>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-4 gmbr">
              <a class="example-image-link" href="{{ asset('assets/img/menanampohon.jpg') }}" data-lightbox="example-set">
                <div class="card bg-dark text-white">
                    <img src="{{ asset('assets/img/menanampohon.jpg') }}" class="card-img example-image" alt="..." onclick="lightbox(0)" >
                    <div class="overlay">
                      <div class="icon" title="User Profile">                    
                        <i class="fa fa-plus"></i>                                          
                      </div>
                    </div>
                </div>
              </a>
            </div>
             
        </div>
        <div class="row justify-content-around">
            <div class="col-md-4 mt-4">
              <a class="example-image-link" href="{{ asset('assets/img/menanampohon.jpg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <div class="card bg-dark text-white">
                    <img src="{{ asset('assets/img/menanampohon.jpg') }}" class="card-img example-image" alt="..." onclick="lightbox(0)" >
                  </div>
              </a>
            </div>
            <div class="col-md-4 mt-4">
              <a class="example-image-link" href="{{ asset('assets/img/menanampohon.jpg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <div class="card bg-dark text-white">
                    <img src="{{ asset('assets/img/menanampohon.jpg') }}" class="card-img example-image" alt="..." onclick="lightbox(0)" >
                  </div>
              </a>
            </div>
            <div class="col-md-4 mt-4">
              <a class="example-image-link" href="{{ asset('assets/img/menanampohon.jpg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <div class="card bg-dark text-white">
                    <img src="{{ asset('assets/img/menanampohon.jpg') }}" class="card-img example-image" alt="..." onclick="lightbox(0)" >
                  </div>
              </a>
            </div>  
        </div>
    </div>
   
</section>


<script src="{{ asset('assets/lightbox2/dist/js/lightbox-plus-jquery.min.js') }}"></script>


@endsection