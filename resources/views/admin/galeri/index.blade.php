@extends('admin.layout')

@section('title', '| Galeri')

@section('content')

<div class="container-fluid">
    <!-- table kategori -->
    <div class="row pt-4">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Galeri</h4>
            <div class="card-tools">
              <a href="{{ route('galeri.create') }}" class="btn btn-sm btn-primary">
                Tambah Album
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
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th width="50px">No</th>
                    <th>Nama Album</th>                    
                    <th>Jumlah Gambar</th>                    
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($itemkategori as $kategori)
                  <tr>
                    <td>
                    {{ ++$no }}                                        
                    </td>
                    <td>
                    {{ $kategori->nama_kategori }}
                    </td>
                    <td>
                        {{ $kategori->images->count('pivot.kategori_id') }}
                    </td>
                    <td>
                        <a href="{{ route('galeri.show', $kategori->id) }}" class="btn btn-sm btn-success mr-2 mb-2">
                            Tampilkan Album
                        </a>
                        <a href="{{ route('galeri.edit', $kategori->id) }}" class="btn btn-sm btn-primary mr-2 mb-2">
                            Edit
                        </a>
                        <form action="{{ route('galeri.destroy', $kategori->id) }}" method="post" style="display:inline;">
                            @csrf
                            {{ method_field('delete') }}
                            <button type="submit" class="btn btn-sm btn-danger mr-2 mb-2">
                            Hapus
                            </button>                    
                        </form>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
              <!-- untuk menampilkan link page, tambahkan skrip di bawah ini -->
              {{ $itemkategori->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection