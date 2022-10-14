@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('assets/css/sejarah.css') }}" type="text/css">

@section('title', 'Sejarah')

@section('content')

<section class="banner container-fluid"> 
    <div class="row">
        <img class="banner-img" src="{{ asset('assets/img/gedung.jpg') }}" alt="">
        <div class="banner-layer"></div>
        <div class="container">
            <div>
                <div class="row title d-flex justify-content-center">
                    <div class="col-7">
                        <h2 class="jdl text-center" >SEJARAH</h2>  
                    </div>
                </div>
            </div>
        </div>
    </div>     
</section>
<section class="container">
    <div class="row justify-content-center">
        <div class="card p-card mt-4 shadow" style="width: 80rem;">
            <div class="card-body">
              <h5 class="card-title">Sejarah</h5>
              <h6 class="card-subtitle mb-2 text-muted">Pondok Pesantren Bhakti bapak emak</h6>
              <div style="text-align: justify">
                  <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias unde ullam iure quam officiis voluptas nat
                    us enim magnam possimus a, exercitationem in nesciunt dignissimos ipsa ad nostrum, cupiditate corrupti, animi quae nam dolores. Veri
                    tatis, dolore.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias unde ullam iure quam officiis voluptas natus enim 
                    magnam possimus a, exercitationem in nesciunt dignissimos ipsa ad nostrum, cupiditate corrupti, animi quae nam dolores. Veritatis, dolore.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias unde ullam iure quam officiis voluptas nat
                    us enim magnam possimus a, exercitationem in nesciunt dignissimos ipsa ad nostrum, cupiditate corrupti, animi quae nam dolores. Veri
                    tatis, dolore.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias unde ullam iure quam officiis voluptas natus enim 
                    magnam possimus a, exercitationem in nesciunt dignissimos ipsa ad nostrum, cupiditate corrupti, animi quae nam dolores. Veritatis, dolore.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias unde ullam iure quam officiis voluptas nat
                    us enim magnam possimus a, exercitationem in nesciunt dignissimos ipsa ad nostrum, cupiditate corrupti, animi quae nam dolores. Veri
                    tatis, dolore.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias unde ullam iure quam officiis voluptas natus enim 
                    magnam possimus a, exercitationem in nesciunt dignissimos ipsa ad nostrum, cupiditate corrupti, animi quae nam dolores. Veritatis, dolore.</p>                
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea recusandae laboriosam laborum reprehenderit molestias eius atque eum, rem consectetur illum veritatis nam optio quod placeat vel corporis nisi! Unde odio aspernatur dolorum doloribus iste fuga. Soluta iusto blanditiis nihil qui et voluptatem vel a necessitatibus maxime asperiores illo veniam quos, temporibus aliquid, voluptate recusandae distinctio iste culpa nesciunt laudantium laboriosam non! Labore pariatur omnis maiores similique consectetur earum consequatur hic odit quos. Debitis veritatis obcaecati aspernatur numquam iusto cum culpa ipsam repellendus sit ad? Ipsam iure fuga iste ab doloribus reprehenderit maiores, voluptates eum! Nobis nam provident ut neque voluptatibus!</p>
              </div>
            </div>
          </div>
    </div>
</section>
@endsection