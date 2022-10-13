@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('assets/css/daftar.css') }}" type="text/css">
@section('content')
<section class="banner container-fluid"> 
    <div class="row">
        <img class="banner-img" src="{{ asset('assets/img/fotoustadz.png') }}" alt="">
        <div class="banner-layer"></div>
        <div class="container">
            <div>
                <div class="row title d-flex justify-content-center">
                    <div class="col-7">
                        <h2 class="jdl text-center" >Daftar Ustadz & Ustadzah</h2>
                        <h2 class="jdl text-center" ></h2>
                        <h2 class="jdl text-center" ></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-3 justify-content-center">
            <div class="card px-4 py-2">
                <h4 class="text-center" >Daftar Ustadz</h4>
            
            </div>
        </div>
        <div class="row mt-4">
            @foreach($ustadz as $item)
            <div class="col-md-3 px-4">
                <div class="card u-card">
                    @if($item->foto != null)
                        <img src="{{ \Storage::url($item->foto) }}" class="card-img-top mx-auto" alt="...">
                    @else
                        <img src="{{ asset('assets/img/siluet.png') }}" class="card-img-top mx-auto" alt="...">
                    @endif
                    <div class="card-body">
                        <h5 class="text-center">{{ $item->nama }}</h5>
                      <p class="card-text text-center">{{ $item->mapel }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>        

        <div class="row mt-3 justify-content-center">
            <div class="card px-4 py-2">
                <h4 class="text-center" >Daftar Ustadzah</h4>
            
            </div>
        </div>
        <div class="row mt-4">
            @foreach($ustadzah as $item)
            <div class="col-md-3 px-4">
                <div class="card u-card">
                    @if($item->foto != null)
                        <img src="{{ \Storage::url($item->foto) }}" class="card-img-top mx-auto" alt="...">
                    @else
                        <img src="{{ asset('assets/img/siluet.png') }}" class="card-img-top mx-auto" alt="...">
                    @endif
                    <div class="card-body">
                        <h5 class="text-center">{{ $item->nama }}</h5>
                      <p class="card-text text-center">{{ $item->mapel }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>        

    </div>
</section>   

@endsection