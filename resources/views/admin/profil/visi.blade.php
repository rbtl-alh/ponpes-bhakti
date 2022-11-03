@extends('admin.layout')

@section('title', '| Visi Misi')

@section('content')

<div class="container-fluid">
    <!-- table kategori -->
    <div class="row pt-4">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Visi</h4>
            <div class="card-tools">
              @foreach($visi as $visi)
              <a href="/admin/visi/{{ $visi->id }}/edit" class="btn btn-sm btn-primary">
                {{-- <a href="{{ url('admin/tambah-berita') }}" class="btn btn-sm btn-primary"> --}}
                Edit Visi
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
                <p>{!! $visi->visi !!}</p>
                @endforeach
            </div>            
          </div>
        </div>
      </div>
    </div>

    {{-- divider --}}
    <div class="row pt-4">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Misi</h4>
            <div class="card-tools">
              <a href="{{ route('misi.create') }}" class="btn btn-sm btn-primary">
                {{-- <a href="{{ url('admin/tambah-berita') }}" class="btn btn-sm btn-primary"> --}}
                Tambah Misi
              </a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                
                {{-- <p>{!! $desk->deskripsi !!}</p> --}}
                
            </div>
            <div class="table-responsive">
                
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Misi</th>                                              
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($misi as $k => $item)
                    <tr>
                      <th scope="row">{{ $k+1 }}</th>
                      <td>{{ $item->misi }}</td>                                                
                      <td>
                        <a href="/admin/misi/{{ $item->id }}/edit" class="btn btn-sm btn-primary mr-2 mb-2">
                            Edit
                        </a>
                        <form action="/admin/misi/{{ $item->id }}" method="post" style="display:inline;">
                          {{ method_field('delete') }}
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger mr-2 mb-2" onclick="return confirm('Apakah anda yakin?')">
                            Hapus
                            </button>                    
                        </form>
                    </td>
                    </tr>
                    @endforeach 
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection