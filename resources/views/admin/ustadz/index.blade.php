@extends('admin.layout')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

@section('title', '| Ustadz')

@section('content')  

<div class="container">
    <div class="card bg-light mt-3">
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
            {{-- <form action="{{ route('ustadz.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Data Ustadz</button>
            </form> --}}
  
            <table class="table table-bordered text-center mt-3">
                <tr>
                    <th colspan="5" class="text-left">
                        Data Ustadz
                        <a class="btn btn-md btn-warning float-end" href="{{ route('ustadz.export') }}">Export Data Ustadz</a>
                        {{-- <a class="btn btn-md btn-warning float-end" href="{{ url('admin/ustadz/export') }}">Export Data Ustadz</a> --}}
                        <a class="btn btn-md btn-success float-end mx-3" href="{{ route('ustadz.create') }}">Tambah Data Ustadz</a>
                    </th>
                </tr>
                <tr>
                    <th>No.</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Mata Pelajaran</th>
                    <th>Action</th>
                </tr>
                @foreach($data as $k => $item)
                <tr>
                    <td class="col-sm-1">{{ $k+1 }}</td>
                    <td class="col-md-3 text-left">
                    <!-- image kategori -->
                    @if($item->foto != null)
                    <img src="{{ \Storage::url($item->foto) }}" alt="{{ $item->nama_kategori }}" width='150px' class="img-thumbnail mb-2">
                    <br>
                    <form action="{{ url('/admin/imageusdtadz/'.$item->id) }}" method="post" style="display:inline;">
                        @csrf
                        {{ method_field('delete') }}
                        <button type="submit" class="btn btn-sm btn-danger mb-2">
                        Hapus
                        </button>                    
                    </form>
                    @else
                    <form action="{{ url('/admin/fotoustadz') }}" method="post" enctype="multipart/form-data" class="form-inline">
                        @csrf
                        <div class="form-group">
                        <input type="file" name="image" class="btn-image" id="image">
                        <input type="hidden" name="ustadz_id" value={{ $item->id }}>
                        </div>
                        <div class="form-group">
                        <button class="btn btn-primary my-3">Upload</button>
                        </div>
                    </form>
                    @endif
                    <!-- end image kategori -->
                    </td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->mapel }}</td>
                    <td>
                        <a href="{{ route('ustadz.edit', $item->id) }}" class="btn btn-sm btn-primary mr-2 mb-2">
                            Edit
                        </a>
                        <form action="{{ route('ustadz.destroy', $item->id) }}" method="post" style="display:inline;">
                            @csrf
                            {{ method_field('delete') }}
                            <button type="submit" class="btn btn-sm btn-danger mr-2 mb-2">
                            Hapus
                            </button>                    
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
  
        </div>
    </div>
</div>
     
@endsection
