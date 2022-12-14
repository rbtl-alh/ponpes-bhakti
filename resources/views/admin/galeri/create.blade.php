@extends('admin.layout')

@section('title', '| Tambah Kategori Galeri')

@section('content')

<div class="container-fluid">
    <div class="row pt-4">
      <div class="col col-lg-6 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Form Album</h3>
            <div class="card-tools">
              <a href="{{ route('galeri.index') }}" class="btn btn-sm btn-danger">
                Tutup
              </a>
            </div>
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
            <form action="{{ route('galeri.store') }}" method='POST'>
            @csrf
              <div class="form-group">
                <label for="nama_kategori">Nama Album</label>
                <input type="text" name="nama_kategori" id="nama_kategori" class="form-control">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-warning">Reset</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection