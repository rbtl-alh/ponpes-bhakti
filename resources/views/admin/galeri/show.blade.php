@extends('admin.layout')


@section('content')
<div class="container-fluid">
    <div class="row pt-4">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title pt-2">Galeri {{ $itemkategori->nama_kategori }}</h3>
            <div class="card-tools">
              <a href="{{ route('galeri.index') }}" class="btn btn-sm btn-danger">
                Kembali
              </a>
            </div>
          </div>
          <div class="card-body">
            <form action="{{ route('admin.galeri') }}" method="post" enctype="multipart/form-data" class="form-inline">
            @csrf
            <div class="form-group">
              {{-- <label for="nama_kategori">Nama Kategori</label> --}}
              <input type="hidden" value="{{ $itemkategori->id }}" name="kategori_id" id="kategori_id">
            </div>
            <div class="form-group">
              <input type="file" name="image" id="image">
            </div>
            <div class="form-group">
              <button class="btn btn-primary">Upload</button>
            </div>
            </form>
          </div>
          <div class="card-body">
            @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-warning">{{ $error }}</div>
            @endforeach
            @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-warning">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="row">
              @foreach($itemgambar as $gambar)
              <div class="col col-lg-3 col-md-3 mb-2">
                <img src="{{ Storage::url("$gambar->url") }}" alt="img" class="img-thumbnail mb-2">
                {{-- <img src="{{ asset("/app/{$gambar->url}") }}" alt="img" class="img-thumbnail mb-2"> --}}
                {{-- <img src="{{ asset('/assets/img/banner.png') }}" alt="img" class="img-thumbnail mb-2"> --}}
                {{-- <img src="{{ asset('/storage/app/files/gmbr.jpg') }}" alt="img" class="img-thumbnail mb-2"> --}}
                <form action="{{ url('/admin/galeri/hapus/'.$gambar->id) }}" method="post" style="display:inline;">
                  @csrf
                  {{ method_field('delete') }}
                  <button type="submit" class="btn btn-sm btn-danger mb-2">
                    Hapus
                  </button>                    
                </form>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection