@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}" type="text/css">

@section('content')

<section>
{{-- START SECTION--}}
    <section class="banner container-fluid"> 
        <div class="row">
            <img class="banner-img" src="{{ asset('assets/img/banner.png') }}" alt="">
            <div class="banner-layer"></div>
            <div class="container">
                <div>
                    <div class="row title">
                        <div class="col-5">
                            <h2 class="jdl">Pondok Pesantren Bhakti Bapak Emak</h2>
                        </div>
                    </div>
                    <div class="row ket">
                        <div class="col-7">
                            <p class="ket-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias unde ullam iure quam officiis voluptas natus enim magnam possimus a, exercitationem in nesciunt dignissimos ipsa ad nostrum, cupiditate corrupti, animi quae nam dolores. Veritatis, dolore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </section>
    
    <section class="program container mt-4">
        <div class="row d-flex justify-content-center">
            <h2 class="text-center" style="font-weight: 700; color: #1C6758;">
                Program
            </h2>
        </div>
        <div class="row d-flex justify-content-around my-4">
            <div class="col-3">
                <div class="card p-card" style="width: 18rem;">
                    <img src="{{ asset('assets/img/icon-quran.png') }}" class="card-img-top mx-auto mt-3" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Program 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card p-card" style="width: 18rem;">
                    <img src="{{ asset('assets/img/icon-quran.png') }}" class="card-img-top mx-auto mt-3" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Program 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card p-card" style="width: 18rem;">
                    <img src="{{ asset('assets/img/icon-quran.png') }}" class="card-img-top mx-auto mt-3" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Program 1</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
            </div>
        </div>    
    </section>

    <section class="visimisi container mt-4">
        <div class="row d-flex justify-content-center">
            <h2 class="text-center" style="font-weight: 700; color: #1C6758;">
                Visi & Misi
            </h2>
        </div>
    </section>


{{-- END SECTION--}}
</section>


@endsection