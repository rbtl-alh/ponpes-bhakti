@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <div class="row pt-4">
      <div class="col col-lg-8 col-md-8">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tambah Berita</h3>
            <div class="card-tools">
              <a href="{{ route('berita.index') }}" class="btn btn-sm btn-danger">
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
            <form action="{{ route('berita.store') }}" method='POST'>
            @csrf
                <div class="form-group">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title" value="{{ old('title') }}">
                    @error('title')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror " id="slug" name="slug" readonly value="{{ old('slug') }}">
                    @error('slug')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="category_id">Kategori</label>
                  <select class="form-control" id="category_id" name="category_id">
                    @foreach($kategori as $item)
                    @if (old('category_id') == $item->id)
                      <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                    @else
                      <option value="{{ $item->id }}">{{ $item->nama }}</option>                    
                      @endif
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="body" class="form-label">Isi Berita</label>
                    @error('body')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="body" type="hidden" name="body"  value="{{ old('body') }}">
                    <trix-editor input="body"></trix-editor>
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


  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/admin/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
    })
  </script>
@endsection