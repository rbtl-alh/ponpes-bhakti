@extends('admin.layout1')

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

@section('title', '| Edit Data Ustadzah')

@section('content')

<div class="container-fluid">
    <div class="row pt-4">
      <div class="col col-lg-8 col-md-8">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Data Ustadzah</h3>
            <div class="card-tools">
              <a href="{{ route('ustadzah.index') }}" class="btn btn-sm btn-danger">
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
            <form action="{{ route('ustadzah.update', $itemustadzah->id) }}" method='POST'>
              @csrf
              {{ method_field('patch') }}
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $itemustadzah->nama }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nip" name="nip" value="{{ $itemustadzah->nip }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mapel" class="col-sm-3 col-form-label">Mata Pelajaran</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="mapel" name="mapel" value="{{ $itemustadzah->mapel }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $itemustadzah->tempat_lahir }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tanggal_lahir" placeholder="YYYY-MM-DD" name="tanggal_lahir" value="{{ $itemustadzah->tanggal_lahir }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $itemustadzah->alamat }}">
                    </div>
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
    $(document).ready(function(){
      var date_input=$('input[name="tanggal_lahir"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy-mm-dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
    
@endsection