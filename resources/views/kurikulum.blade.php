@extends('layouts.main')
<link rel="stylesheet" href="{{ asset('assets/css/berita.css') }}" type="text/css">

@section('title', 'Kurikulum')

@section('content')
<section class="banner container-fluid"> 
    <div class="row">
        <img class="banner-img" src="{{ asset('assets/img/fotobareng.jpeg') }}" alt="">
        <div class="banner-layer"></div>
        <div class="container">
            <div>
                <div class="row title d-flex justify-content-center">
                    <div class="col-7">
                        <h2 class="jdl text-center">KURIKULUM</h2>                        
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
@foreach($file as $item)
    <div class="row justify-content-center mt-5">
        <iframe height="600" width="727" src="{{ Storage::url($item->file) }}#toolbar=0" frameborder="0"></iframe>
    </div>
{{-- end content --}}   
@endforeach       
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
