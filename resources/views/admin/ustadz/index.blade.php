@extends('admin.layout')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

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
            <form action="{{ route('ustadz.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Data Ustadz</button>
            </form>
  
            <table class="table table-bordered mt-3">
                <tr>
                    <th colspan="3">
                        Data Ustadz
                        <a class="btn btn-md btn-warning float-end" href="{{ route('ustadz.export') }}">Export Data Ustadz</a>
                        <a class="btn btn-md btn-success float-end mx-3" href="{{ route('ustadz.create') }}">Tambah Data Ustadz</a>
                    </th>
                </tr>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Mata Pelajaran</th>
                </tr>
                @foreach($data as $k => $item)
                <tr>
                    <td>{{ $k+1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->mapel }}</td>
                </tr>
                @endforeach
            </table>
  
        </div>
    </div>
</div>
     
@endsection
