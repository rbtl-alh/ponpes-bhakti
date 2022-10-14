@extends('admin.layout')

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

@section('title', '| Tambah Data Ustadz')

<style>
  .hide {
    display: none;
  }
  .import {
    display: none;
  }
</style>


@section('content')

<div class="container-fluid">
    <div class="row pt-4">
      <div class="col col-lg-8 col-md-8">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tambah Data Ustadz</h3>
            <div class="card-tools">
              <a href="{{ route('ustadz.index') }}" class="btn btn-sm btn-danger">
                Tutup
              </a>
            </div>
            <br><br>
            <div>
              <h6 style="font-weight:bolder">Silahkan pilih untuk menambah data</h6>
              {{-- pilih radio button --}}
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" onclick="show1()">
                <label class="form-check-label" for="inlineRadio1">Import File</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" onclick="show2()">
                <label class="form-check-label" for="inlineRadio2">Isi Form</label>
              </div>
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
            <form action="{{ route('ustadz.store') }}" method='POST'>
            @csrf
              <div class="hide" id="div1">
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nip" name="nip">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mapel" class="col-sm-3 col-form-label">Mata Pelajaran</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="mapel" name="mapel">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tanggal_lahir" placeholder="YYYY-MM-DD" name="tanggal_lahir">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-warning">Reset</button>
                </div>
              </div>
            </form>

            <div class="import" id="div2">
              <form action="{{ route('ustadz.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Data Ustadz</button>
            </form>
            </div>
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
    function show1(){
      document.getElementById('div1').style.display ='none';
      document.getElementById('div2').style.display ='block';
    }
    function show2(){
      document.getElementById('div1').style.display = 'block';
      document.getElementById('div2').style.display = 'none';
    }
</script>
    
@endsection