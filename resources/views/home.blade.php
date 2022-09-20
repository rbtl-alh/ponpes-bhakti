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
                        <div class="col-md-5">
                            <h2 class="jdl">Pondok Pesantren Bhakti Bapak Emak</h2>
                        </div>
                    </div>
                    <div class="row ket">
                        <div class="col-md-7">
                            <p class="ket-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias unde ullam iure quam officiis voluptas natus enim magnam possimus a, exercitationem in nesciunt dignissimos ipsa ad nostrum, cupiditate corrupti, animi quae nam dolores. Veritatis, dolore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </section>
    
    <section class="program">
        <div class="container mt-4">
            <div class="row d-flex justify-content-center">
                <h2 class="text-center" style="font-weight: 700; color: #1C6758;">
                    Program
                </h2>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-1">
                    <hr class="p-hr">
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-3">
                    <div class="card p-card mt-4">
                        <img src="{{ asset('assets/img/icon-quran.png') }}" class="card-img-top mx-auto mt-3" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title text-center">Program 1</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-card mt-4">
                        <img src="{{ asset('assets/img/icon-quran.png') }}" class="card-img-top mx-auto mt-3" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title text-center">Program 1</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-card mt-4">
                        <img src="{{ asset('assets/img/icon-quran.png') }}" class="card-img-top mx-auto mt-3" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title text-center">Program 1</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
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
        <div class="row d-flex justify-content-center">
            <div class="col-1">
                <hr class="p-hr">
            </div>
        </div>
        <div class="row d-flex justify-content-center pt-4">
            <div class="card vm-card">
                <div class="card-body">
                    <div class="row justify-content-end">
                        <div class="col-4">
                            <div class="card vm-atr">
                                <div class="card-body"></div>
                                <div class="card">
                                    <div class="card-body"></div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                  <div class="row">
                    <div class="col-md-4">
                        <div class="card pht-card">
                            <img class="card-img-top vm-img px-4" src="{{ asset('assets/img/person.png') }}" alt="...">
                        </div>
                    </div>
                    <div class="col-md-8 pb-3 vm">
                        <h4>Visi</h4>
                        <hr class="vm-hr">
                        <p>Menjadi Kawah condro dimuko generasi muslim yang manusiawi, cerdas dalam hidup, serta professional sebagai makhluk.</p>
                        <h4 class="mt-4">Misi</h4>
                        <hr class="vm-hr">
                        <div class="row">
                            <div class="col-2">
                                <p>1.</p>
                            </div>
                            <div class="col" style="margin-left: -3rem;">
                                <p>Membina budaya kesalihan ( kesalihan individu dan kesalihan social ) di kalangan santri dan masyarakat.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <p>2.</p>
                            </div>
                            <div class="col" style="margin-left: -3rem;">
                                <p>Mengembangkan dan melestarikan ilmu-ilmu agama Islam yang tertuang dalam kitab-kitab kuning dan litelatur-litelatur modern.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <p>3.</p>
                            </div>
                            <div class="col" style="margin-left: -3rem;">
                                <p>Menyelenggarakan kegiatan KBM sesuai dengan SOP yang telah disepakati bersama.</p>
                            </div>
                        </div>
                    </div>                    
                  </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fakta container-fulid mt-4">
        <div class="container">
            <div class="row justify-content-center pt-4">
                <div class="col-md-5">
                    <h2 class="text-center"  style="font-weight: 700; color: #EEF2E6;">
                        Fakta Pondok Pesantren Bhakti Bapak Emak
                    </h2>                
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-1">
                    <hr class="p-hr" style="background-color: #EEF2E6 !important; border: 2px solid #EEF2E6;">
                </div>
            </div>            
            <div class="row r-circle d-flex justify-content-center">
                <div class="col-md-4">
                    <div class="card" style="background-color: transparent !important; border: none;">
                        <div class="d-flex justify-content-center">
                            <div class="card-text circle">                        
                                <h4 class="text text-center">2022</h4>  
                            </div>
                        </div>
                        <p class="text-center mt-3 f-ket" style="font-size: 1.3rem;color: #EEF2E6;">Tahun Berdiri</p>                        
                    </div>
                </div>
                {{-- // --}}
                <div class="col-md-4">
                    <div class="card" style="background-color: transparent !important; border: none;">
                        <div class="d-flex justify-content-center">
                            <div class="card-text circle">                        
                                <h4 class="text text-center">39</h4>                        
                            </div>
                        </div>
                        <p class="text-center mt-3 f-ket" style="font-size: 1.3rem;color: #EEF2E6;">Ustadz</p>
                    </div>
                </div>
                {{-- // --}}
                <div class="col-md-4">
                    <div class="card" style="background-color: transparent !important; border: none;">
                        <div class="d-flex justify-content-center">
                            <div class="card-text circle">                        
                                <h4 class="text text-center">17</h4>
                            </div>
                        </div>
                        <p class="text-center mt-3 f-ket" style="font-size: 1.3rem;color: #EEF2E6;">Ustadzah</p>
                    </div>
                </div>
                {{-- // --}}
                <div class="col-md-4">
                    <div class="card" style="background-color: transparent !important; border: none;">
                        <div class="d-flex justify-content-center">
                            <div class="card-text circle">                        
                                <h4 class="text text-center">54</h4>                        
                            </div>
                        </div>
                        <p class="text-center mt-3 f-ket" style="font-size: 1.3rem;color: #EEF2E6;">Siswa</p>
                    </div>
                </div>
                {{-- // --}}
                <div class="col-md-4">
                    <div class="card" style="background-color: transparent !important; border: none;">
                        <div class="d-flex justify-content-center">
                            <div class="card-text circle">                        
                                <h4 class="text text-center">34</h4>                        
                            </div>
                        </div>
                        <p class="text-center mt-3 f-ket" style="font-size: 1.3rem;color: #EEF2E6;">Siswi</p>
                    </div>
                </div>
                {{-- // --}}
            </div>
        </div>
    </section>

    <section class="berita container mt-4">
        <div class="row justify-content-around">
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset('assets/img/fotobareng.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset('assets/img/fotobareng.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset('assets/img/fotobareng.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
        </div>
    </section>


{{-- END SECTION--}}
</section>


@endsection