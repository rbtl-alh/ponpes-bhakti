@extends('admin.layout')

@section('title', '| Deskripsi')

@section('content')

<div class="container-fluid">
    <!-- table kategori -->
    <div class="row pt-4">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Deskripsi</h4>
            <div class="card-tools">
            @foreach($desk as $desk)
              <a href="/admin/deskripsi/{{ $desk->id }}/edit" class="btn btn-sm btn-primary">
                {{-- <a href="{{ url('admin/tambah-berita') }}" class="btn btn-sm btn-primary"> --}}
                Edit Deskripsi
              </a>
            </div>
          </div>
          <div class="card-body">
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
            <div class="table-responsive">
                
                <p>{!! $desk->deskripsi !!}</p>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection