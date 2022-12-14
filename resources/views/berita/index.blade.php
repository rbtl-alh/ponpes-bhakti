@extends('layouts.main')
<link rel="stylesheet" href="{{ asset('assets/css/berita.css') }}" type="text/css">

@section('title', 'Berita')

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
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="cari berita..." name="search" value="{{ request('search') }}">
                        <div class="input-group-append">
                          <button class="btn btn-success" type="submit">Search</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>                
                  <div id="section07" class="demo">                  
                    <a id="scroll" href="#berita"><span></span><span></span><span></span></a>
                  </div>                
            </div>
        </div>
    </div>   
</section>  

<section class="container berita" id="berita">
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
                      <p class="card-text mb-2"><small class="text-muted">{{ date("Y-m-d", strtotime($post->published_at)) }}</small></p>
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

<script>
  $(function() {
  $('a[href*=\\#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});
</script>
 
@endsection
