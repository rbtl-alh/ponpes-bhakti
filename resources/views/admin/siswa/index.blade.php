@extends('admin.layout')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

@section('title', '| Siswa')

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

            <table class="table table-bordered text-center mt-3">
                <tr>
                    <th colspan="6" class="text-left">
                        Data Siswa
                        <a class="btn btn-md btn-warning float-end" href="{{ route('siswa.export') }}">Export Data Siswa</a>
                        {{-- <a class="btn btn-md btn-warning float-end" href="{{ url('admin/ustadz/export') }}">Export Data Ustadz</a> --}}
                        <a class="btn btn-md btn-success float-end mx-3" href="{{ route('siswa.create') }}">Tambah Data Siswa</a>
                    </th>
                </tr>
                
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Action</th>
                </tr>        
                  <tbody>
                    @foreach ($siswa as $k => $item)
                    <tr>
                      <th scope="row">{{ $k+1 }}</th>
                      <td>{{ $item->nama }}</td>
                      <td>{{ $item->nisn }}</td>                      
                      <td>{{ $item->jenis_kelamin }}</td>
                      <td>{{ $item->alamat }}</td>
                      <td>
                        <a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-sm btn-primary mr-2 mb-2">
                            Edit
                        </a>
                        <form action="{{ route('siswa.destroy', $item->id) }}" method="post" style="display:inline;">
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
  
        </div>
    </div>
</div>
     
@endsection
