@extends('admin.layout')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

@section('title', '| Edit Program')

@section('content')
<div class="container-fluid">
    <div class="row pt-4">
      <div class="col col-lg-8 col-md-8">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Misi</h3>
            <div class="card-tools">
              <a href="{{ route('profil.visimisi') }}" class="btn btn-sm btn-danger">
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
            <form action="{{ route('misi.update', $misi->id) }}" method='POST'>
            @method('PUT')
            @csrf
                <div class="form-group row">
                    <label for="misi" class="col-sm-3 col-form-label">Misi</label>
                    {{-- <div class="col-sm-9"> --}}
                        <textarea type="text" class="form-control  @error('misi') is-invalid @enderror" id="misi" name="misi">{{ old('misi', $misi->misi) }}</textarea>
                    {{-- </div> --}}
                    @error('misi')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
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
