{{-- @dd($post) --}}
@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('assets/css/berita.css') }}" type="text/css">

@section('content')

<section class="container pt-5">     
    <div class="row mt-5 d-flex justify-content-center">
        <h2 class="text-center" style="font-weight: 600; font-size: 32px; color: #1C6758;">
            {{ $post['title'] }}
        </h2>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-3">
            <hr class="p-hr">
            <h6 class="text-center" style="color: #000000; font-size: 14px">{{ date("d F Y", strtotime($post['published_at'])) }}</h6>
        </div>
    </div>     
</section>

<section class="container mt-5">
    <img class="mr-4" src="{{ \Storage::url($post['image']) }}" style="width: 450px; float: left;" alt=""/>
    <div  style="text-align: justify;text-justify: inter-word;">
        <p>{!! $post['body'] !!}</p>
    </div>
</section>
@endsection