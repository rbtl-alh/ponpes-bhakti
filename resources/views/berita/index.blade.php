@extends('layouts.main')
<link rel="stylesheet" href="{{ asset('assets/css/berita.css') }}" type="text/css">

<style>
  .active{
    background-color: rgba(214, 205, 164) !important;
    color: rgba(61,131,97) !important;
  }
  .tab{
    color: rgba(61,131,97) !important;
    font-weight: bolder;
  }
</style>

@section('content')
<section class="banner container-fluid"> 
    <div class="row">
        <img class="banner-img" src="{{ asset('assets/img/fotobareng.jpeg') }}" alt="">
        <div class="banner-layer"></div>
        <div class="container">
            <div>
                <div class="row title d-flex justify-content-center">
                    <div class="col-7">
                        <h2 class="jdl text-center" >{{ $title }}</h2>
                        {{-- <h2 class="jdl text-center" ></h2>
                        <h2 class="jdl text-center" ></h2> --}}
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                  <div class="col-6">
                    <form action="/berita">
                      @if(request('category'))
                      <input type="hidden" class="form-control" name="category" value="{{ request('category') }}">
                      @endif
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="cari berita..." name="search" value="{{ request('search') }}">
                        <div class="input-group-append">
                          <button class="btn btn-success" type="submit">Search</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>   
</section>  

<section class="container berita">
  <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="tab nav-link {{ ($title === 'Berita') ? 'active' : '' }}" id="" href={{ url('/berita') }} aria-selected="true">All</a>
    </li>
    @foreach($category as $item)
    <li class="nav-item">
      <a class="tab nav-link {{ ($title === $item['nama']) ? 'active' : '' }}" id="{{ $item['slug'] }} " href={{ url('/berita?category='.$item['slug']) }} aria-selected="false">{{ $item['nama'] }} </a>
    </li>
    @endforeach
  </ul>
  {{-- start content --}}

  @foreach ($posts as $post)
  <div class="row d-flex justify-content-center">
      <div class="card b-card mb-3 mt-3" style="max-width: 840px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img class="card-img" src="{{ asset('assets/img/menanampohon.jpg') }}" alt="">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                  <div class="d-flex justify-content-end">
                      <p class="card-text mb-2"><small class="text-muted">{{ $post['published_at'] }}</small></p>
                  </div>
                <h5 class="card-title">{{ $post["title"] }}</h5>
                <p class="card-text" style="color: #777973">
                  {{ $post["excerpt"] }}...
                </p>
                <div class="row mx-auto justify-content-end">
                      <a class="btn btn-primary b-btn" href="{{ url('/berita/'.$post['slug']) }}" role="button">Baca Selengkapnya...</a>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>   
@endforeach

  {{-- end content --}}
  
    
  {{ $posts->links() }}
</section>


{{-- <section class="continer">
    <div class="row justify-content-center">
        <div class="card mb-3 mt-4" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="..." alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
    </div>
</section> --}}
  
@endsection
