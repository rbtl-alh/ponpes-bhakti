{{-- @dd($post) --}}
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
                        <h2 class="jdl text-center" >{{ $post['title'] }}</h2>
                        <h2 class="jdl text-center" ></h2>
                        <h2 class="jdl text-center" ></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</section>

<section class="container mt-5">
    <p>{!! $post['body'] !!}</p>
</section>
@endsection