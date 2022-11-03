@extends('admin.layout')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

@section('title', '| Edit Deskripsi')

@section('content')
<div class="container-fluid">
    <div class="row pt-4">
      <div class="col col-lg-8 col-md-8">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Deskripsi</h3>
            <div class="card-tools">
              <a href="{{ route('profil.deskripsi') }}" class="btn btn-sm btn-danger">
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
            <form action="{{ route('desk.update', $desk->id) }}" method='POST' enctype="multipart/form-data">
              @method('put')
            @csrf
                <div class="form-group">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    @error('deskripsi')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $desk->deskripsi) }}">
                    <trix-editor input="deskripsi"></trix-editor>
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
